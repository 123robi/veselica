$(document).ready(function(){
    //dodaj ponudbo
    $("#addPonudba").click(function() {
        $.ajax({
            type:'POST',
            url:'https://www.rkosir.eu/veselica/add',
            data: {
                'ime' : $('#ime').val(),
                'cena' : $('#cena').val(),
            },
            success: function (data) {
                $("#tbody").append(data);
                // debugger;
                $("#dodajPonudbo").modal('toggle');
            }
        });
    });

    //popravi ponudbo
    $(".edit").click(function () {
        var my_id_value = $(this).data('id');
        $('#editID').val(my_id_value);
        $.ajax({
            type: "GET",
            url: "https://www.rkosir.eu/veselica/get/" + my_id_value,
            success: function(data) {
                console.log(data);
                console.log(data.ime);
                $('#editIme').val(data.ime);
                $('#editCena').val(data.cena);
            },
        })
    });

    $("#editPonudba").click(function() {
        $.ajax({
            type:'POST',
            url:'https://www.rkosir.eu/veselica/edit/' + $('#editID').val(),
            data: {
                'ime' :  $('#editIme').val(),
                'cena' : $('#editCena').val(),
            }
        });

        $.ajax({
            type: "GET",
            url: "https://www.rkosir.eu/veselica/",
        }).done(function(response) {
            $('#punudbaTable').html(response);
        });

    });

    //izbrisi ponudbo
    $(".delete").click(function () {
        var my_id_value = $(this).data('id');
        console.log(my_id_value);
        $("#deletePonudba").click(function () {
            $.ajax({
                type: "POST",
                url: "https://www.rkosir.eu/veselica/delete/" + my_id_value,
            })

            $.ajax({
                type: "GET",
                url: "https://www.rkosir.eu/veselica/",
            }).done(function(response) {
                $('#punudbaTable').html(response);
            });
        });

    });
});