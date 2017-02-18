/*$(function () {
     $.getJSON('assets/php/date.php', function(chartData) {
    Highcharts.chart('columnChart', {
        chart: {
            type: 'column',
            renderTo: 'columnChart'
        },
        colors:['#FB404B','#1DC7EA'],
        
        title: {
            text: 'Male and Female Count(As per age)'
        },
        xAxis: {
             categories: ['0-10', '10-20', '20-30', '30-40', '40-50','50-60','60-70','70-80','80-90','90-100'],
            crosshair: true,
            title:{
                text: 'Age Group'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Count'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: chartData
    });
});
});

$(function () {
     $.getJSON('assets/php/count.php', function(chartData) {
    Highcharts.chart('pieChart', {
        chart: {
            renderTo: 'pieChart',
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        colors:['#FB404B','#1DC7EA'],
        title: {
            text: 'Total % Count of Male & Female'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Count',
            data: chartData
        }]

    });
});
         });
*/


$(function () {
     $.getJSON('assets/php/searchparticularDonor.php', function(chartData) {
    Highcharts.chart('searchparticularDonor', {
        chart: {
            type: 'column',
            renderTo: 'searchparticularDonor'
        },
        colors:['#FB404B','#1DC7EA'],
        
        title: {
            text: 'Male and Female Count(As per age)'
        },
        xAxis: {
             categories: ['0-10', '10-20', '20-30', '30-40', '40-50','50-60','60-70','70-80','80-90','90-100'],
            crosshair: true,
            title:{
                text: 'Age Group'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Count'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: chartData
    });
});
});