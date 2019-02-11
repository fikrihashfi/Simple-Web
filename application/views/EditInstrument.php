
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Music Instrument</title>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>/bootstrap-4.1.0-dist/css/bootstrap.min.css">
    <link href="<?php echo base_url();?>/css/Login.css" type="text/css" rel="stylesheet">

</head>

<body id="music-bg-fixed">
<?php
    foreach($instrument as $instrument){
    ?>
<div class="center">
    <div class="row">
        <div class="p-5 rounded flex-column text-center justify-content-around custom-card lobsfont" style="width:400px; height:500px; color:yellow;">
            <div><h3 style="color:green;">Edit INSTRUMENT Info</h3></br></div>
            <form action="<?php echo base_url('')?>Admin/Admin/EditInstrument/<?php echo $instrument->id_instrument;?>" method="post" name="editprofilform">

                    <div class="form-group row">
                    <label for="instr">Instrument :</label>
                    <input type="text" placeholder="Instrument" value="<?php echo $instrument->instrument; ?>" class="form-control" name="instrument" required="">
                    </div>         
                   <div class="form-group row">
                    <label for="Type">Type :</label>
                    <input type="text" placeholder="Instrument Type" value="<?php echo $instrument->type; ?>" class="form-control" name="type" required="">
                    </div> 
                    <div class="form-group row">
                    <label for="instr">Description :</label>
                    <textarea type="text" placeholder="Description of Instrument"  class="form-control" name="description" required=""><?php echo $instrument->description; ?></textarea>
                    </div>  
          </div>

         <div class="p-5 rounded flex-column text-center center custom-card" style="width:400px; height:500px; color:yellow;">
           <div class="lobsfont" style="color:yellow;">
                    
                  
                   <div class="form-group row">
                        <label for="Brand">Brand :</label>
                        <input type="text" placeholder="Instrument Brand" value="<?php echo $instrument->brand; ?>" class="form-control" name="brand" required="">
                        </div> 
                    <div class="form-group row">
                        <label for="Color">Color :</label>
                        <input type="text" placeholder="Instrument Color" value="<?php echo $instrument->color; ?>" class="form-control" name="color" required="">
                        </div> 
                    <div class="form-group row">
                        <label for="Price">Price :</label>
                        <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">Rp.</div>
                                </div>
                        <input type="number" placeholder="Instrument Price" value="<?php echo $instrument->price; ?>" class="form-control" name="price" required="">
                        </div> 
                        <small id="priceHelp" class="form-text text-muted">max number : 7. tanpa titik / without dot(.)</small>
                     </div>   

               <div><button type="submit" class="btn btn-success">Save</button></div>
                </form>
           </div>
           <!-- <div><a href="Customer/CreateAccount.php" style:"color:red;">Buat akun baru ?</a></div> -->
           <h7><a href="<?php echo site_url('Dashboard_admin');?>">Kembali</a></h7>
         </div>
         <?php
    }
    ?>
    </div>  
</div>
    
<script src="<?php echo base_url();?>/bootstrap-4.1.0-dist/js/bootstrap.min.js"></script>

</body>
</html>


