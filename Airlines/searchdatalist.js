var country_arr = new Array("Kansas","San Diego","Denver","Dallas","Boston","Chicago");
var s_a = new Array();
s_a[0]="";
s_a[1]="Arizona|Dallas|SpringField|Seattle|Portland";
s_a[2]="Ohio|Austin|Sacremento";
s_a[3]="Missouri|San Jose|Okhlahama";
s_a[3]="Kansas|Virginia|Alaska|Alabama";
s_a[3]="Florida|New Jersey|Montana";
s_a[3]="Nevada|Iowa";

function populateCountries(source, destination) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(source);
    countryElement.length = 0;
    countryElement.options[0] = new Option('From Place', '-1');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i], country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (destination) {
        countryElement.onchange = function () {
            populateStates(source, destination);
        };
    }
}
function populateStates(source, destination) {

    var selectedCountryIndex = document.getElementById(source).selectedIndex;

    var stateElement = document.getElementById(destination);

    stateElement.length = 0; // Fixed by Julian Woods
    stateElement.options[0] = new Option('To Place', '');
    stateElement.selectedIndex = 0;

    var state_arr = s_a[selectedCountryIndex].split("|");

    for (var i = 0; i < state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i], state_arr[i]);
    }
}
