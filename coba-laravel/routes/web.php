<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Hafizh Faiz Fadhlurrahman",
        "email" => "hafizhfaiz11@gmail.com",
        "image" => "Hafizh.png"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [[
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman  
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [[
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
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }


    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});