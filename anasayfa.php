<?php
include 'baglan.php';
$bilgilerimsor=$db->prepare("SELECT bilgilerim_ad,bilgilerim_yazar,bilgilerim_yayinevi,bilgilerim_tur FROM bilgilerim");
$bilgilerimsor->execute(array());
$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <style>
        * {
            box-sizing: border-box;
        }
        .aa{
            float: left;
            width: 45%;
  padding: 0 10px;
        }
        .columncard   {
  float: left;
  
}

/* Remove extra left and right margins, due to padding */
.rowcard {margin: 0 -5px;
}

/* Clear floats after the columns */
.rowcard:after {
  content: "";
  display: table;
  clear: both;
  float: left;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .columncard {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.cardcard {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;

}
        .card mt-4 {
            font-size: 50px;
            position: center;
        }
        #more {display: none;}
        #etiket
{
    width:200px; 
    border:1px solid #000000;
    word-wrap:break-word;
}
.cardyeni {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}


.price {
  color: grey;
  font-size: 22px;
}

.cardyeni button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.cardyeni button:hover {
  opacity: 0.7;
}

        .icon-bar {
            width: 100%;
            background-color: #96807d;
            overflow: auto;
        }

            .icon-bar a {
                float: left;
                width: 20%;
                text-align: center;
                padding: 12px 0;
                transition: all 0.3s ease;
                color: white;
                font-size: 36px;
            }

                .icon-bar a:hover {
                    background-color: #000;
                }

        .mySlides {
            display: none;
        }

        

        
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        
        .text {
            color: black;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        /* The dots/bullets/indicators */
       

     .icon-rigth{
        float: right;
     }

        
        .fade {
            animation-name: fade;
            animation-duration: 4s;
            
            
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
        .active {
            background-color: #4CAF50;
        }
.cardyeni mt-3 img{
  max-width: 300px;
}
        input[ type=text] {
            width: 130px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-position: 10px 10px;
            padding: 12px 20px 12px 40px;
            transition: width 0.4s ease-in-out;
        }

            input[type=text]:focus {
                width: 100%;
            }
            .cardyeni {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  
}
body{
    background-image: url(tas2.jpg);
}

    </style>
</head>
<body>

    <div class="icon-bar">
    <a href="#" class="logo"  > <img src="logo1.png" style="width: 35%"></a>
    <div class="icon-rigt" > 
        <a class="active" href="#" title="anasayfa"><i class="fa fa-home" style="width: 50px" ></i></a>
        
        <a href="iletisimformu.html" title="iletisim" ><i class="fa fa-envelope" style="height: 50px"></i></a>
        <a href="index.php" title="kitap islemleri"><i class="fa fa-book" style="height: 50px"></i></a>
        
</div>
    </div>
    <header>

        <div class="jumbotron bg-pink text-pink" style="background-image: url(tas2.jpg); ">
            <div class="container">
                <div class="col-md-6 " style="width: 150%">
                    <h1 class="display-8  font-italic" style="color: white; font-size: 50; " >
                    <big> <b>Sayfama Hoþgeldiniz ..  </b> </big> 
                    </h1>
                    
                    
                </div>

            </div>

        </div>


    </header>

    <div  class="container mt-5">


        <div class="row">

            <div class="col-md-8">

                <div  >
                    <h3 class="display-4 font-italic" "></h3>
<?php

        $bilgilerimsor=$db->prepare("SELECT * from bilgilerim");
        $bilgilerimsor->execute();

        $say=0;

        while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) { $say++ ?>


 <div class="aa">
<div id="myTable" class="rowcard ">
  <div   class="columncard mb-3" style="height: 800px">
   <div class="cardyeni mt-3" >
  <img src="<?php echo $bilgilerimcek['bilgilerim_foto']?>" style=" max-width: 100%; max-height: 100%" > 
  <h1><?php   echo $bilgilerimcek['bilgilerim_ad'] ?></h1>
  <p class="price"><?php echo $bilgilerimcek['bilgilerim_yazar'] ?> <br> <?php echo $bilgilerimcek['bilgilerim_yayinevi']?></p>
  <div id="accordion">


        <div class="card mb-1">
            <div class="card-headerlýk">
                <a href="#collapseOne" class="card-link" data-toggle="collapse">
                    TÜR
                </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">

                <div class="card-bodylýk">
                    <p>
                       <?php echo $bilgilerimcek['bilgilerim_tur'] ?>
                    </p>
                </div>

            </div>
        </div>

    </div>


</div>
  </div>
</div>
</div>
<?php } ?>

                </div>
            </div>
            <div class="col-md-4" style="margin-top: 50px;">

                      <div class="card">
                    <div class="card-header">
                        <h5>Search</h5>
                    </div>
                    <div>
                    <input type="text" id="myInput"   placeholder="Search..">
                    <!-- <form action="anasayfa.php" method="POST" id="search">
                          
                        </form>-->
                    </div>

                </div>
             

                <div class="card mt-3">

                </div>
                </div>
            </div>
        </div>

                <script>
                 
                    var slideIndex = 0;
                    showSlides();


$(function() {
    //Calling function after Page Load
    AddReadMore();
});

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) { slideIndex = 1 }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        setTimeout(showSlides, 4000); 
                    }
                </script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 

</body>
</html>
