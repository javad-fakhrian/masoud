$(function(){
    "use strict";

    $('.sparkbar').sparkline('html', { type: 'bar' });

    $('.sparkline-pie').sparkline('html', {
        type: 'pie',
        offset: 90,
        width: '100px',
        height: '100px',
        sliceColors: ['#29bd73', '#182973', '#ffcd55']
    })    

    // notification popup
    toastr.options.closeButton = true;
    toastr.options.positionClass = 'toast-bottom-right';
    toastr.options.showDuration = 1000;
    toastr['info']('سلام، خوش آمدید به برگو، یک قالب مدیریت منحصر به فرد.');


    $('.knob').knob({
		draw: function () {
		}
    });    
    
});

$(function(){
    "use strict";

    var chart = c3.generate({
        bindto: '#chart-area-spline-sracked', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 150, 80, 150, 260, 190, 170, 230],
                ['data2', 68, 77, 138, 180, 130, 135, 205],
                ['data3', 20, 70, 50, 150, 90, 120, 150],
            ],
            type: 'area-spline', // default type of chart

            groups: [
                [ 'data1', 'data2']
            ],
            colors: {
                'data1': '#5CB65F', // green
                'data2': '#9367B4', // indigo
                'data3': '#f66d9b', // pink
            },
            names: {
                // name of each serie
                'data1': 'درآمد',
                'data2': 'درآمد',
                'data3': 'هزینه',
            }
        },
        axis: {
            x: {
                type: 'category',
                // name of each category
                categories: ['ژان', 'فور', 'مارس', 'آور', 'مه', 'ژوئن', 'ژول']
            },
        },
        legend: {
            show: true, //hide legend
        },
        padding: {
            bottom: 20,
            top: 0
        },
    });
    // Members
    var chart = c3.generate({
        bindto: '#chart-bar-stacked', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 11, 8, 15, 18, 19, 17],
                ['data2', 7, 7, 5, 7, 9, 12]
            ],
            type: 'bar', // default type of chart
            groups: [
                [ 'data1', 'data2']
            ],
            colors: {
                'data1': '#467fcf', // blue
                'data2': '#f66d9b', // pink
            },
            names: {
                // name of each serie
                'data1': 'کاربر',
                'data2': 'ویژه'
            }
        },
        axis: {
            x: {
                type: 'category',
                // name of each category
                categories: ['ژان', 'فور', 'مارس', 'آور', 'مه', 'ژوئن']
            },
        },
        bar: {
            width: 10
        },
        legend: {
            show: false, //hide legend
        },
        padding: {
            bottom: -20,
            top: 0,
            left: -6,
        },
    });
    // Marketing
    var chart = c3.generate({
        bindto: '#chart-area-Marketing', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 11, 8, 15, 18, 19, 17],
                ['data2', 7, 7, 5, 7, 9, 12]
            ],
            type: 'area-spline', // default type of chart
            groups: [
                [ 'data1', 'data2']
            ],
            colors: {
                'data1': '#467fcf', // blue
                'data2': '#f66d9b', // pink
            },
            names: {
                // name of each serie
                'data1': 'ماه گذشته',
                'data2': 'این ماه'
            }
        },
        axis: {
            x: {
                type: 'category',
                // name of each category
                categories: ['ژان', 'فور', 'مارس', 'آور', 'مه', 'ژوئن']
            },
        },
        legend: {
            show: false, //hide legend
        },
        padding: {
            bottom: -20,
            top: 0,
            left: -7,
        },
    });
});

$(function(){
    "use strict";    
    if( $('#world-map-markers').length > 0 ){

        $('#world-map-markers').vectorMap( {
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            borderColor: '#fff',
            borderOpacity: 0.25,
            borderWidth: 0,
            color: '#e6e6e6',
            regionStyle : {
                initial : {
                fill : '#2c2f33'
                }
            },
            markerStyle: {
                initial: {
                    r: 5,
                    'fill': '#fff',
                    'fill-opacity':1,
                    'stroke': '#000',
                    'stroke-width' : 1,
                    'stroke-opacity': 0.4
                },
            },
        
            markers : [{
                latLng : [21.00, 78.00],
                name : 'هند : 350'
            
            },
                {
                latLng : [36.77, -119.41],
                name : 'امریکا : 250'
                
            },              
                {
                latLng : [48.37, 31.16],
                name : 'انگلیس : 39'
            
            },
                {
                latLng : [35.65, 139.83],
                name : 'ژاپن : 37'
            
            }],

            series: {
                regions: [{
                    values: {
                        "US": '#17C2D7',
                        "IN": '#9367B4',
                        "JP": '#5CB65F',
                        "UA": '#f66d9b',
                    },
                    attribute: 'fill'
                }]
            },

            hoverOpacity: null,
            normalizeFunction: 'linear',
            zoomOnScroll: false,
            scaleColors: ['#000000', '#000000'],
            selectedColor: '#000000',
            selectedRegions: [],
            enableZoom: false,
            hoverColor: '#fff',
        });
    }
});

$(function(){
    "use strict";
    var dataStackedBar = {
        labels: ['س1', 'س2', 'س3', 'س4', 'س5', 'س6'],
        series: [
            [8000, 12000, 3600, 1300, 12000, 12000],
            [2000, 4000, 5000, 3000, 7000, 4000],
            [1000, 2000, 4000, 6000, 3000, 2000]
        ]
    };
    new Chartist.Bar('#stackedbar-chart', dataStackedBar, {
        height: "228px",
        stackBars: true,
        axisX: {
            showGrid: false
        },
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value / 1000) + 'k';
            }
        },
        plugins: [
            Chartist.plugins.tooltip({
                appendToBody: true
            }),
            Chartist.plugins.legend({
                legendNames: ['آبی', 'صورتی', 'فیروزه ای']
            })
        ]
    }).on('draw', function(data) {
        if (data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 25px'
            });
        }
    });
});