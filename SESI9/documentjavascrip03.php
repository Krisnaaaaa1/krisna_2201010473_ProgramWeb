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
            <h1>nama lengkap</h1>
            <input type="text" id="txNAMA" placeholder="nama lengkap kontol">
        </div>
        <div>
            <button type="button" onclick="checknama()">checkNama </button>
        </div>
    </form>
    <script>
        function checknama(){
            let nm = document.getElementById("txALAS").value;
            let nm = document.getElementById("txTINGGI").value;
            let luas = 0,5* alas *tinggi;
            alert("isi dari field txNAMA: "+NM);


        }
    </script>
    
</body>
</html>