<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/style2.css">

 <section class="content">

        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class = "panel panel-primary">
                            <div class = "panel-heading">
                                <h4>TẤT CẢ NGƯỜI DÙNG</h4>
                                <a href="tao-tai-khoan.php">
                                    <input type="button" value="Thêm thành viên" class="print btn-default" style="margin-right: 80px; width: auto;">
                                </a>
                               
                            </div>
                        </div>
                        <div id="print">
                            <div class = "scroll">
                            <div class="body">
                                <table id = "example" class = "stripe" cellspacing = "0" >
                                <thead>
                                    <tr>
                                        <td class="hidden">ID</td>
                                        <td width="30%">Tên người dùng</td>
                                        <td width="20%">Tên đăng nhập</td>
                                        <td width="20%">User_level</td>
                                        <td width="20%">Cập nhật</td>
                                        <td width="20%">Xóa</td>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                
                                  <?php
                                    include('connect.php');
                                    $display = $con->prepare("SELECT dangnhap.iddangnhap,dangnhap.hoten,dangnhap.tendangnhap,dangnhap.phanquyen FROM dangnhap ");
                                    $display->execute();
                                    $fetch = $display->fetchAll();                               

                                      foreach($fetch as $key => $row) { 
                                      


                                  ?>
                                  <tr>
                                  <td class="hidden"><?php echo $row['iddangnhap']; ?></td>
                                  
                                  <td><?php echo $row['hoten']; ?></td>
                                  <td><?php echo $row['tendangnhap']; ?></td>
                                  <td><?php echo $row['phanquyen']; ?></td>
                                  <td><?php echo '<a href="edit_.php?iddangnhap='.$row['iddangnhap'].'">Cập nhật</a>' ?></td>
                                  <td><?php echo '<a href="delete.php?iddangnhap='.$row['iddangnhap'].'">Xóa</a>' ?></td>
                            
                                </tr>                           
                                     <?php 
                                     } ?>
                                </tbody>
                            </table>
                        </div>
                      </div>
                    </div>
                </div>
             </div>
         </div>
    </div>
</section>

  <script>
    function printDiv() {
        //Get the HTML of div
        var divElements = document.getElementById("print").innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        //Reset the page's HTML with div's HTML only
        document.body.innerHTML = "<table></table>" + divElements;
        //Print Page
        window.print();
        //Restore orignal HTML
        document.body.innerHTML = oldPage;

    }
    </script>
<script src="plugins/js/jquery-1.js"></script>
<script src="plugins/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
<?php 
include("script.php");
?>
	