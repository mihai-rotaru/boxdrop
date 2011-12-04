<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="logo">
                <h1><span class='h1-initial'>B</span>ox<span class='h1-initial'>D</span>rop</h1>
                <a href="index.php"><span id="make-div-link"></span></a>
            </div>
            <div id="search-div">
                <input type="text" id="search" name="search" onfocus="return onClickSearchTextbox()" />
                <input type='button' class='button-small' value='Search' onclick="return onClickSearch()" />
            </div>
            <div id="small-navigation">
                <ul>
                    <li> <a href="login.php">Login </a></li>
                    <li> <a href="preferences.php"> Preferences </a></li>
                    <li> <a href="help.php"> Help </a></li>
                    <li> <a href="index.php"> About </a></li>
                </ul>
            </div>
        </div>
        
        <div id="content-no-margin">
            <form id="login" name="login">
                <fieldset>
                    <legend>Your Details</legend>
                    <label for="name">    User ID: </label><input type="text" id="name" name="name"><br/>
                    <label for="email">   Email: </label><input type="text" id="email" name="email"><br/>
                    <label for="password">Password:</label><input type="password" name="password"><br/>
                    <label for="password">Password:</label><input type="password" name="password"><br/>
                    <input type='button' id='register-button' class='button' value='Register'/>
                </fieldset>
        </div>
        <div id="footer">
            Copyright � 2011 Mihai Rotaru. All rights reserved.<br/>
            [ <a href="mailto:mihai.rotaru@gmx.com">contact</a> ]
        </div>
    </div>
</body>

</html>