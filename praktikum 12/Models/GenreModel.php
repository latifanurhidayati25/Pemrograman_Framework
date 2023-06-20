<?php
namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{

    protected $table ='genre';
    protected $primaryKey ='id';
    protected $useAutoIncrement = true;
    protected $allowField =[];


   public function getGenre()
   {

    $data =[
        [
            "nama_genre" => "Horor",
            "created_at" => "2023-06-13 14:01:42",
            "update_at" => "2023-06-13 14:01:42",
        ],
        [ 
            "nama_genre" => "Action",
            "created_at" => "2023-06-13 14:01:42",
            "update_at" => "2023-06-13 14:01:42",
        ],
        [ 
            "nama_genre" => "Romantis",
            "created_at" => "2023-06-13 16:30:25",
            "update_at" => "2023-06-13 16:30:25",
        
        ],
        [ 
            "nama_genre" => "Comedy",
            "created_at" => "2023-06-13 16:30:25",
            "update_at" => "2023-06-13 16:30:25",
        
        ],

        ];

    return $data;
   }

   public function getAllDdata()
   {
    return $this->findAll();
   }

   public function getDataByID($id)
   {
       return $this->find($id);
   }

   public function getDataBy($data)
   {
       return $this->where('genre', $data)->findAll();
   }

   public function getOrderBy()
   {
       return $this->orderBy('create_at', 'desc')->findAll();
   }

   public function getLimit()
   {
       return $this->Limit(5)->findAll();
   }
}

