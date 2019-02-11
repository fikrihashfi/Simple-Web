  
  
    <div class="container">

    <div class="row">

    <div class="col-lg-3">
        <!-- <h1 class="my-4">Instrument</h1> -->
        <div class="list-group"></br>
        <a href="#" class="list-group-item active">Detail</a>
        </div>
    </div>

    <div class="col-lg-9">

         <?php
          //  $data["instrument"]=$this->database->ViewInstrument();
        
              foreach($instrument as $instrument)
              {
                //   $instrument->set_brand("sabiiiii");
                // $instrument_id = $instrument->id_instrument
                if(!isset($this->session->userdata['admin_name'])){
                        $customer_id = $this->session->userdata['customer_id'];
                      }
                      else $customer_id=0;
                ?>
                 
                 <div class="card mt-4">
        <img class="card-img-top img-fluid" src="<?php echo base_url();?>/Image/<?php echo $instrument->picture; ?>" alt="">
        <div class="card-body">
            <h3 class="card-title"><?php echo $instrument->brand; ?></h3>
            <h4>Rp.<?php echo $instrument->price ?>,00</h4>
            <p class="card-text text-justify"><?php echo $instrument->description; ?></p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
            <form action="<?php echo base_url();?>Instrument/booking/booking/<?php echo $instrument->id_instrument;?>/<?php echo $customer_id;?>" method="post"  role="form">
                <div class="form-group row">
                        <!-- <label for="Price">Price :</label> -->
                        <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">pieces :</div>
                                </div>
                        <input type="number" placeholder="How much?" class="form-control" name="pieces" required="">
                        </div> 
                        <small id="piecesHelp" class="form-text text-muted">max instrument : 9.</small>
                </div>   
                <div class="form-group row">
                        <!-- <label for="Price">Price :</label> -->
                        <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">Date :</div>
                                </div>
                        <?php date_default_timezone_set("Asia/Bangkok"); ?>        
                        <input type="datetime-local" placeholder="YYYY-MM-DD hh:mm" min="<?php echo date("Y-m-d"); ?>T<?php echo date("H:i"); ?>" class="form-control" name="date" required="">
                        </div> 
                </div>   
                <div class="form-group row">
                        <!-- <label for="Price">Price :</label> -->
                        <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">Days :</div>
                                </div>
                        <input type="number" placeholder="How many days?" class="form-control" min="1" name="days" required="">
                        </div> 
                        <small id="piecesHelp" class="form-text text-muted">max day : 9.</small>
                </div>   
                
        </div>
        <button type="submit" class="btn btn-warning">&#9733;booking&#9733;
        </button>
        </form>
        </div>

        <?php   
                if(!isset($this->session->userdata['admin_name'])){
                $customer_id = $this->session->userdata['customer_id'];
                }
                else $customer_id=1;
           ?>
        <div class="card-body">
            Kritik dan Saran
            <form action="<?php echo base_url();?>Instrument/comment/comment/<?php echo $instrument->id_instrument;?>/<?php echo $customer_id;?>" method="post"  role="form">
                <div class="form-group row">
                        <!-- <label for="Price">Price :</label> -->
                        <div class="input-group mb-2">
                        <textarea rows="4" placeholder="Comment here" class="form-control" name="comment" required="" maxlength="100"></textarea>
                        </div> 
                </div>   
            <button type="submit" class="btn btn-primary">Leave a Comment</button>
            </form>

                <?php
                // echo "<li>brand: ".$alat->brand."; type: ".$alat->type."</li>";
              }
            
          ?>
        
      