<h2>Sản Phẩm Mới Nhất</h2>
<?php
    $sql = "SELECT sp.MaSanPham, sp.TenSanPham, sp.GiaSanPham, sp.HinhURL
            FROM SanPham sp
            WHERE sp.BiXoa = 0
            ORDER BY sp.NgayNhap DESC
            LIMIT 0, 10";
        $list = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($list)){ 
            $maSanPham = $row["MaSanPham"];
            $tenSanPham = $row["TenSanPham"];
            $giaSanPham = $row["GiaSanPham"];
            $hinhURL = $row["HinhURL"];
            include ("templates/tempThumbProduct.php");
        }
?>