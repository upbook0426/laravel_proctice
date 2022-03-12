<?php

use Illuminate\Http\Request;
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

//ダッシュボード
Route::get('/test', 'TestController@index');

//ユーザー側
Route::prefix('{lang}')->where(['lang' => 'ja|en'])->group(function() {
    Route::get('demo/{param?}', function(){
        return view ('demo');
    });
});

// 404 Not Found
Route::fallback(function(Request $request){
    $route = Route::getCurrentRoute();

    // WEB側画面
    if( empty($route->getPrefix()) ){
        $fallback = $route->parameter('fallbackPlaceholder');

        // 言語用Prefixが存在しない場合、言語を設定してリダイレクトする
        if( $fallback === null || (strpos($fallback, 'ja') === false && strpos($fallback, 'en') === false) ){
            $path = $request->getPathInfo();
            return redirect('/ja'.$path);
        }
    }
    return abort(404);
});
