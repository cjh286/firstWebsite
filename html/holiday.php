<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href= "https://info2300.coecis.cornell.edu/users/cjh286sp17/www/p1/css/styles.css"> 
    <title>Holiday</title>
</head>
    
<body>
    
    <h2>Holiday Nail Styles</h2>
    
    <p>The holidays are one of the greatest times for nail styles. Christmas and Halloween theme nails are some of the most fun to design.</p>
    
    <table style="width:100%">
        <!-- I took all of the pictures on this page -->
        <tr>
            <?php $pictures = array("christmas1"=>"Stripes+Santa Bellies", "christmas2"=>"Roommate + Me", "christmas3" =>"Holly Leaves and French Nails");
            include 'addpic.php';
            ?>
        </tr>
        <tr>
            <?php $pictures = array("halloween"=>"Halloween", "newyears"=>"New Year's Eve", "valentine" => "Valentine's Day");
            include 'addpic.php';
            ?>
        </tr>
    </table>
    
    <form method="post">
        Which designs did you like?
            <input type="checkbox" name="holiday[]" value="1. Stripes+Santa Bellies"> 1. Stripes+Santa Bellies
            <input type="checkbox" name="holiday[]" value="2. Roommate+Me"> 2. Roommate+Me
            <input type="checkbox" name="holiday[]" value="3. Holly Leaves French Nails"> 3. Holly Leaves French Nails
            <input type="checkbox" name="holiday[]" value="4. Halloween"> 4. Halloween
            <input type="checkbox" name="holiday[]" value="5. New Year's Eve"> 5. New Year's Eve
            <input type="checkbox" name="holiday[]" value="6. Valentine's Day"> 6. Valentine's Day
            <input type="submit" value="Submit" />
    </form>

<?php
    if (isset($_POST['holiday'])) {
        $checked = $_POST['holiday'];
        echo "<p>You checked: </p>";
        for($x=0; $x < count($checked); $x++){ 
            echo "<p>$checked[$x]</p>";
        }
        echo "<p>Thanks for your input!</p>";
    } else {
        echo "<p>Please select at least one </p>";
    }
?>

    <p>Next: <a href="https://info2300.coecis.cornell.edu/users/cjh286sp17/www/p1/html/cute.php">cute character nails</a></p>
    
    <div id ="navcontainer">
        <ul>
            <?php include 'navi.php' ?>
        </ul>
    </div>
    
</body>
</html>