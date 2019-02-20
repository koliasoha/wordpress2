#My Project

Soha Kolia
Emad Tirmizi


1. Create a database
    go to View, located at the top toolbar,
    from the dropdown select tool windows
    select Database from tool windows.
    
    On the right database screen will open up
    click the plus button underneath where it says 
    database
    
    select mySQL
    
    Once you database is selected
    enter the following script into your console
    
    Create DATABASE wordpress3;
    CREATE user 'wordpress3'@'localhost' IDENTIFIED by 'password';
    GRANT ALL PRIVILEGES ON wordpress3.* TO 'wordpress3'@'localhost';
    FLUSH PRIVILEGES;
    
    then select run and select the first part of the code
    then run the second part of the code
    
2. Create new wordpress
    Copy the contents of the WordPress.zip into the phpstormProjects 
    directory on your computer
    copy and paste the wp-config-example.php file in wordpress folder 
    in the same folder and rename it wp-config.php
    
3. Edit wp-config.php
    open the wp-config.php file with your text editor
    change the code so it contains the same username, password,
    and database you just created
    
    Example{
    
     /** The name of the database for WordPress */
     define('DB_NAME', 'wordpress3');
     
     /** MySQL database username */
     define('DB_USER', 'wordpress3');
     
     /** MySQL database password */
     define('DB_PASSWORD', 'password');
     
     /** MySQL hostname */
     define('DB_HOST', '127.0.0.1');"
     
    }
4. setup run configuration
    at the top toolbar go to run
    select edit configurations
    select the pluss button and add a PHP Built-in web server
    where it says document root press the folder button and 
    provide the path to your wordpress directory in your PhpstormProjects directory
    
    Example path {C:\Users\"Username"\PhpstormProjects\"Your wordpress directory name"}
    
    set the port to 8080. Press apply and hit okay.
    change interpreter to the python you are running 7.3 or 7.2
    
5. Run Website
    press the run button to start your server
    open your browser
    in your address bar and type in the address localhost:8080
    
    You should then be directed to the wordpress installation screen
    
    
Trouble shooting tips
Tip 1. Increase wait time  
    make sure to set max_execution_time to 120 in your php.ini
    you can do this by going to your PHP installation folder
    in your PHP7 folder in your C: (or wherever you installed it) open the php.ini file
    once the file is open press ctrl+f open word search
    type in max, search through the keywords until you find 
    change max_execution_time to 120
    change max_input_time to 60 if not already set to 60

Tip 2. Allocate more Memory
    in the same file make sure that your memory_limit is set to 1G instead of 128M
    
Tip 3. Uncomment certain dll's
    make sure you have the following dll's uncommented 
    {
     extension=php_gd2.dll
     extension=php_curl.dll
     extension=php_mbstring.dll
     extension=php_openssl.dll
     extension=php_pdo_mysql.dll
     extension=php_pdo_sqlite.dll
     extension=php_sockets.dll
     extension=mysqli.dll
    }
    Also for where it reads
    {
    ; extension_dir = "ext" 
    }
    remove the ; so the line reads extension_dir = "ext"
    