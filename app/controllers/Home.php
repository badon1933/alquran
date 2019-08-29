<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['chapter'] = $this->model('Chapter_model')->getChapter();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
