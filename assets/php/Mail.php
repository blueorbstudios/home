<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['Email']))  {
  
  //Email information
  $admin_email = "blueorbstudiosuk@gmail.com";
  $email = $_REQUEST['Email'];
  $name = $_REQUEST['Name'];
  $message = $_REQUEST['Message'];
  
  //send email
  mail($admin_email, "$subject", $message, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>

 <form method="post">
  Email: <input name="email" type="text" /><br />
  Subject: <input name="subject" type="text" /><br />
  Message:<br />
  <textarea name="comment" rows="15" cols="40"></textarea><br />
  <input type="submit" value="Submit" />
  </form>
  
<?php
  }
?>