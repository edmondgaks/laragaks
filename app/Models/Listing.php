<?php

Namespace App\Models;
    
class Listing {
    public static function all() {
        return [
            [
                'id'=> '1',
                'title' => 'Book 1',
                'description' => 'Lorem Ipsum description of book 1',
            ],
            [
                'id'=> '2',
                'title' => 'Book 2',
                'description' => 'Lorem Ipsum description of book 2'
            ]
        ];
    }
    public static function find($id) {
        $listings = self::all();
        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}

?>