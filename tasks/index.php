<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    /* Insurance Section */
    .insurance-head {
        background: #00529B;
        color: white;
    }

    .insurance-head2 {
        background: #FFEB3B;
    }

    .insurance-heading2 {
        background: #BDD6EE;
    }

    .benefit-column h5 {
        background: #A6A6A6;
        color: white;
    }

    .benefit-column.text-column {
        background: #F2F2F2;
        color: black;
    }

    p {
        border: 1px solid #C0C0C0;
        margin: 0px;
    }

    .insurance-footer {
        background: #A6A6A6;
        color: white;
    }

    .date-time-trip {
        background: #F2F2F2;
        font-weight: bold;
    }

    .date-time-trip span {
        color: #08589E;
    }

    .last-footer {
        background: #41FC03;
    }

    .total-cost {
        font-weight: bold;
    }

    a.buying-link {
        font-weight: bold;
        color: black;
        font-size: 30px;
    }

    /* Insurance Section ends here */

    /* Table Css  */
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    /* Table css ends here */
</style>

<body>
    <section class="insurance-section mt-5 ">
        <div class="container">
            <div class="row insurance-row ">
                <div class="col-md-10 col-sm-10 px-0 ">
                    <div class="insurance-head">
                        <h3 class="mb-0 ms-2">Your Insurance Plan</h3>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 pe-0 ps-0">
                    <div class="insurance-head2 pe-3">
                        <h3 class="mb-0 ms-2">RECOMMENDED</h3>
                    </div>
                </div>
            </div>
            <div class="row insurance-row2">
                <div class="col-md-12 col-sm-12 px-0">
                    <div class="insurance-heading2 text-center">
                        <h3 class="mb-0">SCHEDULE OF BENEFITS</h3>
                    </div>
                </div>
            </div>
            <div class="row insurance-component">
                <div class="col-md-4 col-sm-4 border border-2 px-0">
                    <div class="image-column  text-center">
                        <img src="Capture.PNG">
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 border px-0">
                    <div class="benefit-column text-column border text-center">
                        <h5>Benefits</h5>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 border px-0">
                    <div class="benefit-column border text-center">
                        <h5>Person Per Limit</h5>
                        <p>70%</p>
                        <p>70%</p>
                        <p>70%</p>
                        <p>70%</p>
                        <p>70%</p>
                        <p>70%</p>
                        <p>70%</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 border px-0">
                    <div class="benefit-column text-column border text-center">
                        <h5>Benefits</h5>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                        <p>Trip Canellation Percent</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 border px-0">
                    <div class="benefit-column border text-center">
                        <h5>Person Per Limit</h5>
                        <p>70%</p>
                        <p>70%</p>
                        <p>70%</p>
                        <p>70%</p>
                        <p>70%</p>
                        <p>70%</p>
                        <p>70%</p>
                    </div>
                </div>
            </div>
            <div class="row insurance-footer">
                <div class="col-md-12 col-sm-12">
                    <div class="insurance-footer text-center">
                        <h5>Quote Based On</h5>
                    </div>
                </div>
            </div>
            <div class="row date-time-trip  text-center">
                <div class="col-md-4 px-0 col-sm-4">
                    <p><span>Dates:</span>2/1/2021-2/9/2020</p>
                </div>
                <div class="col-md-4 px-0 col-sm-4">
                    <p><span>Dates:</span>2/1/2021-2/9/2020</p>
                </div>
                <div class="col-md-4 px-0 col-sm-4">
                    <p><span>Dates:</span>2/1/2021-2/9/2020</p>
                </div>
            </div>
            <div class="row last-footer">
                <div class="col-md-6 px-0 col-sm-6">
                    <div class="total-cost">
                        <h2 class="ms-2">COST Per Person: $200</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 ">
                    <div class="purchase-link text-end  ">
                        <a href="#" class="buying-link">Click Here to Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="table-section my-5">
        <div class="container">
            <div class="row-table">
                <h2>HTML Table</h2>
                <form action="index.php" method="post" id="form">
                    <table>
                        <tr>
                            <th>Action</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Tax</th>
                            <th>Extended Price</th>
                        </tr>
                        <tr>
                            <td>
                                <button onclick="updateQuantity(1, 1)">+</button>
                                <button onclick="updateQuantity(1, -1)">-</button>
                            </td>
                            <td>Item 1</td>
                            <td id="quantity-1" name="quantity-1">0</td>
                            <td id="price-1" name="price-1">0</td>
                            <td id="total-1" name="total-1">0</td>
                        </tr>
                        <tr>
                            <td>
                                <button onclick="updateQuantity(2, 1)">+</button>
                                <button onclick="updateQuantity(2, -1)">-</button>
                            </td>
                            <td>Item 2</td>
                            <td id="quantity-2" name="quantity-2">0</td>
                            <td id="price-2" name="price-2">0</td>
                            <td id="total-2" name="total-2">0</td>
                        </tr>
                        <tr>
                            <td>
                                <button onclick="updateQuantity(3, 1)">+</button>
                                <button onclick="updateQuantity(3, -1)">-</button>
                            </td>
                            <td>Item 3</td>
                            <td id="quantity-3" name="quantity-3">0</td>
                            <td id="price-3" name="price-3">0</td>
                            <td id="total-3" name="total-3">0</td>
                        </tr>
                        <tr>
                            <td>
                                <button onclick="updateQuantity(4, 1)">+</button>
                                <button onclick="updateQuantity(4, -1)">-</button>
                            </td>
                            <td>Item 4</td>
                            <td id="quantity-4" name="quantity-4">0</td>
                            <td id="price-4" name="price-4">0</td>
                            <td id="total-4" name="total-4">0</td>
                        </tr>
                        <tr>
                            <th>Sub Total</th>
                            <td id="subTotal"> 0</td>
                        </tr>
                    </table>
                </form>

                <script>
                    function updateQuantity(item, change) {
                        const quantityElement = document.getElementById(`quantity-${item}`);
                        const priceElement = document.getElementById(`price-${item}`);
                        const totalElement = document.getElementById(`total-${item}`);
                        const subTotalElement = document.getElementById(`subTotal`);

                        const quantity = parseInt(quantityElement.textContent, 10) + change;
                        const price = parseInt(priceElement.textContent, 10) + 10;
                        const total = parseInt(totalElement.textContent, 10) + (quantity + price);
                        const subTotal = parseInt(subTotalElement.textContent, 10) + (change + total);

                        quantityElement.textContent = quantity;
                        priceElement.textContent = price;
                        totalElement.textContent = total;
                        subTotalElement.textContent = subTotal;
                        // Send the data to the PHP script
                        const data = {
                            item: item,
                            quantity: quantity,
                            price: price,
                            total: total
                        };

                        fetch('index.php', {
                                method: 'POST',
                                body: JSON.stringify(data)
                            })
                            .then(response => response.text())
                            .then(result => console.log(result))
                            .catch(error => console.error(error));
                    }
                </script>
                <?php
                $data = $_POST;

                asort($data);

                foreach ($data as $key => $value) {
                    echo "$key: $value<br>";
                }
                ?>

            </div>
        </div>

    </section>
</body>

</html>