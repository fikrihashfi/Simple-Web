<div>
<table class="table">
<?php
echo "Pembayaran dilakukan pada Rekening berikut : xxxx-xxxx-xxxx-xxxx a.n. Hashfi, Hubungi kontak kami di halaman pencarian setelah pembayaran.";
if(!empty($rental))
            {
?>
  <thead>
    <tr>
      <th scope="col">Customer Name</th>
      <th scope="col">Instrument</th>
      <th scope="col">Rent Date</th>
      <th scope="col">Rent for</th>
      <th scope="col">Pieces</th>
    </tr>
  </thead>
  <tbody>
        <?php        
              foreach($rental as $rental)
              {
              ?>
                <tr>
                    <td><?php echo $rental->firstname; ?> <?php echo $rental->lastname; ?> </td>
                    <td><?php echo $rental->instrument; ?></td>
                    <td><?php echo $rental->date; ?></td>
                    <td><?php echo $rental->days; ?> <?php echo "days"; ?></td>
                    <td><?php echo $rental->pieces; ?></td>
                </tr>
              <?php
              }
        ?>
  </tbody>
<?php
}
else{
    echo "";
}

?>

</table>
</div>

<script src="<?php echo base_url();?>/js/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>js/main.js"></script>

</body>

</html>