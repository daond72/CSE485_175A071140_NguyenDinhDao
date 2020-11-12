
<?php
require_once('connect.php');
$sql = "SELECT * FROM hoso";
$result = mysqli_query($conn, $sql);
if ($result) {
?>
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Họ và tên</th>
          <th scope="col">Ngày sinh</th>
          <th scope="col">Giới tính</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Địa chỉ</th>
          <th scope="col">Chức năng</th>

        </tr>
      </thead>
      <tbody>
  <?php
    while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
          <td scope="col"><?php echo $row['hovaten'];?></td>
          <td><?php echo $row['ngaysinh'];?></td>
          <td><?php echo $row['gioitinh'];?></td>
          <td><?php echo $row['sdt'];?></td>
          <td><?php echo $row['diachi'];?></td>
          <td>
            <a href="view.php?id=<?php echo $row['mahoso'];?>">view</a>&#160;
            <a href="edit.php?id=<?php echo $row['mahoso'];?>">edit</a>&#160;
            <a href="delete.php?id=<?php echo $row['mahoso'];?>" onclick="xacnhan()" id = "ok">delete</a>
          </td>
      </tr>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <?php  }}
    mysqli_close($conn);
  ?>
    </tbody>
  </table>
  </div>