<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<div class=container>
      <form action="process-edit-hoso.php?mahoso=<?php echo $_GET['mahoso']?>" method="post" name="formUser" onsubmit="return validateForm();">
      <div class="form-group form-title">
            <h2>Sửa học bạ ứng tuyển</h2>
      </div>
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Họ và tên</label>
                  <input type="text" name="hovaten" id="hovaten" class="form-control" value="<?php echo $row['hovaten'] ?>" readonly>
               </div>
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Giới tính</label>
                  <input type="text" name="gioitinh" id="gioitinh" class="form-control" value="<?php echo $row['gioitinh'] ?>" >
               </div>
            </div>
            <div class="form-row">
            <div class="form-group col-sm-6">
               <label for="" class="style-lable">Ngày sinh</label>
               <input type="date" name="ngaysinh" id="ngaysinh" class="form-control" value="<?php echo $row['ngaysinh'] ?>" >
            </div>
            <div class="form-group col-sm-3">
               <label for="" class="style-lable">Dân tộc</label>
               <input type="text" name="dantoc" id="dantoc" class="form-control" value="<?php echo $row['dantoc'] ?>" >
            </div>
            <div class="form-group col-sm-3">
               <label for="" class="style-lable">Tôn giáo</label>
               <input type="text" name="tongiao" id="tongiao" class="form-control" value="<?php echo $row['tongiao'] ?>" >
            </div>
            </div>
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Nơi sinh</label>
                  <input type="text" name="noisinh" id="noisinh" class="form-control" value="<?php echo $row['noisinh'] ?>" readonly>
               </div>
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Năm tốt nghiệp</label>
                  <input type="text" name="namtotnghiep" id="namtotnghiep" class="form-control" value="<?php echo $row['namtotnghiep'] ?>" >
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Học lực lớp 12</label>
                  <input type="text" name="hocluc12" id="hocluc12" class="form-control" value="<?php echo $row['hocluc12'] ?>" >
               </div>
               <div class="form-group col-sm-6">
               <label for="" class="style-lable">Hạnh kiểm lớp 12</label>
               <input type="text" name="hanhkiem12" id="hanhkiem12" class="form-control" value="<?php echo $row['hanhkiem12'] ?>" >
               </div>
            </div>
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="" class="style-lable">Số CMND/CCCD</label>
                  <input type="text" name="cmnd" id="cmnd" class="form-control" value="<?php echo $row['cmnd'] ?>" readonly>
               </div>
               <div class="form-group col-sm-6">
               <label for="" class="style-lable">Hộ khẩu thường trú</label>
               <input type="text" name="hokhau" id="hokhau" class="form-control" value="<?php echo $row['hokhau'] ?>" >
               </div>
            </div>
            <a>Nơi học THPT hoặc tương đương</a>
            <div class="form-group">
            <label for="" class="style-lable">Lớp 10</label>
            <input type="text" name="lop10" id="lop10" class="form-control" value="<?php echo $row['lop10'] ?>" >
            </div>
            <div class="form-group">
            <label for="" class="style-lable">Lớp 11</label>
            <input type="text" name="lop11" id="lop11" class="form-control" value="<?php echo $row['lop11'] ?>" >
            </div>
            <div class="form-group">
            <label for="" class="style-lable">Lớp 12</label>
            <input type="text" name="lop12" id="lop12" class="form-control" value="<?php echo $row['lop12'] ?>" >
            </div>
            <div class="form-group">
            <label for="" class="style-lable">Khu vực</label>
            <input type="text" name="khuvuc" id="khuvuc" class="form-control" value="<?php echo $row['khuvuc'] ?>" >
            </div>
            <div class="form-group">
            <label for="" class="style-lable">Địa chỉ liên hệ</label>
            <input type="text" name="diachi" id="diachi" class="form-control" value="<?php echo $row['diachi'] ?>" >
            </div>
            <div class="form-group">
            <label for="" class="style-lable">Số điện thoại thí sinh</label>
            <input type="text" name="sdt" id="sdt" class="form-control" value="<?php echo $row['sdt'] ?>" >
            </div>
            <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
            <a href="select-hoso-process.php" class="btn btn-light">Cancel</a>
        </div>
      </form>
</div>