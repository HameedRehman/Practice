<?php include_once('header.php'); ?>
 

<div class="container">
    
            <div class="row row-centered">
                <div class="col-lg-8 col-centered">
                    <div class="well">
                        <legend>   <h3 align="center">  Login here </h3> </legend>
                        <?php if(form_error('email')): ?>
                           <div class="alert alert-dismissable alert-danger">
                               <?php echo form_error('email'); ?>
                           </div>
                        <?php elseif (form_error('password')):?>
                            <div class="alert alert-dismissable alert-danger">
                                <?php echo form_error('password'); ?>
                            </div>
                        <?php elseif($this->session->flashdata('invalid')):?>
                            <div class="alert alert-dismissable alert-danger">
                                <?php echo $this->session->flashdata('invalid'); ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo base_url().'login/data_validate';?>" method="post">
                    <fieldset>     
                          
                          
                          <input type="email" name="email" style="width:220px" class="form-control" placeholder="Enter Email" value=<?php echo set_value('email'); ?>><br>
                          
                          <input type="password" name="password" style="width:220px" class="form-control" placeholder="Enter password"><br>
                          
                              <button type="submit" class="btn btn-primary form-control"> Login </button>
                         
                       
                         
                    </fieldset>
                        </form>
                        <h5 align="center"> <a href="<?php echo base_url().'forget_pass'?>"> Forget password ?</a>
                    </div>
                </div>
                
            </div>
        </div>
<?php include_once('footer.php');

