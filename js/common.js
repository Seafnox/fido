var dump_file = "inline_update.php";
var username = "";
var password = "";
var hash = "";
var menu_offset = 50;
// -- Get URL params
var urlParams;
(window.onpopstate = function () {
	var match,
		pl     = /\+/g,  // Regex for replacing addition symbol with a space
		search = /([^&=]+)=?([^&]*)/g,
		decode = function (s) { return decodeURIComponent(s.replace(pl, " ")); },
		query  = window.location.search.substring(1);

	urlParams = {};
	while (match = search.exec(query))
		urlParams[decode(match[1])] = decode(match[2]);
})();
// --
$(document).ready(function() {

	$('body').activity({
		'achieveTime':60
		,'testPeriod':10
		,useMultiMode: 1
		,callBack: function (e) {
			ga('send', 'event', 'активность', 'активность в течение 60 сек', 'fedotkin | jquery.activity');
		}
	});

	$.reject();

	$('.requestsuccess').hide();

	$('.js-testimonials').on('click', function() {
		$('.js-testimonials').hide();
		$(this).parent().parent().find('.row').slideDown('fast');
		return false;
	});

	// YouTube API
	var embed = 0;
	function addEmbeded(object, videoId, width, height, autoplay) {
		if (autoplay == 'true') {
			object.html("<iframe width='"+width+"' height='"+height+"' src='http://www.youtube.com/embed/"+videoId + "?autoplay=1" +"' frameborder='0' allowfullscreen></iframe>");
		} else {
			object.html("<iframe width='"+width+"' height='"+height+"' src='http://www.youtube.com/embed/"+videoId + "?autoplay=0" +"' frameborder='0' allowfullscreen></iframe>");
		}
		embed+=1;
	}

	// Video
	$(".embeded").each(function() {
		if (!$(this).attr("data-autoplay")) {
			$(this).attr("data-autoplay", 'false');
		}
		addEmbeded($(this), $(this).attr("data-videoId"), $(this).attr("data-width"), $(this).attr("data-height"), $(this).attr("data-autoplay"));
	});
	$(".video_link").click(function() {
		if ($(this).attr("data-videoId") && $(this).find(".embeded").size() == 0) {
			var image = $(this).find(".image");
			addEmbeded(image, $(this).attr("data-videoId"), image.width(), image.height(), 'true');
			image.addClass("embeded");
		}
		return false;
	});

    //
    $('a.ajax').each(function() {
        var href = $(this).attr('href');
        $(this).attr('href', "#"+href);
        $(this).attr('data-href', href);
    });
    var fancybox_options = {
        maxWidth	: $(window).width() > 730 ? 800 : $(window).width() - 70,
        maxHeight	: 100000,
        type        : 'ajax',
        fitToView	: false,
        autoSize	: true,
        closeClick	: false,
        padding		: 25,
        openEffect	: 'fade',
        closeEffect	: 'fade',
        helpers:  {overlay : {locked     : false}},
        afterClose: function() {window.location.hash = "main";}
    }

    var hash = window.location.hash
    if (hash != "" && hash != "#") {
        if (hash.indexOf("#block") + 1) {
            var target = hash.substr(6);
            console.log(target);
            setTimeout(function() {$('html, body').stop().animate({
                'scrollTop': $(target).offset().top - menu_offset
            }, 500, 'swing');}, 400);
        } else {
            var anchor = $(document).find('a[href="'+hash+'"]').first()
            if (anchor.size() > 0) {
                $.fancybox( anchor.attr('data-href'), fancybox_options);
                $('html, body').animate({ scrollTop: 0 }, 1500);
            } else {
                window.location.hash = "main";
            }
        }
    }

    $("a.ajax").on('click', function() {
        window.location.hash = $(this).attr('data-href');
        $.fancybox( $(this).attr('data-href'), fancybox_options);
        return false;
    });

    // Navigation
	$('.js-nav a').on('click',function (e) {
		e.preventDefault();

		var target = this.hash,
		$target = $(target);

		$('html, body').stop().animate({
				'scrollTop': $target.offset().top - menu_offset
		}, 500, 'swing', function () {
				window.location.hash = "block" + target;
		});
	});
	$("header .js-nav a").click(function() {
		ga('send', 'event', 'клик', 'клик на кнопку', 'fedotkin | клик на кнопку первого экрана');
	});
    $("nav .js-nav a[href='#feedback']").click(function() {
        ga('send', 'event', 'клик', 'клик на кнопку', 'fedotkin | клик на кнопку верхнего меню');
    });
    $('#tank .container').hide();
    $(".js-nav a[href='#tank']").click(function() {
        $('#tank .container').slideDown(500);
    });

	function navScroll(){
		$('.section').each(function(){
			var pos = $(this).offset().top;
			var id = $(this).attr('id');
			var top = ($('.page').offset().top - 53);
			if( $(window).scrollTop() >= (pos - 52)){
				$('.js-nav li').removeClass('active');
				$('[href = #'+id+']').parent().addClass('active');
			}
			if($(window).scrollTop() < top){
				$('.js-nav li').removeClass('active');
			}
		});
	}

	$(window).scroll(function() {
		navScroll();
	});
	//select
	function select() {
		var el = $('.js-select');
		var el_title = el.children("span");
		var item = el.find('li');
		var input = el.find(".js-select-input");
		var el_text = el.find(".js-select-text");
		var checkbox = el.find(".checkbox");
		var list = el.find('.js-select-drop');
		el_title.click(function(event){
			if ($(this).parent().hasClass('is-open')) {
				$(this).parent().removeClass('is-open');
			}
			else {
				el.removeClass('is-open');
				$(this).parent().addClass('is-open');
			}
			event.stopPropagation();
		});
		checkbox.click(function(event){
			event.stopPropagation();
		});
		item.bind("click",function(){
			el.find('li').removeClass('is-selected');
			$(this).addClass("is-selected");
			var text = $(this).text();
			var id = $(this).attr("data-id");
			$(this).parents(".js-select").find(".js-select-text").text(text);
			$(this).parents(".js-select").find(".js-select-input").val(id);
		});
	}
	select();

    if ($(".about .video__viewport").size() > 0 && $(window).width > 768 ) {
        $(".about .video__viewport").height($(".about .about__quote").outerHeight() - 4);
    }

	//click document
	$(document).click(function() {
		$('.js-select').removeClass('is-open');
	});


//*  FORM VALIDATION  *//
	$('.requestagain').on('click', function(form) {
		$('.requestsuccess').slideUp('fast');
		$('.request').slideDown();
		return false;
	});
	$(document).click(function(e) {
		if ($(e.target).parents('form').size() > 0 || e.target.tagName != 'FORM') {
			$('form').find('input.error').removeClass('error');
			$('form').find("input[type='submit']").removeClass("disabled").removeAttr('disabled');
			$('form').find(".error").remove();
		}
	});
	$("#feedback form").validate({
		submitHandler: function(form) {
			$('.request').slideUp('fast');
			$('.requestsuccess').slideDown();

			// -- отправка формы подписки
			var paramNames = ['utm_source','utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];
			var webform_id = urlParams['webform_id'] ? urlParams['webform_id'] : '3231204';
			var initParams = { 'u': 'SwZy', 'webform_id': webform_id };

			for(var i=0; i<paramNames.length; i++){
				var element = paramNames[i];
				initParams['custom_' + element] = urlParams.hasOwnProperty(element) ? urlParams[element] : '';
			}
			$.ajax({
				url: 'https://app.getresponse.com/add_contact_webform.html',
				data: $(form).serialize() + '&' + $.param(initParams),
				type: 'POST'
			});
			// --

			// -- events: Google Analytics
			ga('send', 'event', 'подписка', 'отправка формы подписки', 'fedotkin | форма подписки GetResponse');
			// --

			window.open("//imsider.ru/confirm/?id=fedotkin&" + $(form).serialize(), '_blank');
			return false;
		},
		errorPlacement: function(error, element) { return;},
		highlight: function(element, errorClass, validClass) {
			$(element).addClass(errorClass).removeClass(validClass);
			$(element).parents('form').find("input[type='submit']").addClass("disabled").attr('disabled','disabled');
			if ($(element).attr("data-placeholder")=== undefined)
				$(element).attr("data-placeholder", $(element).attr("placeholder"));
			if ($(element).parent().find("div.error").size()<= 0) {
				$(element).parent().append("<div class='error'></div>")
			}
			$(element).parent().find("div.error").html(this.errorMap[$(element).attr("name")]);
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).removeClass(errorClass);
			$(element).parents('form').find("input[type='submit']").removeClass("disabled").removeAttr('disabled');
			$(element).parent().find("div.error").remove();
			if (element.validity.valid) $(element).addClass(validClass);
			$(element).attr("placeholder", $(element).attr("data-placeholder"));
		},
		invalidHandler: function(event, validator) {},
		messages: {
			name: {required: "<p>Укажите имя</p>"},
			email: {required: "<p>Укажите адрес почты</p>", email: "<p>Это не адрес почты. Должно быть похоже на user@mail.com</p>"}
		},
		rules: {
			name: {
				required:true
			},
			email: {
				required:true,
				email: true
			}
		},
		onclick:    true,
		focusInvalid:   false,
		focusCleanup:   true,
		onfocusout: false
	});

//*  EDIT AUTH *//
if (window.location.href.indexOf("edit") + 1) {

	username = prompt('Please set user name', "");
	password = prompt('Please set user password', "");

	jQuery.ajax({
		type: "POST",
		url: "get_access.php",
		data: { username: username, password: password}

	}).done(function (data, textStatus, jqXHR) {
			alert("Access granted.");
			hash = jqXHR.responseText;
			$(".contenteditable").attr("contenteditable", "true");
            $(".contenteditable").on("click", function() {
                CKEDITOR.inline( $(this)[0] );
            });
			CKEDITOR.disableAutoInline = true;
	}).fail(function (jqXHR, textStatus, errorThrown) {
			alert("Access failed. [" + jqXHR.responseText + " " + errorThrown + "]");
	});
}

	$('.navbar .menu_btn').click(function(){$('.navbar').toggleClass('closed');});
	resize();
});

$(window).resize(resize);
function resize() {
	$('.navbar').removeClass('closed');
	if ($(window).width() < 780) {
		$('.navbar').addClass('closed');
	}

}