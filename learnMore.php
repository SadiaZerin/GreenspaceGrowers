<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <link rel="stylesheet" href="learnMore.css">

    <style>
        .blue{
            display: flex;
             flex-direction:row; 
             width:70vw;
        }
        #adjust{

        width:27vw;

      }
        @media(max-width:700px){
    
         .blue{
            display: flex;
            flex-direction: column;
            margin-left: 2rem;
         }

      #adjust{
        width: 70vw;
      }

    }
    #menu .items li:nth-child(4){
           border-left:none;
               } 



    </style> 
</head>
<body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    





    <section class="main">
    <div class="nav">
            <div class="p1">
                <div>
                    <i id="menu-btn" class="fa-solid fa-bars"></i>
                </div>
                <div class="search">
                  
                     <input type="text" placeholder="Search">
                </div>
            </div>

            
        </div>
       
  
        

<section class="home3">
  <div class="header">
  <h3 style="padding-left:12rem; background-color:coral;color:whitesmoke;display:inline;padding-left:0;margin-left:12rem"> Rooftop Design Information</h3>
  </div>
  <br>
  <div class="container4">
    <div class="row g-3">
        

        

    
        

        <div class="col-12 col-md-6 col-lg-6" style="margin-left: 12rem;">
          <div class="card blue" style="box-shadow: 1px 2px 9px black; margin-bottom:2rem">
            <img src="design1.jpg" id="adjust"  class="card-img-top">
            <div class="card-body" >
                   
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Area size:</h5>
                            </div>
                            <div class="col-md-9 text-secondary">700 square feet </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Price:</h5>
                            </div>
                            <div class="col-md-9 text-secondary">5000 tk
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Design type:</h5>
                            </div>
                            <div class="col-md-9 text-secondary">japanese stiltgrass
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Best Feature:</h5>
                            </div>
                            <div class="col-md-9 text-secondary">Gives more space for planting 
                            </div>
                        </div><hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Surface:</h5>
                            </div>
                            <div class="col-md-9 text-secondary">Wodd
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>About:</h5>
                            </div>
                            <div class="col-md-9 text-secondary"> Besides the decorative benefit, roof plantings may provide food, temperature control, hydrological benefits, architectural enhancement, habitats or corridors for wildlife, recreational opportunities, and in large scale it may even have ecological benefits.
                            </div>
                        </div>
                       
                        

                    </div>
              



            </div>
          </div>
       </div>

       
      </div>
    </div>

  </div>

</body>
</html>