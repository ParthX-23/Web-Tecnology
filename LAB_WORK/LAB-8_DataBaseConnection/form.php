<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="Form_style.css">
</head>
<body>
    <form action="formData.php"  Method="POST" class="Std_registation">
        <header>
            <nav>
                <div class="left_Section">
                    <!--collage name-->
                    <img src="image.png" alt="logo" />
                    <h1 class="title">BRAINWARE UNIVERSITY</h1> 
                </div>
                <!-- college name and address -->
                <div class="right_section">
                    <h2 class="title">Brainware University</h2>
                    <p> Brainware University, 398,<br> Ramkrishnapur Road,<br> Near Jagadighata
                    Market,<br> Barasat, Kolkata-700125</p>   
                </div>
            </nav>
        </header>

        <main>
            <!-- form body -->
            <div class="formBody">
            
                <div class="form_title">
                    <h2  class="title">student registation form</h2>
                </div>
                <!-- basic info title -->
                <div class="heading">
                    <span>Basic information</span>
                </div>
                <!-- form information -->
                <div class="formInfo">
                    <div class="stdInfo">
                         <!-- first Name  -->
                        <div 
                         class="name">
                            <h3>Full Name</h3>
                       
                             <input
                             class="input_box" id="first_name"
                             type="text"
                             name="firstName"
                         
                             required
                             />
                            <p>First Name</p>
                        </div>
                         <!-- midle Name  -->
                        <div class="name" id="midleName">
                             <input
                             class="input_box"
                             type="text"
                            name="mName"
                              required
                             />
                             <p>Midle Name
                        </div>
                         <!-- Last name -->
                        <div class="name" id="lastName">
                       
                            <input
                                class="input_box"
                                type="text" name="lName"
                                required
                             />
                            <p>Last Name </p>
                        </div>
                    </div>
                    <div class="student_year">
                        <!-- Student number -->
                        <div class="left">
                            <h3>Registation Number</h3>
                            <input type="number" class="input_box"  name="rNumber">
                            <p>e.g.11183021</p>
                        </div>
                        <!-- Year level -->
                        <div class="right">
                            <h3>Year Level</h3>
                            <select name="year" id="year" required>
                                <option value="" disabled selected> Please       Select</option>
                                <option value="1">
                                    1st Year
                                </option>
                                <option value="2">2nd year</option>
                                <option value="3">3rd year</option>
                              </select>
                              <p>for Incoming A.Y. '12-'13</p>
                        </div>
                    </div>
                    <!-- Degree Program and email -->
                     <div class="degree_email">
                        <div class="left">
                            <h3>Degree program</h3>
                            <select name="degree" id="degree">
                                <option value="" selected disabled>Please       Select </option>
                                <option value="1">
                                    B.tech-CS
                                </option>
                                <option value="2">
                                    B.tech-DS
                                </option>
                                <option value="3">
                                    B.tech-AIML
                                </option>
                                <option value="4">
                                    B.tech-Core
                                </option>
                                <option value="5">
                                    B.tech-Robotics
                                </option>
                                <option value="6">
                                    BCA
                                </option>
                            </select>
                            </div>
                        <div class="right">
                            <h3>Email</h3>
                            <input type="email" name="email" placeholder="ex:myname@example.com"class="input_box">
                        </div>
                    </div>
                    <!-- phone number Network provider -->
                     <div class="phone_network">

                        <div class="left">
                            <!-- left section -->
                            <h3>Phone Number</h3>
                            <input type="tel" name="tel" class="input_box"  placeholder="(000) 000-0000">
                        </div>
                        <!-- right section -->
                        <div class="right">
                            <h3>Birth Date</h3>
                            <input type="date" name="date" class="input_box">

                        </div>
                    </div>
                    <!-- present Address -->
                     <div class="address">
                        <h3>Present Address</h3>
                        <div class="address1">
                            <input
                                class="input_box"
                                type="text"
                                name="add1"
                                required
                             />
                            <p>Street Address </p>
                        </div>
                        <div class="address2">
                            <input
                                class="input_box"
                                type="text"
                                name="add2"
                                required
                             />
                            <p>Street Address line 2 </p>
                        </div>
                        <!-- city and state -->
                         <div class="city_state">
                            <div class="left">
                                <input
                                    class="input_box"
                                    type="text"
                                    name="city"
                                    required
                                 />
                                <p>City </p>
                             </div>
                             <div class="right">
                                <input
                                    class="input_box"
                                    type="text"
                                    name="state"
                                    required
                                 />
                                <p>State / Province</p>
                             </div>

                        </div>
                        <!-- postal code and country -->
                         <div class="code_country">
                            <!-- postal code -->
                            <div class="left">
                                <input
                                    class="input_box"
                                    type="text"
                                    name="zipCode"
                                    required
                                 />
                                <p>Postal /Zip Code </p>
                             </div>
                             <!-- country -->
                             <div 
                             class="right">
                                <select        name="country"   id="degree">
                                    <option        value="" selected disabled>Please       Select          </option>
                                    <option     value="1">
                                    India
                                    </option>
                                    <option value="2">
                                    Srilanka
                                    </option>
                                    <option value="3">
                                    Bangladash
                                    </option>
                                    <option value="4">
                                    United State
                                    </option>
                                    <option value="5">
                                        United Kingdom
                                    </option>
                                    <option value="6">
                                    Austrelia
                                    </option>
                                </select>
                                
                                <p>Country</p>
                             </div>
                         </div>  
                     </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="print_submit">
                <div class="print">
                    <input type="button" value="Print"  id='print' onclick="printContent()">
                </div>
                <div class="submit">
                    <input type="submit" value="Submit" id="submit">
                </div>  
            </div>
            <div class="tail">
                <a href="#">Clear Form </a>
            </div>
        </footer>
    </form>
</body>
</html>