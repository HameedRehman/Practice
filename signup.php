<?php include_once('header.php'); ?>
 
<div class="container">
            <div class="row row-centered">
                <div class="col-lg-8 col-lg-4 col-centered">
                    <div class="well">
                        <legend><h3 align="center"> Registration Form </h3> </legend>
                        <?php if (form_error('cust_name')):?>
  
                               <div class="alert alert-dismissable alert-danger">
                                    <?php echo form_error('cust_name'); ?> 
                               </div>
                                <?php elseif (form_error('cust_phone')): ?>
                                  <div class="alert alert-dismissable alert-danger">
                                         <?php echo form_error('cust_phone'); ?> 
                                  </div>
                                  <?php elseif(form_error('cust_add')):?>
                                     <div class="alert alert-dismissable alert-danger">
                                         <?php echo form_error('cust_add'); ?> 
                                     </div>
                                     <?php elseif(form_error('cust_mail')):?>
                                     <div class="alert alert-dismissable alert-danger">
                                         <?php echo form_error('cust_mail'); ?>
                                     </div>
                                     <?php elseif(form_error('cust_pasword')):?>
                                     <div class="alert alert-dismissable alert-danger">
                                         <?php echo form_error('cust_pasword'); ?>
                                     </div>
                                     <?php elseif(form_error('cust_repasword')):?>
                                     <div class="alert alert-dismissable alert-danger">
                                         <?php echo form_error('cust_repasword'); ?>
                                     </div>
                                     <?php elseif($reg = $this->session->flashdata('insert')):?>
                                     <div class="alert alert-dismissable alert-danger">
                                         <?php echo $reg; ?>
                                     </div>
                            <?php endif; ?>
                        
                        <form action="<?php echo base_url()."signup/data_validate";?>" class="form-inline" method="post">
                                <input type="text" name="cust_name" class="form-control" value="<?php echo set_value('cust_name'); ?>" style="width:200px;" placeholder='Enter your full name'> 
                                <br><br>
                                <input type="number" name="cust_phone" class="form-control" minlength="11" maxlength="11" value="<?php echo set_value('cust_phone'); ?>" style="width:200px;" placeholder='Enter your phone number'> <br><br>
                                 <br><br>
                                
                                <input type="text" name="cust_add" class="form-control" value="<?php echo set_value('cust_add'); ?>" style="width:200px;" placeholder='Enter your address'> 
    <br><br>
                               
                                <input type="email" name="cust_mail" class="form-control" value="<?php echo set_value('cust_mail'); ?>" style="width:200px;" placeholder='Enter your Email'> <br><br>
<br><br>
                               
       <br>                         <input type="password" name="cust_pasword" class="form-control" style="width:200px" placeholder='Enter your password'>
          <br><br>                      
                                <input type="password" name="cust_repasword" class="form-control" style="width:200px" placeholder='Re-enter your password'> <br><br>
                                <p align="center">
                                <button type="submit" class="btn btn-primary form-control" style="width:200px" > Register </button>
                                </p>
                              
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

<?php include_once('footer.php'); ?>
