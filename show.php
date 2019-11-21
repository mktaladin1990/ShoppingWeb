<?php
include_once "./layout/header.php";
include_once "./model/connection.php";
?>
 <?php
                            $id = $_GET['id'];
                            $stmt = $conn->prepare("SELECT * FROM product WHERE id=?");
                            $stmt->bind_param("s", $id);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while ($row = $result->fetch_assoc()) :
                                ?>
        <div class="container product-detail product-full">
            <div class="row">
                <div id="content" class="col-md-12">
                    <div class="row product-view product-info">
                        <div class="content-product-left  class-honizol col-md-4 col-sm-5 col-xs-12 ">
                            <div class="pd-content-box">
                                <div class="image-single-box">
                                    <div class="large-image   "> <img itemprop="image" class="product-image-zoom main-image"  src="./share/<?= $row['product_image'] ?>"  title="Chuck Taylor All Star 1970s Hoop Hunter" alt="Chuck Taylor All Star 1970s Hoop Hunter" style="width: 650px ">
                                        <div class="box-label"> </div>
                                    </div>
                                    <div class="image-360" id="image_360">
                                        <div id="car0" class="viewer"><img class="car0 buttons " draggable="false" src="/image/catalog/Converse/360do/1970/165912C/1.jpg">
                                            <div class="loader" style="display: none;">
                                                <div class="three-bounce">
                                                    <div class="one"></div>
                                                    <div class="two"></div>
                                                    <div class="three"></div>
                                                </div>
                                            </div>
                                            <div class="btnDiv navDiv">
                                                <button class="play leftNav" title="left navigation"></button>
                                                <button class="play rightNav" title="right navigation"></button>
                                            </div>
                                        </div>
                                        <div id="dummy"><img src="/image/catalog/Converse/360do/1970/165912C/1.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/2.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/3.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/4.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/5.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/6.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/7.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/8.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/9.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/10.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/11.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/12.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/13.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/14.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/15.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/16.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/17.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/18.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/19.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/20.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/21.jpg"><img src="/image/catalog/Converse/360do/1970/165912C/22.jpg"></div>
                                    </div>
                                </div>                            
                                <script type="text/javascript">
                                    <!--
                                    $(function($) {
                                        var $nav = $("#thumb-slider");
        
                                        $nav.each(function() {
                                            $(this).owlCarousel2({
                                                nav: true,
                                                dots: false,
                                                slideBy: 1,
                                                margin: 10,
                                                navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                                                responsive: {
                                                    0: {
                                                        items: 2
                                                    },
                                                    600: {
                                                        items: 3
                                                    },
                                                    1000: {
                                                        items: 3
                                                    }
                                                }
                                            });
                                        })
        
                                    });
                                    //-->
                                </script>
                            </div>
                        </div>
                        <div class="content-product-right  col-md-8 col-sm-7 col-xs-12">
                            <div class="pd-content-box">                           
                           
                                <div class="title-product">
                                    <h1><?= $row['product_name'] ?></h1> </div>                               
                                <div class="desc-price">
                                    <div class="product-desc">
                                        <div class="stock hidden"><span> Kho hàng : </span> Còn hàng </div>
                                        <div class="brand hidden"><span>Nhà sản xuất:</span><a href="#">Converse</a></div>
                                        <div class="model hidden"><span>Mã số:</span> Chuck Taylor All Star 1970s Hoop Hunter</div>
                                        <div class="sku"><span>SKU: </span> <?= $row['product_code'] ?></div>
                                        <div class="metarial"><span>Chất liệu: </span> Ripstop Poly</div>
                                        <div class="color"><span>Màu sắc: </span> Surplus Olive/Black/Campfire Orange</div>
                                    </div>
                                    <div class="price-stock">
                                        <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                            <div class="rprice"> <span class="tprice">Mike Price: </span> <span class="price-new"><?= number_format($row['product_sale']) .'&nbsp;VNĐ' ?> </span> </div>
                                        </div>
                                        <div class="promo-text">
                                            <p>MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC, TẶNG VỚ CONVERSE CHÍNH HÃNG KHI ĐẶT HÀNG ONLINE</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="short-description"> <?= $row['product_des'] ?></div>
                                <div id="product">
                                    <div class="option-box">
                                        <div class="options">
                                            <div class="option-item">
                                                <div class="form-group required">
                                                    <div class="select-box">
                                                        <select name="option[4367]" id="input-option4367" class="form-control" style="font-weight: bold;">
                                                            <option value="">VUI LÒNG CHỌN SIZE</option>
                                                            <option value="21442">6.5US&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;39.5EUR&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25cm </option>
                                                            <option value="21443">&nbsp;&nbsp;7US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;40EUR&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;25.5cm </option>
                                                            <option value="21444">7.5US&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;41EUR&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;26cm </option>
                                                            <option value="21445">&nbsp;&nbsp;8US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;41.5EUR&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;26.5cm </option>
                                                            <option value="21446">8.5US&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;42EUR&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;27cm </option>
                                                            <option value="21447">&nbsp;&nbsp;9US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;42.5EUR&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;27.5cm </option>
                                                            <option value="21448">9.5US&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;43EUR&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;28cm </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="option-item">
                                                <div class="form-group hide">
                                                    <label class="control-label">Màu sắc</label>
                                                    <div id="input-option4366">
                                                        <div class="radio option_image radio-type-button">
                                                            <label>
                                                                <input type="radio" name="option[4366]" value="21435"> <span class="option-content-box"> <img src="https://drake.vn/image/cache/catalog/Other/bang-mau/cach-chuan-mau-sac-trong-in-an-02-20x20.jpg" alt="Multi" class="img-thumbnail"> <span class="option-name">Multi</span> </span>
                                                            </label>
                                                        </div>
                                                        <script type="text/javascript">
                                                            $(document).ready(function() {
                                                                $('#input-option4366').on('click', 'span', function() {
                                                                    $('#input-option4366 span').removeClass("active");
                                                                    $(this).addClass("active");
                                                                });
                                                            });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quantity-box">
                                    <form action="" method="POST" class="form-submit">
                                        <div class="option quantity">
                                            <div class="input-group quantity-control" unselectable="on" style="user-select: none;">
                                                <label><b>Số lượng:</b></label>
                                                <div class="quantity-content">
                                                    <span class="input-group-addon product_quantity_down">-</span>
                                                    <input class="form-control soluongsp" type="text" name="" value="1" >
                                                    <input type="hidden" name="product_id" value="2391"> 
                                                    <span class="input-group-addon product_quantity_up">+</span> </div>
                                            </div>
                                        </div>
                                        <div class="button-box">
                                            <div class="button-pd">
                                           
                                            <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                            <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                            <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                            <input type="hidden" class="psale" value="<?= $row['product_sale'] ?>">
                                            <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">                                           
                                            <button type="button" title="Đặt hàng" data-loading-text="Đang Xử lý..." id="button-cart" class="btn btn-mega btn-lg addToCart"> Đặt hàng</button>
                                        
                                            </div>                                           
                                        </div>
                                    </form>  

                                    </div>
                                    <div class="document"> </div>
                                
                                    <div id="khuyenmai"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="pd-tab">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab-specification" data-toggle="tab">Thông số kỹ thuật</a></li>                                  
                                    <li><a href="#tab-tags" data-toggle="tab">Tags</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-specification">
                                        <div class="product-attributes">
                                            <div class="attribute-group">
                                                <h3>Thông tin sản phẩm</h3>
                                                <ul class="attribute-list">
                                                    <li>
                                                        <label class="label">Nhãn hiệu <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Converse </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Tên <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data"><?= $row['product_name'] ?> </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Mã sản phẩm <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data"><?= $row['product_code'] ?>  </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Dòng sản phẩm <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Chuck Taylor All Star 1970s </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Bộ sưu tập <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Hoop Hunter </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Nơi sản xuất <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Việt Nam </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Chế độ bảo hành <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Bảo hành chính hãng Converse 01 tháng </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Phụ kiện theo kèm <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Túi Converse <br> Phiếu bảo hành chính hãng <br> Hộp giày </span> </div>
                                                    </li>
                                                    <li class="fullwidth">
                                                        <label class="label">MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC, TẶNG VỚ CONVERSE CHÍNH HÃNG KHI ĐẶT HÀNG ONLINE <span class="prd-tab-colon">:</span></label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="attribute-group">
                                                <h3>Đặc tính sản phẩm</h3>
                                                <ul class="attribute-list">
                                                    <li>
                                                        <label class="label">Giới tính <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Unisex </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Màu sắc <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Surplus Olive/Black/Campfire Orange </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Phần thân <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Ripstop Poly </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Lớp lót <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Vải </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Đế giày <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Cao su </span> </div>
                                                    </li>
                                                    <li>
                                                        <label class="label">Tính năng sản phẩm <span class="prd-tab-colon">:</span></label>
                                                        <div class="attribute-data"> <span class="data">Chất liệu vải dệt Ripstop Polyester có khả năng chống rách<br> Kết hợp nhiều phiên bản Camo trên phần Upper<br> Patch logo Chuck Taylor bằng da bên hông thân giày<br> Dây giày dạng tròn dễ tháo – thắt<br> Khoen xỏ dây giày bằng kim loại hạn chế rỉ sét<br> Đế giày cao, được phủ bóng đặc trưng của dòng Chuck 70s<br> Đệm lót Ortholite cho cảm giác êm ái, thông thoáng<br> Tem logo Vintage của Chuck 70s sau gót giày </span> </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>                                   
                                    <div class="tab-pane" id="tab-tags">
                                        <p> <a href="https://drake.vn/index.php?route=product/search&amp;tag=Chuck Taylor All Star 1970s Hoop Hunter">Chuck Taylor All Star 1970s Hoop Hunter</a>, <a href="https://drake.vn/index.php?route=product/search&amp;tag=Chuck Taylor All Star 1970s">Chuck Taylor All Star 1970s</a>, <a href="https://drake.vn/index.php?route=product/search&amp;tag=Chuck 70s">Chuck 70s</a>, <a href="https://drake.vn/index.php?route=product/search&amp;tag=Sneaker">Sneaker</a>, <a href="https://drake.vn/index.php?route=product/search&amp;tag=165912C">165912C</a>, <a href="https://drake.vn/index.php?route=product/search&amp;tag=Đen">Đen</a>, <a href="https://drake.vn/index.php?route=product/search&amp;tag=Black">Black</a> </p>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?> 
                            <div class="clearfix"></div>
                        </div>
                    </div>                
                    <script>
                        // <![CDATA[
                        jQuery(document).ready(function($) {
                            $('.rel-product').owlCarousel2({
                                pagination: false,
                                center: false,
                                nav: true,
                                dots: false,
                                loop: false,
                                margin: 30,
                                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                                slideBy: 1,
                                autoplay: false,
                                autoplayTimeout: 2500,
                                autoplayHoverPause: true,
                                autoplaySpeed: 800,
                                startPosition: 0,
                                responsive: {
                                    0: {
                                        items: 2,
                                        margin: 3
                                    },
                                    480: {
                                        items: 2,
                                        margin: 3
                                    },
                                    768: {
                                        items: 2
                                    },
                                    991: {
                                        items: 3
                                    },
                                    1200: {
                                        items: 4
                                    }
                                }
                            });
        
                        });
                        // ]]>
                    </script>
                </div>
            </div>
        </div>
        <?php
include_once "./layout/footer.php";
?>