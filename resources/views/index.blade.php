<html lang="en">
<head>
    <title>Fibonacci Series</title>

    <style>
        .center {
            margin: 20% auto;
            width: 20%;
        }
    </style>
</head>
<body>


<div class="center">
    <label for="input">Enter The Position (n):</label>
    <div style="width: 100%"></div>
    <input type="text" id="input" value="5">
    <input type="submit" id="submit" value="Submit" onclick="processValue()">
    <p> Output </p>
    <p id="output"></p>
</div>


</body>
</html>


<script>
    function processValue(){
        let inputValue = document.getElementById('input').value
        if(inputValue === '') alert('Nothing Provided')
        let url = 'fibonacci/'+inputValue;

        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {   // XMLHttpRequest.DONE == 4
                if (xhr.status === 200) {
                    let msg = 'The value at position ' + inputValue + ' in fibonacci series is: ' + xhr.response.value
                    document.getElementById("output").innerHTML = msg;
                }
                else if (xhr.status === 400) {
                    document.getElementById("output").innerHTML = 'Invalid Request';
                }
            }
        };

        xhr.open('get',url)
        xhr.responseType = 'json';
        xhr.send();

    }
</script>
