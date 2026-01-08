<!DOCTYPE html>
<html>

<head>
    <title>New Car Rental Notification</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-warning text-dark">
                <h4>New Car Rental Notification</h4>
            </div>
            <div class="card-body">
                <p>Dear Admin,</p>
                <p>A new rental has been made. Below are the rental details:</p>

                <div class="mt-4">
                    <h5>Car Details:</h5>
                    <p><strong>Car Name:</strong> {{ $rental->car->name }}</p>
                    <p><strong>Car Model:</strong> {{ $rental->car->model }}</p>
                    <p><strong>Car Type:</strong> {{ $rental->car->car_type }}</p>
                    <p><strong>Brand:</strong> {{ $rental->car->brand }}</p>
                </div>

                <div class="mt-4">
                    <h5>Customer Booking Details:</h5>
                    <p><strong>Customer Name:</strong> {{ $rental->user->name }}</p>
                    <p><strong>Rental Start Date:</strong> {{ $rental->start_date }}</p>
                    <p><strong>Rental End Date:</strong> {{ $rental->end_date }}</p>
                    <p><strong>Total Cost:</strong> ${{ number_format($rental->total_cost, 2) }}</p>
                </div>

                <p class="mt-4">Please follow up as needed to ensure a smooth rental experience.</p>

                <p>Best Regards,<br>Car Rental Service Team</p>
            </div>
        </div>
    </div>
</body>

</html>