<?php

namespace Views;


class Home extends View
{
    public function __construct($param_postData)
    {
        $this->content = <<<PAGE
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Home Page</title>
		<link rel="stylesheet" type="text/css" href="http://localhost/Project1/public/css/Site_Style_Sheet.css">
	</head>
	<body>
		<div id = "mainDiv">
			<p> Welcome To The Home Screen </p>
		</div>
	</body>
</html>
PAGE;
    }
}
