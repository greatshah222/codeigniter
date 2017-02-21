<?php include ('public_header.php'); ?>
<div class="container">
<h1>Search Result</h1>
<hr>
<table class="table">
	<thead>
		<tr>
			<td>Serial Num</td>
			<td>Article Title</td>
            <td>Published Date</td>

		</tr>
	</thead>
	<tbody>
	<tr>
	<? if( count($articles)): ?>
	<?php
	$count = $this->uri->segment(3, 0); ?>

	<?php foreach ($articles as $article ): ?>
			<td><?= ++$count ?> </td>
			<td> <?= $article->title ?> </td>
            <td><?= "Date" ?></td>
            </tr>
       	<?php endforeach; ?>
		<? else: ?>
			<tr>
				<td colspan="3"> No Records Found.</td>
			</tr>
		<? endif;?>
		</tbody>
	</table>
	
</div>





<?php include ('public_footer.php');
?>

