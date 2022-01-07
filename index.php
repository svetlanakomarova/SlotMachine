<?php
/*
 * name: Svetlana Komarova
 * student number: 991612772
 * assignment: Assignment 3
 * March 31, 2021
 * 
 * This program simulates a simple slot machine.
 */

print ("<!DOCTYPE html>
<html>
    <head>
        <title>Slots!</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link href='css/style.css' rel='stylesheet'>  
        <link href='https://fonts.googleapis.com/css2?family=Lato' rel='stylesheet'>
    </head>
    <body>");
        	
	$apple="<img src='images/1.png' alt='apple' class='image'>";
	$cherry="<img src='images/2.png' alt='cherry' class='image'>";
        $grapes="<img src='images/3.png' alt='grapes' class='image'>";
        $lemon="<img src='images/4.png' alt='lemon' class='image'>";
        $peach="<img src='images/5.png' alt='peach' class='image'>";               
        $pear="<img src='images/6.png' alt='pear' class='image'>";
        $watermelon="<img src='images/7.png' alt='watermelon' class='image'>";
        
        //create an array to represent the possible faces a wheel of a slot machine can land on
        $slots = array("$peach", "$apple","$cherry","$lemon","$grapes","$watermelon","$pear");
         
        //set up a random value - in our case where each wheel will stop
        $stop1=rand(0,6);
	$stop2=rand(0,6);
	$stop3=rand(0,6);
        
        //using the random value pull out image/bar from the array
	$one=$slots[$stop1];
	$two=$slots[$stop2];
	$three=$slots[$stop3];

        echo "<h1 id='header' class='center'>Slots!</h1>\n";
        
            print("<table class='center'>
                <tr>
                    <td>
                        $one
                    </td>
                    <td>
                        $two
                    </td>
                    <td>
                        $three
                    </td>
                    <td>
                        <input class='button' type='button' value='SPIN' onclick=spin()>
                    </td>
                </tr>
            </table>\n");
            
        echo "<div id = 'message' class='center'>";
        
            //compare images/bars and display the result
            if ($one === $two && $one === $three) {            
                echo "Jackpot!";           
            } elseif($one === $two || $one === $three || $two === $three) {           
                echo "Win!";
            } else {           
                echo "<font color=red>You Lose</font>";	
            }
            
        echo "</div>\n";
        
print (
"<script>
function spin() {
    window.location.reload()
};
</script>
        
    </body>
</html>");

