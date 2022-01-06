<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anti-spam pour les adresses e-mail</title>
    <style>
        pre{
            background: #edf0fb;
            padding: 25px;
            border-radius: 5px;
            overflow: auto;
            margin-bottom: 25px;
            font-family: monospace;
            line-height: 1.5em;
            max-width: 500px;
            margin: 0 auto;
        }

        .arobase::before {
            content: "\000040";
            font-size: inherit !important;
        }
        .arobase span {
            font-size: 1px;
            font-size: 0.1px;
            text-indent: -999px;
            width: 1px;
            overflow: hidden;
        }
    </style>

</head>
<body>
    <h1>Anti-spam pour les adresses e-mail en CSS</h1>

    <div>
    <p><i>------- Résultat sans CSS -------</i></p>
    <p><strong>contact(arobase)monsite.fr</strong><p>

    <p>Remplacer le signe @ avec une SPAN nommée "arobase"</p>
    <!-- HTML code -->
    <!-- <a href="mailto:contact(arobase)monsite.fr">
        contact<span class="arobase"><span>(arobase)</span></span>monsite.fr
    </a> -->

    
    <p><i>------- code CSS -------</i></p>
    <pre>
    .arobase::before {
    content: "\000040";
    font-size: inherit !important;
    }
    .arobase span {
        font-size: 1px;
        font-size: 0.1px;
        text-indent: -999px;
        width: 1px;
        overflow: hidden;
    }
    </pre>
    
    <p><i>------- Résultat avec CSS -------</i></p>
    <a href="mailto:contact(arobase)adargui.fr">
        contact<span class="arobase"><span>(arobase)</span></span>adargui.fr
    </a>
    
    </div>
</body>
</html>