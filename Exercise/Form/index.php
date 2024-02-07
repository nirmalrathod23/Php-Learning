<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
</head>
<body>
    <h1 style="text-align:center;" >Contact Form</h1>
    <form  style="text-align:center;" action="form.php" method="post">
                <div class="form-group">
                    <label for="name">Your Name</label> <br>
                <input type="text" name="name" placeholder="Enter Your name.."><br>
                <label for="lname">Email</label> <br>
                <input type="email" name="email" placeholder="Enter Your email.."> <br>
                <label for="mobile">Mobile</label> <br>
                <input type="mobile" name="mobile" placeholder="Enter Your Mobile.."><br>
                <label for="message">Message</label><br>
                <textarea name="message" placeholder="Write something.." style="height:200px"></textarea><br>
                <input type="submit" class="btn" value="Submit">
            </form>
</body>
</html>