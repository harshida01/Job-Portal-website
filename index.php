<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <link rel="stylesheet" href="idxstyle1.css">
    <title>Document</title>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" ng-app="myApp" ng-controller="validateCtrl" name="myForm" action="#" novalidate>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" ng-model="username" placeholder="Enter your name" required>
            <span style="color:red;" ng-show="myForm.username.$dirty && myForm.username.$invalid">
                <span ng-show="myForm.username.$error.required">Username is required</span>
            </span>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" ng-model="password" placeholder="Enter your password" required>
            <span style="color:red;" ng-show="myForm.password.$dirty && myForm.password.$invalid">
                <span ng-show="myForm.password.$error.required">Password is required</span>
            </span>

            <input type="submit" name="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="signup11.php">Sign Up</a></p>
    </div>

    <script>
        var app = angular.module('myApp', []);

        app.controller('validateCtrl', function($scope) {
            $scope.username = '';
            $scope.password = '';
        });
    </script>
</body>
<?php
 if(isset($_POST["submit"])){
   $username = $_POST["username"];
    $password = $_POST["password"];
   $query = mysqli_query($conn,"SELECT * FROM `signupdet` WHERE `username` LIKE '$username'") or die(mysqli_error($conn));
  if(mysqli_num_rows($query) > 0){
      $row = mysqli_fetch_assoc($query);
      if($row["password"] == $password){
        //  $_SESSION['username'] = $row['username'];
          header("Location: main.php", true, 301);
          exit();
      }
     else{
        echo '<script>
        alert("Wrong Password!!")
    </script>';
     }
 }
 else{
      echo '<script>
       alert("UserName Does not exists !");
       alert("You should register first");
     </script>';
     }
    //  header("Location: signup11.php", true, 301);
    //       exit();
 }
  ?>
</html>
