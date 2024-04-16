const form = document.getElementById("form");

form.addEventListener("submit", (e) => {
    const emailTest = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const passwordTest = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;
    const nameTest = /^[a-zA-Z]{2,}$/;
    const mobileTest = /^[0-9]{10}$/;
    const pincodeTest = /^[0-9]{6}$/;
    const bloodGroupTest = /^(A|B|AB|O|ABO)[+-]$/;
    const addressTest = /^\w+$/;

    if (!nameTest.test(form.fname.value)) {
        alert(
            "Invalid first name. First name must be at least 2 characters long and contain only alphabets."
        );
        form.fname.focus();
        e.preventDefault();
        return;
    }
    if (!nameTest.test(form.mname.value)) {
        alert(
            "Invalid middle name. Middle name must be at least 2 characters long and contain only alphabets."
        );
        form.mname.focus();
        e.preventDefault();
        return;
    }
    if (!nameTest.test(form.lname.value)) {
        alert(
            "Invalid last name. Last name must be at least 2 characters long and contain only alphabets."
        );
        form.lname.focus();
        e.preventDefault();
        return;
    }

    if (!emailTest.test(form.email.value)) {
        alert("Invalid email. Email must be in the standard format");
        form.email.focus();
        e.preventDefault();
        return;
    }

    if (!mobileTest.test(form.mobile.value)) {
        alert(
            "Invalid mobile number. Mobile number must be 10 digits long and contain only numbers."
        );
        form.mobile.focus();
        e.preventDefault();
        return;
    }

    if (!addressTest.test(form.street.value)) {
        alert("Street cannot be empty. Please enter a valid street name.");
        form.street.focus();
        e.preventDefault();
        return;
    }
    if (!addressTest.test(form.city.value)) {
        alert("City cannot be empty. Please enter a valid city name.");
        form.city.focus();
        e.preventDefault();
        return;
    }
    if (!addressTest.test(form.state.value)) {
        alert("State cannot be empty. Please enter a valid state name.");
        form.state.focus();
        e.preventDefault();
        return;
    }
    if (!pincodeTest.test(form.pincode.value)) {
        alert(
            "Invalid pincode. Pincode must be 6 digits long and contain only numbers."
        );
        form.pincode.focus();
        e.preventDefault();
        return;
    }

    let bloodGroup = String(form.bloodgroup.value);
    bloodGroup = bloodGroup.toUpperCase();
    if (!bloodGroupTest.test(bloodGroup)) {
        alert(
            "Invalid blood group. Blood group must be one of A, B, AB, O, ABO followed by + or -"
        );
        form.bloodgroup.focus();
        e.preventDefault();
        return;
    }

    if (!mobileTest.test(form.emergencyMobile.value)) {
        alert(
            "Invalid emergency mobile number. Mobile number must be 10 digits long and contain only numbers."
        );
        form.emergencyMobile.focus();
        e.preventDefault();
        return;
    }

    if (!passwordTest.test(form.password.value)) {
        alert(
            "Invalid password. Password must be at least 8 characters long, contain at least one number, and contain at least one special character."
        );
        form.password.focus();
        e.preventDefault();
        return;
    }

    window.location.href = "program_selection.html";
    return;
});
