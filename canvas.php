<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .canvas{border:1px solid #aaa; }
    </style>
    <script>

    var canvas; 
    var ctx; 

        function draw(){
              canvas = document.getElementById("a"); 

            if(canvas.getContext){
               

                ctx = canvas.getContext("2d"); 
                
                ctx.fillStyle = "rgb(255,0,0)"; 
                ctx.fillRect(5,5,100,100); 

                ctx.fillStyle = "rgb(0,255,0)"; 
                ctx.fillRect(300,5,50,50); 

            }
        }

        function saveImage(){
            var a = canvas.toDataURL("image/png"); 
            document.getElementById("image").value = a; 
            document.getElementById("frm").submit(); 
        }

    </script>
</head>
<body onload="draw();">
    
    <canvas id="a" width="500" height="500" class="canvas"></canvas> 
    <form action="canvasSave.php" method="post" id="frm">
        <input type="hidden" name="image" id="image" value=""> 
        <button type="button" onclick="saveImage();">이미지 서버에 업로드 </button> 
    </form>

</body>
</html>