<div class="row" style="margin-top: 50px;">
  <div class="small-12 medium-7 columns">
    <h4>Login</h4>
      <form><!--username-->
        <span class="error" ng-show="authError.error">
          <span>{{ authError.error }}</span>
        </span>
        <input id="username" type="email" ng-model="loginData.email"/>
        <!--password-->
        <input id="password" type="password" ng-model="loginData.password"/>
        <!--submit-->
        <button class="button success radius" type="submit" ng-click="loginSubmit()">Login</button>
      </form>
  </div>
</div>      