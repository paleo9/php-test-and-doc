#README Small Demo
php version: 7.0

A small php demonstration program. It uses PSR-1,2,3,4 and tries to use very
small methods that 'do one thing well' and are easy to follow.

The core application lies within the 'App' directory. It uses no external
libraries, however libraries such as phpdoc, phpunit are used as standard
development tools.

## To build the application
you will need 'composer', the php dependency manager.
```bash
 git clone git@github.com:paleo9/small-demo.git
 cd small-demo
 composer.phar dump-autoload -o
 composer update
```

## To create the documentation
```bash
 ./vendor/bin/phpdoc -d App/Classes -t Documentation
```
## To run the tests
```bash
phpunit --bootstrap App/Classes/* tests --color=always
