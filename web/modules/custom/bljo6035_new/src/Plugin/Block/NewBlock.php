<?php

namespace Drupal\bljo6035_new\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Letzte Rezepte"),
 *   category = @Translation("Letzte Rezepte"),
 * )
 */
class NewBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
      '#theme' => 'new',
      '#text' => bljo6035_new_getLatestRecipes(),
    );
  }

}
