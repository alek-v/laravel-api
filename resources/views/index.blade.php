<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>API</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <h1>Quotes API</h1>
        <div class="row p-3 border-bottom">
            <div class="col-2 fw-bold">Show random quote:</div>        
            <div class="col">{{ config('app.url') }}/quotes/random</div>            
        </div>
    </div>
</body>
</html>