<?php
/**
 * File name: AuthController.php
 *
 * Project: Project1
 *
 * PHP version 5
 *
 * $LastChangedDate$
 * $LastChangedBy$
 */

namespace Controllers;

use Common\Authentication\FileBased;
use Common\Authentication\InMemory;
use Common\Authentication\MySQL;
use Views\Home;
use Models\DataCleaner;

/**
 * Class AuthController
 */
class AuthController extends Controller
{

    protected $auth;

    /**
     * Function execute
     *
     * @access public
     */
    public function action()
    {
        $postData = $this->request->getPost();

        $dataCleaner = new DataCleaner();

        foreach($postData as $value) {
            $dataCleaner->clean($value);
        }
        
        $authType = $postData->authType;
        $this->instantiateAuth($authType);

        if($this->auth->authenticate($postData->username, $postData->password)) {
            $view = new Home($postData);
            $view->show();
        }

        else {
            //$view = new LoginForm();
            //$view->show();
            echo "Authentication failed";
        }
    }

    private function instantiateAuth ($param_authType) {
        //Route based on Authtype
        if($param_authType === "InMemory") {
            $this->auth = new InMemory ();
        }

        else if($param_authType === "FileBased") {
            $this->auth = new FileBased ();
        }

        else if($param_authType === "MySQL") {
            $this->auth = new MySQL ();
        }

    }
}
