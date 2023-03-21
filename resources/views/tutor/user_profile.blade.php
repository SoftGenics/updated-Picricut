@if(Session::has('users'))  


@php
$users =Session::get('users');   
$id=$users['id'];
@endphp 
@else
@include('pages.signin')
@endif

@extends ('layouts.user')
@section('content')
<link rel="stylesheet" type="text/css" href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/libs/select2/dist/css/select2.min.css">
<style>
  .file-upload input[type='file'] 
  {
display: none;
}
</style>
<div class="page-wrapper">
           
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Profile</h1> 
                    </div>
                    <div class="col-6">
                       
                    </div>
                </div>
            </div>
        
            <div class="container-fluid">
              
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-xlg-3 col-md-5">
                        <div class="card">
                          <div class="alert alert-danger" role="alert" id="failedMessage" style="display: none"></div>
                            <div class="alert alert-success" role="alert" id="successMessage" style="display: none"></div>
                            <div class="card-body">
                              <center class="m-t-30"> 
                                @if(Session::get('userimage'))
                                
                                <img src="{{session()->get('userimage')}}" id="imgPreview" alt="pic" style="
                                height: 150px;
                                width: 150px;"
                                    class="rounded-circle" width="150" />
                                
                                @else
                                
                                    <img src="adminlte/assets/images/users/5.jpg" id="imgPreview" alt="pic" style="
                                    height: 150px;
                                    width: 150px;"
                                        class="rounded-circle" width="150" />
                                        @endif
                                    <div class="col-sm-12">
                                        <label for="fileUpload" class="file-upload btn btn-warning btn-block rounded-pill shadow"><i class="fa fa-upload mr-2"></i>&nbsp change profile pic
                                            <input id="fileUpload"  type="file">
                                        </label>
                                    </div>
                                    <h4 class="card-title m-t-10">{{$users['name']}}</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-people"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i
                                                    class="icon-picture"></i>
                                                <font class="font-medium">54</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6>{{$users['email']}}</h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6>{{$users['mobile_no']}}</h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                                <div class="map-box">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                                        width="100%" height="150" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br />
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-9 col-xlg-9 col-md-7">
                       
                        <div class="card">
                            <div class="card-body border-bottom">
                              <h4 class="card-title">Tutor form</h4>
                              
                            </div>
                            <form class="form-horizontal" action="{{route('add_info')}}" method="POST">
                              @csrf
                              <input type="hidden" name="user_id" value="{{$id}}" />
                              <div class="card-body">
                                <h4 class="card-title">Personal Info</h4>
                                <div class="mb-3 row">
                                  <label for="fname" class="col-sm-3 text-end control-label col-form-label">First Name</label>
                                  <div class="col-sm-9">
                                    
                                    <input type="text" class="form-control" name="f_name" id="fname" placeholder="First Name Here">
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="lname" class="col-sm-3 text-end control-label col-form-label">Last Name</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" name="l_name" id="lname" placeholder="Last Name Here">
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="email1" class="col-sm-3 text-end control-label col-form-label">Email</label>
                                  <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" id="email1" placeholder="Email Here">
                                  </div>
                                </div> 
                                <div class="mb-3 row">
                                  <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Contact No</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" name="number" id="cono1" placeholder="Contact No Here">
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Date Here">
                                    </div>
                                  </div>
                               
                                
                                <div class="form-group row align-items-center mb-0">
                                    <label for="inputEmail3" class="col-3 text-end control-label col-form-label">Gender</label>
                                    <div class="col-9 border-start pb-2 pt-2">
                                      <select class="form-select" id="gender" name="gender"> 
                                        <option>Choose Your Option</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                      </select>
                                    </div>
                                  </div>
                              </div>
                              <hr>  
                              <div class="card-body">
                                <h4 class="card-title">Address</h4>
                                <div class="mb-3 row">
                                  <label for="com1" class="col-sm-3 text-end control-label col-form-label">Address</label>
                                  <div class="col-sm-9">
                                    <input type="text" name="address" class="form-control" id="com1" placeholder="Address">
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">Country</label>
                                  <div class="col-sm-9">
                                    <select class="form-select" id="country" name="country">
                                      <option>Choose Your Option</option>
                                      <option value="AF">Afghanistan</option>
                                      <option value="AX"> land Islands</option>
                                      <option value="AL">Albania</option>
                                      <option value="DZ">Algeria</option>
                                      <option value="AS">American Samoa</option>
                                      <option value="AD">Andorra</option>
                                      <option value="AO">Angola</option>
                                      <option value="AI">Anguilla</option>
                                      <option value="AQ">Antarctica</option>
                                      <option value="AG">Antigua and Barbuda</option>
                                      <option value="AR">Argentina</option>
                                      <option value="AM">Armenia</option>
                                      <option value="AW">Aruba</option>
                                      <option value="AU">Australia</option>
                                      <option value="AT">Austria</option>
                                      <option value="AZ">Azerbaijan</option>
                                      <option value="BS">Bahamas</option>
                                      <option value="BH">Bahrain</option>
                                      <option value="BD">Bangladesh</option>
                                      <option value="BB">Barbados</option>
                                      <option value="BY">Belarus</option>
                                      <option value="BE">Belgium</option>
                                      <option value="BZ">Belize</option>
                                      <option value="BJ">Benin</option>
                                      <option value="BM">Bermuda</option>
                                      <option value="BT">Bhutan</option>
                                      <option value="BO">Bolivia, Plurinational State of</option>
                                      <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                      <option value="BA">Bosnia and Herzegovina</option>
                                      <option value="BW">Botswana</option>
                                      <option value="BV">Bouvet Island</option>
                                      <option value="BR">Brazil</option>
                                      <option value="IO">British Indian Ocean Territory</option>
                                      <option value="BN">Brunei Darussalam</option>
                                      <option value="BG">Bulgaria</option>
                                      <option value="BF">Burkina Faso</option>
                                      <option value="BI">Burundi</option>
                                      <option value="KH">Cambodia</option>
                                      <option value="CM">Cameroon</option>
                                      <option value="CA">Canada</option>
                                      <option value="CV">Cape Verde</option>
                                      <option value="KY">Cayman Islands</option>
                                      <option value="CF">Central African Republic</option>
                                      <option value="TD">Chad</option>
                                      <option value="CL">Chile</option>
                                      <option value="CN">China</option>
                                      <option value="CX">Christmas Island</option>
                                      <option value="CC">Cocos (Keeling) Islands</option>
                                      <option value="CO">Colombia</option>
                                      <option value="KM">Comoros</option>
                                      <option value="CG">Congo</option>
                                      <option value="CD">Congo, the Democratic Republic of the</option>
                                      <option value="CK">Cook Islands</option>
                                      <option value="CR">Costa Rica</option>
                                      <option value="CI">C te d'Ivoire</option>
                                      <option value="HR">Croatia</option>
                                      <option value="CU">Cuba</option>
                                      <option value="CW">Cura ao</option>
                                      <option value="CY">Cyprus</option>
                                      <option value="CZ">Czech Republic</option>
                                      <option value="DK">Denmark</option>
                                      <option value="DJ">Djibouti</option>
                                      <option value="DM">Dominica</option>
                                      <option value="DO">Dominican Republic</option>
                                      <option value="EC">Ecuador</option>
                                      <option value="EG">Egypt</option>
                                      <option value="SV">El Salvador</option>
                                      <option value="GQ">Equatorial Guinea</option>
                                      <option value="ER">Eritrea</option>
                                      <option value="EE">Estonia</option>
                                      <option value="ET">Ethiopia</option>
                                      <option value="FK">Falkland Islands (Malvinas)</option>
                                      <option value="FO">Faroe Islands</option>
                                      <option value="FJ">Fiji</option>
                                      <option value="FI">Finland</option>
                                      <option value="FR">France</option>
                                      <option value="GF">French Guiana</option>
                                      <option value="PF">French Polynesia</option>
                                      <option value="TF">French Southern Territories</option>
                                      <option value="GA">Gabon</option>
                                      <option value="GM">Gambia</option>
                                      <option value="GE">Georgia</option>
                                      <option value="DE">Germany</option>
                                      <option value="GH">Ghana</option>
                                      <option value="GI">Gibraltar</option>
                                      <option value="GR">Greece</option>
                                      <option value="GL">Greenland</option>
                                      <option value="GD">Grenada</option>
                                      <option value="GP">Guadeloupe</option>
                                      <option value="GU">Guam</option>
                                      <option value="GT">Guatemala</option>
                                      <option value="GG">Guernsey</option>
                                      <option value="GN">Guinea</option>
                                      <option value="GW">Guinea-Bissau</option>
                                      <option value="GY">Guyana</option>
                                      <option value="HT">Haiti</option>
                                      <option value="HM">Heard Island and McDonald Islands</option>
                                      <option value="VA">Holy See (Vatican City State)</option>
                                      <option value="HN">Honduras</option>
                                      <option value="HK">Hong Kong</option>
                                      <option value="HU">Hungary</option>
                                      <option value="IS">Iceland</option>
                                      <option value="IN">India</option>
                                      <option value="ID">Indonesia</option>
                                      <option value="IR">Iran, Islamic Republic of</option>
                                      <option value="IQ">Iraq</option>
                                      <option value="IE">Ireland</option>
                                      <option value="IM">Isle of Man</option>
                                      <option value="IL">Israel</option>
                                      <option value="IT">Italy</option>
                                      <option value="JM">Jamaica</option>
                                      <option value="JP">Japan</option>
                                      <option value="JE">Jersey</option>
                                      <option value="JO">Jordan</option>
                                      <option value="KZ">Kazakhstan</option>
                                      <option value="KE">Kenya</option>
                                      <option value="KI">Kiribati</option>
                                      <option value="KP">Korea, Democratic People's Republic of</option>
                                      <option value="KR">Korea, Republic of</option>
                                      <option value="KW">Kuwait</option>
                                      <option value="KG">Kyrgyzstan</option>
                                      <option value="LA">Lao People's Democratic Republic</option>
                                      <option value="LV">Latvia</option>
                                      <option value="LB">Lebanon</option>
                                      <option value="LS">Lesotho</option>
                                      <option value="LR">Liberia</option>
                                      <option value="LY">Libya</option>
                                      <option value="LI">Liechtenstein</option>
                                      <option value="LT">Lithuania</option>
                                      <option value="LU">Luxembourg</option>
                                      <option value="MO">Macao</option>
                                      <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                      <option value="MG">Madagascar</option>
                                      <option value="MW">Malawi</option>
                                      <option value="MY">Malaysia</option>
                                      <option value="MV">Maldives</option>
                                      <option value="ML">Mali</option>
                                      <option value="MT">Malta</option>
                                      <option value="MH">Marshall Islands</option>
                                      <option value="MQ">Martinique</option>
                                      <option value="MR">Mauritania</option>
                                      <option value="MU">Mauritius</option>
                                      <option value="YT">Mayotte</option>
                                      <option value="MX">Mexico</option>
                                      <option value="FM">Micronesia, Federated States of</option>
                                      <option value="MD">Moldova, Republic of</option>
                                      <option value="MC">Monaco</option>
                                      <option value="MN">Mongolia</option>
                                      <option value="ME">Montenegro</option>
                                      <option value="MS">Montserrat</option>
                                      <option value="MA">Morocco</option>
                                      <option value="MZ">Mozambique</option>
                                      <option value="MM">Myanmar</option>
                                      <option value="NA">Namibia</option>
                                      <option value="NR">Nauru</option>
                                      <option value="NP">Nepal</option>
                                      <option value="NL">Netherlands</option>
                                      <option value="NC">New Caledonia</option>
                                      <option value="NZ">New Zealand</option>
                                      <option value="NI">Nicaragua</option>
                                      <option value="NE">Niger</option>
                                      <option value="NG">Nigeria</option>
                                      <option value="NU">Niue</option>
                                      <option value="NF">Norfolk Island</option>
                                      <option value="MP">Northern Mariana Islands</option>
                                      <option value="NO">Norway</option>
                                      <option value="OM">Oman</option>
                                      <option value="PK">Pakistan</option>
                                      <option value="PW">Palau</option>
                                      <option value="PS">Palestinian Territory, Occupied</option>
                                      <option value="PA">Panama</option>
                                      <option value="PG">Papua New Guinea</option>
                                      <option value="PY">Paraguay</option>
                                      <option value="PE">Peru</option>
                                      <option value="PH">Philippines</option>
                                      <option value="PN">Pitcairn</option>
                                      <option value="PL">Poland</option>
                                      <option value="PT">Portugal</option>
                                      <option value="PR">Puerto Rico</option>
                                      <option value="QA">Qatar</option>
                                      <option value="RE">R union</option>
                                      <option value="RO">Romania</option>
                                      <option value="RU">Russian Federation</option>
                                      <option value="RW">Rwanda</option>
                                      <option value="BL">Saint Barth lemy</option>
                                      <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                      <option value="KN">Saint Kitts and Nevis</option>
                                      <option value="LC">Saint Lucia</option>
                                      <option value="MF">Saint Martin (French part)</option>
                                      <option value="PM">Saint Pierre and Miquelon</option>
                                      <option value="VC">Saint Vincent and the Grenadines</option>
                                      <option value="WS">Samoa</option>
                                      <option value="SM">San Marino</option>
                                      <option value="ST">Sao Tome and Principe</option>
                                      <option value="SA">Saudi Arabia</option>
                                      <option value="SN">Senegal</option>
                                      <option value="RS">Serbia</option>
                                      <option value="SC">Seychelles</option>
                                      <option value="SL">Sierra Leone</option>
                                      <option value="SG">Singapore</option>
                                      <option value="SX">Sint Maarten (Dutch part)</option>
                                      <option value="SK">Slovakia</option>
                                      <option value="SI">Slovenia</option>
                                      <option value="SB">Solomon Islands</option>
                                      <option value="SO">Somalia</option>
                                      <option value="ZA">South Africa</option>
                                      <option value="GS">South Georgia and the South Sandwich Islands</option>
                                      <option value="SS">South Sudan</option>
                                      <option value="ES">Spain</option>
                                      <option value="LK">Sri Lanka</option>
                                      <option value="SD">Sudan</option>
                                      <option value="SR">Suriname</option>
                                      <option value="SJ">Svalbard and Jan Mayen</option>
                                      <option value="SZ">Swaziland</option>
                                      <option value="SE">Sweden</option>
                                      <option value="CH">Switzerland</option>
                                      <option value="SY">Syrian Arab Republic</option>
                                      <option value="TW">Taiwan, Province of China</option>
                                      <option value="TJ">Tajikistan</option>
                                      <option value="TZ">Tanzania, United Republic of</option>
                                      <option value="TH">Thailand</option>
                                      <option value="TL">Timor-Leste</option>
                                      <option value="TG">Togo</option>
                                      <option value="TK">Tokelau</option>
                                      <option value="TO">Tonga</option>
                                      <option value="TT">Trinidad and Tobago</option>
                                      <option value="TN">Tunisia</option>
                                      <option value="TR">Turkey</option>
                                      <option value="TM">Turkmenistan</option>
                                      <option value="TC">Turks and Caicos Islands</option>
                                      <option value="TV">Tuvalu</option>
                                      <option value="UG">Uganda</option>
                                      <option value="UA">Ukraine</option>
                                      <option value="AE">United Arab Emirates</option>
                                      <option value="GB">United Kingdom</option>
                                      <option value="US">United States</option>
                                      <option value="UM">United States Minor Outlying Islands</option>
                                      <option value="UY">Uruguay</option>
                                      <option value="UZ">Uzbekistan</option>
                                      <option value="VU">Vanuatu</option>
                                      <option value="VE">Venezuela, Bolivarian Republic of</option>
                                      <option value="VN">Viet Nam</option>
                                      <option value="VG">Virgin Islands, British</option>
                                      <option value="VI">Virgin Islands, U.S.</option>
                                      <option value="WF">Wallis and Futuna</option>
                                      <option value="EH">Western Sahara</option>
                                      <option value="YE">Yemen</option>
                                      <option value="ZM">Zambia</option>
                                      <option value="ZW">Zimbabwe</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">State</label>
                                  <div class="col-sm-9">
                                    <select class="form-select" name="state"> 
                                      <option>Choose Your Option</option>
                                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                      <option value="Assam">Assam</option>
                                      <option value="Bihar">Bihar</option>
                                      <option value="Chandigarh">Chandigarh</option>
                                      <option value="Chhattisgarh">Chhattisgarh</option>
                                      <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                      <option value="Daman and Diu">Daman and Diu</option>
                                      <option value="Delhi">Delhi</option>
                                      <option value="Goa">Goa</option>
                                      <option value="Gujarat">Gujarat</option>
                                      <option value="Haryana">Haryana</option>
                                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                      <option value="Jharkhand">Jharkhand</option>
                                      <option value="Karnataka">Karnataka</option>
                                      <option value="Kerala">Kerala</option>
                                      <option value="Lakshadweep">Lakshadweep</option>
                                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                                      <option value="Maharashtra">Maharashtra</option>
                                      <option value="Manipur">Manipur</option>
                                      <option value="Meghalaya">Meghalaya</option>
                                      <option value="Mizoram">Mizoram</option>
                                      <option value="Nagaland">Nagaland</option>
                                      <option value="Orissa">Orissa</option>
                                      <option value="Pondicherry">Pondicherry</option>
                                      <option value="Punjab">Punjab</option>
                                      <option value="Rajasthan">Rajasthan</option>
                                      <option value="Sikkim">Sikkim</option>
                                      <option value="Tamil Nadu">Tamil Nadu</option>
                                      <option value="Tripura">Tripura</option>
                                      <option value="Uttaranchal">Uttaranchal</option>
                                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                                      <option value="West Bengal">West Bengal</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 text-end control-label col-form-label" id='city'>City</label>
                                    <div class="col-sm-9">
                                      <select class="form-select" name="city"> 
                                        <option>Choose Your Option</option>
                                        <option value="Ahmedpur">Ahmedpur</option>
                                        <option value="Aistala">Aistala</option>
                                        <option value="Aknapur">Aknapur</option>
                                        <option value="Alipurduar">Alipurduar</option>
                                        <option value="Amlagora">Amlagora</option>
                                        <option value="Amta">Amta</option>
                                        <option value="Amtala">Amtala</option>
                                        <option value="Andal">Andal</option>
                                        <option value="Arambagh community development block">Arambagh community development block</option>
                                        <option value="Asansol">Asansol</option>
                                        <option value="Ashoknagar Kalyangarh">Ashoknagar Kalyangarh</option>
                                        <option value="Badkulla">Badkulla</option>
                                        <option value="Baduria">Baduria</option>
                                        <option value="Bagdogra">Bagdogra</option>
                                        <option value="Bagnan">Bagnan</option>
                                        <option value="Bagula">Bagula</option>
                                        <option value="Bahula">Bahula</option>
                                        <option value="Baidyabati">Baidyabati</option>
                                        <option value="Bakreswar">Bakreswar</option>
                                        <option value="Balarampur">Balarampur</option>
                                        <option value="Bali Chak">Bali Chak</option>
                                        <option value="Bally">Bally</option>
                                        <option value="Balurghat">Balurghat</option>
                                        <option value="Bamangola community development block">Bamangola community development block</option>
                                        <option value="Baneswar">Baneswar</option>
                                        <option value="Bangaon">Bangaon</option>
                                        <option value="Bankra">Bankra</option>
                                        <option value="Bankura">Bankura</option>
                                        <option value="Bansberia">Bansberia</option>
                                        <option value="Bansihari community development block">Bansihari community development block</option>
                                        <option value="Barabazar">Barabazar</option>
                                        <option value="Baranagar">Baranagar</option>
                                        <option value="Barasat">Barasat</option>
                                        <option value="Bardhaman">Bardhaman</option>
                                        <option value="Barjora">Barjora</option>
                                        <option value="Barrackpore">Barrackpore</option>
                                        <option value="Baruipur">Baruipur</option>
                                        <option value="Basanti">Basanti</option>
                                        <option value="Basirhat">Basirhat</option>
                                        <option value="Bawali">Bawali</option>
                                        <option value="Begampur">Begampur</option>
                                        <option value="Belda">Belda</option>
                                        <option value="Beldanga">Beldanga</option>
                                        <option value="Beliatore">Beliatore</option>
                                        <option value="Berhampore">Berhampore</option>
                                        <option value="Bhadreswar">Bhadreswar</option>
                                        <option value="Bhandardaha">Bhandardaha</option>
                                        <option value="Bhatpara">Bhatpara</option>
                                        <option value="Birbhum district">Birbhum district</option>
                                        <option value="Birpara">Birpara</option>
                                        <option value="Bishnupur">Bishnupur</option>
                                        <option value="Bolpur">Bolpur</option>
                                        <option value="Budge Budge">Budge Budge</option>
                                        <option value="Canning">Canning</option>
                                        <option value="Chakapara">Chakapara</option>
                                        <option value="Chakdaha">Chakdaha</option>
                                        <option value="Champadanga">Champadanga</option>
                                        <option value="Champahati">Champahati</option>
                                        <option value="Champdani">Champdani</option>
                                        <option value="Chandannagar">Chandannagar</option>
                                        <option value="Chandrakona">Chandrakona</option>
                                        <option value="Chittaranjan">Chittaranjan</option>
                                        <option value="Churulia">Churulia</option>
                                        <option value="Contai">Contai</option>
                                        <option value="Cooch Behar">Cooch Behar</option>
                                        <option value="Cossimbazar">Cossimbazar</option>
                                        <option value="Dakshin Dinajpur district">Dakshin Dinajpur district</option>
                                        <option value="Dalkola">Dalkola</option>
                                        <option value="Dam Dam">Dam Dam</option>
                                        <option value="Darjeeling">Darjeeling</option>
                                        <option value="Daulatpur">Daulatpur</option>
                                        <option value="Debagram">Debagram</option>
                                        <option value="Debipur">Debipur</option>
                                        <option value="Dhaniakhali community development block">Dhaniakhali community development block</option>
                                        <option value="Dhulagari">Dhulagari</option>
                                        <option value="Dhulian">Dhulian</option>
                                        <option value="Dhupguri">Dhupguri</option>
                                        <option value="Diamond Harbour">Diamond Harbour</option>
                                        <option value="Digha">Digha</option>
                                        <option value="Dinhata">Dinhata</option>
                                        <option value="Domjur">Domjur</option>
                                        <option value="Dubrajpur">Dubrajpur</option>
                                        <option value="Durgapur">Durgapur</option>
                                        <option value="Egra">Egra</option>
                                        <option value="Falakata">Falakata</option>
                                        <option value="Farakka">Farakka</option>
                                        <option value="Fort Gloster">Fort Gloster</option>
                                        <option value="Gaighata community development block">Gaighata community development block</option>
                                        <option value="Gairkata">Gairkata</option>
                                        <option value="Gangadharpur">Gangadharpur</option>
                                        <option value="Gangarampur">Gangarampur</option>
                                        <option value="Garui">Garui</option>
                                        <option value="Garulia">Garulia</option>
                                        <option value="Ghatal">Ghatal</option>
                                        <option value="Giria">Giria</option>
                                        <option value="Gobardanga">Gobardanga</option>
                                        <option value="Gobindapur">Gobindapur</option>
                                        <option value="Gopalpur">Gopalpur</option>
                                        <option value="Gopinathpur">Gopinathpur</option>
                                        <option value="Gorubathan">Gorubathan</option>
                                        <option value="Gosaba">Gosaba</option>
                                        <option value="Gosanimari">Gosanimari</option>
                                        <option value="Gurdaha">Gurdaha</option>
                                        <option value="Guskhara">Guskhara</option>
                                        <option value="Habra">Habra</option>
                                        <option value="Haldia">Haldia</option>
                                        <option value="Haldibari">Haldibari</option>
                                        <option value="Halisahar">Halisahar</option>
                                        <option value="Harindanga">Harindanga</option>
                                        <option value="Haringhata">Haringhata</option>
                                        <option value="Haripur">Haripur</option>
                                        <option value="Hasimara">Hasimara</option>
                                        <option value="Hindusthan Cables Town">Hindusthan Cables Town</option>
                                        <option value="Hooghly district">Hooghly district</option>
                                        <option value="Howrah">Howrah</option>
                                        <option value="Ichapur">Ichapur</option>
                                        <option value="Indpur community development block">Indpur community development block</option>
                                        <option value="Ingraj Bazar">Ingraj Bazar</option>
                                        <option value="Islampur">Islampur</option>
                                        <option value="Jafarpur">Jafarpur</option>
                                        <option value="Jaigaon">Jaigaon</option>
                                        <option value="Jalpaiguri">Jalpaiguri</option>
                                        <option value="Jamuria">Jamuria</option>
                                        <option value="Jangipur">Jangipur</option>
                                        <option value="Jaynagar Majilpur">Jaynagar Majilpur</option>
                                        <option value="Jejur">Jejur</option>
                                        <option value="Jhalida">Jhalida</option>
                                        <option value="Jhargram">Jhargram</option>
                                        <option value="Jhilimili">Jhilimili</option>
                                        <option value="Kakdwip">Kakdwip</option>
                                        <option value="Kalaikunda">Kalaikunda</option>
                                        <option value="Kaliaganj">Kaliaganj</option>
                                        <option value="Kalimpong">Kalimpong</option>
                                        <option value="Kalna">Kalna</option>
                                        <option value="Kalyani">Kalyani</option>
                                        <option value="Kamarhati">Kamarhati</option>
                                        <option value="Kamarpukur">Kamarpukur</option>
                                        <option value="Kanchrapara">Kanchrapara</option>
                                        <option value="Kandi">Kandi</option>
                                        <option value="Karimpur">Karimpur</option>
                                        <option value="Katwa">Katwa</option>
                                        <option value="Kenda">Kenda</option>
                                        <option value="Keshabpur">Keshabpur</option>
                                        <option value="Kharagpur">Kharagpur</option>
                                        <option value="Kharar">Kharar</option>
                                        <option value="Kharba">Kharba</option>
                                        <option value="Khardaha">Khardaha</option>
                                        <option value="Khatra">Khatra</option>
                                        <option value="Kirnahar">Kirnahar</option>
                                        <option value="Kolkata">Kolkata</option>
                                        <option value="Konnagar">Konnagar</option>
                                        <option value="Krishnanagar">Krishnanagar</option>
                                        <option value="Krishnapur">Krishnapur</option>
                                        <option value="Kshirpai">Kshirpai</option>
                                        <option value="Kulpi">Kulpi</option>
                                        <option value="Kultali">Kultali</option>
                                        <option value="Kulti">Kulti</option>
                                        <option value="Kurseong">Kurseong</option>
                                        <option value="Lalgarh">Lalgarh</option>
                                        <option value="Lalgola">Lalgola</option>
                                        <option value="Loyabad">Loyabad</option>
                                        <option value="Madanpur">Madanpur</option>
                                        <option value="Madhyamgram">Madhyamgram</option>
                                        <option value="Mahiari">Mahiari</option>
                                        <option value="Mahishadal community development block">Mahishadal community development block</option>
                                        <option value="Mainaguri">Mainaguri</option>
                                        <option value="Manikpara">Manikpara</option>
                                        <option value="Masila">Masila</option>
                                        <option value="Mathabhanga">Mathabhanga</option>
                                        <option value="Matiali community development block">Matiali community development block</option>
                                        <option value="Matigara community development block">Matigara community development block</option>
                                        <option value="Medinipur">Medinipur</option>
                                        <option value="Mejia community development block">Mejia community development block</option>
                                        <option value="Memari">Memari</option>
                                        <option value="Mirik">Mirik</option>
                                        <option value="Mohanpur community development block">Mohanpur community development block</option>
                                        <option value="Monoharpur">Monoharpur</option>
                                        <option value="Muragacha">Muragacha</option>
                                        <option value="Muri">Muri</option>
                                        <option value="Murshidabad">Murshidabad</option>
                                        <option value="Nabadwip">Nabadwip</option>
                                        <option value="Nabagram">Nabagram</option>
                                        <option value="Nadia district">Nadia district</option>
                                        <option value="Nagarukhra">Nagarukhra</option>
                                        <option value="Nagrakata">Nagrakata</option>
                                        <option value="Naihati">Naihati</option>
                                        <option value="Naksalbari">Naksalbari</option>
                                        <option value="Nalhati">Nalhati</option>
                                        <option value="Nalpur">Nalpur</option>
                                        <option value="Namkhana community development block">Namkhana community development block</option>
                                        <option value="Nandigram">Nandigram</option>
                                        <option value="Nangi">Nangi</option>
                                        <option value="Nayagram community development block">Nayagram community development block</option>
                                        <option value="North 24 Parganas district">North 24 Parganas district</option>
                                        <option value="Odlabari">Odlabari</option>
                                        <option value="Paikpara">Paikpara</option>
                                        <option value="Panagarh">Panagarh</option>
                                        <option value="Panchla">Panchla</option>
                                        <option value="Panchmura">Panchmura</option>
                                        <option value="Pandua">Pandua</option>
                                        <option value="Panihati">Panihati</option>
                                        <option value="Panskura">Panskura</option>
                                        <option value="Parbatipur">Parbatipur</option>
                                        <option value="Paschim Medinipur district">Paschim Medinipur district</option>
                                        <option value="Patiram">Patiram</option>
                                        <option value="Patrasaer">Patrasaer</option>
                                        <option value="Patuli">Patuli</option>
                                        <option value="Pujali">Pujali</option>
                                        <option value="Puncha community development block">Puncha community development block</option>
                                        <option value="Purba Medinipur district">Purba Medinipur district</option>
                                        <option value="Purulia">Purulia</option>
                                        <option value="Raghudebbati">Raghudebbati</option>
                                        <option value="Raghunathpur">Raghunathpur</option>
                                        <option value="Raiganj">Raiganj</option>
                                        <option value="Rajmahal">Rajmahal</option>
                                        <option value="Rajnagar community development block">Rajnagar community development block</option>
                                        <option value="Ramchandrapur">Ramchandrapur</option>
                                        <option value="Ramjibanpur">Ramjibanpur</option>
                                        <option value="Ramnagar">Ramnagar</option>
                                        <option value="Rampur Hat">Rampur Hat</option>
                                        <option value="Ranaghat">Ranaghat</option>
                                        <option value="Raniganj">Raniganj</option>
                                        <option value="Raypur">Raypur</option>
                                        <option value="Rishra">Rishra</option>
                                        <option value="Sahapur">Sahapur</option>
                                        <option value="Sainthia">Sainthia</option>
                                        <option value="Salanpur community development block">Salanpur community development block</option>
                                        <option value="Sankarpur">Sankarpur</option>
                                        <option value="Sankrail">Sankrail</option>
                                        <option value="Santipur">Santipur</option>
                                        <option value="Santoshpur">Santoshpur</option>
                                        <option value="Santuri community development block">Santuri community development block</option>
                                        <option value="Sarenga">Sarenga</option>
                                        <option value="Serampore">Serampore</option>
                                        <option value="Serpur">Serpur</option>
                                        <option value="Shyamnagar, West Bengal">Shyamnagar, West Bengal</option>
                                        <option value="Siliguri">Siliguri</option>
                                        <option value="Singur">Singur</option>
                                        <option value="Sodpur">Sodpur</option>
                                        <option value="Solap">Solap</option>
                                        <option value="Sonada">Sonada</option>
                                        <option value="Sonamukhi">Sonamukhi</option>
                                        <option value="Sonarpur community development block">Sonarpur community development block</option>
                                        <option value="South 24 Parganas district">South 24 Parganas district</option>
                                        <option value="Srikhanda">Srikhanda</option>
                                        <option value="Srirampur">Srirampur</option>
                                        <option value="Suri">Suri</option>
                                        <option value="Swarupnagar community development block">Swarupnagar community development block</option>
                                        <option value="Takdah">Takdah</option>
                                        <option value="Taki">Taki</option>
                                        <option value="Tamluk">Tamluk</option>
                                        <option value="Tarakeswar">Tarakeswar</option>
                                        <option value="Titagarh">Titagarh</option>
                                        <option value="Tufanganj">Tufanganj</option>
                                        <option value="Tulin">Tulin</option>
                                        <option value="Uchalan">Uchalan</option>
                                        <option value="Ula">Ula</option>
                                        <option value="Uluberia">Uluberia</option>
                                        <option value="Uttar Dinajpur district">Uttar Dinajpur district</option>
                                        <option value="Uttarpara Kotrung">Uttarpara Kotrung</option>
                                      </select>
                                    </div>
                                  </div> 
                                  <div class="mb-3 row">
                                    <label for="com1" class="col-sm-3 text-end control-label col-form-label">Pincode</label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" id="pincode" name="pincode" placeholder="pincode" maxlength="6" minlength="6">
                                    </div>
                                  </div>
                                  <div class="mb-3 row"> 
                                    <label for="com1" class="col-sm-3 text-end control-label col-form-label">Area </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" name="area" id="atp" placeholder="Area type">
                                    </div>
                                  </div>
                              
                                    <div class="text-end">
                                      <button type="submit" class="
                                          btn btn-info
                                          rounded-pill
                                          px-4
                                          waves-effect waves-light
                                        " id="addinfo">
                                        Save
                                      </button>
                                      <button type="submit" class="
                                          btn btn-dark
                                          rounded-pill
                                          px-4
                                          waves-effect waves-light
                                        ">
                                        Cancel
                                      </button>
                                    </div>
                                  </div>
                              
                              <hr>
                              
                            </form>
                          </form>
<form action="{{route('add_Qualification')}}" method="post"  enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="user_id" value="{{$id}}" />
                              <div class="card-body">
                                <h4 class="card-title">Qualification</h4>
                                
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">Stream</label>
                                  <div class="col-sm-9">
                                   
                                    <select class="form-select" name="Stream">
                                      <option>Choose Your Option</option>
                                      <option>Desiging</option>
                                      <option>Development</option>
                                      <option>Videography</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">University</label>
                                  <div class="col-sm-9">
                                    <select class="form-select" name="University">
                                      <option>Choose Your Option</option>
                                      <option>Less then $5000</option>
                                      <option>$5000 - $10000</option>
                                      <option>$10000 - $20000</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Year of passing</label>
                                    <div class="col-sm-9">
                                      <select class="form-select" >
                                        <option>Choose Your Option</option>
                                        <option>2023</option>
                                        <option>2022</option>
                                        <option>$10000 - $20000</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label class="col-sm-3 text-end control-label col-form-label" >Exprience (offline)</label>
                                    <div class="col-sm-9">
                                      
                                      <select class="form-select" name="Exprienceoffline">
                                        <option>Choose Your Option</option>
                                        <option>Less then $5000</option>
                                        <option>$5000 - $10000</option>
                                        <option>$10000 - $20000</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label class="col-sm-3 text-end control-label col-form-label" >Exprience (online)</label>
                                    <div class="col-sm-9">
                                      <select class="form-select" name="Exprienceonline">
                                        <option>Choose Your Option</option>
                                        <option>Less then $5000</option>
                                        <option>$5000 - $10000</option>
                                        <option>$10000 - $20000</option>
                                      </select>
                                    </div>
                                  </div>   
                                  <div class="mb-3 row">
                                    <label for="com1" class="col-sm-3 text-end control-label col-form-label">Special achievements </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="Spach" placeholder="Area type" name="Specialachievements">
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label for="com1" class="col-sm-3 text-end control-label col-form-label" name="Anyotherdetails">Any other details</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="aod" placeholder="Area type">
                                    </div>
                                  </div>
                                  
                              
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">Document</label>
                                  <div class="col-sm-9">
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">Upload</span>
            
                                      <div class="custom-file">
                                        <input type="file" class="form-control" id="inputGroupFile01" name="document">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="abpro" class="col-sm-3 text-end control-label col-form-label">About Project</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" id="abpro" placeholder="About Project Here" name="AboutProject">
                                  </div>
                                </div>
                              </div>

                              <div class="text-end">
                                <button type="submit" class="
                                    btn btn-info
                                    rounded-pill
                                    px-4
                                    waves-effect waves-light
                                  " id="addinfo">
                                  Save
                                </button>
                                <button type="submit" class="
                                    btn btn-dark
                                    rounded-pill
                                    px-4
                                    waves-effect waves-light
                                  ">
                                  Cancel
                                </button>
                              </div>
                            </form>
                              <div class="card-body">
                                <h4 class="card-title">Application</h4>
                                 <div class="mb-3 row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Do you want to offer free demo session</label>
                                    <div class="col-sm-9">
                                      <select class="form-select">
                                        <option>Yes</option>
                                        <option>No</option>
                                        
                                      </select>
                                    </div>
                                  </div>
                                  <div class="mb-3 row ">
                                    <label class="col-sm-3 text-end control-label col-form-label">Set privacy (In case parent want to buy tutor details)</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">Show mobile no</label>
                                      </div>
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">Show email </label>
                                      </div>
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                        <label class="form-check-label" for="customCheck3">Show both</label>
                                      </div>
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                        <label class="form-check-label" for="customCheck3">Tagline of profile</label>
                                      </div>
                                    </div>
                                   
                                  </div>
                                  <div class="mb-3 row ">
                                    <label class="col-sm-3 text-end control-label col-form-label">Can Teach</label>
                                    <div class="col-sm-4">
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                        <label class="form-check-label" for="customCheck1">Online</label>
                                      </div>
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                        <label class="form-check-label" for="customCheck2">Offline at on place </label>
                                      </div>
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck3">
                                        <label class="form-check-label" for="customCheck3">Offline at student's place</label>
                                      </div>
                                      <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customCheck4">
                                        <label class="form-check-label" for="customCheck3">Assignments</label>
                                      </div>
                                    </div>
                                   
                                  </div>
                                  <div class="mb-3 row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Medium/Languages of Instruction</label>
                                    <select class="select2 form-control select2-hidden-accessible" multiple="" id="select2-max-length" style="width: 100%; height: 36px" data-select2-id="select2-max-length" tabindex="-1" aria-hidden="true">
                                        <optgroup label="Languages" data-select2-id="48">
                                            <option value="Arabic">Arabic</option>
                                            <option value="Assamese">Assamese</option>
                                            <option value="Bengali">Bengali</option>
                                            <option value="Business English">Business English</option>
                                            <option value="Chinese">Chinese</option>
                                            <option value="Danish">Danish</option>
                                            <option value="English">English</option>
                                            <option value="French">French</option>
                                            <option value="German">German</option>
                                            <option value="Gujarati">Gujarati</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Italian">Italian</option>
                                            <option value="Japanese">Japanese</option>
                                            <option value="Kannada">Kannada</option>
                                            <option value="Korean">Korean</option>
                                            <option value="Latin">Latin</option>
                                            <option value="Malayalam">Malayalam</option>
                                            <option value="Mandarin">Mandarin</option>
                                            <option value="Marathi">Marathi</option>
                                            <option value="Persian">Persian</option>
                                            <option value="Portuguese">Portuguese</option>
                                            <option value="Punjabi">Punjabi</option>
                                            <option value="Russian">Russian</option>
                                            <option value="Sanskrit">Sanskrit</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="Swedish">Swedish</option>
                                            <option value="Tamil">Tamil</option>
                                            <option value="Telugu">Telugu</option>
                                            <option value="Thai">Thai</option>
                                            <option value="Urdu">Urdu</option>
                                        </optgroup>
                                     
                                      </select>
                                      
                                  </div>
                                 
                                
                               <hr>
                                 <div class="repeater-default mt-4">
                                    <div data-repeater-list="" >
                                      
                                    <div data-repeater-item="" style="" id="sgms">
                                        
                                          <div class="row">
                                            <div class="mb-3 col-md-6">
                                              <label for="subs">Subjects</label>
                                              <select class="select2 form-control select2-hidden-accessible plts" multiple="" id="select5-max-length" style="width: 100%; height: 36px" data-select2-id="select5-max-length" tabindex="-1" aria-hidden="true">
                                              <optgroup label="subjects" data-select2-id="48">
                                            <option value="Accountancy">Accountancy</option>
                                            <option value="Actuarial Science">Actuarial Science</option>
                                            <option value="Agriculture">Agriculture</option>
                                            <option value="Anatomy">Anatomy</option>
                                            <option value="Anthropology">Anthropology</option>
                                            <option value="Arts Group">Arts Group</option>
                                            <option value="Auditing">Auditing</option>
                                            <option value="B.A. Tourism">B.A. Tourism</option>
                                            <option value="B.Arch Tuition">B.Arch Tuition</option>
                                            <option value="B.Com Tuition">B.Com Tuition</option>
                                            <option value="B.Ed Tuition">B.Ed Tuition</option>
                                            <option value="B.Sc Tuition">B.Sc Tuition</option>
                                            <option value="B.Tech Tuition">B.Tech Tuition</option>
                                            <option value="BA Tuition">BA Tuition</option>
                                            <option value="Bachelor of Tourism Administration">Bachelor of Tourism Administration</option>
                                            <option value="Banking & Finance">Banking & Finance</option>
                                            <option value="BBA Tuition">BBA Tuition</option>
                                            <option value="BCA Tuition">BCA Tuition</option>
                                            <option value="Behavioral Science">Behavioral Science</option>
                                            <option value="Bengali">Bengali</option>
                                            <option value="BHA">BHA</option>
                                            <option value="Bio Chemistry">Bio Chemistry</option>
                                            <option value="Bio Technology">Bio Technology</option>
                                            <option value="Bio-informatics">Bio-informatics</option>
                                            <option value="Bio-medical">Bio-medical</option>
                                            <option value="Biology">Biology</option>
                                            <option value="BMS Tuition">BMS Tuition</option>
                                            <option value="Botany">Botany</option>
                                            <option value="BTTM">BTTM</option>
                                            <option value="Business Economics">Business Economics</option>
                                            <option value="Business Law">Business Law</option>
                                            <option value="Business Mathematics">Business Mathematics</option>
                                            <option value="Business Statistics">Business Statistics</option>
                                            <option value="Business Studies">Business Studies</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Civics">Civics</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Cooperative Accounting">Cooperative Accounting</option>
                                            <option value="Corporate Accounting">Corporate Accounting</option>
                                            <option value="Costing">Costing</option>
                                            <option value="Direct Tax">Direct Tax</option>
                                            <option value="Economics">Economics</option>
                                            <option value="Education">Education</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="English">English</option>
                                            <option value="EVS">EVS</option>
                                            <option value="Financial Management">Financial Management</option>
                                            <option value="Financial Reporting">Financial Reporting</option>
                                            <option value="Food & Nutrition">Food & Nutrition</option>
                                            <option value="General Knowledge">General Knowledge</option>
                                            <option value="Geography">Geography</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="History">History</option>
                                            <option value="Home Science">Home Science</option>
                                            <option value="Hotel Management">Hotel Management</option>
                                            <option value="Human Anatomy">Human Anatomy</option>
                                            <option value="Human Resource">Human Resource</option>
                                            <option value="Income Tax">Income Tax</option>
                                            <option value="Indirect Tax">Indirect Tax</option>
                                            <option value="Inorganic Chemistry">Inorganic Chemistry</option>
                                            <option value="IT">IT</option>
                                            <option value="M.Com Tuition">M.Com Tuition</option>
                                            <option value="M.Ed Tuition">M.Ed Tuition</option>
                                            <option value="M.Sc Tuition">M.Sc Tuition</option>
                                            <option value="M.Tech Tuition">M.Tech Tuition</option>
                                            <option value="MA Tuition">MA Tuition</option>
                                            <option value="Mass communication">Mass communication</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="MicroBiology">MicroBiology</option>
                                            <option value="Organic Chemistry">Organic Chemistry</option>
                                            <option value="Pharmacy">Pharmacy</option>
                                            <option value="Philosophy">Philosophy</option>
                                            <option value="Physics">Physics</option>
                                            <option value="Physiology">Physiology</option>
                                            <option value="Political Science">Political Science</option>
                                            <option value="Polytechnic">Polytechnic</option>
                                            <option value="Psychology">Psychology</option>
                                            <option value="Public Administration">Public Administration</option>
                                            <option value="Sociology">Sociology</option>
                                            <option value="Statistics">Statistics</option>
                                            <option value="Taxation">Taxation</option>
                                            <option value="Zoology">Zoology</option>
                                             </optgroup>
                                     
                                               </select>
                                            </div>
                                           
                                            <div class="mb-3 col-md-3">
                                              <label for="opt">Segments</label>
                                              <div class="col-sm-9">
                                                <select class="form-select">
                                                  <option>Choose Your Option</option>
                                                  <option value="Academic Enrichment">Academic Enrichment</option>
                                                  <option value="Application / Enterprise Platform">Application / Enterprise Platform</option>
                                                  <option value="Basic Computer / Office">Basic Computer / Office</option>
                                                  <option value="Business Training">Business Training</option>
                                                  <option value="CA CPT">CA CPT</option>
                                                  <option value="Certification">Certification</option>
                                                  <option value="Class 1 - 5">Class 1 - 5</option>
                                                  <option value="Class 11 - 12">Class 11 - 12</option>
                                                  <option value="Class 6 - 8">Class 6 - 8</option>
                                                  <option value="Class 9 - 10">Class 9 - 10</option>
                                                  <option value="College Level">College Level</option>
                                                  <option value="Competitive Exams">Competitive Exams</option>
                                                  <option value="Dance">Dance</option>
                                                  <option value="Data Science / DBMS">Data Science / DBMS</option>
                                                  <option value="Engineering Entrance & IITJEE">Engineering Entrance & IITJEE</option>
                                                  <option value="Engineering Subjects">Engineering Subjects</option>
                                                  <option value="English Speaking">English Speaking</option>
                                                  <option value="Graphics & Multimedia">Graphics & Multimedia</option>
                                                  <option value="Health & Fitness">Health & Fitness</option>
                                                  <option value="Hobby Classes">Hobby Classes</option>
                                                  <option value="Languages">Languages</option>
                                                  <option value="Law Subjects">Law Subjects</option>
                                                  <option value="MBA & BBA">MBA & BBA</option>
                                                  <option value="Medical Entrance & AIPMT">Medical Entrance & AIPMT</option>
                                                  <option value="Music">Music</option>
                                                  <option value="Nursery Level">Nursery Level</option>
                                                  <option value="Programming Language">Programming Language</option>
                                                  <option value="Special Education">Special Education</option>
                                                  <option value="Sports">Sports</option>
                                                  <option value="STEM Activities">STEM Activities</option>
                                                  <option value="Study Abroad">Study Abroad</option>
                                                  <option value="Technology">Technology</option>
                                                  <option value="Test Preparation">Test Preparation</option>
                                                  <option value="Web Technologies">Web Technologies</option>
                                                </select>
                                              </div>
                                            </div>
                                          
                                            <div class="mb-3 col-md-3">
                                              <label for="name">Fees (INR)</label>
                                              <input type="text" class="form-control" placeholder="fess in INR">
                                            </div>
                                            <div class="mb-3 col-md-12">
                                              <button data-repeater-delete="" class="
                                                  btn
                                                  rounded-pill
                                                  px-4
                                                  btn-light-danger
                                                  text-danger
                                                  font-weight-medium
                                                  waves-effect waves-light
                                                  m-l-10
                                                " type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 feather-sm ms-2 fill-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                Delete Form
                                              </button>
                                            </div>
                                          </div>
                                        
                                      </div>
                                    </div>
                                    <div class="mt-3 pt-3 border-top">
                                      <button data-repeater-create="" class="
                                          btn btn-info
                                          rounded-pill
                                          px-4
                                          waves-effect waves-light
                                        " onclick="segmentadd()">
                                        <div class="d-flex align-items-center">
                                          Add
                                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle feather-sm ms-2 fill-white"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                        </div>
                                      </button>
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label class="col-sm-3 text-end control-label col-form-label"> DO YOU WANT TO SELL SAME SEGMENTS EDUCATION MATERIAL WITH OUR SITE</label>
                                    <div class="col-sm-9">
                                      <select class="form-select">
                                        <option>Yes</option>
                                        <option>No</option>
                                        
                                      </select>
                                    </div>
                                  </div>
                                 
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">Attach 2 min video displaying teacher's skills, methodologybof teaching, specialisation,clarity of work and lectures and experience 
                                    (Not mandatory,but preferable)
                                    </label>
                                  <div class="col-sm-9">
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">Upload</span>
            
                                      <div class="custom-file">
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="abpro" class="col-sm-3 text-end control-label col-form-label">Experience of foreign University teaching( in case of online teaching) with details</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" id="abpro" placeholder="About Project Here">
                                  </div>
                                </div>
                              </div>
                              
                              <hr>
                              <div class="card-body">
                                <h4 class="card-title">Final steps</h4>
                                
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">Can you provide, 2 no reference to student if required</label>
                                  <div class="col-sm-9">
                                    <select class="form-select" id="sel2">
                                      <option >select a option</option>
                                      <option value="1">Yes</option>
                                      <option value="0">No</option>
                                      
                                    </select>
                                  </div>
                                </div>
                                <div id="dnm1">

                                </div>
                                <div class="mb-3 row">
                                  <label for="com1" class="col-sm-3 text-end control-label col-form-label">Any other details</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" id="aod" placeholder="Area type">
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="com1" class="col-sm-3 text-end control-label col-form-label"> IF DONE ANY ASSIGNMENT/PROJECT WORK PLEASE MENTION THE SUBJECT/SOFTWARE USED (IF ANY) </label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" id="aod" placeholder="Area type">
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">Attach verification certificate if any approved by any govt agency (not mandatory)</label>
                                  <div class="col-sm-9">
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">Upload</span>
            
                                      <div class="custom-file">
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">Select Id type</label>
                                  <div class="col-sm-9">
                                    <select class="form-select">
                                      <option >Select a id type</option>
                                      <option >Driver's license</option>
                                      <option>Passport</option>
                                      <option >Voter card </option>
                                      <option>Aadhar card</option>
                                      
                                      
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">Attach ID proof issued by any state/centre govt agency</label>
                                  <div class="col-sm-9">
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">Upload</span>
            
                                      <div class="custom-file">
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                   
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label"> Attach highest qualification proof of University/college approved by UGC/ AICTE/MCI/  ICAI/ANY OTHER GOVT AGENCY</label>
                                  <div class="col-sm-9">
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">Upload</span>
            
                                      <div class="custom-file">
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                      </div>
                                    </div>
                                  </div>
                                </div>  
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">Attach clear passport size recent photograph </label>
                                  <div class="col-sm-9">
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">Upload</span>
            
                                      <div class="custom-file">
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                      </div>
                                    </div>
                                  </div>
                                </div>  
                                  <div class="mb-3 row">
                                    <label for="com1" class="col-sm-3 text-end control-label col-form-label">Experience of foreign University teaching( in case of online teaching) with details</label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="aod" placeholder="">
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label class="col-sm-3 text-end control-label col-form-label">Terms and condition pdf upload &nbsp;<a href="#">Download pdf</a></label>
                                    <div class="col-sm-9">
                                      <div class="input-group mb-3">
                                        <span class="input-group-text">Upload</span>
              
                                        <div class="custom-file">
                                          <input type="file" class="form-control" id="inputGroupFile01">
                                        </div>
                                      </div>
                                    </div>
                                  </div>  
                                  <div class="mb-3 row">
                                    <label for="inputEmail3" class="col-sm-3 text-end control-label col-form-label">Registration fee</label>
                                    <div class="col-sm-9">
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="customControlValidation2" name="radio-stacked" required="">
                                        <label class="form-check-label" for="customControlValidation2"><img src="https://i.ibb.co/347pFg6/cashless-payment.png" alt="cashless-payment" >Deposit using payment portal</label>
                                      </div>
                                      <div class="form-check">
                                        <input type="radio" class="form-check-input" id="customControlValidation3" name="radio-stacked" required="">
                                        <label class="form-check-label" for="customControlValidation3"><img src="https://i.ibb.co/pXJtd3N/coupons.png" alt="coupons" >Initial waiver using free coupon code</label>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="mb-3 row">
                                    <label for="com1" class="col-sm-3 text-end control-label col-form-label">Pincode</label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" id="pincode" placeholder="pincode" maxlength="6" minlength="6">
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label for="com1" class="col-sm-3 text-end control-label col-form-label">Area </label>
                                    <div class="col-sm-9">
                                      <input type="text" class="form-control" id="atp" placeholder="Area type">
                                    </div>
                                  </div>
                                <div class="mb-3 row">
                                  <label class="col-sm-3 text-end control-label col-form-label">City</label>
                                  <div class="col-sm-9">
                                    <div class="input-group mb-3">
                                      <span class="input-group-text">Upload</span>
            
                                      <div class="custom-file">
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                               
                              <div class="p-3 border-top">
                                <div class="text-end">
                                  <button type="submit" class="
                                      btn btn-info
                                      rounded-pill
                                      px-4
                                      waves-effect waves-light
                                    ">
                                    Save
                                  </button>
                                  <button type="submit" class="
                                      btn btn-dark
                                      rounded-pill
                                      px-4
                                      waves-effect waves-light
                                    ">
                                    Cancel
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                    <!-- Column -->
                    </div>
                </div>
        
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/libs/select2/dist/js/select2.full.min.js"></script>
            <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/libs/select2/dist/js/select2.min.js"></script>
           
            <script >
            $("#select2-max-length").select2({
  maximumSelectionLength: 4,
  placeholder: "Select only maximum 4 items",
});
$("#select5-max-length").select2({
  maximumSelectionLength: 7,
  placeholder: "Select only maximum 7 items",
});
$("#select6-max-length").select2({
  maximumSelectionLength: 7,
  placeholder: "Select only maximum 7 items",
});
$("#sel2").change(function () {
  if ($(this).val() == 1) {
    $("#dnm1").html('<div class="mb-3 row"><div class="col-sm-12 col-lg-6"><div class="form-group mb-3 row pt-3"> <label for="inputEmail3" class=" col-sm-3 text-end control-label col-form-label ">Student1 phone</label> <div class="col-sm-9"> <input type="text" class="form-control" id="s1ph" placeholder="phone no"> </div> </div> </div> <div class="col-sm-12 col-lg-6"> <div class="form-group mb-3 row pt-3"> <label for="inputEmail3" class=" col-sm-3 text-end control-label col-form-label ">Student1 name</label> <div class="col-sm-9"> <input type="text" class="form-control" id="s1nm" placeholder=" name"> </div> </div> </div> </div><div class="mb-3 row"> <div class="col-sm-12 col-lg-6"> <div class="form-group mb-3 row pt-3"> <label for="inputEmail3" class=" col-sm-3 text-end control-label col-form-label ">Student2 phone</label> <div class="col-sm-9"> <input type="text" class="form-control" id="s2ph" placeholder="phone no"> </div> </div> </div> <div class="col-sm-12 col-lg-6"> <div class="form-group mb-3 row pt-3"> <label for="inputEmail3" class=" col-sm-3 text-end control-label col-form-label ">Student2 name</label> <div class="col-sm-9"> <input type="text" class="form-control" id="s2nm" placeholder=" name"> </div> </div> </div> </div>');
  }
  else{
    $("#dnm1").html('');
  }
 
});
var lookup1 = {
   'Engineering Entrance & IITJEE': ['AIEEE','AMIE','AMITE','Architecture','BCA Entrance','BITSAT','CET','Chemistry','EAMCET','GATE Exam','IIT JAM','IIT JEE Advanced','IIT JEE Mains','JECA Exam','JELET','JEXPO','Mathematics','MCA Entrance','NATA Exam','NIMCET','Physics','Polytechnic Entrance','WBJEE'],
   'Languages': ['Accent Training','Arabic','Assamese','Bengali','Business English','Chinese','Danish','English','French','German','Gujarati','Hindi','Italian','Japanese','Kannada','Korean','Latin','Malayalam','Mandarin','Marathi','Persian','Portuguese','Punjabi','Russian','Sanskrit','Spanish','Swedish','Tamil','Telugu','Thai','Urdu'],
   'Engineering Subjects': ['Aeronautical','Aircraft Engineering','Architecture','Automobile Engineering','Chemical','Chemistry','Civil','Computer','Drawing','Electrical','Electronics','Electronics and Communication','Engineering Graphics','Instrumentation','IT','Mathematics','Mechanical','Mechanics','Physics','Production','Simulation Design','Software Engineering'],
   'Languages': ['Administrative Laws','Civil Laws','CLAT','Company Laws','Constitutional Law','Contract Act Laws','Criminal Laws','Jurisprudence','Law Entrance','LLB','LLM','MHCET Law','Tax Laws','XLAT Exam'],
   'Programming Language': ['.Net','C, C++','C# (C Sharp)','Java and J2EE','Laravel','Perl Programming','Python Programming','Raspberry pi Programming','Shell Scripting','Visual Basic','WebMethod Developer'],
};
var lookup2 = {
   'Class 11 - 12': ['Accountancy','Algebra','Anatomy','Anthropology','Arts Group','Banking & Finance','Bengali','Bio Technology','Biology','Botany','Business Economics','Business Mathematics','Business Organisation','Business Studies','Chemistry','Commerce Subjects','Commercial Arts','Computer Science','Costing','Economics','Education','English','Enterprenuership','EVS','Fashion Study','Food & Nutrition','Geography','Hindi','History','Home Science','Income Tax','Indirect Tax','Information Practice','IT & Computer Subjects','KVPY Exam','Legal Studies','Logic','Mathematics','Philosophy','Physical Education','Physics','Physiology','Political Science','Psychology','Sociology','Statistics','Zoology'],
   'Class 9 - 10': ['Accountancy','Algebra','Bengali','Biology','Business Studies','Chemistry','Commerce Subjects','Computer Science','Economics','English','EVS','Geography','Hindi','History','Home Science','Marathi','Mathematics','NSTSE','NTSE','Physics','Political Science','School level computer','Science','Social Studies','Special Education','Statistics','Vedic Maths','Zoology'],
   'College Level': ['Accountancy','Actuarial Science','Agriculture','Anatomy','Anthropology','Arts Group','Auditing','B.A. Tourism','B.Arch Tuition','B.Com Tuition','B.Ed Tuition','B.Sc Tuition','B.Tech Tuition','BA Tuition','Bachelor of Tourism Administration','Banking & Finance','BBA Tuition','BCA Tuition','Behavioral Science','Bengali','BHA','Bio Chemistry','Bio Technology','Bio-informatics','Bio-medical','Biology','BMS Tuition','Botany','BTTM','Business Economics','Business Law','Business Mathematics','Business Statistics','Business Studies','Chemistry','Civics','Computer Science','Cooperative Accounting','Corporate Accounting','Costing','Direct Tax','Economics','Education','Electronics','English','EVS','Financial Management','Financial Reporting','Food & Nutrition','General Knowledge','Geography','Hindi','History','Home Science','Hotel Management','Human Anatomy','Human Resource','Income Tax','Indirect Tax','Inorganic Chemistry','IT','M.Com Tuition','M.Ed Tuition','M.Sc Tuition','M.Tech Tuition','MA Tuition','Mass communication','Mathematics','MicroBiology','Organic Chemistry','Pharmacy','Philosophy','Physics','Physiology','Political Science','Polytechnic','Psychology','Public Administration','Sociology','Statistics','Taxation','Zoology'],
   'Engineering Subjects': ['Aeronautical','Aircraft Engineering','Architecture','Automobile Engineering','Chemical','Chemistry','Civil','Computer','Drawing','Electrical','Electronics','Electronics and Communication','Engineering Graphics','Instrumentation','IT','Mathematics','Mechanical','Mechanics','Physics','Production','Simulation Design','Software Engineering'],
   'Languages': ['Accent Training','Arabic','Assamese','Bengali','Business English','Chinese','Danish','English','French','German','Gujarati','Hindi','Italian','Japanese','Kannada','Korean','Latin','Malayalam','Mandarin','Marathi','Persian','Portuguese','Punjabi','Russian','Sanskrit','Spanish','Swedish','Tamil','Telugu','Thai','Urdu'],
   'MBA & BBA': ['Accountancy','Bachelor of Hospital Administration (BHA)','BBA Entrance','BBA Subjects','BBM','BHA','BTTM','Business Management','Corporate Finance','Economics','Finance','Forex Trading','Human Resource','Human Resource and Marketing','International Business Marketing','Management Subjects','MBA Entrance','MHA','MTTM','Statistics'],
};
function segmentadd()
{
 var htx= document.getElementById("sgms").innerHTML;
 document.getElementById("sgms").innerHTML=htx+'<div class="row"> <div class="mb-3 col-md-6"> <label for="subs">Subjects</label> <select class="select2 form-control select2-hidden-accessible plts" multiple="" id="select5-max-length" style="width: 100%; height: 36px" data-select2-id="select5-max-length" tabindex="-1" aria-hidden="true"> <optgroup label="subjects" data-select2-id="48"> <option value="Accountancy">Accountancy</option> <option value="Actuarial Science">Actuarial Science</option> <option value="Agriculture">Agriculture</option> <option value="Anatomy">Anatomy</option> <option value="Anthropology">Anthropology</option> <option value="Arts Group">Arts Group</option> <option value="Auditing">Auditing</option> <option value="B.A. Tourism">B.A. Tourism</option> <option value="B.Arch Tuition">B.Arch Tuition</option> <option value="B.Com Tuition">B.Com Tuition</option> <option value="B.Ed Tuition">B.Ed Tuition</option> <option value="B.Sc Tuition">B.Sc Tuition</option> <option value="B.Tech Tuition">B.Tech Tuition</option> <option value="BA Tuition">BA Tuition</option> <option value="Bachelor of Tourism Administration">Bachelor of Tourism Administration</option> <option value="Banking & Finance">Banking & Finance</option> <option value="BBA Tuition">BBA Tuition</option> <option value="BCA Tuition">BCA Tuition</option> <option value="Behavioral Science">Behavioral Science</option> <option value="Bengali">Bengali</option> <option value="BHA">BHA</option> <option value="Bio Chemistry">Bio Chemistry</option> <option value="Bio Technology">Bio Technology</option> <option value="Bio-informatics">Bio-informatics</option> <option value="Bio-medical">Bio-medical</option> <option value="Biology">Biology</option> <option value="BMS Tuition">BMS Tuition</option> <option value="Botany">Botany</option> <option value="BTTM">BTTM</option> <option value="Business Economics">Business Economics</option> <option value="Business Law">Business Law</option> <option value="Business Mathematics">Business Mathematics</option> <option value="Business Statistics">Business Statistics</option> <option value="Business Studies">Business Studies</option> <option value="Chemistry">Chemistry</option> <option value="Civics">Civics</option> <option value="Computer Science">Computer Science</option> <option value="Cooperative Accounting">Cooperative Accounting</option> <option value="Corporate Accounting">Corporate Accounting</option> <option value="Costing">Costing</option> <option value="Direct Tax">Direct Tax</option> <option value="Economics">Economics</option> <option value="Education">Education</option> <option value="Electronics">Electronics</option> <option value="English">English</option> <option value="EVS">EVS</option> <option value="Financial Management">Financial Management</option> <option value="Financial Reporting">Financial Reporting</option> <option value="Food & Nutrition">Food & Nutrition</option> <option value="General Knowledge">General Knowledge</option> <option value="Geography">Geography</option> <option value="Hindi">Hindi</option> <option value="History">History</option> <option value="Home Science">Home Science</option> <option value="Hotel Management">Hotel Management</option> <option value="Human Anatomy">Human Anatomy</option> <option value="Human Resource">Human Resource</option> <option value="Income Tax">Income Tax</option> <option value="Indirect Tax">Indirect Tax</option> <option value="Inorganic Chemistry">Inorganic Chemistry</option> <option value="IT">IT</option> <option value="M.Com Tuition">M.Com Tuition</option> <option value="M.Ed Tuition">M.Ed Tuition</option> <option value="M.Sc Tuition">M.Sc Tuition</option> <option value="M.Tech Tuition">M.Tech Tuition</option> <option value="MA Tuition">MA Tuition</option> <option value="Mass communication">Mass communication</option> <option value="Mathematics">Mathematics</option> <option value="MicroBiology">MicroBiology</option> <option value="Organic Chemistry">Organic Chemistry</option> <option value="Pharmacy">Pharmacy</option> <option value="Philosophy">Philosophy</option> <option value="Physics">Physics</option> <option value="Physiology">Physiology</option> <option value="Political Science">Political Science</option> <option value="Polytechnic">Polytechnic</option> <option value="Psychology">Psychology</option> <option value="Public Administration">Public Administration</option> <option value="Sociology">Sociology</option> <option value="Statistics">Statistics</option> <option value="Taxation">Taxation</option> <option value="Zoology">Zoology</option> </optgroup> </select> </div> <div class="mb-3 col-md-3"> <label for="opt">Segments</label> <div class="col-sm-9"> <select class="form-select"> <option>Choose Your Option</option> <option value="Academic Enrichment">Academic Enrichment</option> <option value="Application / Enterprise Platform">Application / Enterprise Platform</option> <option value="Basic Computer / Office">Basic Computer / Office</option> <option value="Business Training">Business Training</option> <option value="CA CPT">CA CPT</option> <option value="Certification">Certification</option> <option value="Class 1 - 5">Class 1 - 5</option> <option value="Class 11 - 12">Class 11 - 12</option> <option value="Class 6 - 8">Class 6 - 8</option> <option value="Class 9 - 10">Class 9 - 10</option> <option value="College Level">College Level</option> <option value="Competitive Exams">Competitive Exams</option> <option value="Dance">Dance</option> <option value="Data Science / DBMS">Data Science / DBMS</option> <option value="Engineering Entrance & IITJEE">Engineering Entrance & IITJEE</option> <option value="Engineering Subjects">Engineering Subjects</option> <option value="English Speaking">English Speaking</option> <option value="Graphics & Multimedia">Graphics & Multimedia</option> <option value="Health & Fitness">Health & Fitness</option> <option value="Hobby Classes">Hobby Classes</option> <option value="Languages">Languages</option> <option value="Law Subjects">Law Subjects</option> <option value="MBA & BBA">MBA & BBA</option> <option value="Medical Entrance & AIPMT">Medical Entrance & AIPMT</option> <option value="Music">Music</option> <option value="Nursery Level">Nursery Level</option> <option value="Programming Language">Programming Language</option> <option value="Special Education">Special Education</option> <option value="Sports">Sports</option> <option value="STEM Activities">STEM Activities</option> <option value="Study Abroad">Study Abroad</option> <option value="Technology">Technology</option> <option value="Test Preparation">Test Preparation</option> <option value="Web Technologies">Web Technologies</option> </select> </div> </div> <div class="mb-3 col-md-3"> <label for="name">Fees (INR)</label> <input type="text" class="form-control" placeholder="fess in INR"> </div> <div class="mb-3 col-md-12"> <button data-repeater-delete="" class=" btn rounded-pill px-4 btn-light-danger text-danger font-weight-medium waves-effect waves-light m-l-10 " type="button"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 feather-sm ms-2 fill-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete Form </button> </div> </div>';
  // $("#sgms").append('<div class="row"> <div class="mb-3 col-md-6"> <label class="col-sm-3 text-end control-label col-form-label">Medium/Languages of Instruction</label> <select class="select2 form-control select2-hidden-accessible" multiple="" id="select2-max-length" style="width: 100%; height: 36px" data-select2-id="select2-max-length" tabindex="-1" aria-hidden="true"> <optgroup label="Languages" data-select2-id="48"> <option value="Arabic">Arabic</option> <option value="Assamese">Assamese</option> <option value="Bengali">Bengali</option> <option value="Business English">Business English</option> <option value="Chinese">Chinese</option> <option value="Danish">Danish</option> <option value="English">English</option> <option value="French">French</option> <option value="German">German</option> <option value="Gujarati">Gujarati</option> <option value="Hindi">Hindi</option> <option value="Italian">Italian</option> <option value="Japanese">Japanese</option> <option value="Kannada">Kannada</option> <option value="Korean">Korean</option> <option value="Latin">Latin</option> <option value="Malayalam">Malayalam</option> <option value="Mandarin">Mandarin</option> <option value="Marathi">Marathi</option> <option value="Persian">Persian</option> <option value="Portuguese">Portuguese</option> <option value="Punjabi">Punjabi</option> <option value="Russian">Russian</option> <option value="Sanskrit">Sanskrit</option> <option value="Spanish">Spanish</option> <option value="Swedish">Swedish</option> <option value="Tamil">Tamil</option> <option value="Telugu">Telugu</option> <option value="Thai">Thai</option> <option value="Urdu">Urdu</option> </optgroup> </select> </div> <div class="mb-3 col-md-3"> <label for="opt">Segments</label> <div class="col-sm-9"> <select class="form-select"> <option>Choose Your Option</option> <option value="Academic Enrichment">Academic Enrichment</option> <option value="Application / Enterprise Platform">Application / Enterprise Platform</option> <option value="Basic Computer / Office">Basic Computer / Office</option> <option value="Business Training">Business Training</option> <option value="CA CPT">CA CPT</option> <option value="Certification">Certification</option> <option value="Class 1 - 5">Class 1 - 5</option> <option value="Class 11 - 12">Class 11 - 12</option> <option value="Class 6 - 8">Class 6 - 8</option> <option value="Class 9 - 10">Class 9 - 10</option> <option value="College Level">College Level</option> <option value="Competitive Exams">Competitive Exams</option> <option value="Dance">Dance</option> <option value="Data Science / DBMS">Data Science / DBMS</option> <option value="Engineering Entrance & IITJEE">Engineering Entrance & IITJEE</option> <option value="Engineering Subjects">Engineering Subjects</option> <option value="English Speaking">English Speaking</option> <option value="Graphics & Multimedia">Graphics & Multimedia</option> <option value="Health & Fitness">Health & Fitness</option> <option value="Hobby Classes">Hobby Classes</option> <option value="Languages">Languages</option> <option value="Law Subjects">Law Subjects</option> <option value="MBA & BBA">MBA & BBA</option> <option value="Medical Entrance & AIPMT">Medical Entrance & AIPMT</option> <option value="Music">Music</option> <option value="Nursery Level">Nursery Level</option> <option value="Programming Language">Programming Language</option> <option value="Special Education">Special Education</option> <option value="Sports">Sports</option> <option value="STEM Activities">STEM Activities</option> <option value="Study Abroad">Study Abroad</option> <option value="Technology">Technology</option> <option value="Test Preparation">Test Preparation</option> <option value="Web Technologies">Web Technologies</option> </select> </div> </div> <div class="mb-3 col-md-3"> <label for="name">Fees (INR)</label> <input type="text" class="form-control" placeholder="fess in INR"> </div> <div class="mb-3 col-md-12"> <button data-repeater-delete="" class=" btn rounded-pill px-4 btn-light-danger text-danger font-weight-medium waves-effect waves-light m-l-10 " type="button"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 feather-sm ms-2 fill-white"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete Form </button> </div> </div>');
  
}
            </script>
             @php
             $users=session()->get('users');
             $user_id=$users['id'];
             @endphp
           <script>
            $(document).ready(() => {
                $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

                let profile;
    const user_id = "{{ $user_id }}";
                $("#fileUpload").change(function () {
                    const file = this.files[0];
                    if (file) {
                        let reader = new FileReader();
                        reader.onload = function (event) {
                            $("#imgPreview")
                              .attr("src", event.target.result);
                        };
                        reader.readAsDataURL(file);
                    }
                    console.log("hl");
                    profile = file;
        var formData = new FormData();
        formData.append('profile', profile);
        formData.append('user_id', user_id);
        $.ajax({
            cache: false,
            contentType: false,
            processData: false,
            type: 'post',
            data: formData,
            url: "{{ route('update-image') }}",
            success: function (response) {
                if (response.success) {
                    $('#successMessage').show();
                    $('#successMessage').text(response.message);
                } else {
                    $('#failedMessage').show();
                    $('#failedMessage').text(response.message);
                console.log("test");
                }
                setTimeout(() => {
                    location.reload();
                }, 2000);
            },
            error: function(data){
            
            var errors = data.responseJSON;
            console.log(errors);
            }
        });
                });
            });




            $("#addinfo").click(function () {



const fname=$('#fname').val();
const lname=$('#lname').val();
console.log(fname);
              // const data={
              //  // user_id, f_name, l_name, email, number, dob, gender, address, country, state, city, pincode, area
              // }

            $.ajax({
            contentType: false,
            processData: false,
            type: 'post',
            data: {fname,lname},
            url: "{{ route('add_info') }}",
            success: function (response) {
              alert(response);
              console.log(response);
                if (response.success) {
                    $('#successMessage').show();
                    $('#successMessage').text(response.message);
                } else {
                    $('#failedMessage').show();
                    $('#failedMessage').text(response.message);
                console.log("test");
                }
                setTimeout(() => {
                    location.reload();
                }, 2000);
            },
            error: function(data){
            
            var errors = data.responseJSON;
            console.log(errors);
            }
        });
             
      })


        </script>
            @stop