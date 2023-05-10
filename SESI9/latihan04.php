<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3</title>
</head>
<body>
    <form action="GET">
        <div>
            <h1>alas segitiga</h1>
            <input type="text" id="txALAS" name="tinggi">
        <div>

        <h1>tiggi segitiga</h1>
            <input type="text" id="txTINGGI" name="tinggi">
        <div>
            <button type="button" onclick="checknama()">checkhasil</button>
        </div>

    </form>
    <script>
        function checknama(){
            let a = document.getElementById("txALAS").value;
            let t = document.getElementById("txTINGGI").value;

            let L = a * t / 2

            alert("luas segitiga adalah:"+L)


        }
    </script>
    
</body>
</html>