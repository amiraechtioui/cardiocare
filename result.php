<?php
// Get form data
$age = $_POST['age'];
$bloodPressure = $_POST['blood-pressure'];
$cholesterol = $_POST['cholesterol'];
$smoking = $_POST['smoking'];
$diabetes = $_POST['diabetes'];

// Simple logic to calculate the risk (you can modify this to be more accurate)
$risk = 0;

if ($age > 45) {
    $risk += 1;
}

if ($bloodPressure > 130) {
    $risk += 1;
}

if ($cholesterol > 200) {
    $risk += 1;
}

if ($smoking == 'yes') {
    $risk += 1;
}

if ($diabetes == 'yes') {
    $risk += 1;
}

// Determine the risk level based on the score
if ($risk >= 4) {
    $riskLevel = "High Risk";
} elseif ($risk == 3) {
    $riskLevel = "Moderate Risk";
} else {
    $riskLevel = "Low Risk";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diagnosis Result - CardioCare</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>CardioCare</h1>
    <nav>
      <a href="index.html">Home</a>
      <a href="diagnose.html">Diagnosis</a>
      <a href="about.html">About</a>
      <a href="contact.html">Contact</a>
    </nav>
  </header>

  <section class="result-container">
    <h2>Your Cardiovascular Risk Level</h2>
    <p>Your result indicates that you are at <strong><?php echo $riskLevel; ?></strong> for cardiovascular diseases.</p>
    <p>We recommend consulting with a healthcare professional for further analysis.</p>
    <a href="diagnose.html" class="btn">Retake Assessment</a>
  </section>

  <footer>
    <p>© 2025 CardioCare | All rights reserved.</p>
  </footer>
</body>
</html>
