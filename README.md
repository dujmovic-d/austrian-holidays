<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About The Project

This is a simple Project for learning how to create a CRUD Web Application with Laravel 9

## Getting started

- Install DDEV and configure it in the folder of the project with <b>ddev config</b>
- Copy the .env.example and rename it into .env
- Start DDEV Webserver with ```ddev start```
- Install required Composer Packages with ```ddev composer install```
- Do the DB Migration and the Seeding with ```ddev artisan migrate``` & ```ddev artisan db:seed```
- Find out your link/IP for testing with ```ddev describe```

## Specifications of used Technologies
<table>
    <tr>
        <td>
            Laravel Framework
        </td>
        <td>
            Version 9.52.4
        </td>
    </tr>    
    <tr>
        <td>
            DDev
        </td>
        <td>
            Version 1.21.5
        </td>
    </tr>    
    <tr>
        <td>
            Bootstrap
        </td>
        <td>
            Version 5.2.3
        </td>
    </tr>
</table>

## Important Commands for Testing
<table>
    <tr>
        <td>
            ddev start
        </td>
        <td>
            Starts DDev Developing Environment
        </td>
    </tr>    
    <tr>
        <td>
            ddev stop
        </td>
        <td>
            Stops DDev Developing Environment
        </td>
    </tr>    
    <tr>
        <td>
            ddev artisan migrate
        </td>
        <td>
            Launches Migrations
            You can use the reset command to undo migration
            You can use the refresh command to undo the migration and relaunch it
        </td>
    </tr>    
    <tr>
        <td>
            ddev artisan db:seed
        </td>
        <td>
            Launches Seeder
        </td>
    </tr>
</table>