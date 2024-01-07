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
    var counter = 1;

    function updateIdsAndClasses(section, counter) {
      section.find('[id]').each(function () {
        var oldId = $(this).attr('id');
        var newId = oldId + counter;
        $(this).attr('id', newId);
      });

      section.find('.complainantCount').text(counter + 1);
      section.find('.defendantCount').text(counter + 1);

      // Clear input values in the cloned section
      section.find('.form-control:not(:first)').val('');
      section.find('.complainantName').val('');
      section.find('.defendantName').val('');

      // Clear selected options in the cloned section
      section.find('.form-select:not(:first)').prop('selectedIndeyx', 0);

      // Update input classes with classname+counter for subsequent elements
      // section.find('.form-control:not(:first)').each(function() {
      //   var oldClass = $(this).attr('class');
      //   var newClass = oldClass.replace(/\d+/, counter);
      //   $(this).attr('class', newClass);
      // });

      section.find('.form-select:not(:first)').each(function() {
        var oldClass = $(this).attr('class');
        var newClass = oldClass.replace(/\d+/, counter);
        $(this).attr('class', newClass);
      });
    }

    $(document).on("click", ".add-btn", function () {
  
      var clonedSection = $(".complainant").last().clone();

      updateIdsAndClasses(clonedSection, counter);

      clonedSection.insertAfter($(".complainant").last());
      counter++;
    });

    $(document).on("click", ".delete-btn", function () {
      if ($(".complainant").length > 1) {
        $(this).closest(".complainant").remove();
        counter=1;
      } else {
        // alert("Cannot delete the last section.");
      }
    });

    $(document).on("click", ".defendant-add-btn", function () {
      var clonedSection = $(".defendant").last().clone();

      updateIdsAndClasses(clonedSection, counter);

      clonedSection.insertAfter($(".defendant").last());
      counter++;
    });

    $(document).on("click", ".defendant-delete-btn", function () {
      if ($(".defendant").length > 1) {
        $(this).closest(".defendant").remove();
        counter=1;
      }else{
        // alert("Cannot delete the last section.");
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
                address1: $(this).find('.defendantaddress-1').val(),
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