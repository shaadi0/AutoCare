<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Care</title>
    <link rel="icon" type="image" href="image/titlebar.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="driverinterface.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo"><img src="image/logo.png" ></a>


        <div class="icons">
            <div id="login-btn" class="fas fa-user-circle"></div>
        </div>

    </div>

   
</header>

<!-- header section ends -->




<!-- newsletter section starts -->

<section class="newsletter">

    <form action="">
        <img src="image/logo.png" >
        
    </form>

</section>

<!-- newsletter section ends -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>Customer Bookings </span> </h1>

</section>

<table class="table">
        <thead>
			<tr>
				<th>Customer Name</th>
				<th>Location</th>
                <th>Mobile Number</th>
				<th>Date</th>
				<th>Time</th>
				
		</thead>
        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "test";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM booking";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["FullName"] . "</td>
                    <td>" . $row["Location"] . "</td>
                    <td>" . $row["PhoneNumber"] . "</td>
                    <td>" . $row["Date"] . "</td>
                    <td>" . $row["Time"] . "</td>
                
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>

        
    </table>
















<!-- footer section starts  -->

<section class="footer">

    <div class="credit"> created by <span>Group 18</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->


</body>
</html>