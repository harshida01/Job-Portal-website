<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("wp7728125.jpg"); /* Replace 'background.jpg' with your image file */
            background-size: cover;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            text-align: center;
        }

        h1 {
            text-align: center;
            color: #007BFF;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group {
            text-align: left;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Job Application</h1>
        <form action="#" method="post" ng-app="myApp" ng-controller="validateCtrl" name="myForm" novalidate>
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
                <span style="color:red;" ng-show="myForm.name.$dirty && myForm.name.$invalid">
                <span ng-show="myForm.name.$error.required">Full name is required</span>
            </span>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
                <span style="color:red;" ng-show="myForm.email.$dirty && myForm.email.$invalid">
                <span ng-show="myForm.email.$error.required">Full name is required</span>
            </span>
            </div>

            <div class="form-group">
                <label for="resume">Resume (PDF):</label>
                <input type="file" id="resume" name="resume" accept=".pdf" >
            </div>

            <div class="form-group">
                <label for="cover_letter">Cover Letter:</label>
                <textarea id="cover_letter" name="cover_letter" rows="6" required></textarea>
                <span style="color:red;" ng-show="myForm.cover_letter.$dirty && myForm.cover_letter.$invalid">
                <span ng-show="myForm.cover_letter.$error.required">Full name is required</span>
            </span>
            </div>

            <div class="form-group">
                <label for="skills">Skills:</label>
                <input type="text" id="skills" name="skills" required>
                <span style="color:red;" ng-show="myForm.skills.$dirty && myForm.skills.$invalid">
                <span ng-show="myForm.skills.$error.required">Skills are required</span>

            </div>

            <div class="form-group">
                <label for="hobbies">Hobbies:</label>
                <input type="text" id="hobbies" name="hobbies" required>
                <span style="color:red;" ng-show="myForm.hobbies.$dirty && myForm.hobbies.$invalid">
                <span ng-show="myForm.hobbies.$error.required">Hobbies are required</span>

            </div>

            <button type="submit" value="submit" method="post" name="submit">Submit Application</button>
        </form>
        <?php
if(isset($_POST['submit']))
{
    $name= $_POST['name'];
    $name = $_POST['email'];
    $cover_letter=$_POST['cover_letter'];
    $skills=$_POST['skills'];
    $hobbies=$_POST['hobbies'];
        $sql ="INSERT INTO `jobt2` (`name`, `email`, `cover_letter`, `skills`, `hobbies`) VALUES ('$name', '$name', '$cover_letter', '$skills', ' $hobbies')";
        $result = mysqli_query($conn, $sql);

        if($result) {
            echo "Record inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>
    </div>
    <script>
        var app = angular.module('myApp', []);

        app.controller('validateCtrl', function($scope) {
            $scope.name = '';
            $scope.email = '';
            $scope.skills ='';
            $scope.hobbies ='';


        });
    </script>
</body>
</html>
