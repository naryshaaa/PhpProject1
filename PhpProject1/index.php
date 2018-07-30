<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" ng-app="website">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>ViewQwest</title>
        
        <link rel="stylesheet" media="screen" href="public/sass/stylesheets/screen.css">
        
        <link rel="stylesheet" media="screen" href="public/sass/stylesheets/materialize.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.6.2/angular-sanitize.js"></script>
        
        
        <script> 
            var website = angular.module('website', []);
            
            website.controller('headCtrl', function($scope){
               $scope.logo = [
                   {
                       src: "public/image/logo_ViewQwest.jpg",
                       class: "logo"
                   }
               ]
            });
            
            website.controller('mainCtrl', function($scope){
           
                $scope.login = [
                    {
                        name: "username",
                        type: "email",
                        className: "textClass",
                        value: "User Name"
                    },
                    {
                        name: "password",
                        type: "password",
                        className: "textClass",
                        value: "Password"
                    },
                    
                ];
            })
            
        </script>
        <script>
           
            $(document).ready(function(){
                //checkCookie();
                if (localStorage.getItem('PHPSESSID') === null){
                    localStorage.setItem('PHPSESSID','none');
                    alert("phpsessid is none");
                    window.location.href = "/PhpProject1/oauth.php/";
                    
                }
                else{
                    alert("Authenticated");
                }
               
            });
        </script>
      
    </head>
    <body>
        <div class="container">
            <center>
            <section class="header">
                <div ng-controller="headCtrl">
                    <div ng-repeat="image in logo" ng-class="{{image.class}}">
                        <img  class="responsive-img" style="width: 250px;"  src="{{image.src}}"/>
                    </div>
                </div>
               
            </section>
            <section class="loginForm" class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                <form class="col s12" method="post" action="loginCheck.php">
                    
                
                <div ng-controller="mainCtrl">
                     <div ng-repeat="item in login" class='row'>
                        <div class='input-field col s12'>
                          <input class='validate' type='{{item.type}}' name="{{item.name}}" id='email' />
                          <label style="text-align: left">{{item.value}}</label>
                        </div>
                      </div>
                <div class='row'>
                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect waves-teal indigo'>Login</button>
                </div>
                
                </div>
                </form>
            </section>
            </center>
        </div>
        <?php
       // $username = $_POST['username'];
       // print ($username);
        
        ?>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    </body>
</html>
