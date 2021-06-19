<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publications = [
            [
                'publication_category_id' => '2',
                'title' => 'PREFEAIBILITY STUDY ON MANUFACTURING OF POWER INVERTORS IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEAIBILITY STUDY ON MANUFACTURING OF POWER INVERTORS IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY ON SETTING UP A BEAUTY SALOON UNIT IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY ON SETTING UP A BEAUTY SALOON UNIT IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY ON SETTING UP RECYCLING PLASTICS UNIT NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY ON SETTING UP RECYCLING PLASTICS UNIT NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY FOR COLOURED WAX CRAYONS MANUFACTURING',
                'poster' => 'PREFEASIBILITY STUDY FOR COLOURED WAX CRAYONS MANUFACTURING.jpg',
                'file' => 'PREFEASIBILITY STUDY FOR COLOURED WAX CRAYONS MANUFACTURING.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY FOR MAKING ALUMINUM POWDER IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY FOR MAKING ALUMINUM POWDER IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY FOR MAKING RUBBER BALLONS IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY FOR MAKING RUBBER BALLONS IN NIGERIA.pdf'
            ],
            [
                // poster missing
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON COTTON MOSQUITO NETS IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON COTTON MOSQUITO NETS IN NIGERIA.pdf'
            ],
            [
                // poster missing
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON HORN BUTTONS MANUFACTURING UNIT IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON HORN BUTTONS MANUFACTURING UNIT IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MAKING POTTERY PRODUCTS IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON MAKING POTTERY PRODUCTS IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON MAKING POTTERY PRODUCTS IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING MOSQUITO REPELLANT CREAM IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON MANUFACTURING MOSQUITO REPELLANT CREAM IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING MOSQUITO REPELLANT CREAM IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF CARBON PAPER IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF CARBON PAPER IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF CARBON PAPER IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF LOW DUST CHALK IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF LOW DUST CHALK IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF LOW DUST CHALK IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF PAPER ENVELOPES',
                'poster' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF PAPER ENVELOPES.jpg',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF PAPER ENVELOPES.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF PENCILS IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF PENCILS IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF PENCILS IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF SERVIETTES IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF SERVIETTES IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON PAINT MANUFACTURING IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON PAINT MANUFACTURING IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON PAINT MANUFACTURING IN NIGERIA.pdf'
            ],

            // id 2 starts for agro
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY ON  SETTING UP PLANT FOR PRODUCTION OF ACTIVATED CARBON FROM RICE HUSKS',
                'poster' => 'PREFEASIBILITY ON  SETTING UP PLANT FOR PRODUCTION OF ACTIVATED CARBON FROM RICE HUSKS.jpg',
                'file' => 'PREFEASIBILITY ON  SETTING UP PLANT FOR PRODUCTION OF ACTIVATED CARBON FROM RICE HUSKS.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON ACTIVATED CARBON FROM COCONUT SHELL IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON ACTIVATED CARBON FROM COCONUT SHELL IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON ACTIVATED CARBON FROM COCONUT SHELL IN NIGERIA recent.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON BEEHIVES (APICULTURE) IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON BEEHIVES (APICULTURE) IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON BEEHIVES (APICULTURE) IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON CATTLE RAISING IN SOUTHERN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON CATTLE RAISING IN SOUTHERN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON CATTLE RAISING IN SOUTHERN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON DEHYDRATED FRUITS AND VEGETABLES IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON DEHYDRATED FRUITS AND VEGETABLES IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON DEHYDRATED FRUITS AND VEGETABLES IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON MAKING CURRY POWDER IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON MAKING CURRY POWDER IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON MAKING CURRY POWDER IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING CORNFLAKES IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON MANUFACTURING CORNFLAKES IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING CORNFLAKES IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF COCONUT CREAM IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF COCONUT CREAM IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF COCONUT CREAM IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON PROCESSING COCOANUTS (DESICCATED COCONUTS) IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON PROCESSING COCOANUTS (DESICCATED COCONUTS) IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON PROCESSING COCOANUTS (DESICCATED COCONUTS) IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON SETTING UP BAKING BISCUITS IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON SETTING UP BAKING BISCUITS IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON SETTING UP BAKING BISCUITS IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON SETTING UP CREAM SEPARATION PLANT IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON SETTING UP CREAM SEPARATION PLANT IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON SETTING UP CREAM SEPARATION PLANT IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON SETTING UP DECORTICATED CASHEWNUT PROCESSING PLANT IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON SETTING UP DECORTICATED CASHEWNUT PROCESSING PLANT IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON SETTING UP DECORTICATED CASHEWNUT PROCESSING PLANT IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON SETTING UP ESSENTIAL OIL PRODUCTION IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON SETTING UP ESSENTIAL OIL PRODUCTION IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON SETTING UP FRUIT SALAD PROCESSING AND VENDING IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON SETTING UP FRUIT SALAD PROCESSING AND VENDING IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON SETTING UP ICE CREAM PRODUCTION PLANT IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON SETTING UP ICE CREAM PRODUCTION PLANT IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON SETTING UP ICE CREAM PRODUCTION PLANT IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON SETTING UP MAKING POWDER MILK IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON SETTING UP MAKING POWDER MILK IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON SETTING UP PEANUT PASTE PROCESSING PLANT IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON SETTING UP PEANUT PASTE PROCESSING PLANT IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON SETTING UP PEANUT PASTE PROCESSING PLANT IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON SETTING UP PLANT FOR DRYING FRUITS BY OSMO-AIR DEHYDRATION IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON SETTING UP PLANT FOR DRYING FRUITS BY OSMO-AIR DEHYDRATION IN NIGERIA.jpg',
                'file' => 'PREFEASIBILITY STUDY ON SETTING UP PLANT FOR DRYING FRUITS BY OSMO-AIR DEHYDRATION IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIBILITY STUDY ON TOMATOE GREEN HOUSE IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON TOMATOE GREEN HOUSE IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASIIBILITY STUDY ON POULTRY FEEDS IN NIGERIA',
                'poster' => 'PREFEASIBILITY STUDY ON MAKING POTTERY PRODUCTS IN NIGERIA.jpg',
                'file' => 'PREFEASIIBILITY STUDY ON POULTRY FEEDS IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFEASILITY STUDY ON BIO FERTILIZERS MANUFACTURING IN NIGERIA',
                'poster' => 'PREFEASILITY STUDY ON BIO FERTILIZERS MANUFACTURING IN NIGERIA.jpg',
                'file' => 'PREFEASILITY STUDY ON BIO FERTILIZERS MANUFACTURING IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'PREFESASIBILITY STUDY ON SETTING UP ANIMAL FEED PRODUCTION MILL IN NIGERIA',
                'poster' => 'PREFESASIBILITY STUDY ON SETTING UP ANIMAL FEED PRODUCTION MILL IN NIGERIA.jpg',
                'file' => 'PREFESASIBILITY STUDY ON SETTING UP ANIMAL FEED PRODUCTION MILL IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'SETTING UP A POULTRY PROCCESSING PLANT IN NIGERIA',
                'poster' => '',
                'file' => 'SETTING UP A POULTRY PROCCESSING PLANT IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '1',
                'title' => 'SETTING UP FRUIT SQUASHING PLANT IN NIGERIA',
                'poster' => 'SETTING UP FRUIT SQUASHING PLANT IN NIGERIA.jpg',
                'file' => 'SETTING UP FRUIT SQUASHING PLANT IN NIGERIA.pdf'
            ],
        ];

        foreach ($publications as $publication) {
            \App\Models\Publication::updateOrCreate([
                'title' => $publication['title'],
            ], $publication);
        }
    }
}
