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
      <a class="navbar-brand" href="<?php echo site_url('');?>">Main page</a>
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>
     <ul class="nav navbar-nav navbar-right">
        <li>
        <a href="<?php echo base_url(); ?>login/logout"> 
Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">

<div class="row">
<div class="col-lg-6 col-lg-offset-6">

<a href="<?php echo base_url(); ?>admin/store_article" class="btn btn-lg btn-primary pull-right">Add Article </a>
</div>
</div>
	
 <?php if ( $feedback = $this->session->flashdata('feedback')): 
 	       $feedback_class = $this->session->flashdata('feedback_class');
 	       ?>

    <div class="row">
    <div class="col-lg-6">
    <div class="alert alert-dismissible <?= $feedback_class ?>">
    <?= $feedback ?>

</div>
</div>
</div>
<?php endif; ?>
	<table class="table">
		
		<thead>
		<th> Serial number </th>
		<th> Title </th>
		<th>Action</th>
		</thead>
		<tbody>
		<?php if( count($articles) ): 
		$count = $this->uri->segment(3, 0);
         foreach($articles as $article ): ?>
		<tr>
			<td> <?= ++$count ?> </td>
			<td>
			<?= $article->title ?> 
			</td>
			<td> 
			<div class="row">
			<div class="col-lg-2">
					<?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-primary']); ?>
			</div>
			
		

				
			<!--<a href="" class="btn btn-primary">Edit </a> -->
           
			<div class="col-lg-2">
			<?= 

			    form_open('admin/delete_article'),
			    form_hidden('article_id', $article->id),
			    form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']);


                form_close();
			      ?>
				
			</div>
			</div>
			
				<!--<a href="" class="btn btn-danger">Delete </a> -->
			</td>
		</tr>
			
<?php endforeach;  ?>

<?php else: ?>
	<tr>
		<td colspan="3">
		 sorry you have no record 
		</td>
	</tr>

	<?php endif; ?>

		</tbody>
	</table>

	<?= $this->pagination->create_links(); ?>
</div>



<?php include_once('admin_footer.php'); ?>



