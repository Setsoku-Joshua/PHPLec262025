
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container rounded-3 w-100 p-3 my-5 bg-dark ">

  <div class="container rounded-3 w-80 p-3 my-3 bg-info">
  <div class="text-white text-center">
  <span class="display-5 fw-bold">Hotel Reservation Form <br> </span>
  <span class="display-7">Fill up this form to reserve</span>

  </div>
    </div>
<div class="container align-items-center">

    <div class="text-info text-start mb-5">
  <span class="display-6 fw-bold">Guest Information<br> </span>
    </div>


    <form action="jroutput.php" method="post">
    <div class="row text-white align-items-center rounded-3">
                    <label for="" class="d-block">Full Name:</label>
                    <div class="col-5">
                        <div class="container align-items-center">
                            <input type="text" name="jrFname" id="jrFname" class="form-control" placeholder="First Name">
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="container align-items-center"">
                            <input type="text" name="jrLname" id="jrLname" class="form-control" placeholder="Last Name">

                        </div>
                    </div>              

                    <div class="row mt-4 align-items-center">

<label for="" class="d-block">Email Address:</label>
<div class="col-8">
    <div class="container">
        <input type="email" name="jrEmail" id="jrEmail" class="form-control" placeholder="Email">

    </div>
</div>

<label for="" class="d-block mt-3">Contact Number:</label>
<div class="col-8">
    <div class="container">
        <input type="number" name="jrContact" id="jrContact" class="form-control" placeholder="09082570896">

    </div>
</div>

<label for="" class="d-block mt-3">Address:</label>
                    <div class="col-8">
                        <div class="container">
                            <input type="text" name="jrAdd" id="jrAdd" class="form-control" placeholder="Street, City, Province, Country">
                        </div>
                    </div>

                    
    <div class="text-info text-start mt-5 mb-5">
  <span class="display-6 fw-bold">Room Reservation<br> </span>
    </div>

    <label for="" class="d-block">Check-in date</label>
                    <div class="col-8">
                        <div class="container">
                            <input type="date" name="jrDate" id="jrDate" class="form-control">
                        </div>
                    </div>

                    <label for="" class="d-block mt-3">No. of days</label>
<div class="col-8">
    <div class="container">
        <input type="number" name="jrDayNo" id="jrDayNo" class="form-control" placeholder="ex. 9">
    </div>
</div>


<span class="mt-5 ">Room Preferences</span>

                                <div class="form-check-inline">
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio" name="jrRoomPref" id="" class="form-check=input" value="Standard">
                                            <label for="">Standard (P1500.00) </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check-inline">
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio" name="jrRoomPref" id="" class="form-check=input" value="Deluxe">
                                            <label for="">Deluxe (P3000.00) </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check-inline">
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio" name="jrRoomPref" id="" class="form-check=input" value="Suite">
                                            <label for="">Suite (P4500.00) </label>
                                        </div>
                                    </div>
                                </div>

<div class="row text-white align-items-center rounded-3 mt-3">
                    <label for="" class="d-block">No. of Guest</label>
                    <div class="col-5">

                        <div class="container mt-2">
                        <label for="" class="d-block">Adult</label>
                            <input type="number" name="jrAdult" id="jrAdult" class="form-control" placeholder="Max:3">
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="container mt-2">
                        <label for="" class="d-block">Children</label>
                            <input type="number" name="jrChildren" id="jrChildren" class="form-control" placeholder="Max:2">

                        </div>
                    </div>              

                    <label for="" class="d-block mt-3">Additional No. of Guests</label>
<div class="col-8">
    <div class="container">
        <input type="number" name="jrAddNo" id="jrAddNo" class="form-control">

    </div>
</div>

<label for="" class="d-block">Special Request</label>
<div class="col-8">
    <div class="container">
        <input type="text" name="jrSR" id="jrSR" class="form-control">

    </div>
</div>


<div class="row">
<div class="col text-center">
<input type="submit" name="jrReserve" id="jrReserve"
value="Reserve" class="btn bg-info  rounded-3 w-75 p-3 my-5 ">
</div>
</div>


<div class="container w-100 bg-info p-3 my-2">
  <div class="text-white text-center">
  <span class="display-6">JRHotels@gmail.com</span>

  </div>
    </div>

    </div>
</form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


<?php 


if (isset($_POST['jrReserve'])) {

$jrFname = $_POST['jrFname'];
$jrLname = $_POST['jrLname'];
$jrEmail = $_POST['jrEmail'];
$jrContact = $_POST['jrContact'];
$jrAdd = $_POST['jrAdd'];
$jrDate = $_POST['jrDate'];
$jrDayNo = $_POST['jrDayNo'];
$jrRoomPref = $_POST['jrRoomPref'];
$jrAdult = $_POST['jrAdult'];
$jrChildren = $_POST['jrChildren'];
$jrAddNo = $_POST['jrAddNo'];
$jrSR = $_POST['jrSR'];

$jrBill = 0;
 
switch ($jrRoomPref) {
    case 'Standard':
        $jrBill = $jrBill + 1500.00;
        break;
    case 'Deluxe':
        $jrBill = $jrBill + 3000.00;
        break;
    case 'Suite':
        $jrBill = $jrBill + 4500.00;
        break;
    
    default:
echo "No room selected";
    break;
}




}

?>
