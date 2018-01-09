<?php
    if(isset($_GET['id']))
    {
        $maSanPham = $_GET['id'];
        $sql = "SELECT SoLuongTon
        FROM sanpham
        WHERE  MaSanPham = $maSanPham";
        $list = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($list);
        $soLuongTon = $row["SoLuongTon"];
        $gioHang = new ShoppingCart();
        if(isset($_SESSION['gioHang']))
            $gioHang = unserialize($_SESSION['gioHang']);
        if($soLuongTon > 0){
            $gioHang->Add($maSanPham);
            $_SESSION['gioHang'] = serialize($gioHang);

            DataProvider::ChangeURL('index.php?a=6');
        }
        else{
            DataProvider::ChangeURL("index.php?a=4&id=$maSanPham");
        }
    }
    else
    {
        DataProvider::ChangeURL('index.php?a=0&id=3');
    }

?>