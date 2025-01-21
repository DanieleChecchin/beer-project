console.log('soft delite');

const deleteFormElements = document.querySelectorAll("form.beer-destroyer");
// console.log(deleteFormElements);

deleteFormElements.forEach((formElement) => {
    formElement.addEventListener("submit", function (event) {
        event.preventDefault(); // blocca la propagazione dell'evento di riferimento

        const userChoice = window.confirm(`Sei sicuro di voler eliminare la birra ${this.getAttribute("custom-data-name")}?`);

        if (userChoice === true) {
            this.submit();
        }
    });
});