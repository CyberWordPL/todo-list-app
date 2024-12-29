## TodoList - PHP App to store ToDo lists

### 1. Building ToDo Application
You need to build TS files.  
You can use `build.sh` script to build todo application.

### 2. Configuring ToDo Application
ToDo application needs some configuration (like MySQL configuration).
   
`.env` Keys:
 - `MARIADB_ROOT_PASSWORD`: Root password for MySQL.
 - `MARIADB_DATABASE`: Name of database for ToDo app.
 - `MARIADB_USER`: Name of MariaDB user for ToDo app.
 - `MARIADB_PASSWORD`: Password of MariaDB user for ToDo app.

### 3. Running ToDo Application   
Run ToDo Application using Docker Compose.  
Use command `docker compose up -d`