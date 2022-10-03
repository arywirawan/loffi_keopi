<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/menustyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Product | Most Oriented Coffee</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="fontawesome-free/css/all.min.css">


</head>
<body>
    <div class="konten">
    <div class="kepala">
      <h1><a href="index.php"> Loffi Keopi</a></h1>
      <ul>
        <li><a href="index.php#home">HOME</a></li>
        <li><a href="index.php#about">SERVICES</a></li>
        <li><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">PRODUCT</a></li>
        <li><a href="index.php#story">ABOUT</a></li> 
      </ul>
    </div>
    <div class="menu" id="awal">
      
          <h1 style="font-family: 'Oswald',sans-serif; text-align: center; letter-spacing: 8px; padding-bottom: 10px;">OUR PRODUCTS</h1>
          <p style="font-family: 'Nunito', sans-serif; text-align: center; letter-spacing: 2px; font-size: 20px; padding-bottom: 10px;">This is a product of Loffi Keopi which is likely to grow over time.</p>
        <div class="card mx-5" style=" border: none;">
        <div class="card-header" style="background-color: white;">
          <ul class="nav nav-pills nav justify-content-center card-header-pills" id="product-list" role="tablist">
            <li class="nav-item pill">
              <a class="nav-link active" href="#coffee" role="tab" aria-controls="coffee" aria-selected="true" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Coffee</a>
            </li>
            <li class="nav-item pill">
              <a class="nav-link"  href="#noncoffee" role="tab" aria-controls="noncoffee" aria-selected="false">Non Coffee</a>
            </li>
            <li class="nav-item pill">
              <a class="nav-link" href="#dessert" role="tab" aria-controls="dessert" aria-selected="false">Desserts</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
           <div class="tab-content mt-3">
               <!-- tab kopi -->
            <div class="tab-pane active" id="coffee" role="tabpanel">
              <div class="container">
                  <div class="row mb-3">

                    <!-- card -->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/esspresso.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Espresso</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                            Espresso is coffee that is extracted using a high pressure brewing machine. The result is thick black and there is crema on the surface.   </p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </p>
                            
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 22.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- card -->
                         <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/americano.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Americano</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                            If the espresso is too thick and bitter, you can add it with hot water. Espresso with additional hot water is called americano.   </p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                           
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                          </p>
                            
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 27.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- card -->
                       <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/flatwhite.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Flat White</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                            The flat white consists of espresso and velvet microfoam. When drunk, what is dominant is the strong taste of the espresso. It so delicious.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                           <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                          </p>
                            
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 30.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              

                  </div>
                      <div class="row mb-3">
                        <!-- card -->
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/cafelatte.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Caffe Late</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                            The composition of the cafe latte is espresso which is then mixed with steamed milk or heated with steam. So it creates a delicious taste.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </p>

                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 30.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                     
                     <!-- card  -->
                     <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/19_affogato.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Affogato</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                            An affogato is a serving of ice cream in a small cup or bowl drizzled with espresso. This unique coffee dish comes from Italy.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </p>
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 34.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- card  -->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/macchiato3.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Macchiato</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                           Macchiato in Italian means a mark or spot. The spots in question are the froth on the espresso, or vice versa, the espresso on the milk.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </p>
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 29.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/cappuccino.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Cappucino</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                          Cappuccino is actually almost the same as a latte. The difference is, the composition of the milk is less and the milk foam is thicker.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </p>
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" >
                            <div class="price text">
                              <h5 class="mt-1">Rp 30.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                    </div>

                    
                </div>
              </div>

             
            <!-- tab non kopi -->
            <div class="tab-pane" id="noncoffee" role="tabpanel" aria-labelledby="noncoffee-tab">  
                   
              <div class="container">
                  <div class="row mb-3">

                    <!-- card -->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/lemonteaa.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Iced Lemon Tea</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                            Iced Lemon Tea is a low calorie drink that will help you regulate and reduce the number of calories you consume.   </p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </p>
                            
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 22.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- card -->
                         <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/greentea.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Iced Green Tea</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                             Green tea is the healthiest drink rich in antioxidants and nutrients. Drinking green tea can relax yourself.  </p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </p>
                            
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 26.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- card -->
                       <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/milkshake.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Milk Shake</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                            Milk Shake is a sweet and cold drink served with milk mixed with ice cream topped with flavoring powder.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                           <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                          </p>
                            
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 30.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              

                  </div>
                      <div class="row mb-3">
                        <!-- card -->
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/juice2.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Fresh Juice</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                           There are many variations of the fresh juice served. Usually juice is served from a fruit menu. Rich in flavor and become healthy drinks.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </p>

                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 30.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                     
                     <!-- card  -->
                     <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/coklat2.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Iced Chocolate</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                            Iced Chocolate is cocoa drink rich flavor combined with fresh milk that is served cold. A drink that is liked by many people.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </p>
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 28.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- card  -->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/smoothies.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Smoothies</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                          Smoothie is a fresh drink which in its presentation, smoothie is usually mixed with milk or yogurt thus creating a fresh taste.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </p>
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 29.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
              </div>
            
             
            <!-- tab dessert -->
            <div class="tab-pane" id="dessert" role="tabpanel" aria-labelledby="dessert-tab">
                <div class="container">
                  <div class="row mb-3">

                    <!-- card -->
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/pexels-photo-3026804.jpeg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Brownies</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                            Brownies are processed cakes made from wheat flour. Wheat flour is flour or powder that comes from wheat germ.  </p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </p>
                            
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 25.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- card -->
                         <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/waffle.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Waffle</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                             The waffles are served crispy on the outside, soft on the inside, perfectly combined with the sweet melted honey. </p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </p>
                            
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 25.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- card -->
                       <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/pancake2.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Pancake</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                            Milk Shake is a sweet and cold drink served with milk mixed with ice cream topped with flavoring powder thus creating a good taste.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                           <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                          </p>
                            
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 25.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              

                  </div>
                      <div class="row mb-3">
                        <!-- card -->
                        <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/pexels-tijana-drndarski-3656119.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Donuts</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                           Donuts are soft, dense and filling texture. Completed with chocolate jam topping and crunchy peanut sprinkles on top.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </p>

                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 25.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                     
                     <!-- card  -->
                     <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="card">
                        <img class="card-img-top" src="img/pudding.jpg" alt="Mask">
                        <div class="card-img-overlay d-flex justify-content-end">
                          <a href="#" class="card-link text-danger like">
                            <i class="fas fa-heart"></i>
                          </a>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Pudding</h4>
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6> -->
                          <p class="card-text">
                           Soft pudding plus Regal crumble biscuits and topped with cream cheese. The combination blends into a delicious taste.</p>
                          <div class="options d-flex flex-fill">  
                          <p style="color: #FCBF00;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                          </p>
                          </div>
                          <div class="buy d-flex justify-content-between align-items-center" ">
                            <div class="price text">
                              <h5 class="mt-1">Rp 25.000</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    </div>
                </div>
             </div>
        </div>
        </div>
      </div>

    </div>
        
    </div>

    <div class="bg-footer">
       <div class="container py-5">
           <div class="row">
               <div class="col-md-3">
                   <h1 class="text-white">Loffi Keopi</h1>
                    <p class="text-white" style="font-size: 1.2em;">most oriented coffee</p>
               </div>
               <div class="col-md-3">
                  <h3 class="text-white">Information</h3>
                  <div class="row text-white" style="font-size: 12pt;">
                       <div class="col-md-5" >
                           <a href="index.php#about" style="text-decoration: none; font-family: 'Nunito',sans-serif;" class="text-white">Services</a>
                       </div>
                       <div class="col-md-5">
                        <a href="menu.html" style="text-decoration: none; font-family: 'Nunito',sans-serif;" class="text-white">Product</a>
                    </div>
                    <div class="col-md-5">
                        <a href="index.php#story" style="text-decoration: none; font-family: 'Nunito',sans-serif;" class="text-white">Story</a>
                    </div>
                    <div class="col-md-5">
                        <a href="index.php#contac" style="text-decoration: none; font-family: 'Nunito',sans-serif;" class="text-white">Contact</a>
                    </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <h3 class="text-white"> Where to find us </h3>
                   <div class="row">
                      <div class="col-md-2" style="font-size: 30px; ">
                         <a href="https://twitter.com/" class="text-white"> <i class="fab fa-twitter"></i></a>
                      </div>
                        <div class="col-md-2"  style="font-size: 30px;">
                         <a href="https://facebook.com/" class="text-white"><i class="fab fa-facebook"></i></a>
                       </div>
                       <div class="col-md-2"  style="font-size: 30px;">
                         <a href="https://instagram.com/" class="text-white"><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="col-md-2" style="font-size: 30px;">
                        <a href="https://tiktok.com/" class="text-white"><i class="fab fa-tiktok"></i></a>
                      </div>
                   </div>
               </div>
               <div class="col-md-3">
                   <div class="ml-5">
                    <h3 class="text-white"> Address </h3>
                    <div class="text-white">
                     <p><i class="fas fa-map-marker-alt"></i> <span class="ml-3">Jl. Raya Kerobokan, Badung</span> </p>
                     <p><i class="fas fa-envelope-open-text"></i> <span class="ml-3">loffi.keopi@info.co.id</span> </p>
                    </div>
                   </div>
               </div>
           </div>
       </div>
    </div>

    <div class="bg-last">
        <p class="text-white text-center py-2">&copy; Loffi Keopi. All Right Reserved</p>
    </div>
  

  
     <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
    <script src="js/scroll.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    
    <script>
        $('#product-list a').on('click', function (e) {
             e.preventDefault()
              $(this).tab('show')
        })
    </script>

</body>
</html>