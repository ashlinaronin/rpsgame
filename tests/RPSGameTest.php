<?php

    require_once "src/RPSGame.php";

    class RPSGameTest extends PHPUnit_Framework_TestCase
    {
        function test_chooseWinner_sameInputs()
        {
            $test_RPSGame = new RPSGame;
            $player1 = "Rock";
            $player2 = "Rock";

            $result = $test_RPSGame->chooseWinner($player1, $player2);

            $this->assertEquals("Draw", $result);
        }
    }

 ?>
