<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage erum
 * @since 1.0.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <style type="text/css">
    .recentcomments a {
      display: inline !important;
      padding: 0 !important;
      margin: 0 !important;
    }
    .project-client,
    .project-year {
      display: none
    }
  </style>
</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0"  <?php body_class(); ?>>
  <div id="page" class="site">
    <header id="masthead" class="site-header ss-head">
      <div class="site-branding">
        <!-- <div class="dark-logo">
          <a href="http://www.elegea.petekmedya.com/" class="custom-logo-link" rel="home"><img width="738" height="91"
              src="wp-content/themes/erum/assets/ele/site-logo-dark.png" class="custom-logo"
              alt="Elegea"
              srcset="http://www.elegea.petekmedya.com/wp-content/uploads/2019/08/site-logo-dark.png 738w, http://www.elegea.petekmedya.com/wp-content/uploads/2019/08/site-logo-dark-300x37.png 300w"
              sizes="(max-width: 738px) 100vw, 738px"></a> 
        </div> -->
        <div class="light-logo">
          <a href="<?php echo site_url(); ?>" rel="home">
            <img src="https://erum.askantech.com/wp-content/themes/erum/assets/images/logo-wt.png">
          </a>
          <a href="<?php echo site_url(); ?>" rel="home">
            <img src="https://erum.askantech.com/wp-content/themes/erum/assets/images/logo-bk.png">
          </a>
        </div>
      </div><!-- .site-branding -->
      <nav id="site-navigation" class="main-navigation">
        <div class="elg-navigation">
          <div class="elg-hamburger">
            <span class="elg-nav-line second-line"></span>
            <span class="elg-nav-line cor-line" style="opacity: 1;"></span>
            <span class="elg-nav-line first-line"></span>
          </div>
          <p>Menu</p>
        </div>
        <div class="fs-menu">
          <div class="menu-main-menu-container">
            <ul id="primary-menu" class="menu">
              <!-- <li id="menu-item-347"
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-347">
                <span class="dropdown-toggle">+</span><a href="javascript:void(0)"
                  aria-current="page">Sobre Erum</a>
                <ul class="sub-menu" style="display: none;">
                  <li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-340">
                    <a href="#">Sobre Erum-1</a></li>
                  <li id="menu-item-339" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-339">
                    <a href="#">Sobre Erum-2</a></li>
                  <li id="menu-item-342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-342">
                    <a href="#">Sobre Erum-3</a></li>
                  <li id="menu-item-351"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-7 current_page_item menu-item-351">
                    <a href="#" aria-current="page">Sobre Erum-4</a></li>
                </ul>
              </li> -->
              <li id="menu-item-348" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-348"><a
                  href="javascript:void(0)">Cat??logo</a></li>
              <li id="menu-item-346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-346"><a
                  href="javascript:void(0)">Nuestros clientes</a></li>
              <li id="menu-item-352" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-352"><a
                  href="javascript:void(0)">I+D</a></li>
              <li id="menu-item-349" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-349"><a
                  href="javascript:void(0)">RTS</a></li>
              <li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345"><a
                  href="javascript:void(0)">Contacto</a></li>
              <li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345"><a
                  href="javascript:void(0)">Ubicaci??n</a></li>
              <li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-345"><a
                  href="javascript:void(0)">Recursos humanos</a></li>
            </ul>
          </div> <span class="fs-menu-seperator"></span>
          <div class="menu-sidebar-foundation" style="height: 420px;">
            <div id="menu-sidebar" class="menu-sidebar widget-area" role="complementary">
              <section id="text-2" class="widget widget_text">
                <div class="textwidget">
                  <h5><img class="alignnone wp-image-67 size-full"
                      src="https://erum.askantech.com/wp-content/themes/erum/assets/ele/eeeee.png" alt="" width="71"
                      height="91"></h5>
                  <p>&nbsp;</p>
                  <div class="ss-menu-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
						</div>
						<div class="ss-menu-link">
							<a href="tel:+34 965 330 817">+34 965 330 817</a><br>
							<a href="mailto:erum@erumgroup.com">erum@erumgroup.com</a>
						</div>
						<div class="ss-menu-social">
							<a href="javascript:void(0)"><img src="https://erum.askantech.com/wp-content/themes/erum/assets/images/fb.png"></a>
							<a href="javascript:void(0)"><img src="https://erum.askantech.com/wp-content/themes/erum/assets/images/linkedin.png"></a>
							<a href="javascript:void(0)"><img src="https://erum.askantech.com/wp-content/themes/erum/assets/images/instagram.png"></a>
						</div>
                </div>
              </section>
            </div><!-- #primary-sidebar -->
          </div>
        </div>
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->
  </div>
    <script>
      jQuery(".elg-navigation").click(function() {
    jQuery('.elg-navigation.menu-org').not(this).removeClass('menu-org');
    jQuery('.elg-navigation').toggleClass('menu-org');
    jQuery('.elg-navigation.elg-nav-line-1').not(this).removeClass('elg-nav-line-1');
    jQuery('.second-line').toggleClass('elg-nav-line-1');
    jQuery('.elg-navigation.elg-nav-line-2').not(this).removeClass('elg-nav-line-2');
    jQuery('.first-line').toggleClass('elg-nav-line-2');
    jQuery('.elg-navigation.fs-menu-in').not(this).removeClass('fs-menu-in');
    jQuery('.fs-menu').toggleClass('fs-menu-in');
    jQuery('.elg-navigation.seperator-top').not(this).removeClass('seperator-top');
    jQuery('.fs-menu-seperator').toggleClass('seperator-top');
    jQuery('.elg-navigation.menu-sidebar-comes').not(this).removeClass('menu-sidebar-comes');
    jQuery('.menu-sidebar-foundation').toggleClass('menu-sidebar-comes');
    jQuery('.elg-navigation.menu-item-comes').not(this).removeClass('menu-item-comes');
    jQuery('.menu-item').toggleClass('menu-item-comes');
}) 

!function(a, b) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = b() : "function" == typeof define && define.amd ? define(b) : (a = a || self).Swiper = b();
}(this, function() {
    "use strict";
    var a = "undefined" == typeof document ? {
        body: {},
        addEventListener: function() {},
        removeEventListener: function() {},
        activeElement: {
            blur: function() {},
            nodeName: ""
        },
        querySelector: function() {
            return null;
        },
        querySelectorAll: function() {
            return [];
        },
        getElementById: function() {
            return null;
        },
        createEvent: function() {
            return {
                initEvent: function() {}
            };
        },
        createElement: function() {
            return {
                children: [],
                childNodes: [],
                style: {},
                setAttribute: function() {},
                getElementsByTagName: function() {
                    return [];
                }
            };
        },
        location: {
            hash: ""
        }
    } : document, b = "undefined" == typeof window ? {
        document: a,
        navigator: {
            userAgent: ""
        },
        location: {},
        history: {},
        CustomEvent: function() {
            return this;
        },
        addEventListener: function() {},
        removeEventListener: function() {},
        getComputedStyle: function() {
            return {
                getPropertyValue: function() {
                    return "";
                }
            };
        },
        Image: function() {},
        Date: function() {},
        screen: {},
        setTimeout: function() {},
        clearTimeout: function() {}
    } : window, c = function(a) {
        for (var b = 0; b < a.length; b += 1) this[b] = a[b];
        return this.length = a.length, this;
    };
    function d(d, e) {
        var f = [], g = 0;
        if (d && !e && d instanceof c) return d;
        if (d) if ("string" == typeof d) {
            var h, i, j = d.trim();
            if (0 <= j.indexOf("<") && 0 <= j.indexOf(">")) {
                var k = "div";
                for (0 === j.indexOf("<li") && (k = "ul"), 0 === j.indexOf("<tr") && (k = "tbody"), 
                0 !== j.indexOf("<td") && 0 !== j.indexOf("<th") || (k = "tr"), 0 === j.indexOf("<tbody") && (k = "table"), 
                0 === j.indexOf("<option") && (k = "select"), (i = a.createElement(k)).innerHTML = j, 
                g = 0; g < i.childNodes.length; g += 1) f.push(i.childNodes[g]);
            } else for (h = e || "#" !== d[0] || d.match(/[ .<>:~]/) ? (e || a).querySelectorAll(d.trim()) : [ a.getElementById(d.trim().split("#")[1]) ], 
            g = 0; g < h.length; g += 1) h[g] && f.push(h[g]);
        } else if (d.nodeType || d === b || d === a) f.push(d); else if (0 < d.length && d[0].nodeType) for (g = 0; g < d.length; g += 1) f.push(d[g]);
        return new c(f);
    }
    function e(a) {
        for (var b = [], c = 0; c < a.length; c += 1) -1 === b.indexOf(a[c]) && b.push(a[c]);
        return b;
    }
    d.fn = c.prototype, d.Class = c, d.Dom7 = c;
    var f = {
        addClass: function(a) {
            if (void 0 === a) return this;
            for (var b = a.split(" "), c = 0; c < b.length; c += 1) for (var d = 0; d < this.length; d += 1) void 0 !== this[d] && void 0 !== this[d].classList && this[d].classList.add(b[c]);
            return this;
        },
        removeClass: function(a) {
            for (var b = a.split(" "), c = 0; c < b.length; c += 1) for (var d = 0; d < this.length; d += 1) void 0 !== this[d] && void 0 !== this[d].classList && this[d].classList.remove(b[c]);
            return this;
        },
        hasClass: function(a) {
            return !!this[0] && this[0].classList.contains(a);
        },
        toggleClass: function(a) {
            for (var b = a.split(" "), c = 0; c < b.length; c += 1) for (var d = 0; d < this.length; d += 1) void 0 !== this[d] && void 0 !== this[d].classList && this[d].classList.toggle(b[c]);
            return this;
        },
        attr: function(a, b) {
            var c = arguments;
            if (1 === arguments.length && "string" == typeof a) return this[0] ? this[0].getAttribute(a) : void 0;
            for (var d = 0; d < this.length; d += 1) if (2 === c.length) this[d].setAttribute(a, b); else for (var e in a) this[d][e] = a[e], 
            this[d].setAttribute(e, a[e]);
            return this;
        },
        removeAttr: function(a) {
            for (var b = 0; b < this.length; b += 1) this[b].removeAttribute(a);
            return this;
        },
        data: function(a, b) {
            var c;
            if (void 0 !== b) {
                for (var d = 0; d < this.length; d += 1) (c = this[d]).dom7ElementDataStorage || (c.dom7ElementDataStorage = {}), 
                c.dom7ElementDataStorage[a] = b;
                return this;
            }
            if (c = this[0]) {
                if (c.dom7ElementDataStorage && a in c.dom7ElementDataStorage) return c.dom7ElementDataStorage[a];
                var e = c.getAttribute("data-" + a);
                return e || void 0;
            }
        },
        transform: function(a) {
            for (var b = 0; b < this.length; b += 1) {
                var c = this[b].style;
                c.webkitTransform = a, c.transform = a;
            }
            return this;
        },
        transition: function(a) {
            "string" != typeof a && (a += "ms");
            for (var b = 0; b < this.length; b += 1) {
                var c = this[b].style;
                c.webkitTransitionDuration = a, c.transitionDuration = a;
            }
            return this;
        },
        on: function() {
            for (var a, b = [], c = arguments.length; c--; ) b[c] = arguments[c];
            var e = b[0], f = b[1], g = b[2], h = b[3];
            function i(a) {
                var b = a.target;
                if (b) {
                    var c = a.target.dom7EventData || [];
                    if (c.indexOf(a) < 0 && c.unshift(a), d(b).is(f)) g.apply(b, c); else for (var e = d(b).parents(), h = 0; h < e.length; h += 1) d(e[h]).is(f) && g.apply(e[h], c);
                }
            }
            function j(a) {
                var b = a && a.target && a.target.dom7EventData || [];
                b.indexOf(a) < 0 && b.unshift(a), g.apply(this, b);
            }
            "function" == typeof b[1] && (e = (a = b)[0], g = a[1], h = a[2], f = void 0), h || (h = !1);
            for (var k, l = e.split(" "), m = 0; m < this.length; m += 1) {
                var n = this[m];
                if (f) for (k = 0; k < l.length; k += 1) {
                    var o = l[k];
                    n.dom7LiveListeners || (n.dom7LiveListeners = {}), n.dom7LiveListeners[o] || (n.dom7LiveListeners[o] = []), 
                    n.dom7LiveListeners[o].push({
                        listener: g,
                        proxyListener: i
                    }), n.addEventListener(o, i, h);
                } else for (k = 0; k < l.length; k += 1) {
                    var p = l[k];
                    n.dom7Listeners || (n.dom7Listeners = {}), n.dom7Listeners[p] || (n.dom7Listeners[p] = []), 
                    n.dom7Listeners[p].push({
                        listener: g,
                        proxyListener: j
                    }), n.addEventListener(p, j, h);
                }
            }
            return this;
        },
        off: function() {
            for (var a, b = [], c = arguments.length; c--; ) b[c] = arguments[c];
            var d = b[0], e = b[1], f = b[2], g = b[3];
            "function" == typeof b[1] && (d = (a = b)[0], f = a[1], g = a[2], e = void 0), g || (g = !1);
            for (var h = d.split(" "), i = 0; i < h.length; i += 1) for (var j = h[i], k = 0; k < this.length; k += 1) {
                var l = this[k], m = void 0;
                if (!e && l.dom7Listeners ? m = l.dom7Listeners[j] : e && l.dom7LiveListeners && (m = l.dom7LiveListeners[j]), 
                m && m.length) for (var n = m.length - 1; 0 <= n; n -= 1) {
                    var o = m[n];
                    f && o.listener === f ? (l.removeEventListener(j, o.proxyListener, g), m.splice(n, 1)) : f && o.listener && o.listener.dom7proxy && o.listener.dom7proxy === f ? (l.removeEventListener(j, o.proxyListener, g), 
                    m.splice(n, 1)) : f || (l.removeEventListener(j, o.proxyListener, g), m.splice(n, 1));
                }
            }
            return this;
        },
        trigger: function() {
            for (var c = [], d = arguments.length; d--; ) c[d] = arguments[d];
            for (var e = c[0].split(" "), f = c[1], g = 0; g < e.length; g += 1) for (var h = e[g], i = 0; i < this.length; i += 1) {
                var j = this[i], k = void 0;
                try {
                    k = new b.CustomEvent(h, {
                        detail: f,
                        bubbles: !0,
                        cancelable: !0
                    });
                } catch (c) {
                    (k = a.createEvent("Event")).initEvent(h, !0, !0), k.detail = f;
                }
                j.dom7EventData = c.filter(function(a, b) {
                    return 0 < b;
                }), j.dispatchEvent(k), j.dom7EventData = [], delete j.dom7EventData;
            }
            return this;
        },
        transitionEnd: function(a) {
            var b, c = [ "webkitTransitionEnd", "transitionend" ], d = this;
            function e(f) {
                if (f.target === this) for (a.call(this, f), b = 0; b < c.length; b += 1) d.off(c[b], e);
            }
            if (a) for (b = 0; b < c.length; b += 1) d.on(c[b], e);
            return this;
        },
        outerWidth: function(a) {
            if (0 < this.length) {
                if (a) {
                    var b = this.styles();
                    return this[0].offsetWidth + parseFloat(b.getPropertyValue("margin-right")) + parseFloat(b.getPropertyValue("margin-left"));
                }
                return this[0].offsetWidth;
            }
            return null;
        },
        outerHeight: function(a) {
            if (0 < this.length) {
                if (a) {
                    var b = this.styles();
                    return this[0].offsetHeight + parseFloat(b.getPropertyValue("margin-top")) + parseFloat(b.getPropertyValue("margin-bottom"));
                }
                return this[0].offsetHeight;
            }
            return null;
        },
        offset: function() {
            if (0 < this.length) {
                var c = this[0], d = c.getBoundingClientRect(), e = a.body, f = c.clientTop || e.clientTop || 0, g = c.clientLeft || e.clientLeft || 0, h = c === b ? b.scrollY : c.scrollTop, i = c === b ? b.scrollX : c.scrollLeft;
                return {
                    top: d.top + h - f,
                    left: d.left + i - g
                };
            }
            return null;
        },
        css: function(a, c) {
            var d;
            if (1 === arguments.length) {
                if ("string" != typeof a) {
                    for (d = 0; d < this.length; d += 1) for (var e in a) this[d].style[e] = a[e];
                    return this;
                }
                if (this[0]) return b.getComputedStyle(this[0], null).getPropertyValue(a);
            }
            if (2 === arguments.length && "string" == typeof a) {
                for (d = 0; d < this.length; d += 1) this[d].style[a] = c;
                return this;
            }
            return this;
        },
        each: function(a) {
            if (!a) return this;
            for (var b = 0; b < this.length; b += 1) if (!1 === a.call(this[b], b, this[b])) return this;
            return this;
        },
        html: function(a) {
            if (void 0 === a) return this[0] ? this[0].innerHTML : void 0;
            for (var b = 0; b < this.length; b += 1) this[b].innerHTML = a;
            return this;
        },
        text: function(a) {
            if (void 0 === a) return this[0] ? this[0].textContent.trim() : null;
            for (var b = 0; b < this.length; b += 1) this[b].textContent = a;
            return this;
        },
        is: function(e) {
            var f, g, h = this[0];
            if (!h || void 0 === e) return !1;
            if ("string" == typeof e) {
                if (h.matches) return h.matches(e);
                if (h.webkitMatchesSelector) return h.webkitMatchesSelector(e);
                if (h.msMatchesSelector) return h.msMatchesSelector(e);
                for (f = d(e), g = 0; g < f.length; g += 1) if (f[g] === h) return !0;
                return !1;
            }
            if (e === a) return h === a;
            if (e === b) return h === b;
            if (e.nodeType || e instanceof c) {
                for (f = e.nodeType ? [ e ] : e, g = 0; g < f.length; g += 1) if (f[g] === h) return !0;
                return !1;
            }
            return !1;
        },
        index: function() {
            var a, b = this[0];
            if (b) {
                for (a = 0; null !== (b = b.previousSibling); ) 1 === b.nodeType && (a += 1);
                return a;
            }
        },
        eq: function(a) {
            if (void 0 === a) return this;
            var b, d = this.length;
            return new c(d - 1 < a ? [] : a < 0 ? (b = d + a) < 0 ? [] : [ this[b] ] : [ this[a] ]);
        },
        append: function() {
            for (var b, d = [], e = arguments.length; e--; ) d[e] = arguments[e];
            for (var f = 0; f < d.length; f += 1) {
                b = d[f];
                for (var g = 0; g < this.length; g += 1) if ("string" == typeof b) {
                    var h = a.createElement("div");
                    for (h.innerHTML = b; h.firstChild; ) this[g].appendChild(h.firstChild);
                } else if (b instanceof c) for (var i = 0; i < b.length; i += 1) this[g].appendChild(b[i]); else this[g].appendChild(b);
            }
            return this;
        },
        prepend: function(b) {
            var d, e;
            for (d = 0; d < this.length; d += 1) if ("string" == typeof b) {
                var f = a.createElement("div");
                for (f.innerHTML = b, e = f.childNodes.length - 1; 0 <= e; e -= 1) this[d].insertBefore(f.childNodes[e], this[d].childNodes[0]);
            } else if (b instanceof c) for (e = 0; e < b.length; e += 1) this[d].insertBefore(b[e], this[d].childNodes[0]); else this[d].insertBefore(b, this[d].childNodes[0]);
            return this;
        },
        next: function(a) {
            return 0 < this.length ? a ? this[0].nextElementSibling && d(this[0].nextElementSibling).is(a) ? new c([ this[0].nextElementSibling ]) : new c([]) : this[0].nextElementSibling ? new c([ this[0].nextElementSibling ]) : new c([]) : new c([]);
        },
        nextAll: function(a) {
            var b = [], e = this[0];
            if (!e) return new c([]);
            for (;e.nextElementSibling; ) {
                var f = e.nextElementSibling;
                a ? d(f).is(a) && b.push(f) : b.push(f), e = f;
            }
            return new c(b);
        },
        prev: function(a) {
            if (0 < this.length) {
                var b = this[0];
                return a ? b.previousElementSibling && d(b.previousElementSibling).is(a) ? new c([ b.previousElementSibling ]) : new c([]) : b.previousElementSibling ? new c([ b.previousElementSibling ]) : new c([]);
            }
            return new c([]);
        },
        prevAll: function(a) {
            var b = [], e = this[0];
            if (!e) return new c([]);
            for (;e.previousElementSibling; ) {
                var f = e.previousElementSibling;
                a ? d(f).is(a) && b.push(f) : b.push(f), e = f;
            }
            return new c(b);
        },
        parent: function(a) {
            for (var b = [], c = 0; c < this.length; c += 1) null !== this[c].parentNode && (a ? d(this[c].parentNode).is(a) && b.push(this[c].parentNode) : b.push(this[c].parentNode));
            return d(e(b));
        },
        parents: function(a) {
            for (var b = [], c = 0; c < this.length; c += 1) for (var f = this[c].parentNode; f; ) a ? d(f).is(a) && b.push(f) : b.push(f), 
            f = f.parentNode;
            return d(e(b));
        },
        closest: function(a) {
            var b = this;
            return void 0 === a ? new c([]) : (b.is(a) || (b = b.parents(a).eq(0)), b);
        },
        find: function(a) {
            for (var b = [], d = 0; d < this.length; d += 1) for (var e = this[d].querySelectorAll(a), f = 0; f < e.length; f += 1) b.push(e[f]);
            return new c(b);
        },
        children: function(a) {
            for (var b = [], f = 0; f < this.length; f += 1) for (var g = this[f].childNodes, h = 0; h < g.length; h += 1) a ? 1 === g[h].nodeType && d(g[h]).is(a) && b.push(g[h]) : 1 === g[h].nodeType && b.push(g[h]);
            return new c(e(b));
        },
        remove: function() {
            for (var a = 0; a < this.length; a += 1) this[a].parentNode && this[a].parentNode.removeChild(this[a]);
            return this;
        },
        add: function() {
            for (var a = [], b = arguments.length; b--; ) a[b] = arguments[b];
            var c, e;
            for (c = 0; c < a.length; c += 1) {
                var f = d(a[c]);
                for (e = 0; e < f.length; e += 1) this[this.length] = f[e], this.length += 1;
            }
            return this;
        },
        styles: function() {
            return this[0] ? b.getComputedStyle(this[0], null) : {};
        }
    };
    Object.keys(f).forEach(function(a) {
        d.fn[a] = f[a];
    });
    var g, h, i, j, k = {
        deleteProps: function(a) {
            var b = a;
            Object.keys(b).forEach(function(a) {
                try {
                    b[a] = null;
                } catch (a) {}
                try {
                    delete b[a];
                } catch (a) {}
            });
        },
        nextTick: function(a, b) {
            return void 0 === b && (b = 0), setTimeout(a, b);
        },
        now: function() {
            return Date.now();
        },
        getTranslate: function(a, c) {
            var d, e, f;
            void 0 === c && (c = "x");
            var g = b.getComputedStyle(a, null);
            return b.WebKitCSSMatrix ? (6 < (e = g.transform || g.webkitTransform).split(",").length && (e = e.split(", ").map(function(a) {
                return a.replace(",", ".");
            }).join(", ")), f = new b.WebKitCSSMatrix("none" === e ? "" : e)) : d = (f = g.MozTransform || g.OTransform || g.MsTransform || g.msTransform || g.transform || g.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,")).toString().split(","), 
            "x" === c && (e = b.WebKitCSSMatrix ? f.m41 : 16 === d.length ? parseFloat(d[12]) : parseFloat(d[4])), 
            "y" === c && (e = b.WebKitCSSMatrix ? f.m42 : 16 === d.length ? parseFloat(d[13]) : parseFloat(d[5])), 
            e || 0;
        },
        parseUrlQuery: function(a) {
            var c, d, e, f, g = {}, h = a || b.location.href;
            if ("string" == typeof h && h.length) for (f = (d = (h = -1 < h.indexOf("?") ? h.replace(/\S*\?/, "") : "").split("&").filter(function(a) {
                return "" !== a;
            })).length, c = 0; c < f; c += 1) e = d[c].replace(/#\S+/g, "").split("="), g[decodeURIComponent(e[0])] = void 0 === e[1] ? void 0 : decodeURIComponent(e[1]) || "";
            return g;
        },
        isObject: function(a) {
            return "object" == typeof a && null !== a && a.constructor && a.constructor === Object;
        },
        extend: function() {
            for (var a = [], b = arguments.length; b--; ) a[b] = arguments[b];
            for (var c = Object(a[0]), d = 1; d < a.length; d += 1) {
                var e = a[d];
                if (null != e) for (var f = Object.keys(Object(e)), g = 0, h = f.length; g < h; g += 1) {
                    var i = f[g], j = Object.getOwnPropertyDescriptor(e, i);
                    void 0 !== j && j.enumerable && (k.isObject(c[i]) && k.isObject(e[i]) ? k.extend(c[i], e[i]) : !k.isObject(c[i]) && k.isObject(e[i]) ? (c[i] = {}, 
                    k.extend(c[i], e[i])) : c[i] = e[i]);
                }
            }
            return c;
        }
    }, l = (i = a.createElement("div"), {
        touch: b.Modernizr && !0 === b.Modernizr.touch || !!(0 < b.navigator.maxTouchPoints || "ontouchstart" in b || b.DocumentTouch && a instanceof b.DocumentTouch),
        pointerEvents: !!(b.navigator.pointerEnabled || b.PointerEvent || "maxTouchPoints" in b.navigator && 0 < b.navigator.maxTouchPoints),
        prefixedPointerEvents: !!b.navigator.msPointerEnabled,
        transition: (h = i.style, "transition" in h || "webkitTransition" in h || "MozTransition" in h),
        transforms3d: b.Modernizr && !0 === b.Modernizr.csstransforms3d || (g = i.style, 
        "webkitPerspective" in g || "MozPerspective" in g || "OPerspective" in g || "MsPerspective" in g || "perspective" in g),
        flexbox: function() {
            for (var a = i.style, b = "alignItems webkitAlignItems webkitBoxAlign msFlexAlign mozBoxAlign webkitFlexDirection msFlexDirection mozBoxDirection mozBoxOrient webkitBoxDirection webkitBoxOrient".split(" "), c = 0; c < b.length; c += 1) if (b[c] in a) return !0;
            return !1;
        }(),
        observer: "MutationObserver" in b || "WebkitMutationObserver" in b,
        passiveListener: function() {
            var a = !1;
            try {
                var c = Object.defineProperty({}, "passive", {
                    get: function() {
                        a = !0;
                    }
                });
                b.addEventListener("testPassiveListener", null, c);
            } catch (a) {}
            return a;
        }(),
        gestures: "ongesturestart" in b
    }), m = {
        isIE: !!b.navigator.userAgent.match(/Trident/g) || !!b.navigator.userAgent.match(/MSIE/g),
        isEdge: !!b.navigator.userAgent.match(/Edge/g),
        isSafari: (j = b.navigator.userAgent.toLowerCase(), 0 <= j.indexOf("safari") && j.indexOf("chrome") < 0 && j.indexOf("android") < 0),
        isUiWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(b.navigator.userAgent)
    }, n = function(a) {
        void 0 === a && (a = {});
        var b = this;
        b.params = a, b.eventsListeners = {}, b.params && b.params.on && Object.keys(b.params.on).forEach(function(a) {
            b.on(a, b.params.on[a]);
        });
    }, o = {
        components: {
            configurable: !0
        }
    };
    n.prototype.on = function(a, b, c) {
        var d = this;
        if ("function" != typeof b) return d;
        var e = c ? "unshift" : "push";
        return a.split(" ").forEach(function(a) {
            d.eventsListeners[a] || (d.eventsListeners[a] = []), d.eventsListeners[a][e](b);
        }), d;
    }, n.prototype.once = function(a, b, c) {
        var d = this;
        if ("function" != typeof b) return d;
        function e() {
            for (var c = [], f = arguments.length; f--; ) c[f] = arguments[f];
            b.apply(d, c), d.off(a, e), e.f7proxy && delete e.f7proxy;
        }
        return e.f7proxy = b, d.on(a, e, c);
    }, n.prototype.off = function(a, b) {
        var c = this;
        return c.eventsListeners && a.split(" ").forEach(function(a) {
            void 0 === b ? c.eventsListeners[a] = [] : c.eventsListeners[a] && c.eventsListeners[a].length && c.eventsListeners[a].forEach(function(d, e) {
                (d === b || d.f7proxy && d.f7proxy === b) && c.eventsListeners[a].splice(e, 1);
            });
        }), c;
    }, n.prototype.emit = function() {
        for (var a = [], b = arguments.length; b--; ) a[b] = arguments[b];
        var c, d, e, f = this;
        return f.eventsListeners && ("string" == typeof a[0] || Array.isArray(a[0]) ? (c = a[0], 
        d = a.slice(1, a.length), e = f) : (c = a[0].events, d = a[0].data, e = a[0].context || f), 
        (Array.isArray(c) ? c : c.split(" ")).forEach(function(a) {
            if (f.eventsListeners && f.eventsListeners[a]) {
                var b = [];
                f.eventsListeners[a].forEach(function(a) {
                    b.push(a);
                }), b.forEach(function(a) {
                    a.apply(e, d);
                });
            }
        })), f;
    }, n.prototype.useModulesParams = function(a) {
        var b = this;
        b.modules && Object.keys(b.modules).forEach(function(c) {
            var d = b.modules[c];
            d.params && k.extend(a, d.params);
        });
    }, n.prototype.useModules = function(a) {
        void 0 === a && (a = {});
        var b = this;
        b.modules && Object.keys(b.modules).forEach(function(c) {
            var d = b.modules[c], e = a[c] || {};
            d.instance && Object.keys(d.instance).forEach(function(a) {
                var c = d.instance[a];
                b[a] = "function" == typeof c ? c.bind(b) : c;
            }), d.on && b.on && Object.keys(d.on).forEach(function(a) {
                b.on(a, d.on[a]);
            }), d.create && d.create.bind(b)(e);
        });
    }, o.components.set = function(a) {
        this.use && this.use(a);
    }, n.installModule = function(a) {
        for (var b = [], c = arguments.length - 1; 0 < c--; ) b[c] = arguments[c + 1];
        var d = this;
        d.prototype.modules || (d.prototype.modules = {});
        var e = a.name || Object.keys(d.prototype.modules).length + "_" + k.now();
        return (d.prototype.modules[e] = a).proto && Object.keys(a.proto).forEach(function(b) {
            d.prototype[b] = a.proto[b];
        }), a.static && Object.keys(a.static).forEach(function(b) {
            d[b] = a.static[b];
        }), a.install && a.install.apply(d, b), d;
    }, n.use = function(a) {
        for (var b = [], c = arguments.length - 1; 0 < c--; ) b[c] = arguments[c + 1];
        var d = this;
        return Array.isArray(a) ? (a.forEach(function(a) {
            return d.installModule(a);
        }), d) : d.installModule.apply(d, [ a ].concat(b));
    }, Object.defineProperties(n, o);
    var p = {
        updateSize: function() {
            var a, b, c = this, d = c.$el;
            a = void 0 !== c.params.width ? c.params.width : d[0].clientWidth, b = void 0 !== c.params.height ? c.params.height : d[0].clientHeight, 
            0 === a && c.isHorizontal() || 0 === b && c.isVertical() || (a = a - parseInt(d.css("padding-left"), 10) - parseInt(d.css("padding-right"), 10), 
            b = b - parseInt(d.css("padding-top"), 10) - parseInt(d.css("padding-bottom"), 10), 
            k.extend(c, {
                width: a,
                height: b,
                size: c.isHorizontal() ? a : b
            }));
        },
        updateSlides: function() {
            var a = this, c = a.params, d = a.$wrapperEl, e = a.size, f = a.rtlTranslate, g = a.wrongRTL, h = a.virtual && c.virtual.enabled, i = h ? a.virtual.slides.length : a.slides.length, j = d.children("." + a.params.slideClass), m = h ? a.virtual.slides.length : j.length, n = [], o = [], p = [], q = c.slidesOffsetBefore;
            "function" == typeof q && (q = c.slidesOffsetBefore.call(a));
            var r = c.slidesOffsetAfter;
            "function" == typeof r && (r = c.slidesOffsetAfter.call(a));
            var s = a.snapGrid.length, t = a.snapGrid.length, u = c.spaceBetween, v = -q, w = 0, x = 0;
            if (void 0 !== e) {
                var y, z;
                "string" == typeof u && 0 <= u.indexOf("%") && (u = parseFloat(u.replace("%", "")) / 100 * e), 
                a.virtualSize = -u, f ? j.css({
                    marginLeft: "",
                    marginTop: ""
                }) : j.css({
                    marginRight: "",
                    marginBottom: ""
                }), 1 < c.slidesPerColumn && (y = Math.floor(m / c.slidesPerColumn) === m / a.params.slidesPerColumn ? m : Math.ceil(m / c.slidesPerColumn) * c.slidesPerColumn, 
                "auto" !== c.slidesPerView && "row" === c.slidesPerColumnFill && (y = Math.max(y, c.slidesPerView * c.slidesPerColumn)));
                for (var A, B = c.slidesPerColumn, C = y / B, D = Math.floor(m / c.slidesPerColumn), E = 0; E < m; E += 1) {
                    z = 0;
                    var F = j.eq(E);
                    if (1 < c.slidesPerColumn) {
                        var G = void 0, H = void 0, I = void 0;
                        "column" === c.slidesPerColumnFill ? (I = E - (H = Math.floor(E / B)) * B, (D < H || H === D && I === B - 1) && B <= (I += 1) && (I = 0, 
                        H += 1), G = H + I * y / B, F.css({
                            "-webkit-box-ordinal-group": G,
                            "-moz-box-ordinal-group": G,
                            "-ms-flex-order": G,
                            "-webkit-order": G,
                            order: G
                        })) : H = E - (I = Math.floor(E / C)) * C, F.css("margin-" + (a.isHorizontal() ? "top" : "left"), 0 !== I && c.spaceBetween && c.spaceBetween + "px").attr("data-swiper-column", H).attr("data-swiper-row", I);
                    }
                    if ("none" !== F.css("display")) {
                        if ("auto" === c.slidesPerView) {
                            var J = b.getComputedStyle(F[0], null), K = F[0].style.transform, L = F[0].style.webkitTransform;
                            if (K && (F[0].style.transform = "none"), L && (F[0].style.webkitTransform = "none"), 
                            c.roundLengths) z = a.isHorizontal() ? F.outerWidth(!0) : F.outerHeight(!0); else if (a.isHorizontal()) {
                                var M = parseFloat(J.getPropertyValue("width")), N = parseFloat(J.getPropertyValue("padding-left")), O = parseFloat(J.getPropertyValue("padding-right")), P = parseFloat(J.getPropertyValue("margin-left")), Q = parseFloat(J.getPropertyValue("margin-right")), R = J.getPropertyValue("box-sizing");
                                z = R && "border-box" === R ? M + P + Q : M + N + O + P + Q;
                            } else {
                                var S = parseFloat(J.getPropertyValue("height")), T = parseFloat(J.getPropertyValue("padding-top")), U = parseFloat(J.getPropertyValue("padding-bottom")), V = parseFloat(J.getPropertyValue("margin-top")), W = parseFloat(J.getPropertyValue("margin-bottom")), X = J.getPropertyValue("box-sizing");
                                z = X && "border-box" === X ? S + V + W : S + T + U + V + W;
                            }
                            K && (F[0].style.transform = K), L && (F[0].style.webkitTransform = L), c.roundLengths && (z = Math.floor(z));
                        } else z = (e - (c.slidesPerView - 1) * u) / c.slidesPerView, c.roundLengths && (z = Math.floor(z)), 
                        j[E] && (a.isHorizontal() ? j[E].style.width = z + "px" : j[E].style.height = z + "px");
                        j[E] && (j[E].swiperSlideSize = z), p.push(z), c.centeredSlides ? (v = v + z / 2 + w / 2 + u, 
                        0 === w && 0 !== E && (v = v - e / 2 - u), 0 === E && (v = v - e / 2 - u), Math.abs(v) < .001 && (v = 0), 
                        c.roundLengths && (v = Math.floor(v)), x % c.slidesPerGroup == 0 && n.push(v), o.push(v)) : (c.roundLengths && (v = Math.floor(v)), 
                        x % c.slidesPerGroup == 0 && n.push(v), o.push(v), v = v + z + u), a.virtualSize += z + u, 
                        w = z, x += 1;
                    }
                }
                if (a.virtualSize = Math.max(a.virtualSize, e) + r, f && g && ("slide" === c.effect || "coverflow" === c.effect) && d.css({
                    width: a.virtualSize + c.spaceBetween + "px"
                }), l.flexbox && !c.setWrapperSize || (a.isHorizontal() ? d.css({
                    width: a.virtualSize + c.spaceBetween + "px"
                }) : d.css({
                    height: a.virtualSize + c.spaceBetween + "px"
                })), 1 < c.slidesPerColumn && (a.virtualSize = (z + c.spaceBetween) * y, a.virtualSize = Math.ceil(a.virtualSize / c.slidesPerColumn) - c.spaceBetween, 
                a.isHorizontal() ? d.css({
                    width: a.virtualSize + c.spaceBetween + "px"
                }) : d.css({
                    height: a.virtualSize + c.spaceBetween + "px"
                }), c.centeredSlides)) {
                    A = [];
                    for (var Y = 0; Y < n.length; Y += 1) {
                        var Z = n[Y];
                        c.roundLengths && (Z = Math.floor(Z)), n[Y] < a.virtualSize + n[0] && A.push(Z);
                    }
                    n = A;
                }
                if (!c.centeredSlides) {
                    A = [];
                    for (var $ = 0; $ < n.length; $ += 1) {
                        var _ = n[$];
                        c.roundLengths && (_ = Math.floor(_)), n[$] <= a.virtualSize - e && A.push(_);
                    }
                    n = A, 1 < Math.floor(a.virtualSize - e) - Math.floor(n[n.length - 1]) && n.push(a.virtualSize - e);
                }
                if (0 === n.length && (n = [ 0 ]), 0 !== c.spaceBetween && (a.isHorizontal() ? f ? j.css({
                    marginLeft: u + "px"
                }) : j.css({
                    marginRight: u + "px"
                }) : j.css({
                    marginBottom: u + "px"
                })), c.centerInsufficientSlides) {
                    var ab = 0;
                    if (p.forEach(function(a) {
                        ab += a + (c.spaceBetween ? c.spaceBetween : 0);
                    }), (ab -= c.spaceBetween) < e) {
                        var bb = (e - ab) / 2;
                        n.forEach(function(a, b) {
                            n[b] = a - bb;
                        }), o.forEach(function(a, b) {
                            o[b] = a + bb;
                        });
                    }
                }
                k.extend(a, {
                    slides: j,
                    snapGrid: n,
                    slidesGrid: o,
                    slidesSizesGrid: p
                }), m !== i && a.emit("slidesLengthChange"), n.length !== s && (a.params.watchOverflow && a.checkOverflow(), 
                a.emit("snapGridLengthChange")), o.length !== t && a.emit("slidesGridLengthChange"), 
                (c.watchSlidesProgress || c.watchSlidesVisibility) && a.updateSlidesOffset();
            }
        },
        updateAutoHeight: function(a) {
            var b, c = this, d = [], e = 0;
            if ("number" == typeof a ? c.setTransition(a) : !0 === a && c.setTransition(c.params.speed), 
            "auto" !== c.params.slidesPerView && 1 < c.params.slidesPerView) for (b = 0; b < Math.ceil(c.params.slidesPerView); b += 1) {
                var f = c.activeIndex + b;
                if (f > c.slides.length) break;
                d.push(c.slides.eq(f)[0]);
            } else d.push(c.slides.eq(c.activeIndex)[0]);
            for (b = 0; b < d.length; b += 1) if (void 0 !== d[b]) {
                var g = d[b].offsetHeight;
                e = e < g ? g : e;
            }
            e && c.$wrapperEl.css("height", e + "px");
        },
        updateSlidesOffset: function() {
            for (var a = this.slides, b = 0; b < a.length; b += 1) a[b].swiperSlideOffset = this.isHorizontal() ? a[b].offsetLeft : a[b].offsetTop;
        },
        updateSlidesProgress: function(a) {
            void 0 === a && (a = this && this.translate || 0);
            var b = this, c = b.params, e = b.slides, f = b.rtlTranslate;
            if (0 !== e.length) {
                void 0 === e[0].swiperSlideOffset && b.updateSlidesOffset();
                var g = -a;
                f && (g = a), e.removeClass(c.slideVisibleClass), b.visibleSlidesIndexes = [], b.visibleSlides = [];
                for (var h = 0; h < e.length; h += 1) {
                    var i = e[h], j = (g + (c.centeredSlides ? b.minTranslate() : 0) - i.swiperSlideOffset) / (i.swiperSlideSize + c.spaceBetween);
                    if (c.watchSlidesVisibility) {
                        var k = -(g - i.swiperSlideOffset), l = k + b.slidesSizesGrid[h];
                        (0 <= k && k < b.size || 0 < l && l <= b.size || k <= 0 && l >= b.size) && (b.visibleSlides.push(i), 
                        b.visibleSlidesIndexes.push(h), e.eq(h).addClass(c.slideVisibleClass));
                    }
                    i.progress = f ? -j : j;
                }
                b.visibleSlides = d(b.visibleSlides);
            }
        },
        updateProgress: function(a) {
            void 0 === a && (a = this && this.translate || 0);
            var b = this, c = b.params, d = b.maxTranslate() - b.minTranslate(), e = b.progress, f = b.isBeginning, g = b.isEnd, h = f, i = g;
            0 === d ? g = f = !(e = 0) : (f = (e = (a - b.minTranslate()) / d) <= 0, g = 1 <= e), 
            k.extend(b, {
                progress: e,
                isBeginning: f,
                isEnd: g
            }), (c.watchSlidesProgress || c.watchSlidesVisibility) && b.updateSlidesProgress(a), 
            f && !h && b.emit("reachBeginning toEdge"), g && !i && b.emit("reachEnd toEdge"), 
            (h && !f || i && !g) && b.emit("fromEdge"), b.emit("progress", e);
        },
        updateSlidesClasses: function() {
            var a, b = this, c = b.slides, d = b.params, e = b.$wrapperEl, f = b.activeIndex, g = b.realIndex, h = b.virtual && d.virtual.enabled;
            c.removeClass(d.slideActiveClass + " " + d.slideNextClass + " " + d.slidePrevClass + " " + d.slideDuplicateActiveClass + " " + d.slideDuplicateNextClass + " " + d.slideDuplicatePrevClass), 
            (a = h ? b.$wrapperEl.find("." + d.slideClass + '[data-swiper-slide-index="' + f + '"]') : c.eq(f)).addClass(d.slideActiveClass), 
            d.loop && (a.hasClass(d.slideDuplicateClass) ? e.children("." + d.slideClass + ":not(." + d.slideDuplicateClass + ')[data-swiper-slide-index="' + g + '"]').addClass(d.slideDuplicateActiveClass) : e.children("." + d.slideClass + "." + d.slideDuplicateClass + '[data-swiper-slide-index="' + g + '"]').addClass(d.slideDuplicateActiveClass));
            var i = a.nextAll("." + d.slideClass).eq(0).addClass(d.slideNextClass);
            d.loop && 0 === i.length && (i = c.eq(0)).addClass(d.slideNextClass);
            var j = a.prevAll("." + d.slideClass).eq(0).addClass(d.slidePrevClass);
            d.loop && 0 === j.length && (j = c.eq(-1)).addClass(d.slidePrevClass), d.loop && (i.hasClass(d.slideDuplicateClass) ? e.children("." + d.slideClass + ":not(." + d.slideDuplicateClass + ')[data-swiper-slide-index="' + i.attr("data-swiper-slide-index") + '"]').addClass(d.slideDuplicateNextClass) : e.children("." + d.slideClass + "." + d.slideDuplicateClass + '[data-swiper-slide-index="' + i.attr("data-swiper-slide-index") + '"]').addClass(d.slideDuplicateNextClass), 
            j.hasClass(d.slideDuplicateClass) ? e.children("." + d.slideClass + ":not(." + d.slideDuplicateClass + ')[data-swiper-slide-index="' + j.attr("data-swiper-slide-index") + '"]').addClass(d.slideDuplicatePrevClass) : e.children("." + d.slideClass + "." + d.slideDuplicateClass + '[data-swiper-slide-index="' + j.attr("data-swiper-slide-index") + '"]').addClass(d.slideDuplicatePrevClass));
        },
        updateActiveIndex: function(a) {
            var b, c = this, d = c.rtlTranslate ? c.translate : -c.translate, e = c.slidesGrid, f = c.snapGrid, g = c.params, h = c.activeIndex, i = c.realIndex, j = c.snapIndex, l = a;
            if (void 0 === l) {
                for (var m = 0; m < e.length; m += 1) void 0 !== e[m + 1] ? d >= e[m] && d < e[m + 1] - (e[m + 1] - e[m]) / 2 ? l = m : d >= e[m] && d < e[m + 1] && (l = m + 1) : d >= e[m] && (l = m);
                g.normalizeSlideIndex && (l < 0 || void 0 === l) && (l = 0);
            }
            if ((b = 0 <= f.indexOf(d) ? f.indexOf(d) : Math.floor(l / g.slidesPerGroup)) >= f.length && (b = f.length - 1), 
            l !== h) {
                var n = parseInt(c.slides.eq(l).attr("data-swiper-slide-index") || l, 10);
                k.extend(c, {
                    snapIndex: b,
                    realIndex: n,
                    previousIndex: h,
                    activeIndex: l
                }), c.emit("activeIndexChange"), c.emit("snapIndexChange"), i !== n && c.emit("realIndexChange"), 
                c.emit("slideChange");
            } else b !== j && (c.snapIndex = b, c.emit("snapIndexChange"));
        },
        updateClickedSlide: function(a) {
            var b = this, c = b.params, e = d(a.target).closest("." + c.slideClass)[0], f = !1;
            if (e) for (var g = 0; g < b.slides.length; g += 1) b.slides[g] === e && (f = !0);
            if (!e || !f) return b.clickedSlide = void 0, void (b.clickedIndex = void 0);
            b.clickedSlide = e, b.virtual && b.params.virtual.enabled ? b.clickedIndex = parseInt(d(e).attr("data-swiper-slide-index"), 10) : b.clickedIndex = d(e).index(), 
            c.slideToClickedSlide && void 0 !== b.clickedIndex && b.clickedIndex !== b.activeIndex && b.slideToClickedSlide();
        }
    };
    var q = {
        getTranslate: function(a) {
            void 0 === a && (a = this.isHorizontal() ? "x" : "y");
            var b = this.params, c = this.rtlTranslate, d = this.translate, e = this.$wrapperEl;
            if (b.virtualTranslate) return c ? -d : d;
            var f = k.getTranslate(e[0], a);
            return c && (f = -f), f || 0;
        },
        setTranslate: function(a, b) {
            var c = this, d = c.rtlTranslate, e = c.params, f = c.$wrapperEl, g = c.progress, h = 0, i = 0;
            c.isHorizontal() ? h = d ? -a : a : i = a, e.roundLengths && (h = Math.floor(h), 
            i = Math.floor(i)), e.virtualTranslate || (l.transforms3d ? f.transform("translate3d(" + h + "px, " + i + "px, 0px)") : f.transform("translate(" + h + "px, " + i + "px)")), 
            c.previousTranslate = c.translate, c.translate = c.isHorizontal() ? h : i;
            var j = c.maxTranslate() - c.minTranslate();
            (0 === j ? 0 : (a - c.minTranslate()) / j) !== g && c.updateProgress(a), c.emit("setTranslate", c.translate, b);
        },
        minTranslate: function() {
            return -this.snapGrid[0];
        },
        maxTranslate: function() {
            return -this.snapGrid[this.snapGrid.length - 1];
        }
    };
    var r = {
        setTransition: function(a, b) {
            this.$wrapperEl.transition(a), this.emit("setTransition", a, b);
        },
        transitionStart: function(a, b) {
            void 0 === a && (a = !0);
            var c = this, d = c.activeIndex, e = c.params, f = c.previousIndex;
            e.autoHeight && c.updateAutoHeight();
            var g = b;
            if (g || (g = f < d ? "next" : d < f ? "prev" : "reset"), c.emit("transitionStart"), 
            a && d !== f) {
                if ("reset" === g) return void c.emit("slideResetTransitionStart");
                c.emit("slideChangeTransitionStart"), "next" === g ? c.emit("slideNextTransitionStart") : c.emit("slidePrevTransitionStart");
            }
        },
        transitionEnd: function(a, b) {
            void 0 === a && (a = !0);
            var c = this, d = c.activeIndex, e = c.previousIndex;
            c.animating = !1, c.setTransition(0);
            var f = b;
            if (f || (f = e < d ? "next" : d < e ? "prev" : "reset"), c.emit("transitionEnd"), 
            a && d !== e) {
                if ("reset" === f) return void c.emit("slideResetTransitionEnd");
                c.emit("slideChangeTransitionEnd"), "next" === f ? c.emit("slideNextTransitionEnd") : c.emit("slidePrevTransitionEnd");
            }
        }
    };
    var s = {
        slideTo: function(a, b, c, d) {
            void 0 === a && (a = 0), void 0 === b && (b = this.params.speed), void 0 === c && (c = !0);
            var e = this, f = a;
            f < 0 && (f = 0);
            var g = e.params, h = e.snapGrid, i = e.slidesGrid, j = e.previousIndex, k = e.activeIndex, m = e.rtlTranslate;
            if (e.animating && g.preventInteractionOnTransition) return !1;
            var n = Math.floor(f / g.slidesPerGroup);
            n >= h.length && (n = h.length - 1), (k || g.initialSlide || 0) === (j || 0) && c && e.emit("beforeSlideChangeStart");
            var o, p = -h[n];
            if (e.updateProgress(p), g.normalizeSlideIndex) for (var q = 0; q < i.length; q += 1) -Math.floor(100 * p) >= Math.floor(100 * i[q]) && (f = q);
            if (e.initialized && f !== k) {
                if (!e.allowSlideNext && p < e.translate && p < e.minTranslate()) return !1;
                if (!e.allowSlidePrev && p > e.translate && p > e.maxTranslate() && (k || 0) !== f) return !1;
            }
            return o = k < f ? "next" : f < k ? "prev" : "reset", m && -p === e.translate || !m && p === e.translate ? (e.updateActiveIndex(f), 
            g.autoHeight && e.updateAutoHeight(), e.updateSlidesClasses(), "slide" !== g.effect && e.setTranslate(p), 
            "reset" !== o && (e.transitionStart(c, o), e.transitionEnd(c, o)), !1) : (0 !== b && l.transition ? (e.setTransition(b), 
            e.setTranslate(p), e.updateActiveIndex(f), e.updateSlidesClasses(), e.emit("beforeTransitionStart", b, d), 
            e.transitionStart(c, o), e.animating || (e.animating = !0, e.onSlideToWrapperTransitionEnd || (e.onSlideToWrapperTransitionEnd = function(a) {
                e && !e.destroyed && a.target === this && (e.$wrapperEl[0].removeEventListener("transitionend", e.onSlideToWrapperTransitionEnd), 
                e.$wrapperEl[0].removeEventListener("webkitTransitionEnd", e.onSlideToWrapperTransitionEnd), 
                e.onSlideToWrapperTransitionEnd = null, delete e.onSlideToWrapperTransitionEnd, 
                e.transitionEnd(c, o));
            }), e.$wrapperEl[0].addEventListener("transitionend", e.onSlideToWrapperTransitionEnd), 
            e.$wrapperEl[0].addEventListener("webkitTransitionEnd", e.onSlideToWrapperTransitionEnd))) : (e.setTransition(0), 
            e.setTranslate(p), e.updateActiveIndex(f), e.updateSlidesClasses(), e.emit("beforeTransitionStart", b, d), 
            e.transitionStart(c, o), e.transitionEnd(c, o)), !0);
        },
        slideToLoop: function(a, b, c, d) {
            void 0 === a && (a = 0), void 0 === b && (b = this.params.speed), void 0 === c && (c = !0);
            var e = a;
            return this.params.loop && (e += this.loopedSlides), this.slideTo(e, b, c, d);
        },
        slideNext: function(a, b, c) {
            void 0 === a && (a = this.params.speed), void 0 === b && (b = !0);
            var d = this, e = d.params, f = d.animating;
            return e.loop ? !f && (d.loopFix(), d._clientLeft = d.$wrapperEl[0].clientLeft, 
            d.slideTo(d.activeIndex + e.slidesPerGroup, a, b, c)) : d.slideTo(d.activeIndex + e.slidesPerGroup, a, b, c);
        },
        slidePrev: function(a, b, c) {
            void 0 === a && (a = this.params.speed), void 0 === b && (b = !0);
            var d = this, e = d.params, f = d.animating, g = d.snapGrid, h = d.slidesGrid, i = d.rtlTranslate;
            if (e.loop) {
                if (f) return !1;
                d.loopFix(), d._clientLeft = d.$wrapperEl[0].clientLeft;
            }
            function j(a) {
                return a < 0 ? -Math.floor(Math.abs(a)) : Math.floor(a);
            }
            var k, l = j(i ? d.translate : -d.translate), m = g.map(function(a) {
                return j(a);
            }), n = (h.map(function(a) {
                return j(a);
            }), g[m.indexOf(l)], g[m.indexOf(l) - 1]);
            return void 0 !== n && (k = h.indexOf(n)) < 0 && (k = d.activeIndex - 1), d.slideTo(k, a, b, c);
        },
        slideReset: function(a, b, c) {
            return void 0 === a && (a = this.params.speed), void 0 === b && (b = !0), this.slideTo(this.activeIndex, a, b, c);
        },
        slideToClosest: function(a, b, c) {
            void 0 === a && (a = this.params.speed), void 0 === b && (b = !0);
            var d = this, e = d.activeIndex, f = Math.floor(e / d.params.slidesPerGroup);
            if (f < d.snapGrid.length - 1) {
                var g = d.rtlTranslate ? d.translate : -d.translate, h = d.snapGrid[f];
                (d.snapGrid[f + 1] - h) / 2 < g - h && (e = d.params.slidesPerGroup);
            }
            return d.slideTo(e, a, b, c);
        },
        slideToClickedSlide: function() {
            var a, b = this, c = b.params, e = b.$wrapperEl, f = "auto" === c.slidesPerView ? b.slidesPerViewDynamic() : c.slidesPerView, g = b.clickedIndex;
            if (c.loop) {
                if (b.animating) return;
                a = parseInt(d(b.clickedSlide).attr("data-swiper-slide-index"), 10), c.centeredSlides ? g < b.loopedSlides - f / 2 || g > b.slides.length - b.loopedSlides + f / 2 ? (b.loopFix(), 
                g = e.children("." + c.slideClass + '[data-swiper-slide-index="' + a + '"]:not(.' + c.slideDuplicateClass + ")").eq(0).index(), 
                k.nextTick(function() {
                    b.slideTo(g);
                })) : b.slideTo(g) : g > b.slides.length - f ? (b.loopFix(), g = e.children("." + c.slideClass + '[data-swiper-slide-index="' + a + '"]:not(.' + c.slideDuplicateClass + ")").eq(0).index(), 
                k.nextTick(function() {
                    b.slideTo(g);
                })) : b.slideTo(g);
            } else b.slideTo(g);
        }
    };
    var t = {
        loopCreate: function() {
            var b = this, c = b.params, e = b.$wrapperEl;
            e.children("." + c.slideClass + "." + c.slideDuplicateClass).remove();
            var f = e.children("." + c.slideClass);
            if (c.loopFillGroupWithBlank) {
                var g = c.slidesPerGroup - f.length % c.slidesPerGroup;
                if (g !== c.slidesPerGroup) {
                    for (var h = 0; h < g; h += 1) {
                        var i = d(a.createElement("div")).addClass(c.slideClass + " " + c.slideBlankClass);
                        e.append(i);
                    }
                    f = e.children("." + c.slideClass);
                }
            }
            "auto" !== c.slidesPerView || c.loopedSlides || (c.loopedSlides = f.length), b.loopedSlides = parseInt(c.loopedSlides || c.slidesPerView, 10), 
            b.loopedSlides += c.loopAdditionalSlides, b.loopedSlides > f.length && (b.loopedSlides = f.length);
            var j = [], k = [];
            f.each(function(a, c) {
                var e = d(c);
                a < b.loopedSlides && k.push(c), a < f.length && a >= f.length - b.loopedSlides && j.push(c), 
                e.attr("data-swiper-slide-index", a);
            });
            for (var l = 0; l < k.length; l += 1) e.append(d(k[l].cloneNode(!0)).addClass(c.slideDuplicateClass));
            for (var m = j.length - 1; 0 <= m; m -= 1) e.prepend(d(j[m].cloneNode(!0)).addClass(c.slideDuplicateClass));
        },
        loopFix: function() {
            var a, b = this, c = b.params, d = b.activeIndex, e = b.slides, f = b.loopedSlides, g = b.allowSlidePrev, h = b.allowSlideNext, i = b.snapGrid, j = b.rtlTranslate;
            b.allowSlidePrev = !0, b.allowSlideNext = !0;
            var k = -i[d] - b.getTranslate();
            d < f ? (a = e.length - 3 * f + d, a += f, b.slideTo(a, 0, !1, !0) && 0 !== k && b.setTranslate((j ? -b.translate : b.translate) - k)) : ("auto" === c.slidesPerView && 2 * f <= d || d >= e.length - f) && (a = -e.length + d + f, 
            a += f, b.slideTo(a, 0, !1, !0) && 0 !== k && b.setTranslate((j ? -b.translate : b.translate) - k));
            b.allowSlidePrev = g, b.allowSlideNext = h;
        },
        loopDestroy: function() {
            var a = this.$wrapperEl, b = this.params, c = this.slides;
            a.children("." + b.slideClass + "." + b.slideDuplicateClass + ",." + b.slideClass + "." + b.slideBlankClass).remove(), 
            c.removeAttr("data-swiper-slide-index");
        }
    };
    var u = {
        setGrabCursor: function(a) {
            if (!(l.touch || !this.params.simulateTouch || this.params.watchOverflow && this.isLocked)) {
                var b = this.el;
                b.style.cursor = "move", b.style.cursor = a ? "-webkit-grabbing" : "-webkit-grab", 
                b.style.cursor = a ? "-moz-grabbin" : "-moz-grab", b.style.cursor = a ? "grabbing" : "grab";
            }
        },
        unsetGrabCursor: function() {
            l.touch || this.params.watchOverflow && this.isLocked || (this.el.style.cursor = "");
        }
    };
    var v = {
        appendSlide: function(a) {
            var b = this, c = b.$wrapperEl, d = b.params;
            if (d.loop && b.loopDestroy(), "object" == typeof a && "length" in a) for (var e = 0; e < a.length; e += 1) a[e] && c.append(a[e]); else c.append(a);
            d.loop && b.loopCreate(), d.observer && l.observer || b.update();
        },
        prependSlide: function(a) {
            var b = this, c = b.params, d = b.$wrapperEl, e = b.activeIndex;
            c.loop && b.loopDestroy();
            var f = e + 1;
            if ("object" == typeof a && "length" in a) {
                for (var g = 0; g < a.length; g += 1) a[g] && d.prepend(a[g]);
                f = e + a.length;
            } else d.prepend(a);
            c.loop && b.loopCreate(), c.observer && l.observer || b.update(), b.slideTo(f, 0, !1);
        },
        addSlide: function(a, b) {
            var c = this, d = c.$wrapperEl, e = c.params, f = c.activeIndex;
            e.loop && (f -= c.loopedSlides, c.loopDestroy(), c.slides = d.children("." + e.slideClass));
            var g = c.slides.length;
            if (a <= 0) c.prependSlide(b); else if (g <= a) c.appendSlide(b); else {
                for (var h = a < f ? f + 1 : f, i = [], j = g - 1; a <= j; j -= 1) {
                    var k = c.slides.eq(j);
                    k.remove(), i.unshift(k);
                }
                if ("object" == typeof b && "length" in b) {
                    for (var m = 0; m < b.length; m += 1) b[m] && d.append(b[m]);
                    h = a < f ? f + b.length : f;
                } else d.append(b);
                for (var n = 0; n < i.length; n += 1) d.append(i[n]);
                e.loop && c.loopCreate(), e.observer && l.observer || c.update(), e.loop ? c.slideTo(h + c.loopedSlides, 0, !1) : c.slideTo(h, 0, !1);
            }
        },
        removeSlide: function(a) {
            var b = this, c = b.params, d = b.$wrapperEl, e = b.activeIndex;
            c.loop && (e -= b.loopedSlides, b.loopDestroy(), b.slides = d.children("." + c.slideClass));
            var f, g = e;
            if ("object" == typeof a && "length" in a) {
                for (var h = 0; h < a.length; h += 1) f = a[h], b.slides[f] && b.slides.eq(f).remove(), 
                f < g && (g -= 1);
                g = Math.max(g, 0);
            } else f = a, b.slides[f] && b.slides.eq(f).remove(), f < g && (g -= 1), g = Math.max(g, 0);
            c.loop && b.loopCreate(), c.observer && l.observer || b.update(), c.loop ? b.slideTo(g + b.loopedSlides, 0, !1) : b.slideTo(g, 0, !1);
        },
        removeAllSlides: function() {
            for (var a = [], b = 0; b < this.slides.length; b += 1) a.push(b);
            this.removeSlide(a);
        }
    }, w = function() {
        var c = b.navigator.userAgent, d = {
            ios: !1,
            android: !1,
            androidChrome: !1,
            desktop: !1,
            windows: !1,
            iphone: !1,
            ipod: !1,
            ipad: !1,
            cordova: b.cordova || b.phonegap,
            phonegap: b.cordova || b.phonegap
        }, e = c.match(/(Windows Phone);?[\s\/]+([\d.]+)?/), f = c.match(/(Android);?[\s\/]+([\d.]+)?/), g = c.match(/(iPad).*OS\s([\d_]+)/), h = c.match(/(iPod)(.*OS\s([\d_]+))?/), i = !g && c.match(/(iPhone\sOS|iOS)\s([\d_]+)/);
        if (e && (d.os = "windows", d.osVersion = e[2], d.windows = !0), f && !e && (d.os = "android", 
        d.osVersion = f[2], d.android = !0, d.androidChrome = 0 <= c.toLowerCase().indexOf("chrome")), 
        (g || i || h) && (d.os = "ios", d.ios = !0), i && !h && (d.osVersion = i[2].replace(/_/g, "."), 
        d.iphone = !0), g && (d.osVersion = g[2].replace(/_/g, "."), d.ipad = !0), h && (d.osVersion = h[3] ? h[3].replace(/_/g, ".") : null, 
        d.iphone = !0), d.ios && d.osVersion && 0 <= c.indexOf("Version/") && "10" === d.osVersion.split(".")[0] && (d.osVersion = c.toLowerCase().split("version/")[1].split(" ")[0]), 
        d.desktop = !(d.os || d.android || d.webView), d.webView = (i || g || h) && c.match(/.*AppleWebKit(?!.*Safari)/i), 
        d.os && "ios" === d.os) {
            var j = d.osVersion.split("."), k = a.querySelector('meta[name="viewport"]');
            d.minimalUi = !d.webView && (h || i) && (1 * j[0] == 7 ? 1 <= 1 * j[1] : 7 < 1 * j[0]) && k && 0 <= k.getAttribute("content").indexOf("minimal-ui");
        }
        return d.pixelRatio = b.devicePixelRatio || 1, d;
    }();
    function x() {
        var a = this, b = a.params, c = a.el;
        if (!c || 0 !== c.offsetWidth) {
            b.breakpoints && a.setBreakpoint();
            var d = a.allowSlideNext, e = a.allowSlidePrev, f = a.snapGrid;
            if (a.allowSlideNext = !0, a.allowSlidePrev = !0, a.updateSize(), a.updateSlides(), 
            b.freeMode) {
                var g = Math.min(Math.max(a.translate, a.maxTranslate()), a.minTranslate());
                a.setTranslate(g), a.updateActiveIndex(), a.updateSlidesClasses(), b.autoHeight && a.updateAutoHeight();
            } else a.updateSlidesClasses(), ("auto" === b.slidesPerView || 1 < b.slidesPerView) && a.isEnd && !a.params.centeredSlides ? a.slideTo(a.slides.length - 1, 0, !1, !0) : a.slideTo(a.activeIndex, 0, !1, !0);
            a.allowSlidePrev = e, a.allowSlideNext = d, a.params.watchOverflow && f !== a.snapGrid && a.checkOverflow();
        }
    }
    var y = {
        init: !0,
        direction: "horizontal",
        touchEventsTarget: "container",
        initialSlide: 0,
        speed: 300,
        preventInteractionOnTransition: !1,
        edgeSwipeDetection: !1,
        edgeSwipeThreshold: 20,
        freeMode: !1,
        freeModeMomentum: !0,
        freeModeMomentumRatio: 1,
        freeModeMomentumBounce: !0,
        freeModeMomentumBounceRatio: 1,
        freeModeMomentumVelocityRatio: 1,
        freeModeSticky: !1,
        freeModeMinimumVelocity: .02,
        autoHeight: !1,
        setWrapperSize: !1,
        virtualTranslate: !1,
        effect: "slide",
        breakpoints: void 0,
        breakpointsInverse: !1,
        spaceBetween: 0,
        slidesPerView: 1,
        slidesPerColumn: 1,
        slidesPerColumnFill: "column",
        slidesPerGroup: 1,
        centeredSlides: !1,
        slidesOffsetBefore: 0,
        slidesOffsetAfter: 0,
        normalizeSlideIndex: !0,
        centerInsufficientSlides: !1,
        watchOverflow: !1,
        roundLengths: !1,
        touchRatio: 1,
        touchAngle: 45,
        simulateTouch: !0,
        shortSwipes: !0,
        longSwipes: !0,
        longSwipesRatio: .5,
        longSwipesMs: 300,
        followFinger: !0,
        allowTouchMove: !0,
        threshold: 0,
        touchMoveStopPropagation: !0,
        touchStartPreventDefault: !0,
        touchStartForcePreventDefault: !1,
        touchReleaseOnEdges: !1,
        uniqueNavElements: !0,
        resistance: !0,
        resistanceRatio: .85,
        watchSlidesProgress: !1,
        watchSlidesVisibility: !1,
        grabCursor: !1,
        preventClicks: !0,
        preventClicksPropagation: !0,
        slideToClickedSlide: !1,
        preloadImages: !0,
        updateOnImagesReady: !0,
        loop: !1,
        loopAdditionalSlides: 0,
        loopedSlides: null,
        loopFillGroupWithBlank: !1,
        allowSlidePrev: !0,
        allowSlideNext: !0,
        swipeHandler: null,
        noSwiping: !0,
        noSwipingClass: "swiper-no-swiping",
        noSwipingSelector: null,
        passiveListeners: !0,
        containerModifierClass: "swiper-container-",
        slideClass: "swiper-slide",
        slideBlankClass: "swiper-slide-invisible-blank",
        slideActiveClass: "swiper-slide-active",
        slideDuplicateActiveClass: "swiper-slide-duplicate-active",
        slideVisibleClass: "swiper-slide-visible",
        slideDuplicateClass: "swiper-slide-duplicate",
        slideNextClass: "swiper-slide-next",
        slideDuplicateNextClass: "swiper-slide-duplicate-next",
        slidePrevClass: "swiper-slide-prev",
        slideDuplicatePrevClass: "swiper-slide-duplicate-prev",
        wrapperClass: "swiper-wrapper",
        runCallbacksOnInit: !0
    }, z = {
        update: p,
        translate: q,
        transition: r,
        slide: s,
        loop: t,
        grabCursor: u,
        manipulation: v,
        events: {
            attachEvents: function() {
                var c = this, e = c.params, f = c.touchEvents, g = c.el, h = c.wrapperEl;
                c.onTouchStart = function(c) {
                    var e = this, f = e.touchEventsData, g = e.params, h = e.touches;
                    if (!e.animating || !g.preventInteractionOnTransition) {
                        var i = c;
                        if (i.originalEvent && (i = i.originalEvent), f.isTouchEvent = "touchstart" === i.type, 
                        (f.isTouchEvent || !("which" in i) || 3 !== i.which) && !(!f.isTouchEvent && "button" in i && 0 < i.button || f.isTouched && f.isMoved)) if (g.noSwiping && d(i.target).closest(g.noSwipingSelector ? g.noSwipingSelector : "." + g.noSwipingClass)[0]) e.allowClick = !0; else if (!g.swipeHandler || d(i).closest(g.swipeHandler)[0]) {
                            h.currentX = "touchstart" === i.type ? i.targetTouches[0].pageX : i.pageX, h.currentY = "touchstart" === i.type ? i.targetTouches[0].pageY : i.pageY;
                            var j = h.currentX, l = h.currentY, m = g.edgeSwipeDetection || g.iOSEdgeSwipeDetection, n = g.edgeSwipeThreshold || g.iOSEdgeSwipeThreshold;
                            if (!m || !(j <= n || j >= b.screen.width - n)) {
                                if (k.extend(f, {
                                    isTouched: !0,
                                    isMoved: !1,
                                    allowTouchCallbacks: !0,
                                    isScrolling: void 0,
                                    startMoving: void 0
                                }), h.startX = j, h.startY = l, f.touchStartTime = k.now(), e.allowClick = !0, e.updateSize(), 
                                e.swipeDirection = void 0, 0 < g.threshold && (f.allowThresholdMove = !1), "touchstart" !== i.type) {
                                    var o = !0;
                                    d(i.target).is(f.formElements) && (o = !1), a.activeElement && d(a.activeElement).is(f.formElements) && a.activeElement !== i.target && a.activeElement.blur();
                                    var p = o && e.allowTouchMove && g.touchStartPreventDefault;
                                    (g.touchStartForcePreventDefault || p) && i.preventDefault();
                                }
                                e.emit("touchStart", i);
                            }
                        }
                    }
                }.bind(c), c.onTouchMove = function(b) {
                    var c = this, e = c.touchEventsData, f = c.params, g = c.touches, h = c.rtlTranslate, i = b;
                    if (i.originalEvent && (i = i.originalEvent), e.isTouched) {
                        if (!e.isTouchEvent || "mousemove" !== i.type) {
                            var j = "touchmove" === i.type ? i.targetTouches[0].pageX : i.pageX, l = "touchmove" === i.type ? i.targetTouches[0].pageY : i.pageY;
                            if (i.preventedByNestedSwiper) return g.startX = j, void (g.startY = l);
                            if (!c.allowTouchMove) return c.allowClick = !1, void (e.isTouched && (k.extend(g, {
                                startX: j,
                                startY: l,
                                currentX: j,
                                currentY: l
                            }), e.touchStartTime = k.now()));
                            if (e.isTouchEvent && f.touchReleaseOnEdges && !f.loop) if (c.isVertical()) {
                                if (l < g.startY && c.translate <= c.maxTranslate() || l > g.startY && c.translate >= c.minTranslate()) return e.isTouched = !1, 
                                void (e.isMoved = !1);
                            } else if (j < g.startX && c.translate <= c.maxTranslate() || j > g.startX && c.translate >= c.minTranslate()) return;
                            if (e.isTouchEvent && a.activeElement && i.target === a.activeElement && d(i.target).is(e.formElements)) return e.isMoved = !0, 
                            void (c.allowClick = !1);
                            if (e.allowTouchCallbacks && c.emit("touchMove", i), !(i.targetTouches && 1 < i.targetTouches.length)) {
                                g.currentX = j, g.currentY = l;
                                var m, n = g.currentX - g.startX, o = g.currentY - g.startY;
                                if (!(c.params.threshold && Math.sqrt(Math.pow(n, 2) + Math.pow(o, 2)) < c.params.threshold)) if (void 0 === e.isScrolling && (c.isHorizontal() && g.currentY === g.startY || c.isVertical() && g.currentX === g.startX ? e.isScrolling = !1 : 25 <= n * n + o * o && (m = 180 * Math.atan2(Math.abs(o), Math.abs(n)) / Math.PI, 
                                e.isScrolling = c.isHorizontal() ? m > f.touchAngle : 90 - m > f.touchAngle)), e.isScrolling && c.emit("touchMoveOpposite", i), 
                                void 0 === e.startMoving && (g.currentX === g.startX && g.currentY === g.startY || (e.startMoving = !0)), 
                                e.isScrolling) e.isTouched = !1; else if (e.startMoving) {
                                    c.allowClick = !1, i.preventDefault(), f.touchMoveStopPropagation && !f.nested && i.stopPropagation(), 
                                    e.isMoved || (f.loop && c.loopFix(), e.startTranslate = c.getTranslate(), c.setTransition(0), 
                                    c.animating && c.$wrapperEl.trigger("webkitTransitionEnd transitionend"), e.allowMomentumBounce = !1, 
                                    !f.grabCursor || !0 !== c.allowSlideNext && !0 !== c.allowSlidePrev || c.setGrabCursor(!0), 
                                    c.emit("sliderFirstMove", i)), c.emit("sliderMove", i), e.isMoved = !0;
                                    var p = c.isHorizontal() ? n : o;
                                    g.diff = p, p *= f.touchRatio, h && (p = -p), c.swipeDirection = 0 < p ? "prev" : "next", 
                                    e.currentTranslate = p + e.startTranslate;
                                    var q = !0, r = f.resistanceRatio;
                                    if (f.touchReleaseOnEdges && (r = 0), 0 < p && e.currentTranslate > c.minTranslate() ? (q = !1, 
                                    f.resistance && (e.currentTranslate = c.minTranslate() - 1 + Math.pow(-c.minTranslate() + e.startTranslate + p, r))) : p < 0 && e.currentTranslate < c.maxTranslate() && (q = !1, 
                                    f.resistance && (e.currentTranslate = c.maxTranslate() + 1 - Math.pow(c.maxTranslate() - e.startTranslate - p, r))), 
                                    q && (i.preventedByNestedSwiper = !0), !c.allowSlideNext && "next" === c.swipeDirection && e.currentTranslate < e.startTranslate && (e.currentTranslate = e.startTranslate), 
                                    !c.allowSlidePrev && "prev" === c.swipeDirection && e.currentTranslate > e.startTranslate && (e.currentTranslate = e.startTranslate), 
                                    0 < f.threshold) {
                                        if (!(Math.abs(p) > f.threshold || e.allowThresholdMove)) return void (e.currentTranslate = e.startTranslate);
                                        if (!e.allowThresholdMove) return e.allowThresholdMove = !0, g.startX = g.currentX, 
                                        g.startY = g.currentY, e.currentTranslate = e.startTranslate, void (g.diff = c.isHorizontal() ? g.currentX - g.startX : g.currentY - g.startY);
                                    }
                                    f.followFinger && ((f.freeMode || f.watchSlidesProgress || f.watchSlidesVisibility) && (c.updateActiveIndex(), 
                                    c.updateSlidesClasses()), f.freeMode && (0 === e.velocities.length && e.velocities.push({
                                        position: g[c.isHorizontal() ? "startX" : "startY"],
                                        time: e.touchStartTime
                                    }), e.velocities.push({
                                        position: g[c.isHorizontal() ? "currentX" : "currentY"],
                                        time: k.now()
                                    })), c.updateProgress(e.currentTranslate), c.setTranslate(e.currentTranslate));
                                }
                            }
                        }
                    } else e.startMoving && e.isScrolling && c.emit("touchMoveOpposite", i);
                }.bind(c), c.onTouchEnd = function(a) {
                    var b = this, c = b.touchEventsData, d = b.params, e = b.touches, f = b.rtlTranslate, g = b.$wrapperEl, h = b.slidesGrid, i = b.snapGrid, j = a;
                    if (j.originalEvent && (j = j.originalEvent), c.allowTouchCallbacks && b.emit("touchEnd", j), 
                    c.allowTouchCallbacks = !1, !c.isTouched) return c.isMoved && d.grabCursor && b.setGrabCursor(!1), 
                    c.isMoved = !1, void (c.startMoving = !1);
                    d.grabCursor && c.isMoved && c.isTouched && (!0 === b.allowSlideNext || !0 === b.allowSlidePrev) && b.setGrabCursor(!1);
                    var l, m = k.now(), n = m - c.touchStartTime;
                    if (b.allowClick && (b.updateClickedSlide(j), b.emit("tap", j), n < 300 && 300 < m - c.lastClickTime && (c.clickTimeout && clearTimeout(c.clickTimeout), 
                    c.clickTimeout = k.nextTick(function() {
                        b && !b.destroyed && b.emit("click", j);
                    }, 300)), n < 300 && m - c.lastClickTime < 300 && (c.clickTimeout && clearTimeout(c.clickTimeout), 
                    b.emit("doubleTap", j))), c.lastClickTime = k.now(), k.nextTick(function() {
                        b.destroyed || (b.allowClick = !0);
                    }), !c.isTouched || !c.isMoved || !b.swipeDirection || 0 === e.diff || c.currentTranslate === c.startTranslate) return c.isTouched = !1, 
                    c.isMoved = !1, void (c.startMoving = !1);
                    if (c.isTouched = !1, c.isMoved = !1, c.startMoving = !1, l = d.followFinger ? f ? b.translate : -b.translate : -c.currentTranslate, 
                    d.freeMode) {
                        if (l < -b.minTranslate()) return void b.slideTo(b.activeIndex);
                        if (l > -b.maxTranslate()) return void (b.slides.length < i.length ? b.slideTo(i.length - 1) : b.slideTo(b.slides.length - 1));
                        if (d.freeModeMomentum) {
                            if (1 < c.velocities.length) {
                                var o = c.velocities.pop(), p = c.velocities.pop(), q = o.position - p.position, r = o.time - p.time;
                                b.velocity = q / r, b.velocity /= 2, Math.abs(b.velocity) < d.freeModeMinimumVelocity && (b.velocity = 0), 
                                (150 < r || 300 < k.now() - o.time) && (b.velocity = 0);
                            } else b.velocity = 0;
                            b.velocity *= d.freeModeMomentumVelocityRatio, c.velocities.length = 0;
                            var s = 1e3 * d.freeModeMomentumRatio, t = b.velocity * s, u = b.translate + t;
                            f && (u = -u);
                            var v, w, x = !1, y = 20 * Math.abs(b.velocity) * d.freeModeMomentumBounceRatio;
                            if (u < b.maxTranslate()) d.freeModeMomentumBounce ? (u + b.maxTranslate() < -y && (u = b.maxTranslate() - y), 
                            v = b.maxTranslate(), x = !0, c.allowMomentumBounce = !0) : u = b.maxTranslate(), 
                            d.loop && d.centeredSlides && (w = !0); else if (u > b.minTranslate()) d.freeModeMomentumBounce ? (u - b.minTranslate() > y && (u = b.minTranslate() + y), 
                            v = b.minTranslate(), x = !0, c.allowMomentumBounce = !0) : u = b.minTranslate(), 
                            d.loop && d.centeredSlides && (w = !0); else if (d.freeModeSticky) {
                                for (var z, A = 0; A < i.length; A += 1) if (i[A] > -u) {
                                    z = A;
                                    break;
                                }
                                u = -(u = Math.abs(i[z] - u) < Math.abs(i[z - 1] - u) || "next" === b.swipeDirection ? i[z] : i[z - 1]);
                            }
                            if (w && b.once("transitionEnd", function() {
                                b.loopFix();
                            }), 0 !== b.velocity) s = f ? Math.abs((-u - b.translate) / b.velocity) : Math.abs((u - b.translate) / b.velocity); else if (d.freeModeSticky) return void b.slideToClosest();
                            d.freeModeMomentumBounce && x ? (b.updateProgress(v), b.setTransition(s), b.setTranslate(u), 
                            b.transitionStart(!0, b.swipeDirection), b.animating = !0, g.transitionEnd(function() {
                                b && !b.destroyed && c.allowMomentumBounce && (b.emit("momentumBounce"), b.setTransition(d.speed), 
                                b.setTranslate(v), g.transitionEnd(function() {
                                    b && !b.destroyed && b.transitionEnd();
                                }));
                            })) : b.velocity ? (b.updateProgress(u), b.setTransition(s), b.setTranslate(u), 
                            b.transitionStart(!0, b.swipeDirection), b.animating || (b.animating = !0, g.transitionEnd(function() {
                                b && !b.destroyed && b.transitionEnd();
                            }))) : b.updateProgress(u), b.updateActiveIndex(), b.updateSlidesClasses();
                        } else if (d.freeModeSticky) return void b.slideToClosest();
                        (!d.freeModeMomentum || n >= d.longSwipesMs) && (b.updateProgress(), b.updateActiveIndex(), 
                        b.updateSlidesClasses());
                    } else {
                        for (var B = 0, C = b.slidesSizesGrid[0], D = 0; D < h.length; D += d.slidesPerGroup) void 0 !== h[D + d.slidesPerGroup] ? l >= h[D] && l < h[D + d.slidesPerGroup] && (C = h[(B = D) + d.slidesPerGroup] - h[D]) : l >= h[D] && (B = D, 
                        C = h[h.length - 1] - h[h.length - 2]);
                        var E = (l - h[B]) / C;
                        if (n > d.longSwipesMs) {
                            if (!d.longSwipes) return void b.slideTo(b.activeIndex);
                            "next" === b.swipeDirection && (E >= d.longSwipesRatio ? b.slideTo(B + d.slidesPerGroup) : b.slideTo(B)), 
                            "prev" === b.swipeDirection && (E > 1 - d.longSwipesRatio ? b.slideTo(B + d.slidesPerGroup) : b.slideTo(B));
                        } else {
                            if (!d.shortSwipes) return void b.slideTo(b.activeIndex);
                            "next" === b.swipeDirection && b.slideTo(B + d.slidesPerGroup), "prev" === b.swipeDirection && b.slideTo(B);
                        }
                    }
                }.bind(c), c.onClick = function(a) {
                    this.allowClick || (this.params.preventClicks && a.preventDefault(), this.params.preventClicksPropagation && this.animating && (a.stopPropagation(), 
                    a.stopImmediatePropagation()));
                }.bind(c);
                var i = "container" === e.touchEventsTarget ? g : h, j = !!e.nested;
                if (l.touch || !l.pointerEvents && !l.prefixedPointerEvents) {
                    if (l.touch) {
                        var m = !("touchstart" !== f.start || !l.passiveListener || !e.passiveListeners) && {
                            passive: !0,
                            capture: !1
                        };
                        i.addEventListener(f.start, c.onTouchStart, m), i.addEventListener(f.move, c.onTouchMove, l.passiveListener ? {
                            passive: !1,
                            capture: j
                        } : j), i.addEventListener(f.end, c.onTouchEnd, m);
                    }
                    (e.simulateTouch && !w.ios && !w.android || e.simulateTouch && !l.touch && w.ios) && (i.addEventListener("mousedown", c.onTouchStart, !1), 
                    a.addEventListener("mousemove", c.onTouchMove, j), a.addEventListener("mouseup", c.onTouchEnd, !1));
                } else i.addEventListener(f.start, c.onTouchStart, !1), a.addEventListener(f.move, c.onTouchMove, j), 
                a.addEventListener(f.end, c.onTouchEnd, !1);
                (e.preventClicks || e.preventClicksPropagation) && i.addEventListener("click", c.onClick, !0), 
                c.on(w.ios || w.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", x, !0);
            },
            detachEvents: function() {
                var b = this, c = b.params, d = b.touchEvents, e = b.el, f = b.wrapperEl, g = "container" === c.touchEventsTarget ? e : f, h = !!c.nested;
                if (l.touch || !l.pointerEvents && !l.prefixedPointerEvents) {
                    if (l.touch) {
                        var i = !("onTouchStart" !== d.start || !l.passiveListener || !c.passiveListeners) && {
                            passive: !0,
                            capture: !1
                        };
                        g.removeEventListener(d.start, b.onTouchStart, i), g.removeEventListener(d.move, b.onTouchMove, h), 
                        g.removeEventListener(d.end, b.onTouchEnd, i);
                    }
                    (c.simulateTouch && !w.ios && !w.android || c.simulateTouch && !l.touch && w.ios) && (g.removeEventListener("mousedown", b.onTouchStart, !1), 
                    a.removeEventListener("mousemove", b.onTouchMove, h), a.removeEventListener("mouseup", b.onTouchEnd, !1));
                } else g.removeEventListener(d.start, b.onTouchStart, !1), a.removeEventListener(d.move, b.onTouchMove, h), 
                a.removeEventListener(d.end, b.onTouchEnd, !1);
                (c.preventClicks || c.preventClicksPropagation) && g.removeEventListener("click", b.onClick, !0), 
                b.off(w.ios || w.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", x);
            }
        },
        breakpoints: {
            setBreakpoint: function() {
                var a = this, b = a.activeIndex, c = a.initialized, d = a.loopedSlides;
                void 0 === d && (d = 0);
                var e = a.params, f = e.breakpoints;
                if (f && (!f || 0 !== Object.keys(f).length)) {
                    var g = a.getBreakpoint(f);
                    if (g && a.currentBreakpoint !== g) {
                        var h = g in f ? f[g] : void 0;
                        h && [ "slidesPerView", "spaceBetween", "slidesPerGroup" ].forEach(function(a) {
                            var b = h[a];
                            void 0 !== b && (h[a] = "slidesPerView" !== a || "AUTO" !== b && "auto" !== b ? "slidesPerView" === a ? parseFloat(b) : parseInt(b, 10) : "auto");
                        });
                        var i = h || a.originalParams, j = i.direction && i.direction !== e.direction, l = e.loop && (i.slidesPerView !== e.slidesPerView || j);
                        j && c && a.changeDirection(), k.extend(a.params, i), k.extend(a, {
                            allowTouchMove: a.params.allowTouchMove,
                            allowSlideNext: a.params.allowSlideNext,
                            allowSlidePrev: a.params.allowSlidePrev
                        }), a.currentBreakpoint = g, l && c && (a.loopDestroy(), a.loopCreate(), a.updateSlides(), 
                        a.slideTo(b - d + a.loopedSlides, 0, !1)), a.emit("breakpoint", i);
                    }
                }
            },
            getBreakpoint: function(a) {
                if (a) {
                    var c = !1, d = [];
                    Object.keys(a).forEach(function(a) {
                        d.push(a);
                    }), d.sort(function(a, b) {
                        return parseInt(a, 10) - parseInt(b, 10);
                    });
                    for (var e = 0; e < d.length; e += 1) {
                        var f = d[e];
                        this.params.breakpointsInverse ? f <= b.innerWidth && (c = f) : f >= b.innerWidth && !c && (c = f);
                    }
                    return c || "max";
                }
            }
        },
        checkOverflow: {
            checkOverflow: function() {
                var a = this, b = a.isLocked;
                a.isLocked = 1 === a.snapGrid.length, a.allowSlideNext = !a.isLocked, a.allowSlidePrev = !a.isLocked, 
                b !== a.isLocked && a.emit(a.isLocked ? "lock" : "unlock"), b && b !== a.isLocked && (a.isEnd = !1, 
                a.navigation.update());
            }
        },
        classes: {
            addClasses: function() {
                var a = this.classNames, b = this.params, c = this.rtl, d = this.$el, e = [];
                e.push("initialized"), e.push(b.direction), b.freeMode && e.push("free-mode"), l.flexbox || e.push("no-flexbox"), 
                b.autoHeight && e.push("autoheight"), c && e.push("rtl"), 1 < b.slidesPerColumn && e.push("multirow"), 
                w.android && e.push("android"), w.ios && e.push("ios"), (m.isIE || m.isEdge) && (l.pointerEvents || l.prefixedPointerEvents) && e.push("wp8-" + b.direction), 
                e.forEach(function(c) {
                    a.push(b.containerModifierClass + c);
                }), d.addClass(a.join(" "));
            },
            removeClasses: function() {
                var a = this.$el, b = this.classNames;
                a.removeClass(b.join(" "));
            }
        },
        images: {
            loadImage: function(a, c, d, e, f, g) {
                var h;
                function i() {
                    g && g();
                }
                a.complete && f ? i() : c ? ((h = new b.Image()).onload = i, h.onerror = i, e && (h.sizes = e), 
                d && (h.srcset = d), c && (h.src = c)) : i();
            },
            preloadImages: function() {
                var a = this;
                function b() {
                    null != a && a && !a.destroyed && (void 0 !== a.imagesLoaded && (a.imagesLoaded += 1), 
                    a.imagesLoaded === a.imagesToLoad.length && (a.params.updateOnImagesReady && a.update(), 
                    a.emit("imagesReady")));
                }
                a.imagesToLoad = a.$el.find("img");
                for (var c = 0; c < a.imagesToLoad.length; c += 1) {
                    var d = a.imagesToLoad[c];
                    a.loadImage(d, d.currentSrc || d.getAttribute("src"), d.srcset || d.getAttribute("srcset"), d.sizes || d.getAttribute("sizes"), !0, b);
                }
            }
        }
    }, A = {}, B = function(a) {
        function b() {
            for (var c, e, f, g = [], h = arguments.length; h--; ) g[h] = arguments[h];
            1 === g.length && g[0].constructor && g[0].constructor === Object ? f = g[0] : (e = (c = g)[0], 
            f = c[1]), f || (f = {}), f = k.extend({}, f), e && !f.el && (f.el = e), a.call(this, f), 
            Object.keys(z).forEach(function(a) {
                Object.keys(z[a]).forEach(function(c) {
                    b.prototype[c] || (b.prototype[c] = z[a][c]);
                });
            });
            var i = this;
            void 0 === i.modules && (i.modules = {}), Object.keys(i.modules).forEach(function(a) {
                var b = i.modules[a];
                if (b.params) {
                    var c = Object.keys(b.params)[0], d = b.params[c];
                    if ("object" != typeof d || null === d) return;
                    if (!(c in f && "enabled" in d)) return;
                    !0 === f[c] && (f[c] = {
                        enabled: !0
                    }), "object" != typeof f[c] || "enabled" in f[c] || (f[c].enabled = !0), f[c] || (f[c] = {
                        enabled: !1
                    });
                }
            });
            var j = k.extend({}, y);
            i.useModulesParams(j), i.params = k.extend({}, j, A, f), i.originalParams = k.extend({}, i.params), 
            i.passedParams = k.extend({}, f);
            var m = (i.$ = d)(i.params.el);
            if (e = m[0]) {
                if (1 < m.length) {
                    var n = [];
                    return m.each(function(a, c) {
                        var d = k.extend({}, f, {
                            el: c
                        });
                        n.push(new b(d));
                    }), n;
                }
                e.swiper = i, m.data("swiper", i);
                var o, p, q = m.children("." + i.params.wrapperClass);
                return k.extend(i, {
                    $el: m,
                    el: e,
                    $wrapperEl: q,
                    wrapperEl: q[0],
                    classNames: [],
                    slides: d(),
                    slidesGrid: [],
                    snapGrid: [],
                    slidesSizesGrid: [],
                    isHorizontal: function() {
                        return "horizontal" === i.params.direction;
                    },
                    isVertical: function() {
                        return "vertical" === i.params.direction;
                    },
                    rtl: "rtl" === e.dir.toLowerCase() || "rtl" === m.css("direction"),
                    rtlTranslate: "horizontal" === i.params.direction && ("rtl" === e.dir.toLowerCase() || "rtl" === m.css("direction")),
                    wrongRTL: "-webkit-box" === q.css("display"),
                    activeIndex: 0,
                    realIndex: 0,
                    isBeginning: !0,
                    isEnd: !1,
                    translate: 0,
                    previousTranslate: 0,
                    progress: 0,
                    velocity: 0,
                    animating: !1,
                    allowSlideNext: i.params.allowSlideNext,
                    allowSlidePrev: i.params.allowSlidePrev,
                    touchEvents: (o = [ "touchstart", "touchmove", "touchend" ], p = [ "mousedown", "mousemove", "mouseup" ], 
                    l.pointerEvents ? p = [ "pointerdown", "pointermove", "pointerup" ] : l.prefixedPointerEvents && (p = [ "MSPointerDown", "MSPointerMove", "MSPointerUp" ]), 
                    i.touchEventsTouch = {
                        start: o[0],
                        move: o[1],
                        end: o[2]
                    }, i.touchEventsDesktop = {
                        start: p[0],
                        move: p[1],
                        end: p[2]
                    }, l.touch || !i.params.simulateTouch ? i.touchEventsTouch : i.touchEventsDesktop),
                    touchEventsData: {
                        isTouched: void 0,
                        isMoved: void 0,
                        allowTouchCallbacks: void 0,
                        touchStartTime: void 0,
                        isScrolling: void 0,
                        currentTranslate: void 0,
                        startTranslate: void 0,
                        allowThresholdMove: void 0,
                        formElements: "input, select, option, textarea, button, video",
                        lastClickTime: k.now(),
                        clickTimeout: void 0,
                        velocities: [],
                        allowMomentumBounce: void 0,
                        isTouchEvent: void 0,
                        startMoving: void 0
                    },
                    allowClick: !0,
                    allowTouchMove: i.params.allowTouchMove,
                    touches: {
                        startX: 0,
                        startY: 0,
                        currentX: 0,
                        currentY: 0,
                        diff: 0
                    },
                    imagesToLoad: [],
                    imagesLoaded: 0
                }), i.useModules(), i.params.init && i.init(), i;
            }
        }
        a && (b.__proto__ = a);
        var c = {
            extendedDefaults: {
                configurable: !0
            },
            defaults: {
                configurable: !0
            },
            Class: {
                configurable: !0
            },
            $: {
                configurable: !0
            }
        };
        return ((b.prototype = Object.create(a && a.prototype)).constructor = b).prototype.slidesPerViewDynamic = function() {
            var a = this, b = a.params, c = a.slides, d = a.slidesGrid, e = a.size, f = a.activeIndex, g = 1;
            if (b.centeredSlides) {
                for (var h, i = c[f].swiperSlideSize, j = f + 1; j < c.length; j += 1) c[j] && !h && (g += 1, 
                e < (i += c[j].swiperSlideSize) && (h = !0));
                for (var k = f - 1; 0 <= k; k -= 1) c[k] && !h && (g += 1, e < (i += c[k].swiperSlideSize) && (h = !0));
            } else for (var l = f + 1; l < c.length; l += 1) d[l] - d[f] < e && (g += 1);
            return g;
        }, b.prototype.update = function() {
            var a = this;
            if (a && !a.destroyed) {
                var b = a.snapGrid, c = a.params;
                c.breakpoints && a.setBreakpoint(), a.updateSize(), a.updateSlides(), a.updateProgress(), 
                a.updateSlidesClasses(), a.params.freeMode ? (d(), a.params.autoHeight && a.updateAutoHeight()) : (("auto" === a.params.slidesPerView || 1 < a.params.slidesPerView) && a.isEnd && !a.params.centeredSlides ? a.slideTo(a.slides.length - 1, 0, !1, !0) : a.slideTo(a.activeIndex, 0, !1, !0)) || d(), 
                c.watchOverflow && b !== a.snapGrid && a.checkOverflow(), a.emit("update");
            }
            function d() {
                var b = a.rtlTranslate ? -1 * a.translate : a.translate, c = Math.min(Math.max(b, a.maxTranslate()), a.minTranslate());
                a.setTranslate(c), a.updateActiveIndex(), a.updateSlidesClasses();
            }
        }, b.prototype.changeDirection = function(a, b) {
            void 0 === b && (b = !0);
            var c = this, d = c.params.direction;
            return a || (a = "horizontal" === d ? "vertical" : "horizontal"), a === d || "horizontal" !== a && "vertical" !== a || ("vertical" === d && (c.$el.removeClass(c.params.containerModifierClass + "vertical wp8-vertical").addClass("" + c.params.containerModifierClass + a), 
            (m.isIE || m.isEdge) && (l.pointerEvents || l.prefixedPointerEvents) && c.$el.addClass(c.params.containerModifierClass + "wp8-" + a)), 
            "horizontal" === d && (c.$el.removeClass(c.params.containerModifierClass + "horizontal wp8-horizontal").addClass("" + c.params.containerModifierClass + a), 
            (m.isIE || m.isEdge) && (l.pointerEvents || l.prefixedPointerEvents) && c.$el.addClass(c.params.containerModifierClass + "wp8-" + a)), 
            c.params.direction = a, c.slides.each(function(b, c) {
                "vertical" === a ? c.style.width = "" : c.style.height = "";
            }), c.emit("changeDirection"), b && c.update()), c;
        }, b.prototype.init = function() {
            var a = this;
            a.initialized || (a.emit("beforeInit"), a.params.breakpoints && a.setBreakpoint(), 
            a.addClasses(), a.params.loop && a.loopCreate(), a.updateSize(), a.updateSlides(), 
            a.params.watchOverflow && a.checkOverflow(), a.params.grabCursor && a.setGrabCursor(), 
            a.params.preloadImages && a.preloadImages(), a.params.loop ? a.slideTo(a.params.initialSlide + a.loopedSlides, 0, a.params.runCallbacksOnInit) : a.slideTo(a.params.initialSlide, 0, a.params.runCallbacksOnInit), 
            a.attachEvents(), a.initialized = !0, a.emit("init"));
        }, b.prototype.destroy = function(a, b) {
            void 0 === a && (a = !0), void 0 === b && (b = !0);
            var c = this, d = c.params, e = c.$el, f = c.$wrapperEl, g = c.slides;
            return void 0 === c.params || c.destroyed || (c.emit("beforeDestroy"), c.initialized = !1, 
            c.detachEvents(), d.loop && c.loopDestroy(), b && (c.removeClasses(), e.removeAttr("style"), 
            f.removeAttr("style"), g && g.length && g.removeClass([ d.slideVisibleClass, d.slideActiveClass, d.slideNextClass, d.slidePrevClass ].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index").removeAttr("data-swiper-column").removeAttr("data-swiper-row")), 
            c.emit("destroy"), Object.keys(c.eventsListeners).forEach(function(a) {
                c.off(a);
            }), !1 !== a && (c.$el[0].swiper = null, c.$el.data("swiper", null), k.deleteProps(c)), 
            c.destroyed = !0), null;
        }, b.extendDefaults = function(a) {
            k.extend(A, a);
        }, c.extendedDefaults.get = function() {
            return A;
        }, c.defaults.get = function() {
            return y;
        }, c.Class.get = function() {
            return a;
        }, c.$.get = function() {
            return d;
        }, Object.defineProperties(b, c), b;
    }(n), C = {
        name: "device",
        proto: {
            device: w
        },
        "static": {
            device: w
        }
    }, D = {
        name: "support",
        proto: {
            support: l
        },
        "static": {
            support: l
        }
    }, E = {
        name: "browser",
        proto: {
            browser: m
        },
        "static": {
            browser: m
        }
    }, F = {
        name: "resize",
        create: function() {
            var a = this;
            k.extend(a, {
                resize: {
                    resizeHandler: function() {
                        a && !a.destroyed && a.initialized && (a.emit("beforeResize"), a.emit("resize"));
                    },
                    orientationChangeHandler: function() {
                        a && !a.destroyed && a.initialized && a.emit("orientationchange");
                    }
                }
            });
        },
        on: {
            init: function() {
                b.addEventListener("resize", this.resize.resizeHandler), b.addEventListener("orientationchange", this.resize.orientationChangeHandler);
            },
            destroy: function() {
                b.removeEventListener("resize", this.resize.resizeHandler), b.removeEventListener("orientationchange", this.resize.orientationChangeHandler);
            }
        }
    }, G = {
        func: b.MutationObserver || b.WebkitMutationObserver,
        attach: function(a, c) {
            void 0 === c && (c = {});
            var d = this, e = new G.func(function(a) {
                if (1 !== a.length) {
                    var c = function() {
                        d.emit("observerUpdate", a[0]);
                    };
                    b.requestAnimationFrame ? b.requestAnimationFrame(c) : b.setTimeout(c, 0);
                } else d.emit("observerUpdate", a[0]);
            });
            e.observe(a, {
                attributes: void 0 === c.attributes || c.attributes,
                childList: void 0 === c.childList || c.childList,
                characterData: void 0 === c.characterData || c.characterData
            }), d.observer.observers.push(e);
        },
        init: function() {
            var a = this;
            if (l.observer && a.params.observer) {
                if (a.params.observeParents) for (var b = a.$el.parents(), c = 0; c < b.length; c += 1) a.observer.attach(b[c]);
                a.observer.attach(a.$el[0], {
                    childList: a.params.observeSlideChildren
                }), a.observer.attach(a.$wrapperEl[0], {
                    attributes: !1
                });
            }
        },
        destroy: function() {
            this.observer.observers.forEach(function(a) {
                a.disconnect();
            }), this.observer.observers = [];
        }
    }, H = {
        name: "observer",
        params: {
            observer: !1,
            observeParents: !1,
            observeSlideChildren: !1
        },
        create: function() {
            k.extend(this, {
                observer: {
                    init: G.init.bind(this),
                    attach: G.attach.bind(this),
                    destroy: G.destroy.bind(this),
                    observers: []
                }
            });
        },
        on: {
            init: function() {
                this.observer.init();
            },
            destroy: function() {
                this.observer.destroy();
            }
        }
    }, I = {
        update: function(a) {
            var b = this, c = b.params, d = c.slidesPerView, e = c.slidesPerGroup, f = c.centeredSlides, g = b.params.virtual, h = g.addSlidesBefore, i = g.addSlidesAfter, j = b.virtual, l = j.from, m = j.to, n = j.slides, o = j.slidesGrid, p = j.renderSlide, q = j.offset;
            b.updateActiveIndex();
            var r, s, t, u = b.activeIndex || 0;
            r = b.rtlTranslate ? "right" : b.isHorizontal() ? "left" : "top", f ? (s = Math.floor(d / 2) + e + h, 
            t = Math.floor(d / 2) + e + i) : (s = d + (e - 1) + h, t = e + i);
            var v = Math.max((u || 0) - t, 0), w = Math.min((u || 0) + s, n.length - 1), x = (b.slidesGrid[v] || 0) - (b.slidesGrid[0] || 0);
            function y() {
                b.updateSlides(), b.updateProgress(), b.updateSlidesClasses(), b.lazy && b.params.lazy.enabled && b.lazy.load();
            }
            if (k.extend(b.virtual, {
                from: v,
                to: w,
                offset: x,
                slidesGrid: b.slidesGrid
            }), l === v && m === w && !a) return b.slidesGrid !== o && x !== q && b.slides.css(r, x + "px"), 
            void b.updateProgress();
            if (b.params.virtual.renderExternal) return b.params.virtual.renderExternal.call(b, {
                offset: x,
                from: v,
                to: w,
                slides: function() {
                    for (var a = [], b = v; b <= w; b += 1) a.push(n[b]);
                    return a;
                }()
            }), void y();
            var z = [], A = [];
            if (a) b.$wrapperEl.find("." + b.params.slideClass).remove(); else for (var B = l; B <= m; B += 1) (B < v || w < B) && b.$wrapperEl.find("." + b.params.slideClass + '[data-swiper-slide-index="' + B + '"]').remove();
            for (var C = 0; C < n.length; C += 1) v <= C && C <= w && (void 0 === m || a ? A.push(C) : (m < C && A.push(C), 
            C < l && z.push(C)));
            A.forEach(function(a) {
                b.$wrapperEl.append(p(n[a], a));
            }), z.sort(function(a, b) {
                return b - a;
            }).forEach(function(a) {
                b.$wrapperEl.prepend(p(n[a], a));
            }), b.$wrapperEl.children(".swiper-slide").css(r, x + "px"), y();
        },
        renderSlide: function(a, b) {
            var c = this, e = c.params.virtual;
            if (e.cache && c.virtual.cache[b]) return c.virtual.cache[b];
            var f = e.renderSlide ? d(e.renderSlide.call(c, a, b)) : d('<div class="' + c.params.slideClass + '" data-swiper-slide-index="' + b + '">' + a + "</div>");
            return f.attr("data-swiper-slide-index") || f.attr("data-swiper-slide-index", b), 
            e.cache && (c.virtual.cache[b] = f), f;
        },
        appendSlide: function(a) {
            if ("object" == typeof a && "length" in a) for (var b = 0; b < a.length; b += 1) a[b] && this.virtual.slides.push(a[b]); else this.virtual.slides.push(a);
            this.virtual.update(!0);
        },
        prependSlide: function(a) {
            var b = this, c = b.activeIndex, d = c + 1, e = 1;
            if (Array.isArray(a)) {
                for (var f = 0; f < a.length; f += 1) a[f] && b.virtual.slides.unshift(a[f]);
                d = c + a.length, e = a.length;
            } else b.virtual.slides.unshift(a);
            if (b.params.virtual.cache) {
                var g = b.virtual.cache, h = {};
                Object.keys(g).forEach(function(a) {
                    h[parseInt(a, 10) + e] = g[a];
                }), b.virtual.cache = h;
            }
            b.virtual.update(!0), b.slideTo(d, 0);
        },
        removeSlide: function(a) {
            var b = this;
            if (null != a) {
                var c = b.activeIndex;
                if (Array.isArray(a)) for (var d = a.length - 1; 0 <= d; d -= 1) b.virtual.slides.splice(a[d], 1), 
                b.params.virtual.cache && delete b.virtual.cache[a[d]], a[d] < c && (c -= 1), c = Math.max(c, 0); else b.virtual.slides.splice(a, 1), 
                b.params.virtual.cache && delete b.virtual.cache[a], a < c && (c -= 1), c = Math.max(c, 0);
                b.virtual.update(!0), b.slideTo(c, 0);
            }
        },
        removeAllSlides: function() {
            var a = this;
            a.virtual.slides = [], a.params.virtual.cache && (a.virtual.cache = {}), a.virtual.update(!0), 
            a.slideTo(0, 0);
        }
    }, J = {
        name: "virtual",
        params: {
            virtual: {
                enabled: !1,
                slides: [],
                cache: !0,
                renderSlide: null,
                renderExternal: null,
                addSlidesBefore: 0,
                addSlidesAfter: 0
            }
        },
        create: function() {
            var a = this;
            k.extend(a, {
                virtual: {
                    update: I.update.bind(a),
                    appendSlide: I.appendSlide.bind(a),
                    prependSlide: I.prependSlide.bind(a),
                    removeSlide: I.removeSlide.bind(a),
                    removeAllSlides: I.removeAllSlides.bind(a),
                    renderSlide: I.renderSlide.bind(a),
                    slides: a.params.virtual.slides,
                    cache: {}
                }
            });
        },
        on: {
            beforeInit: function() {
                var a = this;
                if (a.params.virtual.enabled) {
                    a.classNames.push(a.params.containerModifierClass + "virtual");
                    var b = {
                        watchSlidesProgress: !0
                    };
                    k.extend(a.params, b), k.extend(a.originalParams, b), a.params.initialSlide || a.virtual.update();
                }
            },
            setTranslate: function() {
                this.params.virtual.enabled && this.virtual.update();
            }
        }
    }, K = {
        handle: function(c) {
            var d = this, e = d.rtlTranslate, f = c;
            f.originalEvent && (f = f.originalEvent);
            var g = f.keyCode || f.charCode;
            if (!d.allowSlideNext && (d.isHorizontal() && 39 === g || d.isVertical() && 40 === g)) return !1;
            if (!d.allowSlidePrev && (d.isHorizontal() && 37 === g || d.isVertical() && 38 === g)) return !1;
            if (!(f.shiftKey || f.altKey || f.ctrlKey || f.metaKey || a.activeElement && a.activeElement.nodeName && ("input" === a.activeElement.nodeName.toLowerCase() || "textarea" === a.activeElement.nodeName.toLowerCase()))) {
                if (d.params.keyboard.onlyInViewport && (37 === g || 39 === g || 38 === g || 40 === g)) {
                    var h = !1;
                    if (0 < d.$el.parents("." + d.params.slideClass).length && 0 === d.$el.parents("." + d.params.slideActiveClass).length) return;
                    var i = b.innerWidth, j = b.innerHeight, k = d.$el.offset();
                    e && (k.left -= d.$el[0].scrollLeft);
                    for (var l = [ [ k.left, k.top ], [ k.left + d.width, k.top ], [ k.left, k.top + d.height ], [ k.left + d.width, k.top + d.height ] ], m = 0; m < l.length; m += 1) {
                        var n = l[m];
                        0 <= n[0] && n[0] <= i && 0 <= n[1] && n[1] <= j && (h = !0);
                    }
                    if (!h) return;
                }
                d.isHorizontal() ? (37 !== g && 39 !== g || (f.preventDefault ? f.preventDefault() : f.returnValue = !1), 
                (39 === g && !e || 37 === g && e) && d.slideNext(), (37 === g && !e || 39 === g && e) && d.slidePrev()) : (38 !== g && 40 !== g || (f.preventDefault ? f.preventDefault() : f.returnValue = !1), 
                40 === g && d.slideNext(), 38 === g && d.slidePrev()), d.emit("keyPress", g);
            }
        },
        enable: function() {
            this.keyboard.enabled || (d(a).on("keydown", this.keyboard.handle), this.keyboard.enabled = !0);
        },
        disable: function() {
            this.keyboard.enabled && (d(a).off("keydown", this.keyboard.handle), this.keyboard.enabled = !1);
        }
    }, L = {
        name: "keyboard",
        params: {
            keyboard: {
                enabled: !1,
                onlyInViewport: !0
            }
        },
        create: function() {
            k.extend(this, {
                keyboard: {
                    enabled: !1,
                    enable: K.enable.bind(this),
                    disable: K.disable.bind(this),
                    handle: K.handle.bind(this)
                }
            });
        },
        on: {
            init: function() {
                this.params.keyboard.enabled && this.keyboard.enable();
            },
            destroy: function() {
                this.keyboard.enabled && this.keyboard.disable();
            }
        }
    };
    var M = {
        lastScrollTime: k.now(),
        event: -1 < b.navigator.userAgent.indexOf("firefox") ? "DOMMouseScroll" : function() {
            var b = "onwheel", c = b in a;
            if (!c) {
                var d = a.createElement("div");
                d.setAttribute(b, "return;"), c = "function" == typeof d[b];
            }
            return !c && a.implementation && a.implementation.hasFeature && !0 !== a.implementation.hasFeature("", "") && (c = a.implementation.hasFeature("Events.wheel", "3.0")), 
            c;
        }() ? "wheel" : "mousewheel",
        normalize: function(a) {
            var b = 0, c = 0, d = 0, e = 0;
            return "detail" in a && (c = a.detail), "wheelDelta" in a && (c = -a.wheelDelta / 120), 
            "wheelDeltaY" in a && (c = -a.wheelDeltaY / 120), "wheelDeltaX" in a && (b = -a.wheelDeltaX / 120), 
            "axis" in a && a.axis === a.HORIZONTAL_AXIS && (b = c, c = 0), d = 10 * b, e = 10 * c, 
            "deltaY" in a && (e = a.deltaY), "deltaX" in a && (d = a.deltaX), (d || e) && a.deltaMode && (1 === a.deltaMode ? (d *= 40, 
            e *= 40) : (d *= 800, e *= 800)), d && !b && (b = d < 1 ? -1 : 1), e && !c && (c = e < 1 ? -1 : 1), 
            {
                spinX: b,
                spinY: c,
                pixelX: d,
                pixelY: e
            };
        },
        handleMouseEnter: function() {
            this.mouseEntered = !0;
        },
        handleMouseLeave: function() {
            this.mouseEntered = !1;
        },
        handle: function(a) {
            var c = a, d = this, e = d.params.mousewheel;
            if (!d.mouseEntered && !e.releaseOnEdges) return !0;
            c.originalEvent && (c = c.originalEvent);
            var f = 0, g = d.rtlTranslate ? -1 : 1, h = M.normalize(c);
            if (e.forceToAxis) if (d.isHorizontal()) {
                if (!(Math.abs(h.pixelX) > Math.abs(h.pixelY))) return !0;
                f = h.pixelX * g;
            } else {
                if (!(Math.abs(h.pixelY) > Math.abs(h.pixelX))) return !0;
                f = h.pixelY;
            } else f = Math.abs(h.pixelX) > Math.abs(h.pixelY) ? -h.pixelX * g : -h.pixelY;
            if (0 === f) return !0;
            if (e.invert && (f = -f), d.params.freeMode) {
                d.params.loop && d.loopFix();
                var i = d.getTranslate() + f * e.sensitivity, j = d.isBeginning, l = d.isEnd;
                if (i >= d.minTranslate() && (i = d.minTranslate()), i <= d.maxTranslate() && (i = d.maxTranslate()), 
                d.setTransition(0), d.setTranslate(i), d.updateProgress(), d.updateActiveIndex(), 
                d.updateSlidesClasses(), (!j && d.isBeginning || !l && d.isEnd) && d.updateSlidesClasses(), 
                d.params.freeModeSticky && (clearTimeout(d.mousewheel.timeout), d.mousewheel.timeout = k.nextTick(function() {
                    d.slideToClosest();
                }, 300)), d.emit("scroll", c), d.params.autoplay && d.params.autoplayDisableOnInteraction && d.autoplay.stop(), 
                i === d.minTranslate() || i === d.maxTranslate()) return !0;
            } else {
                if (60 < k.now() - d.mousewheel.lastScrollTime) if (f < 0) if (d.isEnd && !d.params.loop || d.animating) {
                    if (e.releaseOnEdges) return !0;
                } else d.slideNext(), d.emit("scroll", c); else if (d.isBeginning && !d.params.loop || d.animating) {
                    if (e.releaseOnEdges) return !0;
                } else d.slidePrev(), d.emit("scroll", c);
                d.mousewheel.lastScrollTime = new b.Date().getTime();
            }
            return c.preventDefault ? c.preventDefault() : c.returnValue = !1, !1;
        },
        enable: function() {
            var a = this;
            if (!M.event) return !1;
            if (a.mousewheel.enabled) return !1;
            var b = a.$el;
            return "container" !== a.params.mousewheel.eventsTarged && (b = d(a.params.mousewheel.eventsTarged)), 
            b.on("mouseenter", a.mousewheel.handleMouseEnter), b.on("mouseleave", a.mousewheel.handleMouseLeave), 
            b.on(M.event, a.mousewheel.handle), a.mousewheel.enabled = !0;
        },
        disable: function() {
            var a = this;
            if (!M.event) return !1;
            if (!a.mousewheel.enabled) return !1;
            var b = a.$el;
            return "container" !== a.params.mousewheel.eventsTarged && (b = d(a.params.mousewheel.eventsTarged)), 
            b.off(M.event, a.mousewheel.handle), !(a.mousewheel.enabled = !1);
        }
    }, N = {
        update: function() {
            var a = this, b = a.params.navigation;
            if (!a.params.loop) {
                var c = a.navigation, d = c.$nextEl, e = c.$prevEl;
                e && 0 < e.length && (a.isBeginning ? e.addClass(b.disabledClass) : e.removeClass(b.disabledClass), 
                e[a.params.watchOverflow && a.isLocked ? "addClass" : "removeClass"](b.lockClass)), 
                d && 0 < d.length && (a.isEnd ? d.addClass(b.disabledClass) : d.removeClass(b.disabledClass), 
                d[a.params.watchOverflow && a.isLocked ? "addClass" : "removeClass"](b.lockClass));
            }
        },
        onPrevClick: function(a) {
            a.preventDefault(), this.isBeginning && !this.params.loop || this.slidePrev();
        },
        onNextClick: function(a) {
            a.preventDefault(), this.isEnd && !this.params.loop || this.slideNext();
        },
        init: function() {
            var a, b, c = this, e = c.params.navigation;
            (e.nextEl || e.prevEl) && (e.nextEl && (a = d(e.nextEl), c.params.uniqueNavElements && "string" == typeof e.nextEl && 1 < a.length && 1 === c.$el.find(e.nextEl).length && (a = c.$el.find(e.nextEl))), 
            e.prevEl && (b = d(e.prevEl), c.params.uniqueNavElements && "string" == typeof e.prevEl && 1 < b.length && 1 === c.$el.find(e.prevEl).length && (b = c.$el.find(e.prevEl))), 
            a && 0 < a.length && a.on("click", c.navigation.onNextClick), b && 0 < b.length && b.on("click", c.navigation.onPrevClick), 
            k.extend(c.navigation, {
                $nextEl: a,
                nextEl: a && a[0],
                $prevEl: b,
                prevEl: b && b[0]
            }));
        },
        destroy: function() {
            var a = this, b = a.navigation, c = b.$nextEl, d = b.$prevEl;
            c && c.length && (c.off("click", a.navigation.onNextClick), c.removeClass(a.params.navigation.disabledClass)), 
            d && d.length && (d.off("click", a.navigation.onPrevClick), d.removeClass(a.params.navigation.disabledClass));
        }
    }, O = {
        update: function() {
            var a = this, b = a.rtl, c = a.params.pagination;
            if (c.el && a.pagination.el && a.pagination.$el && 0 !== a.pagination.$el.length) {
                var e, f = a.virtual && a.params.virtual.enabled ? a.virtual.slides.length : a.slides.length, g = a.pagination.$el, h = a.params.loop ? Math.ceil((f - 2 * a.loopedSlides) / a.params.slidesPerGroup) : a.snapGrid.length;
                if (a.params.loop ? ((e = Math.ceil((a.activeIndex - a.loopedSlides) / a.params.slidesPerGroup)) > f - 1 - 2 * a.loopedSlides && (e -= f - 2 * a.loopedSlides), 
                h - 1 < e && (e -= h), e < 0 && "bullets" !== a.params.paginationType && (e = h + e)) : e = void 0 !== a.snapIndex ? a.snapIndex : a.activeIndex || 0, 
                "bullets" === c.type && a.pagination.bullets && 0 < a.pagination.bullets.length) {
                    var i, j, k, l = a.pagination.bullets;
                    if (c.dynamicBullets && (a.pagination.bulletSize = l.eq(0)[a.isHorizontal() ? "outerWidth" : "outerHeight"](!0), 
                    g.css(a.isHorizontal() ? "width" : "height", a.pagination.bulletSize * (c.dynamicMainBullets + 4) + "px"), 
                    1 < c.dynamicMainBullets && void 0 !== a.previousIndex && (a.pagination.dynamicBulletIndex += e - a.previousIndex, 
                    a.pagination.dynamicBulletIndex > c.dynamicMainBullets - 1 ? a.pagination.dynamicBulletIndex = c.dynamicMainBullets - 1 : a.pagination.dynamicBulletIndex < 0 && (a.pagination.dynamicBulletIndex = 0)), 
                    i = e - a.pagination.dynamicBulletIndex, k = ((j = i + (Math.min(l.length, c.dynamicMainBullets) - 1)) + i) / 2), 
                    l.removeClass(c.bulletActiveClass + " " + c.bulletActiveClass + "-next " + c.bulletActiveClass + "-next-next " + c.bulletActiveClass + "-prev " + c.bulletActiveClass + "-prev-prev " + c.bulletActiveClass + "-main"), 
                    1 < g.length) l.each(function(a, b) {
                        var f = d(b), g = f.index();
                        g === e && f.addClass(c.bulletActiveClass), c.dynamicBullets && (i <= g && g <= j && f.addClass(c.bulletActiveClass + "-main"), 
                        g === i && f.prev().addClass(c.bulletActiveClass + "-prev").prev().addClass(c.bulletActiveClass + "-prev-prev"), 
                        g === j && f.next().addClass(c.bulletActiveClass + "-next").next().addClass(c.bulletActiveClass + "-next-next"));
                    }); else if (l.eq(e).addClass(c.bulletActiveClass), c.dynamicBullets) {
                        for (var m = l.eq(i), n = l.eq(j), o = i; o <= j; o += 1) l.eq(o).addClass(c.bulletActiveClass + "-main");
                        m.prev().addClass(c.bulletActiveClass + "-prev").prev().addClass(c.bulletActiveClass + "-prev-prev"), 
                        n.next().addClass(c.bulletActiveClass + "-next").next().addClass(c.bulletActiveClass + "-next-next");
                    }
                    if (c.dynamicBullets) {
                        var p = Math.min(l.length, c.dynamicMainBullets + 4), q = (a.pagination.bulletSize * p - a.pagination.bulletSize) / 2 - k * a.pagination.bulletSize, r = b ? "right" : "left";
                        l.css(a.isHorizontal() ? r : "top", q + "px");
                    }
                }
                if ("fraction" === c.type && (g.find("." + c.currentClass).text(c.formatFractionCurrent(e + 1)), 
                g.find("." + c.totalClass).text(c.formatFractionTotal(h))), "progressbar" === c.type) {
                    var s;
                    s = c.progressbarOpposite ? a.isHorizontal() ? "vertical" : "horizontal" : a.isHorizontal() ? "horizontal" : "vertical";
                    var t = (e + 1) / h, u = 1, v = 1;
                    "horizontal" === s ? u = t : v = t, g.find("." + c.progressbarFillClass).transform("translate3d(0,0,0) scaleX(" + u + ") scaleY(" + v + ")").transition(a.params.speed);
                }
                "custom" === c.type && c.renderCustom ? (g.html(c.renderCustom(a, e + 1, h)), a.emit("paginationRender", a, g[0])) : a.emit("paginationUpdate", a, g[0]), 
                g[a.params.watchOverflow && a.isLocked ? "addClass" : "removeClass"](c.lockClass);
            }
        },
        render: function() {
            var a = this, b = a.params.pagination;
            if (b.el && a.pagination.el && a.pagination.$el && 0 !== a.pagination.$el.length) {
                var c = a.virtual && a.params.virtual.enabled ? a.virtual.slides.length : a.slides.length, d = a.pagination.$el, e = "";
                if ("bullets" === b.type) {
                    for (var f = a.params.loop ? Math.ceil((c - 2 * a.loopedSlides) / a.params.slidesPerGroup) : a.snapGrid.length, g = 0; g < f; g += 1) b.renderBullet ? e += b.renderBullet.call(a, g, b.bulletClass) : e += "<" + b.bulletElement + ' class="' + b.bulletClass + '"></' + b.bulletElement + ">";
                    d.html(e), a.pagination.bullets = d.find("." + b.bulletClass);
                }
                "fraction" === b.type && (e = b.renderFraction ? b.renderFraction.call(a, b.currentClass, b.totalClass) : '<span class="' + b.currentClass + '"></span> / <span class="' + b.totalClass + '"></span>', 
                d.html(e)), "progressbar" === b.type && (e = b.renderProgressbar ? b.renderProgressbar.call(a, b.progressbarFillClass) : '<span class="' + b.progressbarFillClass + '"></span>', 
                d.html(e)), "custom" !== b.type && a.emit("paginationRender", a.pagination.$el[0]);
            }
        },
        init: function() {
            var a = this, b = a.params.pagination;
            if (b.el) {
                var c = d(b.el);
                0 !== c.length && (a.params.uniqueNavElements && "string" == typeof b.el && 1 < c.length && 1 === a.$el.find(b.el).length && (c = a.$el.find(b.el)), 
                "bullets" === b.type && b.clickable && c.addClass(b.clickableClass), c.addClass(b.modifierClass + b.type), 
                "bullets" === b.type && b.dynamicBullets && (c.addClass("" + b.modifierClass + b.type + "-dynamic"), 
                a.pagination.dynamicBulletIndex = 0, b.dynamicMainBullets < 1 && (b.dynamicMainBullets = 1)), 
                "progressbar" === b.type && b.progressbarOpposite && c.addClass(b.progressbarOppositeClass), 
                b.clickable && c.on("click", "." + b.bulletClass, function(b) {
                    b.preventDefault();
                    var c = d(this).index() * a.params.slidesPerGroup;
                    a.params.loop && (c += a.loopedSlides), a.slideTo(c);
                }), k.extend(a.pagination, {
                    $el: c,
                    el: c[0]
                }));
            }
        },
        destroy: function() {
            var a = this, b = a.params.pagination;
            if (b.el && a.pagination.el && a.pagination.$el && 0 !== a.pagination.$el.length) {
                var c = a.pagination.$el;
                c.removeClass(b.hiddenClass), c.removeClass(b.modifierClass + b.type), a.pagination.bullets && a.pagination.bullets.removeClass(b.bulletActiveClass), 
                b.clickable && c.off("click", "." + b.bulletClass);
            }
        }
    }, P = {
        setTranslate: function() {
            var a = this;
            if (a.params.scrollbar.el && a.scrollbar.el) {
                var b = a.scrollbar, c = a.rtlTranslate, d = a.progress, e = b.dragSize, f = b.trackSize, g = b.$dragEl, h = b.$el, i = a.params.scrollbar, j = e, k = (f - e) * d;
                c ? 0 < (k = -k) ? (j = e - k, k = 0) : f < -k + e && (j = f + k) : k < 0 ? (j = e + k, 
                k = 0) : f < k + e && (j = f - k), a.isHorizontal() ? (l.transforms3d ? g.transform("translate3d(" + k + "px, 0, 0)") : g.transform("translateX(" + k + "px)"), 
                g[0].style.width = j + "px") : (l.transforms3d ? g.transform("translate3d(0px, " + k + "px, 0)") : g.transform("translateY(" + k + "px)"), 
                g[0].style.height = j + "px"), i.hide && (clearTimeout(a.scrollbar.timeout), h[0].style.opacity = 1, 
                a.scrollbar.timeout = setTimeout(function() {
                    h[0].style.opacity = 0, h.transition(400);
                }, 1e3));
            }
        },
        setTransition: function(a) {
            this.params.scrollbar.el && this.scrollbar.el && this.scrollbar.$dragEl.transition(a);
        },
        updateSize: function() {
            var a = this;
            if (a.params.scrollbar.el && a.scrollbar.el) {
                var b = a.scrollbar, c = b.$dragEl, d = b.$el;
                c[0].style.width = "", c[0].style.height = "";
                var e, f = a.isHorizontal() ? d[0].offsetWidth : d[0].offsetHeight, g = a.size / a.virtualSize, h = g * (f / a.size);
                e = "auto" === a.params.scrollbar.dragSize ? f * g : parseInt(a.params.scrollbar.dragSize, 10), 
                a.isHorizontal() ? c[0].style.width = e + "px" : c[0].style.height = e + "px", d[0].style.display = 1 <= g ? "none" : "", 
                a.params.scrollbar.hide && (d[0].style.opacity = 0), k.extend(b, {
                    trackSize: f,
                    divider: g,
                    moveDivider: h,
                    dragSize: e
                }), b.$el[a.params.watchOverflow && a.isLocked ? "addClass" : "removeClass"](a.params.scrollbar.lockClass);
            }
        },
        setDragPosition: function(a) {
            var b, c = this, d = c.scrollbar, e = c.rtlTranslate, f = d.$el, g = d.dragSize, h = d.trackSize;
            b = ((c.isHorizontal() ? "touchstart" === a.type || "touchmove" === a.type ? a.targetTouches[0].pageX : a.pageX || a.clientX : "touchstart" === a.type || "touchmove" === a.type ? a.targetTouches[0].pageY : a.pageY || a.clientY) - f.offset()[c.isHorizontal() ? "left" : "top"] - g / 2) / (h - g), 
            b = Math.max(Math.min(b, 1), 0), e && (b = 1 - b);
            var i = c.minTranslate() + (c.maxTranslate() - c.minTranslate()) * b;
            c.updateProgress(i), c.setTranslate(i), c.updateActiveIndex(), c.updateSlidesClasses();
        },
        onDragStart: function(a) {
            var b = this, c = b.params.scrollbar, d = b.scrollbar, e = b.$wrapperEl, f = d.$el, g = d.$dragEl;
            b.scrollbar.isTouched = !0, a.preventDefault(), a.stopPropagation(), e.transition(100), 
            g.transition(100), d.setDragPosition(a), clearTimeout(b.scrollbar.dragTimeout), 
            f.transition(0), c.hide && f.css("opacity", 1), b.emit("scrollbarDragStart", a);
        },
        onDragMove: function(a) {
            var b = this.scrollbar, c = this.$wrapperEl, d = b.$el, e = b.$dragEl;
            this.scrollbar.isTouched && (a.preventDefault ? a.preventDefault() : a.returnValue = !1, 
            b.setDragPosition(a), c.transition(0), d.transition(0), e.transition(0), this.emit("scrollbarDragMove", a));
        },
        onDragEnd: function(a) {
            var b = this, c = b.params.scrollbar, d = b.scrollbar.$el;
            b.scrollbar.isTouched && (b.scrollbar.isTouched = !1, c.hide && (clearTimeout(b.scrollbar.dragTimeout), 
            b.scrollbar.dragTimeout = k.nextTick(function() {
                d.css("opacity", 0), d.transition(400);
            }, 1e3)), b.emit("scrollbarDragEnd", a), c.snapOnRelease && b.slideToClosest());
        },
        enableDraggable: function() {
            var b = this;
            if (b.params.scrollbar.el) {
                var c = b.scrollbar, d = b.touchEventsTouch, e = b.touchEventsDesktop, f = b.params, g = c.$el[0], h = !(!l.passiveListener || !f.passiveListeners) && {
                    passive: !1,
                    capture: !1
                }, i = !(!l.passiveListener || !f.passiveListeners) && {
                    passive: !0,
                    capture: !1
                };
                l.touch ? (g.addEventListener(d.start, b.scrollbar.onDragStart, h), g.addEventListener(d.move, b.scrollbar.onDragMove, h), 
                g.addEventListener(d.end, b.scrollbar.onDragEnd, i)) : (g.addEventListener(e.start, b.scrollbar.onDragStart, h), 
                a.addEventListener(e.move, b.scrollbar.onDragMove, h), a.addEventListener(e.end, b.scrollbar.onDragEnd, i));
            }
        },
        disableDraggable: function() {
            var b = this;
            if (b.params.scrollbar.el) {
                var c = b.scrollbar, d = b.touchEventsTouch, e = b.touchEventsDesktop, f = b.params, g = c.$el[0], h = !(!l.passiveListener || !f.passiveListeners) && {
                    passive: !1,
                    capture: !1
                }, i = !(!l.passiveListener || !f.passiveListeners) && {
                    passive: !0,
                    capture: !1
                };
                l.touch ? (g.removeEventListener(d.start, b.scrollbar.onDragStart, h), g.removeEventListener(d.move, b.scrollbar.onDragMove, h), 
                g.removeEventListener(d.end, b.scrollbar.onDragEnd, i)) : (g.removeEventListener(e.start, b.scrollbar.onDragStart, h), 
                a.removeEventListener(e.move, b.scrollbar.onDragMove, h), a.removeEventListener(e.end, b.scrollbar.onDragEnd, i));
            }
        },
        init: function() {
            var a = this;
            if (a.params.scrollbar.el) {
                var b = a.scrollbar, c = a.$el, e = a.params.scrollbar, f = d(e.el);
                a.params.uniqueNavElements && "string" == typeof e.el && 1 < f.length && 1 === c.find(e.el).length && (f = c.find(e.el));
                var g = f.find("." + a.params.scrollbar.dragClass);
                0 === g.length && (g = d('<div class="' + a.params.scrollbar.dragClass + '"></div>'), 
                f.append(g)), k.extend(b, {
                    $el: f,
                    el: f[0],
                    $dragEl: g,
                    dragEl: g[0]
                }), e.draggable && b.enableDraggable();
            }
        },
        destroy: function() {
            this.scrollbar.disableDraggable();
        }
    }, Q = {
        setTransform: function(a, b) {
            var c = this.rtl, e = d(a), f = c ? -1 : 1, g = e.attr("data-swiper-parallax") || "0", h = e.attr("data-swiper-parallax-x"), i = e.attr("data-swiper-parallax-y"), j = e.attr("data-swiper-parallax-scale"), k = e.attr("data-swiper-parallax-opacity");
            if (h || i ? (h = h || "0", i = i || "0") : this.isHorizontal() ? (h = g, i = "0") : (i = g, 
            h = "0"), h = 0 <= h.indexOf("%") ? parseInt(h, 10) * b * f + "%" : h * b * f + "px", 
            i = 0 <= i.indexOf("%") ? parseInt(i, 10) * b + "%" : i * b + "px", null != k) {
                var l = k - (k - 1) * (1 - Math.abs(b));
                e[0].style.opacity = l;
            }
            if (null == j) e.transform("translate3d(" + h + ", " + i + ", 0px)"); else {
                var m = j - (j - 1) * (1 - Math.abs(b));
                e.transform("translate3d(" + h + ", " + i + ", 0px) scale(" + m + ")");
            }
        },
        setTranslate: function() {
            var a = this, b = a.$el, c = a.slides, e = a.progress, f = a.snapGrid;
            b.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(b, c) {
                a.parallax.setTransform(c, e);
            }), c.each(function(b, c) {
                var g = c.progress;
                1 < a.params.slidesPerGroup && "auto" !== a.params.slidesPerView && (g += Math.ceil(b / 2) - e * (f.length - 1)), 
                g = Math.min(Math.max(g, -1), 1), d(c).find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(b, c) {
                    a.parallax.setTransform(c, g);
                });
            });
        },
        setTransition: function(a) {
            void 0 === a && (a = this.params.speed);
            this.$el.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(b, c) {
                var e = d(c), f = parseInt(e.attr("data-swiper-parallax-duration"), 10) || a;
                0 === a && (f = 0), e.transition(f);
            });
        }
    }, R = {
        getDistanceBetweenTouches: function(a) {
            if (a.targetTouches.length < 2) return 1;
            var b = a.targetTouches[0].pageX, c = a.targetTouches[0].pageY, d = a.targetTouches[1].pageX, e = a.targetTouches[1].pageY;
            return Math.sqrt(Math.pow(d - b, 2) + Math.pow(e - c, 2));
        },
        onGestureStart: function(a) {
            var b = this, c = b.params.zoom, e = b.zoom, f = e.gesture;
            if (e.fakeGestureTouched = !1, e.fakeGestureMoved = !1, !l.gestures) {
                if ("touchstart" !== a.type || "touchstart" === a.type && a.targetTouches.length < 2) return;
                e.fakeGestureTouched = !0, f.scaleStart = R.getDistanceBetweenTouches(a);
            }
            f.$slideEl && f.$slideEl.length || (f.$slideEl = d(a.target).closest(".swiper-slide"), 
            0 === f.$slideEl.length && (f.$slideEl = b.slides.eq(b.activeIndex)), f.$imageEl = f.$slideEl.find("img, svg, canvas"), 
            f.$imageWrapEl = f.$imageEl.parent("." + c.containerClass), f.maxRatio = f.$imageWrapEl.attr("data-swiper-zoom") || c.maxRatio, 
            0 !== f.$imageWrapEl.length) ? (f.$imageEl.transition(0), b.zoom.isScaling = !0) : f.$imageEl = void 0;
        },
        onGestureChange: function(a) {
            var b = this.params.zoom, c = this.zoom, d = c.gesture;
            if (!l.gestures) {
                if ("touchmove" !== a.type || "touchmove" === a.type && a.targetTouches.length < 2) return;
                c.fakeGestureMoved = !0, d.scaleMove = R.getDistanceBetweenTouches(a);
            }
            d.$imageEl && 0 !== d.$imageEl.length && (c.scale = l.gestures ? a.scale * c.currentScale : d.scaleMove / d.scaleStart * c.currentScale, 
            c.scale > d.maxRatio && (c.scale = d.maxRatio - 1 + Math.pow(c.scale - d.maxRatio + 1, .5)), 
            c.scale < b.minRatio && (c.scale = b.minRatio + 1 - Math.pow(b.minRatio - c.scale + 1, .5)), 
            d.$imageEl.transform("translate3d(0,0,0) scale(" + c.scale + ")"));
        },
        onGestureEnd: function(a) {
            var b = this.params.zoom, c = this.zoom, d = c.gesture;
            if (!l.gestures) {
                if (!c.fakeGestureTouched || !c.fakeGestureMoved) return;
                if ("touchend" !== a.type || "touchend" === a.type && a.changedTouches.length < 2 && !w.android) return;
                c.fakeGestureTouched = !1, c.fakeGestureMoved = !1;
            }
            d.$imageEl && 0 !== d.$imageEl.length && (c.scale = Math.max(Math.min(c.scale, d.maxRatio), b.minRatio), 
            d.$imageEl.transition(this.params.speed).transform("translate3d(0,0,0) scale(" + c.scale + ")"), 
            c.currentScale = c.scale, c.isScaling = !1, 1 === c.scale && (d.$slideEl = void 0));
        },
        onTouchStart: function(a) {
            var b = this.zoom, c = b.gesture, d = b.image;
            c.$imageEl && 0 !== c.$imageEl.length && (d.isTouched || (w.android && a.preventDefault(), 
            d.isTouched = !0, d.touchesStart.x = "touchstart" === a.type ? a.targetTouches[0].pageX : a.pageX, 
            d.touchesStart.y = "touchstart" === a.type ? a.targetTouches[0].pageY : a.pageY));
        },
        onTouchMove: function(a) {
            var b = this, c = b.zoom, d = c.gesture, e = c.image, f = c.velocity;
            if (d.$imageEl && 0 !== d.$imageEl.length && (b.allowClick = !1, e.isTouched && d.$slideEl)) {
                e.isMoved || (e.width = d.$imageEl[0].offsetWidth, e.height = d.$imageEl[0].offsetHeight, 
                e.startX = k.getTranslate(d.$imageWrapEl[0], "x") || 0, e.startY = k.getTranslate(d.$imageWrapEl[0], "y") || 0, 
                d.slideWidth = d.$slideEl[0].offsetWidth, d.slideHeight = d.$slideEl[0].offsetHeight, 
                d.$imageWrapEl.transition(0), b.rtl && (e.startX = -e.startX, e.startY = -e.startY));
                var g = e.width * c.scale, h = e.height * c.scale;
                if (!(g < d.slideWidth && h < d.slideHeight)) {
                    if (e.minX = Math.min(d.slideWidth / 2 - g / 2, 0), e.maxX = -e.minX, e.minY = Math.min(d.slideHeight / 2 - h / 2, 0), 
                    e.maxY = -e.minY, e.touchesCurrent.x = "touchmove" === a.type ? a.targetTouches[0].pageX : a.pageX, 
                    e.touchesCurrent.y = "touchmove" === a.type ? a.targetTouches[0].pageY : a.pageY, 
                    !e.isMoved && !c.isScaling) {
                        if (b.isHorizontal() && (Math.floor(e.minX) === Math.floor(e.startX) && e.touchesCurrent.x < e.touchesStart.x || Math.floor(e.maxX) === Math.floor(e.startX) && e.touchesCurrent.x > e.touchesStart.x)) return void (e.isTouched = !1);
                        if (!b.isHorizontal() && (Math.floor(e.minY) === Math.floor(e.startY) && e.touchesCurrent.y < e.touchesStart.y || Math.floor(e.maxY) === Math.floor(e.startY) && e.touchesCurrent.y > e.touchesStart.y)) return void (e.isTouched = !1);
                    }
                    a.preventDefault(), a.stopPropagation(), e.isMoved = !0, e.currentX = e.touchesCurrent.x - e.touchesStart.x + e.startX, 
                    e.currentY = e.touchesCurrent.y - e.touchesStart.y + e.startY, e.currentX < e.minX && (e.currentX = e.minX + 1 - Math.pow(e.minX - e.currentX + 1, .8)), 
                    e.currentX > e.maxX && (e.currentX = e.maxX - 1 + Math.pow(e.currentX - e.maxX + 1, .8)), 
                    e.currentY < e.minY && (e.currentY = e.minY + 1 - Math.pow(e.minY - e.currentY + 1, .8)), 
                    e.currentY > e.maxY && (e.currentY = e.maxY - 1 + Math.pow(e.currentY - e.maxY + 1, .8)), 
                    f.prevPositionX || (f.prevPositionX = e.touchesCurrent.x), f.prevPositionY || (f.prevPositionY = e.touchesCurrent.y), 
                    f.prevTime || (f.prevTime = Date.now()), f.x = (e.touchesCurrent.x - f.prevPositionX) / (Date.now() - f.prevTime) / 2, 
                    f.y = (e.touchesCurrent.y - f.prevPositionY) / (Date.now() - f.prevTime) / 2, Math.abs(e.touchesCurrent.x - f.prevPositionX) < 2 && (f.x = 0), 
                    Math.abs(e.touchesCurrent.y - f.prevPositionY) < 2 && (f.y = 0), f.prevPositionX = e.touchesCurrent.x, 
                    f.prevPositionY = e.touchesCurrent.y, f.prevTime = Date.now(), d.$imageWrapEl.transform("translate3d(" + e.currentX + "px, " + e.currentY + "px,0)");
                }
            }
        },
        onTouchEnd: function() {
            var a = this.zoom, b = a.gesture, c = a.image, d = a.velocity;
            if (b.$imageEl && 0 !== b.$imageEl.length) {
                if (!c.isTouched || !c.isMoved) return c.isTouched = !1, void (c.isMoved = !1);
                c.isTouched = !1, c.isMoved = !1;
                var e = 300, f = 300, g = d.x * e, h = c.currentX + g, i = d.y * f, j = c.currentY + i;
                0 !== d.x && (e = Math.abs((h - c.currentX) / d.x)), 0 !== d.y && (f = Math.abs((j - c.currentY) / d.y));
                var k = Math.max(e, f);
                c.currentX = h, c.currentY = j;
                var l = c.width * a.scale, m = c.height * a.scale;
                c.minX = Math.min(b.slideWidth / 2 - l / 2, 0), c.maxX = -c.minX, c.minY = Math.min(b.slideHeight / 2 - m / 2, 0), 
                c.maxY = -c.minY, c.currentX = Math.max(Math.min(c.currentX, c.maxX), c.minX), c.currentY = Math.max(Math.min(c.currentY, c.maxY), c.minY), 
                b.$imageWrapEl.transition(k).transform("translate3d(" + c.currentX + "px, " + c.currentY + "px,0)");
            }
        },
        onTransitionEnd: function() {
            var a = this.zoom, b = a.gesture;
            b.$slideEl && this.previousIndex !== this.activeIndex && (b.$imageEl.transform("translate3d(0,0,0) scale(1)"), 
            b.$imageWrapEl.transform("translate3d(0,0,0)"), a.scale = 1, a.currentScale = 1, 
            b.$slideEl = void 0, b.$imageEl = void 0, b.$imageWrapEl = void 0);
        },
        toggle: function(a) {
            var b = this.zoom;
            b.scale && 1 !== b.scale ? b.out() : b.in(a);
        },
        "in": function(a) {
            var b, c, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s = this, t = s.zoom, u = s.params.zoom, v = t.gesture, w = t.image;
            (v.$slideEl || (v.$slideEl = s.clickedSlide ? d(s.clickedSlide) : s.slides.eq(s.activeIndex), 
            v.$imageEl = v.$slideEl.find("img, svg, canvas"), v.$imageWrapEl = v.$imageEl.parent("." + u.containerClass)), 
            v.$imageEl && 0 !== v.$imageEl.length) && (v.$slideEl.addClass("" + u.zoomedSlideClass), 
            void 0 === w.touchesStart.x && a ? (b = "touchend" === a.type ? a.changedTouches[0].pageX : a.pageX, 
            c = "touchend" === a.type ? a.changedTouches[0].pageY : a.pageY) : (b = w.touchesStart.x, 
            c = w.touchesStart.y), t.scale = v.$imageWrapEl.attr("data-swiper-zoom") || u.maxRatio, 
            t.currentScale = v.$imageWrapEl.attr("data-swiper-zoom") || u.maxRatio, a ? (q = v.$slideEl[0].offsetWidth, 
            r = v.$slideEl[0].offsetHeight, e = v.$slideEl.offset().left + q / 2 - b, f = v.$slideEl.offset().top + r / 2 - c, 
            i = v.$imageEl[0].offsetWidth, j = v.$imageEl[0].offsetHeight, k = i * t.scale, 
            l = j * t.scale, o = -(m = Math.min(q / 2 - k / 2, 0)), p = -(n = Math.min(r / 2 - l / 2, 0)), 
            (g = e * t.scale) < m && (g = m), o < g && (g = o), (h = f * t.scale) < n && (h = n), 
            p < h && (h = p)) : h = g = 0, v.$imageWrapEl.transition(300).transform("translate3d(" + g + "px, " + h + "px,0)"), 
            v.$imageEl.transition(300).transform("translate3d(0,0,0) scale(" + t.scale + ")"));
        },
        out: function() {
            var a = this, b = a.zoom, c = a.params.zoom, e = b.gesture;
            e.$slideEl || (e.$slideEl = a.clickedSlide ? d(a.clickedSlide) : a.slides.eq(a.activeIndex), 
            e.$imageEl = e.$slideEl.find("img, svg, canvas"), e.$imageWrapEl = e.$imageEl.parent("." + c.containerClass)), 
            e.$imageEl && 0 !== e.$imageEl.length && (b.scale = 1, b.currentScale = 1, e.$imageWrapEl.transition(300).transform("translate3d(0,0,0)"), 
            e.$imageEl.transition(300).transform("translate3d(0,0,0) scale(1)"), e.$slideEl.removeClass("" + c.zoomedSlideClass), 
            e.$slideEl = void 0);
        },
        enable: function() {
            var a = this, b = a.zoom;
            if (!b.enabled) {
                b.enabled = !0;
                var c = !("touchstart" !== a.touchEvents.start || !l.passiveListener || !a.params.passiveListeners) && {
                    passive: !0,
                    capture: !1
                };
                l.gestures ? (a.$wrapperEl.on("gesturestart", ".swiper-slide", b.onGestureStart, c), 
                a.$wrapperEl.on("gesturechange", ".swiper-slide", b.onGestureChange, c), a.$wrapperEl.on("gestureend", ".swiper-slide", b.onGestureEnd, c)) : "touchstart" === a.touchEvents.start && (a.$wrapperEl.on(a.touchEvents.start, ".swiper-slide", b.onGestureStart, c), 
                a.$wrapperEl.on(a.touchEvents.move, ".swiper-slide", b.onGestureChange, c), a.$wrapperEl.on(a.touchEvents.end, ".swiper-slide", b.onGestureEnd, c)), 
                a.$wrapperEl.on(a.touchEvents.move, "." + a.params.zoom.containerClass, b.onTouchMove);
            }
        },
        disable: function() {
            var a = this, b = a.zoom;
            if (b.enabled) {
                a.zoom.enabled = !1;
                var c = !("touchstart" !== a.touchEvents.start || !l.passiveListener || !a.params.passiveListeners) && {
                    passive: !0,
                    capture: !1
                };
                l.gestures ? (a.$wrapperEl.off("gesturestart", ".swiper-slide", b.onGestureStart, c), 
                a.$wrapperEl.off("gesturechange", ".swiper-slide", b.onGestureChange, c), a.$wrapperEl.off("gestureend", ".swiper-slide", b.onGestureEnd, c)) : "touchstart" === a.touchEvents.start && (a.$wrapperEl.off(a.touchEvents.start, ".swiper-slide", b.onGestureStart, c), 
                a.$wrapperEl.off(a.touchEvents.move, ".swiper-slide", b.onGestureChange, c), a.$wrapperEl.off(a.touchEvents.end, ".swiper-slide", b.onGestureEnd, c)), 
                a.$wrapperEl.off(a.touchEvents.move, "." + a.params.zoom.containerClass, b.onTouchMove);
            }
        }
    }, S = {
        loadInSlide: function(a, b) {
            void 0 === b && (b = !0);
            var c = this, e = c.params.lazy;
            if (void 0 !== a && 0 !== c.slides.length) {
                var f = c.virtual && c.params.virtual.enabled ? c.$wrapperEl.children("." + c.params.slideClass + '[data-swiper-slide-index="' + a + '"]') : c.slides.eq(a), g = f.find("." + e.elementClass + ":not(." + e.loadedClass + "):not(." + e.loadingClass + ")");
                !f.hasClass(e.elementClass) || f.hasClass(e.loadedClass) || f.hasClass(e.loadingClass) || (g = g.add(f[0])), 
                0 !== g.length && g.each(function(a, g) {
                    var h = d(g);
                    h.addClass(e.loadingClass);
                    var i = h.attr("data-background"), j = h.attr("data-src"), k = h.attr("data-srcset"), l = h.attr("data-sizes");
                    c.loadImage(h[0], j || i, k, l, !1, function() {
                        if (null != c && c && (!c || c.params) && !c.destroyed) {
                            if (i ? (h.css("background-image", 'url("' + i + '")'), h.removeAttr("data-background")) : (k && (h.attr("srcset", k), 
                            h.removeAttr("data-srcset")), l && (h.attr("sizes", l), h.removeAttr("data-sizes")), 
                            j && (h.attr("src", j), h.removeAttr("data-src"))), h.addClass(e.loadedClass).removeClass(e.loadingClass), 
                            f.find("." + e.preloaderClass).remove(), c.params.loop && b) {
                                var a = f.attr("data-swiper-slide-index");
                                if (f.hasClass(c.params.slideDuplicateClass)) {
                                    var d = c.$wrapperEl.children('[data-swiper-slide-index="' + a + '"]:not(.' + c.params.slideDuplicateClass + ")");
                                    c.lazy.loadInSlide(d.index(), !1);
                                } else {
                                    var g = c.$wrapperEl.children("." + c.params.slideDuplicateClass + '[data-swiper-slide-index="' + a + '"]');
                                    c.lazy.loadInSlide(g.index(), !1);
                                }
                            }
                            c.emit("lazyImageReady", f[0], h[0]);
                        }
                    }), c.emit("lazyImageLoad", f[0], h[0]);
                });
            }
        },
        load: function() {
            var a = this, b = a.$wrapperEl, c = a.params, e = a.slides, f = a.activeIndex, g = a.virtual && c.virtual.enabled, h = c.lazy, i = c.slidesPerView;
            function j(a) {
                if (g) {
                    if (b.children("." + c.slideClass + '[data-swiper-slide-index="' + a + '"]').length) return !0;
                } else if (e[a]) return !0;
                return !1;
            }
            function k(a) {
                return g ? d(a).attr("data-swiper-slide-index") : d(a).index();
            }
            if ("auto" === i && (i = 0), a.lazy.initialImageLoaded || (a.lazy.initialImageLoaded = !0), 
            a.params.watchSlidesVisibility) b.children("." + c.slideVisibleClass).each(function(b, c) {
                var e = g ? d(c).attr("data-swiper-slide-index") : d(c).index();
                a.lazy.loadInSlide(e);
            }); else if (1 < i) for (var l = f; l < f + i; l += 1) j(l) && a.lazy.loadInSlide(l); else a.lazy.loadInSlide(f);
            if (h.loadPrevNext) if (1 < i || h.loadPrevNextAmount && 1 < h.loadPrevNextAmount) {
                for (var m = h.loadPrevNextAmount, n = i, o = Math.min(f + n + Math.max(m, n), e.length), p = Math.max(f - Math.max(n, m), 0), q = f + i; q < o; q += 1) j(q) && a.lazy.loadInSlide(q);
                for (var r = p; r < f; r += 1) j(r) && a.lazy.loadInSlide(r);
            } else {
                var s = b.children("." + c.slideNextClass);
                0 < s.length && a.lazy.loadInSlide(k(s));
                var t = b.children("." + c.slidePrevClass);
                0 < t.length && a.lazy.loadInSlide(k(t));
            }
        }
    }, T = {
        LinearSpline: function(a, b) {
            var c, d, e, f, g, h = function(a, b) {
                for (d = -1, c = a.length; 1 < c - d; ) a[e = c + d >> 1] <= b ? d = e : c = e;
                return c;
            };
            return this.x = a, this.y = b, this.lastIndex = a.length - 1, this.interpolate = function(a) {
                return a ? (g = h(this.x, a), f = g - 1, (a - this.x[f]) * (this.y[g] - this.y[f]) / (this.x[g] - this.x[f]) + this.y[f]) : 0;
            }, this;
        },
        getInterpolateFunction: function(a) {
            var b = this;
            b.controller.spline || (b.controller.spline = b.params.loop ? new T.LinearSpline(b.slidesGrid, a.slidesGrid) : new T.LinearSpline(b.snapGrid, a.snapGrid));
        },
        setTranslate: function(a, b) {
            var c, d, e = this, f = e.controller.control;
            function g(a) {
                var b = e.rtlTranslate ? -e.translate : e.translate;
                "slide" === e.params.controller.by && (e.controller.getInterpolateFunction(a), d = -e.controller.spline.interpolate(-b)), 
                d && "container" !== e.params.controller.by || (c = (a.maxTranslate() - a.minTranslate()) / (e.maxTranslate() - e.minTranslate()), 
                d = (b - e.minTranslate()) * c + a.minTranslate()), e.params.controller.inverse && (d = a.maxTranslate() - d), 
                a.updateProgress(d), a.setTranslate(d, e), a.updateActiveIndex(), a.updateSlidesClasses();
            }
            if (Array.isArray(f)) for (var h = 0; h < f.length; h += 1) f[h] !== b && f[h] instanceof B && g(f[h]); else f instanceof B && b !== f && g(f);
        },
        setTransition: function(a, b) {
            var c, d = this, e = d.controller.control;
            function f(b) {
                b.setTransition(a, d), 0 !== a && (b.transitionStart(), b.params.autoHeight && k.nextTick(function() {
                    b.updateAutoHeight();
                }), b.$wrapperEl.transitionEnd(function() {
                    e && (b.params.loop && "slide" === d.params.controller.by && b.loopFix(), b.transitionEnd());
                }));
            }
            if (Array.isArray(e)) for (c = 0; c < e.length; c += 1) e[c] !== b && e[c] instanceof B && f(e[c]); else e instanceof B && b !== e && f(e);
        }
    }, U = {
        makeElFocusable: function(a) {
            return a.attr("tabIndex", "0"), a;
        },
        addElRole: function(a, b) {
            return a.attr("role", b), a;
        },
        addElLabel: function(a, b) {
            return a.attr("aria-label", b), a;
        },
        disableEl: function(a) {
            return a.attr("aria-disabled", !0), a;
        },
        enableEl: function(a) {
            return a.attr("aria-disabled", !1), a;
        },
        onEnterKey: function(a) {
            var b = this, c = b.params.a11y;
            if (13 === a.keyCode) {
                var e = d(a.target);
                b.navigation && b.navigation.$nextEl && e.is(b.navigation.$nextEl) && (b.isEnd && !b.params.loop || b.slideNext(), 
                b.isEnd ? b.a11y.notify(c.lastSlideMessage) : b.a11y.notify(c.nextSlideMessage)), 
                b.navigation && b.navigation.$prevEl && e.is(b.navigation.$prevEl) && (b.isBeginning && !b.params.loop || b.slidePrev(), 
                b.isBeginning ? b.a11y.notify(c.firstSlideMessage) : b.a11y.notify(c.prevSlideMessage)), 
                b.pagination && e.is("." + b.params.pagination.bulletClass) && e[0].click();
            }
        },
        notify: function(a) {
            var b = this.a11y.liveRegion;
            0 !== b.length && (b.html(""), b.html(a));
        },
        updateNavigation: function() {
            var a = this;
            if (!a.params.loop) {
                var b = a.navigation, c = b.$nextEl, d = b.$prevEl;
                d && 0 < d.length && (a.isBeginning ? a.a11y.disableEl(d) : a.a11y.enableEl(d)), 
                c && 0 < c.length && (a.isEnd ? a.a11y.disableEl(c) : a.a11y.enableEl(c));
            }
        },
        updatePagination: function() {
            var a = this, b = a.params.a11y;
            a.pagination && a.params.pagination.clickable && a.pagination.bullets && a.pagination.bullets.length && a.pagination.bullets.each(function(c, e) {
                var f = d(e);
                a.a11y.makeElFocusable(f), a.a11y.addElRole(f, "button"), a.a11y.addElLabel(f, b.paginationBulletMessage.replace(/{{index}}/, f.index() + 1));
            });
        },
        init: function() {
            var a = this;
            a.$el.append(a.a11y.liveRegion);
            var b, c, d = a.params.a11y;
            a.navigation && a.navigation.$nextEl && (b = a.navigation.$nextEl), a.navigation && a.navigation.$prevEl && (c = a.navigation.$prevEl), 
            b && (a.a11y.makeElFocusable(b), a.a11y.addElRole(b, "button"), a.a11y.addElLabel(b, d.nextSlideMessage), 
            b.on("keydown", a.a11y.onEnterKey)), c && (a.a11y.makeElFocusable(c), a.a11y.addElRole(c, "button"), 
            a.a11y.addElLabel(c, d.prevSlideMessage), c.on("keydown", a.a11y.onEnterKey)), a.pagination && a.params.pagination.clickable && a.pagination.bullets && a.pagination.bullets.length && a.pagination.$el.on("keydown", "." + a.params.pagination.bulletClass, a.a11y.onEnterKey);
        },
        destroy: function() {
            var a, b, c = this;
            c.a11y.liveRegion && 0 < c.a11y.liveRegion.length && c.a11y.liveRegion.remove(), 
            c.navigation && c.navigation.$nextEl && (a = c.navigation.$nextEl), c.navigation && c.navigation.$prevEl && (b = c.navigation.$prevEl), 
            a && a.off("keydown", c.a11y.onEnterKey), b && b.off("keydown", c.a11y.onEnterKey), 
            c.pagination && c.params.pagination.clickable && c.pagination.bullets && c.pagination.bullets.length && c.pagination.$el.off("keydown", "." + c.params.pagination.bulletClass, c.a11y.onEnterKey);
        }
    }, V = {
        init: function() {
            var a = this;
            if (a.params.history) {
                if (!b.history || !b.history.pushState) return a.params.history.enabled = !1, void (a.params.hashNavigation.enabled = !0);
                var c = a.history;
                c.initialized = !0, c.paths = V.getPathValues(), (c.paths.key || c.paths.value) && (c.scrollToSlide(0, c.paths.value, a.params.runCallbacksOnInit), 
                a.params.history.replaceState || b.addEventListener("popstate", a.history.setHistoryPopState));
            }
        },
        destroy: function() {
            this.params.history.replaceState || b.removeEventListener("popstate", this.history.setHistoryPopState);
        },
        setHistoryPopState: function() {
            this.history.paths = V.getPathValues(), this.history.scrollToSlide(this.params.speed, this.history.paths.value, !1);
        },
        getPathValues: function() {
            var a = b.location.pathname.slice(1).split("/").filter(function(a) {
                return "" !== a;
            }), c = a.length;
            return {
                key: a[c - 2],
                value: a[c - 1]
            };
        },
        setHistory: function(a, c) {
            if (this.history.initialized && this.params.history.enabled) {
                var d = this.slides.eq(c), e = V.slugify(d.attr("data-history"));
                b.location.pathname.includes(a) || (e = a + "/" + e);
                var f = b.history.state;
                f && f.value === e || (this.params.history.replaceState ? b.history.replaceState({
                    value: e
                }, null, e) : b.history.pushState({
                    value: e
                }, null, e));
            }
        },
        slugify: function(a) {
            return a.toString().replace(/\s+/g, "-").replace(/[^\w-]+/g, "").replace(/--+/g, "-").replace(/^-+/, "").replace(/-+$/, "");
        },
        scrollToSlide: function(a, b, c) {
            var d = this;
            if (b) for (var e = 0, f = d.slides.length; e < f; e += 1) {
                var g = d.slides.eq(e);
                if (V.slugify(g.attr("data-history")) === b && !g.hasClass(d.params.slideDuplicateClass)) {
                    var h = g.index();
                    d.slideTo(h, a, c);
                }
            } else d.slideTo(0, a, c);
        }
    }, W = {
        onHashCange: function() {
            var b = this, c = a.location.hash.replace("#", "");
            if (c !== b.slides.eq(b.activeIndex).attr("data-hash")) {
                var d = b.$wrapperEl.children("." + b.params.slideClass + '[data-hash="' + c + '"]').index();
                if (void 0 === d) return;
                b.slideTo(d);
            }
        },
        setHash: function() {
            var c = this;
            if (c.hashNavigation.initialized && c.params.hashNavigation.enabled) if (c.params.hashNavigation.replaceState && b.history && b.history.replaceState) b.history.replaceState(null, null, "#" + c.slides.eq(c.activeIndex).attr("data-hash") || ""); else {
                var d = c.slides.eq(c.activeIndex), e = d.attr("data-hash") || d.attr("data-history");
                a.location.hash = e || "";
            }
        },
        init: function() {
            var c = this;
            if (!(!c.params.hashNavigation.enabled || c.params.history && c.params.history.enabled)) {
                c.hashNavigation.initialized = !0;
                var e = a.location.hash.replace("#", "");
                if (e) for (var f = 0, g = c.slides.length; f < g; f += 1) {
                    var h = c.slides.eq(f);
                    if ((h.attr("data-hash") || h.attr("data-history")) === e && !h.hasClass(c.params.slideDuplicateClass)) {
                        var i = h.index();
                        c.slideTo(i, 0, c.params.runCallbacksOnInit, !0);
                    }
                }
                c.params.hashNavigation.watchState && d(b).on("hashchange", c.hashNavigation.onHashCange);
            }
        },
        destroy: function() {
            this.params.hashNavigation.watchState && d(b).off("hashchange", this.hashNavigation.onHashCange);
        }
    }, X = {
        run: function() {
            var a = this, b = a.slides.eq(a.activeIndex), c = a.params.autoplay.delay;
            b.attr("data-swiper-autoplay") && (c = b.attr("data-swiper-autoplay") || a.params.autoplay.delay), 
            a.autoplay.timeout = k.nextTick(function() {
                a.params.autoplay.reverseDirection ? a.params.loop ? (a.loopFix(), a.slidePrev(a.params.speed, !0, !0), 
                a.emit("autoplay")) : a.isBeginning ? a.params.autoplay.stopOnLastSlide ? a.autoplay.stop() : (a.slideTo(a.slides.length - 1, a.params.speed, !0, !0), 
                a.emit("autoplay")) : (a.slidePrev(a.params.speed, !0, !0), a.emit("autoplay")) : a.params.loop ? (a.loopFix(), 
                a.slideNext(a.params.speed, !0, !0), a.emit("autoplay")) : a.isEnd ? a.params.autoplay.stopOnLastSlide ? a.autoplay.stop() : (a.slideTo(0, a.params.speed, !0, !0), 
                a.emit("autoplay")) : (a.slideNext(a.params.speed, !0, !0), a.emit("autoplay"));
            }, c);
        },
        start: function() {
            var a = this;
            return void 0 === a.autoplay.timeout && !a.autoplay.running && (a.autoplay.running = !0, 
            a.emit("autoplayStart"), a.autoplay.run(), !0);
        },
        stop: function() {
            var a = this;
            return !!a.autoplay.running && void 0 !== a.autoplay.timeout && (a.autoplay.timeout && (clearTimeout(a.autoplay.timeout), 
            a.autoplay.timeout = void 0), a.autoplay.running = !1, a.emit("autoplayStop"), !0);
        },
        pause: function(a) {
            var b = this;
            b.autoplay.running && (b.autoplay.paused || (b.autoplay.timeout && clearTimeout(b.autoplay.timeout), 
            b.autoplay.paused = !0, 0 !== a && b.params.autoplay.waitForTransition ? (b.$wrapperEl[0].addEventListener("transitionend", b.autoplay.onTransitionEnd), 
            b.$wrapperEl[0].addEventListener("webkitTransitionEnd", b.autoplay.onTransitionEnd)) : (b.autoplay.paused = !1, 
            b.autoplay.run())));
        }
    }, Y = {
        setTranslate: function() {
            for (var a = this, b = a.slides, c = 0; c < b.length; c += 1) {
                var d = a.slides.eq(c), e = -d[0].swiperSlideOffset;
                a.params.virtualTranslate || (e -= a.translate);
                var f = 0;
                a.isHorizontal() || (f = e, e = 0);
                var g = a.params.fadeEffect.crossFade ? Math.max(1 - Math.abs(d[0].progress), 0) : 1 + Math.min(Math.max(d[0].progress, -1), 0);
                d.css({
                    opacity: g
                }).transform("translate3d(" + e + "px, " + f + "px, 0px)");
            }
        },
        setTransition: function(a) {
            var b = this, c = b.slides, d = b.$wrapperEl;
            if (c.transition(a), b.params.virtualTranslate && 0 !== a) {
                var e = !1;
                c.transitionEnd(function() {
                    if (!e && b && !b.destroyed) {
                        e = !0, b.animating = !1;
                        for (var a = [ "webkitTransitionEnd", "transitionend" ], c = 0; c < a.length; c += 1) d.trigger(a[c]);
                    }
                });
            }
        }
    }, Z = {
        setTranslate: function() {
            var a, b = this, c = b.$el, e = b.$wrapperEl, f = b.slides, g = b.width, h = b.height, i = b.rtlTranslate, j = b.size, k = b.params.cubeEffect, l = b.isHorizontal(), n = b.virtual && b.params.virtual.enabled, o = 0;
            k.shadow && (l ? (0 === (a = e.find(".swiper-cube-shadow")).length && (a = d('<div class="swiper-cube-shadow"></div>'), 
            e.append(a)), a.css({
                height: g + "px"
            })) : 0 === (a = c.find(".swiper-cube-shadow")).length && (a = d('<div class="swiper-cube-shadow"></div>'), 
            c.append(a)));
            for (var p = 0; p < f.length; p += 1) {
                var q = f.eq(p), r = p;
                n && (r = parseInt(q.attr("data-swiper-slide-index"), 10));
                var s = 90 * r, t = Math.floor(s / 360);
                i && (s = -s, t = Math.floor(-s / 360));
                var u = Math.max(Math.min(q[0].progress, 1), -1), v = 0, w = 0, x = 0;
                r % 4 == 0 ? (v = 4 * -t * j, x = 0) : (r - 1) % 4 == 0 ? (v = 0, x = 4 * -t * j) : (r - 2) % 4 == 0 ? (v = j + 4 * t * j, 
                x = j) : (r - 3) % 4 == 0 && (v = -j, x = 3 * j + 4 * j * t), i && (v = -v), l || (w = v, 
                v = 0);
                var y = "rotateX(" + (l ? 0 : -s) + "deg) rotateY(" + (l ? s : 0) + "deg) translate3d(" + v + "px, " + w + "px, " + x + "px)";
                if (u <= 1 && -1 < u && (o = 90 * r + 90 * u, i && (o = 90 * -r - 90 * u)), q.transform(y), 
                k.slideShadows) {
                    var z = l ? q.find(".swiper-slide-shadow-left") : q.find(".swiper-slide-shadow-top"), A = l ? q.find(".swiper-slide-shadow-right") : q.find(".swiper-slide-shadow-bottom");
                    0 === z.length && (z = d('<div class="swiper-slide-shadow-' + (l ? "left" : "top") + '"></div>'), 
                    q.append(z)), 0 === A.length && (A = d('<div class="swiper-slide-shadow-' + (l ? "right" : "bottom") + '"></div>'), 
                    q.append(A)), z.length && (z[0].style.opacity = Math.max(-u, 0)), A.length && (A[0].style.opacity = Math.max(u, 0));
                }
            }
            if (e.css({
                "-webkit-transform-origin": "50% 50% -" + j / 2 + "px",
                "-moz-transform-origin": "50% 50% -" + j / 2 + "px",
                "-ms-transform-origin": "50% 50% -" + j / 2 + "px",
                "transform-origin": "50% 50% -" + j / 2 + "px"
            }), k.shadow) if (l) a.transform("translate3d(0px, " + (g / 2 + k.shadowOffset) + "px, " + -g / 2 + "px) rotateX(90deg) rotateZ(0deg) scale(" + k.shadowScale + ")"); else {
                var B = Math.abs(o) - 90 * Math.floor(Math.abs(o) / 90), C = 1.5 - (Math.sin(2 * B * Math.PI / 360) / 2 + Math.cos(2 * B * Math.PI / 360) / 2), D = k.shadowScale, E = k.shadowScale / C, F = k.shadowOffset;
                a.transform("scale3d(" + D + ", 1, " + E + ") translate3d(0px, " + (h / 2 + F) + "px, " + -h / 2 / E + "px) rotateX(-90deg)");
            }
            var G = m.isSafari || m.isUiWebView ? -j / 2 : 0;
            e.transform("translate3d(0px,0," + G + "px) rotateX(" + (b.isHorizontal() ? 0 : o) + "deg) rotateY(" + (b.isHorizontal() ? -o : 0) + "deg)");
        },
        setTransition: function(a) {
            var b = this.$el;
            this.slides.transition(a).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(a), 
            this.params.cubeEffect.shadow && !this.isHorizontal() && b.find(".swiper-cube-shadow").transition(a);
        }
    }, $ = {
        setTranslate: function() {
            for (var a = this, b = a.slides, c = a.rtlTranslate, e = 0; e < b.length; e += 1) {
                var f = b.eq(e), g = f[0].progress;
                a.params.flipEffect.limitRotation && (g = Math.max(Math.min(f[0].progress, 1), -1));
                var h = -180 * g, i = 0, j = -f[0].swiperSlideOffset, k = 0;
                if (a.isHorizontal() ? c && (h = -h) : (k = j, i = -h, h = j = 0), f[0].style.zIndex = -Math.abs(Math.round(g)) + b.length, 
                a.params.flipEffect.slideShadows) {
                    var l = a.isHorizontal() ? f.find(".swiper-slide-shadow-left") : f.find(".swiper-slide-shadow-top"), m = a.isHorizontal() ? f.find(".swiper-slide-shadow-right") : f.find(".swiper-slide-shadow-bottom");
                    0 === l.length && (l = d('<div class="swiper-slide-shadow-' + (a.isHorizontal() ? "left" : "top") + '"></div>'), 
                    f.append(l)), 0 === m.length && (m = d('<div class="swiper-slide-shadow-' + (a.isHorizontal() ? "right" : "bottom") + '"></div>'), 
                    f.append(m)), l.length && (l[0].style.opacity = Math.max(-g, 0)), m.length && (m[0].style.opacity = Math.max(g, 0));
                }
                f.transform("translate3d(" + j + "px, " + k + "px, 0px) rotateX(" + i + "deg) rotateY(" + h + "deg)");
            }
        },
        setTransition: function(a) {
            var b = this, c = b.slides, d = b.activeIndex, e = b.$wrapperEl;
            if (c.transition(a).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(a), 
            b.params.virtualTranslate && 0 !== a) {
                var f = !1;
                c.eq(d).transitionEnd(function() {
                    if (!f && b && !b.destroyed) {
                        f = !0, b.animating = !1;
                        for (var a = [ "webkitTransitionEnd", "transitionend" ], c = 0; c < a.length; c += 1) e.trigger(a[c]);
                    }
                });
            }
        }
    }, _ = {
        setTranslate: function() {
            for (var a = this, b = a.width, c = a.height, e = a.slides, f = a.$wrapperEl, g = a.slidesSizesGrid, h = a.params.coverflowEffect, i = a.isHorizontal(), j = a.translate, k = i ? b / 2 - j : c / 2 - j, m = i ? h.rotate : -h.rotate, n = h.depth, o = 0, p = e.length; o < p; o += 1) {
                var q = e.eq(o), r = g[o], s = (k - q[0].swiperSlideOffset - r / 2) / r * h.modifier, t = i ? m * s : 0, u = i ? 0 : m * s, v = -n * Math.abs(s), w = i ? 0 : h.stretch * s, x = i ? h.stretch * s : 0;
                Math.abs(x) < .001 && (x = 0), Math.abs(w) < .001 && (w = 0), Math.abs(v) < .001 && (v = 0), 
                Math.abs(t) < .001 && (t = 0), Math.abs(u) < .001 && (u = 0);
                var y = "translate3d(" + x + "px," + w + "px," + v + "px)  rotateX(" + u + "deg) rotateY(" + t + "deg)";
                if (q.transform(y), q[0].style.zIndex = 1 - Math.abs(Math.round(s)), h.slideShadows) {
                    var z = i ? q.find(".swiper-slide-shadow-left") : q.find(".swiper-slide-shadow-top"), A = i ? q.find(".swiper-slide-shadow-right") : q.find(".swiper-slide-shadow-bottom");
                    0 === z.length && (z = d('<div class="swiper-slide-shadow-' + (i ? "left" : "top") + '"></div>'), 
                    q.append(z)), 0 === A.length && (A = d('<div class="swiper-slide-shadow-' + (i ? "right" : "bottom") + '"></div>'), 
                    q.append(A)), z.length && (z[0].style.opacity = 0 < s ? s : 0), A.length && (A[0].style.opacity = 0 < -s ? -s : 0);
                }
            }
            (l.pointerEvents || l.prefixedPointerEvents) && (f[0].style.perspectiveOrigin = k + "px 50%");
        },
        setTransition: function(a) {
            this.slides.transition(a).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(a);
        }
    }, ab = {
        init: function() {
            var a = this, b = a.params.thumbs, c = a.constructor;
            b.swiper instanceof c ? (a.thumbs.swiper = b.swiper, k.extend(a.thumbs.swiper.originalParams, {
                watchSlidesProgress: !0,
                slideToClickedSlide: !1
            }), k.extend(a.thumbs.swiper.params, {
                watchSlidesProgress: !0,
                slideToClickedSlide: !1
            })) : k.isObject(b.swiper) && (a.thumbs.swiper = new c(k.extend({}, b.swiper, {
                watchSlidesVisibility: !0,
                watchSlidesProgress: !0,
                slideToClickedSlide: !1
            })), a.thumbs.swiperCreated = !0), a.thumbs.swiper.$el.addClass(a.params.thumbs.thumbsContainerClass), 
            a.thumbs.swiper.on("tap", a.thumbs.onThumbClick);
        },
        onThumbClick: function() {
            var a = this, b = a.thumbs.swiper;
            if (b) {
                var c = b.clickedIndex, e = b.clickedSlide;
                if (!(e && d(e).hasClass(a.params.thumbs.slideThumbActiveClass) || null == c)) {
                    var f;
                    if (f = b.params.loop ? parseInt(d(b.clickedSlide).attr("data-swiper-slide-index"), 10) : c, 
                    a.params.loop) {
                        var g = a.activeIndex;
                        a.slides.eq(g).hasClass(a.params.slideDuplicateClass) && (a.loopFix(), a._clientLeft = a.$wrapperEl[0].clientLeft, 
                        g = a.activeIndex);
                        var h = a.slides.eq(g).prevAll('[data-swiper-slide-index="' + f + '"]').eq(0).index(), i = a.slides.eq(g).nextAll('[data-swiper-slide-index="' + f + '"]').eq(0).index();
                        f = void 0 === h ? i : void 0 === i ? h : i - g < g - h ? i : h;
                    }
                    a.slideTo(f);
                }
            }
        },
        update: function(a) {
            var b = this, c = b.thumbs.swiper;
            if (c) {
                var d = "auto" === c.params.slidesPerView ? c.slidesPerViewDynamic() : c.params.slidesPerView;
                if (b.realIndex !== c.realIndex) {
                    var e, f = c.activeIndex;
                    if (c.params.loop) {
                        c.slides.eq(f).hasClass(c.params.slideDuplicateClass) && (c.loopFix(), c._clientLeft = c.$wrapperEl[0].clientLeft, 
                        f = c.activeIndex);
                        var g = c.slides.eq(f).prevAll('[data-swiper-slide-index="' + b.realIndex + '"]').eq(0).index(), h = c.slides.eq(f).nextAll('[data-swiper-slide-index="' + b.realIndex + '"]').eq(0).index();
                        e = void 0 === g ? h : void 0 === h ? g : h - f == f - g ? f : h - f < f - g ? h : g;
                    } else e = b.realIndex;
                    c.visibleSlidesIndexes.indexOf(e) < 0 && (c.params.centeredSlides ? e = f < e ? e - Math.floor(d / 2) + 1 : e + Math.floor(d / 2) - 1 : f < e && (e = e - d + 1), 
                    c.slideTo(e, a ? 0 : void 0));
                }
                var i = 1, j = b.params.thumbs.slideThumbActiveClass;
                if (1 < b.params.slidesPerView && !b.params.centeredSlides && (i = b.params.slidesPerView), 
                c.slides.removeClass(j), c.params.loop) for (var k = 0; k < i; k += 1) c.$wrapperEl.children('[data-swiper-slide-index="' + (b.realIndex + k) + '"]').addClass(j); else for (var l = 0; l < i; l += 1) c.slides.eq(b.realIndex + l).addClass(j);
            }
        }
    }, bb = [ C, D, E, F, H, J, L, {
        name: "mousewheel",
        params: {
            mousewheel: {
                enabled: !1,
                releaseOnEdges: !1,
                invert: !1,
                forceToAxis: !1,
                sensitivity: 1,
                eventsTarged: "container"
            }
        },
        create: function() {
            var a = this;
            k.extend(a, {
                mousewheel: {
                    enabled: !1,
                    enable: M.enable.bind(a),
                    disable: M.disable.bind(a),
                    handle: M.handle.bind(a),
                    handleMouseEnter: M.handleMouseEnter.bind(a),
                    handleMouseLeave: M.handleMouseLeave.bind(a),
                    lastScrollTime: k.now()
                }
            });
        },
        on: {
            init: function() {
                this.params.mousewheel.enabled && this.mousewheel.enable();
            },
            destroy: function() {
                this.mousewheel.enabled && this.mousewheel.disable();
            }
        }
    }, {
        name: "navigation",
        params: {
            navigation: {
                nextEl: null,
                prevEl: null,
                hideOnClick: !1,
                disabledClass: "swiper-button-disabled",
                hiddenClass: "swiper-button-hidden",
                lockClass: "swiper-button-lock"
            }
        },
        create: function() {
            var a = this;
            k.extend(a, {
                navigation: {
                    init: N.init.bind(a),
                    update: N.update.bind(a),
                    destroy: N.destroy.bind(a),
                    onNextClick: N.onNextClick.bind(a),
                    onPrevClick: N.onPrevClick.bind(a)
                }
            });
        },
        on: {
            init: function() {
                this.navigation.init(), this.navigation.update();
            },
            toEdge: function() {
                this.navigation.update();
            },
            fromEdge: function() {
                this.navigation.update();
            },
            destroy: function() {
                this.navigation.destroy();
            },
            click: function(a) {
                var b, c = this, e = c.navigation, f = e.$nextEl, g = e.$prevEl;
                !c.params.navigation.hideOnClick || d(a.target).is(g) || d(a.target).is(f) || (f ? b = f.hasClass(c.params.navigation.hiddenClass) : g && (b = g.hasClass(c.params.navigation.hiddenClass)), 
                !0 === b ? c.emit("navigationShow", c) : c.emit("navigationHide", c), f && f.toggleClass(c.params.navigation.hiddenClass), 
                g && g.toggleClass(c.params.navigation.hiddenClass));
            }
        }
    }, {
        name: "pagination",
        params: {
            pagination: {
                el: null,
                bulletElement: "span",
                clickable: !1,
                hideOnClick: !1,
                renderBullet: null,
                renderProgressbar: null,
                renderFraction: null,
                renderCustom: null,
                progressbarOpposite: !1,
                type: "bullets",
                dynamicBullets: !1,
                dynamicMainBullets: 1,
                formatFractionCurrent: function(a) {
                    return a;
                },
                formatFractionTotal: function(a) {
                    return a;
                },
                bulletClass: "swiper-pagination-bullet",
                bulletActiveClass: "swiper-pagination-bullet-active",
                modifierClass: "swiper-pagination-",
                currentClass: "swiper-pagination-current",
                totalClass: "swiper-pagination-total",
                hiddenClass: "swiper-pagination-hidden",
                progressbarFillClass: "swiper-pagination-progressbar-fill",
                progressbarOppositeClass: "swiper-pagination-progressbar-opposite",
                clickableClass: "swiper-pagination-clickable",
                lockClass: "swiper-pagination-lock"
            }
        },
        create: function() {
            var a = this;
            k.extend(a, {
                pagination: {
                    init: O.init.bind(a),
                    render: O.render.bind(a),
                    update: O.update.bind(a),
                    destroy: O.destroy.bind(a),
                    dynamicBulletIndex: 0
                }
            });
        },
        on: {
            init: function() {
                this.pagination.init(), this.pagination.render(), this.pagination.update();
            },
            activeIndexChange: function() {
                this.params.loop ? this.pagination.update() : void 0 === this.snapIndex && this.pagination.update();
            },
            snapIndexChange: function() {
                this.params.loop || this.pagination.update();
            },
            slidesLengthChange: function() {
                this.params.loop && (this.pagination.render(), this.pagination.update());
            },
            snapGridLengthChange: function() {
                this.params.loop || (this.pagination.render(), this.pagination.update());
            },
            destroy: function() {
                this.pagination.destroy();
            },
            click: function(a) {
                var b = this;
                b.params.pagination.el && b.params.pagination.hideOnClick && 0 < b.pagination.$el.length && !d(a.target).hasClass(b.params.pagination.bulletClass) && (!0 === b.pagination.$el.hasClass(b.params.pagination.hiddenClass) ? b.emit("paginationShow", b) : b.emit("paginationHide", b), 
                b.pagination.$el.toggleClass(b.params.pagination.hiddenClass));
            }
        }
    }, {
        name: "scrollbar",
        params: {
            scrollbar: {
                el: null,
                dragSize: "auto",
                hide: !1,
                draggable: !1,
                snapOnRelease: !0,
                lockClass: "swiper-scrollbar-lock",
                dragClass: "swiper-scrollbar-drag"
            }
        },
        create: function() {
            var a = this;
            k.extend(a, {
                scrollbar: {
                    init: P.init.bind(a),
                    destroy: P.destroy.bind(a),
                    updateSize: P.updateSize.bind(a),
                    setTranslate: P.setTranslate.bind(a),
                    setTransition: P.setTransition.bind(a),
                    enableDraggable: P.enableDraggable.bind(a),
                    disableDraggable: P.disableDraggable.bind(a),
                    setDragPosition: P.setDragPosition.bind(a),
                    onDragStart: P.onDragStart.bind(a),
                    onDragMove: P.onDragMove.bind(a),
                    onDragEnd: P.onDragEnd.bind(a),
                    isTouched: !1,
                    timeout: null,
                    dragTimeout: null
                }
            });
        },
        on: {
            init: function() {
                this.scrollbar.init(), this.scrollbar.updateSize(), this.scrollbar.setTranslate();
            },
            update: function() {
                this.scrollbar.updateSize();
            },
            resize: function() {
                this.scrollbar.updateSize();
            },
            observerUpdate: function() {
                this.scrollbar.updateSize();
            },
            setTranslate: function() {
                this.scrollbar.setTranslate();
            },
            setTransition: function(a) {
                this.scrollbar.setTransition(a);
            },
            destroy: function() {
                this.scrollbar.destroy();
            }
        }
    }, {
        name: "parallax",
        params: {
            parallax: {
                enabled: !1
            }
        },
        create: function() {
            k.extend(this, {
                parallax: {
                    setTransform: Q.setTransform.bind(this),
                    setTranslate: Q.setTranslate.bind(this),
                    setTransition: Q.setTransition.bind(this)
                }
            });
        },
        on: {
            beforeInit: function() {
                this.params.parallax.enabled && (this.params.watchSlidesProgress = !0, this.originalParams.watchSlidesProgress = !0);
            },
            init: function() {
                this.params.parallax.enabled && this.parallax.setTranslate();
            },
            setTranslate: function() {
                this.params.parallax.enabled && this.parallax.setTranslate();
            },
            setTransition: function(a) {
                this.params.parallax.enabled && this.parallax.setTransition(a);
            }
        }
    }, {
        name: "zoom",
        params: {
            zoom: {
                enabled: !1,
                maxRatio: 3,
                minRatio: 1,
                toggle: !0,
                containerClass: "swiper-zoom-container",
                zoomedSlideClass: "swiper-slide-zoomed"
            }
        },
        create: function() {
            var a = this, b = {
                enabled: !1,
                scale: 1,
                currentScale: 1,
                isScaling: !1,
                gesture: {
                    $slideEl: void 0,
                    slideWidth: void 0,
                    slideHeight: void 0,
                    $imageEl: void 0,
                    $imageWrapEl: void 0,
                    maxRatio: 3
                },
                image: {
                    isTouched: void 0,
                    isMoved: void 0,
                    currentX: void 0,
                    currentY: void 0,
                    minX: void 0,
                    minY: void 0,
                    maxX: void 0,
                    maxY: void 0,
                    width: void 0,
                    height: void 0,
                    startX: void 0,
                    startY: void 0,
                    touchesStart: {},
                    touchesCurrent: {}
                },
                velocity: {
                    x: void 0,
                    y: void 0,
                    prevPositionX: void 0,
                    prevPositionY: void 0,
                    prevTime: void 0
                }
            };
            "onGestureStart onGestureChange onGestureEnd onTouchStart onTouchMove onTouchEnd onTransitionEnd toggle enable disable in out".split(" ").forEach(function(c) {
                b[c] = R[c].bind(a);
            }), k.extend(a, {
                zoom: b
            });
            var c = 1;
            Object.defineProperty(a.zoom, "scale", {
                get: function() {
                    return c;
                },
                set: function(b) {
                    if (c !== b) {
                        var d = a.zoom.gesture.$imageEl ? a.zoom.gesture.$imageEl[0] : void 0, e = a.zoom.gesture.$slideEl ? a.zoom.gesture.$slideEl[0] : void 0;
                        a.emit("zoomChange", b, d, e);
                    }
                    c = b;
                }
            });
        },
        on: {
            init: function() {
                this.params.zoom.enabled && this.zoom.enable();
            },
            destroy: function() {
                this.zoom.disable();
            },
            touchStart: function(a) {
                this.zoom.enabled && this.zoom.onTouchStart(a);
            },
            touchEnd: function(a) {
                this.zoom.enabled && this.zoom.onTouchEnd(a);
            },
            doubleTap: function(a) {
                this.params.zoom.enabled && this.zoom.enabled && this.params.zoom.toggle && this.zoom.toggle(a);
            },
            transitionEnd: function() {
                this.zoom.enabled && this.params.zoom.enabled && this.zoom.onTransitionEnd();
            }
        }
    }, {
        name: "lazy",
        params: {
            lazy: {
                enabled: !1,
                loadPrevNext: !1,
                loadPrevNextAmount: 1,
                loadOnTransitionStart: !1,
                elementClass: "swiper-lazy",
                loadingClass: "swiper-lazy-loading",
                loadedClass: "swiper-lazy-loaded",
                preloaderClass: "swiper-lazy-preloader"
            }
        },
        create: function() {
            k.extend(this, {
                lazy: {
                    initialImageLoaded: !1,
                    load: S.load.bind(this),
                    loadInSlide: S.loadInSlide.bind(this)
                }
            });
        },
        on: {
            beforeInit: function() {
                this.params.lazy.enabled && this.params.preloadImages && (this.params.preloadImages = !1);
            },
            init: function() {
                this.params.lazy.enabled && !this.params.loop && 0 === this.params.initialSlide && this.lazy.load();
            },
            scroll: function() {
                this.params.freeMode && !this.params.freeModeSticky && this.lazy.load();
            },
            resize: function() {
                this.params.lazy.enabled && this.lazy.load();
            },
            scrollbarDragMove: function() {
                this.params.lazy.enabled && this.lazy.load();
            },
            transitionStart: function() {
                var a = this;
                a.params.lazy.enabled && (a.params.lazy.loadOnTransitionStart || !a.params.lazy.loadOnTransitionStart && !a.lazy.initialImageLoaded) && a.lazy.load();
            },
            transitionEnd: function() {
                this.params.lazy.enabled && !this.params.lazy.loadOnTransitionStart && this.lazy.load();
            }
        }
    }, {
        name: "controller",
        params: {
            controller: {
                control: void 0,
                inverse: !1,
                by: "slide"
            }
        },
        create: function() {
            var a = this;
            k.extend(a, {
                controller: {
                    control: a.params.controller.control,
                    getInterpolateFunction: T.getInterpolateFunction.bind(a),
                    setTranslate: T.setTranslate.bind(a),
                    setTransition: T.setTransition.bind(a)
                }
            });
        },
        on: {
            update: function() {
                this.controller.control && this.controller.spline && (this.controller.spline = void 0, 
                delete this.controller.spline);
            },
            resize: function() {
                this.controller.control && this.controller.spline && (this.controller.spline = void 0, 
                delete this.controller.spline);
            },
            observerUpdate: function() {
                this.controller.control && this.controller.spline && (this.controller.spline = void 0, 
                delete this.controller.spline);
            },
            setTranslate: function(a, b) {
                this.controller.control && this.controller.setTranslate(a, b);
            },
            setTransition: function(a, b) {
                this.controller.control && this.controller.setTransition(a, b);
            }
        }
    }, {
        name: "a11y",
        params: {
            a11y: {
                enabled: !0,
                notificationClass: "swiper-notification",
                prevSlideMessage: "Previous slide",
                nextSlideMessage: "Next slide",
                firstSlideMessage: "This is the first slide",
                lastSlideMessage: "This is the last slide",
                paginationBulletMessage: "Go to slide {{index}}"
            }
        },
        create: function() {
            var a = this;
            k.extend(a, {
                a11y: {
                    liveRegion: d('<span class="' + a.params.a11y.notificationClass + '" aria-live="assertive" aria-atomic="true"></span>')
                }
            }), Object.keys(U).forEach(function(b) {
                a.a11y[b] = U[b].bind(a);
            });
        },
        on: {
            init: function() {
                this.params.a11y.enabled && (this.a11y.init(), this.a11y.updateNavigation());
            },
            toEdge: function() {
                this.params.a11y.enabled && this.a11y.updateNavigation();
            },
            fromEdge: function() {
                this.params.a11y.enabled && this.a11y.updateNavigation();
            },
            paginationUpdate: function() {
                this.params.a11y.enabled && this.a11y.updatePagination();
            },
            destroy: function() {
                this.params.a11y.enabled && this.a11y.destroy();
            }
        }
    }, {
        name: "history",
        params: {
            history: {
                enabled: !1,
                replaceState: !1,
                key: "slides"
            }
        },
        create: function() {
            var a = this;
            k.extend(a, {
                history: {
                    init: V.init.bind(a),
                    setHistory: V.setHistory.bind(a),
                    setHistoryPopState: V.setHistoryPopState.bind(a),
                    scrollToSlide: V.scrollToSlide.bind(a),
                    destroy: V.destroy.bind(a)
                }
            });
        },
        on: {
            init: function() {
                this.params.history.enabled && this.history.init();
            },
            destroy: function() {
                this.params.history.enabled && this.history.destroy();
            },
            transitionEnd: function() {
                this.history.initialized && this.history.setHistory(this.params.history.key, this.activeIndex);
            }
        }
    }, {
        name: "hash-navigation",
        params: {
            hashNavigation: {
                enabled: !1,
                replaceState: !1,
                watchState: !1
            }
        },
        create: function() {
            var a = this;
            k.extend(a, {
                hashNavigation: {
                    initialized: !1,
                    init: W.init.bind(a),
                    destroy: W.destroy.bind(a),
                    setHash: W.setHash.bind(a),
                    onHashCange: W.onHashCange.bind(a)
                }
            });
        },
        on: {
            init: function() {
                this.params.hashNavigation.enabled && this.hashNavigation.init();
            },
            destroy: function() {
                this.params.hashNavigation.enabled && this.hashNavigation.destroy();
            },
            transitionEnd: function() {
                this.hashNavigation.initialized && this.hashNavigation.setHash();
            }
        }
    }, {
        name: "autoplay",
        params: {
            autoplay: {
                enabled: !1,
                delay: 3e3,
                waitForTransition: !0,
                disableOnInteraction: !0,
                stopOnLastSlide: !1,
                reverseDirection: !1
            }
        },
        create: function() {
            var a = this;
            k.extend(a, {
                autoplay: {
                    running: !1,
                    paused: !1,
                    run: X.run.bind(a),
                    start: X.start.bind(a),
                    stop: X.stop.bind(a),
                    pause: X.pause.bind(a),
                    onTransitionEnd: function(b) {
                        a && !a.destroyed && a.$wrapperEl && b.target === this && (a.$wrapperEl[0].removeEventListener("transitionend", a.autoplay.onTransitionEnd), 
                        a.$wrapperEl[0].removeEventListener("webkitTransitionEnd", a.autoplay.onTransitionEnd), 
                        a.autoplay.paused = !1, a.autoplay.running ? a.autoplay.run() : a.autoplay.stop());
                    }
                }
            });
        },
        on: {
            init: function() {
                this.params.autoplay.enabled && this.autoplay.start();
            },
            beforeTransitionStart: function(a, b) {
                this.autoplay.running && (b || !this.params.autoplay.disableOnInteraction ? this.autoplay.pause(a) : this.autoplay.stop());
            },
            sliderFirstMove: function() {
                this.autoplay.running && (this.params.autoplay.disableOnInteraction ? this.autoplay.stop() : this.autoplay.pause());
            },
            destroy: function() {
                this.autoplay.running && this.autoplay.stop();
            }
        }
    }, {
        name: "effect-fade",
        params: {
            fadeEffect: {
                crossFade: !1
            }
        },
        create: function() {
            k.extend(this, {
                fadeEffect: {
                    setTranslate: Y.setTranslate.bind(this),
                    setTransition: Y.setTransition.bind(this)
                }
            });
        },
        on: {
            beforeInit: function() {
                var a = this;
                if ("fade" === a.params.effect) {
                    a.classNames.push(a.params.containerModifierClass + "fade");
                    var b = {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        slidesPerGroup: 1,
                        watchSlidesProgress: !0,
                        spaceBetween: 0,
                        virtualTranslate: !0
                    };
                    k.extend(a.params, b), k.extend(a.originalParams, b);
                }
            },
            setTranslate: function() {
                "fade" === this.params.effect && this.fadeEffect.setTranslate();
            },
            setTransition: function(a) {
                "fade" === this.params.effect && this.fadeEffect.setTransition(a);
            }
        }
    }, {
        name: "effect-cube",
        params: {
            cubeEffect: {
                slideShadows: !0,
                shadow: !0,
                shadowOffset: 20,
                shadowScale: .94
            }
        },
        create: function() {
            k.extend(this, {
                cubeEffect: {
                    setTranslate: Z.setTranslate.bind(this),
                    setTransition: Z.setTransition.bind(this)
                }
            });
        },
        on: {
            beforeInit: function() {
                var a = this;
                if ("cube" === a.params.effect) {
                    a.classNames.push(a.params.containerModifierClass + "cube"), a.classNames.push(a.params.containerModifierClass + "3d");
                    var b = {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        slidesPerGroup: 1,
                        watchSlidesProgress: !0,
                        resistanceRatio: 0,
                        spaceBetween: 0,
                        centeredSlides: !1,
                        virtualTranslate: !0
                    };
                    k.extend(a.params, b), k.extend(a.originalParams, b);
                }
            },
            setTranslate: function() {
                "cube" === this.params.effect && this.cubeEffect.setTranslate();
            },
            setTransition: function(a) {
                "cube" === this.params.effect && this.cubeEffect.setTransition(a);
            }
        }
    }, {
        name: "effect-flip",
        params: {
            flipEffect: {
                slideShadows: !0,
                limitRotation: !0
            }
        },
        create: function() {
            k.extend(this, {
                flipEffect: {
                    setTranslate: $.setTranslate.bind(this),
                    setTransition: $.setTransition.bind(this)
                }
            });
        },
        on: {
            beforeInit: function() {
                var a = this;
                if ("flip" === a.params.effect) {
                    a.classNames.push(a.params.containerModifierClass + "flip"), a.classNames.push(a.params.containerModifierClass + "3d");
                    var b = {
                        slidesPerView: 1,
                        slidesPerColumn: 1,
                        slidesPerGroup: 1,
                        watchSlidesProgress: !0,
                        spaceBetween: 0,
                        virtualTranslate: !0
                    };
                    k.extend(a.params, b), k.extend(a.originalParams, b);
                }
            },
            setTranslate: function() {
                "flip" === this.params.effect && this.flipEffect.setTranslate();
            },
            setTransition: function(a) {
                "flip" === this.params.effect && this.flipEffect.setTransition(a);
            }
        }
    }, {
        name: "effect-coverflow",
        params: {
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: !0
            }
        },
        create: function() {
            k.extend(this, {
                coverflowEffect: {
                    setTranslate: _.setTranslate.bind(this),
                    setTransition: _.setTransition.bind(this)
                }
            });
        },
        on: {
            beforeInit: function() {
                var a = this;
                "coverflow" === a.params.effect && (a.classNames.push(a.params.containerModifierClass + "coverflow"), 
                a.classNames.push(a.params.containerModifierClass + "3d"), a.params.watchSlidesProgress = !0, 
                a.originalParams.watchSlidesProgress = !0);
            },
            setTranslate: function() {
                "coverflow" === this.params.effect && this.coverflowEffect.setTranslate();
            },
            setTransition: function(a) {
                "coverflow" === this.params.effect && this.coverflowEffect.setTransition(a);
            }
        }
    }, {
        name: "thumbs",
        params: {
            thumbs: {
                swiper: null,
                slideThumbActiveClass: "swiper-slide-thumb-active",
                thumbsContainerClass: "swiper-container-thumbs"
            }
        },
        create: function() {
            k.extend(this, {
                thumbs: {
                    swiper: null,
                    init: ab.init.bind(this),
                    update: ab.update.bind(this),
                    onThumbClick: ab.onThumbClick.bind(this)
                }
            });
        },
        on: {
            beforeInit: function() {
                var a = this.params.thumbs;
                a && a.swiper && (this.thumbs.init(), this.thumbs.update(!0));
            },
            slideChange: function() {
                this.thumbs.swiper && this.thumbs.update();
            },
            update: function() {
                this.thumbs.swiper && this.thumbs.update();
            },
            resize: function() {
                this.thumbs.swiper && this.thumbs.update();
            },
            observerUpdate: function() {
                this.thumbs.swiper && this.thumbs.update();
            },
            setTransition: function(a) {
                var b = this.thumbs.swiper;
                b && b.setTransition(a);
            },
            beforeDestroy: function() {
                var a = this.thumbs.swiper;
                a && this.thumbs.swiperCreated && a && a.destroy();
            }
        }
    } ];
    return void 0 === B.use && (B.use = B.Class.use, B.installModule = B.Class.installModule), 
    B.use(bb), B;
});
</script>