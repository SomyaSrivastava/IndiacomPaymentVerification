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

<div align="center" class="container">
  <h1>Check payment proof of member</h1>
    <form class="form-inline" role="form" action="<?php echo base_url().'Admin/search_member';?>" method="post">
      <div class="form-group">
      <input type="text" class="form-control" name="search" id="search" placeholder="search by member id">
      </div>
      <button type="submit" class="btn btn-success" name="submit">
	  <span class="glyphicon glyphicon-search"></span> Search</button>
    </form>
	<a style="float:right" href="<?php echo base_url().'Admin';?>"class="btn btn-link btn-lg">
	<span class="glyphicon glyphicon-link"></span> Go Back</a>
	<!--<p> <?php echo $message; ?> </p>-->
	<form  action="" method="post">
     <table class="table">
	   <thead>
	   <th>PAYMENT ID</th>
	    <th>EVENT ID</th>
		<th>MEMBER ID</th>
		<th>MODE</th>
		<th>RECIEPT NUMBER</th>
		<th>BANK AND BRANCH NAME</th>
		<th>AMOUNT</th>
		<th>CURRENCY</th>
		<th>PAYMENT DATE</th>
		<th>DATE OF REQUEST</th>
		<th>file</th>
		<th>STATUS</th>
		<th>VERIFY</th>
	   </thead>
	   <tbody>
	   
	   <?php if($result==null) {
		   echo "<script> alert('NOT FOUND') </script>";		   
		 
	   } else{ ?>
	   <?php foreach($result as $row):?>
	   
	       <tr>
	         <td><?php echo $row->payment_id;?></td>
	       	   <td><?php echo $row->event_id;?></td>
			   <td><?php echo $row->MEMBER_ID;?></td>
			   <td><?php echo $row->mode;?></td>
			   <td><?php echo $row->reciept_number;?></td>
			   <td><?php echo $row->bank_branch;?></td>
			   <td><?php echo $row->amount;?></td>
			   <td><?php echo $row->currency;?></td>
			   <td><?php echo $row->payment_date;?></td>
			   <td><?php echo $row->dateOfRequest;?></td>
            <?php 
			   if($row->extension=='application/pdf') {
			   	     ?>
			   <td>
			   		<a href = "<?php echo base_url('PaymentProof/'.$row->PaymentProof);?>" class = "btn btn-info btn-sm" target="_blank">
				   <span class="glyphicon glyphicon-open"></span> open</a>
			     	<!--a href="" >click here to view pdf.</a>-->
			   </td>
			<?php }
				else {
				?>
				<td>
					<a href = "<?php echo base_url('Admin/proof/'.$row->MEMBER_ID);?>" class = "btn btn-info btn-sm">
				   <span class="glyphicon glyphicon-open"></span> open</a>
				</td>
				<?php } ?>  
				<td>
				<?php echo $row->verify;?>
				 </td>
				 
				 <td>
				   <a href="<?php echo base_url('Admin/amount/'.$row->MEMBER_ID);?>"class="btn btn-info btn-sm">
				    <span class="glyphicon glyphicon-check"></span> UPDATE</a>
				</td>
			</tr>
	   <?php endforeach;
	   } ?>
		</tbody>
	   </table>
	   </form>
	  <!-- <?php echo $links(); ?>-->
	   
</div>
</body>
</html>