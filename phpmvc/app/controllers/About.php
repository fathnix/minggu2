<?php

class About extends Controller {
    public function page() {
        $data = [
            'title' => 'About - MVC Sederhana',
            'content' => 'Aplikasi ini menunjukkan konsep Model-View-Controller dengan struktur sederhana.',
        ];

        $this->view('about/page', $data);
    }
}