<div class="container-content bg-white rounded-xl p-2 lg:p-3 mb-3 mt-5">Tất cả sản phẩm </div>
<!-- All sản phẩm -->
<section class="mt-5 container-content">
    <div class="grid grid-cols-12">
        <div class="md:block col-span-3 hidden pr-3">
            <div class=" rounded-xl">
                <div class="rounded-xl bg-white p-3 mb-4">
                <div class="">
                                    <a id="dropdownButton" class="cursor-pointer w-55 m-7 md:m-0 hover:text-gray-500 
                            transition duration-400 ease-in">Danh Mục <i class="fa-solid fa-chevron-down"></i></a>
                                    <ul id="dropdownMenu"
                                        class="absolute hidden mt-2 py-2 w-55  bg-white rounded-md shadow-md z-10">
                                        <?php foreach ($listDm as $key => $value) {
                                            echo '<li><a class="hover:text-gray-500 p-3"  href="index.php?act=sanpham&iddm=' . $value["id"] . '">' . $value["name"] . '</a></li>';
                                        } ?>
                                    </ul>
                                </div>

                </div>


            </div>
        </div>

        <!--  -->
        <div class="md:col-span-9 col-span-12  mb-3">

            <div class="bg-white rounded-xl pt-5 pl-5">
               

                <div class="grid md:grid-cols-3 lg:grid-cols-4  grid-cols-2 gap-4 mt-5">

                    <?php
                    foreach ($listSp as $key => $value) {
                        $giaCu_listSP = $value['gia_sale'];
                        $giaMoi_listSP = $value['gia'];

                        // Kiểm tra giá trị của $giaCu_listSP trước khi thực hiện phép chia
                        if ($giaCu_listSP != 0) {
                            $phanTramGiamGia_listSP = round((($giaCu_listSP - $giaMoi_listSP) / $giaCu_listSP) * 100, 0);
                        } else {
                            $phanTramGiamGia_listSP = 0; // Gán giá trị mặc định nếu $giaCu_listSP là 0
                        }
                        echo '<div class="hover:shadow-md md:p-4 p-2 text-sm leading-5 bg-white rounded-xl">
         <div>
             <a href="index.php?act=sanphamct&idsp=' . $value["id"] . '" class="w-[190px] h-[190px] flex justify-center items-center">
                 <img src="./uploads/' . $value["img"] . '" alt="loading" class="max-w-[190px] max-h-[190px]">
             </a>
         </div>
 
         <div class="mt-2">
             <div class="overflow-hidden text-ellipsis max-h-9 min-h-9">
                 <a href="index.php?act=sanphamct&idsp=' . $value["id"] . '" class="leading-4 text-[#424242] text-sm text-left hover:text-[#ff379b] w-[184px]">' . $value["ten"] . '</a>
             </div>';

                        if ($value["gia_sale"] && trim($value["gia_sale"]) !== '') {
                            echo ' <div class="mt-2">
                         <div>
                             <a href="' . $value["id"] . '" class="font-bold text-[#C92127] leading-6 text-left pr-2">' . number_format($value["gia"], 0, ".", ",") . ' đ</a>
                             <div class=" inline bg-[#C92127] text-white rounded-br-12 rounded-bl-12 rounded-tl-lg rounded-tr-lg rounded-b-lg text-left text-sm font-bold grid-auto line-height-18px p-1">
                                 ' . $phanTramGiamGia_listSP . ' %
                             </div>
                         </div>
                         
                         <del class="mt-1 text-[#929292] text-sm leading-4 text-left">' . number_format($value["gia_sale"], 0, ".", ",") . ' đ</del>
                         <div class="text-xs leading-5 text-[#2F80ED] my-1">Đã bán ' . $value["luot_ban"] . ' cuốn</div> 
                         <div class="mt-2 flex items-center">
                             <img src="https://file.hstatic.net/200000785527/file/label_img_1_ddaf3d6b446745c9a0052f99fd888209.png"
                                 class="w-[18px] h-[18px]" alt="">
                             <div class="text-[#d42611] font-bold leading-[15px] text-xs ml-1">Flashsale </div>
                         </div>
                     </div>';
                        } else {
                            echo '
                     <div class="mt-2">
                         <div>
                             <span class="font-bold text-[#FF0000] leading-6 text-left pr-2">' . number_format($value["gia"], 0, ".", ",") . ' đ</span>
                         </div>
                         <div class="text-xs leading-5 text-[#2F80ED] mt-6">Đã bán ' . $value["luot_ban"] . ' cuốn</div> 
                         ';
                            echo '</div>';
                        }
                        echo '  </div>
                 </div>';

                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>