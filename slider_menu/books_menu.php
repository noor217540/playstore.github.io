<div class="navigation_bar" id="games_menu">
    <div id="top_nav_div" class="nav_btn">
        <button class="btn active1" onclick="books_for_you()">Ebooks</button>
        <button class="btn" onclick="books_top_chart()">Audiobooks</button>
        <button class="btn" onclick="books_kids()">Comic</button>
        <button class="btn" onclick="books_mode_apk()">Genres</button>
        <button class="btn" onclick="books_categories()">Top Selling</button>
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