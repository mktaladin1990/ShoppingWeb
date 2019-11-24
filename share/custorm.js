$(document).ready(function () {        // Thêm giỏ hàng ở phần product-details
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

});

