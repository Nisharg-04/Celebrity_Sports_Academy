const form = document.getElementById("inputForm");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    const emailTest = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/

    const passwordTest = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;

    if (!emailTest.test(form.email.value)) {
        alert(
            "Invalid email. Email must be in the standard format"
        );
        form.email.focus();
        return;
    }
    if (!passwordTest.test(form.password.value)) {
        alert(
            "Invalid password. Password must be at least 8 characters long, contain at least one number, and contain at least one special character."
        );
        form.password.focus();
        return;
    }
});
