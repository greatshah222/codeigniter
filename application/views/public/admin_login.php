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
      <a class="navbar-brand" href="#">Admin panel</a>
   
     <a class="navbar-brand" href="<?php echo site_url('');?>">Main Page</a>
    </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



    <?= form_open('user/search', ['class'=>'navbar-form navbar-left','role'=>'Search']) ?>
      <!--<form class="navbar-form navbar-left" role="search"> -->
        <div class="form-group">
          <input type="text" name="query" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      <?= form_close(); ?>
      <?= form_error('query',"<p class='navbar-text'>",'</p>')  ?>
      <ul class="nav navbar-nav navbar-right">
        <li>
        <?= anchor('login', 'Login') ?>

        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">

<?php echo form_open('login/admin_login',['class'=>'form-horizontal']);  ?>
  <fieldset>
    <legend>Admin login</legend>
    <?php if ( $error = $this->session->flashdata('login_failed')): ?>
    <div class="row">
    <div class="col-lg-6">
    <div class="alert alert-dismissible alert-danger">
    <?= $error ?>

</div>
</div>
</div>
<?php endif; ?>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">UserName</label>
      <div class="col-lg-10">
      <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'UserName']); ?>
         
      </div>
    </div>
    </div>
    <div class="col-lg-6">
    <?php echo form_error('username'); ?>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
       <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter your password']); ?>
        
        
      </div>
    </div>
     </div>
    <div class="col-lg-6">
    <?php echo form_error('password'); ?>
   
    </div>
    </div>
    
    

   
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
               <?php echo form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']); ?>

        
         <?php echo form_submit(['name'=>'submit','value'=>'login','class'=>'btn btn-primary']); ?>
        
      </div>
    </div>
  </fieldset>
</form>

</div>







<?php include ('public_footer.php');
?>
