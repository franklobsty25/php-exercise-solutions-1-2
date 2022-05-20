<?php
error_reporting(0);

class Config
{
    
    private $values = [
        'first'     => "apple",
        'third'    => "banana"
    ];

    public function getValues() {
        return $this->values;
    }
}

$config = new Config();

/**
 * The values array cannot be inserted using assignment operator
 */

$config->getValues()['second'] = 'mango';

echo $config->getValues()['first'] . PHP_EOL;

/**
 * The "second" key does not exist in the values array. So can't be called
 */

echo $config->getValues()['second']. PHP_EOL;

/**
 * The values variable is private accessor. So it cannot be access outside of the class.
 */
echo $config->getValues()['third']. PHP_EOL;