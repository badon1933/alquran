<?php

class Recite extends Controller
{
    public function index($chapter_id)
    {
        $data['judul'] = 'Recite';
        $data['verse'] = $this->model('Verse_model')->getVerse($chapter_id);
        $data['chapters'] = $this->model('Chapter_model')->getChapter();

        $this->view('templates/header', $data);
        $this->view('recite/index', $data);
        $this->view('templates/footer');
    }

    public function page($chapter_id, $page)
    {
        $data['verse'] = $this->model('Verse_model')->getVerse($chapter_id, $page);

        $this->view('recite/load', $data);
    }
}
