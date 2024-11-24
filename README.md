# Islamic Website - SALATY

A dynamic and interactive Islamic website built using **PHP**, **HTML**, **CSS**, and a **MySQL database**, focusing on prayer times, Zakat calculation, Quran radio, and Islamic resources.

## Features
- **Prayer Times**: Display accurate prayer timings based on location.
- **Quran and Hadith**: Sections for reading Quranic verses and Hadiths.
- **Tasbih Counter**: A digital counter for performing dhikr and tasbih.
- **Fatwa Requests**: Users can ask religious questions and view answered fatwas.
- **Zakat Calculator**: A tool to calculate Zakat based on user inputs for money, gold, silver, and livestock.
- **Quran Radio**: Live streaming of Quran recitation using an API.
- **Islamic Articles**: A collection of educational articles on Islamic topics.
- **User Accounts**: Users can register and log in to save preferences.

## Technologies Used
- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL for managing user accounts, fatwas, and content.
- **API**: Integrated Quran radio streaming.

## How to Set Up
1. Clone the repository:
   ```bash
   git clone <repository-url>
2. Move the files to your server's root directory (e.g., `htdocs` for XAMPP).
3. Create a MySQL database and import the provided `database.sql` file.
4. Update the database connection settings in `config.php`:
    ````bash
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "salaty";
5. Configure the Quran Radio API key in the appropriate file.
6. Start your local server (e.g., XAMPP or WAMP) and open the website:
    ````bash
      http://localhost/salaty

