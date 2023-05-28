<!--<div class="product-grid">-->
<?php /* foreach ($products as $product) { ?>
        <div class="grid-product square fav">
            <div class="img-name" style="background-image: url(<?php echo $product['image'] ?>)">
                <h4><?php echo $product['title'] ?></h4></div>

            <div style="display: flex;justify-content: space-between;background-color: #aab5c0;">
                <div class="price">$ <?php echo $product['price'] ?></div>

                <?php
                if ($product['quantity'] > 0) {
                    ?>

                    <button class="btn btn-primary" id="increaseItem_<?php echo $product['id']; ?>"
                            onclick="increaseItem('<?php echo $product['id'] ?>','<?php echo site_url('update-basket') ?>')">
                        <i class="fa-sharp fa-solid fa-plus"></i>
                    </button>

                    <span id="quantity_<?php echo $product['id'] ?>"
                          style="align-self:center"><?php echo $product['quantity'] ?></span>
                    <?php
                    if($product['quantity'] == 1){
                        ?>
                        <button class="btn btn-primary" id="deleteItem_<?php echo $product['id']; ?>" onclick="deleteItem('<?php echo $product['id'] ?>',' <?php echo site_url('update-basket') ?>')">
                    <span class="fa fa-trash fa-lg">
                        </button>
                            <?php
                    }else{
                    ?>
                    <button class="btn btn-primary" id="decreaseItem_<?php echo $product['id']; ?>"
                            onclick="decreaseItem('<?php echo $product['id'] ?>','<?php echo site_url('update-basket') ?>')">
                        -
                    </button>
                <?php
                    }
                ?>
                    <button class="btn btn-primary" id="deleteItem_<?php echo $product['id']; ?>"
                            style="display: none" onclick="deleteItem('<?php echo $product['id'] ?>',' <?php echo site_url('update-basket') ?>')">
                    <span class="fa fa-trash fa-lg">
                    </button>
                    <?php
                } else {
                    ?>
                    <button class="btn btn-primary" id="addToCart_<?php echo $product['id']; ?>"
                            onclick="addToCart('<?php echo $product['id'] ?>','<?php echo site_url('add-to-basket') ?>')">Add
                    </button>
                    <?php
                }
                ?>
                <button class="btn btn-primary" id="addToCart_<?php echo $product['id']; ?>"
                        style="display: none" onclick="addToCart('<?php echo $product['id'] ?>','<?php echo site_url('add-to-basket') ?>')">Add
                </button>
                <button class="btn btn-primary" id="increaseItem_<?php echo $product['id']; ?>"
                        style="display: none" onclick="increaseItem('<?php echo $product['id'] ?>','<?php echo site_url('update-basket') ?>')">
                    <i class="fa-sharp fa-solid fa-plus"></i>
                </button>
                <span id="quantity_<?php echo $product['id'] ?>"
                      style="align-self:center; display: none"><?php echo $product['quantity'] ?></span>
                <button class="btn btn-primary" id="decreaseItem_<?php echo $product['id']; ?>"
                        style="display: none" onclick="decreaseItem('<?php echo $product['id'] ?>','<?php echo site_url('update-basket') ?>')">
                    -
                </button>

                <button class="btn btn-primary" id="deleteItem_<?php echo $product['id']; ?>"
                        style="display: none" onclick="deleteItem('<?php echo $product['id'] ?>',' <?php echo site_url('update-basket') ?>')">
                    <span class="fa fa-trash fa-lg">
                </button>
            </div>
        </div>
        <?php
    }
 */
?>
<!--</div>-->
<div class="row mt-5">
    <?php
    foreach ($products as $product) {
        ?>
        <div class="col-md-4 mt-3">
            <div class="card">
                <img src="<?php echo $product['image']; ?>" class="card-img-top"
                     alt="Fissure in Sandstone"/>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['title'] ?></h5>
                    <p class="card-text"><?php echo $product['descriptin'] ?></p>
                    <p class="card-text">$ <?php echo $product['price'] ?></p>

                    <?php
                    if ($product['quantity'] > 0) {
                        ?>
                        <div class="d-flex">
                            <button class="btn btn-primary btn-sm" id="increaseItem_<?php echo $product['id']; ?>"
                                    onclick="increaseItem('<?php echo $product['id'] ?>','<?php echo site_url('update-basket') ?>')">
                                <i class="fa-sharp fa-solid fa-plus"></i>
                            </button>

                            <span id="quantity_<?php echo $product['id'] ?>"
                                  style="align-self:center;padding: 5px ;"><?php echo $product['quantity'] ?></span>
                            <?php
                            if ($product['quantity'] == 1) {
                                ?>
                                <button class="btn btn-primary btn-sm" id="deleteItem_<?php echo $product['id']; ?>"
                                        onclick="deleteItem('<?php echo $product['id'] ?>',' <?php echo site_url('update-basket') ?>')">
                                        <span class="fa fa-trash fa-lg">
                                </button>
                                <?php
                            } else {
                                ?>
                                <button class="btn btn-primary btn-sm" id="decreaseItem_<?php echo $product['id']; ?>"
                                        onclick="decreaseItem('<?php echo $product['id'] ?>','<?php echo site_url('update-basket') ?>')">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <?php
                            }
                            ?>
                            <button class="btn btn-primary btn-sm" id="deleteItem_<?php echo $product['id']; ?>"
                                    style="display: none"
                                    onclick="deleteItem('<?php echo $product['id'] ?>',' <?php echo site_url('update-basket') ?>')">
                                    <span class="fa fa-trash fa-lg">
                            </button>
                        </div>

                        <?php
                    } else {
                        ?>
                        <button class="btn btn-primary btn-sm" id="addToCart_<?php echo $product['id']; ?>"
                                onclick="addToCart('<?php echo $product['id'] ?>','<?php echo site_url('add-to-basket') ?>')">
                            Add
                        </button>
                        <?php
                    }
                    ?>
                    <div class="d-flex">

                        <button class="btn btn-primary" id="addToCart_<?php echo $product['id']; ?>"
                                style="display: none"
                                onclick="addToCart('<?php echo $product['id'] ?>','<?php echo site_url('add-to-basket') ?>')">
                            Add
                        </button>

                        <button class="btn btn-primary btn-sm" id="increaseItem_<?php echo $product['id']; ?>"
                                style="display: none"
                                onclick="increaseItem('<?php echo $product['id'] ?>','<?php echo site_url('update-basket') ?>')">
                            <i class="fa-sharp fa-solid fa-plus"></i>
                        </button>
                        <span id="quantity_<?php echo $product['id'] ?>"
                              style="align-self:center;padding: 5px ; display: none"><?php echo $product['quantity'] ?></span>
                        <button class="btn btn-primary btn-sm" id="decreaseItem_<?php echo $product['id']; ?>"
                                style="display: none"
                                onclick="decreaseItem('<?php echo $product['id'] ?>','<?php echo site_url('update-basket') ?>')">
                            <i class="fa-solid fa-minus"></i>
                        </button>

                        <button class="btn btn-primary btn-sm" id="deleteItem_<?php echo $product['id']; ?>"
                                style="display: none"
                                onclick="deleteItem('<?php echo $product['id'] ?>',' <?php echo site_url('update-basket') ?>')">
                                <span class="fa fa-trash fa-lg">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
