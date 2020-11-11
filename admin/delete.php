<?php 
    function Location($url)
                        { ?>
                            <script type ="text/javascript">
                            window.location = "<?=$url?>";
                            </script>
<?php }?>
<?php
  //Buoc 1
  $conn=mysqli_connect('localhost','root','','dhtl');
//buoc2: kiem tra va xu ly loi neu co
if(!$conn)//hieu: conn khac TRUE
{
   die('Error...'.mysqli_connect_error());
}
else {
    if (!isset($_GET['iddangnhap'])) {
        die("Thông số bị thiếu!");  
      }
      
      $iddangnhap = intval($_GET['iddangnhap']);
   //buoc 3: Thuc hien truy van du lieu
    $sql="DELETE from dangnhap where iddangnhap = '$iddangnhap'";
    $result =mysqli_query($conn,$sql);
    echo "<script>alert('Đã xóa người dùng')</script>";
    include("tat-ca-nguoi-dung.php"); 
}
?>