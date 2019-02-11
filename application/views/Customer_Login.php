<!DOCTYPE html>
<html class="bg-dark" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MUSIRE</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap-4.1.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/Login.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-transparent">
        <a class="navbar-brand" href="<?php echo site_url('Home')?>">MUSIRE</a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link pointer-cursor" onclick="ScrollHome()">Home</a></li>
                <div class="hide"><li class="nav-item"><a class="nav-link pointer-cursor" onclick="ScrollOurMusicIns()">About Company</a></li></div>
                <div class="hide"><li class="nav-item"><a class="nav-link pointer-cursor" onclick="ScrollAboutUs()">Contact Us</a></li></div>
                <li class="nav-item"><a class="nav-link pointer-cursor" href="<?php echo site_url('Our_Product')?>">Our Product</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item"><button class="btn btn-outline-success" onclick="ScrollLogin()">Login</button></li>
                <li class="nav-item"><a class="btn btn-outline-primary" href="<?php echo site_url('User_NewAccount')?>">Register</a></li>
            </ul>
    </nav>


<div class="bg-dark center bg-img-piano flex-row d-flex justify-content-center" style="width:100%; height:700px;">

    <div class="hide">
          <div class="p-5 flex-column text-center center custom-card-white" style="width:400px; height:600px">
            <div class="lobsfont">
                <h1 >MUSIRE</h1>
                <p>Semua yang anda butuhkan tentang music akan kami layani dengan sepenuh hati </p>
            </div>
            <!-- <div><a href="Customer/CreateAccount.php" style:"color:red;">Buat akun baru ?</a></div> -->
          </div>
    </div>

          <div class="p-5 flex-column text-center justify-content-around card bg-card custom-card" style="width:400px; height:600px">
              <h1 class="lobsfont" style="color:violet; font-size:150%;">LOGIN</h1>
            <div><img class="rounded-circle img-fluid" src="<?php echo base_url();?>Image/User_Avatar.png" alt="avatar" style="width:200px"></div>
            <div>
                <form action="<?php echo site_url('User_Login');?>" method="post" name="loginform" value="loginform">

                    <div class="form-group">
                    <label for="username" class="lobsfont" style="color:blueviolet;">Username :</label>
                    <input type="text" placeholder="Username" class="form-control" name="username" required="">
                    </div>
                    <div class="form-group">
                    <label for="pwd" class="lobsfont" style="color:blueviolet;">Password :</label>
                    <input type="password" placeholder="Password" class="form-control" name="password" required="">
                    </div>
                    <div><button type="submit" class="btn btn-success">LOGIN</button></div>
                    <!-- <h5 style:"color:yellow" id="warning">wewewe</h5> -->
                 </form>
            </div>
            <!-- <div><a href="Customer/CreateAccount.php" style:"color:red;">Buat akun baru ?</a></div> -->
          </div>
        
</div>

<div class="hide">
<section id="drum-bg-fixed">
<div class="center lobsfont" style="width:100%; height:700px;">
          <div class="p-5 center custom-card" style="width:30%; height:600px;">
            <div>
            <h2 class="text-center" style="color:gold; font-size:2vw;">STORY</h2>
                <p class="blue-color" style="font-size:1.25vw">Berdiri pada tanggal 4 april 2018, Musire adalah jasa persewaan alat musik
                yang berada di kecamatan Jebres, Surakarta.</p>
                <p class="blue-color" style="font-size:1.25vw">Musire membantu pelanggan mencari peralatan musik tanpa harus membelinya, Musire menyewakan berbagai
                alat musik mulai dari gitar, piano, biola, drum dan masih banyak lagi. Musire menyewakan alat dengan kualitas terbaik dan harga yang minimalis.</p>
            </div>
            <!-- <div><a href="Customer/CreateAccount.php" style:"color:red;">Buat akun baru ?</a></div> -->
          </div>

          <div class="p-5 center custom-card-white" style="width:30%; height:600px; font-size:1.5vw">
            <div>
            <h2 class="text-center" style="color:gold; font-size:3vw">OUR TEAM</h2>
                * Fikri Hashfi N.
            </div>
            <!-- <div><a href="Customer/CreateAccount.php" style:"color:red;">Buat akun baru ?</a></div> -->
          </div>

           <div class="p-5 center custom-card" style="width:30%; height:600px">
            <div>
            <h2 class="text-center" style="color:gold; font-size:4vw">Let's Join US!</h2>
                </div>
            <!-- <div><a href="Customer/CreateAccount.php" style:"color:red;">Buat akun baru ?</a></div> -->
          </div>
</div>
</section>
</div>

<div class="hide">
<div class="bg-black lobsfont center" style="width:100%; height:40%;">

        <div style="height:70%; font-size:1.2vw;">
                <h6></h6>
                <div>
                        <p class="contact-description lobsfont"><img class="location-logo" src="<?php echo base_url();?>Image/poi.gif" alt="location">&emsp13;Address :
                        </br>&emsp; Jebres, Kota Surakarta, Jawa Tengah
                        </p>
                        <p class="contact-description lobsfont"><img class="phone-book-logo" src="<?php echo base_url();?>Image/phone-book.png" alt="phone">&emsp13;Phone :
                        </br>&emsp; +6285878586091</p>
                        <p class="contact-description lobsfont"><img class="email-logo" src="<?php echo base_url();?>Image/email.png" alt="email">&emsp13;Email :
                        </br>&emsp; fikrihashfi@gmail.com</p>
                </div>
            </div>
            
            <div class="text-center" style="width:50%; font-size:1.7vw;color:goldenrod;">OUR CONTACT</div>

    <div class="text-center" style="height:25%; font-size:1.2vw;">
        <h6>Follow Us :</h6>
        <div>
            <a href="https://www.facebook.com/rubiker.fhn"><img class="fb-logo" src="<?php echo base_url();?>Image/facebook.png" alt=""></a>
            <a href="https://twitter.com/fikri_hashfi"><img class="twitter-logo" src="<?php echo base_url();?>Image/twitter-logo.png" alt=""></a>
            <a href="https://whatsapp.com"><img class="whatsapp-logo" src="<?php echo base_url();?>Image/whatsapp.png" alt=""></a>
            <a href="https://www.instagram.com/fikrihashfi/?hl=id"><img class="instagram-logo" src="<?php echo base_url();?>Image/instagram-logo.png" alt=""></a>
            <a href="https://www.youtube.com/channel/UCvmKUuw8clyYxhtFOoAIo5w"><img class="youtube-logo" src="<?php echo base_url();?>Image/youtube-logo.png" alt=""></a>
        </div>
    </div>

</div>
</div>

<footer class="bg-black lobsfont border-top border-warning">Copyright &copy; Fikri Hashfi</footer>

<script src="<?php echo base_url();?>bootstrap-4.1.0-dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/main.js"></script>

</body>

    
</html>