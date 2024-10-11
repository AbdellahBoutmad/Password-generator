# RandomPasswordGenerator

## Installation

To install the `boutmad/randompassword` package using Composer, follow these steps:

### Step 1: Add the Package to Your Project

Run the following Composer command to install the package in your project:

```bash
composer require boutmad/randompassword:dev-main
```

**Note**: If you encounter issues with stability, make sure your `composer.json` allows for `dev` versions by adding this to your `composer.json`:

```json
{
    "minimum-stability": "dev",
    "prefer-stable": true
}
```

### Step 2: Autoload the Package

Once the package is installed, Composer will automatically update the autoloader. To ensure the package is properly loaded, include Composer's autoload file at the top of your PHP scripts:

```php
require 'vendor/autoload.php';
```

### Step 3: Using the RandomPasswordGenerator

You can now use the `RandomPasswordGenerator` class to generate passwords in your project.

### Example Usage:

```php
<?php

require 'vendor/autoload.php';

use Boutmad\RandomPassword\RandomPasswordGenerator;

// Create a new instance of the RandomPasswordGenerator
$passwordGenerator = new RandomPasswordGenerator(16, true); // 16 characters, with special characters

// Generate a single password
$password = $passwordGenerator->generatePassword();
echo "Generated Password: " . $password . PHP_EOL;

// Generate multiple passwords
$multiplePasswords = $passwordGenerator->generateMultiplePasswords(5);
foreach ($multiplePasswords as $index => $pwd) {
    echo "Password " . ($index + 1) . ": " . $pwd . PHP_EOL;
}
```

### Customizing the Password Generation

**Password Length**: You can specify the password length when creating a `RandomPasswordGenerator` object. If not specified, it defaults to 12 characters.

```php
$passwordGenerator = new RandomPasswordGenerator(16); // 16 characters
```

**Special Characters**: By default, special characters are included in the generated password. You can disable this by passing false to the second parameter.

```php
$passwordGenerator = new RandomPasswordGenerator(16, false); // 16 characters, no special characters
```
