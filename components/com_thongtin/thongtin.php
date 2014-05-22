<?php
/** Toi Ba Lo */
defined('_JEXEC') or die;

?>


<!-- search -->
<style>
    @media (max-width: 900px) {
        .container, .tbl_content{
            margin-left:0px;
            margin-right;0px;
        }
    }

    @media (max-width: 400px) {
        .transport_detail div:first-child {
            width:0%;
        }
        .transport_detail div:first-child img{
            display: none;
        }

        .transport_detail div:last-child {
            width:100%;
        }

        .itinerary_info > span:first-child {
            font-size:12px;
        }

        .itinerary_info > span:last-child {
            font-size:20px;
        }
    }

    @media (min-width: 401px) {
        .transport_detail div:first-child {
            width:20%;
            float:left;
        }

        .transport_detail div:first-child img
        {
            margin-right:20px;
        }

        .transport_detail div:last-child {
            width:80%;
            float:left;
        }

        .itinerary_info > span:first-child {
            font-size:2vw;
        }

        .itinerary_info > span:last-child {
            font-size:4vw;
        }
    }
    .itinerary_info:last-child {
        text-align:right;
    }

    @media (max-width: 768px) {
        .itinerary_info:last-child {
            text-align:left;
        }
    }

    .section_head {
        margin-left:0px;
        overflow:hidden;
    }

    .section_head div:first-child {
        background-color: #075e8b;
        height:50px;
        width:300px;
        float:left;
        font-size:300%;
        border-top-left-radius:15px;
        border-top-right-radius:15px;
        moz-border-top-left-radius:15px;
        moz-border-top-right-radius:15px;
    }

    .section_head div:first-child p {
        color:white;
        text-align:left;
        padding-top:20px;
        padding-left:20px;
    }
    .section_head div:last-child
    {
        background-color: rgba(4, 163, 157, 0.91);
        height:20px;width:100%;
        margin-top:-20px;
        float:left;
        margin-left:300px;
    }

    .itinerary_info {
        text-align:left;
        padding-top:20px;
    }
    .transport {
        margin-left:0px;
        padding-top:10px;
        text-align: left;
    }

    .transport > span {
        font-size:2em;
    }

    .transport > div{
        padding-left:50px;
    }

    .transport div:first-of-type {
        padding-bottom:30px;
        padding-top:20px;
    }

    .transport div span:first-child{
        font-size:150%;
    }

    .transport div span:last-child{
        font-size:300%;
    }

    .transport_detail {
        margin-left:0px;
    }

    .transport_detail div:last-child {
        display:table;
    }

    .transport_detail div:last-child p {
        display: table-cell;
        vertical-align: middle;
    }

    .box_title {
        font-size:25px;
    }
    .box_comment {
        font-size:15px;
    }

    .box_content {
        min-height: 0px;
    }
    .span1, .span2, .span3, .span5, .span6, .span7, .span8, .span9, .span10, .span11, .span12{
        margin-left:0px;
    }

    .advice {
        margin-top:10px;
        margin-bottom:10px;
    }

    .advice > div:first-child {
        margin-right:20px;
    }

    .advice > div:last-child {
        text-align: justify;
        padding-top:10px;
    }

    .advice > div:last-child > p:first-child {
        font-weight:bold;
        font-size:x-large;
        margin-bottom:10px;
    }

    .attraction_point {
        position:absolute;
        color: rgb(43, 7, 185);
        z-index: 99;
        font-weight: bolder;
        font-size: xx-large;
        background-color: red;
        border-radius: 15px;
        -moz-border-radius: 15px;
    }

    .attraction {
        margin-top:10px;
        margin-bottom:30px;
        margin-left:0px;
    }

    .attraction > div:first-child {
        margin-right:20px;
    }

    .attraction > div:nth-child(2) {
        text-align:justify;
        margin-top:10px;
    }

    .attraction > div:nth-child(2) > p:first-child
    {
        font-weight:bold;
        font-size:x-large;
        margin-bottom:10px;
    }

    .attraction > div:nth-child(2) > p:nth-child(2)
    {
        font-size:large;
        margin-bottom:10px;
    }

    .attraction > div > div
    {
        font-size:14px;
        line-height:18px;
        text-align:justify;
        margin:0px;
    }

    .attraction > div > div > p > img
    {
        height:25px;
        width:25px;
    }

    .cost
    {
        font-size:x-large;
        margin-left:0px;
        margin-right:20px;
    }

    .cost > table
    {
        padding:10;
    }

    .cost > table tr {
        line-height:40px;
    }

    .cost > table tr > td:first-child {
        padding-left:50px;
        text-align: left;
        width:50%;
    }
    .cost > table th{
        font-weight: bold;
    }

    .cost > table tr:first-child > td:first-child {
        padding-left:20px;
    }

    .cost > table tr > td:nth-child(2), .cost > table tr > th:nth-child(2) {
        text-align: right;
        width:50%;
    }

    .moreinfo {
        font:normal;
        /*margin-left:20px;*/
        margin-top:20px;
        line-height:100%;
        text-align: justify;
    }
</style>

    <div class="span12">
        <div class="span2" style="text-align:left;margin-left:0px;"><img width="145px" src="./templates/green/images/logo.png"/></div>
    </div>

    <!--    Lịch Trình-->
    <div class="span12">
        <div class="span12 section_head">
            <div>
                <p>Lịch Trình</p>
            </div>
            <div></div>
        </div>

        <div class="span3 itinerary_info"><span>Mã Số</span><span>S59I2P</span></div>
        <div class="span9 itinerary_info"><span>Ngày Đặt</span><span>Chủ Nhật, 04 Tháng 5, 2014</span></div>
    </div>

    <!--    Chiều Đi-->
    <div class="span12">

        <div class="span12 section_head">
            <div>
                <p>Chiều Đi</p>
            </div>
            <div></div>
        </div>
        <div class="span4 transport">
            <span>Thứ 6, 04/07/2014</span>
            <div>
                <span>Từ</span>
                <span>Hà Nội</span>
            </div>
            <div>
                <span>Tới</span>
                <span>Hồ Chí Minh</span>
            </div>
        </div>
        <div class="span8 transport_detail">
            <div>
                <img src="./templates/green/images/transport/airplane.png"/>
            </div>
            <div>
                <p> Sân Bay Quốc Tế Nội Bài: Có các hãng bay tới Sài Gòn như Vietnam Airline, Jetstar , VietJet Air. Thời gian bay khoảng chừng 2h. Chuyến sớm nhất là 7h sáng và chuyến trễ nhất là 11h đêm.</p>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>

    <!--    Chiều Về-->
    <div class="span12">

        <div class="span12 section_head">
            <div>
                <p>Chiều Về</p>
            </div>
            <div></div>
        </div>
        <div class="span4 transport">
            <span>Chủ Nhật, 08/07/2014</span>
            <div>
                <span>Từ</span>
                <span>Hồ Chí Minh</span>
            </div>
            <div>
                <span>Tới</span>
                <span>Hà Nội</span>
            </div>
        </div>
        <div class="span8 transport_detail">
            <div>
                <img src="./templates/green/images/transport/airplane.png"/>
            </div>
            <div>
                <p> Sân Bay Quốc Tế Nội Bài: Có các hãng bay tới Sài Gòn như Vietnam Airline, Jetstar , VietJet Air. Thời gian bay khoảng chừng 2h. Chuyến sớm nhất là 7h sáng và chuyến trễ nhất là 11h đêm.</p>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>

<!-- Ẩm Thực -->
<div class="span12">
    <div class="span12 section_head">
        <div>
            <p>Ẩm Thực</p>
        </div>
        <div></div>
    </div>

    <?php
    $bo_title = array ('Cơm Tấm','Hủ tiếu nam vang','Bánh tráng trộn', 'Đá me', 'Măng Cụt', 'Sầu Riêng');
    $bo_image = array ('com_tam.jpg','hu_tieu_nam_vang.jpg','banh_trang_tron.jpg', 'da_me.jpg', 'mang_cut.jpg','sau_rieng.jpg');
    $bo_address = array ('321 Lê Quang Định, Phường 1 Gò Vấp','123 Lý Thái Tổ, Phường 12 Quận 1','23 Nguyễn Thái Học, Phường 6, Quận 1', '123 Hùng Vương, Quận 5', '101 Lê Lai, Quận 1', '69 Võ Văn Kiệt, Phường 8 Quận 6');
    for($i = 0; $i < count($bo_title); $i++) {
        ?>
        <div class='span4' style="margin-bottom:20px;<?php if ($i % 3 == 0) echo("margin-left:0px;");?>">
            <div class='box_title'><?php echo $bo_title[$i]; ?></div>
            <div class='box_content'>
                <div class='box_image'>
                    <img src="./templates/green/images/<?php echo $bo_image[$i]; ?>"/>
                </div>
                <div class='box_comment'>
                    <?php echo $bo_address[$i]; ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class='clearfix'></div>
</div>

<div class="span12">
    <div class="span12 section_head">
        <div>
            <p>Lời Khuyên</p>
        </div>
        <div></div>
    </div>

    <div class="span12 advice">
        <div class="st-icon-star span1"></div>
        <div class="span10">
            <p>Chợ Bến Thành</p>
            <p>Bạn nên dành thời gian ghé qua khu chợ đêm nổi tiếng với các món hàng hóa độc đáo và những món ăn vặt tuyệt cú mèo như các loại xôi, phở...</p>
        </div>
    </div>
    <div class="span12 advice">
        <div class="st-icon-food span1"></div>
        <div class="span10">
            <p>Bánh tráng trộn</p>
            <p>Teen Sài Gòn hay ghé góc phố Nguyễn Thái Học và Trần Hưng Đạo để thưởng thức những bịch bánh tráng trôn ngon tuyệt cú mèo</p>
        </div>
    </div>
    <div class="span12 advice">
        <div class="st-icon-cup span1"></div>
        <div class="span10">
            <p>Phố Tây Phạm Ngũ Lão</p>
            <p>Hòa mình vào khu phố của những khách Tây Ba Lô trên đoạn Phạm Ngũ Lão và Bùi Viện. Nơi Tây Ba Lô gặp gỡ Ta Ba Lô</p>
        </div>
    </div>
    <div class="span12 advice">
        <div class="st-icon-camera span1"></div>
        <div class="span10">
            <p>Nơi chụp ảnh</p>
            <p>Khu vực xung quanh nhà thờ Đức Bà, dinh Độc Lập, Bưu Điện Thành Phố là địa điểm ưa thích của các bạn trẻ để lưu giữ lại hình ảnh xưa và nay của Sài Gòn.</p>
        </div>
    </div>

    <div style="clear:both"></div>
</div>

<div class="span12">
    <div class="span12 section_head">
        <div>
            <p>Tham Quan</p>
        </div>
        <div></div>
    </div>

    <div style="position:relative">
<!--        <span class="attraction_point" style="top:335px;left:343px;">1</span>-->
        <img src="./templates/green/images/Attraction/sai_gon_map.jpg"/>
        <span class="attraction_point" style="top:39%;left:77%;">1</span>
        <span class="attraction_point" style="top:44%;left:69%;">2</span>
        <span class="attraction_point" style="top:58%;left:74%;">3</span>
    </div>



    <div class="span12 attraction">
        <div class="span2"><img src="./templates/green/images/nha_tho_duc_ba.jpg"/></div>
        <div class="span10">
            <p>1) Nhà Thờ Đức Bà</p>
            <p>Trải qua hơn 100 năm và qua 3 thế kỷ, Nhà thờ Đức Bà Sài Gòn, tên chính thức là Vương cung Thánh đường Chính tòa Đức Mẹ Vô nhiễm Nguyên tội (Immaculate Conception Cathedral Basilica) vẫn đẹp lộng lẫy, tráng lệ và uy nghiêm; được coi là một tuyệt tác kiến trúc đô thị Sài Gòn. Đây là một công trình nhà thờ Công giáo nói riêng và tôn giáo nói chung rất đặc sắc, có quy mô thuộc loại lớn nhất ở Việt Nam. Cùng với một số công trình lân cận ở quận 1 như Nhà Bưu Điện trung tâm, Nhà hát thành phố, Bệnh viện Nhi Đồng 2…; Nhà thờ Đức Bà là một công trình tiêu biểu tạo nên bộ mặt kiến trúc đô thị Sài Gòn – Thành phố Hồ Chí Minh.
            </p>
            <div class="span5"><p><img src="./templates/green/images/icon/time.png"/> <b id="attraction_hour">8h00 - 10h00 & 14h30 - 15h30 các ngày trong tuần</b></p></div>
            <div class="span4"><p><img src="./templates/green/images/icon/price.png"> <b id="attraction_price">Miễn phí</b></p></div>
            <div class="span5"><p><img src="./templates/green/images/icon/address.png"> <b id="attraction_address">2 Công xã Paris, Bến Nghé, Thành Phố Hồ Chí Minh</b></p></div>
            <div class="span4"><p><img src="/green/./templates/green/images/icon/phone.png"> <b id="attraction_phone">08 3822 1677</b></p></div>
        </div>
        <div style="clear:both"></div>
    </div>

    <div class="span12 attraction">
        <div class="span2"><img src="./templates/green/images/dinh_doc_lap.jpg"/></div>
        <div class="span10">
            <p>2) Dinh Độc Lập</p>
            <p>Dinh Độc Lập (tên gọi trước đây là dinh Norodom, ngày nay còn gọi là dinh Thống Nhất hay hội trường Thống Nhất) là một công trình kiến trúc ở Thành phố Hồ Chí Minh. Hiện nay, nó đã được thủ tướng chính phủ Việt Nam xếp hạng là di tích quốc gia đặc biệt.Vẻ đẹp kiến trúc của Dinh còn được thể hiện bởi bức rèm hoa đá mang hình dáng những đốt trúc thanh tao bao xung quanh lầu 2. Rèm hoa đá được biến cách từ bức cửa bàn khoa của các cung điện Cố đô Huế không chỉ làm tăng vẻ đẹp của Dinh mà còn có tác dụng lấy ánh sáng mặt trời. Ði vào bên trong Dinh, tất cả các đuờng nét kiến trúc đều dùng đường ngay sổ thẳng, các hành lang, đại sảnh, các phòng ốc đều lấy câu chính đại quang minh làm gốc.
            </p>
            <div class="span5"><p><img src="./templates/green/images/icon/time.png"/> <b id="attraction_hour">7h30-11h00 & 13h00-16h00 các ngày trong tuần</b></p></div>
            <div class="span4"><p><img src="./templates/green/images/icon/price.png"> <b id="attraction_price">+ Người lớn: 30.000đ/người/lần.<br/> + Sinh viên: 15.000đ/người/lần.<br/>+ Học sinh (từ 6 tuổi đến 17 tuổi): 3.000đ/người/lần</b></p></div>
            <div class="span5"><p><img src="./templates/green/images/icon/address.png"> <b id="attraction_address">135 Nam Kỳ Khởi Nghĩa, quận 1, Thành phố Hồ Chí Minh</b></p></div>
            <div class="span4"><p><img src="/green/./templates/green/images/icon/phone.png"> <b id="attraction_phone"> 080. 85037 - 080. 85038 - 080. 85039 – 083.8223652</b></p></div>
        </div>
    </div>
    <div class="span12 attraction">
        <div class="span2"><img src="./templates/green/images/cho_ben_thanh.jpg"/></div>
        <div class="span10">
            <p>3) Chợ Bến Thành</p>
            <p>Nằm ở khu vực trung tâm thành phố, từ lâu chợ Bến Thành đã trở thành biểu tượng của Sài Gòn. Không chỉ thuần túy là nơi buôn bán, gần một trăm năm qua ngôi chợ này đã trở thành một chứng nhân lịch sử chứng kiến bao đổi thay thăng trầm của thành phố, là bộ mặt kinh tế nói lên sự phát triển của một thành phố thương mại lớn nhất nước và là điểm giao hòa giữa Sài Gòn xưa và nay.Bến Thành được xem là chợ bán lẻ quy mô nhất theo nghĩa có thể tìm thấy tại nơi này đủ thứ mặt hàng, từ bình dân đến cao cấp, đặc biệt hàng thực phẩm thuộc loại chọn lọc nhất. Ở đây không thiếu một thứ gì, từ củ hành, trái ớt, mớ rau, con cá, đủ loại hoa quả mùa nào thức nấy, cho tới bánh kẹo, vải vóc, giày dép, túi xách, đồ điện, điện tử, hàng lưu niệm...
            </p>
            <div class="span5"><p><img src="./templates/green/images/icon/time.png"/><b id="attraction_hour">7h – 19h, chợ đêm mở từ 19h – 23h45</b></p></div>
            <div class="span4"><p><img src="./templates/green/images/icon/price.png"><b id="attraction_price">Miễn phí</b></p></div>
            <div class="span5"><p><img src="./templates/green/images/icon/address.png"><b id="attraction_address">Cửa Nam (nằm giữa các đường Phan Bội Châu - Phan Chu Trinh - Lê Thánh Tôn - Công trường Quách Thị Trang) - Phường Bến Thành - Quận 1</b></p></div>
            <div class="span4"><p><img src="/green/./templates/green/images/icon/phone.png"><b id="attraction_phone">(08)8292096</b></p></div>
        </div>
    </div>
    <div style="clear:both"></div>
</div>

<div class="span12">
    <div class="span12 section_head">
        <div>
            <p>Chi Phí 5 Ngày</p>
        </div>
        <div></div>
    </div>

    <div class="span4 cost">
        <table>
            <tr>
                <th>Tổng Chi Phí</th>
                <th>5,000,000</th>
            </tr>
            <tr>
                <td>Đi Tới</td>
                <td>2,000,000</td>
            </tr>
            <tr>
                <td>Nơi Ở</td>
                <td>500,000</td>
            </tr>
            <tr>
                <td>Ăn Uống</td>
                <td>500,000</td>
            </tr>
            <tr>
                <td>Đi Lại</td>
                <td>400,000</td>
            </tr>
            <tr>
                <td>Chi Tiêu Riêng</td>
                <td>1,600,000</td>
            </tr>
            <tr>
                <td>Khác</td>
                <td>0</td>
            </tr>
        </table>
    </div>
    <div class="span8 moreinfo">
        <p style="margin-bottom:10px;">Máy bay xuất phát chuyến sớm nhất từ sân bay Nội Bài là 7h sáng và trễ nhất là 10 tối. Khoảng cách chuyến là 2h. Có các hãng bay Vietjet, Jetstar, Vietnam Airline</p>
        <p style="margin-bottom:10px;">Nhà nghỉ bình dân tập trung ở khu đường Nguyễn Trãi quận 1, giá rẻ lại ngay khu trung tâm. Vấn đề an ninh khá là đảm bảo. Các nhà nghỉ uy tín như Vàng Anh, Ngọc Trinh, Phương Trinh...</p>
        <p style="margin-bottom:10px;">Khu Phạm Ngũ Lão nhiều đồ ăn Tây với giá cả phải chăng. Nếu thích đồ ăn vặt bán có thể đi ven theo chợ Bến Thành nhất là vào ban đêm</p>
        <p style="margin-bottom:10px;">Xe buýt đi lại rất rẻ, trung bình chỉ có 5,000 cho một lượt đi. Về các tuyến xe bạn có thể tham khảo <a href="www.google.com">Các Tuyến Xe Buýt Sài Gòn</a> </p>
        <p style="margin-bottom:10px;">Các khu shopping trung tâm giá cả khá bình dân. Bạn có thể ghé ngang qua những trung tâm Parkson, Vincom, Lotte Mart để chọn mua những sản phẩm vừa ý</p>
        <p style="margin-bottom:10px;"></p>
    </div>
    <div style="clear:both"></div>
</div>
