<?php

namespace MicroweberPackages\Template\NewWorld\tests\Browser;

use Laravel\Dusk\Browser;
use MicroweberPackages\Template\NewWorld\tests\Browser\Components\NewWorldShopProductLinksScraper;
use Tests\Browser\Components\AdminContentMultilanguage;
use Tests\Browser\Components\AdminLogin;
use Tests\Browser\Components\AdminTemplate;
use Tests\Browser\Components\ChekForJavascriptErrors;
use Tests\Browser\Components\LiveEditSwitchLanguage;
use Tests\DuskTestCaseMultilanguage;

class NewWorldMultilanguageShopTest extends DuskTestCaseMultilanguage
{
    public $template_name = 'new-world';

    public function testShopVisit()
    {
        $this->browse(function (Browser $browser) {


            $browser->within(new ChekForJavascriptErrors(), function ($browser) {
                $browser->validate();
            });


            // Activate multilanguage
            $browser->within(new AdminLogin(), function ($browser) {
                $browser->fillForm();
            });

            $template_name = $this->template_name;
            $browser->within(new AdminTemplate(), function ($browser) use ($template_name) {
                $browser->changeTemplate($template_name);
            });

            $browser->within(new AdminContentMultilanguage(), function ($browser) {
                $browser->addLanguage('en_US');
                $browser->addLanguage('bg_BG');
            });


//            $linkScraper = new NewWorldShopProductLinksScraper();
//            $browser->within($linkScraper, function ($browser) use ($linkScraper) {
//                $browser->scrapLinks();
//            });
$allProducts = get_products('no_limit=1');
            foreach ($allProducts as $product) {
                $browser->visit(content_link($product['id']));
                $browser->pause(1000);
                $browser->waitForText($product['title']);
                $browser->assertSee($product['title']);

                $browser->within(new ChekForJavascriptErrors(), function ($browser) {
                    $browser->validate();
                });
            }


            // Switch back to Bulgarian
            $browser->pause(2000);
            $browser->within(new LiveEditSwitchLanguage(), function ($browser) {
                $browser->switchLanguage('bg_BG');
            });


            foreach ($allProducts as $product) {
                $browser->visit(content_link($product['id']));
                $browser->pause(1000);
                $browser->waitForText($product['title']);
                $browser->assertSee($product['title']);
           //     $browser->assertSee($product['price']);

                $browser->within(new ChekForJavascriptErrors(), function ($browser) {
                    $browser->validate();
                });
            }


        });

    }

}
