<?php include "header.php"?>

<body>

<?php include "menu.php";?>

<div id="inner-banner">
    <img class="img-responsive" title="" alt="" src="images/blog-background.jpg">
    <div class="container">
        <div class="downloading-section">
            <ul>
                <li class="post_show"><a href="exhibitors_registration.php">
                    <strong>Exhibitor Registration</strong></a>
                </li>
                <li class="space_app"><a href="visitors_registration.php">
                    <strong>Visitor Registration</strong></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="page-content">
<div class="container">
<div class="row">
<div class="col-md-8">
<!-- Classic Heading -->
<h4 class="classic-title"><span>VISITOR REGISTRATION</span></h4>
<form  method="post" name="myform" action="visitors_registration_process.php">
<div class="col-lg-2 no-margin">
    <label>Contact Person*</label>
</div>
<div class="col-lg-10 no-margin">
    <div class="row">
        <div class="col-lg-2">
            <select id="sur_name" name="sur_name" class="pull-left" style="width:100%; margin-right:5px;">
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
                <option value="Rev">Rev</option>
            </select>
        </div>
        <div class="col-lg-5 no-padding">
            <input type="text" placeholder="First Name" required="required" id="first_name" name="first_name" class="pull-left" style="width:94%;">
        </div>
        <div class="col-lg-5 no-padding">
            <input type="text" placeholder="Last Name" id="last_name" name="last_name" style="width:94%;">
        </div>
    </div>
</div>
<div class="col-lg-2 no-margin">
    <label>Company*</label>
</div>
<div class="col-lg-10 no-margin">
    <input type="text" required="required" id="company" name="company" style="width:100%;">
</div>
<div class="col-lg-2 no-margin">
    <label>Date of Birth*</label>
</div>
<div class="col-lg-10 no-margin">
    <input type="date" required="required" id="dob" name="date_of_birth" style="width:100%; border:solid 1px #CCC; margin-bottom:10px;">
</div>
<div class="col-lg-2 no-margin">
    <label>Address*</label>
</div>
<div class="col-lg-10 no-margin">
    <textarea required="required" id="address" name="address" style="width:100%; min-height:80px; margin-bottom:6px;"></textarea>
</div>
<div class="col-lg-2 no-margin">
    <label>Zip/Postal*</label>
</div>
<div class="col-lg-4 no-margin">

    <input type="text" required="required" id="zip_postal" name="zip_postal">
</div>
<div class="col-lg-2 no-margin">
    <label>City*</label>
</div>
<div class="col-lg-4 no-margin">
    <input type="text" required="required" id="city" name="city">
</div>
<div class="col-lg-2 no-margin">
    <label>Nationality*</label>
</div>
<div class="col-lg-4 no-margin">
<select required="required" id="country" name="nationality" style="width:100%;">
<option selected="selected" value="000"> Select </option>
<option value="1">UAE</option>
<option value="2">Afghanistan</option>
<option value="3">Albania</option>
<option value="4">Algeria</option>
<option value="5">American Samoa</option>
<option value="6">Andorra</option>
<option value="7">Angola</option>
<option value="8">Anguilla </option>
<option value="9">Antigua</option>
<option value="10">Argentina</option>
<option value="11">Armenia</option>
<option value="12">Aruba</option>
<option value="13">Australia</option>
<option value="14">Austria</option>
<option value="15">Azerbaijan</option>
<option value="16">Bahamas</option>
<option value="17">Bahrain</option>
<option value="18">Bangaldesh</option>
<option value="19">Barbados</option>
<option value="20">Belarus</option>
<option value="21">Belgium</option>
<option value="22">Belize</option>
<option value="23">Benin</option>
<option value="24">Bermuda</option>
<option value="25">Bhutan</option>
<option value="26">Bolivia</option>
<option value="27">Bonaire</option>
<option value="28">Bosnia &amp; Hertzegovina</option>
<option value="29">Botswana</option>
<option value="30">Brazil</option>
<option value="31">Brunei</option>
<option value="32">Bulgaria</option>
<option value="33">Burkino Faso</option>
<option value="34">Burma (Myanmar)</option>
<option value="35">Burundi</option>
<option value="36">Cambodia</option>
<option value="37">Cameroon</option>
<option value="38">Canada</option>
<option value="39">Canary Islands, The</option>
<option value="40">Cape Verde</option>
<option value="41">Cayman Islands</option>
<option value="42">Chad</option>
<option value="43">Chile</option>
<option value="44">China</option>
<option value="45">Christmas Islands</option>
<option value="46">Cocos Islands</option>
<option value="47">Colombia</option>
<option value="48">Comoros</option>
<option value="49">Congo</option>
<option value="50">Congo, Republic of</option>
<option value="51">Cook Islands</option>
<option value="52">Costa Rica</option>
<option value="53">Croatia</option>
<option value="54">Cuba</option>
<option value="55">Curacao</option>
<option value="56">Cyprus</option>
<option value="57">Czech Republic, The</option>
<option value="58">Denmark</option>
<option value="59">Djibouti</option>
<option value="60">Dominica</option>
<option value="61">Dominican Republic</option>
<option value="62">Ecuador</option>
<option value="63">Egypt</option>
<option value="64">El Salvador</option>
<option value="65">Equatorial Guinea</option>
<option value="66">Eritrea</option>
<option value="67">Estonia</option>
<option value="68">Ethiopia</option>
<option value="69">Falkland Islands</option>
<option value="70">Faroe Islands</option>
<option value="71">Fiji Islands</option>
<option value="72">Finland</option>
<option value="73">France</option>
<option value="74">French Guiana</option>
<option value="75">Gabon</option>
<option value="76">Gambia</option>
<option value="77">Georgia</option>
<option value="78">Germany</option>
<option value="79">Ghana</option>
<option value="80">Gibralter</option>
<option value="81">Greece</option>
<option value="82">Greenland</option>
<option value="83">Greneda</option>
<option value="84">Guadeloupe</option>
<option value="85">Guam</option>
<option value="86">Guatemala</option>
<option value="87">Guernsey</option>
<option value="88">Guinea Bissau</option>
<option value="89">Guinea Republic</option>
<option value="90">Guyana</option>
<option value="91">Haiti</option>
<option value="92">Honduras Republic</option>
<option value="93">Hong Kong</option>
<option value="94">Hungary</option>
<option value="95">Iceland</option>
<option value="96">India</option>
<option value="97">Indonesia</option>
<option value="98">Iran</option>
<option value="99">Iraq</option>
<option value="100">Ireland, Republic of</option>
<option value="101">Italy</option>
<option value="102">Ivory Coast</option>
<option value="103">Jamaica</option>
<option value="104">Japan</option>
<option value="105">Jersey</option>
<option value="106">Jordan</option>
<option value="107">Kazakhstan</option>
<option value="108">Kenya</option>
<option value="109">Kiribati, Republic of</option>
<option value="110">Korea, South</option>
<option value="111">Korea, North</option>
<option value="112">Kuwait</option>
<option value="113">Kyrgystan</option>
<option value="114">Laos</option>
<option value="115">Latvia</option>
<option value="116">Lebanon</option>
<option value="117">Lesotho</option>
<option value="118">Liberia</option>
<option value="119">Libya</option>
<option value="120">Liechtenstein</option>
<option value="121">Lithuania</option>
<option value="122">Luxemborg</option>
<option value="123">Macau</option>
<option value="124">Macedonia</option>
<option value="125">Madagascar</option>
<option value="126">Malawi</option>
<option value="127">Malaysia</option>
<option value="128">Maldives</option>
<option value="129">Mali</option>
<option value="130">Malta</option>
<option value="131">Marshall Islands</option>
<option value="132">Martinique</option>
<option value="133">Mauritania</option>
<option value="134">Mauritius</option>
<option value="135">Mexico</option>
<option value="136">Moldova, Republic of</option>
<option value="137">Monaco</option>
<option value="138">Mongolia</option>
<option value="139">Montserrat</option>
<option value="140">Morocco</option>
<option value="141">Mozambique</option>
<option value="142">Namibia</option>
<option value="143">Naura, Republic of</option>
<option value="144">Nepal</option>
<option value="145">Netherlands, Antilles</option>
<option value="146">Netherlands, The</option>
<option value="147">Nevis</option>
<option value="148">New Caledonia</option>
<option value="149">New Zealand</option>
<option value="150">Nicaragua</option>
<option value="151">Niger</option>
<option value="152">Nigeria</option>
<option value="153">Niue</option>
<option value="154">Norfolk Island</option>
<option value="155">Norway</option>
<option value="156">Oman</option>
<option value="157">Pakistan</option>
<option value="158">Panama</option>
<option value="159">Papua New Guinea</option>
<option value="160">Paraguay</option>
<option value="161">Peru</option>
<option value="162">Philippines</option>
<option value="163">Poland</option>
<option value="164">Portugal</option>
<option value="165">Puerto Rico</option>
<option value="166">Qatar</option>
<option value="167">Reunion, Island of</option>
<option value="168">Romania</option>
<option value="169">Russian Federation</option>
<option value="170">Rwanda</option>
<option value="171">Saipan</option>
<option value="172">Sao Tome and Principe</option>
<option value="173">Saudi Arabia</option>
<option value="174">Senegal</option>
<option value="175">Seychelles</option>
<option value="176">Sierra Leone</option>
<option value="177">Singapore</option>
<option value="178">Slovakia</option>
<option value="179">Slovenia</option>
<option value="180">Solomon Islands</option>
<option value="181">Somalia</option>
<option value="182">South Africa</option>
<option value="183">Spain</option>
<option value="184">Sri Lanka</option>
<option value="185">St. Barthelemy</option>
<option value="186">St. Eustatius</option>
<option value="187">St. Kitts</option>
<option value="188">St. Lucia</option>
<option value="189">St. Maarten</option>
<option value="190">St. Vincent</option>
<option value="191">Sudan</option>
<option value="192">Suriname</option>
<option value="193">Swaziland</option>
<option value="194">Sweden</option>
<option value="195">Switzerland</option>
<option value="196">Syria</option>
<option value="197">Tahiti</option>
<option value="198">Taiwan</option>
<option value="199">Tajikistan</option>
<option value="200">Tanzania</option>
<option value="201">Thailand</option>
<option value="202">Togo</option>
<option value="203">Tonga</option>
<option value="204">Trinidad and Tobago</option>
<option value="205">Turkey</option>
<option value="206">Turks and Caicos Islands</option>
<option value="207">Tunisia</option>
<option value="208">Turkmenistan</option>
<option value="209">Tuvalu</option>
<option value="210">Uganda</option>
<option value="211">Ukraine</option>
<option value="212">United Kingdom</option>
<option value="213">United States</option>
<option value="214">Uruguay</option>
<option value="215">Uzbekistan</option>
<option value="216">Vanuatu</option>
<option value="217">Venezuela</option>
<option value="218">Vietnam</option>
<option value="219">Virgin Islands</option>
<option value="220">Western Samoa</option>
<option value="221">Wallis Islands</option>
<option value="222">Yemen</option>
<option value="223">Yugoslavia</option>
<option value="224">Zambia</option>
<option value="225">Zimbabwe</option>
<option value="226">Palestine</option>
</select>
</div>
<div style="padding-left:14px; " class="col-lg-3 no-padding no-margin">
    <label>Country of Residence*</label>
</div>
<div class="col-lg-3 no-padding">
<select onchange="getPhoneCode(this.value)" required="required" id="residing_country" name="residing_country" style="width:116%; height:30px; margin-left:-46px;">
<option selected="selected" value="000">-Select-</option>
<option value="1">UAE</option>
<option value="2">Afghanistan</option>
<option value="3">Albania</option>
<option value="4">Algeria</option>
<option value="5">American Samoa</option>
<option value="6">Andorra</option>
<option value="7">Angola</option>
<option value="8">Anguilla </option>
<option value="9">Antigua</option>
<option value="10">Argentina</option>
<option value="11">Armenia</option>
<option value="12">Aruba</option>
<option value="13">Australia</option>
<option value="14">Austria</option>
<option value="15">Azerbaijan</option>
<option value="16">Bahamas</option>
<option value="17">Bahrain</option>
<option value="18">Bangaldesh</option>
<option value="19">Barbados</option>
<option value="20">Belarus</option>
<option value="21">Belgium</option>
<option value="22">Belize</option>
<option value="23">Benin</option>
<option value="24">Bermuda</option>
<option value="25">Bhutan</option>
<option value="26">Bolivia</option>
<option value="27">Bonaire</option>
<option value="28">Bosnia &amp; Hertzegovina</option>
<option value="29">Botswana</option>
<option value="30">Brazil</option>
<option value="31">Brunei</option>
<option value="32">Bulgaria</option>
<option value="33">Burkino Faso</option>
<option value="34">Burma (Myanmar)</option>
<option value="35">Burundi</option>
<option value="36">Cambodia</option>
<option value="37">Cameroon</option>
<option value="38">Canada</option>
<option value="39">Canary Islands, The</option>
<option value="40">Cape Verde</option>
<option value="41">Cayman Islands</option>
<option value="42">Chad</option>
<option value="43">Chile</option>
<option value="44">China</option>
<option value="45">Christmas Islands</option>
<option value="46">Cocos Islands</option>
<option value="47">Colombia</option>
<option value="48">Comoros</option>
<option value="49">Congo</option>
<option value="50">Congo, Republic of</option>
<option value="51">Cook Islands</option>
<option value="52">Costa Rica</option>
<option value="53">Croatia</option>
<option value="54">Cuba</option>
<option value="55">Curacao</option>
<option value="56">Cyprus</option>
<option value="57">Czech Republic, The</option>
<option value="58">Denmark</option>
<option value="59">Djibouti</option>
<option value="60">Dominica</option>
<option value="61">Dominican Republic</option>
<option value="62">Ecuador</option>
<option value="63">Egypt</option>
<option value="64">El Salvador</option>
<option value="65">Equatorial Guinea</option>
<option value="66">Eritrea</option>
<option value="67">Estonia</option>
<option value="68">Ethiopia</option>
<option value="69">Falkland Islands</option>
<option value="70">Faroe Islands</option>
<option value="71">Fiji Islands</option>
<option value="72">Finland</option>
<option value="73">France</option>
<option value="74">French Guiana</option>
<option value="75">Gabon</option>
<option value="76">Gambia</option>
<option value="77">Georgia</option>
<option value="78">Germany</option>
<option value="79">Ghana</option>
<option value="80">Gibralter</option>
<option value="81">Greece</option>
<option value="82">Greenland</option>
<option value="83">Greneda</option>
<option value="84">Guadeloupe</option>
<option value="85">Guam</option>
<option value="86">Guatemala</option>
<option value="87">Guernsey</option>
<option value="88">Guinea Bissau</option>
<option value="89">Guinea Republic</option>
<option value="90">Guyana</option>
<option value="91">Haiti</option>
<option value="92">Honduras Republic</option>
<option value="93">Hong Kong</option>
<option value="94">Hungary</option>
<option value="95">Iceland</option>
<option value="96">India</option>
<option value="97">Indonesia</option>
<option value="98">Iran</option>
<option value="99">Iraq</option>
<option value="100">Ireland, Republic of</option>
<option value="101">Italy</option>
<option value="102">Ivory Coast</option>
<option value="103">Jamaica</option>
<option value="104">Japan</option>
<option value="105">Jersey</option>
<option value="106">Jordan</option>
<option value="107">Kazakhstan</option>
<option value="108">Kenya</option>
<option value="109">Kiribati, Republic of</option>
<option value="110">Korea, South</option>
<option value="111">Korea, North</option>
<option value="112">Kuwait</option>
<option value="113">Kyrgystan</option>
<option value="114">Laos</option>
<option value="115">Latvia</option>
<option value="116">Lebanon</option>
<option value="117">Lesotho</option>
<option value="118">Liberia</option>
<option value="119">Libya</option>
<option value="120">Liechtenstein</option>
<option value="121">Lithuania</option>
<option value="122">Luxemborg</option>
<option value="123">Macau</option>
<option value="124">Macedonia</option>
<option value="125">Madagascar</option>
<option value="126">Malawi</option>
<option value="127">Malaysia</option>
<option value="128">Maldives</option>
<option value="129">Mali</option>
<option value="130">Malta</option>
<option value="131">Marshall Islands</option>
<option value="132">Martinique</option>
<option value="133">Mauritania</option>
<option value="134">Mauritius</option>
<option value="135">Mexico</option>
<option value="136">Moldova, Republic of</option>
<option value="137">Monaco</option>
<option value="138">Mongolia</option>
<option value="139">Montserrat</option>
<option value="140">Morocco</option>
<option value="141">Mozambique</option>
<option value="142">Namibia</option>
<option value="143">Naura, Republic of</option>
<option value="144">Nepal</option>
<option value="145">Netherlands, Antilles</option>
<option value="146">Netherlands, The</option>
<option value="147">Nevis</option>
<option value="148">New Caledonia</option>
<option value="149">New Zealand</option>
<option value="150">Nicaragua</option>
<option value="151">Niger</option>
<option value="152">Nigeria</option>
<option value="153">Niue</option>
<option value="154">Norfolk Island</option>
<option value="155">Norway</option>
<option value="156">Oman</option>
<option value="157">Pakistan</option>
<option value="158">Panama</option>
<option value="159">Papua New Guinea</option>
<option value="160">Paraguay</option>
<option value="161">Peru</option>
<option value="162">Philippines</option>
<option value="163">Poland</option>
<option value="164">Portugal</option>
<option value="165">Puerto Rico</option>
<option value="166">Qatar</option>
<option value="167">Reunion, Island of</option>
<option value="168">Romania</option>
<option value="169">Russian Federation</option>
<option value="170">Rwanda</option>
<option value="171">Saipan</option>
<option value="172">Sao Tome and Principe</option>
<option value="173">Saudi Arabia</option>
<option value="174">Senegal</option>
<option value="175">Seychelles</option>
<option value="176">Sierra Leone</option>
<option value="177">Singapore</option>
<option value="178">Slovakia</option>
<option value="179">Slovenia</option>
<option value="180">Solomon Islands</option>
<option value="181">Somalia</option>
<option value="182">South Africa</option>
<option value="183">Spain</option>
<option value="184">Sri Lanka</option>
<option value="185">St. Barthelemy</option>
<option value="186">St. Eustatius</option>
<option value="187">St. Kitts</option>
<option value="188">St. Lucia</option>
<option value="189">St. Maarten</option>
<option value="190">St. Vincent</option>
<option value="191">Sudan</option>
<option value="192">Suriname</option>
<option value="193">Swaziland</option>
<option value="194">Sweden</option>
<option value="195">Switzerland</option>
<option value="196">Syria</option>
<option value="197">Tahiti</option>
<option value="198">Taiwan</option>
<option value="199">Tajikistan</option>
<option value="200">Tanzania</option>
<option value="201">Thailand</option>
<option value="202">Togo</option>
<option value="203">Tonga</option>
<option value="204">Trinidad and Tobago</option>
<option value="205">Turkey</option>
<option value="206">Turks and Caicos Islands</option>
<option value="207">Tunisia</option>
<option value="208">Turkmenistan</option>
<option value="209">Tuvalu</option>
<option value="210">Uganda</option>
<option value="211">Ukraine</option>
<option value="212">United Kingdom</option>
<option value="213">United States</option>
<option value="214">Uruguay</option>
<option value="215">Uzbekistan</option>
<option value="216">Vanuatu</option>
<option value="217">Venezuela</option>
<option value="218">Vietnam</option>
<option value="219">Virgin Islands</option>
<option value="220">Western Samoa</option>
<option value="221">Wallis Islands</option>
<option value="222">Yemen</option>
<option value="223">Yugoslavia</option>
<option value="224">Zambia</option>
<option value="225">Zimbabwe</option>
<option value="226">Palestine</option>
</select>
</div>
<div class="col-lg-2 no-margin">
    <label>Telephone*</label>
</div>
<div class="col-lg-4 no-margin">
    <input type="text" required="required" id="telephone" name="telephone">
</div>
<div class="col-lg-2 no-margin">
    <label>Mobile*</label>
</div>
<div class="col-lg-4 no-margin">
    <input type="text" style="width:50px" id="phone_code" name="phone_code">
    &nbsp;
    <input type="text" style="width:159px;" required="required" id="mobile" name="mobile">
</div>
<div class="col-lg-2 no-margin">
    <label>Email*</label>
</div>
<div class="col-lg-4 no-margin">
    <input type="email" required="required" class="login_input" id="email" name="email">
    <div id="emailInfo"></div>
</div>
<div class="col-lg-2 no-margin">
    <label>Designation*</label>
</div>
<div class="col-lg-4 no-margin">
    <input type="text" id="designation" name="designation">
</div>
<div class="clearfix"></div>
<div class="col-lg-12 no-margin">
    <button name="btn_register" class="btn btn-primary btn-large pull-right" type="submit">Register</button>
</div>
</form>


</div>
<div class="col-md-4">
    <div class="right-nav">
        <div data-show-facepile="true" data-hide-cover="false" data-adapt-container-width="false" data-small-header="true" data-height="225" data-width="360" data-href="https://www.facebook.com/dealmiddleeast" style="margin-top:30px;" class="fb-page fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=false&amp;app_id=&amp;container_width=360&amp;height=225&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fdealmiddleeast&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;width=360"><span style="vertical-align: bottom; width: 360px; height: 154px;"><iframe width="360px" height="225px" frameborder="0" name="f3ecd38d53ca33e" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" style="border: medium none; visibility: visible; width: 360px; height: 154px;" src="https://www.facebook.com/v2.6/plugins/page.php?adapt_container_width=false&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FuN4_cXtJDGb.js%3Fversion%3D42%23cb%3Df3491265dd77f32%26domain%3Dwww.dealmiddleeastshow.com%26origin%3Dhttp%253A%252F%252Fwww.dealmiddleeastshow.com%252Ff1f30b1584d9b0c%26relation%3Dparent.parent&amp;container_width=360&amp;height=225&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fdealmiddleeast&amp;locale=en_GB&amp;sdk=joey&amp;show_facepile=true&amp;small_header=true&amp;width=360" class=""></iframe></span></div>

        <iframe frameborder="0" id="twitter-widget-0" scrolling="no" allowtransparency="true" allowfullscreen="true" class="twitter-tweet twitter-tweet-rendered" style="position: static; visibility: visible; display: block; width: 500px; height: 382.7px; padding: 0px; border: medium none; max-width: 100%; min-width: 220px; margin-top: 10px; margin-bottom: 10px;" data-tweet-id="723140091170803714" title="Twitter Tweet"></iframe>
        <script charset="utf-8" src="//platform.twitter.com/widgets.js" async=""></script>

        <iframe height="460" frameborder="0" class="instagram-media instagram-media-rendered" id="instagram-embed-0" src="https://www.instagram.com/p/BHOwsWPhKob/embed/captioned/?v=7" allowtransparency="true" data-instgrm-payload-id="instagram-media-payload-0" scrolling="no" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; margin: 1px; max-width: 658px; width: calc(100% - 2px); border-radius: 4px; box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.5), 0px 1px 10px 0px rgba(0, 0, 0, 0.15); display: block; padding: 0px;"></iframe>
        <script src="//platform.instagram.com/en_US/embeds.js" defer="" async=""></script><br>

        <iframe width="100%" height="250" frameborder="0" allowfullscreen="" src="https://www.youtube.com/embed/WTc4vX0FHkw"></iframe>
    </div>
</div>
<!-- End Touch Slider -->

</div>

</div>

</div>





<?php include "footer.php";?>
