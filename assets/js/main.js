// @codekit-prepend "util/plugin.js"
// @codekit-prepend "vendor/jquery.bxslider.js"

var App = App || {};

(function ($) {

	"use strict";

	App.init = function () {
		console.log('App.init!');
		this.setupSlider();
	};

	App.setupSlider = function () {

		var $slider = $(".slider > div");

		if ($slider.length > 0) {
			$slider.bxSlider({
				mode: "fade",
				pager: false,
				//turn off text and use genericons
				nextText: "",
				prevText: ""
			});
		} else {
			return false;
		}
	};

	$(document).ready(function () {
		App.init();
	});

})(jQuery);