const allSearchInputs = document.querySelectorAll('.search-form .widget-text input');
allSearchInputs.forEach(input => {
  input.addEventListener('change', function() {
    input.value = "*" + input.value + "*";
  })
})

