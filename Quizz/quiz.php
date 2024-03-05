<html>

<style>
    html{
  scroll-behavior: smooth;
}
/* Hide the warning by default */
.mobile-warning {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #fff;
  color: #000;
  text-align: center;
  padding-top: 50px;
  z-index: 1000;
}

/* Show the warning on screens less than 600px wide */
@media (max-width: 600px) {
  .mobile-warning {
    display: block;
  }

  /* Hide other elements */
  header, .welcome, .whatifarm, #footer {
    display: none;
  }
}


/* CSS for the header */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  border-bottom: 1px solid #333; /* Add a bottom border*/
  background-color: #026A1A; /* Gray background color */
  height: 40px; /* Fixed height */ 
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
}

.logo {
  width: 250px; /* Adjust the width as needed */
}

/* Style for the navigation links */
.nav-links {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-grow: 1; /* Allow links to grow and occupy the available space */
}

.nav-links a {
  text-decoration: none;
  color: white ;
  margin: 0 15px; /* Add horizontal spacing between the links */
  text-decoration: none;
    transition: color 0.3s ease;
}
.nav-links a:hover {
  color: rgb(0, 0, 0);
}
#navbar {
  transition: top 0.3s ease;
  position: fixed;
  height: 60px;
  top: -100px;
  width: 100%;
}

#navbar.scrolled {
  top: 0;
}

.profile-link {
  float: right;
  margin-right: 20px; /* Add spacing to the right of the profile link */
  color: white;
  text-decoration: none; /* Remove underlines */
}

/* CSS for the main content AKA body*/

body::-webkit-scrollbar {
  display: none;
}
body {
  -ms-overflow-style: none;  /* IE and Edge */
  scrollbar-width: none;  /* Firefox */
}


/* CSS for the footer */
footer {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  background-color: #333;
  color: #fff;
  border-top: 1px solid #333;
  height: 50px;
  height: 60px;
}

.footer-logo {
  width: 150px; /* Adjust the width as needed */
  margin-left: 10px; /* Adjust the spacing between images */
}

.footer-images {
  display: flex;
}

.footer-image {
  width: 50px; /* Set the initial width */
  height: 50px; /* Set the initial height */
  margin-left: 10px; /* Add spacing between images */
  transition: transform 0.3s, border 0.3s; /* Add smooth transition for transform and border */
}
#footer.hide {
  display: none;
}

/* Increase size, add border, and spin on hover */
.footer-image:hover {
  transform: scale(1.5) rotate(360deg); /* Increase the size and add a 360-degree spin on hover */
  transition: transform 0.3s, border 0.3s, rotate 0.3s; /* Add a smooth transition for the transformations */
}
#footer .footer-content {
  max-width: 800px;
  margin: 0 auto;
}

#footer .footer-links {
  list-style: none;
  padding: 0;
}

#footer .footer-links li {
  display: inline-block;
  margin: 0 10px;
}

#footer .footer-links a {
  color: #fff;
  text-decoration: none;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.secoundfooter {
    background-color: #333;
    color: #fff;
    padding: 40px;
    display: flex;
    justify-content: space-between;
}

.secoundfooter a {
    color: #fff;
    text-decoration: none;
}

.secoundfooter a:hover {
    color: #fff;
    text-decoration: underline;
}

.secoundfooter .footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
}

.secoundfooter .footer-section {
    flex: 1;
    margin-right: 20px;
}

.secoundfooter .footer-section h4 {
    font-size: 1.2em;
    margin-bottom: 20px;
}

.secoundfooter .socials {
    list-style: none;
    padding: 0;
    display: flex;
}

.secoundfooter .socials li {
    margin-right: 20px;
}

.secoundfooter .socials i {
    font-size: 1.8em;
}

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .image-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 20px;
        }
        .image-container img {
            margin: 10px;
            width: 500px;
            height: 500px;
            object-fit: cover;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        form {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #444;
        }
        h1{
            text-align: center;
        
        }
</style>
</head>

<body>


    <?php
    $Question1 = $_POST["Question1"];
    $Question2 = $_POST["Question2"];
    $Question3 = $_POST["Question3"];
    $Question4 = $_POST["Question4"];
    $Question5 = $_POST["Question5"];
    
 
    echo "<div class='container'>";
    if ($Question1 == "ร้อน") {
        if ($Question2 == "ดินร่วน") {
            if ($Question3 == "1-3 เดือน") {
                if ($Question4 == "เล็ก") {
                    if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/ตำลีง.jpg" alt="ตำลึง" >';
                        echo '<br><img src="imgQuiz/ต้นหอม.jpg" alt="ต้นหอม">';
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "<h1>เหมาะกับการปลูก: ตำลึง, ต้นหอม, คะน้า</h1>";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/แตงกวา.png" alt="แตงกวา">';
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: แตงกวา, ผักบุ้ง, มะระ, กวางตุ้ง, ผักชี</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "กลาง") {
                    if ($Question5 == "ยาก") {
                        
                        echo '<br><img src="imgQuiz/มะเขือเทศ.jpeg" alt="มะเขือเทศ">';
                        echo "เหมาะกับการปลูก: มะเขือเทศ";
                    }
                    if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/ตำลีง.jpg" alt="ตำลึง">';
                        echo '<br><img src="imgQuiz/ต้นหอม.jpg" alt="ต้นหอม">';
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "<h1>เหมาะกับการปลูก: ตำลึง, ต้นหอม, คะน้า</h1>";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/แตงกวา.png" alt="แตงกวา">';
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: แตงกวา, ผักบุ้ง, มะระ, กวางตุ้ง, ผักชี</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "ใหญ่") {
                    if ($Question5 == "ยาก") {
                        
                        echo '<br><img src="imgQuiz/หน่อไม้.jpg" alt="หน่อไม้">';
                        echo "<h1>เหมาะกับการปลูก: หน่อไม้</h1>";
                    } else if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/ตำลีง.jpg" alt="ตำลึง">';
                        echo '<br><img src="imgQuiz/ต้นหอม.jpg" alt="ต้นหอม">';
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "<h1>เหมะกับการปลูก: ตำลึง, ต้นหอม, คะน้า</h1>";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/แตงกวา.png" alt="แตงกวา">';
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: แตงกวา, ผักบุ้ง, มะระ, กวางตุ้ง, ผักชี</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                }else {
                    echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                }
            } else if ($Question3 == "4 เดือนขี้นไป") {
                if ($Question4 == "เล็ก") {
                    if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/มะกรูด.jpg" alt="มะกรูด">';
                        echo "<h1>เหมาะกับการปลูก: มะกรูด</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "กลาง") {
                    if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/มะกรูด.jpg" alt="มะกรูด">';
                        echo "<h1>เหมาะกับการปลูก: มะกรูด</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                }
                if ($Question4 == "ใหญ่") {
                    if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/มะกรูด.jpg" alt="มะกรูด">';
                        echo "<h1>เหมาะกับการปลูก: มะกรูด</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                }

            }else {
                echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
            }
        } else if ($Question2 == "ดินทราย") {
            if ($Question3 == "1-3 เดือน") {
                if ($Question4 == "เล็ก") {
                    if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/แตงกวา.png" alt="แตงกวา">';
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: แตงกวา, ผักบุ้ง, มะระ, กวางตุ้ง, ผักชี</h1>";
                    } else if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/ต้นหอม.jpg" alt="ต้นหอม">';
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "<h1>เหมาะกับการปลูก: ต้นหอม, คะน้า</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "ใหญ่") {
                    if ($Question5 == "ยาก") {
                        
                        echo '<br><img src="imgQuiz/หน่อไม้.jpg" alt="หน่อไม้">';
                        echo "เหมาะกับการปลูก: หน่อไม้";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/แตงกวา.png" alt="แตงกวา">';
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: แตงกวา, ผักบุ้ง, มะระ, กวางตุ้ง, ผักชี</h1>";
                    } else if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/ต้นหอม.jpg" alt="ต้นหอม">';
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "<h1>เหมาะกับการปลูก: ต้นหอม, คะน้า</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "กลาง") {
                    if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/แตงกวา.png" alt="แตงกวา">';
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: แตงกวา, ผักบุ้ง, มะระ, กวางตุ้ง, ผักชี</h1>";
                    } else if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/ต้นหอม.jpg" alt="ต้นหอม">';
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "<h1>เหมาะกับการปลูก: ต้นหอม, คะน้า</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                }else {
                    echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                }
            }else {
                echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
            }
        }else {
            echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
        }
    } else if ($Question1 == "ฝน") {
        if ($Question2 == "ดินร่วน") {
            if ($Question3 == "1-3 เดือน") {
                if ($Question4 == "เล็ก") {
                    if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "ใหญ่") {
                    if ($Question5 == "ยาก") {
                        
                        echo '<br><img src="imgQuiz/หน่อไม้.jpg" alt="หน่อไม้">';
                        echo "<h1>เหมาะกับการปลูก: หน่อไม้</h1>";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo "<h1>เหมาะกับการปลูก: ผักบุ้ง</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "กลาง") {
                    if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo "<h1>เหมาะกับการปลูก: ผักบุ้ง</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                }else {
                    echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                }
            }
        } else if ($Question2 == "ดินทราย") {
            if ($Question3 == "1-3 เดือน") {
                if ($Question4 == "เล็ก") {
                    if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo "<h1>เหมาะกับการปลูก: ผักบุ้ง</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "ใหญ่") {
                    if ($Question5 == "ยาก") {
                        
                        echo '<br><img src="imgQuiz/หน่อไม้.jpg" alt="หน่อไม้">';
                        echo "<h1>เหมาะกับการปลูก: หน่อไม้</h1>";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo "<h1>เหมาะกับการปลูก: ผักบุ้ง</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "กลาง") {
                    if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/ผักบุ้ง.jpg" alt="ผักบุ้ง">';
                        echo "<h1>เหมาะกับการปลูก: ผักบุ้ง</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                }else {
                    echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                }
            }else {
                echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
            }
        }else {
            echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
        }
    } else if ($Question1 == "หนาว") {
        if ($Question2 == "ดินร่วน") {
            if ($Question3 == "1-3 เดือน") {
                if ($Question4 == "เล็ก") {
                    if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "<h1>เหมาะกับการปลูก: คะน้า</h1>";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: มะระ, กวางตุ้ง, ผักชี</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "กลาง") {
                    if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "<h1>เหมาะกับการปลูก: คะน้า</h1>";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: มะระ, กวางตุ้ง, ผักชี</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "ใหญ่") {
                    if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: มะระ, กวางตุ้ง, ผักชี</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                }else {
                    echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                }
            }else {
                echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
            }
        } else if ($Question2 == "ดินทราย") {
            if ($Question3 == "1-3 เดือน") {
                if ($Question4 == "เล็ก") {
                    if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "<h1>เหมาะกับการปลูก: คะน้า</h1>";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: มะระ, กวางตุ้ง, ผักชี</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "กลาง") {
                    if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "เหมาะกับการปลูก: คะน้า";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: มะระ, กวางตุ้ง, ผักชี</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                } else if ($Question4 == "ใหญ่") {
                    if ($Question5 == "ง่าย") {
                        
                        echo '<br><img src="imgQuiz/คะน้า.jpg" alt="คะน้า">';
                        echo "เหมาะกับการปลูก: คะน้า";
                    } else if ($Question5 == "กลาง") {
                        
                        echo '<br><img src="imgQuiz/มะระ.jpg" alt="มะระ">';
                        echo '<br><img src="imgQuiz/กวางตุ้ง.jpg" alt="กวางตุ้ง">';
                        echo '<br><img src="imgQuiz/ผักชี.jpg" alt="ผักชี">';
                        echo "<h1>เหมาะกับการปลูก: มะระ, กวางตุ้ง, ผักชี</h1>";
                    }else {
                        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                    }
                }else {
                    echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
                }
            }else {
                echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
            }
        }else {
            echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
        }
    } else {
        echo "<h1>ไม่มีพืชที่เหมาะสมกับการปลูก</h1>";
    }
    
    ?>
    </div>
    <br><br>
    <form method="post" action="../Index.html">
        <input type="submit" name="submit_button" value="กลับไปหน้าหลัก">
        
    </form>
    <script>
window.onload = function() {
    // Style the body
    document.body.style.fontFamily = 'Arial, sans-serif';
    document.body.style.margin = '0';
    document.body.style.padding = '0';
    document.body.style.backgroundColor = '#f4f4f4';

    // Create and style the image container
    var container = document.createElement('div');
    container.style.display = 'flex';
    container.style.justifyContent = 'center'; // center items horizontally
    container.style.flexWrap = 'wrap'; // allow items to wrap onto multiple lines
    container.style.alignItems = 'center'; // vertically align items in the center
    container.style.padding = '20px';
    container.style.width = '100%'; // make the container take up the full width of its parent

    // Style the images and add them to the container
    var images = document.getElementsByTagName('img');
    for (var i = images.length - 1; i >= 0; i--) {
        images[i].style.margin = '10px';
        images[i].style.width = '300px';
        images[i].style.height = '300px';
        images[i].style.objectFit = 'cover';
        images[i].style.boxShadow = '0px 0px 10px rgba(0,0,0,0.1)';
        container.appendChild(images[i].cloneNode()); // clone the images to avoid modifying the originals
    }

    // Remove the original images from the document
    while (images.length > 0) {
        images[0].parentNode.removeChild(images[0]);
    }

    // Add the container to the body at the top
    document.body.insertBefore(container, document.body.firstChild);

   // Style the form
var form = document.getElementsByTagName('form')[0];
form.style.display = 'flex';
form.style.justifyContent = 'center';
form.style.flexDirection = 'column'; // make the form display its children in a column
form.style.marginBottom = '20px';

// Find the text element
var textElements = document.querySelectorAll('p'); // replace 'p' with the actual selector of your text element

// Loop through all paragraph elements to find the one that contains the desired text
for (var i = 0; i < textElements.length; i++) {
    if (textElements[i].textContent.includes('เหมาะกับการปลูก')) {
        // Make the text larger and center it
        textElements[i].style.fontSize = '60px'; // adjust size as needed
        textElements[i].style.textAlign = 'center';
        break;
    }
}
// Remove the text element from its current location
textElement.parentNode.removeChild(textElement);

// Create a new div
var div = document.createElement('div');
div.style.display = 'flex';
div.style.flexDirection = 'column';
div.style.alignItems = 'center';

// Add the text element and the submit button to the div
div.appendChild(textElement);

var submitButton = document.getElementsByName('submit_button')[0];
div.appendChild(submitButton);

// Add the div to the form
form.appendChild(div);

// Style the submit button
submitButton.style.fontSize = '18px';
submitButton.style.padding = '10px 20px';
submitButton.style.border = 'none';
submitButton.style.backgroundColor = '#333';
submitButton.style.color = '#fff';
submitButton.style.width = '200px'; // prevent the submit button from taking up the full width

// Move the form to the end of the body
document.body.appendChild(form);
}
</script>
</body>

</html>