(function(){
	'use strict'


	angular
	.module('app')
	.controller('SignupCtrl' , SignupCtrl)


	function SignupCtrl($scope,$http){

		var vm = this;
		// $scope.signForm = {};
		$('#timepicker1,#timepicker2,#timepicker3,#timepicker4,#timepicker5,#timepicker6,#timepicker7,#timepicker8,#timepicker9,#timepicker10,#timepicker11,#timepicker12').timepicker();
		
		// $scope.insertData = function (signup) {
		// 	$http.post("insert.php",signup).then(function (response) {
		// 		console.log(response.data);
		// 		alert("successfull");
		// 	},function(error){
		// 		console.error("Error : ",error);
		// 		});
		// 	};   
            
        // vm.insertData = function(){
        // 	$http({
        // 		method:'POST',
        // 		url:'assets/php/connect.php',
        // 		data: $.param($scope.register)
        // 	}).then(function(response){
        // 		alert("Success!");
        		// console.log("Registered!");
        		// console.log(response.data,response.status);
        		// if(data.error != ''){
        		// 	$scope.alertClass = 'alert-danger';
        		// }
        		// else{
        		// 	$scope.alertClass = 'alert-success';
        		// }
        // 	});
        // }
		

		    vm.insertData = function(idNumber,firstname,lastname,middlename,position,gender,email,contactNumber,password){
			  	$http.post('assets/insertDetails.php',{"id":register.name,"firstname":register.firstname,"lastname":register.lastname,"middlename":register.middlename,"position":register.position,"gender":register.gender,"email":register.email,"contact":register.contactNumber,"password":register.password}).then(function(data){
			  	if (data == true) {
			 		getInfo();
					// Hide details insertion form
					$('#empForm').css('display', 'none');
				}
				});
		    }
    	
	}

})();

// $http.post("insert.php", {
                // 'idNumber':$scope.signup.idNumber,
                // 'firstName':$scope.signup.firstname,
                // 'lastName':  $scope.signup.lastname,
                // 'middleName':$scope.signup.middlename,
                // 'position': $scope.signup.position,
                // 'gender': $scope.signup.gender,
                // 'email': $scope.signup.email,
                // 'contact': $scope.signup.contactNumber,
                // 'password': $scope.signup.password
            // }).then(function(response){
            //         console.log("Data Inserted Successfully");
            //     },function(error){
            //         alert("Sorry! Data Couldn't be inserted!");
            //         console.error(error);

            //     });
            

		// vm.personalReg =  function(){
		// 	$http.post(
		// 		"insert.php",
		// 		{'idNumber': $scope.signup.idNumber , 'firstName': $scope.signup.firstname , 'lastName':  $scope.signup.lastname , 'middleName':$scope.signup.middlename , 'position': $scope.signup.position, 'gender': $scope.signup.gender, 'email': $scope.signup.email , 'contact': $scope.signup.contactNumber , 'password': $scope.signup.password}
		// 	).success(function(){
		// 		vm.message="Date successfully inserted!";
		// 		console.log("successfull!");
		// 		alert(data);
		// 			$scope.idNumber = null;
		// 			$scope.firstname = null;
		// 			$scope.lastName = null;
		// 			$scope.middleame = null;
		// 			$scope.position = null;
		// 			$scope.gender = null;
		// 			$scope.email = null;
		// 			$scope.contact = null;
		// 			$scope.password = null;
		// 	})
		// };

		// vm.personalReg = function(){

		// };


		// vm.scheduleReg = function(){


		// };

// var request = $http({
//         method: "post",
//         url: window.location.href + "insert.php",
//         data: {
//             emp_no: $scope.emp_no,
//             first_name: $scope.first_name,
//             last_name: $scope.last_name,
//             dept_name: $scope.dept_name,
//         },
//         headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
//     });


// vm.insert = function(){
		// 	var request = $http({
		// 		method: "post",
		// 		url: window.location.href + "insert.php",
		// 		data: {
		// 			idNumber: vm.signup.idNumber,
		// 			firstName: vm.signup.firstname,
		// 			lastName: vm.signup.lastname,
		// 			middleame: vm.signup.middlename,
		// 			position: vm.signup.position,
		// 			gender: vm.signup.gender,
		// 			email: vm.signup.email,
		// 			contact: vm.signup.contactNumber,
		// 			password: vm.signup.password,

		// 		},
		// 		headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
		// 	});
		// };

		// vm.go = function ( path ) {
  //   			$location.path( path );
  //   		};





		//create a function add_student with params name and email
		// vm.add_student = function (idNumber,firstname,lastname,middlename,position,gender,email,contact,password){
		//set the data array
		// var data = {
		// 	idNumber:idNumber,
		// 	firstname: firstname,
		// 	lastname:lastname,
		// 	middlename:middlename,
		// 	position:position,
		// 	gender:gender,
		// 	email: email,
		// 	contact:contact,
		// 	password:password
		// }
		
		//use $http.post to send above data to php
		
		// $http.post('insert.php', JSON.stringify(data)).then(function(response){
		// 	//clear the form fields
		// 	$scope.signup.idNumber="";
		// 	$scope.signup.firstname= "";
		// 	$scope.signup.lastname = "";
		// 	$scope.signup.middlename = "";
		// 	$scope.signup.position = "";
		// 	$scope.signup.gender = "";
		// 	$scope.signup.email = "";
		// 	$scope.signup.contact = "";
		// 	$scope.signup.password = "";
			
			//show success msg
			// vm.msg = true;
			//hide the msg after 2 secs
		// 	$timeout(function(){vm.msg = false;}, 1000);
		// });
	












		// vm.submitBtn = "Insert";

		

			// $scope.insertData = function(obj){  
				// $http.post(  
				// 	"insert.php",  
				// 	{ 'idNumber':$scope.signup.idNumber,
    //                   'firstName':$scope.signup.firstname,
    //                   'lastName':  $scope.signup.lastname,
    //                   'middleName':$scope.signup.middlename,
    //                   'position': $scope.signup.position,
    //                   'gender': $scope.signup.gender,
    //                   'email': $scope.signup.email,
    //                   'contact': $scope.signup.contactNumber,
    //                   'password': $scope.signup.password}  
				// 	).success(function(data,status,headers,config){
				// 		console.log("Data inserted successfully!");
				// 	});
				// 	$http.post('insert.php' , obj).then(function(response){
				// 		console.log(response.data);
				// 	});
				// };
