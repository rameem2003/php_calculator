<?php 

    if(isset($_POST["submit"])){
        $a = $_POST["f_num"];
        $b = $_POST["s_num"];

        if($a != "" && $b != ""){
            $op = $_POST["op"];

            switch($op){
                case "add":
                    $add = $a + $b;
                    echo "The addition of {$a} + {$b} is {$add}";
                    break;

                case "sub":
                    $sub = $a - $b;
                    echo "The submission of {$a} - {$b} is {$sub}";
                    break;


                case "mul":
                    $mul = $a * $b;
                    echo "The multiplication of {$a} * {$b} is {$mul}";
                    break;
    
                case "div":
                    $div = $a / $b;
                    echo "The division of {$a} / {$b} is {$div}";
                    break;

                default:
                    echo "Wrong!!";
            }
        }

        else{
            echo "Valo hoye ";
        }
    }

?>