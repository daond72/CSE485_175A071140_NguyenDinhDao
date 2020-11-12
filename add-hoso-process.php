<?php
    require_once('admin/connect.php');
    $hovaten = $_POST['hovaten'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $dantoc = $_POST['dantoc'];
    $tongiao = $_POST['tongiao'];
    $noisinh = $_POST['noisinh'];
    $namtotnghiep = $_POST['namtotnghiep'];
    $hocluc12 = $_POST['hocluc12'];
    $hanhkiem12 = $_POST['hanhkiem12'];
    $cmnd = $_POST['cmnd'];
    $hokhau = $_POST['hokhau'];
    $lop10 = $_POST['lop10'];
    $lop11 = $_POST['lop11'];
    $lop12 = $_POST['lop12'];
    $khuvuc = $_POST['khuvuc'];
    $diachi = $_POST['diachi'];
    $sdt = $_POST['sdt'];

    $sql = "INSERT INTO hoso(hovaten, gioitinh, ngaysinh, sdt, diachi ) 
    VALUES ('$hovaten', '$gioitinh', '$ngaysinh', '$sdt', '$diachi')";
    $sql1 = "INSERT INTO chitiethoso(dantoc, tongiao, noisinh, namtotnghiep, hocluc12, hanhkiem12, cmnd,
    hokhau, lop10, lop11, lop12,khuvuc ) 
    VALUES ('$dantoc', '$tongiao', '$noisinh', '$namtotnghiep', '$hocluc12', '$hanhkiem12', '$cmnd', '$hokhau','$lop10', 
    '$lop11', '$lop12', '$khuvuc')";
    if(mysqli_query($conn, $sql)){
        mysqli_query($conn, $sql1);
        header('location: index.php');
        
    }else{
        echo "That bai";
    }
?>