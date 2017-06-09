function menu() {
	var x = document.getElementById("menu");
	if (x.className === "menu nav navbar-nav navbar-right top-menu" ||x.className === "menu nav navbar-nav navbar-right top-menu shrink" ) {
		x.className += " visible";
	} else {
		x.className = "menu nav navbar-nav navbar-right top-menu";
	}
};

$("a").on("click", function(e) {
  e.preventDefault();
  $(this).next("ul").toggle();
});