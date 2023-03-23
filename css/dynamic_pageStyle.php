<?php

include './includes/article.db.inc.php';
header("Content-type: text/css; charset: UTF-8");

?>

html, body{
  margin: 0 !important;
}

.row_container {
    display: flex;
    flex-direction: row;
    align-content: center;
    justify-content: center;
    align-items: flex-start;
    position: relative;
    gap: 15px;
    margin-top: 15px;
    width: 100%;
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
    object-fit: cover;
    object-position: center;
    box-shadow: 0 1px 2px rgba(0,0,0,.15), 0 -1px 2px rgba(0,0,0,.05);
}

.article_name{
  position: relative;
  width: 85%;
  font-family: 'bree Serif', serif;
  font-size: 1.2rem;
  color: #2d3c4d;
}

.save_article{
  position: relative;
  width: 15%;
  display: flex;
  padding: 5px 9px 5px 9px;
  font-family: 'bree Serif', serif;
  border: 1px solid #116db4;
  color: #116db4;
  border-radius: 5px;
  justify-content: center;
  align-items: center;
}

.name_container {
  position: relative;
  display: flex;
  width: 90%;
  padding: 15px 20px 2px 20px;
}

.creation_container {
  position: relative;
  display: flex;
  flex-direction: row;
  gap: 20px;
  padding: 5px 20px 5px 20px;
  font-family: 'roboto Serif', serif;
  color: #4b6179;
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
  justify-content: flex-start;
  padding: 5px 20px 5px 20px;
  gap: 10px;
}

.article_price{
  font-family: 'bree Serif', serif;
  font-size: 1.5rem;
  color: #2d3c4d;
}

.article_description {
  position: relative;
  width: 80%;
  font-family: Roboto,sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 18px;
  padding: 5px 20px 5px 20px;
}

.share_article {
  display: flex;
  position: relative;
  width: 100%;
  margin-top: 7px;
  margin-right: 7px;
  padding: 10px 20px 10px 20px;
  border-top: 1px solid #e5e5e4;
  border-bottom: 1px solid #e5e5e4;
  font-family: Roboto,sans-serif;
  font-weight: 550;
  color: #2d3c4d;
  align-items: center;
  justify-content: flex-start;
  align-content: center;
  flex-direction: row;
  font-size: 16px;
  line-height: 22px;
}

.share_header {
display: flex;
font-size: 0.95rem;
} 

.article_id {
  position: relative;
  display: flex;
  width: 100%;
  padding: 15px 10px 10px 20px;
  border-top: 1px solid #e5e5e4;
  color: #4b6179;
  flex-grow: 1;
  font-family: Roboto,sans-serif;
  font-size: 14px;
  font-weight: 400;
}

.data {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  padding: 10px 15px 5px 15px;
  gap: 10px;
}

.follow_user {
  border: 1px solid #116db4;
  border-radius: 5px;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  float: right;
  margin-right: 8px;
  margin-top: 8px;
}

.follow_user:hover, .save_article:hover, .bericht_button:hover{
  background-color: #dde5f4;
}

.user_name {
  padding: 0px 0px 5px 0px;
  font-family: Roboto,sans-serif;
  font-size: 16px;
  font-weight: 400;
  line-height: 22px;
  width: 100%;
}

.user_name_container {
  width: 60%;
  margin: 0px;
}

.user_active_since {
  color: #4b6179;
  margin-bottom: 8px;
  font-family: Roboto,sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 22px;
}

.user_location, .user_telephone {
  font-family: Roboto,sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 18px;
  color: #116db4;
}

.see_more {
    border-bottom: 1px solid #e5e5e4;
    padding: 5px 0px 5px 0px;
    font-family: Roboto,sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 18px;
    color: #116db4;
    width: 200%;
}

.button_container {
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    gap: 15px;
    margin-top: 10px;
    width: 90%;
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

.ico_button, .ico-heart {
  margin-right: 5px;
}

.fa-sharp.grey   {
  color: #4b6179;
  margin-right: 5px;
}

.fa-sharp.blue, .user_name{
  color: #116db4;
}

.share_ico {
margin-left: 10px;
margin-right: 10px;
cursor: pointer;
}

.ico_location {
  margin-right: 10px;
}

.bold {
  font-family: Roboto,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 22px;
}