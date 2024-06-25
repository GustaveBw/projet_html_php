<?php include  "../public/header.html.php"; ?>


<main>
    <div class="position_full">
        <h1>position</h1>



        <p>
            centrer un élément de type block
        </p>


        <div class="block_centre">

        </div>

        <br>
        <h4>position absolue</h4>
        <p>Le Carré Jaune se trouve en haut. </p>
        <br>


        <div class="block_absolue">

        </div>
        <div class="relative">

            <h2>Position Relative</h2>
            <div class="carre_relative">
                <div class="petit_carre_relative">

                </div>

            </div>

        </div>

        <h2>Position Fixed</h2>
        <p>Bouton retour vers le haut</p>

        <section class="pourcentage">
            <h2>Le pourcentage</h2>

            <div class="bloc_percent">
                <div class="premier_percent">30%</div>
                <div class="deuxieme_percent">50%</div>
                <div class="troisieme_percent">100%</div>
            </div>
        </section>

        <section class="flexbox">

            <h2>Flexbox</h2> <br>
            <h4>Space between</h4>
            <div class="flex1">
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
            </div>

            <h4>Space around</h4> <br>

            <div class="flex2">
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
            </div>

            <h4>Space evenly</h4> <br>

            <div class="flex3">
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
            </div>

        </section>






    </div>
</main>

<?php include "../public/footer.html.php"; ?>