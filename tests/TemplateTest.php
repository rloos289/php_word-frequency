<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase

    {
        function test_word_remove_punctuation_and_whitespace()
        {
            $test_wordremove = new RepeatCounter;
            $input = 'Inconceivable! ';

            $result = $test_wordremove->wordSimplify($input);

            $this->assertEquals('inconceivable', $result);
        }
        function test_make_array()
        {
            $test_makeArray = new RepeatCounter;
            $input = "Defeat me? That's inconceivable!";

            $result = $test_makeArray->sentenceSimplify($input);

            $this->assertEquals(["defeat", "me", "that's", "inconceivable"], $result);
        }
        function test_word_frequency()
        {
            $test_wordFrequency = new RepeatCounter;
            $sentence = "Defeat me that's inconceivable. Inconceivable I say!";
            $word = "Inconceivable!";

            $result = $test_wordFrequency->countRepeats($sentence, $word);

            $this->assertEquals(2, $result);
        }
    }

 ?>
