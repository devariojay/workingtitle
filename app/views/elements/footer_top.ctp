<?php

    $footer = $this->requestAction('footerblocks/footergrab/' . $language);
    
    foreach($footer as $f):
        echo "<div>";
            echo $f['Footerblock']['image'];
        echo "</div>";
        echo "<div>";
            echo $f['Footerblock']['titletext'];
        echo "</div>";
        echo "<div>";
            echo $f['Footerblock']['descriptiontext'];
        echo "</div>";
        echo "<div>";
            echo $this->Html->link($f['Footerblock']['linktext'], $f['Footerblock']['link']);
        echo "</div>";    
    endforeach;

?>