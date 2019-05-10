$(function() {
		   
// Profile Block SlideToggle
	$("#block-views-users-block_3 .view-header a").click(function() {
		$("#block-views-users-block_3 .view-content").slideToggle("fast");
		this.blur();
		return false;
    }
  	);
	
	//Pop-up Music Player
	$('<a href="#">Pop Out</a>').insertAfter('.front .view-mp3 .field-field-mp3').addClass('pop-out');
	$('.pop-out').click(function() {
    window.open('/mp3', 'jukebox','toolbar=0,menubar=0,location=0,scrollbars=0,titlebar=0,resizable=0,width=420,height=24');
    return false;
	});
	
	// Disappearing form labels
	$('#header label, #comment-form label').addClass('fancy-forms');
	if ($('#header .form-text, #comment-form .form-text').val() !== "") {
		$(this).prev().hide();
	}
	if ($('#comment-form .form-textarea').val() !== "") {
		$('#edit-comment-wrapper label').hide();
	}
	$('#header .form-text, #comment-form .form-text, #comment-form .form-textarea').val(""); // empties form fields on refresh
	$('#header .form-text, #comment-form .form-text')
		.focus(function() {
			$(this).prev().addClass('selected'); // adds class for opacity
		})
		.keydown(function() {
			$(this).prev().hide(); // hides label when cleared
		})
		.blur(function() {
			$(this).prev().removeClass('selected'); //removes opacity
			if ($(this).val() == "") { //if the field is empty when a tabs through
				$(this).prev().show();	//show the label again
			}
		})
		.keyup(function() {
			if ($(this).val() == "") {  //if the field is empty when a user doesnt type
				$(this).prev().show();  //show the label again
			}
	});
		$('#comment-form .form-textarea')
		.focus(function() {
			$('#edit-comment-wrapper label').addClass('selected'); // adds class for opacity
		})
		.keydown(function() {
			$('#edit-comment-wrapper label').hide(); // hides label when cleared
		})
		.blur(function() {
			$('#edit-comment-wrapper label').removeClass('selected'); //removes opacity
			if ($(this).val() == "") { //if the field is empty when a tabs through
				$('#edit-comment-wrapper label').show();	//show the label again
			}
		}) 
		.keyup(function() {
			if ($(this).val() == "") {  //if the field is empty when a user doesnt type
				$('#edit-comment-wrapper label').show();  //show the label again
			}
	});
	$('.logged-in #comment-form div div:first label').hide();

// Adds tabs to comment section
	$(".comment-tabs:not(:first)").hide();
	
	$("#comment-nav li").click(function(e) {
    $(".comment-tabs").hide();
    $("#comment-nav .current").removeClass("current");
    $(this).addClass("current");

    var clicked = $(this).find("a:first").attr("href");
    $(".comment-tabs" + clicked).fadeIn("fast");
    e.preventDefault();
}).eq(0).addClass("current");



});