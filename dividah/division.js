
var number1_element = document.getElementById("num1");
var number2_element = document.getElementById('num2');

function divideThem(){
  alert("I have been clicked..help!")

  var number1 = number1_element.value ;
  var number2 = number2_element.value;

  let results = number1 / number2;

   var results_h4 = document.getElementbyId("results");
   result_span.innerHTML = result;
}
