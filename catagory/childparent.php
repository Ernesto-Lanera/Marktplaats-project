<?php
// Include the database configuration file
require 'dbConfig.php';

// Function to build a category tree
function categoryTree($parent_id, $sub_mark){
    // Connect to the database
    global $db;
    // Run the query to get all the categories from the database
    $query = $db->query("SELECT * FROM categories WHERE parent_id = $parent_id ORDER BY name ASC");
   
    // Check if there are any categories returned
    if($query->num_rows > 0){
        // Loop through the categories
        while($row = $query->fetch_assoc()){
            // Print out the category name and ID
            echo '<option value="'.$row['id'].'">'.$sub_mark.$row['name'].'</option>';
            // Run the function again but pass in the ID of the current category as the parent ID
            categoryTree($row['id'], $sub_mark.'---');
        }
    }
}