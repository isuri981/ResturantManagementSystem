<!-- resources/views/feedback/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Feedback</title>
    <!-- Link to a CSS framework like Bootstrap for quick styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   

    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .feedback-form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .feedback-form h1 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .feedback-form textarea {
            resize: vertical;
        }
        .feedback-form button {
            width: 100%;
            font-size: 16px;
        }
        .feedback-form .form-text {
            text-align: center;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="feedback-form container">
        <h1>Customers Feedback</h1>
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <textarea class="form-control" name="feedback" placeholder="Enter your feedback here..." rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <input type="number" class="form-control" name="rating" min="1" max="5" placeholder="Rating (1-5)" required>
                <div class="form-text">Please rate us from 1 to 5.</div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="customer_name" placeholder="Your Name (optional)">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="customer_email" placeholder="Your Email (optional)">
            </div>
            <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </form>
    </div>

    <!-- Bootstrap JS for better form controls (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
