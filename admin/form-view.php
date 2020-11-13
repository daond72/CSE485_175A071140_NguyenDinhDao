<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<div class="container">
    <form method="post">
        <div class="form-group form-title">
            <h2>Xem thông tin học bạ ứng tuyển</h2>
        </div>
        <div class="form-group">
            <label for="" class="style-lable">Mã hồ sơ</label>
            <input type="text" name="mahoso" id="mahoso" class="form-control" value="<?php echo $row['mahoso'] ?>" readonly>
            </div>
        <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Họ và tên</label>
                  <input type="text" name="hovaten" id="hovaten" class="form-control" value="<?php echo $row['hovaten'] ?>" readonly>
               </div>
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Giới tính</label>
                  <input type="text" name="gioitinh" id="gioitinh" class="form-control" value="<?php echo $row['gioitinh'] ?>" readonly>
               </div>
            </div>
            <div class="form-row">
            <div class="form-group col-sm-6">
               <label for="" class="style-lable">Ngày sinh</label>
               <input type="date" name="ngaysinh" id="ngaysinh" class="form-control" value="<?php echo $row['ngaysinh'] ?>" readonly>
            </div>
            <div class="form-group col-sm-3">
               <label for="" class="style-lable">Dân tộc</label>
               <input type="text" name="dantoc" id="dantoc" class="form-control" value="<?php echo $row['dantoc'] ?>" readonly>
            </div>
            <div class="form-group col-sm-3">
               <label for="" class="style-lable">Tôn giáo</label>
               <input type="text" name="tongiao" id="tongiao" class="form-control" value="<?php echo $row['tongiao'] ?>" readonly>
            </div>
            </div>
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Nơi sinh</label>
                  <input type="text" name="noisinh" id="noisinh" class="form-control" value="<?php echo $row['noisinh'] ?>" readonly>
               </div>
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Năm tốt nghiệp</label>
                  <input type="text" name="namtotnghiep" id="namtotnghiep" class="form-control" value="<?php echo $row['namtotnghiep'] ?>" readonly>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Học lực lớp 12</label>
                  <input type="text" name="hocluc12" id="hocluc12" class="form-control" value="<?php echo $row['hocluc12'] ?>" readonly>
               </div>
               <div class="form-group col-sm-6">
               <label for="" class="style-lable">Hạnh kiểm lớp 12</label>
               <input type="text" name="hanhkiem12" id="hanhkiem12" class="form-control" value="<?php echo $row['hanhkiem12'] ?>" readonly>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Số CMND/CCCD</label>
                  <input type="text" name="cmnd" id="cmnd" class="form-control" value="<?php echo $row['cmnd'] ?>" readonly>
               </div>
               <div class="form-group col-sm-6">
               <label for="" class="style-lable">Hộ khẩu thường trú</label>
               <input type="text" name="hokhau" id="hokhau" class="form-control" value="<?php echo $row['hokhau'] ?>" readonly>
               </div>
            </div>
            <a>Nơi học THPT hoặc tương đương</a>
            <div class="form-group">
            <label for="" class="style-lable">Lớp 10</label>
            <input type="text" name="lop10" id="lop10" class="form-control" value="<?php echo $row['lop10'] ?>" readonly>
            </div>
            <div class="form-group">
            <label for="" class="style-lable">Lớp 11</label>
            <input type="text" name="lop11" id="lop11" class="form-control" value="<?php echo $row['lop11'] ?>" readonly>
            </div>
            <div class="form-group">
            <label for="" class="style-lable">Lớp 12</label>
            <input type="text" name="lop12" id="lop12" class="form-control" value="<?php echo $row['lop12'] ?>" readonly>
            </div>
            <div class="form-group">
            <label for="" class="style-lable">Khu vực</label>
            <input type="text" name="khuvuc" id="khuvuc" class="form-control" value="<?php echo $row['khuvuc'] ?>" readonly>
            </div>
            <div class="form-group">
            <label for="" class="style-lable">Địa chỉ liên hệ</label>
            <input type="text" name="diachi" id="diachi" class="form-control" value="<?php echo $row['diachi'] ?>" readonly>
            </div>
            <div class="form-group">
            <label for="" class="style-lable">Số điện thoại thí sinh</label>
            <input type="text" name="sdt" id="sdt" class="form-control" value="<?php echo $row['sdt'] ?>" readonly>
            </div>
            <div class="form-group">
            <a href="select-hoso-process.php" class="btn btn-primary">Back</a>
            </div>
         </form>
      </div>
    </form>
</div>