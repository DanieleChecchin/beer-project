
const deleteFormElements = document.querySelectorAll("form.beer-destroyer");

deleteFormElements.forEach((formElement) => {
    formElement.addEventListener("submit", function (event) {
        event.preventDefault(); // blocca la propagazione dell'evento di riferimento

        const userChoice = window.confirm(`Are you sure ?`);

        if (userChoice === true) {
            this.submit();
        }
    });
});
