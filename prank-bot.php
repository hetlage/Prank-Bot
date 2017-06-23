<?php

require ("../Prank_Bot/PHPMailer/PHPMailerAutoload.php");


    $phone_number= readline("What is the number?\n");
    $how_many= readline("\nHow many times would you like to sent this message?\n");
    $message= readline("\nWhat would you like to say?\n");
    echo "1 for AT&T\n";
    echo "2 for Boost Mobile\n";
    echo "3 for Cricket Wireless\n";
    echo "4 for Sprint\n";
    echo "5 for Tmobile\n";
    echo "6 for US cellular\n";
    echo "7 for Verizon\n";
    $carrier= readline("\nWho is the carrier?\n");


//https://www.digitaltrends.com/mobile/how-to-send-e-mail-to-sms-text/
    if ($carrier == "1"){    //"AT&T"
        $address = "{$phone_number}@txt.att.net"; 
    }
    else if ($carrier == "2"){ // Boost Mobile
        $address = "{$phone_number}@myboostmobile.com"; 
    }
    else if ($carrier == "3"){ // Cricket
        $address = "{$phone_number}@mms.cricketwireless.net"; 
    }
    else if ($carrier == "4"){ // Sprint
        $address = "{$phone_number}@messaging.sprintpcs.com"; 
    }
    else if ($carrier == "5"){ // TMobile
        $address = "{$phone_number}@tmomail.net"; 
    }
    else if ($carrier == "6"){ // US Cellular
        $address = "{$phone_number}@email.uscc.net"; 
    }   
    else if ($carrier == "7"){ // Verizon
        $address = "{$phone_number}@vtext.com"; 
    }
    else if ($carrier == "8"){ //Virgin Mobile
        $address = "{$phone_number}@vmobl.com"; 
    }

 // instantiate mailer
    $mail = new PHPMailer(); 

    // configure mailer
 
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Password = "//TODO";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 1;
    $mail->SMTPSecure = "tls";
    $mail->Username = "example@gmail.com";

    // set From:
    $mail->SetFrom("example@gmail.com");

    // set body
    $mail->Body = $message;// "Miss you! love, CS50 Bot";

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
