<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	   <?php echo link_tag('css/bootstrap.min.css'); ?>
	   <?php echo link_tag('css/bootstrap-theme.min.css'); ?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</head>
<body>





<?=form_open(‘books/search’);?>
<?php $search = array(‘name’=>’search’,'id’=>’search’,'value’=>”,);?>
<?=form_input($search);?><input type=submit value=’Search’ /></p>
<?=form_close();?>


<table>
<tr><th>ID</th><th>Book</th><th>Author</th><th>Published</th><th>Price</th></tr>
<?php foreach($query as $item):?>
<tr>
<td><?= $item->id ?></td>
<td><?= $item->bookname ?></td>
<td><?= $item->author ?></td>
<td><?= $item->datepublished ?></td>
<td><?= $item->price ?></td>
</tr>
<?php endforeach;?>
</table>

</body>
</html>