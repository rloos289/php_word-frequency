# _Word Frequency_

#### _Counts how many times a word is in a sentence, 9/16_

#### By _**Ryan Loos**_

## Setup/Installation Requirements

* _Clone this repository to your desktop_
* _Run composer install in Terminal_
* _start a server in web directory (php -S localhost:8000)_

_You must host this webpage locally_

## Behavior Driven Development
* _take a word and strip it of any surrounding punctuation and whitespace, and make it lowercase_
  * _input: Inconceivable! _
  * _output: inconceivable_

* _break a sentence into individual words and run the previous spec on each word_
  * _input: Defeat me? That's inconceivable!_
  * _output: _[defeat, me, that's, inconceivable]_

* _check if the word appears in the sentence_
  * _input: Sentence=[defeat, me, that's, inconceivable] Word = inconceivable_
  * _output: true_
* _print out the number of times the word appears in the sentence_
  * _input: Sentence=[defeat, me, that's, inconceivable, inconceivable, i, say] Word = inconceivable_
  * _output: 2


## Known Bugs

_None yet_

## Support and contact details

_Ryan Loos: Rloos289@gmail.com_

## Technologies Used

_HTML,
PHP,
TWIG 1.0,
SILEX 1.1_

### License

*This webpage is licensed under the GPL license.*

Copyright (c) 2016 **_Ryan Loos_**
