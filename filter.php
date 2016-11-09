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
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.1.0.slim.min.js"></script>
  <script src="assets/js/jquery-paginate.js"></script>

  <style>
.page-navigation a {
  margin: 0 2px;
  display: inline-block;
  padding: 3px 10px;
  color: #ffffff;
  background-color: #70b7ec;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
}

.page-navigation a[data-selected] { background-color: #3d9be0; }
.container { margin:150px auto 30px auto;}
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
                        <a class="active-menu"  href="index.html"><i class="glyphicon glyphicon-home"></i> Home</a>
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            
                <div class="col-lg-3">
                  <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Cari Barang...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-2">
                    <div class="dropdown">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Urutkan
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" method="post">
                                        <li><a href="index.php">Semua Barang</a>
                                        </li>
                                        <li><a name="kelompok" href="filter.php" >Router</a>
                                        </li>
                                        <li><a href="#">Switch/Hub</a>
                                        </li>
                                        <li><a href="#">PC Komputer</a>
                                        </li>
                                        <li><a href="#">Laptop</a>
                                        </li>
                                        <li><a href="#">Tower</a>
                                        </li>
                                        <li><a href="#">Kabel Jaringan</a>
                                        </li>
                                        <li><a href="#">Stabilizer</a>
                                        </li>
                                        <li><a href="#">Access Point</a>
                                        </li>
                    </ul>
                </div>
            </div><br><br>
            
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id='myTable' class="table table-striped table-bordered table-hover" >
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
                include 'koneksi.php';
				$kelompok = $_POST['kelompok'];
				$query 		= mysql_query("SELECT * FROM barang WHERE kelompok = 'data-value'");
                $no=1;
                while($data = mysql_fetch_array($query)){
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
                        </div>
                    

                 <!-- /. ROW  -->           
    </div>
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
    

    <script src="https://code.jquery.com/jquery-3.1.0.slim.min.js"></script>
  <script src="assets/js/jquery-paginate.js"></script>

    <script>
  // Add some examples to the page
 

  // Paginate it
  $('#myTable').paginate({
    limit: 5,
    onSelect: function(obj, page) {
      console.log('Page ' + page + ' selected!' );
    }
  });
</script>

   
</body>
</html>
