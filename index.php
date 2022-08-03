<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Tiny-Js MPESA TRANSACTION👋</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        body {
            background-color: #3289cd
        }

        .card {
            width: 350px;
            border: none;
            border-radius: 5px
        }

        .container {
            height: 100vh
        }

        .top {
            padding: 18px;
            background-color: #ff8900;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            color: #fff
        }

        .middle {
            height: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column !important;
            padding: 10px
        }

        .bottom {
            padding: 10px;
            background: #eee;
            padding-top: 30px
        }

        .input-group {
            width: 109px
        }

        .add {
            height: 38px;
            border-radius: 4px;
            margin-left: 40px;
            padding-right: 22px;
            padding-left: 20px
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #8bbafe;
            outline: 0;
            box-shadow: none
        }
    </style>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="d-flex justify-content-center align-items-center container px-2">
        <div class="card">
            <div class="top d-flex flex-row align-items-center"> 
                   
                <h6 class="mb-0 mr-2">Stk push vannila js👋</h6> 
            </div>
            <div class="middle"> <img src="./product.png" width="150" class="mt-3">
                <h5>Pineapple Green Packham</h5> <span>Each - approx 1.2KG</span>
            </div>
            <div class="bottom d-flex flex-row justify-content-center">
                <div class="input-group mb-3"> <span class="input-group-text">+</span> <input type="text"
                        class="form-control" value="1"> <span class="input-group-text">-</span> </div> <button
                    class="btn btn-success btn-sm add" onclick="pay()">Buy For <b>Ksh 200</b></button>
            </div>
        </div>
    </div>
    <script>
        function pay() {

            var url = "https://tinypesa.com/api/v1/express/initialize";

            fetch(url, {
                body: "amount=1&msisdn=0792838209&account_no=ONEKENYA ONLINE SHOP",
                headers: {
                    Apikey: "BnipVrSGzzW",
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                method: "POST",
            });

        }

    </script>
    <script type='text/javascript'
        src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>

</body>

</html>
