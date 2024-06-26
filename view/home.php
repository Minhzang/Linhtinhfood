<section class="bg-white container-content ">
    <div class="mt-5 grid grid-cols-3 gap-4">
        <!-- Slideshow container -->

        <div class=" col-span-2 row-span-2 ">
            <?php
            $images_slide_home = array(
                "https://dominofilm.vn/uploads/albums/2019/01/photo_5c495cf04fcea.jpg",
                "https://cdn0.fahasa.com/media/magentothem/banner7/HSO_DoChoiT324-slide_-smallbanner_Slide_840x320.jpg",
                "https://cdn0.fahasa.com/media/magentothem/banner7/NCCTanViet_T323_BannerSlide_840x320.jpg",
                "https://cdn0.fahasa.com/media/magentothem/banner7/Stem_mainbanner_T3_Slide_840x320.jpg",
                "https://cdn0.fahasa.com/media/magentothem/banner7/VPP_Slide_T3_840x320.jpg"
            );
            ?>
            <div class="swiper mySwiper3 w-full">
                <div class="swiper-wrapper w-full m-0">
                    <?php
                    foreach ($images_slide_home as $image) {
                        echo '<div class="swiper-slide">';
                        echo '    <img class="rounded h-[311px] w-full" src="' . $image . '">';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>

        <div><img class="rounded h-[147px] w-full"
                src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/392x156_shopee_t3.jpg" alt=""></div>
        <div><img class="rounded h-[147px] w-full"
                src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/392x156_zalopay_t3.jpg" alt=""></div>
    </div>

</section>
<!--  -->
<section class="container-content mt-5 bg-white">
    <div class="flex justify-between gap-4">
        <div><img class="rounded" src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/Banner_Quatang_310x210.png"
                alt=""></div>
        <div><img class="rounded"
                src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/Trangforeignbooks_0324_smallbanner_310x210.png"
                alt=""></div>
        <div><img class="rounded"
                src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/MayTinh_SmallBanner_310x210.png" alt="">
        </div>
        <div><img class="rounded"
                src="https://cdn0.fahasa.com/media/wysiwyg/Thang-03-2024/NCCKimDong_T323_BannerSmallBanner_310x210.png"
                alt=""></div>
    </div>
</section>

<!--  -->
<section class="container-content mt-5">
    <div class="grid grid-cols-12 gap-3 mb-3">
        <div class="col-span-3">
            <a href="#"><img class="rounded-xl" src="./assets/image/banner/banner1_1.webp" alt="" /></a>
        </div>
        <div class="col-span-3">
            <a href="#"><img class="rounded-xl" src="./assets/image/banner/banner1_2.webp" alt="" /></a>
        </div>
        <div class="col-span-3">
            <a href="#"><img class="rounded-xl" src="./assets/image/banner/banner1_3.webp" alt="" /></a>
        </div>
        <div class="col-span-3">
            <a href="#"><img class="rounded-xl" src="./assets/image/banner/banner1_4.webp" alt="" /></a>
        </div>
    </div>

    <div>

    </div>
</section>

<!-- flash sale -->
<section class="bg-flash_sale">
    <div class="container-content  p-6 rounded-xl mb-3 ">
        <div class="mb-4 flex justify-between items-center bg-white py-5 px-6 rounded-xl">
            <!-- logo flash sale -->
            <a href="index.php?act=flashsale"> <img class=""
                    src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/flashsale/label-flashsale.svg?q="
                    alt=""> </a>
            <a href="index.php?act=flashsale" class="text-[#1478FC] pl-2 font-bold leading-5 text-sm">Xem tất cả</a>

        </div>


        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- list_sach_flashSale_home -->
                <?php
                foreach ($list_sach_flashSale_home as $key => $value) {
                    $giaCu = $value['gia_sale'];
                    $giaMoi = $value['gia'];

                    $phanTramGiamGia = round((($giaCu - $giaMoi) / $giaCu) * 100, 0);
                    echo '
                        <div class="swiper-slide">
                              <div class="w-[220px] p-4 text-sm leading-5 bg-white rounded-xl">
                              <div>
                                  <a href="index.php?act=sanphamct&idsp=' . $value["id"] . '"><img class="w-[195px] h-[195px]"
                                          src="./uploads/' . $value["img"] . '"
                                          alt="loading" /></a>
                              </div>

                              <!-- title + price-->
                              <div>
                                  <div class="overflow-hidden text-ellipsis  max-h-9 min-h-9 ">
                                      <a href="index.php?act=sanphamct&idsp=' . $value["id"] . '"
                                          class="leading-4 text-[#424242] text-sm text-left hover:text-[#C92127] w-[184px]">' . $value["ten"] . '</a>
                                  </div>

                                  <div class="mt-2">
                                      <div>
                                          <a href="' . $value["id"] . '" class="font-bold text-[#C92127] leading-6 text-left pr-2">' . number_format($value["gia"], 0, ".", ",") . ' đ</a>
                                          <div
                                              class=" inline bg-[#C92127] text-white rounded-br-12 rounded-bl-12 rounded-tl-lg rounded-tr-lg rounded-b-lg text-left text-sm font-bold grid-auto line-height-18px p-1">
                                              ' . $phanTramGiamGia . ' %
                                          </div>
                                      </div>

                                      <del class="mt-1 text-[#929292] text-sm leading-4 text-left">' . number_format($value["gia_sale"], 0, ".", ",") . ' đ</del>
                                      <div class="text-xs leading-5 text-[#2F80ED] my-1">Đã bán ' . $value["luot_ban"] . '</div> 
                                      <div class="mt-2 flex items-center">
                                          <img src="https://file.hstatic.net/200000785527/file/label_img_1_ddaf3d6b446745c9a0052f99fd888209.png"
                                              class="w-[18px] h-[18px]" alt="">
                                          <div class="text-[#d42611] font-bold leading-[15px] text-xs ml-1">Flashsale </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                   </div>';
                }
                ?>
            </div>
            <div class="swiper-pagination mt-10"></div>
        </div>
</section>

<!-- Sản phẩm nổi bật  -->
<section class="container-content my-5 ">
    <div class="bg-white p-2  rounded-xl">

        <div class="font-bold text-lg p-4 rounded-md">Sản phẩm</div>
        <!--  -->
        <div class="grid md:grid-cols-3 lg:grid-cols-5  grid-cols-2 gap-4">

            <?php
            $counter = 0;
            foreach ($list_Top_6_Sach_home as $key => $value) {
                $giaCu_listSP = $value['gia_sale'];
                $giaMoi_listSP = $value['gia'];

                // Kiểm tra giá trị của $giaCu_listSP trước khi thực hiện phép chia
                if ($giaCu_listSP != 0) {
                    $phanTramGiamGia_listSP = round((($giaCu_listSP - $giaMoi_listSP) / $giaCu_listSP) * 100, 0);
                } else {
                    $phanTramGiamGia_listSP = 0; // Gán giá trị mặc định nếu $giaCu_listSP là 0
                }
                if ($counter >= 10) {
                    break;
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
                        <div class="text-xs leading-5 text-[#2F80ED] my-1">Đã bán ' . $value["luot_ban"] . ' </div> 
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
                        <div class="text-xs leading-5 text-[#2F80ED] mt-6">Đã bán ' . $value["luot_ban"] . ' </div> 
                        ';
                    echo '</div>';
                }
                echo '  </div>
                </div>';
                $counter++;
            }
            ?>
        </div>

        <div class="flex justify-center items-center py-2 mt-5"><a
                class="text-center w-[200px] rounded-xl text-sm text-[#C92127] font-bold border-2 border-solid border-[#C92127] leading-5 bg-white py-3 px-4"
                href="index.php?act=sanpham">Xem thêm</a></div>
    </div>
</section>

<!-- Top sản 5 sản phẩm bán chạy -->
<section class="container-content my-5">
    <div>
        <div class="text-white bg-black font-bold text-lg p-4 rounded-md">TOP SẢN PHẢM BÁN CHẠY</div>

        <div class="bg-white grid grid-cols-12 pt-4">
            <div class="col-span-5 border-r-4 border-gray-500-500">
                <?php
                foreach ($list_sach_banchay_home as $key => $value) {
                    echo '<div class="w-[520px] h-[120px]">
                    <div class="flex py-2">
                        <div class="flex justify-between items-center px-4">' . $key + 1 . '</div>
                        <div><a href="index.php?act=sanphamct&idsp=' . $value["id"] . '"><img class="w-[100px] h-[100px]"
                                    src="./uploads/' . $value["img"] . '"
                                    alt=""></a></div>
                        <div class="w-[330px] px-4">
                            <div class="text-sm leading-5 text-left">' . $value["ten"] . '</div>
                            <div class="text-[12px] text-[#808080] leading-5 text-left">';

                    echo '</div>
                            <div class="text-xs leading-5 text-[#2F80ED] my-1">Đã bán ' . $value["luot_ban"] . '</div>
                        </div>
                    </div>
                </div> ';
                }
                ?>
            </div>
            <div class="col-span-7 ">
                <div class="grid grid-cols-12  px-4">
                    <div class="w-[240x] h-[240px] col-span-5"><a
                            href="index.php?act=sanphamct&idsp=<?= $list_sach_banchay_home[0]['id']; ?>"><img
                                class="max-h-full " src="./uploads/<?php echo $list_sach_banchay_home[0]['img']; ?>"
                                alt=""></a></div>
                    <div class="col-span-7 pr-1">
                        <div class="text-[#333333] text-lg font-semibold leading-6 text-left"><a
                                href="index.php?act=sanphamct&idsp=<?= $list_sach_banchay_home[0]['id']; ?>">
                                <?php echo $list_sach_banchay_home[0]['ten']; ?>
                            </a> </div>

                        <div class="text-[#333333] text-sm leading-6 text-left mt-2 mb-1">Danh mục: <span
                                class="font-medium">
                                <?php echo $list_sach_banchay_home[0]['danh_muc_name']; ?>
                        </div>
                        <a href="#" class="font-bold text-[#C92127] leading-6 text-left ">
                            <?php echo number_format($list_sach_banchay_home[0]['gia'], 0, ".", ","); ?> đ
                        </a>
                        <!-- mô tả -->
                        <?php if (!empty($list_sach_banchay_home[0]['mo_ta'])) { ?>
                            <div class="text-[#333333] text-sm leading-6 text-left mt-4 line-clamp-5"><span
                                    class="font-medium">Mô tả : </span> <br>
                                <?php echo $list_sach_banchay_home[0]['mo_ta']; ?>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>