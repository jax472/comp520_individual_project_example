# Animocity

A bare-ones vanilla PHP (no framework) application that provides an adminstrator
dashboard for managing a animal boarding business. Hence the name 'Animocity'. 
You can thank my girlfriend Erin for coming up with that clever name.

IMPORTANT! This application is for learning purposes early and thus is not intended to be
used as production level application in any form. 

# Application Directory Structure
The application is directory structure is as follows:
- core/
    - This directory holds scripts that are responsible for building the 'core' of the application such as initializing the database connection, definined named constants, etc. 
- fragments/
    - This directory holds view fragments that are intended to included in your main views. An example of this would be the 'footer.php' fragment which allows to write our page footer ONCE, and just include that file in all our main views.
- static/
    - This directory holds static files such as CSS, JS, and images. Due the nature of this project, the styling and javascript assets are somewhere between non-existant and minimal.
- index.php