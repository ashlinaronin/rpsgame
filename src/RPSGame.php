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
                elseif ($player1 == "Scissors" && $player2 == "Paper")
                {
                    return "Player 1";
                }
                elseif ($player1 == "Paper" && $player2 == "Rock")
                {
                    return "Player 1";
                }
                elseif ($player1 == "Scissors" && $player2 == "Rock")
                {
                    return "Player 1";
                }
                elseif ($player1 == "Rock" && $player2 == "Scissors")
                {
                    return "Player 1";
                }
                elseif ($player1 == "Paper" && $player2 == "Scissors")
                {
                    return "Player 2";
                }
            }
        }
 ?>
