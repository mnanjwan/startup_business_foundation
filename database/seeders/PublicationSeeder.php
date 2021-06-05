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
                'poster' => '',
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
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON MAKING POTTERY PRODUCTS IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING MOSQUITO REPELLANT CREAM IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING MOSQUITO REPELLANT CREAM IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF CARBON PAPER IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF CARBON PAPER IN NIGERIA.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF LOW DUST CHALK IN NIGERIA',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF LOW DUST CHALK IN NIGERIA.pdf'
            ],
            -------------------------------------------------------------------------
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF PAPER ENVELOPES',
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF PAPER ENVELOPES.pdf'
            ],
            [
                'publication_category_id' => '2',
                'title' => 'PREFEASIBILITY STUDY ON MANUFACTURING OF PENCILS IN NIGERIA',
                'poster' => '',
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
                'poster' => '',
                'file' => 'PREFEASIBILITY STUDY ON PAINT MANUFACTURING IN NIGERIA.pdf'
            ],
        ];

        foreach ($publications as $publication) {
            \App\Models\Publication::updateOrCreate([
                'title' => $publication['title'],
            ], $publication);
        }
    }
}
