$( document ).ready(function() {

 $("input[name=from]").change(function() {
        var $val = $(this).val();

        if($val === 'alaska'){
             $('.boston').css("display", "block");
        }else if($val === 'atlanta'){
             $('.atlanta').css("display", "block");
			  $('.boston').css("display", "none");
        }else if($val === 'boston'){
             $('.bost').css("display", "block");
			  $('.boston').css("display", "none");
			   $('.atlanta').css("display", "none");
        }
		else if($val === 'kansas'){
			$('.kansas').css("display", "block");
             $('.bost').css("display", "none");
			  $('.boston').css("display", "none");
			   $('.atlanta').css("display", "none");
        }
		else{
			$('.los').css("display", "block");
			$('.kansas').css("display", "none");
             $('.bost').css("display", "none");
			  $('.boston').css("display", "none");
			   $('.atlanta').css("display", "none");
        }
    });

});