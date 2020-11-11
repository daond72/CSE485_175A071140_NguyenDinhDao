
 <html>
<head>
<title>Quản Lý</title>
<style type="text/css">
table {
margin: 8px;
width:800px;
height:300px;
text-align:center;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
border: 1px solid #DDD;
}
</style>
</head>
<body>
<?php
  //Buoc 1
  $conn=mysqli_connect('localhost','id11136824_tonducthang','tonducthang','id11136824_tdteducation');

if(!$conn)
{
   die('Error...'.mysqli_connect_error());
}
else {
   //Thuc hien truy van du lieu
$sql="SELECT userid,first_name,last_name,email,user_level from users";
  $result =mysqli_query($conn,$sql);
//Xu ly ket qua
if(mysqli_num_rows($result)>0){
    echo 'Tổng số thành viên:' .mysqli_num_rows($result);
    echo'<table ';
    echo'<table border >';
    echo'<tr>';
    echo'<th>Userid</th><th>First_name</th><th>Last_name</th><th>Email</th><th>User_level</th><th>Delete</th><th>Edit</th>';
    echo'<tr>';

    while ($row= mysqli_fetch_assoc($result))
    {
    echo'<tr>';
    echo'<td>'.$row['userid'].'</td>';
    echo'<td>'.$row['first_name'].'</td>';
    echo'<td>'.$row['last_name'].'</td>';
    echo'<td>'.$row['email'].'</td>';
    echo'<td>'.$row['user_level'].'</td>';
    echo '<td><a href="delete.php?userid='.$row['userid'].'">Delete</a></td>';
    echo'<td> <a href="edit_.php?userid='.$row['userid'].'">Edit</a></td>';
    echo'</tr>';
        }
            echo'</table>';
        }
    }
    echo '<th>Chú thích:</th>';
    echo '<br/>';
    echo '<th>Level 1:Admin</th>';
    echo '<br/>';
    echo '<th>Level 0:User</th>';
?>
 
</body>
</html>