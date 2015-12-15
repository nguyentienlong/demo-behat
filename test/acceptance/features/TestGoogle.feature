# features/TestGoogle.feature
Feature: Test Google
  In order to search for something

  Scenario: Search for how google works
    Given I am on "/"
    When I fill in "search form" with "how google works"
    And I press "searchButton"
    Then I should see "agile software development"
