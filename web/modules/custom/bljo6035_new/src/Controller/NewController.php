<?php

/**
 * @file
 * Contains \Drupal\bljo6035_new\Controller\HelloController.
 */

namespace Drupal\bljo6035_new\Controller;

use Drupal\Core\Controller\ControllerBase;

class NewController extends ControllerBase {
  public function new(): array {
    return array(
      '#theme' => 'new',
      '#text' => bljo6035_new_getLatestRecipes(),
    );
  }
}
