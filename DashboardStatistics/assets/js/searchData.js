 $(document).ready(function() {
 $.ajax({
                  //method: "GET",
                  url: "SessionNotSet.php",
                  //dataType: "script"
                });




        $("input[name$='content_type']").click(function() {
        var test = $(this).val();
            $("div.desc").hide();
            $("#Data" + test).show();
             });

 $("#submit").click(function(){
            var bloodgroup = $("#bloodgroup").val();
            var bloodbankname = $("#bloodbankname").val();
            // Returns successful data submission message when the entered information is stored in database.
            if(bloodgroup == "")
                {
                    alert("Please select a Bloodgroup");
               /* $("#msg").html("Please select a Bloodgroup").delay(3000).fadeOut("slow");
                return false;*/
                }
            var dataString = 'bloodgroup1='+ bloodgroup + '&bloodbankname1='+ bloodbankname; 
            
            // AJAX Code To Submit Form.
            $.ajax({
            type: "POST",
            url: "assets/php/searchBG.php",
            data: dataString,
            dataType    : 'json', // what type of data do we expect back from the server
            encode          : true,
            success: function(data){
                console.log(data);
                var check = [];var check = [null];var wb = data[0][0]['data'];var pcv = data[0][1]['data'];var rdp = data[0][2]['data'];var ffp = data[0][3]['data'];
                if(JSON.stringify(check) == JSON.stringify(wb) && JSON.stringify(check) == JSON.stringify(pcv) && JSON.stringify(check) == JSON.stringify(rdp) && JSON.stringify(check) == JSON.stringify(ffp))
                    
                        {
                         $("#Data1").html("No Data For Today..!!!").delay(3000).fadeOut("slow");
                        }
                        else{
                                /* Highchart for Daily   */
                                   Highcharts.chart('Data1', {
                                        chart: {
                                            type: 'column'
                                        },
                                        colors:['rgb(241, 92, 128)','rgb(128, 133, 233)','rgb(253, 236, 109)','rgb(43, 144, 143)'],
                                        title: {
                                            text: 'Daily Data'
                                        },
                                        xAxis: {
                                            categories: ['Components'],
                                        },
                                        yAxis: {
                                            title: {
                                            text: 'Total Stock'
                                        },
                                        },
                                        credits: {
                                            enabled: false
                                        },
                                        series:data[0]
                                    });
                                }
               
               var check = [];var check = [null];var wb = data[1][0]['data'];var pcv = data[1][1]['data'];var rdp = data[1][2]['data'];var ffp = data[1][3]['data'];
                if(JSON.stringify(check) == JSON.stringify(wb) && JSON.stringify(check) == JSON.stringify(pcv) && JSON.stringify(check) == JSON.stringify(rdp) && JSON.stringify(check) == JSON.stringify(ffp))
                    
                        {
                         $("#Data2").html("No Data For This Week..!!!").delay(3000).fadeOut("slow");
                        }
                else{   
                /* Highchart for Weekly   */

                    Highcharts.chart('Data2', {
                        chart: {
                            type: 'column'
                        },
                        colors:['rgb(241, 92, 128)','rgb(128, 133, 233)','rgb(253, 236, 109)','rgb(43, 144, 143)'],
                        title: {
                            text: 'Weekly Data'
                        },
                        xAxis: {
                            categories: ['Components']
                        },
                        yAxis: {
                            title: {
                            text: 'Total Stock'
                        },
                        },
                        credits: {
                            enabled: false
                        },
                        series:data[1]
                    });
                   }
                var check = [];var check = [null];var wb = data[2][0]['data'];var pcv = data[2][1]['data'];var rdp = data[2][2]['data'];var ffp = data[2][3]['data'];
                    if(JSON.stringify(check) == JSON.stringify(wb) && JSON.stringify(check) == JSON.stringify(pcv) && JSON.stringify(check) == JSON.stringify(rdp) && JSON.stringify(check) == JSON.stringify(ffp))
                    
                        {
                         $("#Data3").html("No Data For This Month..!!!").delay(3000).fadeOut("slow");
                        }
                    else{ 
                 /* Highchart for Monthly   */

                 Highcharts.chart('Data3', {
                        chart: {
                            type: 'column'
                        },
                        colors:['rgb(241, 92, 128)','rgb(128, 133, 233)','rgb(253, 236, 109)','rgb(43, 144, 143)'],
                        title: {
                            text: 'Monthly Data'
                        },
                        xAxis: {
                            categories: ['Components']
                        },
                        yAxis: {
                            title: {
                            text: 'Total Stock'
                        },
                        },
                        credits: {
                            enabled: false
                        },
                        series:data[2]
                    });
                }
             }

            });
            return false;
        });



        });