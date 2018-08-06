$(".menu1").next('ul').toggle();

$(".menu1").click(function(event) {
	$(this).next("ul").toggle(500);
});

$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
});
