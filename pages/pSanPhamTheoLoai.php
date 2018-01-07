<h2>Sản Phẩm Loại </h2>
<?php
    if(isset($_GET["id"])){
        $sql = "SELECT sp.MaSanPham, sp.TenSanPham, sp.GiaSanPham, sp.HinhURL
                FROM SanPham sp
                WHERE sp.BiXoa = 0 AND sp.MaLoaiSanPham = ".$_GET["id"];
        $list = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($list)){
        $maSanPham = $row["MaSanPham"];
        $tenSanPham = $row["TenSanPham"];
        $giaSanPham = $row["GiaSanPham"];
        $hinhURL = $row["HinhURL"];
        include ("templates/tempThumbProduct.php");
        }
    }
    else{
        DataProvider::ChangeURL("index.php?a=0&id=1");
    }
?>