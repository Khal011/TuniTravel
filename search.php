









<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TuniTravel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel = "stylesheet" href = "font/fonts.css">
        <link rel = "stylesheet" href = "css/final.css">
    </head>
    <body>
        
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.html" class = "site-brand">
                    Tuni<span>Travel</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "index.html" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "gallery.html" class = "nav-link">Gallery</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "about.html" class = "nav-link">About</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "contact.html" class = "nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        


        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1 style="margin-top: 30px;">Search Results:</h1>
                </div>
                <div class = "header-form">





<?php 

include "testphp.php";


   $destination = $_GET['destination'];
   $price= $_GET['price'];
   $date= $_GET['date'];
   $sql = "SELECT * FROM search WHERE destination LIKE '%$destination%' AND price<=$price AND date>=$date";

$result = $link->query($sql);
?>


<table class="table" border="1" >
  <tr>
     <th>Destination</th>
     <th>Date</th>
     <th>Price</th>
  </tr>
  <?php while( $row = $result->fetch_object() ): ?>
    <tbody>
    <tr>
        
     <td><?php echo $row->destination ?></td>
     <td><?php echo $row->date ?></td>
     <td><?php echo $row->price ?></td>
  </tr>

  <?php endwhile; ?>
  </tbody>
</table>


</div>
                </div>
            </div>
        </header>
       
  </body>
  </html>