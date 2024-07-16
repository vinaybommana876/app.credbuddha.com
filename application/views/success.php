<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Submission Successful</title>
    <!-- Link to external CSS file -->
    <style>
        /* Inline styles for quick styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #4caf50;
            font-size: 2em;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            line-height: 1.6;
            color: #333333;
            margin-bottom: 20px;
        }

        .button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1em;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #45a049;
        }

        /* styles.css */
    </style>
</head>

<body>
    <div class="container">
        <h1>Form Submission Successful!</h1>
        <p>
            Thank you for submitting the form. Your submission has been received.
        </p>
        <a href="<?php echo base_url('form') ?>" class="button">Back to Home</a>
        <!-- Replace index.html with your homepage -->
    </div>
</body>

</html>