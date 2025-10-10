document.addEventListener('livewire:init', function () {
    Livewire.on('sweetalert', function (data) {
        Swal.fire({
            icon: data[0].icon,
            title: data[0].title,
            html: data[0].html,
            showConfirmButton: data[0].btn ?? false,
            showCancelButton: data[0].btnCancel ?? false,
            confirmButtonText: data[0].btnText ?? "Ok",
            cancelButtonText: data[0].btnTextCancel ?? "Cancelar",
            cancelButtonColor: '#d33',
            timer: data[0].timer ?? null
        }).then((result)=>{
            if(result.isConfirmed){
                Livewire.dispatch(data[0].methodConfirm)
            }
        });
    });
});