


<div style="width: 750px">


    <!-- Main content -->


      <!-- SELECT2 EXAMPLE -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Customer</h3>

          
        <!-- /.box-header -->
		<div class="form-group">
              
		<form method="post" action="customer_edit_save.php">
		
        <div class="box-body">
         
	   				  
											  
      <!-- /.box -->
<div class="form-group">
              
	<?php 
	include('connect.php');
	$id=$_GET['id'];
	 $result = $db->prepare("SELECT * FROM customer WHERE customer_id='$id' ");
				$result->bindParam(':userid', $date);
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){

				$name=$row['customer_name'];
				$address=$row['address'];
				$acc_name=$row['acc_name'];	
				$acc_no=$row['acc_no'];
				$contact=$row['contact'];	
				}
	
	
	?>	
	
	
       
	<div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                
                 <div class="input-group">
				   <div class="input-group-addon">
                    <b >Name</b>
                  </div>
                <input type="text" name="name" value="<?php echo $name ?>" class="form-control pull-right" required >
					 <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control pull-right" required >
                  </div>  
                  </div>
				</div>
			  
			  <div class="col-md-6">
              <div class="form-group">
                
                 <div class="input-group">
				   <div class="input-group-addon">
                    <b >Contact no</b>
                  </div>
                <input type="text" name="phone_no" value="<?php echo $contact ?>" class="form-control pull-right" required >
					
                  </div>  
                  </div>
				</div>
			  
			  
			  <div class="col-md-12">
			  <div class="form-group">
               
				  <div class="input-group">
				   <div class="input-group-addon">
                    <b >Address</b>
                  </div>
                <input type="text" name="address" value="<?php echo $address ?>" class="form-control pull-right" >
                  </div>
                  </div></div> 
              </div>
              </div>
		  
	<div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                
                 <div class="input-group">
				   <div class="input-group-addon">
                    <b >Accounted Name</b>
                  </div>
                <input type="text" name="acc_name" value="<?php echo $acc_name ?>" class="form-control pull-right"  >
					
                  </div>  
                  </div>
				</div>
			  <div class="col-md-6">
			  <div class="form-group">
               
				  <div class="input-group">
				   <div class="input-group-addon">
                    <b >Contact no (acc)</b>
                  </div>
                <input type="text" name="acc_no" value="<?php echo $acc_no ?>" class="form-control pull-right"  >
                  </div>
                  </div></div> 
              </div>
              </div>
	
	
	
	
			  <input class="btn btn-info" type="submit" value="Submit" >
			  
			  </form>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
       

        
            <!-- /.box-body -->
            
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
     </div>