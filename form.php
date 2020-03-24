
  <?php

  if($_POST["name"]){
    $name = $_POST["name"];
  }else {
    echo "Please enter your name";
    exit;
  }

  if($_POST["subject"]){
    $subject = $_POST["subject"];
  }else {
    echo "Please select query type";
    exit;
  }

  if($_POST["message"]){
    $message = $_POST["message"];
  }else{
    echo "Please enter message";
    exit;
  }

  if ($_POST["sender"]){
    $sender = $_POST["sender"];
  }else {
    echo "Please enter your e-Mail";
    exit;
  }

  if($_POST["Submit"]){
    if(mail("inboxcj@gmail.com",$subject,"Name: $name\nMessage:$message", $sender)){
      echo "Thank you for Contacting Us, We will get back to you as soon as we can.";
    }else{
      echo "Sorry, there was an error while sending your query. Please try again.";
    }
  }else{
    echo "Error";
  }

  ?>
