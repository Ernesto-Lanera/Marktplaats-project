<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="process.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="article_Name" placeholder="Naam van uw post" required><br>
    <input type="text" name="article_Price" placeholder="Prijs van uw post" required><br>
    <input type="radio" id="1" name="ophalen_Verzenden" value="1">
    <label for="1">Ophalen</label><br>
    <input type="radio" id="2" name="ophalen_Verzenden" value="2">
    <label for="2">Verzenden</label><br>
    <input type="radio" id="3" name="ophalen_Verzenden" value="3">
    <label for="3">Openhalen Of Verzenden</label><br>


    <textarea name="article_Description" placeholder="Product beschrijving" required></textarea><br>
    <select>
      <option value="">c1</option>
      <option value="">c2</option>
      <option value="">c3</option>
      <option value="">c4</option>
      <option value="">c5</option>
      <option value="">c6</option>
    </select><br><br>
    <button type="submit" name="submit">Verzenden</button>
  </form>

  
  <?php



?>
</body>

</html>