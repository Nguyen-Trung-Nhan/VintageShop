<dl>
<dt>Loại Sản Shẩm</dt>
<?php
    $sql = "SELECT lsp.MaLoaiSanPham, lsp.TenLoaiSanPham
            FROM LoaiSanPham lsp
            WHERE lsp.BiXoa = 0";
    $list = DataProvider::ExecuteQuery($sql);
    while($row = mysqli_fetch_array($list)){
        $name = $row["TenLoaiSanPham"];
        $url = "index.php?a=3&id=".$row["MaLoaiSanPham"];
        include "templates/tempMenu.php";
    }
?>
</dl>