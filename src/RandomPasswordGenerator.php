<?php

namespace RandomPasswordGenerator;

class RandomPasswordGenerator
{
    private $length;
    private $useSpecialChars;

    public function __construct($length = 12, $useSpecialChars = true)
    {
        $this->length = $length;
        $this->useSpecialChars = $useSpecialChars;
    }

    public function generatePassword()
    {
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $specialChars = '!@#$%^&*()_+[]{}|;:,.<>?';

        $characters = $lowercase . $uppercase . $numbers;
        if ($this->useSpecialChars) {
            $characters .= $specialChars;
        }

        $password = '';
        $charactersLength = strlen($characters); 
        
        for ($i = 0; $i < $this->length; $i++) {
            $password .= $characters[random_int(0, $charactersLength - 1)];
        }
        
        return $password;
        
    }

    public function generateMultiplePasswords($count)
    {
        $passwords = [];
        for ($i = 0; $i < $count; $i++) {
            $passwords[] = $this->generatePassword();
        }
        return $passwords;
    }
}
