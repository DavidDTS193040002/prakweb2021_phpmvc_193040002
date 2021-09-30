<?php

class About
{
    public function index($nama = 'David', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo, nama saya $nama, saya adalaah $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
