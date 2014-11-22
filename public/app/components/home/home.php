<div class="row" style="margin-top:50px;">
      <div class="small-12 large-centered columns">
            <table style="width: 100%; margin-top: 20px;">
               <thead>
                  <tr>
                     <th style="width: 70%">Course Name</th>
                     <th style="width: 30%">Link</th>
                  </tr>
               </thead>
               <tbody>
                     <tr ng-repeat='(title, path) in course_outlines'>
                        <td> {{ title }}</td>
                        <td><a href="courseoutlines/{{ path }}" target="_self">{{ title }} </a></td>
                     </tr>
               </tbody>
            </table>
      </div>
   </div>