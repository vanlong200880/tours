<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TravelController extends AbstractActionController
{
    public function indexAction()
    {
      $this->layout('layout/user-admin');
        return new ViewModel();
    }
    public function addAction(){
      return new ViewModel();
    }
    public function orderAction(){
      return new ViewModel();
    }
    public function commentAction(){
      return new ViewModel();
    }
}
