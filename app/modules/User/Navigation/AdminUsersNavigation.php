<?php
/*
  +------------------------------------------------------------------------+
  | PhalconEye CMS                                                         |
  +------------------------------------------------------------------------+
  | Copyright (c) 2013-2014 PhalconEye Team (http://phalconeye.com/)       |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file LICENSE.txt.                             |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to license@phalconeye.com so we can send you a copy immediately.       |
  +------------------------------------------------------------------------+
  | Author: Ivan Vorontsov <ivan.vorontsov@phalconeye.com>                 |
  | Author: Piotr Gasiorowski <p.gasiorowski@vipserv.org>                  |
  +------------------------------------------------------------------------+
*/

namespace User\Navigation;

use Core\Navigation\CoreNavigation;

/**
 * User Admin Navigation
 *
 * @category  PhalconEye
 * @package   User\Navigation
 * @author    Ivan Vorontsov <ivan.vorontsov@phalconeye.com>
 * @author    Piotr Gasiorowski <p.gasiorowski@vipserv.org>
 * @copyright 2013-2014 PhalconEye Team
 * @license   New BSD License
 * @link      http://phalconeye.com/
 */
class AdminUsersNavigation extends CoreNavigation
{
    /**
     * {@inheritdoc}
     */
    public function initialize()
    {
        $this->setItems([
            ['Users', 'admin/users', [
                'prepend' => '<i class="glyphicon glyphicon-user"></i>'
            ]],
            ['Roles', 'admin/users/roles', [
                'prepend' => '<i class="glyphicon glyphicon-share"></i>'
            ]],
            null,
            ['Create new user', 'admin/users/create', [
                'prepend' => '<i class="glyphicon glyphicon-plus-sign"></i>'
            ]],
            ['Create new role', 'admin/users/roles-create', [
                'prepend' => '<i class="glyphicon glyphicon-plus-sign"></i>'
            ]],
        ]);
    }
}
