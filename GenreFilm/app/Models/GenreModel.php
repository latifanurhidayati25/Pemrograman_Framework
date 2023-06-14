<?php
namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{

    protected $table ='genre';
    protected $primaryKey ='id';
    protected $useAutoIncrement = true;
    protected $allowField =[];

public function getAllData(){
    return $this -> findAll();
    }
    }
    