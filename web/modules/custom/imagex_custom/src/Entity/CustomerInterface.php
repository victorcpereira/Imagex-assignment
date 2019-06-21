<?php

namespace Drupal\imagex_custom\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Customer entities.
 *
 * @ingroup imagex_custom
 */
interface CustomerInterface extends ContentEntityInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Customer name.
   *
   * @return string
   *   Name of the Customer.
   */
  public function getName();

  /**
   * Sets the Customer name.
   *
   * @param string $name
   *   The Customer name.
   *
   * @return \Drupal\imagex_custom\Entity\CustomerInterface
   *   The called Customer entity.
   */
  public function setName($name);

  /**
   * Gets the Customer balance.
   *
   * @return float
   *   Balance of the Customer.
   */
  public function getBalance();

  /**
   * Sets the Customer balance.
   *
   * @param float $value
   *   The Customer balance.
   *
   * @return \Drupal\imagex_custom\Entity\CustomerInterface
   *   The called Customer entity.
   */
  public function setBalance($value);


}
