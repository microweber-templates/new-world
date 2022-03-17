<?php

namespace MicroweberPackages\Template\NewWorld\tests\Browser;

use Illuminate\Support\Facades\Auth;
use Laravel\Dusk\Browser;
use MicroweberPackages\Page\Models\Page;
use MicroweberPackages\Template\NewWorld\tests\Browser\Components\NewWorldShopProductLinksScraper;
use MicroweberPackages\User\Models\User;
use Tests\Browser\Components\AdminLogin;
use Tests\Browser\Components\ChekForJavascriptErrors;
use Tests\DuskTestCase;

class NewWorldMultilanguageShopTest extends DuskTestCase
{
    public $template_name = 'new-world';

    public function testShopVisit()
    {
        $this->browse(function (Browser $browser) {

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

            }

        });

    }

}
