var app = angular.module("heroesMainApp");
app.service("donorDetailsSvc", function($http){

    this.setDonorDetails = function(dn_name,dn_emailid,dn_phoneno,dn_bloodgroup,dn_checkbox,dn_gender,dn_birthdate){
        return $http.post('php/donorsMaster.php',{ 
            dn_name: dn_name,dn_emailid: dn_emailid,dn_phoneno: dn_phoneno,dn_bloodgroup: dn_bloodgroup,dn_checkbox: dn_checkbox,dn_gender: dn_gender,dn_birthdate: dn_birthdate
        })
        .then(function(response){
            return response.data;
            console.log(response);
        }, function(error){
            alert("Service Failed!");
            console.log(error);
        });
    }
});

