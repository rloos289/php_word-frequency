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
            return false;
        }
    }

?>
