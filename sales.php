<!DOCTYPE html>
<html>
<?php 
include("head.php");
include("connect.php");
?>
<body class="hold-transition skin-blue layout-top-na">
<?php 
include_once("auth.php");
$r=$_SESSION['SESS_LAST_NAME'];

if($r =='Cashier'){

include_once("sidebar2.php");
}
if($r =='admin'){

//include_once("sidebar.php");
}
?>




<link rel="stylesheet" href="datepicker.css"
        type="text/css" media="all" />
    <script src="datepicker.js" type="text/javascript"></script>
    <script src="datepicker.ui.min.js"
        type="text/javascript"></script>
 <script type="text/javascript">
     
		 $(function(){
        $("#datepicker1").datepicker({ dateFormat: 'yy/mm/dd' });
        $("#datepicker2").datepicker({ dateFormat: 'yy/mm/dd' });
       
    });

    </script>

	



    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="color: red"> 
        <?php  $id=$_GET['id'];
		  $result = $db->prepare("SELECT * FROM customer WHERE customer_id='$id' ");
				$result->bindParam(':userid', $date);
                $result->execute();
                for($i=0; $row = $result->fetch(); $i++){
				echo $row['customer_name'];
				}
				 ?> 
        <small>Invoice</small>
      </h1>
    </section>
	  <form action="save_lorry_sales.php" method="post">
	  
     <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
           <span class="info-box-icon bg-yellow"><img src="icon/12.5.png" style="width: 40px"></span>

            <div class="info-box-content">
              <span  style="font-size: 25px">12.5Kg Refil</span>
              <span class="info-box-number">
				<input name="1" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><img src="icon/5.png" style="width: 40px"></span>

            <div class="info-box-content">
              <span  style="font-size: 25px">5Kg Refil</span>
              <span class="info-box-number">
				<input name="2" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
          <span class="info-box-icon bg-yellow"><img src="icon/2.png" style="width: 25px"></span>

            <div class="info-box-content">
              <span  style="font-size: 25px">2Kg Refil</span>
              <span class="info-box-number">
				<input name="4" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
           <span class="info-box-icon bg-yellow"><img src="icon/37.5.png" style="width: 27px"></span>

           <div class="info-box-content">
              <span  style="font-size: 25px">37.5Kg Refil</span>
              <span class="info-box-number">
				<input name="3" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
           <span class="info-box-icon bg-gray"><img src="icon/12.5.png" style="width: 40px"></span>

            <div class="info-box-content">
              <span  style="font-size: 25px">12.5Kg Cylinder</span>
              <span class="info-box-number">
				<input name="5" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-gray"><img src="icon/5.png" style="width: 40px"></span>

            <div class="info-box-content">
              <span  style="font-size: 25px">5Kg Cylinder</span>
              <span class="info-box-number">
				<input name="6" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
          <span class="info-box-icon bg-gray"><img src="icon/2.png" style="width: 25px"></span>

            <div class="info-box-content">
              <span  style="font-size: 25px">2Kg Cylinder</span>
              <span class="info-box-number">
				<input name="8" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div> 
          <!-- /.info-box -->
        </div>
		 
		 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
           <span class="info-box-icon bg-gray" ><img src="icon/37.5.png" style="width: 27px"></span>

           <div class="info-box-content">
              <span  style="font-size: 25px">37.5Kg Cylinder</span>
              <span class="info-box-number">
				<input name="7" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
        <span class="info-box-icon bg-yellow"><img src="icon/rep.png" style="width: 70px"></span>

           <div class="info-box-content">
              <span  style="font-size: 25px">Regulator Pack</span>
              <span class="info-box-number">
				<input name="18" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		 
<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
        <span class="info-box-icon bg-yellow"><img src="icon/regulater.png" style="width: 70px"></span>

           <div class="info-box-content">
              <span  style="font-size: 25px">Regulator </span>
              <span class="info-box-number">
				<input name="10" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		 
		 
<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
        <span class="info-box-icon bg-yellow"><img src="icon/regulater.png" style="width: 70px"></span>

           <div class="info-box-content">
              <span  style="font-size: 25px">Regulator IGT</span>
              <span class="info-box-number">
				<input name="16" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 

<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
        <span class="info-box-icon bg-yellow"><img src="icon/hp.png" style="width: 70px"></span>

           <div class="info-box-content">
              <span  style="font-size: 25px">High Pressure Regulator </span>
              <span class="info-box-number">
				<input name="11" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		 
		 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
        <span class="info-box-icon bg-yellow"><img src="icon/hose.png" style="width: 70px"></span>

           <div class="info-box-content">
              <span  style="font-size: 25px">Hose </span>
              <span class="info-box-number">
				<input name="12" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		 
		 <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
        <span class="info-box-icon bg-yellow"><img src="icon/clip.png" style="width: 70px"></span>

           <div class="info-box-content">
              <span  style="font-size: 25px">Clip </span>
              <span class="info-box-number">
				<input name="13" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		 
		  <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
        <span class="info-box-icon bg-yellow"><img src="icon/lanten.png" style="width: 50px"></span>

           <div class="info-box-content">
              <span  style="font-size: 25px">Lantern </span>
              <span class="info-box-number">
				<input name="14" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		 
		  <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
        <span class="info-box-icon bg-yellow"><img src="icon/stv.png" style="width: 70px"></span>

           <div class="info-box-content">
              <span  style="font-size: 25px">Stove </span>
              <span class="info-box-number">
				<input name="15" style="font-size: 30px; width:100px; color: red" type="number"></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		  
		  
        <!-- /.col -->

        <!-- /.col -->
      </div>
	<div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">New Sales</h3>
         <input type="hidden"  name="cus_id" value="<?php echo $_GET['id']; ?>"  >		  
		  <input class="btn btn-info" type="submit" value="Submit" >
			</form>
			
            </div>
          </div>	  
    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      
		  <a  href="sales_start.php"><button  class=" btn btn-success" style="width: 123px; height:35px; margin-:-8px;margin-left:8px;" >
				Back To Home 
                </button></a>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("YYYY/MM/DD", {"placeholder": "YYYY/MM/DD"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("YYYY/MM/DD", {"placeholder": "YYYY/MM/DD"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'YYYY/MM/DD h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
	$('#datepicker').datepicker({  autoclose: true, datepicker: true,  format: 'yyyy/mm/dd '});
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
