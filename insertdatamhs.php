<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content="widht=device-widht, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <tittle> Tambah Data Mahasiswa</tittle>
</head>
<body>

    <h3>Tambah Data Mahasiswa</h3>
    <form action="dbinsertdatamhs.php" method="POST">

        NIM
        <div>
            <input type="text" name="txNIM">
        </div>
        NAMA
        <div>
            <input type="text" nama="txNAMA">
        </div>
        Jenis Kelamin
        <div>
            <select nama="txJK">
                <option value="L">LAKI LAKI</option>
                <option value="P">PEREMPUAN</option>
            </select>                
        </div>
        JURUSAN
        <div>
            <select nama="txJUR">
                <option value="DGM">DGM</option>
                <option value="DKV">DKV</option>
            </select>
        </div>
        TANGGAL LAHIR
        <div>
            <input type="date" nama="txTALAG">
        </div>
        PASSCODE
        <div>
            <input type="pasword" nama="txPASSS">        
        </div>

        <div>
            <button type="submit">Simpan Data</button>
        </div>
    </form>
</body>
</html>
