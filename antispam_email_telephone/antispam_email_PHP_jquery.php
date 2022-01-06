<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anti-spam pour les adresses e-mail en PHP</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
</head>
<body>
    <h1>En php, la technique de l’offuscation</h1>

    <div>
    <p><i>------- La fonction « obfuscate email » -------</i></p>
    <?php 
        function obfuscate_email($email){
            $email = str_replace(' ', '', $email );
            $email = str_replace('@', '(at)', $email );
            $email = str_replace('.com', '(point)com', $email );
            return $email;
        }
        
        function obfuscate_mailto($email){
            return 'mailto:' . obfuscate_email($email);
        }
    ?>

    <p>Utilisation</p>
    <?php $email = 'nom@domaine.fr'; ?>
    <a class="email" href="<?php echo obfuscate_mailto($email); ?>" title="Adresse e-mail"><?php echo obfuscate_email($email); ?></a>

    <p>Le rendu HTML</p>
    <i>Une fois la fonction appliquée, les caractères spéciaux de l’adresse email sont automatiquement remplacés.</i>
    <a class="email" href="<?php echo obfuscate_mailto($email); ?>" title="Adresse e-mail"><strong><?php echo obfuscate_email($email); ?></strong></a>
    <!-- <a class="email" href="nom(at)domaine(dot)fr" title="Adresse e-mail">nom(at)domaine(dot)fr</a> -->
    

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