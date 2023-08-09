<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asma Khan's CV</title>
    <link rel="stylesheet" href="style.css">
    <script src="fetch.js"></script>
</head>
<style>*{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
    
}
#get{
    font-family: sans-serif;
    background: lightslategray;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
#cont{
    position: relative;
    width: 100%;
    max-width: 1000px;
    min-height: 1000px;
    background: #fff;
    margin: 50px;
    display: grid;
    grid-template-columns: 1fr 2fr;
    box-shadow: 0 35px 55px rgba(0, 0, 0, 0.2);

}
#cont .left{
    position: relative;
    background: #505976;
    padding: 20px;
}

.profileText{
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}
.profileText .profileImg{
    position: relative;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    overflow: hidden;
}
.profileText .profileImg img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.profileText h2{
    color: #fff;
    font-size: 1.5em;
    margin-top: 20px;
    text-transform: uppercase;
    text-align: center;
    font-weight: 600;
    line-height: 1.4em;
}
.profileText h2 span{
    font-size: 0.7em;
    font-weight: 300;
}
.Info{
    padding: 40px;
}
.title{
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 0.4px;
    margin-bottom: 20px;
}
.Info ul{
    position: relative;
}
.Info ul li{
    position: relative;
    list-style: none;
    margin: 10px 0;
    cursor: pointer;
}
.Info ul li .icon{
    display: inline-block;
    width: 30px;
    font-size: 20px;
    color: #fff;
}
.Info ul li span{
    color: #fff;
    font-weight: 200;
}
.Info.education box{
    margin-bottom: 15px;
    color:white;
}
.Info.education h5{
    color: white;
    font-weight: 500;
}
.Info.education h4:nth-child(2){
    color: #fff;
    font-weight: 500;
}
.Info.education h4{
    color: #fff;
    font-weight: 300;
}
.Info.language .percent{
position: relative;
width: 100%;
height: 6px;
background: #f0f0f0;
display: block;
margin-top: 5px;

}
.Info.language .percent div{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    background: #505976;
}
.container .right{
    position: relative;
    background: #fff;
    padding: 40px;
}
.about{
    margin-bottom: 50px;

}
.about:last-child{
    margin-bottom: 0px;
}
.title2{
    color: #505976;
    text-transform: uppercase;
    margin-bottom: 10px;
}
p{
    color: #333;
}
.about .box{
    display: flex;
    flex-direction: row;
    margin: 20px 0;
}
.about .box .year_company{
    min-width: 150px;
}
.about .box .year_company h5{
    text-transform: uppercase;
    color: #848c90;
    font-weight: 600;
    display:inline-block;
    padding: 2px 2px;
}
.about .box .year_company h6{
    text-transform: uppercase;
    color: #848c90;
    font-weight: 600;
}
.about .box .text h4{
    text-transform: uppercase;
    color: #505976;
    font-size: 16px;

}
.about .box .text h4{
    display:inline-block;
    padding: 2px 2px;
}

.interest ul{
    display: grid;
    grid-template-columns: repeat(4,1fr);
}
.interest ul li{
    list-style: none;
    color: #333;
    font-weight: 500;
    margin: 12px 0;
}.interest ul li .icon{
    color: #0af6d7;
    font-size: 18px;
    width: 35px;
}
.Info.education  .box{
    display: inline-block;
    flex-direction: row;
    padding: 5px 5px;
}

.Info.skill  .box h4{
    display: inline-block;
    flex-direction: row;
    padding: 5px 5px;
    color:white;
}


@media(max-width : 1000px){
    #cont{
        margin: 10px;
        grid-template-columns: repeat(1,1fr);
    }
.interest ul{
    grid-template-columns: repeat(2,1fr);
}
}@media(max-width : 600px){
    .about .box{
        flex-direction: column;
    }
    .about .box .year_company{
        margin-bottom: 5px;
        margin-top: 5px;
    }
    .interest ul{
        grid-template-columns: repeat(1,1fr);
    }
    .skills .box{
        grid-template-columns: repeat(1,1fr);
    }
}
</style>
<body>
    <div id="get"> 
           <div class="container" id="cont">
        <div class="left">
            <div class="profileText">
                <div class="profileImg">
                    <img id="image_preview" src="logo.png" alt="">
                </div>
                <h2 id="cvname">Your Name<br></h2>
            </div>
            <div class="Info">
                <h3 class="title">Personal Info</h3>

                <ul>
                    <li>
                        <span class="icon"><ion-icon name="phone-portrait-outline"></ion-icon></span>
                        <span class="text" id="cvcontact">+92300000000</span>
                    </li>
                    <li>
                        <span class="icon"><ion-icon name="mail-unread-outline"></ion-icon></span>
                        <span class="text" id="cvemail">Example@example.com</span>
                    </li>
                  
                    <li>
                        <span class="icon"><ion-icon name="calendar-outline"></ion-icon></span>
                        <span class="text" id="cvdob">dd/mm/yyyy</span>
                    </li>
                </ul>
            </div>
            <div class="Info education">
                <div class="h3 title">Education</div>
               
                        <div class="box"><h5 id="cvstdate">05/02/2019</h5></div><div class="box"><h5 id="cvendate"> - 05/02/2021</h5></div>
                        <div class="box"><h4 id="cvedulevel">Education level</h4></div><div class="box"><h5 id="cvmedal"></h5></div>
                        <div class="box"><h4 id="cvdegree">Degree tile</h4></div><div class="box"><h5  id="cvcgpa">CGPA</h5></div>
                        <div class="box"><h4 id="cvinstitute">Institute Name</h4></div><div class="box" ><h5 id="cvcountry">Country</h5></div>

                   
            </div>
            <div class="Info skill">
                <div class="h3 title">Skills</div>
               
                        <div class="box"><h4 id="cvskill1">Skill title</h4></div><div class="box"><h5 id="cvskill_level1">Skill level</h5></div>
                        <div class="box"><h4 id="cvskill2">Skill title</h4></div><div class="box"><h5 id="cvskill_level2">Skill level</h5></div>
                        <div class="box"><h4 id="cvskill3">Skill title</h4></div><div class="box"><h5 id="cvskill_level3">Skill level</h5></div>
                        
                   
            </div>
            
        </div>
        <div class="right">
            <div class="about">
                <h2 class="title2">Objectives</h2>
                <p id="cvobj">Seeking a position in the field of Computer Science where I can utilize my skills to further work towards personal and professional development and contribute towards the prosperity of the organization.</p>
            </div>
            <div class="about">
                <h2 class="title2">Experience</h2>
                <div class="box">
                    <div class="year_company">
                        <h5 id="cvxendate">dd/mm/yy</h5>
                        <h5 id="cvxstdate">dd/mm/yy</h5>
                        <h6 id="cvcompany">Company</h6>
                    </div>
                    <div class="text">
                        <h4 id="cvdesignation">Designation</h4><h4 id="cvwstatus" style="font-size:10px;">working status?</h4>
                        <p id="cvdescription">Working as an intern in Khyber Pakhtunkhwa Information Technology Board in collaboration with Code For Pakistan for six months of duration.</p>
                    </div>
                </div>
            </div>
            <div class="about">
                <h2 class="title2">Projects</h2>
                <div class="box">
                    <div class="year_company">
                        <h5 id="cvpendate">dd/mm/yy</h5>
                        <h5 id="cvpstdate">dd/mm/yy</h5>
                        <h6 id="cvpcompany">Company</h6>
                    </div>
                    <div class="text">
                        <h4 id="cvptitle">Project Title</h4><h4 id="cvrole" style="font-size:10px;">Your Role</h4>
                        <p id="cvpdescription">Working as an intern in Khyber Pakhtunkhwa Information Technology Board in collaboration with Code For Pakistan for six months of duration.</p>
                    </div>
                </div>
            </div>
            <div class="about">
                <h2 class="title2">Certification</h2>
                <div class="box">
                    <div class="year_company">
                        <h5 id="cvcdate">dd/mm/yy</h5>
                    </div>
                    <div class="text">
                        <h4 id="cvctitle">Certificate Title</h4>
                        <p id="cvcdescription">Working as an intern in Khyber Pakhtunkhwa Information Technology Board in collaboration with Code For Pakistan for six months of duration.</p>
                    </div>
                </div>
            </div>
            



        </div>
    </div></div>

</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>