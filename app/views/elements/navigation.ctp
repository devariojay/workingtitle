<?php

    $menu = $this->requestAction('navigations/menugrab/' . $language);
    
    foreach($menu as $m):
        echo "<span id='menulinks'>";
        echo $this->Html->link($m['Navigation']['linkname'], $m['Navigation']['link']);
        echo "</span>";
    endforeach;

?>