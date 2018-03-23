# Envoy Task Manager Installation

```
$ git clone git@github.com:mcarter450/envoy-todo-list.git envoy-todo-list
$ cd envoy-todo-list
$ composer install
```

# Create MySQL database and 'homestead' user
## For users that do not have Homestead set up

`$ mysql -u root -p`

```
mysql> create database homestead;
mysql> create user 'homestead'@'localhost' identified by 'secret';
mysql> grant all privileges on homestead.* to 'homestead'@'localhost' identified by 'secret'
```

# Copy .env.example to .env

`$ cp .evn.example .env`

## Update or set APP_KEY variable

# Database migration and seeders

`$ php artisan migrate`

```
$ php artisan db:seed --class=UsersTableSeeder
$ php artisan db:seed --class=TasksTableSeeder
```

# Login with default user account or create a new one

Email: mcarter@weareenvoy.com  
Pass: Pass#123

# Developer notes

Initially I had set out to use React and install dependencies via NPM. Webpack wasn't playing well with Elixir and it ended up being a huge install headache. I eventually gave up as I was afraid it wouldn't work for others. I'm really not a big fan of Node's package manager for various reasons, and eventually want to give Yarn a try. In lieu of React I used Riot.js, jQuery, and Bootstrap 4. All of the includes are loaded over CDN to be on the safe side. You'll notice that this Task Manager app uses the .container class Bootstrap includes and in turn the built-in grid system handles most of the responsive stuff, so there wasn't anything extra to do there. Riot.js has a pretty small footprint, so it's good for smaller projects and provides code organization and templating, without anything getting too crazy.

# Design considerations

Since I took advantage of Laravel's built-in authentication, I decided to make my app only show tasks for the logged in user, with the option to create multiple accounts. Given some more time, I would definitely like to add support for a super user that can assign tasks for various users and the support for categories. That and the ability to drag and drop sort tasks etc. There is also more to be done in the way of input validation and error handling, but it's off to a good start.
