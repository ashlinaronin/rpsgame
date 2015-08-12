<?php
    class RPSGame
        {
            function chooseWinner($player1, $player2)
            {
                if ($player1 == $player2)
                {
                    return "Draw";
                }
                elseif ($player1 == "Rock" && $player2 == "Paper")
                {
                    return "Player 2";
                }
                
            }
        }

 ?>
