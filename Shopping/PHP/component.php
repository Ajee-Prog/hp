<?php
function component($productName, $productPrice, $productImg){
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"index.php\" method=\"POST\">
        <div class=\"card shadow\">
        
            <div>
                <img src=\"$productImg\" alt=\"image1\" class= \"img-fluid card-img-top\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">$productName</h5>
                <h6>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star-half-o\"></i>
                </h6>
                <p class=\"card-text\">
                Some quick Product example tom build on the card
                </p>
                <h5>
                <small><s class= \"text-secondary\">$519</s></small>
                <span class=\"price\">$productPrice</span>
                </h5>
                <button type=\"submit\" class=\"btn btn-warning my-3\" name = \"add\">Add to Cart <i class=\"fa fa-shopping-cart\"></i></button>
            </div>
        </div>
    </form>

</div>
    ";
    echo $element;
    
}
?>