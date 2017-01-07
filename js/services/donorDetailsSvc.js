var app = angular.module("heroesMainApp");
app.service("donorDetailsSvc", function($http){

    this.setDonorDetails = function(dn_name,dn_emailid,dn_phoneno,dn_bloodgroup){
        return $http.post('php/donorsMaster.php',{ 
            dn_name: dn_name,dn_emailid: dn_emailid,dn_phoneno: dn_phoneno,dn_bloodgroup: dn_bloodgroup
        })
        .then(function(response){
            return response.data;
        }, function(error){
            alert("Service Failed!");
            console.log(error);
        });
    }
});

