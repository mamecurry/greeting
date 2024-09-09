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
    return view('welcome');
});
Route::get('/comments/night', function () {
    return '<h1>夜のあいさつ</h1>
    <h2>おやすみ</h2>';
});

Route::get('/comments/freeword/{msg}', function($msg) {
    return view('message.word', ['msg' => $msg]);
});

Route::get('/comments/random/{msg}', function($msg) {
    return view('message.word', ['msg' => $msg]);
});

Route::get('/comments/random', function () {
    // ランダムなメッセージの配列
    $greetings = [
        '<h1>ランダムなメッセージ</h1><h2>おやすみ</h2>',
        '<h1>ランダムなメッセージ</h1><h2>良い夢を</h2>',
        '<h1>ランダムなメッセージ</h1><h2>おやすみなさい</h2>',
        '<h1>ランダムなメッセージ</h1><h2>また明日</h2>',
    ];

    // 配列からランダムに1つ選ぶ
    $randomGreeting = $greetings[array_rand($greetings)];

    // ランダムな挨拶を返す
    return $randomGreeting;
});
