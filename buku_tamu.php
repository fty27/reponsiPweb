<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scele=1.0">
        <title>Clothes Store</title>
        <link rel="stylesheet" type="text/css" href="bukutamu.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" type="text/php" href="lihat.php">
    </head>
    <head>
        <header>
            <a href="toko_online.html" class="logo">Ratu material </a>
            <div class="menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="toko_online.html" class="">Home</a></li>
                    <li><a href="http://localhost/12/ResponsiPweb/About_online.php" class="">About</a></li>
                    <li><a href="product.html" class="">Product</a></li>
                    <li><a href="http://localhost/12/ResponsiPweb/buku_tamu.php" class="active">Buku Tamu</a></li>
                

                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".menu-toggle").click(function(){
                    $(".menu-toggle").toggleClass("active")
                    $("nav").toggleClass("active")
                })
            })
        </script>
    </head>
    <body>
        <div class="wrap" style="color: #069370">
            <div class="container">
                <h1>Buku Tamu</h1>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <table>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><input type="text" name="nama_lengkap"></td>
                        </tr>    
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><textarea name="Alamat"></textarea></td>
                        </tr>    
                        <tr>
                            <td>pesanan</td>
                            <td>:</td>
                            <td><input type="text" name="pesanan"></td>
                        </tr>    
                        <tr>
                            <td>Provinsi</td>
                            <td>:</td>
                            <td>
                                <select name="Provinsi">
                                    <option>--Pilih Provinsi--</option>
                                    <option>Aceh</option>
                                    <option>Sumatra Utara</option>
                                    <option>Sumatra Barat</option>
                                    <option>Riau</option>
                                    <option>Kepulauan Riau</option>
                                    <option>Jambi</option>
                                    <option>Bengkulu</option>
                                    <option>Sumatra Selatan</option>
                                    <option>Kepulauan Bangka Belitung</option>
                                    <option>Lampung</option>
                                    <option>Banten</option>
                                    <option>Jawa Barat</option>
                                    <option>Jakarta</option>
                                    <option>Jawa Tengah</option>
                                    <option>Yogyakarta</option>
                                    <option>Jawa Timur</option>
                                    <option>Bali</option>
                                    <option>Nusa Tenggara Barat</option>                                        
                                    <option>Nusa Tenggara Timur</option>
                                    <option>Kalimantan Barat</option>
                                    <option>Kalimantan Selatan</option>
                                    <option>Kalimantan Tengah</option>
                                    <option>Kalimantan Timur</option>
                                    <option>Kalimantan Utara</option>
                                    <option>Gorontalo</option>
                                    <option>Sulawsi Barat</option>
                                    <option>Sulawsi Selatan</option>
                                    <option>Sulawsi Tengah</option>
                                    <option>Sulawsi Tenggara</option>
                                    <option>Sulawsi Utara</option>
                                    <option>Maluku</option>
                                    <option>Maluku Utara</option>
                                    <option>Papua Barat</option>
                                    <option>Papua</option>
                                </select>
                            </td>
                        </tr>  
                        <tr>
                            <td>Asal Kota</td>
                            <td>:</td>
                            <td><input type="text" name="Asal_kota"></td>
                        </tr>   
                        <tr>
                            <td>Tanggal Berkunjung</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal_berkunjung"></td>
                        </tr>   
                        <tr>
                            <td>Jenis Kelamin</td>

                            <td>:</td>
                            <td>
                                <input type="radio" name="jkelamin" value="Laki-Laki">Laki-Laki
                                <input type="radio" name="jkelamin" value="Perempuan">Perempuan
                            </td>
                        </tr>    
                        <tr>
                            <td>Komentar</td>
                            <td>:</td>
                            <td>
                                <textarea name="Pesan"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="submit" name="kirim">kirim</button>
                                <button><a link href="toko_online.html">kembali</a></button>
                            </td>
                        </tr>
  
                    </table>
                </form>
            </div>
        </div>
        <div class="isi">
            <?php

                if(isset($_POST['nama_lengkap'])){
                    $nama =$_POST['nama_lengkap'];               
                    $alamat =$_POST['Alamat'];                    
                    $pesanan =$_POST['pesanan'];                    
                    $provinsi =$_POST['Provinsi'];                    
                    $asal_kota =$_POST['Asal_kota'];                    
                    $tanggal_berkunjung =$_POST['tanggal_berkunjung'];                    
                    $jk =$_POST['jkelamin'];                    
                    $komentar =$_POST['Pesan'];
                    echo "Nama Lengkap:$nama, Alamat:$alamat, pesanan:$pesanan, Provinsi:$provinsi, Asal Kota:$asal_kota, Tanggal Berkunjung:$tanggal_berkunjung, Jenis Kelamin:$jk, Komentar:$komentar";
                    $fp =fopen("guestbook.txt","a+");
                    fputs($fp,"$nama|$alamat|$pesanan|$provinsi|$asal_kota|$tanggal_berkunjung|$jk|$komentar\n");
                    fclose($fp);
                    echo "<a href = lihat.php></a><br>";
                }
            ?>
        </div>
        <div class="footertop">
                <div class="medsos">
                    <ul>
                     <li><a href="https://wa.me/message/BTIW7YTBZA3HH1"><i class="fab fa-whatsapp"></i></a></li>
                    <li><a href="https://instagram.com/_fha27?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://twitter.com/_fty27/status/1536423313949741056?s=21&t=lsI1c3qg8CZny1KFtS8roA"><i class="fab fa-twitter"></i></a></li>
                    </ul>  
                </div>                         
            </div>
            <div class="footerbottom">
                <div class="copyright">
                    <h4 style="margin-top: 0px;"><br>Ratu material fty store 2022 </br></h4>
                </div>
            </div>
        </div>  
    </body>


</html>