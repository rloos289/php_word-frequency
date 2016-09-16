<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase

    //run test in terminal: ./vendor/bin/phpunit tests

    //on Mac: run: export PATH=$PATH:./vendor/bin
    //then run phpunit tests
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
        function test_word_appearance_true()
        {
            $test_wordAppearance = new RepeatCounter;
            $sentence = ["defeat", "me", "that's", "inconceivable"];
            $word = "inconceivable";

            $result = $test_wordAppearance->wordSearch($sentence, $word);

            $this->assertEquals(true, $result);
        }
        function test_word_appearance_false()
        {
            $test_wordAppearance = new RepeatCounter;
            $sentence = ["defeat", "me", "that's", "ridiculous"];
            $word = "inconceivable";

            $result = $test_wordAppearance->wordSearch($sentence, $word);

            $this->assertEquals(false, $result);
        }
    }
      // Testcode example
      //  function test_makeTitleCase_oneWord()
      //  {
      //      //Arrange
      //      $test_TitleCaseGenerator = new Template;
      //      $input = "beowulf";
       //
      //      //Act
      //      $result = $test_TitleCaseGenerator->testTemplate($input);
       //
      //      //Assert
      //      $this->assertEquals("Beowulf", $result);
      //  }

        //TEST FOR LOOPING THROUGH MULTIPLE INPUTS
    //   function test_numword_ones()
    // {
    //     $test_NumWord_Ones = new Numword;
    //     $input_array = ['0','1', '2', '3', '4', '5', '6', '7', '8', '9'];
    //     $expected_results = ['','One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
    //     $result_array = array();
    //
    //     foreach ($input_array as $input)
    //     {
    //       array_push($result_array, $test_NumWord_Ones->process_thru_nineteen($input));
    //     }
    //     $this->assertEquals($expected_results, $result_array);
    // }

 ?>
