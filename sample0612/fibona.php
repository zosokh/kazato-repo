
<meta charset="utf-8">



    <?php

        if (preg_match('/^[\w\d]+$/' , $_POST['maxnum']) == false) {
            validate_form();
        }
        else {
            process_form();        
        }

        function process_form() {
            for ($i = 0 , $y = 1; $i + $y <= $_POST['maxnum']; $y = $i, $i = $x){
            $x = $i + $y ;
            print "$x ";
            }
        }


        function validate_form(){
            print 'Your post must be a number.';
        }



    ?>
