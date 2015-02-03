app.service('TeacherDirectoryService', [])
   .factory('TeacherDirectory', function($http, AuthenticationService, Api) {
      return {
         // get all the comments
         searchTeacher : function(filterText) {
            return Api.call_api_method('GET', 'testInstructorSearch', filterText);
         }        
      };
   });