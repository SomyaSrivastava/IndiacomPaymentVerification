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
          <div class="container">
     <h1 style="text-align:center">PAYMENT PROOF</h1>

     <?php echo $error; ?>
    
 
	   <form class="form-horizontal" role="form" action="<?php echo base_url('User/upload_file');?>" method="post" enctype="multipart/form-data">
	  <!-- <?php// validation_errors()?> -->
	   <?php echo"<br>"?>
	  	 <div class="container">
			
			<div class="form-group">
			<label class="control-label col-sm-3" for="MEMBER_ID">MEMBER ID:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control input-lg" name="MEMBER_ID" placeholder="Enter your member id" required />
            </div>
			</div>

			<div class="form-group">
			<label class="control-label col-sm-3" for="event_id">EVENT ID:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control input-lg" name="event_id" placeholder="Enter the event id " required />
            </div>
			</div>

            <div class="form-group">
			<label  class="control-label col-sm-3" for="PAYEMENTMODE">PAYEMENTMODE:</label>
            <input type="radio" name="mode"  value="demand-draft" required>DD
            <input type="radio" name="mode"   value="cheque" required>CHEQUE
			<input type="radio" name="mode"  value="bank-cash-deposit-slip" required>CASH SLIP
			</div>

			<div class="form-group">
			<label class="control-label col-sm-3" for="pnumber">DD/Cheque/Cash Receipt Number:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control input-lg" name="pnumber" placeholder="Enter DD/Cheque/Cash Receipt Number " required />
            </div>
			</div>

			<div class="form-group">
			<label class="control-label col-sm-3" for="bname">Bank and Branch Name(in case of DD/Cheque):</label>
            <div class="col-sm-4">
            <input type="text" class="form-control input-lg" name="bname" placeholder="Enter bank and branch name" required />
            </div>
			</div>

			

            <div class="form-group">
			<label class="control-label col-sm-3" for="amount">AMOUNT:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control input-lg" name="amount" placeholder="Enter the amount" required />
            </div>
			</div>

			<div class="form-group">
			<label class="control-label col-sm-3" for="currency">CURRENCY:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control input-lg" name="currency" placeholder="Enter the currency in which payment is made" required />
            </div>
			</div>
			
			<div class="form-group">
		   <label class="control-label col-sm-3" for="Pdate">PAYMENT DATE(as mentioned on payment documents):</label>
		   <div class="col-sm-6">
		   <input name="paymentDate" type="date" required>
           </div>
		   </div>



			<div class="form-group">
		    <label class="control-label col-sm-3" for="UPLOADFILE">UPLOAD FILE:</label>
			<div class="col-sm-6">
			<input type="file" name="file" required/>
			</div>
			</div>

			 
			 
			<input type="hidden" name="id" value="<?php echo $payment_id+1;?>">

			
			<div class="form-group">
			 <div class="col-sm-2 col-sm-offset-3">
            <button type="submit" class="btn btn-block btn btn-primary">SUBMIT</button>
			<!--<span class="pull-right"><a href="#">HOME</a></span><span><a href="#">FORGOT-MEMBER_ID</a></span>-->
            </div>
			</div>
        
        </form>
		</div>   
	</body>
	</html>