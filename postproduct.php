<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="process.php" method="POST">
            <input type="text" name="prod_Title" placeholder="prod_Title van uw post" required><br>
            <textarea name="prod_Description" placeholder="Product beschrijving" required></textarea><br>
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
</body>
</html>