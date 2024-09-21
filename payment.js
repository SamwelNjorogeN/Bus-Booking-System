window.addEventListener('DOMContentLoaded', function () {
    var modeSelect = document.getElementById('check');
    var mpesaDiv = document.querySelector('.M_pesa');
    var visaDiv = document.querySelector('.VISA');
  
    // Function to enable or disable form elements
    function toggleElements(elements, enable) {
      for (var i = 0; i < elements.length; i++) {
        elements[i].disabled = !enable;
      }
    }
  
    // Function to handle mode selection change event
    function handleModeChange() {
      var selectedOption = modeSelect.value;
  
      // Enable/disable elements based on the selected option
      if (selectedOption === 'M - Pesa') {
        toggleElements(mpesaDiv.querySelectorAll('input'), true);
        toggleElements(visaDiv.querySelectorAll('input'), false);
      } else if (selectedOption === 'Master Card & VISA Card') {
        toggleElements(mpesaDiv.querySelectorAll('input'), false);
        toggleElements(visaDiv.querySelectorAll('input'), true);
      }
    }
  
    // Attach event listener to the mode selection
    modeSelect.addEventListener('change', handleModeChange);
  
    // Initial handling based on the current selected option
    handleModeChange();
  });
  