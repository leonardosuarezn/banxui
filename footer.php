        <script type="text/javascript" src="js/jquery/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#button-nav').on("click", function(e){
                    e.preventDefault();
                    $(".nav").animate({left: '0'}, 500, 'easeOutBack');
                    $('#button-nav').hide();
                    $('#form-singin').css('margin-top', '270px');
                });

                $('#button-nav-collapsed').on("click", function(e){
                    e.preventDefault();
                    $(".nav").animate({left: '-100%'}, 500, 'easeOutBack');
                    $('#button-nav').show();
                    $('#form-singin').css('margin-top', '0px');
                });
            });
        </script>
    </body>
</html>