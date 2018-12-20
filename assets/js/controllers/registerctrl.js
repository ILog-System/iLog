(function(){
	'use strict'


	angular
	.module('app')
	.controller('RegisterCtrl' , RegisterCtrl)

	function RegisterCtrl($scope,$http,$location){

		var vm = this;

		// vm.isReg = false;
		
		$('#timepicker1,#timepicker2,#timepicker3,#timepicker4,#timepicker5,#timepicker6,#timepicker7,#timepicker8,#timepicker9,#timepicker10,#timepicker11,#timepicker12').timepicker();
		
		// $scope.infoList = [{id: 'firstField'}];
		// $scope.schedList = [{id: 'firstField'}];

		// $scope.regInfo = function(){
		// 	$http.post('Assets/partials/registerAdd.php', $scope.infoList)
		// 	.then(function(data){
		// 		if(data.error){
					// $scope.error = true;
					// $scope.success = false;
					// $scope.msgError = data.comments;
				// 	console.log("Failed to submit");
				// }
				// else{
					// $scope.error = false;
					// $scope.success = true;
					// $scope.messageSuccess = data.comments;
					// $scope.retrive();
		// 	u


		 // vm.insertData = function(idNumber,firstname,lastname,middlename,position,gender,email,contactNumber,password){
			//   	$http.post('assets/partials/registerAdd.php',{"id":register.name,"firstname":register.firstname,"lastname":register.lastname,"middlename":register.middlename,"position":register.position,"gender":register.gender,"email":register.email,"contact":register.contactNumber,"password":register.password}).then(function(data){
			//   	if (data == true) {
			//  		getInfo();
			// 		Hide details insertion form
			// 		$('#reg_form').css('display', 'none');
			// 	}
			// 	});
		 //    }


		 // $scope.insertData = function () {

		 // 	var request = $http({
		 // 		method: "post",
		 // 		url: "Assets/partials/registerAdd.php",
		 // 		data: {
		 // 			idNumber: $scope.idNumber,
		 // 			first_name: $scope.firstname,
		 // 			last_name: $scope.lastname,
		 // 			middle_name: $scope.middlename,
		 // 			position: $scope.position,
		 // 			gender: $scope.gender,
		 // 			email: $scope.email,
		 // 			contact: $scope.contactNumber,
		 // 			pass: $scope.password,
		 // 		},
		 // 		headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
		 // 	});





		//  $scope.insertData = function () {

		//  	var request = $http({
		//  		method: "post",
		//  		url: "Assets/partials/registerAdd.php",
		//  		data: {
		//  			emp_no: $scope.emp_no,
		//  			first_name: $scope.first_name,
		//  			last_name: $scope.last_name,
		//  			dept_name: $scope.dept_name,
		//  		},
		//  		headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
		//  	});

		//  }
		// }); 



			
		// $scope.insertData = function(idNumber,firstname,lastname,middlename,position,gender,email,contactNumber,password) {
	    //make json payload object
	    // var payload = {
	    // 	idNumber: idNumber,
	    // 	first_name: firstname,
	    // 	last_name: lastname,
	    // 	middle_name: middlename,
	    // 	position: position,
	    // 	gender: gender,
	    // 	email: email,
	    // 	contact: contactNumber,
	    // 	password: password
	    // };

	    //pass to API
	//     $http.post('Assets/partials/registerAdd.php', payload, {
	//     	headers: {
	//     		'Content-Type': 'application/json; charset=utf-8'
	//     	}
	//     }).then(function(data, status, headers, config) {
	//         console.log(data);
	//     }, function(data, status, headers, config) {
	//         console.log(data);
	//     });
	// }




		const player = document.getElementById('player');
		const canvas = document.getElementById('canvas');
		const context = canvas.getContext('2d');
		const captureButton = document.getElementById('capture');
		// var dataURL = canvas.toDataURL("image/png");
		// console.log(dataURL);
		// var png = dataURL.split(',')[1];
  //   	var s = window.atob(png);
  //   	console.log(png);
  //   	console.log(btoa(s));
  //       var z = new Blob([s],  {type: 'image/png', encoding: 'utf-8'});
  //   	console.log(z);
  //   	document.getElementById("png").value = z;


		const constraints = {
			video: true,
		};

		captureButton.addEventListener('click', () => {
	    // Draw the video frame to the canvas.
	    context.drawImage(player, 0, 0, canvas.width, canvas.height);
	    var dataURL = canvas.toDataURL("image/png");
	    // document.getElementById("url").value = dataURL;
	    $.ajax({
		  url:"Assets/partials/registerAdd.php",
		  // send the base64 post parameter
		  data:{
		    base64: dataURL
		  },
		  // important POST method !
		  type:"post",
		  complete:function(){
		    console.log("Ready");
		  }
		});
	});

	  // Attach the video stream to the video element and autoplay.
	  navigator.mediaDevices.getUserMedia(constraints)
	  .then((stream) => {
	  	player.srcObject = stream;
	  });

	  // var image = "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUAAAADwCAYAAABxLb1rAAAG80lEQVR4Xu3UAREAAAgCMelf2iA"; // to create a image read the previous example

		
		
		$scope.register = {};


			$scope.insertData = function(){

				$http({method: 'POST',
					url: 'Assets/partials/registerAdd.php',
					data: $scope.register,
					headers: {'Content-Type': 'application/x-www-form-urlcoded'}
				}).then(function(data){
					console.log(data);
				});
			};

	}


	// http://www.mysqltutorial.org/php-mysql-blob/
	// https://www.codexworld.com/angularjs-crud-operations-php-mysql/
	// http://www.mysqltutorial.org/mysql-time/

})();