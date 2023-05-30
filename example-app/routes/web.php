<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
//
//Route::get('/', function () {
////    $files = \Illuminate\Support\Facades\File::files(resource_path("posts"));
////    $post = [];
////    foreach ($files as $file) {
////        $doc = YamlFrontMatter::parse($file);
////
////        $posts[] = new post(
////            $doc->matter("title"),
////            $doc->body(),
////            $doc->matter("date"),
////        );
////    }
//    return view('posts', [
//       'posts' => ['<h1>welcom !!!!</h1>','3333']
//    ]);
//}
//
////    return array_map(function ($file){
////        $docs[]=YamlFrontMatter::parse($file);
////    },$files);
//
////    $object= YamlFrontMatter::parseFile(resource_path("posts/my-first-post.html"));
////    ddd($object);
////    return view('posts',[
////        'posts'=>Post::all()
////   ]);
//    );
//
//Route::get('posts/{post}', function ($slug) {
//
//
//
//
////$path= __DIR__."/../resources/posts/{$slug}.html";
////
//////    if(!file_exists($path)){
//////          return redirect('/');
//////    }
//////
//////     $post= cache()->remember('yusef.$slug',5,function() use ($path){
//////         var_dump('yausoo askdjh asjh');
//////        return file_get_contents($path);
//////    });
//
////      return file_get_contents($path);
////   });
////$post= file_get_contents ($path);

    return view('post',[
        'post'=> Post::find($slug)
    ]);
}) ->where('post','[A-z_/-]+') ;
