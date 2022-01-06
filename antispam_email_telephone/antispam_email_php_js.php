<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

<?php

echo "L'email et numero de téléphone ne sont pas affiches dans le code source de la page.
    <br>Les robots spammeurs ne peuvent pas le récupérer méme <br>";
//view-source:localhost/securite_php/antispam_email_telephone/antispam_email_php_js.php

echo conceal("test@test.com");
echo '<br>';
echo conceal("01.09.32.34.56");


function conceal($value)
{
    $concealed = null;
    $uniqid = uniqid(true);
    $identifier = md5($uniqid);

    $charset = "+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz";
    $shuffled_charset = str_shuffle($charset);
    

    for ($i=0; $i < strlen($value); $i++) { 
        $concealed = $concealed . $shuffled_charset[strpos($charset, $value[$i])];
        // var_dump($concealed);
    } 

    $output = <<<EOT
    <span id="{$identifier}">[info protected]</span>
    <script>
        function deconceal(shuffled_charset, concealed_string)
        {
            var c = shuffled_charset.split('').sort().join('');
            console.log(c);
            var result = "";
            for (var i = 0; i < concealed_string.length; i = i+1) {
                result = result + c.charAt(shuffled_charset.indexOf(concealed_string.charAt(i)));
                
            }
            console.log(result);
            document.getElementById("{$identifier}").innerHTML = result;
        }
        deconceal("{$shuffled_charset}", "{$concealed}");
        
        
    </script>
    EOT;
    return $output;
}

?>
    
</body>
</html>