<?php

class Config
{
    private $values = [];

    public function getValues() {
        return $this->values;
    }
}

$config = new Config();

$config->getValues()['test'] = 'test';

echo $config->getValues()['test'];