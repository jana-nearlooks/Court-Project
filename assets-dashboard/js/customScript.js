var baseUrl = "http://localhost/Court-Project";

toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};


$(document).ready(function () {
  var complainantCount = 1;
  var defendantCount = 1;

    function updateComplainantCounts() {
      $(".complainantCount").each(function(index) {
          $(this).text(index + 1);
      });
    }

    function updateDefendantCounts() {
      $(".defendantCount").each(function(index) {
          $(this).text(index + 1); 
      });
    }

    function generateComplainantSection() {
        var complainantSection = `
        <div class="complainant my-3">   
            <div class="complainantSection">
        
              <div class="">
                <h5 class="fw-bold">வாதி<span class="complainantCount ms-1">${complainantCount}</span></h5>
                <p class="text-muted">
                    Fill all information below
                </p>
              </div>

              <div class="my-3">
                <div class="row g-3">
                    

                    <div class="col-md-3">
                    <label for="cc-number" class="form-label"
                        >வாதியின் பெயர்:</label
                    >
                    <input
                        type="text"
                        class="form-control complainantName"
                        name="complainantName[]"
                        id="vathi-name"
                        placeholder=""
                        required=""
                    />
                    <div class="invalid-feedback">
                        வாதியின் பெயர் is required
                    </div>
                    </div>

                    <div class="col-md-3">
                    <label for="cc-expiration" class="form-label"
                        >வயது:</label
                    >
                    <input
                        type="text"
                        class="form-control complainantAge"
                        name="complainantAge[]"
                        id="vathi-age"
                        placeholder=""
                        required=""
                    />
                    <div class="invalid-feedback">
                        வயது is required
                    </div>
                    </div>

                    <div class="col-md-3">
                    <label for="state" class="form-label"
                        >Notation</label
                    >
                    <select class="form-select complainantNotation" name="complainantNotation[]" id="state">
                        <option value="" selected></option>
                        <option value="த/பெ">த/பெ</option>
                        <option value="ம/பெ">ம/பெ</option>
                        <option value="க/பெ">க/பெ</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a Notation
                    </div>
                    </div>
                    <div class="col-md-3">
                    <label for="cc-cvv" class="form-label"
                        >பெயர்:</label
                    >
                    <input
                        type="text"
                        class="form-control complainantNotationName"
                        name="complainantNotationName[]"
                        id="cc-cvv"
                        placeholder=""
                        required=""
                    />
                    <div class="invalid-feedback">
                        பெயர் required
                    </div>
                    </div>
                    <div class="col-md-6">
                    <label for="state" class="form-label"
                        >பாலினம்:</label
                    >
                    <select class="form-select complainantGender" name="complainantGender[]" id="state">
                        <option value="" selected></option>
                        <option value="ஆண்">ஆண்</option>
                        <option value="பெண்">பெண்</option>
                        <option value="மற்றவை">மற்றவை</option>
                    </select>
                    <div class="invalid-feedback">
                        பாலினம் is required
                    </div>
                    </div>
                    <div class="col-md-6">
                    <label for="state" class="form-label"
                        >மதம்:</label
                    >
                    <select class="form-select complainantReligion" name="complainantReligion[]" id="state">
                        <option value="" selected></option>
                        <option value="இந்து">இந்து</option>
                        <option value="முஸ்லீம்">முஸ்லீம்</option>
                        <option value="கிறித்தவம்">கிறித்தவம்</option>
                        <option value="மற்றவை">மற்றவை</option>
                    </select>
                    <div class="invalid-feedback">
                        மதம் is required
                    </div>
                    </div>
                    <div class="col-md-6">
                    <label for="cc-expiration" class="form-label"
                        >முகவரி 1:</label
                    >
                    <input
                        type="text"
                        class="form-control complainantaddress-1"
                        name="complainantAddress-1[]"
                        id="vathi-age"
                        placeholder=""
                        required=""
                    />
                    <div class="invalid-feedback">
                        முகவரி 1: is required
                    </div>
                    </div>

                    <div class="col-md-6">
                    <label for="cc-expiration" class="form-label"
                        >முகவரி 2:</label
                    >
                    <input
                        type="text"
                        class="form-control complainantAddress-2"
                        name="complainantAddress-2[]"
                        id="vathi-age"
                        placeholder=""
                        required=""
                    />
                    <div class="invalid-feedback">
                        முகவரி 2: is required
                    </div>
                    </div>

                    <div class="col-md-4">
                    <label for="state" class="form-label"
                        >தாலுகா:</label
                    >
                    <select class="form-select complainantTaluk" name="complainantTaluk[]" id="state">
                        <option value="" selected></option>
                        <option value="திண்டுக்கல்">திண்டுக்கல்</option>
                        <option value="வேடசந்தூர்">வேடசந்தூர்</option>
                        <option value="பழனி">பழனி</option>
                        <option value="நிலக்கோட்டை">நிலக்கோட்டை</option>
                        <option value="ஒட்டன்சத்திரம்">ஒட்டன்சத்திரம்</option>
                        <option value="ஆத்தூர்">ஆத்தூர்</option>
                        <option value="நத்தம்">நத்தம்</option>
                        <option value="கொடைக்கானல்">கொடைக்கானல்</option>
                    </select>
                    <div class="invalid-feedback">
                        தாலுகா is required
                    </div>
                    </div>
                    <div class="col-md-4">
                    <label for="state" class="form-label"
                        >மாவட்டம்:</label
                    >
                    <select class="form-select complainantDistrict" name="complainantDistrict[]" id="state">
                        <option value="" selected></option>
                        <option value="திண்டுக்கல்">திண்டுக்கல்</option>
                        <option value="சென்னை">சென்னை</option>
                        <option value="காஞ்சிபுரம்">காஞ்சிபுரம்</option>
                        <option value="செங்கல்பட்டு">செங்கல்பட்டு</option>
                        <option value="திருவள்ளூர்">திருவள்ளூர்</option>
                        <option value="திருவண்ணாமலை">திருவண்ணாமலை</option>
                        <option value="வேலூர்">வேலூர்</option>
                        <option value="விழுப்புரம்">விழுப்புரம்</option>
                        <option value="கள்ளக்குறிச்சி">கள்ளக்குறிச்சி</option>
                        <option value="திருப்பத்தூர்">திருப்பத்தூர்</option>
                        <option value="இராணிப்பேட்டை">இராணிப்பேட்டை</option>
                        <option value="அரியலூர்">அரியலூர்</option>
                        <option value="கடலூர்">கடலூர்</option>
                        <option value="மயிலாடுதுறை">மயிலாடுதுறை</option>
                        <option value="நாகப்பட்டினம்">நாகப்பட்டினம்</option>
                        <option value="பெரம்பலூர்">பெரம்பலூர்</option>
                        <option value="புதுக்கோட்டை">புதுக்கோட்டை</option>
                        <option value="தஞ்சாவூர்">தஞ்சாவூர்</option>
                        <option value="திருச்சிராப்பள்ளி">திருச்சிராப்பள்ளி</option>
                        <option value="திருவாரூர்">திருவாரூர்</option>
                        <option value="தருமபுரி">தருமபுரி</option>
                        <option value="திண்டுக்கல்">திண்டுக்கல்</option>
                        <option value="கோயம்புத்தூர்">கோயம்புத்தூர்</option>
                        <option value="கரூர்">கரூர்</option>
                        <option value="ஈரோடு">ஈரோடு</option>
                        <option value="கிருஷ்ணகிரி">கிருஷ்ணகிரி</option>
                        <option value="நாமக்கல்">நாமக்கல்</option>
                        <option value="நீலகிரி">நீலகிரி</option>
                        <option value="சேலம்">சேலம்</option>
                        <option value="திருப்பூர்">திருப்பூர்</option>
                        <option value="கன்னியாகுமரி">கன்னியாகுமரி</option>
                        <option value="மதுரை">மதுரை</option>
                        <option value="இராமநாதபுரம்">இராமநாதபுரம்</option>
                        <option value="சிவகங்கை">சிவகங்கை</option>
                        <option value="தேனி">தேனி</option>
                        <option value="தூத்துக்குடி">தூத்துக்குடி</option>
                        <option value="திருநெல்வேலி">திருநெல்வேலி</option>
                        <option value="தென்காசி">தென்காசி</option>
                        <option value="விருதுநகர்">விருதுநகர்</option>
                    </select>
                    <div class="invalid-feedback">
                        மாவட்டம் is required
                    </div>
                    </div>

            
                    <div class="col-md-4" style="margin-top: 43px">
                    <button
                        type="button"
                        class="btn btn-success add-complainant"
                        data-bs-toggle="modal"
                        id="create-btn"
                        data-bs-target="#showModal"
                    >
                        <i
                        class="ri-add-line align-bottom me-1"
                        ></i>
                        Add
                    </button>
                    <button type="button" class="btn btn-soft-danger delete-complainant">
                        <i class="ri-delete-bin-2-line"></i> Delete
                    </button>
                    </div>
                </div>
              </div>
            </div>
        </div>
        `;
        return complainantSection;
    }

    function generateDefendantSection() {
        var defendantSection = `
        <div class="defendant my-3">          
            <div class="defendantSection">
        
                <div class="">
                    <h5>எதிர்வாதி<span class="defendantCount ms-1">${defendantCount}</span></h5>
                    <p class="text-muted">
                    Fill all information below
                    </p>
                </div>
        
                <div class="my-3">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="cc-number" class="form-label"
                            >எதிர்வாதி பெயர்:</label
                            >
                            <input
                            type="text"
                            class="form-control defendantName"
                            name="defendantName[]"
                            id="vathi-name"
                            placeholder=""
                            required=""
                            />
                            <div class="invalid-feedback">
                            எதிர்வாதி பெயர் is required
                            </div>
                        </div>
        
                        <div class="col-md-3">
                            <label for="cc-expiration" class="form-label"
                            >வயது:</label
                            >
                            <input
                            type="text"
                            class="form-control defendantAge"
                            name="defendantAge[]"
                            id="vathi-age"
                            placeholder=""
                            required=""
                            />
                            <div class="invalid-feedback">
                            வயது is required
                            </div>
                        </div>
        
                        <div class="col-md-3">
                            <label for="state" class="form-label"
                            >Notation</label
                            >
                            <select class="form-select defendantNotation" name="defendantNotation[]" id="state">
                                <option value="" selected></option>
                                <option value="த/பெ">த/பெ</option>
                                <option value="ம/பெ">ம/பெ</option>
                                option value="க/பெ">க/பெ</option>
                            </select>
                            <div class="invalid-feedback">
                            Please select a Notation
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="cc-cvv" class="form-label"
                            >பெயர்:</label
                            >
                            <input
                            type="text"
                            class="form-control defendantNotationName"
                            name="defendantNotationName[]"
                            id="cc-cvv"
                            placeholder=""
                            required=""
                            value="<?php echo $defendant['notationName']; ?>"
                            />
                            <div class="invalid-feedback">
                            பெயர் required
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="state" class="form-label"
                            >பாலினம்:</label
                            >
                            <select class="form-select defendantGender" name="defendantGender[]" id="state">
                            <option value="" selected></option>
                                <option value="ஆண்">ஆண்</option>
                                <option value="பெண்">பெண்</option>
                                <option value="மற்றவை">மற்றவை</option>
                                <option value="மற்றவை" <?=$defendant['gender'] == 'மற்றவை' ? ' selected="selected"' : '';?> >மற்றவை</option>
    
                            </select>
                            <div class="invalid-feedback">
                            பாலினம் is required
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="state" class="form-label"
                            >மதம்:</label
                            >
                            <select class="form-select defendantReligion" name="defendantReligion[]" id="state">
                                <option value="" selected></option>
                                <option value="இந்து">இந்து</option>
                                <option value="முஸ்லீம்">முஸ்லீம்</option>
                                <option value="கிறித்தவம்">கிறித்தவம்</option>
                                <option value="மற்றவை">மற்றவை</option>
    
                            </select>
                            <div class="invalid-feedback">
                            மதம் is required
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="defendantAddress1" class="form-label"
                            >முகவரி 1:</label>
                            <input
                            type="text"
                            class="form-control defendantAddress-1"
                            name="defendantAddress"
                            id="defendantAddress1"
                            placeholder=""
                            value=""
                            required
                            
                            />
                            <div class="invalid-feedback">
                            முகவரி 1: is required
                            </div>
                        </div>
        
                        <div class="col-md-6">
                            <label for="cc-expiration" class="form-label"
                            >முகவரி 2:</label
                            >
                            <input
                            type="text"
                            class="form-control defendantAddress-2"
                            name="defendantAddress-2[]"
                            id="vathi-age"
                            placeholder=""
                            required
                            value="<?php echo $defendant['address2']; ?>"
                            />
                            <div class="invalid-feedback">
                            முகவரி 2: is required
                            </div>
                        </div>
        
                        <div class="col-md-4">
                            <label for="state" class="form-label"
                            >தாலுகா:</label
                            >
                            <select class="form-select defendantTaluk" name="defendantTaluk[]" id="state">
                                <option value="" selected></option>
                                <option value="" selected></option>
                                <option value="திண்டுக்கல்">திண்டுக்கல்</option>
                                <option value="வேடசந்தூர்">வேடசந்தூர்</option>
                                <option value="பழனி">பழனி</option>
                                <option value="நிலக்கோட்டை">நிலக்கோட்டை</option>
                                <option value="ஒட்டன்சத்திரம்">ஒட்டன்சத்திரம்</option>
                                <option value="ஆத்தூர்">ஆத்தூர்</option>
                                <option value="நத்தம்">நத்தம்</option>
                                <option value="கொடைக்கானல்">கொடைக்கானல்</option>
                                <option value="கொடைக்கானல்" <?=$defendant['taluk'] == 'கொடைக்கானல்' ? ' selected="selected"' : '';?> >கொடைக்கானல்</option>
                            </select>
                            <div class="invalid-feedback">
                            தாலுகா is required
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="state" class="form-label"
                            >மாவட்டம்:</label
                            >
                            <select class="form-select defendantDistrict" name="defendantDistrict[]" id="state">
                                <option value="" selected></option>
                                <option value="" selected></option>
                                <option value="திண்டுக்கல்">திண்டுக்கல்</option>
                                <option value="சென்னை">சென்னை</option>
                                <option value="காஞ்சிபுரம்">காஞ்சிபுரம்</option>
                                <option value="செங்கல்பட்டு">செங்கல்பட்டு</option>
                                <option value="திருவள்ளூர்">திருவள்ளூர்</option>
                                <option value="திருவண்ணாமலை">திருவண்ணாமலை</option>
                                <option value="வேலூர்">வேலூர்</option>
                                <option value="விழுப்புரம்">விழுப்புரம்</option>
                                <option value="கள்ளக்குறிச்சி">கள்ளக்குறிச்சி</option>
                                <option value="திருப்பத்தூர்">திருப்பத்தூர்</option>
                                <option value="இராணிப்பேட்டை">இராணிப்பேட்டை</option>
                                <option value="அரியலூர்">அரியலூர்</option>
                                <option value="கடலூர்">கடலூர்</option>
                                <option value="மயிலாடுதுறை">மயிலாடுதுறை</option>
                                <option value="நாகப்பட்டினம்">நாகப்பட்டினம்</option>
                                <option value="பெரம்பலூர்">பெரம்பலூர்</option>
                                <option value="புதுக்கோட்டை">புதுக்கோட்டை</option>
                                <option value="தஞ்சாவூர்">தஞ்சாவூர்</option>
                                <option value="திருச்சிராப்பள்ளி">திருச்சிராப்பள்ளி</option>
                                <option value="திருவாரூர்">திருவாரூர்</option>
                                <option value="தருமபுரி">தருமபுரி</option>
                                <option value="திண்டுக்கல்">திண்டுக்கல்</option>
                                <option value="கோயம்புத்தூர்">கோயம்புத்தூர்</option>
                                <option value="கரூர்">கரூர்</option>
                                <option value="ஈரோடு">ஈரோடு</option>
                                <option value="கிருஷ்ணகிரி">கிருஷ்ணகிரி</option>
                                <option value="நாமக்கல்">நாமக்கல்</option>
                                <option value="நீலகிரி">நீலகிரி</option>
                                <option value="சேலம்">சேலம்</option>
                                <option value="திருப்பூர்">திருப்பூர்</option>
                                <option value="கன்னியாகுமரி">கன்னியாகுமரி</option>
                                <option value="மதுரை">மதுரை</option>
                                <option value="இராமநாதபுரம்">இராமநாதபுரம்</option>
                                <option value="சிவகங்கை">சிவகங்கை</option>
                                <option value="தேனி">தேனி</option>
                                <option value="தூத்துக்குடி">தூத்துக்குடி</option>
                                <option value="திருநெல்வேலி">திருநெல்வேலி</option>
                                <option value="தென்காசி">தென்காசி</option>
                                <option value="விருதுநகர்">விருதுநகர்</option>
                            
                        
                            </select>
                            <div class="invalid-feedback">
                            மாவட்டம் is required
                            </div>
                        </div>
                        <div class="col-md-4" style="margin-top: 43px">
                            <button
                            type="button"
                            class="btn btn-success add-defendant"
                            data-bs-toggle="modal"
                            id="create-btn"
                            data-bs-target="#showModal"
                            >
                            <i
                                class="ri-add-line align-bottom me-1"
                            ></i>
                            Add
                            </button>
                            <button type="button" class="btn btn-soft-danger delete-defendant">
                            <i class="ri-delete-bin-2-line"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
        return defendantSection;
    }

    $(document).on("click", ".add-complainant", function () {
        var complainantSection = generateComplainantSection();
        $(".complainant:last").after(complainantSection);
        updateComplainantCounts();
  
    });

    $(document).on("click", ".delete-complainant", function () {
        if($(".complainantSection").length > 1) {
          $(this).closest(".complainantSection").remove();
          updateComplainantCounts();
        } else {
      
        }
    });

    $(document).on("click", ".add-defendant", function () {
        var defendantSection = generateDefendantSection();
        $(".defendant:last").after(defendantSection);
        updateDefendantCounts();
    });

    $(document).on("click", ".delete-defendant", function () {
        if($(".defendantSection").length > 1) {
          $(this).closest(".defendantSection").remove();
          updateDefendantCounts();
        } else {
      
        }
    });
});


$(document).ready(function(){
    $('#submit').click(function(){
    
        var realCaseNo = $('.realCaseNo').val();
        var cnrNo = $('.cnrNo').val();
        var judgement = $('#judgement').val();
        var finalJudgement = $('#finalJudgement').val();

        var complainantData = [];
        var defendantData = [];

        $('.complainant').each(function () {
            var complainants = {
                name: $(this).find('.complainantName').val(),
                age: $(this).find('.complainantAge').val(),
                notation: $(this).find('.complainantNotation').val(),
                notationName: $(this).find('.complainantNotationName').val(),
                gender: $(this).find('.complainantGender').val(),
                religion: $(this).find('.complainantReligion').val(),
                address1: $(this).find('.complainantaddress-1').val(),
                address2: $(this).find('.complainantAddress-2').val(),
                taluk: $(this).find('.complainantTaluk').val(),
                district: $(this).find('.complainantDistrict').val(),
            };

            complainantData.push(complainants);
        });
        console.log(complainantData);

        $('.defendant').each(function () {
            var defendants = {
                name: $(this).find('.defendantName').val(),
                age: $(this).find('.defendantAge').val(),
                notation: $(this).find('.defendantNotation').val(),
                notationName: $(this).find('.defendantNotationName').val(),
                gender: $(this).find('.defendantGender').val(),
                religion: $(this).find('.defendantReligion').val(),
                address1: $(this).find('.defendantAddress-1').val(),
                address2: $(this).find('.defendantAddress-2').val(),
                taluk: $(this).find('.defendantTaluk').val(),
                district: $(this).find('.defendantDistrict').val(),
            };

            defendantData.push(defendants);
        });
        console.log(defendantData);
        // console.log(JSON.stringify(complainantData, null, 2));
        // console.log(JSON.stringify(defendantData, null, 2));

        var  complainantDataString = JSON.stringify(complainantData);
        var  defendantDataString = JSON.stringify(defendantData);

        $.ajax({
            url:"os.php",
            method: "POST",
            data:{realCaseNo:realCaseNo, cnrNo:cnrNo, complainantDataString:complainantDataString, defendantDataString:defendantDataString, judgement:judgement, finalJudgement:finalJudgement},
            success:function(response){
                var responseData = JSON.parse(response)
                toastr[responseData.status](responseData.message);
                if(responseData.status == "success"){
                    $('#osMoneySuit')[0].reset();
                    setTimeout(function() {
                        window.location.href = baseUrl+'/Admin/index.php';
                    }, 2000);  
                    // $('.complainantTab').addClass("active show");
                }else{
                    
                }
            }
        });
    });
});

$(document).ready(function(){
  $('#update').click(function(){
  
      var id = $('#id').val();
      var realCaseNo = $('.realCaseNo').val();
      var cnrNo = $('.cnrNo').val();
      var judgement = $('#judgement').val();
      var finalJudgement = $('#finalJudgement').val();

      var complainantData = [];
      var defendantData = [];

      $('.complainant').each(function () {
          var complainants = {
              name: $(this).find('.complainantName').val(),
              age: $(this).find('.complainantAge').val(),
              notation: $(this).find('.complainantNotation').val(),
              notationName: $(this).find('.complainantNotationName').val(),
              gender: $(this).find('.complainantGender').val(),
              religion: $(this).find('.complainantReligion').val(),
              address1: $(this).find('.complainantaddress-1').val(),
              address2: $(this).find('.complainantAddress-2').val(),
              taluk: $(this).find('.complainantTaluk').val(),
              district: $(this).find('.complainantDistrict').val(),
          };

          complainantData.push(complainants);
      });
      console.log(complainantData);

      $('.defendant').each(function () {
          var defendants = {
              name: $(this).find('.defendantName').val(),
              age: $(this).find('.defendantAge').val(),
              notation: $(this).find('.defendantNotation').val(),
              notationName: $(this).find('.defendantNotationName').val(),
              gender: $(this).find('.defendantGender').val(),
              religion: $(this).find('.defendantReligion').val(),
              address1: $(this).find('.defendantAddress-1').val(),
              address2: $(this).find('.defendantAddress-2').val(),
              taluk: $(this).find('.defendantTaluk').val(),
              district: $(this).find('.defendantDistrict').val(),
          };

          defendantData.push(defendants);
      });
      console.log(defendantData);
      // console.log(JSON.stringify(complainantData, null, 2));
      // console.log(JSON.stringify(defendantData, null, 2));

      var  complainantDataString = JSON.stringify(complainantData);
      var  defendantDataString = JSON.stringify(defendantData);

      $.ajax({
          url:"osUpdate.php",
          method: "POST",
          data:{id:id , realCaseNo:realCaseNo, cnrNo:cnrNo, complainantDataString:complainantDataString, defendantDataString:defendantDataString, judgement:judgement, finalJudgement:finalJudgement},
          success:function(response){
              var responseData = JSON.parse(response)
              toastr[responseData.status](responseData.message);
              if(responseData.status == "success"){
                    $('#osMoneySuitUpdate')[0].reset();
                    $('#osMoneySuitUpdate').find('input, select, textarea').val('');
                    setTimeout(function() {
                        window.location.href = baseUrl+'/Admin/index.php';
                    }, 2000);  
                  // $('.complainantTab').addClass("active show");
              }else{
                  
              }
          }
      });
  });
});

$(document).ready(function(){
    $('.deleteOS').click(function(){
        var id = $(this).data('id');
        
        $.ajax({
            url:"osDelete.php",
            method:"POST",
            data:{id:id},
            success:function(response){
                var responseData = JSON.parse(response)
                toastr[responseData.status](responseData.message);
                if(responseData.status == "success"){
                    setTimeout(function() {
                        window.location.reload();
                    },2000);
                }else{
                    
                }
            }
        });
    });
});