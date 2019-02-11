<div>
<table class="table">
<?php
if(!empty($instrument))
            {
?>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Instrument</th>
      <th scope="col">Brand</th>
      <th scope="col">Type</th>
      <th scope="col">Color</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        <?php        
              foreach($instrument as $instrument)
              {
              ?>
                <tr>
                    <th scope="row"><?php echo $instrument->id_instrument; ?></th>
                    <td><?php echo $instrument->instrument; ?>  </td>
                    <td><?php echo $instrument->brand; ?></td>
                    <td><?php echo $instrument->type; ?></td>
                    <td><?php echo $instrument->color; ?></td>
                    <td><?php echo $instrument->price; ?></td>
                    <td>
                    <a class="btn btn-outline-success" href="<?php echo base_url('')?>Admin/Admin/Edit_Instrument_View/<?php echo $instrument->id_instrument?>">Edit</a>
                    <a class="btn btn-outline-danger" href="<?php echo base_url('')?>Admin/Admin/Delete_Instrument/<?php echo $instrument->id_instrument?>">Delete</a>
                    </td>
                </tr>
              <?php
              }
        ?>
  </tbody>
<?php
}
else{
    echo "empty data";
}

?>

</table>
</div>

<script src="<?php echo base_url();?>/js/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>js/main.js"></script>

</body>

</html>