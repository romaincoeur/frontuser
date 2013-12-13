

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
    <a href="#" onClick="javascript:pop();return(false)">Inscription</a>

    <script type="text/javascript">
        <!--
        function pop()
        {
            width = 400;
            height = 700;
            if(window.innerWidth)
            {
                var left = (window.innerWidth-width)/2;
                var top = (window.innerHeight-height)/2;
            }
            else
            {
                var left = (document.body.clientWidth-width)/2;
                var top = (document.body.clientHeight-height)/2;
            }
            window.open('<?= $pageUrl ?>index.html?action=register','registration','menubar=no, scrollbars=no, top='+top+', left='+left+', width='+width+', height='+height+', resizable=0');
        }
        -->
    </script>

</div>
