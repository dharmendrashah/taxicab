<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taxicab-driver</title>
</head>
<body>
<body background="images/background.jpeg">
<!--tittle of the website-->
<dir class="header">
    <a href="#"><img id="logo" src="images/taxicab.png" alt="taxicab"></a>
    <ul>
        <li><a href="#">Taxicab</a></li>
</ul></dir>
    <center>
    <dir class="log_user">
        <a href="driverlogin.php">
    <input type="button" value="Log in" id="user" onclick="user()"/>
</a>
    <br/>
    
    <br/>
    <a href="driversignup.php">
    <input type="button" value="Sign up" id="driver" onclick="driver()"/>
</a>
    </dir>
    <style>
        #user {
	background-color: yellow;
	color: #060000;
	width: 200px;
	height: 100px;
	font-size: 28px;
    cursor: pointer;
}
#user:hover {
    color: yellow;
    background-color: #060000;
}
#driver {
	background-color: yellow;
	color: #060000;
	width: 200px;
	height: 100px;
	font-size: 28px;
    cursor: pointer;
}
#driver:hover {
    color: yellow;
    background-color: #060000;
}
        body {
            /*background: lightgrey;*/
        }
        #logo {
            height: 100px;
            vertical-align: middle;
        }
        ul {
            display: inline;
            list-style: none;
        }
        li {
            display: inline;
            cursor: none;
            /*! border: 1px solid black; */
            /*! padding: 20px; */
            /*! margin-left: -5px; */
            color: #37e1e766;
            font-size: 35px;
            /*! padding: 0px; */
            padding-left: -5px;
            /*! padding-right: 55px; */
        }
        a {
            text-decoration: none;
        }
        li:hover {
            /*! background: black; */
        }
        .header
        {
            background-color: #556060b3
        }
        </style>
</body>
</html>