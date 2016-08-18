<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-18 18:38:13
 * @version $Id$
 */

class testController {

    function show() {
        $model = new testModel();
        $data = $model->get();
        $view = new testView();
        $view->display($data);
    }
}