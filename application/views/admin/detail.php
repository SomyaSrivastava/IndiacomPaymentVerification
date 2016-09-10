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
    <br>
    <br>
    <form class="form-horizontal" role="form" method="post" action="<?php echo base_url().'Admin/payment_verification';?>">
    <div class="form-group">
    <label class="control-label col-sm-2" for="MEMBER_ID">MEMBER_ID:</label>
    <p class="control-label col-sm-2"><?php echo $result->MEMBER_ID; ?></p>
    
    <div class="col-sm-6">
    
    <input  type="hidden" name="mid" class="form-control" id="MEMBER_ID" value= "<?php echo $result->MEMBER_ID;?>" >
    </div>
    </div>
    <div class="form-group">
    <label  class="control-label col-sm-2" for="verify">VERIFICATION:</label>
                 <input type = "radio"
                 name = "verify"
                 id = "sizeSmall"
                 value = "successfull"
                 checked = "checked" />
                 <label for = "sizeSmall">successfull</label>
          
                <input type = "radio"
                 name = "verify"
                 id = "sizeMed"
                 value = "unsuccessfull" />
                 <label for = "sizeMed">unsuccessfull</label>
                
    </div>
    <label class="control-label col-sm-3" for="pnumber">Comments:</label>
            <div class="col-sm-4">
            <input type="text" class="form-control input-lg" name="comments" placeholder="Enter comments" required="required" />
     </div>
    <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" name="dsubmit" class="btn btn-info ">Submit</button>
    </div>
    </div>
    </form>
    </body>
    </html>
