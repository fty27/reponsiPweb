<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scele=1.0">
        <title>Clothes Store</title>
        <link rel="stylesheet" type="text/css" href="style_about.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    </head>
    <head>
        <header>
            <a href="toko_online.html" class="logo">Ratu material</a>
            <div class="menu-toggle"></div>
            <nav>
                <ul>
                    <li><a href="toko_online.html" class="">Home</a></li>
                    <li><a href="http://localhost/12/ResponsiPweb/About_online.php" class="active">About</a></li>
                    <li><a href="product.html" class="">Product</a></li>
                    <li><a href="http://localhost/12/ResponsiPweb/buku_tamu.php" class="">Buku Tamu</a></li>

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
        <div class="container">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.036245242932!2d105.10606401454271!3d-3.579145836298963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3c019c6a89002f%3A0x690ce5b1a33c0c49!2sGading%20Raja%2C%20Kec.%20Pedamaran%20Tim.%2C%20Kabupaten%20Ogan%20Komering%20Ilir%2C%20Sumatera%20Selatan%2030672!5e0!3m2!1sid!2sid!4v1658314659426!5m2!1sid!2sid" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </head>
    <body>
    
            <div class="main-conten">
                <div class="left box">
                    <h2>Tentang Kami</h2>
                    <div class="content">
                        <p>Webset kami menjual aneka produk bangunan sepeti paku, batako asbes,dan lain-lain dengan kualitas yang pastinya terjamin baiknya. Karna kami menjamin kepuasan dari konsumen serta pengiriman yang cepat dan pastinya gratis ongkir.</p>                        
                        <div class="medsos">
                            <ul>
                                <li><a href="https://wa.me/message/BTIW7YTBZA3HH1"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="https://instagram.com/_fha27?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/_fty27/status/1536423313949741056?s=21&t=lsI1c3qg8CZny1KFtS8roA"><i class="fab fa-twitter"></i></a></li>
                            </ul>                            
                        </div>
                    </div>
                </div>
                <div class="centerbox">
                    <h2>Lokasi</h2>
                    <div class="content">
                        <div class="place">
                           <span class="fas fa-map-marker-alt"></span> 
                            <span class="text">Kec.pedamaran timur,palembang,sumatreta selatan</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span> 
                             <span class="text">(+62)82126906955</span>
                         </div>
                         <div class="email">
                            <span class="fas fa-envelope"></span> 
                             <span class="text">fhatmapoenya1234@gmail.com</span>
                         </div>                                                 
                    </div>
                </div>
                <div class="right box">
                    <h2>Hubungi Kami.</h2>
                    <div class="content">
                        <form action="#">
                            <div class="email">
                                <div class="text">Email *</div>
                                <input type="email" required>
                            </div>
                            <div class="msg">
                              <div class="text">Pesan</div>  
                                <textarea rows="2" cols="25" required></textarea>
                            </div>
                            <div class="btn">
                                <button type="submit">Kirim</button>
                            </div>
                        </form>
                        <div class="copyright">
                            <br>Ratu material fty store 2022 </br>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>