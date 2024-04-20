<?php
function insert_sach(
    $tenSanPham,
    $danhMucId,
    $filename,
    $gia,
    $giaSale,
    $moTa,
    $created_at
) {
    $sql = "INSERT INTO products( ten, danh_muc_id,  img, gia, gia_sale, mo_ta, created_at) 
    VALUES ('$tenSanPham','$danhMucId','$filename','$gia','$giaSale','$moTa',' $created_at')";
    return pdo_execute_return_lastInsertId($sql);
}
function delete_sach($id)
{
    $sql = "DELETE FROM products WHERE id = $id";
    pdo_query($sql);
}
function list_sach($danh_muc_id, $searchSp)
{
    $sql = "SELECT DISTINCT products.id, products.ten, products.img,products.luot_ban, products.gia, products.danh_muc_id, products.gia_sale, products.mo_ta, products.created_at, danh_muc.name AS danh_muc_name 
    FROM products 
    JOIN danh_muc ON danh_muc.id = products.danh_muc_id WHERE 1";
    if ($searchSp != "") {
        $sql .= " AND products.ten LIKE '%" . $searchSp . "%'";
    }
    if ($danh_muc_id > 0) {
        $sql .= " AND products.danh_muc_id = " . $danh_muc_id;
    }
    $sql .= " ORDER BY products.id DESC";
    // echo $sql; die;
    $listSach = pdo_query($sql);
    return $listSach;
}
function list_All_home_sach($danh_muc_id, $searchSp, $tacGia_id)
{
    $sql = "SELECT DISTINCT products.id, products.ten, products.img,products.luot_ban, products.gia, products.danh_muc_id, products.gia_sale, products.mo_ta, products.created_at, danh_muc.name AS danh_muc_name
    FROM products 
    JOIN danh_muc ON danh_muc.id = products.danh_muc_id 
    JOIN produt_tac_gia ON produt_tac_gia.product_id = products.id
    JOIN tac_gia ON produt_tac_gia.tac_gia_id = tac_gia.id WHERE 1";
    if ($searchSp != "") {
        $sql .= " AND products.ten LIKE '%" . $searchSp . "%'";
    }

    if ($danh_muc_id > 0) {
        $sql .= " AND products.danh_muc_id = " . $danh_muc_id;
    }

    if ($tacGia_id) {
        $sql .= " AND tac_gia.id IN ($tacGia_id) ";
    }

    $sql .= " ORDER BY products.id DESC";
    $listSach = pdo_query($sql);
    return $listSach;
}
function list_sach_flashSale_home()
{
    $sql = "SELECT * FROM products WHERE gia_sale IS NOT NULL AND gia_sale <> 0;";
    $listSach = pdo_query($sql);
    return $listSach;
}
function list_Top_6_Sach_home()
{
    $sql = "SELECT products.id, products.ten, products.img, products.gia, products.gia_sale, products.luot_ban
    FROM products
     ORDER BY products.id DESC;
    LIMIT 6;";
    $listSach = pdo_query($sql);
    return $listSach;
}
function list_sach_banchay_home()
{
    $sql = "SELECT products.id,products.luot_ban, products.ten, products.img, products.gia, products.danh_muc_id, products.gia_sale, products.mo_ta, products.created_at, danh_muc.name AS danh_muc_name
        FROM products 
        JOIN danh_muc ON danh_muc.id = products.danh_muc_id 
        ORDER BY products.luot_ban DESC
        LIMIT 5;";

    $listSach = pdo_query($sql);
    return $listSach;
}
function select_spct($id)
{
    $sql = "SELECT products.id,products.ten, products.img, products.gia, products.gia_sale, products.mo_ta, products.created_at, products.danh_muc_id,  danh_muc.name AS danh_muc_name
     FROM products 
     JOIN danh_muc ON danh_muc.id = products.danh_muc_id 
     WHERE products.id = $id";

    $listSach = pdo_query_one($sql);
    return $listSach;
}

function Select_sach_cungLoai($id, $danh_muc_id)
{
    $sql = "SELECT * FROM products WHERE danh_muc_id = $danh_muc_id and id != $id";
    $listSp = pdo_query($sql);
    return $listSp;
}
function edit_sach($id)
{
    $sql = "SELECT * FROM products WHERE id = $id";
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_sach($id, $name)
{
    $sql = "UPDATE products
                SET name='$name' WHERE id = $id";
    pdo_execute($sql);
}

function update_sanpham_coHinhAnh($id, $tenSanPham, $danhMucId, $filename, $gia, $giaSale, $moTa)
{

    $sql = "UPDATE products SET 
ten='$tenSanPham',
danh_muc_id='$danhMucId',
img='$filename',
gia='$gia',
gia_sale='$giaSale',
mo_ta='$moTa' 
 WHERE  id='$id'";
    pdo_execute($sql);
}
function update_sanpham_KhongHinhAnh($id, $tenSanPham, $danhMucId, $gia, $giaSale, $moTa)
{
    $sql = "UPDATE products SET 
    ten='$tenSanPham',
    danh_muc_id='$danhMucId',
    gia='$gia',
    gia_sale='$giaSale',
    mo_ta='$moTa' 
     WHERE  id='$id'";
    pdo_execute($sql);

}
?>