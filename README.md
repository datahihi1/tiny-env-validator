# tiny-env-validator

Validation helpers for [tiny-env](https://github.com/datahihi1/tiny-env.git) — simple rules and helpers to validate .env values.

## Installation
```bash
composer require datahihi1/tiny-env-validator:^1.0
```

## Usage (example)
Assuming tiny-env is loaded:
```php
require 'vendor/autoload.php';

// procedural helper
validate_env([
  'APP_ENV'   => 'required|string',
  'DB_PORT'   => 'required|int',
  'APP_DEBUG' => 'bool'
]);

// or using a Validator class (if available)
// $validator = new Datahihi1\TinyEnv\Validator([...rules...]);
// $validator->validate();
```

## Features
- Common validation rules: required, string, int, float, bool, email, in, regex...
- Simple helper wrappers for quick checks
- Designed to integrate with [tiny-env](https://github.com/datahihi1/tiny-env.git)

## Examples
```php
validate_env([
  'VERSION' => 'required|string',
  'DB_PORT' => 'int',
  'APP_DEBUG' => 'bool'
]);
```

## Contributing
PRs welcome. Follow coding style and include tests for new rules.

## License
MIT