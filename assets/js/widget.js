!function($) {
    "use strict";
$(function(){

		$('.vcarousel').carousel({
            interval: 3000
         });
	
	  $('.scrollerchat').slimScroll({
        height: '393px'
    });
	var chart = c3.generate({
		bindto: '#demo1',
    data: {
        columns: [
            ['data1', 30, 20, 50, 40, 60, 50],
            ['data2', 200, 130, 90, 240, 130, 220],
            ['data3', 300, 200, 160, 400, 250, 250]
        ]
    }
});

 $("#sparkline3").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                     type: 'line',
                     width: '100%',
                     height: '60',
                     lineColor: '#fff',
                     fillColor: "#1AAADA"
                 });
 $("#sparkline4").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                     type: 'line',
                     width: '100%',
                     height: '60',
                     lineColor: '#fff',
                     fillColor: "#7986CB"
                 });
var chart = c3.generate({
		bindto: '#spline',
    data: {
        columns: [
            ['data1', 30],
            ['data2', 120],
        ],
        type : 'donut',
		 colors: {
            data1: '#ff0000',
            data2: '#4CAF50',
			data3: '#00bcd4',
          
        },
        onclick: function (d, i) { console.log("onclick", d, i); },
        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
    },
    donut: {
        title: "Iris Petal Width"
    }
});

//Map
 $('#world-map').vectorMap({
    map: 'world_mill_en',
    scaleColors: ['#666', '#29b6d8'],
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    focusOn: {
        x: 0.5,
        y: 0.5,
        scale: 1.0
    },
    zoomMin: 0.85,
    markerStyle: {
        initial: {
            fill: '#fff',
            stroke: '#fff',
            color: '#ffffff'
        }
    },
    backgroundColor: '#fff',
    regionStyle: {
        initial: {
            fill: '#00bcd4',
            "fill-opacity": 1,
            stroke: '#87c2e0',
            "stroke-width": 0,
            "stroke-opacity": 0
        },
        hover: {
            "fill-opacity": 0.8
        },
        selected: {
            fill: 'yellow'
        }
    },
    markers: [
        //http://www.latlong.net/
        {latLng: [51.507351, -0.127758], name: 'London'},
        {latLng: [41.385064, 2.173403], name: 'Barcelona'},
        {latLng: [40.712784, -74.005941], name: 'New York'},
        {latLng: [-22.911632, -43.188286], name: 'Rio De Janeiro'},
        {latLng: [49.282729, -123.120738], name: 'Vancuver'},
        {latLng: [35.689487, 139.691706], name: 'Tokio'},
        {latLng: [55.755826, 37.617300], name: 'Moskva'},
        {latLng: [43.214050, 27.914733], name: 'Varna'},
        {latLng: [30.044420, 31.235712], name: 'Cairo'}
    ]
});

   
	  ///Calendar
	  (function () {
	    $('#cw-body').fullCalendar({
                                                                                                                   
                                                         header: {
                left: 'prev, next',
                center: 'title',
                right: 'month, agendaWeek, agendaDay'
            },
            buttonIcons: {
                prev: 'none fa fa-arrow-left',
                next: 'none fa fa-arrow-right',
                prevYear: 'none fa fa-arrow-left',
                nextYear: 'none fa fa-arrow-right'
            },
                                                          defaultDate: '2014-06-12',
                                                          editable: true,
                                                          events: [
                                                              {
                                                                  title: 'All Day',
                                                                  start: '2014-06-01',
                                                                  className: 'bgm-cyan'
                                                              },
                                                              {
                                                                  title: 'Long',
                                                                  start: '2014-06-07',
                                                                  end: '2014-06-8',
                                                                  className: 'bgm-orange'
                                                              },
                                                              {
                                                                  id: 999,
                                                                  title: 'Repeat',
                                                                  start: '2014-06-09',
                                                                  className: 'bgm-lightgreen'
                                                              },
                                                              {
                                                                  id: 999,
                                                                  title: 'Repeat',
                                                                  start: '2014-06-16',
                                                                  className: 'bgm-lightblue'
                                                              },
                                                              {
                                                                  title: 'Meet',
                                                                  start: '2014-06-12',
                                                                  end: '2014-06-12',
                                                                  className: 'bgm-green'
                                                              },
                                                              {
                                                                  title: 'Lunch',
                                                                  start: '2014-06-10',
                                                                  className: 'bgm-cyan'
                                                              },
                                                              {
                                                                  title: 'Birthday',
                                                                  start: '2014-06-13',
                                                                  className: 'bgm-amber'
                                                              },
                                                              {
                                                                  title: 'Google',
                                                                  url: 'http://google.com/',
                                                                  start: '2014-06-28',
                                                                  className: 'bgm-amber'
                                                              }
                                                          ]
                                                      });
		 })();
	
});

	
	  
	}(window.jQuery);	