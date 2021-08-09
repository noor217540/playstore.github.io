// Add active class to the current button (highlight it)
var header = document.getElementById("bottom_manu_1");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < 4; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}