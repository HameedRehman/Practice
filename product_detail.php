<?php include_once('header.php'); ?>
<div class="container min-height">
    <legend><h3 align="center"> Detail </h3> </legend>
  <ul class="products">
    <?php foreach($detail as $d): ?>
      <div class="products">
          <img src="<?php echo base_url().'images/'.$d->pro_front; ?>" height="120px" width=120px" alt="">
      </div>
      <div class="products">
          <img src="<?php echo base_url().'images/'.$d->pro_left; ?>" height="120px" width=120px" alt="">
      </div>
      <div class="products">
          <img src="<?php echo base_url().'images/'.$d->pro_right; ?>" height="120px" width=120px" alt="">
      </div>
      <div class="products">
          <img src="<?php echo base_url().'images/'.$d->pro_back; ?>" height="120px" width=120px" alt="">
      </div>
        <a href="<?php echo base_url().'cart/add_to_cart/'.$d->pro_id?>">Add to cart </a>
        <a href="<?php echo base_url().'cart'?>">View cart </a>
    <?php endforeach;?>
</ul>    
</div>
<?php include_once('footer.php');
