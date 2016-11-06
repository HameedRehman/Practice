<!DOCTYPE html>
<html lang="en">
<head>
<title> welcome </title>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-theme.min.css'?>">
<script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 <!--....-->
        <div class="navbar navbar-default navbar-fixed-top" >

              <div>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url().'home'?>">E-Buy</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url().'home'?>"><span class="glyphicon glyphicon-home"></span> Home </a>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <?php
                        if( $item !== null): 
                            foreach ($item as $row): ?>
                               <li><a href="#"> <?php echo $row->cat_name; ?></a></li>
                               <?php if( $company !== null): ?>
                               <li class="dropdown-menu-left"><a class="dropdown-menu-left" data-toggle="dropdown-menu-left" href="#"></a>
                               <ul class="dropdown-menu-left">
                                   <?php foreach($company as $c):?>
                                     <?php if($c->cat_id === $row->cat_id):?>
                                   <li class="list-group-item"><a href="<?php echo base_url().'all_products/show_company_items/'.$c->comp_id.'/'.$row->cat_name;?>"> <?php echo $c->comp_name; ?></a></li>
                                    <?php endif;?>
                                   <?php endforeach; ?>
                               </ul>
                               </li>
                              <?php endif; ?>

                         <?php  endforeach;  
                         else: ?>
                             <li><a href="#"> No category select </a></li>
                        <?php endif; ?>
                  </ul>
                </li>
                <li> <a href="<?php echo base_url().'all_products'?>">All Products</a> </li>
                <li><a href="<?php echo base_url().'cart'?>">
                      <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart
                    </a></li>
              </ul>
                <?php 
                    $data = $this->session->userdata('id');

                    if($data !== null):?>
                       <ul class="nav navbar-nav navbar-right">
                         <li><a href="<?php echo base_url().'logout'?>"><span class="glyphicon glyphicon-log-out"></span> Logout <?php echo "(".$this->session->userdata('name').")"; ?></a></li> 
                       </ul>
                   <?php else: ?>
                      <ul class="nav navbar-nav navbar-right">
                      <li><a href="<?php echo base_url().'signup'?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                      <li><a href="<?php echo base_url().'login'?>"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                      </ul>
                <?php endif;?>
            </div><!--/.nav-collapse -->
            </div>

        </div>

        <!--.....-->

</head> 
<body>   
<div class="bs-div">
    <div id="head-img">
        <img src="<?php  echo base_url().'images/header.jpg'?>" height=auto width="100%" class="img-responsive img-rounded" alt="image not found">
    </div>
</div>
