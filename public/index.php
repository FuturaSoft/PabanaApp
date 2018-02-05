<?php
/**
 * The Front Controller for handling every request
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

// Check platform requirements
require dirname(__DIR__) . '/config/requirements.php';

// Launch Composer autoload
require dirname(__DIR__) . '/vendor/autoload.php';
// If you don't use composer, comment upperline and discomment lower line
// require dirname(__DIR__) . '/config/autoload.php';

// Include Application class
use Pabana\Core\Application;

// Bind your application to the server
$sConfigPath = dirname(__DIR__) . '/config';
$oApp = new Application($sConfigPath);
$oApp->run();