var auth = angular.module('AuthSrvc',[]);
 
auth.factory('AuthenticationService',function($http, $q, $window, $location, $rootScope){
   var userInfo;

   /**
   * Logs user in.
   *
   * @param credentials
   * @returns deferred.promise
   */
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
      /**
      * Logs user out.
      *
      * @returns deferred.promise
      */
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
      /**
      * Gets the users Information.
      *
      * @returns Json Array
      */
      function getUserInfo()
      {
         return angular.fromJson(userInfo);
      }

      /**
      * Retrieves and sets userInfo to the user information from session variable if there.
      *
      */
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