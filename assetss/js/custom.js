$(document).ready(function () {
  var x = 0; // Counter variable to keep track of the elements

  // Function to add a new set of input fields
  function addFields() {
      x++; // Increment the counter

      // Create a new set of input fields
      var newFields = $('<div class="col-md-6 p-sm-0">' +
          '<div class="form-group">' +
          '<label for="inputFname">வாதியின் பெயர்:</label>' +
          '<input type="text" class="form-control" name="name[]" />' +
          '</div>' +
          '<div class="form-group">' +
          '<label for="inputLname">வயது:</label>' +
          '<input type="text" class="form-control" name="age[]" />' +
          '</div>' +
          '<div class="form-group country-select">' +
          '<label for="Gender"></label>' +
          '<div class="select-input choose-country">' +
          '<span></span>' +
          '<select class="form-control" name="gender[]">' +
          '<option value="">த/பெ</option>' +
          '<option value="">ம/பெ</option>' +
          '<option value="">க/பெ</option>' +
          '</select>' +
          '</div>' +
          '</div>' +
          '<div class="form-group">' +
          '<label for="inputLname">பெயர்:</label>' +
          '<input type="text" class="form-control" name="gender_name[]" placeholder="த/பெ பெயர்" />' +
          '</div>' +
          '<div class="form-group country-select">' +
          '<label for="Gender">பாலினம்:</label>' +
          '<div class="select-input choose-country">' +
          '<span></span>' +
          '<select class="form-control" name="gender_type[]">' +
          '<option value="">ஆண்</option>' +
          '<option value="">பெண்</option>' +
          '<option value="">மற்றவை</option>' +
          '</select>' +
          '</div>' +
          '</div>' +
          '<div class="form-group country-select">' +
          '<label for="Religion">மதம்:</label>' +
          '<div class="select-input choose-country">' +
          '<span></span>' +
          '<select class="form-control" name="religion[]">' +
          '<option value="">இந்து</option>' +
          '<option value="">முஸ்லீம்</option>' +
          '<option value="">கிறித்தவம்</option>' +
          '<option value="">மற்றவை</option>' +
          '</select>' +
          '</div>' +
          '</div>' +
          '<div class="mt-5 mb-5">' +
          '<h4>முகவரி </h4>' +
          '</div>' +
          '<div class="form-group">' +
          '<label for="inputFname">முகவரி 1:</label>' +
          '<input type="text" class="form-control" name="address1[]" />' +
          '</div>' +
          '<div class="form-group">' +
          '<label for="inputFname">முகவரி 2:</label>' +
          '<input type="text" class="form-control" name="address2[]" />' +
          '</div>' +
          '<div class="form-group country-select">' +
          '<label for="Religion">தாலுகா:</label>' +
          '<div class="select-input choose-country">' +
          '<span></span>' +
          '<select class="form-control" name="taluka[]">' +
          '<option value="">திண்டுக்கல்</option>' +
          '<option value="">வேடசந்தூர்</option>' +
          '<option value="">பழனி</option>' +
          '<option value="">நிலக்கோட்டை</option>' +
          '<option value="">ஒட்டன்சத்திரம்</option>' +
          '<option value="">ஆத்தூர்</option>' +
          '<option value="">நத்தம்</option>' +
          '<option value="">கொடைக்கானல்</option>' +
          '</select>' +
          '</div>' +
          '</div>' +
          '<div class="form-group country-select">' +
          '<label for="Religion">மாவட்டம்:</label>' +
          '<div class="select-input choose-country">' +
          '<span></span>' +
          '<select class="form-control" name="district[]">' +
          '<option value="">திண்டுக்கல்</option>' +
          '<option value="">சென்னை</option>' +
          '<option value="">காஞ்சிபுரம்</option>' +
          '<option value="">செங்கல்பட்டு</option>' +
          '<option value="">திருவள்ளூர்</option>' +
          '<option value="">திருவண்ணாமலை</option>' +
          '<option value="">வேலூர்</option>' +
          '<option value="">விழுப்புரம்</option>' +
          '<option value="">கள்ளக்குறிச்சி</option>' +
          '<option value="">திருப்பத்தூர்</option>' +
          '<option value="">இராணிப்பேட்டை</option>' +
          '<option value="">அரியலூர்</option>' +
          '<option value="">கடலூர்</option>' +
          '<option value="">மயிலாடுதுறை</option>' +
          '<option value="">நாகப்பட்டினம்</option>' +
          '<option value="">பெரம்பலூர்</option>' +
          '<option value="">புதுக்கோட்டை</option>' +
          '<option value="">தஞ்சாவூர்</option>' +
          '<option value="">திருச்சிராப்பள்ளி</option>' +
          '<option value="">திருவாரூர்</option>' +
          '<option value="">தருமபுரி</option>' +
          '<option value="">திண்டுக்கல்</option>' +
          '<option value="">கோயம்புத்தூர்</option>' +
          '<option value="">கரூர்</option>' +
          '<option value="">ஈரோடு</option>' +
          '<option value="">கிருஷ்ணகிரி</option>' +
          '<option value="">நாமக்கல்</option>' +
          '<option value="">நீலகிரி</option>' +
          '<option value="">சேலம்</option>' +
          '<option value="">திருப்பூர்</option>' +
          '<option value="">கன்னியாகுமரி</option>' +
          '<option value="">மதுரை</option>' +
          '<option value="">இராமநாதபுரம்</option>' +
          '<option value="">சிவகங்கை</option>' +
          '<option value="">தேனி</option>' +
          '<option value="">தூத்துக்குடி</option>' +
          '<option value="">திருநெல்வேலி</option>' +
          '<option value="">தென்காசி</option>' +
          '<option value="">விருதுநகர்</option>' +
          '</select>' +
          '</div>' +
          '</div>' +
          '<a href="#" class="remove_field">Remove</a>' +
          '</div>');

      // Append the new fields to the container
      $('#dynamicFields').append(newFields);
  }

  // Event listener for the "Add Field" button
  $('#addField').click(function (e) {
      e.preventDefault();
      addFields();
  });

  // Event listener for the "Remove" link within dynamic fields
  $('#dynamicFields').on('click', '.remove_field', function (e) {
      e.preventDefault();
      $(this).parent('div').remove();
  });
});