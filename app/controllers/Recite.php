<?php

class Recite extends Controller
{
    public function index($chapter_id)
    {
        $data['judul'] = 'Recite';
        $data['verse'] = $this->model('Verse_model')->getVerse($chapter_id);
        $data['page'] = 1;

        $this->view('templates/header', $data);
        $this->view('recite/index', $data);
        $this->view('templates/footer');
    }

    public function page($chapter_id, $page)
    {
        $data['judul'] = 'Recite';
        $data['verse'] = $this->model('Verse_model')->getVerse($chapter_id, $page);

        $this->view('templates/header', $data);
        $this->view('recite/index', $data);
        $this->view('templates/footer');
    }
}
