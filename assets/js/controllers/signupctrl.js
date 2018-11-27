(function(){
	'use strict'


	angular
	.module('app')
	.controller('SignupCtrl' , SignupCtrl)


	function SignupCtrl($scope,$http){

		var vm = this;
		$('#timepicker1,#timepicker2,#timepicker3,#timepicker4,#timepicker5,#timepicker6,#timepicker7,#timepicker8,#timepicker9,#timepicker10,#timepicker11,#timepicker12').timepicker();
		// vm.submitBtn = "Insert";

		vm.insert =  function(){
			$http.post(
				"insert.php",
				{'idNumber': vm.signup.idNumber , 'firstName': vm.signup.firstname , 'lastName':  vm.signup.lastname , 'middleName':vm.signup.middlename , 'position': vm.signup.position, 'gender': vm.signup.gender, 'email': vm.signup.email , 'contact': vm.signup.contactNumber , 'password': vm.signup.password}
			).success(function(){
				vm.message="Date successfully inserted!";
				// alert(data);
				// 	$scope.idNumber = null;
				// 	$scope.firstname = null;
				// 	$scope.lastName = null;
				// 	$scope.middleame = null;
				// 	$scope.position = null;
				// 	$scope.gender = null;
				// 	$scope.email = null;
				// 	$scope.contact = null;
				// 	$scope.password = null;
			});
		};

		vm.personalReg = function(){

		};


		// vm.scheduleReg = function(){


		// };
		
    	
	}

})();


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