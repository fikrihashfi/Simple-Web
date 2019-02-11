<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WEB CREATOR</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>/bootstrap-4.1.0-dist/css/bootstrap.min.css">
    <link href="<?php echo base_url();?>/css/Login.css" type="text/css" rel="stylesheet">
</head>

<body id="piano-bg-fixed">
    
<div class="center">
<div class="row">
          <div class="p-5 rounded flex-column text-center center custom-card-white" style="width:400px; height:600px">
            <div class="lobsfont"><h3 style="color:whitesmoke;">Create Admin Account</h3></br>
                <form action="<?php echo site_url('Admin_Register');?>" method="post">
                    <div class="form-group row">
                    <label for="adminname">AdminName :</label>
                    <input type="text" placeholder="AdminName" class="form-control" name="admin_name" required="">
                    <small id="adminnameHelp" class="form-text text-muted">min 5 character, max 10 character.</small>
                    </div>      
                    <div class="form-group row">
                    <label for="pwd">Password :</label>
                    <input type="password" placeholder="Password" class="form-control" name="password" required="">
                    </div>

                    <div class="form-group row">
                    <label for="address">Contact :</label>
                    <input type="text" placeholder="Admin Contact" class="form-control" name="contact" required="">
                    </div>
                    
                <div><button type="submit" class="btn btn-success">Buat Akun</button></div>
                 </form>
            </div>
            <!-- <div><a href="Customer/CreateAccount.php" style:"color:red;">Buat akun baru ?</a></div> -->
            <h7><a href="<?php echo site_url('Dashboard_admin');?>">Kembali</a></h7>
          </div>

        </div> 
</div>

    <script src="<?php echo base_url();?>/bootstrap-4.1.0-dist/js/bootstrap.min.js"></script>
</body>

</html>