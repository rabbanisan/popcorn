<?php

namespace App\Controllers;

use App\Models\....;

class Pages extends BaseController
{
    protected $movieModel;
    public function __....()
    {
        $this->movieModel = new ....();
    }

    public function ....()
    {
        $nowPlaying = $this->movieModel->where(.... , ....)->findAll();
        $upComing = $this->movieModel->where(... , ....)->findAll();;
        $data = [
            .... => $nowPlaying,
            .... => $upComing
        ];
        echo view('pages/home', ....);
    }

    public function ....($....)
    {
        $movie = $this->movieModel->where(.... , $....)->findAll();
        $data = [
            .... => $movie
        ];
        echo view('pages/movie', $data);
    }
}
