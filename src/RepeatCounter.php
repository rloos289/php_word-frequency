<?php
    class RepeatCounter
    {
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

        function countRepeats($sentence, $word)
        {
            $word = $this->wordSimplify($word);
            $sentence = $this->sentenceSimplify($sentence);
            $searchArray = array_count_values($sentence);
            $finalcount = $searchArray[$word];
            return $finalcount;
        }
    }

?>
