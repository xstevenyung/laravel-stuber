# Laravel Stuber

This will allow you to override the default Laravel stubs.

### Prerequisites

This package will require Laravel 5.5 and higher.

## Getting Started

Install the package (only the dev version is available for now):
```
composer require --dev stvnyung/laravel-stuber "dev-master"
```

Create any stub files that you want to override (a job for example):
```
php artisan make:stub job
```

Repeat for all the stubs you will want to override.

You can list all the stubs you can override with
```
php artisan stub:list
```

## Running the tests

Run the tests with:
```
./vendor/bin/phpunit
```

### Coding style tests

All the coding style tests will be run with StyleCI.

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags).

## Authors

* **Steven Yung** - *Initial work* - [stvnyung](https://github.com/stvnyung)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
