<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class='container-fluid p-4 d-flex justify-content-center'>
        <div style="width:300px;box-shadow:0px 0px 3px 1px #ccc" class='p-4 bg-white'>
            <img src='./pic.jpg' class='w-100'>
            <p class='text-center'>Asus i7 laptop | Price : 72000</p>
            <hr>
            <form method="GET" action="payment.php">
                <div class="form-group">
                    <label for="name">CUSTOMER'S NAME</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="mobile">MOBILE NO</label>
                    <input type="number" name="mobile" class="form-control" id="mobile">
                </div>
                <div class="form-group">
                    <label for="email">EMAIL ID</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <button class="btn btn-primary" type="submit">BUY NOW</button>
            </form>
            <hr>
            <h4>Refund request</h4>
            <form method="POST" action="refund.php">
                <div class="form-group">
                    <label for="payment_id">PAYMENT ID</label>
                    <input type="text" name="payment_id" class="form-control" id="payment_id">
                </div>
                <div class="form-group">
                    <label for='issue'>CAUSE OF REFUND</label>
                    <textarea class="form-control" rows="4" name="issue" id="issue"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">REQUEST REFUND</button>
            </form>


        </div>

    </div>
    

</body>

</html>