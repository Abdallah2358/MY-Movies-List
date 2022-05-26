# My Movies List
# Video Demo: [My Movies List Project](https://www.youtube.com/watch?v=FamFso-yVYA&ab_channel=AbdallahHadidi)
# Live Demo : [My Movies List](http://hadidi-movies-list.herokuapp.com/)

# Seeded Profiles :
Usernames : user1@example.com, user2@example.com, user3@example.com, user4@example.com
password : passowrd

# Description:
The project is a web application where anyone can list movies he previously watched. The implementation is fairly simple, to keep the project scope in check. I wanted to make a project like this to expand my knowledge of laravel framework.


## How the webpage works?

The user can register. During registration you need to enter these fields:

- Name (unique)
- Email (unique)
- Password: it is checked to match, must be at least 7 symbols long and is hashed after checks are done
- Phone Number (unique)

The user can Then add movies , to add a movie you need to enter :

- Movie Name 
- Description of movie
- Category
- Rating

The user has the ablity to edit or delete his/her added movies

The user can search his movies based on a substring of the movie name or discrption, Category and/or Rating

### Routing

Each route checks if the user is authenticated. It means if correct mail and password were supplied. So for example No one can see other users added movies. 

### Database

Database stores all users, movies, categories. The table movies uses foreign keys to relate users to the movie they created. Moreover, movies table uses foreign keys to relate the Category to Movie.

### Implementation detials :

#### Model Used:
I used the Model View Controller Archticure since it is best practice for laravel based
web applications

#### Routing:
In [web.php](routes/web.php) you can find all routing of the application with controller for each route in
[Controllers](app/Http/Controllers) 

#### Request Handling:
Where the [Admin Controller](app/Http/Controllers/AdminController.php) is used to handle requests related to users

#### Views:
The [Movies Controller](app/Http/Controllers/MovieController.php) is used to handle request related with movies 
The code of the multiple views is stored in [views](resources/views) 
Where [admins](resources/views/admins/) is used to hold [register](resources/views/admins/register.blade.php) and [login](resources/views/admins/login.blade.php) view ,
[movies](resources/views/movies) holds views realted to movies like 
[add movie](resources/views/movies/add.blade.php) view , [edit movie](resources/views/movies/edit.blade.php) view and [dashboard](resources/views/movies/dashboard.blade.php) view 

#### Migrations:
The code resbonsible for table creation and relation between tables is stored in [Migrations](database/migrations) folder.

#### Seeding:
The code used to seed the database of the application is in [Database Seeder](database/seeders/DatabaseSeeder.php) and it utilizes the factories stored in [Factories](database/factories) folder

# Technologies used:
    Laravel for back-end 
    MySQL for Data base
    BootStrap5 for front-end
    Apache2 on AWS EC2 for hosting live demo
