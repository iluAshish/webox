// main enquiry page form validation
var modal_enquiry = document.getElementById('modal-enquiry-form');
if (modal_enquiry) {
  document.getElementById('modal-enquiry-form').addEventListener('submit', function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();
    const nameInput = document.getElementById('name');
    const numberInput = document.getElementById('number');
    const emailInput = document.getElementById('email');
    const branchInput = document.getElementById('branch');
    const serviceInput = document.getElementById('service');
    const messageInput = document.getElementById('msg');
    let formValid = true;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var phoneRegex = /^\+[0-9]{8,13}$/;

    if (nameInput.value.trim() === '') {
      document.getElementById('enquiry-error-name').style.display = 'block';
      formValid = false;
    } else {
      document.getElementById('enquiry-error-name').style.display = 'none';
    }
    if (emailInput.value.trim() === '') {
      document.getElementById('enquiry-error-email').style.display = 'block';
      $('#enquiry-error-email').text('Email address required.');
      formValid = false;
    } else {
      if (!emailRegex.test(emailInput.value)) {
        document.getElementById('enquiry-error-email').style.display = 'block';
        $('#enquiry-error-email').text('Please enter a valid email address.');
        formValid = false;
      } else {
        $('#enquiry-error-email').hide();
      }
    }
    if (numberInput.value.trim() === '') {
      document.getElementById('enquiry-error-number').style.display = 'block';
      $('#enquiry-error-number').text('Phone Number is required.');
      formValid = false;
    } else {
      if (!phoneRegex.test(numberInput.value)) {
        document.getElementById('enquiry-error-number').style.display = 'block';
        $('#enquiry-error-number').text('Please enter a valid Phone Number.+971050000000');
        formValid = false;
      } else {
        $('#enquiry-error-number').hide();
      }
    }
    if (branchInput.value.trim() === '') {
      document.getElementById('enquiry-error-branch').style.display = 'block';
      formValid = false;
    } else {
      document.getElementById('enquiry-error-branch').style.display = 'none';
    }
    if (serviceInput.value.trim() === '') {
      document.getElementById('enquiry-error-service').style.display = 'block';
      formValid = false;
    } else {
      document.getElementById('enquiry-error-service').style.display = 'none';
    }
    if (messageInput.value.trim() === '') {
      document.getElementById('enquiry-error-msg').style.display = 'block';
      formValid = false;
    } else {
      document.getElementById('enquiry-error-msg').style.display = 'none';
    }
    if (!formValid) {
      return false;
    }
    this.submit();
  });
}
var service_enquiry = document.getElementById('contanier-enquiry-modal-form');
if (service_enquiry) {
  // containerlist  enquiry page form validation
  document.getElementById('contanier-enquiry-modal-form').addEventListener('submit', function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Check each input field for errors
    const clistnameInput = document.getElementById('clist-name');
    const clistnumberInput = document.getElementById('clist-number');
    const clistemailInput = document.getElementById('clist-email');
    const clistbranchInput = document.getElementById('clist-branch');
    const clistserviceInput = document.getElementById('clist-container');
    const clistmessageInput = document.getElementById('clist-msg');
    let formValid = true;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var phoneRegex = /^\+[0-9]{8,13}$/;

    if (clistnameInput.value.trim() === '') {
      document.getElementById('container-error-name').style.display = 'block';
      formValid = false;
    } else {
      document.getElementById('container-error-name').style.display = 'none';
    }

    if (clistemailInput.value.trim() === '') {
      document.getElementById('container-error-email').style.display = 'block';
      $('#container-error-email').text('Email address required.');
      formValid = false;
    } else {
      if (!emailRegex.test(clistemailInput.value)) {
        document.getElementById('container-error-email').style.display = 'block';
        $('#container-error-email').text('Please enter a valid email address.');
        formValid = false;
      } else {
        $('#container-error-email').hide();
      }
    }
    if (clistnumberInput.value.trim() === '') {
      document.getElementById('container-error-number').style.display = 'block';
      $('#container-error-number').text('Phone Number is required.');
      formValid = false;
    } else {
      if (!phoneRegex.test(clistnumberInput.value)) {
        document.getElementById('container-error-number').style.display = 'block';
        $('#container-error-number').text('Please enter a valid Phone Number.+971050000000');
        formValid = false;
      } else {
        $('#container-error-number').hide();
      }
    }
    if (clistbranchInput.value.trim() === '') {
      document.getElementById('container-error-branch').style.display = 'block';
      formValid = false;
    } else {
      document.getElementById('container-error-branch').style.display = 'none';
    }
    if (clistserviceInput.value.trim() === '') {
      document.getElementById('container-error-service').style.display = 'block';
      formValid = false;
    } else {
      document.getElementById('container-error-service').style.display = 'none';
    }
    if (clistmessageInput.value.trim() === '') {
      document.getElementById('container-error-msg').style.display = 'block';
      formValid = false;
    } else {
      document.getElementById('container-error-msg').style.display = 'none';
    }
    // If there are errors, do not proceed with the form submission
    if (!formValid) {
      return false;
    }


    this.submit();
  });
}
var service_enquiry = document.getElementById('service-enquiry');
if (service_enquiry) {
  // service enquiry 
  document.getElementById('service-enquiry').addEventListener('submit', function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();
    if (event.currentTarget.id === 'service-enquiry') {
      // Check each input field for errors
      const servicenameInput = document.getElementById('sname');
      const servicenumberInput = document.getElementById('snumber');
      const serviceemailInput = document.getElementById('semail');
      const servicemessageInput = document.getElementById('smsg');
      let formValid = true;

      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var phoneRegex = /^\+[0-9]{8,13}$/;

      if (servicenameInput.value.trim() === '') {
        document.getElementById('service-enquiry-error-name').style.display = 'block';
        formValid = false;
      } else {
        document.getElementById('service-enquiry-error-name').style.display = 'none';
      }

      if (serviceemailInput.value.trim() === '') {
        document.getElementById('service-enquiry-error-email').style.display = 'block';
        $('#service-enquiry-error-email').text('Email address required.');
        formValid = false;
      } else {
        if (!emailRegex.test(serviceemailInput.value)) {
          document.getElementById('service-enquiry-error-email').style.display = 'block';
          $('#service-enquiry-error-email').text('Please enter a valid email address.');
          formValid = false;
        } else {
          $('#service-enquiry-error-email').hide();
        }
      }
      if (servicenumberInput.value.trim() === '') {
        document.getElementById('service-enquiry-error-number').style.display = 'block';
        $('#service-enquiry-error-number').text('Phone Number is required.');
        formValid = false;
      } else {
        if (!phoneRegex.test(servicenumberInput.value)) {
          document.getElementById('service-enquiry-error-number').style.display = 'block';
          $('#service-enquiry-error-number').text('Please enter a valid Phone Number.+971050000000');
          formValid = false;
        } else {
          $('#service-enquiry-error-number').hide();
        }
      }
      if (servicemessageInput.value.trim() === '') {
        document.getElementById('service-enquiry-error-msg').style.display = 'block';
        formValid = false;
      } else {
        document.getElementById('service-enquiry-error-msg').style.display = 'none';
      }
      // If there are errors, do not proceed with the form submission
      if (!formValid) {
        return false;
      }

      this.submit();
    }
  });
}
var service_enquiry = document.getElementById('contact-form');
if (service_enquiry) {
  // contact page form validation
  document.getElementById('contact-form').addEventListener('submit', function (event) {
    // Prevent the default form submission behavior
    event.preventDefault();
    if (event.currentTarget.id === 'contact-form') {
      // Check each input field for errors
      const cnameInput = document.getElementById('c-name');
      const cnumberInput = document.getElementById('c-number');
      const cemailInput = document.getElementById('c-email');
      const cbranchInput = document.getElementById('c-branch');
      const cserviceInput = document.getElementById('c-service');
      const cmessageInput = document.getElementById('c-msg');
      let formValid = true;

      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      var phoneRegex = /^\+[0-9]{8,13}$/;

      if (cnameInput.value.trim() === '') {
        document.getElementById('contact-error-name').style.display = 'block';
        formValid = false;
      } else {
        document.getElementById('contact-error-name').style.display = 'none';
      }

      if (cemailInput.value.trim() === '') {
        document.getElementById('contact-error-email').style.display = 'block';
        $('#contact-error-email').text('Email address required.');
        formValid = false;
      } else {
        if (!emailRegex.test(cemailInput.value)) {
          document.getElementById('contact-error-email').style.display = 'block';
          $('#contact-error-email').text('Please enter a valid email address.');
          formValid = false;
        } else {
          $('#contact-error-email').hide();
        }
      }

      if (cnumberInput.value.trim() === '') {
        document.getElementById('contact-error-number').style.display = 'block';
        $('#contact-error-number').text('Phone Number is required.');
        formValid = false;
      } else {
        if (!phoneRegex.test(cnumberInput.value)) {
          document.getElementById('contact-error-number').style.display = 'block';
          $('#contact-error-number').text('Please enter a valid Phone Number.+971050000000');
          formValid = false;
        } else {
          $('#contact-error-number').hide();
        }
      }
      if (cbranchInput.value.trim() === '') {
        document.getElementById('contact-error-branch').style.display = 'block';
        formValid = false;
      } else {
        document.getElementById('contact-error-branch').style.display = 'none';
      }
      if (cserviceInput.value.trim() === '') {
        document.getElementById('contact-error-service').style.display = 'block';
        formValid = false;
      } else {
        document.getElementById('contact-error-service').style.display = 'none';
      }
      if (cmessageInput.value.trim() === '') {
        document.getElementById('contact-error-msg').style.display = 'block';
        formValid = false;
      } else {
        document.getElementById('contact-error-msg').style.display = 'none';
      }

      if (!formValid) {
        return false;
      }
      this.submit();
    }
  });
}

$(document).ready(function () {
  // Reset the form and hide errors when the modal is closed
  $(document).on('click', '.container-content .enquiry', function () {
    let title = $(this).closest('.inner-box').find('.container-heading h3').text();
    console.log(title);
    $('#clist-container').val(title);
    $('#clist-containers').val(title);
});
  $('.modal').on('hidden.bs.modal', function () {
    // Reset the form
    $('form#modal-enquiry-form')[0].reset();

    // Hide any error messages
    $('.error-message').hide();
  });
});

$(document).ready(function () {
  $('#service').select2({
      placeholder: 'Please select any services', // Placeholder text
      allowClear: true // Allows the user to clear the selected option
  });
  $('#branch').select2({
      placeholder: 'Please select any branch', // Placeholder text
      allowClear: true // Allows the user to clear the selected option
  });
  $('#clist-service').select2({
      placeholder: 'Please select any services', // Placeholder text
      allowClear: true // Allows the user to clear the selected option
  });
  $('#clist-branch').select2({
      placeholder: 'Please select any branch', // Placeholder text
      allowClear: true // Allows the user to clear the selected option
  });
  $('#c-service').select2({
      placeholder: 'Please select any services', // Placeholder text
      allowClear: true // Allows the user to clear the selected option
  });
  $('#c-branch').select2({
      placeholder: 'Please select any branch', // Placeholder text
      allowClear: true // Allows the user to clear the selected option
  });
});