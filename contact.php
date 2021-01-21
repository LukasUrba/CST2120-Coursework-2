<?php
    include('common.php');
    headData('Contact Page');
    webHeader('Contact');

if (isset($_POST{'submit'})){
  $name = $_POST['name'];
  $subject = $_POST['subject']; 
  $mailFrom = $_POST['mail']; 
  $message = $_POST['message'];  
  
  $mailTo = "blahblahblah@blah.com";
  $headers = "From: ". $mailFrom;
  $txt = "New email from  ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsend");
}

?>

<body>

 <main>
    <p>Send Email</p>
    <form class="contact-form" action="Contact Information.php" method="post">
    <input type="text" name="name"placeholder="Full Name">
    <input type="text" name="mail"placeholder="Your Email">
    <input type="text" name="subject"placeholder="Subject matter">
    <textarea name="message" placeholder="Message"></textarea>
    <button type="submit" name="submit">Send form</button>
 </main>

<?php 
    webFooter();
?>