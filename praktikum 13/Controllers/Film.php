<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\FilmModel;
use App\Models\GenreModel;//ditambahkan 1


class Film extends BaseController
{

    //step 2
    protected $film;
    protected $genre;//ditambahkan 2

    
    //step 3 membuat fungsi construct untuk inisiasi clas model
    public function __construct()
    {
        //step 4
        $this->film = new FilmModel();
        $this->genre = new GenreModel();//ditaambahkan 3

    }

    public function index()
    {
        $data['data_film']= $this->film -> getAllDataJoin();
        return view("film/index", $data);
    }
    public function all()
    {
        $data['semuafilm']= $this->film->getAllDataJoin();
        return view("film/semuafilm", $data);
    }
    public function add()
    {
    $data["genre"] = $this->genre->getAllData();
    $data["errors"] = session('errors');
    return view ("film/add",$data);
    }
    public function store()
    {
        $validation = $this->validate([
            'nama_film' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Film Harus diisi'
                ]
            ],
            'id_genre'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Genre Harus diisi'
                ]
            ],
            'duration'  => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Durasi Harus diisi'
                ]
            ],
            'cover'     => [
                'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,image/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded' => 'Kolom Cover harus berisi file.',
                    'mime_in' => 'Tipe file pada Kolom Cover harus berupa JPG, JPEG, atau PNG',
                    'max_size' => 'Ukuran file pada Kolom Cover melebihi batas maksimum'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }
        $image = $this->request->getFile('cover');
        $imageName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/assets/cover/', $imageName);

        $data = [
            'nama_film' => $this->request->getPost('nama_film'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),
            'cover' => $imageName,
        ];
        $this->film->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.'); // tambahkan ini
        return redirect()->to('/film');
    }
    public function update($id)
    {
        $data["genre"]= $this->genre->getAllData();
        $data["errors"]= session ('errors');
        $data["semuafilm"]= $this->film->getDataByID($id);
        return view("film/update", $data);
        
    }
  

}


