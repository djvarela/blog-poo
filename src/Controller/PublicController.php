<?php

namespace App\Controller;

class PublicController
{


    public static function index()
    {

      return [
        'view' =>  VIEW('public','index'),
        'info' => "<p>info</p>"
      ];
    }

    public static function post($url)
    {


      return[];



    }



    //
}
