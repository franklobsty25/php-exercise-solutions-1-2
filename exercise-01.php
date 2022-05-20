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
 * Assigning the values to new array
 */
$arr = $config->getValues();

/**
 * Adding element to the array
 */
$arr['second'] = 'mongo';

echo $config->getValues()['first'] . PHP_EOL;

echo $arr['second'] . PHP_EOL;
/**
 * The values variable is private accessor. So it cannot be access outside of the class.
 */
echo $config->getValues()['third'] . PHP_EOL;