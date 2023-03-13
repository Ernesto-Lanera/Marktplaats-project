<!doctype html>
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
  </head>
  <body>
    <div class="contact-container">
      <h1>Contact</h1>
      <form method="POST" action="contactdb.php">
        <label for="name">Naam:</label>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="message">Bericht</label>
        <textarea id="message" name="message"></textarea><br>

        <input type="submit" value="Submit">
      </form>
      <p>Hofstraat 13, 1741 CD Schagen</p>
      <p> 0223 611 230</p>
    </div>
  </body>
</html>