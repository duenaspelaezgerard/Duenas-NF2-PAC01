<?php

        require("class.customer.php");

        $cliente = new Customer();
        $cliente->setCustCode("ES001");
        $cliente->setCustName("Juan García");
        $cliente->setCustCity("Madrid");
        $cliente->setGrade("A");
        $cliente->setOpeningAmt(1000);
        $cliente->setReceiveAmt(500);
        $cliente->setPaymentAmt(200);
        $cliente->setOutstandingAmt(300);
        $cliente->setPhoneNo("123456789");
        $cliente->setAgentCode("AG001");
        
        $cliente2 = new Customer();
        $cliente2->setCustCode("ES002");
        $cliente2->setCustName("María Rodríguez");
        $cliente2->setCustCity("Barcelona");
        $cliente2->setGrade("B");
        $cliente2->setOpeningAmt(1500);
        $cliente2->setReceiveAmt(600);
        $cliente2->setPaymentAmt(400);
        $cliente2->setOutstandingAmt(200);
        $cliente2->setPhoneNo("987654321");
        $cliente2->setAgentCode("AG002");

        echo "Código de cliente: " . $cliente->getCustCode() . "<br/>";
        echo "Nombre de cliente: " . $cliente->getCustName() . "<br/>";
        echo "Ciudad de cliente: " . $cliente->getCustCity() . "<br/>";
        echo "Grado: " . $cliente->getGrade() . "<br/>";
        echo "Monto de apertura: " . $cliente->getOpeningAmt() . "<br/>";
        echo "Monto recibido: " . $cliente->getReceiveAmt() . "<br/>";
        echo "Monto pagado: " . $cliente->getPaymentAmt() . "<br/>";
        echo "Monto pendiente: " . $cliente->getOutstandingAmt() . "<br/>";
        echo "Teléfono: " . $cliente->getPhoneNo() . "<br/>";
        echo "Código de agente: " . $cliente->getAgentCode() . "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "Código de cliente: " . $cliente2->getCustCode() . "<br/>";
        echo "Nombre de cliente: " . $cliente2->getCustName() . "<br/>";
        echo "Ciudad de cliente: " . $cliente2->getCustCity() . "<br/>";
        echo "Grado: " . $cliente2->getGrade() . "<br/>";
        echo "Monto de apertura: " . $cliente2->getOpeningAmt() . "<br/>";
        echo "Monto recibido: " . $cliente2->getReceiveAmt() . "<br/>";
        echo "Monto pagado: " . $cliente2->getPaymentAmt() . "<br/>";
        echo "Monto pendiente: " . $cliente2->getOutstandingAmt() . "<br/>";
        echo "Teléfono: " . $cliente2->getPhoneNo() . "<br/>";
        echo "Código de agente: " . $cliente2->getAgentCode() . "<br/>";




        $tempCustCode = $cliente->getCustCode();
        $tempCustName = $cliente->getCustName();
        $tempCustCity = $cliente->getCustCity();
        $tempGrade = $cliente->getGrade();
        $tempOpeningAmt = $cliente->getOpeningAmt();
        $tempReceiveAmt = $cliente->getReceiveAmt();
        $tempPaymentAmt = $cliente->getPaymentAmt();
        $tempOutstandingAmt = $cliente->getOutstandingAmt();
        $tempPhoneNo = $cliente->getPhoneNo();
        $tempAgentCode = $cliente->getAgentCode();

        $cliente->setCustCode($cliente2->getCustCode());
        $cliente->setCustName($cliente2->getCustName());
        $cliente->setCustCity($cliente2->getCustCity());
        $cliente->setGrade($cliente2->getGrade());
        $cliente->setOpeningAmt($cliente2->getOpeningAmt());
        $cliente->setReceiveAmt($cliente2->getReceiveAmt());
        $cliente->setPaymentAmt($cliente2->getPaymentAmt());
        $cliente->setOutstandingAmt($cliente2->getOutstandingAmt());
        $cliente->setPhoneNo($cliente2->getPhoneNo());
        $cliente->setAgentCode($cliente2->getAgentCode());


        $cliente2->setCustCode($tempCustCode);
        $cliente2->setCustName($tempCustName);
        $cliente2->setCustCity($tempCustCity);
        $cliente2->setGrade($tempGrade);
        $cliente2->setOpeningAmt($tempOpeningAmt);
        $cliente2->setReceiveAmt($tempReceiveAmt);
        $cliente2->setPaymentAmt($tempPaymentAmt);
        $cliente2->setOutstandingAmt($tempOutstandingAmt);
        $cliente2->setPhoneNo($tempPhoneNo);
        $cliente2->setAgentCode($tempAgentCode);


        echo "<br/>";
        echo "<br/>";

        echo "Datos actualizados del primer cliente:<br/>";
        echo "Código de cliente: " . $cliente->getCustCode() . "<br/>";
        echo "Nombre de cliente: " . $cliente->getCustName() . "<br/>";
        echo "Ciudad de cliente: " . $cliente->getCustCity() . "<br/>";
        echo "Grado: " . $cliente->getGrade() . "<br/>";
        echo "Monto de apertura: " . $cliente->getOpeningAmt() . "<br/>";
        echo "Monto recibido: " . $cliente->getReceiveAmt() . "<br/>";
        echo "Monto pagado: " . $cliente->getPaymentAmt() . "<br/>";
        echo "Monto pendiente: " . $cliente->getOutstandingAmt() . "<br/>";
        echo "Teléfono: " . $cliente->getPhoneNo() . "<br/>";
        echo "Código de agente: " . $cliente->getAgentCode() . "<br/>";

        echo "<br/>";
        echo "<br/>";
        echo "Datos actualizados del segundo cliente:<br/>";
        echo "Código de cliente: " . $cliente2->getCustCode() . "<br/>";
        echo "Nombre de cliente: " . $cliente2->getCustName() . "<br/>";
        echo "Ciudad de cliente: " . $cliente2->getCustCity() . "<br/>";
        echo "Grado: " . $cliente2->getGrade() . "<br/>";
        echo "Monto de apertura: " . $cliente2->getOpeningAmt() . "<br/>";
        echo "Monto recibido: " . $cliente2->getReceiveAmt() . "<br/>";
        echo "Monto pagado: " . $cliente2->getPaymentAmt() . "<br/>";
        echo "Monto pendiente: " . $cliente2->getOutstandingAmt() . "<br/>";
        echo "Teléfono: " . $cliente2->getPhoneNo() . "<br/>";
        echo "Código de agente: " . $cliente2->getAgentCode() . "<br/>";



?>
