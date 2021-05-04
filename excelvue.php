<?php session_start(); ?>
<?php if(isset($_SESSION['id'])){ ?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecxel Vue</title>
    <!--External StyleSheets -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stylesheet.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css"
        integrity="sha512-PMjWzHVtwxdq7m7GIxBot5vdxUY+5aKP9wpKtvnNBZrVv1srI8tU6xvFMzG8crLNcMj/8Xl/WWmo/oAP/40p1g=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/DataTables/datatables.min.css" />
    <!-- External StyleSheets -->

    <?php
        include_once('./assets/notiflix.html');
    ?>

    <style>
    /* table {
    display: block;
    overflow-x: auto;
    white-space: nowrap;
}
table tbody {
    display: table;
    width: 100%;
} */
    /* .container {
        background: url("./assets/purpledradient.png");
        background-repeat: no-repeat;
        background-position: center;
    } */

    /* body {
        background: url('https://source.unsplash.com/WEQbe2jBg40/600x1200');
    } */
    </style>
</head>

<body>

    <div style="margin-top:3%"></div>
    <div class="container col-12" >
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link active" id="nav-mainform-tab" data-toggle="tab" href="#nav-mainform" role="tab"
                    aria-controls="nav-mainform" aria-selected="true">Customer Details</a>
                <a class="nav-link" id="nav-dtable-tab" data-toggle="tab" href="#nav-dtable" role="tab"
                    aria-dtabletrols="nav-dtable" aria-selected="false">Data Table</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">


        <div class="tab-pane fade show active" id="nav-mainform" role="tabpanel" aria-labelledby="nav-mainform-tab">
        <form method="POST" id="customer_mainform">


            <div class="container" style="padding:10px 10px;">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Customer Details</legend>
                    <div class="row justify-content-around">
                        <div class="col-3">
                            <label>Business</label>
                            <input type="text" class="form-control" name="business" id="bus_name">
                        </div>
                        <div class="col-3">
                            <label>Product</label>
                            <input type="text" class="form-control" name="product" id="prod_name">
                        </div>
                        <div class="col-3">
                            <label>Country</label>
                            <input type="text" class="form-control" name="country" id="country">
                        </div>
                        <div class="col-3">
                            <label>Type</label>
                            <input type="text" class="form-control" name="bus_type" id="bus_type">
                        </div>
                    </div><br>
                    <div class="row justify-content-around">
                        <div class="col-3">
                            <label>Comments</label>
                            <textarea class="form-control" rows="1" name="comments" id="comment"></textarea>
                        </div>
                        <div class="col-3">
                            <label>Key-Contact(Name)</label>
                            <input type="text" class="form-control" name="key_contact" id="key_contact">
                        </div>
                        <div class="col-3">
                            <label>Designation</label>
                            <input type="text" class="form-control" name="designation" id="designation"></input>
                        </div>
                        <div class="col-3">
                            <label>Tel</label>
                            <input type="text" class="form-control" name="tel" id="tel"></input>
                        </div>
                    </div><br>
                    <div class="row justify-content-around">
                        <div class="col-3">
                            <label>Mobile</label>
                            <input class="form-control" type="text" name="mobile" id="mobile"></textarea>
                        </div>

                        <div class="col-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="col-3">
                            <label>Remarks</label>
                            <textarea class="form-control" rows="1" name="remarks" id="remarks"></textarea>
                        </div>
                        <div class="col-3">
                            <label>Status</label>
                            <textarea class="form-control" rows="1" name="status" id="status"></textarea>
                        </div>


                        <div class="container" style="padding:10px 10px;">
                            <div class="row justify-content-around" style="padding: 10px 10px;">

                                <div class="col-3">
                                    <label>Date</label>
                                    <div class="input-group date" id="cus_datetimepicker" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            data-toggle="datetimepicker" data-target="#cus_datetimepicker"
                                            name="data_time" id="data_time" />
                                        <div class="input-group-append" data-target="#cus_datetimepicker"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <label>Feedback</label>
                                    <textarea class="form-control" rows="1" name="feedback" id="feedback"></textarea>
                                </div>
                                <div class="col-2">
                                    <br>
                                    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
                                    Follow up</button>
                                </div>

                            </div>
                        </div>


                        <div class="form-group row justify-content-center">
                            <center>
                                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
                                    &nbsp;&nbsp;Save</button>
                                <button class="btn btn-danger" type="button" id="cs_print-now"><i class="fa fa-repeat"
                                        aria-hidden="true"></i>&nbsp;Reset</button>
                            </center>
                        </div>
                    </div>
                </fieldset>
            </div>
        <form>
    </div>

        <div class="tab-pane fade d-flex justify-content-center " id="nav-dtable" role="tabpanel" aria-labelledby="nav-dtable-tab">

            <div class="col-md-12" id="warddiv" class="d-flex justify-content-center">
                <table class="table table-hover table-bordered table-striped table-responsive-stack" id="cust_table">
                    <thead class="thead-dark" style="overflow-x: auto">
                        <tr>
                            <th>Business</th>
                            <th>Product</th>
                            <th>Country</th>
                            <th>Type</th>
                            <th>Comments</th>
                            <th>Key-Contact</th>
                            <th>Designation</th>
                            <th>Tel</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Remarks</th>
                            <th>Status</th>
                            <th>Feedback</th>
                            <th>Date</th>


                        </tr>
                    </thead>
                    <tbody id="tab_body">
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    </div>

        <!-- External Scripts -->
        <script src="./assets/js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"
            integrity="sha512-2JBCbWoMJPH+Uj7Wq5OLub8E5edWHlTM4ar/YJkZh3plwB2INhhOC3eDoqHm1Za/ZOSksrLlURLoyXVdfQXqwg=="
            crossorigin="anonymous"></script>
        <script type="text/javascript" src="./assets/DataTables/datatables.min.js"></script>
        <!-- External Scripts -->


        <script>
        $('#customer_mainform').on("submit", function(event) {
            event.preventDefault();
            var id = <?php echo $_SESSION['id'] ?>;
            var datapass = $('#customer_mainform').serializeArray();
            datapass.push({
                "name": "filefrom",
                "value": "mainform"
            });
            datapass.push({
                "name": "id",
                "value": id
            });
            console.log(datapass);

            $.ajax({
                url: "postdetails.php",
                type: "POST",
                data: datapass,
                success: function(d) {

                    if (d != '') {
                        Notiflix.Notify.Success('Data Saved');
                    } else {
                        Notiflix.Notify.Failure('Something went wrong');
                    }
                    getdetails();

                }
            });




        });

        function getdetails() {
            var id = <?php echo $_SESSION['id'] ?>;
            //var senddata = array();
            //senddata.push({"name":"getdata","value":"main_form"});
            var senddata = {
                'getdata': "main_form",
                'id': id
            };
            // senddata.push({"name":"id","value":id});
            $.ajax({
                url: "getdetails.php",
                type: "POST",
                data: senddata,
                success: function(d) {

                    if ($.fn.DataTable.isDataTable("#cust_table")) {
                        console.log('It is data table');

                        $("#cust_table").DataTable().clear().destroy();
                    }
                    $("#tab_body").html("");
                    $("#tab_body").html(d);

                    var tb = $("#cust_table").DataTable({
                        "bPaginate": false,
                        "bInfo": true,
                        "bSort": false,
                        "dom": 'Blfrtip',
                        "destroy": true,
                        "scrollY": "235px",
                        "fixedHeader": false,
                        "scrollCollapse": true,
                        "paging": true,
                        "buttons": [{
                            extend: 'print',
                            className: "primary",
                            attr: {
                                id: 'printtabl'
                            },
                            messageTop: "Customer Table",
                            title: '<center>Customer Details</center>',
                        }],
                    });

                }
            });

        }

        function mainform_populate(id) {
            console.log(id);
        }
        </script>


</body>

</html>
<?php } else{ ?>

<html>

<head>
    <style>
    html {
        background-color: #000121;
        font-family: 'Roboto', sans-serif;

    }

    .maincontainer {
        position: relative;
        top: -50px;
        transform: scale(0.8);
        background: url("https://www.blissfullemon.com/wp-content/uploads/2018/09/HauntedHouseBackground.png");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 700px 600px;
        width: 800px;
        height: 600px;
        margin: 0px auto;
        display: grid;
    }

    .foregroundimg {
        position: relative;
        width: 100%;
        top: -230px;
        z-index: 5;
    }

    .errorcode {
        position: relative;
        top: -200px;
        font-family: 'Creepster', cursive;
        color: white;
        text-align: center;
        font-size: 6em;
        letter-spacing: 0.1em;
    }

    .errortext {
        position: relative;
        top: -260px;
        color: #FBD130;
        text-align: center;
        text-transform: uppercase;
        font-size: 1.8em;
    }

    .bat {
        opacity: 0;
        position: relative;
        transform-origin: center;
        z-index: 3;
    }

    .bat:nth-child(1) {
        top: 380px;
        left: 120px;
        transform: scale(0.5);
        animation: 13s 1s flyBat1 infinite linear;
    }

    .bat:nth-child(2) {
        top: 280px;
        left: 80px;
        transform: scale(0.3);
        animation: 8s 4s flyBat2 infinite linear;
    }

    .bat:nth-child(3) {
        top: 200px;
        left: 150px;
        transform: scale(0.4);
        animation: 12s 2s flyBat3 infinite linear;
    }

    .body {
        position: relative;
        width: 50px;
        top: 12px;
    }

    .wing {
        width: 150px;
        position: relative;
        transform-origin: right center;
    }

    .leftwing {
        left: 30px;
        animation: 0.8s flapLeft infinite ease-in-out;
    }

    .rightwing {
        left: -180px;
        transform: scaleX(-1);
        animation: 0.8s flapRight infinite ease-in-out;
    }

    @keyframes flapLeft {
        0% {
            transform: rotateZ(0);
        }

        50% {
            transform: rotateZ(10deg) rotateY(40deg);
        }

        100% {
            transform: rotateZ(0);
        }
    }

    @keyframes flapRight {
        0% {
            transform: scaleX(-1) rotateZ(0);
        }

        50% {
            transform: scaleX(-1) rotateZ(10deg) rotateY(40deg);
        }

        100% {
            transform: scaleX(-1) rotateZ(0);
        }
    }

    @keyframes flyBat1 {
        0% {
            opacity: 1;
            transform: scale(0.5)
        }

        25% {
            opacity: 1;
            transform: scale(0.5) translate(-400px, -330px)
        }

        50% {
            opacity: 1;
            transform: scale(0.5) translate(400px, -800px)
        }

        75% {
            opacity: 1;
            transform: scale(0.5) translate(600px, 100px)
        }

        100% {
            opacity: 1;
            transform: scale(0.5) translate(100px, 300px)
        }
    }

    @keyframes flyBat2 {
        0% {
            opacity: 1;
            transform: scale(0.3)
        }

        25% {
            opacity: 1;
            transform: scale(0.3) translate(200px, -330px)
        }

        50% {
            opacity: 1;
            transform: scale(0.3) translate(-300px, -800px)
        }

        75% {
            opacity: 1;
            transform: scale(0.3) translate(-400px, 100px)
        }

        100% {
            opacity: 1;
            transform: scale(0.3) translate(100px, 300px)
        }
    }

    @keyframes flyBat3 {
        0% {
            opacity: 1;
            transform: scale(0.4)
        }

        25% {
            opacity: 1;
            transform: scale(0.4) translate(-350px, -330px)
        }

        50% {
            opacity: 1;
            transform: scale(0.4) translate(400px, -800px)
        }

        75% {
            opacity: 1;
            transform: scale(0.4) translate(-600px, 100px)
        }

        100% {
            opacity: 1;
            transform: scale(0.4) translate(100px, 300px)
        }
    }
    </style>
</head>

<body>

    <div class="maincontainer">
        <div class="bat">
            <img class="wing leftwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
            <img class="body" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-body.png" alt="bat">
            <img class="wing rightwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
        </div>
        <div class="bat">
            <img class="wing leftwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
            <img class="body" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-body.png" alt="bat">
            <img class="wing rightwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
        </div>
        <div class="bat">
            <img class="wing leftwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
            <img class="body" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-body.png" alt="bat">
            <img class="wing rightwing" src="https://www.blissfullemon.com/wp-content/uploads/2018/09/bat-wing.png">
        </div>
        <img class="foregroundimg"
            src="https://www.blissfullemon.com/wp-content/uploads/2018/09/HauntedHouseForeground.png"
            alt="haunted house">

    </div>
    <h1 class="errorcode">ERROR 403</h1>
    <div class="errortext">This area is forbidden. Turn back now!</div>

</body>

</html>

<?php } ?>