<?php

/**
 * @file
 * Contains \Drupal\bljo6035_hello\Controller\HelloController.
 */

namespace Drupal\bljo6035_hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function hello(string $name = ""): array {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello ' . (empty($name) ? 'World' : $name)),
    );
  }
}
