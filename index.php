<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="name">Product Name</div>
            <a href="#" class="buy">Buy Now</a>
            <div class="circle"></div>
            <img src="shoes.png" class="product">
        </div>
    </div>
    
</body>
<script src="vanilla-tilt.min.js"></script>
<script type="text/javascript">
VanillaTilt.init(document.querySelector(".box"), {  
    max: 25,
    speed: 400
});
    </script>
</html>