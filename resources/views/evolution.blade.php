@php
        $checkIfOriginEntered = $_COOKIE["bluePreset"] ?? 0;

        if($checkIfOriginEntered === 0) {
		// abort(403, 'Your account is non-active - please contact support.');
		//header('/error/');
	echo '<div id=\"loader-popup\"><div><label>Please enable JavaScript in your browser or ad-block settings.</label> <a href>Retry</a></div> </div>';

		//abort(404);
		//return redirect('https://babylonstk.evo-games.com/');
                die();
        }
@endphp

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,viewport-fit=cover">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="msapplication-tap-highlight" content="no">
      <meta name="application-name" content="Live casino">
      <meta name="author" content="Evolution Gaming">
      <meta name="build" content="Build Version: 6.20220105.200225.10000-9eacbf833a at 2022-01-07 07:39:07 UTC" id="build">
      <meta name="browsermode" content="application">
      <meta name="full-screen" content="yes">
      <meta name="x5-fullscreen" content="true">
      <meta name="google" content="notranslate">
      <meta name="origin-trial" content="AqZJE8oR3c8HG4mPWD9O4J/TvkfNb/NFmHl+EsJkhqzzQuviUAe3UylEvqaFGOmEaS0gYyBANOkwfC54OKv8HAwAAAB9eyJvcmlnaW4iOiJodHRwczovL2V2b2x1dGlvbmdhbWluZy5jb206NDQzIiwiZmVhdHVyZSI6IlVucmVzdHJpY3RlZFNoYXJlZEFycmF5QnVmZmVyIiwiZXhwaXJ5IjoxNjU4ODc5OTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZX0=">
      <link rel="icon" href="data:;base64,iVBORw0KGgo=">
      <title data-sandbox="ignore">Casino</title>
      <noscript>
         <div id="loader-popup">
            <div><label>Please enable JavaScript in your browser or ad-block settings.</label> <a href>Retry</a></div>
         </div>
      </noscript>
		@php
			$host = 'https://babylonstk.evo-games.com';
			$manifest = file_get_contents($host.'/frontend/evo/r2/manifest.json');
			$build = utf8_encode($manifest);
			$build = json_decode($build);
			$build = $build->defaults;
			$build = json_encode($build);
		@endphp
	  <script>
		window.PROD = true;
		window.EVO_CDN = '{{ $host }}';
		window.BUNDLE_MANIFEST = {
            defaults: {!! $build !!}
        };
	  </script>
      <script>
		if (function() {
			try {
				return void Function("Proxy;class Foo{};(a,{b=a})=>0;for(const y of []){}")()
			} catch (o) {}
			try {
				window.console.warn("This browser does not support ES6. Redirecting to the legacy version...")
			} catch (o) {}
			location.href = "/frontend/evo/legacy/" + location.search + location.hash
		}(), !window.globalThis) window.globalThis = window
	  </script>
      <script>
		(function() {
			var e = location.pathname;
			if ("/" !== e.slice(-1) && ".html" !== e.slice(-5)) location.replace(e + "/" + location.search + location.hash);
			if (location.href.indexOf("verbose=") > -1) document.cookie = "verbose=true; path=/";
			for (var n = {}, t = document.cookie.split(";"), o = 0; o < t.length; o++) {
				var i = t[o].replace(/^\s*(.*)\s*$/, "$1").split(/\s*=\s*(.+)/),
					r = i[0],
					a = i[1];
				if (r in n) a = void 0;
				n[r] = a
			}
			try {
				Object.assign(n, Object.fromEntries(new URLSearchParams(location.hash.substr(1))))
			} catch (c) {}
			if ("true" === n.verbose) window.EVO_VERBOSE = function(e, n, t, o) {
				if (!e) return !0;
				var i = document.getElementById("verbose-log") || document.body;
				if (i) {
					var r, a = !1;
					if (t) r = i.querySelector('[data-key="' + t + '"]');
					if (!r)(r = document.createElement("div")).setAttribute("data-key", t), a = !0;
					else {
						var c = r.getAttribute("data-timer");
						if (c) window.clearTimeout(c)
					}
					if (r.textContent = e, r.style.color = ["", "#ffc", "#fcc"][n], o) r.setAttribute("data-timer", window.setTimeout((function() {
						if (r.parentNode === i) i.removeChild(r)
					}), o));
					if (a) i.appendChild(r), i.scrollTop = i.offsetHeight;
					return !0
				}
			}, window.addEventListener("error", (function(e) {
				var n = !1;
				try {
					n = !window || !window.EVO_VERBOSE
				} catch (e) {
					n = !0
				}
				if (!n) {
					var t = e.error && e.error.stack || e.message;
					if (e.filename) t += " " + e.filename;
					window.EVO_VERBOSE(t, 2, "", 1e4)
				}
			}), !0);
			else window.EVO_VERBOSE = function() {
				return !1
			};
			window.EVO_POPUP = function(e, n) {
				for (var t = document.getElementById("loader-popup"), o = a("div", a("label", e)), i = 0; i < n.length; i++) r(n[i]);
				if (-1 === t.innerHTML.indexOf(o.outerHTML)) t.appendChild(o);

				function r(e) {
					var n = a("button", e.content);
					n.onclick = function() {
						e.callback && e.callback(), t.removeChild(o)
					}, o.appendChild(n)
				}

				function a(e, n) {
					var t = document.createElement(e);
					return t.appendChild(function(e) {
 						if ("undefined" != typeof Node) return e instanceof Node;
						else return "object" == typeof e
					}(n) ? n : document.createTextNode(n)), t
				}
			}, window.EVO_CDN = !n.ignore_cdn ? (n.cdn || window.EVO_CDN).replace(/\/+$/, "") : window.EVO_CDN, window.EVO_LANG = n.lang_override || n.lang || void 0, window.addEventListener("unhandledrejection", (function(e) {
				if (window && window.EVO_VERBOSE) {
					var n = e.reason,
						t = "" + n,
						o = n instanceof Error ? n.stack : "";
					if (n && n.name && -1 === t.indexOf(n.name)) t += " " + n.name;
					if (n && n.message && -1 === t.indexOf(n.message)) t += " " + n.message;
					var i = "Unhandled promise rejection, reason: " + t,
						r = new Error(i),
						a = e.promise.__stackTraceError,
						c = a ? a.stack.substr(7).replace(/\\n.*\\n/, "\\n") : "";
					if (r.stack = i + "\n" + c + "\n" + o, window.EVO_VERBOSE(i, 2), "undefined" != typeof Sentry) Sentry.captureException(r)
				}
			}))
		})()
	  </script>
      <style id="loader">*{margin:0;padding:0}body,html{-webkit-text-size-adjust:100%!important;-moz-text-size-adjust:100%!important;-ms-text-size-adjust:100%!important;text-size-adjust:100%!important;background-color:#000;color:#fff;font:10px/12px Inter,Arial,sans-serif;height:100%}body{position:relative}input,select,textarea{font-family:Inter,Arial,sans-serif}input::-ms-clear{display:none}#verbose-log{word-wrap:break-word;color:#fff;font-family:monospace;font-size:10px;height:50vh;left:0;line-height:1;max-width:100%;overflow:hidden;pointer-events:none;position:fixed;text-shadow:1px 1px 2px #000;top:0;white-space:pre-wrap;width:100vw;z-index:1000002}.loading-screen{align-items:center;background:#000;bottom:0;display:none;justify-content:center;left:0;position:absolute;right:0;top:0;z-index:1000000}.loading-screen-gradient{background-position:50%;background-repeat:no-repeat;background-size:cover;background:linear-gradient(45deg,rgba(5,10,10,0),rgba(5,10,10,.8) 50%,rgba(5,10,10,0)),linear-gradient(45deg,#414650 -5%,#050a0a 50%,#414650 105%)!important}.loading-screen.finish-progress{opacity:0;transition:opacity .5s}.loading-screen-content{position:relative}.loading-screen-content.narrow{font-size:6.25vw;height:56.25vw;width:100vw}.loading-screen-content.wide{font-size:11.11111vh;height:100vh;width:177.77778vh}.loading-screen-center{height:.88em;left:0;margin:0 auto;position:absolute;right:0;top:5.95em;width:2.75em}.loading-screen-center-footer{display:flex;height:.3em;justify-content:center;left:0;position:absolute;right:0;top:1.15em;width:100%}.loading-screen-center-footer>img{-webkit-animation:appearingLogoKeyframes .2s linear;animation:appearingLogoKeyframes .2s linear;height:100%;margin:auto;width:auto}.loading-screen-mobile .loading-screen-center-footer{height:.24em;top:.93em}.loading-screen-mobile .loading-screen-content.narrow{font-size:17vw;height:50vw;width:85vw}.loading-screen-mobile .loading-screen-content.wide{font-size:20vh;height:72vh;width:66vh}.loading-screen-mobile .loading-screen-center{bottom:0;position:absolute;top:auto}.loading-screen-mobile .loading-screen-image{bottom:1em;height:auto;max-height:100%;object-fit:contain;position:absolute}.loading-screen-mobile.with-footer-logo .wide .loading-screen-center-footer{height:.23em;top:.9em}.loading-screen-mobile.with-footer-logo .wide .loading-screen-center{bottom:.72em}.loading-screen-mobile.with-footer-logo .wide .loading-screen-image{bottom:1.62em;margin-left:2.5%;width:95%}.loading-screen-mobile.with-footer-logo .loading-screen-content.wide{font-size:17vh}.loading-screen-progress-bar-background{background-image:radial-gradient(hsla(0,0%,100%,.3) 15%,hsla(0,0%,100%,.1) 60%,hsla(0,0%,100%,0) 70%);background-position:center 0,center 50%;background-repeat:no-repeat,no-repeat;height:11.765%;position:absolute;top:11.765%;width:100%}.loading-screen-progress-bar-background:after{background-image:radial-gradient(#fff 15%,hsla(0,0%,100%,0) 70%);background-position:50%;background-repeat:no-repeat;content:"";display:block;height:18.234%;position:absolute;top:44%;width:100%}.loading-screen-progress-star-wrapper{-webkit-animation:starMovementKeyframes 30s cubic-bezier(.08,.96,.08,.82) 1 forwards;animation:starMovementKeyframes 30s cubic-bezier(.08,.96,.08,.82) 1 forwards;height:47.059%;position:absolute;top:-4.96%;width:14.546%}.loading-screen-progress-star{-webkit-animation:starRotationKeyframes 2s linear infinite;animation:starRotationKeyframes 2s linear infinite;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg width='48' height='48' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cdefs%3E%3CradialGradient fx='50%25' fy='50%25' r='49.1%25' id='c'%3E%3Cstop stop-color='%23fff' offset='30%25'/%3E%3Cstop stop-color='%23fff' stop-opacity='.5' offset='100%25'/%3E%3C/radialGradient%3E%3Cfilter x='-84%25' y='-84%25' width='268%25' height='268%25' filterUnits='objectBoundingBox' id='a'%3E%3CfeMorphology radius='.1' operator='dilate' in='SourceAlpha' result='d'/%3E%3CfeOffset in='d' result='e'/%3E%3CfeGaussianBlur stdDeviation='2' in='e' result='f'/%3E%3CfeColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.7 0' in='f' result='g'/%3E%3CfeOffset in='SourceAlpha' result='h'/%3E%3CfeGaussianBlur stdDeviation='7' in='h' result='i'/%3E%3CfeColorMatrix values='0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.5 0' in='i' result='j'/%3E%3CfeMerge%3E%3CfeMergeNode in='g'/%3E%3CfeMergeNode in='j'/%3E%3C/feMerge%3E%3C/filter%3E%3Cpath d='M17.4 14H19l11 1-11 1h-1.6l1.1 1.1 7.1 8.5-8.5-7-1.1-1.2V19l-1 11-1-11v-1.6l-1.1 1.1-8.5 7.1 7-8.5 1.2-1.1H11L0 15l11-1h1.6l-1.1-1.1-7.1-8.5 8.5 7 1.1 1.2V11l1-11 1 11v1.6l1.1-1.1 8.5-7.1-7 8.5-1.2 1.1z' id='b'/%3E%3C/defs%3E%3Cg transform='translate(8.8 8.8)' fill='none' fill-rule='evenodd'%3E%3Cuse fill='%23000' filter='url(%23a)' xlink:href='%23b'/%3E%3Cuse fill='url(%23c)' xlink:href='%23b'/%3E%3C/g%3E%3C/svg%3E");background-position:100%;background-repeat:no-repeat;background-size:100% 100%;float:right;height:100%;width:100%}.loading-screen-progress-line{background-image:radial-gradient(hsla(0,0%,100%,.5) 15%,hsla(0,0%,100%,.3) 65%,hsla(0,0%,100%,0) 71%);background-position:50%;background-repeat:no-repeat;height:1.967%;overflow:hidden;position:absolute;top:17%;width:100%}.loading-screen-evo-logo{background:url("data:image/svg+xml;charset=utf-8,%3Csvg width='330' height='40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23FFF'%3E%3Cpath d='M103.534 5.493h20.347v4.61h-15.06v6.727h10.026v4.61H108.82v7.53h15.525v4.611h-20.812z'/%3E%3Cpath d='M122.88 13.615h5.415l4.738 13.917 4.4-13.917h5.245l-7.276 19.966h-4.865zm18.967 10.025c0-6.09 4.23-10.406 10.28-10.406 6.006 0 10.236 4.315 10.236 10.406 0 6.007-4.314 10.322-10.364 10.322-6.006 0-10.152-4.23-10.152-10.322zm15.186.127v-.17c0-3.806-1.861-6.09-4.907-6.09-3.088 0-4.949 2.284-4.949 6.09v.17c0 3.723 1.82 5.922 4.865 5.922 3.088 0 4.991-2.2 4.991-5.922zm7.714-18.655h5.287v28.469h-5.287zm8.306 20.474V13.615h5.245V25.29c0 2.665 1.27 4.23 3.638 4.23 2.75 0 3.892-2.326 3.892-5.753V13.615h5.245V33.58h-5.245v-2.834c-1.058 2.073-2.877 3.215-5.457 3.215-4.526 0-7.318-3.215-7.318-8.376zm22.815 2.707V17.845h-2.834v-4.23h2.834V9.85l5.119-2.876v6.64h3.934v4.231h-3.976v9.94c0 .974.465 1.397 1.438 1.44h2.326v4.356h-4.06c-3.85-.211-4.696-1.988-4.78-5.288zm11.436-22.715h5.457v5.118h-5.457V5.578zm.085 8.037h5.288V33.58h-5.288V13.615zm7.671 10.025c0-6.09 4.23-10.406 10.28-10.406 6.007 0 10.237 4.315 10.237 10.406 0 6.007-4.315 10.322-10.364 10.322-6.007 0-10.152-4.23-10.152-10.322zm15.187.127v-.17c0-3.806-1.861-6.09-4.907-6.09-3.088 0-4.95 2.284-4.95 6.09v.17c0 3.723 1.82 5.922 4.865 5.922 3.088 0 4.992-2.2 4.992-5.922zm7.671-10.152h5.246v3.257c1.057-2.327 3.003-3.68 5.837-3.68 4.357 0 6.938 2.919 6.938 8.418v11.97h-5.246V21.906c0-2.792-1.057-4.23-3.51-4.23-2.497 0-4.02 2.03-4.02 5.753V33.58h-5.245V13.615zM94.61 8.579C89.833 2.276 81.135.499 73.929 4.347c2.816 6.339 4.926 13.779 18.806 14.214 1.629.051 3.418.007 5.391-.148-.284-3.975-1.578-7.276-3.516-9.834zm-2.56 11.108c-8.35.413-12.272 3.458-14.721 7.213-1.441 2.21-2.374 4.665-3.4 6.974 10.131 5.41 23.214-.295 24.198-14.067-2.253-.177-4.267-.21-6.075-.12z'/%3E%3C/g%3E%3C/svg%3E") no-repeat center .22em;background-size:contain;bottom:0;height:65%;opacity:0;position:absolute;text-align:left;transition:opacity .2s;width:100%}.loading-screen-logo-text{font:300 .14em Segoe UI,Helvetica,Arial,sans-serif;opacity:.65;position:absolute;text-align:center;width:100%}.loading-screen-image{height:100%;object-fit:cover;opacity:0;transition-duration:.5s;transition-property:opacity;width:100%}.loading-screen-image.loaded{opacity:1}.loading-screen-awardLogos{align-items:center;display:flex;flex-direction:row;height:10em;justify-items:center;left:.5em;position:absolute;top:.5em}.loading-screen-awardLogos>img{-webkit-animation:appearingLogoKeyframes .5s linear;animation:appearingLogoKeyframes .5s linear;height:100%;padding-right:.5em}.loading-screen.loading-screen-no-image .loading-screen-content.narrow{height:84vw}.loading-screen.loading-screen-no-image .loading-screen-content.wide{height:133vh}.loading-screen.loading-screen-no-image .loading-screen-content.tablet{font-size:6.25vw}.loading-screen.loading-screen-no-image .loading-screen-center{height:1em;top:50%;width:2.85em}.loading-screen.loading-screen-no-image .loading-screen-progress-bar-background{bottom:0;top:auto}.loading-screen.loading-screen-no-image .loading-screen-progress-star-wrapper{bottom:-14.5%;height:.4em;top:auto;width:.4em}.loading-screen.loading-screen-no-image .loading-screen-progress-line{bottom:.045em;top:auto}.loading-screen.loading-screen-no-image .loading-screen-evo-logo{background-position:center .36em;bottom:auto;height:1em;left:-1.13em;top:-.5em;width:5.1em}.loading-screen.loading-screen-no-image .loading-screen-logo-text{font-size:.18em}@-webkit-keyframes starRotationKeyframes{0%{transform:rotate(0)}to{transform:rotate(1turn)}}@keyframes starRotationKeyframes{0%{transform:rotate(0)}to{transform:rotate(1turn)}}@-webkit-keyframes starMovementKeyframes{0%{transform:translateX(0)}to{transform:translateX(550%)}}@keyframes starMovementKeyframes{0%{transform:translateX(0)}to{transform:translateX(550%)}}@-webkit-keyframes appearingLogoKeyframes{0%{opacity:0}to{opacity:1}}@keyframes appearingLogoKeyframes{0%{opacity:0}to{opacity:1}}.multiwindow-indicator{background:#f0f;height:1.5px;opacity:.5;pointer-events:none;position:fixed;right:0;top:0;width:3px;z-index:9999}.loader-frame-container{align-items:center;display:flex;height:100vh;overflow:hidden;position:absolute;right:0;top:0;width:100vw}.phone .loader-frame-container,.tablet .loader-frame-container{height:100%}.loader-frame-container iframe{background:rgba(0,0,0,.1);border:none;box-sizing:border-box;display:inline-block;vertical-align:top}.loader-frame-container .games-container{align-items:center;display:flex;flex-wrap:wrap;justify-content:center}.phone .loader-frame-container .games-container{align-items:start;height:100%}.loader-frame-container .sidebar-container{bottom:0;height:100%;position:fixed;right:0}@media (orientation:landscape){.loader-frame-container .sidebar-container{top:0}}.loader-frame-container .sidebar-container iframe{background:0 0;height:100%;width:100%}.phone .sidebar-container iframe{-webkit-animation:showKeyframes .5s linear forwards;animation:showKeyframes .5s linear forwards}.phone .sidebar-container iframe.disposing{-webkit-animation:hideKeyframes .5s linear;animation:hideKeyframes .5s linear}@-webkit-keyframes showKeyframes{0%{transform:translateY(100vh)}to{transform:translateY(0)}}@keyframes showKeyframes{0%{transform:translateY(100vh)}to{transform:translateY(0)}}@-webkit-keyframes hideKeyframes{to{transform:translateY(100vh)}}@keyframes hideKeyframes{to{transform:translateY(100vh)}}#loader-popup{align-items:center;bottom:0;display:flex;flex-direction:column;flex-wrap:wrap;font:12px/1.5 Segoe UI,Helvetica,Arial,sans-serif;justify-content:center;left:0;position:absolute;right:0;top:0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;z-index:1000001}#loader-popup:empty{display:none}body.tablet #loader-popup{font-size:14px}body.desktop #loader-popup{font-size:calc(1vmin + 5px)}#loader-popup>div{background-color:#1a1a1a;border:.0833em solid rgba(150,255,255,.97);border-radius:.5em;box-sizing:border-box;margin:.5em;max-width:90%;padding:1.4em 2.8em;text-align:center}#loader-popup label{display:block}#loader-popup a,#loader-popup button{background-color:initial;border:.0833em solid #4d4d4d;border-radius:1.5em;color:#dcdcdc;cursor:pointer;font-size:1em;font-weight:400;line-height:2;margin:1em 1em 0;min-width:20%;padding:0 2em;text-decoration:none;text-transform:uppercase;transition:background-color .5s ease}#loader-popup a:hover,#loader-popup button:hover{background-color:hsla(0,0%,100%,.4);color:#fff}#loader-popup body.ka a,#loader-popup body.ka button{text-transform:none}video::-webkit-media-controls-panel,video::-webkit-media-controls-play-button,video::-webkit-media-controls-start-playback-button{-webkit-appearance:none;display:none!important}.uc-video-toolbar{display:none}.root-container{display:block;height:100%;left:0;overflow:auto;position:absolute;top:0;width:100%}body.ios.native .root-container{height:100vh;width:100vw}#gcm-game{border:0;height:100%;margin:0;padding:0;width:100%}</style>
   </head>
   <body class="loading notranslate">
      <div id="verbose-log" data-sandbox="ignore"></div>
      <div id="loader-popup"></div>
      <div class="loading-screen" data-sandbox="ignore">
         <div class="loading-screen-awardLogos"></div>
         <div class="loading-screen-content">
            <img class="loading-screen-image" alt="Loading screen">
            <div class="loading-screen-center">
               <div class="loading-screen-progress-bar-background"></div>
               <div class="loading-screen-progress-line"></div>
               <div class="loading-screen-evo-logo"><span class="loading-screen-logo-text"></span></div>
               <div class="loading-screen-progress-star-wrapper">
                  <div class="loading-screen-progress-star"></div>
               </div>
               <div class="loading-screen-center-footer"></div>
            </div>
         </div>
      </div>
      <div id="root" class="root-container"></div>
      <script>
		var Sentry = function(t) {
			var e = function(t, n) {
				return (e = Object.setPrototypeOf || {
						__proto__: []
					}
					instanceof Array && function(t, e) {
						t.__proto__ = e
					} || function(t, e) {
						for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n])
					})(t, n)
			};

			function n(t, n) {
				function r() {
					this.constructor = t
				}
				e(t, n), t.prototype = null === n ? Object.create(n) : (r.prototype = n.prototype, new r)
			}
			var r, o, i, s, a, u, c = function() {
				return (c = Object.assign || function(t) {
					for (var e, n = 1, r = arguments.length; n < r; n++)
						for (var o in e = arguments[n]) Object.prototype.hasOwnProperty.call(e, o) && (t[o] = e[o]);
					return t
				}).apply(this, arguments)
			};

			function p(t) {
				var e = "function" == typeof Symbol && t[Symbol.iterator],
					n = 0;
				return e ? e.call(t) : {
					next: function() {
						return t && n >= t.length && (t = void 0), {
							value: t && t[n++],
							done: !t
						}
					}
				}
			}

			function l(t, e) {
				var n = "function" == typeof Symbol && t[Symbol.iterator];
				if (!n) return t;
				var r, o, i = n.call(t),
					s = [];
				try {
					for (;
						(void 0 === e || e-- > 0) && !(r = i.next()).done;) s.push(r.value)
				} catch (t) {
					o = {
						error: t
					}
				} finally {
					try {
						r && !r.done && (n = i.return) && n.call(i)
					} finally {
						if (o) throw o.error
					}
				}
				return s
			}

			function h() {
				for (var t = [], e = 0; e < arguments.length; e++) t = t.concat(l(arguments[e]));
				return t
			}

			function f(t) {
				switch (Object.prototype.toString.call(t)) {
					case "[object Error]":
					case "[object Exception]":
					case "[object DOMException]":
						return !0;
					default:
						return E(t, Error)
				}
			}

			function d(t) {
				return "[object ErrorEvent]" === Object.prototype.toString.call(t)
			}

			function v(t) {
				return "[object DOMError]" === Object.prototype.toString.call(t)
			}

			function y(t) {
				return "[object String]" === Object.prototype.toString.call(t)
			}

			function g(t) {
				return null === t || "object" != typeof t && "function" != typeof t
			}

			function m(t) {
				return "[object Object]" === Object.prototype.toString.call(t)
			}

			function _(t) {
				return "undefined" != typeof Event && E(t, Event)
			}

			function b(t) {
				return "undefined" != typeof Element && E(t, Element)
			}

			function S(t) {
				return Boolean(t && t.then && "function" == typeof t.then)
			}

			function E(t, e) {
				try {
					return t instanceof e
				} catch (t) {
					return !1
				}
			}

			function x(t, e) {
				try {
					for (var n = t, r = [], o = 0, i = 0, s = " > ".length, a = void 0; n && o++ < 5 && !("html" === (a = w(n, e)) || o > 1 && i + r.length * s + a.length >= 80);) r.push(a), i += a.length, n = n.parentNode;
					return r.reverse().join(" > ")
				} catch (t) {
					return "<unknown>"
				}
			}

			function w(t, e) {
				var n, r, o, i, s, a, u, c = t,
					p = [];
				if (!c || !c.tagName) return "";
				p.push(c.tagName.toLowerCase());
				var l = (null === (n = e) || void 0 === n ? void 0 : n.length) ? e.filter((function(t) {
					return c.getAttribute(t)
				})).map((function(t) {
					return [t, c.getAttribute(t)]
				})) : null;
				if (null === (r = l) || void 0 === r ? void 0 : r.length) l.forEach((function(t) {
					p.push("[" + t[0] + '="' + t[1] + '"]')
				}));
				else if (c.id && p.push("#" + c.id), (o = c.className) && y(o))
					for (i = o.split(/\s+/), u = 0; u < i.length; u++) p.push("." + i[u]);
				var h = ["type", "name", "title", "alt"];
				for (u = 0; u < h.length; u++) s = h[u], (a = c.getAttribute(s)) && p.push("[" + s + '="' + a + '"]');
				return p.join("")
			}! function(t) {
				t[t.None = 0] = "None", t[t.Error = 1] = "Error", t[t.Debug = 2] = "Debug", t[t.Verbose = 3] = "Verbose"
			}(r || (r = {})),
			function(t) {
				t.Ok = "ok", t.Exited = "exited", t.Crashed = "crashed", t.Abnormal = "abnormal"
			}(o || (o = {})),
			function(t) {
				t.Ok = "ok", t.Errored = "errored", t.Crashed = "crashed"
			}(i || (i = {})), (s = t.Severity || (t.Severity = {})).Fatal = "fatal", s.Error = "error", s.Warning = "warning", s.Log = "log", s.Info = "info", s.Debug = "debug", s.Critical = "critical",
				function(t) {
					t.fromString = function(e) {
						switch (e) {
							case "debug":
								return t.Debug;
							case "info":
								return t.Info;
							case "warn":
							case "warning":
								return t.Warning;
							case "error":
								return t.Error;
							case "fatal":
								return t.Fatal;
							case "critical":
								return t.Critical;
							default:
								return t.Log
						}
					}
				}(t.Severity || (t.Severity = {})), (a = t.Status || (t.Status = {})).Unknown = "unknown", a.Skipped = "skipped", a.Success = "success", a.RateLimit = "rate_limit", a.Invalid = "invalid", a.Failed = "failed",
				function(t) {
					t.fromHttpCode = function(e) {
						return e >= 200 && e < 300 ? t.Success : 429 === e ? t.RateLimit : e >= 400 && e < 500 ? t.Invalid : e >= 500 ? t.Failed : t.Unknown
					}
				}(t.Status || (t.Status = {})),
				function(t) {
					t.Explicit = "explicitly_set", t.Sampler = "client_sampler", t.Rate = "client_rate", t.Inheritance = "inheritance"
				}(u || (u = {}));
			var k = Object.setPrototypeOf || ({
						__proto__: []
					}
					instanceof Array ? function(t, e) {
						return t.__proto__ = e, t
					} : function(t, e) {
						for (var n in e) t.hasOwnProperty(n) || (t[n] = e[n]);
						return t
					}),
				O = function(t) {
					function e(e) {
						var n = this.constructor,
							r = t.call(this, e) || this;
						return r.message = e, r.name = n.prototype.constructor.name, k(r, n.prototype), r
					}
					return n(e, t), e
				}(Error),
				T = /^(?:(\w+):)\/\/(?:(\w+)(?::(\w+))?@)([\w.-]+)(?::(\d+))?\/(.+)/,
				j = function() {
					function t(t) {
						"string" == typeof t ? this.t(t) : this.i(t), this.o()
					}
					return t.prototype.toString = function(t) {
						void 0 === t && (t = !1);
						var e = this,
							n = e.host,
							r = e.path,
							o = e.pass,
							i = e.port,
							s = e.projectId;
						return e.protocol + "://" + e.publicKey + (t && o ? ":" + o : "") + "@" + n + (i ? ":" + i : "") + "/" + (r ? r + "/" : r) + s
					}, t.prototype.t = function(t) {
						var e = T.exec(t);
						if (!e) throw new O("New state");
						var n = l(e.slice(1), 6),
							r = n[0],
							o = n[1],
							i = n[2],
							s = void 0 === i ? "" : i,
							a = n[3],
							u = n[4],
							c = void 0 === u ? "" : u,
							p = "",
							h = n[5],
							f = h.split("/");
						if (f.length > 1 && (p = f.slice(0, -1).join("/"), h = f.pop()), h) {
							var d = h.match(/^\d+/);
							d && (h = d[0])
						}
						this.i({
							host: a,
							pass: s,
							path: p,
							projectId: h,
							port: c,
							protocol: r,
							publicKey: o
						})
					}, t.prototype.i = function(t) {
						"user" in t && !("publicKey" in t) && (t.publicKey = t.user), this.user = t.publicKey || "", this.protocol = t.protocol, this.publicKey = t.publicKey || "", this.pass = t.pass || "", this.host = t.host, this.port = t.port || "", this.path = t.path || "", this.projectId = t.projectId
					}, t.prototype.o = function() {
						var t = this;
						if (["protocol", "publicKey", "host", "projectId"].forEach((function(e) {
								if (!t[e]) throw new O("Invalid Dsn: " + e + " missing")
							})), !this.projectId.match(/^\d+$/)) throw new O("Invalid Dsn: Invalid projectId " + this.projectId);
						if ("http" !== this.protocol && "https" !== this.protocol) throw new O("Invalid Dsn: Invalid protocol " + this.protocol);
						if (this.port && isNaN(parseInt(this.port, 10))) throw new O("Invalid Dsn: Invalid port " + this.port)
					}, t
				}();

			function D() {
				return "[object process]" === Object.prototype.toString.call("undefined" != typeof process ? process : 0)
			}

			function R(t, e) {
				return void 0 === e && (e = 0), "string" != typeof t || 0 === e ? t : t.length <= e ? t : t.substr(0, e) + "..."
			}

			function I(t, e) {
				if (!Array.isArray(t)) return "";
				for (var n = [], r = 0; r < t.length; r++) {
					var o = t[r];
					try {
						n.push(String(o))
					} catch (t) {
						n.push("[value cannot be serialized]")
					}
				}
				return n.join(e)
			}

			function N(t, e) {
				return !!y(t) && (n = e, "[object RegExp]" === Object.prototype.toString.call(n) ? e.test(t) : "string" == typeof e && -1 !== t.indexOf(e));
				var n
			}
			var C = {};

			function A() {
				return D() ? global : "undefined" != typeof window ? window : "undefined" != typeof self ? self : C
			}

			function q() {
				var t = A(),
					e = t.crypto || t.msCrypto;
				if (void 0 !== e && e.getRandomValues) {
					var n = new Uint16Array(8);
					e.getRandomValues(n), n[3] = 4095 & n[3] | 16384, n[4] = 16383 & n[4] | 32768;
					var r = function(t) {
						for (var e = t.toString(16); e.length < 4;) e = "0" + e;
						return e
					};
					return r(n[0]) + r(n[1]) + r(n[2]) + r(n[3]) + r(n[4]) + r(n[5]) + r(n[6]) + r(n[7])
				}
				return "xxxxxxxxxxxx4xxxyxxxxxxxxxxxxxxx".replace(/[xy]/g, (function(t) {
					var e = 16 * Math.random() | 0;
					return ("x" === t ? e : 3 & e | 8).toString(16)
				}))
			}

			function U(t) {
				if (!t) return {};
				var e = t.match(/^(([^:\/?#]+):)?(\/\/([^\/?#]*))?([^?#]*)(\?([^#]*))?(#(.*))?$/);
				if (!e) return {};
				var n = e[6] || "",
					r = e[8] || "";
				return {
					host: e[4],
					path: e[5],
					protocol: e[2],
					relative: e[5] + n + r
				}
			}

			function P(t) {
				if (t.message) return t.message;
				if (t.exception && t.exception.values && t.exception.values[0]) {
					var e = t.exception.values[0];
					return e.type && e.value ? e.type + ": " + e.value : e.type || e.value || t.event_id || "<unknown>"
				}
				return t.event_id || "<unknown>"
			}

			function L(t) {
				var e = A();
				if (!("console" in e)) return t();
				var n = e.console,
					r = {};
				["debug", "info", "warn", "error", "log", "assert"].forEach((function(t) {
					t in e.console && n[t].__sentry_original__ && (r[t] = n[t], n[t] = n[t].__sentry_original__)
				}));
				var o = t();
				return Object.keys(r).forEach((function(t) {
					n[t] = r[t]
				})), o
			}

			function M(t, e, n) {
				t.exception = t.exception || {}, t.exception.values = t.exception.values || [], t.exception.values[0] = t.exception.values[0] || {}, t.exception.values[0].value = t.exception.values[0].value || e || "", t.exception.values[0].type = t.exception.values[0].type || n || "Error"
			}

			function B(t, e) {
				void 0 === e && (e = {});
				try {
					t.exception.values[0].mechanism = t.exception.values[0].mechanism || {}, Object.keys(e).forEach((function(n) {
						t.exception.values[0].mechanism[n] = e[n]
					}))
				} catch (t) {}
			}
			var H = A(),
				F = "Sentry Logger ",
				Y = function() {
					function t() {
						this.u = !1
					}
					return t.prototype.disable = function() {
						this.u = !1
					}, t.prototype.enable = function() {
						this.u = !0
					}, t.prototype.log = function() {
						for (var t = [], e = 0; e < arguments.length; e++) t[e] = arguments[e];
						this.u && L((function() {
							H.console.log(F + "[Log]: " + t.join(" "))
						}))
					}, t.prototype.warn = function() {
						for (var t = [], e = 0; e < arguments.length; e++) t[e] = arguments[e];
						this.u && L((function() {
							H.console.warn(F + "[Warn]: " + t.join(" "))
						}))
					}, t.prototype.error = function() {
						for (var t = [], e = 0; e < arguments.length; e++) t[e] = arguments[e];
						this.u && L((function() {
							H.console.error(F + "[Error]: " + t.join(" "))
						}))
					}, t
				}();
			H.__SENTRY__ = H.__SENTRY__ || {};
			var W = H.__SENTRY__.logger || (H.__SENTRY__.logger = new Y),
				X = function() {
					function t() {
						this.s = "function" == typeof WeakSet, this.h = this.s ? new WeakSet : []
					}
					return t.prototype.memoize = function(t) {
						if (this.s) return !!this.h.has(t) || (this.h.add(t), !1);
						for (var e = 0; e < this.h.length; e++)
							if (this.h[e] === t) return !0;
						return this.h.push(t), !1
					}, t.prototype.unmemoize = function(t) {
						if (this.s) this.h.delete(t);
						else
							for (var e = 0; e < this.h.length; e++)
								if (this.h[e] === t) {
									this.h.splice(e, 1);
									break
								}
					}, t
				}(),
				J = "<anonymous>";

			function K(t) {
				try {
					return t && "function" == typeof t && t.name || J
				} catch (t) {
					return J
				}
			}

			function G(t, e, n) {
				if (e in t) {
					var r = t[e],
						o = n(r);
					if ("function" == typeof o) try {
						o.prototype = o.prototype || {}, Object.defineProperties(o, {
							__sentry_original__: {
								enumerable: !1,
								value: r
							}
						})
					} catch (t) {}
					t[e] = o
				}
			}

			function V(t) {
				if (f(t)) {
					var e = t,
						n = {
							message: e.message,
							name: e.name,
							stack: e.stack
						};
					for (var r in e) Object.prototype.hasOwnProperty.call(e, r) && (n[r] = e[r]);
					return n
				}
				if (_(t)) {
					var o = t,
						i = {};
					i.type = o.type;
					try {
						i.target = b(o.target) ? x(o.target) : Object.prototype.toString.call(o.target)
					} catch (t) {
						i.target = "<unknown>"
					}
					try {
						i.currentTarget = b(o.currentTarget) ? x(o.currentTarget) : Object.prototype.toString.call(o.currentTarget)
					} catch (t) {
						i.currentTarget = "<unknown>"
					}
					for (var r in "undefined" != typeof CustomEvent && E(t, CustomEvent) && (i.detail = o.detail), o) Object.prototype.hasOwnProperty.call(o, r) && (i[r] = o);
					return i
				}
				return t
			}

			function z(t, e, n) {
				void 0 === e && (e = 3), void 0 === n && (n = 102400);
				var r = Q(t, e);
				return function(t) {
					return function(t) {
						return ~-encodeURI(t).split(/%..|./).length
					}(JSON.stringify(t))
				}(r) > n ? z(t, e - 1, n) : r
			}

			function $(t, e) {
				return "domain" === e && t && "object" == typeof t && t.v ? "[Domain]" : "domainEmitter" === e ? "[DomainEmitter]" : "undefined" != typeof global && t === global ? "[Global]" : "undefined" != typeof window && t === window ? "[Window]" : "undefined" != typeof document && t === document ? "[Document]" : m(n = t) && "nativeEvent" in n && "preventDefault" in n && "stopPropagation" in n ? "[SyntheticEvent]" : "number" == typeof t && t != t ? "[NaN]" : void 0 === t ? "[undefined]" : "function" == typeof t ? "[Function: " + K(t) + "]" : "symbol" == typeof t ? "[" + String(t) + "]" : "bigint" == typeof t ? "[BigInt: " + String(t) + "]" : t;
				var n
			}

			function Z(t, e, n, r) {
				if (void 0 === n && (n = 1 / 0), void 0 === r && (r = new X), 0 === n) return function(t) {
					var e = Object.prototype.toString.call(t);
					if ("string" == typeof t) return t;
					if ("[object Object]" === e) return "[Object]";
					if ("[object Array]" === e) return "[Array]";
					var n = $(t);
					return g(n) ? n : e
				}(e);
				if (null != e && "function" == typeof e.toJSON) return e.toJSON();
				var o = $(e, t);
				if (g(o)) return o;
				var i = V(e),
					s = Array.isArray(e) ? [] : {};
				if (r.memoize(e)) return "[Circular ~]";
				for (var a in i) Object.prototype.hasOwnProperty.call(i, a) && (s[a] = Z(a, i[a], n - 1, r));
				return r.unmemoize(e), s
			}

			function Q(t, e) {
				try {
					return JSON.parse(JSON.stringify(t, (function(t, n) {
						return Z(t, n, e)
					})))
				} catch (t) {
					return "**non-serializable**"
				}
			}

			function tt(t, e) {
				void 0 === e && (e = 40);
				var n = Object.keys(V(t));
				if (n.sort(), !n.length) return "[object has no keys]";
				if (n[0].length >= e) return R(n[0], e);
				for (var r = n.length; r > 0; r--) {
					var o = n.slice(0, r).join(", ");
					if (!(o.length > e)) return r === n.length ? o : R(o, e)
				}
				return ""
			}

			function et(t) {
				var e, n;
				if (m(t)) {
					var r = t,
						o = {};
					try {
						for (var i = p(Object.keys(r)), s = i.next(); !s.done; s = i.next()) {
							var a = s.value;
							void 0 !== r[a] && (o[a] = et(r[a]))
						}
					} catch (t) {
						e = {
							error: t
						}
					} finally {
						try {
							s && !s.done && (n = i.return) && n.call(i)
						} finally {
							if (e) throw e.error
						}
					}
					return o
				}
				return Array.isArray(t) ? t.map(et) : t
			}

			function nt() {
				if (!("fetch" in A())) return !1;
				try {
					return new Headers, new Request(""), new Response, !0
				} catch (t) {
					return !1
				}
			}

			function rt(t) {
				return t && /^function fetch\(\)\s+\{\s+\[native code\]\s+\}$/.test(t.toString())
			}

			function ot() {
				if (!nt()) return !1;
				try {
					return new Request("_", {
						referrerPolicy: "origin"
					}), !0
				} catch (t) {
					return !1
				}
			}
			var it, st, at, ut = A(),
				ct = {},
				pt = {};

			function lt(t) {
				t && "string" == typeof t.type && "function" == typeof t.callback && (ct[t.type] = ct[t.type] || [], ct[t.type].push(t.callback), function(t) {
					if (!pt[t]) switch (pt[t] = !0, t) {
						case "console":
							! function() {
								if ("console" in ut)["debug", "info", "warn", "error", "log", "assert"].forEach((function(t) {
									t in ut.console && G(ut.console, t, (function(e) {
										return function() {
											for (var n = [], r = 0; r < arguments.length; r++) n[r] = arguments[r];
											ht("console", {
												args: n,
												level: t
											}), e && Function.prototype.apply.call(e, ut.console, n)
										}
									}))
								}))
							}();
							break;
						case "dom":
							! function() {
								if ("document" in ut) {
									var t = ht.bind(null, "dom"),
										e = vt(t, !0);
									ut.document.addEventListener("click", e, !1), ut.document.addEventListener("keypress", e, !1), ["EventTarget", "Node"].forEach((function(e) {
										var n = ut[e] && ut[e].prototype;
										n && n.hasOwnProperty && n.hasOwnProperty("addEventListener") && (G(n, "addEventListener", (function(e) {
											return function(n, r, o) {
												if ("click" === n || "keypress" == n) try {
													var i = this.__sentry_instrumentation_handlers__ = this.__sentry_instrumentation_handlers__ || {},
														s = i[n] = i[n] || {
															refCount: 0
														};
													if (!s.handler) {
														var a = vt(t);
														s.handler = a, e.call(this, n, a, o)
													}
													s.refCount += 1
												} catch (t) {}
												return e.call(this, n, r, o)
											}
										})), G(n, "removeEventListener", (function(t) {
											return function(e, n, r) {
												if ("click" === e || "keypress" == e) try {
													var o = this.__sentry_instrumentation_handlers__ || {},
														i = o[e];
													i && (i.refCount -= 1, i.refCount <= 0 && (t.call(this, e, i.handler, r), i.handler = void 0, delete o[e]), 0 === Object.keys(o).length && delete this.__sentry_instrumentation_handlers__)
												} catch (t) {}
												return t.call(this, e, n, r)
											}
										})))
									}))
								}
							}();
							break;
						case "xhr":
							! function() {
								if ("XMLHttpRequest" in ut) {
									var t = [],
										e = [],
										n = XMLHttpRequest.prototype;
									G(n, "open", (function(n) {
										return function() {
											for (var r = [], o = 0; o < arguments.length; o++) r[o] = arguments[o];
											var i = this,
												s = r[1];
											i.__sentry_xhr__ = {
												method: y(r[0]) ? r[0].toUpperCase() : r[0],
												url: r[1]
											}, y(s) && "POST" === i.__sentry_xhr__.method && s.match(/sentry_key/) && (i.__sentry_own_request__ = !0);
											var a = function() {
												if (4 === i.readyState) {
													try {
														i.__sentry_xhr__ && (i.__sentry_xhr__.status_code = i.status)
													} catch (t) {}
													try {
														var n = t.indexOf(i);
														if (-1 !== n) {
															t.splice(n);
															var o = e.splice(n)[0];
															i.__sentry_xhr__ && void 0 !== o[0] && (i.__sentry_xhr__.body = o[0])
														}
													} catch (t) {}
													ht("xhr", {
														args: r,
														endTimestamp: Date.now(),
														startTimestamp: Date.now(),
														xhr: i
													})
												}
											};
											return "onreadystatechange" in i && "function" == typeof i.onreadystatechange ? G(i, "onreadystatechange", (function(t) {
												return function() {
													for (var e = [], n = 0; n < arguments.length; n++) e[n] = arguments[n];
													return a(), t.apply(i, e)
												}
											})) : i.addEventListener("readystatechange", a), n.apply(i, r)
										}
									})), G(n, "send", (function(n) {
										return function() {
											for (var r = [], o = 0; o < arguments.length; o++) r[o] = arguments[o];
											return t.push(this), e.push(r), ht("xhr", {
												args: r,
												startTimestamp: Date.now(),
												xhr: this
											}), n.apply(this, r)
										}
									}))
								}
							}();
							break;
						case "fetch":
							! function() {
								if (function() {
										if (!nt()) return !1;
										var t = A();
										if (rt(t.fetch)) return !0;
										var e = !1,
											n = t.document;
										if (n && "function" == typeof n.createElement) try {
											var r = n.createElement("iframe");
											r.hidden = !0, n.head.appendChild(r), r.contentWindow && r.contentWindow.fetch && (e = rt(r.contentWindow.fetch)), n.head.removeChild(r)
										} catch (t) {
											W.warn("Could not create sandbox iframe for pure fetch check, bailing to window.fetch: ", t)
										}
										return e
									}()) G(ut, "fetch", (function(t) {
									return function() {
										for (var e = [], n = 0; n < arguments.length; n++) e[n] = arguments[n];
										var r = {
											args: e,
											fetchData: {
												method: ft(e),
												url: dt(e)
											},
											startTimestamp: Date.now()
										};
										return ht("fetch", c({}, r)), t.apply(ut, e).then((function(t) {
											return ht("fetch", c(c({}, r), {
												endTimestamp: Date.now(),
												response: t
											})), t
										}), (function(t) {
											throw ht("fetch", c(c({}, r), {
												endTimestamp: Date.now(),
												error: t
											})), t
										}))
									}
								}))
							}();
							break;
						case "history":
							! function() {
								if (n = (e = (t = A()).chrome) && e.app && e.app.runtime, r = "history" in t && !!t.history.pushState && !!t.history.replaceState, !n && r) {
									var t, e, n, r, o = ut.onpopstate;
									ut.onpopstate = function() {
										for (var t = [], e = 0; e < arguments.length; e++) t[e] = arguments[e];
										var n = ut.location.href,
											r = it;
										if (it = n, ht("history", {
												from: r,
												to: n
											}), o) try {
											return o.apply(this, t)
										} catch (t) {}
									}, G(ut.history, "pushState", i), G(ut.history, "replaceState", i)
								}

								function i(t) {
									return function() {
										for (var e = [], n = 0; n < arguments.length; n++) e[n] = arguments[n];
										var r = e.length > 2 ? e[2] : void 0;
										if (r) {
											var o = it,
												i = String(r);
											it = i, ht("history", {
												from: o,
												to: i
											})
										}
										return t.apply(this, e)
									}
								}
							}();
							break;
						case "error":
							gt = ut.onerror, ut.onerror = function(t, e, n, r, o) {
								return ht("error", {
									column: r,
									error: o,
									line: n,
									msg: t,
									url: e
								}), !!gt && gt.apply(this, arguments)
							};
							break;
						case "unhandledrejection":
							mt = ut.onunhandledrejection, ut.onunhandledrejection = function(t) {
								return ht("unhandledrejection", t), !mt || mt.apply(this, arguments)
							};
							break;
						default:
							W.warn("unknown instrumentation type:", t)
					}
				}(t.type))
			}

			function ht(t, e) {
				var n, r;
				if (t && ct[t]) try {
					for (var o = p(ct[t] || []), i = o.next(); !i.done; i = o.next()) {
						var s = i.value;
						try {
							s(e)
						} catch (e) {
							W.error("Error while triggering instrumentation handler.\nType: " + t + "\nName: " + K(s) + "\nError: " + e)
						}
					}
				} catch (t) {
					n = {
						error: t
					}
				} finally {
					try {
						i && !i.done && (r = o.return) && r.call(o)
					} finally {
						if (n) throw n.error
					}
				}
			}

			function ft(t) {
				return void 0 === t && (t = []), "Request" in ut && E(t[0], Request) && t[0].method ? String(t[0].method).toUpperCase() : t[1] && t[1].method ? String(t[1].method).toUpperCase() : "GET"
			}

			function dt(t) {
				return void 0 === t && (t = []), "string" == typeof t[0] ? t[0] : "Request" in ut && E(t[0], Request) ? t[0].url : String(t[0])
			}

			function vt(t, e) {
				return void 0 === e && (e = !1),
					function(n) {
						if (n && at !== n && ! function(t) {
								if ("keypress" !== t.type) return !1;
								try {
									var e = t.target;
									if (!e || !e.tagName) return !0;
									if ("INPUT" === e.tagName || "TEXTAREA" === e.tagName || e.isContentEditable) return !1
								} catch (t) {}
								return !0
							}(n)) {
							var r = "keypress" === n.type ? "input" : n.type;
							void 0 === st ? (t({
								event: n,
								name: r,
								global: e
							}), at = n) : function(t, e) {
								if (!t) return !0;
								if (t.type !== e.type) return !0;
								try {
									if (t.target !== e.target) return !0
								} catch (t) {}
								return !1
							}(at, n) && (t({
								event: n,
								name: r,
								global: e
							}), at = n), clearTimeout(st), st = ut.setTimeout((function() {
								st = void 0
							}), 1e3)
						}
					}
			}
			var yt, gt = null,
				mt = null;
			! function(t) {
				t.PENDING = "PENDING", t.RESOLVED = "RESOLVED", t.REJECTED = "REJECTED"
			}(yt || (yt = {}));
			var _t = function() {
					function t(t) {
						var e = this;
						this.l = yt.PENDING, this.p = [], this.m = function(t) {
							e.g(yt.RESOLVED, t)
						}, this.j = function(t) {
							e.g(yt.REJECTED, t)
						}, this.g = function(t, n) {
							e.l === yt.PENDING && (S(n) ? n.then(e.m, e.j) : (e.l = t, e.k = n, e.S()))
						}, this._ = function(t) {
							e.p = e.p.concat(t), e.S()
						}, this.S = function() {
							if (e.l !== yt.PENDING) {
								var t = e.p.slice();
								e.p = [], t.forEach((function(t) {
									t.done || (e.l === yt.RESOLVED && t.onfulfilled && t.onfulfilled(e.k), e.l === yt.REJECTED && t.onrejected && t.onrejected(e.k), t.done = !0)
								}))
							}
						};
						try {
							t(this.m, this.j)
						} catch (t) {
							this.j(t)
						}
					}
					return t.resolve = function(e) {
						return new t((function(t) {
							t(e)
						}))
					}, t.reject = function(e) {
						return new t((function(t, n) {
							n(e)
						}))
					}, t.all = function(e) {
						return new t((function(n, r) {
							if (Array.isArray(e))
								if (0 !== e.length) {
									var o = e.length,
										i = [];
									e.forEach((function(e, s) {
										t.resolve(e).then((function(t) {
											i[s] = t, 0 == (o -= 1) && n(i)
										})).then(null, r)
									}))
								} else n([]);
							else r(new TypeError("Promise.all requires an array as input."))
						}))
					}, t.prototype.then = function(e, n) {
						var r = this;
						return new t((function(t, o) {
							r._({
								done: !1,
								onfulfilled: function(n) {
									if (e) try {
										return void t(e(n))
									} catch (t) {
										return void o(t)
									} else t(n)
								},
								onrejected: function(e) {
									if (n) try {
										return void t(n(e))
									} catch (t) {
										return void o(t)
									} else o(e)
								}
							})
						}))
					}, t.prototype.catch = function(t) {
						return this.then((function(t) {
							return t
						}), t)
					}, t.prototype.finally = function(e) {
						var n = this;
						return new t((function(t, r) {
							var o, i;
							return n.then((function(t) {
								i = !1, o = t, e && e()
							}), (function(t) {
								i = !0, o = t, e && e()
							})).then((function() {
								i ? r(o) : t(o)
							}))
						}))
					}, t.prototype.toString = function() {
						return "[object SyncPromise]"
					}, t
				}(),
				bt = function() {
					function t(t) {
						this.O = t, this.D = []
					}
					return t.prototype.isReady = function() {
						return void 0 === this.O || this.length() < this.O
					}, t.prototype.add = function(t) {
						var e = this;
						if (!this.isReady()) return _t.reject(new O("Not adding Promise due to buffer limit reached."));
						var n = t();
						return -1 === this.D.indexOf(n) && this.D.push(n), n.then((function() {
							return e.remove(n)
						})).then(null, (function() {
							return e.remove(n).then(null, (function() {}))
						})), n
					}, t.prototype.remove = function(t) {
						return this.D.splice(this.D.indexOf(t), 1)[0]
					}, t.prototype.length = function() {
						return this.D.length
					}, t.prototype.drain = function(t) {
						var e = this;
						return new _t((function(n) {
							var r = setTimeout((function() {
								t && t > 0 && n(!1)
							}), t);
							_t.all(e.D).then((function() {
								clearTimeout(r), n(!0)
							})).then(null, (function() {
								n(!0)
							}))
						}))
					}, t
				}(),
				St = {
					nowSeconds: function() {
						return Date.now() / 1e3
					}
				},
				Et = D() ? function() {
					try {
						return (t = module, t.require("perf_hooks")).performance
					} catch (t) {
						return
					}
					var t
				}() : function() {
					var t = A().performance;
					if (t && t.now) return {
						now: function() {
							return t.now()
						},
						timeOrigin: Date.now() - t.now()
					}
				}(),
				xt = void 0 === Et ? St : {
					nowSeconds: function() {
						return (Et.timeOrigin + Et.now()) / 1e3
					}
				},
				wt = St.nowSeconds.bind(St),
				kt = xt.nowSeconds.bind(xt),
				Ot = (function() {
					var t = A().performance;
					if (t && t.now) {
						var e = t.now(),
							n = Date.now(),
							r = t.timeOrigin ? Math.abs(t.timeOrigin + e - n) : 36e5,
							o = r < 36e5,
							i = t.timing && t.timing.navigationStart,
							s = "number" == typeof i ? Math.abs(i + e - n) : 36e5;
						(o || s < 36e5) && r <= s && t.timeOrigin
					}
				}(), function() {
					function t() {
						this.T = !1, this.R = [], this.I = [], this.N = [], this.M = {}, this.C = {}, this.A = {}, this.q = {}
					}
					return t.clone = function(e) {
						var n = new t;
						return e && (n.N = h(e.N), n.C = c({}, e.C), n.A = c({}, e.A), n.q = c({}, e.q), n.M = e.M, n.L = e.L, n.U = e.U, n.H = e.H, n.F = e.F, n.P = e.P, n.I = h(e.I), n.X = e.X), n
					}, t.prototype.addScopeListener = function(t) {
						this.R.push(t)
					}, t.prototype.addEventProcessor = function(t) {
						return this.I.push(t), this
					}, t.prototype.setUser = function(t) {
						return this.M = t || {}, this.H && this.H.update({
							user: t
						}), this.B(), this
					}, t.prototype.getUser = function() {
						return this.M
					}, t.prototype.getRequestSession = function() {
						return this.X
					}, t.prototype.setRequestSession = function(t) {
						return this.X = t, this
					}, t.prototype.setTags = function(t) {
						return this.C = c(c({}, this.C), t), this.B(), this
					}, t.prototype.setTag = function(t, e) {
						var n;
						return this.C = c(c({}, this.C), ((n = {})[t] = e, n)), this.B(), this
					}, t.prototype.setExtras = function(t) {
						return this.A = c(c({}, this.A), t), this.B(), this
					}, t.prototype.setExtra = function(t, e) {
						var n;
						return this.A = c(c({}, this.A), ((n = {})[t] = e, n)), this.B(), this
					}, t.prototype.setFingerprint = function(t) {
						return this.P = t, this.B(), this
					}, t.prototype.setLevel = function(t) {
						return this.L = t, this.B(), this
					}, t.prototype.setTransactionName = function(t) {
						return this.F = t, this.B(), this
					}, t.prototype.setTransaction = function(t) {
						return this.setTransactionName(t)
					}, t.prototype.setContext = function(t, e) {
						var n;
						return null === e ? delete this.q[t] : this.q = c(c({}, this.q), ((n = {})[t] = e, n)), this.B(), this
					}, t.prototype.setSpan = function(t) {
						return this.U = t, this.B(), this
					}, t.prototype.getSpan = function() {
						return this.U
					}, t.prototype.getTransaction = function() {
						var t, e, n, r, o = this.getSpan();
						return (null === (t = o) || void 0 === t ? void 0 : t.transaction) ? null === (e = o) || void 0 === e ? void 0 : e.transaction : (null === (r = null === (n = o) || void 0 === n ? void 0 : n.spanRecorder) || void 0 === r ? void 0 : r.spans[0]) ? o.spanRecorder.spans[0] : void 0
					}, t.prototype.setSession = function(t) {
						return t ? this.H = t : delete this.H, this.B(), this
					}, t.prototype.getSession = function() {
						return this.H
					}, t.prototype.update = function(e) {
						if (!e) return this;
						if ("function" == typeof e) {
							var n = e(this);
							return n instanceof t ? n : this
						}
						return e instanceof t ? (this.C = c(c({}, this.C), e.C), this.A = c(c({}, this.A), e.A), this.q = c(c({}, this.q), e.q), e.M && Object.keys(e.M).length && (this.M = e.M), e.L && (this.L = e.L), e.P && (this.P = e.P), e.X && (this.X = e.X)) : m(e) && (e = e, this.C = c(c({}, this.C), e.tags), this.A = c(c({}, this.A), e.extra), this.q = c(c({}, this.q), e.contexts), e.user && (this.M = e.user), e.level && (this.L = e.level), e.fingerprint && (this.P = e.fingerprint), e.requestSession && (this.X = e.requestSession)), this
					}, t.prototype.clear = function() {
						return this.N = [], this.C = {}, this.A = {}, this.M = {}, this.q = {}, this.L = void 0, this.F = void 0, this.P = void 0, this.X = void 0, this.U = void 0, this.H = void 0, this.B(), this
					}, t.prototype.addBreadcrumb = function(t, e) {
						var n = "number" == typeof e ? Math.min(e, 100) : 100;
						if (n <= 0) return this;
						var r = c({
							timestamp: wt()
						}, t);
						return this.N = h(this.N, [r]).slice(-n), this.B(), this
					}, t.prototype.clearBreadcrumbs = function() {
						return this.N = [], this.B(), this
					}, t.prototype.applyToEvent = function(t, e) {
						var n;
						if (this.A && Object.keys(this.A).length && (t.extra = c(c({}, this.A), t.extra)), this.C && Object.keys(this.C).length && (t.tags = c(c({}, this.C), t.tags)), this.M && Object.keys(this.M).length && (t.user = c(c({}, this.M), t.user)), this.q && Object.keys(this.q).length && (t.contexts = c(c({}, this.q), t.contexts)), this.L && (t.level = this.L), this.F && (t.transaction = this.F), this.U) {
							t.contexts = c({
								trace: this.U.getTraceContext()
							}, t.contexts);
							var r = null === (n = this.U.transaction) || void 0 === n ? void 0 : n.name;
							r && (t.tags = c({
								transaction: r
							}, t.tags))
						}
						return this.J(t), t.breadcrumbs = h(t.breadcrumbs || [], this.N), t.breadcrumbs = t.breadcrumbs.length > 0 ? t.breadcrumbs : void 0, this.W(h(Tt(), this.I), t, e)
					}, t.prototype.W = function(t, e, n, r) {
						var o = this;
						return void 0 === r && (r = 0), new _t((function(i, s) {
							var a = t[r];
							if (null === e || "function" != typeof a) i(e);
							else {
								var u = a(c({}, e), n);
								S(u) ? u.then((function(e) {
									return o.W(t, e, n, r + 1).then(i)
								})).then(null, s) : o.W(t, u, n, r + 1).then(i).then(null, s)
							}
						}))
					}, t.prototype.B = function() {
						var t = this;
						this.T || (this.T = !0, this.R.forEach((function(e) {
							e(t)
						})), this.T = !1)
					}, t.prototype.J = function(t) {
						t.fingerprint = t.fingerprint ? Array.isArray(t.fingerprint) ? t.fingerprint : [t.fingerprint] : [], this.P && (t.fingerprint = t.fingerprint.concat(this.P)), t.fingerprint && !t.fingerprint.length && delete t.fingerprint
					}, t
				}());

			function Tt() {
				var t = A();
				return t.__SENTRY__ = t.__SENTRY__ || {}, t.__SENTRY__.globalEventProcessors = t.__SENTRY__.globalEventProcessors || [], t.__SENTRY__.globalEventProcessors
			}

			function jt(t) {
				Tt().push(t)
			}
			var Dt = function() {
					function t(t) {
						this.errors = 0, this.sid = q(), this.duration = 0, this.status = o.Ok, this.init = !0, this.ignoreDuration = !1;
						var e = kt();
						this.timestamp = e, this.started = e, t && this.update(t)
					}
					return t.prototype.update = function(t) {
						if (void 0 === t && (t = {}), t.user && (!this.ipAddress && t.user.ip_address && (this.ipAddress = t.user.ip_address), this.did || t.did || (this.did = t.user.id || t.user.email || t.user.username)), this.timestamp = t.timestamp || kt(), t.ignoreDuration && (this.ignoreDuration = t.ignoreDuration), t.sid && (this.sid = 32 === t.sid.length ? t.sid : q()), void 0 !== t.init && (this.init = t.init), !this.did && t.did && (this.did = "" + t.did), "number" == typeof t.started && (this.started = t.started), this.ignoreDuration) this.duration = void 0;
						else if ("number" == typeof t.duration) this.duration = t.duration;
						else {
							var e = this.timestamp - this.started;
							this.duration = e >= 0 ? e : 0
						}
						t.release && (this.release = t.release), t.environment && (this.environment = t.environment), !this.ipAddress && t.ipAddress && (this.ipAddress = t.ipAddress), !this.userAgent && t.userAgent && (this.userAgent = t.userAgent), "number" == typeof t.errors && (this.errors = t.errors), t.status && (this.status = t.status)
					}, t.prototype.close = function(t) {
						t ? this.update({
							status: t
						}) : this.status === o.Ok ? this.update({
							status: o.Exited
						}) : this.update()
					}, t.prototype.toJSON = function() {
						return et({
							sid: "" + this.sid,
							init: this.init,
							started: new Date(1e3 * this.started).toISOString(),
							timestamp: new Date(1e3 * this.timestamp).toISOString(),
							status: this.status,
							errors: this.errors,
							did: "number" == typeof this.did || "string" == typeof this.did ? "" + this.did : void 0,
							duration: this.duration,
							attrs: et({
								release: this.release,
								environment: this.environment,
								ip_address: this.ipAddress,
								user_agent: this.userAgent
							})
						})
					}, t
				}(),
				Rt = function() {
					function t(t, e, n) {
						void 0 === e && (e = new Ot), void 0 === n && (n = 4), this.$ = n, this.G = [{}], this.getStackTop().scope = e, this.bindClient(t)
					}
					return t.prototype.isOlderThan = function(t) {
						return this.$ < t
					}, t.prototype.bindClient = function(t) {
						this.getStackTop().client = t, t && t.setupIntegrations && t.setupIntegrations()
					}, t.prototype.pushScope = function() {
						var t = Ot.clone(this.getScope());
						return this.getStack().push({
							client: this.getClient(),
							scope: t
						}), t
					}, t.prototype.popScope = function() {
						return !(this.getStack().length <= 1 || !this.getStack().pop())
					}, t.prototype.withScope = function(t) {
						var e = this.pushScope();
						try {
							t(e)
						} finally {
							this.popScope()
						}
					}, t.prototype.getClient = function() {
						return this.getStackTop().client
					}, t.prototype.getScope = function() {
						return this.getStackTop().scope
					}, t.prototype.getStack = function() {
						return this.G
					}, t.prototype.getStackTop = function() {
						return this.G[this.G.length - 1]
					}, t.prototype.captureException = function(t, e) {
						var n = this.K = q(),
							r = e;
						if (!e) {
							var o = void 0;
							try {
								throw new Error("Sentry syntheticException")
							} catch (t) {
								o = t
							}
							r = {
								originalException: t,
								syntheticException: o
							}
						}
						return this.V("captureException", t, c(c({}, r), {
							event_id: n
						})), n
					}, t.prototype.captureMessage = function(t, e, n) {
						var r = this.K = q(),
							o = n;
						if (!n) {
							var i = void 0;
							try {
								throw new Error(t)
							} catch (t) {
								i = t
							}
							o = {
								originalException: t,
								syntheticException: i
							}
						}
						return this.V("captureMessage", t, e, c(c({}, o), {
							event_id: r
						})), r
					}, t.prototype.captureEvent = function(t, e) {
						var n = this.K = q();
						return this.V("captureEvent", t, c(c({}, e), {
							event_id: n
						})), n
					}, t.prototype.lastEventId = function() {
						return this.K
					}, t.prototype.addBreadcrumb = function(t, e) {
						var n = this.getStackTop(),
							r = n.scope,
							o = n.client;
						if (r && o) {
							var i = o.getOptions && o.getOptions() || {},
								s = i.beforeBreadcrumb,
								a = void 0 === s ? null : s,
								u = i.maxBreadcrumbs,
								p = void 0 === u ? 100 : u;
							if (!(p <= 0)) {
								var l = wt(),
									h = c({
										timestamp: l
									}, t),
									f = a ? L((function() {
										return a(h, e)
									})) : h;
								null !== f && r.addBreadcrumb(f, p)
							}
						}
					}, t.prototype.setUser = function(t) {
						var e = this.getScope();
						e && e.setUser(t)
					}, t.prototype.setTags = function(t) {
						var e = this.getScope();
						e && e.setTags(t)
					}, t.prototype.setExtras = function(t) {
						var e = this.getScope();
						e && e.setExtras(t)
					}, t.prototype.setTag = function(t, e) {
						var n = this.getScope();
						n && n.setTag(t, e)
					}, t.prototype.setExtra = function(t, e) {
						var n = this.getScope();
						n && n.setExtra(t, e)
					}, t.prototype.setContext = function(t, e) {
						var n = this.getScope();
						n && n.setContext(t, e)
					}, t.prototype.configureScope = function(t) {
						var e = this.getStackTop(),
							n = e.scope,
							r = e.client;
						n && r && t(n)
					}, t.prototype.run = function(t) {
						var e = Nt(this);
						try {
							t(this)
						} finally {
							Nt(e)
						}
					}, t.prototype.getIntegration = function(t) {
						var e = this.getClient();
						if (!e) return null;
						try {
							return e.getIntegration(t)
						} catch (e) {
							return W.warn("Cannot retrieve integration " + t.id + " from the current Hub"), null
						}
					}, t.prototype.startSpan = function(t) {
						return this.Y("startSpan", t)
					}, t.prototype.startTransaction = function(t, e) {
						return this.Y("startTransaction", t, e)
					}, t.prototype.traceHeaders = function() {
						return this.Y("traceHeaders")
					}, t.prototype.captureSession = function(t) {
						if (void 0 === t && (t = !1), t) return this.endSession();
						this.Z()
					}, t.prototype.endSession = function() {
						var t, e, n, r, o;
						null === (n = null === (e = null === (t = this.getStackTop()) || void 0 === t ? void 0 : t.scope) || void 0 === e ? void 0 : e.getSession()) || void 0 === n || n.close(), this.Z(), null === (o = null === (r = this.getStackTop()) || void 0 === r ? void 0 : r.scope) || void 0 === o || o.setSession()
					}, t.prototype.startSession = function(t) {
						var e = this.getStackTop(),
							n = e.scope,
							r = e.client,
							i = r && r.getOptions() || {},
							s = i.release,
							a = i.environment,
							u = (A().navigator || {}).userAgent,
							p = new Dt(c(c(c({
								release: s,
								environment: a
							}, n && {
								user: n.getUser()
							}), u && {
								userAgent: u
							}), t));
						if (n) {
							var l = n.getSession && n.getSession();
							l && l.status === o.Ok && l.update({
								status: o.Exited
							}), this.endSession(), n.setSession(p)
						}
						return p
					}, t.prototype.Z = function() {
						var t = this.getStackTop(),
							e = t.scope,
							n = t.client;
						if (e) {
							var r = e.getSession && e.getSession();
							r && n && n.captureSession && n.captureSession(r)
						}
					}, t.prototype.V = function(t) {
						for (var e, n = [], r = 1; r < arguments.length; r++) n[r - 1] = arguments[r];
						var o = this.getStackTop(),
							i = o.scope,
							s = o.client;
						s && s[t] && (e = s)[t].apply(e, h(n, [i]))
					}, t.prototype.Y = function(t) {
						for (var e = [], n = 1; n < arguments.length; n++) e[n - 1] = arguments[n];
						var r = It().__SENTRY__;
						if (r && r.extensions && "function" == typeof r.extensions[t]) return r.extensions[t].apply(this, e);
						W.warn("Extension method " + t + " couldn't be found, doing nothing.")
					}, t
				}();

			function It() {
				var t = A();
				return t.__SENTRY__ = t.__SENTRY__ || {
					extensions: {},
					hub: void 0
				}, t
			}

			function Nt(t) {
				var e = It(),
					n = qt(e);
				return Ut(e, t), n
			}

			function Ct() {
				var t = It();
				return At(t) && !qt(t).isOlderThan(4) || Ut(t, new Rt), D() ? function(t) {
					var e, n, r;
					try {
						var o = null === (r = null === (n = null === (e = It().__SENTRY__) || void 0 === e ? void 0 : e.extensions) || void 0 === n ? void 0 : n.domain) || void 0 === r ? void 0 : r.active;
						if (!o) return qt(t);
						if (!At(o) || qt(o).isOlderThan(4)) {
							var i = qt(t).getStackTop();
							Ut(o, new Rt(i.client, Ot.clone(i.scope)))
						}
						return qt(o)
					} catch (e) {
						return qt(t)
					}
				}(t) : qt(t)
			}

			function At(t) {
				return !!(t && t.__SENTRY__ && t.__SENTRY__.hub)
			}

			function qt(t) {
				return t && t.__SENTRY__ && t.__SENTRY__.hub ? t.__SENTRY__.hub : (t.__SENTRY__ = t.__SENTRY__ || {}, t.__SENTRY__.hub = new Rt, t.__SENTRY__.hub)
			}

			function Ut(t, e) {
				return !!t && (t.__SENTRY__ = t.__SENTRY__ || {}, t.__SENTRY__.hub = e, !0)
			}

			function Pt(t) {
				for (var e = [], n = 1; n < arguments.length; n++) e[n - 1] = arguments[n];
				var r = Ct();
				if (r && r[t]) return r[t].apply(r, h(e));
				throw new Error("No hub defined or " + t + " was not found on the hub, please open a bug report.")
			}

			function Lt(t, e) {
				var n;
				try {
					throw new Error("Sentry syntheticException")
				} catch (t) {
					n = t
				}
				return Pt("captureException", t, {
					captureContext: e,
					originalException: t,
					syntheticException: n
				})
			}

			function Mt(t) {
				Pt("withScope", t)
			}
			var Bt = function() {
					function t(t, e, n) {
						void 0 === e && (e = {}), this.dsn = t, this.tt = new j(t), this.metadata = e, this.nt = n
					}
					return t.prototype.getDsn = function() {
						return this.tt
					}, t.prototype.forceEnvelope = function() {
						return !!this.nt
					}, t.prototype.getBaseApiEndpoint = function() {
						var t = this.getDsn(),
							e = t.protocol ? t.protocol + ":" : "",
							n = t.port ? ":" + t.port : "";
						return e + "//" + t.host + n + (t.path ? "/" + t.path : "") + "/api/"
					}, t.prototype.getStoreEndpoint = function() {
						return this.rt("store")
					}, t.prototype.getStoreEndpointWithUrlEncodedAuth = function() {
						return this.getStoreEndpoint() + "?" + this.it()
					}, t.prototype.getEnvelopeEndpointWithUrlEncodedAuth = function() {
						return this.forceEnvelope() ? this.nt : this.et() + "?" + this.it()
					}, t.prototype.getStoreEndpointPath = function() {
						var t = this.getDsn();
						return (t.path ? "/" + t.path : "") + "/api/" + t.projectId + "/store/"
					}, t.prototype.getRequestHeaders = function(t, e) {
						var n = this.getDsn(),
							r = ["Sentry sentry_version=7"];
						return r.push("sentry_client=" + t + "/" + e), r.push("sentry_key=55" + n.publicKey), n.pass && r.push("sentry_secret=" + n.pass), {
							"Content-Type": "application/json",
							"X-Sentry-Auth": r.join(", ")
						}
					}, t.prototype.getReportDialogEndpoint = function(t) {
						void 0 === t && (t = {});
						var e = this.getDsn(),
							n = this.getBaseApiEndpoint() + "embed/error-page/",
							r = [];
						for (var o in r.push("dsn=" + e.toString()), t)
							if ("dsn" !== o)
								if ("user" === o) {
									if (!t.user) continue;
									t.user.name && r.push("name=" + encodeURIComponent(t.user.name)), t.user.email && r.push("email=" + encodeURIComponent(t.user.email))
								} else r.push(encodeURIComponent(o) + "=" + encodeURIComponent(t[o]));
						return r.length ? n + "?" + r.join("&") : n
					}, t.prototype.et = function() {
						return this.rt("envelope")
					}, t.prototype.rt = function(t) {
						return this.nt ? this.nt : "" + this.getBaseApiEndpoint() + this.getDsn().projectId + "/" + t + "/"
					}, t.prototype.it = function() {
						var t, e = {
							sentry_key: this.getDsn().publicKey,
							sentry_version: "7"
						};
						return t = e, Object.keys(t).map((function(e) {
							return encodeURIComponent(e) + "=" + encodeURIComponent(t[e])
						})).join("&")
					}, t
				}(),
				Ht = [];

			function Ft(t) {
				return t.reduce((function(t, e) {
					return t.every((function(t) {
						return e.name !== t.name
					})) && t.push(e), t
				}), [])
			}
			var Yt = function() {
					function t(t, e) {
						this.ot = {}, this.ut = 0, this.st = new t(e), this.ct = e, e.dsn && (this.at = new j(e.dsn))
					}
					return t.prototype.captureException = function(t, e, n) {
						var r = this,
							o = e && e.event_id;
						return this.ft(this.ht().eventFromException(t, e).then((function(t) {
							return r.vt(t, e, n)
						})).then((function(t) {
							o = t
						}))), o
					}, t.prototype.captureMessage = function(t, e, n, r) {
						var o = this,
							i = n && n.event_id,
							s = g(t) ? this.ht().eventFromMessage(String(t), e, n) : this.ht().eventFromException(t, n);
						return this.ft(s.then((function(t) {
							return o.vt(t, n, r)
						})).then((function(t) {
							i = t
						}))), i
					}, t.prototype.captureEvent = function(t, e, n) {
						var r = e && e.event_id;
						return this.ft(this.vt(t, e, n).then((function(t) {
							r = t
						}))), r
					}, t.prototype.captureSession = function(t) {
						this.lt() ? "string" != typeof t.release ? W.warn("Discarded session because of missing or non-string release") : (this.dt(t), t.update({
							init: !1
						})) : W.warn("SDK not enabled, will not capture session.")
					}, t.prototype.getDsn = function() {
						return this.at
					}, t.prototype.getOptions = function() {
						return this.ct
					}, t.prototype.flush = function(t) {
						var e = this;
						return this.pt(t).then((function(n) {
							return e.ht().getTransport().close(t).then((function(t) {
								return n && t
							}))
						}))
					}, t.prototype.close = function(t) {
						var e = this;
						return this.flush(t).then((function(t) {
							return e.getOptions().enabled = !1, t
						}))
					}, t.prototype.setupIntegrations = function() {
						this.lt() && (this.ot = function(t) {
							var e = {};
							return function(t) {
								var e = t.defaultIntegrations && h(t.defaultIntegrations) || [],
									n = t.integrations,
									r = h(Ft(e));
								Array.isArray(n) ? r = h(r.filter((function(t) {
									return n.every((function(e) {
										return e.name !== t.name
									}))
								})), Ft(n)) : "function" == typeof n && (r = n(r), r = Array.isArray(r) ? r : [r]);
								var o = r.map((function(t) {
									return t.name
								}));
								return -1 !== o.indexOf("Debug") && r.push.apply(r, h(r.splice(o.indexOf("Debug"), 1))), r
							}(t).forEach((function(t) {
								e[t.name] = t,
									function(t) {
										-1 === Ht.indexOf(t.name) && (t.setupOnce(jt, Ct), Ht.push(t.name), W.log("Integration installed: " + t.name))
									}(t)
							})), e
						}(this.ct))
					}, t.prototype.getIntegration = function(t) {
						try {
							return this.ot[t.id] || null
						} catch (e) {
							return W.warn("Cannot retrieve integration " + t.id + " from the current Client"), null
						}
					}, t.prototype.yt = function(t, e) {
						var n, r, i = !1,
							s = !1,
							a = e.exception && e.exception.values;
						if (a) {
							s = !0;
							try {
								for (var u = p(a), l = u.next(); !l.done; l = u.next()) {
									var h = l.value.mechanism;
									if (h && !1 === h.handled) {
										i = !0;
										break
									}
								}
							} catch (t) {
								n = {
									error: t
								}
							} finally {
								try {
									l && !l.done && (r = u.return) && r.call(u)
								} finally {
									if (n) throw n.error
								}
							}
						}
						var f = t.status === o.Ok;
						(f && 0 === t.errors || f && i) && (t.update(c(c({}, i && {
							status: o.Crashed
						}), {
							errors: t.errors || Number(s || i)
						})), this.captureSession(t))
					}, t.prototype.dt = function(t) {
						this.ht().sendSession(t)
					}, t.prototype.pt = function(t) {
						var e = this;
						return new _t((function(n) {
							var r = 0,
								o = setInterval((function() {
									0 == e.ut ? (clearInterval(o), n(!0)) : (r += 1, t && r >= t && (clearInterval(o), n(!1)))
								}), 1)
						}))
					}, t.prototype.ht = function() {
						return this.st
					}, t.prototype.lt = function() {
						return !1 !== this.getOptions().enabled && void 0 !== this.at
					}, t.prototype.bt = function(t, e, n) {
						var r = this,
							o = this.getOptions().normalizeDepth,
							i = void 0 === o ? 3 : o,
							s = c(c({}, t), {
								event_id: t.event_id || (n && n.event_id ? n.event_id : q()),
								timestamp: t.timestamp || wt()
							});
						this.wt(s), this.gt(s);
						var a = e;
						n && n.captureContext && (a = Ot.clone(a).update(n.captureContext));
						var u = _t.resolve(s);
						return a && (u = a.applyToEvent(s, n)), u.then((function(t) {
							return "number" == typeof i && i > 0 ? r.Et(t, i) : t
						}))
					}, t.prototype.Et = function(t, e) {
						if (!t) return null;
						var n = c(c(c(c(c({}, t), t.breadcrumbs && {
							breadcrumbs: t.breadcrumbs.map((function(t) {
								return c(c({}, t), t.data && {
									data: Q(t.data, e)
								})
							}))
						}), t.user && {
							user: Q(t.user, e)
						}), t.contexts && {
							contexts: Q(t.contexts, e)
						}), t.extra && {
							extra: Q(t.extra, e)
						});
						return t.contexts && t.contexts.trace && (n.contexts.trace = t.contexts.trace), n
					}, t.prototype.wt = function(t) {
						var e = this.getOptions(),
							n = e.environment,
							r = e.release,
							o = e.dist,
							i = e.maxValueLength,
							s = void 0 === i ? 250 : i;
						"environment" in t || (t.environment = "environment" in e ? n : "production"), void 0 === t.release && void 0 !== r && (t.release = r), void 0 === t.dist && void 0 !== o && (t.dist = o), t.message && (t.message = R(t.message, s));
						var a = t.exception && t.exception.values && t.exception.values[0];
						a && a.value && (a.value = R(a.value, s));
						var u = t.request;
						u && u.url && (u.url = R(u.url, s))
					}, t.prototype.gt = function(t) {
						var e = Object.keys(this.ot);
						e.length > 0 && (t.sdk = t.sdk || {}, t.sdk.integrations = h(t.sdk.integrations || [], e))
					}, t.prototype.xt = function(t) {
						this.ht().sendEvent(t)
					}, t.prototype.vt = function(t, e, n) {
						return this.jt(t, e, n).then((function(t) {
							return t.event_id
						}), (function(t) {
							W.error(t)
						}))
					}, t.prototype.jt = function(t, e, n) {
						var r = this,
							o = this.getOptions(),
							i = o.beforeSend,
							s = o.sampleRate;
						if (!this.lt()) return _t.reject(new O("SDK not enabled, will not capture event."));
						var a = "transaction" === t.type;
						return !a && "number" == typeof s && Math.random() > s ? _t.reject(new O("Discarding event because it's not included in the random sample (sampling rate = " + s + ")")) : this.bt(t, n, e).then((function(t) {
							if (null === t) throw new O("An event processor returned null, will not send event.");
							if (e && e.data && !0 === e.data.__sentry__ || a || !i) return t;
							var n = i(t, e);
							return r.kt(n)
						})).then((function(t) {
							if (null === t) throw new O("`beforeSend` returned `null`, will not send event.");
							var e = n && n.getSession && n.getSession();
							return !a && e && r.yt(e, t), r.xt(t), t
						})).then(null, (function(t) {
							if (t instanceof O) throw t;
							throw r.captureException(t, {
								data: {
									__sentry__: !0
								},
								originalException: t
							}), new O("Event processing pipeline threw an error, original event will not be sent. Details have been sent as a new event.\nReason: " + t)
						}))
					}, t.prototype.ft = function(t) {
						var e = this;
						this.ut += 1, t.then((function(t) {
							return e.ut -= 1, t
						}), (function(t) {
							return e.ut -= 1, t
						}))
					}, t.prototype.kt = function(t) {
						var e = "`beforeSend` method has to return `null` or a valid event.";
						if (S(t)) return t.then((function(t) {
							if (!m(t) && null !== t) throw new O(e);
							return t
						}), (function(t) {
							throw new O("beforeSend rejected with " + t)
						}));
						if (!m(t) && null !== t) throw new O(e);
						return t
					}, t
				}(),
				Wt = function() {
					function e() {}
					return e.prototype.sendEvent = function(e) {
						return _t.resolve({
							reason: "NoopTransport: Event has been skipped because no Dsn is configured.",
							status: t.Status.Skipped
						})
					}, e.prototype.close = function(t) {
						return _t.resolve(!0)
					}, e
				}(),
				Xt = function() {
					function t(t) {
						this.ct = t, this.ct.dsn || W.warn("No DSN provided, backend will not do anything."), this.St = this._t()
					}
					return t.prototype.eventFromException = function(t, e) {
						throw new O("Backend has to implement `eventFromException` method")
					}, t.prototype.eventFromMessage = function(t, e, n) {
						throw new O("Backend has to implement `eventFromMessage` method")
					}, t.prototype.sendEvent = function(t) {
						this.St.sendEvent(t).then(null, (function(t) {
							W.error("Error while sending event: " + t)
						}))
					}, t.prototype.sendSession = function(t) {
						this.St.sendSession ? this.St.sendSession(t).then(null, (function(t) {
							W.error("Error while sending session: " + t)
						})) : W.warn("Dropping session because custom transport doesn't implement sendSession")
					}, t.prototype.getTransport = function() {
						return this.St
					}, t.prototype._t = function() {
						return new Wt
					}, t
				}();

			function Jt(t) {
				if (t.metadata && t.metadata.sdk) {
					var e = t.metadata.sdk;
					return {
						name: e.name,
						version: e.version
					}
				}
			}

			function Kt(t, e) {
				return e ? (t.sdk = t.sdk || {}, t.sdk.name = t.sdk.name || e.name, t.sdk.version = t.sdk.version || e.version, t.sdk.integrations = h(t.sdk.integrations || [], e.integrations || []), t.sdk.packages = h(t.sdk.packages || [], e.packages || []), t) : t
			}

			function Gt(t, e) {
				var n = Jt(e),
					r = "aggregates" in t ? "sessions" : "session";
				return {
					body: JSON.stringify(c(c({
						sent_at: (new Date).toISOString()
					}, n && {
						sdk: n
					}), e.forceEnvelope() && {
						dsn: e.getDsn().toString()
					})) + "\n" + JSON.stringify({
						type: r
					}) + "\n" + JSON.stringify(t),
					type: r,
					url: e.getEnvelopeEndpointWithUrlEncodedAuth()
				}
			}

			function Vt(t, e) {
				var n = Jt(e),
					r = t.type || "event",
					o = "transaction" === r || e.forceEnvelope(),
					i = t.debug_meta || {},
					s = i.transactionSampling,
					a = function(t, e) {
						var n = {};
						for (var r in t) Object.prototype.hasOwnProperty.call(t, r) && e.indexOf(r) < 0 && (n[r] = t[r]);
						if (null != t && "function" == typeof Object.getOwnPropertySymbols) {
							var o = 0;
							for (r = Object.getOwnPropertySymbols(t); o < r.length; o++) e.indexOf(r[o]) < 0 && (n[r[o]] = t[r[o]])
						}
						return n
					}(i, ["transactionSampling"]),
					u = s || {},
					p = u.method,
					l = u.rate;
				0 === Object.keys(a).length ? delete t.debug_meta : t.debug_meta = a;
				var h = {
					body: JSON.stringify(n ? Kt(t, e.metadata.sdk) : t),
					type: r,
					url: o ? e.getEnvelopeEndpointWithUrlEncodedAuth() : e.getStoreEndpointWithUrlEncodedAuth()
				};
				if (o) {
					var f = JSON.stringify(c(c({
						event_id: t.event_id,
						sent_at: (new Date).toISOString()
					}, n && {
						sdk: n
					}), e.forceEnvelope() && {
						dsn: e.getDsn().toString()
					})) + "\n" + JSON.stringify({
						type: r,
						sample_rates: [{
							id: p,
							rate: l
						}]
					}) + "\n" + h.body;
					h.body = f
				}
				return h
			}
			var zt, $t = "6.8.0",
				Zt = function() {
					function t() {
						this.name = t.id
					}
					return t.prototype.setupOnce = function() {
						zt = Function.prototype.toString, Function.prototype.toString = function() {
							for (var t = [], e = 0; e < arguments.length; e++) t[e] = arguments[e];
							var n = this.__sentry_original__ || this;
							return zt.apply(n, t)
						}
					}, t.id = "FunctionToString", t
				}(),
				Qt = [/^Script error\.?$/, /^Javascript error: Script error\.? on line 0$/],
				te = function() {
					function t(e) {
						void 0 === e && (e = {}), this.ct = e, this.name = t.id
					}
					return t.prototype.setupOnce = function() {
						jt((function(e) {
							var n = Ct();
							if (!n) return e;
							var r = n.getIntegration(t);
							if (r) {
								var o = n.getClient(),
									i = o ? o.getOptions() : {},
									s = "function" == typeof r._mergeOptions ? r._mergeOptions(i) : {};
								return "function" != typeof r.Ot ? e : r.Ot(e, s) ? null : e
							}
							return e
						}))
					}, t.prototype.Ot = function(t, e) {
						return this.Dt(t, e) ? (W.warn("Event dropped due to being internal Sentry Error.\nEvent: " + P(t)), !0) : this.Tt(t, e) ? (W.warn("Event dropped due to being matched by `ignoreErrors` option.\nEvent: " + P(t)), !0) : this.Rt(t, e) ? (W.warn("Event dropped due to being matched by `denyUrls` option.\nEvent: " + P(t) + ".\nUrl: " + this.It(t)), !0) : !this.Nt(t, e) && (W.warn("Event dropped due to not being matched by `allowUrls` option.\nEvent: " + P(t) + ".\nUrl: " + this.It(t)), !0)
					}, t.prototype.Dt = function(t, e) {
						if (!e.ignoreInternal) return !1;
						try {
							return t && t.exception && t.exception.values && t.exception.values[0] && "SentryError" === t.exception.values[0].type || !1
						} catch (t) {
							return !1
						}
					}, t.prototype.Tt = function(t, e) {
						return !(!e.ignoreErrors || !e.ignoreErrors.length) && this.Mt(t).some((function(t) {
							return e.ignoreErrors.some((function(e) {
								return N(t, e)
							}))
						}))
					}, t.prototype.Rt = function(t, e) {
						if (!e.denyUrls || !e.denyUrls.length) return !1;
						var n = this.It(t);
						return !!n && e.denyUrls.some((function(t) {
							return N(n, t)
						}))
					}, t.prototype.Nt = function(t, e) {
						if (!e.allowUrls || !e.allowUrls.length) return !0;
						var n = this.It(t);
						return !n || e.allowUrls.some((function(t) {
							return N(n, t)
						}))
					}, t.prototype._mergeOptions = function(t) {
						return void 0 === t && (t = {}), {
							allowUrls: h(this.ct.whitelistUrls || [], this.ct.allowUrls || [], t.whitelistUrls || [], t.allowUrls || []),
							denyUrls: h(this.ct.blacklistUrls || [], this.ct.denyUrls || [], t.blacklistUrls || [], t.denyUrls || []),
							ignoreErrors: h(this.ct.ignoreErrors || [], t.ignoreErrors || [], Qt),
							ignoreInternal: void 0 === this.ct.ignoreInternal || this.ct.ignoreInternal
						}
					}, t.prototype.Mt = function(t) {
						if (t.message) return [t.message];
						if (t.exception) try {
							var e = t.exception.values && t.exception.values[0] || {},
								n = e.type,
								r = void 0 === n ? "" : n,
								o = e.value,
								i = void 0 === o ? "" : o;
							return ["" + i, r + ": " + i]
						} catch (e) {
							return W.error("Cannot extract message for event " + P(t)), []
						}
						return []
					}, t.prototype.It = function(t) {
						try {
							if (t.stacktrace) {
								var e = t.stacktrace.frames;
								return e && e[e.length - 1].filename || null
							}
							if (t.exception) {
								var n = t.exception.values && t.exception.values[0].stacktrace && t.exception.values[0].stacktrace.frames;
								return n && n[n.length - 1].filename || null
							}
							return null
						} catch (e) {
							return W.error("Cannot extract url for event " + P(t)), null
						}
					}, t.id = "InboundFilters", t
				}(),
				ee = Object.freeze({
					__proto__: null,
					FunctionToString: Zt,
					InboundFilters: te
				}),
				ne = "?",
				re = /^\s*at (?:(.*?) ?\()?((?:file|https?|blob|chrome-extension|address|native|eval|webpack|<anonymous>|[-a-z]+:|.*bundle|\/).*?)(?::(\d+))?(?::(\d+))?\)?\s*$/i,
				oe = /^\s*(.*?)(?:\((.*?)\))?(?:^|@)?((?:file|https?|blob|chrome|webpack|resource|moz-extension|capacitor).*?:\/.*?|\[native code\]|[^@]*(?:bundle|\d+\.js)|\/[\w\-. \/=]+)(?::(\d+))?(?::(\d+))?\s*$/i,
				ie = /^\s*at (?:((?:\[object object\])?.+) )?\(?((?:file|ms-appx|https?|webpack|blob):.*?):(\d+)(?::(\d+))?\)?\s*$/i,
				se = /(\S+) line (\d+)(?: > eval line \d+)* > eval/i,
				ae = /\((\S*)(?::(\d+))(?::(\d+))\)/,
				ue = /Minified React error #\d+;/i;

			function ce(t) {
				var e = null,
					n = 0;
				t && ("number" == typeof t.framesToPop ? n = t.framesToPop : ue.test(t.message) && (n = 1));
				try {
					if (e = function(t) {
							if (!t || !t.stacktrace) return null;
							for (var e, n = / line (\d+).*script (?:in )?(\S+)(?:: in function (\S+))?$/i, r = / line (\d+), column (\d+)\s*(?:in (?:<anonymous function: ([^>]+)>|([^)]+))\((.*)\))? in (.*):\s*$/i, o = t.stacktrace.split("\n"), i = [], s = 0; s < o.length; s += 2) {
								var a = null;
								(e = n.exec(o[s])) ? a = {
									url: e[2],
									func: e[3],
									args: [],
									line: +e[1],
									column: null
								}: (e = r.exec(o[s])) && (a = {
									url: e[6],
									func: e[3] || e[4],
									args: e[5] ? e[5].split(",") : [],
									line: +e[1],
									column: +e[2]
								}), a && (!a.func && a.line && (a.func = ne), i.push(a))
							}
							if (!i.length) return null;
							else return {
								message: le(t),
								name: t.name,
								stack: i
							}
						}(t)) return pe(e, n)
				} catch (t) {}
				try {
					if (e = function(t) {
							if (!t || !t.stack) return null;
							for (var e, n, r, o = [], i = t.stack.split("\n"), s = 0; s < i.length; ++s) {
								if (n = re.exec(i[s])) {
									var a = n[2] && 0 === n[2].indexOf("native");
									n[2] && 0 === n[2].indexOf("eval") && (e = ae.exec(n[2])) && (n[2] = e[1], n[3] = e[2], n[4] = e[3]);
									var u = n[2] && 0 === n[2].indexOf("address at ") ? n[2].substr("address at ".length) : n[2],
										c = n[1] || ne,
										p = -1 !== c.indexOf("safari-extension"),
										l = -1 !== c.indexOf("safari-web-extension");
									(p || l) && (c = -1 !== c.indexOf("@") ? c.split("@")[0] : ne, u = p ? "safari-extension:" + u : "safari-web-extension:" + u), r = {
										url: u,
										func: c,
										args: a ? [n[2]] : [],
										line: n[3] ? +n[3] : null,
										column: n[4] ? +n[4] : null
									}
								} else if (n = ie.exec(i[s])) r = {
									url: n[2],
									func: n[1] || ne,
									args: [],
									line: +n[3],
									column: n[4] ? +n[4] : null
								};
								else {
									if (!(n = oe.exec(i[s]))) continue;
									n[3] && n[3].indexOf(" > eval") > -1 && (e = se.exec(n[3])) ? (n[1] = n[1] || "eval", n[3] = e[1], n[4] = e[2], n[5] = "") : 0 !== s || n[5] || void 0 === t.columnNumber || (o[0].column = t.columnNumber + 1), r = {
										url: n[3],
										func: n[1] || ne,
										args: n[2] ? n[2].split(",") : [],
										line: n[4] ? +n[4] : null,
										column: n[5] ? +n[5] : null
									}
								}!r.func && r.line && (r.func = ne), o.push(r)
							}
							if (!o.length) return null;
							else return {
								message: le(t),
								name: t.name,
								stack: o
							}
						}(t)) return pe(e, n)
				} catch (t) {}
				return {
					message: le(t),
					name: t && t.name,
					stack: [],
					failed: !0
				}
			}

			function pe(t, e) {
				try {
					return c(c({}, t), {
						stack: t.stack.slice(e)
					})
				} catch (e) {
					return t
				}
			}

			function le(t) {
				var e = t && t.message;
				return e ? e.error && "string" == typeof e.error.message ? e.error.message : e : "No error message"
			}

			function he(t) {
				var e = de(t.stack),
					n = {
						type: t.name,
						value: t.message
					};
				return e && e.length && (n.stacktrace = {
					frames: e
				}), void 0 === n.type && "" === n.value && (n.value = "Unrecoverable error caught"), n
			}

			function fe(t) {
				return {
					exception: {
						values: [he(t)]
					}
				}
			}

			function de(t) {
				if (!t || !t.length) return [];
				var e = t,
					n = e[0].func || "",
					r = e[e.length - 1].func || "";
				return -1 === n.indexOf("captureMessage") && -1 === n.indexOf("captureException") || (e = e.slice(1)), -1 !== r.indexOf("sentryWrapped") && (e = e.slice(0, -1)), e.slice(0, 50).map((function(t) {
					return {
						colno: null === t.column ? void 0 : t.column,
						filename: t.url || e[0].url,
						function: t.func || "?",
						in_app: !0,
						lineno: null === t.line ? void 0 : t.line
					}
				})).reverse()
			}

			function ve(e, n, r) {
				var o = ge(n, r && r.syntheticException || void 0, {
					attachStacktrace: e.attachStacktrace
				});
				return B(o, {
					handled: !0,
					type: "generic"
				}), o.level = t.Severity.Error, r && r.event_id && (o.event_id = r.event_id), _t.resolve(o)
			}

			function ye(e, n, r, o) {
				void 0 === r && (r = t.Severity.Info);
				var i = me(n, o && o.syntheticException || void 0, {
					attachStacktrace: e.attachStacktrace
				});
				return i.level = r, o && o.event_id && (i.event_id = o.event_id), _t.resolve(i)
			}

			function ge(t, e, n) {
				var r, o;
				if (void 0 === n && (n = {}), d(t) && t.error) return fe(ce(t = t.error));
				if (v(t) || (o = t, "[object DOMException]" === Object.prototype.toString.call(o))) {
					var i = t,
						s = i.name || (v(i) ? "DOMError" : "DOMException"),
						a = i.message ? s + ": " + i.message : s;
					return M(r = me(a, e, n), a), "code" in i && (r.tags = c(c({}, r.tags), {
						"DOMException.code": "" + i.code
					})), r
				}
				return f(t) ? r = fe(ce(t)) : m(t) || _(t) ? (B(r = function(t, e, n) {
					var r = {
						exception: {
							values: [{
								type: _(t) ? t.constructor.name : n ? "UnhandledRejection" : "Error",
								value: "Non-Error " + (n ? "promise rejection" : "exception") + " captured with keys: " + tt(t)
							}]
						},
						extra: {
							__serialized__: z(t)
						}
					};
					if (e) {
						var o = de(ce(e).stack);
						r.stacktrace = {
							frames: o
						}
					}
					return r
				}(t, e, n.rejection), {
					synthetic: !0
				}), r) : (M(r = me(t, e, n), "" + t, void 0), B(r, {
					synthetic: !0
				}), r)
			}

			function me(t, e, n) {
				void 0 === n && (n = {});
				var r = {
					message: t
				};
				if (n.attachStacktrace && e) {
					var o = de(ce(e).stack);
					r.stacktrace = {
						frames: o
					}
				}
				return r
			}
			var _e = {
					event: "error",
					transaction: "transaction",
					session: "session",
					attachment: "attachment"
				},
				be = function() {
					function e(t) {
						this.options = t, this.D = new bt(30), this.Ct = {}, this.At = new Bt(t.dsn, t.qt, t.tunnel), this.url = this.At.getStoreEndpointWithUrlEncodedAuth()
					}
					return e.prototype.sendEvent = function(t) {
						throw new O("Transport Class has to implement `sendEvent` method")
					}, e.prototype.close = function(t) {
						return this.D.drain(t)
					}, e.prototype.Lt = function(e) {
						var n = e.requestType,
							r = e.response,
							o = e.headers,
							i = e.resolve,
							s = e.reject,
							a = t.Status.fromHttpCode(r.status);
						this.Ut(o) && W.warn("Too many " + n + " requests, backing off until: " + this.Ht(n)), a !== t.Status.Success ? s(r) : i({
							status: a
						})
					}, e.prototype.Ht = function(t) {
						var e = _e[t];
						return this.Ct[e] || this.Ct.all
					}, e.prototype.Ft = function(t) {
						return this.Ht(t) > new Date(Date.now())
					}, e.prototype.Ut = function(t) {
						var e, n, r, o, i = Date.now(),
							s = t["x-sentry-rate-limits"],
							a = t["retry-after"];
						if (s) {
							try {
								for (var u = p(s.trim().split(",")), c = u.next(); !c.done; c = u.next()) {
									var l = c.value.split(":", 2),
										h = parseInt(l[0], 10),
										f = 1e3 * (isNaN(h) ? 60 : h);
									try {
										for (var d = (r = void 0, p(l[1].split(";"))), v = d.next(); !v.done; v = d.next()) {
											var y = v.value;
											this.Ct[y || "all"] = new Date(i + f)
										}
									} catch (t) {
										r = {
											error: t
										}
									} finally {
										try {
											v && !v.done && (o = d.return) && o.call(d)
										} finally {
											if (r) throw r.error
										}
									}
								}
							} catch (t) {
								e = {
									error: t
								}
							} finally {
								try {
									c && !c.done && (n = u.return) && n.call(u)
								} finally {
									if (e) throw e.error
								}
							}
							return !0
						}
						return !!a && (this.Ct.all = new Date(i + function(t, e) {
							if (!e) return 6e4;
							var n = parseInt("" + e, 10);
							if (!isNaN(n)) return 1e3 * n;
							var r = Date.parse("" + e);
							return isNaN(r) ? 6e4 : r - t
						}(i, a)), !0)
					}, e
				}(),
				Se = function(t) {
					function e(e, n) {
						void 0 === n && (n = function() {
							var t, e, n = A();
							if (rt(n.fetch)) return n.fetch.bind(n);
							var r = n.document,
								o = n.fetch;
							if ("function" == typeof(null === (t = r) || void 0 === t ? void 0 : t.createElement)) try {
								var i = r.createElement("iframe");
								i.hidden = !0, r.head.appendChild(i), (null === (e = i.contentWindow) || void 0 === e ? void 0 : e.fetch) && (o = i.contentWindow.fetch), r.head.removeChild(i)
							} catch (t) {
								W.warn("Could not create sandbox iframe for pure fetch check, bailing to window.fetch: ", t)
							}
							return o.bind(n)
						}());
						var r = t.call(this, e) || this;
						return r.Pt = n, r
					}
					return n(e, t), e.prototype.sendEvent = function(t) {
						return this.Xt(Vt(t, this.At), t)
					}, e.prototype.sendSession = function(t) {
						return this.Xt(Gt(t, this.At), t)
					}, e.prototype.Xt = function(t, e) {
						var n = this;
						if (this.Ft(t.type)) return Promise.reject({
							event: e,
							type: t.type,
							reason: "Transport for " + t.type + " requests locked till " + this.Ht(t.type) + " due to too many requests.",
							status: 429
						});
						var r = {
							body: t.body,
							method: "POST",
							referrerPolicy: ot() ? "origin" : ""
						};
						return void 0 !== this.options.fetchParameters && Object.assign(r, this.options.fetchParameters), void 0 !== this.options.headers && (r.headers = this.options.headers), this.D.add((function() {
							return new _t((function(e, o) {
								n.Pt(t.url, r).then((function(r) {
									var i = {
										"x-sentry-rate-limits": r.headers.get("X-Sentry-Rate-Limits"),
										"retry-after": r.headers.get("Retry-After")
									};
									n.Lt({
										requestType: t.type,
										response: r,
										headers: i,
										resolve: e,
										reject: o
									})
								})).catch(o)
							}))
						}))
					}, e
				}(be),
				Ee = function(t) {
					function e() {
						return null !== t && t.apply(this, arguments) || this
					}
					return n(e, t), e.prototype.sendEvent = function(t) {
						return this.Xt(Vt(t, this.At), t)
					}, e.prototype.sendSession = function(t) {
						return this.Xt(Gt(t, this.At), t)
					}, e.prototype.Xt = function(t, e) {
						var n = this;
						return this.Ft(t.type) ? Promise.reject({
							event: e,
							type: t.type,
							reason: "Transport for " + t.type + " requests locked till " + this.Ht(t.type) + " due to too many requests.",
							status: 429
						}) : this.D.add((function() {
							return new _t((function(e, r) {
								var o = new XMLHttpRequest;
								for (var i in o.onreadystatechange = function() {
										if (4 === o.readyState) {
											var i = {
												"x-sentry-rate-limits": o.getResponseHeader("X-Sentry-Rate-Limits"),
												"retry-after": o.getResponseHeader("Retry-After")
											};
											n.Lt({
												requestType: t.type,
												response: o,
												headers: i,
												resolve: e,
												reject: r
											})
										}
									}, o.open("POST", t.url), n.options.headers) n.options.headers.hasOwnProperty(i) && o.setRequestHeader(i, n.options.headers[i]);
								o.send(t.body)
							}))
						}))
					}, e
				}(be),
				xe = Object.freeze({
					__proto__: null,
					BaseTransport: be,
					FetchTransport: Se,
					XHRTransport: Ee
				}),
				we = function(e) {
					function r() {
						return null !== e && e.apply(this, arguments) || this
					}
					return n(r, e), r.prototype.eventFromException = function(t, e) {
						return ve(this.ct, t, e)
					}, r.prototype.eventFromMessage = function(e, n, r) {
						return void 0 === n && (n = t.Severity.Info), ye(this.ct, e, n, r)
					}, r.prototype._t = function() {
						if (!this.ct.dsn) return e.prototype._t.call(this);
						var t = c(c({}, this.ct.transportOptions), {
							dsn: this.ct.dsn,
							tunnel: this.ct.tunnel,
							qt: this.ct.qt
						});
						return this.ct.transport ? new this.ct.transport(t) : nt() ? new Se(t) : new Ee(t)
					}, r
				}(Xt),
				ke = 0;

			function Oe() {
				return ke > 0
			}

			function Te(t, e, n) {
				if (void 0 === e && (e = {}), "function" != typeof t) return t;
				try {
					if (t.__sentry__) return t;
					if (t.__sentry_wrapped__) return t.__sentry_wrapped__
				} catch (e) {
					return t
				}
				var r = function() {
					var r = Array.prototype.slice.call(arguments);
					try {
						n && "function" == typeof n && n.apply(this, arguments);
						var o = r.map((function(t) {
							return Te(t, e)
						}));
						return t.handleEvent ? t.handleEvent.apply(this, o) : t.apply(this, o)
					} catch (t) {
						throw ke += 1, setTimeout((function() {
							ke -= 1
						})), Mt((function(o) {
							o.addEventProcessor((function(t) {
								var n = c({}, t);
								return e.mechanism && (M(n, void 0, void 0), B(n, e.mechanism)), n.extra = c(c({}, n.extra), {
									arguments: r
								}), n
							})), Lt(t)
						})), t
					}
				};
				try {
					for (var o in t) Object.prototype.hasOwnProperty.call(t, o) && (r[o] = t[o])
				} catch (t) {}
				t.prototype = t.prototype || {}, r.prototype = t.prototype, Object.defineProperty(t, "__sentry_wrapped__", {
					enumerable: !1,
					value: r
				}), Object.defineProperties(r, {
					__sentry__: {
						enumerable: !1,
						value: !0
					},
					__sentry_original__: {
						enumerable: !1,
						value: t
					}
				});
				try {
					Object.getOwnPropertyDescriptor(r, "name").configurable && Object.defineProperty(r, "name", {
						get: function() {
							return t.name
						}
					})
				} catch (t) {}
				return r
			}

			function je(t) {
				if (void 0 === t && (t = {}), t.eventId)
					if (t.dsn) {
						var e = document.createElement("script");
						e.async = !0, e.src = new Bt(t.dsn).getReportDialogEndpoint(t), t.onLoad && (e.onload = t.onLoad), (document.head || document.body).appendChild(e)
					} else W.error("Missing dsn option in showReportDialog call");
				else W.error("Missing eventId option in showReportDialog call")
			}
			var De = function() {
					function e(t) {
						this.name = e.id, this.Bt = !1, this.Jt = !1, this.ct = c({
							onerror: !0,
							onunhandledrejection: !0
						}, t)
					}
					return e.prototype.setupOnce = function() {
						Error.stackTraceLimit = 50, this.ct.onerror && (W.log("Global Handler attached: onerror"), this.Wt()), this.ct.onunhandledrejection && (W.log("Global Handler attached: onunhandledrejection"), this.$t())
					}, e.prototype.Wt = function() {
						var t = this;
						this.Bt || (lt({
							callback: function(n) {
								var r = n.error,
									o = Ct(),
									i = o.getIntegration(e),
									s = r && !0 === r.__sentry_own_request__;
								if (i && !Oe() && !s) {
									var a = o.getClient(),
										u = void 0 === r && y(n.msg) ? t.Gt(n.msg, n.url, n.line, n.column) : t.Kt(ge(r || n.msg, void 0, {
											attachStacktrace: a && a.getOptions().attachStacktrace,
											rejection: !1
										}), n.url, n.line, n.column);
									B(u, {
										handled: !1,
										type: "onerror"
									}), o.captureEvent(u, {
										originalException: r
									})
								}
							},
							type: "error"
						}), this.Bt = !0)
					}, e.prototype.$t = function() {
						var n = this;
						this.Jt || (lt({
							callback: function(r) {
								var o = r;
								try {
									"reason" in r ? o = r.reason : "detail" in r && "reason" in r.detail && (o = r.detail.reason)
								} catch (t) {}
								var i = Ct(),
									s = i.getIntegration(e),
									a = o && !0 === o.__sentry_own_request__;
								if (!s || Oe() || a) return !0;
								var u = i.getClient(),
									c = g(o) ? n.zt(o) : ge(o, void 0, {
										attachStacktrace: u && u.getOptions().attachStacktrace,
										rejection: !0
									});
								c.level = t.Severity.Error, B(c, {
									handled: !1,
									type: "onunhandledrejection"
								}), i.captureEvent(c, {
									originalException: o
								})
							},
							type: "unhandledrejection"
						}), this.Jt = !0)
					}, e.prototype.Gt = function(t, e, n, r) {
						var o, i = d(t) ? t.message : t,
							s = i.match(/^(?:[Uu]ncaught (?:exception: )?)?(?:((?:Eval|Internal|Range|Reference|Syntax|Type|URI|)Error): )?(.*)$/i);
						s && (o = s[1], i = s[2]);
						var a = {
							exception: {
								values: [{
									type: o || "Error",
									value: i
								}]
							}
						};
						return this.Kt(a, e, n, r)
					}, e.prototype.zt = function(t) {
						return {
							exception: {
								values: [{
									type: "UnhandledRejection",
									value: "Non-Error promise rejection captured with value: " + String(t)
								}]
							}
						}
					}, e.prototype.Kt = function(t, e, n, r) {
						t.exception = t.exception || {}, t.exception.values = t.exception.values || [], t.exception.values[0] = t.exception.values[0] || {}, t.exception.values[0].stacktrace = t.exception.values[0].stacktrace || {}, t.exception.values[0].stacktrace.frames = t.exception.values[0].stacktrace.frames || [];
						var o = isNaN(parseInt(r, 10)) ? void 0 : r,
							i = isNaN(parseInt(n, 10)) ? void 0 : n,
							s = y(e) && e.length > 0 ? e : function() {
								try {
									return document.location.href
								} catch (t) {
									return ""
								}
							}();
						return 0 === t.exception.values[0].stacktrace.frames.length && t.exception.values[0].stacktrace.frames.push({
							colno: o,
							filename: s,
							function: "?",
							in_app: !0,
							lineno: i
						}), t
					}, e.id = "GlobalHandlers", e
				}(),
				Re = ["EventTarget", "Window", "Node", "ApplicationCache", "AudioTrackList", "ChannelMergerNode", "CryptoOperation", "EventSource", "FileReader", "HTMLUnknownElement", "IDBDatabase", "IDBRequest", "IDBTransaction", "KeyOperation", "MediaController", "MessagePort", "ModalWindow", "Notification", "SVGElementInstance", "Screen", "TextTrack", "TextTrackCue", "TextTrackList", "WebSocket", "WebSocketWorker", "Worker", "XMLHttpRequest", "XMLHttpRequestEventTarget", "XMLHttpRequestUpload"],
				Ie = function() {
					function t(e) {
						this.name = t.id, this.ct = c({
							XMLHttpRequest: !0,
							eventTarget: !0,
							requestAnimationFrame: !0,
							setInterval: !0,
							setTimeout: !0
						}, e)
					}
					return t.prototype.setupOnce = function() {
						var t = A();
						this.ct.setTimeout && G(t, "setTimeout", this.Vt.bind(this)), this.ct.setInterval && G(t, "setInterval", this.Vt.bind(this)), this.ct.requestAnimationFrame && G(t, "requestAnimationFrame", this.Qt.bind(this)), this.ct.XMLHttpRequest && "XMLHttpRequest" in t && G(XMLHttpRequest.prototype, "send", this.Yt.bind(this)), this.ct.eventTarget && (Array.isArray(this.ct.eventTarget) ? this.ct.eventTarget : Re).forEach(this.Zt.bind(this))
					}, t.prototype.Vt = function(t) {
						return function() {
							for (var e = [], n = 0; n < arguments.length; n++) e[n] = arguments[n];
							var r = e[0];
							return e[0] = Te(r, {
								mechanism: {
									data: {
										function: K(t)
									},
									handled: !0,
									type: "instrument"
								}
							}), t.apply(this, e)
						}
					}, t.prototype.Qt = function(t) {
						return function(e) {
							return t.call(this, Te(e, {
								mechanism: {
									data: {
										function: "requestAnimationFrame",
										handler: K(t)
									},
									handled: !0,
									type: "instrument"
								}
							}))
						}
					}, t.prototype.Zt = function(t) {
						var e = A(),
							n = e[t] && e[t].prototype;
						n && n.hasOwnProperty && n.hasOwnProperty("addEventListener") && (G(n, "addEventListener", (function(e) {
							return function(n, r, o) {
								try {
									"function" == typeof r.handleEvent && (r.handleEvent = Te(r.handleEvent.bind(r), {
										mechanism: {
											data: {
												function: "handleEvent",
												handler: K(r),
												target: t
											},
											handled: !0,
											type: "instrument"
										}
									}))
								} catch (t) {}
								return e.call(this, n, Te(r, {
									mechanism: {
										data: {
											function: "addEventListener",
											handler: K(r),
											target: t
										},
										handled: !0,
										type: "instrument"
									}
								}), o)
							}
						})), G(n, "removeEventListener", (function(t) {
							return function(e, n, r) {
								var o, i = n;
								try {
									var s = null === (o = i) || void 0 === o ? void 0 : o.__sentry_wrapped__;
									s && t.call(this, e, s, r)
								} catch (t) {}
								return t.call(this, e, i, r)
							}
						})))
					}, t.prototype.Yt = function(t) {
						return function() {
							for (var e = [], n = 0; n < arguments.length; n++) e[n] = arguments[n];
							var r = this;
							return ["onload", "onerror", "onprogress", "onreadystatechange"].forEach((function(t) {
								t in r && "function" == typeof r[t] && G(r, t, (function(e) {
									var n = {
										mechanism: {
											data: {
												function: t,
												handler: K(e)
											},
											handled: !0,
											type: "instrument"
										}
									};
									return e.__sentry_original__ && (n.mechanism.data.handler = K(e.__sentry_original__)), Te(e, n)
								}))
							})), t.apply(this, e)
						}
					}, t.id = "TryCatch", t
				}(),
				Ne = function() {
					function e(t) {
						this.name = e.id, this.ct = c({
							console: !0,
							dom: !0,
							fetch: !0,
							history: !0,
							sentry: !0,
							xhr: !0
						}, t)
					}
					return e.prototype.addSentryBreadcrumb = function(t) {
						this.ct.sentry && Ct().addBreadcrumb({
							category: "sentry." + ("transaction" === t.type ? "transaction" : "event"),
							event_id: t.event_id,
							level: t.level,
							message: P(t)
						}, {
							event: t
						})
					}, e.prototype.setupOnce = function() {
						var t = this;
						this.ct.console && lt({
							callback: function() {
								for (var e = [], n = 0; n < arguments.length; n++) e[n] = arguments[n];
								t.tn.apply(t, h(e))
							},
							type: "console"
						}), this.ct.dom && lt({
							callback: function() {
								for (var e = [], n = 0; n < arguments.length; n++) e[n] = arguments[n];
								t.nn.apply(t, h(e))
							},
							type: "dom"
						}), this.ct.xhr && lt({
							callback: function() {
								for (var e = [], n = 0; n < arguments.length; n++) e[n] = arguments[n];
								t.rn.apply(t, h(e))
							},
							type: "xhr"
						}), this.ct.fetch && lt({
							callback: function() {
								for (var e = [], n = 0; n < arguments.length; n++) e[n] = arguments[n];
								t.in.apply(t, h(e))
							},
							type: "fetch"
						}), this.ct.history && lt({
							callback: function() {
								for (var e = [], n = 0; n < arguments.length; n++) e[n] = arguments[n];
								t.en.apply(t, h(e))
							},
							type: "history"
						})
					}, e.prototype.tn = function(e) {
						var n = {
							category: "console",
							data: {
								arguments: e.args,
								logger: "console"
							},
							level: t.Severity.fromString(e.level),
							message: I(e.args, " ")
						};
						if ("assert" === e.level) {
							if (!1 !== e.args[0]) return;
							n.message = "Assertion failed: " + (I(e.args.slice(1), " ") || "console.assert"), n.data.arguments = e.args.slice(1)
						}
						Ct().addBreadcrumb(n, {
							input: e.args,
							level: e.level
						})
					}, e.prototype.nn = function(t) {
						var e, n = "object" == typeof this.ct.dom ? this.ct.dom.serializeAttribute : void 0;
						"string" == typeof n && (n = [n]);
						try {
							e = t.event.target ? x(t.event.target, n) : x(t.event, n)
						} catch (t) {
							e = "<unknown>"
						}
						0 !== e.length && Ct().addBreadcrumb({
							category: "ui." + t.name,
							message: e
						}, {
							event: t.event,
							name: t.name,
							global: t.global
						})
					}, e.prototype.rn = function(t) {
						if (t.endTimestamp) {
							if (t.xhr.__sentry_own_request__) return;
							var e = t.xhr.__sentry_xhr__ || {},
								n = e.method,
								r = e.url,
								o = e.status_code,
								i = e.body;
							Ct().addBreadcrumb({
								category: "xhr",
								data: {
									method: n,
									url: r,
									status_code: o
								},
								type: "http"
							}, {
								xhr: t.xhr,
								input: i
							})
						}
					}, e.prototype.in = function(e) {
						e.endTimestamp && (e.fetchData.url.match(/sentry_key/) && "POST" === e.fetchData.method || (e.error ? Ct().addBreadcrumb({
							category: "fetch",
							data: e.fetchData,
							level: t.Severity.Error,
							type: "http"
						}, {
							data: e.error,
							input: e.args
						}) : Ct().addBreadcrumb({
							category: "fetch",
							data: c(c({}, e.fetchData), {
								status_code: e.response.status
							}),
							type: "http"
						}, {
							input: e.args,
							response: e.response
						})))
					}, e.prototype.en = function(t) {
						var e = A(),
							n = t.from,
							r = t.to,
							o = U(e.location.href),
							i = U(n),
							s = U(r);
						i.path || (i = o), o.protocol === s.protocol && o.host === s.host && (r = s.relative), o.protocol === i.protocol && o.host === i.host && (n = i.relative), Ct().addBreadcrumb({
							category: "navigation",
							data: {
								from: n,
								to: r
							}
						})
					}, e.id = "Breadcrumbs", e
				}(),
				Ce = function() {
					function t(e) {
						void 0 === e && (e = {}), this.name = t.id, this.on = e.key || "cause", this.O = e.limit || 5
					}
					return t.prototype.setupOnce = function() {
						jt((function(e, n) {
							var r = Ct().getIntegration(t);
							return r ? r.un(e, n) : e
						}))
					}, t.prototype.un = function(t, e) {
						if (!(t.exception && t.exception.values && e && E(e.originalException, Error))) return t;
						var n = this.sn(e.originalException, this.on);
						return t.exception.values = h(n, t.exception.values), t
					}, t.prototype.sn = function(t, e, n) {
						if (void 0 === n && (n = []), !E(t[e], Error) || n.length + 1 >= this.O) return n;
						var r = he(ce(t[e]));
						return this.sn(t[e], e, h([r], n))
					}, t.id = "LinkedErrors", t
				}(),
				Ae = A(),
				qe = function() {
					function t() {
						this.name = t.id
					}
					return t.prototype.setupOnce = function() {
						jt((function(e) {
							var n, r, o;
							if (Ct().getIntegration(t)) {
								if (!Ae.navigator && !Ae.location && !Ae.document) return e;
								var i = (null === (n = e.request) || void 0 === n ? void 0 : n.url) || (null === (r = Ae.location) || void 0 === r ? void 0 : r.href),
									s = (Ae.document || {}).referrer,
									a = (Ae.navigator || {}).userAgent,
									u = c(c(c({}, null === (o = e.request) || void 0 === o ? void 0 : o.headers), s && {
										Referer: s
									}), a && {
										"User-Agent": a
									}),
									p = c(c({}, i && {
										url: i
									}), {
										headers: u
									});
								return c(c({}, e), {
									request: p
								})
							}
							return e
						}))
					}, t.id = "UserAgent", t
				}(),
				Ue = function() {
					function t() {
						this.name = t.id
					}
					return t.prototype.setupOnce = function(e, n) {
						e((function(e) {
							var r = n().getIntegration(t);
							if (r) {
								try {
									if (r.Ot(e, r.cn)) return null
								} catch (t) {
									return r.cn = e
								}
								return r.cn = e
							}
							return e
						}))
					}, t.prototype.Ot = function(t, e) {
						return !(!e || !this.an(t, e) && !this.fn(t, e))
					}, t.prototype.an = function(t, e) {
						var n = t.message,
							r = e.message;
						return !(!n && !r || n && !r || !n && r || n !== r || !this.hn(t, e) || !this.vn(t, e))
					}, t.prototype.ln = function(t) {
						var e = t.exception;
						if (e) try {
							return e.values[0].stacktrace.frames
						} catch (t) {
							return
						} else if (t.stacktrace) return t.stacktrace.frames
					}, t.prototype.vn = function(t, e) {
						var n = this.ln(t),
							r = this.ln(e);
						if (!n && !r) return !0;
						if (n && !r || !n && r) return !1;
						if (n = n, (r = r).length !== n.length) return !1;
						for (var o = 0; o < r.length; o++) {
							var i = r[o],
								s = n[o];
							if (i.filename !== s.filename || i.lineno !== s.lineno || i.colno !== s.colno || i.function !== s.function) return !1
						}
						return !0
					}, t.prototype.dn = function(t) {
						return t.exception && t.exception.values && t.exception.values[0]
					}, t.prototype.fn = function(t, e) {
						var n = this.dn(e),
							r = this.dn(t);
						return !!(n && r && n.type === r.type && n.value === r.value && this.hn(t, e) && this.vn(t, e))
					}, t.prototype.hn = function(t, e) {
						var n = t.fingerprint,
							r = e.fingerprint;
						if (!n && !r) return !0;
						if (n && !r || !n && r) return !1;
						n = n, r = r;
						try {
							return !(n.join("") !== r.join(""))
						} catch (t) {
							return !1
						}
					}, t.id = "Dedupe", t
				}(),
				Pe = Object.freeze({
					__proto__: null,
					GlobalHandlers: De,
					TryCatch: Ie,
					Breadcrumbs: Ne,
					LinkedErrors: Ce,
					UserAgent: qe,
					Dedupe: Ue
				}),
				Le = function(t) {
					function e(e) {
						return void 0 === e && (e = {}), e.qt = e.qt || {}, e.qt.sdk = e.qt.sdk || {
							name: "sentry.javascript.browser",
							packages: [{
								name: "npm:@sentry/browser",
								version: $t
							}],
							version: $t
						}, t.call(this, we, e) || this
					}
					return n(e, t), e.prototype.showReportDialog = function(t) {
						void 0 === t && (t = {}), A().document && (this.lt() ? je(c(c({}, t), {
							dsn: t.dsn || this.getDsn()
						})) : W.error("Trying to call showReportDialog with Sentry Client disabled"))
					}, e.prototype.bt = function(e, n, r) {
						return e.platform = e.platform || "javascript", t.prototype.bt.call(this, e, n, r)
					}, e.prototype.xt = function(e) {
						var n = this.getIntegration(Ne);
						n && n.addSentryBreadcrumb(e), t.prototype.xt.call(this, e)
					}, e
				}(Yt),
				Me = [new te, new Zt, new Ie, new Ne, new De, new Ce, new Ue, new qe],
				Be = {},
				He = A();
			He.Sentry && He.Sentry.Integrations && (Be = He.Sentry.Integrations);
			var Fe = c(c(c({}, Be), ee), Pe);
			return t.BrowserClient = Le, t.Hub = Rt, t.Integrations = Fe, t.SDK_NAME = "sentry.javascript.browser", t.SDK_VERSION = $t, t.Scope = Ot, t.Transports = xe, t.addBreadcrumb = function(t) {
				Pt("addBreadcrumb", t)
			}, t.addGlobalEventProcessor = jt, t.captureEvent = function(t) {
				return Pt("captureEvent", t)
			}, t.captureException = Lt, t.captureMessage = function(t, e) {
				var n;
				try {
					throw new Error(t)
				} catch (t) {
					n = t
				}
				return Pt("captureMessage", t, "string" == typeof e ? e : void 0, c({
					originalException: t,
					syntheticException: n
				}, "string" != typeof e ? {
					captureContext: e
				} : void 0))
			}, t.close = function(t) {
				var e = Ct().getClient();
				return e ? e.close(t) : _t.reject(!1)
			}, t.configureScope = function(t) {
				Pt("configureScope", t)
			}, t.defaultIntegrations = Me, t.eventFromException = ve, t.eventFromMessage = ye, t.flush = function(t) {
				var e = Ct().getClient();
				return e ? e.flush(t) : _t.reject(!1)
			}, t.forceLoad = function() {}, t.getCurrentHub = Ct, t.getHubFromCarrier = qt, t.init = function(t) {
				if (void 0 === t && (t = {}), void 0 === t.defaultIntegrations && (t.defaultIntegrations = Me), void 0 === t.release) {
					var e = A();
					e.SENTRY_RELEASE && e.SENTRY_RELEASE.id && (t.release = e.SENTRY_RELEASE.id)
				}
				void 0 === t.autoSessionTracking && (t.autoSessionTracking = !0),
					function(t, e) {
						var n;
						!0 === e.debug && W.enable();
						var r = Ct();
						null === (n = r.getScope()) || void 0 === n || n.update(e.initialScope);
						var o = new t(e);
						r.bindClient(o)
					}(Le, t), t.autoSessionTracking && function() {
						if (void 0 !== A().document) {
							var t = Ct();
							"function" == typeof t.startSession && "function" == typeof t.captureSession && (t.startSession({
								ignoreDuration: !0
							}), t.captureSession(), lt({
								callback: function(e) {
									var n = e.from,
										r = e.to;
									void 0 !== n && n !== r && (t.startSession({
										ignoreDuration: !0
									}), t.captureSession())
								},
								type: "history"
							}))
						} else W.warn("Session tracking in non-browser environment with @sentry/browser is not supported.")
					}()
			}, t.injectReportDialog = je, t.lastEventId = function() {
				return Ct().lastEventId()
			}, t.makeMain = Nt, t.onLoad = function(t) {
				t()
			}, t.setContext = function(t, e) {
				Pt("setContext", t, e)
			}, t.setExtra = function(t, e) {
				Pt("setExtra", t, e)
			}, t.setExtras = function(t) {
				Pt("setExtras", t)
			}, t.setTag = function(t, e) {
				Pt("setTag", t, e)
			}, t.setTags = function(t) {
				Pt("setTags", t)
			}, t.setUser = function(t) {
				Pt("setUser", t)
			}, t.showReportDialog = function(t) {
				void 0 === t && (t = {}), t.eventId || (t.eventId = Ct().lastEventId());
				var e = Ct().getClient();
				e && e.showReportDialog(t)
			}, t.startTransaction = function(t, e) {
				return Pt("startTransaction", c({}, t), e)
			}, t.withScope = Mt, t.wrap = function(t) {
				return Te(t)()
			}, t
		}({})
	  </script>
	  <script>
		(function() {
			var e = "production";
			if (/\b(cit|uat)(\d|\b)/.test(location.hostname)) e = "staging";
			if (/^([\d\.:]+|[^\.]+)$/.test(location.hostname)) e = "development";

			function t(e) {
				if ("string" == typeof e) {
					var n = e.indexOf("EVOSESSIONID");
					if (n > -1) return e.substr(0, n + 10) + "=***"
				} else if (Array.isArray(e)) return e.map(t);
				else if ("object" == typeof e && e) Object.keys(e).forEach((function(n) {
					e[n] = t(e[n])
				}));
				return e
			}
			Sentry.init({
				dsn: "https://google.com",
				release: "6.20220105.200225.10000-9eacbf833a",
				environment: e,
				debug: "production" !== e,
				autoSessionTracking: !1,
				ignoreErrors: ["InvalidStateError: Cannot resume a context that has been closed", "InvalidStateError: Audio context is going away", /^NS_ERROR_/],
				denyUrls: [/extensions\//i, /^chrome:\/\//i],
				beforeBreadcrumb: function(e) {
					var t = e.data;
					if (t && "http" === e.type && 200 === t.status_code) return null;
					else return e
				},
				beforeSend: function(e) {
					return window && window.EVO_VERBOSE ? function(e) {
						var n = t(e),
							r = JSON.stringify(n),
							i = r.indexOf("EVOSESSIONID");
						return i > -1 ? {
							message: r.substr(0, i + 13) + "***"
						} : n
					}(e) : null
				}
			})
		})()
	  </script>
	  <script nomodule src="js/polyfills-browser-old.4474e04e.js" onerror="location.reload()"></script>
	  <script>
		var __extends, __assign, __rest, __decorate, __param, __metadata, __awaiter, __generator, __exportStar, __values, __read, __spread, __spreadArrays, __await, __asyncGenerator, __asyncDelegator, __asyncValues, __makeTemplateObject, __importStar, __importDefault, __classPrivateFieldGet, __classPrivateFieldSet, __createBinding;
		! function(e) {
			var t = "object" == typeof global ? global : "object" == typeof self ? self : "object" == typeof this ? this : {};

			function r(e, r) {
				return e !== t && ("function" == typeof Object.create ? Object.defineProperty(e, "__esModule", {
						value: !0
					}) : e.__esModule = !0),
					function(t, n) {
						return e[t] = r ? r(t, n) : n
					}
			}
			"function" == typeof define && define.amd ? define("tslib", ["exports"], (function(n) {
				e(r(t, r(n)))
			})) : "object" == typeof module && "object" == typeof module.exports ? e(r(t, r(module.exports))) : e(r(t))
		}((function(e) {
			var t = Object.setPrototypeOf || {
				__proto__: []
			}
			instanceof Array && function(e, t) {
				e.__proto__ = t
			} || function(e, t) {
				for (var r in t) t.hasOwnProperty(r) && (e[r] = t[r])
			};
			__extends = function(e, r) {
				function n() {
					this.constructor = e
				}
				t(e, r), e.prototype = null === r ? Object.create(r) : (n.prototype = r.prototype, new n)
			}, __assign = Object.assign || function(e) {
				for (var t, r = 1, n = arguments.length; r < n; r++)
					for (var o in t = arguments[r]) Object.prototype.hasOwnProperty.call(t, o) && (e[o] = t[o]);
				return e
			}, __rest = function(e, t) {
				var r = {};
				for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && t.indexOf(n) < 0 && (r[n] = e[n]);
				if (null != e && "function" == typeof Object.getOwnPropertySymbols) {
					var o = 0;
					for (n = Object.getOwnPropertySymbols(e); o < n.length; o++) t.indexOf(n[o]) < 0 && Object.prototype.propertyIsEnumerable.call(e, n[o]) && (r[n[o]] = e[n[o]])
				}
				return r
			}, __decorate = function(e, t, r, n) {
				var o, a = arguments.length,
					i = a < 3 ? t : null === n ? n = Object.getOwnPropertyDescriptor(t, r) : n;
				if ("object" == typeof Reflect && "function" == typeof Reflect.decorate) i = Reflect.decorate(e, t, r, n);
				else
					for (var _ = e.length - 1; _ >= 0; _--)(o = e[_]) && (i = (a < 3 ? o(i) : a > 3 ? o(t, r, i) : o(t, r)) || i);
				return a > 3 && i && Object.defineProperty(t, r, i), i
			}, __param = function(e, t) {
				return function(r, n) {
					t(r, n, e)
				}
			}, __metadata = function(e, t) {
				if ("object" == typeof Reflect && "function" == typeof Reflect.metadata) return Reflect.metadata(e, t)
			}, __awaiter = function(e, t, r, n) {
				return new(r || (r = Promise))((function(o, a) {
					function i(e) {
						try {
							c(n.next(e))
						} catch (e) {
							a(e)
						}
					}

					function _(e) {
						try {
							c(n.throw(e))
						} catch (e) {
							a(e)
						}
					}

					function c(e) {
						var t;
						e.done ? o(e.value) : (t = e.value, t instanceof r ? t : new r((function(e) {
							e(t)
						}))).then(i, _)
					}
					c((n = n.apply(e, t || [])).next())
				}))
			}, __generator = function(e, t) {
				var r, n, o, a, i = {
					label: 0,
					sent: function() {
						if (1 & o[0]) throw o[1];
						return o[1]
					},
					trys: [],
					ops: []
				};
				return a = {
					next: _(0),
					throw: _(1),
					return: _(2)
				}, "function" == typeof Symbol && (a[Symbol.iterator] = function() {
					return this
				}), a;

				function _(a) {
					return function(_) {
						return function(a) {
							if (r) throw new TypeError("Generator is already executing.");
							for (; i;) try {
								if (r = 1, n && (o = 2 & a[0] ? n.return : a[0] ? n.throw || ((o = n.return) && o.call(n), 0) : n.next) && !(o = o.call(n, a[1])).done) return o;
								switch (n = 0, o && (a = [2 & a[0], o.value]), a[0]) {
									case 0:
									case 1:
										o = a;
										break;
									case 4:
										return i.label++, {
											value: a[1],
											done: !1
										};
									case 5:
										i.label++, n = a[1], a = [0];
										continue;
									case 7:
										a = i.ops.pop(), i.trys.pop();
										continue;
									default:
										if (!((o = (o = i.trys).length > 0 && o[o.length - 1]) || 6 !== a[0] && 2 !== a[0])) {
											i = 0;
											continue
										}
										if (3 === a[0] && (!o || a[1] > o[0] && a[1] < o[3])) {
											i.label = a[1];
											break
										}
										if (6 === a[0] && i.label < o[1]) {
											i.label = o[1], o = a;
											break
										}
										if (o && i.label < o[2]) {
											i.label = o[2], i.ops.push(a);
											break
										}
										o[2] && i.ops.pop(), i.trys.pop();
										continue
								}
								a = t.call(e, i)
							} catch (e) {
								a = [6, e], n = 0
							} finally {
								r = o = 0
							}
							if (5 & a[0]) throw a[1];
							return {
								value: a[0] ? a[1] : void 0,
								done: !0
							}
						}([a, _])
					}
				}
			}, __createBinding = function(e, t, r, n) {
				void 0 === n && (n = r), e[n] = t[r]
			}, __exportStar = function(e, t) {
				for (var r in e) "default" === r || t.hasOwnProperty(r) || (t[r] = e[r])
			}, __values = function(e) {
				var t = "function" == typeof Symbol && Symbol.iterator,
					r = t && e[t],
					n = 0;
				if (r) return r.call(e);
				if (e && "number" == typeof e.length) return {
					next: function() {
						return e && n >= e.length && (e = void 0), {
							value: e && e[n++],
							done: !e
						}
					}
				};
				throw new TypeError(t ? "Object is not iterable." : "Symbol.iterator is not defined.")
			}, __read = function(e, t) {
				var r = "function" == typeof Symbol && e[Symbol.iterator];
				if (!r) return e;
				var n, o, a = r.call(e),
					i = [];
				try {
					for (;
						(void 0 === t || t-- > 0) && !(n = a.next()).done;) i.push(n.value)
				} catch (e) {
					o = {
						error: e
					}
				} finally {
					try {
						n && !n.done && (r = a.return) && r.call(a)
					} finally {
						if (o) throw o.error
					}
				}
				return i
			}, __spread = function() {
				for (var e = [], t = 0; t < arguments.length; t++) e = e.concat(__read(arguments[t]));
				return e
			}, __spreadArrays = function() {
				for (var e = 0, t = 0, r = arguments.length; t < r; t++) e += arguments[t].length;
				var n = Array(e),
					o = 0;
				for (t = 0; t < r; t++)
					for (var a = arguments[t], i = 0, _ = a.length; i < _; i++, o++) n[o] = a[i];
				return n
			}, __await = function(e) {
				return this instanceof __await ? (this.v = e, this) : new __await(e)
			}, __asyncGenerator = function(e, t, r) {
				if (!Symbol.asyncIterator) throw new TypeError("Symbol.asyncIterator is not defined.");
				var n, o = r.apply(e, t || []),
					a = [];
				return n = {}, i("next"), i("throw"), i("return"), n[Symbol.asyncIterator] = function() {
					return this
				}, n;

				function i(e) {
					o[e] && (n[e] = function(t) {
						return new Promise((function(r, n) {
							a.push([e, t, r, n]) > 1 || _(e, t)
						}))
					})
				}

				function _(e, t) {
					try {
						(r = o[e](t)).value instanceof __await ? Promise.resolve(r.value.v).then(c, u) : l(a[0][2], r)
					} catch (e) {
						l(a[0][3], e)
					}
					var r
				}

				function c(e) {
					_("next", e)
				}

				function u(e) {
					_("throw", e)
				}

				function l(e, t) {
					e(t), a.shift(), a.length && _(a[0][0], a[0][1])
				}
			}, __asyncDelegator = function(e) {
				var t, r;
				return t = {}, n("next"), n("throw", (function(e) {
					throw e
				})), n("return"), t[Symbol.iterator] = function() {
					return this
				}, t;

				function n(n, o) {
					t[n] = e[n] ? function(t) {
						return (r = !r) ? {
							value: __await(e[n](t)),
							done: "return" === n
						} : o ? o(t) : t
					} : o
				}
			}, __asyncValues = function(e) {
				if (!Symbol.asyncIterator) throw new TypeError("Symbol.asyncIterator is not defined.");
				var t, r = e[Symbol.asyncIterator];
				return r ? r.call(e) : (e = "function" == typeof __values ? __values(e) : e[Symbol.iterator](), t = {}, n("next"), n("throw"), n("return"), t[Symbol.asyncIterator] = function() {
					return this
				}, t);

				function n(r) {
					t[r] = e[r] && function(t) {
						return new Promise((function(n, o) {
							(function(e, t, r, n) {
								Promise.resolve(n).then((function(t) {
									e({
										value: t,
										done: r
									})
								}), t)
							})(n, o, (t = e[r](t)).done, t.value)
						}))
					}
				}
			}, __makeTemplateObject = function(e, t) {
				return Object.defineProperty ? Object.defineProperty(e, "raw", {
					value: t
				}) : e.raw = t, e
			}, __importStar = function(e) {
				if (e && e.__esModule) return e;
				var t = {};
				if (null != e)
					for (var r in e) Object.hasOwnProperty.call(e, r) && (t[r] = e[r]);
				return t.default = e, t
			}, __importDefault = function(e) {
				return e && e.__esModule ? e : {
					default: e
				}
			}, __classPrivateFieldGet = function(e, t) {
				if (!t.has(e)) throw new TypeError("attempted to get private field on non-instance");
				return t.get(e)
			}, __classPrivateFieldSet = function(e, t, r) {
				if (!t.has(e)) throw new TypeError("attempted to set private field on non-instance");
				return t.set(e, r), r
			}, e("__extends", __extends), e("__assign", __assign), e("__rest", __rest), e("__decorate", __decorate), e("__param", __param), e("__metadata", __metadata), e("__awaiter", __awaiter), e("__generator", __generator), e("__exportStar", __exportStar), e("__createBinding", __createBinding), e("__values", __values), e("__read", __read), e("__spread", __spread), e("__spreadArrays", __spreadArrays), e("__await", __await), e("__asyncGenerator", __asyncGenerator), e("__asyncDelegator", __asyncDelegator), e("__asyncValues", __asyncValues), e("__makeTemplateObject", __makeTemplateObject), e("__importStar", __importStar), e("__importDefault", __importDefault), e("__classPrivateFieldGet", __classPrivateFieldGet), e("__classPrivateFieldSet", __classPrivateFieldSet)
		}));
		try {
			eval("Promise=class P extends Promise{constructor(...a){super(...a);this.__stackTraceError=new Error('Promise created');}}")
		} catch (e) {}
		null == Element.prototype.getAttributeNames && (Element.prototype.getAttributeNames = function() {
				for (var e = this.attributes, t = e.length, r = new Array(t), n = 0; n < t; n++) r[n] = e[n].name;
				return r
			}),
			function(e) {
				var t = e.performance || (e.performance = {});
				if (t.mark || (t.mark = n), t.measure || (t.measure = n), e[Symbol("iOS weakref hack")] = t, e.webkitAudioContext) {
					var r = new e.webkitAudioContext;
					e.webkitAudioContext = function() {
						return r
					}, r.close = n
				}

				function n() {}
			}(this)
	  </script>
	  <script>
		window.EVO_VERBOSE("6.20220117.192427.10169-bc042cee86"), EVO_CDN && window.EVO_VERBOSE("cdn: " + EVO_CDN), (() => {
			console.log('Assets mix manifest imported...');
})(), (() => {
    var e, t, o, s, n, i, r = {},
        a = {};

    function d(e) {
        var t = a[e];
        if (void 0 !== t) return t.exports;
        var o = a[e] = {
            exports: {}
        };
        return r[e](o, o.exports, d), o.exports
    }

    function l(e) {
        return null != e && null != e.data && Object.keys(e.data).length > 0 && "string" == typeof e.data.command && e.data.command.startsWith("EVO:")
    }
    d.m = r, t = Object.getPrototypeOf ? e => Object.getPrototypeOf(e) : e => e.__proto__, d.t = function(o, s) {
            if (1 & s) o = this(o);
            if (8 & s) return o;
            if ("object" == typeof o && o) {
                if (4 & s && o.__esModule) return o;
                if (16 & s && "function" == typeof o.then) return o
            }
            var n = Object.create(null);
            d.r(n);
            var i = {};
            e = e || [null, t({}), t([]), t(t)];
            for (var r = 2 & s && o;
                "object" == typeof r && !~e.indexOf(r); r = t(r)) Object.getOwnPropertyNames(r).forEach((e => i[e] = () => o[e]));
            return i.default = () => o, d.d(n, i), n
        }, d.d = (e, t) => {
            for (var o in t)
                if (d.o(t, o) && !d.o(e, o)) Object.defineProperty(e, o, {
                    enumerable: !0,
                    get: t[o]
                })
        }, d.f = {}, d.e = e => Promise.all(Object.keys(d.f).reduce(((t, o) => (d.f[o](e, t), t)), [])), d.u = e => "js/video-lib-local.4ca1f4eb.js", d.miniCssF = e => {}, d.o = (e, t) => Object.prototype.hasOwnProperty.call(e, t), o = {}, s = "/frontend/evo/r2/:", d.l = (e, t, n, i) => {
            if (!o[e]) {
                var r, a;
                if (void 0 !== n)
                    for (var l = document.getElementsByTagName("script"), c = 0; c < l.length; c++) {
                        var h = l[c];
                        if (h.getAttribute("src") == e || h.getAttribute("data-webpack") == s + n) {
                            r = h;
                            break
                        }
                    }
                if (!r) {
                    if (a = !0, (r = document.createElement("script")).charset = "utf-8", r.timeout = NaN, d.nc) r.setAttribute("nonce", d.nc);
                    r.setAttribute("data-webpack", s + n), r.src = e
                }
                o[e] = [t];
                var p = (t, s) => {
                        r.onerror = r.onload = null, clearTimeout(f);
                        var n = o[e];
                        if (delete o[e], r.parentNode && r.parentNode.removeChild(r), n && n.forEach((e => e(s))), t) return t(s)
                    },
                    f = setTimeout(p.bind(null, void 0, {
                        type: "timeout",
                        target: r
                    }), window.EVO_CDN ? 15e3 : 6e4);
                r.onerror = p.bind(null, r.onerror), r.onload = p.bind(null, r.onload), a && document.head.appendChild(r)
            } else o[e].push(t)
        }, d.r = e => {
            if ("undefined" != typeof Symbol && Symbol.toStringTag) Object.defineProperty(e, Symbol.toStringTag, {
                value: "Module"
            });
            Object.defineProperty(e, "__esModule", {
                value: !0
            })
        }, d.p = (globalThis.EVO_CDN || window.EVO_CDN) + "/frontend/evo/r2/", (() => {
            var e = {
                1084: 0
            };
            d.f.j = (t, o) => {
                var s = d.o(e, t) ? e[t] : void 0;
                if (0 !== s)
                    if (s) o.push(s[2]);
                    else if (1) {
                    var n = new Promise(((o, n) => s = e[t] = [o, n]));
                    o.push(s[2] = n);
                    var i = d.p + d.u(t),
                        r = new Error;
                    d.l(i, (o => {
                        if (d.o(e, t)) {
                            if (0 !== (s = e[t])) e[t] = void 0;
                            if (s) {
                                var n = o && ("load" === o.type ? "missing" : o.type),
                                    i = o && o.target && o.target.src;
                                r.message = "Loading chunk " + t + " failed.\n(" + n + ": " + i + ")", r.name = "ChunkLoadError", r.type = n, r.request = i, s[1](r)
                            }
                        }
                    }), "chunk-" + t, t)
                } else e[t] = 0
            };
            var t = (t, o) => {
                    var s, n, [i, r, a] = o,
                        l = 0;
                    if (i.some((t => 0 !== e[t]))) {
                        for (s in r)
                            if (d.o(r, s)) d.m[s] = r[s];
                        if (a) a(d)
                    }
                    if (t) t(o);
                    for (; l < i.length; l++) {
                        if (n = i[l], d.o(e, n) && e[n]) e[n][0]();
                        e[i[l]] = 0
                    }
                },
                o = self.webpackChunk_frontend_evo_r2_ = self.webpackChunk_frontend_evo_r2_ || [];
            o.forEach(t.bind(null, 0)), o.push = t.bind(null, o.push.bind(o))
        })(),
        function(e) {
            e.Default = "Default", e.EnabledBySubscription = "EnabledBySubscription", e.EnabledByConfig = "EnabledByConfig"
        }(n || (n = {})),
        function(e) {
            e.Subscribe = "EVO:EVENT_SUBSCRIBE"
        }(i || (i = {}));
    class c {
        constructor({
            isDesktop: e,
            sendLogMessage: t,
            subscriptionsLimit: o = 100
        }) {
            this.eventCache = {}, this.eventsEnabledBySubscription = new Set, this.eventsEnabledByConfig = new Set, this.commandListeners = {}, this.toTriggerOnDispose = [], this.isLogSenderSet = !1, this.messageHandler = e => {
                if (l(e))
                    if (function(e) {
                            return l(e) && i.Subscribe === e.data.command && "string" == typeof e.data.event && e.data.event.startsWith("EVO:")
                        }(e)) this.handleSubscription(e.data.event, e.origin);
                    else this.handleCommand(e)
            }, window.addEventListener("message", this.messageHandler), this.subscriptionsLimit = o, this.sendLogMessage = t, this.fallbackSendLogMessage = t, this.operatorWindow = function(e) {
                const t = window.EVO_CDN;
                let o = e.parent;
                try {
                    for (; window.EVO_CDN === t && o.parent !== o;) o = o.parent
                } catch (s) {}
                return o
            }(window), this.isDesktop = e
        }
        isEventEnabledByConfig(e) {
            return this.eventsEnabledByConfig.has(e)
        }
        set config(e) {
            var t;
            if (!this._config) this._config = e, null === (t = function(e = [], t) {
                return new Set([...e.filter((({
                    platform: e
                }) => void 0 === e || "desktop" === e && t || "mobile" === e && !t)).map((e => e.name))])
            }(e.enabledEvents, this.isDesktop)) || void 0 === t || t.forEach((e => this.eventsEnabledByConfig.add(e)));
            else if (0);
        }
        setLogMessageSender(e) {
            if (!this.isLogSenderSet) this.sendLogMessage = e, this.isLogSenderSet = !0;
            else if (0);
        }
        postMessage(e, t = {
            type: n.Default
        }) {
            if (t.isUnstable && "unstable" !== this.release) return;
            const {
                Default: o,
                EnabledBySubscription: s,
                EnabledByConfig: i
            } = n;
            if (t.type === s && t.postOnSubscription) this.eventCache[e.event] = e;
            if (t.type === o || t.type === s && this.eventsEnabledBySubscription.has(e.event) || t.type === i && this.isEventEnabledByConfig(e.event)) this.postMessageToContainer(e)
        }
        onContainerCommand(e, t, o = {}) {
            const s = this.commandListeners[e] || [];
            s.push([t, o]), this.commandListeners[e] = s
        }
        onDispose(e) {
            this.toTriggerOnDispose.push(e)
        }
        reset() {
            for (const e of this.toTriggerOnDispose) e();
            this.isLogSenderSet = !1, this.sendLogMessage = this.fallbackSendLogMessage, this.toTriggerOnDispose.length = 0, this.commandListeners = {}, this.eventsEnabledBySubscription.clear(), this.eventCache = {}
        }
        get release() {
            var e, t;
            return null !== (t = null === (e = this._config) || void 0 === e ? void 0 : e.release) && void 0 !== t ? t : "stable"
        }
        get validOrigins() {
            var e, t;
            return null !== (t = null === (e = this._config) || void 0 === e ? void 0 : e.origins) && void 0 !== t ? t : []
        }
        postMessageToContainer(e) {
            this.log({
                type: "event",
                payload: e
            }), this.operatorWindow.postMessage(e, "*")
        }
        handleSubscription(e, t) {
            this.addSubscription(e), this.log({
                type: "subscription",
                payload: e,
                meta: {
                    origin: t
                }
            });
            const o = this.eventCache[e];
            if (o) this.postMessageToContainer(o)
        }
        handleCommand({
            data: e,
            origin: t
        }) {
            const {
                command: o
            } = e, s = function(e, t) {
                var o = {};
                for (var s in e)
                    if (Object.prototype.hasOwnProperty.call(e, s) && t.indexOf(s) < 0) o[s] = e[s];
                if (null != e && "function" == typeof Object.getOwnPropertySymbols) {
                    var n = 0;
                    for (s = Object.getOwnPropertySymbols(e); n < s.length; n++)
                        if (t.indexOf(s[n]) < 0 && Object.prototype.propertyIsEnumerable.call(e, s[n])) o[s[n]] = e[s[n]]
                }
                return o
            }(e, ["command"]);
            this.log({
                type: "command",
                payload: o,
                meta: {
                    origin: t
                }
            });
            const n = this.commandListeners[o];
            if (n)
                for (const [i, r] of n) {
                    if (r.isUnstable && "unstable" !== this.release) return;
                    if (!r.validateOrigin || this.validOrigins.includes(t)) i(s);
                    else console.error(`${o} can only be posted by valid origins and ${t} does not match any of them. Please review the Client API configuration with customer support.`), this.log({
                        type: "invalidOrigin",
                        payload: {
                            command: o,
                            origin: t,
                            validOrigins: this.validOrigins
                        }
                    })
                }
        }
        addSubscription(e) {
            if (!(this.eventsEnabledBySubscription.size >= this.subscriptionsLimit)) this.eventsEnabledBySubscription.add(e)
        }
        log({
            type: e,
            payload: t,
            meta: o
        }) {
            const s = Object.assign(Object.assign({
                type: e
            }, t && {
                payload: t
            }), o && {
                meta: o
            });
            this.sendLogMessage("CLIENT_API_V2", s)
        }
    }
    const h = window.origin || window.EVO_CDN,
        p = Object.freeze({
            receive: h,
            send: "null" === h ? "*" : h
        }),
        f = "evo-broadcast-state";

    function m(e, t) {
        if (e && t.source !== e) try {
            if (e.origin === window.origin && e.location.origin === window.EVO_CDN) e.postMessage(t.data, p.send)
        } catch (o) {}
    }

    function u(e) {
        let t = 1;
        const o = {};
        if (e.indexOf("+") > -1) e = e.replace(/\+/g, " ");
        for (; t < e.length;) {
            let s = e.indexOf("&", t);
            if (-1 === s) s = e.length;
            let n = e.indexOf("=", t);
            if (-1 === n) n = s;
            const i = decodeURIComponent(e.substring(t, n)),
                r = decodeURIComponent(e.substring(n + 1, s)),
                a = o[i];
            if (void 0 === a) o[i] = r;
            else if (Array.isArray(a)) a.push(r);
            else o[i] = [a, r];
            t = s + 1
        }
        return o
    }
    const g = 0 ? 0 : document.createElement("a");

    function b(e) {
        g.href = e;
        let t = g.pathname || "";
        if ("/" !== t.charAt(0)) t = `/${t}`;
        const o = g.protocol || location.protocol;
        let s = g.hostname,
            n = g.port;
        if (!s) s = location.hostname, n = location.port;
        return {
            hashParams: u(g.hash),
            hostname: s,
            pathname: t,
            port: n,
            protocol: o,
            searchParams: u(g.search),
            toString: function() {
                return this.origin + this.pathname + this.search + this.hash
            },
            paramsToString: v,
            getParam: function(e) {
                let t = this.searchParams[e];
                if (void 0 === t)
                    if (t = this.hashParams[e], void 0 === t) return null;
                return Array.isArray(t) ? t[0] : t
            },
            get origin() {
                return `${this.protocol}//${this.hostname}${this.port?`:${this.port}`:""}`
            },
            get search() {
                return v("?", this.searchParams)
            },
            get hash() {
                return v("#", this.hashParams)
            }
        }
    }

    function v(e, t) {
        let o = "";
        for (const s of Object.keys(t)) {
            const e = t[s],
                n = encodeURIComponent(s);
            if (Array.isArray(e))
                for (const t of e) {
                    if (o) o += "&";
                    o += `${n}=${encodeURIComponent(t)}`
                } else if (null != e) {
                    if (o) o += "&";
                    o += `${n}=${encodeURIComponent(e)}`
                }
        }
        return o ? e + o : o
    }

    function w(e) {
        return {
            name: e,
            toString: () => e
        }
    }
    class y {
        constructor() {
            this.listeners = [], this.messageReceiver = e => {
                const t = e.data;
                if (e.origin === p.receive && t && "object" == typeof t && t.key === f && t.value && "object" == typeof t.value)
                    for (const o of this.listeners) o(t.value)
            }, window.addEventListener("message", this.messageReceiver)
        }
        addListener(e) {
            this.listeners.push(e)
        }
        removeListener(e) {
            const t = this.listeners.indexOf(e);
            if (t > -1) this.listeners.splice(t, 1)
        }
        send(e) {
            window.postMessage({
                key: f,
                value: e
            }, p.send)
        }
    }
    y.instance = new y;
    const k = w("ping {015f023c-9f1f-4218-b7f3-7f5c85650dc6}"),
        E = w("init {44ee98ea-0aab-464b-91c8-fc2b6ca75758}"),
        j = w("dispose {3fb190a3-d0cc-4237-bc6e-abc2ff1ab044}");
    class S {
        constructor(e = y.instance, t = "default") {
            this.instanceId = Date.now().toString(36) + Math.random().toString(36), this.messageId = 0, this.pingTimerId = 0, this.pingCheckTimerId = 0, this.data = {}, this.listeners = {}, this.pings = {}, this.receiveValues = e => {
                if (e.channel !== this.channel) return;
                const t = e.instanceId,
                    o = e.messageKey;
                switch (this.schedulePingCheck(t), o) {
                    case k.name:
                        break;
                    case j.name:
                        this.removeInstance(t);
                        break;
                    case E.name:
                        for (const e of Object.values(this.data))
                            for (const t of e) this.transport.send(t);
                        break;
                    default:
                        const s = this.data[o] || (this.data[o] = []);
                        for (let n = 0; n < s.length; n++) {
                            const i = s[n];
                            if (i.instanceId === t) {
                                if (i.messageId < e.messageId) s[n] = e, this.triggerListeners(o, t);
                                return
                            }
                        }
                        s.push(e), this.triggerListeners(o, t)
                }
            }, this.channel = t, this.transport = e, e.addListener(this.receiveValues), this.sendValues(E, {})
        }
        dispose() {
            this.transport.removeListener(this.receiveValues), this.sendValues(j, {}), window.clearTimeout(this.pingTimerId), window.clearTimeout(this.pingCheckTimerId)
        }
        reset() {
            window.clearTimeout(this.pingCheckTimerId), this.pingCheckTimerId = 0, this.sendValues(j, {})
        }
        sendValues(e, t) {
            const o = Object.assign(Object.assign({}, t), {
                channel: this.channel,
                instanceId: this.instanceId,
                messageId: this.messageId++,
                messageKey: e.name
            });
            this.transport.send(o), this.receiveValues(o), this.schedulePing()
        }
        getValues(e) {
            return this.data[e.name || e.toString()] || []
        }
        addListener(e, t) {
            (this.listeners[e.name] || (this.listeners[e.name] = [])).push(t)
        }
        removeListener(e, t) {
            const o = this.listeners[e.name],
                s = o ? o.indexOf(t) : -1;
            if (s > -1) o.splice(s, 1)
        }
        removeAllListeners(e) {
            if (this.listeners[e.name]) this.listeners[e.name] = []
        }
        schedulePing() {
            window.clearTimeout(this.pingTimerId), this.pingTimerId = window.setTimeout((() => {
                this.sendValues(k, {})
            }), 5e3)
        }
        schedulePingCheck(e) {
            const t = Date.now();
            if (this.pings[e] = t, !this.pingCheckTimerId) this.pingCheckTimerId = window.setTimeout((() => {
                if (this.pingCheckTimerId = 0, "hidden" !== document.visibilityState) this.removeDeadInstances(t)
            }), 1e4)
        }
        triggerListeners(e, t) {
            const o = this.listeners[e];
            if (o) {
                const s = this.getValues(e);
                for (const e of o) e(s, t)
            }
        }
        removeDeadInstances(e) {
            for (const t of Object.keys(this.pings))
                if (this.pings[t] <= e) this.removeInstance(t)
        }
        removeInstance(e) {
            const t = [];
            for (const o of Object.keys(this.data)) {
                const s = this.data[o];
                for (let n = 0; n < s.length; n++)
                    if (s[n].instanceId === e) {
                        t.push(o), s.splice(n, 1);
                        break
                    }
            }
            delete this.pings[e];
            for (const o of t) this.triggerListeners(o, e)
        }
    }
    var L, I, O, _;

    function T(e = {}, t = !1) {
        const o = window.EVO_SESSION_ID_FALLBACK;
        if (o) e.EVOSESSIONID = o, e.cdn = window.EVO_CDN, e.lang = window.EVO_LANG;
        const s = window.EVO_ORIGIN;
        if (s && !t) e.origin = s;
        let n, i;
        if (t) n = "?", i = `${s||location.origin}/entry`;
        else n = "#", i = 0 ? 0 : location.pathname;
        return i + v(n, e)
    }

    function C(e, t = {}) {
        if ("/" === e[0]) e = (window.EVO_ORIGIN || "") + e;
        const o = window.EVO_SESSION_ID_FALLBACK;
        if (o) t.EVOSESSIONID = o;
        if (t.client_version = "6.20220117.192427.10169-bc042cee86", window.EVO_LOADER) {
            const {
                deviceInfo: e
            } = window.EVO_LOADER;
            if (e && e.isIosDevice && e.isQQBrowser) t.nocache = (Date.now() / 1e3).toFixed(0)
        }
        return e + v(e.includes("?") ? "&" : "?", t)
    }(function(e) {
        e.Lobby = "lobby", e.Direct = "direct", e.Active = "active"
    })(L || (L = {})),
    function(e) {
        e.Lobby = "lobby", e.Direct = "direct", e.Active = "active"
    }(I || (I = {})),
    function(e) {
        e.Direct = "direct", e.Active = "active"
    }(O || (O = {})),
    function(e) {
        e.PlayForFun = "pff", e.FreeGames = "free_games", e.BalanceId = "balance_id"
    }(_ || (_ = {}));
    const A = "undefined" != typeof InstallTrigger,
        P = "iFrAmE";

    function x(e) {
        let t = !1;
        if (A) t = !0;
        else try {
            let e = window;
            const o = e.location;
            for (; !t && e.parent !== e;) {
                const s = e.parent.location;
                if (s.origin === o.origin && s.pathname === o.pathname && s.search === o.search) t = !0;
                e = e.parent
            }
        } catch (o) {}
        if (t) {
            const t = b(window.location.href),
                o = b(e);
            if (t.pathname === o.pathname && t.search === o.search) {
                const s = t.getParam(P) || "";
                o.searchParams.iFrAmE = `${s}x`, e = o.toString()
            }
        }
        return e
    }

    function V() {
        return ["", location.origin + location.pathname, "table_id", "vt_id", "game", "category", "instance_id"]
    }

    function R(e) {
        const t = V(),
            o = t.length;
        let s = "3!";
        for (const a of e) n(a);
        if (t.length > 1294) throw new Error("Cannot encode URI");
        for (let a = o; a < t.length; a++) s += `!${t[a].replace(/!/g,"%21").replace(/&/g,"%26")}`;
        return s;

        function n(e) {
            const t = b(e);
            if ("about:" !== t.protocol) r(t.origin + t.pathname), i(t.searchParams), i(t.hashParams)
        }

        function i(e) {
            for (const t of Object.keys(e)) {
                const o = e[t];
                if (t && null != o)
                    if (!Array.isArray(o)) r(t), r(o);
                    else
                        for (const e of o) r(t), r(e)
            }
            s += "-"
        }

        function r(e) {
            let o = t.indexOf(e);
            if (-1 === o) o = t.push(e);
            else o += 1;
            let n = o.toString(36);
            if (o > 35) n = `0${n}`;
            s += n
        }
    }

    function M(e, t = !1) {
        try {
            if (!e) return [];
            else return function(e) {
                const t = V(),
                    o = e.split(/!/g);
                for (let d = 2; d < o.length; d++) t.push(o[d].replace(/%21/g, "!").replace(/%26/g, "&"));
                const s = [],
                    n = o[1];
                let i = 0;
                for (; i < n.length;) s.push(a() + r("?") + r("#"));
                return s;

                function r(e) {
                    let t = "";
                    for (; i < n.length;) {
                        if ("-" === n[i]) {
                            i++;
                            break
                        }
                        const o = a(),
                            s = a();
                        t += `${(t?"&":e)+encodeURIComponent(o)}=${encodeURIComponent(s)}`
                    }
                    return t
                }

                function a() {
                    let e = n[i++],
                        o = "";
                    if ("0" === e) e = n[i++], o = n[i++];
                    const s = parseInt(e + o, 36);
                    return t[s - 1]
                }
            }(e)
        } catch (o) {
            if (window.console.error("Invalid multi URL", e, o), t) throw o;
            else return []
        }
    }
    const D = location.origin;
    var B;
    (function(e) {
        e.Error = "Error"
    })(B || (B = {}));
    const N = Object.freeze({
        "error.noDealer": "This table is temporarily inactive. Please return later or select a different table.",
        "message.unableLoadGame": "Something went wrong during loading the game. Please try again later or select a different table in the Lobby.",
        "button.backToLobby": "BACK TO LOBBY",
        "button.continue": "CONTINUE",
        "button.tryAgain": "Try Again",
        "message.unsupportedBrowserAdvice": "We advise you to use the latest version of Safari or Google Chrome",
        "message.unsupportedLanguage": "This game is not available in your language",
        "message.sessionExpired": "Your session has expired",
        "mobile.unsupportedDevice_short": "Currently your device is not supported.",
        "message.upgradeOperatingSystem": "For the best possible experience when playing our games, we recommend that you upgrade your operating system."
    });

    function $(e, t) {
        if (console.error(e, t), window.EVO_LOADER) {
            let s;
            if (t instanceof Response) s = `HTTP code ${"opaqueredirect"===t.type?"30x":t.status}`;
            else if (t instanceof Error) s = t.stack;
            else try {
                s = JSON.stringify(t) || "undefined"
            } catch (o) {
                s = o ? o.toString() : ""
            }
            window.EVO_LOADER.sendLog("CLIENT_ERROR_LOADING_STATIC_RESOURCE", {
                failedURL: e,
                error: s,
                buildVersion: "6.20220117.192427.10169-bc042cee86"
            })
        }
    }
    const F = !!window.EVO_VERBOSE;

    function z(e, t) {
        const o = e.indexOf(t);
        if (-1 === o) return !1;
        const s = e.pop();
        if (o < e.length) e[o] = s;
        return !0
    }

    function G(e, t) {
        if (t < 0 || t >= e.length) return !1;
        const o = e.pop();
        if (t < e.length) e[t] = o;
        return !0
    }

    function U(e, t) {
        return new Promise((o => {
            window.setTimeout((() => o(t)), e)
        }))
    }

    function W() {
        const e = document.getElementById("verbose-log");
        if (e) e.innerHTML = ""
    }

    function q(e) {
        if (e) e.style.display = "none"
    }

    function H(e, t = !1) {
        if (e) e.style.display = t ? "flex" : "block"
    }

    function K(e, t = null, o = 1e4) {
        return new Promise(((s, n) => {
            const i = new Image;
            i.crossOrigin = t, i.onerror = () => a("error");
            const r = window.setTimeout((() => {
                a("timeout")
            }), o);

            function a(t) {
                clearTimeout(r), $(e, t), n(t)
            }
            i.onload = () => {
                clearTimeout(r), s(i)
            }, i.src = e
        }))
    }
    const Q = {},
        X = {},
        J = {};

    function Z(e, t, o = !1) {
        if (e)
            if (!o && "fetch" === t) Q[e] = Y(e);
            else {
                if (X[e]) return;
                if (o && J[e]) return;
                const s = document.createElement("link");
                s.rel = o ? "prefetch" : "preload", s.as = t, s.href = e, s.crossOrigin = "anonymous", document.head.appendChild(s), J[e] = !0, X[e] = !o
            }
    }

    function Y(e, t) {
        let o = Q[e];
        if (void 0 !== o) delete Q[e];
        else window.EVO_VERBOSE(`fetchUrl/started ${e}`, 0, e), o = fetch(e, {
            redirect: "follow",
            credentials: "same-origin",
            keepalive: !0,
            mode: "cors"
        }).then((t => {
            if (!t.ok) throw t;
            if (t.headers && t.headers.has("login-page")) throw new Response("", {
                status: 403
            });
            return window.EVO_VERBOSE(`fetchUrl/done ${e}`, 0, e, 3e3), t
        })).catch((t => {
            throw window.EVO_VERBOSE(`fetchUrl/fail/${t.status} ${e}`, 2, e), t
        }));
        if ("json" === t) return o.then((e => e.json()));
        if ("text" === t) return o.then((e => e.text()));
        else return o
    }
    let ee = !1;

    function te(e, t, o) {
        if (ee || !Object || function() {
                try {
                    return !Object || !window || !document.body || F && !window.EVO_VERBOSE
                } catch (e) {
                    return !0
                }
            }()) return;
        const s = window.EVO_LOADER;
        if (s.isFailed = !0, s.failReason = t, 0);
        const n = b(location.href),
            i = parseInt(n.getParam("failed") || "0", 10) + 1;
        if (i > 5) s.displayFailurePopup(o || "message.unableLoadGame", !0, !0);
        else {
            if (n.hashParams.failed = i.toString(), e) n.hashParams.cdn = void 0;
            history.replaceState(null, "", n.toString());
            const t = i * i * 100;
            window.setTimeout((() => {
                if (e) {
                    const t = new Date(Date.now() + 60 * e * 1e3).toUTCString();
                    document.cookie = `ignore_cdn=true; expires=${t}; path=/`
                }
                location.reload()
            }), t)
        }
        ee = !0
    }

    function oe(e) {
        if (e)
            if (b(e).origin !== location.origin) return void window.console.error("Refusing to load manifest from remote", e);
        return e
    }
    var se, ne;

    function ie(e, t, o = !0, s = window.BUNDLE_MANIFEST) {
        const n = e.frontend_app,
            i = e.game || "lobby",
            r = (null == n ? void 0 : n.split(",").concat(i)) || [i];
        for (const a of r) {
            const e = re(a, t, s);
            if (e && e.assets.length) return e;
            if (0);
        }
        if (o) throw new Error(`Cannot find any of the defined apps: ${r.join(", ")}`)
    }

    function re(e, t, o = window.BUNDLE_MANIFEST) {
        const s = o.defaults[e.trim()],
            n = s && function(e, t) {
                let o;
                if ("desktop" === t) o = e.desktop;
                else o = e.mobile;
                return o || e.adaptive
            }(s, t);
        return n
    }
    window.addEventListener("beforeunload", (() => {
            if (ee = !0, "undefined" != typeof Sentry) Sentry.addBreadcrumb({
                message: "window.onbeforeunload",
                category: "location"
            })
        })),
        function(e) {
            e.AndarBahar = "andarbahar", e.Lobby = "lobby", e.Slingshot = "slingshot", e.CaribbeanStudPoker = "csp", e.CasinoHoldemPoker = "holdem", e.CasinoHoldemPokerNew = "chp", e.UltimateTexasHoldem = "uth", e.ExtremeTexasHoldem = "eth", e.TexasHoldemBonus = "thb", e.ThreeCardPoker = "tcp", e.TripleCardPoker = "trp", e.DoubleHandPoker = "dhp", e.BaccaratPro = "baccarat_pro", e.Roulette = "roulette", e.InstantRoulette = "instantroulette", e.DoubleBallRoulette = "double_ball_roulette", e.AmericanRoulette = "americanroulette", e.Blackjack = "blackjack", e.ScalableBlackjack = "scalableblackjack", e.FreebetBlackjack = "freebet", e.PowerBlackjack = "powerscalableblackjack", e.LightningBlackjack = "lightningscalablebj", e.Baccarat = "baccarat", e.LightningBaccarat = "lightningbaccarat", e.GoldenWealthBaccarat = "goldenwealth", e.BaccaratMultiplay = "baccaratmultiplay", e.MoneyWheel = "moneywheel", e.DragonTiger = "dragontiger", e.TopCard = "topcard", e.Monopoly = "monopoly", e.RNGBlackjack = "rng-blackjack", e.RNGLightningBlackjack = "rng-lightningscalablebj", e.RNGMoneyWheel = "rng-moneywheel", e.RNGRoulette = "rng-roulette", e.RNGAmericanRoulette = "rng-american-roulette", e.RNGBaccarat = "rng-baccarat", e.RNGCraps = "rng-craps", e.RNGMegaBall = "rng-megaball", e.RNGDragonTiger = "rng-dragontiger", e.RNGTopCard = "rng-topcard", e.DealOrNoDeal = "dealnodeal", e.RNGDealOrNoDeal = "rng-dealnodeal", e.SideBetCity = "sidebetcity", e.LightningDice = "lightningdice", e.SicBo = "sicbo", e.CrazyTime = "crazytime", e.MegaBall = "megaball", e.Craps = "craps", e.GonzoTreasureHunt = "gonzotreasurehunt", e.CashOrCrash = "cashorcrash", e.FanTan = "fantan", e.BacBo = "bacbo", e.CrazyCoinFlip = "crazycoinflip"
        }(se || (se = {})),
        function(e) {
            e.NewJersey = "new-jersey", e.Pennsylvania = "pennsylvania", e.Lightning = "lightning"
        }(ne || (ne = {}));
    class ae {
        static addEventListener(e, t, o) {
            (this._addEventListener || e.addEventListener).call(e, t, o)
        }
    }
    ae.setTimeout = window.setTimeout.bind(window), ae.clearTimeout = window.clearTimeout.bind(window), ae._addEventListener = "undefined" == typeof EventTarget ? null : EventTarget.prototype.addEventListener;
    const de = [];

    function le(e) {
        de.push(e), ae.addEventListener(e, "load", ce), ae.addEventListener(e, "error", ce)
    }

    function ce() {
        if (Object) this.removeEventListener("load", ce), this.removeEventListener("error", ce), z(de, this)
    }
    class he {
        init() {
            Image = function(e) {
                function t() {
                    const t = new e;
                    return le(t), t
                }
                return t.prototype = e.prototype, t
            }(Image);
            const e = document.createElement;
            document.createElement = function(t, o) {
                const s = e.call(this, t, o),
                    {
                        tagName: n
                    } = s;
                if ("IMG" === n || "SCRIPT" === n || "LINK" === n) le(s);
                return s
            }
        }
        reset() {
            for (; de.length;) ce.call(de[0])
        }
        clean() {
            return new Promise(((e, t) => {
                this.verify(1e3, e, t)
            }))
        }
        verify(e, t, o) {
            if (e < 0) return window.console.error("Asset downloads are still pending", de.slice()), o("SandboxAssetWrapper detected pending assets");
            if (de.every(pe)) return t();
            else ae.setTimeout((() => this.verify(e - 25, t, o)), 25)
        }
    }

    function pe(e) {
        if ("prefetch" === e.rel) return !0;
        else return !e.src || !e.href
    }
    const fe = Symbol("Sandbox known DOM node"),
        me = Symbol("Sandbox expected nodeValue"),
        ue = Symbol("Sandbox expected attributes");
    class ge {
        constructor() {
            this.title = "", this.bodyClassName = "", this.knownElementCount = -1
        }
        init() {}
        reset() {
            if (0);
            this.markAllIgnoredElements(), this.knownElementCount = this.markKnownElements(document.documentElement, 0), this.title = document.title, this.bodyClassName = document.body.className
        }
        clean() {
            if (this.markAllIgnoredElements(), this.removeUnknownElements(document.documentElement, 0) !== this.knownElementCount) {
                if (0);
                throw new Error("Predefined DOM node has been removed.")
            }
            if (this.title !== document.title) window.console.warn("document.title not restored by the application"), document.title = this.title;
            if (this.bodyClassName !== document.body.className) window.console.warn("document.body.className not restored by the application"), document.body.className = this.bodyClassName
        }
        markAllIgnoredElements() {
            this.markIgnoredElements('style[data-source="evo-video-components"]')
        }
        markIgnoredElements(e) {
            const t = document.querySelectorAll(e);
            for (let o = 0; o < t.length; o++) t[o].setAttribute("data-sandbox", "ignore")
        }
        removeUnknownElements(e, t) {
            for (; e;) {
                const o = e.nextSibling;
                if (e instanceof Element && "ignore" === e.getAttribute("data-sandbox")) {
                    e = o;
                    continue
                }
                const s = e[fe];
                if (s !== t)
                    if (null != s) {
                        if (0);
                        throw new Error("Predefined DOM node has been removed.")
                    } else {
                        this.warnMountedReact(e, !1), window.console.warn("DOM element not cleared up by the application.", e), e.parentNode.removeChild(e), e = o;
                        continue
                    } t++;
                const n = e[me];
                if (e.nodeValue !== n) window.console.warn("DOM element nodeValue not reset by the application.", e, {
                    got: e.nodeValue,
                    expected: n
                }), e.nodeValue = n;
                if (e instanceof Element) this.resetAttributes(e);
                if (e._reactRootContainer) throw window.console.error("ReactDOM is not unmounted from the node.", e), new Error("ReactDOM is not unmounted");
                if (e.firstChild) t = this.removeUnknownElements(e.firstChild, t);
                e = o
            }
            return t
        }
        warnMountedReact(e, t) {
            for (; e;) {
                if (e._reactRootContainer) window.console.warn("ReactDOM is not unmounted from the node.", e);
                else if (e.firstChild) this.warnMountedReact(e.firstChild, !0);
                e = t ? e.nextSibling : null
            }
        }
        markKnownElements(e, t) {
            for (; e;) {
                const o = e.nextSibling;
                if (!(e instanceof Element && "ignore" === e.getAttribute("data-sandbox"))) {
                    if (0);
                    if (e[fe] = t, t++, e instanceof Element && e.hasAttributes()) e[ue] = this.captureAttributes(e);
                    if (e[me] = e.nodeValue, e.firstChild) t = this.markKnownElements(e.firstChild, t);
                    e = o
                } else e = o
            }
            return t
        }
        resetAttributes(e) {
            const t = e[ue];
            if (!t) return;
            for (let s = 0; s < t.length; s += 2) {
                const o = t[s],
                    n = t[s + 1],
                    i = e.getAttribute(o);
                if (n !== i) {
                    if ("style" !== o || n || i) window.console.warn("Attribute not restored by the application", e, {
                        name: o,
                        got: i,
                        expected: n
                    });
                    e.setAttribute(o, n)
                }
            }
            const o = e.getAttributeNames();
            for (const s of o) {
                let o = !0;
                if (t)
                    for (let e = 0; e < t.length; e += 2)
                        if (t[e] === s) {
                            o = !1;
                            break
                        } if (o) e.removeAttribute(s)
            }
        }
        captureAttributes(e) {
            const t = [];
            for (const o of e.getAttributeNames()) t.push(o, e.getAttribute(o));
            return t
        }
    }
    class be {
        constructor() {
            this.failed = !1
        }
        init() {
            if (!document.body.onclick) document.body.onclick = () => {};
            const e = {},
                t = this;
            for (const o of Object.keys(HTMLElement.prototype))
                if ("on" === o.substr(0, 2)) {
                    const s = Object.getOwnPropertyDescriptor(HTMLElement.prototype, o);
                    e[o] = {
                        enumerable: !0,
                        configurable: !0,
                        get: s.get,
                        set(e) {
                            if (e && void 0 !== this[fe]) window.console.error(`Setting ${this.tagName}.${o} on shared element prevents SPA`, this), t.failed = !0;
                            s.set.call(this, e)
                        }
                    }
                } Object.defineProperties(HTMLElement.prototype, e)
        }
        reset() {}
        clean() {
            if (this.failed) return Promise.reject("onXX was used on elements shared between games.")
        }
    }
    const ve = Symbol("Sandbox event collection"),
        we = Symbol("Remove all event listeners");
    class ye {
        constructor() {
            this.isCapturing = !1, this.eventTargets = []
        }
        isSupported() {
            return "undefined" != typeof EventTarget
        }
        init() {
            const e = this.eventTargets,
                t = EventTarget.prototype.addEventListener,
                o = EventTarget.prototype.removeEventListener,
                s = this;

            function n(e) {
                if (void 0 === e) return "";
                if ("object" == typeof e) {
                    let t = "";
                    for (const o of Object.keys(e)) t += `${o}=${e[o]};`;
                    return t
                }
                return `${e}`
            }
            EventTarget.prototype.addEventListener = function(o, i, r, a) {
                if (t.call(this, o, i, r), "react-dom" === a || "evo-loader" === a) return;
                if (!this || !s.isCapturing) return;
                const d = this[ve] || (this[ve] = []);
                if (!d.length) e.push(this);
                if ("object" == typeof r && r.once) window.console.warn("Sandbox does not correctly process addEventListener() with once:true");
                const l = this instanceof HTMLImageElement ? this.src : new Error;
                d.push({
                    type: o,
                    listener: i,
                    options: r,
                    optionsKey: n(r),
                    stack: l
                })
            }, EventTarget.prototype.removeEventListener = function(t, s, i) {
                o.call(this, t, s, i);
                const r = this[ve];
                if (!r || !Object) return;
                const a = n(i);
                for (let e = 0; e < r.length; e++) {
                    const o = r[e];
                    if (o.listener === s && o.type === t && o.optionsKey === a) {
                        G(r, e);
                        break
                    }
                }
                if (!r.length) z(e, this);
                if (0);
            }, EventTarget.prototype[we] = function() {
                const t = this[ve];
                if (t) {
                    for (const e of t) o.call(this, e.type, e.listener, e.options);
                    t.length = 0
                }
                z(e, this)
            }
        }
        reset() {
            this.eventTargets.length = 0, this.isCapturing = !0
        }
        clean() {
            for (let e = this.eventTargets.length - 1; e >= 0; e--) {
                const t = this.eventTargets[e];
                if (t instanceof Node && t !== document && !document.contains(t)) continue;
                if (t instanceof WebSocket && t.readyState === WebSocket.CLOSED) continue;
                if (t instanceof XMLHttpRequest && t.readyState === XMLHttpRequest.DONE) continue;
                const o = t[ve];
                if (!o || !o.length) continue;
                window.console.warn("addEventListener has not been cleared up by application code.", t, o.slice());
                const s = EventTarget.prototype.removeEventListener;
                let n = 0;
                const i = o.length;
                for (; o.length;) {
                    if (n++ > 2 * i) return Promise.reject("infinite sandbox removeEventListener");
                    const e = o[0];
                    if (s !== t.removeEventListener) s.call(t, e.type, e.listener, e.options);
                    t.removeEventListener(e.type, e.listener, e.options)
                }
            }
        }
    }
    const ke = "SandboxFetchWrapper aborted the request";
    class Ee {
        constructor() {
            this.promiseCancelation = void 0
        }
        init() {
            const e = window.fetch;
            window.fetch = (t, o) => {
                if (o && o.evoIgnoreSandbox) {
                    if (0);
                    return e.call(window, t, o)
                }
                return Promise.race([this.promiseCancelation, e.call(window, t, o)]).catch((e => {
                    if (e === ke) window.console.warn("Sandbox interrupted request", t);
                    return Promise.reject(e)
                }))
            }
        }
        reset() {
            this.promiseCancelation = new Promise(((e, t) => {
                this.promiseRejector = t
            })), this.promiseCancelation.catch((() => {}))
        }
        clean() {
            if (this.promiseRejector) this.promiseRejector(ke)
        }
    }
    const je = ["__autoTestVideoComponents", "defineEvoVideo", "__lobbyTileSizeHint", "_", "HowlerGlobal", "Howler", "Howl", "Sound", "Hammer", "Backbone", "mozPaintCount", "mozInnerScreenX", "mozInnerScreenY", "mozAnimationStartTime", "orientation", "localStorage", "sessionStorage", "length", "innerHeight", "outerHeight", "innerWidth", "outerWidth", "frameElement", "parent", "top", "scrollX", "scrollY", "pageXOffset", "pageYOffset", "webkitStorageInfo", "speechSynthesis", "caches", "webkit"];
    class Se {
        constructor() {
            this.globals = void 0, this.resetFailed = null
        }
        init() {}
        reset() {
            if (null !== this.resetFailed) return;
            this.resetFailed = !1;
            let e = null;
            try {
                const t = this.globals = {};
                for (e of Object.keys(window))
                    if (!je.includes(e)) t[e] = window[e]
            } catch (t) {
                window.console.warn("SandboxGlobalsWrapper - failed to read", e, t), this.globals = void 0, this.resetFailed = !0
            }
        }
        clean() {
            if (this.resetFailed) return Promise.reject("SandboxGlobalsWrapper - could not capture window properties");
            const e = this.globals;
            if (e) {
                for (const o of Object.keys(window)) {
                    if (je.includes(o) || o.startsWith("webpack") || !isNaN(+o)) continue;
                    const s = window[o],
                        n = e[o];
                    if (s !== n) {
                        window.console.warn(`window.${o} value has been changed from`, n, "to", s);
                        try {
                            window[o] = n
                        } catch (t) {
                            return Promise.reject(`SandboxGlobalsWrapper - window.${o} modified`)
                        }
                    }
                }
                return Promise.resolve()
            }
        }
    }
    const Le = Symbol("Sandbox event collection");
    class Ie {
        constructor() {
            this.isCapturing = !1, this.eventTargets = []
        }
        isSupported() {
            if (!window.matchMedia) return !0;
            const e = this.getMediaQueryListPrototype();
            return !(!e || !e.addListener)
        }
        init() {
            if (!window.matchMedia) return;
            const e = this.eventTargets,
                t = this.getMediaQueryListPrototype(),
                o = t.addListener,
                s = t.removeListener,
                n = this;
            t.addListener = function(t) {
                if (o.call(this, t), !this || !n.isCapturing) return;
                const s = this[Le] || (this[Le] = []);
                if (!s.length) e.push(this);
                s.push({
                    listener: t,
                    stack: new Error
                })
            }, t.removeListener = function(t) {
                s.call(this, t);
                const o = this[Le];
                if (o && Object) {
                    for (let e = 0; e < o.length; e++)
                        if (o[e].listener === t) {
                            G(o, e);
                            break
                        } if (!o.length) z(e, this)
                }
            }
        }
        reset() {
            this.eventTargets.length = 0, this.isCapturing = !0
        }
        clean() {
            for (let e = this.eventTargets.length - 1; e >= 0; e--) {
                const t = this.eventTargets[e],
                    o = t[Le];
                if (o && o.length)
                    for (window.console.warn("matchMedia().addListener has not been cleared up by application code.", t, o.slice()); o.length;) t.removeListener(o[0].listener)
            }
        }
        getMediaQueryListPrototype() {
            if ("undefined" != typeof MediaQueryList) return MediaQueryList.prototype;
            else return Object.getPrototypeOf(window.matchMedia(""))
        }
    }
    const Oe = Error;
    class _e {
        constructor() {
            this.isCapturing = !1, this.timers = {}, this.animationFrames = {}
        }
        init() {
            if (window.setTimeout = this.timerCreator(this.timers, !0, window.setTimeout), window.clearTimeout = this.timerRemover(this.timers, window.clearTimeout), window.setInterval = this.timerCreator(this.timers, !1, window.setInterval), window.clearInterval = this.timerRemover(this.timers, window.clearInterval), window.requestAnimationFrame) window.requestAnimationFrame = this.rafCreator(this.animationFrames, window.requestAnimationFrame), window.cancelAnimationFrame = this.timerRemover(this.animationFrames, window.cancelAnimationFrame)
        }
        reset() {
            for (const e of Object.keys(this.timers)) delete this.timers[e];
            for (const e of Object.keys(this.animationFrames)) delete this.animationFrames[e];
            this.isCapturing = !0
        }
        clean() {
            for (const e of Object.keys(this.timers)) window.console.warn("setTimeout/setInterval has not been cleared up by application code.", this.timers[e]), window.clearTimeout(parseInt(e, 10));
            for (const e of Object.keys(this.animationFrames)) window.console.warn("requestAnimationFrame has not been cleared up by application code.", this.animationFrames[e]), window.cancelAnimationFrame(parseInt(e, 10))
        }
        timerRemover(e, t) {
            return o => {
                t(o), delete e[o]
            }
        }
        timerCreator(e, t, o) {
            return (s, n, ...i) => {
                let r;
                if (r = o(t ? () => {
                        if (t) delete e[r];
                        if (s) s.call(null, ...i)
                    } : s, n), this.isCapturing) e[r] = new Oe;
                return r
            }
        }
        rafCreator(e, t) {
            return o => {
                let s;
                if (s = t((t => {
                        if (delete e[s], o) o.call(null, t)
                    })), this.isCapturing) e[s] = new Oe;
                return s
            }
        }
    }
    const Te = [],
        Ce = WebSocket;

    function Ae(e) {
        if (arguments.length > 1) throw new Error("Only 1 argument expected");
        const t = new Ce(e);
        return Pe(t), t
    }

    function Pe(e) {
        Te.push(e), ae.addEventListener(e, "close", xe), ae.addEventListener(e, "error", xe)
    }

    function xe() {
        if (this.removeEventListener("close", xe), this.removeEventListener("error", xe), Object) z(Te, this)
    }
    Object.assign(Ae, WebSocket), Ae.prototype = Ce.prototype;
    class Ve {
        init() {
            window.WebSocket = Ae
        }
        reset() {
            for (; Te.length;) xe.call(Te[0])
        }
        clean() {
            if (Te.length) window.console.warn("WebSocket instances are not closed", Te.slice());
            return new Promise(((e, t) => {
                this.verify(1e3, e, t)
            }))
        }
        verify(e, t, o) {
            if (e < 0) return window.console.error("WebSocket instances are still open", Te.slice()), o("SandboxWebSocketWrapper detected open connections");
            if (0 === Te.length) return t();
            for (let s = Te.length - 1; s >= 0; s--) Te[s].close(4e3, "SPA switch");
            ae.setTimeout((() => this.verify(e - 25, t, o)), 25)
        }
    }
    const Re = [];
    class Me {
        init() {
            if ("undefined" == typeof Worker) return;
            const e = Worker;

            function t(t) {
                const o = new e(t);
                var s;
                return s = o, Re.push(s), o
            }
            Object.assign(t, Worker), t.prototype = e.prototype;
            const o = e.prototype.terminate;
            t.prototype.terminate = function() {
                (function(e) {
                    if (Object) z(Re, e)
                })(this), o.call(this)
            }, window.Worker = t
        }
        reset() {
            Re.length = 0
        }
        clean() {
            if (Re.length) window.console.warn("Worker instances are not terminated", Re.slice());
            for (let e = Re.length - 1; e >= 0; e--) Re[e].terminate()
        }
    }
    const De = [];

    function Be() {
        if (Object) z(De, this), Promise.resolve().then((() => {
            if (this[we]) this[we]()
        }))
    }
    class Ne {
        init() {
            const e = XMLHttpRequest.prototype.send;
            XMLHttpRequest.prototype.send = function(t) {
                if (De.push(this), "onloadend" in this) this.addEventListener("loadend", Be);
                else this.addEventListener("load", Be), this.addEventListener("abort", Be), this.addEventListener("error", Be);
                e.call(this, t)
            }
        }
        reset() {
            De.length = 0
        }
        clean() {
            let e = 0;
            for (; e++ < 5 && De.length;) {
                const e = De.slice();
                De.length = 0;
                for (const t of e) window.console.warn("Sandbox interrupted request", t), t.abort()
            }
            if (De.length) return window.console.error("Pending requests", De), Promise.reject("XMLHttpRequest infinite retries")
        }
    }
    class $e {
        constructor() {
            this.enabled = !0, this.wrappers = [new he, new Ee, new Ne, new _e, new be, new ye, new Ie, new ge, new Se, new Ve, new Me];
            try {
                if (window.EVO_LOADER.deviceInfo.isBaiduBrowser) return void(this.enabled = !1);
                for (const e of this.wrappers)
                    if (e.isSupported && !e.isSupported()) return void(this.enabled = !1);
                for (const e of this.wrappers) e.init()
            } catch (e) {
                const o = `Failed to initialize Sandbox: ${e.message}\n${e.stack}`;
                window.EVO_VERBOSE(o, 1), window.console.error(o), this.enabled = !1
            }
        }
        static getSingleton() {
            if (!this._singleton) this._singleton = new $e;
            return this._singleton
        }
        reset() {
            if (!this.enabled) return Promise.reject(new Error("Sandbox not supported in browser"));
            else return Promise.all(this.wrappers.map((e => e.reset())))
        }
        clean() {
            if (!this.enabled) return Promise.reject(new Error("Sandbox not supported in browser"));
            let e = Promise.resolve();
            for (let t = 0; t < 2; t++) e = e.then((() => Promise.all(this.wrappers.map((e => e.clean()))))), e = e.then((() => new Promise((e => {
                ae.setTimeout(e)
            })))), e = e.then((() => window.console.log(`Sandbox cleanup phase ${t+1} done.`)));
            return e
        }
    }
    $e._singleton = void 0;
    class Fe {
        constructor() {
            this.disposed = !1, this.events = {}
        }
        subscribe(e, t) {
            if (!Array.isArray(e)) this.ensureEvent(e).promise.then(t);
            else {
                const o = e.map((e => this.ensureEvent(e).promise));
                Promise.all(o).then((e => t(...e)))
            }
        }
        publish(e, t) {
            const o = this.ensureEvent(e);
            if (o.resolved) throw new Error(`publish() called more than once for ${e}`);
            window.EVO_VERBOSE(`Loader/${e}: done`, 0, e), o.resolved = !0, o.value = t, o.resolver(t)
        }
        getValue(e) {
            const t = this.events[e];
            return null == t ? void 0 : t.value
        }
        getPromise(e) {
            return this.ensureEvent(e).promise
        }
        hasEvent(e) {
            return !!this.events[e]
        }
        resetEvent(e) {
            const t = this.events[e];
            if (t) {
                if (!t.resolved) throw new Error("Cannot reset unfinished event.");
                delete this.events[e]
            }
        }
        dispose() {
            this.disposed = !0, this.events = {}
        }
        ensureEvent(e) {
            if (this.disposed) throw new Error("PubSub has been disposed");
            const t = this.events[e];
            if (t) return t;
            let o;
            window.EVO_VERBOSE(`Loader/${e}: waiting`, 0, e);
            const s = new Promise((e => {
                o = e
            }));
            if (!o) throw new Error("Async promise ctor");
            return this.events[e] = {
                promise: s,
                resolver: o,
                resolved: !1,
                value: void 0
            }
        }
    }
    class ze extends Fe {
        constructor(e) {
            super(), this.loader = e
        }
        dispose(e) {
            return this.publish("disposing", e), Promise.resolve(super.dispose())
        }
    }
    const Ge = Symbol("video-lib-timeout");
    class Ue extends ze {
        constructor(e) {
            super(e), this.sandboxInitialization = $e.getSingleton().reset(), this.disposePromise = void 0, this.gameLoader = void 0, this.gameLoaderState = void 0, e.shared.subscribe("setup", (e => {
                this.subscribe("config", (t => this.setSentryContext(e, t))), this.subscribe(["config", "sandbox"], (t => this.requestGameManifest(t, e))), this.startSandbox()
            })), this.subscribe("gamePackageManifest", (e => {
                this.requestScripts(e), this.requestStyleSheet(e)
            })), e.shared.subscribe(["setup", "style", "i18n"], ((e, t, o) => {
                this.subscribe(["config", "gamePackageManifest", "bundleCss"], ((s, n) => {
                    this.runApp(e, t, o, s, n)
                }))
            }))
        }
        dispose() {
            var e, t;
            if (this.disposePromise) return this.disposePromise;
            const o = !this.gameLoader || void 0 === this.getValue("gameLoaded"),
                s = performance.now();
            return this.disposePromise = super.dispose({
                applicationType: null !== (t = null === (e = this.gameLoader) || void 0 === e ? void 0 : e.applicationType) && void 0 !== t ? t : "unknown"
            }).then((() => {
                if (o) return Promise.reject(new Error("Game loader not yet finished"));
                else return this.gameLoader.dispose(this.gameLoaderState)
            })).then((() => $e.getSingleton().clean())).then((() => {
                const e = performance.now();
                window.console.log("Dispose of previous instance took", Math.floor(e - s), "ms")
            }))
        }
        setSentryContext(e, t) {
            if ("undefined" != typeof Sentry) Sentry.configureScope((o => {
                o.setTags({
                    gameType: t.game,
                    casinoId: e.casino_id
                })
            })), Sentry.setUser({
                id: e.user_id,
                username: e.player_id
            })
        }
        startSandbox() {
            this.sandboxInitialization.then((() => {
                this.publish("sandbox", !0)
            })).catch((() => {
                this.publish("sandbox", !1)
            }))
        }
        requestGameManifest(e, t) {
            let o = e.frontend_manifest;
            const s = t.globalSettings;
            if (!o && s && e.frontend_app) {
                const t = s.manifests;
                o = null == t ? void 0 : t[e.frontend_app]
            }
            if (o) this.requestGameManifestRemote(e, o);
            else this.requestGameManifestLocal(e)
        }
        requestGameManifestRemote(e, t) {
            const o = this.loader;
            if (t.endsWith("/")) t += "manifest.json";
            if (0);
            Y(t, "json").then((s => {
                const n = ie(e, o.deviceInfo.deviceType, !1, s);
                if (!n) throw new Error(`Remote manifest '${t}' does not include definition for the given table.`);
                this.publish("gamePackageManifest", n)
            })).catch((e => {
                window.console.error(e), o.failed("failed to load gamePackageManifest")
            }))
        }
        requestGameManifestLocal(e) {
            const t = this.loader;
            try {
                const o = ie(e, t.deviceInfo.deviceType);
                this.publish("gamePackageManifest", o)
            } catch (o) {
                t.failed("gamePackageManifest")
            }
        }
        requestScripts(e) {
            const t = this.loader;
            for (const o of e.assets)
                if (o.endsWith(".js")) t.assets.loadScript(window.EVO_CDN + o).catch((() => {
                    t.isFailed = !0, te(5, "loadScript")
                }))
        }
        requestStyleSheet(e) {
            const t = this.loader,
                o = e.assets.filter((e => e.endsWith(".css")));
            for (let s = 0; s < o.length; s++) o[s] = window.EVO_CDN + o[s];
            t.assets.loadStyles(o, !0).then((() => {
                this.publish("bundleCss", null)
            })).catch((() => {
                t.isFailed = !0, te(5, "loadStyles")
            }))
        }
        runApp(e, t, o, s, n) {
            const i = this.loader;
            if (i.isFailed) return;
            const r = {
                gameType: s.game || se.Lobby,
                instance: this,
                setup: e,
                deviceType: i.deviceInfo.deviceType,
                tableConfig: s,
                styles: t,
                tableId: s.table_id || null,
                virtualTableId: s.vt_id || null,
                i18nData: o,
                getRoot: () => {
                    if (0);
                    return document.getElementById("root")
                },
                clientApi: i.clientApi
            };
            if (0);
            window.EVO_VERBOSE("gameLoader/started", 0, "gameLoader");
            const a = i.applications.getPromise(n.loader).then((e => (this.gameLoader = e, e.initialize(r)))).then((e => {
                    this.gameLoaderState = e
                })),
                d = n.ignoreVideo ? null : Promise.race([U(1e4, Ge), i.video.getPromise("module")]);
            Promise.all([d, a]).then((e => {
                var t, o;
                if (e[0] === Ge) i.sendLog("CLIENT_ERROR", {
                    error: "videoLibrary/timeout"
                });
                window.EVO_VERBOSE("gameLoader/finish", 0, "gameLoader"), window.setTimeout((() => {
                    W(),
                        function() {
                            const e = b(location.href);
                            e.hashParams.failed = void 0, history.replaceState(null, "", e.toString())
                        }()
                }), 500), this.publish("gameLoaded", {
                    applicationType: null !== (o = null === (t = this.gameLoader) || void 0 === t ? void 0 : t.applicationType) && void 0 !== o ? o : "unknown"
                }), performance.mark("evoLoaderClosed")
            })).catch((e => {
                const t = e instanceof Error ? e : new Error(`gameLoader failed: ${(null==e?void 0:e.message)||e}`);
                if (window.EVO_VERBOSE(t.stack || t.message, 2), window.console.error(t), "undefined" != typeof Sentry) Sentry.captureException(t);
                te(1, "gameLoader", e && e.isLocalizedError ? e : void 0)
            }))
        }
    }
    class We extends Ue {
        constructor(e, t) {
            let o;
            super(e), this.kind = "app";
            const s = t ? t.indexOf("@") : -1;
            if (s > -1) o = oe(t.substr(s + 1)), t = t.substr(0, s);
            if (!t) t = "lobby";
            this.publish("config", {
                game: "",
                frontend_app: t,
                frontend_manifest: o
            })
        }
    }
    class qe extends ze {
        constructor() {
            super(...arguments), this.kind = "empty"
        }
    }
    class He extends Ue {
        constructor(e, t, o, s, n) {
            super(e), this.tableId = t, this.virtualTableId = o, this.app = s, this.balanceId = n, this.kind = "game", this.requestConfigData()
        }
        requestConfigData() {
            const e = this.loader,
                t = C("/config", {
                    table_id: this.tableId,
                    vt_id: this.virtualTableId
                });
            Y(t, "json").then((e => {
                const t = this.app;
                if (t) {
                    window.console.warn("Overriding game type and manifest with", t);
                    let o = t.indexOf("@");
                    if (o < 0) o = t.length;
                    else e.frontend_manifest = oe(t.substr(o + 1));
                    if (o > 0) e.frontend_app = t.substr(0, o)
                }
                this.publish("config", e)
            })).catch((o => {
                if (o instanceof Response && 403 === o.status) e.failedAuth();
                else $(t, o), e.failed("failed to load config")
            }))
        }
    }
    var Ke;
    (function(e) {
        e.Sidebar = "sidebar", e.Fill = "fill"
    })(Ke || (Ke = {}));
    class Qe extends ze {
        constructor(e, t, o, s, n = Ke.Fill) {
            super(t), this.parent = e, this.kind = "frame", this.layout = Ke.Fill, this.frameUrlChanged = () => {
                this.parent.updateUri(!0)
            }, this.frameUnloadListener = () => {
                setTimeout(this.frameLoadListener, 0)
            }, this.frameLoadListener = () => {
                this.frameUrlChanged();
                const e = this.frame.contentWindow;
                if (e) e.addEventListener("unload", this.frameUnloadListener, !0, "evo-loader"), e.addEventListener("hashchange", this.frameUrlChanged, !0, "evo-loader"), e.addEventListener("pushstate", this.frameUrlChanged, !0, "evo-loader"), e.addEventListener("replacestate", this.frameUrlChanged, !0, "evo-loader")
            };
            const i = document.createElement("iframe");
            this.frame = i, this.layout = n, i.src = x(o), i.addEventListener("load", this.frameLoadListener), s.appendChild(i)
        }
        get location() {
            const e = this.frame.contentWindow;
            let t = e ? e.location.href : null;
            if (!t || t.startsWith("about:")) t = this.frame.src;
            if (t.includes(P)) {
                const e = b(t);
                delete e.searchParams.iFrAmE, t = e.toString()
            }
		return null
           // return t
        }
        dispose() {
            const e = this.frame;
            if (e.removeEventListener("load", this.frameLoadListener), e.parentNode) e.parentNode.removeChild(e);
            return super.dispose()
        }
        navigate(e) {
            e = x(e);
            try {
                const {
                    contentWindow: t
                } = this.frame;
                if (t && t.EVO_LOADER) {
                    if (t.location.href !== e) t.location.replace(e);
                    return
                }
            } catch (t) {}
            this.frame.src = e
        }
        resize(e, t) {
            this.frame.style.width = Math.floor(e) + "px", this.frame.style.height = Math.floor(t) + "px"
        }
    }
    const Xe = w("multiwindow {74d74998-b630-473a-b390-58f11d036a96}");
    class Je extends ze {
        constructor(e, t, o = !1) {
            super(e), this.kind = "multi", this.frames = [], this.window = window, this.wasMoveDone = !1, this.scrolling = !1, this.touchEndResetTimer = null, this.handleScrollAction = () => {
                if (document.body.classList.contains("compact") && this.wasMoveDone) this.scrolling = !0, this.removeResetTimeout(), this.touchEndResetTimer = window.setTimeout((() => {
                    if (this.scrolling = !1, this.wasMoveDone = !1, document.body.classList.contains("compact")) window.scrollTo(0, 0)
                }), 200)
            }, this.handleContinuousScroll = e => {
                if (this.wasMoveDone = !0, this.scrolling) e.preventDefault()
            }, this.layoutFramesAndScroll = () => {
                let e = window.innerHeight,
                    t = window.innerWidth;
                if (this.layoutFrames(e, t), setTimeout((() => {
                        const o = window.innerHeight,
                            s = window.innerWidth;
                        if (o !== e || s !== t) e = o, t = s, this.layoutFrames(o, s)
                    }), 1e3), this.loader.deviceInfo.isIos15PhoneSafari)
                    if (window.matchMedia("(orientation: landscape)").matches) return;
                window.scrollTo(0, 0)
            }, this.layoutFrames = (e, t) => {
                const {
                    isPhone: o
                } = this.loader.deviceInfo, s = this.countFrames();
                let n = 0,
                    i = 0;
                if (s[Ke.Sidebar] > 0) n = o ? Math.floor(t / s[Ke.Sidebar]) : 400 * s[Ke.Sidebar], i = !o || t > e ? e : Math.floor(.85 * e);
                const r = o ? t : t - n;
                this.sidebarContainer.style.width = `${n}px`, this.sidebarContainer.style.height = `${i}px`, this.gamesContainer.style.width = `${r}px`;
                const a = this.calculateOptimumSize(r, e, s[Ke.Fill]);
                for (const d of this.frames) {
                    if (d.layout === Ke.Fill) d.resize(a.width, a.height);
                    if (d.layout === Ke.Sidebar && s[Ke.Sidebar] > 1) d.resize(Math.floor(n / s[Ke.Sidebar]), i)
                }
            };
            const s = document.getElementById("inGameLobby");
            if (s && s.parentNode) s.parentNode.removeChild(s);
            const n = document.createElement("div");
            n.className = "multiwindow-indicator", document.body.appendChild(n);
            const i = document.createElement("div");
            this.container = i, i.className = "loader-frame-container", document.body.appendChild(i);
            const r = document.createElement("div");
            this.gamesContainer = r, r.className = "games-container", i.appendChild(r);
            const a = document.createElement("div");
            this.sidebarContainer = a, a.className = "sidebar-container", i.appendChild(a);
            for (const d of M(t)) this.addFrame(d, !1);
            if (!o && !this.frames.length) this.addFrame(T(), !1);
            if (this.layoutFramesAndScroll(), this.loader.deviceInfo.isPhone && this.loader.deviceInfo.isIosDevice) setTimeout((() => {
                this.layoutFramesAndScroll()
            }), 400), window.addEventListener("scroll", this.handleScrollAction), document.body.addEventListener("touchmove", this.handleContinuousScroll), document.body.addEventListener("touchstart", this.handleContinuousScroll);
            window.addEventListener("resize", this.layoutFramesAndScroll), this.publish("gameLoaded", void 0), setTimeout(W, 1e3)
        }
        removeResetTimeout() {
            if (this.touchEndResetTimer) window.clearTimeout(this.touchEndResetTimer), this.touchEndResetTimer = null
        }
        dispose() {
            return window.removeEventListener("resize", this.layoutFramesAndScroll), document.body.removeChild(this.container), window.removeEventListener("scroll", this.handleScrollAction), document.body.removeEventListener("touchmove", this.handleContinuousScroll), document.body.removeEventListener("touchstart", this.handleContinuousScroll), this.removeResetTimeout(), Promise.all(this.frames.map((e => e.dispose()))).then((() => super.dispose()))
        }
        update(e) {
            if (!Array.isArray(e)) {
                const t = e.getParam("mwg");
                e = t ? M(t) : [e.toString()]
            }
            const t = this.frames;
            for (let o = 0; o < Math.min(t.length, e.length); o++) t[o].navigate(e[o]);
            for (; t.length < e.length;) this.addFrame(e[t.length], !1);
            for (; t.length > e.length;) this.removeFrame(t[t.length - 1].frame, {
                update: !1
            });
            return this.finalizeUpdate(), Promise.resolve()
        }
        updateUri(e = !1) {
            if (this.loader.instance === this) {
                const o = this.frames.map((e => e.location)),
                    s = 1 === o.length ? o[0] : location.origin + T({
                        mwg: R(o)
                    }, !1);
                if (location.href !== s) try {
                    window.history[e ? "replaceState" : "pushState"](null, "", s)
                } catch (t) {}
            }
        }
        addFrame(e, t = !0) {
            const o = b(e).getParam("mwLayout"),
                s = o === Ke.Sidebar ? this.sidebarContainer : this.gamesContainer;
            if (this.frames.push(new Qe(this, this.loader, e, s, o || Ke.Fill)), t) this.finalizeUpdate()
        }
        removeFrame(e, t = {
            update: !0,
            animateOnMobile: !1
        }) {
            const o = t.animateOnMobile && !this.loader.deviceInfo.isDesktop,
                s = this.frames.findIndex((t => t.frame === e));
            if (s > -1) {
                const n = this.frames[s];
                if (this.frames.splice(s, 1), o) e.classList.add("disposing");
                setTimeout((() => {
                    if (n.dispose().catch((() => {})), t.update) this.finalizeUpdate()
                }), o ? 500 : 0)
            }
        }
        isLastFillFrame(e) {
            for (const t of this.frames)
                if (t.frame !== e && t.layout === Ke.Fill) return !1;
            return !0
        }
        finalizeUpdate() {
            if (!this.frames.length) this.addFrame(T(), !1);
            this.layoutFramesAndScroll(), this.updateUri(), this.loader.broadcast.sendValues(Xe, {})
        }
        countFrames() {
            let e = 0,
                t = 0;
            for (const {
                    layout: o
                } of this.frames) {
                if (o === Ke.Fill) e++;
                if (o === Ke.Sidebar) t++
            }
            return {
                [Ke.Fill]: e,
                [Ke.Sidebar]: t
            }
        }
        setSidebarFullscreen(e) {
            const t = window.innerHeight,
                o = window.innerWidth,
                {
                    isPhone: s
                } = this.loader.deviceInfo,
                n = !s || o > t || e ? t : Math.floor(.85 * t);
            this.sidebarContainer.style.height = `${n}px`
        }
        calculateOptimumSize(e, t, o) {
            if (o < 2) return {
                width: e,
                height: t
            };
            let s = 0,
                n = 0;
            for (let i = 1; i <= o; i++) {
                const r = Math.ceil(o / i),
                    a = Math.min(t / r, e / i * 9 / 16);
                if (a > n) n = a, s = 16 * a / 9
            }
            return {
                width: s,
                height: n
            }
        }
    }
    class Ze extends ze {
        constructor(e, t, o, s, n, i) {
            super(e), this.tableId = t, this.virtualTableId = o, this.multiwindow = s, this.balanceId = n, this.app = i, this.kind = "switch"
        }
        dispose() {
            return super.dispose().then((() => Promise.reject("Another switch is in progress")))
        }
    }
    class Ye {
        constructor() {
            this.scripts = {}, this.styles = {}, this.enabledStyles = [], this.timeout = window.EVO_CDN ? 15e3 : 6e4
        }
        loadStyles(e, t = !1) {
            if (!Array.isArray(e)) e = [e];
            const o = e.map((e => (this.styles[e] || (this.styles[e] = this.createLinkElement(e))).then((e => this.setLinkEnabled(e, !0)))));
            return Promise.all(o).then((e => {
                if (t) {
                    for (const t of this.enabledStyles)
                        if (!e.includes(t)) this.setLinkEnabled(t, !1);
                    this.enabledStyles = e
                } else this.enabledStyles.push(...e)
            }))
        }
        loadScript(e, t = !1, o) {
            const s = this.scripts[e];
            if (s && !o) return s;
            const n = document.createElement("script");
            n.charset = "utf-8", n.async = t;
            const i = this.waitForLoaded(n, e);
            return this.scripts[e] = i, n.src = e, document.head.appendChild(n), document.head.removeChild(n), i
        }
        waitForLoaded(e, t) {
            return new Promise(((o, s) => {
                let n = 0;
                const i = o => {
                    if (o.filename === e.src) r(!0), s(`Failed: ${t}`)
                };
                window.addEventListener("error", i);
                const r = t => {
                    if (clearTimeout(n), window.removeEventListener("error", i), t && e.parentNode) e.parentNode.removeChild(e)
                };
                n = setTimeout((() => {
                    window.EVO_VERBOSE(`timeout for ${t}`, 2), r(!0), s(`timeout: ${t}`)
                }), this.timeout), e.addEventListener("error", (e => {
                    $(t, e.error), r(!0), s(`Failed: ${t}`)
                })), e.addEventListener("load", (() => {
                    r(!1), o(e)
                }))
            }))
        }
        setLinkEnabled(e, t) {
            const o = Promise.resolve(e);
            if (e.disabled === !t) return o;
            if (e.disabled = !t, !t) return o;
            else return new Promise(((t, o) => {
                let s = 0,
                    n = 0;
                const i = document.styleSheets;
                n = window.setInterval((function() {
                    if (s++ > 200) return clearInterval(n), o("setLinkEnabled");
                    for (let o = 0, s = i.length; o < s; o++)
                        if (i[o].ownerNode === e) return clearInterval(n), t(e)
                }), 16)
            }))
        }
        createLinkElement(e) {
            const t = document.createElement("link");
            t.rel = "stylesheet", t.href = e, t.setAttribute("data-sandbox", "ignore");
            const o = this.waitForLoaded(t, e);
            return document.head.appendChild(t), o
        }
    }
    var et, tt, ot;
    (function(e) {
        e.Phone = "Phone", e.Tablet = "Tablet", e.Desktop = "Desktop"
    })(et || (et = {})),
    function(e) {
        e.IpadNonRetina = "ipad-non-retina", e.IpadRetina = "ipad-retina", e.IpadPro = "ipad-pro", e.IpadPro11inch = "ipad-pro-11inch"
    }(tt || (tt = {})),
    function(e) {
        e.Iphone4 = "iphone4", e.Iphone5 = "iphone5", e.Iphone6 = "iphone6", e.IphonePlusZoomed = "iphone-plus-zoomed", e.IphonePlus = "iphone-plus", e.Iphone10 = "iphone10", e.Iphone10Zoomed = "iphone10Zoomed", e.Iphone10sMax = "iphone10sMax", e.Iphone10R = "iphone10R", e.Iphone10RZoomed = "iphone10RZoomed", e.Iphone12 = "iphone12", e.Iphone12ProMax = "iphone12ProMax"
    }(ot || (ot = {}));
    const st = [{
            min: 320,
            max: 480,
            ratio: 2,
            type: ot.Iphone4
        }, {
            min: 320,
            max: 568,
            ratio: 2,
            type: ot.Iphone5
        }, {
            min: 375,
            max: 667,
            ratio: 2,
            type: ot.Iphone6
        }, {
            min: 375,
            max: 667,
            ratio: 3,
            type: ot.IphonePlusZoomed
        }, {
            min: 414,
            max: 736,
            ratio: 3,
            type: ot.IphonePlus
        }, {
            min: 375,
            max: 812,
            ratio: 3,
            type: ot.Iphone10
        }, {
            min: 320,
            max: 693,
            ratio: 3,
            type: ot.Iphone10Zoomed
        }, {
            min: 414,
            max: 896,
            ratio: 3,
            type: ot.Iphone10sMax
        }, {
            min: 414,
            max: 896,
            ratio: 2,
            type: ot.Iphone10R
        }, {
            min: 375,
            max: 812,
            ratio: 2,
            type: ot.Iphone10RZoomed
        }, {
            min: 390,
            max: 844,
            ratio: 3,
            type: ot.Iphone12
        }, {
            min: 428,
            max: 926,
            ratio: 3,
            type: ot.Iphone12ProMax
        }, {
            min: 768,
            max: 1024,
            ratio: 1,
            type: tt.IpadNonRetina
        }, {
            min: 768,
            max: 1024,
            ratio: 2,
            type: tt.IpadRetina
        }, {
            min: 834,
            max: 1194,
            ratio: 2,
            type: tt.IpadPro11inch
        }, {
            min: 1024,
            max: 1366,
            ratio: 2,
            type: tt.IpadPro
        }],
        nt = "desktop",
        it = "tablet",
        rt = "phone";
    class at {
        constructor(e = window.navigator.userAgent) {
            this.userAgent = e, this.isIosDevice = !!this.userAgent.match(/(iPhone|iPad)/i), this.isMacOSDevice = !!this.userAgent.match(/(Intel Mac OS X)/i), this.isQQBrowser = /(MQQBrowser)/.test(this.userAgent), this.isBaiduBrowser = /baiduboxapp/.test(this.userAgent), this.isIos15PhoneSafari = !!this.userAgent.match(/^Mozilla\/5\.0 \(iPhone; CPU iPhone OS 15_\S+ like Mac OS X\) AppleWebKit\/605\.1\.15 \(KHTML, like Gecko\) Version\/15\.\d Mobile\/15E148 Safari\/604\.1/), this.appleScreenType = (() => {
                if (!this.isIosDevice && !this.isMacOSDevice) return null;
                const e = window.screen && window.screen.width ? window.screen.width : window.innerWidth,
                    t = window.screen && window.screen.height ? window.screen.height : window.innerHeight,
                    o = window.devicePixelRatio || 1,
                    s = Math.min(e, t),
                    n = Math.max(e, t);
                for (const i of st)
                    if (i.min === s && i.max === n && i.ratio === o) return i.type;
                return null
            })(), this.isIPadOS = (() => {
                const e = void 0 !== window.orientation,
                    t = navigator.maxTouchPoints > 1;
                return this.isMacOSDevice && e && t
            })(), this.deviceType = (() => {
                if (this.isIPadOS) return it;
                if (/\b(WOW64|Win64|x64|x86_64|Windows NT|Intel Mac OS X|CrOS aarch64|X11.*Linux)\b/i.test(this.userAgent)) return nt;
                let e = window;
                try {
                    for (; e !== e.parent;) e.parent.matchMedia, e = e.parent
                } catch (t) {}
                return e.matchMedia("(min-width: 1024px) and (min-height: 600px) and (orientation: landscape), (min-width: 768px) and (orientation: portrait)").matches || this.isIPadOS ? it : rt
            })(), this.isTablet = this.deviceType === it, this.isPhone = this.deviceType === rt, this.isDesktop = this.deviceType === nt, this.isEventPassiveSupported = !1, this.isWrapper = (() => {
                if (/(wv\)|Chrome\/\d+\.0\.0\.0)/.test(this.userAgent)) return !0;
                if (this.isIosDevice && !/(Chrome|CriOS|Safari|Edge)\/[0-9._]*/.test(this.userAgent)) return !0;
                else return !1
            })(), this.checkEventPassiveSupport = (() => {
                try {
                    let e = !1;
                    const t = {
                            get capture() {
                                return !0
                            },
                            get once() {
                                return !0
                            },
                            get passive() {
                                return e = !0, !0
                            }
                        },
                        o = () => null;
                    window.addEventListener("test", o, t), window.removeEventListener("test", o, t), this.isEventPassiveSupported = e
                } catch (e) {
                    this.isEventPassiveSupported = !1
                }
            })()
        }
    }

    function dt(e) {
        if (e) return `${window.EVO_CDN||window.EVO_ORIGIN||""}/game-brandings/${e}`
    }

    function lt(e) {
        return (t, o) => {
            const s = ct(t, e),
                n = function(e, t) {
                    const o = t ? "graphical_desktopLoadingScreen" : "graphical_mobileLoadingScreen";
                    return e[`${o}_${window.EVO_LANG||e.lang}`] || e[o]
                }(o, e),
                i = dt(n);
            if (!i && s) {
                if ("object" == typeof s) {
                    const t = e ? o.table_type : o.wheel_type;
                    return t && s[t] || s.default
                }
                return s
            }
            return i
        }
    }

    function ct(e, t) {
        return t ? e.loaderBackground : e.logoImage
    }

    function ht(e) {
        return e.split(",").map(dt)
    }
    const pt = lt(!0),
        ft = lt(!1);
    class mt {
        constructor(e) {
            this.loader = e, this.lobbyLastGameType = void 0, this.lobbyLoadedGames = {}, this.lobbyLoadedGameCount = 0
        }
        preconnect(e, t) {
            const o = document.createElement("link");
            o.rel = t ? "dns-prefetch" : "preconnect", o.href = e, document.head.appendChild(o)
        }
        preload(e, t = !0, o = !1) {
            var s;
            if (0);
            const n = this.loader,
                i = ie(e, null === (s = window.EVO_LOADER) || void 0 === s ? void 0 : s.deviceInfo.deviceType, !1);
            if (i)
                if (void 0 === n.applications.getValue(i.loader)) {
                    for (const e of i.assets) {
                        const s = e.endsWith(".js"),
                            n = s ? !t : !o;
                        this.preloadFromManifest(e, s ? "script" : "style", n)
                    }
                    this.preloadDefaultLoadingScreen(i)
                }
        }
        preloadDefaultLoadingScreen(e) {
            const t = ct(e, this.loader.deviceInfo.isDesktop);
			const lll = "object" == typeof t ? t.default : t;
			if(lll === undefined) {
				Z("object" == typeof t ? t.default : t, "image", !0)
			} else {
				Z("object" == typeof t ? (window.EVO_CDN + t.default) : (window.EVO_CDN + t), "image", !0)
			}
        }
        lobbyGameVisible(e, t) {
            const {
                game: o,
                frontend_app: s
            } = e, n = `${s},${o}`;
            if (this.lobbyLastGameType === n) return;
            if (this.lobbyLastGameType = n, this.lobbyLoadedGames[n]) return;
            this.lobbyLoadedGames[n] = !0, this.lobbyLoadedGameCount++;
            const i = this.loader.shared.getValue("style"),
                r = null == i ? void 0 : i.data.fastTableSwitching,
                a = !("false" === (null == r ? void 0 : r.enabled) || t || "baccarat" !== o && "blackjack" !== o && "roulette" !== o || !(this.lobbyLoadedGameCount <= 5));
            this.preload(e, a, !1)
        }
        preloadBrandingResource(e) {
            Z(dt(e), "fetch", !0)
        }
        preloadFromManifest(e, t, o) {
            const s = this.loader;
            if (e) {
                const n = window.EVO_CDN + e,
                    i = () => {};
                if (o) Z(n, t, !0);
                else if ("script" === t) s.assets.loadScript(n).catch(i);
                else s.assets.loadStyles(n).catch(i)
            }
        }
    }
    class ut extends Fe {
        constructor(e) {
            super(), this.loader = e, this.isStarted = !1
        }
        start() {
            if (!this.isStarted)
                if (this.isStarted = !0, this.requestSetupData(), this.requestStyleData(), window.EVO_LANG) this.requestLocalization(window.EVO_LANG);
                else this.subscribe("setup", (e => {
                    window.EVO_LANG = e.lang, this.requestLocalization(e.lang)
                }))
        }
        requestLocalization(e) {
            const t = `/player/games/languages/${e}.json`,
                o = (window.EVO_CDN || window.EVO_ORIGIN || "") + t;
            Y(o, "json").then((e => {
                this.publish("i18n", e)
            })).catch((e => {
                if ($(o, e), window.EVO_CDN) te(5, "i18n");
                else this.loader.failed("i18n")
            }))
        }
        requestSetupData() {
            const e = this.loader,
                t = e.deviceInfo,
                o = C("/setup", {
                    device: t.deviceType,
                    "apple-screen": t.appleScreenType,
                    wrapped: t.isWrapper.toString()
                });
            Y(o, "json").then((e => {
                if (e.lang = window.EVO_LANG || e.lang, "string" == typeof e.globalSettings) try {
                    e.globalSettings = JSON.parse(e.globalSettings)
                } catch (t) {
                    if (0);
                    else window.console.error("Invalid globalSettings.", "\n", t);
                    e.globalSettings = void 0
                }
                this.publish("setup", e)
            })).catch((t => {
                if (t instanceof Response && 403 === t.status) e.failedAuth();
                else $(o, t), e.failed("/setup")
            }))
        }
        requestStyleData() {
            const e = this.loader,
                t = C("/style");
            Y(t, "json").then((e => {
                const t = {
                    data: e || {}
                };
				window.STYLE_SETTINGS = t;
                this.publish("style", t)
            })).catch((o => {
                if (o instanceof Response && 403 === o.status) e.failedAuth();
                else $(t, o), e.failed("/style")
            }))
        }
    }
    class gt extends Ye {
        constructor() {
            super(...arguments), this.moduleLoaders = new Fe, this.define = (e, t, o) => {
                if (t && t.length) throw new Error(`Expected no dependencies, got request for ${t}`);
                this.moduleLoaders.publish(e, o())
            }
        }
        loadModule(e, t, o) {
            return new Promise(((s, n) => {
                this.moduleLoaders.resetEvent(e), this.initModuleLoader(o), this.loadScript(t, !0, !0).catch(n), this.moduleLoaders.getPromise(e).then(s, n)
            }))
        }
        initModuleLoader(e) {
            const t = window[e];
            if (void 0 !== t && t !== this.define) window.console.error(`window["${e}"] is already used, overwriting...`);
            window[e] = this.define
        }
    }
    var bt;
    (function(e) {
        e.Mobile = "mobile", e.Iphone = "iphone", e.Desktop = "desktop", e.Wasm = "wasm"
    })(bt || (bt = {}));
    const vt = 0 ? "define" : "defineEvoVideo",
        wt = 0 ? "http://127.0.0.1:8080" : `${window.EVO_CDN}/mobile-video`;
    class yt extends Fe {
        constructor(e) {
            super(), this.modules = new gt, this.apiVersion = 12, this.isLoading = !1, this.handleLoadingError = e => {
                if (window.console.error(e), e instanceof Error) window.EVO_VERBOSE(e.stack || e.message, 2);
                else window.EVO_VERBOSE(e.message, 2);
                if (1)
                    if (window.EVO_CDN) te(5, "video")
            }, this.loader = e
        }
        loadLibrary(e = !1) {
            if (!this.isLoading)
                if (this.isLoading = !0, 1) this.loadIndependent(e);
                else this.loadFromVendor()
        }
        ensureEvent(e) {
            return this.loadLibrary(), super.ensureEvent(e)
        }
        loadIndependent(e) {
            if (0);
            let t;
            if (this.loader.deviceInfo.isDesktop) t = bt.Desktop;
            else if (this.loader.deviceInfo.isPhone && e && window.AudioWorklet) t = bt.Wasm;
            else if (this.loader.deviceInfo.isIosDevice) t = bt.Iphone;
            else t = bt.Mobile;
            const o = (Date.now() / 36e5).toFixed(0),
                s = this.getLastKnownVideoVersion();
            Promise.all([this.loadVersion(o), this.loadVideoComponent(t, s)]).then((([e, o]) => {
                let {
                    version: n
                } = e;
                const {
                    version: i
                } = o;
                if (i !== n) {
                    if (n === s) n += ".x";
                    return this.setLastKnownVideoVersion(n), this.loadVideoComponent(t, n).then((e => {
                        this.publishModule(e)
                    })).catch((() => {
                        this.publishModule(o)
                    }))
                }
                this.publishModule(o)
            })).catch(this.handleLoadingError)
        }
        getLastKnownVideoVersion() {
            try {
                return localStorage.getItem("EvoVideoLastKnownVersion") || void 0
            } catch (e) {}
        }
        setLastKnownVideoVersion(e) {
            try {
                localStorage.setItem("EvoVideoLastKnownVersion", e)
            } catch (t) {}
        }
        loadFromVendor() {
            (0 ? 0 : d.e(9830).then(d.t.bind(d, 663813, 23))).then((e => this.publishModule(e)))
        }
        publishModule(e) {
            this.publish("module", {
                component: e
            })
        }
        loadVersion(e) {
            return this.modules.loadModule("__version", `${wt}/video_version_v${this.apiVersion}.js?${e}`, vt)
        }
        loadVideoComponent(e, t = "") {
            return this.modules.loadModule("videojs", `${wt}/video_${e}_v${this.apiVersion}.js?${encodeURIComponent(t)}`, vt)
        }
    }
    class kt {
        constructor() {
            this.isFailed = !1, this.failReason = "", this.wasThrottled = !1, this.assets = new Ye, this.deviceInfo = new at, this.applications = new Fe, this.shared = new ut(this), this.video = new yt(this), this.prefetcher = new mt(this), this.broadcast = new S, this.instance = new qe(this), this.cdnHost = window.EVO_CDN, this.onInstanceSwitch = [], this.spaSwitches = 0
        }
        addInstanceSwitchListener(e) {
            if (this.onInstanceSwitch.push(e), "empty" !== this.instance.kind) e(this.instance)
        }
        sendLog(e, t) {
            window.EVO_VERBOSE(`Sending log: ${e}`);
            const o = C("/log"),
                s = JSON.stringify({
                    log: {
                        type: e,
                        value: t
                    }
                });
            let n = !1;
            if (navigator.sendBeacon) try {
                n = navigator.sendBeacon(o, s)
            } catch (i) {
                window.console.error(i)
            }
            if (!n) fetch(o, {
                method: "POST",
                credentials: "same-origin",
                headers: {
                    "Content-Type": "text/plain"
                },
                body: s,
                keepalive: !0,
                evoIgnoreSandbox: !0
            }).catch((o => {
                console.error("Unable to send log", o, e, t)
            }))
        }
        failedAuth() {
            if (!this.isFailed)
                if (this.isFailed = !0, this.shared.publish("failedAuthentication", null), 0);
                else window.location.href = "/"
        }
        failed(e) {
            te(0, e)
        }
        displayPopup(e, t) {
            Promise.race([U(3e3), this.shared.getPromise("i18n")]).then((() => {
                const o = this.shared.getValue("i18n"),
                    s = (null == o ? void 0 : o.common) || N;
                let n, i;
                if ("string" == typeof e) n = s[e], i = e;
                else n = e.message, i = "custom";
                this.sendLog("CLIENT_POPUP_DISPLAYED", {
                    popupId: i
                }), window.EVO_POPUP(n, t.map((e => ({
                    content: s[e.contentKey],
                    callback: e.callback
                }))))
            }))
        }
        displayFailurePopup(e, t, o) {
            this.isFailed = !0;
            const s = [];
            if (t) s.push({
                contentKey: "button.tryAgain",
                callback: () => {
                    location.reload()
                }
            });
            if (o && "game" === this.instance.kind) s.push({
                contentKey: "button.backToLobby",
                callback: () => {
                    this.redirectToLobby()
                }
            });
            if (this.instance.publish("gameLoadFailure", null), this.sendLog("CLIENT_GAME_LOADER_FAILED", {
                    reason: this.failReason,
                    userAgent: this.deviceInfo.userAgent,
                    buildVersion: "6.20220117.192427.10169-bc042cee86"
                }), function(e) {
                    return function(e) {
                        try {
                            return !e[Symbol("")]
                        } catch (t) {
                            return !1
                        }
                    }(e) && e.location.href.includes("gcm.html")
                }(window.parent))(n = window.parent, e => {
                if (n.postMessage({
                        key: "gcmIntegration",
                        value: e
                    }, D), i) i(e)
            })({
                type: B.Error
            });
            else this.displayPopup(e, s);
            var n, i
        }
        addDeviceTypeToGlobalClasses() {
            if (document.body) document.body.classList.add(this.deviceInfo.deviceType)
        }
        init(e = location.href) {
            if (0);
            this.shared.start();
            const t = b(e),
                o = t.getParam("mwg") || null,
                s = o ? null : t.getParam("table_id") || null,
                n = o ? null : t.getParam("vt_id") || null;
            let i = o ? null : t.getParam("app") || null;
            const r = s ? t.getParam("balance_id") || null : null,
                a = () => {
                    if (!this.isFailed) this.sendLog("CLIENT_GAME_LOADER_TERMINATED", {})
                };
            if (window.addEventListener("beforeunload", a), !r && ("direct" === t.getParam(_.FreeGames) || "direct" === t.getParam(_.PlayForFun))) i = "promotions";
            if (s && !s.toLowerCase().startsWith("rng")) this.video.loadLibrary();
            const d = this.instance;
            if (!d.disposed) {
                if ("multi" === d.kind) return d.update(t);
                if (s && "switch" === d.kind && d.tableId === s && d.virtualTableId === n && d.balanceId === r && d.app === i) return Promise.resolve();
                if ("empty" !== d.kind) this.resetPerformanceMetrics()
            }
            const l = console.groupCollapsed || console.group;
            return null == l || l.call(console, `%c📁 Application switch from ${d.kind} to tableId=${s}, vtId=${n}`, "font-size: 120%;"), this.instance = new Ze(this, s, n, o, r, i), d.dispose().then((() => this.checkInitResources())).then((() => this.checkSwitchConfiguration(d))).then((() => {
                let e;
                if (window.EVO_VERBOSE(`SPA switch from ${d.kind}`), this.broadcast.reset(), o) e = new Je(this, o);
                else if (s) e = new He(this, s, n, i, r);
                else e = new We(this, i);
                e.subscribe("gameLoaded", (() => {
                    window.removeEventListener("beforeunload", a)
                })), this.instance = e;
                for (const t of this.onInstanceSwitch) t(e)
            })).catch((e => {
                this.isFailed = !0;
                const t = "SPA bail because of ";
                if (window.console.error(t, e), window.EVO_VERBOSE(t + e, 1), 0);
                const i = b(window.location.href);
                i.searchParams.mwg = void 0, i.searchParams.table_id = void 0, i.searchParams.vt_id = void 0, i.searchParams.freeGames = void 0, i.hashParams.mwg = o || void 0, i.hashParams.table_id = s || void 0, i.hashParams.vt_id = n || void 0, i.hashParams.balance_id = r || void 0;
                const a = i.toString();
                if (window.location.href !== a) window.location.replace(a);
                window.location.reload()
            })).then((() => {
                if (l) window.console.groupEnd()
            }))
        }
        publishApplication(e, t, o) {
            this.applications.publish(e + t, o)
        }
        checkSwitchConfiguration(e) {
            if ("empty" === e.kind) return Promise.resolve();
            else return new Promise(((e, t) => {
                this.shared.subscribe("style", (o => {
                    const s = o.data.fastTableSwitching;
                    if ("false" === (null == s ? void 0 : s.enabled)) return t("fastTableSwitching is disabled in style settings");
                    e()
                }))
            }))
        }
        resetPerformanceMetrics() {
            try {
                performance.clearMarks(), performance.clearMeasures(), performance.clearResourceTimings(), performance.mark("evoAppSwitchStarted"), this.wasThrottled = !1
            } catch (e) {
                window.console.error("Cannot reset performance report", e)
            }
        }
        checkInitResources() {
            if (this.spaSwitches++, this.spaSwitches >= 10) return Promise.reject("10th load");
            if (performance.now() > 6e5) return Promise.reject("10 minute uptime");
            else return Promise.resolve()
        }
        redirectToLobby() {
            var e;
            const t = this.shared.getValue("style");
            if (t) {
                const o = this.deviceInfo.isDesktop ? t.data : t.data.mobile_settings,
                    s = null === (e = null == o ? void 0 : o.licensee_lobby) || void 0 === e ? void 0 : e.url;
                if (s) {
                    try {
                        window.top.location.href = s
                    } catch (n) {
                        window.location.href = s
                    }
                    return
                }
            }
            const o = b(location.href),
                s = {
                    category: o.getParam("category"),
                    game: o.getParam("game")
                };
            window.location.href = T(s)
        }
    }

    function Et(e, t, o = {
        applicationType: "unknown"
    }) {
        if ("game" === t.kind) return Object.assign(Object.assign(Object.assign({}, o), {
            gameType: e.game,
            gameVertical: e.game_vertical,
            tableId: t.tableId
        }), t.virtualTableId && {
            virtualTableId: t.virtualTableId
        });
        else return o
    }
    const jt = {
            isAvailable: function() {
                var e;
                return "function" == typeof(null === (e = window.EvolutionGamingAndroidAPI) || void 0 === e ? void 0 : e.send)
            },
            dispatch: function(e, t = {}) {
                window.EvolutionGamingAndroidAPI.send(JSON.stringify({
                    type: e,
                    payload: t
                }))
            }
        },
        St = {
            isAvailable: function() {
                try {
                    return window.parent !== window && !!window.parent.postMessage
                } catch (e) {
                    return !1
                }
            },
            dispatch: function(e, t = {}) {
                window.parent.postMessage({
                    type: e,
                    payload: t
                }, "*")
            }
        },
        Lt = {
            isAvailable: function() {
                var e, t, o;
                return "function" == typeof(null === (o = null === (t = null === (e = window.webkit) || void 0 === e ? void 0 : e.messageHandlers) || void 0 === t ? void 0 : t.EvolutionGamingWrapperAPI) || void 0 === o ? void 0 : o.postMessage)
            },
            dispatch: function(e, t = {}) {
                window.webkit.messageHandlers.EvolutionGamingWrapperAPI.postMessage(JSON.stringify({
                    type: e,
                    payload: t
                }))
            }
        };
    class It {
        constructor() {
            this.consumers = []
        }
        addConsumer(e) {
            if (e.isAvailable()) this.consumers.push(e)
        }
        dispatch(e, t = {}) {
            for (const o of this.consumers) o.dispatch(e, t)
        }
    }
    let Ot;
    const _t = "reality_check_handler";

    function Tt() {
        const e = b(location.href).getParam("EVOSESSIONID");
        if (e) window.EVO_SESSION_ID_FALLBACK = e;
        return !!e
    }

    function Ct() {
        window.location.href = "top-bar.html" + location.search + location.hash
    }(function() {
        Tt(),
            function() {
                let e = !1;
                window.addEventListener("beforeunload", (() => {
                    window.EVO_VERBOSE("beforeunload"), e = !0, setTimeout((() => {
                        e = !1
                    }), 1e3)
                })), window.addEventListener("popstate", (() => {
                    if (e) {
                        window.EVO_VERBOSE("beforeunload > popstate");
                        const e = location.href,
                            t = b(e);
                        t.searchParams._reload = Date.now().toFixed(), history.pushState(null, "", t.toString()), window.location.replace(e)
                    }
                }))
            }(),
            function() {
                const e = history.pushState;
                history.pushState = function(t, o, s) {
                    e.call(history, t, o, s), window.dispatchEvent(new CustomEvent("pushstate"))
                };
                const t = history.replaceState;
                history.replaceState = function(e, o, s) {
                    t.call(history, e, o, s), window.dispatchEvent(new CustomEvent("replacestate"))
                }
            }(), window.addEventListener("message", (e => {
                const t = e.data;
                if (e.origin === p.receive && t && "object" == typeof t && t.key === f) {
                    if (window.parent !== window) m(window.parent, e);
                    for (let t = 0; t < window.length; t++) m(window[t], e)
                }
            }));
        const e = b(location.href),
            t = new kt;
        window.EVO_LOADER = t, t.addDeviceTypeToGlobalClasses(), Object.defineProperty(window, "EVO_LOADER", {
                get: () => t,
                set: () => {
                    console.warn("window.EVO_LOADER cannot be overwritten")
                }
            }),
            function(e) {
                return function() {
                    const e = b(location.href),
                        t = e.getParam("origin");
                    if (!t) {
                        if (0);
                        return Promise.resolve()
                    }
                    const o = b(t);
                    if (o.pathname.length <= 1) return window.EVO_ORIGIN = o.origin, Promise.resolve();
                    if (e.getParam("JSESSIONID") || e.getParam("params")) {
                        const e = "`JSESSIONID` or `params` is defined outside of `origin` URL. Please ensure that `origin` value is properly url-encoded.";
                        window.console.warn(e), window.EVO_VERBOSE(e, 1)
                    }
                    return o.searchParams.json = "true", o.searchParams.cc = "1", o.searchParams.client_version = "6.20220117.192427.10169-bc042cee86", Y(o.toString(), "json").then((e => {
                        const t = e && e.location;
                        if ("string" != typeof t) throw new Error("Auth endpoint didn't return correct format.");
                        const s = b(t);
                        s.hashParams.origin = o.origin;
                        const n = location.pathname + s.search + s.hash;
                        try {
                            window.history.replaceState(null, "", n)
                        } catch (i) {
                            location.replace(n)
                        }
                        window.EVO_ORIGIN = o.origin, Tt()
                    })).catch((e => (window.console.error(e), Promise.reject(e))))
                }().catch((() => {
                    e.failedAuth()
                }))
            }(t).then((() => {
                (function(e, t = c) {
                    const o = new t({
                        sendLogMessage: e.sendLog,
                        isDesktop: e.deviceInfo.isDesktop
                    });
                    e.shared.subscribe(["setup", "style"], ((t, s) => {
                        const n = t.clientApiV2,
                            i = s.data.clientApiV2,
                            r = s.data.client_api_v2,
                            a = function(e) {
                                const t = e;
                                if (!t || ! function(e) {
                                        return ["stable", "unstable"].includes(e)
                                    }(t.release)) return null;
                                else return Object.assign(Object.assign({
                                    release: t.release
                                }, function(e) {
                                    return Array.isArray(e) && e.length > 0 && e.some((e => "string" == typeof e && e.trim().length > 0))
                                }(t.origins) ? {
                                    origins: t.origins
                                } : void 0), function(e) {
                                    return Array.isArray(e) && e.every((e => "string" == typeof e.name && e.name.startsWith("EVO:") && (void 0 === e.rules || ["mobile", "desktop"].includes(e.rules.platform))))
                                }(t.enabledEvents) ? {
                                    enabledEvents: t.enabledEvents
                                } : void 0)
                            }(i || r || n);
                        if (null !== a) e.clientApi = o, o.config = a
                    })), e.shared.subscribe("failedAuthentication", (() => {
                        null == o || o.postMessage({
                            event: "EVO:SESSION_INVALID"
                        })
                    })), e.addInstanceSwitchListener((t => {
                        t.subscribe("config", (o => {
                            t.subscribe("gameLoaded", (s => {
                                var n;
                                null === (n = e.clientApi) || void 0 === n || n.postMessage(Object.assign({
                                    event: "EVO:APPLICATION_READY"
                                }, Et(o, t, s))), window.addEventListener("beforeunload", (() => {
                                    var n, i;
                                    null === (n = e.clientApi) || void 0 === n || n.postMessage(Object.assign({
                                        event: "EVO:APPLICATION_UNLOAD"
                                    }, Et(o, t, s))), null === (i = e.clientApi) || void 0 === i || i.reset()
                                }))
                            })), t.subscribe("disposing", (s => {
                                var n, i;
                                null === (n = e.clientApi) || void 0 === n || n.postMessage(Object.assign({
                                    event: "EVO:APPLICATION_UNLOAD"
                                }, Et(o, t, s))), null === (i = e.clientApi) || void 0 === i || i.reset()
                            }))
                        }))
                    }))
                })(t, c),
                function(e) {
                    e.shared.subscribe("setup", (e => {
                        var t;
                        if (0);
                        if (window.EVO_ORIGIN) return;
                        const o = null === (t = e.casinoConfig) || void 0 === t ? void 0 : t.gameClientUrl,
                            s = b(location.href);
                        if (o && !s.pathname.startsWith(o)) {
                            if (0);
                            window.console.log("Adjusting the URL based on 'gameClientUrl'. It will take effect on next page reload."), s.pathname = o;
                            try {
                                window.history.replaceState(null, "", s.toString())
                            } catch (n) {
                                location.replace(s.toString())
                            }
                        }
                    }))
                }(t),
                function(e) {
                    e.shared.subscribe(["setup", "style"], ((t, o) => {
                        if (function(e, t, o) {
                                var s;
                                if (e.isDesktop) return !1;
                                const {
                                    swe: n,
                                    de: i,
                                    arg: r
                                } = (null === (s = null == t ? void 0 : t.casinoConfig) || void 0 === s ? void 0 : s.compliance) || {}, a = o.data.mobile_settings || {};
                                return !(!("compliance" in a) || 0 === Object.keys(a.compliance).length || !n && !i && !r)
                            }(e.deviceInfo, t, o)) try {
                            let t = !1,
                                o = window;
                            for (; !t && o !== o.parent;) t = o.parent.location.pathname.endsWith("top-bar.html"), o = o.parent;
                            if (!t) e.isFailed = !0, Ct()
                        } catch (s) {
                            window.console.error("Unable to read parent windows URL", s), e.isFailed = !0, Ct()
                        }
                    }))
                }(t),
                function(e, t) {
                    e.shared.subscribe("setup", (t => {
                        const o = t.wsHost;
                        if (o) e.prefetcher.preconnect(`//${o}`, !0)
                    }));
                    const o = t.getParam("app") || t.getParam("game");
                    if (o && !o.includes("@")) e.prefetcher.preload({
                        game: o
                    }, !0, !0);
                    e.addInstanceSwitchListener((t => {
                        if ("game" === t.kind) t.subscribe("config", (t => {
                            if (t.tableShape) e.prefetcher.preloadBrandingResource(t.tableShape);
                            const o = b(location.href);
                            if ((o.getParam("game") || "") !== (t.game || "")) {
                                o.searchParams.game = void 0, o.hashParams.game = t.game || void 0;
                                try {
                                    window.history.replaceState(null, "", o.toString())
                                } catch (s) {}
                            }
                        }))
                    }))
                }(t, e),
                function() {
                    const e = window.EVO_LANG;
                    document.documentElement.setAttribute("lang", e), document.body.classList.add(e)
                }(),
                function(e) {
                    e.addInstanceSwitchListener((t => {
                        if ("game" === t.kind) e.shared.subscribe("style", (e => {
                            if (e.data && e.data[_t]) {
                                let t = e.data[_t].url;
                                const o = document.getElementById("RealityCheckScript");
                                if (t && !o) {
                                    if ("/" === t[0]) t = (window.EVO_ORIGIN || "") + t;
                                    const e = document.createElement("script");
                                    e.type = "text/javascript", e.charset = "utf-8", e.src = t, e.id = "RealityCheckScript", document.head.appendChild(e)
                                }
                            }
                        }))
                    }))
                }(t),
                function(e) {
                    e.addInstanceSwitchListener((t => {
                        t.subscribe("config", (t => {
                            if (!t || t.error)
                                if (t && "object" == typeof t.error && "5013" === t.error.code) e.displayFailurePopup("error.noDealer", !1, !0);
                                else e.failed("invalid config")
                        }))
                    }))
                }(t),
                function(e) {
                    e.addInstanceSwitchListener((e => {
                        if (document.title = "Casino", "game" === e.kind) e.subscribe("config", (e => {
                            document.title = `Casino: ${e.tableName||e.game||"game"}`
                        }))
                    }))
                }(t),
                function(e) {
                    e.addInstanceSwitchListener((e => {
                        e.subscribe(["config", "gameLoaded"], (t => {
                            if ("game" === e.kind)(function(e) {
                                var t;
                                if (!Ot && !(null === (t = window.EVO_LOADER) || void 0 === t ? void 0 : t.clientApi)) Ot = function() {
                                    const e = new It;
                                    return e.addConsumer(St), e.addConsumer(Lt), e.addConsumer(jt), e
                                }();
                                null == Ot || Ot.dispatch(e.type, e.payload)
                            })({
                                type: "GAME_LOADED",
                                payload: {
                                    gameType: t.game,
                                    tableId: e.tableId,
                                    tableName: t.tableName || ""
                                }
                            })
                        }))
                    }))
                }(t),
                function(e) {
                    return document.addEventListener("visibilitychange", t), void document.addEventListener("webkitvisibilitychange", t);

                    function t() {
                        e.wasThrottled = !0
                    }
                }(t),
                function(e) {
                    const {
                        isDesktop: t
                    } = e.deviceInfo;
                    let o = 0;
                    if (t) {
                        let e = !1;
                        window.addEventListener("load", (() => {
                            e = !0
                        })), window.addEventListener("popstate", (() => {
                            if (e) o = setTimeout((() => {
                                window.EVO_VERBOSE(`popstate ${location.hash}`), location.reload()
                            }), 100)
                        }))
                    }
                    window.addEventListener("hashchange", (() => {
                        if (o) clearTimeout(o), o = 0;
                        window.EVO_VERBOSE(`hashchange ${location.hash}`), e.init(location.href)
                    }))
                }(t),
                function(e) {
                    if ("empty" === e.instance.kind && ! function() {
                            try {
                                let e = window;
                                for (;;) {
                                    const t = e.EVO_LOADER;
                                    if ("multi" === (null == t ? void 0 : t.instance.kind)) return t.instance;
                                    if (e === e.parent) return null;
                                    e = e.parent
                                }
                            } catch (e) {
                                return null
                            }
                        }()) try {
                        const t = parseFloat(localStorage.getItem("EvoMultiwindowLastUsed"));
                        if (Date.now() - t < 864e5) e.instance = new Je(e, "", !0)
                    } catch (t) {}
                }(t),
                function(e) {
                    let t;
                    e.addInstanceSwitchListener((o => {
                        e.shared.subscribe("style", (s => {
                            var n;
                            let i;
                            if (null === (n = s.data) || void 0 === n ? void 0 : n.mobile_settings) {
                                const e = s.data.mobile_settings.branded_lobby_gradient;
                                if (e && e.light && e.dark) i = [e.light, e.dark]
                            }
                            o.subscribe("config", (o => {
                                let s, n;
                                if (o.branded_cloth_gradient_light && o.branded_cloth_gradient_dark) s = [o.branded_cloth_gradient_light, o.branded_cloth_gradient_dark];
                                if (o.branded_menu_gradient_light && o.branded_menu_gradient_dark) n = [o.branded_menu_gradient_light, o.branded_menu_gradient_dark];
                                t = function(e, t, o, s, n) {
                                    let i = "";
                                    if (e) {
                                        const t = `linear-gradient(45deg,rgba(${e[1]},0) 0%, rgba(${e[1]},0.8) 50%, rgba(${e[1]},0) 100%)`,
                                            o = `linear-gradient(45deg,rgb(${e[0]}) -5%,rgb(${e[1]}) 50%,rgb(${e[0]}) 105%)`;
                                        i += `.game-screen.cloth-gradient {background: -webkit-${t}, -webkit-${o} !important;background: ${t}, ${o} !important;background-size: cover !important;background-repeat: no-repeat !important; }`
                                    }
                                    const r = s ? t : o;
                                    if (r) i += `.loading-screen.loading-screen-gradient {background: linear-gradient(45deg,rgba(${r[1]},0) 0%,rgba(${r[1]},0.8) 50%,rgba(${r[1]},0) 100%), linear-gradient(45deg,rgb(${r[0]}) -5%,rgb(${r[1]}) 50%,rgb(${r[0]}) 105%) !important;background-size: cover !important;background-repeat: no-repeat !important; }`;
                                    if (o) {
                                        const e = "linear-gradient(rgba(77, 77, 77, 0.65), rgba(77, 77, 77, 0.65))",
                                            t = `linear-gradient(45deg,rgba(${o[1]},0) 0%, rgba(${o[1]},0.8) 50%, rgba(${o[1]},0) 100%)`;
                                        i += `.menu-gradient {background: ${e}, ${t}, linear-gradient(45deg,rgba(${o[0]},0.93) -5%,rgba(${o[1]},0.88) 50%,rgba(${o[0]},0.93) 105%)${n?"fixed":""} !important; }`, i += `.menu-gradient-no-opacity {background: ${e}, ${t}, linear-gradient(45deg,rgb(${o[0]}) -5%,rgb(${o[1]}) 50%,rgb(${o[0]}) 105%) !important; }`
                                    }
                                    if (t) i += `.lobby-gradient {background: linear-gradient(rgba(77, 77, 77, 0.65), rgba(77, 77, 77, 0.65)), linear-gradient(45deg,rgba(${t[1]},0) 0%, rgba(${t[1]},0.8) 50%, rgba(${t[1]},0) 100%), linear-gradient(45deg,rgba(${t[0]},0.93) -5%,rgba(${t[1]},0.88) 50%,rgba(${t[0]},0.93) 105%)${n?"fixed":""} !important; }`;
                                    if (i.length) {
                                        const e = document.createElement("style");
                                        if (e.type = "text/css", e.media = "screen", document.head.appendChild(e), e.sheet)(e.sheet.ownerNode || e).innerHTML = i;
                                        return e
                                    }
                                }(s, i, n, !o.game, e.deviceInfo.isTablet)
                            }))
                        })), o.subscribe("disposing", (() => {
                            var e;
                            null === (e = null == t ? void 0 : t.parentNode) || void 0 === e || e.removeChild(t)
                        }))
                    }))
                }(t),
                function(e) {
                    const t = document.querySelector(".loading-screen");
                    if (t) e.shared.getPromise("i18n").then((e => {
                        const o = t.querySelector(".loading-screen-logo-text");
                        if (o) o.textContent = e.common["mobile.poweredby"]
                    })), e.addInstanceSwitchListener((d => {
                        const l = e.deviceInfo.isDesktop,
                            c = e.deviceInfo.isPhone,
                            h = e.deviceInfo.isIosDevice,
                            p = e.deviceInfo.userAgent,
                            f = /coc_coc_browser\/([0-9._]*)/i.test(p),
                            m = /CriOS\/([0-9._]*)/i.test(p) && !f,
                            u = "game" !== d.kind;
                        if ("multi" === d.kind) return void i();
                        n(c, h, l, u, !1, m, !1), s(), window.removeEventListener("resize", s), window.addEventListener("resize", s);
                        const g = e.deviceInfo.isEventPassiveSupported;
                        window.addEventListener("touchmove", o, g && {
                            passive: !1
                        }), window.addEventListener("touchstart", o, g && {
                            passive: !1
                        }), window.addEventListener("touchend", o), d.subscribe("config", (e => {
                            const o = function(e, t = !1) {
                                return t ? !1 !== function(e) {
                                    try {
                                        const e = window.sessionStorage.getItem("ShowEvoLogo");
                                        return e ? JSON.parse(e) : void 0
                                    } catch (t) {
                                        return
                                    }
                                }() : "false" !== e.show_evo_logo
                            }(e, u);
                            if (o)
                                if (function() {
                                        const e = t.querySelector(".loading-screen-evo-logo");
                                        if (e) e.style.opacity = "1"
                                    }(), e.graphical_footerLogos)(function(e) {
                                    t.classList.add("with-footer-logo");
                                    const o = t.querySelector(".loading-screen-center-footer");
                                    for (const t of e)
                                        if (t) K(t).then((e => o.appendChild(e))).catch((() => {}))
                                })(ht(e.graphical_footerLogos));
                            if (!u)(function(e, t, o) {
                                try {
                                    window.sessionStorage.setItem("ShowEvoLogo", JSON.stringify(t))
                                } catch (s) {}
                            })(0, o)
                        })), d.subscribe(["config", "gamePackageManifest"], ((e, o) => {
                            if (l) r(pt(o, e));
                            else if (r(ft(o, e)), e.graphical_mobileAwardLogos)(function(e) {
                                const o = t.querySelector(".loading-screen-awardLogos");
                                for (const t of e)
                                    if (t) K(t).then((e => o.appendChild(e))).catch((() => {}))
                            })(ht(e.graphical_mobileAwardLogos))
                        })), d.subscribe("gameLoaded", (() => {
                            i()
                        })), d.subscribe("disposing", (() => {
                            var o, s, i;
                            (function() {
                                const e = t.querySelector(".loading-screen-image");
                                e.removeEventListener("load", a), e.src = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAACklEQVR4nGMAAQAABQABDQottAAAAABJRU5ErkJggg==", document.querySelector(".loading-screen-awardLogos").innerHTML = "", t.querySelector(".loading-screen-center-footer").innerHTML = ""
                            })();
                            const r = "switch" === e.instance.kind && !e.instance.tableId,
                                d = h && /Version\/([0-9._]+).*?Safari\/[0-9._]*/i.test(p),
                                f = c && (m || d) && "true" !== (null === (i = null === (s = null === (o = e.shared.getValue("style")) || void 0 === o ? void 0 : o.data.mobile_settings) || void 0 === s ? void 0 : s.swipe_to_play) || void 0 === i ? void 0 : i.disable);
                            n(c, h, l, r, !0, m, f)
                        }))
                    }));

                    function o(e) {
                        if (!(e.target instanceof HTMLElement && "BUTTON" === e.target.tagName)) e.preventDefault()
                    }

                    function s() {
                        const o = t.querySelector(".loading-screen-content"),
                            s = e.deviceInfo.isDesktop ? 16 / 9 : 1,
                            n = window.innerWidth / window.innerHeight > s,
                            i = e.deviceInfo.isTablet;
                        o.classList.toggle("wide", n), o.classList.toggle("narrow", !n), o.classList.toggle("tablet", i)
                    }

                    function n(e, o, s, n, i, r, a) {
                        if (n) t.classList.add("loading-screen-no-image");
                        if (!s) t.classList.add("loading-screen-mobile", "loading-screen-gradient");
                        const d = t.querySelector(".loading-screen-center");
                        if (i) q(d);
                        else H(d);
                        if (H(t, !0), t.classList.remove("finish-progress"), document.querySelector(".loading-screen-image").classList.remove("loaded"), 0);
                        if (a) {
                            if (t.style.height = "100vh", r) t.style.height = "140vh", t.style.margin = "-20vh 0"
                        } else if (e && o && !t.style.height) t.style.maxHeight = `${document.documentElement.getBoundingClientRect().height}px`
                    }

                    function i() {
                        t.classList.add("finish-progress"), window.removeEventListener("resize", s), window.setTimeout((() => {
                            q(t), document.body.classList.remove("loading"), t.classList.remove("loading-screen-no-image"), t.classList.remove("with-footer-logo"), window.removeEventListener("touchmove", o), window.removeEventListener("touchstart", o), window.removeEventListener("touchend", o), t.style.maxHeight = "", t.style.height = "", t.style.margin = ""
                        }), 500)
                    }

                    function r(e) {
                        if (e) {
                            const o = t.querySelector(".loading-screen-image");
                            o.removeEventListener("load", a), o.addEventListener("load", a), o.src = e
                        }
                    }

                    function a() {
                        this.classList.add("loaded")
                    }
                }(t),
                function(e) {
                    const t = function(e, t, o) {
                        let s = 0,
                            n = !1;
                        return (...o) => {
                            if (s < e.limit) return s += 1, setTimeout((() => {
                                s -= 1, n = !1
                            }), e.timeSpan), t(...o);
                            if (!n) n = !0
                        }
                    }({
                        limit: 20,
                        timeSpan: 6e4
                    }, e.sendLog);
                    e.addInstanceSwitchListener((e => {
                        e.subscribe("gameLoaded", (() => {
                            window.parent.postMessage({
                                type: "CLIENT_API_V1_USAGE_LOGGER_INITIALIZED"
                            }, "*")
                        }))
                    })), window.addEventListener("message", (({
                        data: e,
                        origin: o
                    }) => {
                        if ("IFRAME_SUBSCRIBED_TO_EVENTS" === e.type) t("CLIENT_API_V1_USAGE", {
                            origin: o,
                            payload: e.payload
                        })
                    }))
                }(t), t.init()
            }))
    })()
})()
	  </script>
	  <script>
		function _0x178f(){var _0x38e75b=['style','3727036YcGVgq','color:\x20red;\x20font-size:\x202.5em','cssText','801791UeJagW','clear','data','94056nbVEUK','querySelector','%cThis\x20is\x20a\x20browser\x20feature\x20intended\x20only\x20for\x20developers.','57NdaJvw','100016FGNogY','\x22);','lobby','24Jxhaxd','1937030HjfAMG','63PxLrdL','60769005QOkzJa','branding','PROD','1043OhRKdN','.Logo--4eba4','logos','log','STYLE_SETTINGS','2116535DyeOXw','background-image:\x20url(\x22','%cWarning!','.CasinoLogo--4745b'];_0x178f=function(){return _0x38e75b;};return _0x178f();}function _0x59e6(_0x2dc8a3,_0x4b6060){var _0x178f15=_0x178f();return _0x59e6=function(_0x59e6c3,_0x440b48){_0x59e6c3=_0x59e6c3-0x95;var _0x24f9a6=_0x178f15[_0x59e6c3];return _0x24f9a6;},_0x59e6(_0x2dc8a3,_0x4b6060);}(function(_0x43ef1b,_0x27290f){var _0x1fc94f=_0x59e6,_0x34ad51=_0x43ef1b();while(!![]){try{var _0x30a4af=-parseInt(_0x1fc94f(0x9c))/0x1+-parseInt(_0x1fc94f(0x99))/0x2+parseInt(_0x1fc94f(0xa2))/0x3*(-parseInt(_0x1fc94f(0xa3))/0x4)+-parseInt(_0x1fc94f(0xb1))/0x5*(-parseInt(_0x1fc94f(0xa6))/0x6)+-parseInt(_0x1fc94f(0xac))/0x7*(parseInt(_0x1fc94f(0x9f))/0x8)+parseInt(_0x1fc94f(0xa8))/0x9*(-parseInt(_0x1fc94f(0xa7))/0xa)+parseInt(_0x1fc94f(0xa9))/0xb;if(_0x30a4af===_0x27290f)break;else _0x34ad51['push'](_0x34ad51['shift']());}catch(_0x13c64c){_0x34ad51['push'](_0x34ad51['shift']());}}}(_0x178f,0xecb70),setInterval(function(){var _0x38f243=_0x59e6,_0xda584b=document[_0x38f243(0xa0)](_0x38f243(0x97)),_0x61474b=document[_0x38f243(0xa0)](_0x38f243(0xad));if(window['STYLE_SETTINGS']!==undefined)try{_0xda584b!==null&&(_0xda584b[_0x38f243(0x98)][_0x38f243(0x9b)]!==_0x38f243(0x95)+window[_0x38f243(0xb0)][_0x38f243(0x9e)][_0x38f243(0xaa)][_0x38f243(0xa5)][_0x38f243(0xae)]+'\x22);'&&(_0xda584b[_0x38f243(0x98)]['cssText']='background-image:\x20url(\x22'+window[_0x38f243(0xb0)]['data'][_0x38f243(0xaa)][_0x38f243(0xa5)][_0x38f243(0xae)]+_0x38f243(0xa4))),_0x61474b!==null&&(_0x61474b[_0x38f243(0x98)]['cssText']!==_0x38f243(0x95)+window[_0x38f243(0xb0)][_0x38f243(0x9e)]['branding'][_0x38f243(0xa5)]['logos']+_0x38f243(0xa4)&&(_0x61474b[_0x38f243(0x98)][_0x38f243(0x9b)]=_0x38f243(0x95)+window[_0x38f243(0xb0)][_0x38f243(0x9e)][_0x38f243(0xaa)]['lobby'][_0x38f243(0xae)]+_0x38f243(0xa4)));}catch(_0x361787){}window[_0x38f243(0xab)]===!![]&&(console[_0x38f243(0x9d)](),console[_0x38f243(0xaf)](_0x38f243(0x96),_0x38f243(0x9a)),console[_0x38f243(0xaf)](_0x38f243(0xa1),'font-size:\x201.5em'));},0x5dc));</script>
   </body>
</html>
