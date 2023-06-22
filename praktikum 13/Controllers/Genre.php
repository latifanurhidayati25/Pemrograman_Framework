<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\GenreModel;


class Genre extends BaseController
{

    protected $genre;

     //step 3 membuat fungsi construct untuk insasi clas model
     public function __construct()
     {
         //step 4 memanggil properti film
         $this->genre = new GenreModel();
     }
     
     public function index()
     {
         $data['semuagenre'] = $this->genre->getAllData();
         return view("genre/semuagenre", $data);
     
    }

}
