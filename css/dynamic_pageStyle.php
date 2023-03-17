<?php

include './includes/article.db.inc.php';
header("Content-type: text/css; charset: UTF-8");

?>


.row_container {
    display: flex;
    flex-direction: row;
    align-content: center;
    justify-content: center;
    align-items: flex-start;
    position: relative;
    gap: 15px;
    margin-top: 15px;
}

.content_row {
    background-color: #FFFFFF;
    width: 45%;
    height: 100%;
    display: flex;
    position: relative;
    flex-direction: column;
    box-shadow: 0 1px 2px rgba(0,0,0,.15), 0 -1px 2px rgba(0,0,0,.05);
    border-radius: 4px;
    overflow: hidden;
}

.data_row {
    background-color: #FFFFFF;
    width: 20%;
    display: flex;
    height: 100%;
    position: relative;
    box-shadow: 0 1px 2px rgba(0,0,0,.15), 0 -1px 2px rgba(0,0,0,.05);
    border-radius: 4px;
    overflow: hidden;
}

.article_images img{
    height: 260px;
    width: 400px;
    background-size: cover;
    background-position: center;
    box-shadow: 0 1px 2px rgba(0,0,0,.15), 0 -1px 2px rgba(0,0,0,.05);
}

.aricle_name{
  position: relative;
  width: 60%;
}

.save_article{
  position: relative;
  width: 20%;
  display: flex;
  padding: 5px 20px 5px 20px;
}

.name_container {
  position: relative;
  display: flex;
  width: 100%;
  padding: 15px 20px 2px 20px;
}

.creation_container {
  position: relative;
  display: flex;
  flex-direction: row;
  gap: 50px;
  padding: 0px 20px 5px 20px;
  
}

.imageprice_container {
  position: relative;
  display: flex;
  width: 100%;
  padding: 5px 20px 5px 20px;
}

.price_container {
  position: relative;
  display: flex;
  width: 100%;
  flex-direction: column;
  justify-content: space-around;
  padding: 5px 20px 5px 20px;
}

.article_description {
  position: relative;
  width: 80%;
  padding: 10px 20px 5px 20px;
}

.share_article {
  position: relative;
  width: 100%;
  margin-top: 7px;
  padding: 15px 20px 15px 20px;
  border-top: 1px solid #e5e5e4;
  border-bottom: 1px solid #e5e5e4;
}

.article_id {
  position: relative;
  display: flex;
  width: 100%;
  padding: 15px 10px 10px 20px;
  border-top: 1px solid #e5e5e4;
}

.data {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  padding: 10px 15px 5px 15px;
}

.user_name {
  padding: 0px 0px 5px 0px;
}

.see_more {
    border-bottom: 1px solid #e5e5e4;
    padding: 5px 0px 5px 0px;
}

.button_container {
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    gap: 15px;
    margin-top: 10px;
}

.bericht_button {
  display: flex;
  justify-content: center;
  align-items: center;
  align-content: center;
  width: 90%;
  height: 50px;
  background-color: white;
  border: 1px solid #116db4;
  border-radius: 5px;
  color: #116db4;
}

.website_button {
  display: flex;
  justify-content: center;
  align-items: center;
  align-content: center;
  width: 90%;
  height: 50px;
  background-color: #116db4;
  border: 1px solid white;
  border-radius: 5px;
  color: white;
  margin-bottom: 10px;
}

.website_button {
  background-color: #116db4;
}

.ico_button {
  margin-right: 5px;
}

.fa-sharp.grey   {
  color: grey;
}

.fa-sharp.blue, .user_name{
  color: #116db4;
}
