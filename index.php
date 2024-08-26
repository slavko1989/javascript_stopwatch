<!DOCTYPE html>
<html>
<head>
    <title>Stopwatch</title>
    <style>
        #stopwatch {
            font-size: 30px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <div id="stopwatch">00:00:00.00</div>
    <button onclick="start()">Start</button>
    <button onclick="stop()">Stop</button>
    <button onclick="reset()">Reset</button>

    <script>
        let timer;
        let milliseconds = 0;
        let seconds = 0;
        let minutes = 0;
        let hours = 0;
        let isRunning = false;

        function updateDisplay() {
            document.getElementById('stopwatch').textContent =
                (hours < 10 ? '0' : '') + hours + ':' +
                (minutes < 10 ? '0' : '') + minutes + ':' +
                (seconds < 10 ? '0' : '') + seconds + '.' +
                (milliseconds < 10 ? '0' : '') + (milliseconds < 100 ? '0' : '') + milliseconds;
        }

        function start() {
            if (!isRunning) {
                timer = setInterval(() => {
                    milliseconds++;
                    if (milliseconds >= 100) {
                        milliseconds = 0;
                        seconds++;
                    }
                    if (seconds >= 60) {
                        seconds = 0;
                        minutes++;
                    }
                    if (minutes >= 60) {
                        minutes = 0;
                        hours++;
                    }
                    updateDisplay();
                }, 10); // Update every 10 milliseconds
                isRunning = true;
            }
        }

        function stop() {
            if (isRunning) {
                clearInterval(timer);
                isRunning = false;
            }
        }

        function reset() {
            clearInterval(timer);
            isRunning = false;
            milliseconds = 0;
            seconds = 0;
            minutes = 0;
            hours = 0;
            updateDisplay();
        }
    </script>
</body>
</html>
