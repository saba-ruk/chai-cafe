# ☕ Chai Cafe Management System

## Overview

**Chai Cafe Management System** is a web-based application developed as a **Bachelor of Computer Applications (BCA) Final Year Project**. The system provides an interactive platform for customers to explore the cafe menu, view product categories, learn about the cafe, and securely log in to access additional features.

The project aims to digitalize the traditional cafe experience by providing an attractive and user-friendly interface while maintaining a simple backend for data management.

### Additional APIs & Libraries

* Google Maps API
* Google API PHP Client Library

## Project Structure

```text
chai/
│
├── assets/
│   ├── css/
│   └── js/
│
├── DATABASE/
│   ├── chai.sql
│   └── google-api-php-client-main/
│
├── pics/
│   ├── Tea Images
│   ├── Snacks Images
│   ├── Milkshake Images
│   └── Mojito Images
│
├── users/
│   ├── login.php
│   ├── logout.php
│   └── auth_session.php
│
├── index1.php
├── menu.html
├── style files
├── JavaScript files
└── image resources
**Database File:**
DATABASE/chai.sql
The database contains the necessary tables required for user authentication and project functionality.

### Prerequisites

Make sure the following software is installed:

* XAMPP / WAMP Server
* PHP 8.x or above
* MySQL
* Modern Web Browser (Chrome, Edge, Firefox)

---

## How to Run

### Step 1: Clone or Download

Download the project and extract it.

### Step 2: Move Project Folder

Copy the project folder into your web server directory:

For XAMPP:

```
C:\xampp\htdocs\
```

Example:

```
C:\xampp\htdocs\chai\
```

### Step 3: Create Database

1. Open phpMyAdmin.
2. Create a new database named:

```
chai
```

3. Import the SQL file:

```
DATABASE/chai.sql
```

### Step 4: Start Services

Open XAMPP Control Panel and start:

* Apache
* MySQL

### Step 5: Launch the Project

Open your browser and visit:

```
http://localhost/chai/index1.php
```

---

## Required Packages / Libraries

The project uses the following external libraries:

* Bootstrap 5
* Bootstrap Icons
* Font Awesome
* Splide.js
* Google Maps JavaScript API
* Google API PHP Client Library

## Author

**Saba Ruknuddin**

Bachelor of Computer Applications (BCA)

Final Year Project
of this project.

Screenshot 2026-06-07 101031.png
