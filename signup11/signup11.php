<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <link rel="stylesheet" href="signup11.css">
    <title>Job Application Signup</title>
</head>
<body>
    <div class="signup-container">
        <h2>Job Application Signup</h2>
        <form method="post" ng-app="myApp"  enctype="multipart/form-data" ng-controller="validateCtrl" name="myForm" action="#" novalidate>
            <div class="form-group">
                <label for="username">Full Name:</label>
                <input type="text" name="username" id="username"  ng-model="username" placeholder="Enter your Full Name" required>
                <span style="color:red;" ng-show="myForm.username.$dirty && myForm.username.$invalid">
                <span ng-show="myForm.username.$error.required">Full name is required</span>
            </span>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email"   ng-model="email" placeholder="Enter your email" required>
                <span style="color:red;" ng-show="myForm.email.$dirty && myForm.email.$invalid">
                <span ng-show="myForm.email.$error.required">email is required</span>
            </span>
            </div>
            <div class="form-group">
                <label for="password">password:</label>
                <input type="tel" name="password" id="password" ng-model="password" placeholder="Enter Password" required>
                <span style="color:red;" ng-show="myForm.password.$dirty && myForm.password.$invalid">
                <span ng-show="myForm.password.$error.required">phone is required</span>
            </span>
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" name="phone" id="phone" ng-model="phone" placeholder="Enter your phone number" required>
                <span style="color:red;" ng-show="myForm.phone.$dirty && myForm.phone.$invalid">
                <span ng-show="myForm.phone.$error.required">phone is required</span>
            </span>
            </div>
           

            <div class="form-group">
                <label for="resume">Upload Resume (PDF or Word):</label>
                <input type="file" name="resume" id="resume" accept=".pdf, .doc, .docx" placeholder="upload ur resume" required>
            </div>

            <div class="form-group">
                <label for="skills">Skills:</label>
                <input type="text" name="skills" id="skills" ng-model="skills" placeholder="Enter your Skills" required>
                <span style="color:red;" ng-show="myForm.skills.$dirty && myForm.skills.$invalid">
                <span ng-show="myForm.skills.$error.required">skills is required</span>
            </span>
            </div>

            <div class="form-group">
                <label for="aspirations">Aspirations:</label>
                <textarea name="aspirations" id="aspirations" rows="4" ng-model="aspirations" placeholder="Enter your Aspirations" required></textarea>
                <span style="color:red;" ng-show="myForm.aspirations.$dirty && myForm.aspirations.$invalid">
                <span ng-show="myForm.aspirations.$error.required">skills is required</span>
            </span>
            </div>

            <div class="form-group">
                <label for="hobbies">Hobbies:</label>
                <input type="text" name="hobbies" id="hobbies" ng-model="hobbies" placeholder="Enter your hobbies" required>
                <span style="color:red;" ng-show="myForm.hobbies.$dirty && myForm.hobbies.$invalid">
                <span ng-show="myForm.hobbies.$error.required">skills is required</span>
            </span>
            </div>

            <button type="submit" name="submit" value="submit" method="post" href="main.php" >Sign Up</button>
        </form>
        <?php
if(isset($_POST['submit']))
{
    $username= $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone=$_POST['phone'];
    $skills=$_POST['skills'];
    $aspirations=$_POST['aspirations'];
    $hobbies=$_POST['hobbies'];
        $sql ="INSERT INTO `signupdet` (`username`, `email`, `password`,`phone`, `skills`, `aspirations`, `hobbies`) VALUES ('$username', '$email','$password', '$phone', '$skills', '$aspirations', '$hobbies')";
        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "Now you can login";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

    </div>
    <script>
        var app = angular.module('myApp', []);

        app.controller('validateCtrl', function($scope) {
            $scope.full_name = '';
            $scope.email = '';
            $scope.password = '';
            $scope.phone='';
            $scope.skills ='';
            $scope.aspirations ='';
            $scope.hobbies ='';


        });
    </script>
</body>
</html>
