<?php include_once('header.php'); ?>

<div class="container min-height">
    <legend><h3 align="center"> Wellcome to Shoping Cart </h3> </legend>
    <div class="row row-centered">
        <table class="table table-hover table-responsive">
            <thead> 
                <tr>
                    <th> Delete </th>
                    <th> Product Name </th>
                    <th> Quantity </th>
                    <th> Price </th>
                </tr>  
            </thead>
            <tbody>
                
                <?php  
                    $quantity = 0;
                    $total = null;
                    foreach ($cart as $row): $quantity +=$row->pro_quantity; ?>
                    <tr> 
                        <td align="left"> <a class="btn btn-danger" href="<?php echo base_url().'cart/update_cart/'.$row->cart_id?>">Delete </a> </td>
                        <td align="left"> <?php echo $row->pro_name;?> </td>
                        <td align="left"> <?php echo $row->pro_quantity;?> </td>
                        <td align="left"> <?php echo $row->amount;?> </td>
                        <?php $total = $total+$row->amount;?>
                    </tr>
                <?php endforeach;?>
            </tbody>
            <tfoot>
                <tr><strong>
                    <td colspan="3" align="center"> <strong>Total Items</strong> </td>
                    <td align="left"> <?php echo $quantity;?></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><strong> Total Amount</strong> </td>
                    <td align="left"> <strong> <?php echo $total;?> </strong> </td>
                </tr>
            </tfoot>
        </table>
        <a class="btn btn-primary" href="<?php echo base_url().'all_products';?>"> Continue</a>
        <a class="btn btn-primary" href="<?php echo base_url().'Products'?>"> Order </a>
    </div>
</div>

<?php include_once('footer.php'); 

