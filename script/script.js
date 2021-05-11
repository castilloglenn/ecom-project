let paymentDiv;

if (window.location.href.includes("shipping.php")) {
    paymentDiv = document.getElementById("payment");
    paymentDiv.style.display = "none";
}

function changePayment() {
    let options = document.getElementById("option");
    let paymentPlaceholder = document.getElementsByName("payment")[0];
    if (options.options[options.selectedIndex].value == 1) {
        paymentDiv.style.display = "none";
        paymentPlaceholder.removeAttribute('required');
    } else {
        let paymentTitle = document.getElementById("paymentLabel");
        paymentTitle.innerHTML = options.options[options.selectedIndex].text + " Number";
        paymentPlaceholder.placeholder = "Enter your " + options.options[options.selectedIndex].text + " number";
        paymentDiv.style.display = "block";
        paymentPlaceholder.setAttribute('required', 'required');
        paymentPlaceholder.attributes['required'] = 'required';
    }
}