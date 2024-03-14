<?php
session_start();
//print_r($_SESSION);
echo $_SESSION['user_email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="candidatedetails.css">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
 
</head>
<body>
    <div class="container">
        <form id="contact" action="candidatedetails.php" method="post">
            <h1>Candidate Details</h1>
            <h3></h3>
            <div class="row">
                <!-- first column -->
                <div class="column">  
                   <!-- <fieldset> 
                        Job ID
                           <input type="text" placeholder="jobid" name="jobid" required autofocus>
                       </fieldset>--> 
                    <fieldset> 
                        <input type="hidden" value="<?php echo $_GET['id']; ?>" name="JobID">
                        Full Name:
                           <input type="text" placeholder="Full Name *" name="FullName" required autofocus>
                       </fieldset>       
                       <fieldset> 
                        Email:
                           <input type="email"  name="email" readonly value="<?php echo $_SESSION['user_email']; ?>">
                       </fieldset>               
                       <fieldset>
                        Address:
                        <textarea cols="37" rows="5" value="address" name="address" required autofocus>  
                        </textarea>  
                        </fieldset>
                </div>
                <!-- second column -->
                <div class="column">
                    <fieldset> 
                        Contact Number:
                           <input type="text" placeholder="Contact no. *" name="ContactNo" required autofocus>
                       </fieldset>
                       <fieldset> 
                        Date of Birth
                           <input type="date" placeholder="DOB*" name="dateofbirth" required autofocus>
                       </fieldset>
                       
                          <fieldset>
                         <p>Upload Your Resume</p>
                        <input type="file" id="file" name="file" required>
                    </fieldset>
                </div>
            </div>
            <!-- submit button -->
            <fieldset>
                <button type="submit" name="submit" id="button">Submit Now</button>
            </fieldset>
        </form>
    </div>
 
 
    <!-- Javascript to initialize the code list -->
    <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
     separateDialCode: true
     });
  </script>
</body>
</html>