<?php
    class database{
        var $host = 'localhost';
        var $name = 'root';
        var $pw = '';
        var $db = 'db_toko_baju';

        function __construct(){
            $koneksi = mysqli_connect($this->host, $this->name,$this->pw,$this->db);
            mysqli_select_db($koneksi, $this->db);
        }
        
        function tampilbaju() {
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw,$this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM tb_baju");
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
            }

          
        function tampilpembeli() {
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw,$this->db);
            $data = mysqli_query($koneksi, "SELECT * FROM tb_pembeli");
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
            }

        function tampiltransaksi() {
            $koneksi = mysqli_connect($this->host, $this->name, $this->pw,$this->db);
            $data = mysqli_query($koneksi, "SELECT tb_transaksi.id_transaksi, tb_pembeli.nama_pembeli, tb_baju.nama_baju, tb_transaksi.harga_baju, tb_transaksi.jumlah, tb_transaksi.total_bayar FROM tb_baju INNER JOIN tb_transaksi ON tb_baju.id_baju =  tb_transaksi.id_baju INNER JOIN tb_pembeli ON tb_pembeli.id_pembeli = tb_transaksi.id_pembeli");
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
            }
    }

?>