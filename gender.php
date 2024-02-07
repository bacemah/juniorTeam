<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Gender</title>
</head>
<body>

    <h1>Select Gender</h1>

    <form action="shop.php" method="post">
        <label for="male">
            <input type="radio" name="gender" id="male" value="male">
            <img src="images/man.avif" alt="Male" >
        </label>
        <label for="female">
            <input type="radio" name="gender" id="female" value="female" height="500px" width="auto">
            <img src="images/female.jpg" alt="Female">
        </label>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
