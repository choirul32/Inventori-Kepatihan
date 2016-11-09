<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>Free Bootstrap Admin Template : Binary Admin</title>
 <!-- BOOTSTRAP STYLES-->
 <link href="assets/css/bootstrap.css" rel="stylesheet" />
 <!-- FONTAWESOME STYLES-->
 <link href="assets/css/font-awesome.css" rel="stylesheet" />
 <!-- MORRIS CHART STYLES-->

 <!-- CUSTOM STYLES-->
 <link href="assets/css/custom.css" rel="stylesheet" />
 <!-- GOOGLE FONTS-->
 <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
 <!-- TABLE STYLES-->


 <style>
 .paging-nav {
  text-align: right;
  padding-top: 2px;
}

.paging-nav a {
  margin: auto 1px;
  text-decoration: none;
  display: inline-block;
  padding: 1px 7px;
  background: #91b9e6;
  color: white;
  border-radius: 3px;
}

.paging-nav .selected-page {
  background: #187ed5;
  font-weight: bold;
}
</style>
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
            <a class="active-menu"  href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a>
        </li>
        <li>
            <a  href="ui.html"><i class="glyphicon glyphicon-plus"></i> Tambah Barang</a>
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

<div id="page-wrapper" >

    <div class="panel-body">
        <a href="index.php"><button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
</button></a><br><br>
        <?php

        if(isset($_POST['submit'])){

            include "koneksi.php";
    $spesifikasi= $_POST['spesifikasi']; //get the nama value from form
    $query = "SELECT * FROM barang where spesifikasi like '%$spesifikasi%' "; //query to get the search result
    $result = mysql_query($query);
    $jumlah = mysql_num_rows($result);
    $no=1;

    
    

    if($jumlah>0){
        echo 'Ditemukan '.$jumlah.' barang yang sesuai.';
        ?>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="tableData">
                <thead>
                    <tr class="info">
                     <th >NO</th>
                     <th>Kelompok Barang</th>
                     <th>Spesifikasi</th>
                     <th>Jumlah</th>
                     <th>Nama Pengadaan</th>
                     <th>Jenis Aset</th>
                     <th>Pejabat Penerima Hasil Pekerjaan (PPHP)</th>
                     <th>Tanggal</th>

                 </tr>
             </thead>
             <?php    

             while ($data = mysql_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['kelompok']; ?></td>
                    <td><?php echo $data['spesifikasi']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                    <td><?php echo $data['nama_pengadaan']; ?></td>
                    <td><?php echo $data['jenis_aset']; ?></td>
                    <td><?php echo $data['penerima']; ?></td>
                    <?php
                            $tanggal=$data['tanggal']; //format tanggal awal (Tanggal,Bulan,Tahun)
                            $ubahFormat=date('d-m-Y',strtotime($tanggal)); //merubah format tanggal
                            ?>
                            <td><?php echo $ubahFormat; ?></td>
                            
                        </tr>
                        <?php
                        $no++;}
                        ?>
                    </table>
                </div>
                <?php
            }}
            else{
                echo "<h1>Hasil tidak ditemukan</h1>";
            }
            ?>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/paging.js"></script> 
    <script type="text/javascript">
    $(document).ready(function() {
        $('#tableData').paging({limit:7});
    });
    </script>


</body>
</html>
