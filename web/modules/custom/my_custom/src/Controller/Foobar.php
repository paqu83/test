<?php
namespace Drupal\my_custom\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;


class Foobar extends ControllerBase {

  public function content( $placeholder, Request $request) {
    $taxonomy = taxonomy_term_load_multiple_by_name($placeholder,  'department');
    if (empty($taxonomy)) {
      throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException();
    }
    return [
      '#markup' => 'cheesus slice' ,
    ];
  }
}
