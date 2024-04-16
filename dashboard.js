const addform = document.getElementById("addform");
const updateform = document.getElementById("updateform");
const deleteform = document.getElementById("deleteform");

addform.addEventListener("submit", (e) => {
    if (confirm("Are you sure you want to add this record?")) {
        return true;
    } else {
        e.preventDefault();
    }
});

updateform.addEventListener("submit", (e) => {
    if (confirm("Are you sure you want to update this record?")) {
        return true;
    } else {
        e.preventDefault();
    }
})

deleteform.addEventListener("submit", (e) => {
    if (confirm("Are you sure you want to delete this record?")) {
        return true;
    } else {
        e.preventDefault();
    }
})