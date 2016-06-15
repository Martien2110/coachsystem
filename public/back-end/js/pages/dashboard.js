! function(e) {
    function a(e) {
        var a = function(e, a, r) {
                e = e || 0, a = a || 100, r = r || 10;
                for (var t = [], l = new Date, o = 864e5, n = 0; r > n; n++) t.push({
                    date: new Date(l.getTime() - o * n),
                    value: Math.floor(Math.random() * a + e)
                });
                return t.reverse()
            },
            r = AmCharts.makeChart(e, {
                type: "serial",
                theme: "light",
                dataProvider: a(),
                graphs: [{
                    id: "g1",
                    balloonText: "[[category]] | <b>[[value]]</b>",
                    bullet: "round",
                    bulletSize: 8,
                    lineColor: "#fff",
                    lineThickness: 2,
                    negativeLineColor: "#fff",
                    type: "smoothedLine",
                    valueField: "value"
                }],
                chartCursor: {
                    categoryBalloonEnabled: !1,
                    cursorAlpha: 0,
                    fullWidth: !0
                },
                categoryField: "date",
                categoryAxis: {
                    parseDates: !0,
                    axisAlpha: 0,
                    gridAlpha: 0,
                    labelsEnabled: !1
                },
                valueAxes: [{
                    axisAlpha: 0,
                    gridAlpha: 0,
                    labelsEnabled: !1
                }]
            }),
            t = r.balloon;
        t.color = "#464646"
    }

    function r(e) {
        var a = function(e, a, r) {
                e = e || 0, a = a || 100, r = r || 10;
                for (var t = [], l = new Date, o = 864e5, n = 0; r > n; n++) t.push({
                    date: new Date(l.getTime() - o * n),
                    computers: Math.floor(Math.random() * a + e),
                    printers: Math.floor(Math.random() * a + e),
                    cellphones: Math.floor(Math.random() * a + e)
                });
                return t.reverse()
            },
            r = function(e, a, r) {
                return {
                    balloonText: "[[category]] | <b>[[value]]</b>",
                    fillAlphas: .8,
                    labelText: "",
                    lineAlpha: .3,
                    title: a,
                    type: "column",
                    color: r,
                    valueField: e
                }
            },
            t = AmCharts.makeChart(e, {
                type: "serial",
                theme: "light",
                legend: {
                    fontSize: 12,
                    color: "#464646",
                    align: "center",
                    position: "top",
                    markerType: "circle",
                    switchType: ""
                },
                dataProvider: a(),
                valueAxes: [{
                    color: "#464646",
                    stackType: "regular",
                    axisAlpha: 0,
                    gridAlpha: .05
                }],
                graphs: [r("computers", "Computers", "#000"), r("printers", "Printers", "#000"), r("cellphones", "Cell phones", "#000")],
                categoryField: "date",
                categoryAxis: {
                    color: "#464646",
                    parseDates: !0,
                    gridPosition: "start",
                    axisAlpha: 0,
                    gridAlpha: 0,
                    position: "left"
                }
            }),
            l = t.balloon;
        l.color = "#464646"
    }

    function t(a) {
        var r = AmCharts.makeChart(a, {
            theme: "light",
            type: "gauge",
            color: "#737373",
            axes: [{
                axisThickness: 1,
                axisAlpha: .1,
                tickAlpha: .1,
                endValue: 100,
                valueInterval: 20,
                inside: !1,
                bands: [{
                    color: "#66BB6A",
                    startValue: 0,
                    endValue: 50
                }, {
                    color: "#ffeb3b",
                    startValue: 50,
                    endValue: 75
                }, {
                    color: "#EF5350",
                    startValue: 75,
                    endValue: 100
                }],
                bottomText: e("#" + a).data("title"),
                bottomTextYOffset: 15
            }],
            arrows: [{
                id: "arrow-" + a,
                startWidth: 4,
                color: "#737373",
                radius: "85%",
                innerRadius: 0,
                nailAlpha: 1,
                nailColor: "#737373",
                nailRadius: 4,
                borderAlpha: 0
            }]
        });
        l(r)
    }

    function l(e) {
        var a = e.arrows[0],
            r = Math.round(100 * Math.random()),
            t = 100;
        a.setValue && (a.setValue(r), t = 3e3), setTimeout(function() {
            l(e)
        }, t)
    }
    e(document).ready(function() {
        a("chartSalesperDay"), a("chartCustomersPerDay"), a("chartNewsletterSignups"), r("chartTotalSales"), t("chartServerCpu"), t("chartServerMemory"), t("chartServerHd")
    })
}(jQuery);