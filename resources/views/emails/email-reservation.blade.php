{{-- resources/views/emails/reservation.blade.php --}}

    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reservation Confirmation</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
<h2 style="color: #2c3e50;">Your Reservation is Confirmed 🚗</h2>

<p>Hello,</p>

<p>We’re happy to confirm your reservation with <strong>RentACar</strong>. Here are the details of your booking:</p>

<ul>
    <li><strong>Start Date:</strong> {{ $startDate }}</li>
    <li><strong>End Date:</strong> {{ $endDate }}</li>
    <li><strong>Total Price:</strong> ${{ $totalPrice }}</li>
</ul>

<p>Thank you for choosing RentACar. We look forward to seeing you soon!</p>

<p style="margin-top: 30px;">Best regards,<br>
    The RentACar Team</p>
</body>
</html>
