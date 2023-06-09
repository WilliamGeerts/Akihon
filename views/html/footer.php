<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="row justify-content-around mx-0">
        <!-- Register -->
        <div class="my-3">
            Pas encore inscrit ? <a class="text-white btn btn-success mx-2" href="?page=register">Incription</a>
        </div>
        <!-- Register -->

        <!-- Section: Social media -->
        <section class="mb-3">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/helha.be" target="blank" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/HELHa" target="blank" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.helha.be/" target="blank" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/helhabe/" target="blank" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/school/helha/" target="blank" role="button"><i class="fab fa-linkedin-in"></i></a>
        </section>
        <!-- Section: Social media -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright : Akihon - Tous droits réservés.
        </div>
        <!-- Copyright -->
    </div>
    <!-- Grid container -->

    <script>
        // Récupérer le numéro ISBN d'un manga après un click
        var manga_id;
        $(document).ready(function() {
            $('.card div img').not('.card-page').on('click', function() {
                manga_id = $(this).attr("id");
                window.location.href = `?page=page&id=${manga_id}`;
            });
        });
    </script>

</footer>