<?php include  "../public/header.html.php"; ?>
<main>
    Formulaire

    <h2>Formulaire</h2>
    <div class="form">

        <form action="/ma-page-de-traitement" method="post">
            <ul>
                <li>
                    <label for="name">Pseudo*&nbsp;:</label>
                    <input type="text" id="name" name="user_name" />
                </li><br>
                <li>
                    <label for="mail">Prénom&nbsp;:</label>
                    <input type="email" id="mail" name="user_mail" />
                </li><br>
                <li>
                    <label for="name">Mot de passe&nbsp;:</label>
                    <input type="text" id="name" name="user_name" />
                </li><br>
                <li>
                    <label for="name">Email&nbsp;:</label>
                    <input type="text" id="name" name="user_name" />
                </li><br>
                <li>
                    <label for="msg">Message&nbsp;:</label>
                    <textarea id="msg" name="user_message"></textarea>
                </li>
                <button type="submit" value="Submit">Submit</button>
            </ul>

        </form>
    </div>

    
</main>

<?php include "../public/footer.html.php"; ?>