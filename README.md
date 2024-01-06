# 2024-ci4-jobboard
Building Job Application using Codeigniter 4.4.4.


## 1. SETUP

#### 1. Install Codeigniter 4.4.4

#### 2. Create .htaccess file

        new file:   .htaccess
        modified:   README.md

#### 3. Modified .htaccess file

        new file:   .htaccess
        modified:   README.md

        NOTE: The requested URL was not found

        http://localhost/2024_ci4_jobboard/public/
        Not Found
        The requested URL was not found on this server.

#### 4. Moved index.php file from public to project's root

        renamed:    env -> .env
        modified:   README.md
        renamed:    public/index.php -> index.php

        NOTE: The requested URL was not found

        http://localhost/2024_ci4_jobboard
        Not Found
        The requested URL was not found on this server.

#### 5. Modified app/Config/index.php and App.php files

        modified:   app/Config/App.php
        modified:   index.php

        NOTE: It works as first installation

#### 6. Displayed Hello World!

        modified:   app/Controllers/Home.php
        new file:   writable/logs/log-2024-01-06.log


## 2. SETUP AUTH USING SHIELD

#### 1. Create db and connect it with the project

        - Create db
        - Connect db with the project via .env file

        Done :)

#### 2. Install shield

        > composer require codeigniter4/shield
        > composer require codeigniter4/shield:dev-develop
        > php spark shield:setup

        # Setup .env file

		database.default.hostname = localhost
		database.default.database = 
		database.default.username = 
		database.default.password = 
		database.default.DBDriver = MySQLi

        modified:   .env
        modified:   README.md
        modified:   app/Config/App.php
        new file:   app/Config/Auth.php
        new file:   app/Config/AuthGroups.php
        new file:   app/Config/AuthToken.php
        modified:   app/Config/Autoload.php
        modified:   app/Config/Email.php
        modified:   app/Config/Routes.php
        modified:   app/Config/Security.php
        modified:   composer.json
        new file:   composer.lock
        new file:   writable/debugbar/debugbar_1704553937.316141.json
        new file:   writable/debugbar/debugbar_1704554140.836258.json
        new file:   writable/debugbar/debugbar_1704554147.859725.json
        new file:   writable/debugbar/debugbar_1704554191.988279.json
        modified:   writable/logs/log-2024-01-06.log
        new file:   writable/session/ci_session8cqt8pirl0ulpvn78s4dddt4u78cjalh
        new file:   writable/session/ci_sessiond4oguh8k1pg08bam6f14av67bhuli7rd

#### 3. Register, login and logout a new user

        modified:   README.md
        modified:   app/Config/Routes.php
        deleted:    writable/debugbar/debugbar_1704553937.316141.json
        ...
        modified:   writable/logs/log-2024-01-06.log
        modified:   writable/session/ci_sessiond4oguh8k1pg08bam6f14av67bhuli7rd
        new file:   writable/session/ci_sessionu7tm8m2cdj1cljkg0gkmupm4r0uh82od

        DONE :)