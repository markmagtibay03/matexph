<?php
  $companyName = "Matex Planetary Drive International Inc.";
  $address = "123 Main St, Quezon City, Metro Manila, Philippines";
  $phone = "(+63) 2 1234 5678";
  $email = "info@matexphilippines.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matex Philippines - <?php echo $companyName; ?></title>
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
    <section class="contact">
      <h2>Contact Information</h2>
      <p><strong>Address:</strong> <?php echo $address; ?></p>
      <p><strong>Phone:</strong> <?php echo $phone; ?></p>
      <p><strong>Email:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
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
      <li><a href="products.php">List of Products</a></li> <br>
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
