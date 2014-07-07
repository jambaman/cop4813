<?php

// check if stock is already owned
function bought($stock) {
  $portfolio = getStocks(); // get portfolio positions
  $results = array(false,"0"); // initialize return array with false, no shares
  foreach ($portfolio as $position) { // iterate through the stock positions
    if(strpos($position,$stock) !== false) { // if this holding has the $stock string
        list($name, $quantity, $time) = explode(",", $position, 3); //split holding into variables
        $results = array(true,$quantity); // point $results to new array
    }
  }
  return $results; //return array of (stockFound?: Boolean, shares?: integer)
}

// returns array where elements are lines from stockPortfolio.csv
function getStocks() {
    $file="stockPortfolio.csv";
    return file($file);
}

// returns the string value of the last traded price of $stock from Yahoo Finance    
function getValue($stock) {
    // set up the address to check
    $addr = "http://finance.yahoo.com/d/quotes.csv?s=" . $stock . "&f=sl1d1t1c1ohgv&e=.csv";
    // load csv file from Yahoo
    $info = file_get_contents($addr);
    // split contents into list of 3 variables
    list($name, $price, $rest) = explode(",", $info, 3);
    return $price;
}

// returns the integer of shares owned of $stock
function getShares($stock) {
    $portfolio = getStocks();
    $pattern = "/^" . $stock . "/"; //setup regex pattern
    $numShares = 0;
    foreach($portfolio as $position) { // for each stocked held
        if (preg_match($pattern,$position)) { // if the portfolio entry matches
            list($name, $numShares, $time) = explode(",", $position, 3); // split by comma, return 2nd value
        }
    }
    return $numShares;
}
function valid($stock) {
        $valid = false;
        if (floatval(getValue($stock)) > 0) {
                $valid = true;
                }
        return $valid;
}

// not used right now, but might need later
function getPositionValue($stock) {
    $numShares = getShares($stock);
    $value = getValue($stock);
    return floatval($value * $numShares);
}