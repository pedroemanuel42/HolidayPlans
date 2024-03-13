<!DOCTYPE html>
<html>
<head>
    <title>Holiday Plans PDF</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #333;
        }

        .info {
            margin-top: 20px;
            text-align: left;
        }

        .info p {
            margin: 8px 0;
        }

        .info label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Holiday Plans PDF</h1>

    <div class="card">
        <h1>Holiday Plans</h1>

        <div class="info">
            <label>ID:</label>
            <p>{{ $holidayPlan->id }}</p>

            <label>Title:</label>
            <p>{{ $holidayPlan->title }}</p>

            <label>Date:</label>
            <p>{{ $holidayPlan->date }}</p>

            <label>Description:</label>
            <p>{{ $holidayPlan->description }}</p>

            <label>Participants:</label>
            <p>{{ $holidayPlan->participants ?? 'None' }}</p>
        </div>
    </div>
</body>
</html>
