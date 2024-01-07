document.querySelector("#profile-img-file-input")?.addEventListener("change", function () {
    var userImage = document.querySelector(".user-profile-image");
    var fileInput = document.querySelector(".profile-img-file-input").files[0];
    var reader = new FileReader();
  
    reader.addEventListener("load", function () {
      userImage.src = reader.result;
    });
  
    fileInput && reader.readAsDataURL(fileInput);
  });
  
  document.querySelectorAll(".form-steps").forEach(function (formStep) {
    var nextButtons = formStep.querySelectorAll(".nexttab");
    var prevButtons = formStep.querySelectorAll(".previestab");
  
    nextButtons.forEach(function (nextButton) {
      nextButton.addEventListener("click", function () {
        var currentTab = formStep.querySelector(".tab-pane.show");
        var formControls = currentTab.querySelectorAll(".form-control");
        var isValid = true;
  
        formControls.forEach(function (control) {
          if (control.hasAttribute("required") && control.value.trim() === "") {
            isValid = false;
            control.classList.add("is-invalid");
          } else {
            control.classList.remove("is-invalid");
          }
        });
  
        if (isValid) {
          var nextTabId = nextButton.getAttribute("data-nexttab");
          document.getElementById(nextTabId).click();
        }
      });
    });
  
    prevButtons.forEach(function (prevButton) {
      prevButton.addEventListener("click", function () {
        var previousTabId = prevButton.getAttribute("data-previous");
        document.getElementById(previousTabId).click();
      });
    });
  
    var navLinks = formStep.querySelectorAll('button[data-bs-toggle="pill"]');
    navLinks.forEach(function (navLink, index) {
      navLink.setAttribute("data-position", index);
      navLink.addEventListener("click", function () {
        var doneTabs = formStep.querySelectorAll(".custom-nav .done");
  
        doneTabs.forEach(function (doneTab) {
          doneTab.classList.remove("done");
        });
  
        for (var i = 0; i <= index; i++) {
          if (navLinks[i].classList.contains("active")) {
            navLinks[i].classList.remove("done");
          } else {
            navLinks[i].classList.add("done");
          }
        }
      });
    });
  });
  document.querySelector("#profile-img-file-input")?.addEventListener("change", function () {
    var userImage = document.querySelector(".user-profile-image");
    var fileInput = document.querySelector(".profile-img-file-input").files[0];
    var reader = new FileReader();
  
    reader.addEventListener("load", function () {
      userImage.src = reader.result;
    });
  
    fileInput && reader.readAsDataURL(fileInput);
  });
  
  document.querySelectorAll(".form-steps").forEach(function (formStep) {
    var nextButtons = formStep.querySelectorAll(".nexttab");
    var prevButtons = formStep.querySelectorAll(".previestab");
  
    nextButtons.forEach(function (nextButton) {
      nextButton.addEventListener("click", function () {
        var currentTab = formStep.querySelector(".tab-pane.show");
        var formControls = currentTab.querySelectorAll(".form-control");
        var isValid = true;
  
        formControls.forEach(function (control) {
          if (control.hasAttribute("required") && control.value.trim() === "") {
            isValid = false;
            control.classList.add("is-invalid");
          } else {
            control.classList.remove("is-invalid");
          }
        });
  
        if (isValid) {
          var nextTabId = nextButton.getAttribute("data-nexttab");
          document.getElementById(nextTabId).click();
        }
      });
    });
  
    prevButtons.forEach(function (prevButton) {
      prevButton.addEventListener("click", function () {
        var previousTabId = prevButton.getAttribute("data-previous");
        document.getElementById(previousTabId).click();
      });
    });
  
    var navLinks = formStep.querySelectorAll('button[data-bs-toggle="pill"]');
    navLinks.forEach(function (navLink, index) {
      navLink.setAttribute("data-position", index);
      navLink.addEventListener("click", function () {
        var doneTabs = formStep.querySelectorAll(".custom-nav .done");
  
        doneTabs.forEach(function (doneTab) {
          doneTab.classList.remove("done");
        });
  
        for (var i = 0; i <= index; i++) {
          if (navLinks[i].classList.contains("active")) {
            navLinks[i].classList.remove("done");
          } else {
            navLinks[i].classList.add("done");
          }
        }
      });
    });
  });
    