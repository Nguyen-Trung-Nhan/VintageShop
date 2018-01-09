<?php
    if(isset($_POST["txtSL"]) && isset($_POST["hdMaSanPham"]))
    {
        $sl = $_POST["txtSL"];
        $id = $_POST["hdMaSanPham"];
        $sql = "SELECT SoLuongTon
        FROM sanpham
        WHERE  MaSanPham = $id";
        $list = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($list);
        $soLuongTon = $row["SoLuongTon"];
        if(is_numeric($sl)) {
            $gioHang = unserialize($_SESSION["gioHang"]);               
            if ($sl == 0 || $sl > $soLuongTon)
                $gioHang->delete($id);
            else
                if($sl > 0)
                    $gioHang->update($id, $sl);
            $_SESSION["gioHang"] = serialize($gioHang);
        }
    }
    DataProvider::ChangeURL('index.php?a=6');
?>