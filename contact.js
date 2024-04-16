const contactForm = document.getElementById("contactForm");

contactForm.addEventListener("submit", function (e) {
    const nameTest = /^[a-zA-Z]{2,15}$/;
    const emailTest = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    const phoneTest = /^[0-9]{10}$/;
    if (!nameTest.test(contactForm.name.value)) {
        e.preventDefault();
        alert("Name must be between 2 to 15 characters long");
        form.name.focus();
        return;
    } else if (!emailTest.test(contactForm.email.value)) {
        e.preventDefault();
        alert("Please enter email in standard format");
        form.email.focus();
        return;
    } else if (contactForm.subject.value.length < 2 || contactForm.subject.value.length > 15) {
        e.preventDefault();
        alert("Subject must be between 2 to 15 characters long");
        form.subject.focus();
        return;
    } else if (!phoneTest.test(contactForm.phone.value)) {
        e.preventDefault();
        alert("Phone number should be of 10 digits");
        form.phone.focus();
        return;
    } else if (contactForm.message.value.length === 0) {
        e.preventDefault();
        alert("Message should not be empty");
        form.message.focus();
        return;
    }
});
