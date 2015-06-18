A blog! It has user authentification, password renewal, passoword forget, users can post, only certain users can edit, and a few more standard blog-like features! Unfortunately I did not have time to write unit tests in the 24 hours, but I'll add them afterward!
  
And I used the pre-generated version of IDE helper (https://github.com/barryvdh/laravel-ide-helper) to help with auto-complete

To make the site look nice, I useed Twitter Bootstrap V3.3.5 and jQuery V1.2.1
 
I used the excellent gitignore.io to generate my .gitignore file

I also used composer to manage all of my dependencies


 I Laravel 5 (V 5.1) includes the following libraries for me:
 
classpreloader/classpreloader         1.4.0  Helps class loading performance by generating a single PHP file containing all of the autoloaded files for a specific use case
danielstjules/stringy                 1.9.0  A string manipulation library with multibyte support
dnoegel/php-xdg-base-dir              0.1    implementation of xdg base directory specification for php
doctrine/annotations                  v1.2.6 Docblock Annotations Parser
doctrine/cache                        v1.4.1 Caching library offering an object-oriented API for many cache backends
doctrine/collections                  v1.3.0 Collections Abstraction library
doctrine/common                       v2.5.0 Common Library for Doctrine projects
doctrine/dbal                         v2.5.1 Database Abstraction Layer
doctrine/inflector                    v1.0.1 Common String Manipulations with regard to casing and singular/plural rules.
doctrine/instantiator                 1.0.5  A small, lightweight utility to instantiate objects in PHP without invoking their constructors
doctrine/lexer                        v1.0.1 Base library for a lexer that can be used in Top-Down, Recursive Descent Parsers.
fzaninotto/faker                      v1.5.0 Faker is a PHP library that generates fake data for you.
hamcrest/hamcrest-php                 v1.2.2 This is the PHP port of Hamcrest Matchers
jakub-onderka/php-console-color       0.1
jakub-onderka/php-console-highlighter v0.3.1
jeremeamia/SuperClosure               2.1.0  Serialize Closure objects, including their context and binding
laravel/framework                     v5.1.2 The Laravel Framework.
league/flysystem                      1.0.4  Many filesystems, one API.
mockery/mockery                       0.9.4  Mockery is a simple yet flexible PHP mock object framework for use in unit testing with PHPUnit, PHPSpec or any other testing framework. Its core goal is...
monolog/monolog                       1.13.1 Sends your logs to files, sockets, inboxes, databases and various web services
mtdowling/cron-expression             v1.0.4 CRON for PHP: Calculate the next or previous run date and determine if a CRON expression is due
nesbot/carbon                         1.19.0 A simple API extension for DateTime.
nikic/php-parser                      v1.3.0 A PHP parser written in PHP
phpdocumentor/reflection-docblock     2.0.4
phpspec/php-diff                      v1.0.2 A comprehensive library for generating differences between two hashable objects (strings or arrays).
phpspec/phpspec                       2.2.1  Specification-oriented BDD framework for PHP 5.3+
phpspec/prophecy                      v1.4.1 Highly opinionated mocking framework for PHP 5.3+
phpunit/php-code-coverage             2.1.5  Library that provides collection, processing, and rendering functionality for PHP code coverage information.
phpunit/php-file-iterator             1.4.0  FilterIterator implementation that filters files based on a list of suffixes.
phpunit/php-text-template             1.2.0  Simple template engine.
phpunit/php-timer                     1.0.6  Utility class for timing
phpunit/php-token-stream              1.4.2  Wrapper around PHP's tokenizer extension.
phpunit/phpunit                       4.7.3  The PHP Unit Testing framework.
phpunit/phpunit-mock-objects          2.3.4  Mock Object library for PHPUnit
psr/log                               1.0.0  Common interface for logging libraries
psy/psysh                             v0.4.4 An interactive shell for modern PHP.
sebastian/comparator                  1.1.1  Provides the functionality to compare PHP values for equality
sebastian/diff                        1.3.0  Diff implementation
sebastian/environment                 1.2.2  Provides functionality to handle HHVM/PHP environments
sebastian/exporter                    1.2.0  Provides the functionality to export PHP variables for visualization
sebastian/global-state                1.0.0  Snapshotting of global state
sebastian/recursion-context           1.0.0  Provides functionality to recursively process PHP variables
sebastian/version                     1.0.5  Library that helps with managing the version number of Git-hosted PHP projects
swiftmailer/swiftmailer               v5.4.1 Swiftmailer, free feature-rich PHP mailer
symfony/console                       v2.7.1 Symfony Console Component
symfony/css-selector                  v2.7.1 Symfony CssSelector Component
symfony/debug                         v2.7.1 Symfony Debug Component
symfony/dom-crawler                   v2.7.1 Symfony DomCrawler Component
symfony/event-dispatcher              v2.7.1 Symfony EventDispatcher Component
symfony/filesystem                    v2.7.1 Symfony Filesystem Component
symfony/finder                        v2.7.1 Symfony Finder Component
symfony/http-foundation               v2.7.1 Symfony HttpFoundation Component
symfony/http-kernel                   v2.7.1 Symfony HttpKernel Component
symfony/process                       v2.7.1 Symfony Process Component
symfony/routing                       v2.7.1 Symfony Routing Component
symfony/translation                   v2.7.1 Symfony Translation Component
symfony/var-dumper                    v2.7.1 Symfony mechanism for exploring and dumping PHP variables
symfony/yaml                          v2.7.1 Symfony Yaml Component
vlucas/phpdotenv                      v1.1.1 Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.And those in turn require a host of other libraries:
