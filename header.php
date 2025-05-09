

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Header</title>
    <!-- Bootstrap CSS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.mins.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        #topBar ul li {
            position: relative;
            display: inline-block;
        }

        #topBar a {
            display: inline-block;
            line-height: 1.2rem;
            color: #FFF;
            transition: .2s ease-out;
        }

        ul.subMenu {
            box-sizing: border-box;
            position: absolute;
            top: 100%;
            left: 0;
            width: 170%;
        }

        ul.subMenu li {
            width: 100%;
            background: #3d3d3b;
        }

        #topBar ul.subMenu li a {
            width: 100%;
            padding: 1rem 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, .05);
            border-top: 1px solid rgba(255, 255, 255, .1);
        }

        #topBar ul.subMenu li a:hover,
        #topBar ul.subMenu li.active>a {
            background: #2f2f2d;
            padding-left: 1.1rem;
        }

        ul.subMenu ul.subMenu {
            position: absolute;
            top: 0;
            left: 100%;
            width: 100%;
        }
    </style>



    <style>
        .social_icon {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            gap: 10px;
        }

        .social_icon li a {
            color: #000;
            font-size: 18px;
        }

        /* .logo img {
            max-height: 60px;
            width: auto;
        } */

        .right_icon {
            text-align: right;
        }

        .navbar-nav .nav-link {
            padding-right: 1rem;
            padding-left: 1rem;
        }

        .subMenu {
            display: none;
            position: absolute;
            background-color: white;
            list-style: none;
            padding: 10px;
            min-width: 200px;
            z-index: 1000;
        }

        .subMenu li {
            position: relative;
        }

        .subMenu li:hover>.subMenu {
            display: block;
            left: 100%;
            top: 0;
        }

        .nav-item:hover>.subMenu {
            display: block;
        }

        .searchInput {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .form_sea {
            flex: 1;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .seach_icon {
            background: none;
            border: none;
            font-size: 18px;
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
            .logo img {
                max-height: 50px;
            }

            .searchInput {
                margin-top: 10px;
            }

            .header_midil .row {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .right_icon {
                text-align: center;
                margin-top: 10px;
            }
        }

        @media (max-width: 576px) {
            .navbar-nav .nav-link {
                padding: 0.5rem 1rem;
            }

            .searchInput {
                flex-direction: column;
                gap: 10px;
            }

            .form_sea {
                width: 100%;
            }
        }

        
        @media (max-width : 426px){
            .logo img {
                height: 15vw;
            }
        }

        
        @media (max-width : 320px){
            .logo img {
                height: 12vw;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="header py-2">
            <div class="header_midil">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-12 text-md-start text-center">
                            <ul class="social_icon">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="col-md-8 col-12 text-center my-2 my-md-0">
                            <a class="logo" href="#"><img src="images/logo.jpeg" alt="Logo" /></a>
                        </div>

                        <div class="col-md-12 col-12 text-md-end text-center mt-2 mt-md-0">
                            <a href="#" class="order"><i class="fa fa-user"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        <div class="header_bottom">
            <div class="container">
                <div class="row align-items-center py-2">
                    <div class="col-lg-8 col-md-12">
                        <nav class="navbar navbar-expand-md navbar-dark">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topBar" aria-controls="topBar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="topBar">
                                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="categories.php" role="button">Categories</a>
                                        <ul class="subMenu">
                                            <li><a href="#">Item 1.1</a></li>
                                            <li>
                                                <a href="#">Item 1.2 &nbsp;<i class="fa fa-angle-right"></i></a>
                                                <ul class="subMenu">
                                                    <li><a href="#">Item 1.2.1 long name</a></li>
                                                    <li>
                                                        <a href="#">Item 1.2.2 &nbsp;<i class="fa fa-angle-right"></i></a>
                                                        <ul class="subMenu">
                                                            <li><a href="#">Item 1.2.2.1</a></li>
                                                            <li>
                                                                <a href="#">Item 1.2.2.2 &nbsp;<i class="fa fa-angle-right"></i></a>
                                                                <ul class="subMenu">
                                                                    <li><a href="#">Item 1.2.2.2.1</a></li>
                                                                    <li><a href="#">Item 1.2.2.2.2</a></li>
                                                                    <li><a href="#">Item 1.2.2.2.3</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Item 1.3</a></li>
                                            <li><a href="#">Item 1.4</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="news.php">Blogs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-2 mt-lg-0">
                        <div class="searchInput">
                            <input class="form_sea" type="text" placeholder="Search" name="search">
                            <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        let suggestions = [
            "ventilator Dräger savina icu ventilator",
            "ventilator Dräger savina 300 ventilator",
            "ventilator Dräger Evita 2 Dura Ventilator",
            "ventilator Dräger Evita 4 Ventilator",
            "ventilator Dräger Evita Xl ICU Ventilator",
            "ventilator Dräger Babylog® 8000 Plus Ventilator",
            "ventilator Dräger Babylog® 2000 Plus Ventilation",
            "ventilator Dräger Babylog® VN500",
            "ventilator Dräger Oxylog® 2000 Transport",
            "ventilator Dräger Oxylog® 3000 Transport",
            "ventilator Dräger Oxylog® 1000 Transport",
            "ventilator MAQUET (Siemens)",
            "ventilator MAQUET Servo S Universal",
            "ventilator MAQUET Servo-i",
            "ventilator MAQUET Servo-n Neonatal",
            "ventilator MAQUET Servo-u MR Conditional",
            "ventilator MAQUET Servo-u Mechanical",
            "ventilator G.E (General Electric)",
            "ventilator G.E Engstrom Carestation",
            "ventilator G.E Versamed iVent 201 ICU",
            "ventilator G.E SLE 2000 Neonatal",
            "ventilator G.E SLE 4000 Neonatal",
            "ventilator G.E Healthcare SLE 5000 HFO",
            "ventilator Carefusion (VIASYS)",
            "ventilator Carefusion LTV-900",
            "ventilator Carefusion LTV 950 Medical",
            "ventilator Carefusion LTV 1000 Medical",
            "ventilator Carefusion LTV 1150 Medical",
            "ventilator Carefusion Ltv 1200 Portable transport & ICU",
            "ventilator Carefusion vela",
            "ventilator Carefusion Avea",
            "ventilator PHILIPS",
            "ventilator PHILIPS Respironics Trilogy 100",
            "ventilator PHILIPS Respironics Trilogy EVO",
            "ventilator PHILIPS Trilogy EV300",
            "ventilator PHILIPS Respironics Esprit",
            "ventilator PHILIPS Respironics V200",
            "ventilator PHILIPS Respironics V60",
            "ventilator NIHON KOHDEN Puritan Bennett 840",
            "ventilator Hamilton C1 Medical",
            "ventilator Hamilton C2 Medical",
            "ventilator Hamilton G5",
            "Infant Care Bubble CPAP System",
            "Infant Care Bubble CPAP Low flow",
            "Infant Care Bubble CPAP high flow",
            "Infant Care Bubble CPAP System BC161-10",
            "Infant Care Fisher & Paykel Humidification",
            "Infant Care Fisher & Paykel 850 Noninvasive",
            "Infant Care Fisher And Paykel 950 Humidifier",
            "Infant Care Radiant Warmer",
            "Infant Care Phototherapy Equipment Phototherapy Unit",
            "O.T Equipments Anesthesia Machine",
            "O.T Equipments Anesthesia Datex Ohmeda (ADU S5)",
            "O.T Equipments Anesthesia GE Datex Ohmeda Aestiva 5",
            "O.T Equipments Anesthesia Ge Anaesthesia Machine AVANCE",
            "O.T Equipments Anesthesia GE Datex Ohmeda Avance S5",
            "O.T Equipments OT Light",
            "O.T Equipments Suction Machine Single Jar",
            "O.T Equipments GE Double jar suction machine",
            "O.T Equipments Operation Table",
            "Electrosurgical Covidien Valleylab Force FX Electro Surgical Unit",
            "Electrosurgical Covidien Valleylab Force Triad",
            "Electrosurgical 50 Hz ERBE ICC 200",
            "Electrosurgical Erbe Icc 200",
            "Electrosurgical ERBE ICC 300",
            "Electrosurgical ERBE ICC 350",
            "Electrosurgical karl storz Laparoscopy & Endoscopy",
            "Electrosurgical karl storz UL-UHD - Clear View 4K Laparoscopic Tower",
            "Electrosurgical karl storz Surgical Camera",
            "Electrosurgical karl storz Laparoscopy 5mm 30-degree, 5mm 0-degree",
            "Electrosurgical karl storz Laparoscopy Single Chip Camera",
            "Electrosurgical karl storz Tele Pack X LED Medical Instruments",
            "Electrosurgical karl storz LED Endoscopy Monitor",
            "Electrosurgical Stryker Endoscopic 1288 HD Camera",
            "Electrosurgical Stryker Endoscopic 988Camera System",
            "Electrosurgical Stryker Endoscopic HD",
            "Electrosurgical Stryker Endoscopic 8B02",
            "Electrosurgical Stryker Endoscopic Camera Stryker SDC3 HD Video Recorder",
            "Electrosurgical Stryker Endoscopic 1288 HD Video Tower System",
            "Electrosurgical Stryker Endoscopic 1688 Endoscopy Aim System",
            "Electrosurgical Stryker Endoscopic 1488 Laparoscopic Camera System",
            "Electrosurgical Stryker Endoscopic Laparoscope",
            "Electrosurgical Stryker Endoscopic 1488 Lap. Set",
            "Electrosurgical Stryker Endoscopic 1488 Camera System",
            "Defibrillator Philips Heartstart XL",
            "Defibrillator Philips Heartstart Xl Plus",
            "Defibrillator Philips Heartstart Frx Aed",
            "Defibrillator Philips HeartStart MRX",
            "Defibrillator Medtronic Lifepak 10",
            "Defibrillator Medtronic Lifepak 20",
            "Defibrillator Medtronic AEX Generator",
            "IABP Machine Datascope CS100",
            "IABP Machine Maquet Datascope CS300",
            "IABP Medtronic ACT II Coagulation Analyzer",
            "IABP Medtronic ACT Plus Coagulation Analyzer",
            "IABP Medtronic Pacemaker 5388 Single Chamber",
            "IABP Medtronic Pacemaker 5388 Dual Chamber",
            "Patient Monitors Philips Intellivue Mp20",
            "Patient Monitors Philips Intellivue Mp30",
            "Patient Monitors Philips Intellivue MP50",
            "Patient Monitors Philips Intellivue MP70",
            "Patient Monitors Philips SureSigns VS4",
            "Patient Monitors Philips Intellivue MP5",
            "Patient Monitors Pulse Oximeter Nellcor N 595",
            "Patient Monitors Pulse Oximeter Nellcor N 600",
            "Patient Monitors Pulse Oximeter Covidien Nellcor",
            "Patient Monitors Pulse Oximeter PM1000N Nellcor",
            "Patient Monitors Pulse Oximeter MASIMO Radical 7 Rainbow",
            "Patient Monitors Pulse Oximeter MASIMO Rad-97",
            "ECG Machine 12 channel Comen CM1200A",
            "ECG Machine 12 channel Comen Cm1200b",
            "ECG Machine 12 channel Edan",
            "ECG Machine 12 channel BPL CARDIART- 9108",
            "ECG Machine 6 channel 8108 View Bpl",
            "ECG Machine 6 channel Ge Mac 600",
            "ECG Machine 6 channel GE MAC 600",
            "Oxygen Concentrators Philips Everflo Air 5 LPM3",
            "Oxygen Concentrators ASCO, Flow Rate: 5 LPM",
            "Oxygen BiPAP Philips Dreamstation Auto Cpap Machine",
            "Oxygen BiPAP Philips A40 Respironics Bipap Machine",
            "Oxygen BiPAP ResMed AirCurve 10 VAuto with Humidifier",
            "Oxygen BiPAP Resmed AirCurve 10 ST BIPAP",
            "Oxygen BiPAP AirCurve 10 ResMed CPAP",
            "Oxygen Syringe Pump  EN-S3",
            "Oxygen Syringe Pump B-BRAUN",
            "Oxygen Syringe Pump SN-50C6",
            "Silicon Ambu Bag Resuscitator-Neonatal(250ml capacity",
            "Disposable Patient Circuit",
            "Neonatal Nasal Prongs",
            "Bonnet",
            "Cpap Nasal Mask",
            "Silicone Adult Test Lung",
            "Manual Disposable Humidifier",
            "Bacteria Filter",
            "Pulse Oximeter",
            "Abs BiPAP Machine Tube",
            "Types of batteries ",
            "All types oxygen cell",
            "BP Cuff(Blood Pressure)",
            "ECG Machine Leads",
            "All Types ECG Paper Roll ",
            "NIBP Hose Pipe",
            "ECG Electrodes",
            "Nebulizer Machine & Parts",
            "Nebulizer Machine Portable OTICA Nebulizer Machine for Adult and Kids",
            "Nebulizer Machine Extracare Table Top Compressor Nebulizer Machine",
            "Nebulizer Machine Dr. Diaz Table Top, Portable Nebulizer Machine Parts",
            "Nebulizer Machine OSR Medplus Table Top Compressor Nebulizer Machine",
            "Nebulizer Machine Portable Ambitech Easy NC 12",
            "Ultrasound & Sonography Gel",
            "UPS"
        ];

        // getting all required elements
        const searchInput = document.querySelector(".searchInput");
        const input = searchInput.querySelector("input");
        const resultBox = searchInput.querySelector(".resultBox");
        const icon = searchInput.querySelector(".icon");
        let linkTag = searchInput.querySelector("a");
        let webLink;

        // if user press any key and release
        input.onkeyup = (e) => {
            let userData = e.target.value; //user enetered data
            let emptyArray = [];
            if (userData) {
                emptyArray = suggestions.filter((data) => {
                    //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
                    return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
                });
                emptyArray = emptyArray.map((data) => {
                    // passing return data inside li tag
                    return data = '<li>' + data + '</li>';
                });
                searchInput.classList.add("active"); //show autocomplete box
                showSuggestions(emptyArray);
                let allList = resultBox.querySelectorAll("li");
                for (let i = 0; i < allList.length; i++) {
                    //adding onclick attribute in all li tag
                    allList[i].setAttribute("onclick", "select(this)");
                }
            } else {
                searchInput.classList.remove("active"); //hide autocomplete box
            }
        }

        function showSuggestions(list) {
            let listData;
            if (!list.length) {
                userValue = inputBox.value;
                listData = '<li>' + userValue + '</li>';
            } else {
                listData = list.join('');
            }
            resultBox.innerHTML = listData;
        }
    </script>

    <script>
        $(".subMenu").hide();
        $(".subMenu").parent("li").hover(function() {
            $(this).find(">.subMenu").not(':animated').slideDown(300);
            $(this).toggleClass("active ");
        });
        $(".subMenu").parent("li").mouseleave(function() {
            $(this).find(">.subMenu").slideUp(150);
        });
        $("a[href=\"#\"]").click(function() {
            return false;
        });
    </script>

</body>

</html>