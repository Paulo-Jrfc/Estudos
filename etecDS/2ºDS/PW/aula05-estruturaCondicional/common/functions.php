<?php


function initCard(){
    echo '    
    <div class="card maior">
        <div class="log">';
}

function endCard(){
    echo '
        </div> 
    </div>
    ';
}

function genericPrintf($msg, ...$params){
    echo sprintf("$msg", ...$params);
}

function createCard($msg, ...$params) {
    initCard();
    genericPrintf($msg, ...$params);
    endCard();
}

?>