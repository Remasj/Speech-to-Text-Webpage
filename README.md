# Speech-to-Text-Webpage
# Project Overview
This project is a web-based application that converts speech to text using modern web technologies. The user inputs audio through the microphone which is then read by the application and transcribed into text using a speech-to-text service. This application uses the Web Speech API for speech recognition and PHP with MySQL for storing the transcriptions in a database.

__Features:__
- Record speech using the browser's built-in microphone.
  
- Display real-time transcription of the speech.
  
- Save transcriptions to a MySQL Database.



__Softwares Used:__

- Visual Studio Code for coding 
- XAMPP for the Apache Web Server and MYSQL Database

# Files Used

__`index.html`:__
The main HTML file that provides the user interface for the application. This is the frontend for the webpage where users can interact with the application. It includes a button to start speech recognition and a section to display the transcribed text. I used HTML with embedded CSS code for styling.

__`app.js`:__
JavaScript file that handles the speech recognition process. It uses the Web Speech API to capture and transcribe spoken words which are then sent to the server for storage using the Fetch API.

__`save_input.php`:__
The backend for this application; PHP script that processes POST requests from the frontend containing transcriptions. It also connects to a MySQL database and inserts the transcriptions into the `user_input` table.



# Webpage 

<img width="1438" alt="Screenshot 2024-08-07 at 5 56 11 PM" src="https://github.com/user-attachments/assets/fbd9c50d-bce5-4d75-9b6e-de8425195fe7">

# Database 'speech'

<img width="1429" alt="Screenshot 2024-08-07 at 6 07 43 PM" src="https://github.com/user-attachments/assets/8de55809-0c9c-4d53-8667-2d4d44cede62">

__Database structure:__

`user_input` Table

MySQL table designed to store transcriptions. It includes the following columns:

- `id`: Auto-incrementing primary key.
  
- `input_text`: Text column to store the transcription.
  
- `timestamp`: Timestamp of when the transcription was recorded.
