var auth = angular.module('AuthSrvc',[]);
 
auth.factory('AuthenticationService',function($http, $q, $window){
   var userInfo;
   function login(credentials)
   {
         var deferred = $q.defer();
         $http(
         {
            method:'POST',
            url:'api/login',
            params:credentials
         })
            .success(function(response)
            {
               userInfo = {
                  csrf_token: response.csrf_token,
                  user: response.user,
                  password: response.password
               };
               $window.sessionStorage["userInfo"] = JSON.stringify(userInfo);
               deferred.resolve(userInfo);
               console.log(response);
            })
            .error(function(response)
            {
               deferred.reject(response);
               console.log(response);
            });
           return deferred.promise;
      }

      function logout()
      {
         var deferred = $q.defer();
         userInfo = getUserInfo();
         credentials = "Basic " + btoa(userInfo.user + ":" + userInfo.password);
         $http({
            method: "POST",
            url: "/api/logout",
            headers: {
               Authorization: credentials
            }
         })
            .success(function(response) 
            {
               userInfo = null;
               $window.sessionStorage["userInfo"] = null;
               deferred.resolve(result);
            })
            .error(function (response) 
            {
             deferred.reject(response);
            });

         return deferred.promise;
      }

      function getUserInfo()
      {
         return userInfo;
      }

      function init()
      {
         if($window.sessionStorage["userInfo"])
         {
            userInfo = angular.toJson($window.sessionStorage["userInfo"]);
         }
      }
      init();
   return {
      login: login,
      logout: logout,
      getUserInfo: getUserInfo
   };
});