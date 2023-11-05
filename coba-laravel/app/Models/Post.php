<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Hafizh Faiz",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quae possimus laborum temporibus eum veritatis accusantium nobis, ipsa facilis fuga ducimus similique voluptate aut illum ipsum tempore quisquam, ut rem amet repellat beatae inventore quibusdam. Eum rem quia aut eos laborum deserunt tempore commodi fugiat maxime et totam itaque, sed, quibusdam accusantium, dignissimos adipisci odit vitae sint eaque! Vel modi facilis suscipit non veniam molestias eum adipisci, fuga dolorum quasi expedita culpa iste officia voluptates hic mollitia incidunt? Error, illo!"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Hafizh Faiz",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam quae possimus laborum temporibus eum veritatis accusantium nobis, ipsa facilis fuga ducimus similique voluptate aut illum ipsum tempore quisquam, ut rem amet repellat beatae inventore quibusdam. Eum rem quia aut eos laborum deserunt tempore commodi fugiat maxime et totam itaque, sed, quibusdam accusantium, dignissimos adipisci odit vitae sint eaque! Vel modi facilis suscipit non veniam molestias eum adipisci, fuga dolorum quasi expedita culpa iste officia voluptates hic mollitia incidunt? Error, illo!"
    ]
];

public static function all(){
    return collect(self::$blog_posts);
}

public static function find($slug){
    $posts = static::all();
    return $posts->firstWhere('slug',$slug);
}
}
