<?php

namespace App\Controllers;

class Home extends BaseController

{
    public function index(): string
    {
        $data['slug'] = 'index';
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);

        return view('index', $data);
    }

    public function header($data): string
    {
        return view('header', $data);
    }

    public function footer($data): string
    {
        return view('footer', $data);
    }


    public function about(): string
    {
        $data['slug'] = 'about';
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);

        return view('about', $data);
    }

    public function projects(): string
    {
        $data['slug'] = 'projects';
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);

        return view('projects', $data);
    }

    public function contact(): string
    {
        $data['slug'] = 'contact';
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);

        return view('contact', $data);
    }


    public function present(): string
    {
        $data['slug'] = 'present';
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);

        return view('present', $data);
    }
    public function merch(): string
    {
        $data['slug'] = 'merch';
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);
        return view('merch', $data);
    }

    public function awards_and_media(): string
    {
        $data['slug'] = 'awards_and_media';
        $data['header'] = $this->header($data);
        $data['footer'] = $this->footer($data);
        return view('awards_and_media', $data);
    }


}
