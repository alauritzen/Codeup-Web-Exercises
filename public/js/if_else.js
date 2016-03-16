// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

if (color=='red') {
    console.log (color.replace(color.substring(0,1),(color.substring(0,1).toUpperCase())) + " makes bulls angry. Don't wear " + color + " in Pamplona!");
} else if (color=='orange') {
    console.log (color.replace(color.substring(0,1),(color.substring(0,1).toUpperCase())) + " you glad I didn't say \"banana\"?");
} else if (color=='yellow') {
    console.log (color.replace(color.substring(0,1),(color.substring(0,1).toUpperCase())) + " is the color of a Minion.");    
} else if (color=='green') {
    console.log (color.replace(color.substring(0,1),(color.substring(0,1).toUpperCase())) + "s is what you should eat on New Year's Day to make money in the new year.");
} else if (color=='blue') {
    console.log (color.replace(color.substring(0,1),(color.substring(0,1).toUpperCase())) + " is the color even Cowgirls get.");
} else {
    console.log ("I don't know anything about " + color + ".");
}


// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.


(color==favorite) ? console.log((color.replace(color.substring(0,1),(color.substring(0,1).toUpperCase())) + " is me favorite color.")) : console.log("But " + favorite + " is me favorite color.");
