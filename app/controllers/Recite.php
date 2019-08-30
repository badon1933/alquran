<?php

class Recite extends Controller
{
    public function index($chapter_id)
    {
        $data['judul'] = 'Recite';
        $data['verse'] = $this->model('Verse_model')->getVerse($chapter_id);

        $this->view('templates/header', $data);
        $this->view('recite/index', $data);
        $this->view('templates/footer');
    }
}
