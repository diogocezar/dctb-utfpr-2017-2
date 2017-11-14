Menu = {
	init: function(){
		Menu.setScroll();
	},
		setScroll: function() {
			$(".go-menu").on("click", function(e) {
				e.preventDefault();
				var o = $(this);
				$("html, body").stop().animate(
					{
						scrollTop : 1000
					},
					1000,"easeOutQuart");
				});
			}
}
	$(document).ready(function(){
	Menu.init();
});

	