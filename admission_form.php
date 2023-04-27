<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <script>
        // const form = document.querySelector("form"),
        // nextBtn = form.querySelector(".nextBtn"),
        // backBtn = form.querySelector(".backBtn"),
        // allInput = form.querySelectorAll(".first input");
    
        // nextBtn.addEventListener("click", ()=> {
        //     allInput.forEach(input => {
        //         if(input.value != ""){
        //             form.classList.add('secActive');
        //         }else{
        //             form.classList.remove('secActive');
        //         }
        //     })
        // })
    
        // nextBtn.addEventListener("click", ()=> form.classList.remove('secActive'));
    </script> -->
</head>
<body>

    <!-- <script src="script.js"></script> -->


    <style>
        *  {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .main-container {
            position: absolute;  
            top: 100px;
            right: 50px;
            width: calc(100% - 350px);
            padding: 0 40px;
            border-radius: 6px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .main-container header {
            position: relative;
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .main-container header::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            height: 3px;
            width: 27px;
            border-radius: 8px;
            background-color: #0047ff;
        }

        .main-container form {
            position: relative;
            margin-top: 16px;
            min-height: 490px;
            background-color: #fff;
            overflow: hidden;
        }

        .main-container form .form {
            position: absolute;
            background-color: #fff;
            transition: 0.3s ease;
        }

        .main-container form .form.second {
            opacity: 0;
            pointer-events: none;
            transform: translateX(100%);
        }

        form.secActive .form.second {
            opacity: 1;
            pointer-events: auto;
            transform: translateX(0);
        }

        form.secActive .form.first {
            opacity: 0;
            pointer-events: none;
            transform: translateX(-100%);
        }

        .main-container form .title {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            font-weight: 500;
            margin: 6px 0;
            color: #333;
        }

        .main-container form .fields {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        .input-field label {
            font-size: 12px;
            font-weight: 500;
            color: #2e2e2e;
        }

        .input-field input, select {
            outline: none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 0 15px;
            height: 42px;
            margin: 8px 0;
        }

        .input-field input:focus,
        .input-field select:focus {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
        }

        .input-field select,
        .input-field input[type="date"] {
            color: #707070;
        }

        .input-field input[type="date"]:valid {
            color: #333;
        }

        .main-container form button, .backBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 45px;
            width: 200px;
            border: none;
            outline: none;
            color: #fff;
            border-radius: 5px;
            margin: 25px 0;
            background-color: #0047ff;
            transition: all 0.3s linear;
            cursor: pointer;
        }

        .main-container form .btnText {
            font-size: 14px;
            font-weight: 400;
        }

        form button:hover {
            background-color: #265df2;
        }

        form button i,
        form .backBtn i {
            margin: 0 6px;
        }

        form .buttons {
            display: flex;
            align-items: center;
        }

        form .buttons button, .backBtn{
            margin-right: 14px;
        }

        @media (max-width: 750px) {
            .main-container form {
                overflow-y: scroll;
            }
            .main-container form::-webkit-scrollbar {
                display: none;
            }

            form .fields .input-field {
                width: calc(100% / 2 - 15px);
            }
        }

        @media (max-width: 550px) {
            form .fields .input-field {
                width: 100%;
            }
        }
    </style>

 <?php
    include('sidebar.php')

?>

    <div class="main-container">
        <header>Admission</header>

        <form action="student_admission.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter Student's first name" name="fname" required>
                        </div>
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter Student's last name" name="lname" required>
                        </div>
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter Birth Date" name="dob" required>
                        </div>
                        <div class="input-field">
                            <label>ID Type</label>
                            <select name="idtype" required>
                                <option disabled selected>Select type</option>
                                <option value="National ID">National ID</option>
                                <option value="Birth Certificate">Birth Certicate</option>
                                <option value="Passport">Passport</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>ID Number</label>
                            <input type="number" placeholder="Enter ID number" name="idno" required>
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
            
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Contact Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Nationality</label>
                            <select name="nationality" required>
                                <option disabled selected>Select Nationality</option>
                                <option value="Kenyan">Kenyan</option>
                                <option value="Ugandan">Ugandan</option>
                                <option value="Tanzanian">Tanzanian</option>
                                <option value="Sudanese">Sudanese</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Home Town</label>
                            <input type="text" placeholder="Enter Home Town" name="htown" required>
                        </div>
                        <div class="input-field">
                            <label>Postal Address</label>
                            <input type="number" placeholder="Enter Postal Address" name="address">
                        </div>
                        <div class="input-field">
                            <label>Relation</label>
                            <select name="relation" required>
                                <option disabled selected>Select Relation</option>
                                <option value="Mother">Mother</option>
                                <option value="Father">Father</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                                <option value="Guardian">Guardian</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Guardian's name</label>
                            <input type="text" placeholder="Enter Guardian's name" name="gname" required>
                        </div>
                        <div class="input-field">
                            <label>Guardian's Phone Number</label>
                            <input type="tel" placeholder="Enter Guardian's Phone Number" name="gtel" required>
                        </div>

                        
                    </div>
                    <button class="submit" type="submit" value="submit" name="submit">
                            <span class="btnText">Submit</span>
                            <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- <div class="form second">
                <div class="details address">
                <span class="title">Address Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Home Town</label>
                            <input type="text" placeholder="Enter Home Town" name="htown">
                        </div>
                        <div class="input-field">
                            <label>Postal Address</label>
                            <input type="number" placeholder="Enter Postal Address" name="address">
                        </div>
                        <div class="input-field">
                            <label>Country</label>
                            <input type="text" placeholder="Enter Country" name="country">
                        </div>
                        <div class="input-field">
                            <label>County</label>
                            <input type="text" placeholder="Enter County of Residence" name="county">
                        </div>

                        <div class="input-field">
                            <label>Constituency</label>
                            <input type="text" placeholder="Enter Constituency" name="constituency">
                        </div>
                        <div class="input-field">
                            <label>Ward</label>
                            <input type="text" placeholder="Enter Ward" name="ward">
                        </div>
            
                    </div>
                </div>
                <div class="details family">
                    <span class="title">Family/Guardian's Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>Relation</label>
                            <select name="relation">
                                <option disabled selected>Select Relation</option>
                                <option value="">Mother</option>
                                <option value="">Father</option>
                                <option value="">Brother</option>
                                <option value="">Sister</option>
                                <option value="">Guardian</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Guardian's name</label>
                            <input type="text" placeholder="Enter Guardian's name" name="gname">
                        </div>
                        <div class="input-field">
                            <label>Guardian's Phone Number</label>
                            <input type="tel" placeholder="Enter Guardian's Phone Number" name="gtel">
                        </div>
                        <div class="input-field">
                            <label>Guardian's Email</label>
                            <input type="email" placeholder="Enter Guardian's Email" name="gmail">
                        </div>

                        <div class="input-field">
                            <label>Alternative Guardian</label>
                            <input type="text" placeholder="Enter Alternative Guardian's Name" name="altguard">
                        </div>
                        <div class="input-field">
                            <label>Phone Number</label>
                            <input type="tel" placeholder="Enter Their Phone Number" name="alttel">
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="backBtn">
                            <i class="fas fa-arrow-left"></i>
                            <span class="btnText">Back</span>
                        </div>
                        <button class="submit" type="submit" value="submit" name="submit">
                            <span class="btnText">Submit</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                    
                </div>
            </div> -->
        </form>
    </div>


    <!-- <script src="script.js"></script> -->
</body>
</html>