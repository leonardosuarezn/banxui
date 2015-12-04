        <script type="text/javascript" src="js/jquery/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.btn-nav-collapsed').on("click", function(e){
                    e.preventDefault();
                    $(".nav").animate({left: '-100%'}, 500, 'easeOutBack');
                });

                $('#button-toogle').on("click", function(e){
                    e.preventDefault();
                    $(".nav").animate({left: '0'}, 500, 'easeOutBack');
                });
            });
        </script>
    </body>
</html>