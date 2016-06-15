! function(c) {
    c.randomID = function(c, t) {
        c = c || 10, t = t || "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for (var e = "", a = 0; c > a; a++) {
            var n = Math.floor(Math.random() * t.length);
            e += t.substring(n, n + 1)
        }
        return e
    }, c.isValidSelector = function(t) {
        try {
            c(t)
        } catch (e) {
            return !1
        }
        return !0
    }, c(document).ready(function() {
        c(document).on("click", ".classToggle", function() {
            var t = c(this),
                e = c(t.data("target")),
                a = t.data("class");
            e.hasClass(a) ? e.removeClass(a) : e.addClass(a)
        }), c(document).on("click", ".checkAll", function() {
            var t = c(this),
                e = c(t.data("target"));
            e.prop("checked", !0)
        }), c(document).on("click", ".checkNone", function() {
            var t = c(this),
                e = c(t.data("target"));
            e.prop("checked", !1)
        }), c(document).on("change", ".checkToggle", function() {
            var t = c(this),
                e = c(t.data("target"));
            t.is(":checked") ? e.prop("checked", !0) : e.prop("checked", !1)
        })
    })
}(jQuery);