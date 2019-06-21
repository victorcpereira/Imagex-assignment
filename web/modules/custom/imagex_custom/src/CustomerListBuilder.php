<?php

namespace Drupal\imagex_custom;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Customer entities.
 *
 * @ingroup imagex_custom
 */
class CustomerListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Customer ID');
    $header['name'] = $this->t('Name');
    $header['balance'] = $this->t('Balance');
    return $header;
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var \Drupal\imagex_custom\Entity\Customer $entity */
    $row['customer_id'] = $entity->id();
    $row['customer_name'] = $entity->label();
    $row['balance'] = $entity->getBalance();
    return $row;
  }

}
