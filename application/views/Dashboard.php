
    <!-- Page Content -->
    <div class="container">

      <div class="flex-row d-flex justify-content-center">
        <!-- /.col-lg-3 -->

        <div class="col-lg-13">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner slide-img" role="listbox">
              <div class="carousel-item active ">
                <img class="d-block img-fluid" src="<?php echo base_url();?>/Image/PianoGuitar.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo base_url();?>/Image/Piano.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo base_url();?>/Image/flute.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>



          <div class="row">
          
          <?php
          //  $data["instrument"]=$this->database->ViewInstrument();
          $this->load->helper('url');
           if(!empty($instrument))
            {
              foreach($instrument as $alat)
              {
                // $id = $alat->id_instrument;
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                <div class="custom-card h-100" >
                  <a href="<?php echo base_url();?>Instrument/Instrument/Instrument_Detail_View/<?php echo $alat->id_instrument;?>"><img class="card-img-top instrument-img" src="<?php echo base_url();?>/Image/<?php echo $alat->picture; ?>" alt=""></a>
                  <div class="card-body" style="font-size:1.2vw;">
                    <h4 class="card-title" style="font-size:2vw;">
                      <a href="<?php echo base_url();?>Instrument/Instrument/Instrument_Detail_View/<?php echo $alat->id_instrument; ?>"><?php echo $alat->instrument;?> <?php echo $alat->brand; ?></a>
                    </h4>
                    <h5 style="font-size:2vw;">Rp.<?php echo $alat->price ?>,-/day</h5>
                    <p class="card-text">type : <?php echo $alat->type ?></p>
                    <p class="card-text">color : <?php echo $alat->color ?></p>      
                  </div>
                  <div class="card-footer">
                  <a href="<?php echo base_url();?>Instrument/Instrument/Instrument_Detail_View/<?php echo $alat->id_instrument; ?>" class="btn btn-success"> View Instrument</a>
                  </div>
                </div>
              </div>
                <?php
                // echo "<li>brand: ".$alat->brand."; type: ".$alat->type."</li>";
              }
            }
          ?>

          <!-- <div class="col-lg-4 col-md-6 mb-4">
                <div class="custom-card h-100">
                  <a href="#"><img class="card-img-top instrument-img" src="<?php echo base_url();?>/Image/1.jpg" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">a</a>
                    </h4>
                    <h5>Rp.40.000,-/day</h5>
                    <p class="card-text">az</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  </div>
                </div>
              </div> -->

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->   

    </div>
    <!-- /.container -->
 