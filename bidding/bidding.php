<?php
class Bid {
  private $pdo = null;
  private $stmt = null;
  public $error = "";
  function __construct () {
    $this->pdo = new PDO(
      "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
      DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }
 
  function __destruct () {
    if ($this->stmt!==null) { $this->stmt = null; }
    if ($this->pdo!==null) { $this->pdo = null; }
  }
 
  function query ($sql, $data=null) {
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute($data);
  }
 
  function getItem ($id) {
    $this->query("SELECT * FROM `auction_items` WHERE `item_id`=?", [$id]);
    $item = $this->stmt->fetch();
    if (!is_array($item)) { return null; }
 
    $this->query("SELECT MAX(`bid_amount`) FROM `auction_bids` WHERE `item_id`=?", [$id]);
    $item["highest"] = $this->stmt->fetchColumn();
    if (!is_numeric($item["highest"])) { $item["highest"] = 0; }
    $item["min"] = $item["highest"] + $item["bid_min"];
 
    return $item;
  }
 
  function setBid ($iid, $uid, $amount) {
    $item = $this->getItem($iid);
    if ($item===null) {
      $this->error = "Invalid Item";
      return false;
    }
 
    if (isset($item["bid_end"]) && strtotime("now") >= strtotime($item["bid_end"])) {
      $this->error = "Bieding is afgelopen";
      return false;
    }
 
    if ($amount < $item["min"]) {
      $this->error = "Bied astublieft minimaal " . $item["min"];
      return false;
    }
 
    $this->query(
      "REPLACE INTO `auction_bids` (`item_id`, `user_id`, `bid_amount`) VALUES (?,?,?)",
      [$iid, $uid, $amount]
    );
    return true;
  }
}
 
define("DB_HOST", "20.224.252.175");
define("DB_NAME", "marktplaats");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "marktplaats4b");
define("DB_PASSWORD", "password");
 
$_BID = new Bid();
?>