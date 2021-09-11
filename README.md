# Organization POC

This is a showcase of the coding practice that i am using while code with Laravel web applications.

## Project Installation

Clone this project to your local environment by GIT commands as below.
Please use clonning URL as per your preference, Either SHH or HTTPS

```bash
git clone {CLONE-URL}
cd organization-poc
```

## Setup
Edit `.env` file for your database configurations

```bash
# It will install prerequisite libraries for project
composer install

# It will install prerequisite node packages for project
npm install

# After successfull installation of npm install run below command
npm run dev # (in case you failed at run dev please do npm install again and try again)


# It will create tables in your database (.env)
php artisan migrate

# This will fill prerequisite data into database
php artisan db:seed --class=PermissionTableSeeder
php artisan db:seed --class=CreateAdminUserSeeder

# It will run project.
php artisan serve
```

## Login credentials
Admin
```text
Username: john@foo.bar
Password: !6Foob@r9
```
