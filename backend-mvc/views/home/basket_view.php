<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="row">

                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="<?php echo site_url('') ?>" class="text-body"><i
                                            class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">Shopping cart</p>
                                        <p class="mb-0">You have <?php echo $total_quantity; ?> items in your cart</p>
                                    </div>
                                </div>
                                <?php
                                foreach ($userProducts as $userProduct){
                                ?>
                                <div class="card mb-3" id="item_<?php echo $userProduct['product_id'];?>">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <div>
                                                    <img
                                                        src="<?php echo $userProduct['image'] ?>"
                                                        class="img-fluid rounded-3" alt="Shopping item"
                                                        style="width: 65px;">
                                                </div>
                                                <div class="ms-3">
                                                    <h5><?php echo $userProduct['title'] ?></h5>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <div style="width: 50px;">
                                                    <h5 class="fw-normal mb-0"><?php echo $userProduct['quantity'] ?></h5>
                                                </div>
                                                <div style="width: 80px;">
                                                    <h5 class="mb-0">$ <?php echo $userProduct['price'] ?></h5>
                                                </div>
                                                <button onclick="removeItemFromBasket('<?php echo $userProduct['product_id'] ?>',' <?php echo site_url('update-basket') ?>','<?php echo $userProduct['quantity']; ?>')" style="color: #cecece;"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>


                            </div>
                            <div class="col-lg-5">

                                <div class="card bg-primary text-white rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Card details</h5>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Subtotal</p>
                                            <p class="mb-2">$ <?php echo $total_price; ?></p>
                                        </div>
                                        <button type="button" class="btn btn-info btn-block btn-lg">
                                            <div class="d-flex justify-content-between">
                                                <span>$ <?php echo $total_price; ?></span>
                                                <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                            </div>
                                        </button>


                                        <button type="button" class="btn btn-danger btn-block btn-lg" onclick="deleteBasket('<?php echo site_url('delete-basket') ?>')">
                                            <div class="d-flex justify-content-between">
                                                <span>Empty Basket <i class="fa fa-trash ms-2"></i></span>
                                            </div>
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
