// @codekit-prepend "util/plugin.js"
// @codekit-prepend "vendor/jquery.bxslider.js"

var App = App || {};

(function ($) {
	
	"use strict";
	
	App.init = function () {
		this.setupSlider();
	};
	
	App.setupSlider = function () {
		
		var $slider = $(".slider > div");
		
		$slider.bxSlider({
			mode: "fade",
			pager: false,
			//turn off text and use genericons
			nextText: "",
			prevText: ""
		});

	};

	$(document).ready(function () {
		App.init();
	});

})(jQuery);