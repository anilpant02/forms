
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>welcome to travel form</title>
</head>
<body>
    <?php
include "connection.php";
include "insert.php";

    ?>
    <img  class="bg" src="bg.jpg" alt="University" srcset="">
    <div class="container">
        <h3>Welcome to Siddanath Science Campus Austerlia trip form</h3> 
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <p class="submit">Thanks for submitting form.</p>
        <form action="/boot_form/project1.php" method="post">
            <input type="text" name="name" id="name" value="name" placeholder="Please your enter your name">
            <input type="text" name="age" id="age" value="age" placeholder="Please your enter your age">
            <input type="text" name="gender" id="gender" value="gender" placeholder="Gender">
            <input type="email" name="email" id="email" value="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" value="phone"  placeholder="Please your enter your phone">
           <textarea name="desc" id="desc" cols="15" rows="7" value="desc" placeholder="Additional information about you...."> </textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
</body>

</html>
    
</body>
</html>