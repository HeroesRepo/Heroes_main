var app = angular.module("heroesMainApp");
app.service("getCountSvc", function($http){

    this.setCountDetails = function(bloodGroup, component){
        return $http.post('php/getCount.php', {bloodGroup: bloodGroup, component: component})
            .then(function(response){
                return response.data;

            }, function(error){
                alert("Service Failed!");
                console.log(error);
            });
    }
});

