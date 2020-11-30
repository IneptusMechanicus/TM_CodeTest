# TM CodeTest Projects

XML Parsing script and small MVC framework for a web page to display searches from a database.

The parseXML script should be run as follows:

$ php parseXML.php example.xml

The project was setup using an nginx virtual host.

The sql folder includes sql to setup the database as the project uses it.

The core folder contains the base classes.

The web page uses a simple MVC implementation. The page is rendered as a view using a controller class.

The search bar on the page sends the query to the controller via post method.
The controller then passes the query to the model and the DB is queried.

The data is then sent back to the webpage via echoing into a JS variable for further front end processing.
