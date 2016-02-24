<?php
    $agent = getenv("HTTP_USER_AGENT");
if (preg_match("/Win/i", "$agent")){
    $style = "win";
}elseif (preg_match("/Macintosh/i", "$agent")){
    $style = "mac";
}


    $win_style = "<style type=\"text/css\">
        p, ul, ol, li {
            font-family:Arial;
            font-size:10pt;
            font-weight:normal;
        }
        h1 {
            font-family:Impact;
            font-size:24pt;
            font-weight:bold;
            color: green;
        }
        h2{
            font-family:Arial;
            font-size:14pt;
            font-weight:bold;
        }
        strong{
            font-family:Arial;
            font-size:10pt;
            font-weight:bold;
        }
        em {
            font-family:Arial;
            font-size:10pt;
            font-style:italic;
        }
    </style>";
        
    $mac_style = "<style type=\"text/css\">
        p, ul, ol, li{
            font-family:Times;
            font-size:12pt;
            font-weight:normal;
            text-align:center;
        }
        h1{
            font-family:Times;
            font-size:18pt;
            font-weight:bold;
            text-align:center;
        }
        h2{
            font-family:Times;
            font-size:16pt;
            font-weight:bold;
            text-align:center;
        }
        strong{
            font-family:Times;
            font-size:12pt;
            font-weight:bold;
        }
        em {
            font-family:Times;
            font-size:12pt;
            font-style:italic;
        }
    </style>";
    

?>

<!DOCTYPE html>
    
<html>
	<head>
		<title>Platform Matching</title>
		<?php
            if ($style == "win"){
                echo "$win_style";
            }elseif ($style == "mac"){
                echo "$mac_style";
            }
		?>
	</head>
	<body>
		<h1>This is a level 1 heading</h1>
		<h2>Look! A level 2 heading</h2>
		<p>This is a simple paragraph with some 
		<strong>bold</strong> and <em>emphasized</em> text.</p>
	</body>
</html>

