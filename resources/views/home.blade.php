<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email form</title>
</head>
<body>

<form action="/home/email" method="post">

    @csrf
    <label for="email">Email</label>
    <br>
    <input type="email" name="email" id="email">
    <br>
    <label for="subject">Subject</label>
    <br>
    <input name="subject" id="subject" type="text">
    <br>
    <label for="message">Message</label>
    <br>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <br>
    <input type="submit">

</form>


</body>
</html>
