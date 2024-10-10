<?php


function initCard(){
    echo '    
    <div class="card2">
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

function initColumn(){
    echo '<div class="column">';
}

function endColumn(){
    echo '</div>';
}

?>