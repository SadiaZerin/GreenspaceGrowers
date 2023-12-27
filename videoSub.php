<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video tutorial</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <style>

.flex1{
    display: flex;
   justify-content: space-evenly;
 
 
}
.flex1 img{
    width: 35vw;
    height: 55vh;
}

#para{
    font-family:   'Arial Narrow', Arial, sans-serif;
    font-style: italic;
  
    padding: 40px 20px;
   color: black;
   font-weight: 600;
   
   
}

.border{
    border: 9px solid black;
    box-shadow: 5px 5px 5px 5px rgba(13, 12, 12, 0.5);
    
}
.border img:hover{
    transition: 0.2s;
    transform: scale(1.1);
   
}

#para span{
    color:greenyellow;
    font-weight: 600;
   font-size: 3rem;
   background-color: rgba(14, 13, 13, 0.959);
    padding: 5px 5px;
}
main{
   margin-top: 63px;
   padding: 4rem 1.5rem;
   background: #dee5eb;
   min-height: calc(100vh - 74px);

}

.cards{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 1.1rem;
}
.card-single{
    display: flex;
    justify-content: space-between;
   background: whitesmoke;
    padding: 3rem;
    border-radius: 5px;
    box-shadow: 4px 4px 12px rgba(0,0,0,0.2);
    color: black;
   margin-top: 15px;
  
   

}

.con1{
    position: relative;
    padding-bottom: 1rem;
}

.innercon1 p{
    display: inline;
}
.innercon1 span{
   padding-left: 87px;
}
.innercon1{
    position: absolute;
    background-color: #000;
    
   color: whitesmoke;
   top: 132px;

   
}
.play i{
    position: absolute;
    top: 80px;
    left:90px;
    color: whitesmoke;
}
.card-single a{
    text-decoration: none;
    color:whitesmoke;
   
    border-radius: 5px ;
    background: blueviolet;
    padding: 10px 25px;
    
}
.card-single h5{
    padding-bottom: 2rem;
}
.availablesubpack h1{
    text-align: center;
}
.availablesubpack p{
    text-align: center;
   font-style: italic;
   
}
</style>
</head>
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top">Greenspace Growers</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home&nbsp;</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Order
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="Order.html">Plants and trees</a></li>
                          <li><a class="dropdown-item" href="#">Seeds</a></li>
                          <li><a class="dropdown-item" href="equipments.php">Setup Equipments</a></li>
                          <li><a class="dropdown-item" href="index2.html">Full garden setup</a></li>
                        </ul>
                      </li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="signup.php">sign-up</a></li>
                </ul>
            </div>
        </div>
    </nav>




    <section class="flex">
               
               <div class="flex1">
                     <p id="para"><span>Make your own garden</span><br>
                    Have big dreams for your free space,Share Your Goals And Budget <br>We will help you design a greenspace <br> You love.</p>
                    <div class="border"><img src="makeGarden.jpg" alt=""></div> 
               </div>
           <br>
              
      
     </section>

    <section class="availablesubpack">
        <h1>Our available Tutorials</h1>
        <p>All nessesary videos for you to make your own green place</p>
     <main>
      <div class="cards">
        <div class="card-single">
            <div>
            <div class="con1">
                     <img src="tuto1.webp" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
                <h5>How to plant tomatos at home</h5>
                <a href="videoBuy.php">Buy</a>
            </div>
           
        </div>

        <div class="card-single">
            <div>
            <div class="con1">
                     <img src="tuto2.jpg" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
                    <h5>How to plant tulip flowers at home</h5>
                <a href="videoBuy.php">Buy</a>
            </div>
          
        </div>

        <div class="card-single">
            <div>
            <div class="con1">
                     <img src="tuto4.jpg" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
                    <h5>How to produce cultivable soil in your field</h5>
                <a href="videoBuy.php">Buy</a>
            </div>
          
        </div>

        <div class="card-single">
            <div>
                <div class="con1">
                     <img src="tuto3.jpeg" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
               
                    <h5>Production nursery work flow efficiently</h5>
                <a href="videoBuy.php">Buy</a>
            </div>
           
        </div>
        <div class="card-single">
            <div>
            <div class="con1">
                     <img src="tuto5.jpeg" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
                    <h5>How to build seedling production</h5>
                <a href="videoBuy.php">Buy</a>
            </div>
           
        </div>
        <div class="card-single">
            <div>
            <div class="con1">
                     <img src="thyme.jpg" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
                    <h5>Production nursery work flow efficiently</h5>
                <a href="videoBuy.php">Buy</a>
            </div>
           
        </div>
        <div class="card-single">
            <div>
            <div class="con1">
                     <img src="tuto6.jpg" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
                    <h5>How to keep plants healthy</h5>
                <a href="videoBuy.php">Buy</a>
            </div>
            
        </div>
        <div class="card-single">
            <div>
            <div class="con1">
                     <img src="tuto7.jpeg" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
                    <h5>Use fertilizer perfectly</h5>
                <a href="">Buy</a>
            </div>
           
        </div>
        <div class="card-single">
            <div>
            <div class="con1">
                     <img src="basil.webp" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
                    <h5>Production nursery work flow efficiently</h5>
                <a href="">Buy</a>
            </div>
           
        </div>
        <div class="card-single">
            <div>
            <div class="con1">
                     <img src="echinacea.jpg" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
                    <h5>How to build seedling production</h5>
                <a href="">Buy</a>
            </div>
            
        </div>
        <div class="card-single">
            <div>
            <div class="con1">
                     <img src="thyme.jpg" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
                    <h5>How to make compost at home</h5>
                <a href="">Buy</a>
            </div>
           
        </div>
        <div class="card-single">
            <div>
            <div class="con1">
                     <img src="ginkgo.jpg" alt="" height="160px" width="220px">
                    <div class="play"><i class="fa-solid fa-play fa-2xl"></i></div> 
                    <div class="innercon1"><p>playlist</p> <span>10 videos</span></div> 
                   
                    </div>
                    <h5>How to propagate plants</h5>
                <a href="">Buy</a>
            </div>
           
        </div>


      </div>
      </main>



    </section>








    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Greenspace Arrows 2023</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>