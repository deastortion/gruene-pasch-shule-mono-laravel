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






// ===== RESOURCE CODE =====
var selected = [];
var form = document.getElementById('delete');
var selectHTML = document.getElementById('selected-number');

const checkboxes = document.querySelectorAll('.checkbox');
const checkboxAll = document.getElementById('checkbox-all');



// Check for a checkbox
if (checkboxes) {
    checkboxes.forEach(checkbox => checkbox.addEventListener('click', function () {

        if (checkbox.checked) {
            selected.push(checkbox.value);

        } else {
            let index = selected.indexOf(checkbox.value);
            selected.splice(index, 1);

        }

        editHTML();

    }));
}


// Check for the checkbox which selects all checkboxes
if (checkboxAll) {
    checkboxAll.addEventListener('click', function () {
        if (checkboxAll.checked) {

            checkboxes.forEach((checkbox) => {
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



// ==== SELECT-PAGE FORM =====
var pageForm = document.getElementById('pageForm');
var pageInput = document.getElementById('pageInput');

function pageFormSubmit(resource) {
    let page = pageInput.value;
    pageForm.action = `/dashboard/${resource}?page=${page}`;
}






// ===== SOME EXTRA FUNCTIONS =====
function editHTML() {
    selectHTML.innerText = selected.length;
}

function sendRequest(resource) {
    if (selected.length > 0) {
        form.action = `/dashboard/${resource}/${selected}`;
        form.submit();
    }
}
