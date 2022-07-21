<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");
echo "<table border=0>";

while ($isi = fgets($fp,80)) {
    $pisah = explode("|",$isi);
    echo "<tr><td>nama </td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>alamat </td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>pesanan </td><td>: $pisah[2]</td></tr>";
    echo "<tr><td>provinsi</td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>asal_kota</td><td>: $pisah[4]</td></tr>";
    echo "<tr><td>tanggal_berkunjung</td><td>: $pisah[5]</td></tr>";
    echo "<tr><td>jenis_kelamin</td><td>: $pisah[6]</td></tr>"
    echo "<tr><td>Komentar</td><td>: $pisah[7]</td></tr><tr><td>&nbsp;<hr></td></tr>";
}

echo "</table>";
echo "<a href=buku_tamu.php> Klik Disini </a>Isi Form Buku Tamu";
?>