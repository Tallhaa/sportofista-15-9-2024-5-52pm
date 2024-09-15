<?php
include ('header.php')
?>
<?php
include ('sidebar.php')
?>





<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $customer = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $payment = $_POST['payment'];
} 
                                                                                   
?>
<main id="main" class="main">
    <div class="pagetitle">
        <div class="container-fluid mt-5">
            <h2 class="mb-5 text-center">Cricket Accessories</h2>
            <hr>
            <form action="" method="post">
                <div class="row justify-content-center">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Rent Per day</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">Bat</td>
                                                <td><span class="text-muted">Rs.1500</span></td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" name="quantity" id=""
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Ball</td>
                                                <td><span class="text-muted">Rs.150</span></td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" name="quantity" id=""
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td scope="row">Wickets Set</td>
                                                <td><span class="text-muted">Rs.1200</span></td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" name="quantity" id=""
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                    </div>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td scope="row">Cricket Kit</td>
                                                <td><span class="text-muted">Rs.2000</span></td>
                                                <td>
                                                    <div class="form-group">

                                                        <input type="text" name="quantity" id=""
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="" class="text-center"><b>Customer Details</b></label>

                                </div>
                                <div class="form-group">
                                    <label for=""><b>Name:</b></label>
                                    <input type="text" name="name" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Address:</b></label>
                                    <input type="text" name="address" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Contact:</b></label>
                                    <input type="text" name="contact" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for=""><b>Email:</b></label>
                                    <input type="email" name="email" id="" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group ">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="payment" id=""
                                                value="CASH ON DELIVERY">
                                            CASH ON DELIVERY
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group py-4">
                                    <button type="submit" class="btn btn-outline-info  ">Confirm Booking</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12 py-3">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="card-title">Terms And Conditions</h1>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi
                                    soluta
                                    nostrum accusamus obcaecati vero, nulla itaque perferendis quaerat tenetur quidem
                                    facere
                                    a deserunt repellat deleniti ducimus aut. Veniam, quisquam nisi.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</main>

<?php
include ('footer.php')
?>