$(document).ready(function(){
	$(window).scroll(function(event){

		var y = $(this).scrollTop();
		if(y >= 300){
			$('#logo-services').addClass('animate');
		}

	});
});

function myFunction(){
	window.open("https://www.behance.net/gallery/67425899/Logo-Practice");
}