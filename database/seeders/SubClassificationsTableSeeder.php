<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubClassificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_classifications')->delete();
        
        \DB::table('sub_classifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'classification_id' => '1',
                'title' => 'IMPRESSIVE *1848 CLASSIC OAK NATURAL',
                'slung' => 'IMPRESSIVE-*1848-CLASSIC-OAK-NATURAL',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'classification_id' => '1',
                'title' => 'IMPRESSIVE *1849 CLASSIC OAK BROWN',
                'slung' => 'IMPRESSIVE-*1849-CLASSIC-OAK-BROWN',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'classification_id' => '1',
                'title' => 'IMPRESSIVE *1857 SAW CUT OAK BEIGE',
                'slung' => 'IMPRESSIVE-1857-SAW-CUT-OAK-BEIGE',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'classification_id' => '2',
                'title' => 'CLM CLASSIC * 1290 BLEACHED WHITE OAK',
                'slung' => 'CLM-CLASSIC-1290-BLEACHED- WHITE-OAK',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'classification_id' => '2',
                'title' => 'CLM CLASSIC 2127 LAPACHO',
                'slung' => 'CLM-CLASSIC-2127-LAPACHO',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'classification_id' => '2',
                'title' => 'CLM CLASSIC 1659 MOONLIGHT',
                'slung' => 'CLM-CLASSIC-1659-MOONLIGHT',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'classification_id' => '3',
                'title' => 'CR CREO *3182 VIRGINIA OAK NATURAL',
                'slung' => 'cr-creo-3182-virginia-oak-natural',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'classification_id' => '4',
                'title' => 'LOC LOC-FLOOR * 70 MERBAU',
                'slung' => 'loc-loc-floor-70-merbau',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'classification_id' => '4',
                'title' => 'LOC LOC-FLOOR * 333 SMOOTH BROWN OAK',
                'slung' => 'loc-loc-floor-333-smooth-brown-oak',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'classification_id' => '4',
                'title' => 'LOC LOC-FLOOR *268 AUTHENTIC OAK SILVER GREY',
                'slung' => 'loc-loc-floor-268-authentic-oak-silver-grey',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'classification_id' => '4',
                'title' => 'LOC LOC-FLOOR *272 RUSTIC OAK NATURAL BLONDE',
                'slung' => 'loc-loc-floor-272-rustic-oak-natural-blonde',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'classification_id' => '4',
                'title' => 'LOC LOC-FLOOR *374 CLASSIC OAK NATURAL MAT',
                'slung' => 'loc-loc-floor-374-classic-oak-natural-mat',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'classification_id' => '4',
                'title' => 'LOC LOC-FLOOR *290 COUNTRY OAK VERMETTE',
                'slung' => 'loc-loc-floor-290-country-oak-vermette',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'classification_id' => '4',
                'title' => 'LOC LOC-FLOOR *368 PEBBLE ELM',
                'slung' => 'loc-loc-floor-368-pebble-elm',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'classification_id' => '4',
                'title' => 'LOC LOC-FLOOR *259 AUTHENTIC OAK ASH WHITE',
                'slung' => 'loc-loc-floor-259-authentic-oak-ash-white',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'classification_id' => '4',
                'title' => 'LOC LOC-FLOOR *275 AMERICAN WALNUT',
                'slung' => 'loc-loc-floor-275-american-walnut',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'classification_id' => '4',
                'title' => 'LOC LOC-FLOOR *369 MAGNOLIA ELM',
                'slung' => 'loc-loc-floor-369-magnolia-elm',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'classification_id' => '5',
                'title' => 'ENDURANCE *017 GREY',
                'slung' => 'endurance-017-grey',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'classification_id' => '5',
                'title' => 'ENDURANCE *040  Burley oak',
                'slung' => 'endurance-040-burley-oak',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'classification_id' => '5',
                'title' => 'ENDURANCE *902 CRACK LIGHT BROWN',
                'slung' => 'endurance-902-crack-light-brown',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'classification_id' => '5',
                'title' => 'ENDURANCE *316 OAK BLONDE',
                'slung' => 'endurance-316-oak-blonde',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'classification_id' => '5',
                'title' => 'ENDURANCE *325 BORDEAUX',
                'slung' => 'endurance-325-bordeaux',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'classification_id' => '5',
                'title' => 'ENDURANCE *64 CAYOTE OAK',
                'slung' => 'endurance-64-cayote-oak',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'classification_id' => '5',
                'title' => 'ENDURANCE *583 NATURAL VARNISHED OAK',
                'slung' => 'endurance-583-natural-varnished-oak',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'classification_id' => '5',
                'title' => 'ENDURANCE *544 SELECT WALNUT',
                'slung' => 'endurance-544-select-walnut',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'classification_id' => '5',
                'title' => 'ENDURANCE *619 WHITE OILED OAK',
                'slung' => 'endurance-619-white-oiled-oak',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'classification_id' => '5',
                'title' => 'ENDURANCE *086 VENETIAN OAK',
                'slung' => 'endurance-086-venetian-oak',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'classification_id' => NULL,
                'title' => 'ENDURANCE 328 BARN OAK',
                'slung' => 'endurance-328-barn-oak',
                'image' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}