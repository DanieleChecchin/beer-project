<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteModal = document.getElementById('deleteModal');
        const deleteForm = document.getElementById('deleteForm');
        const modalMessage = document.getElementById('modal-message');

       
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const propertyId = button.getAttribute('data-id');
            const propertyName = document.getElementById('apartment' + propertyId).innerText;

            modalMessage.innerHTML =
                `<span>Are you sure you want to delete the <b>${propertyName}</b>?</span>`;
            deleteForm.action = `/admin/properties/${propertyId}`;
        });

        
        document.body.style.opacity = 0;
        document.body.style.transition = "opacity 0.5s ease-in-out";
        setTimeout(() => {
            document.body.style.opacity = 1;
        }, 100);
    });
</script>