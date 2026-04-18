<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Navigation Bar</title>
<style>
    /* Basic Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    /* Navbar Container */
    .navbar {
        display: flex;
        justify-content: space-between; /* Pushes items to ends */
        align-items: center; /* Vertically centers items */
        background-color: #484097;
        padding: 10px 20px;
        color: white;
    }

    /* Logo Section (Left) */
    .nav-logo img {
        height: 60px; /* Adjust based on your logo */
        vertical-align: middle;
    }

    /* Name Section (Center) */
    .nav-name {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        font-size: 20px;
        font-weight: bold;
        color: white;
    }

    /* Links Section (Right) */
    .nav-links {
        display: flex;
        list-style: none;
        gap: 15px; /* Spacing between links */
    }

    .nav-links a {
        text-decoration: none;
        color: white;
        font-size: 16px;
        padding: 8px 12px;
        transition: 0.3s;
    }

    .nav-links a:hover {
        background-color: #120322;
        border-radius: 4px;
    }

    /* Responsive Design for Mobile */
    @media (max-width: 768px) {
        .navbar {
            flex-direction: column;
            gap: 10px;
        }
        .nav-name {
            position: static;
            transform: none;
        }
        .nav-links {
            flex-direction: column;
            text-align: center;
            gap: 5px;
        }
    }
</style>
</head>
<body>

<nav class="navbar">
    <!-- Logo (Left) -->
    <div class="nav-logo">
        <a href="#">  <img src="/assets/images/logo.png" alt="logo" class="logo"></a>
    </div>

    <!-- Name (Center) -->
    <div class="nav-name">Website Name</div>

    <!-- Links (Right) -->
    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
    </ul>
</nav>

</body>
</html>
