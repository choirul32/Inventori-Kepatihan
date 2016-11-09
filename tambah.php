  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Free Bootstrap Admin Template : Binary Admin</title>
   <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
   <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
   <link rel="stylesheet" href="assets/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/css/datepicker.css" />
   <link rel="stylesheet" href="assets/css/uniform.css" />
   <link rel="stylesheet" href="assets/css/select2.css" />
   <link rel="stylesheet" href="assets/css/matrix-style.css" />
   <link rel="stylesheet" href="assets/css/matrix-media.css" />
   <link rel="stylesheet" href="assets/css/bootstrap-wysihtml5.css" />
   <link href="assets/css/bootstrap.css" rel="stylesheet" />
   <link href="assets/css/font-awesome.css" rel="stylesheet" />
   <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
 </head>
 <body>
  <div id="wrapper">

   <!-- /. NAV TOP  -->
   <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav" id="main-menu">

       <div style="font-size: 14px;
       background: #grey;
       box-shadow: inset 0px -10px 0px rgba(0, 0, 0, 0.2);
       padding: 18px 5px;
       color: #fff;">
       <img src="assets/img/logo.png" width="150px">
     </div>	


     <li>
      <a   href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a>
    </li>
    <li>
      <a  class="active-menu" href="tambah.php"><i class="glyphicon glyphicon-plus"></i> Tambah Barang</a>
    </li>                   
    <li>
      <a href="#"><i class="glyphicon glyphicon-time"></i> Riwayat<span class="fa arrow"></span></a>
      <ul class="nav nav-second-level">
        <li>
          <a href="#">Barang Masuk</a>
        </li>
        <li>
          <a href="#">Barang Keluar</a>
        </li>
      </ul>
    </li>  
    <li  >
      <a  href="blank.html"><i class="glyphicon glyphicon-user"></i> Daftar User</a>
    </li>
    <li  >
      <a  href="blank.html"><i class="glyphicon glyphicon-off"></i> Logout</a>
    </li>	
  </ul>

</div>

</nav>  
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
  <div class="col-md-4">
  <form class="form-horizontal">
    <div class="control-group">
              <label class="control-label">Select input</label>
              <div class="controls">
                <select >
                  <option>First option</option>
                  <option>Second option</option>
                  <option>Third option</option>
                  <option>Fourth option</option>
                  <option>Fifth option</option>
                  <option>Sixth option</option>
                  <option>Seventh option</option>
                  <option>Eighth option</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Color picker (rgba)</label>
              <div class="controls">
                <input data-color="rgba(344,232,53,0.5)" value="rgba(344,232,53,0.5)" data-color-format="rgba" class="colorpicker span11" type="text">
                <span class="help-block">Color picker with Formate of  (rgba)</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Date picker (dd-mm)</label>
              <div class="controls">
                <input data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="01-02-2013" class="datepicker span11" type="text">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>
            <div class="control-group">
              <label class="control-label">Date Picker (mm-dd)</label>
              <div class="controls">
                <div data-date="12-02-2012" class="input-append date datepicker">
                  <input value="12-02-2012" data-date-format="mm-dd-yyyy" class="span11" type="text">
                  <span class="add-on"><i class="icon-th"></i></span> </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Color Picker (rgb)</label>
              <div class="controls">
                <div data-color-format="rgb" data-color="rgb(155, 142, 180)" class="input-append color colorpicker colorpicker-rgb">
                  <input value="rgb(155, 142, 180)" class="span11" type="text">
                  <span class="add-on"><i style="background-color: rgb(155, 142, 180)"></i></span> </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Color Picker (hex)</label>
              <div class="controls">
                <div data-color-format="hex" data-color="#000000" class="input-append color colorpicker">
                  <input value="#000000" class="span11" type="text">
                  <span class="add-on"><i style="background-color: #000000"></i></span> </div>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
              <button type="submit" class="btn btn-primary">Reset</button>
              <button type="submit" class="btn btn-info">Edit</button>
              <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
          </form>
  </div>
  <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(function() {
    $( "#datepicker" ).datepicker({
       dateFormat:'yy-mm-dd',
      changeMonth: true,
      changeYear: true
    });
  });
  </script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/jquery.ui.custom.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/bootstrap-colorpicker.js"></script> 
<script src="assets/js/bootstrap-datepicker.js"></script> 
<script src="assets/js/jquery.toggle.buttons.js"></script> 
<script src="assets/js/masked.js"></script> 
<script src="assets/js/jquery.uniform.js"></script> 
<script src="assets/js/select2.min.js"></script> 
<script src="assets/js/matrix.js"></script> 
<script src="assets/js/matrix.form_common.js"></script> 
<script src="assets/js/wysihtml5-0.3.0.js"></script> 
<script src="assets/js/jquery.peity.min.js"></script> 
<script src="assets/js/bootstrap-wysihtml5.js"></script>


</body>
</html>
