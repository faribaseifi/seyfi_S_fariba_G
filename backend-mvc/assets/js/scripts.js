function addToCart(product_id,url) {
    var all_quantity = $('#all_quantity').text();
    $.ajax({
        url: url,
        type: "POST",
        data: {
            product_id: product_id
        },
        dataType: 'json',
        success: function (result) {
            $('#all_quantity').text(parseInt(all_quantity) +1);

            $('#quantity_' + product_id).text(1);

            $('#addToCart_' + product_id).css("display", "none");
            $('#quantity_' + product_id).css("display", "block");
            $('#deleteItem_' + product_id).css("display", "block");
            $('#decreaseItem_' + product_id).css("display", "none");
            $('#increaseItem_' + product_id).css("display", "block");

        }
    });
}

function increaseItem(product_id,url) {
    var all_quantity = $('#all_quantity').text();

    $.ajax({
        url: url,
        type: "POST",
        data: {
            product_id: product_id,
            type: 'increase'
        },
        dataType: 'json',
        success: function (result) {
            $('#quantity_' + product_id).text(result);
            if (result > 1) {
                $('#all_quantity').text(parseInt(all_quantity) +1);
                $('#decreaseItem_' + product_id).css("display", "block");
                $('#deleteItem_' + product_id).css("display", "none");

            }
        }
    });
}

function decreaseItem(product_id,url) {
   var all_quantity = $('#all_quantity').text();
    $.ajax({
        url: url,
        type: "POST",
        data: {
            product_id: product_id,
            type: 'decrease'
        },
        dataType: 'json',
        success: function (result) {
            $('#quantity_' + product_id).text(result)
            if (result == 1) {
                $('#all_quantity').text(parseInt(all_quantity) - 1);
                $('#deleteItem_' + product_id).css("display", "block");
                $('#decreaseItem_' + product_id).css("display", "none");
            }
        }
    });
}

function deleteItem(product_id,url) {
    var all_quantity = $('#all_quantity').text();

    $.ajax({
        url: url,
        type: "POST",
        data: {
            product_id: product_id,
            type: 'delete'
        },
        dataType: 'json',
        success: function (result) {
            $('#all_quantity').text(parseInt(all_quantity) - 1);
            $('#addToCart_' + product_id).css("display", "block");
            $('#quantity_' + product_id).css("display", "none");
            $('#deleteItem_' + product_id).css("display", "none");
            $('#decreaseItem_' + product_id).css("display", "none");
            $('#increaseItem_' + product_id).css("display", "none");


        }
    });
}

function removeItemFromBasket(product_id,url,quantity) {
    var all_quantity = $('#all_quantity').text();

    $.ajax({
        url: url,
        type: "POST",
        data: {
            product_id: product_id,
            type: 'delete'
        },
        dataType: 'json',
        success: function (result) {
            $('#all_quantity').text(parseInt(all_quantity) - parseInt(quantity));

            $('#item_'+product_id).remove();

        }
    });
}

function deleteBasket(url) {

    $.ajax({
        url: url,
        type: "POST",
        dataType: 'json',
        success: function (result) {
            $('#all_quantity').text(0);
            location.reload();
        }
    });
}
