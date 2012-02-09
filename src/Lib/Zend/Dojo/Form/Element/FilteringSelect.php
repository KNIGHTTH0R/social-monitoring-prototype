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
 * @package    Zend_Dojo
 * @subpackage Form_Element
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/** Zend_Dojo_Form_Element_ComboBox */
require_once 'Zend/Dojo/Form/Element/ComboBox.php';

/**
 * FilteringSelect dijit
 *
 * @uses       Zend_Dojo_Form_Element_ComboBox
 * @package    Zend_Dojo
 * @subpackage Form_Element
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id: FilteringSelect.php 20096 2010-01-06 02:05:09Z bkarwin $
 */
class Zend_Dojo_Form_Element_FilteringSelect extends Zend_Dojo_Form_Element_ComboBox
{
    /**
     * Use FilteringSelect dijit htdocs helper
     * @var string
     */
    public $helper = 'FilteringSelect';

    /**
     * Flag: autoregister inArray validator?
     * @var bool
     */
    protected $_registerInArrayValidator = true;
}
