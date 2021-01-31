# Animocity

A bare-ones vanilla PHP (no framework) application that provides an adminstrator
dashboard for managing a simple flashcard application you can use for your own personal studies.

IMPORTANT! This application is for learning purposes early and thus is not intended to be
used as production level application in any form. 

# Application Directory Structure
The application is directory structure is as follows:
- core/
    - This directory holds scripts that are responsible for building the 'core' of the application such as initializing the database connection, definined named constants, etc. 
- docs/
    - This directory will hold documentation and helpful resources such as the initial SQL to create the database and tables (the data definition language - DDL) or other various resources, references, etc.
- fragments/
    - This directory holds view fragments that are intended to included in your main views. An example of this would be the 'footer.php' fragment which allows to write our page footer ONCE, and just include that file in all our main views.
- pages/
    - This directory hold our pages, the individual interior views. We will keep them here just to keep things a bit more organized.
- static/
    - This directory holds static files such as CSS, JS, and images. Due the nature of this project, the styling and javascript assets are somewhere between non-existant and minimal.
- index.php

# Installation Instructions
- This project expects to live in the "flashcards" directory in the xampp/htdocs directory.
- On github, download the project as a zip file.
- Unzip the contents of the project to xampp/htdocs/flashcards
- The database DDL is located in docs/data_definition_language.sql, either manually create the database from this file or import into MySQL (or import using PHPMyAdmin)
- The project expects to use the MySQL ROOT user with an empty password. If you have a different password for your root user, or you wish to set a different user, do this in the core/constants.php