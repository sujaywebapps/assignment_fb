<!DOCTYPE html>
<html>
<head>
  <title>Angularjs Image Uploading</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<style>
    .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
</style>
</head>
<body ng-app="main-App" ng-controller="AdminController">



    <!-- Form Start -->
    <form ng-submit="submit()" name="form" role="form">
        <div class="fileUpload btn btn-primary">
            <span>Upload</span>
            <input ng-model="form.image" type="file" class="form-control input-lg upload" accept="image/*" onchange="angular.element(this).scope().uploadedFile(this)" style="width:400px" >
        </div>
        
        <input type="submit" id="submit" value="Submit" />
        <br/>
        <img ng-src="{{image_source}}" style="width:300px;">

    </form>
    <!-- Form End -->

    <script type="text/javascript">

        var app =  angular.module('main-App',[]);

        app.controller('AdminController', function($scope, $http) {

          $scope.form = [];
          $scope.files = [];

          $scope.submit = function() {
            $scope.form.image = $scope.files[0];

            $http({
              method  : 'POST',
              url     : 'upload.php',
              processData: false,
              transformRequest: function (data) {
                  var formData = new FormData();
                  formData.append("image", $scope.form.image);  
                  return formData;  
              },  
              data : $scope.form,
              headers: {
                     'Content-Type': undefined
              }
           }).success(function(data){
                alert(data);
           });

          };

          $scope.uploadedFile = function(element) {
            $scope.currentFile = element.files[0];
            var reader = new FileReader();

            reader.onload = function(event) {
              $scope.image_source = event.target.result
              $scope.$apply(function($scope) {
                $scope.files = element.files;
              });
            }
                    reader.readAsDataURL(element.files[0]);
          }

        });
    </script>

</body>
</html>