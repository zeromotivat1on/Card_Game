<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

    <link rel="stylesheet" href="styles/main_objs.css">
    <link rel="stylesheet" href="styles/style.css">

</head>

<body>
    
    <form id='log_form' class="loggedin_form" method="post">

        <span class="welcome">Welcome home, {username}!</span>
        <img class="user_image" src='{imgurl}'>

        <div class="buttons">
    
            <input class="battle_button button" name="battle_button" type="submit" value="Battle!"></input>
            <input class="cards_button button" name="cards_button" type="submit" value="View cards"></input>
            <input class="signout_button button" name="signout_button" type="submit" value="Sign out"></input>

        </div>
    
    </form>

</body>

</html>
