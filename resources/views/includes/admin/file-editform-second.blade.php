    <div class="form-floating mb-3">
        <input type="text" class="form-control border-bottom border-0" id="floatingInputKeywords" value="{{ $id->title }}" name="title" placeholder="Keywords">
        <label for="floatingInput">File Name</label>
    </div>
    

    <div class="form-floating mb-3">
        <input type="text" class="form-control border-bottom border-0" id="floatingInput" name="description" value="{{ $id->description }}" placeholder="Description">
        <label for="floatingInput">Description</label>
    </div>

    <div class="form-floating mb-3">
        <select name="category" class="form-select border-bottom border-0" id="floatingSelect" aria-label="Catergory">
            <option value="{{ $id->category }}">{{ $id->category }}</option>
            <option value="Abstract">Abstract</option>
            <option value="Animals/Wildlife">Animals/Wildlife</option>
            <option value="Arts">Arts</option>
            <option value="Backgrounds/Textures">Backgrounds/Textures</option>
            <option value="Beauty/Fashion">Beauty/Fashion</option>
            <option value="Buildings/Landmarks">Buildings/Landmarks</option>
            <option value="Business/Finance">Business/Finance</option>
            <option value="Celebrities">Celebrities</option>
            <option value="Education">Education</option>
            <option value="Food&drink">Food and drink</option>
            <option value="Healthcare/Medical">Healthcare/Medical</option>
            <option value="Holidays">Holidays</option>
            <option value="Industrial">Industrial</option>
            <option value="Interiors">Interiors</option>
            <option value="Miscellaneous">Miscellaneous</option>
            <option value="Nature">Nature</option>
            <option value="Objects">Objects</option>
            <option value="Parks/Outdoor">Parks/Outdoor</option>
            <option value="People">People</option>
            <option value="Religion">Religion</option>
            <option value="Science">Science</option>
            <option value="Signs/Symbols">Signs/Symbols</option>
            <option value="Sports/Recreation">Sports/Recreation</option>
            <option value="Technology">Technology</option>
            <option value="Transportation">Transportation</option>
            <option value="Vintage">Vintage</option>
        </select>
        <label for="floatingSelect">Catergory</label>
    </div>

    <div class="form-floating mb-3">
        <select name="country" class="form-select border-bottom border-0" id="floatingSelect" aria-label="Region">
            <option value="{{ $id->country }}">{{ $id->country }}</option>
            <option value="al">Algeria</option>
            <option value="ao">Angola</option>
            <option value="bi">Benin</option>
            <option value="bw">Botswana</option>
            <option value="bf">Burkina Faso</option>
            <option value="bu">Burundi</option>
            <option value="cv">Cape Verde</option>
            <option value="cf">Central African Republic</option>
            <option value="ch">Chad</option>
            <option value="co">Comoros</option>
            <option value="cm">Cote d’Ivoire</option>
            <option value="drc">Democratic Republic of the Congo</option>
            <option value="dj">Djibouti</option>
            <option value="eg">Egypt</option>
            <option value="eq">Equatorial Guinea</option>
            <option value="er">Eritrea</option>
            <option value="sz">Eswatini</option>
            <option value="et">Ethiopia</option>
            <option value="ga">Gabon</option>
            <option value="gm">Gambia</option>
            <option value="gh">Ghana</option>
            <option value="gn">Guinea</option>
            <option value="gb">Guinea-Bissau</option>
            <option value="ke">Kenya</option>
            <option value="ls">Lesotho</option>
            <option value="lr">Liberia</option>
            <option value="ly">Libya</option>
            <option value="mg">Madagascar</option>
            <option value="mw">Malawi</option>
            <option value="ml">Mali</option>
            <option value="mr">Mauritania</option>
            <option value="mu">Mauritius</option>
            <option value="ma">Morocco</option>
            <option value="mz">Mozambique</option>
            <option value="na">Namibia</option>
            <option value="ne">Niger</option>
            <option value="ng">Nigeria</option>
            <option value="rw">Rwanda</option>
            <option value="st">Sao Tome and Principe</option>
            <option value="sn">Senegal</option>
            <option value="sc">Seychelles</option>
            <option value="sl">Sierra Leone</option>
            <option value="so">Somalia</option>
            <option value="za">South Africa</option>
            <option value="ss">South Sudan</option>
            <option value="sd">Sudan</option>
            <option value="tz">Tanzania</option>
            <option value="tg">Togo</option>
            <option value="tn">Tunisia</option>
            <option value="ug">Uganda</option>
            <option value="zm">Zambia</option>
            <option value="zw">Zimbabwe</option>
            
        </select>
        <label for="floatingSelect">Region</label>
    </div>