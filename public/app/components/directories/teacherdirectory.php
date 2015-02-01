   <div class="row" style="margin-top:50px;" >
   <form novalidate >
   <div class="small-12 large-12 columns">
      <fieldset>
         <legend>Search</legend>
            <input type="text" ng-model="filterText" name="filterText" id="filterText" placeholder="search here"  title="Search by teacher first name, last name, or a combination of both. You can use partial names. (ie. John Smith, John, Smith, or J Smith)" autofocus required >
            <button type="submit" id="submit" ng-click="search()" class="button right">Search</button>
            <span class="error" ng-show="errors" >
              <span>{{ errors }}</span>
            </span>            
      </fieldset>
   </div>
   </form>
   <span us-spinner spinner-key="spinner-1"></span>
  <div class="row">
    <div class="small-12 large-centered columns" ng-show="users">
      <table style="width: 100%; margin-top: 20px;">
       <thead>
          <tr>
             <th style="width: 33%">Name</th>
             <th style="width: 33%">email</th>
             <th style="width: 33%">Office</th>             
          </tr>
       </thead>
       <tbody>
             
       </tbody>
      </table>
    </div>
    </div>
    <div class="row">
    <div class="small-12 large-centered columns" ng-show="!users">
      <div data-alert="" class="alert-box warning round">
        No results match your search.
        <a href="#" class="close">×</a>
      </div>
    </div>
    </div>
   </div>
   </div>