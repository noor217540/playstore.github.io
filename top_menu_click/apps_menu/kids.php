<?php include '../../user_code_change/usr-custom-change1.php'; ?>
<hr>

<!-- apk card code start here -->
<div class="all-conntent-show" id="menu_1">
    <div class="kids_img">
        <img src="<?php echo $kids_img ; ?>" alt="" width="100%" height="150px">
    </div>
    <!-- kids hedding 1 -->
    <div class="kids_hedding ">
        <span class="kids_hedding_1 ">Offline games</span>
        <a href="hidehi "><i class="fas fa-arrow-right "></i></a>
    </div>

    <div class="kids_row_1">
        <!-- kids_card code start here -->
        <?php for($i=1 ; $i < 7 ; $i++){
            echo'
        <div class="kids_card">
            <div><img src="asset/games_img/kids/kids_row_1/apple.jpg" alt="" width="100px" height="100px" style="border-radius: 17px;"></div>
            <div class="apk_name">
                <h6>coloring</h6>
                <div class="apk_size">
                    <h6>45 MB</h6>
                </div>

            </div>
        </div>';
    } ?>
        <!-- kids_card code close here -->

    </div>

</div>
<!-- display one code close here  -->