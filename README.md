# 🎉 RandomPasswordGenerator

A simple PHP package for generating random passwords with customizable options. Whether you need a secure password for your application or just want to test your systems, this package has got you covered! 🔐

---

## ✨ Features

- **Generate a single random password** with a specified length.
- **Generate multiple random passwords** at once for bulk usage.
- Options to **include special characters** for added security.
- Customizable length and character set to fit your needs.

---

## 🛠️ Usage

Here’s a simple example of how to use the **RandomPasswordGenerator** package in your PHP application:

```php
require_once 'vendor/autoload.php';

use RandomPasswordGenerator\RandomPasswordGenerator;

// Create an instance of the password generator
$passwordGenerator = new RandomPasswordGenerator(12, true); // 12 characters with special chars

// Generate a single password
echo "Generated Password: " . $passwordGenerator->generatePassword() . "\n";

// Generate multiple passwords
$passwords = $passwordGenerator->generateMultiplePasswords(5);
echo "Generated Passwords: \n";
print_r($passwords);
```

## 📝 Configuration Options

You can customize the password generation by providing different parameters:

- **Length**: Specify the length of the password (e.g., 8, 12, 16).
- **Special Characters**: Set to `true` or `false` to include or exclude special characters.

## 📦 Contributing

Contributions are welcome! If you have suggestions for improvements or features, please fork the repository and submit a pull request. Make sure to follow the code style and write tests for your changes.

1. Fork the project.
2. Create your feature branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Open a pull request.
