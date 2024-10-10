<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: "Arial";
        }
        input {
            font-size: 1.5cm;
            height: 50px;
            width: 200px;
        }
    </style>
</head>
<body>
    <h3>Welcome to the student management system. input your details here to register</h3>
    <form action="core/handleforms.php" method="POST"></form>
        <p><label for="userID">firstname</label> <input type="text" name="userID"></p>
        <p><label for="user_name">Username</label> <input type="text" name="user_name"></p>
        <p><label for="First_name">Firstname</label> <input type="text" name="First_name"></p>
        <p><label for="Last_name">Lastname</label> <input type="text" name="Last_name"></p>
        <p><label for="profession">profession</label> <input type="text" name="profession"></p>
        <p><label for="degree">degree</label> <input type="text" name="degree"></p>
        <p><label for="statusinLife">statusinLife</label> <input type="text" name="statusinLife"></p>
        <p><label for="experience">experience</label> <input type="text" name="experience"></p>
        <p><label for="age">age</label> <input type="text" name="age"></p>
            <input type="SUBMIT" name="Insertnewstdntbtn" >
        </p>
    </form> 
</html>