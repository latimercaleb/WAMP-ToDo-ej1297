# WAMP Stack: To-do List Project
This project was build on the WAMP (Windows, Apache, MySQL, PHP) stack using HTML5, CSS3, jQuery, PHP and MySQL. <br/>

It is a simple to do list that will enable a user to do the following: <br/>

1. View Tasks
2. Add Tasks
3. Delete Tasks

All information is persisted on a database using client server architecture.<br/>

## How to install
If you do not already have a wamp stack to use this application first install bitnami wamp stack 7.0.22-1 here https://bitnami.com/stack/wamp/installer

Once the set up is done clone and drop the files in this repository in the htdocs/ folder.

Open the Bitnami app and start apache and MySQL.

Then navigate to localhost/wamp in your browser.

## How to use

### Adding an item
Click the text field and enter what you'd like to add to the task list.

Click the enter key or click the + button on the screen

The item will be added to the table

NOTE: Each time you add to the list you will have to click in order to start typing again or you press `TAB` on the keyboard and begin typing.

### Marking an item done
Click the item in the list, it will move to the bottom with a strike through it and be at a less opacity. It is now marked done

### To Delete items
Click an item that is marked done. It will disappear. It is now removed from the list and the database.
