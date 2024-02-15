<?php

        require("class.user.select.php");
        require("class.pdofactory.php");

        $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $Usuarios = 3;

        for ($i = 1; $i <= $Usuarios; $i++) {
       
                $objUser = new User($objPDO, $i);

                print "ID: " . $objUser->getID() . "<br />";
                print "First name is " . $objUser->getFirstName() . "<br />";
                print "Last name is " . $objUser->getLastName() . "<br />";
                print "Username is " . $objUser->getUsername() . "<br />";
                print "MD5 Password is " . $objUser->getPassword() . "<br />";
                print "Email address is " . $objUser->getEmailAddress() . "<br />";
                print "Date last login is " . $objUser->getDateLastLogin() . "<br />";
                print "Time last login is " . $objUser->getTimeLastLogin() . "<br />";
                print "Date account created is " . $objUser->getDateAccountCreated() . "<br />";
                print "Time account created is " . $objUser->getTimeAccountCreated() . "<br />";
                print "<br/>";
        }




?>
