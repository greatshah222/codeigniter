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