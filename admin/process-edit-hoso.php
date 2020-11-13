<?php
if(isset($_GET['mahoso']))
{
    require('connect.php');
    $mahoso = $_GET['mahoso'];
    $hovaten = $_POST['hovaten'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $dantoc = $_POST['dantoc'];
    $tongiao = $_POST['tongiao'];
    $noisinh = $_POST['noisinh'];
    $namtotnghiep = $_POST['namtotnghiep'];
    $hocluc12 = $_POST['hocluc12'];
    $hanhkiem12 = $_POST['hanhkiem12'];
    $hokhau = $_POST['hokhau'];
    $lop10 = $_POST['lop10'];
    $lop11 = $_POST['lop11'];
    $lop12 = $_POST['lop12'];
    $khuvuc = $_POST['khuvuc'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];
    $sql = "UPDATE hoso SET hovaten = '$hovaten', ngaysinh = '$ngaysinh',
     gioitinh = '$gioitinh', sdt = '$sdt' ,diachi = '$diachi' WHERE mahoso = '$mahoso'";
     $sql1 = "UPDATE chitiethoso SET dantoc = '$dantoc', tongiao = '$tongiao',
     noisinh = '$noisinh', namtotnghiep = '$namtotnghiep' ,hocluc12 = '$hocluc12',
     hanhkiem12 = '$hanhkiem12', hokhau = '$hokhau', lop10='$lop10',
     lop11='$lop11', lop12='$lop12', khuvuc='$khuvuc' WHERE mahoso = '$mahoso'";
    if (mysqli_query($conn, $sql)){
        mysqli_query($conn, $sql1);
        header('location: select-hoso-process.php');
    }else
        echo "Loi";
        mysqli_close($conn);
}
?>