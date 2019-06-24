<?php

namespace Drupal\imagex_custom\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\imagex_custom\Entity\Customer;
use Drupal\views\Views;

/**
 * Class CustomersListController.
 */
class CustomersListController extends ControllerBase {

  /**
   * Page.
   *
   * @return array
   */
  public function page(Customer $customer = NULL) {
    $content = [];
    $view = Views::getView('customers');
    if (is_object($view)) {
      if (isset($customer)) {
        $args = [$customer->id()];
        $view->setArguments($args);
      }
      $view->setDisplay('page');
      $view->preExecute();
      $view->execute();
      $content = $view->buildRenderable();
    }
    return $content;
  }
}
