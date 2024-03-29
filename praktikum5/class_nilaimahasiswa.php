<?php
class NilaiMahasiswa{
    // property
    public $matkul;
    public $nilai;
    public $nim;
    // Method
    function __construct($_nim, $_nilai, $_matkul){
        $this->nim = $_nim;
        $this->nilai = $_nilai;
        $this->matkul = $_matkul;
    }

    function grade(){
        if($this->nilai >= 0 && $this->nilai <= 35){
            return 'E';
        } elseif ($this->nilai >= 36 && $this->nilai <= 55){
            return 'D';
        } elseif ($this->nilai >= 56 && $this->nilai <= 69){
            return 'C';
        } elseif ($this->nilai >= 70 && $this->nilai <= 84){
            return 'B';
        } elseif ($this->nilai >= 85 && $this->nilai <= 100){
            return 'A';
        } else {
            return 'Grade Tidak Ada';
        }
    }

    function hasil(){
        if($this->nilai >= 0 && $this->nilai < 56){
            return 'Tidak Lulus';
        } elseif ($this->nilai >= 56 && $this->nilai <= 100){
            return 'Lulus';
        } else {
            return 'Hasil Tidak Ada';
        }
    }
}

// Instance Object
$nilai_mahasiswa1 = new NilaiMahasiswa(111, 35, 'Statistik & Probabilitas');
$nilai_mahasiswa2 = new NilaiMahasiswa(112, 55, 'Bahasa Iggris');
$nilai_mahasiswa3 = new NilaiMahasiswa(113, 69, 'Jaringan Komputer');
$nilai_mahasiswa4 = new NilaiMahasiswa(114, 84, 'User Interface & User Experince');
$nilai_mahasiswa5 = new NilaiMahasiswa(115, 100, 'Pemrograman Web 2');
?>