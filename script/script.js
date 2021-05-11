let paymentDiv;

if (window.location.href.includes("shipping.php")) {
    paymentDiv = document.getElementById("payment");
    paymentDiv.style.display = "none";
}

function changePayment() {
    let options = document.getElementById("option");
    if (options.options[options.selectedIndex].value == 1) {
        paymentDiv.style.display = "none";
    } else {
        let paymentTitle = document.getElementById("paymentLabel");
        let paymentPlaceholder = document.getElementsByName("payment")[0];
        paymentTitle.innerHTML = options.options[options.selectedIndex].text + " Number";
        paymentPlaceholder.placeholder = "Enter your " + options.options[options.selectedIndex].text + " number";
        paymentDiv.style.display = "block";
    }
}