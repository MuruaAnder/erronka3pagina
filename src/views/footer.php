<!-- SECCION CONTACTO Y PIE DE PAGINA -->
<section id="contacto">
    <div class="fila">
        <div class="col">
            <h1>Trio Sabroso</h1>
        </div>
        <div class="col">
            <h3><?= trans("Menu") ?></h3>
            <a href="#inicio"><?= trans("Inicio") ?></a>
            <a href="#sabores"><?= trans("Sabores") ?></a>
            <a href="#sabores"><?= trans("Platos") ?></a>
            <a href="#sabores">Blog</a>
        </div>
        <div class="col">
            <h3><?= trans("Cheffs") ?></h3>
            <a href="#">Unaica</a>
            <a href="#">Porti</a>
            <a href="#">Murua</a>
        </div>
        <div class="col">
            <h3><?= trans("Redes sociales") ?></h3>
            <div class="media">
                <i class="fa-brands fa-twitter"></i> <a href="#">Twitter</a>
            </div>
            <div class="media">
                <i class="fa-brands fa-instagram"></i> <a href="#">Instagram</a>
            </div>
        </div>
        <div class="col">
            <h3><?= trans("Comentario") ?></h3>
            <form action="galdetegia.php" method="post">
                <label for="izena"><?= trans("Nombre") ?></label><br>
                <input type="text" id="izena" name="izena" required><br><br>
                <label for="komentarioa"><?= trans("Komentario:") ?></label><br>
                <textarea id="komentarioa" name="komentarioa" rows="4" cols="50" required></textarea><br><br>
                <input type="submit" value="Bidali">
            </form>
        </div>
        <div class="col">
            <h3><?= trans("Comentario") ?></h3>
            <?php
            $archivo_xml = 'iruzkinak.xml';
            if (file_exists($archivo_xml)) {
                $xml = simplexml_load_file($archivo_xml);
                if ($xml === false) {
                    echo "Errorea iruzkinak kargatzean.";
                } else {
                    // Recorrer cada comentario en el archivo XML y mostrarlo
                    foreach ($xml->iruzkina as $iruzkina) {
                        echo "<div class='comment'>";
                        echo "<h4>" . htmlspecialchars($iruzkina->izena) . "</h4>";
                        echo "<p>" . htmlspecialchars($iruzkina->komentarioa) . "</p>";
                        echo "<small>Data: " . $iruzkina->data . "</small>";
                        echo "</div>";
                    }
                }
            } else {
                echo "Oraindik ez dago iruzkinik.";
            }
            ?>
        </div>
    </div>
</section>



<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="script.js"></script>
</body>

</html>