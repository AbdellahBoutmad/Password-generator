<?php

require_once '../vendor/autoload.php'; 

use RandomPasswordGenerator\RandomPasswordGenerator;

$passwordGenerator = new RandomPasswordGenerator(12, true); // 12 characters with special chars

// Generate one password
echo "Generated Password: " . $passwordGenerator->generatePassword() . "\n";

// Generate multiple passwords
$passwords = $passwordGenerator->generateMultiplePasswords(5);
echo "Generated Passwords: \n";
print_r($passwords);
