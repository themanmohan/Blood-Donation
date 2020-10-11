 <?php 

	//include header file
	include ('include/header.php');

?>
 <script src="jquery-3.4.1.min.js"></script>
 <style>
     .img1{
         border-radius:190px;
     }
     .img2{
         border-radius:190px;
     }
     .img3{
         border-radius:190px;
     }
     .flip-card {
    width: 320px;
    height: 400px;
    perspective: 500px;
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.9s;
    transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
}

.flip-card-frontside,
.flip-card-backside {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
}

.flip-card-backside {
    background-color: rgba(0,0,0,0.6);
    color: white;
    transform: rotateY(180deg);
    align-items: center;
}

.flip-card-frontside img {
    width: 300px;
    height: 200px;
    border: none;
}
.ourteam{
    text-align:center;
   
    color: white;
    width: auto;
        background-color: #e74c3c;
        border-radius: 0;
        margin: 20px 0px 0px 0px;
        -webkit-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
        -moz-box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
        box-shadow: 0px 2px 5px -2px rgba(89, 89, 89, 0.95);
        padding: 20px;
}

     .pop {
         height: 200px;
         width: 400;
         background-color: rgba(0, 0, 0, 0.6);
         position: absolute;
         top: 50;
         left: 30;
         transform: translate(150%, 70%);
         text-align: center;
         display: none;
         border-radius: 20px;


     }

     .b1 {
         box-sizing: border-box;
         background: linear-gradient(120deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
         text-align: center;
         border-radius: 10px;
         background-size: 200px;
         height: 40px;
     }

     .header-img {
         background-image: url(img/blood%20cell%20animation.gif);
     }

 </style>

 <div class="container-fluid header-img">
     <div class="pop">
         <h3 style="margin:30px 20px 0px 20px;">Do you Want save Life</h3>
         <br><br>
        <a href="donate.php"> <button class="b1">
             Become life Saver
         </button></a>&nbsp; &nbsp;&nbsp;
         <button class="b1">Nothanks</button>
     </div>
 </div>
 
 <div class="row">
     <div class="col-md-6 offset-md-3">

         <div class="header">
             <h1 class="text-center">Donate the blood, save the life</h1>
             <p class="text-center">Donate the blood to help the others.</p>
         </div>


         <h1 class="text-center">Search The Donors</h1>
         <hr class="white-bar text-center">

         <form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
             <div class="form-group text-center justify-content-center">

                 <select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
                     <option value="">-- Select --</option>
                     <optgroup title="Bihar" label="&raquo; Bihar"></optgroup>
                     <option value="Motihari">Motihari</option>
                     <option value="Betiah">Betiah</option>
                     <option value="Narkatiya Ganj">Narkatiya Ganj</option>
                     <option value="Gopal Ganj">Gopal Ganj</option>
                     <option value="Patna">Patna</option>
                     <option value="Hazipur">Hazipur</option>
                     <option value="Muzzaffarpur">Muzzaffarpur</option>
                     <option value="Bhagalpur">Bhagalpur</option>
                     <option value="Darbhanga">Darbhanga</option>
                     <option value="Saharsha">Saharsha</option>
                     <option value="Gaya">Gaya</option>
                     <option value="Chapra">Chapra</option>
                     <option value="Shivan">Shivan</option>
                     <option value="Samsatipur">Samsatipur</option>
                     <option value="Barauni">Barauni</option>
                 </select>
             </div>
             <div class="form-group center-aligned">
                 <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

                     <option value="A+">A+</option>
                     <option value="A-">A-</option>
                     <option value="B+">B+</option>
                     <option value="B-">B-</option>
                     <option value="AB+">AB+</option>
                     <option value="AB-">AB-</option>
                     <option value="O+">O+</option>
                     <option value="O-">O-</option>

                 </select>
             </div>
             <div class="form-group center-aligned">
                 <button type="submit" class="btn1 btn-lg btn-danger">Search</button>
             </div>
         </form>
     </div>
 </div>
 </div>
 <!-- header ends -->

 <!-- donate section -->
 <div class="container-fluid red-background">
     <div class="row">
         <div class="col-md-12">

           <h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
             <hr class="white-bar">
             <p class="text-center pera-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat minima tempora at mollitia vitae est officiis quos tempore hic praesentium dolorem facere, numquam, ducimus ullam voluptatem doloremque, consequatur nulla labore.

                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi consequuntur adipisci, architecto dolore ab ea. Ea et, impedit culpa, mollitia sunt suscipit inventore delectus hic repellendus consequatur modi, explicabo quia.
             </p>
             <a href="#" class="btn1 btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
         </div>
     </div>
 </div>
 <!-- end doante section -->
<h3 class="ourteam"> Our Team</h3>

 <div class="container">
     <div class="row">
         <div class="col">
             <div class="card">
                 <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-frontside">
                
                <img src="img/doctor1.jpg" alt="Our Vission" class="img3 img-responsive" width="168" height="168">
                <p class="text-center">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum excepturi deleniti tempore neque porro ducimus molestias in nesciunt corporis odio
                    vitae tempora, dolore laborum ab dolorem facilis! Impedit, aperiam quisquam.
                </p>
            </div>
            <div class="flip-card-backside">
                <button type="button" id="d1" style="margin-top:200px;">Follow us</button>
            </div>
        </div>
    </div>
             </div>
         </div>

         <div class="col">
             <div class="card">
                 <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-frontside">
              
                <img src="img/doctor2.jpg" alt="Our Vission" class="img1 img-responsive" width="168" height="168">
                <p class="text-center">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ratione ducimus ex similique culpa maiores molestias enim illum voluptatem? Fuga, sunt reiciendis
                   sint voluptatibus optio illo commodi molestias suscipit dolorum?
                </p>
            </div>
            <div class="flip-card-backside">
                <button type="button" id="d1" style="margin-top:200px;" >Follow Us</button>
            </div>
        </div>
    </div>
             </div>
         </div>

         <div class="col">
             <div class="card">
         <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-frontside">
            
                <img src="img/doctor3.jpg" alt="Our Vission" class="img3 img-responsive" width="168" height="168" >
                <p class="text-center">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi perspiciatis, distinctio quas quasi esse culpa harum laboriosam perferendis dolores a,
                    pariatur dolorem inventore sed? Libero, consequatur quo! Sequi, iusto asperiores!
                </p>
            </div>
            <div class="flip-card-backside">
                <button type="button" id="d1" style="margin-top:200px;">Follow Us</button>
            </div>
        </div>
    </div>
             </div>
         </div>
     </div>
 </div>
 <script>
     $(document).ready(function() {
         setTimeout(function() {
             $('.pop').css('display', 'block');
         }, 5000)

         $('.b1').click(function() {
             $('.pop').css('display', 'none');

         });
     });

 </script>


 <!-- end aboutus section -->

 <?php
	include ('include/footer.php');
?>
