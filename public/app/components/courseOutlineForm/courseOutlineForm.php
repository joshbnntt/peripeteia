   <div class="row" style="margin-top:50px;" >
   <form novalidate >
   <div class="small-12 large-6 columns">
      <fieldset>
         <legend>General Information</legend>
            <label for="course_name">Course Name</label>
            <input type="text" ng-model="outline.course_name" name="course_name" id="course_name" placeholder="E.G. Life in Christ"  required >
            <!-- <div angucomplete-alt 
               id="course_name" 
               placeholder="E.G. Life in Christ" 
               pause="100" 
               selected-object="outline['course_name']" 
               remote-url="/api/testCourseSearch?s="
               search-fields="name" 
               title-field="name" 
               minlength="1" 
               input-class="form-control form-control-small"
               match-class="highlight"
               field-required="true"
               auto-match="true"></div> -->
            <span class="error" ng-show="errors.course_name">
              <span>{{ errors.course_name }}</span>
            </span>

            <label for="credit_hours">Credit Hours</label>
            <input type="text" ng-model="outline.credit_hours" name="credit_hours" id="credit_hours" placeholder="E.G. 3" min="0" max="5" required >
            <span class="error" ng-show="errors.credit_hours">
              <span>{{ errors.credit_hours }}</span>
            </span>
            

            <label for="instructor_name">Instructor Name</label>
            <input type="text" ng-model="outline.instructor_name" name="instructor_name" id="instructor_name" placeholder="E.G. Mr. Stew Foster" required >            
            <!-- <div angucomplete-alt 
               id="instructor_name" 
               placeholder="E.G. Mr. Stew Foster" 
               pause="100" 
               selected-object="outline['instructor_name']" 
               remote-url="/api/testInstructorSearch?s="
               search-fields="first_name,last_name" 
               title-field="first_name,last_name" 
               minlength="1" 
               input-class="form-control form-control-small"
               match-class="highlight"
               field-required="true"
               auto-match="true"></div> -->
            <span class="error" ng-show="errors.instructor_name">
              <span>{{ errors.instructor_name }}</span>
            </span>
            
            <label for="office_location">Office Location</label>
            <input type="text" ng-model="outline.office_location" name="office_location" id="office_location" placeholder="E.G. AC 501" required>
            <span class="error" ng-show="errors.office_location">
              <span>{{ errors.office_location }}</span>
            </span>

            <label for="office_hours">Office Hours</label>
            <input type="text" ng-model="outline.office_hours" name="office_hours" id="office_hours" placeholder="E.G Th. II" required>
            <span class="error" ng-show="errors.office_hours">
              <span>{{ errors.office_hours }}</span>
            </span>
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="E.G. sfoster@faculty.pcci.edu" ng-model="outline.email" required>
            <span class="error" ng-show="errors.email">
              <span>{{ errors.email }}</span>
            </span>
      </fieldset>
   </div>
         
      <div class="small-12 large-6 columns">
         <fieldset>
            <legend>Course Information</legend>
            <label for="course_description">Course Description</label>
            <input type="text" ng-model="outline.course_description" name="course_description" id="course_description" required placeholder="Give the catalog description of the course here">
            <span class="error" ng-show="errors.course_description">
              <span>{{ errors.course_description }}</span>
            </span>

            <label for="course_prerequisites">Prerequisites</label>
            <input type="text" ng-model="outline.course_prerequisites" name="course_prerequisites" id="course_prerequisites" required placeholder="E.G. None">
            <span class="error" ng-show="errors.course_prerequisites">
              <span>{{ errors.course_prerequisites }}</span>
            </span>

            <label for="course_texts">Required Texts</label>
            <input type="text" ng-model="outline.course_texts" name="course_texts" id="course_texts" required placeholder="E.G. The Bible...">
            <span class="error" ng-show="errors.course_texts">
              <span>{{ errors.course_texts }}</span>
            </span>
            
            <label for="course_outcomes">Learning Outcomes</label>
            <textarea ng-model="outline.course_outcomes" required placeholder="Upon completing this course, students will be able to... Please remember, learning outcomes should reflect course and program outcomes." name="course_outcomes" id="course_outcomes"></textarea>
            <span class="error" ng-show="errors.course_outcomes">
              <span>{{ errors.course_outcomes }}</span>
            </span>    
         </fieldset>
      </div>
   </div>
   <div class="row">
      <div class="large-12">
         <button type="submit" id="submit" ng-click="create()" class="button right">Submit!</button>
      </div>
   </div>
   </form>
   <span us-spinner spinner-key="spinner-1"></span>
   <div class="row">
      <div class="large-12">
        <h1>Answer</h1>
         <pre>{{ answer | json}}</pre>
         <h1>Outline</h1>
         <pre>{{ outline | json}}</pre>
         <h1>Test</h1>
         <pre>{{ test | json }}</pre>
      </div>
   </div>
   </div>