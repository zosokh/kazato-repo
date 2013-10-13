<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
    <title>Sample </title>
  <meta name="viewport" content="width=device-width, initial-scale=0.3,minimum-scale=0.3, maximum-scale=0.5, user-scalable=yes">




</head>

<body >


    <?php
    print "Hello World \n";
    print "Hello World \n";
    ?>

    <?php

    function page_header4($color, $title){
        print'Welcome to ' .$title ;
        print 'div bgcolor="#' . $color. '">';
    }

    page_header4('66cc66','my homepage');

    ?>

    <?php
    for ($i = 1 ; $i <= 10; $i++){
    if ($i > 7) {
        print "$i <br>";
    }
    }

    ?>










    <br>




    <?php
    for ($i = 1 ; $i <= 35; $i++){
        if ($i % 3 == 0 && $i % 5 == !0) {
            print "Fizz <br>";
        }
        else if ($i % 5 == 0 && $i % 3 == !0){
            print "Buzz <br>";
        }
        else if ($i % 5 == 0 && $i % 3 == 0){
            print "FizzBuzz <br>";

        }
        else {
            print "$i <br>";
        }
    }

    ?>

    <br>---------------------------------<br>



    <?php
    for ($i = 1 ; $i <= 35; $i++){
         if ($i % 5 == 0 && $i % 3 == 0){
            print "FizzBuzz <br>";
            
        }
        else if ($i % 3 == 0 ) {
            print "Fizz <br>";
        }
        else if ($i % 5 == 0 ){
            print "Buzz <br>";
        }
        else {
            print "$i <br>";
        }
    }

    ?>



    <br>---------------------------------<br>



    <script>

for (var i = 1; i <= 35; i++) {
    checkFizzBuzz(i);
}

/**
 * [checkFizzBuzz description]
 * @param  {[type]} i [description]
 * @return {[type]}   [description]
 */
function checkFizzBuzz( i ) {
    document.write("<br/>  ");

    if (checkFizz(i)) {
        checkBuzz(i);
        return;
    }

    if (checkBuzz(i)) {
        return;
    }

    document.write(i);
}

/**
 * FizzCheck
 * @param  {integer} i [targetInteger]
 * @return {bool}   [SucessFlug]
 */
function checkFizz (i) {
    if (i % 3 == 0) {
        document.write("Fizz");
        return true;
    }
    return false;
}

/**
 * BuzzCheck
 * @param  {integer} i [targetInteger]
 * @return {Bool}   [SuccessFlug]
 */
function checkBuzz (i) {
    if (i % 5 == 0) {
        document.write("Buzz");
        return true;
    }
}

</script>




   <br>---------------------------------<br>



    <?php
    for ($i = 0 , $y = 1; $i + $y <= 144; $y = $i, $i = $x){
        $x = $i + $y ;
        print "$x ";

    }
    ?>




    <br>---------------------------------<br>

    



    <br>---------------------------------<br>


    <?php
        if (isset($_POST['_submit_check'])){
            process_form();
        } else {
            show_form();
        }


        function process_form() {
            print "HELLO, ". $_POST['myname'];
        }

        function show_form() {
            echo '<form method="POST" action="' . $_SERVER['SCRIPT_NAME'] . '">';
            echo 'Your name: <input type="text" name="myname">';
            echo '<br/>';
            echo '<input type="submit" value="Say Hello">';
            echo '<input type="hidden" name="_submit_check" value="1">';
            echo '</form>';
        }
    ?>


    <br>---------------------------------<br>


    <?php
        var_dump($_POST);
        echo 'step1';
        if (isset($_POST['_submit_check'])) {
        echo 'step2';
            if ($form_errors = validate_form()){
        echo 'step3';
                show_form($form_errors);
            } else {
        echo 'step4';
                process_form();
            }
        } else {
        echo 'step5';
            show_form();
        }

        function process_form() {
            print "Hello, ". $_POST['myname'];
        }

        function show_form($errors = '') {
            if ($errors) {
                print 'Please correct these errors: <ul><li>';
                print implode('<li><li>' , $errors);
                print '</li></ul>';
            }
        }

        echo '<form method="POST" action="' . $_SERVER['SCRIPT_NAME'] . '">';
        echo 'Your name: <input type="text" name="myname">';
        echo '<br/>';
        echo '<input type="submit" value="Say Hello">';
        echo '<input type="hidden" name="_submit_check" value="1">';
        echo '</form>';


        function validate_form() {
            $errors = array();
            if (strlen($_POST['myname']) < 3){
                $errors[] = 'Your name must be at least 3 letters long.';
            }
            return $errors;
        }
    ?>


    <br>---------------------------------<br>



    <?php
        $sweets = array('Sesame Seed Puff' , 'Coconut Milk Gelatin Square' , 
                        'Brown Sugar Cake' , 'Sweet Rice and Meat');
        echo 'step0';

        function show_form() {
            echo 'step1';
            echo '<form method="POST" action="' . $_SERVER['SCRIPT_NAME'] . '">';
            echo 'Your Order: <select name="order">';

            foreach ($GLOBALS['sweets'] as $choice) {
                print "<option>$choice</option>\n";
            }

            echo '</select>';
            echo '<br>';
            echo '<input type="submit" value="Order">';
            echo '<input type="hidden" name="_submit_check" value="1">';
            echo '</form>';
        }


        show_form();
    ?>



    <?php


        echo '<form method="POST" action="fibona.php">';
        echo 'フィボナッチ？？: <input type="text" name="maxnum">';
        echo '<br/>';
        echo '<input type="submit" value="Go !!!!" name="_submit_check">';
        echo '</form>';



    ?>






<!-- Contents -->           
            <div id="contents">


 



            <br class="clear" />
            </div><!-- /#contents -->
            
            

</body>
</html>