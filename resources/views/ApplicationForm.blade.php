<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
 body{
    height: 100vh;
  display: flex;
  justify-content: center;
  /* align-items: center; */
    padding:10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.Applicationform{
    max-width: 700px;
  width: 100%;
  /* background-image: url("img/map.jpg"); */
  /* background-color: #fff; */
  background: linear-gradient(135deg, #d1d2bf, #9b59b6);
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  background-repeat: no-repeat;
    background-size: auto;
     background-position: center;
     background-size: cover;
}
.address{
    font-size: 20px;
  font-weight: 500px;
  position: relative;
}
.address::before{
    content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
/* .address.app{
    display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
} */
 
.nav_form_af{
    text-align-last: center
}
.block{
    text-transform: uppercase;

}
.save_btn{
    background-color: #333; /* Green */
   border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 150px;
  display: block;
}
.save_btn:(:last-child){
    border-bottom: none;
}
.save_btn:hover{
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
    /* background-color: violet; */
} 

</style>

<body>
    
@extends('layouts.app')

@section('content')
<div class="application_form">
    <div class="nav_form_af">
        <h2 class="navbar_af">Application Form</h2>
    </div>

    <div class="Applicationform">
        <form action="/application"  enctype="multipart/form-data" method="post">
        @csrf
            <ol>
            <div id="personalDetail" class="block">
                <p class="address">Personal Detail :--</p>
                <!-- <li>Application no: <input type="text" name="Application_No"></li> -->
                <li>Application date : <input  type="date" name="Application_date" placeholder="Application date" required></li>
                <li>Applicant Name*: <input type="text" name="Applicant_Name"placeholder="Applicant Name" required></li>
                <!-- <li>EPIC / UID No.* : <input type="number" name="EPIC_UID_No." placeholder=""></li> -->
                <li>Date of Birth* : <input type="date" name="DOB" placeholder="Date of Birth"></li>
                <li>Gender* :
                    <select name="gender" >
                        <option value="0"selected disabled>Select</option>
                        <option value="M">MALE</option>
                        <option value="F">FEMALE</option>
                        <option value="Others">OTHERS</option>
                    </select>
                </li>
            
                <li> Email : <input type="email" name="Email" placeholder="abc@mail.com"></li>
                <li>Contact No* : <input type="number" name="Contact_No" placeholder="" required></li>
                <li>Relationship Type*: <select name="Relationship_Type">
                        <option value=""></option>
                         <option value="0" selected diabled >Select</option>
                        <option value="S\o">Son of</option>
                        <option value="d\o">Daughter of</option>
                        <option value="W\o">WIfe Of</option>
                        <option value="f\o">Father of</option>
                        <option value="m\o">Mother Of</option>
                        <option value="c\o">Care of</option>
                        <option value="h\o">Husband of</option>
                        <option value="Others">Others</option>
                </select></li>
               <li>Relation Name <input type="text" name=Relation_Name placeholder="Relation Name"> </li>

                <p class="address">Present Address :--</p>
                    <ul class="address_list">
                        <li>House no.* : <input type="text"name="Present_Address_Hno" placeholder="H/no." required></li>
                        <li>Sub locality 1* : <input type="text"name="Present_Address_Sub_locality1" placeholder="Sub locality 1" required></li>
                        <li>Sub locality 2 : <input type="text"name="Present_Address_Sub_locality2" placeholder="Sub locality 2" ></li>
                        <li>Location* : <input type="text"name="Present_Address_Location" placeholder="Location" required></li>
                        <li>Sub District* : 
                            <select name="Present_Address_Sub_District" required>
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Aibawk">Aibawk</option>  
                                <option value="Bilkhawthlir">Bilkhawthlir</option>  
                                <option value="Champhai">Champhai</option>  
                                <option value="Chawngte">Chawngte</option>  
                                <option value="Darlawn">Darlawn</option>  
                                <option value="East Lungdar">East Lungdar </option>  
                                <option value="East Lungdar (Pt)">East Lungdar (Pt)</option>

                                <option value="Hnahthial">Hnahthial</option>  
                                <option value="Khawbung">Khawbung</option>  
                                <option value="Khawzawl">Khawzawl</option>  
                                <option value="Lawngtlai">Lawngtlai</option>  
                                <option value="Lunglei">Lunglei </option>  
                                <option value="Lungsen">Lungsen </option> 

                                <option value="Hnahthial">Hnahthial</option>  
                                <option value="Khawbung">Khawbung</option>  
                                <option value="Khawzawl">Khawzawl</option>  
                                <option value="Lawngtlai">Lawngtlai</option>  
                                <option value="Lunglei">Lunglei </option>  
                                <option value="Lungsen">Lungsen </option> 
                            </select>
                        </li>
                        <li>District* : 
                          <select name="Present_Address_District" required> 
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Aizawl">Aizawl</option>  
                                <option value="Kolasib">Kolasib</option>  
                                <option value="Champhai">Champhai</option>  
                                <option value="Lawngtlai">Lawngtlai</option>  
                                <option value="Mamit">Mamit</option>  
                                <option value="Saiha">Saiha </option>  
                                <option value="Serchhip">Serchhip</option>
                                <option value="Lunglei">Lunglei</option>
                                <option value="Hnahthial">Hnahthial</option>
                                <option value="Khawazawl">Khawazawl</option>
                                <option value="Saitual">Saitual</option>
                            </select> 
                        </li>
                        <li>State* : 
                            <select name="Present_Address_State" required>
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </li>
                       
                        <li>Pin code* : <input type="text"name="Present_Address_pin_code" placeholder="Pin code" required></li>
                        <li>Country* : 
                            <select name="present_Address_Country" required>
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote DIvoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </li>
                        <li>Police Station*: 
                        <select name="Present_Address_Police_Station">
                         <option value="0" selected diabled >Select</option>
                        <option value="Aizawl">Aizawl DEF</option>
                        <option value="Lunglei">Lunglei DEF</option>
                        <option value="Champhai">Champhai DEFf</option>
                        <option value="Serchhip">Serchhip DEF </option>
                        <option value="Mamit">Mamit DEF</option>
                        <option value="Kolasib">Kolasib DEF</option>
                        <option value="Lawngtlai">Lawngtlai DEF</option>
                        <option value="Others">Others</option>
                </select>
                </li>
                <li>Post Office*: 
                        <select name="Present_Address_Post_office">
                         <option value="0" selected diabled >Select</option>
                        <option value="Aizawl">Aizawl </option>
                        <option value="Lunglei">Lunglei </option>
                        <option value="Champhai">Champhai</option>
                        <option value="Serchhip">Serchhip  </option>
                        <option value="Mamit">Mamit </option>
                        <option value="Kolasib">Kolasib </option>
                        <option value="Lawngtlai">Lawngtlai </option>
                        <option value="Others">Others</option>
                </select>
                </li>
                    </ul> 
                </li>
                </div>

                <div id="permanent_adress" class="block">
                <li><p class="address">Permanent Address :--</p>
                    <ul class="address1_list">
                        <li>House no.* : <input type="text"name="Permanent_Address_Hno" placeholder="H/no." required></li>
                        <li>Sub locality 1* : <input type="text"name="Permanent_Address_Sub_locality1" placeholder="Sub locality1" required></li>
                        <li>Sub locality 2 : <input type="text"name="Permanent_Address_Sub_locality2" placeholder="Sub locality2" ></li>
                        <li>Location* : <input type="text"name="Permanent_Address_Location" placeholder="Location" required></li>
                           <li> Sub District* : 
                            <select name="Permanent_Address_Sub_District" required>
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Aibawk">Aibawk</option>  
                                <option value="Bilkhawthlir">Bilkhawthlir</option>  
                                <option value="Champhai">Champhai</option>  
                                <option value="Chawngte">Chawngte</option>  
                                <option value="Darlawn">Darlawn</option>  
                                <option value="East Lungdar">East Lungdar </option>  
                                <option value="East Lungdar (Pt)">East Lungdar (Pt)</option>

                                <option value="Hnahthial">Hnahthial</option>  
                                <option value="Khawbung">Khawbung</option>  
                                <option value="Khawzawl">Khawzawl</option>  
                                <option value="Lawngtlai">Lawngtlai</option>  
                                <option value="Lunglei">Lunglei </option>  
                                <option value="Lungsen">Lungsen </option> 

                                <option value="Hnahthial">Hnahthial</option>  
                                <option value="Khawbung">Khawbung</option>  
                                <option value="Khawzawl">Khawzawl</option>  
                                <option value="Lawngtlai">Lawngtlai</option>  
                                <option value="Lunglei">Lunglei </option>  
                                <option value="Lungsen">Lungsen </option> 
                            </select>
                        </li>
                        <li>District* : 
                          <select name="Permanent_Address_District" required> 
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Aizawl">Aizawl</option>  
                                <option value="Kolasib">Kolasib</option>  
                                <option value="Champhai">Champhai</option>  
                                <option value="Lawngtlai">Lawngtlai</option>  
                                <option value="Mamit">Mamit</option>  
                                <option value="Saiha">Saiha </option>  
                                <option value="Serchhip">Serchhip</option>
                                <option value="Lunglei">Lunglei</option>
                                <option value="Hnahthial">Hnahthial</option>
                                <option value="Khawazawl">Khawazawl</option>
                                <option value="Saitual">Saitual</option>
                            </select> 
                        </li>
                        
                        <li>State* : 
                            <select name="Permanent_Address_State" required>
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </li>
                        <li>Pin code* : <input type="text"name="Permanent_Address_pin_code" placeholder="" required></li>
                        <li>Country* : 
                            <select name="Permanent_Address_Country">
                                <option value="0" selected diabled >Select an Option</option>
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote DIvoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="India">India</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </li>
                        <li>Police Station*: 
                        <select name="Permanent_Address_Police_Station">
                         <option value="0" selected diabled >Select</option>
                        <option value="Aizawl">Aizawl DEF</option>
                        <option value="Lunglei">Lunglei DEF</option>
                        <option value="Champhai">Champhai DEFf</option>
                        <option value="Serchhip">Serchhip DEF </option>
                        <option value="Mamit">Mamit DEF</option>
                        <option value="Kolasib">Kolasib DEF</option>
                        <option value="Lawngtlai">Lawngtlai DEF</option>
                        <option value="Others">Others</option>
                </select>
                </li>
                <li>Post Office*: 
                        <select name="Permanent_Address_Post_office">
                         <option value="0" selected diabled >Select</option>
                        <option value="Aizawl">Aizawl </option>
                        <option value="Lunglei">Lunglei </option>
                        <option value="Champhai">Champhai</option>
                        <option value="Serchhip">Serchhip  </option>
                        <option value="Mamit">Mamit </option>
                        <option value="Kolasib">Kolasib </option>
                        <option value="Lawngtlai">Lawngtlai </option>
                        <option value="Others">Others</option>
                </select>
                </li>
                    </ul>
                </li>
                </div> 

                <li>Education* : 
                    <select name="Education">
                        <option value="0" selected diabled >Select</option>
                        <option value="HSLC">HSLC</option>
                        <option value="HHSLC">HHSLC</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="others">others</option>
                    </select>
                </li>
                <li>Religion* : 
                    <select name="Religion">
                        <option value="0" selected diabled >Select</option>
                        <option value="Hinduism">Hinduism</option>
                        <option value="Chistianism">Chistianism</option>
                        <option value="Islam">Islam</option>
                        <option value="Janism">Janism</option>
                        <option value="Buddism">Buddism</option>
                        <option value="Others">Others</option>
                    </select>
                </li>
                <li>Occupation* : 
                    <select name="Occupation">
                        <option value="0" selected diabled >Select</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Business man">Business man</option>
                        <option value="Farmer">Farmer</option>
                        <option value="Government servant">Government Servant</option>
                        <option value="others">others</option>
                    </select>
                    
                </li>
                
                <li>Income*:
                <input type="text" name="income" placeholder="2122" required>
                </li>
                <!-- <li> H/No*: <input type="text"name="H/No" placeholder="" required> </li> -->
                <br>
                <li>List of Scanned supporting Documents :</li>
                <ul>
                    <li>Electoral ID card
                    <br>or
                    Photo ID card
                    <br>or
                    Birth certificate
                    <input type="file" name="doc1" ></li>
                    <br>
                    <li>Address Proof <input type="file" name="doc2" ></li>
                    <br>
                    <li>LSC Certificate
                    <br>or
                    House Pass
                     <input type="file" name="doc3" ></li>
                </ul>
                
                <li>Remarks* : <textarea name="Remark" id="Remark" cols="30" rows="10" required></textarea></li>
            </ol>
        </div>

        <p id="checkbox">
                <input type="checkbox" placeholder="" required id="check">I hereby declare that all the documents attached are verified with originals. 
        </p>
        <input type="submit" value="Save" class="save_btn save">
        </form>
    </div>
    @endsection
</body>