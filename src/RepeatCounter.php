<?php
    class RepeatCounter
    {
        private $match_number;

        function __construct($matches)
        {
            $this->match_number = 0;
        }

        function addMatch()
        {
            $this->match_number += 1;
        }

        function getMatch()
        {
            return $this->match_number;
        }

        function wordSimplify($word)
        {
            $word = trim($word, " !,.?@#$%^&*():;'/\"[]{}");
            return strtolower($word);
        }

        function sentenceSimplify($sentence)
        {
            $simplifiedArray = array();
            $sentenceArray = explode(" ",$sentence);
            for ($i=0; $i <= (count($sentenceArray) - 1); $i++)
              {
                $simpleWord = $this->wordSimplify($sentenceArray[$i]);
                array_push($simplifiedArray, $simpleWord);
              }
            return $simplifiedArray;
        }

        function wordSearch($sentenceArray, $word)
        {
            return array_search($word, $sentenceArray);
        }

        function wordFrequency($sentence, $word)
        {
            $word = $this->wordSimplify($word);
            $sentence = $this->sentenceSimplify($sentence);
            $searchArray = array_count_values($sentence);
            $finalcount = $searchArray[$word];
            return $finalcount;
        }
    }

?>
