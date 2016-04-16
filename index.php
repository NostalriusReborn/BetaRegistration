<?php

require_once "config/Config.php";
require_once "lib/MySQL.php";
require_once "lib/Account.php";
require_once "module/create_account.php";

$account = createAccount();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nostalrius Reborn | Sign Up</title>
        <style>
            body {
                background: #0c0d0d url('img/background.png');
                width: 100%;
            }

            header {
                width: 100%;
                height: 605px;
                position: absolute;
                margin: 0 auto;
                background: url('img/header.png') no-repeat top center;
                top: 0;
                z-index: -1;
            }

            fieldset {
                width: 70%;
                padding: 50px;
                box-shadow: 0 0 9px white;
                margin: 90px auto;
                background-color: rgba(230, 230, 230, 0.9);
            }

            fieldset input[type="text"],
            fieldset input[type="email"],
            fieldset input[type="password"] {
                display:block;
                margin-bottom: 15px;
                line-height: 18px;
                height: 30px;
                width: 80%;
            }

            fieldset input[type="submit"] {
                width: 80%;
                height: 36px;
                cursor: pointer;
            }

            .logo {
                margin: 10px auto;
                display: block;
            }

            pre {
                display: inline;
                background-color: white;
                padding: 0px 9px;
            }

            .form {
                float: left;
                width: 45%;
            }

            .information {
                float:right;
                width: 52%;
            }

            li {
                margin-bottom: 20px;
            }

            footer {
                color: white;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <header> </header>
        <img class="logo" src="img/logo.png" />
        <fieldset method="post">
            <div class="form">
                <form>
                    <label for="username">Username (a-z/0-9)</label>
                    <input type="text" name="username" id="username" required pattern="[a-zA-Z][a-zA-Z0-9\s]*" value="<?=$account->getUsername()?>" />

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required value="<?=$account->getPasswords()[0]?>" />

                    <label for="password_repeat">Password verification</label>
                    <input type="password" name="password_repeat" id="password_repeat" required value="<?=$account->getPasswords()[1]?>" />

                    <input type="submit" name="signup" value="Sign Up" />
                </form>
            </div>
            <div class="information">
                <ul>
                    <li>This is a Beta Realm!</li>
                    <li>Your Nostalrius characters won't be available before 30th of April.</li>
                    <li>This Beta Realm doesn't meet the quality standards of Nostalrius before 30th of April.</li>
                    <li>You will be able to migrate your beta characters to the main realm after 30th of April.</li>
                    <li>The realmlist is <pre>set realmlist logon.nostalrius-reborn.org</pre></li>
                </ul>
            </div>
        </fieldset>

        <footer>
            &copy; 2016 Nostalrius-Reborn
        </footer>
    </body>
</html>
