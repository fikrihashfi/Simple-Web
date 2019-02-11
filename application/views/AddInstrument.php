
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

<div class="center">
    <div class="row">

        <div class="p-5 rounded flex-column text-center justify-content-around custom-card lobsfont" style="width:400px; height:500px; color:yellow;">
            <div><h3 style="color:green;">ADD INSTRUMENT</h3></br></div>
            <?php echo form_open_multipart('Tambah_Instrument');?>
                    <div class="form-group row">
                    <label for="instr">Instrument :</label>
                    <input type="text" placeholder="Instrument" class="form-control" name="instrument" required="">
                    </div>  
                    <div class="form-group row">
                   <label for="upload">Upload File</label>
                    <input type="file" name="imagefile" size="20" />
                   <!-- <small id="usernameHelp" class="form-text text-muted">min 5 character, max 10 character.</small> -->
                   </div>         
                   <div class="form-group row">
                    <label for="Type">Type :</label>
                    <input type="text" placeholder="Instrument Type" class="form-control" name="type" required="">
                    </div> 
                    <div class="form-group row">
                    <label for="instr">Description :</label>
                    <textarea type="text" placeholder="Description of Instrument" class="form-control" name="description" required=""></textarea>
                    </div>  
          </div>

         <div class="p-5 rounded flex-column text-center center custom-card" style="width:400px; height:500px; color:yellow;">
           <div class="lobsfont" style="color:yellow;">
                    
                  
                   <div class="form-group row">
                        <label for="Brand">Brand :</label>
                        <input type="text" placeholder="Instrument Brand" class="form-control" name="brand" required="">
                        </div> 
                    <div class="form-group row">
                        <label for="Color">Color :</label>
                        <input type="text" placeholder="Instrument Color" class="form-control" name="color" required="">
                        </div> 
                    <div class="form-group row">
                        <label for="Price">Price :</label>
                        <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">Rp.</div>
                                </div>
                        <input type="number" placeholder="Instrument Price" class="form-control" name="price" required="">
                        </div> 
                        <small id="priceHelp" class="form-text text-muted">max number : 7. tanpa titik / without dot(.)</small>
                     </div>   

               <div><button type="submit" class="btn btn-success">Add</button></div>
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


