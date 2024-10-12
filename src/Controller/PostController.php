<?php

namespace App\Controller;

use App\Model\Post;

class PostController
{


  public static function index($slug)
  {

    $post = new Post;
    $post->slug = $slug;
    $publicaciones = $post->post();



    return [
      'view' =>  VIEW('public', 'post'),
      'css' => '<link rel="stylesheet" href="/src/assets/css/post.css">',
      'data' => $publicaciones[0]
    ];
  }






  //
}
