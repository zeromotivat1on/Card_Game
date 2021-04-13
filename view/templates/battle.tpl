<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="styles/main_objs.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/battle.css">

</head>

<body>

    <form class="battle_form" method="post">

        <div class="opponent_side">

            <div class="player_info">

                <span class="player_login">{username}</span>
                <img class="battle_user_image" src='{userimgurl}'>

            </div>


            <div class="player_cards">



            </div>

        </div>

        <div class="board">

            <div class="opponent_board">
            

            
            </div>

            <div class="player_board">
            


            </div>

        </div>

        <div class="player_side">

            <div class="player_info">

                <span class="player_login">{username}</span>
                <img class="battle_user_image" src='{userimgurl}'>

            </div>

            <div class="player_cards">



            </div>

        </div>


        <div class="buttons battle_buttons">

            <input class="leave_button battle_button button" name="goto_userinfo_button" type="submit" value="Leave">
            <input class="endturn_button battle_button button" name="endturn_button" type="submit" value="Turn">

        </div>

    </form>

</body>

</html>
