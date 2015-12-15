<?php

use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Hook\Scope\BeforeFeatureScope;
use Behat\Behat\Hook\Scope\AfterFeatureScope;

class TestGoogleContext extends MinkContext
{
    /** @BeforeFeature */
    public static function setupFeature(BeforeFeatureScope $scope)
    {
        if($scope->getSuite()->getSetting('seed_data')) {
            echo('setting up database');
            //call sh script or command
            echo('finished setup database');
        }
    }

    /** @AfterFeature */
    public static function teardownFeature(AfterFeatureScope $scope) {
        echo('dropping database');
        //call sh script or command to drop db
        echo('database dropped');
        //may be need to trigger and event to some listener
        echo('feature tested, plz check blah blah blah');
    }

    /** @BeforeScenario */
    public function beforeScenario($event) {
    }

    /** @AfterScenario */
    public function afterScenario($event) {
    }

    /**
    * @Then /^I wait for the next step$/
    */
   public function iWaitForTheNextStep()
   {
       $this->getSession()->wait(1000);
   }
}
