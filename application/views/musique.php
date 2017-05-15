<body> 
    <p><a href='http://localhost/drita-bag/drita-bag'>Accueil</a> -> Musique</p>
    <style>	  
        #recherche {
        width:208px;
        height:24px;
        background:white;
        box-shadow:1px 1px 2px rgba(0,0,0,.3) inset;
        border-radius:2em;
        }

        #recherche .loupe {
        background:url(http://www.larevuedekenza.fr/wp-content/themes/quarter/images/sidebar/loupe.png) no-repeat 0 0;
        width:24px;
        }

        #recherche input {
        outline:0;
        border:0;
        margin:0;
        height:24px;
        float:left;
        display:block;
        }

        #recherche input[type=text] {
        font:300 12px HelveticaNeue-Light, "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
        background:none;
        width:150px;
        padding:0 9px;
        color:#666;
        }
    </style>
    <div>
        <form id="recherche" method="post" action="#">
            <p>
                <input name="saisie" type="text" placeholder="Recherche..." required />
                <input class="loupe" type="submit" value="" />
            </p>
        </form>
        <form methode="post" action="..">
            
            <?php
                foreach($Songs as $Song)
                {
            ?>
            <p>
                <input name=v_"<?php echo $Song ?>" type="submit" value="<?php echo $Song?>"/>
            </p>
            <?php
                }
            ?>
        </form>
    </div>
</body>