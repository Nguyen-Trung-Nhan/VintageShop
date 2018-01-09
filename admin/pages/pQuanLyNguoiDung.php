<h1><b>Quản Lý Người Dùng</b></h1>
<strong>Nhập thông tin người dùng cần thêm</strong>
<form action="index.php?a=3&b=4" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Tên Đăng Nhập</td>
        <td>Mật Khẩu</td>
        <td>Tên Hiển Thị</td>
        <td>Địa Chỉ</td>
        <td>Điện Thoại</td>
        <td>Email</td>
        <td>Mã Loại Tài Khoản</td>
    </tr>
    <tr>
        <td><input type="text" name="txtTenDangNhap" id="txtTenDangNhap" size="15"></td>
        <td><input type="text" name="txtMatKhau" id="txtMatKhau" size="8"></td>
        <td><input type="text" name="txtTenHienThi" id="txtTenHienThi" size="10"></td>
        <td><input type="text" name="txtDiaChi" id="txtDiaChi" size="8"></td>
        <td><input type="text" name="txtDienThoai" id="txtDienThoai" size="8"></td>
        <td><input type="email" name="Email" id="Email" size="8"></td>
        <td><input type="text" name="txtMaLoaiTaiKhoan" id="txtMaLoaiTaiKhoan" size="17"></td>
    </tr>
</table>
    <input type="submit" value="Thêm">
</form>

<strong>Nhập thông tin người dùng cần sửa</strong>
<form action="index.php?a=4&b=4" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Mã Tài Khoản Cần Sửa</td>
        <td>Tên Đăng Nhập</td>
        <td>Mật Khẩu</td>
        <td>Tên Hiển Thị</td>
        <td>Địa Chỉ</td>
        <td>Điện Thoại</td>
        <td>Email</td>
        <td>Mã Loại Tài Khoản</td>
    </tr>
    <tr>
        <td><input type="text" name="txtMaTaiKhoan" id="txtMaTaiKhoan" size="20"></td>
        <td><input type="text" name="txtTenDangNhap" id="txtTenDangNhap" size="12"></td>
        <td><input type="text" name="txtMatKhau" id="txtMatKhau" size="8"></td>
        <td><input type="text" name="txtTenHienThi" id="txtTenHienThi" size="9"></td>
        <td><input type="text" name="txtDiaChi" id="txtDiaChi" size="8"></td>
        <td><input type="text" name="txtDienThoai" id="txtDienThoai" size="8"></td>
        <td><input type="email" name="Email" id="Email" size="8"></td>
        <td><input type="text" name="txtMaLoaiTaiKhoan" id="txtMaLoaiTaiKhoan" size="10"></td>
    </tr>
</table>
    <input type="submit" value="Sửa"></a>
</form>

<strong>Nhập mã tài khoản cần xóa</strong>
<form action="index.php?a=5&b=4" method="POST">
<table border="1" cellspacing="0">
    <tr>
        <td>Mã Tài Khoản Cần Xóa</td>
    </tr>
    <tr>
        <td><input type="text" name="txtMaTaiKhoan" id="txtMaTaiKhoan" size="22"></td>
    </tr>
</table>
    <input type="submit" value="Xóa">
</form>

<span><strong>Nhấn vào Liệt kê để xem thông tin người dùng: </strong></span>
<a href="index.php?a=15"><input type="submit" value="Liệt kê"></a>


<form action="index.php?a=16" method="POST">
    Tìm Kiếm:<input type="text" name="txtTimKiem" id="txtTimKiem"><input type="submit" value="Tìm"></a>
</form>