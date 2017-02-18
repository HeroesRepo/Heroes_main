 $(document).ready(function() {
       $("#submit").click(function(){
            var startDate = $("#startDate").val();
            var endDate = $("#endDate").val();
            var bloodgroup = $("#bloodgroup").val();
            var bloodbankname = $("#bloodbankname").val();
            // Returns successful data submission message when the entered information is stored in database.
            if(startDate == "")
                {
                    alert("Please select a Bloodgroup");
               /* $("#msg").html("Please select a Bloodgroup").delay(3000).fadeOut("slow");
                return false;*/
                }
            var dataString = 'startDateNew='+ startDate + '&endDateNew='+ endDate + '&bloodgroupNew='+ bloodgroup + '&bloodbanknameNew='+ bloodbankname; 
            
            // AJAX Code To Submit Form.
            $.ajax({
            type: "POST",
            url: "assets/php/visitorData.php",
            data: dataString,
            dataType    : 'json', // what type of data do we expect back from the server
            encode          : true,
            success: function(data){
                //console.log(data);
              
                /* Highchart Start   */
                Highcharts.chart('container', {

                        title: {
                            text: 'Data Between dates'
                        },
                        yAxis: {
                            title: {
                                text: 'Quantity(Bags)'
                            }
                        },
                        xAxis: {
                                 categories: data[4],
                                },
                        legend: {
                            layout: 'vertical',
                            align: 'right',
                            verticalAlign: 'middle'
                        },
                        series: [{
                            name: 'Whole Blood',
                            data: data[0]
                        }, {
                            name: 'PCV',
                            data: data[1]
                        }, {
                            name: 'RDP',
                            data: data[2]
                        },{
                            name: 'FFP',
                            data: data[3]
                        }]

                    });
                /* Highchart End   */
             }

            });
            return false;
        });
});