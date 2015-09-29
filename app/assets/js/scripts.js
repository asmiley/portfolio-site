/*!
 * fastshell
 * Fiercely quick and opinionated front-ends
 * https://HosseinKarami.github.io/fastshell
 * @author Hossein Karami
 * @version 1.0.3
 * Copyright 2015. MIT licensed.
 */
/* global jQuery */

(function ($, window, document, undefined) {

	'use strict';

	$(function () {
		// FastShell
		$(document).ready(function () {

			var s = skrollr.init({ forceHeight: false });
			skrollr.menu.init(s, {});


			$('#gallery1').popup({
				openelement: '.gallery1_open',
				opacity: 0.5,
				transition: 'all 0.3s'
			});


			$('#gallery2').popup({
				openelement: '.gallery2_open',
				closeelement: '.gallery2_close',
				opacity: 0.5,
				transition: 'all 0.3s'
			});


			$('#gallery3').popup({
				openelement: '.gallery3_open',
				opacity: 0.5,
				transition: 'all 0.3s'
			});


			$('#gallery4').popup({
				openelement: '.gallery4_open',
				opacity: 0.5,
				transition: 'all 0.3s'
			});


			$('#gallery5').popup({
				openelement: '.gallery5_open',
				opacity: 0.5,
				transition: 'all 0.3s'
			});

			$('#gallery6').popup({
				openelement: '.gallery6_open',
				opacity: 0.5,
				transition: 'all 0.3s'
			});

		});
	});


	$('.input').blur(function () {
		if ($(this).val()) {
			$(this).parent('.label-line').addClass('active checked');
		} else {
			$(this).parent('.label-line').removeClass('active checked');
			//alert('no');
		}
	});

	$('.label-line').focusin(function () {
		$(this).addClass('active');
		if ($('.label-line').hasClass('checked')) { }
		else {
			$('.label-line').removeClass('checked');
		}

	});


	$(function () {
		$(".button").click(function (e) {
			// validate and process form here
  
			var name = $('#name').val();
			if (name === '') {
				$('.form-right').addClass('error');
				$('.form-container').prepend('<span class="alert">Fill all the fields!</span>');
				$('.alert').fadeIn().delay(1500).fadeOut();
				setTimeout(function () {
					$('.form-right').removeClass('error');
				}, 3000);
				return false;
			}
			var email = $('#email').val();
			if (email === '') {
				$('.form-right').addClass('error');
				$('.form-container').prepend('<span class="alert">Fill all the fields!</span>');
				$('.alert').fadeIn().delay(1500).fadeOut();
				setTimeout(function () {
					$('.form-right').removeClass('error');
				}, 3000);
				return false;
			}
			var phone = $('#message').val();
			if (phone === '') {
				$('.form-right').addClass('error');
				$('.form-container').prepend('<span class="alert">Fill all the fields!</span>');
				$('.alert').fadeIn().delay(1500).fadeOut();
				setTimeout(function () {
					$('.form-right').removeClass('error');
				}, 3000);
				return false;
			}
			var dataString = 'name=' + name + '&email=' + email + '&phone=' + phone;
			//alert (dataString);return false;

			$.ajax({
				type: 'POST',
				url: 'mailer.php',
				data: dataString,
				success: function () {

					// remove error class
					$('.form-right').removeClass('error');
					// material effect
					var parent, ink, d, x, y;
					parent = $('.form-right');

					if (parent.find('.ink').length === 0) {
						parent.prepend('<span class="ink"></span>');
					}
					ink = parent.find('.ink');
					//in case of quick double clicks stop the previous animation
					//ink.removeClass("animate"); 
					
					//set dimesnions of .ink
					if (!ink.height() && !ink.width()) {
						//use parent's width or height whichever is larger for the diameter to make a circle which can cover the entire element.
						d = 1200;
						ink.css({ height: d, width: d });
					}
					
					//get click coordinates
					//logic = click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center;
					x = e.pageX - parent.offset().left - ink.width() / 2;
					y = e.pageY - parent.offset().top - ink.height() / 2;
					
					//set the position and add class .animate
					ink.css({ top: y + 'px', left: x + 'px' }).addClass('animate');
					$('.message-sent').delay(500).fadeIn().addClass('active');
					$('.close-form').fadeOut();
					setTimeout(function () {
						$('.form-container').addClass('close');
					}, 2000);
					//$('.form-container').delay(3000).fadeOut();
					setTimeout(function () {
						$('.form-container').addClass('close-all');
					}, 3000);
				}
			});
			return false;
		});
	});



	var t = document.getElementsByTagName('textarea')[0];
	var offset = !window.opera ? (t.offsetHeight - t.clientHeight) : (t.offsetHeight + parseInt(window.getComputedStyle(t, null).getPropertyValue('border-top-width')));

	var resize = function (t) {
		t.style.height = 'auto';
		t.style.height = (t.scrollHeight + offset) + 'px';
	};

	t.addEventListener && t.addEventListener('input', function (event) {
		resize(t);
	});

	t['attachEvent'] && t.attachEvent('onkeyup', function () {
		resize(t);
	});


})(jQuery, window, document);

