app.controller('signUpController', function signUpController($scope, Validation, ajaxService) {
	$scope.signUpFlag = false;
	$scope.newCandidate = false;
	$scope.loginMessage = '';
	var files = [];
    var eventTarget;
	var formData = new FormData();
  	$scope.candidate = {
		email: {
			value: ''
		},
		resume: {
			value: ''
		},
		agree: {
			value: ''
		}
	};
	setTimeout(function () {
        $('#resume').on('change', $scope.selectDocument);
    }, 1000);
	$scope.hideMessage = function() {
		$scope.loginMessage = '';
	}
	$scope.searchEmail = function() {
		if($scope.candidate.email.value != '' && Validation.email($scope.candidate.email.value) && $scope.candidate.agree.value == true) {
			var url = baseUrl + 'ajaxController.php';
			var action = 'signUp';
			if(!$scope.signUpFlag) {
				$scope.signUpFlag = true;
				ajaxService.post(url, {action: action, email: $scope.candidate.email.value}, null, null, true).then(function (response) {
		            if (response.status !== 200) {
						$scope.signUpFlag = false;
		                return false;
		            }
		
		            var responseData = response.data;
		            if (responseData.status == false) {
		                $scope.signUpFlag = false;
						$scope.newCandidate = true;
		                return false;
		            }
					if(typeof responseData.data.candidate != 'undefined') {
						$("#sign_up_popup").modal('toggle');
						$("#sign_up_popup2").modal('toggle');
						$scope.$$nextSibling.loginMessage = responseData.message;
						$scope.$$nextSibling.loginData.username.value = $scope.candidate.email.value;
					} else {
						$scope.newCandidate = true;
					}
					$scope.signUpFlag = false;
		        });
			}
		}
	}
	
    $scope.selectDocument = function (e, type) {
        eventTarget = event.target;
        files.push(event.target.files[0]);
        formData.append('resume', event.target.files[0]);
    };

	$scope.uploadResume = function() {
		if ($scope.uploadStarted != true) {
            if (typeof files == 'undefined' || files == '' || files.length == 0) {
                alert('Please select a file to upload.');
                return false;
            }
			$scope.uploadStarted = true;
			var url = baseUrl + 'ajaxController.php';
			formData.append("action", 'uploadResume');
			formData.append("email", $scope.candidate.email.value);
            ajaxService.filepost(url, formData, null).then(function (response) {
                if (response.status !== 200) {
                    alert('Document upload failed');
                    $scope.candidate.resume.value = {};
                    eventTarget.value = null;
                    $scope.uploadStarted = false;
                    return false;
                }
                var data = response.data;

                if (data.status == 0 || data.status == false) {
                    alert(data.message);
                    $scope.candidate.resume.value = {};
                    eventTarget.value = null;
                    $scope.uploadStarted = false;
                    return false;
                }
                eventTarget.value = null;
                $scope.uploadStarted = false;
				$scope.loginMessage = data.message;
                return true;
            });
		}
	}
});