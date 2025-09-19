<?php
class Laundry {
    public $nama_user;
    public $password;
    public $jenis_laundry;
    public $isian_laundry;
    public $karakteristik;
    public $keterangan;

    public function __construct($nama_user, $password, $jenis_laundry, $isian_laundry, $karakteristik, $keterangan) {
        $this->nama_user = $nama_user;
        $this->password = password_hash($password, PASSWORD_DEFAULT); // hash password
        $this->jenis_laundry = $jenis_laundry;
        $this->isian_laundry = $isian_laundry;
        $this->karakteristik = implode(", ", $karakteristik); // simpan array checkbox jadi string
        $this->keterangan = $keterangan;
    }
}
