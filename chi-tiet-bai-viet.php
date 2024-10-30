<?php include_once 'inc/header.php' ?>
<link rel="stylesheet" href="<?php echo $local ?>/css/chi-tiet-bai-viet.min.css">
</head>
<?php
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$current_url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$slug = basename(parse_url($current_url, PHP_URL_PATH), '.html');

$getPostDetail = null;

$postDetail = $bai_viet->getBaiViet_bySlug($slug);


if (isset($postDetail) && isset($postDetail['name_khoa'])) {
    $getPostDetail = $postDetail;
}
else {
    $postTinTuc = $bai_viet->getBaiVietDauTienByBenh($slug);
    if ($postTinTuc) {
        $getPostDetail = $postTinTuc;
    } else {
        $getPostDetail = null;
    }
}

?>

<body>
    <?php include_once 'layout/header_component.php' ?>
    <main>
        <?php include_once 'layout/slider_component.php' ?>

        <section class="detail" id="detail">
            <div class="detail__left">
                <div id="detail__left-title" class="detail__left-title">
                    <!-- <?php echo $getPostDetail['tieu_de'] ?> -->
                </div>
                <hr>
                <?php if (Session::get('role') === '1' || Session::get('role') === '2') { ?>
                    <a class="chinh-sua"
                        href="<?php echo $local ?>/admin/bai-viet-edit.php?edit=<?php echo $getPostDetail['id'] ?>">
                        <i style="font-size:19px" class="bx bxs-pencil"></i>chỉnh sửa
                    </a>
                <?php } ?>
                <div id="bai-viet">
                     <!-- <?php echo htmlspecialchars_decode($getPostDetail['content']); ?>  -->
                    </div>
                <div class="bai-viet-footer">Nội dung bài viết cung cấp nhằm mục đích tham khảo thêm kiến thức y tế,
                    một số nội dung có thể không thuộc nghiệp vụ của phòng khám chúng tôi, Hiệu quả của việc hỗ trợ
                    điều trị phụ thuộc vào cơ địa của mỗi người. Cần biết thông tin liên hệ để được tư vấn trực
                    tuyến miễn phí.<a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" >[TƯ VẤN TRỰC TUYẾN]</a>
                </div>
            </div>
            <div class="detail__right">
                <div class="detail__right-list">
                    <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"  class="detail__right-item">
                        <img width="80px" height="auto" src="<?php echo $local ?>/images/icons/icon_call.gif" alt="...">
                    </a>
                    <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"  class="detail__right-item">
                        <img width="80px" height="auto" src="<?php echo $local ?>/images/icons/icon_calende.webp" alt="...">
                    </a>
                    <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"  class="detail__right-item">
                        <img width="80px" height="auto" src="<?php echo $local ?>/images/icons/icon_mess.gif" alt="...">
                    </a>
                </div>
                <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" >
                    <img src="<?php echo $local ?>/images/banner/banner_tuvan.webp" alt="..." width="100%" height="auto">
                </a>
                <div class="detail__right-scroll" >
                    <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" >
                        <img style="border: 1px solid #1A925B; border-radius: 10px; " src="<?php echo $local ?>/images/banner/banner_khuyenmai.webp" alt="..." width="100%" height="auto">
                    </a>
                </div>
                
            </div>
        </section>

        <?php include_once 'layout/information_component.php' ?>
        <?php include_once 'layout/team_component.php' ?>
        <?php include_once 'layout/environmental_component.php' ?>
    </main>

    <script>
        const slug = "<?php echo $slug; ?>";
        function fetchPostData() {
        fetch(`<?php echo $local ?>/api/baiviet/get-by-slug-bai-viet.php?slug=${slug}`) 
            .then(response => response.json()) 
            .then(data => {
                if (data) {
                    console.log(data);
                    document.getElementById('detail__left-title').innerText = data.data.tieu_de || 'Không có tiêu đề';

                    document.getElementById('bai-viet').innerHTML = data.data.content || 'Không có nội dung';
                    
                    applyCSSandJS();
                    checkImgMobile()
                    
                } else {
                    console.log('Không tìm thấy dữ liệu');
                }
            })
            .catch(error => {
                console.error('Lỗi khi fetch dữ liệu:', error);
            });
    }

    // Gọi hàm fetch ngay lập tức, sau đó mỗi 10 giây
    fetchPostData();
    setInterval(fetchPostData, 10000);
    </script>
    <script>
        function applyCSSandJS() {
            //images gây shock
            const shockElements = document.querySelectorAll('.shock_img');
            shockElements.forEach(shockElement => {

                shockElement.classList = 'hiden_img'
                const viewdiv = document.createElement('div');
                viewdiv.id = 'viewdiv';
                viewdiv.className = 'view';
                viewdiv.textContent = 'Hình ảnh có nội dung gây shock !! cân nhất trước khi xem';

                const viewbutton = document.createElement('button');
                viewbutton.id = 'viewbutton';
                viewbutton.className = 'view_button';
                viewbutton.textContent = 'click vào xem';
                // Append the button to the parent of the shockElement (image-container)
                shockElement.appendChild(viewdiv);
                shockElement.appendChild(viewbutton);

                // Add click event listener to the button
                viewbutton.addEventListener('click', () => {
                    // Remove the blur effect
                    shockElement.classList.remove('blurred');
                    shockElement.classList.remove('hiden_img');
                    // Hide the button
                    viewdiv.classList.add('hidden');
                    viewbutton.classList.add('hidden');
                });
            })

            let baiVietElement = document.getElementById('bai-viet');
            if (baiVietElement) {
                let pElements = baiVietElement.getElementsByTagName('p');
                for (let i = 0; i < pElements.length; i++) {
                    pElements[i].style.color = '#000000'; // Ghi đè CSS trước đó
                    pElements[i].style.fontWeight = 400;
                    pElements[i].style.fontSize = '14px';
                    pElements[i].style.lineHeight = '27px';
                }
            }

            // Kiểm tra nếu phần tử tồn tại
            if (baiVietElement) {
                // Lấy nội dung HTML của phần tử
                let content = baiVietElement.innerHTML;
                let updatedContent = content.replace(/\(028\) 7776 7777/g, '0968 063 109');

                updatedContent = updatedContent.replace(/Số\.73, Kinh Dương Vương, P\.12, Q\.6, TP\.HCM\./g, '360 An Dương Vương, P.4, Q.5, TP.HCM');
                updatedContent = updatedContent.replace(/73, Kinh Dương Vương, P\.12, Q\.6, TPHCM\./g, '360 An Dương Vương, P.4, Q.5, TPHCM');
                updatedContent = updatedContent.replace(/73, Kinh Dương Vương, P\.12, Q\.6, TPHCM/g, '360 An Dương Vương, P.4, Q.5, TPHCM');
                updatedContent = updatedContent.replace(/Nhật Việt/g, 'An Đông');
                // Cập nhật lại nội dung của thẻ
                baiVietElement.innerHTML = updatedContent;
            }


            let imgElements = baiVietElement.getElementsByTagName('img');
            if (imgElements) {
                for (let i = 0; i < imgElements.length; i++) {
                    // convert link img
                    if (imgElements[i].src.startsWith('<?php echo $local ?>/ckeditor/uploads/') == true) {
                        let urlParts = imgElements[i].src.split('/');
                        let fileName = urlParts[urlParts.length - 1];
                        imgElements[i].src = '<?php echo $local ?>/admin/ckeditor/uploads/' + fileName;
                    }

                    //hiển thị css img chatbox
                    if (imgElements[i].src.startsWith('<?php echo $local ?>/ckfinder/userfiles/images/Chat/Chat-Dakhoa.gif') ==
                    // if (imgElements[i].src.startsWith('http://localhost/ckfinder/userfiles/images/Chat/Chat-Dakhoa.gif') ==
                        true) {
                        imgElements[i].style.borderRadius = '8px';
                        let divWrapper = document.createElement('a');
                        divWrapper.href = "https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en";
                        divWrapper.className = 'glow-on-hover';
                       
                        imgElements[i].parentNode.insertBefore(divWrapper, imgElements[i]);
                        divWrapper.appendChild(imgElements[i])
                    }
                }
            }

            // css h2, h3
            if (baiVietElement) {
                let h2Elements = baiVietElement.getElementsByTagName('h2');
                for (let i = 0; i < h2Elements?.length; i++) {
                    h2Elements[i].style.color = '#1F99D5';
                    h2Elements[i].style.fontWeight = '700';
                    h2Elements[i].style.fontSize = '23px';
                    h2Elements[i].style.textTransform = 'capitalize';
                    h2Elements[i].style.background =
                        'url("<?php echo $local ?>/images/icons/icon_cong.webp") no-repeat left center';
                    h2Elements[i].style.backgroundSize = '23px 23px';
                    h2Elements[i].style.paddingLeft = '25px';
                    h2Elements[i].style.margin = '10px 0px';

                }

                let h3Element = baiVietElement.getElementsByTagName('h3');

                for (let i = 0; i < h3Element.length; i++) {
                    h3Element[i].style.color = '#00D8D8';
                    h3Element[i].style.fontWeight = '700';
                    h3Element[i].style.fontSize = '21px';
                    h3Element[i].style.textTransform = 'capitalize';
                    h3Element[i].style.background =
                        'url("<?php echo $local ?>/images/icons/icon_mui.gif") no-repeat left center';
                    h3Element[i].style.backgroundSize = '21px 21px';
                    h3Element[i].style.paddingLeft = '25px';
                    h3Element[i].style.display = 'flex';
                    h3Element[i].style.alignItems = 'center';
                    h3Element[i].style.margin = '10px 0px';
                }
            }


            //menu bên trái croll theo bài viết
            var rightBottom = document.querySelector('.detail__right-scroll');
            var containerRow = document.querySelector('.detail');
            var rightColumn = document.querySelector('.detail__left');
            var rightCenter = document.querySelector('.detail__right-scroll');
            var baiViet = document.getElementById('bai-viet');

            if (rightBottom && containerRow && rightColumn && rightCenter && baiViet) {
                window.addEventListener('scroll', function() {
                    var containerRowRect = containerRow.getBoundingClientRect();
                    var rightColumnRect = rightColumn.getBoundingClientRect();
                    var rightBottomHeight = rightBottom.offsetHeight;
                    var rightCenterRect = rightCenter.getBoundingClientRect();
                    var baiVietRect = baiViet.getBoundingClientRect();

                    // Kiểm tra khi scroll đến hết nội dung của id="bai-viet"
                    if (baiVietRect.bottom > window.innerHeight) {
                        if (containerRowRect.bottom - (rightBottomHeight - 700) <= window.innerHeight) {
                            rightBottom.style.position = 'absolute';
                            rightBottom.style.bottom = '0';
                            rightBottom.style.top = 'unset';

                        } else if (rightColumnRect.top + rightCenterRect.height <= 0) {
                            rightBottom.style.position = 'fixed';
                            rightBottom.style.top = '20px';
                            rightBottom.style.bottom = 'unset';
                            rightBottom.style.width = '295px';
                        } else {
                            rightBottom.style.position = 'relative';
                            rightBottom.style.top = 'unset';
                            rightBottom.style.bottom = 'unset';
                        }
                    } else {
                        rightBottom.style.position = 'relative';
                        rightBottom.style.top = 'unset';
                        rightBottom.style.bottom = 'unset';
                    }
                });
            } else {
                console.warn("One or more elements were not found in the DOM.");
            }

        }

        // document.addEventListener('DOMContentLoaded', () => {
        //     applyCSSandJS();
        // });

    </script>
    <?php include_once 'inc/footer.php' ?>