<?php
/*
  +------------------------------------------------------------------------+
  | PhalconEye CMS                                                         |
  +------------------------------------------------------------------------+
  | Copyright (c) 2013-2016 PhalconEye Team (http://phalconeye.com/)       |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file LICENSE.txt.                             |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to license@phalconeye.com so we can send you a copy immediately.       |
  +------------------------------------------------------------------------+
  | Author: Ivan Vorontsov <lantian.ivan@gmail.com>                 |
  +------------------------------------------------------------------------+
*/

namespace Engine\Behavior;

use Engine\Helper\I18nHelper;

/**
 * Js translations.
 *
 * @category  PhalconEye
 * @package   Engine\Behavior
 * @author    Ivan Vorontsov <lantian.ivan@gmail.com>
 * @copyright 2013-2016 PhalconEye Team
 * @license   New BSD License
 * @link      http://phalconeye.com/
 */
trait JsTranslationBehavior
{
    /**
     * Add default javascript translations.
     *
     * @return void
     */
    public function addDefaultJsTranslations()
    {
        I18nHelper::getInstance($this->getDI())
            ->add('Do you really want to delete this item?')
            ->add('Close this window?');
    }
}