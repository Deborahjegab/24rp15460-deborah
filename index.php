<?php
  echo "
  <html>
    <head>
      <title>User Registration & Login</title>
      <style>
        /* Center the content on the page */
        body {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
          font-family: Arial, sans-serif;
          background-color: #f4f4f9;
        }

        /* Container for links */
        .links-container {
          text-align: center;
        }

        /* Title styles */
        h1 {
          color: #333;
          font-size: 24px;
          margin-bottom: 20px;
        }

        /* Styles for links */
        a {
          color: #007BFF; /* Blue color */
          text-decoration: none; /* Remove underline */
          padding: 10px 20px;
          font-weight: bold;
          margin: 0 10px;
          border: 2px solid #007BFF;
          border-radius: 5px;
          transition: all 0.3s ease;
        }

        a:hover {
          color: white;
          background-color: #0056b3;
          text-decoration: none; /* No underline on hover */
        }

        /* Styling for the separator */
        .separator {
          margin: 0 15px;
          color: #333;
        }
      </style>
    </head>
    <body>
      <div class='links-container'>
        <h1>Welcome to User Registration & Login</h1>
        <a href='register.php'>Register</a><span class='separator'>|</span><a href='login.php'>Login</a>
      </div>
    </body>
  </html>";
?>
