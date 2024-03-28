<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal Website</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>   
</head>
 <style>
    @charset "utf-8";
/* CSS Document*/
body{
    background-color:#ffffff;
    margin:0px;
    padding:0px;
}
 
ul{
    list-style:none;
}
 
a{
    text-decoration:none;
}
 
section{
    width:100%;
    height:95vh;
    position: relative;
}
 
nav{
    display: flex;
    justify-content: space-between;
    align-items:center;
    height:60px;
    background-color:#FFFFFF;
    box-shadow:2px 2px 12px rgba(0,0,0,0.2);
    padding:0px 5%;
     
}
nav ul{
    display: flex;
}
  
nav ul li a{
    margin:30px;
    font-family:myriad pro regular;
    color:#505050;
    font-size: 15px;
    font-weight:700;
}
 
.logo{
    font-family:RoadTest;
    color:#000000;
    font-size: 22px;
    font-weight: bold;
}
 
.active{
    color:#2d2a2a;
    font-weight:bold;
}
 
.text-container p:nth-child(1){
    font-family: calibri;
    font-weight: bold;
    color: #6d6d6d;
    font-size: 22px;
}
 
.text-container p:nth-child(2){
    font-family: calibri;
    font-weight: bold;
    letter-spacing: 2px;
    color: #1a1a1a;
    font-size: 60px;
}
 
.text-container p:nth-child(3){
    font-family: myriad pro regular;
    color: #403e3e;
    font-size: 30px;
    line-height: 30px;
}
 
.text-container p:nth-child(4){
    font-family: calibri;
    color: #403e3e;
    font-size: 17px;
    margin-top: 10px;
    line-height: 30px;
}
 
.text-container p{
    line-height: 0px;
    margin: 55px 0px 25px;
}
 
.text-container{
    position: absolute;
    left: 13%;
    top: 42%;
    transform: translate(-13%, -42%);
}
 
.text-container button{
    width: 130px;
    height: 42px;
    border-radius: 10px;
    font-family: calibri;
    font-weight: bold;
    font-size: 14px;
    outline: none;
    margin: 0px 10px;
}
 
.hire-btn{
    border: 2px solid #373636;
    color: #373636;
}
 
.down-cv{
    background-color: #0b0b0b;
    color: #ffffff;
    border: none;
}
 
button:active{
    transform: scale(1.1);
}
 
.model{
    height: 560px;
    position: absolute;
    bottom: 60px;
    left: 80%;
    transform: translateX(-70%);
}
 
.services{
    height:600px;
    background-color:#f6f5f5;
    padding: 2% 10% 0px 10%;
}
 
.services-text p:nth-child(1){
    font-family: calibri;
    font-weight:bold;
    color:#1d1c1c;
    font-size:30px;
    line-height:0px;
    text-align: center;
    margin-bottom: 40px;
}
 
.services-text p:nth-child(2){
    font-family:calibri;
    color:#7e7d7d;
 
}
 
.services-text{
    margin:50px 0px;
}
 
.box-container{
    display:flex;
    justify-content:space-between;
}
 
.box-1,.box-2,.box-3{
    width: 300px;
    height:320px;
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow:2px 2px 18px rgba(0,0,0,0.3);
    align-items: center;
    justify-content: center;
    display: flex;
    flex-direction: column;
    margin: 0px 4px;
         
}
  
.box-1{
    background-image:url("images/services-1.png");
}
 
.box-2{
    background-image:url("images/services-2.png");
}
 
.box-3{
    background-image: url("images/servies-3.png");
}
 
.box-1 span,
.box-2 span,
.box-3 span{
    width:40px;
    height:40px;
    border-radius:50%;
    background-color:#ffffff;
    display: flex;
    justify-content: center;
    align-items:center;
    font-family: calibri;
    font-weight: bold;
}
 
.box-1 p:nth-child(2),
.box-2 p:nth-child(2),
.box-3 p:nth-child(2){
    color:#FFFFFF;
    font-family: calibri;
    font-size: 23px;
    line-height:0px;
}
 
.box-1 p:nth-child(3),
.box-2 p:nth-child(3),
.box-3 p:nth-child(3){
    font-family: calibri;
    color:#8F8F8F;
    text-align:center;
    width: 230px;
    margin:0px 0px 20px 0px;
}
 
.box-1 button,
.box-2 button,
.box-3 button{
    width:100px;
    height:30px;
    background-color:#FFFFFF;
    border:none;
    outline: none;
    border-radius:5px;
}
 
.testimoni{
    height:500px;
    background-color:#FFFFFF;
    padding: 2% 10% 0px 10%;
    text-align: center;
    margin: auto;
}
 
.testimoni-text p:nth-child(1){
    font-family: calibri;
    font-weight:bold;
    color:#1d1c1c;
    font-size:30px;
    line-height:0px;
}
 
.testimoni-text{
    margin:70px 0px;
}
 
.testimoni-col{
    display:flex;
    justify-content:space-between;
}
 
.testimoni-1,.testimoni-2{
    flex-basis: 44%;
    border-radius: 10px;
    margin-bottom: 5%;
    text-align: left;
    background: #f4f2f4;
    padding: 25px;
    cursor: pointer;
    display: flex;
    width: 500px;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.2);   
}
 
.testimoni-col img{
    height: 60px;
    margin-left: 5px;
    margin-right: 30px;
    margin-top: 20px;
    border-radius: 50%;
}
 
.testimoni-col p{
    padding: 0;
}
 
.testimoni-col h3{
    margin-top: 15px;
    text-align: left;
}
 
.testimoni-col .fas, .testimoni-col .far{
    color: #f44336;
}
 
footer p{
    font-family: calibri;
}
 
footer p:nth-child(1){
    font-size: 30px;
    font-weight:bold;
    color:#FFFFFF;
    line-height:10px;
}
 
footer p:nth-child(2){
    font-size: 16px;
    color:#7e7d7d;
    width:600px;
    text-align: center;
}
 
footer{
    height:300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    background-color: #191919;
}
 
.social-icons a{
    width:40px;
    height:40px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color:#e6e3e3;
    margin:20px 10px;
    border-radius:50%;
}
 
.social-icons{
    display: flex;
     
}
 
.social-icons i,.social i{
    color:#000000;
}
 
.social-icons a:hover{
    background-color:#000000;
    box-shadow:2px 2px 12px rgba(0,0,0,0.2);
    transition:all ease 0.5s;
}
 
.social-icons a:hover i,
.social a:hover i{
    color:#FFFFFF;
    transition:all ease 0.5s;
}
  
.copyright{
    color:#565555;
    font-size: 15px;
    position: absolute;
    left:50%;
    bottom:10px;
    transform: translateX(-50%);
}
.social{
    position: fixed;
    top:50%;
    right:0px;
    transform:translateY(-50%);
}
 
.social a{
    display: flex;
    justify-content: center;
    align-items: center;
    width:50px;
    height:50px;
    margin:0px;
    padding: 0px;
    line-height:0px;
    background-color:#FFFFFF;
    border:1px solid #CBCBCB;
    box-shadow:2px 2px 12px rgba(0,0,0,0.2);
}
 
.social a:hover{
    background-color:#000000;
    transition:all ease 0.5s;
}
 
.social i{
    font-size:20px;
    color:#2B2B2B;
}
 </style>
<body>
    <section>
        <!--- text --->
        <div class="text-container">
            <p>Hello,</p>
            <p>I&#8217;M NITA AULIA</p>
            <p>SEO Technical Writer & Developer</p>
            <p>An aquarius girl who loves music, watching movies and
            <br>of course writing.</p>
            <button class="hire-btn">Hire me</button>
            <button class="down-cv">Download CV</button>
        </div> 
    </section>
 
    <!-- services -->
    <div class="services">
        <!--text-->
        <div class="services-text ">
            <p>Services</p>
            <p>Hello, I'm Nita Aulia, the first daughter of two siblings, but for my father I'm the only child. Yes, I was born into an incomplete family since I was little,
            but that doesn't break my spirit..</p>
        </div>
         
        <div class="box-container">
        <!--- 1 --->
            <div class="box-1">
                <span>1</span>
                <p class="heading">Mamah</p>
                <img src="images/FB_IMG_1670379995269.jpg" title="Ini mamahku" height="80%">
                <button>Read More</button>
            </div>
        <!--- 2 --->
            <div class="box-2">
                <span>2</span>
                <p class="heading">Aku</p>
                <img src="images/FB_IMG_1670141695031.jpg" title="Ini Aku Nita Aulia" height="80%">
                <button>Read More</button>
            </div>
        <!--- 3 --->
            <div class="box-3">
                <span>3</span>
                <p class="heading">Bapak</p>
                <img src="images/FB_IMG_1670818674002.jpg" title="ini bapaku" height="80%">
                <button>Read More</button>
            </div>
        </div>
    </div>
     
    <!--testimonials-->
    <div class="testimoni">
        <!--text-->
        <div class="testimoni-text ">
            <p>What Our Client Says..</p>
        </div>        
 
        <div class="testimoni-col">
            <div class="testimoni-1">
                <img src="images/ava1.png">
                <div>
                    <p>Nita anak yang cantik,Baik,Manis dapat menyenangkan setiap orang yang ada di dekatnya selain itu dia humble sekali.</p>
                    <h3>Client Pertama</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
 
            <div class="testimoni-2">
                <img src="images/ava2.png">
                <div>
                    <p>Nita dapat berkumunikasi dengan baik,dia juga sangat pintar,public speakingnya juga bagus sekali.</p>
                    <h3>Client Kedua</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
 
    <!-- footer -->
    <footer>
        <p>Interested In Using Our Services?</p>
             
        <!--paragraph-->
        <p>I try to work on your project as quickly as possible. Guarantee for revision until you are satisfied with my work.</p>
        <!--social-->
        <div class="social-icons">
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
         
        <!--copyright-->
        <p class="copyright">Copyright by Niagahoster Tutorial</p>
    </footer>
 
    <!--social-attach-bar-->
    <div class="social">
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
</body>
 
</html>