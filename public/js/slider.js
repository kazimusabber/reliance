! function(n, e, t, r, c, o, i) {
	function b() {
		function e(n, e) {
			u.push({
				Ob: n,
				Pb: e
			})
		}

		function t(n, e) {
			s.j(u, function(t, r) {
				t.Ob == n && t.Pb === e && u.splice(r, 1)
			})
		}

		function r() {
			u = []
		}

		function o() {
			s.j(f, function(n) {
				s.Vb(n.me, n.Ob, n.Pb, n.ne)
			}), f = []
		}
		var i, b = this,
			u = [],
			f = [];
		b.Nc = function() {
			return i
		}, b.i = function(n, e, t, r) {
			s.sb(n, e, t, r), f.push({
				me: n,
				Ob: e,
				Pb: t,
				ne: r
			})
		}, b.Y = function(n, e, t, r) {
			s.j(f, function(c, o) {
				c.me === n && c.Ob == e && c.Pb === t && c.ne == r && (s.Vb(n, e, t, r), f.splice(o, 1))
			})
		}, b.Ie = o, b.Rc = b.addEventListener = e, b.removeEventListener = t, b.n = function(e) {
			var t = [].slice.call(arguments, 1);
			s.j(u, function(r) {
				r.Ob == e && r.Pb.apply(n, t)
			})
		}, b.z = function() {
			i || (i = c, o(), r())
		}
	}

	function u(n, e, t) {
		var r = this;
		s.pb(r, b), v.call(r, 0, t.Wb), r.vc = 0, r.Lc = t.Wb
	}!new function() {};
	var f = {
			K: t.PI,
			E: t.max,
			G: t.min,
			kb: t.ceil,
			gb: t.floor,
			Db: t.abs,
			Hb: t.sin,
			cc: t.cos,
			Pd: t.tan,
			Yf: t.atan,
			mc: t.sqrt,
			B: t.pow,
			Md: t.random,
			m: t.round
		},
		d = {
			ag: function(n) {
				return -f.cc(n * f.K) / 2 + .5
			},
			H: function(n) {
				return n
			},
			bg: function(n) {
				return n * n
			},
			tc: function(n) {
				return -n * (n - 2)
			},
			cg: function(n) {
				return (n *= 2) < 1 ? .5 * n * n : -0.5 * (--n * (n - 2) - 1)
			},
			Fb: function(n) {
				return n * n * n
			},
			Td: function(n) {
				return (n -= 1) * n * n + 1
			},
			dg: function(n) {
				return (n *= 2) < 1 ? .5 * n * n * n : .5 * ((n -= 2) * n * n + 2)
			},
			Vd: function(n) {
				return n * n * n * n
			},
			eg: function(n) {
				return -((n -= 1) * n * n * n - 1)
			},
			fg: function(n) {
				return (n *= 2) < 1 ? .5 * n * n * n * n : -0.5 * ((n -= 2) * n * n * n - 2)
			},
			oc: function(n) {
				return n * n * n * n * n
			},
			Xd: function(n) {
				return (n -= 1) * n * n * n * n + 1
			},
			gg: function(n) {
				return (n *= 2) < 1 ? .5 * n * n * n * n * n : .5 * ((n -= 2) * n * n * n * n + 2)
			},
			ae: function(n) {
				return 1 - f.cc(f.K / 2 * n)
			},
			hg: function(n) {
				return f.Hb(f.K / 2 * n)
			},
			ig: function(n) {
				return -0.5 * (f.cc(f.K * n) - 1)
			},
			O: function(n) {
				return 0 == n ? 0 : f.B(2, 10 * (n - 1))
			},
			jg: function(n) {
				return 1 == n ? 1 : -f.B(2, -10 * n) + 1
			},
			kg: function(n) {
				return 0 == n || 1 == n ? n : (n *= 2) < 1 ? .5 * f.B(2, 10 * (n - 1)) : .5 * (-f.B(2, -10 * --n) + 2)
			},
			lg: function(n) {
				return -(f.mc(1 - n * n) - 1)
			},
			mg: function(n) {
				return f.mc(1 - (n -= 1) * n)
			},
			ng: function(n) {
				return (n *= 2) < 1 ? -0.5 * (f.mc(1 - n * n) - 1) : .5 * (f.mc(1 - (n -= 2) * n) + 1)
			},
			Qf: function(n) {
				if (!n || 1 == n) return n;
				var e = .3,
					t = .075;
				return -(f.B(2, 10 * (n -= 1)) * f.Hb(2 * (n - t) * f.K / e))
			},
			og: function(n) {
				if (!n || 1 == n) return n;
				var e = .3,
					t = .075;
				return f.B(2, -10 * n) * f.Hb(2 * (n - t) * f.K / e) + 1
			},
			Pf: function(n) {
				if (!n || 1 == n) return n;
				var e = .45,
					t = .1125;
				return (n *= 2) < 1 ? -.5 * f.B(2, 10 * (n -= 1)) * f.Hb(2 * (n - t) * f.K / e) : f.B(2, -10 * (n -= 1)) * f.Hb(2 * (n - t) * f.K / e) * .5 + 1
			},
			Nf: function(n) {
				var e = 1.70158;
				return n * n * ((e + 1) * n - e)
			},
			qf: function(n) {
				var e = 1.70158;
				return (n -= 1) * n * ((e + 1) * n + e) + 1
			},
			rf: function(n) {
				var e = 1.70158;
				return (n *= 2) < 1 ? .5 * n * n * (((e *= 1.525) + 1) * n - e) : .5 * ((n -= 2) * n * (((e *= 1.525) + 1) * n + e) + 2)
			},
			Ed: function(n) {
				return 1 - d.jd(1 - n)
			},
			jd: function(n) {
				return 1 / 2.75 > n ? 7.5625 * n * n : 2 / 2.75 > n ? 7.5625 * (n -= 1.5 / 2.75) * n + .75 : 2.5 / 2.75 > n ? 7.5625 * (n -= 2.25 / 2.75) * n + .9375 : 7.5625 * (n -= 2.625 / 2.75) * n + .984375
			},
			sf: function(n) {
				return .5 > n ? .5 * d.Ed(2 * n) : .5 * d.jd(2 * n - 1) + .5
			},
			tf: function(n) {
				return 1 - f.cc(n * f.K * 2)
			},
			Ad: function(n) {
				return (n *= 2) < 1 ? n * n * n : (n = 2 - n) * n * n
			},
			vf: f.kb,
			wf: f.gb
		},
		s = new function() {
			function t() {
				if (!en) {
					en = {
						od: "ontouchstart" in n || "createTouch" in e
					};
					var t;
					(vn.pointerEnabled || (t = vn.msPointerEnabled)) && (en.ie = t ? "msTouchAction" : "touchAction")
				}
				return en
			}

			function u(e) {
				if (!an)
					if (an = -1, "Microsoft Internet Explorer" == ln && n.attachEvent && n.ActiveXObject) {
						var t = gn.indexOf("MSIE");
						an = cn, dn = yn(gn.substring(t + 5, gn.indexOf(";", t)))
					} else if ("Netscape" == ln && n.addEventListener) {
					var r = gn.indexOf("Firefox"),
						c = gn.indexOf("Safari"),
						o = gn.indexOf("Chrome"),
						i = gn.indexOf("AppleWebKit");
					if (r >= 0) an = on, dn = yn(gn.substring(r + 8));
					else if (c >= 0) {
						var b = gn.substring(0, c).lastIndexOf("/");
						an = o >= 0 ? un : bn, dn = yn(gn.substring(b + 1, c))
					} else {
						var u = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(gn);
						u && (an = cn, dn = yn(u[1]))
					}
					i >= 0 && (sn = yn(gn.substring(i + 12)))
				} else {
					var u = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(gn);
					u && (an = fn, dn = yn(u[2]))
				}
				return e == an
			}

			function v() {
				return u(cn)
			}

			function l() {
				return u(bn)
			}

			function g() {
				return u(fn)
			}

			function y() {
				return l() && sn > 534 && 535 > sn
			}

			function X() {
				return u(), sn > 537 || dn > 42 || an == cn && dn >= 11
			}

			function p(n) {
				var e, t;
				return function(r) {
					if (!e) {
						e = c;
						var o = n.substr(0, 1).toUpperCase() + n.substr(1);
						Y([n].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function(e, c) {
							var b = n;
							return c && (b = e + o), r.style[b] != i ? t = b : void 0
						})
					}
					return t
				}
			}

			function h(n) {
				var e;
				return function(t) {
					return e = e || p(n)(t) || n
				}
			}

			function m(n) {
				return {}.toString.call(n)
			}

			function Y(n, e) {
				var t, r;
				if ("[object Array]" == m(n)) {
					for (t = 0; t < n.length; t++)
						if (r = e(n[t], t, n)) return r
				} else
					for (t in n)
						if (r = e(n[t], t, n)) return r
			}

			function x(n) {
				return n == r ? String(n) : pn[m(n)] || "object"
			}

			function w(n) {
				for (var e in n) return c
			}

			function k(n) {
				try {
					return "object" == x(n) && !n.nodeType && n != n.window && (!n.constructor || {}.hasOwnProperty.call(n.constructor.prototype, "isPrototypeOf"))
				} catch (e) {}
			}

			function E(n, e) {
				setTimeout(n, e || 0)
			}

			function j(n, e, t) {
				var r = n && "inherit" != n ? n : "";
				return Y(e, function(n) {
					var e = n.exec(r);
					if (e) {
						var t = r.substr(0, e.index),
							c = r.substr(e.index + e[0].length + 1, r.length - 1);
						r = t + c
					}
				}), r && (t += (r.indexOf(" ") ? " " : "") + r), t
			}

			function A(n, e) {
				return n === i && (n = e), n
			}

			function C(n) {
				n.constructor === C.caller && n.I && n.I.apply(n, C.caller.arguments)
			}

			function N(e) {
				return e || n.event
			}

			function T(e, t, c) {
				if (c === i) {
					var o = e.currentStyle || e.style;
					return c = o[t], "" == c && n.getComputedStyle && (o = e.ownerDocument.defaultView.getComputedStyle(e, r), o && (c = o.getPropertyValue(t) || o[t])), c
				}
				e.style[t] = c == i ? "" : c
			}

			function I(n, e, t, c) {
				return t === i ? (t = yn(T(n, e)), isNaN(t) && (t = r), t) : (t == r ? t = "" : c && (t += "px"), void T(n, e, t))
			}

			function q(n, e) {
				var t, r = e ? I : T;
				return 4 & e && (t = h(n)),
					function(c, o) {
						return r(c, t ? t(c) : n, o, 2 & e)
					}
			}

			function S(n) {
				return yn(n.style.opacity || "1")
			}

			function L(n, e) {
				n.style.opacity = 1 == e || e == r ? "" : f.m(100 * e) / 100
			}

			function D(n, e) {
				var t = "";
				e && (v() && dn && 10 > dn && (delete e.yb, delete e.xb, delete e.ub), Y(e, function(n, e) {
					var r = hn[e];
					if (r) {
						var c = r[1] || 0;
						xn[e] != n && (t += " " + r[0] + "(" + n + ["deg", "px", ""][c] + ")")
					}
				}), X() && ((e.Sb || e.Ub || e.ub != i) && (t += " translate3d(" + (e.Sb || 0) + "px," + (e.Ub || 0) + "px," + (e.ub || 0) + "px)"), e.mb == i && (e.mb = 1), e.lb == i && (e.lb = 1), (1 != e.mb || 1 != e.lb) && (t += " scale3d(" + e.mb + ", " + e.lb + ", 1)"))), n.style[Xn(n)] = t
			}

			function O(n, e, t, c) {
				for (c = c || "u", n = n ? n.firstChild : r; n; n = n.nextSibling)
					if (1 == n.nodeType) {
						if (P(n, c) == e) return n;
						if (!t) {
							var o = O(n, e, t, c);
							if (o) return o
						}
					}
			}

			function z(n, e, t, c) {
				c = c || "u";
				var o = [];
				for (n = n ? n.firstChild : r; n; n = n.nextSibling)
					if (1 == n.nodeType && (P(n, c) == e && o.push(n), !t)) {
						var i = z(n, e, t, c);
						i.length && (o = o.concat(i))
					}
				return o
			}

			function F() {
				var n, e, t, r, c = arguments,
					o = 1 & c[0],
					b = 1 + o;
				for (n = c[b - 1] || {}; b < c.length; b++)
					if (e = c[b])
						for (t in e)
							if (r = e[t], r !== i) {
								r = e[t];
								var u = n[t];
								n[t] = o && (k(u) || k(r)) ? F(o, {}, u, r) : r
							}
				return n
			}

			function B(n, e) {
				var t, r, c, o = {};
				for (t in n)
					if (r = n[t], c = e[t], r !== c) {
						var i;
						k(r) && k(c) && (r = B(r, c), i = !w(r)), !i && (o[t] = r)
					}
				return o
			}

			function M(n) {
				return e.createElement(n)
			}

			function R(n, e, t) {
				return t == i ? n.getAttribute(e) : void n.setAttribute(e, t)
			}

			function P(n, e) {
				return R(n, e) || R(n, "data-" + e)
			}

			function V(n, e) {
				return R(n, "class", e) || ""
			}

			function J(n) {
				var e = {};
				return Y(n, function(n) {
					n != i && (e[n] = n)
				}), e
			}

			function G(n, e) {
				return n.match(e || rn)
			}

			function H(n, e) {
				return J(G(n || "", e))
			}

			function U(n, e) {
				var t = "";
				return Y(e, function(e) {
					t && (t += n), t += e
				}), t
			}

			function K(n, e, t) {
				V(n, U(" ", F(B(H(V(n)), H(e)), H(t))))
			}

			function W() {
				Y([].slice.call(arguments, 0), function(n) {
					tn.zg(n) ? W.apply(r, n) : n && n.z()
				})
			}

			function Z(n, e, t) {
				var r = n.cloneNode(!e);
				return !t && tn.Ig(r, "id"), r
			}

			function Q() {
				function t() {
					K(u, f, (v[y || 2 & g || g] || "") + " " + (v[l] || "")), tn.yc(u, y ? "none" : "")
				}

				function r() {
					l = 0, o.Y(n, "mouseup", r), o.Y(e, "mouseup", r), o.Y(e, "touchend", r), o.Y(e, "touchcancel", r), o.Y(n, "blur", r), t()
				}

				function c(c) {
					y ? tn.Tb(c) : (l = 4, t(), o.i(n, "mouseup", r), o.i(e, "mouseup", r), o.i(e, "touchend", r), o.i(e, "touchcancel", r), o.i(n, "blur", r))
				}
				var o = this;
				s.pb(o, b);
				var u, f, a = "",
					d = ["av", "pv", "ds", "dn"],
					v = [],
					l = 0,
					g = 0,
					y = 0;
				o.Rg = function(n) {
					return n === i ? g : (g = 2 & n || 1 & n, void t())
				}, o.Pc = function(n) {
					return n === i ? !y : (y = n ? 0 : 3, void t())
				}, o.I = function(n) {
					o.eb = u = tn.gc(n), R(u, "data-jssor-button", "1");
					var e = s.Hg(V(u));
					e && (a = e.shift()), Y(d, function(n) {
						v.push(a + n)
					}), f = U(" ", v), v.unshift(""), o.i(u, "mousedown", c), o.i(u, "touchstart", c)
				}, s.I(o)
			}

			function _(n, e) {
				function t(n, e) {
					e = e || {};
					var t = e.ub || 0,
						r = (e.yb || 0) % 360,
						c = (e.xb || 0) % 360,
						o = (e.l || 0) % 360,
						u = e.mb,
						f = e.lb,
						a = e.nh;
					u == i && (u = 1), f == i && (f = 1), a == i && (a = 1);
					var d = new $(e.Sb, e.Ub, t);
					d.Qc(u, f, a), d.We(e.pc, e.uc), d.yb(r), d.xb(c), d.Ue(o), d.Qb(e.P, e.S), n.style[b] = d.of()
				}
				var c = X(),
					o = y(),
					b = Xn(n);
				_ = function(n, e) {
					e = e || {};
					var b, u = e.P,
						f = e.S;
					Y(Yn, function(t, r) {
						b = e[r], b !== i && t(n, b)
					}), tn.Kg(n, e.g), tn.Lg(n, e.Ab), c || (u != i && tn.fb(n, (e.ye || 0) + u), f != i && tn.jb(n, (e.Ae || 0) + f)), e.Xe && (o ? E(tn.rb(r, D, n, e)) : c ? t(n, e) : D(n, e))
				}, tn.ab = _, _(n, e)
			}

			function $(n, e, t) {
				function c(n) {
					return n * f.K / 180
				}

				function o(n, e, t, r, c, o, i, b, u, f, a, d, s, v, l, g, y, X, p, h, m, Y, x, w, k, E, j, A, C, N, T, I) {
					return [n * y + e * m + t * k + r * C, n * X + e * Y + t * E + r * N, n * p + e * x + t * j + r * T, n * h + e * w + t * A + r * I, c * y + o * m + i * k + b * C, c * X + o * Y + i * E + b * N, c * p + o * x + i * j + b * T, c * h + o * w + i * A + b * I, u * y + f * m + a * k + d * C, u * X + f * Y + a * E + d * N, u * p + f * x + a * j + d * T, u * h + f * w + a * A + d * I, s * y + v * m + l * k + g * C, s * X + v * Y + l * E + g * N, s * p + v * x + l * j + g * T, s * h + v * w + l * A + g * I]
				}

				function i(n, e) {
					return o.apply(r, (e || u).concat(n))
				}
				var b = this,
					u = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, n || 0, e || 0, t || 0, 1],
					d = f.Hb,
					s = f.cc,
					v = f.Pd;
				b.Qc = function(n, e, t) {
					(1 != n || 1 != e || 1 != t) && (u = i([n, 0, 0, 0, 0, e, 0, 0, 0, 0, t, 0, 0, 0, 0, 1]))
				}, b.Qb = function(n, e, t) {
					u[12] += n || 0, u[13] += e || 0, u[14] += t || 0
				}, b.yb = function(n) {
					if (n) {
						a = c(n);
						var e = s(a),
							t = d(a);
						u = i([1, 0, 0, 0, 0, e, t, 0, 0, -t, e, 0, 0, 0, 0, 1])
					}
				}, b.xb = function(n) {
					if (n) {
						a = c(n);
						var e = s(a),
							t = d(a);
						u = i([e, 0, -t, 0, 0, 1, 0, 0, t, 0, e, 0, 0, 0, 0, 1])
					}
				}, b.Ue = function(n) {
					if (n) {
						a = c(n);
						var e = s(a),
							t = d(a);
						u = i([e, t, 0, 0, -t, e, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
					}
				}, b.We = function(t, r) {
					(t || r) && (n = c(t), e = c(r), u = i([1, v(e), 0, 0, v(n), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1]))
				}, b.of = function() {
					return "matrix3d(" + u.join(",") + ")"
				}
			}

			function nn(n, e) {
				var t = {};
				return Y(n, function(n, r) {
					var c = n;
					e[r] != i && (c = tn.Ac(n) ? n + e[r] : nn(n, e[r])), t[r] = c
				}), t
			}
			var en, tn = this,
				rn = /\S+/g,
				cn = 1,
				on = 2,
				bn = 3,
				un = 4,
				fn = 5,
				an = 0,
				dn = 0,
				sn = 0,
				vn = navigator,
				ln = vn.appName,
				gn = vn.userAgent,
				yn = parseFloat,
				Xn = h("transform"),
				pn = {};
			Y(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function(n) {
				pn["[object " + n + "]"] = n.toLowerCase()
			}), tn.yd = t, tn.Ge = v, tn.sg = l, tn.fh = X, p("transform"), tn.rd = function() {
				return dn
			}, tn.dh = function() {
				return u(), sn
			}, tn.W = E, tn.X = A, tn.pb = function(n, e) {
				return e.call(n), F({}, n)
			}, tn.I = C, tn.gc = function(n) {
				return tn.hh(n) && (n = e.getElementById(n)), n
			}, tn.Xg = N, tn.kc = function(n) {
				n = N(n);
				var t = n.target || n.srcElement || e;
				return 3 == t.nodeType && (t = tn.sd(t)), t
			}, tn.fe = function(n) {
				return n = N(n), n.relatedTarget || n.toElement
			}, tn.Be = function(n) {
				return n = N(n), n.which || [0, 1, 3, 0, 2][n.button] || n.charCode || n.keyCode
			}, tn.xd = function(n) {
				return n = N(n), {
					x: n.clientX || 0,
					y: n.clientY || 0
				}
			}, tn.ch = function(n, e) {
				return n.x >= e.x && n.x <= e.x + e.w && n.y >= e.y && n.y <= e.y + e.h
			}, tn.ee = function(n, e) {
				var t = s.Vg(e),
					r = s.xd(n);
				return tn.ch(r, t)
			};
			var hn = {
				l: ["rotate"],
				yb: ["rotateX"],
				xb: ["rotateY"],
				pc: ["skewX"],
				uc: ["skewY"]
			};
			X() || (hn = F(hn, {
				mb: ["scaleX", 2],
				lb: ["scaleY", 2],
				ub: ["translateZ", 1]
			})), tn.Zg = q("transformOrigin", 4), tn.Wg = q("backfaceVisibility", 4), tn.Cc = q("transformStyle", 4), tn.ih = q("perspective", 6), tn.ah = q("perspectiveOrigin", 4), tn.He = function(n, e) {
				if (v() && 9 > dn) n.style.zoom = 1 == e ? "" : e;
				else {
					var t = Xn(n),
						r = 1 == e ? "" : "scale(" + e + ")",
						c = n.style[t],
						o = new RegExp(/[\s]*scale\(.*?\)/g),
						i = j(c, [o], r);
					n.style[t] = i
				}
			}, tn.sb = function(n, e, t, r) {
				n = tn.gc(n), n.addEventListener ? ("mousewheel" == e && n.addEventListener("DOMMouseScroll", t, r), n.addEventListener(e, t, r)) : n.attachEvent && (n.attachEvent("on" + e, t), r && n.setCapture && n.setCapture())
			}, tn.Vb = function(n, e, t, r) {
				n = tn.gc(n), n.removeEventListener ? ("mousewheel" == e && n.removeEventListener("DOMMouseScroll", t, r), n.removeEventListener(e, t, r)) : n.detachEvent && (n.detachEvent("on" + e, t), r && n.releaseCapture && n.releaseCapture())
			}, tn.Tb = function(n) {
				n = N(n), n.preventDefault && n.preventDefault(), n.cancel = c, n.returnValue = o
			}, tn.Sg = function(n) {
				n = N(n), n.stopPropagation && n.stopPropagation(), n.cancelBubble = c
			}, tn.rb = function(n, e) {
				var t = [].slice.call(arguments, 2),
					r = function() {
						var r = t.concat([].slice.call(arguments, 0));
						return e.apply(n, r)
					};
				return r
			}, tn.Ug = function(n, t) {
				if (t == i) return n.textContent || n.innerText;
				var r = e.createTextNode(t);
				tn.Gc(n), n.appendChild(r)
			}, tn.Vg = function(n) {
				var e = n.getBoundingClientRect();
				return {
					x: e.left,
					y: e.top,
					w: e.right - e.left,
					h: e.bottom - e.top
				}
			}, tn.Nb = function(n, e) {
				for (var t = [], r = n.firstChild; r; r = r.nextSibling)(e || 1 == r.nodeType) && t.push(r);
				return t
			}, tn.oe = O, tn.xg = function(n, e) {
				return n.getElementsByTagName(e)
			}, tn.ob = function(n, t, r, c) {
				r = r || "u";
				var o;
				do {
					if (1 == n.nodeType) {
						var i;
						if (r && (i = P(n, r)), i && i == A(t, i) || c == n.tagName) {
							o = n;
							break
						}
					}
					n = s.sd(n)
				} while (n && n != e.body);
				return o
			}, tn.yg = function(n) {
				return J(["INPUT", "TEXTAREA", "SELECT"])[n.tagName]
			}, tn.Z = F, tn.he = function(n) {
				return "function" == x(n)
			}, tn.zg = function(n) {
				return "array" == x(n)
			}, tn.hh = function(n) {
				return "string" == x(n)
			}, tn.Ac = function(n) {
				return !isNaN(yn(n)) && isFinite(n)
			}, tn.j = Y, tn.Zd = k, tn.Tc = function() {
				return M("DIV")
			}, tn.Cg = function() {
				return M("SPAN")
			}, tn.Dg = function() {}, tn.s = R, tn.ib = P, tn.A = function(n, e, t) {
				var r = tn.Eg(P(n, e));
				return isNaN(r) && (r = t), r
			}, tn.ze = J, tn.Hg = G, tn.pf = function(n) {
				return n && (n = n.toLowerCase()), n
			}, tn.sd = function(n) {
				return n.parentNode
			}, tn.Bb = function(n) {
				tn.Cb(n, "none")
			}, tn.qb = function(n, e) {
				tn.Cb(n, e ? "none" : "")
			}, tn.Ig = function(n, e) {
				n.removeAttribute(e)
			}, tn.Kg = function(n, e) {
				if (e) n.style.clip = "rect(" + f.m(e.a || e.S || 0) + "px " + f.m(e.C) + "px " + f.m(e.D) + "px " + f.m(e.f || e.P || 0) + "px)";
				else if (e !== i) {
					var t = n.style.cssText,
						r = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)],
						c = j(t, r, "");
					s.Fd(n, c)
				}
			}, tn.Lg = function(n, e) {
				e && (n.style.backgroundColor = "rgba(" + f.m(e.Id) + "," + f.m(e.Jd) + "," + f.m(e.Kd) + "," + e.k + ")")
			}, tn.ac = function() {
				return +new Date
			}, tn.db = function(n, e) {
				n.appendChild(e)
			}, tn.Kb = function(n, e, t) {
				(t || e.parentNode).insertBefore(n, e)
			}, tn.ic = function(n, e) {
				e = e || n.parentNode, e && e.removeChild(n)
			}, tn.Mg = function(n, e) {
				Y(n, function(n) {
					tn.ic(n, e)
				})
			}, tn.Gc = function(n) {
				tn.Mg(tn.Nb(n, c), n)
			}, tn.z = W, tn.Wd = function(n, e) {
				var t = tn.sd(n);
				1 & e && (tn.fb(n, (tn.Q(t) - tn.Q(n)) / 2), tn.Ud(n, r)), 2 & e && (tn.jb(n, (tn.T(t) - tn.T(n)) / 2), tn.Rd(n, r))
			};
			var mn = {
				a: r,
				C: r,
				D: r,
				f: r,
				M: r,
				L: r
			};
			tn.Ng = function(n) {
				var e = tn.Tc();
				_(e, {
					Od: "block",
					Zb: tn.Jb(n),
					a: 0,
					f: 0,
					M: 0,
					L: 0
				});
				var t = tn.Nd(n, mn);
				tn.Kb(e, n), tn.db(e, n);
				var r = tn.Nd(n, mn),
					c = {};
				return Y(t, function(n, e) {
					n == r[e] && (c[e] = n)
				}), _(e, mn), _(e, c), _(n, {
					a: 0,
					f: 0
				}), c
			}, tn.Og = function(n, e) {
				return parseInt(n, e || 10)
			}, tn.Eg = yn, tn.ve = function(n, t) {
				for (var r = e.body; t && n !== t && r !== t;) t = t.parentNode;
				return n === t
			}, tn.Lb = Z, tn.jc = function(n, e) {
				function t(n, c) {
					tn.Vb(o, "load", t), tn.Vb(o, "abort", r), tn.Vb(o, "error", r), e && e(o, c)
				}

				function r(n) {
					t(n, c)
				}
				var o = new Image;
				g() && 11.6 > dn || !n ? t(!n) : (tn.sb(o, "load", t), tn.sb(o, "abort", r), tn.sb(o, "error", r), o.src = n)
			}, tn.Pg = function(n, e, t) {
				function r(n) {
					c--, e && n && n.src == e.src && (e = n), !c && t && t(e)
				}
				var c = 1;
				Y(n, function(n) {
					n.src && (c++, tn.jc(n.src, r))
				}), r()
			}, tn.Qg = function(n, e, t, r) {
				r && (n = Z(n));
				var c = z(n, e);
				c.length || (c = s.xg(n, e));
				for (var o = c.length - 1; o > -1; o--) {
					var i = c[o],
						b = Z(t);
					V(b, V(i)), s.Fd(b, i.style.cssText), s.Kb(b, i), s.ic(i)
				}
				return n
			}, tn.Mc = function(n) {
				return new Q(n)
			}, tn.N = T, q("backgroundColor"), tn.Ec = q("overflow"), tn.yc = q("pointerEvents"), tn.jb = q("top", 2), tn.Ud = q("right", 2), tn.Rd = q("bottom", 2), tn.fb = q("left", 2), tn.Q = q("width", 2), tn.T = q("height", 2), q("marginLeft", 2), q("marginTop", 2), tn.Jb = q("position"), tn.Cb = q("display"), tn.cb = q("zIndex", 1), tn.Le = function(n, e, t) {
				return e === i ? S(n) : void L(n, e, t)
			}, tn.Fd = function(n, e) {
				return e == i ? n.style.cssText : void(n.style.cssText = e)
			}, tn.Oe = function(n, e) {
				if (e === i) {
					e = T(n, "backgroundImage") || "";
					var t = /\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(e) || [];
					return t[1]
				}
				T(n, "backgroundImage", e ? "url('" + e + "')" : "")
			};
			var Yn;
			tn.Pe = Yn = {
				k: tn.Le,
				a: tn.jb,
				C: tn.Ud,
				D: tn.Rd,
				f: tn.fb,
				M: tn.Q,
				L: tn.T,
				Zb: tn.Jb,
				Od: tn.Cb,
				nb: tn.cb
			}, tn.Nd = function(n, e) {
				var t = {};
				return Y(e, function(e, r) {
					Yn[r] && (t[r] = Yn[r](n))
				}), t
			}, tn.ab = _;
			var xn = {
				ye: 0,
				Ae: 0,
				P: 0,
				S: 0,
				q: 1,
				mb: 1,
				lb: 1,
				l: 0,
				yb: 0,
				xb: 0,
				Sb: 0,
				Ub: 0,
				ub: 0,
				pc: 0,
				uc: 0
			};
			tn.Uc = function(n, e) {
				var t = n || {};
				return n && (s.he(n) ? t = {
					X: t
				} : s.he(n.g) && (t.g = {
					X: n.g
				})), t.X = t.X || e, t.g && (t.g.X = t.g.X || e), t.Ab && (t.Ab.X = t.Ab.X || e), t
			}, tn.lf = nn, tn.ke = function(n, e, t, o, b, u, a) {
				var l = e;
				if (n) {
					l = {};
					for (var g in e) {
						var y = u[g] || 1,
							X = b[g] || [0, 1],
							p = (t - X[0]) / X[1];
						p = f.G(f.E(p, 0), 1), p *= y;
						var h = f.gb(p);
						p != h && (p -= h);
						var m, x = o.X || d.H,
							w = n[g],
							k = e[g];
						if (s.Ac(k)) {
							x = o[g] || x;
							var E = x(p);
							m = w + k * E
						} else {
							m = F({
								Dc: {}
							}, n[g]);
							var j = o[g] || {};
							Y(k.Dc || k, function(n, e) {
								x = j[e] || j.X || x;
								var t = x(p),
									r = n * t;
								m.Dc[e] = r, m[e] += r
							})
						}
						l[g] = m
					}
					var A = Y(e, function(n, e) {
						return xn[e] != i
					});
					A && Y(xn, function(e, t) {
						l[t] == i && n[t] !== i && (l[t] = n[t])
					}), A && (l.q && (l.mb = l.lb = l.q), l.Xb = a.Xb, l.Mb = a.Mb, v() && dn >= 11 && (e.P || e.S) && 0 != t && 1 != t && (l.l = l.l || 1e-8), l.Xe = c)
				}
				if (e.g && a.Qb) {
					var C = l.g.Dc,
						N = (C.a || 0) + (C.D || 0),
						T = (C.f || 0) + (C.C || 0);
					l.f = (l.f || 0) + T, l.a = (l.a || 0) + N, l.g.f -= T, l.g.C -= T, l.g.a -= N, l.g.D -= N
				}
				return !l.g || l.g.a || l.g.f || l.g.S || l.g.P || l.g.C != a.Xb || l.g.D != a.Mb || (l.g = r), l
			}
		},
		v = function(e, t, r, b, u, a) {
			function d(n) {
				C += n, N += n, A += n, F += n, B += n, z += n
			}

			function v(n) {
				var e = n;
				if (T && (!I && (e >= N || C > e) || I && e >= C) && (e = ((e - C) % T + T) % T + C), !j || Y || F != e) {
					var o = f.G(e, N);
					if (o = f.E(o, C), r.sc && (o = N - o + C), !j || Y || o != B) {
						if (a) {
							var d = (o - A) / (t || 1),
								v = s.ke(u, a, d, x, k, w, r);
							q ? s.j(v, function(n, e) {
								q[e] && q[e](b, n)
							}) : s.ab(b, v);
							var l;
							if (S) {
								var g = o > C && N > o;
								g != P && (l = P = g)
							}
							if (!l && v.k != i) {
								var y = v.k < .001;
								y != R && (l = R = y)
							}
							l != i && (l && s.yc(b, "none"), !l && s.yc(b, s.s(b, "data-events")))
						}
						var X = B,
							p = B = o;
						s.j(M, function(n, t) {
							var r = !j && I || F >= e ? M[M.length - t - 1] : n;
							r.V(o - z)
						}), F = e, j = c, L.Yc(X - A, p - A), L.bc(X, p)
					}
				}
			}

			function l(n, e, t) {
				e && n.ec(N), t || (C = f.G(C, n.rc() + z), N = f.E(N, n.wb() + z)), M.push(n)
			}

			function g() {
				if (p) {
					var n = s.ac(),
						e = f.G(n - D, r.De),
						t = F + e * m * O;
					D = n, t * m >= h * m && (t = h), v(t), !Y && t * m >= h * m ? X(E) : V(g)
				}
			}

			function y(n, e, t) {
				p || (p = c, Y = t, E = e, n = f.E(n, C), n = f.G(n, N), h = n, m = F > h ? -1 : 1, L.zd(), D = s.ac(), V(g))
			}

			function X(n) {
				p && (Y = p = E = o, L.qd(), n && n())
			}
			e = e || 0;
			var p, h, m, Y, x, w, k, E, j, A, C, N, T, I, q, S, L = this,
				D = 0,
				O = 1,
				z = 0,
				F = 0,
				B = 0,
				M = [],
				R = o,
				P = o,
				V = n.requestAnimationFrame || n.webkitRequestAnimationFrame || n.mozRequestAnimationFrame || n.msRequestAnimationFrame;
			(s.sg() && s.rd() < 7 || !V) && (V = function(n) {
				s.W(n, r.vb)
			}), L.Ee = function(n, e, t) {
				y(n ? F + n : N, e, t)
			}, L.wc = y, L.Re = function(n, e) {
				y(N, n, e)
			}, L.U = X, L.te = function() {
				return F
			}, L.se = function() {
				return h
			}, L.v = function() {
				return B
			}, L.V = v, L.cf = function() {
				v(N, c)
			}, L.Zc = function() {
				return p
			}, L.pe = function(n) {
				O = n
			}, L.ec = d, L.bb = function(n, e) {
				l(n, 0, e)
			}, L.ad = function(n) {
				l(n, 1)
			}, L.bd = function(n) {
				N += n
			}, L.rc = function() {
				return C
			}, L.wb = function() {
				return N
			}, L.bc = L.zd = L.qd = L.Yc = s.Dg, L.hd = s.ac(), r = s.Z({
				vb: 16,
				De: 50
			}, r), b && (S = s.s(b, "data-inactive")), T = r.Bc, I = r.hf, q = r.df, C = A = e, N = e + t, w = r.m || {}, k = r.hc || {}, x = s.Uc(r.p)
		},
		l = {
			Ye: "data-scale",
			dc: "data-autocenter",
			ld: "data-nofreeze",
			ge: "data-nodrag"
		},
		g = new function() {
			var n = this;
			n.pd = function(n, e, t, r) {
				(r || !s.s(n, e)) && s.s(n, e, t)
			}, n.md = function(n) {
				var e = s.A(n, l.dc);
				s.Wd(n, e)
			}
		},
		y = new function() {
			function n(n) {
				return (n & o) == o
			}

			function e(n) {
				return (n & i) == i
			}

			function t(n, e, t) {
				t.push(e), n[e] = n[e] || [], n[e].push(t)
			}
			var r = this,
				c = 1,
				o = 2,
				i = 4,
				b = 8,
				u = 256,
				a = 512,
				d = 1024,
				s = 2048,
				v = s + c,
				l = s + o,
				g = a + c,
				y = a + o,
				X = u + i,
				p = u + b,
				h = d + i,
				m = d + b;
			r.Ze = function(r) {
				var c = r.u,
					o = r.F,
					i = r.Gb,
					b = r.Ve,
					u = [],
					f = 0,
					a = 0,
					d = 0,
					s = c - 1,
					Y = o - 1,
					x = b - 1;
				switch (i) {
					case v:
					case y:
					case g:
					case l:
						var w = 0,
							k = 0;
						break;
					case p:
					case h:
					case X:
					case m:
						var w = s,
							k = 0;
						break;
					default:
						i = m;
						var w = s,
							k = 0
				}
				for (a = w, d = k; b > f;) {
					switch (e(i) || n(i) ? t(u, x - f++, [d, a]) : t(u, f++, [d, a]), i) {
						case v:
						case y:
							a--, d++;
							break;
						case g:
						case l:
							a++, d--;
							break;
						case p:
						case h:
							a--, d--;
							break;
						case m:
						case X:
						default:
							a++, d++
					}
					if (0 > a || 0 > d || a > s || d > Y) {
						switch (i) {
							case v:
							case y:
								w++;
								break;
							case p:
							case h:
							case g:
							case l:
								k++;
								break;
							case m:
							case X:
							default:
								w--
						}
						if (0 > w || 0 > k || w > s || k > Y) {
							switch (i) {
								case v:
								case y:
									w = s, k++;
									break;
								case g:
								case l:
									k = Y, w++;
									break;
								case p:
								case h:
									k = Y, w--;
									break;
								case m:
								case X:
								default:
									w = 0, k++
							}
							k > Y ? k = Y : 0 > k ? k = 0 : w > s ? w = s : 0 > w && (w = 0)
						}
						d = k, a = w
					}
				}
				return u
			}, r.nf = function(n) {
				for (var e, r = [], c = 0; c < n.F; c++)
					for (e = 0; e < n.u; e++) t(r, f.kb(1e5 * f.Md()) % 13, [c, e]);
				return r
			}, r.ef = function(n) {
				for (var e, r = n.u || 1, c = n.F || 1, o = [], i = r / 2 - .5, b = c / 2 - .5, u = 0; r > u; u++)
					for (e = 0; c > e; e++) t(o, f.m(f.mc(f.B(u - i, 2) + f.B(e - b, 2))), [e, u]);
				return o
			}
		},
		X = function(n, e, t, i, u, a) {
			function l(n) {
				n.a && (n.S = n.a), n.f && (n.P = n.f), s.j(n, function(n) {
					s.Zd(n) && l(n)
				})
			}

			function g(n, e, t) {
				var r = {
					vb: e,
					J: 1,
					W: 0,
					u: 1,
					F: 1,
					k: 0,
					q: 0,
					g: 0,
					Qb: o,
					R: o,
					sc: o,
					fd: y.nf,
					Gb: 1032,
					Ib: {
						dd: 0,
						cd: 0
					},
					p: d.H,
					m: {},
					Ic: [],
					hc: {}
				};
				return s.Z(r, n), 0 == r.F && (r.F = f.m(r.u * t)), l(r), r.Ve = r.u * r.F, r.p = s.Uc(r.p, d.H), r.Te = f.kb(r.J / r.vb), r.Se = function(n, e) {
					n /= r.u, e /= r.F;
					var t = n + "x" + e;
					if (!r.Ic[t]) {
						r.Ic[t] = {
							M: n,
							L: e
						};
						for (var c = 0; c < r.u; c++)
							for (var o = 0; o < r.F; o++) r.Ic[t][o + "," + c] = {
								a: o * e,
								C: c * n + n,
								D: o * e + e,
								f: c * n
							}
					}
					return r.Ic[t]
				}, r.Wc && (r.Wc = g(r.Wc, e, t), r.R = c), r
			}

			function X(n, e, t, r, i, b) {
				function u(n) {
					var e = n.fd(n);
					return n.sc ? e.reverse() : e
				}
				var d, v, l, g, y, X = this,
					p = {},
					h = {},
					m = [],
					Y = t.Ib.dd || 0,
					x = t.Ib.cd || 0,
					w = t.Se(i, b),
					k = u(t),
					E = k.length - 1,
					j = t.J + t.W * E,
					A = r + j,
					C = t.R;
				A += 50, X.Sd = A, X.nc = function(n) {
					n -= r;
					var e = j > n;
					if (e || y) {
						y = e, C || (n = j - n);
						var c = f.kb(n / t.vb);
						s.j(h, function(n, e) {
							var t = f.E(c, n.G);
							t = f.G(t, n.length - 1), n.Qd != t && (n.Qd || C ? t == n.E && C && s.Bb(m[e]) : s.qb(m[e]), n.Qd = t, s.ab(m[e], n[t]))
						})
					}
				}, e = s.Lb(e), a(e, 0, 0), s.j(k, function(n, e) {
					s.j(n, function(n) {
						var r = n[0],
							u = n[1],
							a = r + "," + u,
							y = o,
							X = o,
							m = o;
						Y && u % 2 && (3 & Y && (y = !y), 12 & Y && (X = !X), 16 & Y && (m = !m)), x && r % 2 && (3 & x && (y = !y), 12 & x && (X = !X), 16 & x && (m = !m)), t.a = t.a || 4 & t.g, t.D = t.D || 8 & t.g, t.f = t.f || 1 & t.g, t.C = t.C || 2 & t.g;
						var k = X ? t.D : t.a,
							E = X ? t.a : t.D,
							j = y ? t.C : t.f,
							A = y ? t.f : t.C;
						t.g = k || E || j || A, g = {}, l = {
							S: 0,
							P: 0,
							k: 1,
							M: i,
							L: b
						}, v = s.Z({}, l), d = s.Z({}, w[a]), t.k && (l.k = 2 - t.k), t.nb && (l.nb = t.nb, v.nb = 0);
						var N = t.u * t.F > 1 || t.g;
						if (t.q || t.l) {
							var T = c;
							if (T) {
								l.q = t.q ? t.q - 1 : 1, v.q = 1;
								var I = t.l || 0;
								l.l = 360 * I * (m ? -1 : 1), v.l = 0
							}
						}
						if (N) {
							var q = d.Dc = {};
							if (t.g) {
								var S = t.oh || 1;
								k && E ? (q.a = w.L / 2 * S, q.D = -q.a) : k ? q.D = -w.L * S : E && (q.a = w.L * S), j && A ? (q.f = w.M / 2 * S, q.C = -q.f) : j ? q.C = -w.M * S : A && (q.f = w.M * S)
							}
							g.g = d, v.g = w[a]
						}
						var L = y ? 1 : -1,
							D = X ? 1 : -1;
						t.x && (l.P += i * t.x * L), t.y && (l.S += b * t.y * D), s.j(l, function(n, e) {
							s.Ac(n) && n != v[e] && (g[e] = n - v[e])
						}), p[a] = C ? v : l;
						var O = t.Te,
							z = f.m(e * t.W / t.vb);
						h[a] = new Array(z), h[a].G = z, h[a].E = z + O - 1;
						for (var F = 0; O >= F; F++) {
							var B = s.ke(v, g, F / O, t.p, t.hc, t.m, {
								Qb: t.Qb,
								Xb: i,
								Mb: b
							});
							B.nb = B.nb || 1, h[a].push(B)
						}
					})
				}), k.reverse(), s.j(k, function(t) {
					s.j(t, function(t) {
						var r = t[0],
							c = t[1],
							o = r + "," + c,
							i = e;
						(c || r) && (i = s.Lb(e)), s.ab(i, p[o]), s.Ec(i, "hidden"), s.Jb(i, "absolute"), n.Me(i), m[o] = i, s.qb(i, !C)
					})
				})
			}

			function p() {
				var n = this,
					e = 0;
				v.call(n, 0, h), n.bc = function(n, t) {
					t - e > j && (e = t, Y && Y.nc(t), m && m.nc(t))
				}, n.ud = x
			}
			var h, m, Y, x, w = this,
				k = 0,
				E = i.kf,
				j = 8;
			w.Qe = function() {
				var n = 0,
					e = i.fc,
					t = e.length;
				return n = E ? k++ % t : f.gb(f.Md() * t), e[n] && (e[n].Rb = n), e[n]
			}, w.Ke = function(r, c, o, i, b, u) {
				w.Eb(), x = b, b = g(b, j, u);
				var a = i.ce,
					d = o.ce;
				a["no-image"] = !i.de, d["no-image"] = !o.de;
				var s = a,
					v = d,
					l = b,
					y = b.Wc || g({}, j, u);
				b.R || (s = d, v = a);
				var p = y.ec || 0;
				m = new X(n, v, y, f.E(p - y.vb, 0), e, t), Y = new X(n, s, l, f.E(y.vb - p, 0), e, t), m.nc(0), Y.nc(0), h = f.E(m.Sd, Y.Sd), w.Rb = r
			}, w.Eb = function() {
				n.Eb(), m = r, Y = r
			}, w.Ne = function() {
				var n = r;
				return Y && (n = new p), n
			}, u && s.dh() < 537 && (j = 16), b.call(w), v.call(w, -1e7, 1e7)
		},
		p = {
			wd: 1
		},
		h = function() {
			function n(n) {
				j[n] && j[n].Rg(n == N)
			}

			function e(n) {
				A.n(p.wd, n * y)
			}
			var t, o, u, a, d, v, y, X, h, m, Y, x, w, k, E, j, A = this,
				C = s.pb(A, b),
				N = 0;
			A.Xc = function(e) {
				if (e != d) {
					var t = N,
						r = f.gb(e / y);
					N = r, d = e, n(t), n(r)
				}
			}, A.nd = function(n) {
				s.qb(t, n)
			}, A.gd = function(n) {
				s.z(j), d = i, A.Ie(), E = [], j = [], s.Gc(t), o = f.kb(n / y), N = 0;
				var b = w + h,
					l = k + m,
					p = f.kb(o / X) - 1;
				u = w + b * (Y ? X - 1 : p), a = k + l * (Y ? p : X - 1), s.Q(t, u), s.T(t, a);
				for (var C = 0; o > C; C++) {
					var T = s.Cg();
					s.Ug(T, C + 1);
					var I = s.Qg(x, "numbertemplate", T, c);
					s.Jb(I, "absolute");
					var q = C % (p + 1),
						S = f.gb(C / (p + 1)),
						L = v.zc && !Y ? p - q : q;
					s.fb(I, (Y ? S : L) * b), s.jb(I, (Y ? L : S) * l), s.db(t, I), E[C] = I, 1 & v.id && A.i(I, "click", s.rb(r, e, C)), 2 & v.id && A.i(I, "mouseenter", s.rb(r, e, C)), j[C] = s.Mc(I)
				}
				g.md(t)
			}, A.I = function(n, e) {
				A.eb = t = s.gc(n), A.kd = v = s.Z({
					Bd: 10,
					Ld: 10,
					id: 1
				}, e), x = s.oe(t, "prototype"), w = s.Q(x), k = s.T(x), s.ic(x, t), y = v.Dd || 1, X = v.F || 1, h = v.Bd, m = v.Ld, Y = 2 & v.af, v.zb && g.pd(t, l.dc, v.zb)
			}, A.z = function() {
				s.z(j, C)
			}, s.I(A)
		},
		m = function() {
			function n(n) {
				m.n(p.wd, n, c)
			}

			function e(n) {
				s.qb(o, n), s.qb(i, n)
			}

			function t() {
				X.Pc((u.lc || !f.jf(v)) && d > 1), h.Pc((u.lc || !f.mf(v)) && d > 1)
			}
			var o, i, u, f, a, d, v, y, X, h, m = this,
				Y = s.pb(m, b);
			m.Xc = function(n, e, r) {
				v = e, !r && t()
			}, m.nd = e, m.gd = function(e) {
				d = e, v = 0, a || (m.i(o, "click", s.rb(r, n, -y)), m.i(i, "click", s.rb(r, n, y)), X = s.Mc(o), h = s.Mc(i), s.s(o, l.ld, 1), s.s(i, l.ld, 1), a = c)
			}, m.I = function(n, e, t, r) {
				m.kd = u = s.Z({
					Dd: 1
				}, t), o = n, i = e, u.zc && (o = e, i = n), y = u.Dd, f = r, u.zb && (g.pd(o, l.dc, u.zb), g.pd(i, l.dc, u.zb)), g.md(o), g.md(i)
			}, m.z = function() {
				s.z(X, h, Y)
			}, s.I(m)
		};
	u.Kc = 21, u.xc = 24;
	var Y = function() {
			function n(e, t) {
				var r = {};
				return s.j(e, function(e, c) {
					var o = Q[c];
					o && (s.Zd(e) ? e = n(e, t || "e" == c) : t && s.Ac(e) && (e = Z[e]), r[o] = e)
				}), r
			}

			function t(n, e) {
				var r = [],
					c = s.A(n, "play");
				if (e && c) {
					var o = new Y(n, O, {
						Jg: c
					});
					rn.push(o), S.i(o, u.Kc, I), S.i(o, u.xc, q)
				} else s.j(s.Nb(n), function(n) {
					r = r.concat(t(n, e + 1))
				});
				if (!e && (!M || 16 & M) || e && (!c || !(16 & c))) {
					var i = z[s.A(n, "t")];
					i && r.push({
						eb: n,
						ud: i
					})
				}
				return r
			}

			function i(n, e) {
				var t = $[n];
				if (t == r) {
					t = $[n] = {
						tb: n,
						Sc: [],
						ue: []
					};
					var c = 0;
					!s.j(nn, function(e, t) {
						return c = t, e.tb > n
					}) && c++, nn.splice(c, 0, t)
				}
				return t
			}

			function a(e, t, o) {
				var b, u;
				if (F) {
					var a = F[s.A(e, "c")];
					a && (b = i(a.r, 0), b.Gg = a.e || 0)
				}
				if (s.j(t, function(t) {
						var r = s.Z(c, {}, n(t)),
							a = s.Uc(r.p);
						delete r.p, r.f && (r.P = r.f, a.P = a.f, delete r.f), r.a && (r.S = r.a, a.S = a.a, delete r.a);
						var d = {
								p: a,
								Xb: o.M,
								Mb: o.L
							},
							l = new v(t.b, t.d, d, e, o, r);
						if (en = f.E(en, t.b + t.d), b) u || (u = new v(t.b, 0)), u.bb(l);
						else {
							var g = i(t.b, t.b + t.d);
							g.Sc.push(l)
						}
						r.Ab && (o.Ab = {
							Id: 0,
							Jd: 0,
							Kd: 0,
							k: 0
						}), o = s.lf(o, r)
					}), b && u) {
					u.cf();
					var d, l = u,
						g = u.rc(),
						y = u.wb(),
						X = f.E(y, b.Gg);
					b.tb < y && (b.tb > g ? (l = new v(g, b.tb - g), l.bb(u, c)) : l = r, d = new v(b.tb, X - g, {
						Bc: X - b.tb,
						hf: c
					}), d.bb(u, c)), l && b.Sc.push(l), d && b.ue.push(d)
				}
				return o
			}

			function l(n) {
				s.j(n, function(n) {
					var e = n.eb,
						t = s.Q(e),
						r = s.T(e),
						c = {
							f: s.fb(e),
							a: s.jb(e),
							P: 0,
							S: 0,
							k: 1,
							nb: s.cb(e) || 0,
							l: 0,
							yb: 0,
							xb: 0,
							mb: 1,
							lb: 1,
							Sb: 0,
							Ub: 0,
							ub: 0,
							pc: 0,
							uc: 0,
							M: t,
							L: r,
							g: {
								a: 0,
								C: t,
								D: r,
								f: 0
							}
						};
					c.ye = c.f, c.Ae = c.a, a(e, n.ud, c)
				})
			}

			function g(n, e, t) {
				var r = n.b - e;
				if (r) {
					var o = new v(e, r);
					o.bb(_, c), o.ec(t), S.bb(o)
				}
				return S.bd(n.d), r
			}

			function y(n) {
				var e = _.rc(),
					t = 0;
				s.j(n, function(n, r) {
					n = s.Z({
						d: 3e3
					}, n), g(n, e, t), e = n.b, t += n.d, r && 2 != n.t || (S.vc = e, S.Lc = e + n.d)
				})
			}

			function X(n, e, t) {
				var r = e.length;
				if (r > 4)
					for (var c = f.kb(r / 4), o = 0; c > o; o++) {
						var i = e.slice(4 * o, f.G(4 * o + 4, r)),
							b = new v(i[0].tb, 0);
						X(b, i, t), n.bb(b)
					} else s.j(e, function(e) {
						s.j(t ? e.ue : e.Sc, function(e) {
							t && e.bd(en - e.wb()), n.bb(e)
						})
					})
			}

			function p(n) {
				return 2 & n || 4 & n && s.yd().od
			}

			function h() {
				H || (8 & P && S.i(e, "keydown", j), 32 & P && (S.i(e, "mousedown", C), S.i(e, "touchstart", C)), H = c)
			}

			function m() {
				S.Y(e, "keydown", j), S.Y(e, "mousedown", C), S.Y(e, "touchstart", C), H = o
			}

			function x(n) {
				(!U || n) && (U = c, S.U(), n && tn && S.V(0), S.pe(1), S.Re(), h(), S.n(u.Kc, S))
			}

			function w() {
				K || !U && !S.v() || (K = c, S.U(), S.te() > S.vc && S.V(S.vc), S.pe(J || 1), S.wc(0))
			}

			function k() {
				!W && w()
			}

			function E(n) {
				var e = n;
				0 > n && S.v() && (e = 1), e != tn && (tn = e, R && S.n(u.xc, S, tn))
			}

			function j(n) {
				8 & P && 27 == s.Be(n) && w()
			}

			function A(n) {
				W && s.fe(n) !== r && (W = o, 16 & P && s.W(k, 160))
			}

			function C(n) {
				32 & P && !s.ve(D, s.kc(n)) && w()
			}

			function N(n) {
				W || (W = c, 1 & M && s.ee(n, D) && x())
			}

			function T(n) {
				var e = s.kc(n),
					t = s.ob(e, r, r, "A"),
					o = t && (s.yg(t) || t === D || s.ve(D, t));
				U && p(P) ? !o && w() : p(M) && !o && x(c)
			}

			function I(n) {
				var e = n.Fg(),
					t = cn[e];
				t !== n && t && t.Bg(), cn[e] = n
			}

			function q(n, e) {
				S.n(u.xc, n, e)
			}
			var S = this,
				L = s.pb(S, b);
			v.call(S, 0, 0);
			var D, O, z, F, B, M, R, P, V, J, G, H, U, K, W, Z = [d.H, d.ag, d.bg, d.tc, d.cg, d.Fb, d.Td, d.dg, d.Vd, d.eg, d.fg, d.oc, d.Xd, d.gg, d.ae, d.hg, d.ig, d.O, d.jg, d.kg, d.lg, d.mg, d.ng, d.Qf, d.og, d.Pf, d.Nf, d.qf, d.rf, d.Ed, d.jd, d.sf, d.vf, d.wf],
				Q = {},
				_ = new v(0, 0),
				$ = [],
				nn = [],
				en = 0,
				tn = 0,
				rn = [],
				cn = [];
			S.Fg = function() {
				return G || ""
			}, S.Bg = w, S.zd = function() {
				E(1)
			}, S.qd = function() {
				U = o, K = o, E(-1), !S.v() && m()
			}, S.bc = function() {
				!W && V && S.te() > S.Lc && w()
			}, S.I = function(n, e, r) {
				D = n, O = e, M = r.Jg, B = r.Ag, z = O.fc, F = O.mh;
				var o = {
					a: "y",
					f: "x",
					D: "m",
					C: "t",
					l: "r",
					yb: "rX",
					xb: "rY",
					mb: "sX",
					lb: "sY",
					Sb: "tX",
					Ub: "tY",
					ub: "tZ",
					pc: "kX",
					uc: "kY",
					k: "o",
					p: "e",
					nb: "i",
					g: "c",
					Ab: "bc",
					Id: "re",
					Jd: "gr",
					Kd: "bl"
				};
				s.j(o, function(n, e) {
					Q[n] = e
				}), l(t(D, 0)), X(_, nn), M && (S.bb(_), B = c, V = s.A(D, "idle"), P = s.A(D, "rollback"), J = s.A(D, "speed", 1), G = s.ib(D, "group"), (p(M) || p(P)) && S.i(D, "click", T), (1 & M || V) && !s.yd().od && (S.i(D, "mouseenter", N), S.i(D, "mouseleave", A)), R = s.A(D, "pause"));
				var i = O.wg || [],
					b = i[s.A(D, "b")] || [],
					u = {
						b: en,
						d: b.length ? 0 : r.Wb || V || 0
					};
				b = b.concat([u]), y(b), S.wb(), B && S.bd(1e8), en = S.wb(), X(S, nn, c), S.V(-1), S.V(s.A(D, "initial") || 0)
			}, S.z = function() {
				s.z(L, rn), S.U(), S.V(-1)
			}, s.I(S)
		},
		x = (n.module || {}).exports = function() {
			function t() {
				return !Ue && 12 & re
			}

			function a() {
				return Ke || !Ue && 3 & re
			}

			function g() {
				return !ve && !t() && !xe.Zc()
			}

			function y() {
				return !a() && g()
			}

			function X() {
				return Hn || yn
			}

			function h() {
				return 2 & X() ? Rn : Mn
			}

			function m(n, e, t) {
				s.fb(n, e), s.jb(n, t)
			}

			function Y(n, e) {
				var t = X(),
					r = (Mn * e + Ve) * (1 & t),
					c = (Rn * e + Ve) * (2 & t) / 2;
				m(n, r, c)
			}

			function w(n, e) {
				if (ve && !(1 & fe)) {
					var t, r = n;
					if (He > n && (r = He, t = -1), n > Ge && (r = Ge, t = 1), t) {
						var c = n - r;
						e ? (c = 2 * f.Yf(c) / f.K, c = f.B(c * t, 1.6)) : (c = f.B(c * t, .625), c = f.Pd(c * f.K / 2)), n = r + c * t
					}
				}
				return n
			}

			function k(n) {
				return w(n, c)
			}

			function E(n) {
				return w(n)
			}

			function j(n, e) {
				if (!(1 & fe)) {
					var t = n - Ge + (e || 0),
						r = He - n + (e || 0);
					t > 0 && t > r ? n = Ge : r > 0 && (n = He)
				}
				return n
			}

			function A(n) {
				return !(1 & fe) && 1e-4 > n - He
			}

			function C(n) {
				return !(1 & fe) && 1e-4 > Ge - n
			}

			function N(n) {
				return !(1 & fe) && (1e-4 > n - He || 1e-4 > Ge - n)
			}

			function T(n, e, t) {
				!Te && s.j(Pe, function(r) {
					r.Xc(n, e, t)
				})
			}

			function I(n) {
				var e = n,
					t = N(n);
				return t ? e = j(e) : (n = B(n), e = n), e = f.gb(e), e = f.E(e, 0)
			}

			function q(n) {
				Qe[Re], Ln = Re, Re = n, Dn = Qe[Re]
			}

			function S() {
				Hn = 0;
				var n = he.v(),
					e = I(n);
				T(e, n), (N(n) || n == f.gb(n)) && (2 & _n && (te > 0 && e == On - 1 || 0 > te && !e) && (_n = 0), q(e), Ie.n(x.vg, Re, Ln))
			}

			function L(n, e) {
				!On || e && xe.Zc() || (xe.U(), xe.Jc(n, n))
			}

			function D(n) {
				On ? (n = B(n), n = j(n), L(n)) : T(0, 0)
			}

			function O() {
				var n = x.qe || 0,
					e = ae;
				return x.qe |= e, Un = e & ~n
			}

			function z() {
				Un && (x.qe &= ~ae, Un = 0)
			}

			function F(n) {
				var e = s.Tc();
				return s.ab(e, Sn), n && s.Ec(e, "hidden"), e
			}

			function B(n, e) {
				return e = e || On || 1, (n % e + e) % e
			}

			function M(n, e, t) {
				8 & _n && (_n = 0), H(n, oe, e, t)
			}

			function R() {
				s.j(Pe, function(n) {
					n.nd(n.kd.lh <= Ue)
				})
			}

			function P(n) {
				Ue || !s.fe(n) && s.ee(n, ln) || (Ue = 1, R(), ve || (12 & re && rn(), Qe[Re] && Qe[Re].Fc()), Ie.n(x.ug))
			}

			function V() {
				Ue && (Ue = 0, R(), ve || !(12 & re) || tn()), Ie.n(x.tg)
			}

			function J() {
				s.ab(jn, Sn)
			}

			function G(n, e) {
				H(n, e, c)
			}

			function H(n, e, r, b) {
				if (On && (!ve || gn.we) && !t() && !isNaN(n)) {
					var u = he.v(),
						a = n;
					r && (a = u + n, 2 & fe && (A(u) && 0 > n && (a = Ge), C(u) && n > 0 && (a = He))), 1 & fe || (a = b ? B(a) : j(a, .5)), r && !N(a) && (a = f.m(a));
					var d = (a - u) % On;
					a = u + d, e == i && (e = oe);
					var s = f.Db(d),
						v = 0;
					if (s) {
						if (1 > s && (s = f.B(s, .5)), s > 1) {
							var l = h(),
								g = (1 & yn ? In : qn) / l;
							s = f.G(s, 1.5 * g)
						}
						v = e * s
					}
					Te = c, xe.U(), Te = o, xe.Jc(u, a, v)
				}
			}

			function U(n, e, t) {
				var r, o, i, b, u = this,
					a = {
						a: 2,
						C: 1,
						D: 2,
						f: 1
					},
					d = {
						a: "top",
						C: "right",
						D: "bottom",
						f: "left"
					},
					v = {};
				u.eb = n, u.Hc = function(u, g, y) {
					var X, p = u,
						h = g;
					if (i || (i = s.Ng(n), r = n.parentNode, b = {
							Qc: s.A(n, l.Ye, 1),
							zb: s.A(n, l.dc)
						}, s.j(d, function(e, t) {
							v[t] = s.A(n, "data-scale-" + e, 1)
						}), o = n, e && (o = s.Lb(r, c), s.ab(o, {
							a: 0,
							f: 0
						}), s.db(o, n), s.db(r, o))), t) {
						if (X = f.E(u, g), e && y >= 0 && 1 > y) {
							var m = f.G(u, g);
							X = f.G(X / m, 1 / (1 - y)) * m
						}
					} else p = h = X = f.B(wn > xn ? g : u, b.Qc);
					var Y = e ? 1.001 : 1,
						x = X * Y;
					e && (Fe = x), s.He(o, x), s.Q(r, i.M * p), s.T(r, i.L * h);
					var w = s.Ge() && s.rd() < 9 ? x : 1,
						k = (p - w) * i.M / 2,
						E = (h - w) * i.L / 2;
					s.fb(o, k), s.jb(o, E), s.j(i, function(n, e) {
						if (a[e] && n) {
							var t = (1 & a[e]) * f.B(u, v[e]) * n + (2 & a[e]) * f.B(g, v[e]) * n / 2;
							s.Pe[e](r, t)
						}
					}), s.Wd(r, b.zb)
				}
			}

			function K() {
				var n = this;
				v.call(n, 0, 0, {
					Bc: On
				}), s.j(Qe, function(e) {
					n.ad(e), e.ec(ue / Pn)
				})
			}

			function W() {
				var n = this,
					e = we.eb;
				v.call(n, -1, 2, {
					p: d.H,
					df: {
						Zb: Y
					},
					Bc: On,
					sc: ne
				}, e, {
					Zb: 1
				}, {
					Zb: -2
				})
			}

			function Z() {
				var n = this;
				v.call(n, -1e8, 2e8), n.bc = function(n, e) {
					if (f.Db(e - n) > 1e-5) {
						var t = e,
							r = e;
						f.gb(e) != e && e > n && (1 & fe || e > Je) && r++;
						var o = I(r);
						T(o, t, c), Ie.n(x.Tg, B(t), B(n), e, n)
					}
				}
			}

			function Q(n, e) {
				var t, i, b, u, f, a = this;
				v.call(a, -1e8, 2e8, {
					De: 100
				}), a.zd = function() {
					se = c, Ie.n(x.bh, B(he.v()), me.v())
				}, a.qd = function() {
					se = o, u = o, Ie.n(x.Yg, B(he.v()), me.v()), !ve && S()
				}, a.bc = function(n, e) {
					var r = e;
					if (u) r = f;
					else if (b) {
						var c = e / b;
						r = gn.td(c) * (i - t) + t
					}
					r = k(r), me.V(r)
				}, a.Jc = function(n, e, r, u) {
					ve = o, b = r || 1, t = n, i = e, Te = c, me.V(n), Te = o, a.V(0), a.wc(b, u)
				}, a.eh = function() {
					u = c, u && a.Ee(r, r, c)
				}, a.gh = function(n) {
					f = n
				}, me = new Z, me.bb(n), be && me.bb(e)
			}

			function _() {
				var n = this,
					e = F();
				s.cb(e, 0), n.eb = e, n.Me = function(n) {
					s.db(e, n), s.qb(e)
				}, n.Eb = function() {
					s.Bb(e), s.Gc(e)
				}
			}

			function $(n, e) {
				function t() {
					j && j.z(), Ke -= U, U = 0, j = new pn.hb(C, pn, {
						Wb: s.A(C, "idle", ce),
						Ag: !_n
					}), j.Rc(u.xc, d)
				}

				function a() {
					j.hd < pn.hd && t()
				}

				function d(n, t) {
					U += t, Ke += t, e == Re && !U && J.Fc()
				}

				function l(n, t, r) {
					if (!O) {
						if (O = c, S && r) {
							var i = 2 * s.A(S, "data-expand", 0),
								b = r.width,
								u = r.height,
								a = b,
								d = u;
							if (b && u) {
								if (I) {
									if (3 & I && (!(4 & I) || b > zn || u > Fn)) {
										var v = o,
											l = zn / Fn * u / b;
										1 & I ? v = l > 1 : 2 & I && (v = 1 > l), a = v ? b * Fn / u : zn, d = v ? Fn : u * zn / b
									}
									s.Q(S, a), s.T(S, d), s.jb(S, (Fn - d) / 2), s.fb(S, (zn - a) / 2)
								}
								s.He(S, f.E((a + i) / a, (d + i) / d))
							}
							s.Jb(S, "absolute")
						}
						Ie.n(x.rg, e)
					}
					t.Fe(o), n && n(J)
				}

				function X(n, t, r, o) {
					if (o == P && Re == e && _n && g() && !J.Nc()) {
						var i = B(n);
						ke.Ke(i, e, t, J, r, Fn / zn), t.pg(), Ye.ec(i - Ye.rc() - 1), Ye.V(i), L(i, c)
					}
				}

				function p(t) {
					if (t == P && Re == e && g() && !J.Nc()) {
						if (!M) {
							var c = r;
							ke && (ke.Rb == e ? c = ke.Ne() : ke.Eb()), a(), M = new nn(n, e, c, j), M.Of(R)
						}!M.Zc() && M.ed()
					}
				}

				function h(n, t, c) {
					if (n == e) n != t ? Qe[t] && Qe[t].Je() : !c && M && M.Mf(), R && R.Pc(), P = s.ac(), J.jc(s.rb(r, p, P));
					else {
						var o = f.G(e, n),
							i = f.E(e, n),
							b = f.G(i - o, o + On - i),
							u = Vn + gn.Lf - 1;
						(!z || u >= b) && J.jc()
					}
				}

				function m() {
					Re == e && M && (M.U(), R && R.Kf(), R && R.Jf(), M.re())
				}

				function w() {
					Re == e && M && M.U()
				}

				function k(n) {
					!de && Ie.n(x.If, e, n)
				}

				function E(n, e, t) {
					if (!s.s(n, Se)) {
						if (t) {
							if (!C) {
								C = n, T = F(c);
								var o = "background";
								s.N(T, o + "Color", s.N(C, o + "Color")), s.N(T, o + "Image", s.N(C, o + "Image")), s.N(C, o, r), s.Kb(T, C)
							}
							s.s(n, "data-events", s.yc(n)), s.s(n, "data-display", s.Cb(n)), s.Zg(n, s.ib(n, "data-to")), s.Wg(n, s.ib(n, "data-bf")), t > 1 && s.Cc(n, s.s(n, "data-ts")), s.ih(n, s.A(n, "data-p")), s.ah(n, s.ib(n, "po")), "IMG" == n.tagName && (K.push(n), s.s(n, "src") || (z = c, s.Bb(n)));
							var i = s.Oe(n);
							if (i) {
								var b = new Image;
								s.s(b, "src", i), K.push(b)
							}
							t && s.cb(n, (s.cb(n) || 0) + 1)
						}
						var u = s.Nb(n);
						s.j(u, function(r) {
							3 > t && !S && "image" == s.ib(r, "u") && (S = r, S.border = 0, s.ab(S, Sn), s.ab(n, Sn), s.N(S, "maxWidth", "10000px"), s.db(T, S)), E(r, e, t + 1)
						})
					}
				}
				var j, A, C, T, I, q, S, D, O, z, M, R, P, V, J = this,
					H = s.pb(J, b),
					U = 0,
					K = [];
				v.call(J, -Vn, Vn + 1, {
					Bc: 1 & fe ? On : i,
					sc: ne
				}), J.Fe = function(e) {
					V != e && (V = e, e && s.db(n, q), !e && s.ic(q))
				}, J.jc = function(n, t) {
					t = t || J, K.length && !O ? (t.Fe(c), D || (D = c, Ie.n(x.Hf, e), s.j(K, function(n) {
						if (!s.s(n, "src")) {
							var e = s.ib(n, "src") || s.ib(n, "src2") || "";
							e && (n.src = e, s.Cb(n, s.s(n, "data-display")))
						}
					})), s.Pg(K, S, s.rb(r, l, n, t))) : l(n, t)
				}, J.qg = function() {
					if (y())
						if (1 == On) J.Je(), h(e, e);
						else {
							var n;
							if (ke && (n = ke.Qe(On)), n) {
								P = s.ac();
								var t = e + te,
									c = Qe[B(t)];
								return c.jc(s.rb(r, X, t, c, n, P), J)
							}(fe || !N(he.v()) || !N(he.v() + te)) && G(te)
						}
				}, J.Fc = function() {
					h(e, e, c)
				}, J.Je = function() {
					R && R.Kf(), R && R.Jf(), J.le(), M && M.Gf(), M = r, t()
				}, J.pg = function() {
					s.Bb(n)
				}, J.le = function() {
					s.qb(n)
				}, J.Yc = function(n, e) {
					var t = Vn - e;
					Y(A, t)
				}, J.Rb = e, E(n, c, 0), I = s.A(C, "data-fillmode", gn.Ff);
				var W = s.oe(C, "thumb", c);
				W && (s.Lb(W), s.Bb(W)), s.qb(n), q = s.Lb(jn), s.cb(q, 1e3), J.i(n, "click", k), t(c), J.de = S, J.ce = n, A = n, J.i(Ie, 203, h), J.i(Ie, 28, w), J.i(Ie, 24, m), J.z = function() {
					s.z(H, j, M)
				}
			}

			function nn(n, e, r, i) {
				function f() {
					w.ed()
				}

				function d(n) {
					Y = n, w.U(), w.ed()
				}

				function l() {}
				var g, y, X, p, h, m, Y, w = this,
					k = s.pb(w, b),
					E = 0,
					j = 0,
					A = Qe[e];
				v.call(w, 0, 0), w.ed = function() {
					if (!(ve || se || Y || Re != e || w.Nc())) {
						var n = w.v();
						if (n || g && !h && (h = c, w.re(c), Ie.n(x.Ef, e, j, E, j, g, p)), Ie.n(x.je, e, n, E, y, X, p), !t()) {
							var r;
							n == p ? _n && s.W(A.qg, 20) : (r = n == X ? p : n ? w.se() : X, (n != X || !a()) && w.wc(r, f))
						}
					}
				}, w.Mf = function() {
					X == p && X == w.v() && w.V(y)
				}, w.Gf = function() {
					ke && ke.Rb == e && ke.Eb();
					var n = w.v();
					p > n && Ie.n(x.je, e, -n - 1, E, y, X, p)
				}, w.re = function(n) {
					r && s.Ec(Gn, n && r.ud.kh ? "" : "hidden")
				}, w.Yc = function(n, t) {
					h && t >= g && (h = o, A.le(), ke.Eb(), Ie.n(x.Df, e, g, E, j, g, p)), Ie.n(x.Cf, e, t, E, y, X, p)
				}, w.Of = function(n) {
					n && !m && (m = n, n.Rc($JssorPlayer$.bf, d))
				}, w.i(i, u.Kc, l), r && w.ad(r), g = w.wb(), w.ad(i), y = g + i.vc, p = w.wb(), X = _n ? g + i.Lc : p, w.z = function() {
					k.z(), w.U()
				}
			}

			function en() {
				Ae = se, Ce = xe.se(), je = he.v(), Ee = E(je)
			}

			function tn() {
				en(), (ve || t()) && (xe.U(), Ie.n(x.Bf))
			}

			function rn(n) {
				if (g()) {
					var e = he.v(),
						t = Ee,
						r = 0;
					n && f.Db(ye) >= gn.Hd && (t = e, r = pe), t = f.kb(t), t = j(t + r, .5);
					var c = f.Db(t - e);
					1 > c && gn.td != d.H && (c = f.B(c, .5)), de && n || !Ae ? e == t ? Dn.Fc() : xe.Jc(e, t, c * oe) : xe.wc(Ce)
				}
			}

			function cn(n) {
				!s.ob(s.kc(n), i, l.ge) && s.Tb(n)
			}

			function on(n) {
				le = o, ve = c, tn(), Ae || (Hn = 0), Ie.n(x.Af, B(je), je, n)
			}

			function bn(n) {
				un(n, 1)
			}

			function un(n, t) {
				if (ye = 0, Xe = 0, pe = 0, ze = Fe, t) {
					var r = n.touches[0];
					ge = {
						x: r.clientX,
						y: r.clientY
					}
				} else ge = s.xd(n);
				var c = s.kc(n),
					o = s.ob(c, "1", Le);
				o && o !== ln || Un || t && 1 != n.touches.length || (Kn = s.ob(c, i, l.ge) || !ae || !O(), Ie.i(e, t ? "touchmove" : "mousemove", fn), le = !Kn && s.ob(c, i, l.ld), !le && !Kn && on(n, t))
			}

			function fn(n) {
				var e, t;
				if (n = s.Xg(n), "mousemove" != n.type ? 1 == n.touches.length ? (t = n.touches[0], e = {
						x: t.clientX,
						y: t.clientY
					}) : an() : e = s.xd(n), e) {
					var r = e.x - ge.x,
						o = e.y - ge.y,
						i = f.Db(r),
						b = f.Db(o);
					if (Hn || i > 1.5 || b > 1.5)
						if (le) on(n, t);
						else {
							f.gb(Ee) != Ee && (Hn = Hn || yn & Un), !r && !o || Hn || (Hn = 3 == Un ? b > i ? 2 : 1 : Un, Ze && 1 == Hn && b > 2.4 * i && (Kn = c));
							var u = r,
								a = Mn;
							2 == Hn && (u = o, a = Rn), -1.5 > (ye - Xe) * ee && (pe = 0), (ye - Xe) * ee > 1.5 && (pe = -1), Xe = ye, ye = u, Ne = Ee - ye * ee / a / ze * gn.zf, ye && Hn && !Kn && (s.Tb(n), xe.eh(c), xe.gh(Ne))
						}
				}
			}

			function an() {
				if (z(), Ie.Y(e, "mousemove", fn), Ie.Y(e, "touchmove", fn), de = ye, ve) {
					de && 8 & _n && (_n = 0), xe.U(), ve = o;
					var n = he.v();
					Ie.n(x.yf, B(n), n, B(je), je), 12 & re && en(), rn(c)
				}
			}

			function dn(n) {
				var e = s.kc(n),
					t = s.ob(e, "1", Se);
				if (ln === t)
					if (de) s.Sg(n), t = s.ob(e, i, "data-jssor-button", "A"), t && s.Tb(n);
					else if (4 & _n && (_n = 0), t = s.ob(e, i, "data-jssor-click")) {
					s.Tb(n), hitValues = (s.s(t, "data-jssor-click") || "").split(":");
					var r = s.Og(hitValues[1]);
					"to" == hitValues[0] && H(r - 1), "next" == hitValues[0] && H(r, i, c)
				}
			}

			function sn() {
				We.ie && s.N(En, We.ie, [r, "pan-y", "pan-x", "auto"][ae] || ""), Ie.i(ln, "click", dn, c), Ie.i(ln, "mouseleave", P), Ie.i(ln, "mouseenter", V), Ie.i(ln, "mousedown", un), Ie.i(ln, "touchstart", bn), Ie.i(ln, "dragstart", cn), Ie.i(ln, "selectstart", cn), Ie.i(n, "mouseup", an), Ie.i(e, "mouseup", an), Ie.i(e, "touchend", an), Ie.i(e, "touchcancel", an), Ie.i(n, "blur", an), gn.qc && Ie.i(e, "keydown", function(n) {
					var e = s.Be(n);
					(37 == e || 39 == e) && (8 & _n && (_n = 0), M(gn.qc * (e - 38) * ee, c))
				})
			}

			function vn(n) {
				qe.Ie(), Me = [], Qe = [];
				var e = s.Nb(En),
					t = s.ze(["DIV", "A", "LI"]);
				if (s.j(e, function(n) {
						var e = n;
						if (t[n.tagName.toUpperCase()] && !s.ib(n, "u") && "none" != s.Cb(n)) {
							var e = F(c);
							s.ab(n, Sn), s.Kb(e, n), s.db(e, n), s.Cc(e, "flat"), s.Cc(n, "preserve-3d"), s.Bb(e), Me.push(e)
						}
						s.cb(e, (s.cb(e) || 0) + 1)
					}), On = Me.length) {
					var r = 1 & yn ? In : qn;
					J(), ue = gn.Zf, ue == i && (ue = (r - Pn + Bn) / 2), Jn = r / Pn, Vn = f.G(On, gn.u || On, f.kb(Jn)), fe = On > Vn ? gn.lc : 0, r >= On * Pn - Bn && (Jn = On - Bn / Pn, ue = (r - Pn + Bn) / 2, Ve = (r - Pn * On + Bn) / 2), Xn && (ie = Xn.hb, be = !ue && 1 == Vn && On > 1 && ie && (!s.Ge() || s.rd() >= 9)), 1 & fe || (Je = ue / Pn, Je > On - 1 && (Je = On - 1, ue = Je * Pn), He = Je, Ge = He + On - Jn - Bn / Pn), ae = (Vn > 1 || ue ? yn : -1) & gn.Vc, be && (ke = new ie(we, zn, Fn, Xn, Ze, m));
					for (var o = 0; o < Me.length; o++) {
						var b = Me[o],
							u = new $(b, o);
						Qe.push(u)
					}
					Ye = new W, he = new K, xe = new Q(he, Ye), sn()
				}
				s.j(Pe, function(e) {
					e.gd(On, Qe), n && e.Rc(p.wd, M)
				})
			}
			var ln, gn, yn, Xn, pn, hn, mn, Yn, xn, wn, kn, En, jn, An, Cn, Nn, Tn, In, qn, Sn, Ln, Dn, On, zn, Fn, Bn, Mn, Rn, Pn, Vn, Jn, Gn, Hn, Un, Kn, Wn, Zn, Qn, _n, $n, ne, ee, te, re, ce, oe, ie, be, ue, fe, ae, de, se, ve, le, ge, ye, Xe, pe, he, me, Ye, xe, we, ke, Ee, je, Ae, Ce, Ne, Te, Ie = this,
				qe = s.pb(Ie, b),
				Se = "data-jssor-slider",
				Le = "data-jssor-thumb",
				De = 1,
				Oe = 1,
				ze = 1,
				Fe = 1,
				Be = {},
				Me = [],
				Re = -1,
				Pe = [],
				Ve = 0,
				Je = 0,
				Ge = Number.MAX_VALUE,
				He = Number.MIN_VALUE,
				Ue = 1,
				Ke = 0,
				We = s.yd(),
				Ze = We.od,
				Qe = [];
			Ie.Yb = function(n) {
				return n == i ? _n : void(n != _n && (_n = n, _n && Qe[Re] && Qe[Re].Fc()))
			}, Ie.Xb = function() {
				return xn
			}, Ie.Mb = function() {
				return wn
			}, Ie.xf = function(n) {
				return n == i ? kn || xn : void Ie.Hc(n, n / xn * wn)
			}, Ie.Hc = function(n, e, t) {
				s.Q(ln, n), s.T(ln, e), De = n / xn, Oe = e / wn, s.j(Be, function(n) {
					n.Hc(De, Oe, t)
				}), kn || (s.Kb(Gn, En), s.jb(Gn, 0), s.fb(Gn, 0)), kn = n
			}, Ie.jf = A, Ie.mf = C, Ie.Ee = function() {
				Ie.Yb(_n || 1)
			}, Ie.I = function(n, t) {
				Ie.eb = ln = s.gc(n), xn = s.Q(ln), wn = s.T(ln), gn = s.Z({
					Ff: 0,
					Lf: 1,
					qc: 1,
					vd: 0,
					Yb: 0,
					lc: 1,
					Yd: c,
					we: c,
					Xf: 1,
					be: 3e3,
					Cd: 1,
					Oc: 500,
					td: d.tc,
					Hd: 20,
					zf: 1,
					xe: 0,
					Wf: 1,
					Ce: 1,
					Vc: 1
				}, t), gn.Yd = gn.Yd && s.fh(), gn.Wb != i && (gn.be = gn.Wb), gn.Vf != i && (gn.u = gn.Vf), gn.Uf != i && (gn.Zf = gn.Uf), _n = 63 & gn.Yb, !gn.Wf, te = gn.Xf, re = gn.Cd, re &= Ze ? 10 : 5, ce = gn.be, oe = gn.Oc, yn = 3 & gn.Ce, $n = "rtl" == s.pf(s.s(ln, "dir")), ne = $n && (1 == yn || 1 & gn.Vc), ee = ne ? -1 : 1, Xn = gn.uf, pn = s.Z({
					hb: u
				}, gn.Tf), hn = gn.Sf, mn = gn.Rf, Yn = gn.ph;
				var r = s.Nb(ln);
				s.j(r, function(n, e) {
					var t = s.ib(n, "u");
					"loading" == t ? jn = n : ("slides" == t && (En = n, s.N(En, "margin", 0), s.N(En, "padding", 0), s.Cc(En, "flat")), "navigator" == t && (An = n), "arrowleft" == t && (Cn = n), "arrowright" == t && (Nn = n), "thumbnavigator" == t && (Tn = n), "STYLE" != n.tagName && "SCRIPT" != n.tagName && (Be[t || e] = new U(n, "slides" == t, s.ze(["slides", "thumbnavigator"])[t])))
				}), jn && s.ic(jn), jn = jn || s.Tc(e), In = s.Q(En), qn = s.T(En), zn = gn.gf || In, Fn = gn.ff || qn, Sn = {
					M: zn,
					L: Fn,
					a: 0,
					f: 0,
					Od: "block",
					Zb: "absolute"
				}, Bn = gn.xe, Mn = zn + Bn, Rn = Fn + Bn, Pn = 1 & yn ? Mn : Rn, we = new _, s.s(ln, Se, "1"), s.cb(En, s.cb(En) || 0), s.Jb(En, "absolute"), Gn = s.Lb(En, c), s.N(Gn, "pointerEvents", "none"), s.Kb(Gn, En), s.db(Gn, we.eb), s.Ec(En, "hidden"), An && hn && (hn.zc = $n, Wn = new hn.hb(An, hn, xn, wn), Pe.push(Wn)), mn && Cn && Nn && (mn.zc = $n, mn.lc = gn.lc, Zn = new mn.hb(Cn, Nn, mn, Ie), Pe.push(Zn)), Tn && Yn && (Yn.vd = gn.vd, Yn.qc = Yn.qc || 0, Yn.zc = $n, Qn = new Yn.hb(Tn, Yn, jn), !Yn.jh && s.s(Tn, Le, "1"), Pe.push(Qn)), vn(c), Ie.Hc(xn, wn), R(), D(B(gn.vd)), s.N(ln, "visibility", "visible")
			}, Ie.z = function() {
				_n = 0, s.z(Qe, Pe, qe), s.Gc(ln)
			}, s.I(Ie)
		};
	x.If = 21, x.Af = 22, x.yf = 23, x.bh = 24, x.Yg = 25, x.Hf = 26, x.rg = 27, x.Bf = 28, x.tg = 31, x.ug = 32, x.Tg = 202, x.vg = 203, x.Ef = 206, x.Df = 207, x.Cf = 208, x.je = 209, jssor_1_slider_init = function() {
		function e() {
			var r = b.eb.parentNode,
				c = r.clientWidth;
			if (c) {
				var o = t.min(u || c, c);
				b.xf(o)
			} else n.setTimeout(e, 30)
		}
		var r = [{
				J: 500,
				W: 40,
				u: 10,
				F: 5,
				k: 2,
				g: 15,
				R: c,
				p: d.tc
			}, {
				J: 800,
				y: .3,
				u: 2,
				hc: {
					a: [.3, .7]
				},
				Ib: {
					dd: 12
				},
				p: {
					a: d.Fb,
					k: d.H
				},
				k: 2
			}, {
				J: 1e3,
				x: -1,
				y: 2,
				F: 2,
				q: 11,
				l: 1,
				R: c,
				Gb: 2049,
				Ib: {
					cd: 15
				},
				p: {
					f: d.O,
					a: d.O,
					q: d.O,
					k: d.H,
					l: d.O
				},
				k: 2,
				m: {
					l: .85
				}
			}, {
				J: 1200,
				x: 4,
				u: 2,
				q: 11,
				R: c,
				Gb: 2049,
				Ib: {
					dd: 15
				},
				p: {
					f: d.O,
					q: d.O,
					k: d.H
				},
				k: 2
			}, {
				J: 1e3,
				x: 4,
				y: -4,
				q: 11,
				l: 1,
				R: c,
				p: {
					f: d.oc,
					a: d.oc,
					q: d.Vd,
					k: d.H,
					l: d.oc
				},
				k: 2,
				m: {
					l: .8
				}
			}, {
				J: 1500,
				x: .3,
				y: -.3,
				W: 80,
				u: 10,
				F: 5,
				k: 2,
				g: 15,
				hc: {
					f: [.3, .7],
					a: [.3, .7]
				},
				p: {
					f: d.Ad,
					a: d.Ad,
					g: d.tc
				},
				m: {
					f: .8,
					a: 2.5
				}
			}, {
				J: 1e3,
				x: -3,
				y: 1,
				F: 2,
				q: 11,
				l: 1,
				R: c,
				Gb: 2049,
				Ib: {
					cd: 28
				},
				p: {
					f: d.O,
					a: d.O,
					q: d.O,
					k: d.H,
					l: d.O
				},
				k: 2,
				m: {
					l: .7
				}
			}, {
				J: 1e3,
				x: .5,
				y: .5,
				q: 1,
				l: 1,
				R: c,
				p: {
					f: d.Fb,
					a: d.Fb,
					q: d.Fb,
					k: d.H,
					l: d.Fb
				},
				k: 2,
				m: {
					l: .5
				}
			}, {
				J: 1200,
				x: -.6,
				y: -.6,
				q: 1,
				l: 1,
				hc: {
					f: [.2, .8],
					a: [.2, .8],
					q: [.2, .8],
					l: [.2, .8]
				},
				k: 2,
				m: {
					l: .5
				}
			}, {
				J: 1200,
				y: -.5,
				W: 30,
				u: 15,
				k: 2,
				R: c,
				fd: y.ef,
				p: {
					a: d.tf,
					k: d.H
				},
				m: {
					a: 1.5
				}
			}, {
				J: 500,
				W: 12,
				u: 10,
				F: 5,
				k: 2,
				g: 15,
				fd: y.Ze,
				Gb: 2050,
				p: {
					g: d.ae
				}
			}, {
				J: 800,
				W: 20,
				g: 3,
				R: c,
				Gb: 260,
				p: {
					g: d.Td,
					k: d.H
				},
				k: 2
			}],
			o = [
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 0,
					d: 1200,
					y: 300,
					o: 1,
					e: {
						y: 24,
						o: 6
					}
				}, {
					b: 5600,
					d: 800,
					y: -200,
					o: -1,
					e: {
						y: 5
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 400,
					d: 800,
					x: 200,
					o: 1,
					e: {
						x: 27,
						o: 6
					}
				}, {
					b: 5600,
					d: 800,
					x: -200,
					o: -1,
					e: {
						x: 5
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 400,
					d: 800,
					x: -200,
					o: 1,
					e: {
						x: 27,
						o: 6
					}
				}, {
					b: 5600,
					d: 800,
					x: 200,
					o: -1,
					e: {
						x: 5
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 1600,
					d: 600,
					x: 200,
					y: -230,
					o: 1,
					e: {
						x: 3,
						y: 3
					}
				}, {
					b: 5600,
					d: 800,
					o: -1
				}],
				[{
					b: 4600,
					d: 960,
					x: -204,
					e: {
						x: 1
					}
				}],
				[{
					b: -1,
					d: 1,
					sX: -1,
					sY: -1
				}, {
					b: 3400,
					d: 400,
					sX: 1,
					sY: 1
				}, {
					b: 3800,
					d: 300,
					o: -1,
					sX: .1,
					sY: .1
				}],
				[{
					b: -1,
					d: 1,
					sX: -1,
					sY: -1
				}, {
					b: 3520,
					d: 400,
					sX: 1,
					sY: 1
				}, {
					b: 3920,
					d: 300,
					o: -1,
					sX: .1,
					sY: .1
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 2200,
					d: 1200,
					x: -135,
					y: -24,
					o: 1,
					e: {
						x: 7,
						y: 7
					}
				}, {
					b: 4600,
					d: 640,
					x: -130,
					e: {
						x: 1
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 4600,
					d: 240,
					x: -75,
					o: 1
				}, {
					b: 4840,
					d: 480,
					x: -150
				}, {
					b: 5320,
					d: 240,
					x: -75,
					o: -1
				}],
				[{
					b: 2800,
					d: 600,
					y: 70,
					sX: -.5,
					sY: -.5,
					e: {
						y: 5
					}
				}, {
					b: 6e3,
					d: 600,
					y: 50,
					r: -10
				}, {
					b: 7e3,
					d: 400,
					o: -1,
					rX: 30,
					rY: -30
				}],
				[{
					b: 0,
					d: 600,
					x: -742,
					sX: 4,
					sY: 4,
					e: {
						x: 6
					}
				}, {
					b: 900,
					d: 600,
					sX: -4,
					sY: -4
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 400,
					d: 500,
					o: 1,
					e: {
						o: 5
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					r: -180
				}, {
					b: 1500,
					d: 500,
					o: 1,
					r: 180,
					e: {
						r: 27
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					r: 180
				}, {
					b: 2e3,
					d: 500,
					o: 1,
					r: -180,
					e: {
						r: 27
					}
				}],
				[{
					b: 2800,
					d: 600,
					y: -270,
					e: {
						y: 6
					}
				}],
				[{
					b: 6e3,
					d: 600,
					y: -100,
					r: -10,
					e: {
						y: 6
					}
				}, {
					b: 7e3,
					d: 400,
					o: -1,
					rX: -30,
					rY: 30
				}],
				[{
					b: -1,
					d: 1,
					sX: -1,
					sY: -1
				}, {
					b: 3400,
					d: 400,
					sX: 1.33,
					sY: 1.33,
					e: {
						sX: 7,
						sY: 7
					}
				}, {
					b: 3800,
					d: 200,
					sX: -.33,
					sY: -.33,
					e: {
						sX: 16,
						sY: 16
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 3400,
					d: 600,
					o: 1
				}, {
					b: 4e3,
					d: 1e3,
					r: 360,
					e: {
						r: 1
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 3400,
					d: 600,
					y: -70,
					o: 1,
					e: {
						y: 27
					}
				}],
				[{
					b: -1,
					d: 1,
					sX: -1,
					sY: -1
				}, {
					b: 3700,
					d: 400,
					sX: 1.33,
					sY: 1.33,
					e: {
						sX: 7,
						sY: 7
					}
				}, {
					b: 4100,
					d: 200,
					sX: -.33,
					sY: -.33,
					e: {
						sX: 16,
						sY: 16
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 3700,
					d: 600,
					o: 1
				}, {
					b: 4300,
					d: 1e3,
					r: 360
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 3700,
					d: 600,
					x: -150,
					o: 1,
					e: {
						x: 27
					}
				}],
				[{
					b: -1,
					d: 1,
					sX: -1,
					sY: -1
				}, {
					b: 4e3,
					d: 400,
					sX: 1.33,
					sY: 1.33,
					e: {
						sX: 7,
						sY: 7
					}
				}, {
					b: 4400,
					d: 200,
					sX: -.33,
					sY: -.33,
					e: {
						sX: 16,
						sY: 16
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 4e3,
					d: 600,
					o: 1
				}, {
					b: 4600,
					d: 1e3,
					r: 360
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 4e3,
					d: 600,
					x: 150,
					o: 1,
					e: {
						x: 27
					}
				}],
				[{
					b: 9300,
					d: 600,
					o: -1,
					r: 540,
					sX: -.5,
					sY: -.5,
					e: {
						r: 5
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: 2,
					sY: 2
				}, {
					b: 6880,
					d: 20,
					o: 1
				}, {
					b: 6900,
					d: 300,
					sX: -2.08,
					sY: -2.08,
					e: {
						sX: 27,
						sY: 27
					}
				}, {
					b: 7200,
					d: 240,
					sX: .08,
					sY: .08
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: 5,
					sY: 5
				}, {
					b: 6300,
					d: 600,
					o: 1,
					sX: -5,
					sY: -5
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 7200,
					d: 440,
					o: 1
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 7420,
					d: 20,
					o: 1
				}, {
					b: 7440,
					d: 200,
					r: 180,
					sX: .4,
					sY: .4
				}, {
					b: 7640,
					d: 200,
					r: 180,
					sX: .5,
					sY: .5
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					r: -60,
					sX: -.9,
					sY: -.9
				}, {
					b: 7620,
					d: 20,
					o: 1
				}, {
					b: 7640,
					d: 300,
					r: 60,
					sX: 1.1,
					sY: 1.1
				}, {
					b: 7940,
					d: 160,
					sX: -.2,
					sY: -.2
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 7920,
					d: 20,
					o: 1
				}, {
					b: 7940,
					d: 300,
					sX: 1.4,
					sY: 1.4
				}, {
					b: 8240,
					d: 160,
					sX: -.5,
					sY: -.5
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 7620,
					d: 20,
					o: 1
				}, {
					b: 7640,
					d: 200,
					r: 180,
					sX: .4,
					sY: .4
				}, {
					b: 7840,
					d: 200,
					r: 180,
					sX: .5,
					sY: .5
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					r: -60,
					sX: -.9,
					sY: -.9
				}, {
					b: 7820,
					d: 20,
					o: 1
				}, {
					b: 7840,
					d: 300,
					r: 60,
					sX: 1.1,
					sY: 1.1
				}, {
					b: 8140,
					d: 160,
					sX: -.2,
					sY: -.2
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 8120,
					d: 20,
					o: 1
				}, {
					b: 8140,
					d: 300,
					sX: 1.4,
					sY: 1.4
				}, {
					b: 8440,
					d: 160,
					sX: -.5,
					sY: -.5
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 7820,
					d: 20,
					o: 1
				}, {
					b: 7840,
					d: 200,
					r: 180,
					sX: .4,
					sY: .4
				}, {
					b: 8040,
					d: 200,
					r: 180,
					sX: .5,
					sY: .5
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					r: -60,
					sX: -.9,
					sY: -.9
				}, {
					b: 8020,
					d: 20,
					o: 1
				}, {
					b: 8040,
					d: 300,
					r: 60,
					sX: 1.1,
					sY: 1.1
				}, {
					b: 8340,
					d: 160,
					sX: -.2,
					sY: -.2
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 8320,
					d: 20,
					o: 1
				}, {
					b: 8340,
					d: 300,
					sX: 1.4,
					sY: 1.4
				}, {
					b: 8640,
					d: 160,
					sX: -.5,
					sY: -.5
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 8020,
					d: 20,
					o: 1
				}, {
					b: 8040,
					d: 200,
					r: 180,
					sX: .4,
					sY: .4
				}, {
					b: 8240,
					d: 200,
					r: 180,
					sX: .5,
					sY: .5
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					r: -60,
					sX: -.9,
					sY: -.9
				}, {
					b: 8220,
					d: 20,
					o: 1
				}, {
					b: 8240,
					d: 300,
					r: 60,
					sX: 1.1,
					sY: 1.1
				}, {
					b: 8540,
					d: 160,
					sX: -.2,
					sY: -.2
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 8520,
					d: 20,
					o: 1
				}, {
					b: 8540,
					d: 300,
					sX: 1.4,
					sY: 1.4
				}, {
					b: 8840,
					d: 160,
					sX: -.5,
					sY: -.5
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 8220,
					d: 20,
					o: 1
				}, {
					b: 8240,
					d: 200,
					r: 180,
					sX: .4,
					sY: .4
				}, {
					b: 8440,
					d: 200,
					r: 180,
					sX: .5,
					sY: .5
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					r: -60,
					sX: -.9,
					sY: -.9
				}, {
					b: 8420,
					d: 20,
					o: 1
				}, {
					b: 8440,
					d: 300,
					r: 60,
					sX: 1.1,
					sY: 1.1
				}, {
					b: 8740,
					d: 160,
					sX: -.2,
					sY: -.2
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 8720,
					d: 20,
					o: 1
				}, {
					b: 8740,
					d: 300,
					sX: 1.4,
					sY: 1.4
				}, {
					b: 9040,
					d: 160,
					sX: -.5,
					sY: -.5
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 8220,
					d: 20,
					o: 1
				}, {
					b: 8240,
					d: 200,
					r: 180,
					sX: .4,
					sY: .4
				}, {
					b: 8440,
					d: 200,
					r: 180,
					sX: .5,
					sY: .5
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					r: -60,
					sX: -.9,
					sY: -.9
				}, {
					b: 8420,
					d: 20,
					o: 1
				}, {
					b: 8440,
					d: 300,
					r: 60,
					sX: 1.1,
					sY: 1.1
				}, {
					b: 8740,
					d: 160,
					sX: -.2,
					sY: -.2
				}],
				[{
					b: -1,
					d: 1,
					o: -1,
					sX: -.9,
					sY: -.9
				}, {
					b: 8720,
					d: 20,
					o: 1
				}, {
					b: 8740,
					d: 300,
					sX: 1.4,
					sY: 1.4
				}, {
					b: 9040,
					d: 160,
					sX: -.5,
					sY: -.5
				}],
				[{
					b: -1,
					d: 1,
					sX: -.2,
					sY: -.2
				}, {
					b: 0,
					d: 400,
					y: 330,
					e: {
						y: 1
					}
				}, {
					b: 900,
					d: 400,
					y: 50,
					rX: 70,
					e: {
						y: 1,
						rX: 1
					}
				}, {
					b: 20700,
					d: 1e3,
					y: -95,
					rX: -70,
					sX: .2,
					sY: .2,
					e: {
						y: 16,
						rX: 16,
						sX: 16,
						sY: 16
					}
				}, {
					b: 22700,
					d: 900,
					y: 25,
					o: -1,
					rX: 60
				}],
				[{
					b: -1,
					d: 1,
					o: -.5
				}, {
					b: 900,
					d: 400,
					o: -.5
				}],
				[{
					b: -1,
					d: 1,
					sX: -.2,
					sY: -.2
				}, {
					b: 1700,
					d: 400,
					y: 310,
					e: {
						y: 1
					}
				}, {
					b: 2600,
					d: 400,
					y: 50,
					rX: 70,
					e: {
						y: 1,
						rX: 1
					}
				}, {
					b: 19700,
					d: 1e3,
					y: 20,
					e: {
						y: 1
					}
				}, {
					b: 20700,
					d: 1e3,
					y: -95,
					rX: -70,
					sX: .2,
					sY: .2,
					e: {
						y: 16,
						rX: 16,
						sX: 16,
						sY: 16
					}
				}, {
					b: 22700,
					d: 900,
					y: 25,
					o: -1,
					rX: 60
				}],
				[{
					b: 19700,
					d: 1e3,
					o: -1
				}],
				[{
					b: -1,
					d: 1,
					o: -.5
				}, {
					b: 2600,
					d: 400,
					o: -.5
				}],
				[{
					b: -1,
					d: 1,
					sX: -.2,
					sY: -.2
				}, {
					b: 3400,
					d: 400,
					y: 290,
					e: {
						y: 1
					}
				}, {
					b: 4800,
					d: 400,
					y: 50,
					rX: 70,
					e: {
						y: 1,
						rX: 1
					}
				}, {
					b: 19700,
					d: 1e3,
					y: 40,
					e: {
						y: 1
					}
				}, {
					b: 20700,
					d: 1e3,
					y: -95,
					rX: -70,
					sX: .2,
					sY: .2,
					e: {
						y: 16,
						rX: 16,
						sX: 16,
						sY: 16
					}
				}, {
					b: 22700,
					d: 900,
					y: 25,
					o: -1,
					rX: 60
				}],
				[{
					b: 19700,
					d: 1e3,
					o: -1
				}],
				[{
					b: -1,
					d: 1,
					c: {
						t: -280
					}
				}, {
					b: 3800,
					d: 100,
					c: {
						t: 50.4
					},
					e: {
						c: {
							t: 32
						}
					}
				}, {
					b: 3900,
					d: 100,
					c: {
						t: 33.6
					},
					e: {
						c: {
							t: 32
						}
					}
				}, {
					b: 4e3,
					d: 100,
					c: {
						t: 30.8
					},
					e: {
						c: {
							t: 32
						}
					}
				}, {
					b: 4100,
					d: 100,
					c: {
						t: 30.8
					},
					e: {
						c: {
							t: 32
						}
					}
				}, {
					b: 4200,
					d: 100,
					c: {
						t: 33.6
					},
					e: {
						c: {
							t: 32
						}
					}
				}, {
					b: 4300,
					d: 100,
					c: {
						t: 22.4
					},
					e: {
						c: {
							t: 32
						}
					}
				}, {
					b: 4400,
					d: 100,
					c: {
						t: 28
					},
					e: {
						c: {
							t: 32
						}
					}
				}, {
					b: 4500,
					d: 100,
					c: {
						t: 50.4
					},
					e: {
						c: {
							t: 32
						}
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -.5
				}, {
					b: 4800,
					d: 400,
					o: -.5
				}],
				[{
					b: -1,
					d: 1,
					sX: -.2,
					sY: -.2
				}, {
					b: 5700,
					d: 400,
					y: 270,
					e: {
						y: 1
					}
				}, {
					b: 6600,
					d: 400,
					y: 50,
					rX: 40,
					e: {
						y: 1,
						rX: 1
					}
				}, {
					b: 14700,
					d: 500,
					rX: 30,
					e: {
						rX: 1
					}
				}, {
					b: 19700,
					d: 1e3,
					y: 60,
					e: {
						y: 1
					}
				}, {
					b: 20700,
					d: 1e3,
					y: -95,
					rX: -70,
					sX: .2,
					sY: .2,
					e: {
						y: 16,
						rX: 16,
						sX: 16,
						sY: 16
					}
				}, {
					b: 22700,
					d: 900,
					y: 25,
					o: -1,
					rX: 60
				}],
				[{
					b: 19700,
					d: 1e3,
					o: -1
				}],
				[{
					b: 6600,
					d: 400,
					o: -.2
				}, {
					b: 14700,
					d: 500,
					o: -.8
				}],
				[{
					b: -1,
					d: 1,
					o: -.5
				}, {
					b: 14700,
					d: 500,
					o: -.5
				}],
				[{
					b: -1,
					d: 1,
					sX: -.2,
					sY: -.2
				}, {
					b: 7500,
					d: 400,
					y: 270,
					e: {
						y: 1
					}
				}, {
					b: 8400,
					d: 400,
					y: 50,
					rX: 40,
					e: {
						y: 1,
						rX: 1
					}
				}, {
					b: 14700,
					d: 500,
					rX: 30,
					e: {
						rX: 1
					}
				}, {
					b: 19700,
					d: 1e3,
					y: 60,
					e: {
						y: 1
					}
				}, {
					b: 20700,
					d: 1e3,
					y: -95,
					rX: -70,
					sX: .2,
					sY: .2,
					e: {
						y: 16,
						rX: 16,
						sX: 16,
						sY: 16
					}
				}, {
					b: 22700,
					d: 900,
					y: 25,
					o: -1,
					rX: 60
				}],
				[{
					b: 8400,
					d: 400,
					o: -1
				}],
				[{
					b: -1,
					d: 1,
					o: -.5
				}, {
					b: 8400,
					d: 400,
					o: -.5
				}],
				[{
					b: -1,
					d: 1,
					sX: -.2,
					sY: -.2
				}, {
					b: 9300,
					d: 400,
					y: 270,
					e: {
						y: 1
					}
				}, {
					b: 10200,
					d: 400,
					y: 50,
					rX: 40,
					e: {
						y: 1
					}
				}, {
					b: 14700,
					d: 500,
					rX: 30,
					e: {
						rX: 1
					}
				}, {
					b: 19700,
					d: 1e3,
					y: 60,
					e: {
						y: 1
					}
				}, {
					b: 20700,
					d: 1e3,
					y: -95,
					rX: -70,
					sX: .2,
					sY: .2,
					e: {
						y: 16,
						rX: 16,
						sX: 16,
						sY: 16
					}
				}, {
					b: 22700,
					d: 900,
					y: 25,
					o: -1,
					rX: 60
				}],
				[{
					b: 10200,
					d: 400,
					o: -1
				}],
				[{
					b: -1,
					d: 1,
					o: -.5
				}, {
					b: 10200,
					d: 400,
					o: -.5
				}],
				[{
					b: -1,
					d: 1,
					sX: -.2,
					sY: -.2
				}, {
					b: 11100,
					d: 400,
					y: 270,
					e: {
						y: 1
					}
				}, {
					b: 12e3,
					d: 400,
					y: 50,
					rX: 40,
					e: {
						y: 1,
						rX: 1
					}
				}, {
					b: 14700,
					d: 500,
					rX: 30,
					e: {
						rX: 1
					}
				}, {
					b: 19700,
					d: 1e3,
					y: 60,
					e: {
						y: 1
					}
				}, {
					b: 20700,
					d: 1e3,
					y: -95,
					rX: -70,
					sX: .2,
					sY: .2,
					e: {
						y: 16,
						rX: 16,
						sX: 16,
						sY: 16
					}
				}, {
					b: 22700,
					d: 900,
					y: 25,
					o: -1,
					rX: 60
				}],
				[{
					b: 12e3,
					d: 400,
					o: -1
				}],
				[{
					b: -1,
					d: 1,
					o: -.5
				}, {
					b: 12e3,
					d: 400,
					o: -.5
				}],
				[{
					b: -1,
					d: 1,
					sX: -.2,
					sY: -.2
				}, {
					b: 12900,
					d: 400,
					y: 270,
					e: {
						y: 1
					}
				}, {
					b: 13800,
					d: 400,
					y: 50,
					rX: 40,
					e: {
						y: 1,
						rX: 1
					}
				}, {
					b: 14700,
					d: 500,
					rX: 30,
					e: {
						rX: 1
					}
				}, {
					b: 19700,
					d: 1e3,
					y: 60,
					e: {
						y: 1
					}
				}, {
					b: 20700,
					d: 1e3,
					y: -95,
					rX: -70,
					sX: .2,
					sY: .2,
					e: {
						y: 16,
						rX: 16,
						sX: 16,
						sY: 16
					}
				}, {
					b: 22700,
					d: 900,
					y: 25,
					o: -1,
					rX: 60
				}],
				[{
					b: 13800,
					d: 400,
					o: -1
				}],
				[{
					b: -1,
					d: 1,
					o: -.5
				}, {
					b: 13800,
					d: 400,
					o: -.5
				}],
				[{
					b: -1,
					d: 1,
					sX: -.2,
					sY: -.2
				}, {
					b: 15700,
					d: 400,
					y: 270,
					e: {
						y: 1
					}
				}, {
					b: 18800,
					d: 400,
					y: 30,
					rX: 70,
					e: {
						y: 1,
						rX: 1
					}
				}, {
					b: 19700,
					d: 1e3,
					y: 80,
					e: {
						y: 1
					}
				}, {
					b: 20700,
					d: 1e3,
					y: -95,
					rX: -70,
					sX: .2,
					sY: .2,
					e: {
						y: 16,
						rX: 16,
						sX: 16,
						sY: 16
					}
				}, {
					b: 22700,
					d: 900,
					y: 25,
					o: -1,
					rX: 60
				}],
				[{
					b: 19700,
					d: 1e3,
					o: -1
				}],
				[{
					b: -1,
					d: 1,
					o: -.5
				}, {
					b: 18800,
					d: 400,
					o: -.5
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 16100,
					d: 300,
					o: 1
				}, {
					b: 16400,
					d: 500,
					x: -238,
					e: {
						x: 6
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 16100,
					d: 300,
					o: 1
				}, {
					b: 16400,
					d: 500,
					x: 238,
					e: {
						x: 6
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 16700,
					d: 400,
					y: 200,
					o: 1,
					e: {
						y: 2,
						o: 6
					}
				}, {
					b: 17100,
					d: 300,
					y: -28,
					e: {
						y: 3
					}
				}, {
					b: 17400,
					d: 300,
					y: 28,
					e: {
						y: 2
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 16900,
					d: 400,
					y: 200,
					o: 1,
					e: {
						y: 2,
						o: 6
					}
				}, {
					b: 17300,
					d: 300,
					y: -28,
					e: {
						y: 3
					}
				}, {
					b: 17600,
					d: 300,
					y: 28,
					e: {
						y: 2
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 17100,
					d: 400,
					y: 200,
					o: 1,
					e: {
						y: 2,
						o: 6
					}
				}, {
					b: 17500,
					d: 300,
					y: -28,
					e: {
						y: 3
					}
				}, {
					b: 17800,
					d: 300,
					y: 28,
					e: {
						y: 2
					}
				}],
				[{
					b: -1,
					d: 1,
					o: -1
				}, {
					b: 17300,
					d: 400,
					y: 200,
					o: 1,
					e: {
						y: 2,
						o: 6
					}
				}, {
					b: 17700,
					d: 300,
					y: -28,
					e: {
						y: 3
					}
				}, {
					b: 18e3,
					d: 300,
					y: 28,
					e: {
						y: 2
					}
				}]
			],
			i = {
				Yb: 1,
				Oc: 800,
				td: d.Xd,
				uf: {
					hb: X,
					fc: r,
					kf: 1
				},
				Tf: {
					hb: Y,
					fc: o,
					wg: [
						[{
							d: 2e3,
							b: 5600
						}],
						[{
							d: 2e3,
							b: 9300
						}],
						[{
							d: 2e3,
							b: 22700
						}]
					]
				},
				Rf: {
					hb: m
				},
				Sf: {
					hb: h
				}
			},
			b = new x("jssor_1", i),
			u = screen.width;
		e(), s.sb(n, "load", e), s.sb(n, "resize", e), s.sb(n, "orientationchange", e)
	}
}(window, document, Math, null, !0, !1);