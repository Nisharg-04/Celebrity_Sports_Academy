const form = document.getElementById("inputForm");

form.addEventListener("submit", (e) => {
    const emailTest = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/

    const passwordTest = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;

    console.log(form.email.value);
    console.log(form.password.value);

    if (!emailTest.test(form.email.value)) {
        alert(
            "Invalid email. Email must be in the standard format"
        );
        form.email.focus();
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
});
