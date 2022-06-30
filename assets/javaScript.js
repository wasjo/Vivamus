var currentTab = 0;
showTab(currentTab);

function showTab(n) {
  var x = document.getElementsByClassName("sectionCard");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevButton").style.display = "none";
  } else {
    document.getElementById("prevButton").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextButton").innerHTML = "Submit";
  } else if (n == (x.length === 0)) {
    document.getElementById("nextButton").innerHTML = "Next";
  } else {
    document.getElementById("nextButton").innerHTML = "Proceed";
  }
  fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("sectionCard");
  if (n == 1 && !validateForm()) return false;
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  if (currentTab >= x.length) {
    document.getElementById("regForm").submit();
    return false;
  }
  showTab(currentTab);
}

function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}

function validateForm() {
  var x, y, i, valid = true;
  x = document.getElementsByClassName("sectionCard");
  y = x[currentTab].getElementsByTagName("input");
  for (i = 0; i < y.length; i++) {
    if (y[i].value == "") {
      y[i].className += " invalid";
      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;
}
