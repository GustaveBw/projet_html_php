<?php include __DIR__ . "/public/header.html.php"; ?>





<main>

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






<?php include __DIR__ . "/public/footer.html.php"; ?>