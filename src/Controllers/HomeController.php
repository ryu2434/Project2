<?php
/**
 * File name: MainController.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Controllers;


use Views\Home;

/**
 * Class MainController
 */
class HomeController extends Controller
{

    /**
     * Function execute - Executes the controllers main action
     *
     * @return mixed
     *
     * @access public
     */
    public function action()
    {
        $view = new Home();
        $view->show();
    }
}
