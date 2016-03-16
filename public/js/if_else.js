"use strict";
// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'red'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
var message;
if (color == 'red'){
    message = "red was random";
} else if (color == 'orange'){
    message = "orange was random";
} else if (color == 'yellow'){
    message = "yellow was randomly selected";
} else if (color == 'green'){
    message = "Green was randomly selected";
} else if (color == 'blue'){
    message = "Blue was selected";
} else {
    message = "I do not know anything by that color.";
}

var message;
if (color == favorite){
    message = "Random color matches red;"
}
console.log (message);

switch (color) {
    case "orange":
        console.log ("orange juice");
        break;
    case "yellow":
        console.log ("yellow mellow");
        break;
    case "green":
        console.log ("jolly green giant");
        break;
    case "blue":
        console.log ("blue man group");
        break;
    default:
        console.log ("indigo and violet")
}

switch (favorite) {
    case "orange":
    case "yellow":
    case "green":
    case "blue":
    case "indigo":
    case "violet":
    default:
        console.log("Red Room! Red Room!");
}

var yellow = 0;

while (yellow < 5){
    console.log ("I love sunshine yellow");
    yellow++;
}
