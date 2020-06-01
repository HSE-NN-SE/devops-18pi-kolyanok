<!DOCTYPE html>
<html lang = "en">
<head>
<title>OffensiveAnalytics Demo</title>
</head>
<body>

<h2>OffensiveAnalytics Demo</h2>

<form action="/index.php" method="POST">
  <textarea id="linput" name="linput"></textarea><br><br>
  <input type="submit" value="Submit">
</form> 
<?php

/**
 * A small webpage for demonstrating the work the OffensiveAnalytics class
 * php version 7.1.23
 *
 * @category OffensiveAnalytics
 * @package  OffensiveAnalytics
 * @author   kolyanok <nikolayokunkov@gmail.com>
 * @license  WTFPL - http://www.wtfpl.net/txt/copying/
 * @link     https://kolynaok.ru/matan
 */

require_once "OffensiveAnalytics.php";

$oa = new OffensiveAnalytics();
echo "<p>Result:</p> ";
if (isset($_POST["linput"])) {
    $line = $_POST["linput"];    
    $off = $oa->getOffensive($line);
    echo "Пизда и производные (".count($off[0]).")";
    if (count($off[0])) {
        echo ": <br />";
        foreach ($off[0] as $mat) {
            echo $mat."<br />";
        }
    } else {
        echo "<br />";
    }
    echo "Хуй и производные (".count($off[1]).")";
    if (count($off[1])) {
        echo ": <br />";
        foreach ($off[1] as $mat) {
            echo $mat."<br />";
        }
    } else {
        echo "<br />";
    }
    echo "Блядь и производные (".count($off[2]).")";
    if (count($off[2])) {
        echo ": <br />";
        foreach ($off[2] as $mat) {
            echo $mat."<br />";
        }
    } else {
        echo "<br />";
    }
    echo "Ебать и производные (".count($off[3]).")";
    if (count($off[3])) {
        echo ": <br />";
        foreach ($off[3] as $mat) {
            echo $mat."<br />";
        }
    } else {
        echo "<br />";
    }
}
?>
</body>
</html>
