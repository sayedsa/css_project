<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="/assets/css/style.css"> -->
  <title>Coding</title>
  <script src="https://kit.fontawesome.com/94b32fb95f.js" crossorigin="anonymous"></script>

  <style>
    .articles {
      text-align: center;
      display: block;
      background-color: lightblue;
      margin-left: 20px;
      margin-left: auto;
      margin-right: auto;
    }

    .single-article {
      /* background-color: lightgreen; */

      padding: 10px;
      list-style-type: none;

      margin-top: 15px;
      margin-right: 15px;
      margin-left: 20px;

      display: inline-block;
      width: 200px;
      height: 250px;
      text-align: center;
      background-color: blueviolet;
      border-radius: 30px;
      text-align: center;



    }

    ul div .single-article {}

    .nav-bar ul {
      list-style-type: none;
      padding: 10px;
      margin: 0px;
      font-weight: bold;
      background-color: lightgreen;
      overflow: hidden;
      display: flexbox;

    }

    .nav-bar a {


      color: black;
      text-decoration: none;
      padding: 15px;
      display: block;
      float: left;
    }


    .nav-bar ul li a:hover {
      background-color: grey;
      cursor: pointer;

    }





    .logo {
      width: 100px;
      height: auto;

      margin-left: 50%;
      

    }

    .site-name {
      margin: 0;
      text-align: center;
  
    }
 .nav-bar {
     
      margin-top: 15px;;
     
    }
  
  </style>
</head>


<body>

  <section>

  

    <nav class="nav-bar">
       
         <h1 class="site-name">Company Name</h1>
          <img src="/assets/images/logo.png" alt="logo" class="logo">
      <ul>
         
        <li><a href="">Home</a></li>
        <li><a href="">Contact Us</a></li>
        <li> <a href="">Login</a></li>
        <li><a href="">Register</a></li>

      </ul>
    </nav>


  </section>
  <br>
  <br>
  <section>
    <h1 class="articles"> Articles</h1>
    <ul>
      <div class="single-article">
        <li>
          <h2>Article 1</h2>
        </li>
      </div>

      <div class="single-article">
        <li>
          <h2>Article 2</h2>
        </li>
      </div>

      <div class="single-article">
        <li>
          <h2>Article 3</h2>
        </li>
      </div>


    </ul>



    <article>

      <p>
        Lorem Ipsum is dummy text used to fill layouts in graphic design, publishing, and web development, allowing designers to focus on visual elements without distraction from readable content. Its purpose is to simulate natural text flow, making layouts appear realistic while the final content is not yet available
      </p>
    </article>
  </section>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>