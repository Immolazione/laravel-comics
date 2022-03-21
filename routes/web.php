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
    $books = config('comics');
    $comics = [
        'Characters',
        'Comics',
        'Movies',
        'Tv',
        'Games',
        'Videos',
        'News',
    ];
    $shops = [
        'Shop DC',
        'Shop DC Collectibles',
    ];
    $dcs = [
        "Terms of Use",
        "Privacy policy",
        "Add Choise",
        "Advertising",
        "Jobs",
        "Subscription",
        "Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop help",
        "Contact Us",
    ];
    $sites = ["DC", "MAD Megazine", "DC Universe", "DC Power Visa"];
    return view('home', compact('books', 'comics', 'shops', 'dcs', 'sites'));
})->name('home');

Route::get('/comic/{id}', function ($id) {
    $books = config('comics');
    $book = $books[$id];

    $comics = [
        'Characters',
        'Comics',
        'Movies',
        'Tv',
        'Games',
        'Videos',
        'News',
    ];
    $shops = [
        'Shop DC',
        'Shop DC Collectibles',
    ];
    $dcs = [
        "Terms of Use",
        "Privacy policy",
        "Add Choise",
        "Advertising",
        "Jobs",
        "Subscription",
        "Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop help",
        "Contact Us",
    ];
    $sites = ["DC", "MAD Megazine", "DC Universe", "DC Power Visa"];

    return view('comic', compact('books', 'comics', 'shops', 'dcs', 'sites', 'book'));
})->name('comic');


Route::get('/characters', function () {
    $books = config('comics');
    $comics = [
        'Characters',
        'Comics',
        'Movies',
        'Tv',
        'Games',
        'Videos',
        'News',
    ];
    $shops = [
        'Shop DC',
        'Shop DC Collectibles',
    ];
    $dcs = [
        "Terms of Use",
        "Privacy policy",
        "Add Choise",
        "Advertising",
        "Jobs",
        "Subscription",
        "Workshops",
        "CPSC Certificates",
        "Ratings",
        "Shop help",
        "Contact Us",
    ];
    $sites = ["DC", "MAD Megazine", "DC Universe", "DC Power Visa"];
    return view('characters', compact('books', 'comics', 'shops', 'dcs', 'sites'));
})->name('characters');
