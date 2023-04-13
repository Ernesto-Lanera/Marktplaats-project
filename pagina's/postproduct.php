<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/postproduct.css">
  <link rel="stylesheet" type="text/css" href="../css/navbar.css">

  <title>Document</title>
</head>

<body>
<?php include '../includes/navbar.php' ?>

<div class="postcont">
<div class="postsubcont">
  <h1>Advertentie plaaten</h1>
  
  <form action="../includes/process.php" method="POST" enctype="multipart/form-data">
    <p>Titel van advertentie</p>
    <input type="text" name="article_Name" placeholder="Titel " required><br><br>
    <p>Prijs van product</p>
    <input type="text" name="article_Price" placeholder="Prijs" required><br><br>
    <input type="radio" id="1" name="ophalen_Verzenden" value="1">
    <label for="1">Ophalen</label><br>
    <input type="radio" id="2" name="ophalen_Verzenden" value="2">
    <label for="2">Verzenden</label><br>
    <input type="radio" id="3" name="ophalen_Verzenden" value="3" required>
    <label for="3">Openhalen Of Verzenden</label><br><br>
</div>
<div class="postsubcont">
    <p>Kies advertentie afbeelding</p>

    <input type="file" value="Kies afbeelding" name="f1" required id="uploadInput" /><br><br>
    <img id="imagePreview" style="width:300px;" class="normal" /><br><br>


    <p>Beschrijving van advertentie</p>
    <textarea name="article_Description" placeholder="Beschrijving" required></textarea><br><br>

    <button type="submit" name="submit">Plaatsen</button>
  </form>
</div>
</div>

  <script>

// javascript voor de afbeelding the displayen

let uploadInput = document.getElementById("uploadInput");

uploadInput.onchange = function () {
  let image = new FileReader();
  
  image.onload = function (e) {
    document.getElementById("imagePreview").src = e.target.result;
    };
  image.readAsDataURL(this.files[0]);
};
 
    </script>

</body>

</html>