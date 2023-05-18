<?php

namespace DescomMarket\Feeds\Tests\Feature\GoogleMerchant\Services\Products;

use DescomMarket\Feeds\Google\GoogleServiceBuilder;
use DescomMarket\Feeds\Tests\TestCase;
use Google\Service\ShoppingContent\SearchRequest;

class TestTest extends TestCase
{
    public function testA()
    {
/*         config([
            'feeds-google.api.credentials.path' => env('GOOGLE_API_CREDENTIALS_PATH'),
        ]);

        $request = new SearchRequest();

        $request->setQuery(<<<EOF
        SELECT
        product_view.id, product_view.title, product_view.brand,
        product_view.price_micros, product_view.currency_code,
        price_competitiveness.country_code,
        price_competitiveness.benchmark_price_micros,
        price_competitiveness.benchmark_price_currency_code
        FROM PriceCompetitivenessProductView
        EOF);

        // $response = GoogleServiceBuilder::googleMerchant()->reports->search(env('GOOGLE_MERCHANT_ID'), $request);

        // dd($response->getResults()[207]);
        $response = GoogleServiceBuilder::googleMerchant()->productstatuses->listProductstatuses(env('GOOGLE_MERCHANT_ID'));

        dd($response->getResources()[0]); */
    }
}
