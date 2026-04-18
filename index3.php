<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Layout</title>
    <style>
        body {
            margin: 0;
            font-family: sans-serif;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center; /* Centers items */
            padding: 10px 20px;
            background-color: #7fc26f;
            border-bottom: 2px solid #ddd;
            position: relative; /* Allows absolute positioning of logo */
        }

        .logo {
            position: absolute;
            left: 20px; /* Positions logo on the left */
            max-height: 80px; /* Adjust size as needed */
            width: 80px;
        }

        .site-name {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            color: #333;
        }
    </style>
</head>
<body>

    <header class="header">
        <!-- Logo on the left -->
        <img src="/assets/images/logo.png" alt="logo" class="logo">
        
        <!-- Name in the center -->
        <h1 class="site-name">Company Name</h1>
    </header>

    <nav>
        <ul>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </ul>
    </nav>
</body>
</html>
