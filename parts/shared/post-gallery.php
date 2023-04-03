<?php
$fields = get_fields();

if ($fields) {
    for ($i = 1; $i < count($fields) + 1; $i++) {
        $imageNr = "image_$i";

        if ($fields[$imageNr]) {
?>
            <img src="<?php echo $fields[$imageNr]['url'] ?>" alt="">
<?php
        }
    }
}
?>