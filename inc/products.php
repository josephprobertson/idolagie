<html>

<ul id="soaps">
<?php


function get_list_view_html($product_id, $product) {

    $output = "";

    $output = $output . "<li>";
    $output = $output . '<a href="soap.php?id=' . $product_id . '">';
    $output = $output . '<img src="' . $product["img"] . '" alt="' . $product["name"] . '">';
    $output = $output . '<a href="soap.php?id=' . $product_id . '" class="button" id="products-button">Details</a>';
    $output = $output . "</a>";
    $output = $output . "</li>";
    
    return $output;
}

$products = array();
$products[101] = array(
    "name" => "Endless Bliss",
    "img" => "img/Products/Endless Bliss.jpg",
    "price" => 6,
    "paypal" => "GHCJRKHUDGKPL",
    "description" => "This bar is one of the most fragrant bars we've ever created. The fragrance opens with top notes of pink guava, peach, apricot, exotic berries and bergamot. Notes of floral zest offering petals of lily of the valley combined with mimosa, peony and fresh jasmine flowers. Base of the composition is a sensual and soft layer of cashmere musk, sandalwood, and vanilla.<br>",
    "ingredients" => "Saponified Coconut Oil, Distilled Water, Fragrance, Natural Colors"
);
$products[102] = array(
    "name" => "Pomegranate Mandarin",
    "img" => "img/Products/Pomegranate Mandarin.jpg",
    "price" => 6,
    "paypal" => "CGLS5FQ5L3QU8",
    "description" => "Pomegranate Mandarin is an irresistible fruity scent!<br><br>This bar contains cocoa butter AND goats milk for ultimate moisture. This fragrance combines scents of pomegranate, sparkling mandarin, dewberry, blackberry, iris, jasmine, sheer musk, sandalwood and red cassis.<br>",
    "ingredients" => "Saponified Oils of Coconut, Palm, Soybean, Olive, Canola, Castor; Cocoa Butter, Palm Kernal Flakes, Distilled Water, Goats Milk, Vitamin E, Stearic Acid, Fragrance, Natural Colorant."
);
$products[103] = array(
    "name" => "Spring Fling",
    "img" => "img/Products/Spring Fling.jpg",    
    "price" => 6,
    "paypal" => "UBYBKPQLLFLHW",
    "description" => "Spring is in the air, and it brings to mind the bright, vibrant colors of the season.  We made this soap with that idea in mind.  The soap is a swirl of many colors.  The scent is a fragrance that smells great... light,  yet refreshing, with hints of jasmine and fruit undertones.<br>",
    "ingredients" => "Saponified Coconut Oil, Distilled Water, Fragrance, Natural Colors"
);
$products[104] = array(
    "name" => "Midnight in Milan",
    "img" => "img/Products/Midnight in Milan.jpg",    
    "price" => 6,
    "paypal" => "RM6PM28G3QBSU",
    "description" => "Midnight in Milan is our favorite scent!  Hints of citrus peel and sweet orange create sparkle for the sensual bouquet of jasmine and peony in this luxurious blend. Golden amber and sweet vanilla bean balance with sandalwood and musk to create a sensual background.<br><br>This bar contains cocoa butter AND goats milk for ultimate moisture.<br>",
    "ingredients" => "Saponified Oils of Coconut, Palm, Soybean, Olive, Canola, Castor; Cocoa Butter, Palm Kernal Flakes, Distilled Water, Goats Milk, Vitamin E, Stearic Acid, Fragrance, Natural Colorant."
);
$products[105] = array(
    "name" => "Green Tea & Cucumber",
    "img" => "img/Products/Green Tea and Cucumber.jpg",    
    "price" => 6,
    "paypal" => "WQ2JCWX97TY7G",
    "description" => "This soap is made with real organic green tea, which contains antioxidants.  It also contains green tea leaves as an added exfoliant.  The scent is green tea infused with crisp cucumber alongside sparkling lime, eucalyptus, rose hips and a touch of sweet vanilla bean.!<br>",
    "ingredients" => "Saponified Coconut Oil, Distilled Water, Fragrance, Natural Colors"
);
$products[106] = array(
    "name" => "Lumberjack",
    "img" => "img/Products/Lumberjack.jpg",    
    "price" => 6,
    "paypal" => "C4ED3J9GCQUS4",
    "description" => "This soap scent was created with a man&apos;s man in mind. The type of man that is comfortable in the great outdoors.<br><br>The scent is hints of bergamot, citrus and clove on a base of sandalwood, cedarwood, patchouli, and musk. It just plain smells like a man.<br>This soap also contains activated charcoal for an added deep cleansing boost.  Perfect for cleaning tough dirt and grime a hard working man can get into.<br>",
    "ingredients" => "Saponified Coconut Oil, Distilled Water, activated charcoal, Fragrance"
);
$products[107] = array(
    "name" => "Honeysuckle Jasmine",
    "img" => "img/Products/Honeysuckle Jasmine.jpg",    
    "price" => 6,
    "paypal" => "BSVL5SQ6TYWMA",
    "description" => "In our minds, nothing says warmer weather is coming like the smell of honeysuckle and jasmine.  This bar captures that essence.<br>",
    "ingredients" => "Saponified Coconut Oil, Distilled Water, Fragrance, Natural Colors"
);
$products[108] = array(
    "name" => "Summer Rose",
    "img" => "img/Products/Summer Rose.jpg",    
    "price" => 6,
    "paypal" => "R8N98YWJPYJAG",
    "description" => "Our first foray into the hot process method of soap-making, this soap may be the bubbliest soap we've ever created.<br>The scent is light and smells just like roses.  You're going to love this bar!<br>",
    "ingredients" => "Saponified Coconut Oil, Distilled Water, Fragrance, Natural Colors"
);

?>
</ul>
</html>