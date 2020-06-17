<?php

    //prompt function
    function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        
       echo "<script type='text/javascript'> alert('E ai ' + answer + '!!!'); </script>";

    }

    //program
    $prompt_msg = "Por favor informe seu nome.";
    prompt($prompt_msg);


?>