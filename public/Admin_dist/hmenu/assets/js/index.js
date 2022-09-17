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
    
});

$(function(){
    "use strict";

    c3.generate({
        bindto: '#chart-employment', // id of chart wrapper
        data: {
            columns: [
                // each columns data
                ['data1', 2, 8, 6, 7, 14, 11],
                ['data2', 5, 15, 27, 15, 21, 25],
                ['data3', 17, 18, 21, 8, 30, 29]
            ],
            type: 'line', // default type of chart
            colors: {
                'data1': '#fd9644', // orange
                'data2': '#467fcf', // blue
                'data3': '#5eba00', // green
            },
            names: {
                // name of each serie
                'data1': 'توسعه',
                'data2': 'بازاریابی',
                'data3': 'تخفیف'
            }
        },
        axis: {
            x: {
                type: 'category',
                // name of each category
                categories: ['2013', '2014', '2015', '2016', '2017', '2018']
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
});
