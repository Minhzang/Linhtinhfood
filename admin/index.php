<?php
ob_start();
session_start();
if (isset($_SESSION['user']) && $_SESSION['user']['is_admin'] == 1) {

    include ("../model/connect.php");
    include ("../model/danhmuc.php");
    include ("../model/acc.php");
    include ("../model/binhLuan.php");
    include ("../model/sach.php");
    include ("../model/giohang.php");
    include ("../model/thongke.php");

    include ("header.php");
    // include ("home.php");
    if (isset($_GET["act"])) {
        $act = $_GET["act"];
        switch ($act) {
            // danh mục
            case 'addDm':
                $errdm = "";
                if (isset($_POST['themMoi'])) {
                    $name = $_POST["nameDM"];
                    $isCheck = true;
                    if (empty($name)) {
                        $isCheck = false;
                        $errdm = "Cần nhập Danh mục";
                    }
                    if ($isCheck) {
                        insert_danhmuc($name);
                        $thongbao = "Thêm thành công!";
                    }
                }
                include ("danhMuc/add.php");
                break;
            case 'listDm':
                if (isset($_POST['submit'])) {
                    $searchName = $_POST["searchName"];
                } else {
                    $searchName = "";
                }
                $listDm = list_danhmuc($searchName);
                include ("danhMuc/danhmuc.php");
                break;
            case 'deleteDm':
                if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                    $id = $_GET["id"];
                    delete_danhmuc($id);
                }
                $listDm = list_danhmuc("");
                include ("danhMuc/danhmuc.php");
                break;

            case 'editDm':

                if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                    $id = $_GET["id"];
                    $errnamedm = "";

                    $dm = edit_danhmuc($id);
                }
                include ("danhMuc/updateDm.php");
                break;
            case 'updateDm':
                $errnamedm = "";

                if (isset($_POST['update'])) {
                    $id = $_POST["id"];
                    $name = $_POST["namedm"];
                    $isCheck = true;

                    if (empty($name)) {
                        $isCheck = false;
                        $errnamedm = "Cần nhập tên danh mục";
                    }

                    if ($isCheck) {
                        update_danhmuc($id, $name);
                        $thongbao = "Cập nhật thành công!";
                    }
                }
                $listDm = list_danhmuc("");
                include ("danhMuc/danhmuc.php");
                break;

            //Bình luận
            case 'comment':
                if (isset($_POST['submit'])) {
                    $searchBl = $_POST["searchBl"];
                } else {
                    $searchBl = "";
                }
                $listBl = list_binhLuan($searchBl);
                include ("binhLuan/comment.php");
                break;
            case 'deleteBl':
                if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                    $id = $_GET["id"];
                    delete_binhLuan($id);
                }
                $listBl = list_binhLuan("");
                include ("binhLuan/comment.php");
                break;

            // sách
            case 'sach':
                if (isset($_POST['submit'])) {
                    $searchSP = $_POST["searchSP"];
                    $danh_muc_id = $_POST["danh_muc_id"];
                } else {
                    $searchSP = "";
                    $danh_muc_id = "";
                }
                $listDm = list_danhmuc("");
                $list_Sach = list_sach($danh_muc_id, $searchSP);
                include ("sach/sach.php");
                break;
            case 'addSach':
                if (isset($_POST['submit'])) {
                    $ErrtenSanPham = "";
                    $ErrdanhMucId = "";
                    $Errgia = "";
                    $ErrmoTa = "";
                    $ErrTg = "";

                    $isCheck = true;

                    $tenSanPham = $_POST['name'];
                    $danhMucId = $_POST['danh_muc_id'];
                    $gia = $_POST['gia'];
                    $giaSale = $_POST['gia_sale'];
                    $moTa = $_POST['mo_ta'];
                    $created_at = date('Y-m-d H:i:s');
                    $filename = $_FILES["img"]["name"];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);

                    if (empty($tenSanPham)) {
                        $isCheck = false;
                        $ErrtenSanPham = "Tên sản phẩm không được bỏ trống.";
                    }

                    if (empty($danhMucId)) {
                        $isCheck = false;
                        $ErrdanhMucId = "Vui lòng chọn Danh Mục.";
                    }

                    if (empty($gia)) {
                        $isCheck = false;
                        $Errgia = "Giá bán không được bỏ trống.";
                    }
                
                    if (empty($filename)) {
                        $isCheck = false;
                        $Errimg = "Cần thêm ảnh Sản phẩm";
                    }
                    if ($isCheck) {
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                        $sachId = insert_sach($tenSanPham, $danhMucId, $filename, $gia, $giaSale, $moTa, $created_at);
                        $thongbao = "Thêm thành công!";
                    }

                }
                $listDm = list_danhmuc("");

                include ("sach/add.php");
                break;

            case 'editSp':
                if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                    $id = $_GET["id"];

                    $listDm = list_danhmuc("");
                    $SP = select_spct($id);
                }
                include ("sach/updateSp.php");
                break;

            case 'updateSp':
                if (isset($_POST['submit'])) {
                    $isCheck = true;
                    $id = $_POST["id"];
                    $tenSanPham = $_POST['name'];
                    $danhMucId = $_POST['danh_muc_id'];
                    $gia = $_POST['gia'];
                    $giaSale = $_POST['gia_sale'];
                    $moTa = $_POST['mo_ta'];
                    $hinhAnh = $_FILES["img"];
                    $filename = $hinhAnh["name"];

                    // Xóa tất cả các tác giả liên quan đến sản phẩm
                    if (empty($tenSanPham)) {
                        $isCheck = false;
                        $ErrtenSanPham = "Tên sản phẩm không được bỏ trống.";
                    }
                    if (empty($gia)) {
                        $isCheck = false;
                        $Errgia = "Giá bán không được bỏ trống.";
                    }
                    if ($isCheck) {
                        if ($filename) {
                            $filename = time() . $filename;
                            $dir = "../uploads/$filename";

                            if (move_uploaded_file($hinhAnh["tmp_name"], $dir)) {
                                update_sanpham_coHinhAnh($id, $tenSanPham, $danhMucId, $filename, $gia, $giaSale, $moTa);
                            }
                        }
                        update_sanpham_KhongHinhAnh($id, $tenSanPham, $danhMucId, $gia, $giaSale, $moTa);

                    }
                }
                $listDm = list_danhmuc("");
                $list_Sach = list_sach("", "");

                include ("sach/sach.php");
                break;

            case 'deleteSp':
                if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                    $id = $_GET["id"];
                    delete_sach($id);
                }
                $list_Sach = list_sach("", "");
                include ("sach/sach.php");
                break;

            case 'account':
                if (isset($_POST['submit'])) {
                    $searchName = $_POST["searchName"];
                } else {
                    $searchName = "";
                }
                $listAcc = list_acc($searchName);
                include ("acc/acc.php");
                break;
            case 'deleteAcc':
                if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                    $id = $_GET["id"];
                    delete_acc($id);
                }
                $listAcc = list_acc("");
                include ("acc/acc.php");
                break;

            case 'editAcc':
                if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                    $id = $_GET["id"];
                    $acc = edit_acc($id);
                }
                include ("acc/updateAcc.php");
                break;
            case 'updateAcc':
                if (isset($_POST['update'])) {
                    $id = $_POST["id"];
                    $is_admin = $_POST["is_admin"];
                    update_acc($id, $is_admin);
                }
                $listAcc = list_acc("");
                include ("acc/acc.php");
                break;
            case 'logout':
                session_unset();
                header("Location: index.php");
                break;

            // đơn hàng
            case 'order':
                if (isset($_POST['submit'])) {
                    $search_id_DH = $_POST["search_id_DH"];
                    // echo $search_id_DH;
                    // die;
                } else {
                    $search_id_DH = "";
                }
                $list_order_cart = select_order_cart($search_id_DH);
                include ("donhang/donhang.php");
                break;
            case 'ChiTietDonHang':
                if (isset($_GET["id"]) && ($_GET["id"] > 0)) {
                    $id = $_GET["id"];
                    $list_order_cart_where_id = select_ChiTietDonHang_where_id($id);
                    $gioHang = select_gio_hang_item_thanhtoan_where_id($id);
                }
                include ("donhang/ChiTietDonHang.php");
                break;
            case 'updateChiTietDonHang':
                if (isset($_POST['submit'])) {
                    $id = $_POST["id"];
                    $selectedStatus = $_POST['status_id'];
                    update_status_ChiTietDonHang($id, $selectedStatus);
                }
                $list_order_cart = select_order_cart("");
                include ("donhang/donhang.php");
                break;

            case 'thongKe':
                if (isset($_POST['submit'])) {
                    $selected_day = $_POST['select_day'];
                    $selected_month = $_POST['select_month'];
                    $selected_year = $_POST['select_year'];

                    // Kiểm tra nếu có chọn ngày, tháng và năm
                    if ($selected_day != 0 && $selected_month != 0 && $selected_year != 0) {
                        // Thực hiện thống kê theo ngày, tháng và năm
                        $thongke_DoanhThu_sach = thongke_DoanhThu_sach($selected_month, $selected_year, $selected_day);
                    }
                    // Kiểm tra nếu chỉ chọn tháng và năm
                    elseif ($selected_month != 0 && $selected_year != 0) {
                        // Thực hiện thống kê theo tháng và năm
                        $thongke_DoanhThu_sach = thongke_DoanhThu_sach($selected_month, $selected_year, null);
                    }
                    // Kiểm tra nếu chỉ chọn năm
                    elseif ($selected_year != 0) {
                        // Thực hiện thống kê theo năm
                        $thongke_DoanhThu_sach = thongke_DoanhThu_sach(null, $selected_year, null);
                    }
                }

                $thongke_gia_DanhMuc = thongke_gia_DanhMuc();
                $top_10_sach_banChay = top_10_sach_banChay();
                $thongke_DoanhThu_5_thang = thongke_DoanhThu_6_thang();

                include ("thongke/thongke.php");
                break;
            case 'trangchu':
                if (isset($_POST['submit'])) {
                    $selected_day = $_POST['select_day'];
                    $selected_month = $_POST['select_month'];
                    $selected_year = $_POST['select_year'];

                    // Kiểm tra nếu có chọn ngày, tháng và năm
                    if ($selected_day != 0 && $selected_month != 0 && $selected_year != 0) {
                        // Thực hiện thống kê theo ngày, tháng và năm
                        $thongke_DoanhThu_sach = thongke_DoanhThu_sach($selected_month, $selected_year, $selected_day);
                    }
                    // Kiểm tra nếu chỉ chọn tháng và năm
                    elseif ($selected_month != 0 && $selected_year != 0) {
                        // Thực hiện thống kê theo tháng và năm
                        $thongke_DoanhThu_sach = thongke_DoanhThu_sach($selected_month, $selected_year, null);
                    }
                    // Kiểm tra nếu chỉ chọn năm
                    elseif ($selected_year != 0) {
                        // Thực hiện thống kê theo năm
                        $thongke_DoanhThu_sach = thongke_DoanhThu_sach(null, $selected_year, null);
                    }
                }

                $thongke_gia_DanhMuc = thongke_gia_DanhMuc();
                $top_10_sach_banChay = top_10_sach_banChay();
                $thongke_DoanhThu_5_thang = thongke_DoanhThu_6_thang();

                include ("thongke/thongke.php");
                break;
            default:
                include ("home.php");
                break;
        }
    } else {
        if (isset($_POST['submit'])) {
            $selected_day = $_POST['select_day'];
            $selected_month = $_POST['select_month'];
            $selected_year = $_POST['select_year'];

            // Kiểm tra nếu có chọn ngày, tháng và năm
            if ($selected_day != 0 && $selected_month != 0 && $selected_year != 0) {
                // Thực hiện thống kê theo ngày, tháng và năm
                $thongke_DoanhThu_sach = thongke_DoanhThu_sach($selected_month, $selected_year, $selected_day);
            }
            // Kiểm tra nếu chỉ chọn tháng và năm
            elseif ($selected_month != 0 && $selected_year != 0) {
                // Thực hiện thống kê theo tháng và năm
                $thongke_DoanhThu_sach = thongke_DoanhThu_sach($selected_month, $selected_year, null);
            }
            // Kiểm tra nếu chỉ chọn năm
            elseif ($selected_year != 0) {
                // Thực hiện thống kê theo năm
                $thongke_DoanhThu_sach = thongke_DoanhThu_sach(null, $selected_year, null);
            }
        }

        $thongke_gia_DanhMuc = thongke_gia_DanhMuc();
        $top_10_sach_banChay = top_10_sach_banChay();
        $thongke_DoanhThu_5_thang = thongke_DoanhThu_6_thang();

        include ("thongke/thongke.php");
    }
    include ("footer.php");
} else {
    include ("login.php");
}

?>