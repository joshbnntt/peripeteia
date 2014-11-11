   <div class="row">
      <div class="small-12 large-centered columns">
            <table style="width: 100%; margin-top: 20px;">
               <thead>
                  <tr>
                     <th style="width: 70%">Course Name</th>
                     <th style="width: 30%">Link</th>
                  </tr>
               </thead>
               <tbody>
                     <tr ng-repeat='outlines in course_outlines'>
                        <td> {{ outlines }}</td>
                     </tr>
               </tbody>
            </table>
      </div>
   </div> 