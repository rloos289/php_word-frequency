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

        function wordSearch($sentenceArray, $word)
        {
            return array_search($word, $sentenceArray);
        }

        function wordFrequency($sentence, $word)
        {
            $word = $this->wordSimplify($word);
            $sentence = $this->sentenceSimplify($sentence);
            if ($this->wordSearch($sentence, $word)) {
               return true;
            } else {
              return false;
            }

        }
    }

?>
