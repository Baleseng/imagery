    <div class="form-floating mb-3">
        <input type="text" class="form-control border-bottom border-0" id="floatingInputKeywords" value="{{ $id->file_title }}" name="file_title" placeholder="Keywords">
        <label for="floatingInput">File Name</label>
    </div>
    

    <div class="form-floating mb-3">
        <input type="text" class="form-control border-bottom border-0" id="floatingInput" name="file_description" value="{{ $id->file_description }}" placeholder="Description">
        <label for="floatingInput">Description</label>
    </div>

    <div class="form-floating mb-3">
        <select name="file_category" class="form-select border-bottom border-0" id="floatingSelect" aria-label="Catergory">
            <option value="{{ $id->file_category }}">{{ $id->file_category }}</option>
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
        <select name="file_country" class="form-select border-bottom border-0" id="floatingSelect" aria-label="Region">
            <option value="{{ $id->file_country }}">{{ $id->file_country }}</option>
            <option value="ao">Angola</option>
            <option value="bw">Botswana</option>
            <option value="co">Comoros</option>
            <option value="drc">Democratic Republic of the Congo</option>
            <option value="sz">Eswatini</option>
            <option value="ls">Lesotho</option>
            <option value="mg">Madagascar</option>
            <option value="mw">Malawi</option>
            <option value="mu">Mauritius</option>
            <option value="mz">Mozambique</option>
            <option value="na">Namibia</option>
            <option value="sc">Seychelles</option>
            <option value="za">South Africa</option>
            <option value="tz">Tanzania</option>
            <option value="zm">Zambia</option>
            <option value="zw">Zimbabwe</option>
            
        </select>
        <label for="floatingSelect">Region</label>
    </div>