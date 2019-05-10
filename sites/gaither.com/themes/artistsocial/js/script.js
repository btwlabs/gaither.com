$(function () {

/* ---- General Social ---- */
	
	// Twitter-like Character Counter
    $('#block-formblock-status textarea').charCount({
        allowed: 140,		
        warning: 20
    });
    
    // Search Apply across all fields
    $('#edit-submit-users').click(function() {
        var searchVal = $('#views-exposed-form-users-page-1 .views-exposed-widget:first-child .form-text').val();
        $('#views-exposed-form-users-page-1 .form-text').not('#views-exposed-form-users-page-1 .views-exposed-widget:first-child .form-text').val(searchVal);
    });
    
    $('.view-social-feed .views-field-phpcode, .view-og-ghp-social-feed .views-field-phpcode').addClass('hidden');

/* ---- Admin Bar ---- */		   
    
    // Profile Menu Toggle
    $('#block-views-users-block_4').hoverIntent(function () {
            $(this).find('.views-field-nothing-5').show();
        },
        function () {
            $(this).find('.views-field-nothing-5').hide();
    });
    
    // Share Link in Admin Bar (insert & toggle)
    $('<a href="#" class="share-link">+Share</a>').insertBefore('#block-views-users-block_9');
    $('#admin-bar .share-link').click(function () {
        $('#admin-bar #block-formblock-status').toggle();
        return false;
    });
	
    // Node Add Links in Admin Bar Share drop-down
    $('<ul class="node-add"><li><a class="photo" href="/node/add/photo">+Add Photo</a></li><li><a class="video" href="/node/add/video">+Add Video</a></li><li class="third"><a class="blog" href="/node/add/blog">+Add Blog</a></li><li class="last"><a class="group" href="/node/add/group">+Add Group</a></li></ul>').appendTo('#admin-bar #block-formblock-status');
    $('.node-add li').hoverIntent(function () {
            var li, text;
            li = $(this);
            text = $(this).children('a').text();
            $('<div></div>').appendTo(li);
            $(li).children('div').text(text);
        }, function () {
            $(this).children('div').remove();
    });
    
    // Node Add Pop-ups
    $('.node-add a').click(function () {
        $('#close-popup').remove();
        $('.popup-block').hide();
        if ( $(this).hasClass('photo') ) {
            var target = $('#block-formblock-photo');
        }
        if ( $(this).hasClass('video') ) {
            var target = $('#block-formblock-video');
        }
        if ( $(this).hasClass('blog') ) {
            var target = $('#block-formblock-blog');
        }
        if ( $(this).hasClass('group') ) {
            var target = $('#block-formblock-group');
        }
        var topCenter = ($(window).height() - $(target).outerHeight()) / 2;
        var leftCenter = ($(window).width() - $(target).outerWidth()) / 2;
        $(target).css({
          'top': topCenter + 'px',
          'left': leftCenter + 'px'
        }).fadeIn(function () {
          $('<a id="close-popup">Close X</a>').prependTo(target).fadeIn();
        });
        return false;
    });
    
    // Homepage Feature Video
    if ($('#block-views-videos-block_6').length) {
        $(window).load(function() {
        $('<div id="overlay"></div>').appendTo('body').css('opacity','0').show().animate({opacity:.5});
        $('body').css('overflow-y','hidden');
        
        var topCenter = ($(window).height() - $('#block-views-videos-block_6').outerHeight()) / 2;
        var leftCenter = ($(window).width() - $('#block-views-videos-block_6').outerWidth()) / 2;
        $('#block-views-videos-block_6').css({
          'top': topCenter + 'px',
          'left': leftCenter + 'px'
        }).fadeIn(function() {
          $('<a id="close-popup">Close X</a>').prependTo('#block-views-videos-block_6').fadeIn();
          Drupal.attachBehaviors('#block-views-videos-block_6');
        });
        });
    }
    
    // Set active-trail visible on page load
    $('ul.nice-menu li.active-trail ul').show();
    $('ul.nice-menu li.active-trail ul').css('visibility', 'visible');
    
    // Bind the menu to mouseleave to set active-trail visible when done navigating
    $('ul.nice-menu').bind("mouseleave", function () {
    var $active = $('ul.nice-menu li.active-trail ul');
    
    // Set the timer to the value specified in the admin settings
    $active.animate({ opacity: 0 }, 800, function () {
    $('ul.nice-menu li.active-trail ul').animate({ opacity: 1.0 }, 0);
    $('ul.nice-menu li.active-trail ul').css('visibility', 'visible');
    $('ul.nice-menu li.active-trail ul').show();
    });
    
    });
    
    // Artists Drop-down functionality
    $('#block-views-artists-block_1 .view-content a').not('.click').live('click', function() {
        return false;
    });
    $('#block-views-artists-block_1 .view-content ul').addClass('js')
    $('<a href="#" class="down-arrow"></a>').prependTo('#block-views-artists-block_1 .view-content ul').click(function() {
        return false;
    });
    $('#block-views-artists-block_1 .view-content ul').hoverIntent(function() {
        $(this).addClass('open');
        $('#block-views-artists-block_1 .view-content a').addClass('click');
    }, function() {
        $(this).removeClass('open');
        $('#block-views-artists-block_1 .view-content a').removeClass('click');
    });
    
    // Hide Meet & Greet Tab
    $("a:contains('Your Meet and Greet requests')").hide();
    
    
/* ---- Main Feed --- */
	
	//Pop-up Music Player
	$('#mp3').click(function () {
    window.open('/mp3', 'jukebox','toolbar=0,menubar=0,location=0,scrollbars=0,titlebar=0,resizable=0,width=650,height=100');
    return false;
	});

/* ---- Photo Gallery ---- */

    $('.node-type-performance-event .view-performance-events').not(':has(img)').hide();
    // Photo Gallery - Show Loading Until Images Load
    $('.node-type-official-photos .view-photo-galleries:has(img)').addClass('image-load');
    $('.node-type-official-photos .view-photo-galleries img').load(function () {
        $('.image-load').css('background','none');
        $('.node-type-official-photos .view-photo-galleries img, .views_slideshow_thumbnailhover_slide .views-field-view-node').fadeIn();
        $('.views_slideshow_thumbnailhover_breakout_teasers').width( $('.views_slideshow_thumbnailhover_div_breakout_teaser').outerWidth(true) * $('.views_slideshow_thumbnailhover_div_breakout_teaser').length + 100 );
    });
    $('.node-type-performance-event .view-performance-events .view-content ul').width( $('.node-type-performance-event .view-performance-events .views-row').outerWidth(true) * $('.node-type-performance-event .view-performance-events .views-row').length + 100 );

    // Photo Gallery Thumbnails    
    $('<a href="#">previous</a>').addClass('thumb-prev').insertBefore('.views-slideshow-controls-bottom, .node-type-performance-event .view-performance-events .view-content');
    $('<a href="#">next</a>').addClass('thumb-next').insertAfter('.views-slideshow-controls-bottom, .node-type-performance-event .view-performance-events .view-content');
    $('.thumb-next').click(function () {
        var scrollAmount, currentPos, remainingScroll, nextScroll;
    	scrollAmount = $('.views_slideshow_thumbnailhover_breakout_teasers, .node-type-performance-event .view-performance-events .view-content ul').width() - $('.views-slideshow-controls-bottom, .node-type-performance-event .view-performance-events .view-content').width();
    	currentPos = Math.abs(parseInt($('.views_slideshow_thumbnailhover_breakout_teasers, .node-type-performance-event .view-performance-events .view-content ul').css('left')));
    	remainingScroll = scrollAmount - currentPos;
    	
    	//Scroll half a screen by default
    	nextScroll = Math.floor($('.views-slideshow-controls-bottom, .node-type-performance-event .view-performance-events .view-content').width() / 2);
    	
    	//If there isn't a full scroll left, only scroll remaining amt
    	if (remainingScroll < nextScroll) {
    		nextScroll = remainingScroll
    	}
    	
    	if (currentPos < scrollAmount) {
    		$('.views_slideshow_thumbnailhover_breakout_teasers, .node-type-performance-event .view-performance-events .view-content ul').animate({'left':'-=' + nextScroll}, 'slow');
    	}
    	else{
    		$('.views_slideshow_thumbnailhover_breakout_teasers, .node-type-performance-event .view-performance-events .view-content ul').animate({'left':'0'}, 'slow');
    	}
    	return false;
    	});
    $('.thumb-prev').click(function () {
    	var scrollAmount, currentPos, remainingScroll, nextScroll;
    	scrollAmount = $('.views_slideshow_thumbnailhover_breakout_teasers, .node-type-performance-event .view-performance-events .view-content ul').width() - $('.views-slideshow-controls-bottom, .node-type-performance-event .view-performance-events .view-content').width();
    	currentPos = Math.abs(parseInt($('.views_slideshow_thumbnailhover_breakout_teasers, .node-type-performance-event .view-performance-events .view-content ul').css('left')));
    	remainingScroll = scrollAmount - currentPos;
    	
    	//Scroll half a screen by default
    	nextScroll = Math.floor($('.views-slideshow-controls-bottom, .node-type-performance-event .view-performance-events .view-content').width() / 2);
    	
    	//If there isn't a full scroll left, only scroll remaining amt
    	if (remainingScroll > nextScroll) {
    		nextScroll = remainingScroll
    	}
    	
    	if (currentPos > scrollAmount) {
    		$('.views_slideshow_thumbnailhover_breakout_teasers, .node-type-performance-event .view-performance-events .view-content ul').animate({'left':'+=' + nextScroll}, 'slow');
    	}
    	else{
    		$('.views_slideshow_thumbnailhover_breakout_teasers, .node-type-performance-event .view-performance-events .view-content ul').animate({'left':'0'}, 'slow');
    	}
    	return false;
    	});
    
    var completeness = $('.views-field-completeness span span').attr('class');
    $('#content-complete-percent-bar').css('width', completeness + '%');
    
    // Change Group Join Link Text
    $('#block-views-og_ghp_social_feed-block_3 .views-field-subscribe a').text('Join the Group');

    $(document).bind('cbox_complete', function(){
        $('#colorbox .views-field-view-node').remove();
        var link = $.colorbox.element().parents('li').find('.views-field-view-node');
        $(link).insertAfter('#cboxWrapper');
    });

  // Powered by MCN Interactive (Company images from mcninteractive.com/sites/mcninteractive.com/files/branding)
  $('#mcn').hover(function() {
    var href = 'http://' + $(this).attr('class') + '.com';
    var company = $(this).attr('class');
    
    $('<div class="'+ company + '"><a href="'+ href + '" target="_blank"><img src="http://mcninteractive.com/sites/mcninteractive.com/files/branding/'+ company +'.jpg" /></a><a href="http://mcninteractive.com" target="_blank">an MCN Interactive company</a></div>').appendTo($(this));
  }, function() {
    $('div.musiccitynetworks, div.mcnbiz, div.merchmo').remove();
  });
    
});


// General Ajax Behavior Responses
Drupal.behaviors.generalReload = function(context) {

    // Reload Social Icons after Post
    $('.view-social-feed, .view-og-ghp-social-feed, .view-News, .view-performance-events').ajaxStop(function () {
        if ($('#fb-root').length) {
            $('.views-field-fb-social-like').each(function () {
                FB.XFBML.parse($(this).get(0)); 
            }); 
        }
        if ($('a.twitter-share-button').length) {
            $.ajax({url: 'http://platform.twitter.com/widgets.js', dataType: 'script', cache:true});                           
        }
    });
    
    // Slideshow Previous button text change
    $('#views_slideshow_singleframe_prev_slideshow-block_1, #views_slideshow_singleframe_prev_slideshow-block_2, .pager-previous a').text('prev');
    
    // Artists Page Page Clone
    $('#block-views-artists-block_2 .pager').parent().clone( true ).prependTo('#block-views-artists-block_2 .view-artists');
    
    // Delete Links
    $('.views-field-delete-node, .views-field-delete-comment').hide();
    $('.view-social-feed .view-content li, .view-og-ghp-social-feed .view-content li').hover(function () {
            $(this).find('.views-field-delete-node').show();
    	}, function () {
    	   $(this).find('.views-field-delete-node').hide();
    });
    $('.view-latest-comments .views-row').hover(function () {
            $(this).find('.views-field-delete-comment').show();
    	}, function () {
    	   $(this).find('.views-field-delete-comment').hide();
    });
    $('.views-field-delete-node a, .comment_reply a, .views-field-delete-comment a').click(function () {
        var url, topCenter, leftCenter;
        url = $(this).attr('href') + ' #content-inner';
        topCenter = ($(window).height() - $('.delete-block').outerHeight()) / 2;
        leftCenter = ($(window).width() - $('.delete-block').outerWidth()) / 2;
        $('<div class="delete-block"></div>').appendTo('body').hide().addClass('ajax-loading').load(url, function () {
            $(this).removeClass('ajax-loading');
            Drupal.attachBehaviors('.delete-block');
        });
        $('.delete-block').css({
            'top': topCenter + 'px',
            'left': leftCenter + 'px'
        }).fadeIn();
        return false;
    });
    $('.delete-block a').click(function () {
        $(this).parents('.delete-block').remove();
        return false;
    });
    
    $('.delete-block .comment').parents('.delete-block').addClass('forced');
    
    // Add Read More to Blog entries longer than 127 characters
    $('.views-field-comment-count .text.Blog').filter(function (){
        return $(this).text().length > 127;
    }).addClass('long');
    
    $('.long .read-more').show();
    $('.read-more').click(function () {
        var url = $(this).attr('href') + ' #content-inner .node .content p';
        $(this).parent().load(url, function () {
            $(this).find('p').css('display', 'block');
            $(this).find('.read-more').hide();
        });
        return false;
    });
    
    // Reverse Comment List Order
    $('.view-latest-comments .views-row').each(function () {
        $(this).prependTo($(this).parent());
    });
    
    // Close pop-ups
    $('#block-formblock-photo, #block-formblock-video, #block-formblock-blog, #block-views-videos-block_6, #block-formblock-group').addClass('popup-block');
    $('#close-popup').live('click', function () {
        $('.popup-block, #overlay').fadeOut('fast');
        $('#block-views-videos-block_6').remove();
        $('body').css('overflow-y', 'visible');
    });
    
    $(document).keyup(function(e) {
        if (e.keyCode === 27) { 
            $('.popup-block, #overlay').fadeOut('fast');
            $('#block-views-videos-block_6').remove();
            $('body').css('overflow-y', 'visible');
        }
    });
    
    // Make status bar blank after submission
    $('#emma-block-subscribe-form .form-text, .views-field-phpcode .form-textarea, #node-form textarea').blur();
    
    
    // Add promo offer to Emma block after h2
    $('#block-emma_block-1 h2').after('<p class="offer">and get $5 off your next online purchase</p>');

    // Add checked class to checked input label in views filter
    $('.view-social-feed input:checked, .view-og-ghp-social-feed input:checked').parent().addClass('checked');
    
    // Member Hover
    $('#content .views-field-picture').not('#content .view-latest-comments .views-field-picture, #block-views-users-block_3 .views-field-picture, .view-nodes-users .views-field-picture, .view-performance-events .views-field-picture').hoverIntent(function () {
        var url = $(this).find('a').attr('href') + ' #block-author_pane-0';
        $(this).css({'position' : 'relative', 'z-index' : '9999'});
        $('<div id="member-info"></div>').insertAfter($(this).find('a'));
        $('<span class="arrow"></span>').prependTo('#member-info');
        $('#member-info').addClass('ajax-loading').load(url, function () {
            $('#member-info').removeClass('ajax-loading');
        });
    }, function () {
        $('#member-info').remove(); 
        $(this).css({'position' : 'relative', 'z-index' : '0'});  
    });
    
    // Anonymous Member Click
    $('.not-logged-in #content .views-field-picture img').css('cursor', 'pointer').click(function () {
        window.location.pathname = '/join';
    });
    
    // Notifications - for Status only
    if ($('#messages .status').length) {
        if ($('#messages li').length === 0) {
            var messagesNum = 1;
        }
        else {
            var messagesNum = $('#messages li').length;
        } 
        $('<a class="notifications" href="#"></a>').insertAfter('#block-views-users-block_9').text(messagesNum).effect('highlight', {backgroundColor: '#F9EF9D'}, 2000);
        
        $('.notifications').click(function () {
            var msg = $('.status');
            $(msg).toggle();
        });
    }
    
    // Video Page Ajax
	$('#page-media-videos .view-display-id-page_1 .view-content a').click(function () {
	    var nid, url;
	    nid = $(this).parent().attr('class');
	    url = $(this).attr('href');
	    $('.view-videos').addClass('ajax-loading');
	    $('#block-views-videos-block_3 .view-content').load(url + ' #video-content', function () {
	       $('.view-videos').removeClass('ajax-loading');
	       $('<a class="add-comment">Add Comment &raquo;</a>').appendTo('#video-content .meta').attr('href', url);
	       $('html, body').stop().animate({
			scrollTop: ($('#block-views-videos-block_3').offset().top - 300)
		}, 500);
	    });
	    return false;
	});
    
    // Remove Comments on Node from within Comments div
    $('.page-node .box').not('.delete-block .box').insertAfter('#comments').addClass('original');
    
   	// Adds tabs to comment section
   	$('#comments').next('.box').attr('id', 'add-comment');
	$('#add-comment, #comments').addClass('comment-tabs');
	$(".comment-tabs:not(:first)").hide();
	
	$("#comment-nav li").click(function (e) {
    $(".comment-tabs").hide();
    $("#comment-nav .current").removeClass("current");
    $(this).addClass("current");

    var clicked = $(this).find("a:first").attr("href");
    $(".comment-tabs" + clicked).fadeIn("fast");
    e.preventDefault();
	}).eq(0).addClass("current");
	
	
	// Show Add Comments if Comments is empty
	if ($('#comments div').length === 0) {
        $('#comment-nav li').removeClass('current');
        $('#comments').hide();
        $('#comment-nav li + li').addClass('current');
        $('#add-comment').show();
    }
    
    // Animate messages, status, error
    var msgHeight, msg;
    msgHeight = 0 - $('div.error, .not-logged-in .status').outerHeight() + 'px';
    msg = $('div.error, .not-logged-in .status');
    $(msg).css('top', msgHeight).show();
    $(msg).animate({top:0}, 1000).animate({opacity: 1}, 1000, 
    function () {
        $('<a id="msg-close-popup">Close X</a>').prependTo(msg).fadeIn().click(function () {
            $(msg).animate({top: msgHeight}, 400, function () {
                $(this, msg).hide();
            });
        });
    });
    
    // Remove Comments on Node from within Comments div
    $('<div class="box"></div>').insertAfter('.not-logged-in.page-node #comments');
    $('.page-node ul.links .comment_forbidden, .page-media ul.links .comment_forbidden').not('#comments .comment_forbidden').appendTo('.page-node #content-inner .box').css({'list-style' : 'none', 'margin' : '10px'});
    
    // Hide no-name form field for Group Popup
    $('#edit-og-register-wrapper, #edit-og-directory-wrapper, #edit-og-description-wrapper').next().hide();
    
    // Attach Group Info to name field
    $('.views-field-group-nid').each(function() {
        $(this).appendTo($(this).prev());
    });
    
    // Hide Comment-ability in Main Feed for Groups
    $('.Group').parents('.views-field-comment-count').siblings('.views-field-phpcode').hide();
    
    // Hide Audience from showing initially
    $('.og-audience').parents('.form-item').hide();
    
    // Check OG audience on all forms on OG nodes for feed
    if ($('body').hasClass('node-type-group')) {
        var nodeId = $('#content-inner .node').attr('id').replace('node-','');
        if ($('.node-form .og-audience input[value=' + nodeId + ']').length || $('.node-form .og-audience optgroup:first-child option[value=' + nodeId + ']').length) {
            $('#content-inner #block-block-2, #content-inner #block-formblock-status').show();
            $('.node-form .og-audience input[value=' + nodeId + ']').attr('checked',true);
            $('.node-form .og-audience option[value=' + nodeId + ']').attr('selected','selected');
        }
        // The renekreps fix.  You rock Rene.
        if ($(".node-form .og-audience:not(:has('optgroup'))").length) {
            if ($('.node-form .og-audience option[value=' + nodeId + ']').length) {
                $('#content-inner #block-block-2, #content-inner #block-formblock-status').show();
                $('.node-form .og-audience option[value=' + nodeId + ']').attr('selected','selected');
            }
        }
    }
     
}

// Main Feed - Show All Comments AJAX
Drupal.behaviors.viewComments = function(context) {

	$('.view-latest-comments .views-row-last .views-field-nothing a').filter(function () {
		return $(this).attr('id') > 4;
	}).addClass('a-block').show();

    $('.view-all').click(function () {
        var comments, fullComments, url2;
        comments = $(this).parents('.views-field-view');
        fullComments = $(this).parents('.views-field-view').next().attr('id');
        url2 = '/node/' + fullComments;
        console.log(url2);
        $.ajax({
        url: url2,
        beforeSend: function () {
            $(comments).parents('.views-field-phpcode').addClass('ajax-loading');
        },
        success: function(response) {
            var newComments, commentNum;
            newComments = $(response).find('#block-views-latest_comments-block_2 .view');
            commentNum = $(newComments).find('.views-row-last .views-field-nothing a').text();
            $(comments).parents('.views-field-phpcode').removeClass('ajax-loading');
            $(comments).replaceWith(newComments);
            $(newComments).attr('id','comment-list-' + fullComments).addClass('views-field-view').find('.views-row-last .views-field-nothing a').removeClass('view-all').addClass('hide-all').attr('value', commentNum).text('Collapse');
            $(newComments).parents('.hidden').removeClass('hidden');
            $(newComments).find('li').not('.views-row-1, .views-row-2, .views-row-3, .views-row-4').addClass('hide');
            Drupal.attachBehaviors('.view-latest-comments .views-row');
        },
        error: function () { alert(Drupal.t("Oops, something went wrong. If the problem continues, let us know so we can help or buy you a pony or something.")); }
        });
        return false;
    });
    
}

Drupal.behaviors.hideComments = function(context) {
    
    $('.hide-all').click(function () {
        var comments, commentNum;
    	comments = $(this).parents('.views-field-view');
    	commentNum = $(this).attr('value');
        $(this).parents('ol').children('.views-row-4').addClass('views-row-last');
        $('.hide').remove();
        $(this).text(commentNum).removeClass('hide-all').addClass('view-all');
        Drupal.attachBehaviors('.view-all');
        $(comments).parents('.views-field-phpcode').addClass('hidden');
        $(comments).find('.views-row').each(function () {
        	$(this).prependTo( $(this).parent() );
    	});
        return false;
    });
    
}

// Disappearing Form Label Magic
Drupal.behaviors.labelstuff = function(context) {
	$('.views-field-phpcode label').text('Share your thoughts...');
	$('#emma-block-subscribe-form label, #block-formblock-status label, .views-field-phpcode form label, #block-webform-client-block-238 label').not('.option').addClass('fancy-forms');
	if ($('#emma-block-subscribe-form .form-text, #comment-form .form-text').val() !== "") {
		$(this).prev().hide();
	}
	if ($('.views-field-phpcode form textarea').val() !== "") {
		$(this).parents('.resizable-textarea').prev().hide();
	}
	$('#emma-block-subscribe-form .form-text, .views-field-phpcode .form-textarea, #node-form textarea, #block-webform-client-block-238 .form-text, #block-webform-client-block-238 .form-textarea').not('#edit-mollom-captcha, #edit-field-about-me-0-value, #edit-field-interests-0-value').val(""); // empties form fields on refresh
	$('#emma-block-subscribe-form .form-text, #comment-form .form-text, #block-webform-client-block-238 .form-text').not('#edit-mollom-captcha')
		.focus(function () {
			$(this).prev().addClass('selected'); // adds class for opacity
		})
		.keydown(function () {
			$(this).prev().hide(); // hides label when cleared
		})
		.blur(function () {
			$(this).prev().removeClass('selected'); //removes opacity
			if ($(this).val() == "") { //if the field is empty when a tabs through
				$(this).prev().show();	//show the label again
			}
		})
		.keyup(function () {
			if ($(this).val() == "") {  //if the field is empty when a user doesnt type
				$(this).prev().show();  //show the label again
			}
	});
		$('#block-formblock-status textarea, .views-field-phpcode form textarea, #block-webform-client-block-238 .form-textarea')
		.focus(function () {
			$(this).elastic();
			$(this).prev('label').addClass('selected');
			$(this).parents('.resizable-textarea').prev().addClass('selected'); // adds class for opacity
			$(this).next('.counter').show();
		})
		.keydown(function () {
		    $(this).prev('label').hide();
			$(this).parents('.resizable-textarea').prev().hide(); // hides label when cleared
		})
		.blur(function () {
            $(this).unbind('elastic');
            $(this).prev('label').removeClass('selected');
			$(this).parents('.resizable-textarea').prev().removeClass('selected'); //removes opacity
			if ($(this).val() == "") { //if the field is empty when a tabs through
				$(this).parents('.resizable-textarea').prev().show();	//show the label again
				$(this).next('.counter').hide();
			}
		}) 
		.keyup(function () {
			if ($(this).val() == "") {  //if the field is empty when a user doesnt TypeError
                $(this).prev('label').show();
				$(this).parents('.resizable-textarea').prev().show();  //show the label again
			}
	});
	$('.page-node.logged-in #comment-form div div:first label').hide();
}

Drupal.Ajax.plugins.ajax_views_refresh = function(hook, args) {
    // Ajax module scrolls by default - this disables that (can re-enable per submitter)
    if (hook === 'scrollFind') {
        return false;
    }
    if (hook === 'submit') {
        if (args.submitter.closest('form').parent().attr('id')) {
            args.submitter.parents('.views-field-phpcode').addClass('ajax-loading');
        }
    }
    if (hook === 'complete') {
        $('.popup-block').fadeOut('fast');
        //  Comments on Node Page - determined by presence of #comments
        if ($('#comments').length) {
            if ( args.local.form.parents('.delete-block').hasClass('forced') ) {
                var comments, commentList;
                comments = args.local.form.parent().prev();
                commentList = (window.location.pathname + ' #comments');
                args.local.form.addClass('ajax-loading');
                $('.delete-block').remove();
                $('a[href=#comments]').click();
                $('#comments').load(commentList, function () {
                    $('.delete-block').fadeOut('fast');
                    $('.ajax-loading').removeClass('ajax-loading');
                    $('.page-node #content-inner .box').not('.original').remove();
                    $('html').animate({scrollTop: $('#comments .comment:last-child').offset().top}, 500, function() {
                        $('#comments .comment:last-child').effect('highlight', {color: '#FCFAC9'}, 2000);
                    });
                    Drupal.attachBehaviors('.comment_reply a, div.error');
                });                
            }
            else {
                var commentList = (window.location.pathname + ' #comments');
                args.local.form.addClass('ajax-loading');
                $('#comments').load(commentList, function () {
                    $('.page-node #content-inner .box').not('.original').remove();
                    $('.ajax-loading').removeClass('ajax-loading');
                    $('html').animate({scrollTop: $('#comments .comment:last-child').offset().top}, 500, function() {
                        $('#comments .comment:last-child').effect('highlight', {color: '#FCFAC9'}, 2000);
                    });
                    Drupal.attachBehaviors('.comment_reply a, div.error');
                    $('a[href=#comments]').click();
                });
            }
        }
        // Comments in Main Feed - determined by presence of id attribute in parent form element (better way?)
        if (args.local.form.parent().attr('id')) {
            var comments, commentsID;
            comments = args.local.form.parent().prev();
            commentsID = args.local.form.parent().attr('id');
            if ( args.local.form.parents('.views-field-phpcode').hasClass('hidden') ) {
                var url2 = window.location.pathname + '#comment-list-' + commentsID;
                $.ajax({
                    url: url2,
                    success: function(response) {
                        console.log(response);
                        var newComments = $(response).find('#comment-list-' + commentsID);
                        $('.views-field-phpcode').removeClass('ajax-loading');
                        $(comments).replaceWith(newComments);
                        $('.notifications').remove();
                        $('.status').appendTo('#messages');
                        Drupal.attachBehaviors('.view-latest-comments, #admin-bar, div.error');
                        setTimeout(function () {
                            $(newComments).find('.views-row-1')
                                .effect('highlight', {color: '#FCFAC9'}, 2000);
                        }, 500);
                    },
                    error: function () { 
                        alert(Drupal.t("Oops, something went wrong. If the problem continues, let us know so we can help or buy you a pony or something."));
                        }
                });
            }
            else {
                var url3 = '/node/' + commentsID;
                $.ajax({
                    url: url3,
                    success: function(response) {
                    console.log(response);
                        var newComments2 = $(response).find('#block-views-latest_comments-block_2 .view');
                        var commentNum = $(newComments2).find('.views-row-4 .view-all').text();
                        $('.views-field-phpcode').removeClass('ajax-loading');
                        $(comments).replaceWith(newComments2);
                        $(newComments2).attr('id','comment-list-' + commentsID).addClass('views-field-view').find('.view-all').removeClass('view-all').addClass('hide-all').attr('value', commentNum).text('Collapse');
                        $('.notifications').remove();
                        $('.status').appendTo('#messages');
                        Drupal.attachBehaviors('.view-latest-comments .views-row, .hide-all, #admin-bar, div.error');
                        $(newComments2).find('li').not('.views-row-1, .views-row-2, .views-row-3, .views-row-4').addClass('hide');
                        setTimeout(function () {
                        	$(newComments2).find('.views-row-1')
                            	.animate({scrollTop: $(newComments2).find('.views-row-1').offset().top}, 500)
                                .effect('highlight', {color: '#FCFAC9'}, 2000);
                        	}, 500);
                    },	
                    error: function () {
                        alert(Drupal.t("Oops, something went wrong. If the problem continues, let us know so we can help or buy you a pony or something."));
                        $('.view-social-feed, .view-og-ghp-social-feed').removeClass('ajax-loading');
                        }
                });
            }

        }
        else {
            // This is the main Ajax call - groundwork from the Ajax Views Refresh module
            $('.view-social-feed, #content-inner .view-og-ghp-social-feed').addClass('ajax-loading');
            if (Drupal.settings && Drupal.settings.views && Drupal.settings.views.ajaxViews) {
                var ajax_path = Drupal.settings.views.ajax_path;
                if (ajax_path.constructor.toString().indexOf("Array") != -1) {
                    ajax_path = ajax_path[0];
                }
                $.each(Drupal.settings.views.ajaxViews, function(i, settings) {
                    var view = '.view-dom-id-' + settings.view_dom_id;
                    if (!$(view).size()) {
                        view = '.view-id-' + settings.view_name + '.view-display-id-' + settings.view_display_id;
                    }
                    $(view).filter(function () {
                        return !$(this).parents('.view').size();
                    })
                    .each(function () {
                    var target = this;
                    
                    // Just use default settings
                    $.ajax({
                        url: ajax_path,
                        type: 'GET',
                        data: settings,
                        success: function(response) {
                            if (response.__callbacks) {
                                $.each(response.__callbacks, function(i, callback) {
                                    // Temporary remove the ajax-form class to avoid behavior to be attached twice (or the form would be sent twice).
                                    $('.ajax-form').removeClass('ajax-form').addClass('ajax-form-temp');
                                    eval(callback)(target, response);
/*
                                    $('.views-field-phpcode').removeClass('ajax-loading');
                                    var submitter = args.local.submitter;
                                    var container = $(submitter.parents('.views-field-phpcode').prev());
                                    var theFormID = args.local.form.parent().attr('id');
                                    $(container).addClass('ajaxchanged');
*/
                                    $('.js div.error').hide();
                                    setTimeout(function () {
                                        $('.page-community .view-social-feed > .view-content > .item-list > ul > .views-row-1, .node-type-group #content-inner .view-og-ghp-social-feed > .view-content > .item-list > ul > .views-row-1')
                                            .effect('highlight', {color: '#FCFAC9'}, 2000);
                                    }, 500);
                                    $('.notifications').remove();
                                    $('.status').appendTo('#messages');
                                    $('<a class="view-it" href="/community">View your content in the feed</a>').appendTo('#messages ul');
                                    Drupal.attachBehaviors('#admin-bar, div.error');
                                    $('#admin-bar .block-formblock').hide();
                                    $('.ajax-form-temp').addClass('ajax-form').removeClass('ajax-form-temp');
                                });
                            }
                        },
                        error: function () {
                            alert(Drupal.t("An error occurred at @path.", {'@path': ajax_path})); 
                        },
                        dataType: 'json'
                    });
                    });
                });
            }
        }
    }
}