(function ($) {
	window.DHVCWaypoint = window.VcColumnView.extend({
		render:function () {
            window.DHVCWaypoint.__super__.render.call(this);
            return this;
        },
        ready:function (e) {
            window.DHVCWaypoint.__super__.ready.call(this, e);
            return this;
        },
	});
})(window.jQuery);