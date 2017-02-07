<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/assignment_fb.css">
<script src="js/angular.min.js"></script>
<script src="js/jquery.min.js"></script>
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

<body ng-app="main-App" ng-init="img_path='/assignment_fb/images/'" ng-controller="AdminController">
<div class="w3-container">
	<div class="head w3-margin-bottom" style=" background-color: #337ab7" >
	 
	</div>
	<div class="w3-row w3-light-grey">
  		<div class="w3-col s12 m2 l3 w3-center w3-light-grey"><p></p></div>
  		
  		<div class="w3-col s12 m8 l6  w3-white">
			
			<div class="w3-row">
				<div class="w3-col s12 m12 l12 w3-center w3-light-grey"><p></p></div>

				<div class="w3-col s12 m12 l12 w3-white">


						<form ng-submit="submit()" name="form" role="form" >
					        <div class="fileUpload btn btn-primary">
					            <span> <span class="glyphicon glyphicon-picture"></span> Photo / <span class="glyphicon glyphicon-facetime-video"></span> Video</span>
					            <input ng-model="form.image" type="file" class="form-control input-lg upload" accept=".png, .jpg, .jpeg, .mp4" onchange="angular.element(this).scope().uploadedFile(this)" style="width:400px" >
					        </div>
						    
							<hr class="w3-margin-left w3-margin-right">

							<input ng-model="post_desc" class="w3-border-0 w3-margin-left w3-margin-right" type="text" placeholder="What Is In Mind..??" style="height: 40px; width: 80%; outline: none; padding-left: 10px; ">
							<br>
							
							<span  ng-if="currentFile_t=='image'">
								<img class="w3-margin-top w3-margin-left" ng-src="{{image_source}}" style="width:300px;">
							</span>

							<span ng-if="currentFile_t=='video'">
								<video class='videoPlayer' preload='metadata' vg-poster='data.poster'>
									<source ng-src="{{image_source}}" type='{{ media.mp4.type }}'>
								</video>
							</span>
							

							<hr class="w3-margin-left w3-margin-right">
							<div class="w3-row">
								<div class="w3-col s9 m9 l9"><p></p></div>
								<div class="w3-col s3 m3 l3 w3-margin-bottom w3-center">
									<input class="btn btn-primary" type="submit" id="submit" value="Post" />
								</div>
							</div>
						
						</form>
					
				</div>

				<div class="w3-col s12 m12 l12 w3-center w3-light-grey"><p></p></div>

				<div class="w3-col s12 m12 l12 w3-white">
					

					<div class="w3-row ">
						<div class="w3-col s12 m12 l12" ng-repeat="x in feed_posts">
				      		<div class="w3-margin-left">
				      			<div class="w3-margin-top"><a href="#"><b style="color: #365899;">{{x.User}}</b> <span class="w3-text-grey">has posted..</span> </a></div>
				      			<div><p> {{x.Post_dec}} </p></div>
				      			
					        	<div><img width="50%;" ng-src='{{ img_path + "" + x.Image }}' /></div>
					        	<hr class="w3-margin-left w3-margin-right">
					        	
									<!-- <div class="w3-col s5 m5 l5 w3-center w3-margin-left w3-margin-bottom w3-margin-top"><button ng-click="add_cart(x.Id)" class="w3-btn-block w3-teal w3-medium">Add Cart</button></div> -->
									<div class="w3-row w3-margin-bottom">
										
										<div class="w3-col s1 m1 l1 w3-margin-left "><button ng-click="post_like(x.Id,x.Like)" type="button" class="btn btn-link" style=" text-decoration: none;"><span class="glyphicon glyphicon-thumbs-up w3-large"></span> {{x.Like}} Like</button></div>
										<div class="w3-col s2 m2 l2 w3-margin-left"><button ng-click="load_comments(x.Id)" type="button" class="btn btn-link" style=" text-decoration: none;"><span class="glyphicon glyphicon-comment w3-large"></span> Comment</button></div>
										<div class="w3-col s7 m7 l7"><p></p></div>
										
									</div>
									<div id="{{x.Id}}" class="w3-border w3-margin-top w3-margin-bottom w3-margin-right w3-light-grey w3-hide" style="width: 95%;">
											<!-- Comments section -->

											<div class="w3-margin-top w3-margin-left" ng-repeat="y in post_comments">
												<p><a href="#" style="color: #365899;"><b>{{x.User}}</b></a> has commented {{y.Comment}}</p>
												
											</div>
											<input ng-enter="post_comment(x.Id)" ng-model="comment[x.Id]" class="w3-border w3-margin-left w3-margin-top w3-margin-right w3-margin-bottom" type="text" placeholder=" Comment on the post here..!!" style="height: 40px; width: 95%; outline: none; padding-left: 10px; ">
											
										</div>
									 
					        	
				      		</div>
				      			
				      		
							<div class="w3-col s12 m12 l12 w3-light-grey"><p></p></div>
				    	</div>
					</div>

				</div>

				<div class="w3-col s12 m12 l12 w3-center w3-light-grey"><p></p></div>

			</div>  			
  				
  		</div>
  		
   		<br>
  		
  		<div class="w3-col s12 m2 l3 w3-center w3-light-grey"><p></p></div>
  	</div>

</div>
 <script type="text/javascript">

        var app =  angular.module('main-App',[]);

        app.controller('AdminController', function($scope, $http) {
        $scope.comment = {};
          $scope.form = [];
          $scope.files = [];
          $scope.currentFile_t = "image";
          $scope.path = "http://localhost/assignment_fb/"
          
          $http.get($scope.path + "feed_posts.php").then(function (response) {$scope.feed_posts = response.data.records;});

          $scope.load_comments = function (post_id){
          				document.getElementById(post_id).classList.remove("w3-hide");
						document.getElementById(post_id).classList.add("w3-show");
						$http.get($scope.path + "load_comments.php?post_id="+post_id).then(function (response) {$scope.post_comments = response.data.records;});

					}

			$scope.post_comment = function (post_id){
				

				$http.get($scope.path + "comments.php?post_id="+post_id+"&comment="+$scope.comment[post_id]).then(function (response) {
					$scope.post_comments = response.data.records;
					$scope.load_comments(post_id);
					$scope.comment[post_id] = null;
				});

			}
			$scope.post_like = function (post_id , like){
				
				
				$http.get($scope.path + "liker.php?post_id="+post_id+"&like="+like).then(function (response) {
					$scope.post_comments = response.data.records;
					$scope.post_reload();
				});
				
			}

			$scope.post_reload = function(){
				
				$http.get($scope.path + "feed_posts.php").then(function (response) {$scope.feed_posts = response.data.records;});
			}

          $scope.submit = function() {
            $scope.form.image = $scope.files[0];
            $scope.gurl = $scope.path + 'upload.php'

            $http({
              method  : 'POST',
              url     : $scope.gurl,
              processData: false,
              transformRequest: function (data) {
                  var formData = new FormData();
                  formData.append("image", $scope.form.image);
                  formData.append("desc", $scope.post_desc); 
                  formData.append("d_type", $scope.currentFile_t);  
                  return formData;  
              },  
              data : $scope.form,
              headers: {
                     'Content-Type': undefined
              }
           }).success(function(data){
               
                window.location=$scope.path;
           });

          };

          
          $scope.uploadedFile = function(element) {
            $scope.currentFile = element.files[0];
            $scope.currentFile_t = "image";
    

            if (element.files[0].type == "image/png" || element.files[0].type =="image/jpeg" ) {
            	$scope.currentFile_t = "image";
            } 
            if(element.files[0].type == "video/mp4")
            {
            	$scope.currentFile_t = "video";
            }
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

        app.directive('ngEnter', function () {
		    return function (scope, element, attrs) {
		        element.bind("keydown keypress", function (event) {
		            if(event.which === 13) {
		                scope.$apply(function (){
		                    scope.$eval(attrs.ngEnter);
		                });
		 
		                event.preventDefault();
		            }
		        });
		    };
		});
    </script>
</body>
</html>
