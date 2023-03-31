<?php
?>
</head>

<body>
    <?php include './includes/navbar.php' ?>
    <div class="directory">Hier komen de navigatie</div>
    <div class="row_container">
        <div class="content_row">
            <div class="name_container">
                <div class="article_name"><?php echo $article_Name ?></div>
                <div class="save_article"><i class="fa-sharp ico-heart fa-solid fa-heart-circle-plus"></i> Bewaar</div>
            </div>
            <div class="creation_container">
                <div class="watch_counter"><i class="fa-sharp grey fa-regular fa-eye"></i> 40</div><br>
                <div class="total_saved_article"><i class="fa-sharp grey fa-regular fa-heart"></i> 10</div><br>
                <div class="article_creation_date"><i class="fa-sharp grey fa-regular fa-clock"></i> <?php echo $articleCreationDate ?></div><br>
            </div>
            <div class="imageprice_container">
                <div class="article_images"><?php echo '<img src="data:image/jpeg;base64,' . base64_encode($article_Images) . '" />';
                                            ?></div>
                <div class="article_price"><?php echo $article_Price ?></div>
            </div>
        </div>
        <div class="content_row">
            <div class="article_description"><?php echo $article_Description ?></div>
        </div>
        <div class="content_row">
            <div class="article_contact"><?php echo $article_Contact ?></div>
        </div>
        <div class="content_row">
            <div class="article_location"><?php echo $article_Location ?></div>
        </div>
        <?php include './includes/footer.php' ?>
</body>

</html>