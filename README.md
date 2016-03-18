# A Laravel Lazy debugger package

![Demo](http://labs.jordane.net/img/demo-l5-lazy-debug.gif)

## Install

### Sublime text
- (Windows/Linux) Install `Subl protocol` in the package control : https://github.com/thecotne/subl-protocol
- (OSX) Download the URL handler for Sublime Text 3 from https://github.com/dhoulb/subl and unzip it your /Applications directory. Start this App one time for register the URL handler on your MAC. You can get more informations about this step here : https://github.com/dhoulb/subl

Your favorite browser is Google Chrome ? Follow these steps :

1. Close Chrome
2. (Windows) Open this file : `C:\Users\XXXX\AppData\Local\Google\Chrome\User Data` and search for `excluded_schemes` in `protocol_handler`
2. (OSX) Open this file : `~/Library/Application Support/Google/Chrome/Local State` and search for `excluded_schemes` in `protocol_handler`
3. Add `"subl": false,` and save the file
4. Open Chrome and it's work !

- Use the `composer require metrakit/laravel-lazy-debug` in your project folder
- Add the `Metrakit\LazyDebug\LazyDebugServiceProvider::class` Service provider in the ServiceProvider section in your `config/app.php` file
- (optional) Set a env variable in your .env file (e.g. `PATH_FOLDER=C:/projects/`)
- It's work !

## TODO
- Documentation
