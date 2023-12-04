# Welcome to the CLC Technical Test - Real-world Polling Website

In this assessment, you will showcase your skills as a developer by creating a real-world polling website. Your task is
to
build a User Registration, Login, and Voting poll component with specific functionalities outlined below.

---

#### Framework

The 'Framework' in this project is part of a bit of learning I am doing and not
from any of the major frameworks. I created it from scratch as
part of a course and this way this project is a learning opportunity.
---

# Project

This is a technical test of CTC.

## Run Project

To run the project you will require docker desktop. This will set up all
the parts the application needs to run including MySQL.

The SQL database will have a base file which will populate the server for development.
`.docker/mysql/docker-entrypoint-initdb.d/test.sql`

Clone the project and then from the root of the project run:

```shell
docker-composer up -d --build
```

The site will be available on http://localhost.

### PHPMyAdmin

There is access to PHPMyAdmin @ http://localhost:8080/:

```text
Server: mysql
Username: root
Password: mysql
```

### Functionality Required:

- User Registration Page: You must design a User Registration page with the following fields:
    - [ ] User first name (required)
    - [ ] User last name
    - [ ] Login Username (required)
    - [ ] Login Password (required)
    - [ ] Prevent a user from registering more than once.
    - [ ] Encrypt the user's password.
    - [ ] Implement a form of spam protection, such as CAPTCHA.
    - [ ] Passwords must meet the following criteria:
        - [ ] At least 8 characters long
        - [ ] At least 1 uppercase letter
        - [ ] At least 1 special character

### Login Page:

- [ ] Create a Login page for users to log in with their credentials.

- [ ] Voting Poll Component: After a successful login, prompt the user to answer the following question: "What is your
  favourite coding language?"
    - [ ] Provide the following options for selection:
        - PHP
        - C#
        - C
        - JAVA
        - Python
        - C++

    - [ ] Implement functionality to prevent a user from voting more than once.

- [ ] Poll Result Averages:

- [ ] After successful vote submission, display the poll result averages based on all votes already submitted.

Technical Requirements:

- [x] Use PHP classes in an Object-Oriented Programming (OOP) coding style.
- [ ] Utilize jQuery/AJAX for form submission and validation.
- [x] Host the project locally, with the path to access it being: http://localhost/test/
- [x] Employ a MySQL database with the following details:
    - Database name: test
    - Database login details:
    - Username: root
    - Password: mysql

### Time Limit

- You have a maximum of 2 hours to complete this technical test.
- NOTE: I exceeded this 2 hour limit.

### Submission

- Please organize all your PHP code and SQL queries, including table creation scripts, into a single folder. Zip the
  folder and send it via email to: carinp@clc.co.za.

### Additional Guidelines:

- Do not use any frameworks, such as Laravel; write the solution using native PHP.
- Do not rely on online examples as your solution. This test is not just about assessing your coding ability but also
  evaluating your coding style and approach.

# References

- https://snyk.io/blog/dockerize-php-application/
- https://jquery.com/download/