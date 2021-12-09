<?php

namespace tests\Browser;


use Laravel\Dusk\Browser;
use Tests\Browser\Components\AdminLogin;
use Tests\Browser\Components\ChekForJavascriptErrors;
use Tests\Browser\Components\LiveEditModuleAdd;
use Tests\DuskTestCase;

class TemplateTest extends DuskTestCase
{
    public $siteUrl = 'http://127.0.0.1:8000/';

    public function testLiveEditAllModulesDragAndDrop()
    {
        $siteUrl = $this->siteUrl;

        $this->browse(function (Browser $browser) use ($siteUrl) {

            $browser->within(new AdminLogin(), function ($browser) {
                $browser->fillForm();
            });

            $browser->visit($siteUrl . '?editmode=y');
            $browser->pause(4000);
            $browser->visit($siteUrl . 'rand-page-' . time());
            $browser->pause(1000);

            $randClassForDagAndDrop = 'rand-class-' . time();
            $browser->script("$('.edit .container').addClass('$randClassForDagAndDrop')");
            $browser->pause(1000);
            $browser->click('.' . $randClassForDagAndDrop);

            foreach (get_modules('ui=1&installed=1') as $module) {
                $browser->within(new LiveEditModuleAdd(), function ($browser) use ($module) {
                    $browser->addModule($module['name']);
                });
                $browser->within(new ChekForJavascriptErrors(), function ($browser) {
                    $browser->validate();
                });
            }

            $browser->pause(10000);

        });
    }
}
