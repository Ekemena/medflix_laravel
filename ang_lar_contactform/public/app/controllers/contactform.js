app.controller('contactformController', function ($scope, $http, API_URL) {
  //retrieve contactform listing from API

  $http.get(API_URL + "contactform")
    .success(function (response) {
      $scope.contacts = response;
    });

  //save new record / update existing record
  $scope.save = function (contact) {
    var url = API_URL + "Contactform";

    $http({
      method: 'POST',
      url: url,
      data: $.param($scope.Contactform),
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    }).success(function (response) {
      console.log(response);
      location.reload();
    }).error(function (response) {
      console.log(response);
      alert('This is embarassing. An error has occured. Please check the log for details');
    });
  }



  //show modal form
  // $scope.toggle = function(modalstate, id) {
  //     $scope.modalstate = modalstate;

  //     switch (modalstate) {
  //         case 'add':
  //             $scope.form_title = "Add New Contactform";
  //             break;
  //         case 'edit':
  //             $scope.form_title = "Contactform Detail";
  //             $scope.id = id;
  //             $http.get(API_URL + 'contactform/' + id)
  //                     .success(function(response) {
  //                         console.log(response);
  //                         $scope.contactform = response;
  //                     });
  //             break;
  //         default:
  //             break;
  //     }
  //     console.log(id);
  //     $('#myModal').modal('show');
  // }



  //save new record / update existing record
  // $scope.save = function(modalstate, id) {
  //     var url = API_URL + "contactform";

  //     //append contactform id to the URL if the form is in edit mode
  //     if (modalstate === 'edit'){
  //         url += "/" + id;
  //     }

  //     $http({
  //         method: 'POST',
  //         url: url,
  //         data: $.param($scope.contactform),
  //         headers: {'Content-Type': 'application/x-www-form-urlencoded'}
  //     }).success(function(response) {
  //         console.log(response);
  //         location.reload();
  //     }).error(function(response) {
  //         console.log(response);
  //         alert('This is embarassing. An error has occured. Please check the log for details');
  //     });
  // }

  //delete record
  // $scope.confirmDelete = function(id) {
  //     var isConfirmDelete = confirm('Are you sure you want this record?');
  //     if (isConfirmDelete) {
  //         $http({
  //             method: 'DELETE',
  //             url: API_URL + 'contactform/' + id
  //         }).
  //                 success(function(data) {
  //                     console.log(data);
  //                     location.reload();
  //                 }).
  //                 error(function(data) {
  //                     console.log(data);
  //                     alert('Unable to delete');
  //                 });
  //     } else {
  //         return false;
  //     }
  // }
});