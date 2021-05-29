<!-- 
    This might be an interesting one, but would require that the editor be expanded to handle arrays.
    You would need the ability to select individual cards, then edit the fields of that specific card.
    Or, for cards to be implemented in such a way that adjacent cards stack into a single deck.
 -->

<?php

    $images = [
        "https://dummyimage.com/200x300/c2c2c2/000000.jpg",
        "https://dummyimage.com/200x200/707070/ffffff.jpg"
    ];
    $titles = [
        "Lorem Ipsum",
        "Ut Enim"
    ];
    $card_texts = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
    ];
?>

<div class="card-group">
    <?php for($j = 0; $j < count($titles); $j++){ ?>
        <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $images[$j] ?>" class="img-fluid" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $titles[$j] ?></h5>
                        <p class="card-text"><?php echo $card_texts[$j] ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
