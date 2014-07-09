<style>
    .tabs-below > .nav-tabs,
    .tabs-right > .nav-tabs,
    .tabs-left > .nav-tabs {
        border-bottom: 0;
    }

    .tab-content > .tab-pane,
    .pill-content > .pill-pane {
        display: none;
    }

    .tab-content > .active,
    .pill-content > .active {
        display: block;
    }

    .tabs-below > .nav-tabs {
        border-top: 1px solid #ddd;
    }

    .tabs-below > .nav-tabs > li {
        margin-top: -1px;
        margin-bottom: 0;
    }

    .tabs-below > .nav-tabs > li > a {
        -webkit-border-radius: 0 0 4px 4px;
        -moz-border-radius: 0 0 4px 4px;
        border-radius: 0 0 4px 4px;
    }

    .tabs-below > .nav-tabs > li > a:hover,
    .tabs-below > .nav-tabs > li > a:focus {
        border-top-color: #ddd;
        border-bottom-color: transparent;
    }

    .tabs-below > .nav-tabs > .active > a,
    .tabs-below > .nav-tabs > .active > a:hover,
    .tabs-below > .nav-tabs > .active > a:focus {
        border-color: transparent #ddd #ddd #ddd;
    }

    .tabs-left > .nav-tabs > li,
    .tabs-right > .nav-tabs > li {
        float: none;
    }

    .tabs-left > .nav-tabs > li > a,
    .tabs-right > .nav-tabs > li > a {
        min-width: 74px;
        margin-right: 0;
        margin-bottom: 3px;
    }

    .tabs-left > .nav-tabs {
        float: left;
        margin-right: 19px;
        border-right: 1px solid #ddd;
    }

    .tabs-left > .nav-tabs > li > a {
        margin-right: -1px;
        -webkit-border-radius: 4px 0 0 4px;
        -moz-border-radius: 4px 0 0 4px;
        border-radius: 4px 0 0 4px;
    }

    .tabs-left > .nav-tabs > li > a:hover,
    .tabs-left > .nav-tabs > li > a:focus {
        border-color: #eeeeee #dddddd #eeeeee #eeeeee;
    }

    .tabs-left > .nav-tabs .active > a,
    .tabs-left > .nav-tabs .active > a:hover,
    .tabs-left > .nav-tabs .active > a:focus {
        border-color: #ddd transparent #ddd #ddd;
        *border-right-color: #ffffff;
    }

    .tabs-right > .nav-tabs {
        float: right;
        margin-left: 19px;
        border-left: 1px solid #ddd;
    }

    .tabs-right > .nav-tabs > li > a {
        margin-left: -1px;
        -webkit-border-radius: 0 4px 4px 0;
        -moz-border-radius: 0 4px 4px 0;
        border-radius: 0 4px 4px 0;
    }

    .tabs-right > .nav-tabs > li > a:hover,
    .tabs-right > .nav-tabs > li > a:focus {
        border-color: #eeeeee #eeeeee #eeeeee #dddddd;
    }

    .tabs-right > .nav-tabs .active > a,
    .tabs-right > .nav-tabs .active > a:hover,
    .tabs-right > .nav-tabs .active > a:focus {
        border-color: #ddd #ddd #ddd transparent;
        *border-left-color: #ffffff;
    }

    .thumbnail {
        margin-bottom: 0px;
    }

    .collapse.in {
        background-color: #AFCCD8;
        margin-top:0px;
    }

    #cropContainerModal {
        width: 100%;
        height: 140px;
        position: relative;
        border: 1px solid #ccc;
    }
</style>

<div class="col-sm-5" style="border: 5px groove rgb(105, 73, 189);">
    <div class="row">
        <div class="col-sm-4" style="padding-right:0px;">
            <!--            <img id="uploader2" class="img-responsive" src="./templates/green/images/nguoi_ho_chi_minh.jpg"/>-->
            <div id="cropContainerModal">
                <img class="croppedImg img-responsive" src="./templates/green/images/nguoi_ho_chi_minh.jpg">
            </div>
        </div>
        <div class="col-sm-8" style="padding-left:0px;">
            <div class="row">
                <div class="col-sm-12">
                    <label for="profileName" class="control-label">Họ Tên</label>
                    <input type="text" id="profileName" class="form-control" placeholder="____________________________________________________">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-5" style="padding-right:0px;">
                    <label for="profileDOB" class="control-label">Ngày Sinh</label>
                    <input type="text" id="profileDOB" name="" onkeydown="return false" class="inputDate placeholder form-control" data-placeholder="depart" placeholder="DD\MM\YY" autocomplete="off" tabindex="3" />
                </div>
                <div class="col-sm-7">
                    <label for="profileBirthPlace" class="control-label">Nơi Sinh</label>
                    <select id="profileBirthPlace" class="form-control">
                        <option>Hồ Chí Minh</option>
                        <option>Hà Nội</option>
                        <option>Huế</option>
                        <option>Đà Nẵng</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7" style="padding-right:0px;">
                    <label for="profileNationality" class="control-label">Quốc Tịch</label>
                    <select id="profileNationality" class="form-control">
                        <option>Việt Nam</option>
                        <option>Nhật Bản</option>
                        <option>Mỹ</option>
                    </select>
                </div>
                <div class="col-sm-5">
                    <label for="profileGender" class="control-label">Giới Tính</label>
                    <select id="profileGender" class="form-control">
                        <option>Nam</option>
                        <option>Nữ</option>
                        <option>Khác</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-12">
                <button type="button" class="btn btn-success" style="position:absolute; top:-35px;left:20px;" onclick="PopUpFeedback('Profile','Thông Tin Cá Nhân');">Phản Hồi</button>

                <label for="profileFeature" class="control-label">Đặc Điểm Nhận Dạng</label>
                <textarea id="profileFeature" class="form-control" rows="2" placeholder="___________________________________________________________________________________________"></textarea>
            </div>
            <div class="col-sm-8">
                <label for="profileNickname" class="control-label">Biệt Danh</label>
                <input type="text" id="profileNickname"  class="form-control" placeholder=""/>
            </div>
            <div class="col-sm-4">
                <label for="profileDateJoined" class="control-label">Ngày Cấp</label>
                <input type="text" id="profileDateJoined"  class="form-control" placeholder="" disabled value="01/01/2014"/>

            </div>
            <label class="control-label" style="width: 100%;overflow: hidden;"><<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<</label>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12" style="text-align: center;">
            <div class="col-sm-12">
                <label for="profileFeature" class="control-label">Dấu Thị Thực<button type="button" class="btn btn-success" style="margin-bottom:10px;margin-left:30px;" onclick="PopUpFeedback('Profile','Thị Thực');">Phản Hồi</button></label>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img class="thumbnail img-responsive" src="./templates/green/images/visa/ho_chi_minh.jpg"/>
                    <label class="control-label" style="margin-bottom:0px;">Sài Gòn</label>
                    <label class="control-label">17/01/14</label>
                </div>
                <div class="col-sm-4">
                    <img class="thumbnail img-responsive" src="./templates/green/images/visa/ha_noi.jpg"/>
                    <label class="control-label" style="margin-bottom:0px;">Hà Nội</label>
                    <label class="control-label">27/02/14</label>
                </div>
                <div class="col-sm-4">
                    <img class="thumbnail img-responsive" src="./templates/green/images/visa/hue.jpg"/>
                    <label class="control-label" style="margin-bottom:0px;">Huế</label>
                    <label class="control-label">15/03/14</label>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img class="thumbnail img-responsive" src="./templates/green/images/visa/da_nang.jpg"/>
                    <label class="control-label" style="margin-bottom:0px;">Đà Nẵng</label>
                    <label class="control-label">26/03/14</label>
                </div>
                <div class="col-sm-4">
                    <img class="thumbnail img-responsive" src="./templates/green/images/visa/hai_phong.jpg"/>
                    <label class="control-label" style="margin-bottom:0px;">Hải Phòng</label>
                    <label class="control-label">15/04/14</label>
                </div>
                <div class="col-sm-4">
                    <img class="thumbnail img-responsive" src="./templates/green/images/visa/nha_trang.jpg"/>
                    <label class="control-label" style="margin-bottom:0px;">Nha Trang</label>
                    <label class="control-label">30/04/14</label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-7" style="border: 5px groove rgb(105, 73, 189);" id="tripInfo">
<!-- tabs -->
<div class="tabbable">
<ul class="nav nav-tabs" id="tabControl">
    <li><a href="#info_" data-toggle="tab">Chuyến Đi</a></li>
    <li><a id="note" href="#note_" data-toggle="tab">Nhật Ký</a></li>
    <li><a href="#cost_" data-toggle="tab">Chi Phí</a></li>
    <button type="button" class="btn btn-success" style="margin-top:10px;margin-left:30px;" onclick="GetFeedback();">Phản Hồi</button>

</ul>
<div class="tab-content">
<div class="tab-pane active" id="info_">
    <div class="row" style="margin-top: 20px;">
        <div class="col-sm-12" style="text-align: center;">
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-responsive" src="./templates/green/images/visa/ho_chi_minh.jpg"/>
                    <label class="control-label" style="margin-bottom:0px;">Sài Gòn</label>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="./templates/green/images/transport/airplane.png"/>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Hà Nội</label>
                                    <label class="control-label">17/01/2014</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="./templates/green/images/transport/airplane.png"/>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Hà Nội</label>
                                    <label class="control-label">22/01/2014</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="control-label" style="margin-bottom:0px;">Một trong những chuyến đi mà tôi tận hưởng nhất. Yêu cảnh vật, ẩm thực, thắng cảnh cũng như những con người hiền lành nơi đây.</label>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>
    <div class="row">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Tham Quan
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body" style="text-align: center;">
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/attraction/place/1_saigon_central_post_office.jpg"/>
                                <label class="control-label">Bưu Điện Thành Phố</label>
                            </div>
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/attraction/place/3_ben_thanh_market.jpg"/>
                                <label class="control-label">Chợ Bến Thành</label>
                            </div>
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/attraction/place/4_city_opera_house.jpg"/>
                                <label class="control-label">Nhà Hát Thành Phố</label>
                            </div>
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/attraction/place/5_independence_palace.jpg"/>
                                <label class="control-label">Dinh Độc Lập</label>
                            </div>

                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/attraction/place/1_saigon_central_post_office.jpg"/>
                                <label class="control-label">Bưu Điện Thành Phố</label>
                            </div>
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/attraction/place/3_ben_thanh_market.jpg"/>
                                <label class="control-label">Chợ Bến Thành</label>
                            </div>
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/attraction/place/4_city_opera_house.jpg"/>
                                <label class="control-label">Nhà Hát Thành Phố</label>
                            </div>
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/attraction/place/5_independence_palace.jpg"/>
                                <label class="control-label">Dinh Độc Lập</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            Lời Khuyên
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" style="text-align: center;">
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <div class="col-sm-4">
                                <div class="st-icon-star">&nbsp;</div>
                                <label class="control-label">Chợ đêm Bến Thành</label>
                                <p>Bạn nên dành thời gian ghé qua khu chợ đêm nổi tiếng với các món hàng hóa độc đáo và những món ăn vặt tuyệt cú mèo như các loại xôi, phở...</p>
                            </div>
                            <div class="col-sm-4">
                                <div class="st-icon-food">&nbsp;</div>
                                <label class="control-label">Bánh tráng trộn</label>
                                <p>Teen Sài Gòn hay ghé góc phố Nguyễn Thái Học và Trần Hưng Đạo để thưởng thức những bịch bánh tráng trôn ngon tuyệt cú mèo</p>
                            </div>
                            <div class="col-sm-4">
                                <div class="st-icon-cup">&nbsp;</div>
                                <label class="control-label">Phố Tây Phạm Ngũ Lão</label>
                                <p>Hòa mình vào khu phố của những khách Tây Ba Lô trên đoạn Phạm Ngũ Lão và Bùi Viện. Nơi Tây Ba Lô gặp gỡ Ta Ba Lô</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Ẩm Thực
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" style="text-align: center;">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="thumbnail img-responsive" src="./templates/green/images/com_tam.jpg"/>
                                <label class="control-label">Cơm Tấm</label>
                            </div>
                            <div class="col-sm-4">
                                <img class="thumbnail img-responsive" src="./templates/green/images/hu_tieu_nam_vang.jpg"/>
                                <label class="control-label">Hủ Tiếu Nam Vang</label>
                            </div>
                            <div class="col-sm-4">
                                <img class="thumbnail img-responsive" src="./templates/green/images/sau_rieng.jpg"/>
                                <label class="control-label">Sầu Riêng</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="thumbnail img-responsive" src="./templates/green/images/banh_trang_tron.jpg"/>
                                <label class="control-label">Bánh Tráng Trộn</label>
                            </div>
                            <div class="col-sm-4">
                                <img class="thumbnail img-responsive" src="./templates/green/images/tra_chanh.jpg"/>
                                <label class="control-label">Trà Chanh</label>
                            </div>
                            <div class="col-sm-4">
                                <img class="thumbnail img-responsive" src="./templates/green/images/mit.jpg"/>
                                <label class="control-label">Mít</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane" id="note_">
    <iframe id="frame" src="about:blank" height="550px" style="width:100%;">
    </iframe>
</div>
<div class="tab-pane" id="cost_">
    <div class="row">
        <div class="col-sm-12">
            <label class="control-label">Tổng Chi Phí 5 ngày</label>
            <label class="control-label" style="float:right;margin-right:20px;color:red;">4,000,000</label>
            <div class="panel-group" id="accordion_cost">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_cost" href="#collapse1">
                                Đi Tới <p style="float:right">2,000,000</p>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body" style="text-align: center;">
                            <div class="col-sm-12">
                                <div class="col-sm-3">
                                    <img class="thumbnail img-responsive" src="./templates/green/images/transport/airplane.png"/>
                                    <label class="control-label">Chiều Đi</label>
                                    <img class="thumbnail img-responsive" src="./templates/green/images/transport/airplane.png"/>
                                    <label class="control-label">Chiều Về</label>
                                </div>
                                <div class="col-sm-9">
                                    <p>Mình canh được vé giá rẻ của Jetstar vào mỗi ngày thứ 6 hàng tuần. Mình mua vé trước nửa năm nên mới rẻ được như thế.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_cost" href="#collapse2">
                                Nơi Ở <p style="float:right">500,000</p>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" style="text-align: center;">
                        <div class="panel-body">
                            <div class="col-sm-12">
                                <div class="col-sm-3">
                                    <img class="thumbnail img-responsive" src="./templates/green/images/budget/hostel.png"/>
                                </div>
                                <div class="col-sm-9">
                                    <p>Mình thuê được nhà nghỉ Vàng Anh giá rẻ trên đường Phạm Ngũ Lão ngay trung tâm thành phố. Địa điểm này gần các nơi tham quan. Ngoài ra bạn còn có cơ hội gặp được du khách nước ngoài tới thăm Việt Nam đấy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_cost" href="#collapse3">
                                Ăn Uống <p style="float:right">1,000,000</p>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" style="text-align: center;">
                        <div class="panel-body">
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/budget/food_court.png"/>
                            </div>
                            <div class="col-sm-9">
                                <p>Ăn uống ở các hàng quán xung quanh đường mà cũng khá là mắc. Bù lại mình được ăn cơ man nào là các món ngon như cơm tấm, hủ tiếu nam vang cho tới các món trái cây đặc sắc của Nam Bộ như sầu riêng, chôm chôm, măng cụt.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_cost" href="#collapse4">
                                Đi Lại <p style="float:right">100,000</p>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" style="text-align: center;">
                        <div class="panel-body">
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/budget/bus.png"/>
                            </div>
                            <div class="col-sm-9">
                                <p>Chủ yếu mình đi lại bằng xe buýt để tiết kiệm nếu khoảng cách khá xa. Xe buýt Sài Gòn chạy khá dày đặc và tần suất chuyến cũng nhanh. Còn nếu quãng đường ngắn thì mình tranh thủ đi bộ, vừa tiết kiệm thời gian đợi buýt, vừa tiết kiệm được tiền mua ly nước mía.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_cost" href="#collapse5">
                                Chi Tiêu Riêng <p style="float:right">400,000</p>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse" style="text-align: center;">
                        <div class="panel-body">
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/budget/other_low.png"/>
                            </div>
                            <div class="col-sm-9">
                                <p>Mình rất là tiết kiệm trong việc chi tiêu cá nhân. Bình thường mình không phí tiền cho những thứ thấy không đáng, trừ vé vào cổng mấy khu tham quan chả hạn.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion_cost" href="#collapse6">
                                Khác <p style="float:right">0</p>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse" style="text-align: center;">
                        <div class="panel-body">
                            <div class="col-sm-3">
                                <img class="thumbnail img-responsive" src="./templates/green/images/budget/nocost.png"/>
                            </div>
                            <div class="col-sm-9">
                                <p>May mắn là đi tới Sài Gòn mình không bị phụ thu thêm phí gì cả.</p>
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
<!-- /tabs -->
</div>



<script>
    function PopUpSignUp() {
        jQuery('#signup').bPopup();

    }

    //jQuery.noConflict();
    (function ($) {
        $(document).ready(function () {
            $('#frame').attr('height',($(window).height() - $('.container').first().height() - $('#tabControl').height()));
            $('#tripInfo').css('min-height',($(window).height() - $('.container').first().height()));
            $("#profileDOB").datepicker({
                dateFormat: "d M y",
                defaultDate:new Date(),
                numberOfMonths: 2,
                changeMonth: true,
                changeYear: true,
                yearRange: '1930:2014',
                onSelect:function(dateText, inst){
                    var dd = dateText.split(" ")[0];
                    var month = Date.parse(dateText);
                    alert(month);
                    var mm = ("0" + (month.getMonth() + 1)).slice(-2);
                    var yyyy = dateText.split(" ")[2];
                },
                onClose:function(dateText, inst){
                }
            });

            $("#note").click(function () {
                if ($('#frame').attr('src') != '')
                    $("#frame").attr("src", "./templates/green/blog.php");
            });

            var croppicContainerModalOptions = {
                uploadUrl:'./templates/green/img_save_to_file.php',
                cropUrl:'./templates/green/img_crop_to_file.php',
                croppedImg: './templates/green/images/avatar.jpg',
                modal:true,
                imgEyecandyOpacity:0.4,
                loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> '
            }
            var cropContainerModal = new Croppic('cropContainerModal', croppicContainerModalOptions);
        });
    })(jQuery)

    function GetFeedback() {
        PopUpFeedback('Profile', jQuery('.nav-tabs .active a').text());
    }
</script>