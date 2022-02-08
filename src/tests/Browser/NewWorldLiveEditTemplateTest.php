<?php

namespace MicroweberPackages\Template\NewWorld\tests\Browser;


use Illuminate\Support\Facades\Auth;
use Laravel\Dusk\Browser;
use MicroweberPackages\App\Http\Controllers\FrontendController;
use MicroweberPackages\Page\Models\Page;
use MicroweberPackages\User\Models\User;
use Tests\Browser\Components\AdminLogin;
use Tests\Browser\Components\AdminTemplate;
use Tests\Browser\Components\ChekForJavascriptErrors;
use Tests\Browser\Components\LiveEditModuleAdd;
use Tests\DuskTestCase;

class NewWorldLiveEditTemplateTest extends DuskTestCase
{
    public $template_name = 'new-world';

    public function testHomepageCreate()
    {
        $user = User::where('is_admin', '=', '1')->first();
        Auth::login($user);

        $pageTitle = 'Homepage'.uniqid();

        $newCleanPage = save_content([
            'subtype' => 'static',
            'content_type' => 'page',
            'layout_file' => 'index.php',
            'title' => $pageTitle,
            'active_site_template'=> $this->template_name,
            'is_active' => 1,
        ]);

        $findPage = Page::whereId($newCleanPage)->first();
        $this->assertEquals($findPage->id, $newCleanPage);




        $testUrl = content_link($findPage->id);

        $this->browse(function (Browser $browser) use ($testUrl,$findPage) {

            $browser->within(new AdminLogin(), function ($browser) {
                $browser->fillForm();
            });

            $browser->visit($testUrl . '?editmode=y');
            $browser->pause(1000);
            $browser->waitForText('template of Microweber');

            $checkIds = [
                'header-logo',
                'footer_newsletter',
                'footer_menu',
                'footer_socials',

            ];


            foreach ($checkIds as $checkId) {
                $val = $browser->script("return $('#".$checkId."').attr('parent-module-id')")[0];
                $this->assertEquals($val, $checkId);
            }


            $checkIdAttrs = ['id', 'parent-module-id'];

            foreach ($checkIdAttrs as $checkIdAttr) {

                $expected_modules_number = 12;

                // get modules in the main container and check if they are in the right order
                $val = $browser->script("return $('.main-content').children('div.module').map(function() { return $(this).attr('" . $checkIdAttr . "'); }).get();")[0];

                for ($i = 0; $i < $expected_modules_number; $i++) {
                    if ($i == 0) {
                        $expected_id = 'module-layouts-' . $findPage->id;

                    } else {
                        $expected_id = 'module-layouts-' . $findPage->id . '--' . $i;
                    }
                    $this->assertEquals($val[$i], $expected_id);
                }
            }
        });

    }

}
