<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// ROUTE PARAMETRE

// Route::get('/about/{id}/{name}', function ($id,$name) {
//     return "this is number".$id. " my name".$name;
// });


// Route::get('admin/posts/example',array('as'=>'admin.home',function(){
//     $url=route('admin.home');
//     return "this is my url now =>".$url;

// }));



// Route::get('/', function () {
//     return view('home.index',[]);
// })->name('home.index');

// Route::get('/contact', function () {
//     return view('home.contact');
// })->name('home.contact');

// Route::get('/', [HomeController::class, 'home'])
//     ->name('home.index');

// Route::get('/contact', [HomeController::class, 'contact'])
//     ->name('home.contact');

//OPTIONALE ROUTE PARAMETRE
// Route::get('/get',function(){
//     return '<h1>HELLO THIS IS GET PAGE</h1>';
// });
// Route::get('/',function(){
//     return view('home.index',[]);
// })->name('home.index');



// Route::get('/post/{days_ago?}', function ($day=20) {
//     return 'post from '.$day."day ago";
// })->name("home.post");
// Route::get('/{name?}/{id?}',function($id=null,$age=null){
//     return '<h1>My name is</h1>  '.$id.' My age is '.$age;

// });


// Route::get('/posts/{id}', function ($id) {
//     $posts = [
//         1 => [
//             'title' => 'Intro to Laravel',
//             'content' => 'This is a short intro to Laravel',
//             'is_true'=> true,
//             'has_comment'=>true
//         ],
//         2 => [
//             'title' => 'Intro to PHP',
//             'content' => 'This is a short intro to PHP',
//             'is_true'=> false,
//             'has_comment'=>false
//         ],
//         3 => [
//             'title' => 'Intro to sql',
//             'content' => 'This is a short intro to sql',
//             'is_true'=> true,
//             'has_comment'=>true
//         ]
//     ];



/*+>Simple view rendering route


Route::view('/','welcome');

*/


$posts = [
    1 => [
        'title' => 'Intro to Laravel',
        'content' => 'This is a short intro to Laravel',
        'is_true' => true,
        'has_comment' => true
    ],
    2 => [
        'title' => 'Intro to PHP',
        'content' => 'This is a short intro to PHP',
        'is_true' => false,
        'has_comment' => false
    ],
    3 => [
        'title' => 'Intro to sql',
        'content' => 'This is a short intro to sql',
        'is_true' => true,
        'has_comment' => true
    ],
    4 => [
        'title' => 'Intro to No sql',
        'content' => 'This is a short intro to sql',
        'is_true' => true,
        'has_comment' => true
    ],
    5 => [
        'title' => 'Intro to My sql',
        'content' => 'This is a short intro to sql',
        'is_true' => true,
        'has_comment' => true
    ],
    6 => [
        'title' => 'Intro to mongo',
        'content' => 'This is a short intro to sql',
        'is_true' => true,
        'has_comment' => true
    ]
];

Route::get('/',function(){
    return view('home.index');
})->name('home.index');
// Route::get('/posts', function () use ($posts) {

// //     // dd(request()->all());
// //     // dd((int)request()->input('page',8)); /* input request :?limit=10&page=7*/
//     return view('posts.index', ['posts' => $posts]);
// })->name("posts");
// Route::get('/posts/{id}', function ($id) use ($posts) {
//     abort_if(!isset($posts[$id]), 404);
//     return view('posts.show', ['post' => $posts[$id]]);
// })->name("posts.show");

Route::get('/', [HomeController::class, 'home']);
// Route::get('/about', AboutController::class);
Route::resource('posts',PostsController::class)->only(['index','show','store','create']);
Route::resource('posts',PostsController::class);


$data = array(
    'title' => 'post2 title',
    'content' => 'post2 body'
    );
// /* Groupin Routes*/
// Route::prefix('/fun')->name('fun.name')->group(function () use ($posts) {


//     /*create a response header and cookies*/
//     Route::get('responses', function () use ($posts) {
//         return response($posts, 200)
//             ->header('Content-Type', 'application/json')
//             ->cookie('MY_COOKIE', 'amine', 3600);
//     })->name("responses");


//     /*create redirect responses */
//     Route::get('redirect', function () {
//         return redirect('/contact');
//     })->name("redirect");
//     Route::get('back', function () {
//         return back();
//     })->name("back");
//     Route::get('named-route', function () {
//         return redirect()->route('posts.show', ['id' => 2]);
//     })->name("named-route");

//     Route::get('away', function () {
//         return redirect()->away('https://google.com');
//     })->name("away");


//     /*returning json*/
//     Route::get('json', function () use ($posts) {
//         return response()->json($posts);
//     })->name("json");

//     /*returning file download*/
//     Route::get('download', function () {
//         return response()->download(public_path('/daniel.jpg'), 'face.jpg');
//     })->name("download");
// });


/* resource controller*/

// Route::resource('products', ProductController::class)->only(['index','show','create','store']);
// Route::view('/products','products.layout');
// Route::view('/products','products.create');
// Route::get('/', [ProductController::class, 'index']);




// Route::resource('products',PostsController::class)->only(['index','show','create','store']);
// Route::view('/products','products.layout');
// Route::view('/products','products.create');
// Route::get('/', [ProductController::class, 'index']);
    

/*--------------------------------------------------------------------
Route::resource('post',PostsController::class)->except(['index','show']);

--------------------------------------------------------------------*/
