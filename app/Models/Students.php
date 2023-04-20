<?php

namespace App\Models;


class Students {

    public static function all() {

      $students =
        [
        [
            'id' => 1,
            'name' => 'osama mostafa'
           ],
           [
            'id' => 2,
            'name' => ' Fawzey',
           ],
           [
            'id' => 3,
            'name' => 'Marwan ',

           ],
           [
            'id' => 4,
            'name' => ' Ahmed',

           ],
           [
            'id' => 5,
            'name' => 'Waled '

           ],
           [
            'id' => 6,
            'name' => ' Ibrahem',

           ],
           [
            'id' => 7,
            'name' => 'Fathey ',

           ],
           [
            'id' => 8,
            'name' => ' Waled'

           ],
           [
            'id' => 9,
            'name' => 'Nour '

           ],
           [
            'id' => 10,
            'name' => ' Shawkey'
           ]
           ];

   return $students;

    }



}
