
<?php foreach($customer as $customer){ ?>
<div class="center">
<div class="row">
            <div class="p-5 flex-column text-center justify-content-around card bg-card custom-card" style="width:400px; height:500px">
            <div><img class="rounded-circle" src="<?php echo base_url();?>image/User_Avatar.png" alt="avatar" style="width:75%;"></div>
            <form action="<?php echo base_url('')?>Customer/Customer/update_profil/<?php echo $customer->get_customer_id();?>" method="post" name="editprofilform">
                    <fieldset disabled>
                    <div class="form-group">
                    <label for="disabledUsernameInput">Username</label>
                    <input type="text" id="disabledTextInput" class="form-control not-allowed-pointer" value="<?php echo $customer->get_username(); ?>" placeholder="username">
                    </div>
                    </fieldset>
                    <div class="form-group">
                    <label for="pwd" class="lobsfont" style="color:blueviolet;">Password :</label>
                    <input type="password" value="<?php echo $customer->get_password(); ?>" placeholder="Password" class="form-control" name="password" required="">
                    </div>
            </div>
          
          <div class="p-5 flex-column text-center justify-content-around card bg-card custom-card" style="width:400px; height:500px">
              <h1 class="lobsfont" style="color:violet; font-size:150%;">Profil</h1>
            <div>
               
                    <div class="form-group">
                    <label for="fname" class="lobsfont" style="color:blueviolet;">First Name :</label>
                    <input type="text" placeholder="First Name" value="<?php echo $customer->firstname; ?>" class="form-control" name="firstname" required="">
                    </div>
                    <div class="form-group">
                    <label for="lname" class="lobsfont" style="color:blueviolet;">Last Name :</label>
                    <input type="text" placeholder="Last Name" value="<?php echo $customer->lastname; ?>" class="form-control" name="lastname" required="">
                    </div>             
                    <div class="form-group">
                    <label for="contact" class="lobsfont" style="color:blueviolet;">Contact :</label>
                    <input type="text" placeholder="Contact Number" value="<?php echo $customer->get_contact_no(); ?>" class="form-control" name="contact_no" required="">
                    </div>              
                    <div class="form-group">
                    <label for="e-mail" class="lobsfont" style="color:blueviolet;">E-mail :</label>
                    <input type="email" placeholder="Email Address" value="<?php echo $customer->customer_email; ?>" class="form-control" name="customer_email" required="">
                    </div>              
                    <div class="form-group">
                    <label for="address" class="lobsfont" style="color:blueviolet;">Home Address :</label>
                    <input type="text" placeholder="Current Home Address" value="<?php echo $customer->address; ?>" class="form-control" name="address" required="">
                    </div>               
                    <div><button type="submit" class="btn btn-success">Save</button></div>
                    <!-- <h5 style:"color:yellow" id="warning">wewewe</h5> -->
                 </form>
            </div>
            <!-- <div><a href="Customer/CreateAccount.php" style:"color:red;">Buat akun baru ?</a></div> -->
          </div>
        
</div>
</div>
<?php
}
?>

<script src="<?php echo base_url();?>bootstrap-4.1.0-dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/main.js"></script>

</body>

    
</html>