<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin- Home</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>/bootstrap-4.1.0-dist/css/bootstrap.min.css">
    <link href="<?php echo base_url();?>/css/Login.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/css/dashboard.css" rel="stylesheet">

</head>

<body id="music-bg-fixed" class="lobsfont">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('Dashboard_admin')?>">MUSIRE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link pointer-cursor" href="<?php echo site_url('Dashboard_admin')?>">Home</a></li>
                <li class="nav-item"><a class="nav-link pointer-cursor" href="<?php echo site_url('Admin_Add')?>">Add New Admin</a></li>
                <li class="nav-item">
                    <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Instrument
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo site_url('View_Instrument')?>">Data</a>
                        <a class="dropdown-item" href="<?php echo site_url('AddInstrument')?>">Add Instrument</a>
                    </div>
                    </div>
              
                <li class="nav-item">
                    <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Customer
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo site_url('View_Customer')?>">data</a>
                        <a class="dropdown-item" href="<?php echo site_url('View_Booking')?>">booking</a>
                        <a class="dropdown-item" href="<?php echo site_url('View_Rental')?>">rent</a>
                    </div>
                    </div>
                </li>
           
            </ul>
            <ul class="navbar-nav">
            <li class="nav-item">
                   <form action="<?php echo site_url('instrument/instrument/search_instrument');?>" method = "post">
                    <input type="text" class="text-center" style="border-radius : 10px;" placeholder="Search Instrument" name = "keyword" />
                    <input type="submit" class="btn btn-success" value = "Search" />
                    </form>
                </li>
                <li class="nav-item"><a class="btn btn-outline-danger" href="<?php echo site_url('Admin_Logout')?>">Logout</a></li>
                <!-- <li class="nav-item"><a class="btn btn-outline-primary" href="echo site_url('User_NewAccount')">Register</a></li> -->
            </ul>
            </div>
        </div>
    </nav>