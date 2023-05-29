<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [[
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Elit tempor Lorem lmollit tempor enim esse laboris exercitation minim pariatur Lorem. Aliqua incididunt cupidatat velit eu labore laborum. Exercitation est ipsum et adipisicing veniam aliquip.'
        ],
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Elit tempor Lorem mollit tempor enim esse laboris exercitation minim pariatur Lorem. Aliqua incididunt cupidatat velit eu labore laborum. Exercitation est ipsum et adipisicing veniam aliquip.'
        ]
        
        ];
    }

    
    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }


}
