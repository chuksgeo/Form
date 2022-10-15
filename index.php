<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user_data.php" method="post">
        <label for="firstname">
            Firstname : <input type="text", name="firstname">
        </label><br><br>
        <label for="lastname">
            Lastname : <input type="text", name="lastname">
        </label><br><br>
        <label for="email">
            Email : <input type="email", name="email">
        </label><br><br>
        <label for="dob">
            Date Of Birth : <input type="text", name="dob">
        </label><br><br>
        <label for="gender">
            Gender : <input type="text" name="gender">
        </label><br><br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>