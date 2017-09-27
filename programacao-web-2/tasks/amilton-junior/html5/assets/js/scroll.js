$(document).ready(function(e) {
	$('.scrollS').scrollSpy()
	$('.scrollS ul li a').bind('click', function(e) {
		e.preventDefault();
		target = this.hash;
		$.scrollTo(target, 1000);
	});
});