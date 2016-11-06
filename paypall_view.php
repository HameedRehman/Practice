<?php include_once('header.php');?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <?php if(!empty($cart)): foreach($cart as $p): ?>
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
   
                        <div class="caption">
                            <h4 class="pull-right">$<?php echo $p->amount; ?> US</h4>
                            <h4><a href="javascript:void(0);"><?php echo $p->pro_name; ?></a></h4>
                            <p>See more snippets like this online store item at <a target="_blank" href="http://www.codexworld.com">E-Buy</a>.</p>
                        </div>
                        <div class="ratings">
                            <a href="<?php echo base_url().'products/buy/'.$this->session->userdata('id'); ?>"><img src="<?php echo base_url(); ?>assets/images/x-click-but01.gif" style="width: 70px;"></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php');
