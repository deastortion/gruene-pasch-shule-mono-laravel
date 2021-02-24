// ==== SHOW NAVBAR ====
const showNavbar = (toggleId, navId, bodyId, headerId) => {
    const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId),
        bodypd = document.getElementById(bodyId),
        headerpd = document.getElementById(headerId)

    // Validate that all variables exist
    if (toggle && nav && bodypd && headerpd) {
        toggle.addEventListener('click', () => {
            // Show navbar
            nav.classList.toggle('show');

            // change icon
            toggle.classList.toggle(['las', 'la-times']);

            // add padding to body
            bodypd.classList.toggle('body-pd');

            // add padding to header
            headerpd.classList.toggle('body-pd');
        });
    }
}

showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header');

var selected = [];
var form = document.getElementById('delete');
var selectHTML = document.getElementById('selected-number');

const checkboxes = document.querySelectorAll('.checkbox');
const checkboxAll = document.getElementById('checkbox-all');
console.log(checkboxAll);
console.log(checkboxes);


if (checkboxes) {
    checkboxes.forEach(checkbox => checkbox.addEventListener('click', function () {

        if (checkbox.checked) {
            console.log('checked');
            selected.push(checkbox.value);
            console.log(selected);

        } else {
            console.log('unchecked');
            let index = selected.indexOf(checkbox.value);
            selected.splice(index, 1);
            console.log(selected);

        }

        editHTML();

    }));
}

if (checkboxAll) {
    checkboxAll.addEventListener('click', function () {
        if (checkboxAll.checked) {
            console.log('asd');

            checkboxes.forEach((checkbox) => {
                console.log(checkbox);
                checkbox.checked = true;
                selected.push(checkbox.value);
            });
        } else {
            checkboxes.forEach((checkbox) => {
                checkbox.checked = false;
                let index = selected.indexOf(checkbox.value);
                selected.splice(index, 1);
            });
        }

        editHTML();
    });

}


function editHTML() {
    selectHTML.innerText = selected.length;
}


function sendRequest(resource) {
    if (selected.length > 0) {
        form.action = `/dashboard/${resource}/${selected}`;
        console.log(form.action);
        form.submit();
    }
}



var pageForm = document.getElementById('pageForm');
var pageInput = document.getElementById('pageInput');

function pageFormSubmit(resource) {
    let page = pageInput.value;
    pageForm.action = `/dashboard/${resource}?page=${page}`;
}



// document.getElementById('checkbox-' + {{ $event->id }}).click(); this.classList.toggle('selected');


// let rows = document.querySelectorAll('.tr');

// rows.forEach(row => row.addEventListener('click', function(event) {

// }));


// ==== LINK ACTIVE ====
// const linkColor = document.querySelectorAll('.nav__link');

// function colorLink() {
//     if(linkColor) {
//         linkColor.forEach(l => l.classList.remove('active'));
//         this.classList.add('active');
//     }
// }

// linkColor.forEach(l => l.addEventListener('click', colorLink));


