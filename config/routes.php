<?php
/**
 * Routes files with user defined routes
 *
 * Pabana : PHP Framework (https://pabana.futurasoft.fr)
 * Copyright (c) FuturaSoft (https://futurasoft.fr)
 *
 * Licensed under BSD-3-Clause License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) FuturaSoft (https://futurasoft.fr)
 * @link          https://pabana.futurasoft.fr Pabana Project
 * @since         1.0.0
 * @license       https://opensource.org/licenses/BSD-3-Clause BSD-3-Clause License
 */
use Pabana\Routing\RouteCollection;

RouteCollection::add('/sample/bookmark', array(
	'controller' => 'Bookmark',
	'action' => 'index'
));
RouteCollection::add('/sample/bookmark/create-form', array(
	'controller' => 'Bookmark',
	'action' => 'createForm'
));
RouteCollection::add('/sample/bookmark/create-form/error/:error', array(
	'controller' => 'Bookmark',
	'action' => 'createForm',
	'param' => array(
		'error' => ':error'
	)
));
RouteCollection::add('/sample/bookmark/create', array(
	'controller' => 'Bookmark',
	'action' => 'create'
));
RouteCollection::add('/sample/bookmark/modify-form/:id', array(
	'controller' => 'Bookmark',
	'action' => 'modifyForm',
	'param' => array(
		'id' => ':id'
	)
));
RouteCollection::add('/sample/bookmark/modify-form/:id/error/:error', array(
	'controller' => 'Bookmark',
	'action' => 'modifyForm',
	'param' => array(
		'id' => ':id',
		'error' => ':error'
	)
));
RouteCollection::add('/sample/bookmark/modify/:id', array(
	'controller' => 'Bookmark',
	'action' => 'modify',
	'param' => array(
		'id' => ':id'
	)
));
RouteCollection::add('/sample/bookmark/delete-form/:id', array(
	'controller' => 'Bookmark',
	'action' => 'deleteForm',
	'param' => array(
		'id' => ':id'
	)
));
RouteCollection::add('/sample/bookmark/delete/:id', array(
	'controller' => 'Bookmark',
	'action' => 'delete',
	'param' => array(
		'id' => ':id'
	)
));