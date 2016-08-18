<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-18 16:45:43
 * @version $Id$
 */
// url形式： ;index.php?controller=控制器名&method=方法名
require_once 'function.php';
$controller = daddslashes($_GET['controller']);
$method = daddslashes($_GET['method']);
C($controller, $method);
