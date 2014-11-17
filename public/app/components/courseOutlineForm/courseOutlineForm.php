   <div class="row" style="margin-top:50px;" >
   <form>
   <div class="small-12 large-6 columns">
      <fieldset>
         <legend>General Information</legend>
            <label for="course_name">Course Name</label>
            <div angucomplete 
               id="course_name" 
               placeholder="E.G. Life in Christ" 
               pause="100" 
               selectedobject="outline['course_name']" 
               url="/api/testCourseSearch?s="
               searchfields="name" 
               titlefield="name" 
               minlength="1" 
               inputclass="form-control form-control-small"/>
            <div smarty-suggestions-box></div>

            <label for="credit_hours">Credit Hours</label>
            <input type="text" ng-model="outline.credit_hours" name="credit_hours" id="credit_hours" placeholder="E.G. 3">

            <label for="instructor_name">Instructor Name</label>
            <div angucomplete 
               id="instructor_name" 
               placeholder="E.G. Mr. Stew Foster" 
               pause="100" 
               selectedobject="outline['instructor_name']" 
               url="/api/testInstructorSearch?s="
               searchfields="first_name,last_name" 
               titlefield="first_name,last_name" 
               minlength="1" 
               inputclass="form-control form-control-small"/>
            <div smarty-suggestions-box></div>

            <label for="office_location">Office Location</label>
            <input type="text" ng-model="outline.office_location" name="office_location" id="office_location" placeholder="E.G. AC 501">

            <label for="office_hours">Office Hours</label>
            <input type="text" ng-model="outline.office_hours" name="office_hours" id="office_hours" placeholder="E.G Th. II">

            <label for="email">Email</label>
            <input type="email" ng-model="outline.email" name="email" id="email" placeholder="E.G. sfoster@faculty.pcci.edu">
      </fieldset>
   </div>
         
      <div class="small-12 large-6 columns">
         <fieldset>
            <legend>Course Information</legend>
            <label for="course_description">Course Description</label>
            <input type="text" ng-model="outline.course_description" name="course_description" id="course_description" placeholder="Give the catalog description of the course here">

            <label for="course_prerequisites">Prerequisites</label>
            <input type="text" ng-model="outline.course_prerequisites" name="course_prerequisites" id="course_prerequisites" placeholder="E.G. None">

            <label for="course_texts">Required Texts</label>
            <input type="text" ng-model="outline.course_texts" name="course_texts" id="course_texts" placeholder="E.G. The Bible...">

            <label for="course_outcomes">Learning Outcomes</label>
            <textarea ng-model="outline.course_outcomes" placeholder="Upon completing this course, students will be able to... Please remember, learning outcomes should reflect course and program outcomes." name="course_outcomes" id="course_outcomes"></textarea>
         </fieldset>
      </div>
   </div>
   <div class="row">
      <div class="large-12">
         <button ng-click="create()" class="button right">Submit!</button>
      </div>
      </form>
   </div>
   <div class="row">
      <div class="large-12">
         <p>{{ answer }}</p>
         <p>{{ a | json}}</p>
      </div>
   </div>
   </div>