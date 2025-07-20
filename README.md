\# ShotBallShop



ShotBallShop is a PHP-based e-commerce platform developed using vanilla PHP and MySQL, built for learning and custom expansion.



\## 📦 Features



\- Admin panel to manage products, categories, suppliers, and sales

\- Client-facing pages for shopping, registration, cart, and invoices

\- Password recovery and email verification system

\- Responsive styles and modular design

\- PHPMailer integration for email functionality



\## 🗂️ Project Structure



ShotBallShop/

│ library.php

│ mail.php

│ website.sql

├── admin\_pages/ # Admin panel: manage articles, categories, clients, etc.

├── client\_pages/ # Client pages (primary)

├── client\_pages2/ # (Alternate or legacy client pages)

├── facture/ # Invoice display and styling

├── images/ # Product \& UI images

├── JavaScript/ # Client/Admin JavaScript

├── PHPMailer-master/ # PHPMailer library

├── styles/ # CSS stylesheets

└── README.md



\## 🚀 Getting Started



1\. Clone this repository:



git clone https://github.com/Aymane-LAAROUI/ShotBallShop.git

Import website.sql into your MySQL server



Run locally:

php -S localhost:8000



📬 Email Setup

Uses PHPMailer in /PHPMailer-master/



Configure SMTP in mail.php



🛡️ License

MIT – feel free to modify and use

