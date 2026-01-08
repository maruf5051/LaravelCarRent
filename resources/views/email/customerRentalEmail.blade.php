<!DOCTYPE html>
<html>

<head>
    <title>Rental Confirmation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4>Rental Confirmation</h4>
            </div>
            <div class="card-body">
                <p>Dear {{ $rental->user->name }},</p>
                <p>Thank you for choosing our car rental service. Below are your rental details:</p>

                <div class="mt-4">
                    <h5>Car Details:</h5>
                    <p><strong>Car Name:</strong> {{ $rental->car->name }}</p>
                    <p><strong>Car Model:</strong> {{ $rental->car->brand }}</p>
                    <p><strong>Car Type:</strong> {{ $rental->car->car_type }}</p>
                    <p><strong>Brand:</strong> {{ $rental->car->model }}</p>
                </div>

                <div class="mt-4">
                    <h5>Booking Details:</h5>
                    <p><strong>Rental Start Date:</strong> {{ $rental->start_date }}</p>
                    <p><strong>Rental End Date:</strong> {{ $rental->end_date }}</p>
                    <p><strong>Total Cost:</strong> ${{ number_format($rental->total_cost, 2) }}</p>
                </div>

                <p class="mt-4">We look forward to providing you with the best experience possible.</p>
                <p>Thank you for your trust in us.</p>

                <p>Best Regards,<br>RENTACAR</p>
            </div>
        </div>
    </div>
</body>

</html>