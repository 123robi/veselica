$(document).ready(function(){
    let order = {};

    function updateCount(item, count) {
        item.val(count);
    }

    $('.card').on('click', function () {
        let item = $(this);
        let itemId = parseInt(item.attr('id'));
        order[itemId] = order[itemId] || 0;
        order[itemId] += 1;
        item.find('.background-number').text(order[itemId]);
    });

    $('.minus').on('click', function (event) {
        event.stopPropagation();
        let item = $(this).closest('.card');
        let itemId = parseInt(item.attr('id'));
        order[itemId] = order[itemId] || 0;
        order[itemId] -= 1;
        if (order[itemId] < 0) {
            order[itemId] = 0;
        }
        item.find('.background-number').text(order[itemId]);
    });

    $("#addOrder").click(function() {
        $.ajax({
            type:'POST',
            url:'https://www.rkosir.eu/veselica/orders/addOrder',
            dataType: 'json',
            data: order,
        });
    });
});
