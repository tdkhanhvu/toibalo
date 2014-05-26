    <div class="clearfix">
		<style>
			.black-50 {
				background: url(http://www.seanmccambridge.com/tubular/media/black-50-trans.png);
				color: #fff;
				padding: 4px 12px;
				margin: 24px 0;
				text-align:justify;
			}
			
			.black-50 h2 {
				font-size: 26px;
				line-height: 28px;
				font-weight: normal;
				letter-spacing: -1px;
				color: #fff;
				margin: 15px 0;
				text-align:center;
			}
			
			.black-50 p{
				margin: 5px 0;
			}

            .up {
                background-image: url('./templates/green/images/minimize.png');
                background-size:contain;
            }

            .down {
                background-image: url('./templates/green/images/maximize.png');
                background-size:contain;
            }

            .toogle {
                cursor: pointer;
            }
		</style>
        <div id="main">
            <p id="video-controls" class="black-65">
                Video controls:<br />
                <a href="#" class="tubular-play">Play</a> | <a href="#" class="tubular-pause">Pause</a> | <a href="#" class="tubular-volume-up">Volume Up</a> | <a href="#" class="tubular-volume-down">Volume Down</a> | <a href="#" class="tubular-mute">Mute</a>
            </p>
			<div class="span3">
				<div class="black-50 span3">
					<h2 style="display:inline;">Thành Phố Về Đêm</h2>
                    <div style="height:50px;width:50px;display:inline-block;" class="toogle up"></div>
                    <div>
					    <p>Sài Gòn được mệnh danh là thành phố về đêm với những con đường dọc Quận 1, Quận 3 nhộn nhịp đông vui và từng dòng du khách dạo bước trên đường phố</p>
					    <p>Bạn nên thử ra chợ Bến Thành vào buổi tối và hòa mình vào những gánh hàng rong với đa dạng các loại đồ ăn vặt</p>
                    </div>
                </div>
			
				<div class="black-50 span3">
					<h2 style="display:inline;">Gánh Hàng Rong</h2>
                    <div style="height:50px;width:50px;display:inline-block;" class="toogle up"></div>
                    <div>
					    <p>Sài Gòn nổi bật với những món ăn vặt nổi tiếng như xôi mặn, xôi vò, bánh tráng trộn, mì gõ...</p>
					    <p>Hãy thử ghé vào một gánh hàng rong bất kì và thương thức thử những món đặc trưng này của Sài Gòn. Giá cả rất là phải chăng</p>
				    </div>
                </div>
			</div>
            <div class="span3 offset5">
                <div class="black-50 span3">
                    <h2 style="display:inline;">Thành Phố Về Đêm</h2>
                    <div style="height:50px;width:50px;display:inline-block;" class="toogle up"></div>
                    <div>
                        <p>Sài Gòn được mệnh danh là thành phố về đêm với những con đường dọc Quận 1, Quận 3 nhộn nhịp đông vui và từng dòng du khách dạo bước trên đường phố</p>
                        <p>Bạn nên thử ra chợ Bến Thành vào buổi tối và hòa mình vào những gánh hàng rong với đa dạng các loại đồ ăn vặt</p>
                    </div>
                </div>

                <div class="black-50 span3">
                    <h2 style="display:inline;">Gánh Hàng Rong</h2>
                    <div style="height:50px;width:50px;display:inline-block;" class="toogle up"></div>
                    <div>
                        <p>Sài Gòn nổi bật với những món ăn vặt nổi tiếng như xôi mặn, xôi vò, bánh tráng trộn, mì gõ...</p>
                        <p>Hãy thử ghé vào một gánh hàng rong bất kì và thương thức thử những món đặc trưng này của Sài Gòn. Giá cả rất là phải chăng</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="sidebar">


        </div>
    </div>
    <!-- #wrapper -->
    <a id="avatar-go-to-top" href="?option=com_diadiem" style="display: block;"><span></span></a>
<script src="./templates/green/js/jquery.tubular.1.0.js" type="text/javascript"></script>
<script>
    jQuery.noConflict();
    (function ($) {
        jQuery(document).ready(function () {
            var options = { videoId: 'tD1U-5v4eL4', start: 3 };
            $('#wrapper').tubular(options);
            // f-UGhWj1xww cool sepia hd
            // 49SKbS7Xwf4 beautiful barn sepia

            $( ".toogle" ).click(function() {
                var temp = $(this).parent().find('div').eq(1);

                if (temp.css('display') == 'block') {
                    temp.css('display','none');
                    $(this).addClass('down');
                    $(this).removeClass('up');
                }
                else
                {
                    temp.css('display','block');
                    $(this).addClass('up');
                    $(this).removeClass('down');
                }
            });
        });
    })(jQuery);
</script>