# COVID Tracker App

This is a web application for tracking COVID-19 data in different countries and continents. Users can register and login, and have access to three main pages where they will be able to:

- View live data (total cases, total deaths, new confirmed, new deaths) for 200+ countries.
- Select a country and a date range to view the number of new cases and new deaths for each day in the selected date range.
- View a bar chart comparing number of cases and deasths between continents.

## Technologies Used

- PHP
- HTML
- JavaScript
- jQuery
- Tailwind CSS
- Flowbite
- Chart.js

## Installation

To run the application, you will need to have PHP installed on your local machine. One way to do this is to install [XAMPP](https://www.apachefriends.org/index.html), a free and open-source cross-platform web server solution that includes Apache, MySQL, PHP, and more.

To install XAMPP:

1. Download the XAMPP installer from the official website.
2. Run the installer and follow the prompts to install XAMPP. Choose the components you want to install (e.g., Apache, MySQL, PHP), and select the installation directory (e.g., `C:\xampp` on Windows).
3. Once the installation is complete, launch the XAMPP Control Panel.
4. Start the Apache and MySQL services by clicking the "Start" button next to each service.

Next, clone this repository to your local machine:

```
git clone https://github.com/your-username/covid-tracker-app.git
```

After cloning the repository, navigate to the project directory and copy the entire directory to the `htdocs` directory inside your XAMPP installation directory. For example, on Windows, you might copy the `covidtracker` directory to `C:\xampp\htdocs`.

You should now be able to access the application in your web browser by going to `http://localhost/covidtracker/`.

This project connects to a database to register, login and track user sessions. To import the database used by the application, follow these steps:

1. In http://localhost/phpmyadmin, click on "New" under the sidebar to create a new database.

2. Click on the "Import" tab.

2. Choose the SQL dump file `login_db.sql` from the project's folder.

3. Click "Import" to import the SQL dump file into your new database.

You should now be able to register a new user by going to http://localhost/covidtracker/signup.php or login with one of the mock users imported by going to http://localhost/covidtracker/login.php

## Usage

To use the application, simply select a country and a date range using the form on the homepage. The application will display a chart showing the number of new cases and new deaths for each day in the selected date range.

You can also click on the "View Table" button to view the data in a table format.

## Credits

This application was built using the following open-source libraries:

- Chart.js - https://www.chartjs.org/
- Flowbite - https://flowbite.com/
- jQuery - https://jquery.com/
- Tailwind CSS - https://tailwindcss.com/