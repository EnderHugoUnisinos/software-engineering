var acc = document.getElementsByClassName("accordion");
var down = document.getElementsByClassName("fa fa-chevron-down");
//var up = document.getElementsByClassName("fa fa-chevron-up");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    var icon = this.querySelector(".fa-chevron-down, .fa-chevron-up");  
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      icon.classList.remove("fa-chevron-up");
      icon.classList.add("fa-chevron-down");
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      icon.classList.remove("fa-chevron-down");
      icon.classList.add("fa-chevron-up");
    }
  });
}