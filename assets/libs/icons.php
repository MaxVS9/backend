<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; width: 0; height: 0" id="__SVG_SPRITE_NODE__">';
<?php 
    foreach (glob("assets/svg/*.svg") as $filename)
    {
        include $filename;
    }
?>
</svg>
