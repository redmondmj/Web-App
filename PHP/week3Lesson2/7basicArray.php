<!DOCTYPE html>
<html>
<head>
    <title>
    Basic Array
    </title>
</head>

<body>

    <h1>Basic Array</h1>

    <?php

        //simply assign values to array
        $camelPop[1] = "Somalia";
        $camelPop[2] = "Sudan";
        $camelPop[3] = "Mauritania";
        $camelPop[4] = "Pakistan";
        $camelPop[5] = "India";

        //output array values
        print "<h3>Top Camel Populations in the World</h3>\n";

        // end for loop
        for ($i=1; $i<=5; $i++){
            print "$i: $camelPop[$i]<br>\n";
        }

        print "<i>Source: <a href = http://www.fao.org/ag/aga/glipha/index.jsp> Food and Agriculture Organization of the United Nations</a></i>\n";

        //use array function to load up array


        // notice the use of the count function to detect the size of the array
        print "<h3>Binary numbers</h3>\n";

        // end for loop

    ?>


</body>
</html>



