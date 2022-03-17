<?php

namespace MicroweberPackages\Template\NewWorld\tests\Browser\Components;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Component as BaseComponent;
use MicroweberPackages\Page\Models\Page;

class NewWorldShopProductLinksScraper extends BaseComponent
{
    /**
     * Get the root selector for the component.
     *
     * @return string
     */
    public function selector()
    {
        return '.module-shop-products';
    }

    /**
     * Assert that the browser page contains the component.
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        // $browser->assertVisible($this->selector());
    }

    /**
     * Get the element shortcuts for the component.
     *
     * @return array
     */
    public function elements()
    {
        return [];
    }

    public function scrapLinks(Browser $browser)
    {
        $findShop = Page::where('is_shop', 1)->first();

        $browser->visit($findShop->link());
        $browser->waitForText('Shop');
        $browser->pause(3000);

        $currencySymbol = get_currency_symbol();

        $productLinksFromShop = $browser->script("

                var links = [];
                $('.product').each(function(index) {

                    var product = {};
                    product.link = $('.product').eq(index).find('a').attr('href');
                    product.title = $('.product').eq(index).find('.heading-holder').text().trim();

                    var scrapedPrice = $('.product').eq(index).find('.price').text().trim();
                    scrapedPrice = scrapedPrice.replace('$currencySymbol', '');
                    scrapedPrice = scrapedPrice.replace(' ', '');
                    product.price = scrapedPrice;

                    product.content_id = $('.product').eq(index).find('[name=\"content_id\"]').val();
                    links.push(product);
                });

                return links;
            ");

        return $productLinksFromShop;
    }
}
