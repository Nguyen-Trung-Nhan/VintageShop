<h2>Người Dùng Tìm Kiếm </h2>
<h4><form action="index.php?a=16" method="POST">
    Tìm Kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem"><input type="submit" value="Tìm"></a>
</form></h4>
<table width="900" border="1">
    <tr>
        <td>Mã Tài Khoản</td>
        <td>Tên Đăng Nhập</td>
        <td>Mật Khẩu</td>
        <td>Tên Hiển Thị</td>
        <td>Địa Chỉ</td>
        <td>Điện Thoại</td>
        <td>Email</td>
        <td>Mã Loại Tài Khoản</td>
    </tr>
<?php
    if(isset($_POST["txtTimKiem"]) && ($_POST["txtTimKiem"] != "")){
    $timKiem = $_POST['txtTimKiem'];
    $sql = "SELECT MaTaiKhoan,TenDangNhap,MatKhau,TenHienThi,DiaChi,DienThoai,Email,MaLoaiTaiKhoan
            FROM taikhoan
            WHERE BiXoa = 0 and TenDangNhap like '%$timKiem%'" ;
    $list = DataProvider::executeQuery($sql);
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
    }
    else{
        DataProvider::ChangeURL("index.php");
    }
?>
</table>