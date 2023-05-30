<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use SebastianBergmann\CodeCoverage\Report\Html\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public string $title;



    public string $body;

    public string $date;


    public function __construct($title,$body,$date)
    {
        $this->title=$title;

        $this->body=$body;
        $this->date=$date;
    }


    public static function all()
    {

      return cache()->rememberForever("posts.all",function () {
          return collect(\Illuminate\Support\Facades\File::files(resource_path("posts")))->map(function ($file){
              $doc = YamlFrontMatter::parseFile($file);

              return new post(
                  $doc->matter("title"),
                  $doc->body(),
                  $doc->matter("date"),
              );

          })->sortBy("date");
      });
        }

//        array_map(function ($file){
//            return YamlFrontMatter::parseFile($file);
//////
////            $posts[] = new post(
////                $doc->matter("title"),
//                $doc->body(),
//                $doc->matter("date"),
//            );

//        },$files);
//        $post = [];
//        foreach ($files as $file) {
//            $doc = YamlFrontMatter::parse($file);
//
//            $posts[] = new post(
//                $doc->matter("title"),
//                $doc->body(),
//                $doc->matter("date"),
//            );
//        }
//        return $posts;



//      $files=\Illuminate\Support\Facades\File::files(resource_path("posts"));
//      return array_map(function ($file){
//          return $file -> getContents();
//      },$files);
//        $files = File::files(resource_path("posts"));


//        return array_map(function ($file){
//            $object = YamlFrontMatter::parseFile($file);
//            return $object->body();
//        },$files);




//        $posts = [];
//        foreach ($files as $file) {
//            $object = YamlFrontMatter::parseFile($file);
////
//            $posts [] = new post(
//                $object->matter("title"),
//                $object->body(),
//                $object->matter("date"),
//            );
//        }
//        return $posts;



//        $files= \Illuminate\Support\Facades\File::files(resource_path("posts"));
//        return array_map(function ($file){
//
//            $object= YamlFrontMatter::parseFile($file);
//           return $object->title;
//
//        },$files);
//

    public static function find($slug) {
        return static ::all()->fristWhere('slug',$slug);
//        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
//            throw new ModelNotFoundException();
//        }
//
//        return cache()->remember('yusef.{$slug}', 5, function () use ($path) {
//            return file_get_contents($path);
//        });


    }

}
