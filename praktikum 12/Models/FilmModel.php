<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table    = 'film';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true ;
    protected $allowFields = [];

  public function getFilm() 
  {
    $data =[
        [
            "nama_film" => "Sewu Dino",
            "genre"     => "horor",
            "duration"  => " 1 jam 43 menit"
        ],
        [
            "nama_film" => "Dedemit",
            "genre"     => "horor",
            "duration"  => " 1 jam 50 menit"
        ],
        [
            "nama_film" => "Angel",
            "genre"     => "drama",
            "duration"  => " 1 jam 20 menit"
        ],
        [
            "nama_film" => "Love Again",
            "genre"     => "drama",
            "duration"  => " 1 jam 30 menit"
        ],
        [
            "nama_film" => "The Mother",
            "genre"     => "horor",
            "duration"  => " 1 jam 43 menit"
        ],
        

        ];
        return $data;
  }
  public function getAllDataJoin(){
    $query = $this ->db -> table("film")
    ->select("film.*, genre.nama_genre")
    ->join("genre", "genre.id = film.id_genre");
    return $query->get()->getResultArray();
  }

  Public function getAllData()
  {
    return $this -> findAll();
  }

  public function getDataById($id)
  {
    return $this -> find($id);
  }

  public function getDataBy($data)
  {
    return $this->where("genre", $data)->findAll();
  }

  public function getOrderBy()
  {
    return $this->orderBy("created_at", "desc")->findAll();
  }
  public function getLimit()
    {
        return $this->limit(5)->findAll();
    }
  
      
}

