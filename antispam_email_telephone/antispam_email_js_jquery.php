<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anti-spam pour les adresses e-mail en JS JQuery</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

</head>
<body>
    <h1>La méthode jQuery</h1>

    <div>

    <p>Remplacer le signe @ avec une SPAN nommée "arobase"</p>
    <!-- HTML code -->
    <!-- <a href="mailto:contact(arobase)monsite.fr">
        contact<span class="arobase"><span>(arobase)</span></span>monsite.fr
    </a> -->

    
    
    <p><i>-------  Résultat sans js -------</i></p>
        <p>test( at )domaine( dot )fr</p> 
    <!-- nom(at)domaine(dot)fr -->

    <p><i>------- Résultat avec js -------</i></p>
    <p><a class="email" href="mailto:nom(at)domaine(dot)fr">
        nom(at)domaine(dot)fr
    </a></p>

    <p><a href="mailto:test(at)example(dot)com">test at example dot com</a></p>

    
    </div>

    <p><i>------- code JS -------</i></p>
    <script>
        $(function() {
        $('a[href^="mailto:"]').each(function() {
        this.href = this.href.replace('(at)', '@').replace(/\(dot\)/g, '.');
        // Remove this line if you don't want to set the email address as link text:
        this.innerHTML = this.href.replace('mailto:', '');
        });
        });
    </script>
</body>
</html>