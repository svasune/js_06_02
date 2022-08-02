function triggerSomething() {
    // alert("Hello, crap");
    let b = 555;
}

function onInit() {
    let a = "test56565";
    triggerSomething();
    let person = {
        firstName: "",
        lastname: ""
    };
    changeSomthing(person);
    alert("Hello" + person.firstName + " " + person.lastname);
}

function changeSomthing(person) {
    person.firstName = prompt("Enter name");
    person.lastName = prompt("Enter surname");

}