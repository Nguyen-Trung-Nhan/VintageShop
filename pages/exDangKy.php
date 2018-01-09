<?php    
    if(isset($_POST["txtTenDangNhap"]) && isset($_POST["txtMatKhau"]) && isset($_POST["txtTenHienThi"]) 
        && isset($_POST["txtDiaChi"]) && isset($_POST["txtDienThoai"]) && isset($_POST["txtEmail"]) ){
            $tenDangNhap = $_POST["txtTenDangNhap"];
            $matKhau = $_POST["txtMatKhau"];
            $tenHienThi = $_POST["txtTenHienThi"];
            $diaChi = $_POST["txtDiaChi"];
            $dienThoai = $_POST["txtDienThoai"];
            $email = $_POST["txtEmail"];
            $sql = "insert into taikhoan (TenDangNhap,MatKhau,TenHienThi,DiaChi,DienThoai,Email,BiXoa,MaLoaiTaiKhoan) 
                    values ('$tenDangNhap','$matKhau','$tenHienThi','$diaChi','$dienThoai','$email',0,1)";
            DataProvider::ExecuteQuery($sql);
            DataProvider::ChangeURL("index.php");
        }
?>