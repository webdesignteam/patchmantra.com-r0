<?php if(Popbox == 'True'){ ?>
    <div class="covi-favi-block fadeInLeft _hide" id="twinBoxes">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Minus, recusandae aperiam ab sequi asperiores voluptates pariatur accusamus 
            blanditiis quidem optio!</p>
        <button type="button" class="close-icon" id="hide">&times;</button>
    </div>
    <script>
        $(document).ready(function () {
            $("#hide").click(function () {
                $("#twinBoxes").hide();
            });
            $(window).on("load", function () {
                $("#twinBoxes").removeClass("_hide");
            });
        });
    </script>
<?php } ?>