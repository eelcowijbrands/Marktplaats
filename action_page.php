<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>action_page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form>
        Email: <?php echo $_POST["email"]; ?><br><br>
        Password: <?php echo $_POST["psw"]; ?><br><br>
        Password repeat: <?php echo $_POST["psw-repeat"]; ?><br><br>
    </form>
</body>
</html>