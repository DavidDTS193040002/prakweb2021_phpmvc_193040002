<?php

class Mahasiswa_model
{
    private $dbh; // database handler
    private $stmt;


    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    // private $mhs = [
    //     [
    //         "nama" => "David Dalil Tauhid Syabila",
    //         "nrp" => "193040002",
    //         "email" => "davidDTS@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Taupik Hidayat",
    //         "nrp" => "193040019",
    //         "email" => "TaupikHidayat@gmail.com",
    //         "jurusan" => "Teknik Mesin"
    //     ],
    //     [
    //         "nama" => "Sofyan Egi Lesmana",
    //         "nrp" => "193040025",
    //         "email" => "SofyanEgiLesmana@gmail.com",
    //         "jurusan" => "Teknik Industri"
    //     ]
    // ];

    public  function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
