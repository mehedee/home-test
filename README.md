# Home Test: Find the n'th Number in Fibonacci Series. 

###Description
The home test is done using ``Laravel Lumen``. Taking the benefit of routing and to keep similarity with FlixMobility's current stack was the reason behind this intention.
Although the problem is too small to use a framework, using a microframework, it allowed me to focus in actual problem-solving more.
The problem is solved using the interface provided in the test. The interface and the class files are available in ``app/Helpers`` folder.

###Requirements
The application is based on ``PHP8.0`` to take advantage of union types.
``Composer`` is required as standard to install the dependencies for the framework.

###Running The Application
To Run the application simply run the following commands in shell when inside the project folder.
```angular2html
composer install                        // Installs the packages
php -S localhost:8000 -t public         // Start the built in php server
```
The application shall run at [localhost:8000](localhost:8000) port.

###Tests
Two test files were written to test the Method and the Endpoint to verify different case scenarios.
The files are available at ``tests``folder.
To run the test, please run ``./vendor/bin/phpunit`` (tested from Mac)


