<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stopwatch</title>
    <style>
        #stopwatch {
            font-size: 30px;
            margin: 20px;
        }
    </style>

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">


<div class="bg-white p-8 rounded-lg shadow-lg text-center">
        <div id="stopwatch" class="text-4xl font-mono mb-6">00:00:00.00</div>
        <div class="flex justify-center space-x-4">
            <button onclick="start()" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Start</button>
            <button onclick="stop()" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Stop</button>
            <button onclick="reset()" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Reset</button>
        </div>
    </div>

    <script src="script.js">
        
    </script>
</body>
</html>
