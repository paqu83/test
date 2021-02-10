<?php

namespace Drupal\my_custom\Validate;

use Drupal\Core\Field\FieldException;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form API callback. Validate element value.
 */
class VegeConstraint {
  /**
   * Validates given element.
   *
   * @param array              $element      The form element to process.
   * @param FormStateInterface $formState    The form state.
   * @param array              $form The complete form structure.
   */
  public static function validate(array &$element, FormStateInterface $formState, array &$form) {
    $webformKey = $element['#webform_key'];
    $value = $formState->getValue($webformKey);

    // Skip empty unique fields or arrays (aka #multiple).
    if ($value === '' || is_array($value)) {
      return;
    }

    $error = FALSE;
    if ($formState->getValue('amount_of_kids') +1 < $value) {
      $error = TRUE;
    }
    // do some validation here...
    // and set some error variable, e.g. $error
    $stop = 1;

    if ($error) {
      if (isset($element['#title'])) {
        $tArgs = [
          '%name' => empty($element['#title']) ? $element['#parents'][0] : $element['#title'],
          '%value' => $value,
        ];
        $formState->setError(
          $element,
          t('The value %value is not allowed for element %name. Please use a value smaller than kids + you.', $tArgs)
        );
      } else {
        $formState->setError($element);
      }
    }
  }
}
