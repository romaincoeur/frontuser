

<div id="userInfo" class="side">

    <?= $message ?>
    <div>
        Identifiez-vous
    </div>
    <form method="post">
        <input type="hidden" name="action" value="login" />
        <INPUT type="text" value="Email" name="email">
        <INPUT type="password" value="Mot de Passe" name="password">
        <INPUT type="submit" value="Valider" name="submit">
    </form>
    <a href="#" onClick="javascript:pop()">Inscription</a>

    <script type="text/javascript">
        <!--
        function pop()
        {
            $.nosNotify('message');

                    }


        -->
    </script>

</div>
