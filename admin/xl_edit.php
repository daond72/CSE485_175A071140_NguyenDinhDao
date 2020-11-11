<?php 
    function Location($url)
                        { ?>
                            <script type ="text/javascript">
                            window.location = "<?=$url?>";
                            </script>
<?php }?>
<?php
$conn=mysqli_connect('localhost','root','','dhtl');
if(!$conn)
    {
       die('Error...'.mysqli_connect_error());
    }
    

if(isset($_POST['update'])){
    $iddangnhap = mysqli_real_escape_string($conn, $_POST['iddangnhap']); 
    $hoten = mysqli_real_escape_string($conn, $_POST['hoten']); 
    $tendangnhap = mysqli_real_escape_string($conn, $_POST['tendangnhap']); 
    $admin_pass = mysqli_real_escape_string($conn, $_POST['admin_pass']); 
    $phanquyen = mysqli_real_escape_string($conn, $_POST['phanquyen']); 
    
    $sql= mysqli_query($conn,"UPDATE dangnhap 
                                set hoten = '$hoten', tendangnhap = '$tendangnhap',admin_pass = '$admin_pass', phanquyen ='$phanquyen' 
                                where iddangnhap ='$iddangnhap'") or die('Error!!!');
        if($sql){
            location("tat-ca-nguoi-dung.php"); 
    }else{
        echo 'Ban phải điền đầy đủ các thông tin.';
    }
}
    
?>