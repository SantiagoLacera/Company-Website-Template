<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bingo</title>

        <!-- include the CSS inside the PHP 
            1. use the <style> element to include bingo.css
                a.	Inside the open/close <style> tags nest escaping to PHP
                    i.	include 'bingo.css';
        -->
        <style>
            <?php include 'bingo.css'; ?>
        </style>
        
        <!-- include jQuery library 
            1. use the < script> element to include jquery-2.1.0.js
                a.	Inside the open <script> tag 
                    i.	type="text/javascript" 
                    ii.	src="jquery-2.1.0.js"
        -->
        <script type="text/Javascript" src="jquery-2.1.0.js"></script>
        
        <!-- JavaScript/jQuery function to update FREE space -->
        <script type="text/Javascript">
            
            // Define JavaScript/jQuery function setFree()
            function setFree()
            {
                // Declare loop control variable row initialized to -1
                $row = -1;
                // Use jQuery selector to select "table tr", append function call each(), pass to function each() anonymous function 
                // loop over each table row (tr)
                $("table tr").each(function()
                {
                    // Increment variable row by 1
                    row++;
                    // Declare variable currentRow set equal to jQuery selector $(this)
                    $currentRow = $(this);
                    // if it row 2, then it is the middle
                    // Reference the currentRow, append function find(), pass as an argument "td:eq(2)", append function call text(), pass as an argument "FREE"
                    if (row == 2)
                    {
                        $currentRow.find("td:eq(2)").text("FREE");
                    }
                
                });            
            }
        </script> 
    </head>
    <body>   
        <?php

            // Define constant SIZE with the value of 5
            define("SIZE",5);
            // Define constant BR with the value of "<br />\n"
            define("BR","<br />\n");
            // Declare variable columns set equal to the array constructor
                // Call function range(), passing arguments 1, 15
                // Call function range(), passing arguments 16, 30
                // Call function range(), passing arguments 31, 45
                // Call function range(), passing arguments 46, 60
                // Call function range(), passing arguments 61, 75
            $columns = array(range(1,15), range(16,30), range(31,45), range(46,60), range(61,75));       

            // The range() function creates an array containing a range of elements
            // This function returns an array of elements from low to high
            

            // Declare variable bingo_card set equal to the array constructor
            $bingo_card = array();
            // Iterate for each of the five subarrays in array $columns
            for ($i = 0; $i < SIZE; $i++)
            {
                // Declare variable $random_keys set equal to function call array_rand(), passing arguments
                //     1. array $columns with index of the loop control variable
                //     2. 5
                $random_keys = array_rand($columns[$i], SIZE);
                
                // The array_rand() function returns a random key from an array, or it returns an array of random keys if you specify that the function should return more than one key.
                    // array is required, specifies an array 
                    // number is optional, specifies how many random keys to return
                
                
                // Declare variable $random_values set equal to function call array_intersect_key(), passing arguments:
                //    1. array $columns with index of the loop control variable
                //    2. function call array_flip(), passing variable $random_keys
                $random_values = array_intersect_key($columns[$i], array_flip($random_keys));

                // The array_intersect_key() function compares the keys of two (or more) arrays, and returns the matches.
                // The array_flip() function flips/exchanges all keys with their associated values in an array.
                                
                
                // Set variable $bingo_card equal to function call array_merge() passing arguments
                //      1. variable $bingo_card
                //      2. variable  $random_values
                 
                $bingo_card = array_merge($bingo_card, $random_values);
                // The array_merge() function merges one or more arrays into one array.
            }

            // Build the HTML    
            // display as an <h1> the word Bingo using class 'title'        
            echo "<h1 class='title'>Bingo</h1>";
            // create a <div> with the id 'board'
            echo "<div id='board'>";
                // create a <table> with class 'container' 
            echo  "<table class='container'>";
                    // loop through the 5 rows 
                    for ($i = 0; $i < SIZE; $i++)
                    {
                        // create a <tr> with class 'row'
                        echo "<tr class='row'>";
                            // create a <td> with class 'data', concatenate variable $bingo_card with index of the loop control variable 
                            echo "<td class='data'>" . $bingo_card[$i] . "</td>";
                            // create a <td> with class 'data', concatenate variable $bingo_card with index of the loop control variable + 5 
                            echo "<td class='data'>" . $bingo_card[$i+5] . "</td>";
                            // create a <td> with class 'data', concatenate variable $bingo_card with index of the loop control variable  + 10
                            echo "<td class='data'>" . $bingo_card[$i+10] . "</td>";
                            // create a <td> with class 'data', concatenate variable $bingo_card with index of the loop control variable + 15
                            echo "<td class='data'>" . $bingo_card[$i+15] . "</td>";
                            // create a <td> with class 'data', concatenate variable $bingo_card with index of the loop control variable + 20
                            echo "<td class='data'>" . $bingo_card[$i+20] . "</td>";
                        // create the closing </tr> for the row
                        echo "</tr>";
                    }
                    
                    // Call JavaScript function setFree() to update the FREE space
                    echo "<script type='text/Javascript'>setFree();</script>";
                    

                // create the closing </table> for the table
                echo "</table>";
            // create the closing </div> for id='board'
            echo "</div>";
        ?>       
    </body>
</html>      