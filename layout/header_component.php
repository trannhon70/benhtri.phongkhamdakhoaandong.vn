<?php
$DSBenh = $benh->getDSBenhThuocKhoaTTYK();

?>

<header id="header" class="header">
    <div class="header__top">
        <a class="header__top-item" href="<?php echo $local ?>/trang-chu.html">
            <amp-img class="header__top-left" src="<?php echo $local ?>/images/logos/logo.webp" height="80px" width="245px" alt="..."></amp-img>
        </a>
        <div class="header__top-right">
            <a href="tel:02877779888" class="header__top-right-phone">
                <amp-img class="header__top-right-phone-img" src="<?php echo $local ?>/images/icons/icon_phone.webp" height="35px" width="35px" alt="..."></amp-img>
                <div>028 7777 9888</div>
            </a>
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"  class="header__top-right-phone">
                <amp-img class="header__top-right-phone-img" src="<?php echo $local ?>/images/icons/icon_location.webp" height="35px" width="35px" alt="..."></amp-img>
                <div>LIÊN HỆ</div>
            </a>
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"  class="header__top-right-phone">
                <amp-img class="header__top-right-phone-img" src="<?php echo $local ?>/images/icons/icon_lich.webp" height="35px" width="35px" alt="..."></amp-img>
                <div>ĐẶT LỊCH KHÁM</div>
            </a>
        </div>
    </div>
    <div class="header__bottom">
        <ul class="header__bottom-list">
            <li class="header__bottom-item">
                <a href="<?php echo $local ?>/trang-chu.html">TRANG CHỦ</a>
            </li>
            <li class="header__bottom-item header__bottom-item-menu ">
                <a href="<?php echo $local ?>">DANH MỤC BỆNH <amp-img class="header__top-right-phone-img" src="<?php echo $local ?>/images/icons/icon_down.webp" height="10px" width="15px" alt="..."></amp-img></a>
                <!-- <nav>
                    <ul>
                        <?php if (!empty($DSBenh)) : ?>
                            <?php foreach ($DSBenh as $value) : ?>
                                <li>
                                    <a href="<?php echo $local ?>/<?php echo $value['slug'] ?>.html">
                                        <img width="20px" height="20px" src="<?php echo $local ?>/images/icons/icon_kham.webp" alt=""><?php echo $value['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <p>Không có dữ liệu.</p>
                        <?php endif; ?>

                    </ul>
                </nav> -->
            </li>
            <li class="header__bottom-item">
                <a href="<?php echo $local ?>">TIN TỨC Y KHOA</a>
            </li>
            <li class="header__bottom-item">
                <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" >ĐẶT LỊCH KHÁM</a>
            </li>
            <li class="header__bottom-item">
                <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" >LIÊN HỆ TƯ VẤN</a>
            </li>

        </ul>
    </div>
</header>

<header id="header__mobile" class="header__mobile">
    <div class="header__mobile-body">
        <a href="<?php echo $local ?>" class="header__mobile-body-left">
            <amp-img class="header__top-right-phone-img" src="<?php echo $local ?>/images/logos/logo_mobile.webp" height="44px" width="132px" alt="..."></amp-img>
        </a>
        <div class="header__mobile-body-right">
            <a href="tel:02877779888" class="header__mobile-body-right-item">
                <div class="header__mobile-body-right-item-icon">
                    <amp-img class="header__mobile-body-right-item-icon" src="<?php echo $local ?>/images/icons/icon_phone.webp" height="16px" width="16px" alt="..."></amp-img>
                </div>
                <span>028 7777 9888</span>
            </a>
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"  class="header__mobile-body-right-item">
                <div class="header__mobile-body-right-item-icon">
                    <amp-img class="header__mobile-body-right-item-icon" src="<?php echo $local ?>/images/icons/icon_lich.webp" height="16px" width="16px" alt="..."></amp-img>
                </div>
                <span>Đặt Lịch Khám</span>
            </a>
            <img onclick="showSidebar()" class="header__mobile-body-right-icon" width="25px" height="25px" src="<?php echo $local ?>/images/icons/icon_menu.webp" alt="...">
            <img onclick="hidenSidebar()" class="header__mobile-body-right-icon-close" width="25px" height="25px" src="<?php echo $local ?>/images/icons/icon_close.webp" alt="...">
        </div>
    </div>
    <nav>
        <ul class="sidebar_mobile">
            <li><a href="<?php echo $local ?>">trang chủ</a></li>
            <li class="sidebar_mobile_li"><span onclick="showShelectOption()">danh mục bệnh </span><img  src="<?php echo $local ?>/images/icons/icon_down.webp" height="10px" width="15px" alt="..."></img>
                <!-- <ul class="sidebar_mobile_li_ul">
                    <?php if (!empty($DSBenh)) : ?>
                        <?php foreach ($DSBenh as $value) : ?>

                            <li class="sidebar_mobile_li_ul_li">
                                <a href="<?php echo $local ?>/<?php echo $value['slug'] ?>.html" style="display:flex;align-items:center;justify-content:space-between"> <?php echo $value['name']; ?> </a>
                            </li>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>Không có dữ liệu.</p>
                    <?php endif; ?>
                </ul> -->
            </li>
            <li><a href="<?php echo $local ?>">giới thiệu</a></li>
            <li><a href="<?php echo $local ?>" >TIN TỨC Y KHOA</a></li>
            <li><a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" >ĐẶT LỊCH KHÁM</a></li>
            <li><a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" >LIÊN HỆ TƯ VẤN</a></li>
        </ul>
    </nav>
</header>

