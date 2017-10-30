<?php

$taxRate = 0.075;

$pageNames = array("Menu");
$pageFiles = array("index.php");

$menu = array(
  "TKJ" => array('Dates, locusts and manna pressed between an old testament and a new one. Fun fact: Locusts are high in protein with almost no carbon footprint. Crunchy!', 16.59),
  "PAP" => array('Prunes and goat colostrum, an anti-aging agent and protects against "bad bacteria."', 16.59),
  "TIZ" => array('Zest of what? Activated charcoal!', 16.59),
  "TGG" => array('The Grape Gatsby is cold-slow pressed between headshots of Robert Redford and Leonardo DiCaprio. It\'s very intense.', 26.95),
  "TBP" => array('If I could just get your medical marijuana license.', 17.59)
);

function getMenuEntryName($key){
  switch ($key) {
    case 'TKJ':
      return "The King James";
    case 'PAP':
      return "Prune & Prejudice";
    case 'TIZ':
      return "Infinite Zest";
    case 'TGG':
      return "The Grape Gatsby";
    case 'TBP':
      return "The Berry Potter - our Young Adult drink";
  }
}
?>
