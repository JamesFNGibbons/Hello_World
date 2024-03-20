<?php

<?php

/*
  GGGGG   IIIIII  BBBBBB   BBBBBB  OOOOO   NN   NN  SSSSS   
 GG   GG    II    BB   BB  BB   BB OO   OO  NNN  NN SS       
GG         II    BB   BB  BB   BB OO   OO  NN N NN  SSSSS   
GG   GGG   II    BBBBBB   BBBBBB  OO   OO  NN  NNN      SS  
 GG   GG   II    BB   BB  BB   BB OO   OO  NN   NN SS   SS  
  GGGGG   IIIIII  BBBBBB   BBBBBB  OOOOO   NN   NN  SSSSS   

  Welcome to the most dumb PHP script you have ever seen.
  It just prints Hello World.. Thats it... 149 lines to
  print Hello World....

  I have included some comments for you to enjoy... some of them
  have been censored though. No bad langauge on this GitHub page.

  If you can understand this, then please reach out to us at my
  company, https://121digital.co.uk... We are always looking for
  good PHP developers..

  Author:  James Gibbons <jgibbons@121digital.co.uk>
  Date: March 19, 2024
*/

// Define an abstract class for letters
abstract class Letter {
    // Define properties to store the letter, its ASCII value, and a random number
    protected $letter;
    protected $asciiValue;
    protected $randomNumber;

    // Constructor to set the letter, its ASCII value, and generate a random number
    public function __construct($letter) {
        $this->letter = $letter;
        $this->asciiValue = ord($letter);
        $this->randomNumber = mt_rand(1, 100);
    }

    // Abstract method to print the letter
    abstract public function print();

    // Method to get the letter
    public function getLetter() {
        return $this->letter;
    }

    // Method to get the ASCII value
    public function getAsciiValue() {
        return $this->asciiValue;
    }

    // Method to get the random number
    public function getRandomNumber() {
        return $this->randomNumber;
    }

    // Method to add complexity by performing unnecessary calculations based on ASCII value and random number
    protected function addComplexity() {
        // Perform some unnecessary calculations based on ASCII value and random number to add complexity
        $result = 0;
        for ($i = 0; $i < $this->asciiValue * $this->randomNumber; $i++) {
            $result += $i * $this->asciiValue;
        }
    }
}

// Define classes for each letter, each with its own API endpoint
class H extends Letter {
    public function print() {
        echo $this->getLetter();
        $this->addComplexity();
    }
}

class E extends Letter {
    public function print() {
        echo $this->getLetter();
        $this->addComplexity();
    }
}

class L1 extends Letter {
    public function print() {
        echo $this->getLetter();
        $this->addComplexity();
    }
}

class L2 extends Letter {
    public function print() {
        echo $this->getLetter();
        $this->addComplexity();
    }
}

class O extends Letter {
    public function print() {
        echo $this->getLetter();
        $this->addComplexity();
    }
}

class W extends Letter {
    public function print() {
        echo $this->getLetter();
        $this->addComplexity();
    }
}

class R extends Letter {
    public function print() {
        echo $this->getLetter();
        $this->addComplexity();
    }
}

class D extends Letter {
    public function print() {
        echo $this->getLetter();
        $this->addComplexity();
    }
}

// Define a class to manage printing "Hello World"
class HelloWorldPrinter {
    // Define method to print each letter by calling its API endpoint
    public function printHelloWorld() {
        // Call the API for each letter
        $this->callLetterAPI('H');
        $this->callLetterAPI('E');
        $this->callLetterAPI('L1');
        $this->callLetterAPI('L2');
        $this->callLetterAPI('O');
        echo ' ';
        $this->callLetterAPI('W');
        $this->callLetterAPI('O');
        $this->callLetterAPI('R');
        $this->callLetterAPI('L1');
        $this->callLetterAPI('D');
    }

    // Method to call the API for a specific letter
    private function callLetterAPI($letter) {
        // Simulate calling the API by instantiating the letter class and printing it
        $letterInstance = new $letter($letter);
        $letterInstance->print();
    }
}

// Instantiate the printer class
$helloWorldPrinter = new HelloWorldPrinter();

// Print "Hello World" using the complex API-based architecture
$helloWorldPrinter->printHelloWorld();
