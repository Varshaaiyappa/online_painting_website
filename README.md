# online_painting_website
This is an online paintings website developed using HTML, CSS, PHP, JavaScript, and MySQL. The website allows users to browse and purchase paintings online, as well as manage their accounts and view their order history.


**Table of Contents:**
 1)  Features
 2) pre requisites
 3)  Installation
 4)  Usage
 5)  Technologies Used

**Features:
**

a) User registration and authentication system.

b) Browse paintings by names.

c) Search paintings by title, artist, or category.

d) Add paintings to the shopping cart.

e) View and update the shopping cart.

f) Checkout and place orders.

g) View order history.

h) Manage user profile and account settings.

i) Administrator panel to manage paintings, payments and users.

**Pre requisites:**

1) code editor : prefered is VScode

2) XAMPP [ for php mysql]

3) Web browser

**Installation:**

Clone the repository:
bash

**Copy code**
git clone https://github.com/your-username/online-paintings.git
Move the project files to your web server's root directory.

Import the database schema:


Create a new MySQL database for the website.
Import the database.sql file located in the project's database directory to set up the required tables.
Configure the database connection:

Open config.php located in the project's includes directory.
Modify the database connection settings to match your MySQL configuration.
php


**Copy code**

// Replace these settings with your database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'your_mysql_username');
define('DB_PASS', 'your_mysql_password');
define('DB_NAME', 'your_database_name');



**Usage**

   1]Launch your web server and MySQL database server.

   2]Open your web browser and navigate to the website's URL.

   3]Register a new user account or log in if you already have one.
   
   4]Start browsing paintings by categories or artists.

   5]Click on a painting to view more details.

   6]Add paintings to your shopping cart and proceed to checkout


**Database Setup**

The MySQL database contains the following tables:

**users:** Stores user information such as username, email, and password.

**products:** Contains information about the available paintings, including title,  price, etc.

**cart:** Keeps track of the items added to the user's shopping cart.

**orders:** Stores information about placed orders.

**messages:** to manage the queries and communication of users.

**admin table:** to manage the operations of Admin panel

**Contribution**

Contributions are welcome! If you find any issues or have suggestions for improvement, feel free to submit a pull request.
