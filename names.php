<?php 
$names = ['James','Michelle','John']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="">
    <h1>names</h1>
    <ul>
       <?php foreach($names as $name) {?>
        <li><?= $name ?></li>
        

      <?php }?> 
    <!--for each loop-->
    </ul>   
    <!-- ?= $name ? saubere Version
    ? php echo $name ?-->
 <!-- 
    The <hr> tag defines a thematic break in an HTML page (e.g. a shift of topic).

The <hr> element is most often displayed as a horizontal rule that is used to separate content (or define a change) in an HTML page.

The ul element represents an unordered list of items;

The H1 is an HTML (Hypertext Markup Language) heading tag that indicates the main topic on a web page.

--> 
</body>
</html>