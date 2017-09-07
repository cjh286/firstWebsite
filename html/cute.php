<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href= "https://info2300.coecis.cornell.edu/users/cjh286sp17/www/p1/css/styles.css"> 
    <title>Cute Styles</title>
</head>
    
<body>
    
    <h2>Cute Character Nails</h2>
    
    <p>These are some of my most adorable designs, most of them were inspired by various animated/movie characters, but some of them are just cute.</p>
    
    <table style="width:100%">
        <!-- I took all of the pictures on this page -->
        <tr>
            <?php $pictures = array("totoro"=>"Totoro", "pooh"=>"Winnie the Pooh", "rabbitcollar"=>"Rabbit with Collars");
            include 'addpic.php';
            ?>
        </tr>
        <tr>
            <?php $pictures = array("bear"=>"Teddy Bear", "umbrella"=>"Umbrella", "animals"=>"Animal Collection");
            include 'addpic.php';
            ?>
        </tr>
    </table>
    
    <form action="cute.php" method="post">
        Did you like these designs?:
        <input type="radio" name="cute" value="Yes"> Yes
        <input type="radio" name="cute" value="No"> No
        <input type="submit" value="Submit" />
    </form>

    
<?php 
    if (isset($_POST["cute"])) {
        $liked=$_POST["cute"];
        if ($liked == "Yes"){
            echo "<p>Awesome!</p>";
        } elseif ($liked == "No"){ 
            echo "<p>:(</p>";
        }
    }
?>

    
    <p>Next: <a href="https://info2300.coecis.cornell.edu/users/cjh286sp17/www/p1/html/misc.php">Misc nails</a></p>
    
    <div id ="navcontainer">
        <ul>
            <?php include 'navi.php' ?>
        </ul>
    </div>
    
</body>
</html>