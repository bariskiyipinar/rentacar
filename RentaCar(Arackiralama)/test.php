<?php include "sc-kayit-al.php" ?>
<?php error_reporting(0); ?>

<!DOCTYPE html>

<html>
        <head>
            <meta charset="utf8">
            <title>Araç Stok Takibi</title>
            <link rel="icon" href="images/logo1.jpg" type="images/logo1.jpg />
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobil -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- başlık -->
      <title>Rent a Car</title>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
     
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        </head>
        <body>





<style>
    body{
      
         
          background-size: cover;
          background-repeat: no-repeat;
          background-attachment: fixed;
 
    }
    ul.a {
    list-style-type: circle;
}

.galeri { 
            margin: 10px 40px; 
            border: white;
        } 
          
        .galeri img { 
            width: 200px; 
            height: 100px; 
            transition: 1s; 
            padding: 5px; 
        } 
          
        .galeri img:hover { 
            filter: drop-shadow(4px 4px 6px gray); 
            transform: scale(1.1); 
        } 

        .banneryeni {
     background: url(images/banner.jpg);
     background-repeat: no-repeat;
     min-height: 700px;
     display: flex;
     justify-content: center;
     align-content: center;
     align-items: center;
     background-size: 100% 100%;

}
.form{
    

    background-color: #f6d601;
     display: inline-block;
     padding: 7px 35px;
     border-radius: 30px;
     color: #000;
     font-size: 17px;
margin-right: 400px;
     opacity: 0.8;
   padding: 30px;
   
   width: 400px;
   height: auto;

  
}

   
</style>



   <!-- body -->
   <body class="main-layout">





      <!-- yükleme  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- son -->

      <!-- başlık -->

      <header>

         <!-- İç başlık -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo1.jpg" alt="#" width="100px"></a>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="index.html">Anasayfa</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="hakkımda.html">Hakkında</a>
                              </li>
                           </ul>
                           <div class="sign_btn"><a href="giris.htm">Admin Girişi</a></div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- son başlık iç -->

      <!--son başlık-->
      

      <section class="banneryeni">

      
           <!--PHP KISMI-->
        <div class="form"  style="color:black;font-family:Times New Roman;font-size:4;">
        <h4  style="font-weight: bold;color:black;">ARAÇ STOK TAKİBİ</h4>
              <form class=" " action=" " method="post" >
                  <input type="text" name="Aracid" value="">
                  <input type="submit" name="gonder" value="Göster">
              </form>
           
<?php 

               if($kayit->num_rows>0)
               {
                  while($satir=$kayit->fetch_assoc())
                  {
                      echo "<font color=white ><b>Araç Numarası:</b></font>" . $satir["Arac_id"]."<br>";
                      echo "Araç Markası:" . $satir["Arac_markası"]."<br>";
                      echo "Araç Fiyatı:" . $satir["Arac_fiyati"]."<br>";
                      echo "Araç Stok:" . $satir["Arac_stok"]."<br>";
                  }
               }
?>

         </div>
         
          <!--PHP KISMI BİTİŞ-->     
            
</section>



<div class="row mt-5" style="margin-left: 300px;"  >
              
           
              <div class="galeri" > 
                <a href="images/1.1.jpg"> 
                    <img src="images/1.1.jpg" > 
                </a> 
                <a href="images/2.1.jpg"> 
                    <img src="images/2.1.jpg" > 
                </a> 
                <a href="images/3.1.jpg"> 
                    <img src="images/3.1.jpg" > 
                </a> 
                <a href="images/4.1.jpg"> 
                  <img src="images/4.1.jpg" > 
              </a>  
               <a href="images/5.1.png"> 
                <img src="images/5.1.png" > 
            </a> 
            <a href="images/6.5.png"> 
                <img src="images/6.5.png" > 
            </a> 
            </div>
          
</div>
          
        


      <!-- Javascript -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>









        </body>
</hmtl>



