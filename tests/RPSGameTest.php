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

        function test_chooseWinner_rockPaper()
        {
            $test_RPSGame = new RPSGame;
            $player1 = "Rock";
            $player2 = "Paper";

            $result = $test_RPSGame->chooseWinner($player1, $player2);

            $this->assertEquals("Player 2", $result);
        }

        function test_chooseWinner_paperScissors()
        {
            $test_RPSGame = new RPSGame;
            $player1 = "Scissors";
            $player2 = "Paper";

            $result = $test_RPSGame->chooseWinner($player1, $player2);

            $this->assertEquals("Player 1", $result);
        }
    }

 ?>
