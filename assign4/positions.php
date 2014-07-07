<?php
    //User tried to access without loggin in.
    $username = $_SESSION['username'];
    if($username == "")
    {
        header("Location:index.php?error=Please login first.");
    }
        $portfolio = getStocks();
        $totValue = 0;
        $watchList = array();
?>
   <table>
                        <tr>
                                <th>Stock Symbol</th>
                                <th>Shares</th>
                                <th>Price</th>
                                <th>Date Added or Last Change</th>
                                <th>Position Value</th>
                        </tr>
    <?php foreach($portfolio as $position) {
                list($name, $shareNum, $lastDate) = explode(",",$position);
        $stockValue = getValue($name);
                $posValue = floatval($shareNum * $stockValue);
                $totValue += $posValue;
                $stockValue = number_format($stockValue,2);
                $posValue = number_format($posValue,2);
                $shareNum = number_format($shareNum,0);
                if (floatval($shareNum) > 0) {
                        echo "<tr><td>" . $name . "</td><td>" . $shareNum . "</td><td>$" . $stockValue . "</td><td>" . $lastDate . " ". $lastTime . "</td><td>$" . $posValue . "</td></tr>";
                } else {
                        array_push($watchList, array($name,$stockValue));
                }
                }
                echo "</table>";

