# features/TestGoogle.feature
Feature: Test Google
  In order to search for something

  Scenario: Search for how google works
    Given I am on "/"
    When I fill in "q" with "how google works"
    And I press "btnG"
    Then I wait for the next step
    Then I should see "How Google Works"
