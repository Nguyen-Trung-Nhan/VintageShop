<h2>Tìm Kiếm Nâng Cao</h2>
<form action="index.php?a=20" method="POST">
    <table>
        <tr>
            <td>Tên Sản Phẩm</td>
            <td>Loại Sản Phẩm</td>
            <td>Nhà Sản Xuất</td>
            <td>Giá Từ Bao Nhiêu Đến Bao Nhiêu</td>
        </tr>
        <tr>
            <td><input type="text" name="txtTenSanPham" id="txtTenSanPham"></td>
            <td><input type="text" name="txtLoaiSanPham" id="txtLoaiSanPham"></td>
            <td><input type="text" name="txtNhaSanXuat" id="txtNhaSanXuat"></td>
            <td><input type="number" name="nbFrom" id="nbFrom"><input type="text" name="nbTo" id="nbTo"></td>
        </tr>
    </table>
    <input type="submit" value="Tìm">
</form>