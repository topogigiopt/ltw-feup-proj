<?php

function propertyElem($id, $name, $rating, $specs) {

    echo "<div class=\"elem-property\" onClick=\"location.href='../pages/place.php?placeID=" . $id . "'\" >
            <img class='elem-property-pic' src='../images/background-house.jpg' alt='house picture'>
            <div class='elem-property-text'>
                <div class='elem-property-info'>
                    <h2 class='elem-property-name'> " . $name . "</h2>
                    <div class='elem-property-rating' >
                        <img class='rating-house-pic' src='../images/FullHouse.png' alt=' >
                        <h4 class='elem-property-rating-no'>(" . $rating . ")</h4>
                    </div>
                </div>
                <div class='elem-property-specs'>" . $specs . "</div>
            </div>
         </div>";
}

?>
