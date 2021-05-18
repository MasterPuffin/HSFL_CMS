<?php

/**
 * @file
 * Contains \Drupal\bljo6035_hello\Controller\HelloController.
 */

namespace Drupal\bljo6035_hello\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function hello(string $name = ""): array {
    var_dump($name);
    return array(
      '#theme' => 'hello',
      '#text' => t('Hello ' . (empty($name) ? 'World' : $name)),
    );
  }
}
