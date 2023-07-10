app.controller('jobSearchController', function jobSearchController($scope, Validation, ajaxService) {
	$scope.jobSearch = {
		jobTitle: {
			value: '',
		},
		jobLocation: {
			value: '',
		}
	};
	$scope.jobsearch = false;
	$scope.getJobs = function() {
		document.getElementsByTagName('header')[0].classList.add('classic-header');
		$scope.jobsearch = true;
		var url = baseUrl + 'ajaxController.php';
		var action = 'jobSearch';
		ajaxService.post(url, {action: action, jobTitle: $scope.jobSearch.jobTitle.value, jobLocation: $scope.jobSearch.jobLocation.value}, null, null, true).then(function (response) {
            if (response.status !== 200) {
                return false;
            }

            var responseData = response.data;
            if (responseData.status == false) {
                return false;
            }
			$scope.jobs = responseData.data.jobs;
        });
	}
	$scope.getHotJobs = function() {
		var url = baseUrl + 'ajaxController.php';
		var action = 'hotJobs';
		ajaxService.post(url, {action: action}, null, null, true).then(function (response) {
            if (response.status !== 200) {
                return false;
            }

            var responseData = response.data;
            if (responseData.status == false) {
                return false;
            }
			$scope.jobs = responseData.data.jobs;
        });
	}
	$scope.getHotJobs();
});