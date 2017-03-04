# cinf301-spr17-project-02

For some reason my code will not run in the tutum/lamp docker container. It ran fine without any errors in the terminal.
I use php7.0 in the terminal and php5 in the docker container. I made sure that I downloaded curl for each version
respectively. 

PHP Warning:  require(/app/cinf301-spr17-project-02/vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php): failed to open stream: No such file or directory in /app/cinf301-spr17-project-02/vendor/composer/autoload_real.php on line 55
PHP Fatal error:  require(): Failed opening required '/app/cinf301-spr17-project-02/vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php' (include_path='.:/usr/share/php:/usr/share/pear') in /app/cinf301-spr17-project-02/vendor/composer/autoload_real.php on line 55

Above is the error I get when I try to run the code in a container. I tried just about everything I knew to do to fix it and nothing worked.
If you see anything that might be causing this error, please email me so I can truly finish this project.
