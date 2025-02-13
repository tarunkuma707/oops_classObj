<?php
///////// Interface //////////
interface Aadhar{
    function verifyAadhar();
}

interface PanCard{
    function verifyPanCard();
}

class DrivingClass implements Aadhar, PanCard{
    function verifyAadhar(){
        //////////// Write your own logic ////////
        echo "Verify Aadhar";
    }
    function verifyPanCard(){
        //////////// Write your own logic ////////
        echo "Verify Pan Card";
    }

    function register(){
        //////////// Write your own logic ////////
        echo "Register for Driving Licence";
    }
}
$obj = new DrivingClass();
$obj->verifyAadhar();
$obj->verifyPanCard();

class BankAccount implements Aadhar, PanCard{
    function verifyAadhar(){
        //////////// Write your own logic ////////
        echo "Verify Aadhar";
    }
    function verifyPanCard(){
        //////////// Write your own logic ////////
        echo "Verify Pan Card";
    }

    function openAccount(){
        //////////// Write your own logic ////////
        echo "Open Account in Bank";
    }
}
$obj2 = new BankAccount();
$obj2->verifyAadhar();
$obj2->verifyPanCard();
$obj2->openAccount();
?>