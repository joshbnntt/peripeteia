<html lang="en"> 
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>Unicode (UTF-8) Test</title>
      <style>
         @page {
            margin-left: 1in;
            margin-right: 1in;
         }

         .hanging-indent {
            text-indent: -0.5in;
            padding-left: 0.5in;
         }

         .numbered-list {
            text-indent: -0.17in;
            padding-left: 0.17in;
         }
      </style>
   </head> 
    
   <body> 
      <div class="header" style="text-align: center; font-weight: bold;">
         <img src="images/pcc_logo.png" alt="" style="width: 50%; height: auto;"><br />
         Course Outline<br />
         Fall 2014<br /><br />
      </div>
      <table>
         <tr>
            <td width="20%">
               <b>Course: </b><br />
               <b>Credit Hours: </b><br />
               <b>Instructor: </b><br />
               <b>Office: </b><br />
               <b>Office Hours: </b><br />
               <b>Email: </b>
            </td>
            <td width="80%">
               {{ $submitted_info['course_name'] }}<br />
               {{ $submitted_info['credit_hours'] }}<br />
               {{ $submitted_info['instructor_name'] }}<br />
               {{ $submitted_info['office_location'] }}<br />
               {{ $submitted_info['office_hours'] }}<br />
               {{ $submitted_info['email'] }}
            </td>
         </tr>
         <tr>
            <td colspan="2">
               <br /><br />
               <div class="hanging-indent">
                  <b>Catalog Description: </b>{{ $submitted_info['course_description'] }}
               </div>
            </td>
         </tr>
         <tr>
            <td colspan="2">
               <br />
               <div class="hanging-indent">
                  <b>Prerequisites: </b>{{ $submitted_info['course_prerequisites'] }}
               </div>
            </td>
         </tr>
         <tr>
            <td colspan="2">
               <br />
               <div class="hanging-indent">
                  <b>Required Texts: </b>{{ $submitted_info['course_texts'] }}
               </div>
            </td>
         </tr>
         <tr>
            <td colspan="2">
               <br />
               <div class="hanging-indent">
                  <b>Learning Outcomes - </b>Upon completing this course, students will be able to:<br />
                  @foreach($submitted_info['course_outcomes'] as $outcome)
                     <div class="numbered-list" style="margin: 0">{{ $outcome; }}</div>
                  @endforeach
               </div>
            </td>
         </tr>
      </table>
   </body>
</html>