<div>
<table class="table">
<?php
echo "Pembayaran dilakukan pada Rekening berikut : xxxx-xxxx-xxxx-xxxx a.n. Hashfi, Hubungi kontak kami di halaman pencarian setelah pembayaran";
if(!empty($booking))
            {
?>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Instrument</th>
      <th scope="col">Booking Date</th>
      <th scope="col">Booking for</th>
      <th scope="col">Pieces</th>
      <th scope="col">Inst.Price</th>
      <th scope="col">Total Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        <?php        
              foreach($booking as $booking)
              {
              ?>
                <tr>
                    <th scope="row"><?php echo $booking->id_instrument; ?></th>
                    <td><?php echo $booking->firstname; ?> <?php echo $booking->lastname; ?> </td>
                    <td><?php echo $booking->instrument; ?></td>
                    <td><?php echo $booking->date; ?></td>
                    <td><?php echo $booking->days; ?> <?php echo "days"; ?></td>
                    <td><?php echo $booking->pieces; ?></td>
                    <td><?php echo $booking->price; ?></td>
                    <?php $total = $booking->price*$booking->pieces*$booking->days; ?>
                    <td><?php echo $total; ?></td>
                    <td>
                    <?php if(isset($this->session->userdata['admin_name'])){ ?>
                    <?php if($booking->status==0){ ?>
                    <a class="btn btn-outline-danger" href="<?php echo base_url('')?>Admin/Admin/Status_Bayar/<?php echo $booking->id_instrument?>/<?php echo $booking->customer_id?>/1">Belum bayar</a>
                    <?php }else{ ?>
                    <a class="btn btn-outline-success" href="<?php echo base_url('')?>Admin/Admin/Status_Bayar/<?php echo $booking->id_instrument?>/<?php echo $booking->customer_id?>/0">Sudah bayar</a>
                        <?php } ?>
                        <a class="btn btn-outline-danger" href="<?php echo base_url('')?>Admin/Admin/Delete_Booking/<?php echo $booking->id_instrument?>/<?php echo $booking->customer_id?>">Delete</a>
                      <?php } ?>
                    </td>
                </tr>
              <?php
              }
        ?>
  </tbody>
<?php
}
else{
    // echo "\n.Data Kosong";
}

?>

</table>
</div>

<script src="<?php echo base_url();?>/js/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>js/main.js"></script>

</body>


</html>