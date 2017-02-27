#README PHP Test and Document

php version: 7.0

This demo builds on the Big Dummy demo to provide the first unit tests as the
basis for a TDD (Test Driven Development) setup. It adds a couple of
preliminary tests to be used by phphunit.

The asset manager 'Composer' manages PSR-4 namespacing in the test files, so
there is no need for 'require' or 'include' statements. It also adds a
phpunit.xml configuration file.

The core application lies within the 'app' directory. It uses no external
libraries, however phpdoc and phpunit are used as standard
development tools.

## To build the application
you will need 'composer', the php dependency manager.
```bash
 git clone git@github.com:paleo9/php-test-and-doc.git
 cd php-test-and-doc
 composer.phar dump-autoload -o
 composer update
```

## To create the documentation
```bash
$ ./vendor/bin/phpdoc -d App/Classes -t Documentation
```
## To run the tests
As we have created the file 'phpunit.xml' which specifies how phpunit should be
run, we just need to do
```bash
$ phpunit
```
