# YOUR PROJECT TITLE
## Video Demo: [My Movies List Project](https://www.youtube.com/watch?v=FamFso-yVYA&ab_channel=AbdallahHadidi)
## Live Demo : [My Movies List](http://ec2-3-65-26-177.eu-central-1.compute.amazonaws.com)

### Seeded Profiles :
Usernames : user1@example.com, user2@example.com, user3@example.com, user4@example.com

password : passowrd
## Description:
A Laravel web application to keep track of watched movies with a small commentary 
and rating for the movie , where you can search with rating , cateogry or title.
### Model Used:
I used the Model View Controller Archticure since it is best practice for laravel based
web applications

### Routing:
In [web.php](routes/web.php) you can find all routing of the application with controller for each route in
[Controllers](app/Http/Controllers) 

### Request Handling:
Where the [Admin Controller](app/Http/Controllers/AdminController.php) is used to handle requests related to users

### Views:
The [Movies Controller](app/Http/Controllers/MovieController.php) is used to handle request related with movies 

The code of the multiple views is stored in [views](resources/views) 

Where [admins](resources/views/admins/) is used to hold [register](resources/views/admins/register.blade.php) and [login](resources/views/admins/login.blade.php) view ,

[movies](resources/views/movies) holds views realted to movies like 
[add movie](resources/views/movies/add.blade.php) view , [edit movie](resources/views/movies/edit.blade.php) view and [dashboard](resources/views/movies/dashboard.blade.php) view 

### Migrations:
The code resbonsible for table creation and relation between tables is stored in [Migrations](database/migrations) folder.

### Seeding:
The code used to seed the database of the application is in [Database Seeder](database/seeders/DatabaseSeeder.php) and it utilizes the factories stored in [Factories](database/factories) folder

## Implementaion Stack :
    PHP for backend (Laravel)
    MySQL for Data base
    BootStrap5 for front end
    Apache2 on AWS EC2 for hosting live demo