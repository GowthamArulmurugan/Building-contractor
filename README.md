
# Building Contractor Booking Site

## Overview

Building Contractor Booking Site is a web-based platform developed in PHP that facilitates the booking and management of construction services. The site provides users with information about the company, its projects, and customer testimonials. Users can view featured projects and recent site work, and contact the company for more details.

## Features

- **Home Page**: Introduction to the company and its services.
- **About Us**: Information about the company, its history, and the services offered.
- **Projects Timeline**: A timeline showcasing completed projects.
- **Featured Projects**: A gallery of highlighted projects.
- **Testimonials**: Customer reviews and feedback.
- **Photo Gallery**: Images of current site work.
- **Social Media Integration**: Links to the company's social media pages.
- **Contact Us**: Contact information and a link to the admin page for inquiries.
- **Live Chat**: Integration with JivoSite for live customer support.

## Installation

### Prerequisites

- Web server (Apache, Nginx, etc.)
- PHP 7.x or higher
- MySQL or any other compatible database
- Composer (for dependency management)

### Steps

1. **Clone the repository**:
    ```sh
    git clone https://github.com/yourusername/building-contractor-booking-site.git
    cd building-contractor-booking-site
    ```

2. **Install dependencies**:
    ```sh
    composer install
    ```

3. **Database setup**:
    - Create a database for the project.
    - Import the SQL schema into your database.
    - Update the database configuration in the `config.php` file.

4. **Configure the web server**:
    - Point your web server's document root to the `public` directory of the project.
    - Ensure `mod_rewrite` is enabled if using Apache.

5. **Run the application**:
    - Start your web server and access the site through your browser.

## File Structure

- `index.php`: Main entry point of the application.
- `pagelib.php`: Contains reusable functions such as `TopLink()`, `Menu()`, `Footer()`, etc.
- `config.php`: Configuration file for database and other settings.
- `public/`: Contains public assets such as CSS, JavaScript, and images.
- `templates/`: HTML templates for different parts of the site.
- `css/`: Stylesheets for the site.
- `js/`: JavaScript files for the site.
- `images/`: Images used in the site.
- `admin/`: Admin panel for managing inquiries and site content.

## Usage

- Visit the home page to see an overview of the company.
- Navigate to the "About Us" section to learn more about the company.
- View the "Projects Timeline" to see completed projects.
- Explore the "Featured Projects" gallery to view highlighted work.
- Read "Testimonials" to hear from satisfied customers.
- Check out the "Photos" section to see images of ongoing work.
- Use the contact form or the live chat feature for inquiries.

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Create a new Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any questions or suggestions, please reach out to us at contact@building-construction.com.
