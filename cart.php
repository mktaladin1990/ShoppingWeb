<?php
session_start();
include_once "./layout/header.php";
include_once "./model/connection.php";
?>
<script>
    // Thêm giỏ hàng ở phần product-details
    function addCart(id) {
        num = $("#num").val();
        $.post('addCart.php', {'id':id,'num':num}, function(data) {  
             $("#numberCart").text(data);  
             window.location.href = "cart.php";  
        });
    }

        // Thêm giỏ hàng ở phần product
    function addToCart(id) {
        $.post('action.php', {'id': id}, function(data,status) {  
            item = data.split["-"];
             $("#numberCart").text(item[0]); 
            
        });
        setTimeout(function() {
            location.reload(true);
        },1000)
        
    }

        // Tăng số lượng + update thành tiền
    function updateCart(id) {
        num = $("#quantity_"+id).val();
        $.post('updateCart.php', {'id': id,'num':num}, function(data) {
             location.reload(true);
        });
        
    }

        // xóa giỏ hàng
    function deleteCart (id) {
          $.post('updateCart.php', {'id': id,'num':0}, function(data) {
            //$("#listCart").load("http://localhost:8081/Kangaroo/cart.php #Cart");
              window.location.href ="cart.php";
        });
    }

</script>
<div class="container">
    <div id="listCart">
        <table class="table table-hover table-bordered shadow mt-4" id="Cart">
            <thead style="background: #339933; color:#fff">
                <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Đơn giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total = 0;
                $subTotal = 0;
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $value) {
                        ?>
                <tr>
                    <td>
                        <img class="img-product" src="./share/<?php echo $value['image'] ?>" style="width:100px">
                    </td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo number_format($value['price']) ?> VNĐ</td>
                    <td>
                        <div class="quantity quantity-item">
                            <input type="number" class="itemQty" onchange="updateCart(<?php echo $key ?>)" id="quantity_<?php echo $key ?>" name="quantity_<?php echo $key ?>" min="1" max="1000" step="1" value="<?php echo $value['num'] ?>">
                        </div>
                    </td>
                    <td>
                        <?php echo number_format($total = ($value['price']*$value['num']));
                            $subTotal +=$total;
                        ?> VNĐ
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="delete-cart" onclick="deleteCart(<?php echo $key ?>);">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <?php } } else {
                        echo 'Bạn chưa mua hàng';
                    }  ?>
                <tr>
                    <td colspan="4" style="text-align:left !important">
                        <a href="product.php" class="btn btn-success ml-0">Tiếp tục mua hàng</a>
                        <a href="#" class="btn btn-success ml-3 pay-price">Thanh toán</a>
                    </td>
                    <td colspan="2" style="font-size : 20px">Tổng cộng : <span class="price-total"><?php echo number_format($subTotal); ?> VNĐ</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
// $(document).on('change', 'input', function() {
//     location.reload();
//     console.log("----------------------")
// });

</script>


<?php
include_once "./layout/footer.php";
?>