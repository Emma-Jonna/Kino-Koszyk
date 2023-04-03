<?php

$fields = get_fields();
$imageField = [];

foreach ($fields as $key => $value) {
    if (str_contains($key, "image")) {
        $imageField[$key] = $value;
    }
}
if ($fields) {
    for ($i = 1; $i < count($imageField) + 1; $i++) {
        $imageNr = "image_$i";

        if ($fields[$imageNr]) {
?>
            <img src="<?php echo $fields[$imageNr]['url'] ?>" alt="">
<?php
        } else {
            echo "hello";
        }
    }
}
?>