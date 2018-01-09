<h2>Liệt Kê Sản Phẩm</h2>
<table width="745" border="1" cellspacing="0">
    <tr>
        <td>Mã Sản Phẩm</td>
        <td>Tên Sản Phẩm</td>
        <td>Giá Sản Phẩm</td>
        <td>Hình URL</td>
        <td>Ngày Nhập</td>
        <td>Số Lượng Tồn</td>
        <td>Số Lượng Bán</td>
        <td>Mô Tả</td>
        <td>Mã Loại Sản Phẩm</td>
        <td>Mã Hãng Sản Xuất</td>
    </tr>
<?php
    $sql = "SELECT sp.MaSanPham, sp.TenSanPham, sp.GiaSanPham, sp.HinhURL, sp.NgayNhap,sp.SoLuongTon,sp.SoLuongBan,sp.MoTa,sp.MaLoaiSanPham,sp.MaHangSanXuat
    FROM SanPham sp
    WHERE sp.BiXoa = 0";
    $list = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($list)){
            $maSanPham = $row["MaSanPham"];
            $tenSanPham = $row["TenSanPham"];
            $giaSanPham = $row["GiaSanPham"];
            $hinhURL = $row["HinhURL"];
            $ngayNhap = $row["NgayNhap"];
            $soLuongTon = $row["SoLuongTon"];
            $soLuongBan = $row["SoLuongBan"];
            $moTa = $row["MoTa"];
            $maLoaiSanPham = $row["MaLoaiSanPham"];
            $maHangSanXuat = $row["MaHangSanXuat"];
    include ("templates/tempLietKeSanPham.php");
    } 
?>
</table>