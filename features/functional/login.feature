# features/functional/welcome.feature

Feature: Login Teacher
  In order to use project peri
  I need to Login
  As a Teacher

  Scenario: Logging into Peri
    Given I am not logged in
    When I visit "/login"
    Then I should see "Login to Project Peri"
    And  I should be able to login