<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href= "https://info2300.coecis.cornell.edu/users/cjh286sp17/www/p1/css/styles.css"> 
    <title>Cute Styles</title>
</head>
    
<body>
    
    <h2>Miscellaneous Nails</h2>
    
    <p>These are random style nails that do not fit into a specific category. Most of them have a unique technique and are quite complicated to do (especially the glass nails, you need lots of different materials to make them look good).</p>
    
    <table style="width:100%">
        <!-- I took all of the pictures on this page -->
        <tr>
            <?php $pictures = array("greenglass"=>"Glass Nails (Black)", "whiteglass"=>"Glass Nails (Whtie)", "pigglass"=>"Glass Nails (Pink)");
            include 'addpic.php';
            ?>
        </tr>
        <tr>
            <?php $pictures = array("turquoise"=>"Turquoise Stone", "whitemarble"=>"White Marble", "rosestrans"=>"Negative Space Rose");
            include 'addpic.php';
            ?>
        </tr>
    </table>
    
    <form action="misc.php" method="post">
        Did you like these designs?:
        <input type="radio" name="misc" value="Yes"> Yes
        <input type="radio" name="misc" value="No"> No
        <input type="submit" value="Submit" />
    </form>

    
<?php 
    if (isset($_POST["misc"])) {
        $liked=$_POST["misc"];
        if ($liked == "Yes"){
            echo "<p>Awesome!</p>";
        } elseif ($liked == "No"){ 
            echo "<p>:(</p>";
        }
    }
?>
    
    <p>Next: <a href="https://info2300.coecis.cornell.edu/users/cjh286sp17/www/p1/html/end.php">Final Questions</a></p>
    
    <div id ="navcontainer">
        <ul>
            <?php include 'navi.php' ?>
        </ul>
    </div>
    
</body>
</html>