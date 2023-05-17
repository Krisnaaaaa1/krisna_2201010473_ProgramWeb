<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" onsubmit="return chekform(this)">
    <div>
        NIM
        <input type="text" name ="txnim" id="nim">
    </div>
    <div>
        NAMA
        <input type="text" name ="txname" id="nama">
    </div>
    <div>
        KELAS
        <input type="text" name ="txkelas" id="kelas">
    </div>
    <div>
        JURUSAN
        <select name="txJURUSAN" id=JURUSAN>
            <option value="mdi">mdiii</option>
             <option value="sk">sk</option>
              <option value="tata boga">tata boga</option>
               <option value="tata busana">tata busana</option>
                <option value="seni murni">seni murni</option>
</select>
    </div>
     <div>
        <input type="radio" name="txJKEL" id="JEKL" value="L">LAKI LAKI
        <input type="radio" name="txJKEL" id="JEKL" value="P">PEREMPUAN
    </div>
   
    <div>
        HOBI
        <input type="radio" name="txhobi"id= "BOLA"value="MAIN BOLA">MAIN BOLA
          <input type="radio" name="txhobi"id="MANCING"value="CHEK IN">CHEK IN
          <input type="radio" name="txhobi"id="MMA"value="MMA">MMA
          <input type="radio" name="txhobi"id="TINJU"value="TINJU">TINJU
          <input type="radio" name="txhobi"id="MAIN BOLA SODOk"value="MAIN BOLA SODOK">MAIN BOLA SODOK

    </div>
        <div>
        <button type="submit">kirim data</button>

        </div>
    </form>
    <script>
        function chekform(frm){
            let f =frm.elements;
            let nama =f.namedItem("txname").value;
            let nim =f.namedItem("txnim").value;
            let jk =f.namedItem("txJKEL").value;
            let jurusan =f.namedItem("txJURUSAN").value;
            // let hobi=[
                
            //     f.namedItem("txHOBI_bola").checked,
            //     f.namedItem("txHOBI1").checked,
            //     f.namedItem("txHOBI2").checked,
            //     f.namedItem("txHOBI3").checked,
            //     f.namedItem("txHOBI4").checked,
            // ];
            let kelas =f.namedItem("txkelas").value;
            let hobi = f.namedItem("txhobi").value;

          console.log("nim           :"+nim);
          console.log("nama          :"+nama);
          console.log("jenis kelamin :"+jk);
          console.log("jurusan       :"+jurusan);
          console.log("HOBI          :"+hobi);   
          console.log("kelas         :"+kelas);
            return false;
        }
    </script>
</body>
</html>