<?php include 'user_code_change/usr-custom-change1.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/index.css">
    <link rel="stylesheet" href="asset/css/top_nav_menu1.css">
    <link rel="stylesheet" href="asset/css/bottom-navigation.css">
    <link rel="stylesheet" href="asset/css/games_css/for_you.css">
    <link rel="stylesheet" href="asset/css/games_css/top_chart.css">
    <link rel="stylesheet" href="asset/css/games_css/kids.css">
    <link rel="stylesheet" href="asset/css/click_loder.css">
    <title>Home</title>
</head>

<body>
    <div class="preloader" style="display: none;" id="preloader_ajax">
        <div class="nb-spinner"></div>
    </div>
    

    <div id="loader" class="loader"></div>

    <div id="content_details" style="display:none;" class="animate-bottom">

        <!-- navbar code start -->
        <div class="navigation" id="myDiv">
            <div class="search_icon">
                <i class="fas fa-search"></i>

            </div>
            <div class="search_input">
                <input type="text" placeholder="Search for apps & g..">
            </div>
            <div class="profile_img">
                <img src="asset/play_mod_logo/logo.png" alt="" width="35px" height="35px">
            </div>

        </div>
        <!-- navbar code close -->

        <div class="all_slider_menu" id="change_on_bottom_menu_click">

            <?php include 'slider_menu/games_menu.php'; ?>
        </div>




        <!-- all top manu files code start here  -->
        <div class="games_menu">
            <!-- <hr style="border: 0.1px solid rgb(102, 151, 155) "> -->
            <hr style="border: 1px solid rgb(102, 151, 155)">


            <div class="click_data_show" id="on_click_data_show_using_ajax" style="display: none;">

            </div>



        </div>



        <!-- </div> -->



        <!-- all top manu files code close  here  -->








        <!-- bottom navigation bar code start here  -->

        <nav class="nav navigation_bottom" id="bottom_manu_1">
            <button style="border: none;" href="# " class="nav__link btn active" onclick="bottom_games_menu()">
            <i class="material-icons nav__icon ">sports_esports</i>
            <span class="nav__text ">Games</span>
        </button>
            <button style="border: none;" href="# " class="nav__link btn" onclick="bottom_apps_menu()">
            <i class="material-icons nav__icon  ">apps</i>

            <span class="nav__text ">Apps</span>
        </button>
            <button style="border: none;" href="# " class="nav__link btn" onclick="bottom_movies_menu()">
            <i class="material-icons nav__icon ">movie</i>
            <span class="nav__text ">Movies</span>
        </button>
            <button style="border: none;" href="# " class="nav__link btn" onclick="bottom_books_menu()">
            <i class="material-icons nav__icon ">book</i>
            <span class="nav__text ">Books</span>
        </button>
            <!-- <a href="# " class="nav__link ">
            <i class="material-icons nav__icon ">settings</i>
            <span class="nav__text ">Settings</span>
        </a> -->
        </nav>


    </div>



    <script src="js/bottom_nav.js"></script>
    <script src="js/games_menu.js"></script>
    <script src="js/apps_menu.js"></script>
    <script src="js/movies_menu.js"></script>
    <script src="js/books_menu.js"></script>
    <script src="js/jquery-3.6.0.js"></script>


</body>

</html>