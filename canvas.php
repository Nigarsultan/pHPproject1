
<?php
$pic = "covern_1550x500.jpg";
$picr = "footr.png";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>paint</title>
    <style>
        .firstpart
        {
            height:500px;
            width:1530px;
            margin:auto;
            background-image: url('<?php echo $pic;?>') ;
            background-repeat: no-repeat;
            background-size:1400px 500px;

    

        }
        .firstpartfooter
        {
            height:400px;
            width:1530px;
            margin:auto;
            background-image: url('<?php echo $picr;?>') ;
            background-repeat: no-repeat;
            background-size:1400px 400px;

    

        }
        .m{
            margin-left:100px;
            margin-right:200px;
        }
        .m{
            margin-right:100px;
        }
        .h{
            font-family: 'Single Day', cursive;
            font-size: 150px;
        }
        .logindesign{
            font-family: 'Single Day', cursive;
            font-size: 25px;
        }
        .logindesign1{
            font-family: 'Single Day', cursive;
            font-size: 50px;
        }
        .logindesign2{
            font-family: 'Single Day', cursive;
        }
        .section2{
            height:1020px;
            width:1530px;
            
        }
        .u{
            color:red;
        }
        .brush{
            color:blue; 
        }
        .s{
            color:white;
        }
        .l{
            color:purple;
        }
        .card{
          transition: all 0.3s;

        }
        .card:hover{
          transform:scale(1.15);
          box-shadow: 0px 7px 10px rgba(0,0,0,0.5)
        }
       
    </style>
</head>
<body >
    <section  class="firstpart container shadow-lg m mb-5 bg-body-tertiary rounded">
        <div >
        
        <nav class="navbar bg-dark border-bottom border-bodynavbar navbar-expand-lg m-0 d-flex justify-content-between ">
         
            <div>
                <h1 class="text-white logindesign">canvaspicker@gmail.com</h1>
            </div>
            <div>
                <h1 class="text-white logindesign">free delivery avabe 5000tk</h1>
            </div>
          <div>
                
          <a class="link-opacity-100" href="login.php"><span id="signup"class=" fs-2 text-white  logindesign2">login</span></a><i class=" fs-3 fa-solid fa-person bg-white"></i>
</div>

           
             </div>
        </nav>

        <ul class="nav justify-content-center logindesign1">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">color</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Brush</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#">sale painting </a>
            </li>
            
            
                
        
          </ul>
          
        <div>
            <h1 class="text-center h mt-5">c<span class="u">a</span>nv<span class="u">a</span>s pic<span class="l">k</span>er</h1>
        </div>
    </div>
    </section>
    
        
    <!-------------------------------------------------------color------------------------------------------------------------------------------->
    <section class="section2 bg-gradient container mt-2 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
    <h1 class="logindesign1 text-center text-shadow"><span class="u">C</span>o<span class="u">l</span>o<span class="u">r</span></h1>
        <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="palate/color1.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
        <div class="card shadow-lg card-hover" style="width: 18rem;">
            <img src="palate/color2.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="palate/color3.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="palate/color4.jpg" style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
    </div><br>
    <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="palate/color5.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="palate/color6.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="palate/color7.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>

        <div class="card shadow-lg" style="width: 18rem;">
            <img src="palate/color8.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
    </div>
    </section>
    <!------------------------------------------------brush-------------------------------------------------------------->
    
    <section class="section2 bg-gradient container mt-2 shadow-lg p-3 mb-5 bg-body-tertiary rounded ">
        <h1 class="logindesign1 text-center text-shadow"> Brush </h1>
        <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="brush/brush1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>

              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush/brush4.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush/brush3.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush/brush4.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
    </div><br>
    <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="brush/brush5.png" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush/brush4.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush/brush6.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>

        <div class="card shadow-lg" style="width: 18rem;">
            <img src="brush/brush2.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </p>
              <a href="#" class="btn btn-secondary">Add to cart</a>
            </div>
          </div>
    </div>
    </section>
    <!----------------------------------------------------------------color-------------------------------------------------------------------------------->
    <!---<section class="firstpartfooter bg-gradient container mt-2 shadow-lg  bg-body-tertiary rounded ">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <h1 class="logindesign1 text-center text-shadow"> Co<span class="u">l</span>or </h1>
        <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="palate/color1.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg card-hover" style="width: 18rem;">
            <img src="palate/color2.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="palate/color3.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="palate/color4.jpg" style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div><br>
    <div class=" d-flex justify-content-around">
        <div class="card shadow-lg " style="width: 18rem;">
            <img src="palate/color5.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="palate/color6.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        <div class="card shadow-lg" style="width: 18rem;">
            <img src="palate/color7.jpg"style="height:200px;" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        <div class="card shadow-lg" style="width: 18rem;">
            <img src="palate/color8.jpg" style="height:200px;"class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
    </div>
    </div>
    </div>
    </section>---------------------------->
    <!----------------------------------------------------------comboset------------------------------------------------------>

    <section class="section2 bg-gradient container mt-2 mb-5 shadow-lg bg-body-tertiary rounded ">
    <h1 class="logindesign1 text-center text-shadow">co<span class="u">m</span>b<span class="u">o</span>s<span class="u">e</span>t</h1>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="brush/combo brush.jpg">
    </div><br>
    <div>
        <h1 class="logindesign mt-4 ">The Painting Combo brush set offers you seven brushes that are all you need to make a perfect digital artwork.<br> They provide the effect of traditional painting techniques,<br> and you can make smooth and precise lines as well as textured and expressive strokes.<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </h1>
        <a href="#" class="btn btn-secondary">Add to cart</a>
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
            <div>
        <h1 class="logindesign mt-4 ms-5">The Painting Combo brush set offers you seven brushes that are all you need to make a perfect digital artwork.<br> They provide the effect of traditional painting techniques,<br> and you can make smooth and precise lines as well as textured and expressive strokes.<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </h1>
        <a href="#" class="btn btn-secondary ms-5">Add to cart</a>
    </div>
                <br>
   
    <div class="m mt-4">
            <img src="brush/combobrush2.jpg">
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="brush/combo brush3.jpg">
    </div><br>
    <div>
        <h1 class="logindesign mt-4 ">The Painting Combo brush set offers you seven brushes that are all you need to make a perfect digital artwork.<br> They provide the effect of traditional painting techniques,<br> and you can make smooth and precise lines as well as textured and expressive strokes.<br><span class="text-black fs-3">$400</span>   <s><span class="u">$480</span></s> </h1>
        <a href="#" class="btn btn-secondary">Add to cart</a>
    </div>
</div>
    </div>
    </section>
    <!----------------------------------------------------------------------------sale painting without background---------------------------------------------------------->
    
    <section class="section2 bg-gradient container mt-2  shadow-lg bg-body-tertiary rounded ">
    <h1 class="logindesign1 text-center text-shadow">S<span class="u">a</span><span class="l">l</span><span class="u">e</span> p<span class="u">a</span>i<span class="u">n</span>t<span class="l">i</span>n<span class="u">g</span>s <br>(Myown Art Work)</h1>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="brush/sale1.jpeg "style="height:200px;width:320px;">
    </div><br>
    <div>
        <h1 class="logindesign mt-4 ">calligraphy .<br>The Dua of Prophet Yunus a.s.<br>
“There is none worthy of worship except You, Glory to You, Indeed, I have been of the transgressors.” <br>
“There is none worthy of worship except You. Glory to You.</h1>
    
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
            <div>
        <h1 class="logindesign mt-4 ms-5"> Scene of peacefulbeach<br>The ocean is an aqua blue, the sand is pale yellow, <br>and the sun is a fierce, hot yellow.<br> The sky is a gorgeous light blue with big, fluffy white clouds.</h1>
    
    </div>
                <br>
   
    <div class="m mt-4">
            <img src="brush/sale2.jpeg"style="height:200px;width:320px;">
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="brush/sale3.jpeg"style="height:200px;width:220px;">
    </div><br>
    <div>
        <h1 class="logindesign mt-4" >Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br> the bulk of the card's content.Some quick example text to build on <br>the card title and make up the bulk of the card's content.</h1>
    
    </div>
</div>
    </div>
    </section>
     <!-- find your art -->
     <section class="shadow-lg " style="padding-top: 120PX; padding-bottom: 120PX  ; ">
        <div class="text-center container">
          <h1 class="font-monospace">FIND YOUR ART BEAUTY MATCH<br></h1>
           <p class="text-secondary font-monospace">At vero eos et accusamus et iusto</p> <br>
           <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
            <div class="col">
                <img src="get/get1.jpg" class="card-img-top" alt="..." style="height:360px" id="pic">
  
                <div class="card-body mt-4">
                  <p class="card-text text-secondary fst-italic">Painting -by Saima</p>
                  <h5 class="card-title" style="font-family: DejaVu Sans Mono, monospace;">THE PASTEL WORLD</h5>
                  <p class="card-text text-secondary m-0" style="font-family: Comic Sans MS, Comic Sans, cursive;">
                    Est diam debitis an, error recusabo id <br>
                    eripuit civibus ut. Mel ut tamquam <br>
                     ad nonumy vituperata mei.Et <br></p>
                     <a class="navbar-brand" href="#">- Read More</a>
                </div>
              </div>
            <div class="col">
                <img src="potrait/potrait-4.jpg" class="card-img-top" alt="..." style="height:360px" id="pic1">
  
                <div class="card-body mt-4">
                  <p class="card-text text-secondary fst-italic">Painting -by Nighar</p>
                  <h5 class="card-title" style="font-family: DejaVu Sans Mono, monospace;">THE OIL PAINT</h5>
                  <p class="card-text text-secondary m-0" style="font-family: Comic Sans MS, Comic Sans, cursive;">
                    Est diam debitis an, error recusabo id <br>
                    eripuit civibus ut. Mel ut tamquam <br>
                     ad nonumy vituperata mei.Et <br></p>
                     <a class="navbar-brand" href="#">- Read More</a>
                </div>
             
            </div>
            <div class="col">
             
                <img src="get/get2.jpg" class="card-img-top" alt="..." style="height:360px" id="pic3">
                <div class="card-body mt-4">
                  <p class="card-text text-secondary fst-italic">Painting -by Proggha</p>
                  <h5 class="card-title" style="font-family: DejaVu Sans Mono, monospace;">KNOW HOW TO PAINT IT</h5>
                  <p class="card-text text-secondary m-0" style="font-family: Comic Sans MS, Comic Sans, cursive;">
                    Est diam debitis an, error recusabo id <br>
                    eripuit civibus ut. Mel ut tamquam <br>
                     ad nonumy vituperata mei.Et <br></p>
                     <a class="navbar-brand" href="#">- Read More</a>
                </div>
          
            </div>
            <div class="col">
                <img src="potrait/portrait-3.jpg" class="card-img-top" alt="..." style="height:360px" id="img1">
  
                <div class="card-body mt-4">
                  <p class="card-text text-secondary fst-italic">Painting -by Keya</p>
                  <h5 class="card-title" style="font-family: DejaVu Sans Mono, monospace;">THE PASTEL PAINT</h5>
                  <p class="card-text text-secondary m-0" style="font-family: Comic Sans MS, Comic Sans, cursive;">
                    Est diam debitis an, error recusabo id <br>
                    eripuit civibus ut. Mel ut tamquam <br>
                     ad nonumy vituperata mei.Et <br></p>
                     <a class="navbar-brand mt-4" href="#">- Read More</a>
                </div>
                
            </div>
        </div>
        </div>
      </section>
    
    <!-----------------------------------------------------------------sale painting--------------------------------------------
    <section class="firstpartfooter container mt-0 shadow-lg  mb-5 bg-body-tertiary rounded">
    <h1 class="logindesign1 text-center text-shadow">S<span class="u">a</span><span class="l">l</span><span class="u">e</span> p<span class="u">a</span>i<span class="u">n</span>t<span class="l">i</span>n<span class="u">g</span>s <br>(Myown Art Work)</h1>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="brush/sale1.jpeg "style="height:200px;width:320px;">
    </div><br>
    <div>
        <h1 class="logindesign mt-4 ">calligraphy .<br>The Dua of Prophet Yunus a.s.<br>
“There is none worthy of worship except You, Glory to You, Indeed, I have been of the transgressors.” <br>
“There is none worthy of worship except You. Glory to You.</h1>
    
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
            <div>
        <h1 class="logindesign mt-4 ms-5"> Scene of peacefulbeach<br>The ocean is an aqua blue, the sand is pale yellow, <br>and the sun is a fierce, hot yellow.<br> The sky is a gorgeous light blue with big, fluffy white clouds.</h1>
    
    </div>
                <br>
   
    <div class="m mt-4">
            <img src="brush/sale2.jpeg"style="height:200px;width:320px;">
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="brush/sale3.jpeg"style="height:200px;width:220px;">
    </div><br>
    <div>
        <h1 class="logindesign mt-4" >Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br> the bulk of the card's content.Some quick example text to build on <br>the card title and make up the bulk of the card's content.</h1>
    
    </div>
</div>
    </div>
      </section>------------------------>
    <!------------------------------------------------------------------------------sale.  with.....................................----------------------------
    <footer class="firstpartfooter container mt-0 shadow-lg   bg-body-tertiary rounded">
    <h1 class="logindesign1 text-center text-shadow">S<span class="u">a</span><span class="l">l</span><span class="u">e</span> p<span class="u">a</span>i<span class="u">n</span>t<span class="l">i</span>n<span class="u">g</span>s <br>(Myown Art Work)</h1>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="brush/sale1.jpeg "style="height:200px;width:320px;">
    </div><br>
    <div>
        <h1 class="logindesign mt-4 ">calligraphy .<br>The Dua of Prophet Yunus a.s.<br>
“There is none worthy of worship except You, Glory to You, Indeed, I have been of the transgressors.” <br>
“There is none worthy of worship except You. Glory to You.</h1>
    
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
            <div>
        <h1 class="logindesign mt-4 ms-5"> Scene of peacefulbeach<br>The ocean is an aqua blue, the sand is pale yellow, <br>and the sun is a fierce, hot yellow.<br> The sky is a gorgeous light blue with big, fluffy white clouds.</h1>
    
    </div>
                <br>
   
    <div class="m mt-4">
            <img src="brush/sale2.jpeg"style="height:200px;width:320px;">
    </div>
</div>
    </div>
        <div class=" d-flex justify-content-between">
            <div class="d-flex justify-content-between ">
                <div class="m mt-4">
            <img src="brush/sale3.jpeg"style="height:200px;width:220px;">
    </div><br>
    <div>
        <h1 class="logindesign mt-4" >Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br>Some quick example text to build on the card title and make up<br> the bulk of the card's content.Some quick example text to build on <br>the card title and make up the bulk of the card's content.</h1>
    
    </div>
</div>
    </div>
    </footer>---------------------------------------------------------------------------------------------------------------------->
    <section class="firstpartfooter container mt-2 shadow-lg  mb-5 bg-body-tertiary rounded">
    
<div class="d-flex ">
  <div class="text-center grid footer " style="height:400px;">
  
    <h2 class="logindesign1 mt-3">C<span class="u">O</span>NT<span class="u">A</span>C<span class="l">T</span></h2>
    <p class="text-light logindesign text-black fst-italic">Address: ukhiya,Cox's Bazar <br>
      E-mail: canvaspicker@gmail.com/nigs.com<br>
      Phone : 0182##25024<br>
      </p>
      <img src="footer/visa card.jpg" style="width: 30px;">
      <img src="footer/credit card1.jpg" style="width: 40px;">
      <img src="footer/credit card2.jpg" style="width: 30px;">
      <img src="footer/nagad2.jpg" style="width: 40px;">
      <img src="footer/bkash.jpg" style="width: 30px;">

    </div>
    <div class="text-center grid footer">
    <h2 class="fst-italic" style="font-family: Brush Script MT, Brush Script Std, cursive;">Canvas Picker</h2>
    <p class="text-light text-black fst-italic logindesign">An oasis of online beauty built specifically <br>
      so your new cosmetics site can take everyone’s breaths away.<br>
      <br>
      Privacy Policy | Terms of use
    </p>
      <i class="fa-brands fa-facebook-f p-2 m-1"></i>
      <i class="fa-brands fa-twitter p-2 m-1"></i>
      <i class="fa-brands fa-linkedin-in p-2 m-1"></i>
      <i class="fa-brands fa-tiktok p-2 m-1"></i> 
    </div>
    <div class="text-center grid footer">
    <h2 class="fst-italic logindesign1 mt-3">CO<span class="u">L</span>LEC<span class="l">T</span>IO<span class="u">N</span>S</h2>
    <p class="text-light logindesign text-black fst-italic">Glowing paint is a result <br>
      ABCDEH Canvas – Forever Painting<br>
      Pure Painter Solutions
      <br></p>
    </div>
</div>
<div class="container-fluid border-subtle bg-dark border-top ">
<div class="d-flex justify-content-around">
  <a class="navbar-brand text-white" href="#">PRIVACY POLICY</a>
  <a class="navbar-brand text-white" href="#">TERMS AND CONDITIONS</a>
  <a class="navbar-brand text-white" href="#">ABOUT</a>
  <a class="navbar-brand text-white" href="#">SHIPPING INFO</a>
  <a class="navbar-brand text-white" href="#">RETURNS/EXCHANGES</a>
  <a class="navbar-brand text-white" href="#">CONTACT</a>
</div>



</div>
</div>
      </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</html>