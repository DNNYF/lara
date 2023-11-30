<?php

namespace App\Models;


class Artikel
{
    private static $blog_artikel = [

        [
            "Judul" => "Tutorial ",
            "Isi" => "Yaudh",
        ]
        ];

        public static function all()
        {
            return self::$blog_artikel;
        }
}
