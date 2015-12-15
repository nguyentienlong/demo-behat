<?php

use Behat\MinkExtension\Context\MinkContext;

class TestGoogleContext extends MinkContext
{
    /**
    * @Then /^I wait for the next step$/
    */
   public function iWaitForTheNextStep()
   {
       $this->getSession()->wait(1000);
   }
}
