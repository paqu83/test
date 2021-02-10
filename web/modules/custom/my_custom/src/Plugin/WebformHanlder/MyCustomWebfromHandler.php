<?php

namespace Drupal\my_custom\Plugin\WebformHandler;


use Drupal\webform\Plugin\WebformHandlerBase;
use Drupal\webform\WebformSubmissionInterface;

/**
 * Create a new node entity from a webform submission.
 *
 * @WebformHandler(
 *   id = "Append department",
 *   label = @Translation("Append department"),
 *   category = @Translation("EAppend department"),
 *   description = @Translation("Append department."),
 *   cardinality = \Drupal\webform\Plugin\WebformHandlerInterface::CARDINALITY_UNLIMITED,
 *   results = \Drupal\webform\Plugin\WebformHandlerInterface::RESULTS_PROCESSED,
 *   submission = \Drupal\webform\Plugin\WebformHandlerInterface::SUBMISSION_REQUIRED,
 * )
 */

class MyCustomWebfromHandler extends WebformHandlerBase {

  /**
   * {@inheritdoc}
   */

  // Function to be fired after submitting the Webform.
  public function preSave(WebformSubmissionInterface $webform_submission) {
    // Get an array of the values from the submission.
//    $values = $webform_submission->getData();]
    // TODO: set the department field here.

  }
}
