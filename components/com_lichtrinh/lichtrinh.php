<?php
/** Toi Ba Lo */
defined('_JEXEC') or die;

?>

<style type="text/css">
    .vote-icon {
        width:20px;
        height:20px;
        padding:3px;
        z-index: 9999;
    }

    .unclicked {
        opacity:0.4;
        filter:alpha(opacity=40); /* For IE8 and earlier */
    }

    .vote-div {
        width: 20px;
        position: absolute;
        top: 10px;
        right: 60px;
    }
</style>

<div id="avatar-full-2-block">
<div class="avatar-wrapper block-default-width">
<div class="avatar-module ">
    <div class="module-content">


        <div class="custom">
            <div class="st-onepage">

                <div style="width:400px">
                    <p style="width:230px;float:left">Nơi xuất phát</p>
                    <select id="e1" style="width:230px;float:left">
                        <option value="Ba_Ria">Bà Rịa</option>
                        <option value="Bac_Giang">Bắc Giang</option>
                        <option value="Bac_Lieu">Bạc Liêu</option>
                        <option value="Bac_Ninh">Bắc Ninh</option>
                        <option value="Bao_Loc">Bảo Lộc</option>
                        <option value="Ben_Tre">Bến Tre</option>
                        <option value="Bien_Hoa">Biên Hòa</option>
                        <option value="Buon_Ma_Thuot">Buôn Ma Thuột</option>
                        <option value="Ca_Mau">Cà Mau</option>
                        <option value="Cam_Pha">Cẩm Phả</option>
                        <option value="Can_Tho">Cần Thơ</option>
                        <option value="Cam_Ranh">Cam Ranh</option>
                        <option value="Cao_Bang">Cao Bằng</option>
                        <option value="Cao_Lanh">Cao Lãnh</option>
                        <option value="Chau_Doc">Châu Đốc</option>
                        <option value="Da_Lat">Đà Lạt</option>
                        <option value="Da_nẵng">Đà Nẵng</option>
                        <option value="Dien_Bien_Phu">Điện Biên Phủ</option>
                        <option value="Dong_Ha">Đông Hà</option>
                        <option value="Dong_Hoi">Đồng Hới</option>
                        <option value="Ha_Giang">Hà Giang</option>
                        <option value="Ha_Noi">Hà Nội</option>
                        <option value="Ha_Long">Hạ Long</option>
                        <option value="Ha_Tinh">Hà Tĩnh</option>
                        <option value="Hai_Duong">Hải Dương</option>
                        <option value="Hai_Phong">Hải Phòng</option>
                        <option value="Hoa_Binh">Hòa Bình</option>
                        <option value="Ho_Chi_Minh">Hồ Chí Minh</option>
                        <option value="Hoi_An">Hội An</option>
                        <option value="Hue">Huế</option>
                        <option value="Hung_Yen">Hưng Yên</option>
                        <option value="Kon_Tum">Kon Tum</option>
                        <option value="Lai_Chau">Lai Châu</option>
                        <option value="Lang_Son">Lạng Sơn</option>
                        <option value="Lao_Cai">Lào Cai</option>
                        <option value="Long_Xuyen">Long Xuyên</option>
                        <option value="Mong_Cai">Móng Cái</option>
                        <option value="My_Tho">Mỹ Tho</option>
                        <option value="Nam_Dinh">Nam Định</option>
                        <option value="Nha_Trang">Nha Trang</option>
                        <option value="Ninh_Binh">Ninh Bình</option>
                        <option value="Phan_Rang">Phan Rang - Tháp Chàm</option>
                        <option value="Phan_Thiet">Phan Thiết</option>
                        <option value="Phu_Ly">Phủ Lý</option>
                        <option value="Pleiku">Pleiku</option>
                        <option value="Quang_Ngai">Quảng Ngãi</option>
                        <option value="Quy_Nhon">Quy Nhơn</option>
                        <option value="Rach_Gia">Rạch Giá</option>
                        <option value="Sa_Dec">Sa Đéc</option>
                        <option value="Soc_Trang">Sóc Trăng</option>
                        <option value="Son_La">Sơn La</option>
                        <option value="Tam_Ky">Tam Kỳ</option>
                        <option value="Tan_An">Tân An</option>
                        <option value="Tay_Ninh">Tây Ninh</option>
                        <option value="Thai_Binh">Thái Bình</option>
                        <option value="Thai_Nguyen">Thái Nguyên</option>
                        <option value="Thanh_Hoa">Thanh Hóa</option>
                        <option value="Thu_Dau_Mot">Thủ Dầu Một</option>
                        <option value="Tra_Vinh">Trà Vinh</option>
                        <option value="Tuy_Hoa">Tuy Hòa</option>
                        <option value="Tuyen_Quang">Tuyên Quang</option>
                        <option value="Uong_Bi">Uông Bí</option>
                        <option value="Vi_Thanh">Vị Thanh</option>
                        <option value="Viet_Tri">Việt Trì</option>
                        <option value="Vinh">Vinh</option>
                        <option value="Vinh_Long">Vĩnh Long</option>
                        <option value="Vinh_Yen">Vĩnh Yên</option>
                        <option value="Vung_Tau">Vũng Tàu</option>
                        <option value="Yen_Bai">Yên Bái</option>
                    </select>
                    <p style="width:230px;float:left">Thời gian đi</p>
                    <div style="float:left" id="widget">
                        <div id="widgetField">
                            <span>28 July, 2008 &divide; 31 July, 2008</span>
                            <a href="#">Select date range</a>
                        </div>
                        <div id="widgetCalendar">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="avatar-module ">
<div class="module-content">


<div class="custom">
<div class="st-onepage">
<div class="st-projects onepage-appear" style="padding: 35.813541412353516px 0px;" position="item-104">
<div id="transport">
    <div>
        <div style="height:96%; width:100%;background-color:rgb(240, 223, 225);border:5px groove #FAB6C3">
            <div style="width:20%;float:left;">

                <p><img src="./templates/green/images/transport/airplane.png"</p>
            </div>
            <div style="width:76%;float:left;">
                <div class="parent">
                    <p>Sân Bay Quốc Tế Nội Bài: Có các hãng bay tới Sài Gòn như Vietnam Airline, Jetstar
                        , VietJet Air. Thời gian bay khoảng chừng 2h. Chuyến sớm nhất là 7h sáng và chuyến trễ nhất là
                        11h đêm.</p>
                    <br/>
                    <p>Đây được xem là phương tiện đi lại tiện nhất vì thường xuyên có khuyến mãi và thời gian
                        đi lại ngắn nhất so với phương tiện khác. Vé trung bình khoảng 2 triệu cho hai chiều bay</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div style="height:96%; width:100%;background-color:rgb(231, 203, 236);border:5px groove #E094EE">
            <div style="width:20%;float:left;">
                <p><img src="./templates/green/images/transport/train.png"</p>
            </div>
            <div style="width:76%;float:left;">
                <div class="parent">
                    <p>Ga Hòa Hưng: Có các chuyến tàu sắt Bắc Năm chạy liên tục mỗi ngày vào Sài Gòn. Thời gian tàu đi khoảng 30h.
                        Chuyến sớm nhất là 6h sáng và chuyến trễ nhất là 11h đêm.</p>
                    <br/>
                    <p>Đây được xem là phương tiện đi lại tiện thứ nhì sau máy bay vì có giường nằm máy lạnh cho khách.
                        Vé trung bình khoảng 1.5 triệu cho hai lượt tàu đi về</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div style="height:96%; width:100%;background-color:rgb(220, 212, 236);border:5px groove #AE8FBD">
            <div style="width:20%;float:left;">
                <p><img src="./templates/green/images/transport/coach.png"</p>
            </div>
            <div style="width:76%;float:left;">
                <div class="parent">
                    <p>Bến Xe Mỹ Đình: Có các chuyến xe khách đường dài giường nằm chạy liên tục mỗi ngày vào Sài Gòn. Thời gian xe đi khoảng 40h.
                        Chuyến sớm nhất là 8h sáng và chuyến trễ nhất là 11h đêm.</p>
                    <br/>
                    <p>Đây được xem là phương tiện đi lại tiện giá rẻ và phù hợp với túi tiền người dân.
                        Vé trung bình khoảng 1.2 triệu cho hai lượt xe đi về</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div style="height:96%; width:100%;background-color:rgb(207, 234, 247);border:5px groove #6882D3">
            <div style="width:20%;float:left;">
                <p><img src="./templates/green/images/transport/ship.png"</p>
            </div>
            <div style="width:76%;float:left;">
                <div class="parent">
                    <p>Bến Tàu Hà Nội: Mỗi ngày có hai chuyến tàu chạy đường thủy vào Sài Gòn. Thời gian tàu đi khoảng 60h.
                        Chuyến sớm nhất là 10h sáng và chuyến trễ nhất là 8h chiều.</p>
                    <br/>
                    <p>Đây được xem là phương tiện đi lại phù hợp cho những người muốn ngắm cảnh biển.
                        Vé trung bình khoảng 2 triệu cho hai lượt tàu đi về</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div style="height:96%; width:100%;background-color:rgb(207, 234, 247);border:5px groove #6882D3">
            <div style="width:20%;float:left;">
                <p><img src="./templates/green/images/transport/motorbike.png"</p>
            </div>
            <div style="width:76%;float:left;">
                <div class="parent">
                    <p>Quốc Lộ 1A:Dài khoảng 2,000 km đi từ Bắc chí Nam và ghé ngang những tỉnh thành lớn. Dọc theo quốc lộ có
                        các nhà nghỉ uy tín như Phương Trinh, Vàng Anh...</p>
                    <br/>
                    <p>Đây được xem là phương tiện đi lại phù hợp cho những người muốn ngắm cảnh trên đường đi và thích dừng chân
                        trong suốt chuyến đi ở các thành phố khác nhau. Tiền xăng dầu cho hai chiều đi về khoảng 1.5 triệu</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info">
<div>
    <div style="height:96%; width:100%;background-color:rgb(240, 223, 225);border:5px groove #FAB6C3">
        <div style="width:10%;float:left;">
            <p class="monthinfo">1</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/red_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/high.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Thời tiết khô và nóng, có khi lên tới 39 độ vào ban ngày.
                    Du khách được khuyến cáo không nên ra đường vào bữa trưa</p>
            </div>
            <div class="parent">
                <p class="info child">Thời gian giữa tết tây và tết ta nên lượng du khách đổ tới Sài Gòn khá đông</p>
            </div>
            <div class="parent">
                <p class="info child">Giá cả khá là đắt đỏ, tăng gấp rưỡi so với các tháng khác</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div style="height:96%; width:100%;background-color:rgb(231, 203, 236);border:5px groove #E094EE">
        <div style="width:10%;float:left;">
            <p class="monthinfo">2</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/red_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/high.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Thời tiết bắt đầu đỡ hơn so với tháng Giêng.</p>
            </div>
            <div class="parent">
                <p class="info child">Đa phần du khách tới Sài Gòn vào mùa này để tận hưởng Tết Cổ Truyền</p>
            </div>
            <div class="parent">
                <p class="info child">Giá cả leo thang, đắt gấp đôi trong năm</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div style="height:96%; width:100%;background-color:rgb(220, 212, 236);border:5px groove #AE8FBD">
        <div style="width:10%;float:left;">
            <p class="monthinfo">3</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/yellow_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/medium.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Khí hậu bớt oi bức, bắt đầu xuất hiện vài cơn mưa lất phất</p>
            </div>
            <div class="parent">
                <p class="info child">Sau đợt tết, du khách bắt đầu trở về nước</p>
            </div>
            <div class="parent">
                <p class="info child">Giá cả bắt đầu trở lại mức trong năm</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div style="height:96%; width:100%;background-color:rgb(207, 234, 247);border:5px groove #6882D3">
        <div style="width:10%;float:left;">
            <p class="monthinfo">4</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/yellow_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/medium.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Trời mát, hay xuất hiện mưa buổi chiều</p>
            </div>
            <div class="parent">
                <p class="info child">Đợt không cao điểm trong năm cho du lịch</p>
            </div>
            <div class="parent">
                <p class="info child">Giá cả bắt đầu trở lại mức trong năm</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div style="height:96%; width:100%;background-color:rgb(150, 233, 210);border:5px groove #32C5B4">
        <div style="width:10%;float:left;">
            <p class="monthinfo">5</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/green_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/medium.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Trời mát, hay xuất hiện mưa buổi chiều</p>
            </div>
            <div class="parent">
                <p class="info child">Đợt không cao điểm trong năm cho du lịch</p>
            </div>
            <div class="parent">
                <p class="info child">Giá cả bắt đầu trở lại mức trong năm</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div style="height:96%; width:100%;background-color:rgb(207, 234, 247);border:5px groove #98bf21">
        <div style="width:10%;float:left;">
            <p class="monthinfo">6</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/green_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/low.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Mưa nhiều và thường xuyên trong ngày</p>
            </div>
            <div class="parent">
                <p class="info child">Ít du khách tới Sài Gòn vào thời điểm này</p>
            </div>
            <div class="parent">
                <p class="info child">Giá cả thấp so với trong năm</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div style="height:96%; width:100%;background-color:rgb(176, 219, 197);border:5px groove #35D64F">
        <div style="width:10%;float:left;">
            <p class="monthinfo">7</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/green_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/low.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Mưa với tần suất lớn. Có ngày mưa hơn 12h</p>
            </div>
            <div class="parent">
                <p class="info child">Ít du khách tới Sài Gòn vào thời điểm này</p>
            </div>
            <div class="parent">
                <p class="info child">Giá cả rất thấp do hàng hóa dồi dào</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div style="height:96%; width:100%;background-color:rgb(150, 228, 153);border:5px groove #1B9725">
        <div style="width:10%;float:left;">
            <p class="monthinfo">8</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/green_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/low.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Mưa bắt đầu ngớt dần, nhưng khí hậu vẫn khá ẩm ướt</p>
            </div>
            <div class="parent">
                <p class="info child">Vẫn chưa có nhiều du khách tới</p>
            </div>
            <div class="parent">
                <p class="info child">Giá cả rất thấp do hàng hóa dồi dào</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div style="height:96%; width:100%;background-color:rgb(168, 214, 142);border:5px groove #A1C03F">
        <div style="width:10%;float:left;">
            <p class="monthinfo">9</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/yellow_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/medium.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Thời tiết chuyển sang khô ráo, hơi se se lạnh</p>
            </div>
            <div class="parent">
                <p class="info child">Du khách bắt đầu quay lại Sài Gòn</p>
            </div>
            <div class="parent">
                <p class="info child">Già cả tăng cao trở lại</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div style="height:96%; width:100%;background-color:rgb(209, 224, 159);border:5px groove #D8CB35">
        <div style="width:10%;float:left;">
            <p class="monthinfo">10</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/yellow_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/high.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Thời tiết thất thường, lạnh vào sáng sớm và khô nóng vào buổi trưa</p>
            </div>
            <div class="parent">
                <p class="info child">Số lượng du khách tăng mạnh do trùng vào đợt nghỉ</p>
            </div>
            <div class="parent">
                <p class="info child">Già cả tăng cao trở lại</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div style="height:96%; width:100%;background-color:rgb(224, 198, 159);border:5px groove #D89D35">
        <div style="width:10%;float:left;">
            <p class="monthinfo">11</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/red_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/high.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Thời tiết thất thường, lạnh vào sáng sớm và khô nóng vào buổi trưa</p>
            </div>
            <div class="parent">
                <p class="info child">Số lượng du khách tăng mạnh do trùng vào đợt nghỉ</p>
            </div>
            <div class="parent">
                <p class="info child">Già cả tăng cao trở lại</p>
            </div>
        </div>
    </div>
</div>
<div>
    <div style="height:96%; width:100%;background-color:rgb(224, 175, 159);border:5px groove #C5632C">
        <div style="width:10%;float:left;">
            <p class="monthinfo">12</p>
            <p class="icon-sun weathericon"></p>
            <p class="info"><img src="./templates/green/images/crowded/red_star.png"</p>
            <p class="info"><img src="./templates/green/images/money/high.png"</p>
        </div>
        <div style="width:88%;float:left;">
            <div class="parent">
                <p class="weather child">Thời tiết thất thường, lạnh vào sáng sớm và khô nóng vào buổi trưa</p>
            </div>
            <div class="parent">
                <p class="info child">Số lượng du khách tăng mạnh do trùng vào đợt nghỉ</p>
            </div>
            <div class="parent">
                <p class="info child">Già cả tăng cao trở lại</p>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

</div>
</div>

<div id="avatar-full-3-block">
    <div class="avatar-wrapper block-default-width">
        <div class="avatar-module ">
            <div class="module-content">


                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-home onepage-disappear" position="item-105">
                            <iframe id="slideshow" src="about:blank" width="100%" height="100%" style="position:absolute;left:0px" scrolling="no">
                            </iframe>
                            <div id="attraction_info" style="position:absolute;width:450px;height:600px;float:left;right:15px;overflow: auto">
                                <div ><span class="savesHover savesHover-1744950 " data-locationid="1744950" style="visibility: visible; display: block;">
<span class="button_2011_grn copy_test_3 ">
<span class="sprite-gradient1x32_grn gradient">
<span class="saveStar">
<img src="http://c1.tacdn.com/img2/x.gif" class="sprite-suitcase_white">
</span>
<span class="saveText">
<span class="saves-hover-txt" style="display: inline;">Thêm vào</span>
<span class="saves-hover-txt-saved" style="display: none;">Đã thêm</span>
</span>
</span>
</span>
</span><h2 id="attraction_title"></h2></div>
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"><img src="./templates/green/images/icon/description.png" height="25px" width="25px"/><i id="attraction_description"></i></p>
                                <hr />
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"> <img src="./templates/green/images/icon/time.png" height="25px" width="25px"/> <b id="attraction_hour"></b></p>
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"> <img src="./templates/green/images/icon/price.png" height="25px" width="25px"/> <b id="attraction_price"></b></p>
                                <hr />
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"><img src="./templates/green/images/icon/address.png" height="25px" width="25px"/> <b id="attraction_address"></b></p>
                                <p style="font-size:14px;line-height:18px;text-align:justify;margin:0px"><img src="./templates/green/images/icon/phone.png" height="25px" width="25px"/> <b id="attraction_phone"></b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="avatar-full-4-block">
    <div class="avatar-wrapper block-default-width">
        <div class="avatar-module ">
            <div class="module-content">


                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-team onepage-disappear" position="item-106">
                            <h1 class="st-heading">Lời khuyên</h1>

                            <p class="st-sub-heading">Để chuyến du lịch thú vị hơn</p>
                            <div class="row-fluid">
                                <div class="span3">
                                    <div class="st-icon-star">&nbsp;</div>
                                    <div class="vote-div" track="1"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                    <div class="title">Chợ đêm Bến Thành</div>
                                    <div class="content">Bạn nên dành thời gian ghé qua khu chợ đêm nổi tiếng với các món hàng hóa độc đáo và những món ăn vặt tuyệt cú mèo như các loại xôi, phở...
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="st-icon-food">&nbsp;</div>
                                    <div class="vote-div" track="2"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                    <div class="title">Bánh tráng trộn</div>
                                    <div class="content">Teen Sài Gòn hay ghé góc phố Nguyễn Thái Học và Trần Hưng Đạo để thưởng thức những bịch bánh tráng trôn ngon tuyệt cú mèo
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="st-icon-cup">&nbsp;</div>
                                    <div class="vote-div" track="3"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                    <div class="title">Phố Tây Phạm Ngũ Lão</div>
                                    <div class="content">Hòa mình vào khu phố của những khách Tây Ba Lô trên đoạn Phạm Ngũ Lão và Bùi Viện. Nơi Tây Ba Lô gặp gỡ Ta Ba Lô
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="st-icon-camera">&nbsp;</div>
                                    <div class="vote-div" track="4"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                    <div class="title">Nơi chụp ảnh</div>
                                    <div class="content">Khu vực xung quanh nhà thờ Đức Bà, dinh Độc Lập, Bưu Điện Thành Phố là địa điểm ưa thích của các bạn trẻ để lưu giữ lại hình ảnh xưa và nay của Sài Gòn.
                                    </div>
                                </div>
                            </div>
                            <div class="row-fluid hidden">
                                <div class="span3">
                                    <div class="st-icon-star">&nbsp;</div>
                                    <div class="vote-div" track="1"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                    <div class="title">Chợ đêm Bến Thành</div>
                                    <div class="content">Bạn nên dành thời gian ghé qua khu chợ đêm nổi tiếng với các món hàng hóa độc đáo và những món ăn vặt tuyệt cú mèo như các loại xôi, phở...
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="st-icon-food">&nbsp;</div>
                                    <div class="vote-div" track="2"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                    <div class="title">Bánh tráng trộn</div>
                                    <div class="content">Teen Sài Gòn hay ghé góc phố Nguyễn Thái Học và Trần Hưng Đạo để thưởng thức những bịch bánh tráng trôn ngon tuyệt cú mèo
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="st-icon-cup">&nbsp;</div>
                                    <div class="vote-div" track="3"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                    <div class="title">Phố Tây Phạm Ngũ Lão</div>
                                    <div class="content">Hòa mình vào khu phố của những khách Tây Ba Lô trên đoạn Phạm Ngũ Lão và Bùi Viện. Nơi Tây Ba Lô gặp gỡ Ta Ba Lô
                                    </div>
                                </div>
                                <div class="span3">
                                    <div class="st-icon-camera">&nbsp;</div>
                                    <div class="vote-div" track="4"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                    <div class="title">Nơi chụp ảnh</div>
                                    <div class="content">Khu vực xung quanh nhà thờ Đức Bà, dinh Độc Lập, Bưu Điện Thành Phố là địa điểm ưa thích của các bạn trẻ để lưu giữ lại hình ảnh xưa và nay của Sài Gòn.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="avatar-full-5-block" style="background-color:white">
    <div class="avatar-wrapper block-default-width">
        <div class="avatar-module ">
            <div class="module-content">


                <div class="custom">
                    <div class="st-onepage">
                        <div class="st-food onepage-disappear" position="item-107">
                            <h1 class="st-heading" style="color:green">Ẩm Thực</h1>

                            <p class="st-sub-heading" style="color:blue">Món ngon không nên bỏ lỡ</p>
                            <div class="span3">
                                <div class="thumb">
                                    <div class="someContent">
                                        <div class="content" style="width:200px;">Cơm sườn bì chả – món ăn no cơ bản của người Sài Gòn. Cơm tấm từ thuở nào đã có mặt khắp nơi ở đất Sài Gòn này từ những con hẻm bình dân đến các hàng quán tinh tươm. Chỉ là cơm với thịt nướng chan chút nước mắm nhưng đây là món không thể không ăn khi đến Sài Gòn, cũng như người Sài Gòn không bao giờ có thể ngán món này.</div>

                                    </div>
                                    <div class="divLeft" style="left:0px">
                                        <div class="divLeftImage" style="background:url(./templates/green/images/com_tam.jpg);background-repeat:no-repeat;background-size:200% 100%"></div>
                                        <div class="divLeftShadow"></div>
                                    </div>
                                    <div class="divRight" style="left:0px;background-image:url(./templates/green/images/com_tam.jpg);background-repeat:no-repeat;background-size:200% 100%"></div>
                                    <img class="thumbnail-shadow" alt="bottom" src="http://www.nitinh.com/static/another_thumb/thumbnail-shadow.png"/>
                                    <div style="position: absolute;bottom: 60px;width:100%"><h2 style="color: green">Cơm Tấm</h2></div>
                                    <div class="vote-div" track="3" style="top:250px;right:20px"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="thumb">
                                    <div class="someContent">
                                        <div class="content" style="width:200px;">Hủ tiếu Nam Vang là món hủ tiếu có nguồn gốc từ Campuchia nhưng do người Hoa chế biến, nguyên liệu chính là hủ tiếu khô, nước dùng chính là thịt bằm nhỏ, lòng heo nấu cùng</div>

                                    </div>
                                    <div class="divLeft" style="left:0px">
                                        <div class="divLeftImage" style="background:url(./templates/green/images/hu_tieu_nam_vang.jpg);background-repeat:no-repeat;background-size:200% 100%"></div>
                                        <div class="divLeftShadow"></div>
                                    </div>
                                    <div class="divRight" style="left:0px;background-image:url(./templates/green/images/hu_tieu_nam_vang.jpg);background-repeat:no-repeat;background-size:200% 100%"></div>
                                    <img class="thumbnail-shadow" alt="bottom" src="http://www.nitinh.com/static/another_thumb/thumbnail-shadow.png"/>
                                    <div style="position: absolute;bottom: 60px;width:100%"><h2 style="color: green">Hủ Tíu Nam Vang</h2></div>
                                    <div class="vote-div" track="3" style="top:250px;right:20px"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="thumb">
                                    <div class="someContent">
                                        <div class="content" style="width:200px;">Bánh khọt là loại bánh Việt Nam làm từ bột gạo, có nhân tôm, được rán và ăn kèm với rau sống, ớt tươi, chấm nước sốt mắm tôm (không phải mắm tôm hay mắm tôm chua)</div>

                                    </div>
                                    <div class="divLeft" style="left:0px">
                                        <div class="divLeftImage" style="background:url(./templates/green/images/banh_khot.jpg);background-repeat:no-repeat;background-size:200% 100%"></div>
                                        <div class="divLeftShadow"></div>
                                    </div>
                                    <div class="divRight" style="left:0px;background-image:url(./templates/green/images/banh_khot.jpg);background-repeat:no-repeat;background-size:200% 100%"></div>
                                    <img class="thumbnail-shadow" alt="bottom" src="http://www.nitinh.com/static/another_thumb/thumbnail-shadow.png"/>
                                    <div style="position: absolute;bottom: 60px;width:100%"><h2 style="color: green">Bánh Khọt</h2></div>
                                    <div class="vote-div" track="3" style="top:250px;right:20px"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                </div>
                            </div>
                            <div class="span3">
                                <div class="thumb">
                                    <div class="someContent">
                                        <div class="content" style="width:200px;">Thịt quả có thể ăn được, và tỏa ra một mùi đặc trưng, nặng và nồng, ngay cả khi vỏ quả còn nguyên. Một số người thấy sầu riêng có một mùi thơm ngọt ngào dễ chịu</div>

                                    </div>
                                    <div class="divLeft" style="left:0px">
                                        <div class="divLeftImage" style="background:url(./templates/green/images/sau_rieng.jpg);background-repeat:no-repeat;background-size:200% 100%"></div>
                                        <div class="divLeftShadow"></div>
                                    </div>
                                    <div class="divRight" style="left:0px;background-image:url(./templates/green/images/sau_rieng.jpg);background-repeat:no-repeat;background-size:200% 100%"></div>
                                    <img class="thumbnail-shadow" alt="bottom" src="http://www.nitinh.com/static/another_thumb/thumbnail-shadow.png"/>
                                    <div style="position: absolute;bottom: 60px;width:100%"><h2 style="color: green">Sầu Riêng</h2></div>
                                    <div class="vote-div" track="3" style="top:250px;right:20px"><img src="./templates/green/images/icon/select.png" class="vote-icon select unclicked"/><img src="./templates/green/images/vote/up.png" class="vote-icon up unclicked"/></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    li {
        float: left;
        margin-right: 5px;
        cursor: pointer;
    }

    li.vehicle_active, li.accommodation_active, li.food_active, li.transport_active, li.personal_expense_active, li.other_active {
        background: green;
    }

    li img {
        width: 80px;
        height: 80px;
    }

    ul {
        list-style-type: none;
        position: relative;
    }

    .cost {
        text-align:right;
        font-size: 40px;
        color: lightseagreen;
    }

    #total_cost {
        color: red;
    }

    div .cost_title {
        text-align:left;
        font-size: 40px;
        color: palevioletred;
        font-family: 'Times New Roman';
        margin: 10px 0px;
    }

    .cost_info {
        position: absolute;
    }

    .clear {
        clear: both;
    }

    #vehicle_info, #accommodation_info, #food_info, #transport_info, #personal_expense_info, #other_info {
        float: left;
    }
</style>
<div id="avatar-body-bottom-block" position="item-108">
<div class="avatar-wrapper block-default-width">
<div id="100" class="avatar-module ">
    <div class="module-content">


        <div class="custom">
            <div class="st-title">
                <h1 class="st-heading" style="color:rgb(223, 59, 59);">Chi phí</h1>

                <div class="st-sub-heading">Hầu bao cần để đi</div>
            </div>
        </div>
    </div>
</div>
<div id="101" class="avatar-module ">
<div class="module-content">
<div id="cost_info">
<div id="summary">
    <div class="cost_title" style="position:absolute;">
        Tổng chi phí &nbsp;<select id="e2" style="width:50px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        Ngày
    </div>
    <div id="total_cost" class="cost">0</div>
</div>
<hr style="border-top: 1px solid #030303;border-bottom: 1px solid #000000;"/>
<div id="vehicle">
    <div class="cost_title">Đi tới đây</div>
    <ul id="vehicle_option">
        <li cost="0" class="vehicle_active">
            <img src="./templates/green/images/budget/nocost.png" />
        </li>
        <li cost="500">
            <img src="./templates/green/images/transport/coach.png" alt="coach" />
        </li>
        <li cost="900">
            <img src="./templates/green/images/transport/ship.png" />
        </li>
        <li cost="1100">
            <img src="./templates/green/images/transport/train.png" />
        </li>
        <li cost="2000">
            <img src="./templates/green/images/transport/airplane.png" />
        </li>
    </ul>

    <div id="vehicle_cost" class="cost">0</div>

    <div id="vehicle_info" class="accordion">
        <h3>Thông tin</h3>
        <div>
            <p>
                Xe buýt: các bến xe lớn như Miền Đông, Miền Tây
            </p>
            <p>
                Thuyền: Cập vào bến cảng Sài Gòn
            </p>
            <p>
                Xe lửa: Tới Ga Hòa Hưng
            </p>
            <p>
                Máy bay: Sân bay Tân Sơn Nhất
            </p>
        </div>
    </div>

    <br class="clear" />
</div>
<div id="accommodation">
    <div class="cost_title">Nơi ở</div>
    <ul id="accommodation_option">
        <li cost="0" class="accommodation_active">
            <img src="./templates/green/images/budget/nocost.png" />
        </li>
        <li cost="100">
            <img src="./templates/green/images/budget/hostel.png" />
        </li>
        <li cost="500">
            <img src="./templates/green/images/budget/hotel.png" />
        </li>
        <li cost="1500">
            <img src="./templates/green/images/budget/hotel_premium.png" />
        </li>
    </ul>

    <div id="accommodation_cost" class="cost">0</div>

    <div id="accommodation_info" class="accordion">
        <h3>Thông tin</h3>
        <div>
            <p>
                Những nhà nghỉ giá rẻ: nhà khách quân đội
            </p>
            <p>
                Khách sạn bình dân: khu Bàu Cát, Phan Xích Long
            </p>
            <p>
                Khách sạn cao cấp: Rex, Sheraton, New World
            </p>
        </div>
    </div>

    <br class="clear" />
</div>
<div id="food">
    <div class="cost_title">Ẩm thực</div>
    <ul id="food_option">
        <li cost="0" class="food_active">
            <img src="./templates/green/images/budget/nocost.png" />
        </li>
        <li cost="100">
            <img src="./templates/green/images/budget/food_court.png" />
        </li>
        <li cost="500">
            <img src="./templates/green/images/budget/restaurant.png" />
        </li>
        <li cost="1500">
            <img src="./templates/green/images/budget/restaurant_premium.png" />
        </li>
    </ul>

    <div id="food_cost" class="cost">0</div>

    <div id="food_info" class="accordion">
        <h3>Thông tin</h3>
        <div>
            <p>
                Ẩm thực hè phố: Có thể theo dọc những đoạn đường ven trung tâm như Đinh Tiên Hoàng, Bùi Thị Xuân...
            </p>
            <p>
                Nhà hàng bình dân: khu Lý Tự Trọng, Lê Duẩn
            </p>
            <p>
                Nhà hàng sang trọng: Rex, Caravelle, Lion...
            </p>
        </div>
    </div>

    <br class="clear" />
</div>
<div id="transport">
    <div class="cost_title">Đi lại</div>
    <ul id="transport_option">
        <li cost="0" class="transport_active">
            <img src="./templates/green/images/budget/nocost.png" />
        </li>
        <li cost="50">
            <img src="./templates/green/images/budget/bus.png" />
        </li>
        <li cost="400">
            <img src="./templates/green/images/budget/taxi.png" />
        </li>
    </ul>

    <div id="transport_cost" class="cost">0</div>

    <div id="transport_info" class="accordion">
        <h3>Thông tin</h3>
        <div>
            <p>
                Xe buýt: Hệ thống xe buýt khá là phát triển. Có thể bắt buýt trên những tuyến đường...
            </p>
            <p>
                Taxi: Nên đi taxi của những hãng Mai Linh, Vinasun để tránh nạn taxi dù chặt chém
            </p>
        </div>
    </div>

    <br class="clear" />
</div>
<div id="personal_expense">
    <div class="cost_title">Chi tiêu cá nhân</div>
    <ul id="personal_expense_option">
        <li cost="0" class="personal_expense_active">
            <img src="./templates/green/images/budget/nocost.png" />
        </li>
        <li cost="100">
            <img src="./templates/green/images/money/low.png" />
        </li>
        <li cost="300">
            <img src="./templates/green/images/money/medium.png" />
        </li>
        <li cost="800">
            <img src="./templates/green/images/money/high.png" />
        </li>
    </ul>

    <div id="personal_expense_cost" class="cost">0</div>

    <div id="personal_expense_info" class="accordion">
        <h3>Thông tin</h3>
        <div>
            <p>
                Mua đồ giá rẻ: khu chợ Lớn, chợ Gò Vấp
            </p>
            <p>
                Mua đồ giá trung: chợ Bến Thành, chợ Lớn
            </p>
            <p>
                Mua đồ cao cấp: Các trung tâm mua sắm như Diamond, Parkson Hùng Vương, Vincom...
            </p>
        </div>
    </div>

    <br class="clear" />
</div>
<div id="other">
    <div class="cost_title">Các chi phí khác</div>
    <ul id="other_option">
        <li cost="0">
            <img src="./templates/green/images/budget/departure_tax.png" />
        </li>
        <li cost="0">
            <img src="./templates/green/images/budget/visa.png" />
        </li>
    </ul>

    <div id="other_cost" class="cost">0</div>

    <div id="other_info" class="accordion">
        <h3>Thông tin</h3>
        <div>
            <p>
                Không áp dụng với Sài Gòn
            </p>
        </div>
    </div>

    <br class="clear" />
</div>
</div>
</div>
</div>
</div>
</div>

<script>
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            if ($('body').hasClass('avatar-responsive')) {
                var mainMenu = $('.avatar-nav-responsive > ul');

                mainMenu.find('li > span.pull').click(function (event) {
                    $(this.getParent()).find('ul:first').slideToggle();
                });

                $(window).resize(function () {
                    if ($(window).width() > 767) {
                        mainMenu.find('ul').removeAttr('style');
                    }
                });
            }
        });
    })(jQuery)
</script>
<script stype="text/javascript">
    jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            var goToTop = $('#avatar-go-to-top');
            goToTop.hide();

            // fade in #back-top
            $(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 100) {
                        goToTop.fadeIn();
                    } else {
                        goToTop.fadeOut();
                    }
                });

                // scroll body to 0px on click
                goToTop.click(function () {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });
            });
        });
    })(jQuery)
</script>
<script type="text/javascript">
var attraction_selected = [];
var attraction_current = '';

jQuery.noConflict();
(function ($) {
    $(document).ready(function () {
        avatarTemplate.url.base = "http://www.beautiful-templates.com/demo/templates-joomla/st_green/";
        avatarTemplate.template.name = "st_green";
        avatarTemplate.template.params = {"template_panel_setting": "1", "active_responsive": "1", "load_jquery": "1", "template_showcase": "-1", "template_background": "0", "doctype": "5", "show_main_body": "1", "hide_menu_items": ["101"], "show_message": "1", "404_article": "", "template_width": "1200px", "avatar_header_block": "block-default-width", "avatar_header_inside_block": "block-default-width", "avatar_tool_block": "block-max-width-100", "avatar_body_top_block": "block-default-width", "avatar_body_middle_block": "block-default-width", "avatar_body_bottom_block": "block-default-width", "avatar_footer_inside_block": "block-default-width", "avatar_footer_block": "block-default-width", "avatar_full_1_block": "block-default-width", "avatar_full_2_block": "block-default-width", "avatar_full_3_block": "block-default-width", "avatar_full_4_block": "block-default-width", "avatar_full_5_block": "block-default-width", "avatar_body_bottom_block": "block-default-width", "avatar_full_6_block": "block-default-width", "top_left": 20, "top_right": 80, "promo_top_left": 33.33, "promo_top_right": 33.33, "promo_bottom_left": 33.33, "promo_bottom_right": 33.33, "left": 23, "right": 23, "inner_left": 23, "inner_right": 23, "footer_left": 33.33, "footer_right": 33.33, "link_color": "", "hover_color": "", "body_font": "", "menu_font": "", "google_font_api": "0", "google_font_api_key": "", "google_font_content": "", "heading_1": "", "heading_2": "", "heading_3": "", "heading_4": "", "heading_5": "", "heading_6": "", "customize_css": "", "go_to_top": "1", "go_to_top_text": "", "go_to_top_css": "", "css3_effect": "1", "css3_effect_scroll": ".avatar-css3-effect-scroll", "optimize": "0"};
        avatarTemplate.image.initEffects();
        avatarTemplate.layout.init();
        avatarTemplate.settingPanel.init();
        avatarTemplate.menu.init();
        avatarTemplate.css3effect.init();

        $(".note_select").click(function () {
            $("#frame").attr("src", "/green/templates/green/blog.php");
        });

        var startDay = new Date();
        var endDay = new Date();
        endDay = endDay.setDate(endDay.getDate()+5);
        var formatStyle = "d MMM, yyyy";
        var finishSelect = true;

        $('#widgetCalendar').DatePicker({
            flat: true,
            format: 'd B, Y',
            date: [new Date(), new Date()],
            calendars: 1,
            mode: 'range',
            starts: 1,
            onChange: function(formated) {
                finishSelect = !finishSelect;
                $('#widgetField span').get(0).innerHTML = formated.join(' &divide; ');
                startDay = Date.parseExact(formated[0], formatStyle);
                endDay = Date.parseExact(formated[1],formatStyle);

                if(finishSelect) {
                    $("#info").zAccordion("trigger", startDay.getMonth());
                }
            }
        });

        var state = false;
        $('#widgetField>a').bind('click', function(){
            $('#widgetCalendar').stop().animate({height: state ? 0 : $('#widgetCalendar div.datepicker').get(0).offsetHeight}, 500);
            state = !state;
            return false;
        });
        $('#widgetCalendar div.datepicker').css('position', 'absolute');

        $("#e1").select2();
        $("#e1").on("change", function(e) { $("#city").text($("#e1").select2("data").text);
            //alert(e.val + ' ' + e.added + ' ' +e.removed)
        });
        $("#e2").select2();
        $("#e2").on("change", function(e) {
            day = parseInt($("#e2").select2("data").text);
            recalculateTotalCost();
        });

        $("#info").zAccordion({
            startingSlide: 1,
            auto: false,
            tabWidth: "5%",
            width: "100%",
            height: 320,
            trigger: "mouseover"
        });
        $("#transport").zAccordion({
            startingSlide: 1,
            auto: false,
            tabWidth: "10%",
            width: "100%",
            height: 220,
            trigger: "click"
        });
        window.addEventListener("message", receiveMessage, false);

        function checkButton() {
            if (attraction_selected.contains(attraction_current))
            {
                $('.saves-hover-txt').css('display', 'none');
                $('.saves-hover-txt-saved').css('display', 'inline');
            }
            else
            {
                $('.saves-hover-txt').css('display', 'inline');
                $('.saves-hover-txt-saved').css('display', 'none');
            }
        }

        function receiveMessage(event){
            var source = event.source.frameElement; //this is the iframe that sent the message
            var message = event.data; //this is the message
            attraction_current = message;

            if(message == 'saigon_central_post_office'){
                $('#attraction_title').html(
                    "Bưu điện thành phố"
                );
                $('#attraction_description').html(
                    "Bưu điện trung tâm Sài Gòn là một trong những công trình kiến trúc tiêu biểu tại Thành phố Hồ Chí Minh, tọa lạc tại số 2, Công trường Công xã Paris, Quận 1. Đây là tòa nhà được người Pháp xây dựng với phong cách chiết trung [1][2] trong khoảng 1886–1891 theo đồ án thiết kế của kiến trúc sư Villedieu cùng phụ tá Foulhoux.Đây là công trình kiến trúc mang phong cách châu Âu kết hợp với nét trang trí châu Á. Bên ngoài, phía trước ngôi nhà trang trí theo từng ô hình chữ nhật, trên đó ghi danh những nhà phát minh ra ngành điện tín và ngành điện. Trên các ô có đắp hình các nam nữ đội vòng nguyệt quế, trên vòng cung ngôi nhà có chiếc đồng hồ lớn. Vào phía trên trong, hai bên tường cao là hai bản đồ lịch sử mang tên: Saigon et ses environs, 1892 và Lignes télégraphiques du Sud Vietnam et du Cambodge, 1936."
                );
                $('#attraction_hour').html(
                    "Thứ 2 - Thứ 6: 7h00 - 19h00, Thứ 7, Chủ Nhật: 7h30 - 18h00"
                );
                $('#attraction_price').html(
                    "Miễn phí"
                );
                $('#attraction_address').html(
                    "2 Công xã Paris, Bến Nghé, Thành Phố Hồ Chí Minh"
                );
                $('#attraction_phone').html(
                    "08 3822 1677"
                );

                checkButton();
            }

            if(message == 'notre_dame_cathedral'){
                $('#attraction_title').html(
                    "Nhà thờ Đức Bà"
                );
                $('#attraction_description').html(
                    "Trải qua hơn 100 năm và qua 3 thế kỷ, Nhà thờ Đức Bà Sài Gòn, tên chính thức là Vương cung Thánh đường Chính tòa Đức Mẹ Vô nhiễm Nguyên tội (Immaculate Conception Cathedral Basilica) vẫn đẹp lộng lẫy, tráng lệ và uy nghiêm; được coi là một tuyệt tác kiến trúc đô thị Sài Gòn. Đây là một công trình nhà thờ Công giáo nói riêng và tôn giáo nói chung rất đặc sắc, có quy mô thuộc loại lớn nhất ở Việt Nam. Cùng với một số công trình lân cận ở quận 1 như Nhà Bưu Điện trung tâm, Nhà hát thành phố, Bệnh viện Nhi Đồng 2…; Nhà thờ Đức Bà là một công trình tiêu biểu tạo nên bộ mặt kiến trúc đô thị Sài Gòn – Thành phố Hồ Chí Minh."
                );
                $('#attraction_hour').html(
                    "8h00 - 10h00 &amp; 14h30 - 15h30 các ngày trong tuần"
                );
                $('#attraction_price').html(
                    "Miễn phí"
                );
                $('#attraction_address').html(
                    "Bến Nghé, tp. Hồ Chí Minh, Hồ Chí Minh"
                );
                $('#attraction_phone').html(
                    "08 3822 0477"
                );

                checkButton();
            }

            if(message == 'ben_thanh_market'){
                $('#attraction_title').html(
                    "Chợ Bến Thành"
                );
                $('#attraction_description').html(
                    "Nằm ở khu vực trung tâm thành phố, từ lâu chợ Bến Thành đã trở thành biểu tượng của Sài Gòn. Không chỉ thuần túy là nơi buôn bán, gần một trăm năm qua ngôi chợ này đã trở thành một chứng nhân lịch sử chứng kiến bao đổi thay thăng trầm của thành phố, là bộ mặt kinh tế nói lên sự phát triển của một thành phố thương mại lớn nhất nước và là điểm giao hòa giữa Sài Gòn xưa và nay.Bến Thành được xem là chợ bán lẻ quy mô nhất theo nghĩa có thể tìm thấy tại nơi này đủ thứ mặt hàng, từ bình dân đến cao cấp, đặc biệt hàng thực phẩm thuộc loại chọn lọc nhất. Ở đây không thiếu một thứ gì, từ củ hành, trái ớt, mớ rau, con cá, đủ loại hoa quả mùa nào thức nấy, cho tới bánh kẹo, vải vóc, giày dép, túi xách, đồ điện, điện tử, hàng lưu niệm...");
                $('#attraction_hour').html(
                    "7h – 19h, chợ đêm mở từ 19h – 23h45"
                );
                $('#attraction_price').html(
                    "Miễn phí"
                );
                $('#attraction_address').html(
                    "Cửa Nam (nằm giữa các đường Phan Bội Châu - Phan Chu Trinh - Lê Thánh Tôn - Công trường Quách Thị Trang) - Phường Bến Thành - Quận 1"
                );
                $('#attraction_phone').html(
                    "(08)8292096"
                );

                checkButton();

            }

            if(message == 'city_opera_house'){
                $('#attraction_title').html(
                    "Nhà hát thành phố"
                );
                $('#attraction_description').html(
                    "Nhà Hát Thành Phố Hồ Chí Minh, hay thường được biết đến với tên gọi Nhà hát Lớn là một nhà hát nằm trên đường Công trường Lam Sơn, Quận 1, Thành phố Hồ Chí Minh. Nằm ở một vị trí thuận lợi tại trung tâm thành phố, nhà hát được xem là nhà hát trung tâm, đa năng chuyên tổ chức biểu diễn sân khấu nghệ thuật đồng thời cũng được sử dụng để tổ chức một số sự kiện lớn. Đây cũng là nhà hát thuộc loại lâu đời theo kiến trúc Tây Âu và được xem như một địa điểm du lịch của thành phố này.Nhà hát lớn Sài Gòn là một đối trọng về mặt kiến trúc với Nhà hát lớn Hà Nội (cất năm 1911, kiến trúc theo mẫu Opéra Garnier tại Paris, 900 chỗ ngồi, kiến trúc sư Broger et Harloy). Nhà hát Sài Gòn giữ riêng nét đặc thù có một không hai. Tác giả của tòa kiến trúc này là các kiến trúc sư Félix Olivier, Ernest Guichard và Eugène Ferret xây dựng."
                )
                $('#attraction_hour').html(
                    "7h – 23h"
                );
                $('#attraction_price').html(
                    "Miễn phí"
                );
                $('#attraction_address').html(
                    "Số 7, công trường Lam Sơn, Bến Nghé, Quận 1"
                );
                $('#attraction_phone').html(
                    "08 3829 9976"
                );

                checkButton();
            }

            if(message == 'independence_palace'){
                $('#attraction_title').html(
                    "Dinh Độc Lập"
                );
                $('#attraction_description').html(
                    "Dinh Độc Lập (tên gọi trước đây là dinh Norodom, ngày nay còn gọi là dinh Thống Nhất hay hội trường Thống Nhất) là một công trình kiến trúc ở Thành phố Hồ Chí Minh. Hiện nay, nó đã được thủ tướng chính phủ Việt Nam xếp hạng là di tích quốc gia đặc biệt.Vẻ đẹp kiến trúc của Dinh còn được thể hiện bởi bức rèm hoa đá mang hình dáng những đốt trúc thanh tao bao xung quanh lầu 2. Rèm hoa đá được biến cách từ bức cửa bàn khoa của các cung điện Cố đô Huế không chỉ làm tăng vẻ đẹp của Dinh mà còn có tác dụng lấy ánh sáng mặt trời. Ði vào bên trong Dinh, tất cả các đuờng nét kiến trúc đều dùng đường ngay sổ thẳng, các hành lang, đại sảnh, các phòng ốc đều lấy câu chính đại quang minh làm gốc."
                )
                $('#attraction_hour').html(
                    "7h30-11h00 & 13h00-16h00 các ngày trong tuần"
                );
                $('#attraction_price').html(
                    "+ Người lớn: 30.000đ/người/lần.<br>+ Sinh viên: 15.000đ/người/lần<br>+ Học sinh (từ 6 tuổi đến 17 tuổi): 3.000đ/người/lần"
                );
                $('#attraction_address').html(
                    "135 Nam Kỳ Khởi Nghĩa, quận 1, Thành phố Hồ Chí Minh"
                );
                $('#attraction_phone').html(
                    "080. 85037 - 080. 85038 - 080. 85039 – 083.8223652"
                );

                checkButton();
            }

            if(message == 'nha_rong_port'){
                $('#attraction_title').html(
                    "Bến Nhà Rồng"
                );
                $('#attraction_description').html(
                    "Bến Nhà Rồng, hay Bảo tàng Hồ Chí Minh, khởi đầu là một thương cảng lớn của Sài Gòn. Thương cảng này nằm trên sông Sài Gòn và được xây dựng từ 1864, trên khu vực gần cầu Khánh Hội, nay thuộc quận 4. Tại nơi đây, vào ngày 5 tháng 6 năm 1911, người thanh niên Nguyễn Tất Thành (sau này lấy tên là Hồ Chí Minh) đã xuống con tàu Amiral Latouche Tréville làm phụ bếp để có điều kiện sang châu Âu sau này là Ngày Bác Hồ ra đi tìm đường cứu nước ở Việt Nam. Do đó, từ 1975 toà trụ sở xưa của thương cảng Nhà Rồng đã được Việt Nam xây dựng lại thành khu lưu niệm Hồ Chí Minh."
                );
                $('#attraction_hour').html(
                    "Thứ 3 - Chủ Nhật: 7h30 - 11h30 & 13h30 - 17h00."
                );
                $('#attraction_price').html(
                    "Người Việt Nam 2K. Người nước ngoài 10K"
                );
                $('#attraction_address').html(
                    "Số 01 Nguyễn Tất Thành, Phường 12, Quận 4, TP. Hồ Chí Minh"
                );
                $('#attraction_phone').html(
                    "39402060 - 39401094"
                );

                checkButton();
            }
        }

        $('.saves-hover-txt').click(function(){
            $(this).css('display', 'none');
            $('.saves-hover-txt-saved').css('display', 'inline');
            attraction_selected.push(attraction_current);
        });

        $('.saves-hover-txt-saved').click(function(){
            $(this).css('display', 'none');
            $('.saves-hover-txt').css('display', 'inline');
            attraction_selected.splice(attraction_selected.indexOf(attraction_current),1);
        });

        $('.accordion').accordion({
            collapsible: true,
            active: false
        });

        var other_cost = 0;
        var total_cost = 0;
        var day = 1;

        var cost_name = new Array();
        cost_name[0] = 'vehicle';
        cost_name[1] = 'accommodation';
        cost_name[2] = 'food';
        cost_name[3] = 'transport';
        cost_name[4] = 'personal_expense';
        cost_name[5] = 'other';

        $('#vehicle_option li').click(function () {
            $('.vehicle_active').removeClass('vehicle_active');
            var $btn = $(this).addClass('vehicle_active'), idx = $btn.index();
            document.getElementById('vehicle_cost').innerHTML = $(this).attr('cost');
            recalculateTotalCost();
        })

        $('#accommodation_option li').click(function () {
            $('.accommodation_active').removeClass('accommodation_active');
            var $btn = $(this).addClass('accommodation_active'), idx = $btn.index();
            document.getElementById('accommodation_cost').innerHTML = $(this).attr('cost');
            recalculateTotalCost();
        })

        $('#food_option li').click(function () {
            $('.food_active').removeClass('food_active');
            var $btn = $(this).addClass('food_active'), idx = $btn.index();
            document.getElementById('food_cost').innerHTML = $(this).attr('cost');
            recalculateTotalCost();
        })

        $('#transport_option li').click(function () {
            $('.transport_active').removeClass('transport_active');
            var $btn = $(this).addClass('transport_active'), idx = $btn.index();
            document.getElementById('transport_cost').innerHTML = $(this).attr('cost');
            recalculateTotalCost();
        })

        $('#personal_expense_option li').click(function () {
            $('.personal_expense_active').removeClass('personal_expense_active');
            var $btn = $(this).addClass('personal_expense_active'), idx = $btn.index();
            document.getElementById('personal_expense_cost').innerHTML = $(this).attr('cost');
            recalculateTotalCost();
        })

        $('#other_option li').click(function () {
            var value = parseInt($(this).attr('cost'));
            if ($(this).hasClass('other_active')) {
                $(this).removeClass('other_active');
                other_cost -= value;
            }
            else {
                $(this).addClass('other_active');
                other_cost += value;
            }
            document.getElementById('other_cost').innerHTML = other_cost;
            recalculateTotalCost();
        })

        function recalculateTotalCost() {
            total_cost = 0;

            for (var i = 0; i < cost_name.length; i++) {
                if (1 <= i && i <= 4)
                    total_cost += parseInt(document.getElementById(cost_name[i] + '_cost').innerHTML) * day;
                else
                    total_cost += parseInt(document.getElementById(cost_name[i] + '_cost').innerHTML);
            }
            document.getElementById('total_cost').innerHTML = total_cost;
        }

        $('.vote-icon').click(function () {
            if ($(this).hasClass('unclicked')) {
                $(this).removeClass('unclicked');
                if ($(this).hasClass('select'))
                    alert($(this).parent().attr('track') + ' select clicked');
                else
                    alert($(this).parent().attr('track') + ' up clicked');
            }
            else {
                $(this).addClass('unclicked');
                if ($(this).hasClass('select'))
                    alert($(this).parent().attr('track') + ' select unclicked');
                else
                    alert($(this).parent().attr('track') + ' up unclicked');
            }
        })
    });
    $("#slideshow").attr("src", "./templates/green/attraction.php");
})(jQuery)
</script>
<script type="text/javascript">
    window.addEvent('domready',function(){
        $$('div.thumb').each(function(div){

            div.getElement('div.someContent').set('tween', {duration:'700'});
            div.getElement('div.divLeft').set('tween', {duration: '450'});
            div.getElement('div.divRight').set('tween', {duration: '450'});

            div.addEvent('mouseenter',function(e){
                this.getElement('div.divLeft').tween('left','-115px')
                this.getElement('div.divRight').tween('left','115px')
                this.getElement('div.someContent').tween("background-position", "-20px 0px");
            })
            div.addEvent('mouseleave',function(e){
                this.getElement('div.divLeft').tween('left','0px')
                this.getElement('div.divRight').tween('left','0px')
                this.getElement('div.someContent').tween("background-position", "0px -190px");

            })
        })
    })
</script>
<script type="text/javascript">
    jQuery.noConflict();
    (function ($) {
        jQuery(document).ready(function () {
            setTimeout(function () {
                var left_hei = $(".timeline-left").height();
                var right_hei = $(".timeline-right").height();
                var total_hei = 0;
                if (left_hei >= right_hei) {
                    total_hei = left_hei + 66;
                } else {
                    total_hei = right_hei + 66;
                }
                $("#st-content-showcase-timeline").css("height", total_hei + "px");
            }, 1000);
        });
    })(jQuery);
</script>

