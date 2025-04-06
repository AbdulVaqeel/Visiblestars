<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
ini_set('display_errors', 1);
error_reporting(E_ERROR);
require 'global.php';
require 'dbconn.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//Create a new PHPMailer instance
$mail = new PHPMailer(true);

//Tell PHPMailer to use SMTP
$mail->isSMTP();
// EDIT THE 2 LINES BELOW AS REQUIRED
//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_OFF;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
//if your network does not support SMTP over IPv6,
//though this may cause issues with TLS

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption mechanism to use - STARTTLS or SMTPS
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = $adminEmail;

//Password to use for SMTP authentication
$mail->Password = $adminPassword;

//Set who the message is to be sent from
$mail->setFrom($adminEmail, $adminUsername );

//Set an alternative reply-to address
$mail->addReplyTo($adminEmail, $adminUsername);

//Set an CC address
$mail->AddCC($ccEmail);

if (
    !!isset($_POST['contactus_e_name']) &&
    !!isset($_POST['contactus_e_mail']) &&
    !!isset($_POST['contactus_e_mobile']) &&
    strlen($_POST['contactus_e_mail']) > 0
) {
    $name = $_POST['contactus_e_name']; // required
    $email = $_POST['contactus_e_mail']; // required
    $phone = (!!isset($_POST['contactus_e_code']) ? $_POST['contactus_e_code'] : '+966' ).$_POST['contactus_e_mobile'];
    $description = !isset($_POST['contactus_e_description']) ? '': $_POST['contactus_e_description'];
    $ip = getUserIpAddr();
    
    $result = mysqli_query($link, "INSERT INTO contactedu(cust_name, email, phone, comments, ipaddr)
    VALUES ('$name', '$email', '$phone', '$description', '$ip');");

    //Set who the message is to be sent to
    $mail->addAddress($email, $name);

    $email_message .= 'Hi '.$name.',<br>';

    //Set the subject line
    $mail->Subject = 'Visible Stars Training Institute - Inquiry - '.$name.' '.$lname;

    $email_message .= '<br>Thanks for reaching to us.<br>';

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->Body = $email_message;

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //send the message, check for errors

    try 
    {
        $mail->Send();
        echo "Email Sent,";
        if ($result) {
            echo "Successfully saved information";
            header("Location: ". $base_url ."enquiry-success");
            exit();
        }
        else{
            echo "ERROR: Could not able to execute ". mysqli_error($link);;
        }
    } 
    catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
        header("Location: ". $base_url ."enquiry-success");
        exit();
    } 
    catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
        header("Location: ". $base_url ."enquiry-success");
        exit();
    }
}
//validation expected data exists
else if(
    !!isset($_POST['e_mail']) &&
    !!isset($_POST['e_mobile']) &&
    !!isset($_POST['e_name']) &&
    strlen($_POST['e_mail']) > 0
) {

    $name = $_POST['e_name']; // required
    $email = $_POST['e_mail']; // required
    $phone = (!!isset($_POST['e_code']) ? $_POST['e_code'] : '+966' ).$_POST['e_mobile'];
    
    $course = !isset($_POST['e_coursename']) ? '': $_POST['e_coursename'];
    $ip = getUserIpAddr();
    
    $result = mysqli_query($link, "INSERT INTO course(cust_name, email, phone, course, ipaddr)
    VALUES ('$name', '$email', '$phone', '$course', '$ip');");

    //Set who the message is to be sent to
    $mail->addAddress($email, $name);

    $email_message .= 'Hi '.$name.',<br>';
    
    //Set the subject line
    $mail->Subject = 'Visible Stars Training Institute- Course Information Request - '.$name.' '.$lname;

    $email_message .= '<br>Thanks for reaching to us.<br>';

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->Body = $email_message;

    //Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';

    //send the message, check for errors

    try 
    {
        $mail->Send();
        echo "Email Sent,";
        if ($result) {
            echo "Successfully saved information";
            header("Location: ". $base_url ."enquiry-success");
            exit();
        }
        else{
            echo "ERROR: Could not able to execute ". mysqli_error($link);;
        }
    } 
    catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
        header("Location: ". $base_url ."enquiry-success");
        exit();
    } 
    catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
        header("Location: ". $base_url ."enquiry-success");
        exit();
    }
}
else
{
    echo "no values";
    header("Location:". $base_url);
    exit();
}

?>