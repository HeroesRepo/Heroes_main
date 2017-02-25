var app = angular.module("heroesMainApp");
app.service("getLatLonSvc", function($http){

    this.setLatLonDetails = function(latitude, longitude){
        return $http.post('php/getLatLon.php', {latitude: latitude, longitude: longitude})
            .then(function(response){
                return response.data;
				}, function(error){
                alert("Service Failed!");
                console.log(error);
            });
    }
});