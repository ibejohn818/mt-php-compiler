## MT PHP Compiler

Compiles a script to PHP executable including composer includes.

Execute the compile script and fill in the prompts
`./compiler`

You will be asked what you wish the executable to be named
and the entry script.

A {NAME_OF_EXE}.phar file will be created that can be 
executed on any system with PHP installed

#### Compile w/Docker for mac
`docker run --rm -it -v $(pwd):/app -w /app  -u $(id -u):$(id -g) ibejohn818/php:php71w-build /bin/bash -c './compiler'`

