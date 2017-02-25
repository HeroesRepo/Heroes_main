var app = angular.module("heroesMainApp")
app.controller("heroesMainCtrl", ['$scope','$timeout', 'dailyStockSvc', 'completeStockSvc','donorDetailsSvc','getCountSvc','broadcastSvc', 'getLatLonSvc' , function($scope, $timeout, dailyStockSvc, completeStockSvc,donorDetailsSvc,getCountSvc,broadcastSvc,getLatLonSvc){

  $scope.hasSearched = false;
  $scope.tablePopulated = false;
  $scope.hasAllowedLocation = false;
  $scope.stockData = {};
  $scope.svcData = {};
  $scope.origin;
  $scope.latitude;
  $scope.longitude;
  $scope.isSetOrigin = false;

	$scope.search = {
    	
    	bloodGroups: [
          {name: 'A+ve', identifier: 'a_pos'},
	      	{name: 'O+ve', identifier: 'o_pos'},
	      	{name: 'B+ve', identifier: 'b_pos'},
	      	{name: 'AB+ve', identifier: 'ab_pos'},
	      	{name: 'A-ve', identifier: 'a_neg'},
	      	{name: 'O-ve', identifier: 'o_neg'},
	      	{name: 'B-ve', identifier: 'b_neg'},
	      	{name: 'AB-ve', identifier: 'ab_neg'},
          {name: 'Bombay Blood Group', identifier: 'bombay'}
    	],
   
    	components: [
    		{name: 'Whole Blood', identifier: 'wb'},
    		{name: 'PCV', identifier: 'pcv'},
    		{name: 'RDP', identifier: 'rdp'},
    		{name: 'FFP', identifier: 'ffp'}
    	] 
   	};

 	var distances = [];

 	angular.element(document).ready(function () {
    $("#locationAlert").show().delay(9000).fadeOut();
    //$("#donorDetailsInsertAlert").hide();
    getLocation();
    completeStockSvc.getCompleteStock()
      .then(function(response){
        options.series[0] = response[0];
        options.series[1] = response[1];
        options.series[2] = response[2];
        options.series[3] = response[3];
        chart = new Highcharts.Chart(options)
      }, function(error){

      })
});

   angular.element(document).ready(function () {
    broadcastSvc.getBroadcast()
      .then(function(response){
        //console.log(response);
        $scope.data = response;
      }, function(error){

      })
});


  var getLocation = function(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
        alert("Geolocation is not supported by this browser.");
    }
  }

  $scope.getCount = function() {
      getCountSvc.setCountDetails($scope.search.bloodGroup, $scope.search.component)
      .then(function(response){

      }, function(error){

      });

  };

 

 	$scope.retrieveStock = function(){
 		$scope.hasSearched = true;
    if($scope.isSetOrigin)
   	{	
      dailyStockSvc.getDailyStock($scope.search.bloodGroup, $scope.search.component)
   		.then(
   			function(response){
          $scope.svcData = response;
   				var destinations = [];
          for(var i = 0; i < response.length; i++){
            destinations[i] = new google.maps.LatLng(response[i].bb_lat, response[i].bb_lon);
          }
          service = new google.maps.DistanceMatrixService();
          service.getDistanceMatrix(
            {
              origins: [$scope.origin],
              destinations: destinations,
              travelMode: google.maps.TravelMode.DRIVING
              //avoidHighways: false,
              //avoidTolls: false
            }, 
            callback
          );

          function callback(response, status){
            if(status == "OK"){
              var length = response.rows[0].elements.length;
              var elements = response.rows[0].elements;
              for(var i=0; i<length; i++)
              {
                $scope.svcData[i].distance = elements[i].distance.text;
                $scope.svcData[i].duration = elements[i].duration.text;
              }
              for(var i = 0; i < $scope.svcData.length; i++){
                $scope.svcData[i].last_updated = timeStampDiff(getFormattedDate(Date.now()),$scope.svcData[i].posting_time)
              }
              $scope.stockData = $scope.svcData;
              $scope.$apply()
            }
            else
            {
              $scope.stockData = "";
              $scope.$apply();
            }
          }
   			}, function(error){
   		
   		});
    }
    else
    {
      dailyStockSvc.getDailyStock($scope.search.bloodGroup, $scope.search.component)
      .then(function(response){
        for(var i = 0; i < response.length; i++){
          response[i].last_updated = timeStampDiff(getFormattedDate(Date.now()),response[i].posting_time)
        }
        $scope.stockData = response;
      }, function(error){

      });   
    } 		
 	};

  $scope.insertDonorData = function() {
      donorDetailsSvc.setDonorDetails($scope.dn_name, $scope.dn_emailid, $scope.dn_phoneno, $scope.dn_bloodgroup,$scope.dn_checkbox,$scope.dn_gender,$scope.dn_birthdate)
      .then(function(response){
        $scope.dn_name = "";
        $scope.dn_emailid = "";
        $scope.dn_phoneno = "";
        $scope.dn_bloodgroup = "";
         $scope.dn_checkbox = "";
         $scope.dn_gender = "";
         $scope.dn_birthdate = "";
         $('.alertContainer').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Congratulations! You have successfully registered as a donor.</div>").delay(7000).fadeOut();
      }, function(error){

      });

  };

  $scope.buttonClicked = function(){
    var url = "https://maps.google.com/maps?saddr=" + $scope.latitude +"," + $scope.longitude + "&daddr=" + this.entry.bb_lat + "," + this.entry.bb_lon;
    window.open(url,'_blank');

  }

 	var showPosition = function(position){
 		$scope.latitude = position.coords.latitude;
  	$scope.longitude = position.coords.longitude;
  	$scope.origin = new google.maps.LatLng($scope.latitude,$scope.longitude);
    $scope.isSetOrigin = true;
 	}

   $scope.getLatLon = function() {
      getLatLonSvc.setLatLonDetails($scope.latitude, $scope.longitude)
      .then(function(response){
    
      }, function(error){

      });

  };


	var showError = function(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            alert("User denied the request for Geolocation.");
            break;
        case error.POSITION_UNAVAILABLE:
            alert("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            alert("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
            alert("An unknown error occurred.");
            break;
    }
  }

  var timeStampDiff = function(timestamp1, timestamp2){
    var a = stringToDate(timestamp1);
    var b = stringToDate(timestamp2);
  
    if (a.getTime()>=b.getTime()){
        var differenceInMilliseconds = a.getTime() - b.getTime();
        var leftorago = 'ago'
    } else {
        var differenceInMilliseconds = b.getTime() - a.getTime();
        var leftorago = 'left'
    }
    
    // minutes
    minutes = Math.floor(differenceInMilliseconds / 1000 / 60);    
    // hours
    hours = Math.floor(differenceInMilliseconds / 1000 / 60 / 60);
    // days
    days = Math.floor(differenceInMilliseconds / 1000 / 60 / 60 / 24);
    
    if (days > 0){
        if (days == 1){
            timeunit = 'day';
        } else {
            timeunit = 'days';    
        }
        output = days + ' ' + timeunit + ' ' + leftorago;
        
    } else if (hours > 0){
        if (hours == 1){
            timeunit = 'hour';
        } else {
            timeunit = 'hours';    
        }
        output = hours +  ' ' + timeunit + ' ' + leftorago;
    } else if (minutes >= 0){
            if (minutes == 1){
            timeunit = 'minute';
        } else {
            timeunit = 'minutes';    
        }
        
        output = minutes + ' ' + timeunit + ' '+ leftorago;
    }

    return output;
  }

  var stringToDate = function(s) {
    var dateParts = s.split(' ')[0].split('-'); 
    var timeParts = s.split(' ')[1].split(':');
    var d = new Date(dateParts[0], --dateParts[1], dateParts[2]);
    d.setHours(timeParts[0], timeParts[1], timeParts[2])
    return d
  }

  function getFormattedDate(date){
    //var d = new Date();
    date = date.getFullYear() + "-" + ('0' + (date.getMonth() + 1)).slice(-2) + "-" + ('0' + date.getDate()).slice(-2) + " " + ('0' + date.getHours()).slice(-2) + ":" + ('0' + date.getMinutes()).slice(-2) + ":" + ('0' + date.getSeconds()).slice(-2);
    return date;
  }

  var options = { 
      chart: {
          type: 'column',
          renderTo: 'graphContainer'
      },
      title: {
          text: 'Total Blood Stock - Nashik'
      },
      xAxis: {
          categories: [
              'A+ve',
              'O+ve',
              'B+ve',
              'AB+ve',
              'A-ve',
              'O-ve',
              'B-ve',
              'AB-ve'
          ],
          crosshair: true
      },
      yAxis: {
          min: 0,
          title: {
              text: 'Blood Bags (unit)'
          }
      },
      tooltip: {
          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
              '<td style="padding:0"><b>{point.y} units</b></td></tr>',
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
      exporting: {
         enabled: false
      },
      series: []
  }

}]);