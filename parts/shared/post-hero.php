<?php
$fields = get_fields();

if ($fields) {
    for ($i = 1; $i < count($fields) + 1; $i++) {
        $imageNr = "hero_$i";

        if (isset($fields[$imageNr])) {
?>
            <div class="slideshowItem slideshowFade">
                <img class="<?= $imageNr ?>" src="<?php echo $fields[$imageNr]['url'] ?>" alt="">
            </div>

<?php
        }
    }
}
?>