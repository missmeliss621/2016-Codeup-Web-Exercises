
// --------------------------GLOBAL------------------------------
var wasButtonOperatorClicked = false;

var inputBoxMiddle = document.getElementById("input-box2");
var inputBoxRight = document.getElementById("input-box3");
var inputBoxLeft = document.getElementById("input-box1");

// ------------- NUMBER BUTTONS ----------------------------------

var buttonNumber = document.getElementsByClassName("buttonNumber");
for(var i = 0; i < buttonNumber.length; i++){
     buttonNumber[i].addEventListener("click", numberButtonClicked);
}

function numberButtonClicked(){
    console.log (this);
    console.log(this.innerHTML);
    if (!wasButtonOperatorClicked) {
        inputBoxLeft.innerHTML = inputBoxLeft.innerHTML + this.innerHTML;

    } else {
        inputBoxRight.innerHTML = inputBoxRight.innerHTML + this.innerHTML;
    }

}


// ----------------- OPERATOR BUTTONS ----------------------------

var operators = document.getElementsByClassName("operator");
for(var i = 0; i < operators.length; i++){
    operators[i].addEventListener("click", operatorsClicked);
}


function operatorsClicked (){
    console.log (this);
    inputBoxMiddle.innerHTML = this.innerHTML;
    wasButtonOperatorClicked = true;
}

// ------------EQUALS BUTTON ---------------------------------------

var equalsButton = document.getElementById("buttonEqual");
equalsButton.addEventListener("click", equalsClicked);

function equalsClicked (){
    var firstNumber = parseInt(inputBoxLeft.innerHTML);
    var secondNumber = parseInt(inputBoxRight.innerHTML);
    var operator = inputBoxMiddle.innerHTML;
    var result;
    switch (operator) {
        case "+": 
            result = firstNumber + secondNumber;
            break;
        case "-": 
            result = firstNumber - secondNumber;
            break;
        case "*": 
            result = firstNumber * secondNumber
            break;
        case "/":
            result = firstNumber / secondNumber
            break;
    }

    // console.log(result); result 
    document.getElementById("result").innerHTML = result;

    // inputTotal.innerHTML = this.innerHTML;
}












// var buttonNumber = document.getElementsByClassName("ButtonNumber");
// for(var i = 0; i < buttonNumber.length; i++){
//     buttonNumber[i].addEventListener("click", numberButtonClicked);
// }

// function numberButtonClicked (){
//     console.log(this);
// }





//buttonAddition = function () {
//     var inputBox2 = document.getElementById("input-box2");
//     inputBox2.innerHTML = "+";
// ;
// }

// var buttonAddition = document.getElementById("buttonAddition").addEventListener('click', buttonAddition);



// buttonEqual = function (){
//     var result = document.getElementById("result");

// }

// var buttonEqual = document.getElementById("buttonEqual").addEventListener('click', buttonEqual);
