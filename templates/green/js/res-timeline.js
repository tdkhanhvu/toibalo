(function (e) {
    e.fn.jflatTimeline = function (t) {
        var n = new Array;
        var r = function (e, t) {
            if (e > t) return -1;
            if (e < t) return 1;
            return 0
        };
        var i = 0;
        var s = 0;
        var o = 2;
        var u = 0;
        var a = 500;
        var f = new Array;
        f[0] = "January";
        f[1] = "February";
        f[2] = "March";
        f[3] = "April";
        f[4] = "May";
        f[5] = "June";
        f[6] = "July";
        f[7] = "August";
        f[8] = "September";
        f[9] = "October";
        f[10] = "November";
        f[11] = "December";
        var l = {};
        if (t) {
            e.extend(l, t)
        }
        return this.each(function () {
            selector = e(this);
            if (t.scroll) o = parseInt(t.scroll);
            if (t.width) selector.css("width", t.width);
            if (t.scrollingTime) a = t.scrollingTime;
            if (!selector.children(".timeline-wrap").children(".event.selected").length) selector.children(".timeline-wrap").children(".event:first-child").addClass("selected");
            i = (new Date(selector.children(".timeline-wrap").children(".event.selected").attr("data-date"))).getFullYear();
            s = (new Date(selector.children(".timeline-wrap").children(".event.selected").attr("data-date"))).getMonth();
            if (!selector.children(".month-year-bar").length) {
                selector.prepend('<div class = "month-year-bar"></div>');
                selector.children(".month-year-bar").prepend('<div class = "year"><a class = "prev"><i class = "fa fa-angle-left"></i></a><span>' + String(i) + '</span><a class = "next"><i class = "fa fa-angle-right"></i></a></div>');
                selector.children(".month-year-bar").prepend('<div class = "month"><a class = "prev"><i class = "fa fa-angle-left"></i></a><span>' + String(f[s]) + '</span><a class = "next"><i class = "fa fa-angle-right"></i></a></div>')
            }
            var l = 0;
            selector.children(".timeline-wrap").children(".event").each(function () {
                n[l] = new Date(e(this).attr("data-date"));
                l++
            });
            n.sort(r);
            if (!selector.children(".dates-bar").length) selector.children(".month-year-bar").after('<div class = "dates-bar"><a class = "prev"><i class = "fa fa-angle-left"></i></a><a class = "noevent">No event found</a><a class = "next"><i class = "fa fa-angle-right"></i></a></div>');
            for (l = 0; l < n.length; l++) {
                dateString = String(n[l].getMonth() + 1 + "/" + n[l].getDate() + "/" + n[l].getFullYear());
                if (selector.children(".dates-bar").children('a[data-date = "' + dateString + '"]').length) continue;
                selector.children(".dates-bar").children("a.prev").after("<a data-date = " + dateString + '><span class = "date">' + String(n[l].getDate()) + '</span><span class = "month">' + String(f[n[l].getMonth()]) + "</span></a>")
            }
            for (l = 0; l < selector.children(".timeline-wrap").children(".event").length; l++) {
                var c = new Date(selector.children(".timeline-wrap").children(".event:nth-child(" + String(l + 1) + ")").attr("data-date"));
                dateString = String(c.getMonth() + 1 + "/" + c.getDate() + "/" + c.getFullYear());
                selector.children(".timeline-wrap").children(".event:nth-child(" + String(l + 1) + ")").attr("data-date", dateString)
            }
            selector.children(".dates-bar").children("a:not(.prev, .next, .noevent)").each(function () {
                if ((new Date(e(this).attr("data-date"))).getFullYear() != i) e(this).hide()
            });
            if (selector.hasClass("calledOnce")) return 0;
            selector.addClass("calledOnce");
            selector.children(".dates-bar").children('a[data-date ="' + String(selector.children(".timeline-wrap").children(".event.selected").attr("data-date")) + '"]').addClass("selected");
            if (selector.width() < 500) selector.addClass("s_screen");
            e(window).resize(function () {
                if (selector.width() < 500) selector.addClass("s_screen");
                else selector.removeClass("s_screen")
            });
            selector.children(".dates-bar").children("a:not(.prev, .next, .noevent)").click(function () {
                c = String(e(this).attr("data-date"));
                selector.children(".timeline-wrap").children(".event.selected").removeClass("selected");
                selector.children(".timeline-wrap").children('.event[data-date="' + c + '"]').addClass("selected");
                selector.children(".dates-bar").children("a:not(.prev, .next, .noevent)").removeClass("selected");
                e(this).addClass("selected")
            });
            selector.children(".dates-bar").children("a.next").click(function () {
                var e = o;
                var t = selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible()").length;
                if (u + o >= t) e = t - u - 1;
                if (parseInt(selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").css("width")) * e > selector.children(".dates-bar").width())
                    while (parseInt(selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").css("width")) * e > selector.children(".dates-bar").width() && e > 1) e -= 1;
                var n = -1 * e * parseInt(selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").css("width"));
                selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").animate({
                    marginLeft: "+=" + String(n) + "px"
                }, a);
                u += e;
                s = (new Date(selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(" + String(u) + ")").attr("data-date"))).getMonth();
                selector.children(".month-year-bar").children(".month").children("span").text(f[s])
            });
            selector.children(".dates-bar").children("a.prev").click(function () {
                var e = o;
                var t = selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible()").length;
                if (u <= o) e = u;
                if (parseInt(selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").css("width")) * e > selector.children(".dates-bar").width())
                    while (parseInt(selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").css("width")) * e > selector.children(".dates-bar").width() && e > 1) e -= 1;
                var n = e * parseInt(selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").css("width"));
                selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").animate({
                    marginLeft: "+=" + String(n) + "px"
                }, a);
                u -= e;
                s = (new Date(selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(" + String(u) + ")").attr("data-date"))).getMonth();
                selector.children(".month-year-bar").children(".month").children("span").text(f[s])
            });
            selector.children(".month-year-bar").children(".month").children(".next").click(function () {
                if (!(s == 11)) s += 1;
                else s = 0;
                var t = 0;
                selector.children(".month-year-bar").children(".month").children("span").text(f[s]);
                selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible()").each(function () {
                    t += 1;
                    if ((new Date(e(this).attr("data-date"))).getMonth() >= s) {
                        return false
                    }
                });
                var n = (t - u - 1) * parseInt(selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").css("width"));
                selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").animate({
                    marginLeft: "-=" + String(n) + "px"
                }, a);
                u = t - 1
            });
            selector.children(".month-year-bar").children(".month").children(".prev").click(function () {
                if (!(s == 0)) s -= 1;
                else s = 11;
                var t = 0;
                selector.children(".month-year-bar").children(".month").children("span").text(f[s]);
                selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible()").each(function () {
                    t += 1;
                    if ((new Date(e(this).attr("data-date"))).getMonth() >= s) {
                        return false
                    }
                });
                var n = (t - u - 1) * parseInt(selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").css("width"));
                selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible():eq(0)").animate({
                    marginLeft: "-=" + String(n) + "px"
                }, a);
                u = t - 1
            });
            selector.children(".month-year-bar").children(".year").children(".next").click(function () {
                i += 1;
                selector.children(".month-year-bar").children(".year").children("span").text(String(i));
                selector.children(".dates-bar").children("a:not(.prev, .next, .noevent)").each(function () {
                    if ((new Date(e(this).attr("data-date"))).getFullYear() != i) e(this).hide();
                    else e(this).show()
                });
                if (!selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible").length) {
                    selector.children(".dates-bar").children("a.noevent").css("display", "block")
                } else {
                    selector.children(".dates-bar").children("a.noevent").css("display", "none");
                    selector.children(".dates-bar").children("a:not(.prev, .next, .noevent)").css("margin-left", "0");
                    u = 0;
                    selector.children(".timeline-wrap").children(".event").removeClass("selected");
                    selector.children(".timeline-wrap").children(".event").each(function () {
                        c = new Date(e(this).attr("data-date"));
                        if (c.getFullYear() == i) {
                            e(this).addClass("selected");
                            s = c.getMonth();
                            selector.children(".month-year-bar").children(".month").children("span").text(f[s]);
                            return false
                        }
                    })
                }
                selector.children(".dates-bar").children("a:not(.prev, .next, .noevent)").removeClass("selected");
                selector.children(".dates-bar").children('a[data-date ="' + String(selector.children(".timeline-wrap").children(".event.selected").attr("data-date")) + '"]').addClass("selected")
            });
            selector.children(".month-year-bar").children(".year").children(".prev").click(function () {
                i -= 1;
                selector.children(".month-year-bar").children(".year").children("span").text(String(i));
                selector.children(".dates-bar").children("a:not(.prev, .next, .noevent)").each(function () {
                    if ((new Date(e(this).attr("data-date"))).getFullYear() != i) e(this).hide();
                    else e(this).show(); if (!selector.children(".dates-bar").children("a:not(.prev, .next, .noevent):visible").length) {
                        selector.children(".dates-bar").children("a.noevent").css("display", "block")
                    } else {
                        selector.children(".dates-bar").children("a.noevent").css("display", "none");
                        selector.children(".dates-bar").children("a:not(.prev, .next, .noevent)").css("margin-left", "0");
                        u = 0;
                        selector.children(".timeline-wrap").children(".event").removeClass("selected");
                        selector.children(".timeline-wrap").children(".event").each(function () {
                            c = new Date(e(this).attr("data-date"));
                            if (c.getFullYear() == i) {
                                e(this).addClass("selected");
                                s = c.getMonth();
                                selector.children(".month-year-bar").children(".month").children("span").text(f[s]);
                                return false
                            }
                        })
                    }
                });
                selector.children(".dates-bar").children("a:not(.prev, .next, .noevent)").removeClass("selected");
                selector.children(".dates-bar").children('a[data-date ="' + String(selector.children(".timeline-wrap").children(".event.selected").attr("data-date")) + '"]').addClass("selected")
            })
        })
    }
})(jQuery);
