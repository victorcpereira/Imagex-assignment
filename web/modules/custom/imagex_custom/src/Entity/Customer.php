<?php

namespace Drupal\imagex_custom\Entity;

use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Defines the Customer entity.
 *
 * @ingroup imagex_custom
 *
 * @ContentEntityType(
 *   id = "customer",
 *   label = @Translation("Customer"),
 *   handlers = {
 *     "list_builder" = "Drupal\imagex_custom\CustomerListBuilder",
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     },
 *   },
 *   base_table = "customer",
 *   admin_permission = "administer customer entities",
 *   entity_keys = {
 *     "id" = "customer_id",
 *     "label" = "customer_name",
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/customer/{customer}",
 *     "collection" = "/admin/structure/customer",
 *   },
 * )
 */
class Customer extends ContentEntityBase implements CustomerInterface {

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->get('customer_name')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setName($name) {
    $this->set('customer_name', $name);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getBalance() {
    return $this->get('balance')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setBalance($value) {
    $this->set('balance', $value);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['customer_name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Customer name'))
      ->setDescription(t('The name of the Customer entity.'))
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

    $fields['balance'] = BaseFieldDefinition::create('float')
      ->setLabel(t('Balance'))
      ->setDescription(t('The balance of the Customer entity.'))
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

    return $fields;
  }

}
