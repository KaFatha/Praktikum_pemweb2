<?php 
class Mahasiswa{
    // Property
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;
    // Method
    function __construct($_nim, $_nama){
        $this->nim = $_nim;
        $this->nama = $_nama;
    }

    function predikat_ipk(){
        if($this->ipk < 2.0){
            return 'CUKUP';
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0){
            return 'BAIK';
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75){
            return 'MEMUASKAN';
        } elseif ($this->ipk >= 3.75 && $this->ipk <= 4.0){
            return 'CUM LAUDE';
        } else {
            return 'Nilai diluar Jangkauan';
        }
    }
}

// Instance Object
$mahasiswa1 = new Mahasiswa(1111, 'Fathatamzz');
$mahasiswa1->ipk = 3.75;
$mahasiswa1->prodi = 'Teknik Informatika';
$mahasiswa1->angkatan = 2023;

$mahasiswa2 = new Mahasiswa(1112, 'Zakwan');
$mahasiswa2->ipk = 2.0;
$mahasiswa2->prodi = 'Teknik Informatika';
$mahasiswa2->angkatan = 2023;

$mahasiswa3 = new Mahasiswa(1113, 'Elyas');
$mahasiswa3->ipk = 6.0;
$mahasiswa3->prodi = 'Teknik Informatika';
$mahasiswa3->angkatan = 2023;

$mahasiswa4 = new Mahasiswa(1114, 'Sandy');
$mahasiswa4->ipk = 1.0;
$mahasiswa4->prodi = 'Teknik Informatika';
$mahasiswa4->angkatan = 2023;

$mahasiswa5 = new Mahasiswa(1115, 'Hilmi');
$mahasiswa5->ipk = 3.0;
$mahasiswa5->prodi = 'Teknik Informatika';
$mahasiswa5->angkatan = 2023;



?>