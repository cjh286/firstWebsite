<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type ="text/css" href= "https://info2300.coecis.cornell.edu/users/cjh286sp17/www/p1/css/styles.css"> 
        <title>Claire Han</title>
    </head>
    
    <body>
        <img class="header" src="https://info2300.coecis.cornell.edu/users/cjh286sp17/www/p1/img/heading.jpg" alt="Heading"><!-- I took this photo -->
        <h1>Claire's Nail Art</h1>
        
        <div id ="navcontainer">
            <ul>
                <?php include 'navi.php' ?>
            </ul>
        </div>

        <p>
            Claire's Nail Art:<br>
            <br>
            Here are some of my best nail art creations, all done in the past 3 years.<br>
            <br>
            The designs were inspired by different movie characters, photographs of other people's designs, and other things I enjoy.<br>
            <br>
            All of the photographs are of my own hand (I actually paint both hands, which is actually really hard to do, so I like to brag), and I took them on my own.
        </p>
    
        <form method="post">
            Please enter your name:
            <input type="text" name="username" placeholder="Firstname Lastname">
            <input type="submit" value="Click to submit">
        </form>

        <?php
        if (isset($_POST["username"])){
            $user = $_POST["username"];
            if (preg_match("/^[a-zA-Z'\s\-]+$/", $user)){
                echo "<p> Hi, $user! Welcome to my webpage!</p>";
            } else {
                echo "<p> Please enter a valid name (no numbers or symbols)</p>";
            }
        } else {
            echo "";
        }  
        ?>
    
        <form method="post">
            How much do you know about nail art?
            <select name="nailart_knowledge">
                <option value="0">None</option>
                <option value="1">A little</option>
                <option value="2">Some</option>
                <option value="3">A lot</option>
                <option value="4">Professional</option>
            </select>
                <input type="submit" value="Submit">
        </form>
    
        <?php 
        if (isset($_POST["nailart_knowledge"])) {
            $select = $_POST["nailart_knowledge"];
        
            if ($select == "0"){
                echo "<p> Sorry, I hope you still find this interesting...</p>";
            } elseif($select == "1"){
                echo "<p> Now you can learn more about it </p>";
            } elseif($select == "2"){ 
                echo "<p> Cool, hope you like this website  </p>";
            } elseif($select == "3"){ 
                echo "<p> Yay!! We share a hobby! </p>";
            } elseif($select == "4"){ 
            echo "<p> Show me some of your designs!! </p>";
            }
        } else {
            echo "";
        }   
        ?>
    
        <p>Next: <a href="https://info2300.coecis.cornell.edu/users/cjh286sp17/www/p1/html/holiday.php">Holiday Nails</a></p>
    
    </body>
</html>


