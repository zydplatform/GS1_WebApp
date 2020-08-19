<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Planet Systems Uganda">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="web application for barcodes using mobile first approach">
    <meta name="description" content="GS1 Uganda website">
    <title>GS1 Uganda</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    <link rel="icon" href="../images/newlogo1.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<style type="text/css">
    
/*    * {
    margin: 0;
    padding: 0
}*/

html {
    height: 100%
}

#grad1 {
    /*background: white;*/
    /*background-image:url('../images/eight.jpg');*/

}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px;
    width: 50%;
    align-items: center;
    margin-left: 20%;
}

#msform fieldset .form-card {
    background: white;
    border: solid 1px rgba(0, 0, 0, 0.2);
    border-radius: 0px;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;
    position: relative
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

#msform fieldset:not(:first-of-type) {
    display: none
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E
}

#msform input,#msform select,
#msform textarea {
    padding: 0px 8px 4px 8px;
    border: solid;
    border-radius: 2%;
    /*border-bottom: 1px solid #ccc;*/
    /*border-radius: 0px;*/
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
}



#msform input:focus,#msform select:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: solid;
    border-radius: 2%;
    font-weight: bold;
    border-color:skyblue;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button:hover,
#msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue
}

.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: skyblue
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.fit-image {
    width: 100%;
    object-fit: cover
}
strong{
    color: #ff5721;
}
/*#msform input[type='file']{
    border: none;
}*/
</style>

</head>
<body>
<!-- MultiStep Form -->
<div class="container-fluid jumbotron" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <span><img src="./images/newlogo1.png" alt="gs1uganda-logo" style="width: 150px;height: 120px;"></span>

                <h2><strong>Register With Us</strong></h2>
                
                <h4>Create an Account With Us To Get Started</h4>
                <div class="row">
                    <div class="col-md-12 mx-0">

                        

                        <form id="msform" class="submit" name="myform" action="{{url('post-registration')}}" method="POST" enctype="multipart/form-data">
                            <!-- @csrf -->
                            {{ csrf_field() }}
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Personal/Client Details</strong></li>
                                <li id="personal"><strong>Company Information</strong></li>
                                <li id="payment"><strong>Security</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                                @if(count($errors) > 0)
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif

                                @if(session('response'))
                                    <div class="alert alert-success">
                                        {{ session('success')}}
                                    </div>
                                @endif
                                <div class="form-card">
                                    <h2 class="fs-title">Account Information</h2>

                                    <input type="text" name="name" id="name" placeholder="UserName/Company Name" required/>
                                    <input type="email" name="email" placeholder="Company Email Id" required />
                                    <select name="ownership" id="ownership"><option value="Sole Proprietary">Sole Proprietary</option><option value="Corporation">Corporation</option></select>
                                    <input type="text" name="businessowner" id="businessowner" placeholder="Business Owners" />
                                    <select class="list-dt" name="companysize" id="companysize"><option value="micro-enterprises">Micro Entreprise</option><option value="Small Scale Enterprises">Small Scale Entreprise</option><option value="Medium Scale Enterprises">Medium Scale Enterprises</option><option value="Large Scale Enterprises">Large Scale Entreprise</option></select>
                                    <input type="text" name="contactp" id="contactp" placeholder="Contact Person Full Name">
                                    <input name='telephone' id='telephone' type='number' value='' placeholder="Contact Person Telephone" />
                                    <!-- <input type="password" name="pwd" placeholder="Password" /> <input type="password" name="cpwd" placeholder="Confirm Password" /> -->
                                    <span style="padding: 0px 0px;"><strong>Already a member?</strong><a href="{{url('login')}}">Login</a></span>
                                </div> <button type="button" name="next" class="next action-button" value="Next Step">Next</button>
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Company Information</h2> 
                                    <input type="text" name="regno" id="regno" placeholder="Business Registration Number" />
                                    <input type="text" name="bname" id="bname" placeholder="Business Full Names" />
                                    <input type="number" name="btel" id="btel" placeholder="Business Telephone">
                                    <select name='input_30' id='input_6_30' class='medium gfield_select'   aria-required="true" aria-invalid="false"><option>Country of Residence</option><option value='Afghanistan' >Afghanistan</option><option value='Albania' >Albania</option><option value='Algeria' >Algeria</option><option value='American Samoa' >American Samoa</option><option value='Andorra' >Andorra</option><option value='Angola' >Angola</option><option value='Antigua and Barbuda' >Antigua and Barbuda</option><option value='Argentina' >Argentina</option><option value='Armenia' >Armenia</option><option value='Australia' >Australia</option><option value='Austria' >Austria</option><option value='Azerbaijan' >Azerbaijan</option><option value='Bahamas' >Bahamas</option><option value='Bahrain' >Bahrain</option><option value='Bangladesh' >Bangladesh</option><option value='Barbados' >Barbados</option><option value='Belarus' >Belarus</option><option value='Belgium' >Belgium</option><option value='Belize' >Belize</option><option value='Benin' >Benin</option><option value='Bermuda' >Bermuda</option><option value='Bhutan' >Bhutan</option><option value='Bolivia' >Bolivia</option><option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option><option value='Botswana' >Botswana</option><option value='Brazil' >Brazil</option><option value='Brunei' >Brunei</option><option value='Bulgaria' >Bulgaria</option><option value='Burkina Faso' >Burkina Faso</option><option value='Burundi' >Burundi</option><option value='Cambodia' >Cambodia</option><option value='Cameroon' >Cameroon</option><option value='Canada' >Canada</option><option value='Cape Verde' >Cape Verde</option><option value='Cayman Islands' >Cayman Islands</option><option value='Central African Republic' >Central African Republic</option><option value='Chad' >Chad</option><option value='Chile' >Chile</option><option value='China' >China</option><option value='Colombia' >Colombia</option><option value='Comoros' >Comoros</option><option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option><option value='Congo, Republic of the' >Congo, Republic of the</option><option value='Costa Rica' >Costa Rica</option><option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option><option value='Croatia' >Croatia</option><option value='Cuba' >Cuba</option><option value='Curaçao' >Curaçao</option><option value='Cyprus' >Cyprus</option><option value='Czech Republic' >Czech Republic</option><option value='Denmark' >Denmark</option><option value='Djibouti' >Djibouti</option><option value='Dominica' >Dominica</option><option value='Dominican Republic' >Dominican Republic</option><option value='East Timor' >East Timor</option><option value='Ecuador' >Ecuador</option><option value='Egypt' >Egypt</option><option value='El Salvador' >El Salvador</option><option value='Equatorial Guinea' >Equatorial Guinea</option><option value='Eritrea' >Eritrea</option><option value='Estonia' >Estonia</option><option value='Ethiopia' >Ethiopia</option><option value='Faroe Islands' >Faroe Islands</option><option value='Fiji' >Fiji</option><option value='Finland' >Finland</option><option value='France' >France</option><option value='French Polynesia' >French Polynesia</option><option value='Gabon' >Gabon</option><option value='Gambia' >Gambia</option><option value='Georgia' >Georgia</option><option value='Germany' >Germany</option><option value='Ghana' >Ghana</option><option value='Greece' >Greece</option><option value='Greenland' >Greenland</option><option value='Grenada' >Grenada</option><option value='Guam' >Guam</option><option value='Guatemala' >Guatemala</option><option value='Guinea' >Guinea</option><option value='Guinea-Bissau' >Guinea-Bissau</option><option value='Guyana' >Guyana</option><option value='Haiti' >Haiti</option><option value='Honduras' >Honduras</option><option value='Hong Kong' >Hong Kong</option><option value='Hungary' >Hungary</option><option value='Iceland' >Iceland</option><option value='India' >India</option><option value='Indonesia' >Indonesia</option><option value='Iran' >Iran</option><option value='Iraq' >Iraq</option><option value='Ireland' >Ireland</option><option value='Israel' >Israel</option><option value='Italy' >Italy</option><option value='Jamaica' >Jamaica</option><option value='Japan' >Japan</option><option value='Jordan' >Jordan</option><option value='Kazakhstan' >Kazakhstan</option><option value='Kenya' >Kenya</option><option value='Kiribati' >Kiribati</option><option value='North Korea' >North Korea</option><option value='South Korea' >South Korea</option><option value='Kosovo' >Kosovo</option><option value='Kuwait' >Kuwait</option><option value='Kyrgyzstan' >Kyrgyzstan</option><option value='Laos' >Laos</option><option value='Latvia' >Latvia</option><option value='Lebanon' >Lebanon</option><option value='Lesotho' >Lesotho</option><option value='Liberia' >Liberia</option><option value='Libya' >Libya</option><option value='Liechtenstein' >Liechtenstein</option><option value='Lithuania' >Lithuania</option><option value='Luxembourg' >Luxembourg</option><option value='Macedonia' >Macedonia</option><option value='Madagascar' >Madagascar</option><option value='Malawi' >Malawi</option><option value='Malaysia' >Malaysia</option><option value='Maldives' >Maldives</option><option value='Mali' >Mali</option><option value='Malta' >Malta</option><option value='Marshall Islands' >Marshall Islands</option><option value='Mauritania' >Mauritania</option><option value='Mauritius' >Mauritius</option><option value='Mexico' >Mexico</option><option value='Micronesia' >Micronesia</option><option value='Moldova' >Moldova</option><option value='Monaco' >Monaco</option><option value='Mongolia' >Mongolia</option><option value='Montenegro' >Montenegro</option><option value='Morocco' >Morocco</option><option value='Mozambique' >Mozambique</option><option value='Myanmar' >Myanmar</option><option value='Namibia' >Namibia</option><option value='Nauru' >Nauru</option><option value='Nepal' >Nepal</option><option value='Netherlands' >Netherlands</option><option value='New Zealand' >New Zealand</option><option value='Nicaragua' >Nicaragua</option><option value='Niger' >Niger</option><option value='Nigeria' >Nigeria</option><option value='Northern Mariana Islands' >Northern Mariana Islands</option><option value='Norway' >Norway</option><option value='Oman' >Oman</option><option value='Pakistan' >Pakistan</option><option value='Palau' >Palau</option><option value='Palestine, State of' >Palestine, State of</option><option value='Panama' >Panama</option><option value='Papua New Guinea' >Papua New Guinea</option><option value='Paraguay' >Paraguay</option><option value='Peru' >Peru</option><option value='Philippines' >Philippines</option><option value='Poland' >Poland</option><option value='Portugal' >Portugal</option><option value='Puerto Rico' >Puerto Rico</option><option value='Qatar' >Qatar</option><option value='Romania' >Romania</option><option value='Russia' >Russia</option><option value='Rwanda' >Rwanda</option><option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option><option value='Saint Lucia' >Saint Lucia</option><option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option><option value='Samoa' >Samoa</option><option value='San Marino' >San Marino</option><option value='Sao Tome and Principe' >Sao Tome and Principe</option><option value='Saudi Arabia' >Saudi Arabia</option><option value='Senegal' >Senegal</option><option value='Serbia' >Serbia</option><option value='Seychelles' >Seychelles</option><option value='Sierra Leone' >Sierra Leone</option><option value='Singapore' >Singapore</option><option value='Sint Maarten' >Sint Maarten</option><option value='Slovakia' >Slovakia</option><option value='Slovenia' >Slovenia</option><option value='Solomon Islands' >Solomon Islands</option><option value='Somalia' >Somalia</option><option value='South Africa' >South Africa</option><option value='Spain' >Spain</option><option value='Sri Lanka' >Sri Lanka</option><option value='Sudan' >Sudan</option><option value='Sudan, South' >Sudan, South</option><option value='Suriname' >Suriname</option><option value='Swaziland' >Swaziland</option><option value='Sweden' >Sweden</option><option value='Switzerland' >Switzerland</option><option value='Syria' >Syria</option><option value='Taiwan' >Taiwan</option><option value='Tajikistan' >Tajikistan</option><option value='Tanzania' >Tanzania</option><option value='Thailand' >Thailand</option><option value='Togo' >Togo</option><option value='Tonga' >Tonga</option><option value='Trinidad and Tobago' >Trinidad and Tobago</option><option value='Tunisia' >Tunisia</option><option value='Turkey' >Turkey</option><option value='Turkmenistan' >Turkmenistan</option><option value='Tuvalu' >Tuvalu</option><option value='Uganda'>Uganda</option><option value='Ukraine' >Ukraine</option><option value='United Arab Emirates' >United Arab Emirates</option><option value='United Kingdom' >United Kingdom</option><option value='United States' >United States</option><option value='Uruguay' >Uruguay</option><option value='Uzbekistan' >Uzbekistan</option><option value='Vanuatu' >Vanuatu</option><option value='Vatican City' >Vatican City</option><option value='Venezuela' >Venezuela</option><option value='Vietnam' >Vietnam</option><option value='Virgin Islands, British' >Virgin Islands, British</option><option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option><option value='Yemen' >Yemen</option><option value='Zambia' >Zambia</option><option value='Zimbabwe' >Zimbabwe</option></select>
                                    <select name='input_33' id='input_6_33' class='medium gfield_select'   aria-required="true" aria-invalid="false"><option value="Your Industry">Nature of Business</option><option value='Accommodation and Food Services' >Accommodation and Food Services</option><option value='Administrative and Support Services' >Administrative and Support Services</option><option value='Agriculture, Forestry and Fishing' >Agriculture, Forestry and Fishing</option><option value='Arts and Recreation Services' >Arts and Recreation Services</option><option value='Construction' >Construction</option><option value='Education and Training' >Education and Training</option><option value='Electricity, Gas, Water and Waste Services' >Electricity, Gas, Water and Waste Services</option><option value='Financial and Insurance Services' >Financial and Insurance Services</option><option value='Health Care and Social Assistance' >Health Care and Social Assistance</option><option value='Information Media and Telecommunications' >Information Media and Telecommunications</option><option value='Manufacturing' >Manufacturing</option><option value='Mining' >Mining</option><option value='Other Services' >Other Services</option><option value='Professional, Scientific and Technical Services' >Professional, Scientific and Technical Services</option><option value='Public Administration and Safety' >Public Administration and Safety</option><option value='Rental, Hiring and Real Estate Services' >Rental, Hiring and Real Estate Services</option><option value='Retail Trade' >Retail Trade</option><option value='Transport, Postal and Warehousing' >Transport, Postal and Warehousing</option><option value='Unknown' >Unknown</option><option value='Wholesale Trade' >Wholesale Trade</option><option value='' ></option></select>
                                    <select name='input_34' id='input_6_34' class='medium gfield_select'   aria-required="true" aria-invalid="false"><option value="Line of Business">Line of Business</option><option value='Academic Institution / Education' >Academic Institution / Education</option><option value='Aerospace / Defence' >Aerospace / Defence</option><option value='Agriculture' >Agriculture</option><option value='Automotive OEM / Aftermarket' >Automotive OEM / Aftermarket</option><option value='Beverages' >Beverages</option><option value='Books / Magazines / Cards / Publishing' >Books / Magazines / Cards / Publishing</option><option value='Chemicals' >Chemicals</option><option value='Confectionery' >Confectionery</option><option value='Construction' >Construction</option><option value='Consulting / Professional Services' >Consulting / Professional Services</option><option value='Consumer Electronics' >Consumer Electronics</option><option value='Convenience' >Convenience</option><option value='Cosmetics, Perfume &amp; Toiletries' >Cosmetics, Perfume &amp; Toiletries</option><option value='Dairy' >Dairy</option><option value='Electric Components &amp; Semiconductors' >Electric Components &amp; Semiconductors</option><option value='Food &amp; Grocery' >Food &amp; Grocery</option><option value='Foodservice' >Foodservice</option><option value='Fresh Produce' >Fresh Produce</option><option value='Furniture' >Furniture</option><option value='General Merchandise' >General Merchandise</option><option value='Government' >Government</option><option value='Hardware' >Hardware</option><option value='Healthcare &amp; Life Sciences' >Healthcare &amp; Life Sciences</option><option value='ICT / Solution Provider' >ICT / Solution Provider</option><option value='Industrial Supplies' >Industrial Supplies</option><option value='Liquor' >Liquor</option><option value='Luxury Goods' >Luxury Goods</option><option value='Market Research' >Market Research</option><option value='Meat / Poultry' >Meat / Poultry</option><option value='Metal / Steel &amp; Mining' >Metal / Steel &amp; Mining</option><option value='Music &amp; Entertainment' >Music &amp; Entertainment</option><option value='Office Products' >Office Products</option><option value='Other' >Other</option><option value='Paper' >Paper</option><option value='Plastic Industry' >Plastic Industry</option><option value='Plumbing' >Plumbing</option><option value='Printing &amp; Packaging' >Printing &amp; Packaging</option><option value='Property &amp; Business Services' >Property &amp; Business Services</option><option value='Rail' >Rail</option><option value='Seafood' >Seafood</option><option value='Sport &amp; Leisure' >Sport &amp; Leisure</option><option value='Standards Body' >Standards Body</option><option value='Textile / Apparel &amp; Footwear' >Textile / Apparel &amp; Footwear</option><option value='Timber' >Timber</option><option value='Trade Organisation / Association' >Trade Organisation / Association</option><option value='Transport &amp; Logistics' >Transport &amp; Logistics</option><option value='Utilities' >Utilities</option></select>
                                    <select name='input_35' id='input_6_35' class='medium gfield_select'   aria-required="true" aria-invalid="false"><option value="Current Size">Current Size</option><option value='1 to 10' >1 to 10</option><option value='11 to 50' >11 to 50</option><option value='51 to 250' >51 to 250</option><option value='251 to 500' >251 to 500</option><option value='501 to 1000' >501 to 1000</option><option value='1001 to 5000' >1001 to 5000</option><option value='5001 to 10000' >5001 to 10000</option><option value='10001 +' >10001 +</option></select>
                                    <input type="text" name="address" id="address" placeholder="Physical Business Address">
                                    <input type="text" name="paddress" id="paddress" placeholder="Postal Address">
                                    <select name="district" id="district" ><option value="Select District">Select District</option><option value="Abim">Abim</option><option value="Adjumani">Adjumani</option><option value="Agago">Agago</option><option value="Alebtong">Alebtong</option><option value="Amolatar">Amolatar</option><option value="Amudat">Amudat</option><option value="Amuria">Amuria</option><option value="Amuru">Amuru</option><option value="Apac">Apac</option><option value="Arua">Arua</option><option value="Budaka">Budaka</option><option value="Bududa">Bududa</option><option value="Bugiri">Bugiri</option><option value="Bugweri">Bugweri</option><option value="Buhweju">Buhweju</option><option value="Buikwe">Buikwe</option><option value="Bukedea">Bukedea</option><option value="Bukomansimbi">Bukomansimbi</option><option value="Bukwa">Bukwa</option><option value="Bulambuli">Bulambuli</option><option value="Buliisa">Buliisa</option><option value="Bundibugyo">Bundibugyo</option><option value="Bunyangabu">Bunyangabu</option><option value="Bushenyi">Bushenyi</option><option value="Busia">Busia</option><option value="Butaleja">Butaleja</option><option value="Butambala">Butambala</option><option value="Butebo">Butebo</option><option value="Buvuma">Buvuma</option><option value="Buyende">Buyende</option><option value="Dokolo">Dokolo</option><option value="Gomba">Gomba</option><option value="Gulu">Gulu</option><option value="Hoima">Hoima</option><option value="Ibanda">Ibanda</option><option value="Iganga">Iganga</option><option value="Isingiro">Isingiro</option><option value="Jinja">Jinja</option><option value="Kaabong">Kaabong</option><option value="Kabale">Kabale</option><option value="Kabarole">Kabarole</option><option value="Kaberamaido">Kaberamaido</option><option value="Kagadi">Kagadi</option><option value="Kakumiro">Kakumiro</option><option value="Kalangala">Kalangala</option><option value="Kaliro">Kaliro</option><option value="Kalungu">Kalungu</option><option value="Kampala">Kampala</option><option value="Kamuli">Kamuli</option><option value="Kamwenge">Kamwenge</option><option value="Kanungu">Kanungu</option><option value="Kapchorwa">Kapchorwa</option><option value="Kapelebyong">Kapelebyong</option><option value="Karenga">Karenga</option><option value="Kasanda">Kasanda</option><option value="Kasese">Kasese</option><option value="Katakwi">Katakwi</option><option value="Kayunga">Kayunga</option><option value="Kazo">Kazo</option><option value="Kibaale">Kibaale</option><option value="Kiboga">Kiboga</option><option value="Kibuku">Kibuku</option><option value="Kibuube">Kibuube</option><option value="Kiruhura">Kiruhura</option><option value="Kiryandongo">Kiryandongo</option><option value="Kisoro">Kisoro</option><option value="Kitagwenda">Kitagwenda</option><option value="Koboko">Koboko</option><option value="Kole">Kole</option><option value="Kotido">Kotido</option><option value="Kumi">Kumi</option><option value="Kwania">Kwania</option><option value="Kween">Kween</option><option value="Kyankwazi">Kyankwazi</option><option value="Kyegegwa">Kyegegwa</option><option value="Kyenjojo">Kyenjojo</option><option value="Kyotera">Kyotera</option><option value="Lamwo">Lamwo</option><option value="Lira">Lira</option><option value="Lusot">Lusot</option><option value="Luuka">Luuka</option><option value="Luweero">Luweero</option><option value="Lwengo">Lwengo</option><option value="Lyantonde">Lyantonde</option><option value="Madi-Okollo">Madi-Okollo</option><option value="Manafwa">Manafwa</option><option value="Maracha">Maracha</option><option value="Masaka">Masaka</option><option value="Masindi">Masindi</option><option value="Mayuge">Mayuge</option><option value="Mbale">Mbale</option><option value="Mbarara">Mbarara</option><option value="Mitooma">Mitooma</option><option value="Mityana">Mityana</option><option value="Moroto">Moroto</option><option value="Moyo">Moyo</option><option value="Mpigi">Mpigi</option><option value="Mubende">Mubende</option><option value="Mukono">Mukono</option><option value="Nabilatuk">Nabilatuk</option><option value="Nakapiripirit">Nakapiripirit</option><option value="Nakaseke">Nakaseke</option><option value="Nakasongola">Nakasongola</option><option value="Namayingo">Namayingo</option><option value="Namisindwa">Namisindwa</option><option value="Namutumba">Namutumba</option><option value="Napak">Napak</option><option value="Nebbi">Nebbi</option><option value="Ngora">Ngora</option><option value="Ntoroko">Ntoroko</option><option value="Ntungamo">Ntungamo</option><option value="Nwoya">Nwoya</option><option value="Obongi">Obongi</option><option value="Omoro">Omoro</option><option value="Otuke">Otuke</option><option value="Oyam">Oyam</option><option value="Pader">Pader</option><option value="Packwach">Packwach</option><option value="Pallisa">Pallisa</option><option value="Rakai">Rakai</option><option value="Rubanda">Rubanda</option><option value="Rubirizi">Rubirizi</option><option value="Rukiga">Rukiga</option><option value="Rukungiri">Rukungiri</option><option value="Rwampara">Rwampara</option><option value="Sembabule">Sembabule</option><option value="Serere">Serere</option><option value="Sheema">Sheema</option><option value="Sironko">Sironko</option><option value="Soroti">Soroti</option><option value="Tororo">Tororo</option><option value="Wakiso">Wakiso</option><option value="Yumbe">Yumbe</option><option value="Zombo">Zombo</option><option>Other</option></select>
                                    
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title">Security</h2>
                                    <input type="text"  name="docs" id="docs" placeholder="Trade License No / TIN" />
                                    <input type="password" name="password" placeholder="Password">

                                </div> <button type="button" name="previous" class="previous action-button-previous">Previous</button>


                            <button type="submit" id="send-btn" class="next action-button" onsubmit="sendMail()">Submit</button>
                                 

                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <!-- <h2 class="fs-title text-center">Success !</h2> <br><br> -->
                                    <div class="row justify-content-center">
                                        <!-- <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div> -->
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <!-- <h5>You Have Successfully Signed Up</h5> -->
                                            <button class="btn btn-primary"><a href="{{url('/')}}"  style="color: white;text-decoration: none;">Go Back To Website</a></button>
                                        </div>

                                    </div>
                                </div>
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/js-signupform.js"></script>
</script>

<script type="text/javascript">
    

        $('form').ready(function(){
                  
        
            $('#send-btn').click(function(){
                $('#msform').submit();
                });
        });



</script>
<script type="text/javascript" src="https://smtpjs.com/v3/smtp.js"></script>
<script type="text/javascript">
    function sendMail() {
        // debugger
    Email.send({
    Host: "smtp.gmail.com",
    Username : "kigandaivan32@gmail.com",
    Password : "kigandaivan@123",
    To : 'smuhanguzi@gmail.com, bbosatonny12@gmail.com, akajeke@gmail.com',
    From : "sender’s email address",
    Subject : "GS1 Web App welcomes you",
    Body : "Hello Thanks for Registering with us!",
    }).then(
        message => alert("GS1 mail sent successfully")
    );
}
</script>

</body>
</html>