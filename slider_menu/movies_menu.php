<div class="navigation_bar" id="games_menu">
    <div id="top_nav_div" class="nav_btn">
        <button class="btn active1" onclick="movies_for_you()">For you</button>
        <button class="btn" onclick="movies_top_selling()">Top Selling</button>
        <button class="btn" onclick="movies_new_releases()">New releases</button>
        <button class="btn" onclick="movies_genres()">Genres</button>
        <button class="btn" onclick="movies_studios()">Studios</button>
    </div>
</div>



<script>// Add active class to the current button (highlight it)
  var header = document.getElementById("top_nav_div");
  var btns = header.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active1");
          current[0].className = current[0].className.replace(" active1", "");
          this.className += " active1";
      });
  }
</script>