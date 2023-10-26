<?php
    include "head.php";

    $str1='Hello World';
    $str2="Hello BCA";
    $name="Kobby";


    echo "Hi, $str1 and (\'$name'\)";
    echo "$str2 and $name";

    // echo <<<EOT
    // <h3>This is an example</h3>
    // Hello world!
    // It's easy to embed HTML in your strings using this syntax.<br />

    echo <<<EOT
    //     This is a multi-line string,
    //     with variables: {$str1} and {$name}.
    //     End of the string literal.  
    EOT;

    $mystring = <<<EOT
            This is some PHP text.
            I can use "double quotes"
            and 'single quotes',
            This is a multi-line string,
            with variables: {$str1} and {$name}.
    EOT;
    echo $mystring;

    ?>