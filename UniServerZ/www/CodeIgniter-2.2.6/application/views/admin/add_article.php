<!DOCTYPE html>
<html>
<head>
  <title>Admin panel</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"> 

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('');?>">Admin panel</a>
            <a class="navbar-brand" href="<?php echo site_url('admin/dashboard');?>">MY Dashboard</a>

    </div>
     <ul class="nav navbar-nav navbar-right">
        <li>
        <a href="<?php echo base_url(); ?>login/logout"> 
Logout</a></li>
      </ul>
    </div>
  </div>
</nav><div class="container">


<?php echo form_open_multipart('admin/store_article', ['class'=>'form-horizontal'])  ?>
<?php echo form_hidden('user_id', $this->session->userdata('user_id'));  ?>
  <?= form_hidden('created_at', date('Y-m-d H:i:s')) ?>
   <fieldset>
    <legend>ADD ARTICLE</legend>
    
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Article Title</label>
      <div class="col-lg-8">
      <?php echo form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Article Title','value'=>set_value('title')]); ?>
         
      </div>
    </div>
    </div>
    <div class="col-lg-6">
    <?php echo form_error('title'); ?>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputPassword" class="col-lg-4 control-label">Article Body</label>
      <div class="col-lg-8">
       <?php echo form_textarea(['name'=>'body','class'=>'form-control','placeholder'=>'Article Body','value'=>set_value('body')] ); ?>
        
        
      </div>
    </div>
     </div>

    <div class="col-lg-6">
    <?php echo form_error('body'); ?>
   
    </div>
    </div>
     <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-4 control-label">Select Image</label>
      <div class="col-lg-8">
      <?php echo form_upload(['name'=>'userfile','class'=>'form-control']); ?>
         
      </div>
    </div>
    </div>
    <div class="col-lg-6">
<?php if(isset($upload_error)) echo $upload_error ?>
    </div>
    </div>
    
    

   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
               <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); ?>

        
         <?php echo form_submit(['name'=>'submit','value'=>'Submit','class'=>'btn btn-primary']); ?>
        
      </div>
    </div>
  </fieldset>
</form>

</div>
<?php include_once('admin_footer.php'); ?>
