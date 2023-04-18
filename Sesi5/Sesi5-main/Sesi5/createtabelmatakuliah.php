<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel = "tbMatakuliah";
        $sql = "CREATE TABLE $tbel(
            ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            kodeMK VARCHAR(8),
            matakuliah VARCHAR(50),
            sks INT
            
        )";
        $hasil = mysqli_query ($cnn, $sql);
        if($hasil){
            echo "Pembuatan tabel " . $tbel . " Sukses";
        }else{
            echo "Pembuatan tabel " . $tbel . " Gagal";
        }    
    }else{
        echo "Koneksi ke Mysql Gagal";
    }
    
