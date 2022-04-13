<?php

if(isset($_POST["txNIM"])){
    include_once("koneksi2.php");
    
    $nim = $_POST["txNIM"];
    $nama = $_POST["txNAMA"];
    $talag = $_POST["txTALAG"];
    $jk = $_POST["txJK"];
    $jur = $_POST["txJUR"];
    $passs = $_POST["txPASSS"];
    
    $sqlINSERT = "INSERT INTO mhs(NIM, NAMA, JURUSAN, JK, TGLLAHIR, PASSCODE) VALUES
    ('".$nim."','".$nam."','".$jur."','".$jk."','".$talag."','".$passs."');";
}

    $hsl = mysqli_query($cnn, $sqlINSERT);

    if($hsl){
        echo "Insert Data Sukses<br>";
    }else{
        echo "Insert Data Gagal<br>";
    }

    mysqli_close($cnn);