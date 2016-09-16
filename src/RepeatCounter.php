<?php
    class RepeatCounter
    {
        function wordSimplify($word)
        {
            $word = trim($word, " !,.?@#$%^&*():;'/\"[]{}");
            return strtolower($word);
        }
    }
?>
