$(document).ready(function() {
    const myVar = setTimeout(function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("content_details").style.display = "block";
        document.getElementById("on_click_data_show_using_ajax").style.display = "block";
    }, 100);

});


$(document).ready(function() {
    $.ajax({
        url: 'top_menu_click/games_menu/for_you.php',
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
});


// --------------------------------------------------------------------bottom menu click 
function bottom_games_menu() {
    $.ajax({
        url: 'slider_menu/games_menu.php',
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

    for_you();
}


// --------------------------------------------------------------------top menu click 

function for_you() {
    $.ajax({
        url: 'top_menu_click/games_menu/for_you.php',
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

function top_chart() {
    $.ajax({
        url: 'top_menu_click/games_menu/top_chart.php',
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

function kids() {
    $.ajax({
        url: 'top_menu_click/games_menu/kids.php',
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

function categories() {
    $.ajax({
        url: 'top_menu_click/games_menu/categories.php',
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

function editors_choice() {
    $.ajax({
        url: 'top_menu_click/games_menu/editors_choice.php',
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