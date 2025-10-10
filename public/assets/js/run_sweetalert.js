document.addEventListener('livewire:init', function () {
    Livewire.on('sweetalert', function (data) {
        Swal.fire({
            icon: data[0].icon,
            title: data[0].title,
            html: data[0].html,
            showConfirmButton: data[0].btn ?? false,
            timer: data[0].timer ?? null
        });
    });
});