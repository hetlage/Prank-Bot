#!/usr/bin/php
<?php

require ("../Prank_Bot/PHPMailer/PHPMailerAutoload.php");


    $contact= readline("What is the number or email?\n");
    $how_many= readline("\nHow many times would you like to sent this message?\n");
    $message= readline("\nWhat would you like to say?\n");
    echo "1 for AT&T\n";
    echo "2 for Boost Mobile\n";
    echo "3 for Cricket Wireless\n";
    echo "4 for Sprint\n";
    echo "5 for Tmobile\n";
    echo "6 for US cellular\n";
    echo "7 for Verizon\n";
    echo "Press any key(s) for email";
    $carrier= readline("\nWho is the carrier?\n");


//https://www.digitaltrends.com/mobile/how-to-send-e-mail-to-sms-text/
    if ($carrier == "1"){    //"AT&T"
        $address = "{$contact}@txt.att.net"; 
        //$addresses[] = $address; 
    }
    else if ($carrier == "2"){ // Boost Mobile
        $address = "{$contact}@myboostmobile.com"; 
    }
    else if ($carrier == "3"){ // Cricket
        $address = "{$contact}@mms.cricketwireless.net"; 
    }
    else if ($carrier == "4"){ // Sprint
        $address = "{$contact}@messaging.sprintpcs.com"; 
    }
    else if ($carrier == "5"){ // TMobile
        $address = "{$contact}@tmomail.net"; 
    }
    else if ($carrier == "6"){ // US Cellular
        $address = "{$contact}@email.uscc.net"; 
    }   
    else if ($carrier == "7"){ // Verizon
        $address = "{$contact}@vtext.com"; 
    }
    else if ($carrier == "8"){ //Virgin Mobile
        $address = "{$contact}@vmobl.com"; 
    }
    else{
        $address = $contact;
    }

    // instantiate mailer
    $mail = new PHPMailer(); 

    // configure mailer
 
    $mail->IsSMTP();
    $mail->Host = "//TODO";
    $mail->Password = "//TODO";
    $mail->Port = 587; //Port number maybe different
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 1;
    $mail->SMTPSecure = "tls";
    $mail->Username = "//TODO";

    // set From:
    $mail->SetFrom("//TODO");

    // set body
    $mail->Body = $message;

    // iterate over email addresses
    for ($i = 0; $i < $how_many; $i++) 
    {
        // add email address to To: field
        $mail->addAddress($address); 
        
        sleep(1);

        // send email
        if ($mail->Send())
        {
            print("Sent text #{$i}.\n");
        }
        else
        {
            print($mail->ErrorInfo);
        }

        // clear To: field
        $mail->ClearAddresses(); 
    }
?>
