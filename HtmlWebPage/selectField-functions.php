<?php

function displayOptions($options, $selectedfruits){
    foreach($options as $option){
        $option = strtolower($option);
        $selected = '';
        if(is_array($selectedfruits) && in_array($option, $selectedfruits)){
            $selected = 'selected';
        }

        printf('<option value="%s" %s>%s</option>', $option, $selected, ucwords($option));
    }
}

?>