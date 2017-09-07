<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href= "https://info2300.coecis.cornell.edu/users/cjh286sp17/www/p1/css/styles.css"> 
    <title>End</title>
</head>
    
<body>
    
    <h2>The End</h2>
    
    <p>I hope you liked looking at my pictures. Just one last question to finish everything up.</p>
    
    <form method="post">
        What did you think about the designs?<br><br>
        <textarea rows="5" cols="100" name="end" placeholder="Enter opinion here"></textarea><br>
        <input type="submit" value="Submit" />
    </form>
    
    <?php 
    if (isset($_POST["end"])) {
        $answer = $_POST["end"];
        echo "<p> You said: <br> $answer </p>";
        echo "<p>Thanks for your input!!</p>";
        echo "<h2>FINISHED</h2>";
    }
    ?>
    
    <div id ="navcontainer">
        <ul>
            <?php include 'navi.php' ?>
        </ul>
    </div>

</body>
</html>