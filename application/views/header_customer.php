<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap-4.1.0-dist/css/bootstrap.min.css">
    <link href="<?php echo base_url();?>css/Login.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/dashboard.css" rel="stylesheet">

</head>
<body id="music-bg-fixed" class="bg-dark lobsfont">

<nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top ">
      <div class="container">
        <a class="navbar-brand lobsfont" href="<?php echo site_url('Dashboard')?>">Musire</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <form action="<?php echo site_url('instrument/instrument/search_instrument');?>" method = "post">
          <input type="text" class="text-center" style="border-radius : 1rem;" placeholder="Search Instrument" name = "keyword" />
          <input type="submit" class="btn btn-success btn-sm" value = "Search" />
          </form>
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> -->
             <li class="nav-item">
              <a class="nav-link pointer-cursor" href="<?php echo site_url('View_Booking')?>">My Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pointer-cursor" href="<?php echo site_url('View_Rental')?>">My Rent</a>
            </li>
            <li class="nav-item">
              <a class="nav-link pointer-cursor" onclick="ScrollAboutUs()">Contact</a>
            </li>
            <li class="nav-item">
            <div class="dropdown">
                    <button class="btn btn-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profil
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo base_url()?>/Customer/Customer/view_profil/<?php echo $this->session->userdata('customer_id');?>">Edit Profil</a>
                        <a class="dropdown-item" href="<?php echo site_url('User_Logout');?>" style="color:red;">Logout</a>
                    </div>
            </div>

            </li>
          </ul>
        </div>
      </div>
    </nav>