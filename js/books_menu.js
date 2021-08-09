function bottom_books_menu() {
    $.ajax({
        url: 'slider_menu/books_menu.php',
        type: 'GET',
        beforeSend: function() {
            // Show image container
            $("#preloader_ajax").show();
        },
        success: function(response) {
            $('#change_on_bottom_menu_click').empty();
            $('#change_on_bottom_menu_click').append(response);
        },
        complete: function(data) {
            // Hide image container
            $("#preloader_ajax").hide();
        }
    });
    books_for_you();
}


function books_for_you() {
    $.ajax({
        url: 'top_menu_click/books_menu/for_you.php',
        type: 'GET',
        beforeSend: function() {
            // Show image container
            $("#preloader_ajax").show();
        },
        success: function(response) {
            $('#on_click_data_show_using_ajax').empty();
            $('#on_click_data_show_using_ajax').append(response);
        },
        complete: function(data) {
            // Hide image container
            $("#preloader_ajax").hide();
        }
    });
}