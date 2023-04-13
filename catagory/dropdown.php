<?php
    // this is a PHP function.  It will be used to create the HTML
    // for the category drop-down list
    function categoryTree() {
        // create a database connection
        $db = new PDO('mysql:host=localhost;dbname=ecommerce', '
        root', '');
        // create a query to get all the categories from the database
        $query = $db->query("SELECT * FROM categories WHERE parent_id = 0 ORDER BY name ASC");
        // check if there are any categories returned
        if($query->rowCount() > 0) {
            // loop through the categories
            while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                // print out the category name and ID
                echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                // run the function again but pass in the ID of the current category as the parent ID
                categoryTree($row['id'], '---');
            }
        }
    }