$(document).ready(function(){
	$(window).scroll(function(event){

		var y = $(this).scrollTop();
		if(y >= 300){
			$('#logo-services').addClass('animate');
		}

	});
});

function myFunction(){
	window.open("https://www.dropbox.com/sh/3ui39xwf5z8bpdr/AACsRJPS3n0PbW132VOM1tzKa?dl=0");
}