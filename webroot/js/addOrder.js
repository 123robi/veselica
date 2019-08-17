$(document).ready(function(){
    let order = {};
    let totalPrice = 0;

    function updateCount(item, count) {
        item.val(count);
    }

    $('.card').on('click', function () {
        let item = $(this);
        let itemId = parseInt(item.attr('id'));
        let price = parseFloat(item.find('.price').text());
        order[itemId] = order[itemId] || 0;
        order[itemId] += 1;
        totalPrice += price;
        item.find('.background-number').text(order[itemId]);
        $('.total').text(totalPrice);
    });

    $('.minus').on('click', function (event) {
        event.stopPropagation();
        let item = $(this).closest('.card');
        let itemId = parseInt(item.attr('id'));
        let price = parseFloat(item.find('.price').text());
        order[itemId] = order[itemId] || 0;
        if (order[itemId] > 0) {
            totalPrice -= price;
        }
        order[itemId] -= 1;
        if (order[itemId] < 0) {
            order[itemId] = 0;
        }
        item.find('.background-number').text(order[itemId]);
        $('.total').text(totalPrice);
    });

    $("#addOrder").click(function() {
        $.ajax({
            type:'POST',
            url:'https://www.rkosir.eu/veselica/orders/addOrder',
            dataType: 'json',
            data: {
                'order': order,
                'paid': 0
            },

            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            }
        });
    });

    $('#pay').on('click', function (event) {
        event.stopPropagation();
        let money = parseFloat($('#value').val()) || 0;
        let returnMoney  = money - totalPrice;
        $('.return').text(returnMoney);

        $.ajax({
            type:'POST',
            url:'https://www.rkosir.eu/veselica/orders/addOrder',
            dataType: 'json',
            data: {
                'order': order,
                'paid': 1,
            },

            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', $('[name="_csrfToken"]').val());
            }
        });
    });
});
