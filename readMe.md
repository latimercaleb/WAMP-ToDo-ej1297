# WAMP Stack: To-do List Project
This project was build on the WAMP (Windows, Apache, MySQL, PHP) stack using HTML5, CSS3, jQuery, PHP and MySQL.

It is a simple to do list that will enable a user to do the following:

1. View Tasks
2. Add Tasks
3. Delete Tasks

All information is persisted on a database using client server architecture.

## Demo

![Video demo of app](https://github.com/latimercaleb/WAMP-ToDo-ej1297/blob/DesktopTest/docs/Wamp%20demo%20recording/Wamp%20demo%20recording_media/Wamp%20demo%20recording.gif)


## How to install
If you do not already have a WAMP stack to use this application first install **bitnami wamp stack 7.0.22-1** here :  https://bitnami.com/stack/wamp/installer

Follow the instructions in the installation wizard until you reach the part asking for a password.

Use `latimercaleb` for the first time set up. I'll describe how to change the password later, once the set up is done clone this repo take the `wamp` folder and drop it in the `Bitnami\wampstack-7.0.22-1\apache2\htdocs` folder.

Next to set up the database open `phpmyadmin` with the bitnami management tool. Login in with `root` and `latimercaleb`.

Once inside click `new` in the leftmost tree. Then in the top nav bar click `import` and choose the `todo.sql` that you downloaded from the repo.

Open the Bitnami app and start apache and MySQL.

Then navigate to `localhost/wamp` in your browser.

## To change your password
To change the password to something other than the default `latimercaleb`

First go to `phpmyadmin` and click change password, make sure to remember what it is.
Then in the `wamp` folder the following files to the new password where you see `latimercaleb`:
- index.php, line 3 `$dbConnection = new mysqli('localhost', 'root', 'THENEWPASSWORD', 'todo');`
- list.php,  line 2 `$dbConnection = new mysqli('localhost', 'root', 'THENEWPASSWORD', 'todo');`
- mark.php,  line 2 `$dbConnection = new mysqli('localhost', 'root', 'THENEWPASSWORD', 'todo');`

Changing your password also changes the password for `root` in `phpmyadmin` so keep that in mind.

## How to use

### Adding an item
Click the text field and enter what you'd like to add to the task list.

Click the enter key or click the + button on the screen

The item will be added to the table

**NOTE:** Each time you add to the list you will have to click in order to start typing again or you press `TAB` on the keyboard and begin typing.

### Marking an item done
Click the item in the list, it will move to the bottom with a strike through it and be at a less opacity. It is now marked done

### Deleting an item
Click an item that is marked done. It will disappear. It is now removed from the list and the database.

## A point of caution
This application does not support multiple users or multiple lists.

Thank you for reading and enjoy your day/night :D
