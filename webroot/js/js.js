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
                $("#dodajPonudbo").modal('toggle');
            }
        });
    });

    //popravi ponudbo
    $("#tbody").on('click', '.edit', (function () {
        var my_id_value = $(this).data('id');
        $('#editID').val(my_id_value);
        $.ajax({
            type: "GET",
            url: "https://www.rkosir.eu/veselica/get/" + my_id_value,
            success: function(data) {
                $('#editIme').val(data.ime);
                $('#editCena').val(data.cena);
            },
        })
    }));

    $("#editPonudba").click(function() {
        $.ajax({
            type:'POST',
            url:'https://www.rkosir.eu/veselica/edit/' + $('#editID').val(),
            data: {
                'ime' :  $('#editIme').val(),
                'cena' : $('#editCena').val(),
            }
        });
        console.log($('#editID').val());
        $("#" + $('#editID').val() + " .ime").html($('#editIme').val());
        $("#" + $('#editID').val() + " .cena").html($('#editCena').val() + "€");
        $("#popraviPonudbo").modal('toggle');


    });

    //izbrisi ponudbo
    $(".delete").click(function () {
        var my_id_value = $(this).data('id');
        $("#deletePonudba").click(function () {
            $.ajax({
                type: "POST",
                url: "https://www.rkosir.eu/veselica/delete/" + my_id_value,
            })
            $("#" + my_id_value).remove();
            $("#izbrisiPonudbo").modal('toggle');
        });

    });
});
