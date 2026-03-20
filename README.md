# Laracoffee

Laracoffee is a web application built using the Laravel framework that allows users to browse and order coffee products online.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [UI](#ui)

## Features
### Admin
- Authentication Page: This page allows admin to log in.
- Dashboard Page: Admin have access to a dashboard for an overview of system activities.
- Customer Page: Provides a list of registered customer details for admin to view.
- Log Transaction Page: Admin can monitor transaction logs.
- Product Page: Admin can view, add, edit, and remove product details.
- Product Review Page: Admin can view product reviews.
- Profile Page: Admin can edit their profile data and change passwords if needed.
- Order Page: Admin can manage user orders, including changing order status (rejected, done, approved).
- Order History: Admin can review the history of orders.

### General User
- Authentication and Registration Page: Users can log in or register for an account.
- Home Page: The main landing page for users.
- Point Page: Users can track loyalty points earned through transactions.
- Profile Page: Users can edit their profile data and change passwords if needed.
- Product Page: Users can purchase products, view product details, and leave product reviews (after completing the purchase).
- Order Page: Users can view and manage their shopping cart, including editing and canceling orders.
- Order History: Users can review their order history.
## Installation

To run Laracoffee locally, follow these steps:

1. Clone this repository:

   ```bash
   git clone https://github.com/Stucom-Pelai/MP0613_RA6RA7RA8_Eloquent-Laracoffee.git
   ```
2. Install the project dependencies
    ```bash
    composer install
    ```
3. Copy the .env.example file to .env and configure your environment variables, including your database settings and any other necessary configuration.
    ```bash
    copy .env.example .env
    ```
4. Generate an application key
    ```bash
    php artisan key:generate
    ```

5. Create a symbolic link for the storage directory
   ```bash
   php artisan storage:link
   ```
6. Migrate the database
    ```bash
    php artisan migrate
    ```
7. Seed the database with sample data (optional):
    ```bash
    php artisan db:seed
    ```
8. Start the development server
    ```bash
    php artisan serve
    ```
9. Access the application in your browser at http://localhost:8000

## Usage
- Visit the website and register for an account.
- Browse the available coffee products, add them to your cart, and proceed to checkout.
- Make a test order to see the order processing workflow.
- Access the admin panel by log in with admin credentials (if seeded).
- Manage products and orders through the admin panel.

## UI

### Admin Page
##### Dashboard
!["Dashboard"](/storage/assets/Admin/dashboard.PNG)
##### Customer Lists
!["Customer Lists"](/storage/assets/Admin/customer_lists.PNG)
##### Transaction Lists
!["Transaction Lists"](/storage/assets/Admin/transactions.PNG)
##### Product Page
!["Product"](/storage/assets/Admin/product.PNG)
##### Add Product
!["Add Product"](/storage/assets/Admin/add_product.PNG)

##### Edit Product
!["Edit Product"](/storage/assets/Admin/edit_product.PNG)
##### Detail Order
!["Edit Product"](/storage/assets/Admin/detail_order.PNG)
##### History Order
!["History Order"](/storage/assets/Admin/history_order.PNG)

### General User
##### Registration Page
!["Registration Page"](/storage/assets/User/registration.PNG)
##### Authentication Page
!["Authentication Page"](/storage/assets/User/authentication.PNG)
##### Home
!["Home"](/storage/assets/User/home.PNG)
##### User Point
!["User Point"](/storage/assets/User/user_point.PNG)
##### Detail Profile
!["Detail Profile"](/storage/assets/User/profile.PNG)
##### Edit Profile
!["Edit Profile"](/storage/assets/User/edit_profile.PNG)
##### Product Page
!["Product"](/storage/assets/User/product.PNG)
##### Product Detail
!["Product Detail"](/storage/assets/User/product_detail.PNG)
##### Make an Order
!["Order Page"](/storage/assets/User/make_an_order.PNG)
##### List of Order
!["List of Orders"](/storage/assets/User/order_list.PNG)
##### Upload Proof of Transfer
!["Proof of Transfer"](/storage/assets/User/upload_bukti.PNG)
##### Order Detail
!["Order Detail"](/storage/assets/User/order_detail.PNG)
##### Edit Order
!["Edit Order"](/storage/assets/User/edit_order.PNG)
##### Submit a Review
!["Submit a Review"](/storage/assets/User/submit_review.PNG)

