
<footer>

        <h4>FOOTER</h4>

</footer>

</body>


<script>
    $(document).ready(function () {
        <?php if($content_view == 'viewIndex.php'){ ?>
            $("#home").addClass("active");
            <?php }else if($content_view == 'viewLink.php'){?>
            $("#link").addClass("active");
        <?php } ?>
    });

</script>