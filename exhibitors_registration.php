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
                        <!--<li class="why_exhibit"><a href="img/DEAL 2017 - Sponsorship & Branding.pdf" target="_blank">
                            <strong>Sponsorship Opportunities </strong> in Deal 2016</a>
                        </li>
                        <li class="amusement"><a href="downloads/aofs-flyer-2016.pdf" target="_blank">Download
                            <strong>Amusement Operator &amp; Franchise Showcase </strong> Brochure</a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                <div class="col-md-8">
                <!-- Classic Heading -->
                <h4 class="classic-title"><span>EXHIBITOR REGISTRATION</span></h4>

                <form onsubmit="return checkMyForm();" method="post" name="myform" action="register_action.php" class="sky-form" id="exhi-reg">
                <header>About DEAL</header>
                <section class="col col-lg-6">
                    <label class="select"><!--Your Functional Area-->
                        <select class="valid" required="required" id="p_functional_area" name="p_functional_area">
                            <option disabled="" selected="" value="">Select Level of interest</option>
                            <option value="Ready to book a stand"> Ready to book a stand </option>
                            <option value="Looking for information"> Looking for information </option>
                        </select>
                        <i></i>
                    </label>
                </section>
                <section class="col col-lg-6">
                    <label class="select"><!--Your Job Position-->
                        <select required="required" id="p_job_position" name="p_job_position">
                            <option disabled="" selected="" value="">Are you the person making the decision about exhibiting?</option>
                            <option value="Yes">Yes </option>
                            <option value="No"> No </option>
                        </select>
                        <i></i>
                    </label>
                </section>
                <section class="col col-lg-6">
                    <label disabled="" selected="" class="select"><!--Annual spending for related tour activities-->
                        <select required="required" id="p_annual_spend" name="p_annual_spend">
                            <option disabled="" selected="" value="">How did you hear about  DEAL?</option>
                            <option value="Email">Email </option>
                            <option value="Web Banner"> Web Banner </option>
                            <option value="Post Mail"> Post Mail </option>
                            <option value="Newspaper"> Newspaper</option>
                            <option value="Industry Magazine"> Industry Magazine </option>
                            <option value="SMS"> SMS </option>
                            <option value="Others"> Others </option>
                        </select>
                        <i></i>
                    </label>
                </section>
                <section class="col col-lg-6">
                    <label class="select"><!--How did you hear about SGI-->
                        <select required="required" id="p_hear_about" name="p_hear_about">
                            <option disabled="" selected="" value="">Your Functional AREA?</option>
                            <option value="Manufacturer">Manufacturer </option>
                            <option value="Distributor"> Distributor </option>
                            <option value="Consultant"> Consultant </option>
                            <option value="Research"> Research </option>
                            <option value="Student"> Student </option>
                            <option value="Ad-Agency"> Ad-Agency </option>
                            <option value="Government Official"> Government Official </option>
                            <option value="Media"> Media </option>
                            <option value="Others"> Others </option>
                        </select>
                        <i></i>
                    </label>
                </section>
                <div class="clearfix"></div>

                <header>Company Details</header>

                <section class="col col-lg-2">
                    <label class="label">First Name</label>
                </section>
                <section class="col col-lg-4">
                    <label class="input"> <i class="icon-append icon-user"></i>
                        <input type="text" required="required" id="fname" name="fname">
                    </label>
                </section>

                <section class="col col-lg-2">
                    <label class="label">Last Name</label>
                </section>
                <section class="col col-lg-4">
                    <label class="input"> <i class="icon-append icon-user"></i>
                        <input type="text" required="required" id="lname" name="lname">
                    </label>
                </section>

                <section class="col col-lg-2">
                    <label class="label">Email</label>
                </section>
                <section class="col col-lg-4">
                    <label class="input"> <i class="icon-append icon-user"></i>
                        <input type="text" required="required" id="c_mail" name="c_mail">
                    </label>
                    <div id="ExEmailInfo"></div>
                </section>
                <section class="col col-lg-2">
                    <label class="label">Website</label>
                </section>
                <section class="col col-lg-4">
                    <label class="input"> <i class="icon-append icon-user"></i>
                        <input type="text" required="required" id="c_web" name="c_web">
                    </label>
                    <div id="ExEmailInfo"></div>
                </section>
                <section class="col col-lg-2">
                    <label class="label">Job Title:</label>
                </section>
                <section class="col col-lg-4">
                    <label class="input"><i class="icon-append icon-tag"></i>
                        <input type="text" required="required" id="job_title" name="job_title">
                    </label>
                </section>

                <section class="col col-lg-2">
                    <label class="label">Company</label>
                </section>
                <section class="col col-lg-4">
                    <label class="input"> <i class="icon-append icon-tag"></i>
                        <input type="text" required="required" id="company" name="company">
                    </label>
                </section>

                <section class="col col-lg-2">
                    <label class="label">Country</label>
                </section>
                <section class="col col-lg-4">
                <label class="select">
                <select required="required" id="c_country" name="c_country">
                <option value=""> Select </option>
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
                </label>
                </section>

                <section class="col col-lg-2">
                    <label class="label">Phone:</label>
                </section>
                <section class="col col-lg-4">
                    <label class="input"> <i class="icon-append icon-user"></i>
                        <input type="text" required="required" id="c_tele" name="c_tele">
                    </label>
                </section>
                <section class="col col-lg-2">
                    <label class="label">Mobile:</label>
                </section>
                <section class="col col-lg-4">
                    <label class="input"> <i class="icon-append icon-user"></i>
                        <input type="text" required="required" id="c_mobile" name="c_mobile">
                    </label>
                </section>

                <section class="col col-lg-8">
                </section>
                <section class="col col-lg-4">
                    <button onclick="return valExRegOneNew();" id="btn_ex_register1" name="btn_ex_register" class="btn btn-primary btn-large pull-right" type="submit">Submit</button>
                </section>

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