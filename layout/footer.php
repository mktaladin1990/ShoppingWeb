<div class="container">
            <div class="row"> </div>
        </div>

        <script type="text/javascript">
            var $_Tawk_API = {},
                $_Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/59449ee250fd5105d0c81805/default';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>

        <footer class="footer-container typefooter-1">
            <div class="footer-top">
                <section id="newsletter-footer" class=" section-color">
                    <div class="container page-builder-ltr">
                        <div class="row row_5uqt row-style ">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_ugr5 col-style">
                                <div class="module newsleter-basic">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12 col-xs-12">
                                            <div class="so-custom-default" style="width: 100%; background-color: #none; ">
                                                <div class="popup-title">
                                                    <div class="modcontent">
                                                        <h3>Đăng ký nhận tin</h3>
                                                        <p> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-12 col-xs-12 pull-left">
                                            <form method="post" name="signup" class="btn-group form-inline signup">
                                                <div class="input-group">
                                                    <input type="email" placeholder="Email của bạn" value="" class="form-control" id="txtemail" name="txtemail" size="55">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-default" type="submit" onclick="return subscribe_newsletter();" name="submit">
                                                            Đăng ký </button>
                                                    </div>
                                                </div>
                                                <div class="send-mail">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        function subscribe_newsletter() {
                                            var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                                            var email = $('#txtemail').val();
                                            var d = new Date();
                                            var createdate = d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + d.getDate() + ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
                                            var status = 0;
                                            var dataString = 'email=' + email + '&createdate=' + createdate + '&status=' + status;
                                            if (email != "") {
                                                if (!emailpattern.test(email)) {
                                                    $('.show-error').remove();
                                                    $('.send-mail').after('<span class="show-error" style="color: red;margin-left: 10px"> Invalid Email </span>')
                                                    return false;
                                                } else {
                                                    $.ajax({
                                                        url: 'index.php?route=extension/module/so_newletter_custom_popup/newsletter',
                                                        type: 'post',
                                                        data: dataString,
                                                        dataType: 'json',
                                                        success: function(json) {
                                                            $('.show-error').remove();
                                                            if (json.message == "Subscription Successfull") {
                                                                $('.send-mail').after('<span class="show-error" style="color: #003bb3;margin-left: 10px"> ' + json.message + '</span>');
                                                                setTimeout(function() {
                                                                    var this_close = $('.popup-close');
                                                                    this_close.parent().css('display', 'none');
                                                                    this_close.parents().find('.so_newletter_custom_popup_bg').removeClass('popup_bg');
                                                                }, 3000);

                                                            } else {
                                                                $('.send-mail').after('<span class="show-error" style="color: red;margin-left: 10px"> ' + json.message + '</span>');
                                                            }
                                                            var x = document.getElementsByClassName('signup');

                                                            for (i = 0; i < x.length; i++) {
                                                                x[i].reset();
                                                            }
                                                        }
                                                    });
                                                    return false;
                                                }
                                            } else {
                                                alert("Email Is Require");
                                                $(email).focus();
                                                return false;
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="" class="footer section-color">
                    <div class="container page-builder-ltr">
                        <div class="row row_35fo row-style ">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col_q3xo col-style">
                                <div class="responsive megamenu-style-dev footer-menu">
                                    <h3>Giới thiệu</h3>
                                    <nav class="navbar-default">
                                        <div class=" container-megamenu  horizontal">
                                            <div class="navbar-header">
                                                <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="megamenu-wrapper">
                                                <span id="remove-megamenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container">
                                                        <ul class="megamenu" data-transition="slide" data-animationtime="500">

                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#store" class="clearfix">
                                                                    <strong>
Về Mike
</strong>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#news" class="clearfix">
                                                                    <strong>
Tin tức
</strong>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#store" class="clearfix">
                                                                    <strong>
Cửa hàng
</strong>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#sale/" class="clearfix">
                                                                    <strong>
Khuyến mãi
</strong>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col_cw14 col-style">
                                <div class="responsive megamenu-style-dev footer-menu">
                                    <h3>Thông tin</h3>
                                    <nav class="navbar-default">
                                        <div class=" container-megamenu  horizontal">
                                            <div class="navbar-header">
                                                <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="megamenu-wrapper">
                                                <span id="remove-megamenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container">
                                                        <ul class="megamenu" data-transition="slide" data-animationtime="500">

                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#chinh-sach-va-quy-dinh-chung" class="clearfix">
                                                                    <strong>
Chính sách và quy định chung
</strong>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#quy-dinh-va-hinh-thuc-thanh-toan" class="clearfix">
                                                                    <strong>
Quy định và hình thức thanh toán
</strong>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#chinh-sach-va-van-chuyen-giao-nhan" class="clearfix">
                                                                    <strong>
Chính sách vận chuyển, giao nhận
</strong>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#chinh-sach-bao-hanh-doi-tra" class="clearfix">
                                                                    <strong>
Chính sách bảo hành - đổi/trả
</strong>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#chinh-sach-bao-mat" class="clearfix">
                                                                    <strong>
Chính sách bảo mật
</strong>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col_vulq col-style">
                                <div class="responsive megamenu-style-dev footer-menu">
                                    <h3>Hỗ trợ</h3>
                                    <nav class="navbar-default">
                                        <div class=" container-megamenu  horizontal">
                                            <div class="navbar-header">
                                                <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="megamenu-wrapper">
                                                <span id="remove-megamenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container">
                                                        <ul class="megamenu" data-transition="slide" data-animationtime="500">

                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#ho-tro-truc-tuyen" class="clearfix">
                                                                    <strong>
Hỗ trợ trực tuyến
</strong>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <strong>
Đối tác
</strong>
                                                                </a>
                                                            </li>
                                                            <li class="">
                                                                <p class="close-menu"></p>
                                                                <a href="#tuyen-dung" class="clearfix">
                                                                    <strong>
Tuyển dụng
</strong>
                                                                </a>
                                                            </li>
                                                            <li class="red">
                                                                <p class="close-menu"></p>
                                                                <a href="#kiem-tra-don-hang" class="clearfix">
                                                                    <strong>
Kiểm tra đơn hàng
</strong>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 col_q51c col-style">
                                <div class="module html-block">
                                    <h3 class="modtitle">Hỗ trợ thanh toán</h3>
                                    <div class="modcontent ">
                                        <p><img alt="" src="./share/logopayment.jpg"></p>
                                    </div>
                                </div>
                                <div class="module html-block">
                                    <h3 class="modtitle">FOLLOW US</h3>
                                    <div class="modcontent ">
                                        <p>
                                            <a href="https://www.instagram.com/mike.vn/"><img alt="" src="./share/instagram.png"></a>&nbsp;&nbsp;
                                            <a href="https://www.youtube.com/channel/UC19DKhxMU7F39yYZSNC193w/"><img alt="" src="./share/youtube.png"></a>&nbsp;&nbsp;
                                            <a href="https://www.lazada.vn/shop/mikevn"><img alt="" src="./share/LZD1.png"></a>&nbsp;&nbsp;
                                            <a href="https://shopee.vn/mikedangkhoa"><img alt="" src="./share/Shopee.png" style="height:50px; width:50px"></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="footer-center">
            </div>

            <div class="footer-bottom ">
                <div class="container">
                    <div class="footer-bottom-content">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                ©DANGKHOACONVERSE - All Rights Reserved. <a href="https://www.webico.vn/">Thiết kế web</a> bởi WEBICO.VN
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style type="text/css">
                #header.hfixed .header-bottom {
                    position: fixed;
                    width: 100%;
                    left: 0;
                    top: 0;
                    z-index: 100;
                }
            </style>
            <script type="text/javascript">
                $(document).ready(function() {
                    $header = $("header"),
                        headerStaticHeight = $header.outerHeight() - $('.header-bottom').outerHeight(),
                        $(window).scroll(function() {
                            var sticky = $('#header'),
                                scroll = $(window).scrollTop();
                            if (scroll >= headerStaticHeight) sticky.addClass('hfixed');
                            else sticky.removeClass('hfixed');
                        });
                });
            </script>
        </footer>
    </div>

    <div id="RHO4Xgq-1574151290012" class="" style="display: block !important;">
        <iframe id="KXNAcCG-1574151290013" src="./share/saved_resource.html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: auto !important; left: auto !important; position: static !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 320px !important; height: 420px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; display: none !important;"></iframe>
        <iframe id="a77Cpaq-1574151290014" src="./share/saved_resource(1).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; pointer-events: auto !important; height: 40px !important; min-height: 40px !important; max-height: 40px !important; width: 300px !important; min-width: 300px !important; max-width: 300px !important; border-radius: 0px !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center !important; margin: 0px !important; top: auto !important; bottom: 0px !important; right: 10px !important; left: auto !important; display: block !important;"></iframe>
        <iframe id="N0N7R7d-1574151290014" src="./share/saved_resource(2).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; display: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; top: auto !important; bottom: 25px !important; right: 1px !important; left: auto !important; width: 21px !important; max-width: 21px !important; min-width: 21px !important; height: 21px !important; max-height: 21px !important; min-height: 21px !important;"></iframe>
        <div class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important; border-radius: unset !important; pointer-events: auto !important;"></div>
        <div id="jjf0hKE-1574151290012" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div>
        <div id="gonfgM3-1574151290012" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: e-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div>
        <div id="CMIkZhP-1574151290013" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div>
        <div id="nf7ZrlG-1574151290013" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: s-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div>
        <div id="n6ubJtM-1574151290013" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div>
        <div id="TvbFVBX-1574151290013" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: ne-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div>
        <div id="EdjLCpJ-1574151290013" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: 0px !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: sw-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div>
        <div id="pNNC4zj-1574151290013" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999999 !important; cursor: se-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"></div>
        <iframe id="xmU0HWH-1574151290149" src="./share/saved_resource(3).html" frameborder="0" scrolling="no" title="chat widget" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 378px !important; height: 823px !important; display: none !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; bottom: 50px !important; top: auto !important; right: 10px !important; left: auto !important;"></iframe>
    </div>
</body>

</html>