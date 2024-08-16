<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Alcohol Calculator</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <div class="container">
    <h2>Blood Alcohol Concentration Calculator</h2>
    <form method="POST">
      <label for="weight">Weight:</label>
      <input type="number" id="weight" name="weight" placeholder="Enter your weight" required>

      <label for="unit">Weight Unit:</label>
      <select id="unit" name="unit" required>
        <option value="kg">Kilograms (kg)</option>
        <option value="lbs">Pounds (lbs)</option>
      </select>

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>

      <label for="drinks">Number of Drinks:</label>
      <input type="number" id="drinks" name="drinks" placeholder="Enter number of drinks" required>

      <label for="alcohol_content">Alcohol Content per Drink (grams):</label>
      <input type="number" id="alcohol_content" name="alcohol_content" placeholder="Enter alcohol content per drink"
        required>

      <label for="time_elapsed">Time Elapsed (hours):</label>
      <input type="number" id="time_elapsed" name="time_elapsed" placeholder="Enter time elapsed since drinking started"
        required>

      <button type="submit">Calculate BAC</button>
    </form>

    <div class="output-wrapper">
      <div> Your Blood Concentration is:</div>
      <?php
      $weight = $_POST['weight'];
      $unit= $_POST['unit'];
      $gender = $_POST['gender'];
      $drinks = $_POST['drinks'];
      $alcohol_content= $_POST['alcohol_content'];
      $time_elapsed = $_POST['time_elapsed'];

  

      if($gender == 'female'){
          $gender= 0.66;
      }
      else{
          $gender=0.73;
      }      
      // $b = $weight*$gender;
      $result = (($alcohol_content * 5.14) / ($weight * $gender)) - (0.015 * $time_elapsed);

      echo "BAC= ". $result;

            if ($result = 0.08){
            
              echo "Safe to drive";}
              else{
                
              echo "Not safe to drive";
              }
       ?>
    </div>
  </div>
</body>

</html>