<?php include_once('header.php'); ?>

<div class="container">
            <div class="row row-centered">
                <div class="col-lg-8 col-lg-4 col-centered">
                    <div class="well">
                        <legend><h3 align="center"> Forget Password ? </h3> </legend>
                        <?php if(form_error('email')): ?>
                           <div class="alert alert-dismissable alert-danger">
                               <?php echo form_error('email'); ?>
                           </div>
                        <?php elseif($this->session->flashdata('invalid')):?>
                            <div class="alert alert-dismissable alert-danger">
                                <?php echo $this->session->flashdata('invalid'); ?>
                            </div>
                        <?php elseif($this->session->flashdata('sent')):?>
                            <div class="alert alert-dismissable alert-success">
                                <?php echo $this->session->flashdata('sent'); ?>
                            </div>
                        <?php endif; ?>
                        
                    <fieldset>
                        
                          <?php echo form_open(base_url().'forget_pass/check_email');  ?>
                          
                          <input type="email" name="email" class="form-control" placeholder="Enter your email" value=<?php echo set_value('email'); ?>><br>
                     
                          <button type="submit" class="btn btn-primary form-control"> Submit </button>
                    </fieldset>
                        
                    </div>
                </div>
                
            </div>
        </div>
<?php include_once('footer.php');

