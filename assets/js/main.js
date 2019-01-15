$(document).ready(function(){


    $(document).on('click', '#products', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');

        $.ajax({
            type: 'GET',
            url: url,
            success: function (result) {
                    $('#table').html(result);
                    $('#products').addClass('active');
                    $('#orders').removeClass('active');
            }
        });
    });


    $(document).on('click', '#orders', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');

        $.ajax({
            type: 'GET',
            url: url,
            success: function (result) {
                $('#table').html(result);
                $('#orders').addClass('active');
                $('#products').removeClass('active');
            }
        });
    });
});