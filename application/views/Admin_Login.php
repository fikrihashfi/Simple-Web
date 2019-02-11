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
    </nav>


<div class="bg-dark center bg-img-piano" style="height:700px;">

          <div class="p-5 flex-column text-center justify-content-around card bg-card custom-card" style="width:400px; height:600px">
              <h1 class="lobsfont" style="color:violet; font-size:150%;">ADMIN - LOGIN</h1>
            <div><img class="rounded-circle" src="<?php echo base_url();?>Image/User_Avatar.png" alt="avatar" style="width:50%;"></div>
            <div>
                <form action="<?php echo site_url('Admin_Login');?>" method="post" name="adminloginform" value="adminloginform">

                    <div class="form-group">
                    <label for="adminname" class="lobsfont" style="color:blueviolet;">Admin_Name :</label>
                    <input type="text" placeholder="AdminName" class="form-control" name="admin_name" required="">
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

<script src="<?php echo base_url();?>bootstrap-4.1.0-dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/main.js"></script>

</body>

    
</html>