let form = document.querySelector('.previous-log-in');
let emailInput = document.querySelector('#email');
// let remove = document.querySelector('#remove');
let isopen = false;
count = 2;
function account(element) {
    if (isopen == false) {
        form.classList.remove('hide-log-in');
        emailInput.value = element.id;
        isopen = true;
    } else if (emailInput.value == element.id && isopen == true) {
        form.classList.add('hide-log-in');
        emailInput.value = "";
        isopen = false;
    } else if (emailInput.value != element.id && isopen == true) {
        emailInput.value = element.id;
        isopen = true;
    }
    console.log(emailInput.value);
    console.log(element.id);
    console.log(isopen);
}

function remove(element) {
    count--;
    if (count == 0) {
        window.location.replace("signin.php");
    }
    element.parentElement.parentElement.classList.add('hidden');
    // alert("As this is a demo it has only been hidden");
    form.classList.add('hide-log-in');
    emailInput.value = "";
    isopen = false;
}

// remove.addEventListener('click', function(evt) {
//     // alert("This would be removed.");
//     console.log('HI');
// });

