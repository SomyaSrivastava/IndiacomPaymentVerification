<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>UPLOAD</title>
		<?php echo link_tag('css/bootstrap.min.css'); ?>
		<?php echo link_tag('css/bootstrap-theme.min.css'); ?>
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	</head>
    <body>

	    <?php if($result!=null) 
		
		{ ?>
		<td><img style="float:center width:450px;height=450px";" src= "<?php echo base_url('PaymentProof/'.$result->PaymentProof)?>"></td>
		
		
		<?php 
		}//if
		else
		{
				echo "<td> no image available</td>";
			}
		?>
	</body>										
	</html>






	<!--
		<td><a href="<?php //echo base_url('file/'.$result->file)?>" <!--target="_blank">click here to be</a></td> -->