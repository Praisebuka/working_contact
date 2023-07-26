
        <?Php 
        //creating the variables for the contact
if (isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    //needed details (For the location of my prey's details), also making it more readable for me
    $myMail = "Praisebuka@poton.me";
    $header = "From: " . $email;
    $message2 = "Here is a new message from " . $name . " with the email of ". $email . ".\n\n" . $message;
    
    //Writing the functions for where the above details should go
    //such as.....The email am sending to
    //............The subject
    //............The message
    mail($myMail, $subject, $message2);
    header("Location: index.html?Successful");
}
     
