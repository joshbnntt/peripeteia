var auth = angular.module('AuthSrvc',[]);
 
auth.factory('AuthenticationService',function($http, $q, $window, $location, $rootScope){
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
               $rootScope.$broadcast('userLoggedIn', userInfo);
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
            method: "GET",
            url: "/api/logout",
            headers: {
               Authorization: credentials
            }
         })
            .success(function(response) 
            {
               userInfo = null;
               $window.sessionStorage["userInfo"] = null;
               deferred.resolve(response);
               $rootScope.$broadcast('userLoggedOut');
               $location.path("/");
            })
            .error(function (response) 
            {
               deferred.reject(response);
            });

         return deferred.promise;
      }

      function getUserInfo()
      {
         return angular.fromJson(userInfo);
      }

      function init()
      {
         if($window.sessionStorage["userInfo"])
         {
            userInfo = $window.sessionStorage["userInfo"];
         }
      }
      init();
   return {
      login: login,
      logout: logout,
      getUserInfo: getUserInfo
   };
});