<?php

        require("class.user.php");
        require("class.pdofactory.php");

        $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $objUser = new User($objPDO);
        $objUser->setFirstName('Ana');
        $objUser->setLastName('López');
        $objUser->setUsername('analopez');
        $objUser->setPassword('e10adc3949ba59abbe56e057f20f883e'); 
        $objUser->setEmailAddress('ana@example.com');
        $objUser->setDateAccountCreated('2023-08-05');
        $objUser->setTimeAccountCreated('11:00:00');
        $objUser->setDateLastLogin('2024-02-14'); 
        $objUser->setTimeLastLogin('20:15:00');

        $objUser2 = new User($objPDO);
        $objUser2->setFirstName('Carlos');
        $objUser2->setLastName('Ruiz');
        $objUser2->setUsername('carlosruiz');
        $objUser2->setPassword('81dc9bdb52d04dc20036dbd8313ed055'); 
        $objUser2->setEmailAddress('carlos@example.com');
        $objUser2->setDateAccountCreated('2023-11-12');
        $objUser2->setTimeAccountCreated('14:30:00');
        $objUser2->setDateLastLogin('2024-02-15'); 
        $objUser2->setTimeLastLogin('21:15:00'); 

        $objUser3 = new User($objPDO);
        $objUser3->setFirstName('Gabriel');
        $objUser3->setLastName('ApellidoGabriel');
        $objUser3->setUsername('gabriel123');
        $objUser3->setPassword('098f6bcd4621d373cade4e832627b4f6'); 
        $objUser3->setEmailAddress('gabriel@example.com');
        $objUser3->setDateAccountCreated('2023-12-25');
        $objUser3->setTimeAccountCreated('09:45:00');
        $objUser3->setDateLastLogin('2024-02-16'); 
        $objUser3->setTimeLastLogin('22:15:00');

        print "EJERCICIO 2 <br /><br />";

        print "First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";
        print "Username is " . $objUser->getUsername() . "<br />";
        print "Password is " . $objUser->getPassword() . "<br />";
        print "Mail is " . $objUser->getEmailAddress() . "<br />";
        print "Date account created is " . $objUser->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser->getTimeAccountCreated() . "<br />";
        print "Date last login is " . ($objUser->getDateLastLogin() ?: "Not available") . "<br />";
        print "Time last login is " . ($objUser->getTimeLastLogin() ?: "Not available") . "<br />";
        print "<br/>";

        print "First name is " . $objUser2->getFirstName() . "<br />";
        print "Last name is " . $objUser2->getLastName() . "<br />";
        print "Username is " . $objUser2->getUsername() . "<br />";
        print "Password is " . $objUser2->getPassword() . "<br />";
        print "Mail is " . $objUser2->getEmailAddress() . "<br />";
        print "Date account created is " . $objUser2->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser2->getTimeAccountCreated() . "<br />";
        print "Date last login is " . ($objUser2->getDateLastLogin() ?: "Not available") . "<br />";
        print "Time last login is " . ($objUser2->getTimeLastLogin() ?: "Not available") . "<br />";
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

        //EJERCICIO 3

        // $objUser->Save();
        // $objUser2->Save();
        // $objUser3->Save();


        $objUser->setFirstName('jORDI');
        $objUser->setLastName('López4');
        $objUser->setUsername('analopez4');
        $objUser->setPassword('7f20f883e4'); 
        $objUser->setEmailAddress('ana@example.com4');
        $objUser->setDateAccountCreated('2024-08-05');
        $objUser->setTimeAccountCreated('12:00:00');
        $objUser->setDateLastLogin('2025-02-14'); 
        $objUser->setTimeLastLogin('21:15:00');

        $objUser2->setFirstName('ESTE NO SE ELIMINA');
        $objUser2->setLastName('Ruiz5');
        $objUser2->setUsername('carlosruiz5');
        $objUser2->setPassword('88313ed05577'); 
        $objUser2->setEmailAddress('carlos@example.com5');
        $objUser2->setDateAccountCreated('2025-11-12');
        $objUser2->setTimeAccountCreated('17:30:00');
        $objUser2->setDateLastLogin('2025-02-15'); 
        $objUser2->setTimeLastLogin('23:15:00'); 

        $objUser3->setFirstName('Jordi');
        $objUser3->setLastName('ApellidoGabriel6');
        $objUser3->setUsername('gabriel1236');
        $objUser3->setPassword('f66666'); 
        $objUser3->setEmailAddress('gabriel@example.com6');
        $objUser3->setDateAccountCreated('2023-12-26');
        $objUser3->setTimeAccountCreated('19:45:00');
        $objUser3->setDateLastLogin('2026-02-16'); 
        $objUser3->setTimeLastLogin('24:00:00');


        print "EJERCICIO 4 <br /><br />";

        print "First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";
        print "Username is " . $objUser->getUsername() . "<br />";
        print "Password is " . $objUser->getPassword() . "<br />";
        print "Mail is " . $objUser->getEmailAddress() . "<br />";
        print "Date account created is " . $objUser->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser->getTimeAccountCreated() . "<br />";
        print "Date last login is " . ($objUser->getDateLastLogin() ?: "Not available") . "<br />";
        print "Time last login is " . ($objUser->getTimeLastLogin() ?: "Not available") . "<br />";
        print "<br/>";

        print "First name is " . $objUser2->getFirstName() . "<br />";
        print "Last name is " . $objUser2->getLastName() . "<br />";
        print "Username is " . $objUser2->getUsername() . "<br />";
        print "Password is " . $objUser2->getPassword() . "<br />";
        print "Mail is " . $objUser2->getEmailAddress() . "<br />";
        print "Date account created is " . $objUser2->getDateAccountCreated() . "<br />";
        print "Time account created is " . $objUser2->getTimeAccountCreated() . "<br />";
        print "Date last login is " . ($objUser2->getDateLastLogin() ?: "Not available") . "<br />";
        print "Time last login is " . ($objUser2->getTimeLastLogin() ?: "Not available") . "<br />";
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

        $objUser->Save();
        $objUser2->Save();
        $objUser3->Save();
        
        $objUser->MarkForDeletion();
        unset($objUser);
        //$objUser2->MarkForDeletion();
        //unset($objUser2);
        $objUser3->MarkForDeletion();
        unset($objUser3);
	

       