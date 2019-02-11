<div>
<table class="table">
<?php
if(!empty($customer))
            {
?>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Gender</th>
      <th scope="col">Customer Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        <?php        
              foreach($customer as $customer)
              {
              ?>
                <tr>
                    <th scope="row"><?php echo $customer->get_customer_id(); ?></th>
                    <td><?php echo $customer->firstname; ?> <?php echo $customer->lastname; ?></td>
                    <td><?php echo $customer->get_contact_no(); ?></td>
                    <td><?php echo $customer->gender; ?></td>
                    <td><?php echo $customer->customer_email; ?></td>
                    <td><?php echo $customer->address; ?>  </td>
                    <td><a class="btn btn-outline-danger" href="<?php echo base_url('')?>Admin/Admin/Delete_User/<?php echo $customer->get_customer_id();?>">Delete</a></td>
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