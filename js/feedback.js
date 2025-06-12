// feedback.js

document.addEventListener("DOMContentLoaded", function () {
  const feedbackForm = document.getElementById("feedbackForm");
  const submitButton = document.getElementById("submitButton");
  const termsCheckbox = document.getElementById("terms");

  const validateForm = () => {
    if (form.checkValidity() && termsCheckbox.checked) {
      submitButton.disabled = false;
    } else {
      submitButton.disabled = true;
    }
  };

  feedbackForm.addEventListener("submit", function (event) {
    if (!feedbackForm.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }

    feedbackForm.classList.add("was-validated");
  });

  form.addEventListener("input", validateForm);
  termsCheckbox.addEventListener("change", validateForm);

  // Custom regex validation
  feedbackForm.addEventListener("input", function (event) {
    const field = event.target;
    const pattern = field.getAttribute("pattern");

    if (pattern) {
      const regex = new RegExp(pattern);
      if (regex.test(field.value)) {
        field.classList.add("is-valid");
        field.classList.remove("is-invalid");
      } else {
        field.classList.add("is-invalid");
        field.classList.remove("is-valid");
      }
    }
  });
});
