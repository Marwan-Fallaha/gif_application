$.ajaxSetup({
    headers:
    { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});
$(document).ready(function(){
	$('#goRight').on('click', function(){
        $('.invalid-feedback').remove();
		$('#slideBox').animate({
			'marginLeft' : '0'
		});
		$('.topLayer').animate({
			'marginLeft' : '100%'
		});
		$('body').removeClass('displayLeft displayRight');
		$.ajax({
			url:"setLoginType",
			data: {'pageType': 'login'},
			type:'post'
		});
	});
	$('#goLeft').on('click', function(){
        $('.invalid-feedback').remove();
		if (window.innerWidth > 769){
			$('#slideBox').animate({
			'marginLeft' : '50%'
			});
		}
		else {
			$('#slideBox').animate({
			'marginLeft' : '0%'
			});
		}
		$('.topLayer').animate({
			'marginLeft': '0'
		});
		$('body').removeClass('displayLeft displayRight');
		$.ajax({
			url:"setLoginType",
			data: {'pageType': 'signUp'},
			type:'post'
		});
	});
});