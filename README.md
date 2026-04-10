# Booker

![status: archived](https://img.shields.io/badge/status-archived-lightgrey)

> **⚠️ Archived Repository**  
> This project is no longer actively maintained.  
> It remains available for reference and historical purposes.

## Overview
This project provided an application for creating and managing events, then inviting friends or colleagues to join them, offering a single source of truth for upcoming plans. A key feature was the ability to invite participants quickly without requiring an existing account. The intended use case included scenarios such as friends agreeing to an event in a pub and needing one central place to find the details afterwards.

## Reason for Archive
Booker has been rebranded, and all development has continued under the new name **Whenish**. The successor project enables users to create, manage, and delete both their public and private events, with simple invite‑URL sharing that requires no email addresses or pre‑existing accounts.

## Successor
- https://whenish.co.uk (Private repository)

---

## Project Summary
-

## Dependencies
- Git ^?
- PHP ^8.0
- Laravel ^?
- Composer ^?
- Node ^?

---

## For development
1. Navigate to directory where the project should be hosted
2. In terminal, run `git clone https://github.com/Dregozone/BookerApplication`
3. `cd BookerAplication` to navigate into the top level project directory
4. `code .` to open VS Code for the entire project
5. Navigate to /BookerApplication/Booker-BE
6. In terminal, run `composer install`, to install PHP dependencies
7. Enter database credentials into .env.example and rename to .env
8. Run `php artisan migrate`, to create database schema
9. Run `php artisan db:seed`, to populate initial database values
10. Navigate to /BookerApplication/Booker-FE
11. In terminal, run `npm install`, to install JavaScript dependencies


### To run locally:
#### Start the back end
1. Navigate to /BookerApplication/Booker-BE
2. In terminal, run `php artisan serve` to begin the Laravel development server, available at [localhost:8000](localhost:8000)

#### Start the front end
1. Navigate to /BookerApplication/Booker-FE
2. In terminal, run `npm start` to begin the React development server, available at [localhost:3000](localhost:3000)

---
## Testing
### Back end automated testing with PHP Unit
-

### Front end automated testing with Jest
-

---
## For deployment
-

---
## Contributions
-

Enjoy!
