 <div class="card card-outline-secondary my-4">
        <div class="card-header">
            Comments
        </div>
<div class="card-body">
    <?php
    if(!empty($comment))
    {
    if(!isset($this->session->userdata['admin_name'])){
            $customer_id = $this->session->userdata['customer_id'];
          }
          else $customer_id=1;

    ?>

        <?php
        foreach($comment as $comment)
              {
        ?>
       
            <p style="color:white;"><?php echo $comment->comment;?></p>
            <?php
            if(isset($this->session->userdata['admin_name'])){
                if($comment->id_customer!=1){ 
                    ?>
                <small class="text-muted">Posted by <?php echo $comment->firstname;?> on <?php echo $comment->date; ?></small></br>
                        <?php
                    ?>
                <a class="btn btn-outline-danger" href="<?php echo base_url('')?>Admin/Admin/Delete_Comment/<?php echo $comment->id_comment?>/<?php echo $comment->id_instrument?>/<?php echo $comment->id_customer?>">Delete Comment</a>
                    <?php
                }
                else{
                ?>
                <small style="color:red;">Posted by <?php echo "Admin";?> on <?php echo $comment->date; ?></small></br>
                <?php
                if(isset($this->session->userdata['admin_name'])){
                ?>
                <a class="btn btn-outline-danger" href="<?php echo base_url('')?>Admin/Admin/Delete_Comment/<?php echo $comment->id_comment?>/<?php echo $comment->id_instrument?>/<?php echo $comment->id_customer?>">Delete Comment</a>
                <?php
                    }
                }
            }
            else{
                if($comment->id_customer!=1){ 
                    ?>
                <small class="text-muted">Posted by <?php echo $comment->firstname;?> on <?php echo $comment->date; ?></small></br>
                        <?php
                        if($comment->id_customer==$this->session->userdata['customer_id']){
                    ?>
                <a class="btn btn-outline-danger" href="<?php echo base_url('')?>Admin/Admin/Delete_Comment/<?php echo $comment->id_comment?>/<?php echo $comment->id_instrument?>/<?php echo $comment->id_customer?>">Delete Comment</a>
                    <?php
                        }
                }
                else{
                ?>
                <small style="color:red;">Posted by <?php echo "Admin";?> on <?php echo $comment->date; ?></small></br>
                <?php
                if(isset($this->session->userdata['admin_name'])){
                ?>
                <a class="btn btn-outline-danger" href="<?php echo base_url('')?>Admin/Admin/Delete_Comment/<?php echo $comment->id_comment?>/<?php echo $comment->id_instrument?>/<?php echo $comment->id_customer?>">Delete Comment</a>
                <?php
                    }
                }
            }
            ?>
            <hr>
        <?php
            }
        }
        else{
            ?>
            <div class="card-body">
                <p style="color:red;"><?php echo "Belum ada komentar";?></p>
                <small class="text-muted">Posted by <?php echo "admin"?></small>
                <hr>
            <?php
        }

        ?>
        </div>
        </div>
    </div>
    </div>
    
    </div>

    </div>

    </div>
