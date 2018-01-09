<h2>Liệt Kê Người Dùng</h2>
<table width="744" border="1" cellspacing="0">
    <tr>
        <td width="50">Mã Tài Khoản</td>
        <td>Tên Đăng Nhập</td>
        <td>Mật Khẩu</td>
        <td>Tên Hiển Thị</td>
        <td>Địa Chỉ</td>
        <td>Điện Thoại</td>
        <td>Email</td>
        <td>Mã Loại Tài Khoản</td>
    </tr>
<?php
    $sql = "SELECT MaTaiKhoan,TenDangNhap,MatKhau,TenHienThi,DiaChi,DienThoai,Email,MaLoaiTaiKhoan
            FROM taikhoan
            WHERE BiXoa = 0";
    $list = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($list)){
            $maTaiKhoan = $row["MaTaiKhoan"];
            $tenDangNhap = $row["TenDangNhap"];
            $matKhau = $row["MatKhau"];
            $tenHienThi = $row["TenHienThi"];
            $diaChi = $row["DiaChi"];
            $dienThoai = $row["DienThoai"];
            $email = $row["Email"];
            $maLoaiTaiKhoan = $row["MaLoaiTaiKhoan"];
            include ("templates/tempLietKeNguoiDung.php");
        }
?>
</table>