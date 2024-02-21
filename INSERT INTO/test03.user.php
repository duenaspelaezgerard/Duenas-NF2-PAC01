<?php

        require("class.user.insert.php");
        require("class.pdofactory.php");

        // print "Running...<br />";

        $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $objUser = new User($objPDO, 2);

        // print "ID: " . $objUser->getID() . "<br />";
        // print "First name is " . $objUser->getFirstName() . "<br />";
        // print "Last name is " . $objUser->getLastName() . "<br />";
        // print "Password is " . $objUser->getPassword() . "<br />";
        // print "Mail is " . $objUser->getEmailAddress() . "<br />";
        // print "Wrong is " . ($objUser->getWrong()?:"---") . "<br />";

        // // $objUser->setFirstName("Ed2");
        // $objUser->Save();

        // $objUser2 = new User($objPDO);

        // $objUser2->setFirstName("Steve");
        // $objUser2->setLastName("Nowicki");
        // $objUser2->setDateAccountCreated(date("Y-m-d"));

        // print "First name is " . $objUser2->getFirstName() . "<br />";
        // print "Last name is " . $objUser2->getLastName() . "<br />";

        // print "Saving...<br />";

        // $objUser2->Save();

        // print "ID in database is " . $objUser2->getID() . "<br />";


        // print "<br/>";
        // print "<br/>";
        // print "<br/>";

        $objUser3 = new User($objPDO, 1);

        $objUser4 = new User($objPDO, 2);

        print "ejercicio 2 " ;
        print "<br/>";
        print "<br/>";

        print "First name is " . $objUser3->getFirstName() . "<br />";
        print "Last name is " . $objUser3->getLastName() . "<br />";
        print "Username is " . $objUser3->getUsername() . "<br />";
        print "Password is " . $objUser3->getPassword() . "<br />";
        print "Mail is " . $objUser3->getEmailAddress() . "<br />";
        print "Date account created is " . $objUser3->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser3->getTimeAccountCreated() . "<br />";
        print "Date last login is " . ($objUser3->getDateLastLogin() ?: "Not available") . "<br />";
        print "Time last login is " . ($objUser3->getTimeLastLogin() ?: "Not available") . "<br />";
        print "<br/>";

        print "First name is " . $objUser4->getFirstName() . "<br />";
        print "Last name is " . $objUser4->getLastName() . "<br />";
        print "Username is " . $objUser4->getUsername() . "<br />";
        print "Password is " . $objUser4->getPassword() . "<br />";
        print "Mail is " . $objUser4->getEmailAddress() . "<br />";
        print "Date account created is " . $objUser4->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser4->getTimeAccountCreated() . "<br />";
        print "Date last login is " . ($objUser4->getDateLastLogin() ?: "Not available") . "<br />";
        print "Time last login is " . ($objUser4->getTimeLastLogin() ?: "Not available") . "<br />";
        print "<br/>";


        //EJERCICIO 3
        
        print "ejercicio 3 " ;
        print "<br/>";
        print "<br/>";

        $tempFirstName = $objUser3->getFirstName();
        $tempLastName = $objUser3->getLastName();
        $tempUsername = $objUser3->getUsername();
        $tempPassword = $objUser3->getPassword();
        $tempEmailAddress = $objUser3->getEmailAddress();
        $tempDateAccountCreated = $objUser3->getDateAccountCreated();
        $tempTimeAccountCreated = $objUser3->getTimeAccountCreated();
        $tempDateLastLogin = $objUser3->getDateLastLogin();
        $tempTimeLastLogin = $objUser3->getTimeLastLogin();

        $objUser3->setFirstName($objUser4->getFirstName());
        $objUser3->setLastName($objUser4->getLastName());
        $objUser3->setUsername($objUser4->getUsername());
        $objUser3->setPassword($objUser4->getPassword());
        $objUser3->setEmailAddress($objUser4->getEmailAddress());
        $objUser3->setDateAccountCreated($objUser4->getDateAccountCreated());
        $objUser3->setTimeAccountCreated($objUser4->getTimeAccountCreated());
        $objUser3->setDateLastLogin($objUser4->getDateLastLogin());
        $objUser3->setTimeLastLogin($objUser4->getTimeLastLogin());

        $objUser4->setFirstName($tempFirstName);
        $objUser4->setLastName($tempLastName);
        $objUser4->setUsername($tempUsername);
        $objUser4->setPassword($tempPassword);
        $objUser4->setEmailAddress($tempEmailAddress);
        $objUser4->setDateAccountCreated($tempDateAccountCreated);
        $objUser4->setTimeAccountCreated($tempTimeAccountCreated);
        $objUser4->setDateLastLogin($tempDateLastLogin);
        $objUser4->setTimeLastLogin($tempTimeLastLogin);


        print "First name is " . $objUser3->getFirstName() . "<br />";
        print "Last name is " . $objUser3->getLastName() . "<br />";
        print "Username is " . $objUser3->getUsername() . "<br />";
        print "Password is " . $objUser3->getPassword() . "<br />";
        print "Mail is " . $objUser3->getEmailAddress() . "<br />";
        print "Date account created is " . $objUser3->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser3->getTimeAccountCreated() . "<br />";
        print "Date last login is " . ($objUser3->getDateLastLogin() ?: "Not available") . "<br />";
        print "Time last login is " . ($objUser3->getTimeLastLogin() ?: "Not available") . "<br />";
        print "<br/>";

        print "First name is " . $objUser4->getFirstName() . "<br />";
        print "Last name is " . $objUser4->getLastName() . "<br />";
        print "Username is " . $objUser4->getUsername() . "<br />";
        print "Password is " . $objUser4->getPassword() . "<br />";
        print "Mail is " . $objUser4->getEmailAddress() . "<br />";
        print "Date account created is " . $objUser4->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser4->getTimeAccountCreated() . "<br />";
        print "Date last login is " . ($objUser4->getDateLastLogin() ?: "Not available") . "<br />";
        print "Time last login is " . ($objUser4->getTimeLastLogin() ?: "Not available") . "<br />";
        print "<br/>";


        $objUser3->Save();
        $objUser4->Save();

