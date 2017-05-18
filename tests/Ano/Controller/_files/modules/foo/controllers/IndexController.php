<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Controller
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: IndexController.php 20096 2010-01-06 02:05:09Z bkarwin $
 */

// require_once 'PHPUnit/Util/Filter.php';

//PHPUnit_Util_Filter::addFileToFilter(__FILE__);

// require_once 'Zend/Controller/Action.php';

/**
 * Mock file for testbed
 *
 * @category   Zend
 * @package    Zend_Controller
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Foo_IndexController extends Zend_Controller_Action
{

    /**
     * Test Function for indexAction
     *
     * @return void
     */
    public function indexAction()
    {
        $this->_response->appendBody("Foo_IndexController::indexAction() called\n");
    }

    /**
     * Test Function for barAction
     *
     * @render twig
     * @return void
     */
    public function barAction()
    {
        $this->_response->appendBody("Foo_IndexController::barAction() called\n");
    }

    /**
     * Test Function for bazAction
     *
     * @render: twig
     * @return void
     */
    public function bazAction()
    {
        $this->_response->appendBody("Foo_IndexController::bazAction() called\n");
    }

}
