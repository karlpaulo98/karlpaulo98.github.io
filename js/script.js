$(document).ready(function(){
	$(window).scroll(function(event){

		var y = $(this).scrollTop();
		if(y >= 300){
			$('#logo-services').addClass('animate');
		}

	});
});

function myFunction() {
	window.open("https://www.behance.net/gallery/67425899/Logo-Practice");
}

function siteInvites() {
	window.open("https://karlpaulo98.github.io/invite.github.io/");
}

function siteQuotes() {
	window.open("https://karlpaulo98.github.io/quote.github.io/");
}

function siteTarp() {
	window.open("https://karlpaulo98.github.io/tarp.github.io/");
}

function siteVector() {
	window.open("https://karlpaulo98.github.io/vector.github.io/");
}