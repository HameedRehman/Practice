<?php include_once('header.php');?>
<div class="container">
    <legend><h3 align="center"> All Products </h3> </legend>
  <ul  class="products">
    <?php foreach($all_products as $p): ?>
      <li> 
          <h3> <?php echo $p->pro_name; ?></h3>
          <img src="<?php echo base_url().'images/'.$p->pro_img;?>" width="120" width="120" />
        <small>Price Rs: <?php echo $p->pro_price; ?> </small>
        <a href="<?php echo base_url().'all_products/view_detail/'.$p->pro_id?>">Detail</a> <br>
        <a href="<?php echo base_url().'cart/add_to_cart/'.$p->pro_id?>">Add to cart | </a>
        <a href="<?php echo base_url().'cart'?>">View cart </a>
    </li>

    <?php endforeach;?>
</ul> 
<h2>hameed</h2>   
</div>
<?php include_once('footer.php');

