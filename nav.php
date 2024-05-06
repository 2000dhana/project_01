<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URBAN HOMES - Property Manager </title>
    <script src = "Index.js"></script>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    min-height:100vh;
    display: flex;
    flex-direction: column;
}
.defaultnav {
    text-decoration: none;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgb(12, 12, 12);
  }

.an{
    text-decoration: none;
    list-style-type: none;
    overflow: hidden;
    color: white;
}  

.am{
    text-decoration: none;
    list-style-type: none;
    overflow: hidden;
    color: rgb(56, 56, 56);
}  

.Lis {
    list-style: none ;
    display: inline-block;
    font-family: degular;
    padding: 5px 5px;
    margin-right: 8px;
    font-size: 18 px;
    color: rgb(114, 114, 114);
    align-items: center;
}
li .an:hover{
    font-weight: bold;
    color: aliceblue;
    border-radius: 10px;
}

.navbtn1{
    font-family: degular;
    background-color: rgb(255, 255, 255);
    margin-left: 20px;
    border-radius: 20px;
    height: inherit;
    transition: all 0.4s;
    border: none;
}
.navbtn1 :hover{
    transform: scale(1.5); 
    font-weight: bold;
    color: rgb(53, 53, 53);
    border-radius: 10px;
}
.Navdiv {
    display: flex ;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0px 10px 0px;
}
.secondhead{
    background-color: rgb(32, 32, 32);
    height: 250px;
    align-items: center;
}
.userdp{
    padding :40px;
    float: left;
    margin-right: 15px;
}
.usernav{
    color: aliceblue;
    display: flex;
    list-style: none;  
    font-family: degular; 
    margin-right: 30px;
    justify-content: space-between; 
    display: inline-block;
}
.username{
    color: aliceblue;
    font-size: 30px;
    display: inline-block;
    font-family: degular;
    font-weight: bolder;
}

p1{
    font-family: degular;
    font-size: 35px;
    color: rgb(123, 123, 123);
    font-weight: bold;
    padding : 30px;
}
.overall{
    margin-left: 350px;
    margin-right: 350px;
    padding: 30px;
    justify-content: center;
}
.Button1{
    border-radius: 10px;
    justify-content: space-between;
    padding-right: 10px;
    display: inline;
    align-items: center;
    margin: 20px;
}

.Insightbox{
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
}

.Insightdata{
    font-family: degular;
    width: 200px;
    height: 200px;
    background-color: white;
    color: rgb(63, 63, 63);
    font-size: 20px;
    text-align: left;
    border-radius: 20px;
    padding : 10px;
    margin : 5px;

}
.Data{
    font-family: montserrat;
    color: black;
    font-weight: bold;
    font-size: 27px;
}

.Button1 :hover{
    transform: scale(1.2); 
    font-weight: bold;
    color: rgb(53, 53, 53);
    border-radius: 10px;
}
.insightlink{
    text-decoration: none;
    color: rgb(63, 63, 63);
}

#date{
    list-style: none;
    list-style-type: none;
    color: rgb(61, 61, 61);
    font-family: degular;
}
.footer{
    background-color:rgb(32, 32, 32) ;
    font-family: degular;
    color: #666666;
    padding: 10px;
    margin-top: auto;
}

.row{
    display: flex;
    justify-content: space-between;
    margin: 20px;
}

li {
    list-style: none;
}
.footer-col h4{
    font-size: 20px;
    color: #a3a3a3;
    margin-bottom: 10px;
}
.ft{
    text-decoration: none ;
    color: #626262;
}

textarea{
    resize: none;
    font-family: degular;
    border-radius: 5px;
    color: #666666 ;
}

.Subscribe{
    font-family: degular;
    background-color: rgb(255, 255, 255);
    margin-left: 20px;
    border-radius: 10px;
    align-items:center;
    height: inherit;
    transition: all 0.4s;
    border: none;
    display: inline-block;

}
.Subscribe :hover{ 
    font-weight: bold;
    color: rgb(53, 53, 53);
    border-radius: 10px;
}
.terms li{
    display: inline-block;
    margin-top: 5px;
    font-size: small;
}

.sociallinks li{
    display:inline-flex ;
    flex-direction: column;
    align-items: center;
    margin: 2px;
    margin-top: 10px;
    padding: 2px;
}

.container1{
    background-image: url("..\Images\BG.png");
    background-color: #d8d7d7;
    border-color: #b9b8b8;
    border-radius: 20px;
    margin: 20px;
    padding: 25px;
    height: auto;
    
}
.heading{
    font-family: degular;
    width: 90%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: center;
    margin: 20px auto ;
}
.heading h1{
    font-size: 50px;
    color: #3b3a3a;
    margin-bottom: 25px;
    position:relative;
}
.heading h1::after{
    content: "";
    position: absolute;
    width: 100%;
    height: 4px;
    display: block;
    margin: 0 auto;
    background-color: rgb(38, 139, 139);
}
.heading p{
    font-size: 18px;
    color: #666;
    margin-bottom: 35px;
}

.aboutcont{
    width: 90%;
    margin: 0 auto;
    padding: 10px 20px;
    font-family: degular;
}

.about{
    display: flex;
    justify-content: space-between;
    align-items: wrap;
    flex-wrap: wrap;
}
.about-image{
    flex: 1;
    margin-right: 40px;
    overflow: hidden;
}

.about-image img{
    max-width: 50%;
    height: auto;
    display: block;
    transition: 0.5s ease;
}

.about-image:hover img {
    transform: scale(1.2);

}

.about-content{
    flex: 1;
}

.about-content h2{
    margin-bottom: 20px;
}

.about-content h2:after{
    content: "";
    position: absolute;
    width: 20%;
    height: 2px;
    display: block;
    margin: 0 auto;
    background-color: rgb(38, 139, 139);
    margin-bottom: 20px;
}

.Aboutadmin{
    align-items: center;
    justify-content: center;
    margin-top: 45px;
    text-align: center;
    display: flex;
}
.Aboutadmin img{
    justify-content: space-between;
    border-radius: 50%;
    max-width: 150px;
}

.Aboutadmin img:hover {
    transform: scale(1.1);
    transition: 0.4s;
}



.listingtable th {
    padding-inline: 30px;
    font-family: degular;
    background-color: #666666;

}

.listingtable{
    align-content: center;
    margin-left: auto;
    margin-right: auto;
}

.Listingimage{
    width: 60px;
    overflow: hidden;
    border-radius: 5px;
}
.Listingimage img{
    transition: 1.4s ease-in-out;
    border-radius: 20px;
}

.Listingimage:hover{
    transform: scale(2.5);
    z-index: 3;
    transition: 0.4s;
}

.listingtable td {
    align-items: center;
    font-family: degular;
    padding-top: 10px;
    text-align: center;
}

.lisbtn1 {
    font-family: degular;
    background-color: rgb(255, 255, 255);
    border-radius: 20px;
    height: inherit;
    transition: all 0.4s;
    border: none;
}

.lisbtn1 :hover {
    font-weight: bold;
    color: rgb(53, 53, 53);
    border-radius: 10px;
}

.listingtable .lisprice {
    font-weight: bold;
}

.navbtn2{
    font-family: degular;
    margin-left: 20px;
    margin-top: 10px;
    margin-bottom: 15px;
    border-radius: 50px;
    height: inherit;
    transition: all 0.8s;
    border: none;
    text-align: center;
}
.crud_bttn{
    font-family: degular;
    margin-left: 20px;
    margin-top: 10px;
    margin-bottom: 15px;
    border-radius: 50px;
    height: inherit;
    transition: all 0.8s;
    border: none;
}

.crud_bttn:hover{
    font-weight: bold;
    color: rgb(53, 53, 53);
    border-radius: 10px;
    transition: 0.1s;
}

.Tenant_form{
    font-family: degular;
    margin-left: 20px;
    margin-top: 10px;
    margin-bottom: 15px;
    border-radius: 50px;
    height: inherit;
    transition: all 0.8s;
    border: none;
    justify-content: center;
    padding: 10px;
    margin: 10px;
}



.navbtn2 button:hover{
    font-weight: bold;
    color: rgb(53, 53, 53);
    border-radius: 10px;
    transition: 0.1s;
}
.navbtn2 button{
    border-radius: 20px;
    border: none;
}
    </style>
    
</head>
<body>
     
    <nav class = "defaultnav">
        <div class = "Navdiv">
            <div class = "Logo"><img src = "Images/Logo.png" width = "90px" alt="Logo" ></div>
             <ul>
                <li class = "Lis"><a class="an" href = '#'> Home </a></li>
                <li class = "Lis"><a class="an" href = '#'> Buy </a></li>
                <li class = "Lis"><a class="an" href = '#'> Rent </a></li>
                <li class = "Lis"><a class="an" href = '#'> Advertise </a></li>
                <li class = "Lis"><a class="an" href = '#'> Loan </a></li>
                <li class = "Lis"><a class="an" href = '#'> About Us </a></li>
                <li class = "Lis"><a class="an" href = '#'> Contact Us </a></li>
                <button class = "navbtn1 " style="width: 120px; height: 30px;"><a class="am" href = "#">Create Listing</a></button>
                <button class = "navbtn1 " style="width: 120px; height: 30px;"><a class="am" href = "#">My Account</a></button>
            </ul>    
        </div>
    </nav>

    <!-- <footer class = "footer">
        <div class = "container">
            <div class = "row">
                <div class = "footer-col">
                    <img src = "Images/Logo.png" width = 80px >
                    <ul>
                        <li>Lorem ipsum dolor sit amet <br>consectetur
                            adipisicing elit. <br>obcaecati aspernatur,
                        </li>
                        <li>2024 Property Sales Pvt Ltd. All Rights Reserved</li>
                    </ul>
                </div>

                <div class = "footer-col">
                    <h4>SUPPORT</h4>
                    <ul>
                        <li><a class="ft" href = '#'>loreum </a></li>
                        <li><a class="ft" href = '#'>loreum </a></li>
                        <li><a class="ft" href = '#'>loreum </a></li>
                    </ul>
                </div>

                <div class = "footer-col">
                    <h4>COMPANY</h4>
                    <ul>
                        <li><a class="ft" href = '#'>loreum </a></li>
                        <li><a class="ft" href = '#'>loreum </a></li>
                        <li><a class="ft" href = '#'>loreum </a></li>
                    </ul>
                </div>

                <div class = "footer-col">
                    <h4>EMAIL</h4>
                    <ul>
                        <li><textarea rows="1%" placeholder="Enter your Email"></textarea><button class = "Subscribe" style="width: 100px; align-items: center;">
                            <a class = "ft" href = "#">Subscribe</a></button></li>
                        <li>
                            <dev class = "sociallinks">
                                <ul>
                                    <li ><img src = "Images/Icons/instagram.png" width="25px"></li>
                                    <li><img src = "Images/Icons/facebook.png" width="25px"></li>
                                    <li><img src = "Images/Icons/linkedin.png" width="30px"></li>
                                </ul>
                                
                            </dev>
                        </li>
                        <li>
                            <div class = "terms">
                                <ul>
                                    <li>Terms of Use | </li>
                                    <li>Privacy Policy | </li>
                                    <li>Terms and Conditions</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> -->

</body>
</html>



