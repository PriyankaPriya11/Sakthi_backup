getBottomPosition = function (f, g) {
    var c = 0;
    try {
        if (typeof (g) == "undefined" || typeof (g.bottom) == "undefined") {
            var d = (f).parent();
            if (d != null && typeof (d) != "undefined") {
                c = d.offset().top + d.outerHeight(true)
            }
        } else {
            if (typeof (g.bottom) == "string") {
                var a = g.bottom;
                if (a.indexOf("#") == -1) {
                    a = "#" + a
                }
                c = jQuery(a).offset().top
            } else {
                c = g.bottom
            }
        }
    } catch (b) {}
    return c
};
doPositionSet = function (h, j, f) {
    var d = getBottomPosition(h, j);
    var g = 0;
    if (j.top) {
        g = j.top
    }
    if (d > 0) {
        var a = jQuery(window).scrollTop() + jQuery(window).height() - d;
        if (jQuery(window).scrollTop() > h.T0 - g) {
            jQuery(h).css("position", "fixed");
            jQuery(h).css("width", h.W0);
            jQuery(h).css("height", h.H0);
            jQuery(h).css("left", h.L0);
            jQuery(h).css("z-index", 10000);
            if (a > 0) {
                if (jQuery(window).scrollTop() + h.H0 > d) {
                    jQuery(h).css("top", g+ "px");
                   // jQuery(h).css("bottom", Math.floor(a))
                } else {
                    jQuery(h).css("top", g + "px")
                }
            } else {
                jQuery(h).css("top", g + "px")
            }
        } else {
            jQuery(h).css("position", "static")
        }
    }
    if (f > 0) {
        for (var c = 0; c < f; c++) {
            window.setTimeout(function () {
                doPositionSet(h, j, 0)
            }, 100)
        }
    }
};
doDimesionSet = function (a) {
    a.T0 = jQuery(a).offset().top;
    a.L0 = jQuery(a).offset().left;
    a.H0 = jQuery(a).outerHeight(true);
    a.W0 = jQuery(a).outerWidth(true)
};
doMakeFixed = function (d, c) {
    var b = jQuery(d)
    doDimesionSet(b);
    var a = getBottomPosition(b, c);
    jQuery(window).bind("resize", function (e) {
        jQuery(b).each(function () {
            jQuery(b).css("position", "static");
            doDimesionSet(b)
        })
    });
    jQuery(window).bind("scroll", function (e) {
        doPositionSet(b, c, 5)
    })
};

function DHbindEvent(elm, type, handler) {
    if (elm.addEventListener) {
    	elm.addEventListener(type, handler, false);
    } else {
    	elm.attachEvent('on'+type, handler);
    }
}

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    define(factory);
  } else if (typeof exports === 'object') {
    module.exports = factory(require, exports, module);
  } else {
    root.dhscrollReveal = factory();
  }
}(this, function(require, exports, module) {


window.dhscrollReveal = (function (window) {

  'use strict';

  function dhscrollReveal(options) {

      this.docElem = window.document.documentElement;
      this.options = this.extend(this.defaults, options);
    
      this.init();
  }

  dhscrollReveal.prototype = {

    defaults: {
      viewportFactor: 0.33,
      init: true
    },
    
    init: function () {
    	
      this.mobile = false;
      if ('ontouchstart' in document.documentElement) {
    	  this.mobile = true;
 	  }
      
      this.scrolled = false;

      var self = this;
      this.elems = Array.prototype.slice.call(this.docElem.querySelectorAll('.dhvc-waypoint'));
   
      this.elems.forEach(function (elem, i) {
    
    	var el = self._nextSibling(elem);
        var effect = elem.getAttribute('data-effect'),
        	duration = elem.getAttribute('data-duration'),
        	scrollup = elem.getAttribute('data-scrollup'),
        	viewportFactor = elem.getAttribute('data-viewport-factor'),
        	delay = elem.getAttribute('data-delay'),
        	iteration_count = elem.getAttribute('data-iteration-count'),
        	timing = elem.getAttribute('data-timing'),
        	trigger = elem.getAttribute('data-trigger'),
        	mobile = elem.getAttribute('data-mobile'),
        	stick_top = elem.getAttribute('data-stick-top');
        
        if(self.getViewportW() <= 980){
        	if(mobile == '1'){
        		self.update(el,trigger,effect,duration,scrollup,viewportFactor,delay,iteration_count,timing,stick_top);
        	}else{
        		
        	}
        }else{
        	self.update(el,trigger,effect,duration,scrollup,viewportFactor,delay,iteration_count,timing,stick_top);
        }
        	
      });

      var scrollHandler = function () {
        if (!self.scrolled) {
          self.scrolled = true;
          setTimeout(function () {
            self._scrollPage();
          }, 60);
        }
      };

      var resizeHandler = function () {

        if (self.resizeTimeout) {
          clearTimeout(self.resizeTimeout);
        }
        function delayed() {
          self._scrollPage();
          self.resizeTimeout = null;
        }
        self.resizeTimeout = setTimeout(delayed, 200);
      };
      
      DHbindEvent(window,'scroll',scrollHandler);
      DHbindEvent(window,'resize',scrollHandler);
    },
    _classReg: function( className ) {
	  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
	},
	
    _hasClass: function( elem, c ) {
       return this._classReg( c ).test( elem.className );
     },
     
    _addClass: function( elem, c ) {
        if ( !this._hasClass( elem, c ) ) {
          elem.className = elem.className + ' ' + c;
        }
      },
      
    _removeClass: function( elem, c ) {
    	var self  = this;
        elem.className = elem.className.replace( self._classReg( c ), ' ' );
      },
      
    _scrollPage: function () {
        var self = this;
        this.elems.forEach(function (elem, i) {
        	var el = self._nextSibling(elem);
            var effect = elem.getAttribute('data-effect'),
            	duration = elem.getAttribute('data-duration'),
            	scrollup = elem.getAttribute('data-scrollup'),
            	viewportFactor = elem.getAttribute('data-viewport-factor'),
	            delay = elem.getAttribute('data-delay'),
	        	iteration_count = elem.getAttribute('data-iteration-count'),
	        	timing = elem.getAttribute('data-timing'),
	        	trigger = elem.getAttribute('data-trigger'),
	        	mobile = elem.getAttribute('data-mobile'),
	        	stick_top = elem.getAttribute('data-stick-top');
            
            if(self.getViewportW() <= 980){
            	if(mobile == '1'){
            		self.update(el,trigger,effect,duration,scrollup,viewportFactor,delay,iteration_count,timing,stick_top);
            	}else{
            		
            	}
            }else{
            	self.update(el,trigger,effect,duration,scrollup,viewportFactor,delay,iteration_count,timing,stick_top);
            }
        });
        this.scrolled = false;
    },
    
    _nextSibling: function( n ) {
    	var x=n.nextSibling;
    	while (x && x.nodeType !=1)
    	  {
    	  x=x.nextSibling;
    	  }
    	return x;
	},
	
    update: function (el,trigger,effect,duration,scrollup,viewportFactor,delay,iteration_count,timing,top) {
      var self = this;
      top = top || 0;
      viewportFactor = viewportFactor || self.options.viewportFactor;
      
      self._addClass(el,timing);
    	  
      el.style.WebkitAnimationDuration = duration+'ms';
	  el.style.animationDuration  = duration+'ms';
	  el.style.animationIterationCount = iteration_count;
	  el.style.WebkitAnimationIterationCount = iteration_count;
	  el.style.animationDelay = delay + "ms";
	  el.style.WebkitAnimationDelay = delay + "ms";
	  
     if(trigger == 'scroll'){	      
	      if (!self.isElementInViewport(el, viewportFactor)) {
	        if (scrollup) {
	        		if(scrollup == 'sticky'){
	        			//jQuery(el).makeFixed();
	        			//self._addClass(el,'sticky');
	        			try {
	        				doMakeFixed(el, {top:top });
	        			}catch (e) {}
	        		}else if(scrollup == 'yes'){
	        			el.style.opacity = "0";
	        			self._removeClass(el,effect);
	            		self._removeClass(el,'animated');
	        		}
	        }
	        return;
	      }
	      if (self.isElementInViewport(el, viewportFactor)) {
	    	  el.style.opacity = "1";
	    	  self._addClass(el,effect);
	    	  self._addClass(el,'animated');
	    	  return;
	      }
      }else{
    	  if(self.mobile){
    		  DHbindEvent(el,'touchstart',function(){
    	    	  self._addClass(el,effect);
    	    	  self._addClass(el,'animated');
    	    	  return;
        	  });
        	  
        	  DHbindEvent(el,'touchend',function(){
              	  self._removeClass(el,effect);
              	  self._removeClass(el,'animated');
              	return;
        	  });
        	  
    	  }else{
    		  DHbindEvent(el,'mouseover',function(){
    	    	  self._addClass(el,effect);
    	    	  self._addClass(el,'animated');
    	    	  return;
        	  });
        	  
        	  DHbindEvent(el,'mouseout',function(){
              	  self._removeClass(el,effect);
              	  self._removeClass(el,'animated');
              	return;
        	  });
    	  }
    	  return;
      }
    },
    getViewportW : function () {
        var client = this.docElem['clientWidth'],
          inner = window['innerWidth'];

        return (client < inner) ? inner : client;
      },
      
    getViewportH : function () {
      var client = this.docElem['clientHeight'],
        inner = window['innerHeight'];

      return (client < inner) ? inner : client;
    },

    getOffset : function(el) {
      var offsetTop = 0,
          offsetLeft = 0;

      do {
        if (!isNaN(el.offsetTop)) {
          offsetTop += el.offsetTop;
        }
        if (!isNaN(el.offsetLeft)) {
          offsetLeft += el.offsetLeft;
        }
      } while (el = el.offsetParent)

      return {
        top: offsetTop,
        left: offsetLeft
      }
    },

    isElementInViewport : function(el, h) {
    	if(el){
	      var scrolled = window.pageYOffset,
	          viewed = scrolled + this.getViewportH(),
	          elH = el.offsetHeight,
	          elTop = this.getOffset(el).top,
	          elBottom = elTop + elH,
	          h = h || 0;
	
	      return (elTop + elH * h) <= viewed
	          && (elBottom) >= scrolled
	          || (el.currentStyle? el.currentStyle : window.getComputedStyle(el, null)).position == 'fixed';
    	}
    	return false;
    },

    extend: function (a, b){
      for (var key in b) {
        if (b.hasOwnProperty(key)) {
          a[key] = b[key];
        }
      }
      return a;
    }
  };
  return dhscrollReveal;
})(window);
return dhscrollReveal;
}));

(function($) {
	'use strict';
	DHbindEvent(window,'load', function(){
		window.dhscrollReveal = new dhscrollReveal(); 
	});
})();
