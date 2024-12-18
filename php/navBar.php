    <nav>
        <ul>
            <li><a class="no-underline text-[23px] text-[white]" href="../index.php">Articles</a></li>
            <li><a class="no-underline text-[23px] text-[white]" href="#">Articles Populaires</a></li>
<?php if(!isset($_SESSION["username"])): ?>
            <li><a class="no-underline text-[23px] text-[white]" href="../inscription.php">S'inscrire</a></li>
            <li><a class="no-underline text-[23px] text-[white]" href="../connection.php">Se connecter</a></li>
            <?php endif; ?>

<?php if(isset($_SESSION["rule"]) && $_SESSION["rule"] == 1): ?>

    <li><a class="no-underline text-[23px] text-[white]" href="../ajouterArticle.php">Ajouter article</a></li>
<?php endif; ?>


<?php if(isset($_SESSION["username"])): ?>     
            <li><a class="no-underline text-[23px] text-[white]" href="../parametres.php">Paramètres</a></li>

<form action="./php/deconnection.php" method="POST">
            <!-- <li><a class="no-underline text-[23px] text-[white]" href="deconnection.php">Déconnection</a></li> -->
            <button class="no-underline text-[23px] text-[white]" type="submit">Déconnection</button>
</form>

<?php endif; ?>


        </ul>
    </nav>