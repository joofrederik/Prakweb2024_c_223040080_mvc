<?php
class About
{
    public function index($nama = 'George', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo, nama saya $nama. Saya adalah $pekerjaan.";
    }
    public function page()
    {
        echo "About/page";
    }
}
