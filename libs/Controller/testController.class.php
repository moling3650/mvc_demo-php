<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-18 18:38:13
 * @version $Id$
 */

class testController {

    function show() {
        $model = M('test');
        $data = $model->get();
        $view = V('test');
        $view->display($data);
    }
}