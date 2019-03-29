<?php
    function dabartiniaiMetai($pageDate) {
        if(date('Y') <= $pageDate) {
            echo '&copy '. date('Y');
        } else {
            echo '&copy ' . $pageDate . ' - ' . date('Y');
        }
    }
    dabartiniaiMetai(2010);
?>
