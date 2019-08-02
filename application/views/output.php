 <?php 

   if($ifan->ifan_status != 1) { $top = '300px;';} else { $top = '100px;';}
 if($this->session->userdata('site_lang') == 'english'){ ?>
    <img src="<?php echo base_url();?>assets/images/infographic_en.png" class="img1" style="padding-top: <?php echo $top;?>">
   <?php } else{ ?>
    <img src="<?php echo base_url();?>assets/images/infographic_g.jpg" class="img1" style="padding-top: <?php echo $top;?>">
  <?php } ?>
