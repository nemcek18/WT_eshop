$(document).on('click', '.plus-button', function() {
    pressed_id = $(this).data("product-id");
    quantity = document.getElementById('quantity'+pressed_id).value;

    if(quantity !=99){
        document.getElementById('quantity'+pressed_id).stepUp();
        quantity = document.getElementById('quantity'+pressed_id).value;
        window.location.href = "/update_cart/"+pressed_id+"/"+quantity;
    }

});

$(document).on('click', '.minus-button', function() {
    pressed_id = $(this).data("product-id");
    quantity = document.getElementById('quantity'+pressed_id).value;

    if(quantity !=1){
        document.getElementById('quantity'+pressed_id).stepDown();
        quantity = document.getElementById('quantity'+pressed_id).value;
        window.location.href = "/update_cart/"+pressed_id+"/"+quantity;
    }

});