<?php
include ('header.php')
?>
<?php
include ('sidebar.php')
?>

<main id="main" class="main">
    <div class="pagetitle">
        <div class="container mt-5">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h2 class="mb-5 text-center">Cricket Accessories</h2>
                            <div class="table-responsive">
                                <table id="myTable" class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Name</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th class="text-right"><span id="amount" class="amount">Amount</span> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img
                                                            src="https://image.flaticon.com/icons/png/512/3144/3144467.png">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Product One</p>
                                            </td>
                                            <td>
                                                <div class="button-container">
                                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input type="text" name="qty" min="0" class="qty form-control"
                                                        value="0" />
                                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="72" class="price form-control" disabled>
                                            </td>
                                            <td align="right">Rs <span id="amount" class="amount">0</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img
                                                            src="https://image.flaticon.com/icons/png/512/3144/3144467.png">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Product Two</p>
                                            </td>
                                            <td>
                                                <div class="button-container">
                                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input type="text" name="qty" min="0" class="qty form-control"
                                                        value="0" />
                                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="125" class="price form-control" disabled>
                                            </td>
                                            <td align="right">Rs <span id="amount" class="amount">0</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img
                                                            src="https://image.flaticon.com/icons/png/512/3144/3144467.png">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Product Three</p>
                                            </td>
                                            <td>
                                                <div class="button-container">
                                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input type="text" name="qty" min="0" class="qty form-control"
                                                        value="0" />
                                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="250" class="price form-control" disabled>
                                            </td>
                                            <td align="right">Rs <span id="amount" class="amount">0</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="product-img">
                                                    <div class="img-prdct"><img
                                                            src="https://image.flaticon.com/icons/png/512/3144/3144467.png">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>Product Four</p>
                                            </td>
                                            <td>
                                                <div class="button-container">
                                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input type="text" name="qty" min="0" class="qty form-control"
                                                        value="0" />
                                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="300" class="price form-control" disabled>
                                            </td>
                                            <td align="right">Rs <span id="amount" class="amount">0</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4"></td>
                                            <td align="right"><strong>TOTAL = Rs <span id="total"
                                                        class="total">0</span></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 py-md-2">
                                        <label for="">Customer Name</label>
                                        <input type="text" name="" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId">
                                    </div>
                                    <div class="col-md-6 py-md-2">
                                        <label for="">Customer Email</label>
                                        <input type="text" name="" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId">
                                    </div>
                                    <div class="col-md-6 py-md-2">
                                        <label for="">Customer Contact</label>
                                        <input type="text" name="" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId">
                                    </div>
                                    <div class="col-md-6 py-md-2">
                                        <label for="">Customer Address</label>
                                        <input type="text" name="" id="" class="form-control" placeholder=""
                                            aria-describedby="helpId">
                                    </div>

                                    <div class="col-md-6 py-md-2">
                                        <label for="" class="text-capitalize">Payment Method:</label>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="" id=""
                                                    value="checkedValue" checked>
                                                Cash On Delivery
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 py-md-2">
                                        <h3>Terms and Conditions</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate,
                                            consequuntur.
                                        </p>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success">Confirm Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                update_amounts();
                $('.qty, .price').on('keyup keypress blur change', function (e) {
                    update_amounts();
                });
            });
            function update_amounts() {
                var sum = 0.0;
                $('#myTable > tbody  > tr').each(function () {
                    var qty = $(this).find('.qty').val();
                    var price = $(this).find('.price').val();
                    var amount = (qty * price)
                    sum += amount;
                    $(this).find('.amount').text('' + amount);
                });
                $('.total').text(sum);
            }



            //----------------for quantity-increment-or-decrement-------
            var incrementQty;
            var decrementQty;
            var plusBtn = $(".cart-qty-plus");
            var minusBtn = $(".cart-qty-minus");
            var incrementQty = plusBtn.click(function () {
                var $n = $(this)
                    .parent(".button-container")
                    .find(".qty");
                $n.val(Number($n.val()) + 1);
                update_amounts();
            });

            var decrementQty = minusBtn.click(function () {
                var $n = $(this)
                    .parent(".button-container")
                    .find(".qty");
                var QtyVal = Number($n.val());
                if (QtyVal > 0) {
                    $n.val(QtyVal - 1);
                }
                update_amounts();
            });

        </script>
    </div>
</main>
<?php
 include ('footer.php')
?>