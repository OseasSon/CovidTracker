# COVID Tracker App

This is a web application for tracking COVID-19 data in different countries and continents. Users can register and login, and have access to three main pages where they will be able to:

- View live data (total cases, total deaths, new confirmed, new deaths) for 200+ countries.
- Select a country and a date range to view the number of new cases and new deaths for each day in the selected date range.
- View a bar chart comparing number of cases and deasths between continents.

The aplications is reponsive and supports dark mode based on your device's settings.

## Technologies Used

- PHP
- HTML
- JavaScript
- jQuery
- Tailwind CSS
- Water.css
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
gh repo clone OseasSon/CovidTracker
```
Or dowload it as a .zip file:

![Markup on 2023-05-06 at 15:26:40](https://user-images.githubusercontent.com/72031069/236630204-5a875058-bf77-48cb-a5f1-26312bfd29fb.png)

After cloning the repository or opening the zip, navigate to the project directory and copy the entire directory to the `htdocs` directory inside your XAMPP installation directory. For example, on Windows, you might copy the `covidtracker` directory to `C:\xampp\htdocs`.

You should now be able to access the application in your web browser by going to `http://localhost/covidtracker/`.

This project connects to a database to register, login and track user sessions. To import the database used by the application, follow these steps:

1. In http://localhost/phpmyadmin, click on "New" under the sidebar to create a new database.

2. Click on the "Import" tab.

2. Choose the SQL dump file `login_db.sql` from the project's folder.

3. Click "Import" to import the SQL dump file into your new database.

![Markup on 2023-05-06 at 15:30:38](https://user-images.githubusercontent.com/72031069/236630405-7efe2fd1-07a2-4aee-a0c3-40c4449034e4.png)

You should now be able to register a new user by going to http://localhost/covidtracker/signup.php or login with one of the mock users imported by going to http://localhost/covidtracker/login.php

## Usage

The application is very simple and intuitive to use. Here are a few screen recording to walk you trhough.

Signing up:

https://user-images.githubusercontent.com/72031069/236628934-76bb8b72-ac31-4b10-af3f-26b86b2e704f.mp4

Navigating the app:

https://user-images.githubusercontent.com/72031069/236629149-f8c43387-14fe-4a2b-ac4c-ac1215ce963d.mp4

Please note that the tab "Users" in the sidebar should not return nothing as this feature was not finished.

## Credits

This application was built using the following open-source libraries:

- Chart.js - https://www.chartjs.org/
- Flowbite - https://flowbite.com/
- jQuery - https://jquery.com/
- Tailwind CSS - https://tailwindcss.com/
- Water.css - https://watercss.kognise.dev/
