<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleSinhvien.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'header.php';?>
    <div class="container-body">
        <div class="containerfluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="a-chitiet" href="index.php">Trang Chủ -</a>
                    </div>
                </div>
            </div>
        </div>       
    </div>
    <form action="add-hoso-process.php" method="post" name="formUser" onsubmit="return validateForm();">
<div class="container-fluid mt-3">
         <h4 class="mb-2">Xét tuyển</h4>
         <form>
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="">Họ và tên</label>
                  <input type="text" class="form-control"
                     id="hoten" name="hovaten" placeholder="Nhập tên">
               </div>
               <div class="form-group col-sm-6">
                  <label for="">Giới tính</label>
                  <input type="text" class="form-control"
                     id="gioitinh" name="gioitinh" placeholder="Nhập giới tính">
               </div>
            </div>
            <div class="form-row">
            <div class="form-group col-sm-6">
               <label for="">Ngày sinh</label>
               <input type="date" class="form-control"
               id="ngaysinh"name="ngaysinh" placeholder="Nhập ngày sinh">
            </div>
            <div class="form-group col-sm-3">
               <label for="">Dân tộc</label>
               <input type="text" class="form-control"
               id="dantoc" name="dantoc" placeholder="Nhập tên">
            </div>
            <div class="form-group col-sm-3">
               <label for="">Tôn giáo</label>
               <input type="text" class="form-control"
               id="tongiao" name="tongiao"placeholder="Nhập tên">
            </div>
            </div>
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="">Nơi sinh</label>
                  <input type="text" class="form-control" id="noisinh"name="noisinh">
               </div>
               <div class="form-group col-sm-6">
                  <label for="">Năm tốt nghiệp</label>
                  <input type="text" class="form-control" id="namtotnghiep" name="namtotnghiep">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="">Học lực lớp 12</label>
                  <input type="text" class="form-control"
                     id="hocluc12" name="hocluc12"placeholder="Nhập">
               </div>
               <div class="form-group col-sm-6">
               <label for="">Hạnh kiểm lớp 12</label>
                  <input type="text" class="form-control"
                     id="hạnh kiểm 12"name="hanhkiem12" placeholder="Nhập">
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="">Số CMND/CCCD</label>
                  <input type="text" class="form-control"
                     id="cmnd" name="cmnd"placeholder="Số CMND">
               </div>
               <div class="form-group col-sm-6">
               <label for="">Hộ khẩu thường trú</label>
                  <input type="text" class="form-control"
                     id="hokhau"name="hokhau" placeholder="Nhập">
               </div>
            </div>
            <a>Nơi học THPT hoặc tương đương(ghi tên tường và nởi trường đóng:huyện(quận), tỉnh(thành phố))</a>
            <div class="form-group">
            <label for="">Lớp 10</label>
               <input type="text" class="form-control"
               id="lop10"name="lop10" placeholder="Nhập">
            </div>
            <div class="form-group">
            <label for="">Lớp 11</label>
               <input type="text" class="form-control"
               id="lop11" name="lop11"placeholder="Nhập">
            </div>
            <div class="form-group">
            <label for="">Lớp 12</label>
               <input type="text" class="form-control"
               id="lop12"name="lop12" placeholder="Nhập">
            </div>
            <div class="form-group">
            <label for="">Khu vực(thuôc khu vực nào thì ghi xuống phía dưới)</label>
               <input type="text" class="form-control"
               id="khuvuc"name="khuvuc" placeholder="Nhập">
            </div>
            <div class="form-group">
            <label for="">Địa chỉ liên hệ</label>
               <input type="text" class="form-control"
               id="diachi"name="diachi" placeholder="Nhập">
            </div>
            <div class="form-group">
            <label for="">Số điện thoại thí sinh</label>
               <input type="text" class="form-control"
               id="sdt" name="sdt"placeholder="Nhập">
            </div>
            <button type="submit" class="btn btn-primary">Nộp học bạ</button>
         </form>
      </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <?php include 'footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>