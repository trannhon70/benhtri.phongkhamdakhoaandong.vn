<?php include_once 'inc/header.php' ?>
<link rel="stylesheet" href="<?php echo $local ?>/css/trang-chu.min.css">
</head>
<?php
$getDSTinTuc = $bai_viet->getDSTinTuc();
?>

<body>
    <?php include_once 'layout/header_component.php' ?>
    <main>
        <?php include_once 'layout/slider_component.php' ?>
        <section id="diseases" class="diseases">
            <ul class="diseases__list">
                <li class="diseases__item">
                    <a href="<?php echo $local ?>">
                        <div>
                            <amp-img class="diseases__item-img" src="<?php echo $local ?>/images/icons/icon_benhtri.webp" height="100px" width="100px" alt="..."></amp-img>
                        </div>
                        <span>Bệnh Trĩ</span>
                    </a>
                </li>
                <li class="diseases__item">
                    <a href="<?php echo $local ?>">
                        <div>
                            <amp-img class="diseases__item-img" src="<?php echo $local ?>/images/icons/icon_rohaumon.webp" height="100px" width="100px" alt="..."></amp-img>
                        </div>
                        <span>rò hậu môn</span>
                    </a>
                </li>
                <li class="diseases__item">
                    <a href="<?php echo $local ?>">
                        <div>
                            <amp-img class="diseases__item-img" src="<?php echo $local ?>/images/icons/icon_apxehaumon.webp" height="100px" width="100px" alt="..."></amp-img>
                        </div>
                        </div><span>apxe hậu môn</span>
                    </a>
                </li>
                <li class="diseases__item">
                    <a href="<?php echo $local ?>">
                        <div>
                            <amp-img class="diseases__item-img" src="<?php echo $local ?>/images/icons/icon_polyp.webp" height="100px" width="100px" alt="..."></amp-img>

                        </div><span>polyp hậu môn</span>
                    </a>
                </li>
                <li class="diseases__item">
                    <a href="<?php echo $local ?>">
                        <div>
                            <amp-img class="diseases__item-img" src="<?php echo $local ?>/images/icons/icon_nutke.webp" height="100px" width="100px" alt="..."></amp-img>
                        </div>
                        <span>nứt kẽ hậu môn</span>
                    </a>
                </li>
                <li class="diseases__item">
                    <a href="<?php echo $local ?>">
                        <div>
                            <amp-img class="diseases__item-img" src="<?php echo $local ?>/images/icons/icon_daitien.webp" height="100px" width="100px" alt="..."></amp-img>

                        </div><span>đại tiện ra máu</span>
                    </a>
                </li>
                <li class="diseases__item">
                    <a href="<?php echo $local ?>">
                        <div>
                            <amp-img class="diseases__item-img" src="<?php echo $local ?>/images/icons/icon_benhhaumon.webp" height="100px" width="100px" alt="..."></amp-img>

                        </div><span>Bệnh Hậu Môn</span>
                    </a>
                </li>
            </ul>
            <hr>
        </section>
        <section class="about" id="about">
            <div class="about__container">
                <div class="about__container-left">
                    <img width="75%" height="auto" src="<?php echo $local ?>/images/users/user_phauthuat.webp" alt="...">
                    <img class="about__container-left-img" width="40%" height="auto" src="<?php echo $local ?>/images/users/user_tri.webp" alt="...">
                </div>
                <div class="about__container-right">
                    <div class="about__container-right-title">Tìm Hiểu Về</div>
                    <div class="about__container-right-title1">Bệnh Trĩ & Hậu Môn</div>
                    <div class="about__container-right-text">
                        Bệnh trĩ và các bệnh Hậu Môn - Trực Tràng ngày càng tăng cao, nhưng lại “nhạy cảm” nên hầu hết mọi người e ngại, mặc cảm không đi khám chữa. Điều này gây ảnh hưởng nghiêm trọng đến tâm lý, sức khỏe, thậm chí tính mạng người bệnh.
                    </div>
                    <div class="about__container-right-list">
                        <div class="about__container-right-list-item">
                            <amp-img class="about__container-right-list-item-img" src="<?php echo $local ?>/images/icons/icon_shield.webp" height="100px" width="100px" alt="..."></amp-img>
                            <div>
                                Uy Tín
                            </div>
                        </div>
                        <div class="about__container-right-list-item">
                            <amp-img class="about__container-right-list-item-img" src="<?php echo $local ?>/images/icons/icon_like.webp" height="100px" width="100px" alt="..."></amp-img>
                            <div>
                                Nhanh Chóng
                            </div>
                        </div>
                        <div class="about__container-right-list-item">
                            <amp-img class="about__container-right-list-item-img" src="<?php echo $local ?>/images/icons/icon_note.webp" height="100px" width="100px" alt="..."></amp-img>
                            <div>
                                Hiệu Quả
                            </div>
                        </div>
                    </div>
                    <div class="about__container-right-button">
                        <button>Tìm Hiểu Thêm</button>
                    </div>
                </div>

            </div>
        </section>
        <section class="about_mobile" id="about_mobile">
            <div class="about_mobile-body">
                <div class="about_mobile-body-left">
                    <img width="100%" height="auto" src="<?php echo $local ?>/images/users/user_tri.webp" alt="...">
                </div>
                <div class="about_mobile-body-right">
                    <div class="about_mobile-body-right-title">
                        Tìm Hiểu Về
                    </div>
                    <div class="about_mobile-body-right-title1">
                        BỆNH TRĨ & HẬU MÔN
                    </div>
                    <div class="about_mobile-body-right-text">Bệnh trĩ và các bệnh Hậu Môn - Trực Tràng ngày càng tăng cao. Nhưng lại “nhạy cảm” nên hầu hết mọi người e ngại, mặc cảm không đi khám chữa. Điều này gây ảnh hưởng nghiêm trọng đến tâm lý, sức khỏe, thậm chí tính mạng người bệnh.</div>
                </div>
            </div>
            <div class="about_mobile-list">
                <div class="about_mobile-list-item">
                    <amp-img class="about_mobile-list-item-img" src="<?php echo $local ?>/images/icons/icon_shield-mobile.webp" height="80px" width="80px" alt="..."></amp-img>
                    <div>
                        Uy Tín
                    </div>
                </div>
                <div class="about_mobile-list-item">
                    <amp-img class="about_mobile-list-item-img" src="<?php echo $local ?>/images/icons/icon_like-mobile.webp" height="80px" width="80px" alt="..."></amp-img>
                    <div>
                        Nhanh Chóng
                    </div>
                </div>
                <div class="about_mobile-list-item">
                    <amp-img class="about_mobile-list-item-img" src="<?php echo $local ?>/images/icons/icon_note-mobile.webp" height="80px" width="80px" alt="..."></amp-img>
                    <div>
                        Hiệu Quả
                    </div>
                </div>
            </div>
            <div class="about_mobile-button">
                <button>TÌM HIỂU THÊM</button>
            </div>
        </section>
         <!-- <section class="some" id="some">
            <div class="some_title">Một Số</div>
            <div class="some__container">
                <div class="some__container-title">
                    TIN TỨC MỚI
                </div>
                <hr>
                <div class="some__container-list">
                    <?php if (!empty($getDSTinTuc)) : ?>
                        <?php foreach ($getDSTinTuc as $value) : ?>
                            <a href="<?php echo $local ?>/<?php echo $value['slug'] ?>.html" class="some__container-item">
                                <img src="<?php echo $local ?>/admin/uploads/<?php echo $value['img'] ?>" alt="...">
                                <h5><?php echo $value['tieu_de'] ?></h5>
                            </a>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>Không có dữ liệu.</p>
                    <?php endif; ?>
                    

                </div>
            </div>
        </section> -->
         <?php include_once 'layout/information_component.php' ?>
        <?php include_once 'layout/environmental_component.php' ?>



    </main> 

        <?php include_once 'inc/footer.php' ?>