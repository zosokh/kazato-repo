<!DOCTYPE html>
<meta charset="utf-8">


<body >



    <?php
        mb_language("ja");
        mb_internal_encoding("UTF-8");


        if (isset($_POST['_kakutei_order'])) {
            process_form(); 
        }
        else {
            validate_form();        
        }



        function process_form() {
            

            // //*環境設定*************************************
            //管理人メールアドレス(宛先)
            $to = "zosokh@gmail.com";
            //件名
            $subject = "注文依頼がきたよ";

            // //*********************

            if (mb_send_mail($to, $subject, $_POST["order_mail"])){
                echo "メール送信成功しました。";
                echo "$_POST[order_mail]";
            }else{
               echo "メール送信失敗しました。";
            }

            // sendmail();
        }

        // function sendmail(){
        //     if (mb_send_mail($to, $subject, $color_order, $qty_order,$phone_adress_order)){
        //             echo "メール送信成功しました。";}
        //         else{
        //             echo "メール送信失敗しました。";
        //     }
        // }



        function validate_form(){
            echo "メール送信失敗しました。";
        }





    ?>


</body>
