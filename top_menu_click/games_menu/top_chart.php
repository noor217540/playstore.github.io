<?php include '../../user_code_change/usr-custom-change1.php'; ?>

<!-- apk card code start here -->
<div class="all-conntent-show" id="menu_1">
    <div class="apk_top_chart">

        <?php
    for($i=1 ; $i< 10 ; $i++)
    {
        echo'
            <div class="top_chart">
            <h5 class="number-down" style="color: rgba(90, 81, 81, 0.788);">'.$i.'</h5>
              <img src="'.$games_img.'dp.PNG" alt="" width="60px" height="60px" style="border-radius: 12px;">
              <div class="apk_name">
                    <!-- apk-details code start here -->
                    <div class="apk-details">
                        <h6 class="apk-name" style="color: black;"> Hill Climb Racing game</h6>
                        <h6 class="apk-categories" style="color: rgb(131, 118, 118); ">Action</h6>
                        <div class="my-span">
                        <span class="apk-download " style="color: rgb(131, 118, 118); "><i class="fas fa-download"></i> 50 &centerdot;</span>
                            <span class="apk-size" style="color:rgb(131, 118, 118); ">716 MB</span>
                            </div>
                            </div>
                            <!-- apk-details code close here -->
                            </div>
                            
                            </div>
                            ';
                            }               
                        ?>
            <!-- apk card code close here -->
    </div>

    <!-- top_chart div close here  -->

</div>
<!-- display one code close here  -->