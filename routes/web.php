<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $me = [
        "name" => "Printfrom",
        "surname" => "Basicroute ✨",
        "age" => 9999,
    ];
    return view('home', $me );
});

Route::get('/1', function() {   
    return view('firstroute');
});

Route::get('/2', function(){
    $data=[
        "coding"=>[
            [
                "nome"=>"Laravel",
                "link"=>"https://laravel.com/",
                "img"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png",
            ],
            [
                "nome"=>"MySQL",
                "link"=>"https://www.mysql.com/it/",
                "img"=>"https://www.geekandjob.com/uploads/wiki/eceb15684d4183c66f73c1a9bb777eef708b2b66.png",  
            ],
            [
                "nome"=>"Php",
                "link"=>"https://www.php.net/",
                "img"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/260px-PHP-logo.svg.png",  
            ]
        ],
    ];
    return view('secondroute', $data);
})



?>