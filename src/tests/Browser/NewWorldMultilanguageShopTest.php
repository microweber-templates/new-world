<?php

namespace MicroweberPackages\Template\NewWorld\tests\Browser;

use Illuminate\Support\Facades\Auth;
use Laravel\Dusk\Browser;
use MicroweberPackages\Page\Models\Page;
use MicroweberPackages\Template\NewWorld\tests\Browser\Components\NewWorldShopProductLinksScraper;
use MicroweberPackages\User\Models\User;
use Tests\Browser\Components\AdminContentMultilanguage;
use Tests\Browser\Components\AdminLogin;
use Tests\Browser\Components\ChekForJavascriptErrors;
use Tests\Browser\Components\LiveEditSwitchLanguage;
use Tests\DuskTestCase;
use Tests\DuskTestCaseMultilanguage;

class NewWorldMultilanguageShopTest extends DuskTestCaseMultilanguage
{
    public $template_name = 'new-world';

    public function testShopVisit()
    {
        $this->browse(function (Browser $browser) {

            // Activate multilanguage
            $browser->within(new AdminLogin(), function ($browser) {
                $browser->fillForm();
            });

            $browser->within(new AdminContentMultilanguage(), function ($browser) {
                $browser->addLanguage('bg_BG');
                $browser->addLanguage('en_US');
            });

            if (defined('TEMPLATE_DIR') == false) {
                define('TEMPLATE_DIR', templates_path() . $this->template_name . DS);
            }

            app()->template_manager->boot_template();

            $linkScraper = new NewWorldShopProductLinksScraper();
            $browser->within($linkScraper, function ($browser) use ($linkScraper) {
               $browser->scrapLinks();
            });

            foreach ($linkScraper->getLinks() as $product) {
                $browser->visit($product['link']);
                $browser->pause(1000);
                $browser->waitForText($product['title']);
                $browser->assertSee($product['title']);
                $browser->assertSee($product['price']);

                $browser->within(new ChekForJavascriptErrors(), function ($browser) {
                    $browser->validate();
                });
            }


            // Switch back to Bulgarian
            $browser->pause(2000);
            $browser->within(new LiveEditSwitchLanguage(), function ($browser) {
                $browser->switchLanguage('bg_BG');
            });

            $linkScraper = new NewWorldShopProductLinksScraper();
            $browser->within($linkScraper, function ($browser) use ($linkScraper) {
                $browser->scrapLinks();
            });

            foreach ($linkScraper->getLinks() as $product) {
                $browser->visit($product['link']);
                $browser->pause(1000);
                $browser->waitForText($product['title']);
                $browser->assertSee($product['title']);
                $browser->assertSee($product['price']);

                $browser->within(new ChekForJavascriptErrors(), function ($browser) {
                    $browser->validate();
                });
            }


        });

    }

}
