<?php
  $companyName = "Matex Planetary Drive International Inc.";
  $aboutText = "Matex Philippines Inc. is dedicated to providing superior textile solutions, specializing in fabric manufacturing, garment production, and textile supply for a wide range of industries. We aim to deliver high-quality products while ensuring sustainable practices in all our processes.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matex Philippines- <?php echo $companyName; ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>







<nav>
    <ul>
    </ul>
  </nav>
  <header>
  <div class="container">
    <div style="max-width: 500px;margin: 0 auto;  " class="headbox">
      <h1 style=
      "color: #1569C7;
       font-size: 120px;  
       text-align: center; 
       padding-top: 0px;
       padding-left: 0px;
       padding-bottom: 0px;
       text-shadow: 2px 2px 4px #000000;
       "><i>Matex</i></h1>
      <p style=
      "color: red;
       font-size: 30px;  
       text-align: center; 
       padding-top: 0px;
       padding-left: 0px;
       padding-bottom: 20px;
       text-shadow: 2px 2px 4px #000000;
       "><strong>We Discover Tomorrow</strong></p>
        </div>
    </div>
  </header>
  
  <nav>
    <ul>
    <li><a href="index.php">Home</a></li>
      <li><a href="company.php">Company</a></li>
      <li><a href="department.php">Department</a></li>
      <li><a href="history.php">History</a></li>
      <li><a href="machine.php">Machine</a></li>
      <li><a href="customer.php">Customers</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
  </nav>

  <main>
    <section class="about">
      <h2>About Us</h2>
      <p><?php echo $aboutText; ?></p>
    </section>
  </main>
  
  <footer>
  <nav class="footer">
    <ul>
    <li><a href="index.php">Home</a></li> <br>
    </ul>
    <ul>
      <li><a href="company.php">Visit our Company Profile</a></li> <br>
    </ul>
    <ul>
      <li><a href="department.php">Matex Department</a></li> <br>
    </ul>
    <ul>
      <li><a href="history.php">View our History</a></li> <br>
    </ul>
    <ul>
      <li><a href="machine.php">List of Machines</a></li> <br>
    </ul>
    <ul>
      <li><a href="customer.php">List of Customers</a></li> <br>
    </ul>
    <ul>
      <li><a href="contact.php">Contact Us</a></li>
    </ul>

    <h1 style=
      "color: white;
       font-size: 120px;  
       text-align: center; 
       padding-top: 0px;
       padding-left: 0px;
       padding-bottom: 0px;
       text-shadow: 2px 2px 4px #000000;
       "><i>Matex</i></h1>




  </nav>



    <p>&copy; <?php echo date("Y"); ?> <?php echo $companyName; ?>. All rights reserved.</p>
  </footer>
</body>
</html>
