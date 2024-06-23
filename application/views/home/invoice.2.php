<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Invoice template - Bootstrap 4</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .line {
            border-bottom: 3px solid #000;
            width: 100%;
        }

        .line-light {
            width: 100%;
            border-bottom: 1px solid #949597;
        }

        .line-end {
            width: 100%;
            border-bottom: 3px solid #f0c29e;
        }

        .data {
            background-color: #dcdddf;
            padding-left: 45px;
        }

        .data .data-box {
            margin-top: 60px;
        }

        .data .data-box .data-separator {
            border-top: 1px solid #949597;
            width: 10%;
        }

        .content {
            background-color: #f1f1f1;
            padding-right: 45px;
        }

        .without-margin {
            margin: 0 !important;
        }

        /* To break in pages, please use this class */
        /* https://github.com/barryvdh/laravel-snappy/issues/2 */
        .page
        {
            page-break-after: always;
            page-break-inside: avoid;
        }
    </style>
</head>
<body>
    <div id="app" class="container invoice">
        <div class="row">

            <!-- content -->
            <div class="col content py-4">
                <div class="line mt-4 mb-4">
                <h1>INVOICE</h1>
                </div>
                <!-- header -->
                <div class="header">
                    <div class="row">
                        <div class="col-6 from">
                            <span class="d-block font-weight-light">FROM:</span>
                            <h3>My Company</h3>
                            <span class="d-block font-weight-light">123.123.12312</span>
                            <span class="d-block font-weight-light">Address sasd asdas</span>
                            <span class="d-block font-weight-light">315 234 5677</span>
                            <span class="d-block font-weight-light">juan@mycompany.com</span>
                        </div>
                        <div class="col-6 to">
                            <span class="d-block font-weight-light">TO:</span>
                            <h3>Customer</h3>
                            <span class="d-block font-weight-light">123.123.12312</span>
                            <span class="d-block font-weight-light">Address sasd asdas</span>
                            <span class="d-block font-weight-light">315 234 5677</span>
                            <span class="d-block font-weight-light">customer@people.com</span>
                        </div>
                    </div>
                </div>
                <!-- end header -->

                <!-- note -->
                <div class="row my-4">
                    <div class="col-12">
                        <p class="text-justify">Quis sunt mollit nostrud aliqua consectetur voluptate eiusmod proident aute laboris non reprehenderit magna qui. Esse occaecat laboris laborum dolore excepteur enim laboris.</p>
                    </div>
                </div>
                <!-- end note -->

                <!-- items-header -->
                <div class="items-header">
                    <div class="row mt-4 items-header font-weight-bold">
                        <div class="col-12 my-2">
                            <div class="line"></div>
                        </div>
                        <div class="col-6">DESCRIPTION</div>
                        <div class="col-2 text-center">PRICE</div>
                        <div class="col-2 text-center">QUANTITY</div>
                        <div class="col-2 text-right">TOTAL</div>
                        <div class="col-12 my-2">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <!-- end items-header -->

                <!-- items -->
                <div class="items">
                    <div class="row mt-2 list-content">
                        <div class="col-6">
                            <p class="without-margin">Item of the invoice</p>
                            <p class="without-margin text-muted">
                                <small>Date: 2018-02-14</small>
                            </p>
                        </div>
                        <div class="col-2 text-center">$ 2.000</div>
                        <div class="col-2 text-center">2</div>
                        <div class="col-2 text-right">$ 4.000</div>
                    </div>
                </div>
                <!-- end items -->

                <!-- values -->

                <div class="col-12 my-2">
                            <div class="line-end"></div>
                        </div>
                <!-- end values -->

                <!-- accepted payments column -->
                <div class="col-6">
                <div class="col-md-12">
                    <h5>Upload Payment Proof:</h5>
                    <input type="file" class="form-control-file" id="payment-proof" name="payment-proof">
                </div>

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                        Masukan bukti pembayaran
                  </p>
                </div>

                <!-- gratitude -->
                <div class="gratitude text-center my-4">
                    <p class="text-muted">If you have any question about this invoice, please contact us to email dapurdefa@gmail.com, or to the mobile phone (+62) 812 6711 3456.</p>
                    <h2>Thank you</h2>
                </div>
                <!-- end gratitude -->
            <button class="btn btn-success btn-lg float-right" href="#">Submit</button>
            </div>
            <!-- end content -->
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
