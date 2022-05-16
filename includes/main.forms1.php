<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/main.includes.php';;
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<?php
myheader();
?>


</div>
</div>
<div class="middle-section">
  <div class="container-fluid">
    <p>
    <form action="sie.main.registration.php" method="GET">
      <div class="form-group row">
        <label for="university_name" class="col-4 col-form-label">Choose University</label>
        <div class="col-8">
          <select id="university_name" name="university_name" class="custom-select" required="required">
            <option value="unknown">Choose University</option>
            <option value="1">Jimma University</option>
            <option value="2">Ethiopian Civil Service University</option>
            <option value="3">Ethiopian Federal Police College</option>
            <option value="4">Ethiopian Institute of Architecture, Building Construction and City Development</option>
            <option value="5">Ethiopian Management Institute</option>
            <option value="6">Gambella Teachers and Health Science College</option>
            <option value="7">Gewane Agricultural College</option>
            <option value="8">Gondar College of Medical Sciences</option>
            <option value="9">Jijiga University</option>
            <option value="10">Kotebe Metropolitan University</option>
            <option value="11">Mekelle University</option>
            <option value="12">Mettu University</option>
            <option value="13">Mizan Tepi University</option>
            <option value="14">Wollega University</option>
            <option value="15">Oromia State University</option>
            <option value="16">Adwa Pan-African University</option>
            <option value="17">Bahir Dar University</option>
            <option value="18">Samara University</option>
            <option value="19">Wolaita Sodo University</option>
            <option value="20">Wolkite University</option>
            <option value="21">Hawassa University</option>
            <option value="22">Wachemo University</option>
            <option value="23">Woldia University</option>
            <option value="24">Wollo University</option>
            <option value="25">Adama Science & Technology University</option>
            <option value="26">Adigrat University</option>
            <option value="27">Aksum University</option>
            <option value="28">Ambo University</option>
            <option value="29">Arba Minch University</option>
            <option value="30">Assosa University</option>
            <option value="31">Bule Hora University</option>
            <option value="32">Debre Berhan University</option>
            <option value="33">Debre Markos University </option>
            <option value="34">Debre Tabor University</option>
            <option value="35">Dilla University</option>
            <option value="36">Dire Dawa University</option>
            <option value="37">Haramaya University</option>
            <option value="38">Madda Walabu University</option>
            <option value="39">Addis Ababa University</option>

          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="program_level" class="col-4 col-form-label">Choose Program level</label>
        <div class="col-8">
          <select id="program_level" name="program_level" required="required" class="custom-select">
            <option value="unknown">Choose Program</option>
            <option value="1">Bachelor of Architecture (B.Arch.)</option>
            <option value="2">Bachelor of Arts (B.A.)</option>
            <option value="3">Bachelor of Business (B.B.)</option>
            <option value="4">Bachelor of Business Administration (B.B.A.)</option>
            <option value="5">Bachelor of Science in Business (B.S.B.)</option>
            <option value="6">Bachelor of Canon Law (B.C.L.)</option>
            <option value="7">Bachelor of Computer Science (B.C.S.)</option>
            <option value="8">Bachelor of Science in Computer Science (B.S.C.S.)</option>
            <option value="9">Bachelor of Criminal Justice (B.C.J.)</option>
            <option value="10">Bachelor of Science in Criminal Justice (B.S.C.J.)</option>
            <option value="11">Bachelor of Divinity (B.D.)</option>
            <option value="12">Bachelor of Education (B.Ed.)</option>
            <option value="13">Bachelor of Science in Education (B.S.Ed.)</option>
            <option value="14">Bachelor of Wireless Engineering (B.W.E.)</option>
            <option value="15">Bachelor of Engineering (B.E./B.Eng.)</option>
            <option value="16">Bachelor of Science in Engineering (B.S.E./B.S.EN.)</option>
            <option value="17">Bachelor of Science in Aerospace Engineering (B.S.A.E.)</option>
            <option value="18">Bachelor of Science in Agricultural Engineering (B.S.A.E.)</option>
            <option value="19">Bachelor of Science in Biological Systems (B.S.B.S.)</option>
            <option value="20">Bachelor of Science in Biosystems and Agricultural Engineering (B.S.B.A.E.)</option>
            <option value="21">Bachelor of Science in Biological Engineering (B.S.B.E.)</option>
            <option value="22">Bachelor of Biomedical Engineering (B.B.m.E.)</option>
            <option value="23">Bachelor of Science in Biomedical Engineering (B.S.B.E./B.S.B.M.E.)</option>
            <option value="24">Bachelor of Science in Chemical Engineering (B.S.Ch.E.)</option>
            <option value="25">Bachelor of Science in Chemical and Biomolecular Engineering (B.S.Ch.B.E.)</option>
            <option value="26">Bachelor of Science in Chemical and Materials Engineering (B.S.C.M.E.)</option>
            <option value="27">Bachelor of Civil Engineering (B.C.E.)</option>
            <option value="28">Bachelor of Science in Civil Engineering (B.S.C.E.)</option>
            <option value="29">Bachelor of Science in Civil and Infrastructure Engineering (B.S.-C.I.E.)</option>
            <option value="30">Bachelor of Computer Engineering (B.Comp.E.)</option>
            <option value="31">Bachelor of Science in Computer Engineering (B.S.C.E./B.S.Cmp.E.)</option>
            <option value="32">Bachelor of Science in Computer Science and Engineering (B.S.C.S.E.)</option>
            <option value="33">Bachelor of Science in Electrical and Computer Engineering (B.S.E.C.E.)</option>
            <option value="34">Bachelor of Electrical Engineering (B.E.E.)</option>
            <option value="35">Bachelor of Science in Electrical Engineering (B.S.E.E.)</option>
            <option value="36">Bachelor of Science in Engineering Management (B.S.E.Mgt.)</option>
            <option value="37">Bachelor of Science in Environmental Engineering (B.S.En.E./B.S.Env.E.)</option>
            <option value="38">Bachelor of Fiber Engineering (B.F.E.)</option>
            <option value="39">Bachelor of Science in Industrial Engineering (B.S.I.E.)</option>
            <option value="40">Bachelor of Science in Manufacturing Engineering (B.S.Mfg.E.)</option>
            <option value="41">Bachelor of Science in Manufacturing Systems Engineering (B.S.M.S.E.)</option>
            <option value="42">Bachelor of Science in Materials Science and Engineering (B.S.M.S.E.)</option>
            <option value="43">Bachelor of Science in Materials Engineering (B.S.MA.E.)</option>
            <option value="44">Bachelor of Mechanical Engineering (B.M.E.)</option>
            <option value="45">Bachelor of Science in Mechanical Engineering (B.S.M.E.)</option>
            <option value="46">Bachelor of Science in Metallurgical Engineering (B.S.Mt.E.)</option>
            <option value="47">Bachelor of Science in Mining Engineering (B.S.MI.E.)</option>
            <option value="48">Bachelor of Science in Systems (B.S.-SYST.)</option>
            <option value="49">Bachelor of Software Engineering (B.S.W.E.)</option>
            <option value="50">Bachelor of Science in Software Engineering (B.S.S.E.)</option>
            <option value="51">Bachelor of Systems Engineering (B.S.E.)</option>
            <option value="52">Bachelor of Science in Systems Engineering (B.S.S.E.)</option>
            <option value="53">Bachelor of Engineering Technology (B.E.T.)</option>
            <option value="54">Bachelor of Science in Engineering Technology (B.S.E.T.)</option>
            <option value="55">Bachelor of Science in Civil Engineering Technology (B.S.C.E.T./B.S.Civ.E.T.)</option>
            <option value="56">Bachelor of Science in Computer Engineering Technology (B.S.C.E.T.)</option>
            <option value="57">Bachelor of Science in Construction Engineering Technology (B.S.Con.E.T.)</option>
            <option value="58">Bachelor of Science in Drafting Design Technology (B.S.D.D.T.)</option>
            <option value="59">Bachelor of Science in Electrical/Electronics Technology (B.S.E.T.)</option>
            <option value="60">Bachelor of Science in Electrical Engineering Technology (B.S.E.E.T.)</option>
            <option value="61">Bachelor of Science in Electro-Mechanical Engineering Technology (B.S.E.M.E.T.)</option>
            <option value="62">Bachelor of Science in Mechanical Engineering Technology (B.S.M.E.T.)</option>
            <option value="63">Bachelor of Fine Arts (B.F.A.)</option>
            <option value="64">Bachelor of Forestry (B.F.)</option>
            <option value="65">Bachelor of Science in Forest Research (B.S.For.Res.)</option>
            <option value="66">Bachelor of Hebrew Letters (B.H.L.)</option>
            <option value="67">Bachelor of Journalism (B.J.)</option>
            <option value="68">Bachelor of Laws (LL.B.)</option>
            <option value="69">Bachelor of Liberal Studies (B.L.S.)</option>
            <option value="70">Bachelor of Literature (B.Lit.)</option>
            <option value="71">Bachelor of Marine Science (B.M.S.)</option>
            <option value="72">Bachelor of Music (B.M.)</option>
            <option value="73">Bachelor of Nursing (B.N.)</option>
            <option value="74">Bachelor of Science in Nursing (B.S.N.)</option>
            <option value="75">Bachelor of Pharmacy (B.Pharm.)</option>
            <option value="76">Bachelor of Philosophy (B.Phil.)</option>
            <option value="77">Bachelor of Religious Education (B.R.E.)</option>
            <option value="78">Bachelor of Science (B.S.)</option>
            <option value="79">Bachelor of Science in Chemistry (B.S.Ch.)</option>
            <option value="80">Bachelor of Technology (B.T./B.Tech.)</option>
            <option value="81">Master of Accountancy</option>
            <option value="82">Master of Advanced Study</option>
            <option value="83">Masters of Agricultural Economics</option>
            <option value="84">Master of Applied Finance</option>
            <option value="85">Master of Applied Science</option>
            <option value="86">Master of Architecture</option>
            <option value="87">Master of Arts</option>
            <option value="88">Master of Arts in Liberal Studies</option>
            <option value="89">Master of Arts in Special Education</option>
            <option value="90">Master of Arts in Teaching</option>
            <option value="91">Master of Bioethics</option>
            <option value="92">Master of Business Administration</option>
            <option value="93">Master of Business, Entrepreneurship and Technology</option>
            <option value="94">Master of Business</option>
            <option value="95">Master of Business Engineering</option>
            <option value="96">Master of Business Informatics</option>
            <option value="97">Master of Chemistry</option>
            <option value="98">Master of Christian Education</option>
            <option value="99">Master of City Planning</option>
            <option value="100">Master of Commerce</option>
            <option value="101">Master of Computational Finance</option>
            <option value="102">Master of Computer Applications</option>
            <option value="103">Master of Counselling</option>
            <option value="104">Master of Criminal Justice</option>
            <option value="105">Master of Creative Technologies</option>
            <option value="106">Master of Data Science</option>
            <option value="107">Master of Defence Studies</option>
            <option value="108">Master of Design</option>
            <option value="109">Masters of Development Economics</option>
            <option value="110">Master of Divinity</option>
            <option value="111">Master of Economics</option>
            <option value="112">Master of Education</option>
            <option value="113">Master of Engineering</option>
            <option value="114">Master of Engineering Management</option>
            <option value="115">Master of Enterprise</option>
            <option value="116">Master of European Law</option>
            <option value="117">Master of Finance</option>
            <option value="118">Master of Financial Economics</option>
            <option value="119">Master of Financial Engineering</option>
            <option value="120">Master of Financial Mathematics</option>
            <option value="121">Master of Fine Arts</option>
            <option value="122">Master of Health Administration</option>
            <option value="123">Master of Health Economics</option>
            <option value="124">Master of Health Science</option>
            <option value="125">Master of Humanities</option>
            <option value="126">Master of Industrial and Labor Relations</option>
            <option value="127">Master of International Affairs</option>
            <option value="128">Master of International Business</option>
            <option value="129">Masters of International Economics</option>
            <option value="130">Master of International Studies</option>
            <option value="131">Master of Information and Cybersecurity</option>
            <option value="132">Master of Information and Data Science</option>
            <option value="133">Master of Information Management</option>
            <option value="134">Master of Information System Management</option>
            <option value="135">Master of Journalism</option>
            <option value="136">Master of Jurisprudence</option>
            <option value="137">Master of Laws</option>
            <option value="138">Master of Mass Communication</option>
            <option value="139">Master of Studies in Law</option>
            <option value="140">Master of Landscape Architecture</option>
            <option value="141">Master of Letters</option>
            <option value="142">Master of Liberal Arts</option>
            <option value="143">Master of Library and Information Science[1]</option>
            <option value="144">Master of Management</option>
            <option value="145">Master of Management of Innovation</option>
            <option value="146">Master of Mathematical Finance</option>
            <option value="147">Master of Mathematics</option>
            <option value="148">Master of Medical Science</option>
            <option value="149">Master of Medicine</option>
            <option value="150">Masters of Military Art and Science</option>
            <option value="151">Master of Military Operational Art and Science</option>
            <option value="152">Master of Ministry</option>
            <option value="153">Master of Music</option>
            <option value="154">Master of Occupational Behaviour and Development</option>
            <option value="155">Master of Occupational Therapy</option>
            <option value="156">Master of Pharmacy</option>
            <option value="157">Master of Philosophy</option>
            <option value="158">Master of Physician Assistant Studies</option>
            <option value="159">Master of Physics</option>
            <option value="160">Master of Political Science</option>
            <option value="161">Master of Professional Studies</option>
            <option value="162">Master of Psychology</option>
            <option value="163">Master of Public Administration</option>
            <option value="164">Master of Public Affairs</option>
            <option value="165">Master of Public Health</option>
            <option value="166">Master of Public Management</option>
            <option value="167">Master of Public Policy</option>
            <option value="168">Master of Public Relations</option>
            <option value="169">Master of Public Service</option>
            <option value="170">Master of Quantitative Finance</option>
            <option value="171">Master of Rabbinic Studies</option>
            <option value="172">Master of Real Estate Development</option>
            <option value="173">Master of Religious Education</option>
            <option value="174">Master of Research</option>
            <option value="175">Master of Sacred Music</option>
            <option value="176">Master of Sacred Theology</option>
            <option value="177">Master of Science</option>
            <option value="178">Master of Science in Administration</option>
            <option value="179">Master of Science in Archaeology</option>
            <option value="180">Master of Science in Biblical Archaeology</option>
            <option value="181">Master of Science in Bioinformatics</option>
            <option value="182">Master of Science in Computer Science</option>
            <option value="183">Master of Science in Counselling</option>
            <option value="184">Master of Science in Cyber Security</option>
            <option value="185">Master of Science in Engineering</option>
            <option value="186">Master of Science in Development Administration</option>
            <option value="187">Master of Science in Finance</option>
            <option value="188">Master of Science in Health Informatics</option>
            <option value="189">Master of Science in Human Resource Development</option>
            <option value="190">Master of Science in Information Assurance</option>
            <option value="191">Master of Science in Information Systems</option>
            <option value="192">Master of Science in Information Technology</option>
            <option value="193">Master of Science in Leadership</option>
            <option value="194">Master of Science in Management</option>
            <option value="195">Master of Science in Nursing</option>
            <option value="196">Master of Science in Project Management</option>
            <option value="197">Master of Science in Supply Chain Management</option>
            <option value="198">Master of Science in Teaching</option>
            <option value="199">Master of Science in Taxation</option>
            <option value="200">Master of Social Science</option>
            <option value="201">Master of Social Work</option>
            <option value="202">Master of Strategic Studies</option>
            <option value="203">Master of Studies</option>
            <option value="204">Master of Surgery</option>
            <option value="205">Master of Talmudic Law</option>
            <option value="206">Master of Taxation</option>
            <option value="207">Master of Theological Studies</option>
            <option value="208">Master of Technology</option>
            <option value="209">Master of Theology</option>
            <option value="210">Master of Urban Planning</option>
            <option value="211">Master of Veterinary Science</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="credit" class="col-4 col-form-label">Credit hours</label>
        <div class="col-8">
          <input id="credit" name="credit" placeholder="Write credit hours of the program" type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label for="education_place" class="col-4 col-form-label">Education Place</label>
        <div class="col-8">
          <select id="education_place" name="education_place" required="required" class="custom-select">
            <option value="unknown">Choose Education place</option>
            <option value="compus">On-compus only</option>
            <option value="distanst">Distance only</option>
            <option value="mixed">On-compus and distance</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="instruction_time" class="col-4 col-form-label">Instruction time</label>
        <div class="col-8">
          <select id="instruction_time" name="instruction_time" class="custom-select" required="required">
            <option value="unknown">Choose instruction time</option>
            <option value="Day">Day</option>
            <option value="Evening">Evening</option>
            <option value="Weekend">Weekend</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="language_of_instruction" class="col-4 col-form-label">Language of Instruction</label>
        <div class="col-8">
          <select id="language_of_instruction" name="language_of_instruction" class="custom-select" required="required">
            <option value="rabbit">Choose Language of Instruction</option>
            <option value="en">English</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
    </p>
  </div>
</div>
</body>
<?php
myfooter();
?>