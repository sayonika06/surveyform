<?php

$insert=false;

if(isset($_POST['name'])){
      $server = "localhost:8111";
      $username = 'root';
      $password = '';

      // Create connection
      $conn = mysqli_connect($server, $username, $password);

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      // echo "Connected successfully";
      
        $name=$_POST['name'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
        $occupation=$_POST['occupation'];
        $how_often=$_POST['how_often'];
        $Purpose=$_POST['Purpose'];
        $Topic=$_POST['Topic'];
        $hour_per_day=$_POST['hour_per_day'];
        $def_browser=$_POST['def_browser'];
        $sql="INSERT INTO `survey`.`survey` ( `name`, `age`, `gender`, `occupation`, `how_often`, `Purpose`, `Topic`, `hour_per_day`, `def_browser`) VALUES ('$name', '$age', '$gender', '$occupation', '$how_often', '$Purpose', '$Topic', '$hour_per_day', '$def_browser');";
   
    

      

      if($conn->query($sql) == true){
        // echo "Successfully inserted";
        $insert=true;
      }

      $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        input[type=text] {
            width: 100%;
        }

        input {
            color: black;
            border: 0px;

        }

        input:focus {
            outline: none !important;
            border-color: #719ECE;
            box-shadow: 0 0 10px #719ECE;
        }

        input[type=submit] {
            display: block;
            margin: auto;
            padding: 10px 15px;
            border-radius: 10px;
            font-weight: bold;
        }

        .container {

            width: 30%;
            margin: auto;
            background-color: rgb(0, 0, 0);
            opacity: 0.79;
            padding: 20px;
        }

        @media only screen and (max-width: 1624px) {
            .container {
                width: 40%;
                height: 750px;
            }
        }

        @media only screen and (max-width: 1322px) {
            .container {
                width: 50%;
                height: 750px;
            }
        }

        @media only screen and (max-width: 1059px) {
            .container {
                width: 80%;
                height: 780px;
            }
        }

        @media only screen and (max-width: 686px) {
            .container {
                width: 100%;
                height: 780px;
            }
        }

        @media only screen and (max-width: 370px) {
            .container {
                width: 100%;
                height: 820px;
                margin-right: 20px;
            }
        }

        @media only screen and (max-width: 300px) {
            .container {
                width: 100%;
                height: 870px;
                margin-right: 20px;
            }
        }

        @media only screen and (max-width: 600px) {
            input[type=text] {
                width: 90%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to the Survey</h1>

        <form action="index.php" method="post">

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" /><br />
            <br />
            <label for="age">Age:</label><br>
            <input type="text" id="age" name="age" /><br />
            <br />
            <label for="gender">Gender:</label><br>
            <input type="text" id="gender" name="gender" /><br />
            <br />

            <label for="occupation">Occupation:</label><br>
            <input type="text" id="occupation" name="occupation" /><br />
            <br />

            <label for="how_often">1.How often you use your computer?</label>
            <input type="text" id="how_often" name="how_often" /><br />
            <br />

            <label for="Purpose">2.What do you use the computer for?</label>
            <input type="text" id="Purpose" name="Purpose" /><br />
            <br />

            <label for="Topic">3.What is the most common topic of conversation amongst your friends? </label>
            <input type="text" id="Topic" name="Topic" /><br />
            <br />






            <label for="hour_per_day">4.How many hours a day would you spend on Internet?</label>
            <input type="text" id="hour_per_day" name="hour_per_day" /><br />
            <br />



            <label for="def_browser">5.Which is your default browser?</label>
            <input type="text" id="def_browser" name="def_browser" /><br />




            <br>


            <br>

            <input type="submit" value="Submit" name="Submit">
        </form>
        <?php
        if($insert==true)
        {
         echo "<p style='color:white'> Thanks for submitting. Your response has been recorded!</p>";
        }
        ?>

    </div>

</body>

</html>