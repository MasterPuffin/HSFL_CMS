<?php

/**
 * @file
 * Contains \Drupal\bljo6035_new\Controller\HelloController.
 */

namespace Drupal\bljo6035_new\Controller;

use Drupal\Core\Controller\ControllerBase;

class NewController extends ControllerBase {
  public function new(string $name = ""): array {
    $nids = \Drupal::entityQuery('node')->condition('status', 1)->condition('type', 'rezept')->execute();
/*
    $query = \Drupal::entityQuery('node')
      ->condition('status', 1)
      ->condition('type', 'rezept');


    $nids = $query->execute();
    */
    //Flip array to have the newest items first and get the first three items
    $nids = array_slice($nids, 0, 3);

    $nodes = \Drupal\node\Entity\Node::loadMultiple($nids);
    //
    //echo "<pre>";
    //print_r($nodes);
    //echo "</pre>";


    return array(
      '#theme' => 'new',
      '#text' => $nodes,
    );
  }
}
