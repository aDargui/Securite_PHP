<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anti-spam pour les numéros de téléphone</title>
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

        span[class^="zero-"]{
            font-size:1px;
            font-size:0.01rem
        }
        span[class^="zero-"]::before{
            font-size:initial
        }	

        .zero-un::before{
            content:"01";
        }
        .zero-six::before{
            content:"06";
        }
        .zero-sept::before{
            content:"07";
        }
        .zero-huit::before{
            content:"08";
        }
        .zero-deux::before{
            content:"02";
    }


    </style>

</head>
<body>
    <h1>Anti-spam pour les numéros de téléphone en CSS</h1>

    <div>
    <h2>Exemple avec les numéros français avec préfixe à 2 chiffres.</h2>

    <p><i>------- Résultat sans CSS -------</i></p>
    <p><strong>[ANTISPAM] 02 03 04 05</strong><p>

    <p>Remplacer les premiers nombre par un DIV avec une CLASS="zero-un"</p>
    <!-- HTML code -->
    <!-- <span class="zero-un">[ANTISPAM]</span> 02 03 04 05 -->

    
    <p><i>------- code CSS -------</i></p>
    <pre>
    span[class^="zero-"]{
	font-size:1px;
	font-size:0.01rem
    }
    span[class^="zero-"]::before{
        font-size:initial
    }	
    .zero-deux::before{
        content:"02";
    }
    .zero-un::before{
        content:"01";
    }
    .zero-six::before{
        content:"06";
    }
    .zero-sept::before{
        content:"07";
    }
    .zero-huit::before{
        content:"08";
    }


    </pre>
    
    <p><i>------- Résultat avec CSS -------</i></p>
    <!-- 01 02 08 08 07 -->
    <p>
        <strong>
            <span class="zero-un">[ANTISPAM]</span>
            <span class="zero-deux">[ANTISPAM]</span>
            <span class="zero-huit">[ANTISPAM]</span>
            <span class="zero-huit">[ANTISPAM]</span>
            <span class="zero-sept">[ANTISPAM]</span>
        </strong>
    </p>
    
    </div>
</body>
</html>