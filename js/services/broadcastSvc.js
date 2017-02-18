var app = angular.module('heroesMainApp');
app.service('broadcastSvc',function ($http) {
	this.getBroadcast = function(){
		return $http.get('php/getBroadcast.php')
			.then(function(response){
				return response.data;
				console.log(response.data);
			}, function(error){
				alert("Service Failed!");
				console.log(error);
			});
	}
});