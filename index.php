<?php
$host       = 'localhost';
$user       = 'root'; //username
$pass       = ''; // pasword jika tidak ada bisa di kosongi
$db         = 'portofolio'; // nama database

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){//cek koneksi
    die ("Tidak bisa terkoneksi ke database");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="max-auto">
        <section>
       <br><br> <br><br><br><br>
       <h2 id="portofolio" class="tentangsaya">Portofolio</h2><hr>
       <table>
        <tr>
            <th>No</th>
            <th>Nama kegiatan</th>
            <th>Waktu Kegiatan</th>
            <th>Bukti Kegiatan</th>
        </tr>
        <tr>
            <td class="no">1</td>
            <td>PKKMB NUGIRI</td>
            <td>02-05 September 2024</td>
            <td> <a href="foto/pkkmb.jpg" target="_parent">lihat foto</td>
            </a>
        </tr>
        <tr>
            <td class="no">2</td>
            <td>IT CAMP</td>
            <td>21-22 Desember 2024</td>
            <td><a href="foto/IT CAMP.jpg">lihat foto</a></td>
         </tr>
         <tr>
            <td class="no">3</td>
            <td>WORKSHOP MC</td>
            <td>13 Januari 2025</td>
            <td><a href="foto/WORKSHOP MC.jpg">lihat foto</a></a></td>
         </tr>
       </table>
    </section>
    </div>
</body>
</html>

