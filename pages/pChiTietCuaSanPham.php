<?php
    if(isset($_GET['id'])){
        $maSanPham = $_GET['id'];
        $sql = "SELECT sp.MaSanPham, sp.TenSanPham, sp.GiaSanPham, sp.HinhURL, sp.SoLuongTon, sp.MoTa, lsp.TenLoaiSanPham, hsx.TenHangSanXuat,lsp.MaLoaiSanPham
                FROM SanPham sp, LoaiSanPham lsp, HangSanXuat hsx
                WHERE sp.BiXoa = 0 AND sp.MaSanPham = $maSanPham AND sp.MaLoaiSanPham = lsp.MaLoaiSanPham AND sp.MaHangSanXuat = hsx.MaHangSanXuat";
        $list = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($list)){
            $hinhURL = $row["HinhURL"];
            $maLoaiSanPham = $row["MaLoaiSanPham"];
            $tenSanPham = $row["TenSanPham"];
            $giaSanPham = $row["GiaSanPham"];
            $tenHangSanXuat = $row["TenHangSanXuat"];
            $tenLoaiSanPham = $row["TenLoaiSanPham"];
            $soLuongTon = $row["SoLuongTon"];
            $moTa = $row["MoTa"];
            include ("templates/tempChiTietCuaSanPham.php");
        }
    }
    else
    {
        DataProvider::ChangeURL("index.php");
    }
?>
