<div class="navigation_bar" id="games_menu">
    <div id="top_nav_div" class="nav_btn">
        <button class="btn active1" onclick="for_you()">For you</button>
        <button class="btn" onclick="top_chart()">Top chart</button>
        <button class="btn" onclick="kids()">Kids</button>
        <button class="btn" onclick="categories()">Categories</button>
        <button class="btn" onclick="editors_choice()">Editors' Choice</button>
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