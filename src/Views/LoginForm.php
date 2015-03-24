<?php

namespace Views;


class LoginForm extends View
{
    public function __construct()
    {
        $this->content = <<<LOGIN_FORM
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/Project1/public/css/Site_Style_Sheet.css">
    </head>
    <body>
        <div id = "mainDiv">
            <form id = "loginForm" method = "POST" action = "/auth">
                <h1> Please Sign In </h1> <br />
                <p>Username: <input id = "username" type = "text" name = "username" size="15" /><br />
                    <br />
                    Password: <input id = "password" type = "password" name = "password" size="15" /><br />
                    <br />
                    Authentication: <select form = "loginForm" name = "authType" >
                                        <option value = "InMemory">InMemory</option>
                                        <option value = "FileBased">FileBased</option>
                                        <option value = "MySQL">MySQL DB</option>
                                    </select>
                    <p><input type = "submit" class = "button" value = "Login" /></p><br />
                </p>
            </form>
        </div>
    </body>
</html>
LOGIN_FORM;
    }
}
