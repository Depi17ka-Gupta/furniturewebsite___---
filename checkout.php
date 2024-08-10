<?php
include('header1.php');
?>
<!-- Checkout -->
<div class="container-fluid checkout-section d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-2 fs-2 fw-bold">

                Checkout

            </div>
            <div class="col-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="javascript"><i class="fa fa-heart-o text-black"
                                    aria-hidden="true"></i></a></li>
                        <li class="breadcrumb-item active fw-bold" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Delivery-Order-Summary -->
<div class="container-fluid delivery-order py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 delivery-address">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="delivery-address-order p-4 position-relative">
                            <div class="delivery">
                                <div class="row">
                                    <div class="col-lg-12 fs-3 fw-bold pb-1">
                                        Delivery Address
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="bg-white p-3">
                                                    <div class="row">
                                                        <div class="col-lg-12 fw-bold fs-5">
                                                            Jack Jennas
                                                        </div>
                                                        <div class="col-lg-12">
                                                            Address :8424 James Lane South San Francisco, CA 94080
                                                        </div>
                                                        <div class="col-lg-12">
                                                            Pin Code : +380
                                                        </div>
                                                        <div class="col-lg-12">
                                                            Phone : + 380 (0564) 53 - 29 - 68
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="bg-white p-3">
                                                    <div class="row">
                                                        <div class="col-lg-12 fw-bold fs-5">
                                                            Jack Jennas
                                                        </div>
                                                        <div class="col-lg-12">
                                                            Address :8424 James Lane South San Francisco, CA 94080
                                                        </div>
                                                        <div class="col-lg-12">
                                                            Pin Code : +380
                                                        </div>
                                                        <div class="col-lg-12">
                                                            Phone : + 380 (0564) 53 - 29 - 68
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="delivery-option p-4 my-4 position-relative">
                            <div class="delivery-options-st">
                            <div class="row">
                                <div class="col-lg-12 fs-3 fw-bold pb-1">
                                    Delivery Option
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="bg-white p-3">
                                            <input type="radio" name="option">
                                                <label class="fw-bold px-2">Standard
                                                    Delivery Option</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="bg-white p-3">
                                            <input type="radio" name="option">
                                                <label class="fw-bold px-2">Future Delivery
                                                    Option</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="delivery-payment p-4">
                           <div class="delivery-payment-mode position-relative">
                           <div class="row">
                                <div class="col-lg-12 fs-3 fw-bold pb-1">
                                    Payment Option
                                </div>
                                <div class="col-lg-12">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item border-0">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <input type="radio" id="option">
                                                    <label for="option" class="fw-bold ps-2">Cash On Delivery</label>
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>Pay digitally with SMS Pay Link. Cash may not be accepted in
                                                        COVID restricted areas.</strong> It is shown by


                                                    <code>Know more</code>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-0 my-3">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    <input type="radio" id="option">
                                                    <label for="option" class="fw-bold ps-2">Credit or Debit
                                                        Card</label>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is
                                                    hidden

                                                    the <code>.accordion-body</code>, though the transition does limit
                                                    overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-0 my-3">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    <input type="radio" id="option">
                                                    <label for="option" class="fw-bold ps-2">Net Banking</label>
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is
                                                    hidden

                                                    the <code>.accordion-body</code>, though the transition does limit
                                                    overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item border-0 my-3">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    <input type="radio" id="option">
                                                    <label for="option" class="fw-bold ps-2">My Wallet</label>
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is
                                                    hidden

                                                    the <code>.accordion-body</code>, though the transition does limit
                                                    overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-summary">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="order-summary-heading p-4">
                            <div class="row">
                                <div class="col-lg-12 fs-3 fw-bold pb-1 border-bottom">
                                    Order Summery
                                </div>
                                <div class="col-lg-12 border-bottom py-3">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-lg-8">
                                                    <div class="row justify-content-center align-items-center">
                                                        <div class="col-lg-3">
                                                            <img src="img/beoplay-ai1.png" class="img-fluid" alt="img">
                                                        </div>
                                                        <div class="col-lg-9">
                                                            beoplay A1
                                                            <span>X 1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 text-center">
                                                    $32.34
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-lg-8">
                                                    <div class="row justify-content-center align-items-center">
                                                        <div class="col-lg-3">
                                                            <img src="img/lamp1.png" class="img-fluid" alt="img">
                                                        </div>
                                                        <div class="col-lg-9">
                                                            Victo Pedant Lamp
                                                            <span>X 1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 text-center">
                                                    $32.34
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-lg-8">
                                                    <div class="row justify-content-center align-items-center">
                                                        <div class="col-lg-3">
                                                            <img src="img/victo-lamp1.png" class="img-fluid" alt="img">
                                                        </div>
                                                        <div class="col-lg-9">
                                                            Lamp
                                                            <span>X 1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 text-center">
                                                    $32.34
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-lg-8">
                                                    <div class="row justify-content-center align-items-center">
                                                        <div class="col-lg-3">
                                                            <img src="img/pia-chair1.png" class="img-fluid" alt="img">
                                                        </div>
                                                        <div class="col-lg-9">
                                                            Pia Chair
                                                            <span>X 1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 text-center">
                                                    $32.34
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12 py-3 border-bottom">
                                            <div class="row">
                                                <div class="col-lg-12 pb-2">
                                                    <div class="row justify-content-between align-items-center">
                                                        <div class="col-lg-3 text-center">
                                                            Subtotal
                                                        </div>
                                                        <div class="col-lg-4 text-center">
                                                            $111.81
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row justify-content-between align-items-center">
                                                        <div class="col-lg-3 text-center">
                                                            Shipping
                                                        </div>
                                                        <div class="col-lg-4 text-center">
                                                            $8.90
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 py-2">
                                                    <div class="row justify-content-between align-items-center">
                                                        <div class="col-lg-3 text-center">
                                                            Tax
                                                        </div>
                                                        <div class="col-lg-4 text-center">
                                                            $29.498
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row justify-content-between align-items-center">
                                                        <div class="col-lg-3 text-center text-warning">
                                                            Coupon/Code
                                                        </div>
                                                        <div class="col-lg-4 text-center text-warning">
                                                            Coupon/Code
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 pt-3">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-lg-3 fs-5 fw-bold text-center">
                                                    Total (USD)
                                                </div>
                                                <div class="col-lg-4 text-center">
                                                    $19.28
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 my-3">
                        <div class="availability-offers">
                            <div class="row p-4">
                                <div class="col-lg-12">
                                    <div class="row">

                                        <div class="col-lg-1">
                                            <div>
                                                <img src="img/percentage-image.svg" class="img-fluid" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 fs-5 fw-bold">
                                            Available Offers
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 available-offers pt-2">
                                    <ul>
                                        <li><a href="javascript" class="text-black pb=2">Combo: BB Royal Almond/Badam
                                                Californian, Extra Bold 100 gm...</a></li>
                                        <li><a href="javascript" class="text-black">combo: Royal Cashew Californian,
                                                Extra Bold 100 gm + BB Royal Honey 500 gm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="javascript" class="btn bg-warning text-white w-100">Place Order</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
</div>



<?php
include('footer.php');
?>