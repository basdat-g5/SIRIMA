    <footer class="footer">
        <div class="container">
            <p class="text-muted text-center">Copyright &copy; 2017 SIRIMA-G5</p>
        </div>
    </footer>

    <?php pg_close($dbConn); ?>

    <!-- our JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/sirima.js"></script>
    <script type="javascript">
        $(document).ready(function () {
            $('.datepicker').datepicker();
        });
    </script>
    </body>
</html>