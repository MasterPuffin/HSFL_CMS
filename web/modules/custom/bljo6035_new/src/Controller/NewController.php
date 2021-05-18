<?php

/**
 * @file
 * Contains \Drupal\bljo6035_new\Controller\HelloController.
 */

namespace Drupal\bljo6035_new\Controller;

use Drupal\Core\Controller\ControllerBase;

class NewController extends ControllerBase {
  public function new(string $name = ""): array {
    return array(
      '#theme' => 'new',
      '#text' => t('Hello ' . (empty($name) ? 'World' : $name)),
    );
  }
}
