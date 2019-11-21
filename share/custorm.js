$(document).ready(function () {

    // Tăng số lượng
$(".itemQty").on('change', function(){
    var $el = $(this).closest('tr');

    var pid = $el.find(".pid").val();
    var pprice = $el.find(".pprice").val();
    var qty = $el.find(".itemQty").val();

    $.ajax({
        url: 'action.php',
        method: 'POST',
        cache : false,
        data: {qty:qty,pid:pid,pprice:pprice},
        success: function (response) {
            console.log(response);
        }
    });
});


    // Thêm giỏ hàng ở product
$(".addItemBtn").click(function(e){
    e.preventDefault();
    var $form = $(this).closest(".form-submit");
    var pid = $form.find(".pid").val();
    var pname = $form.find(".pname").val();
    var pimage = $form.find(".pimage").val();
    var psale = $form.find(".psale").val();
    var pcode = $form.find(".pcode").val();
    $.ajax({
        url: "action.php",
        method : "POST",
        data: {pid:pid,pname:pname,pimage:pimage,psale:psale,pcode:pcode },
        success: function (response) {
            $("#message").html(response);
            load_cart_item();
        }
    });
});

    // Thêm giỏ hàng ở product-details
$(".addToCart").click(function(e){
    e.preventDefault();
    var $form = $(this).closest(".form-submit");
    var pid = $form.find(".pid").val();
    var pname = $form.find(".pname").val();
    var pimage = $form.find(".pimage").val();
    var psale = $form.find(".psale").val();
    var pcode = $form.find(".pcode").val();
    var qty = $(".form-submit").find(".soluongsp").val();
    $.ajax({
        url: "action.php",
        method : "POST",
        data: {pid:pid,pname:pname,pimage:pimage,psale:psale,pcode:pcode,qty:qty },
        success: function (response) {
            load_cart_item();
            window.location.href = "cart.php";
        }
    });
});


load_cart_item();

function load_cart_item() {
    $.ajax({
        method: "get",
        url: "action.php",
        data: {cartItem:"cart_item"},   
        success: function (response) {
            $("#cart-item").html(response);
        }
    });
}
});

