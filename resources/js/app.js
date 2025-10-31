import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

// Solo inicializar Dropzone si el elemento existe
document.addEventListener('DOMContentLoaded', function() {
    // Debug: Verificar que las imágenes se cargan
    const allImages = document.querySelectorAll('img');
    const unsplashImages = document.querySelectorAll('img[src*="unsplash"]');
    console.log(`Found ${allImages.length} total images on page`);
    console.log(`Found ${unsplashImages.length} Unsplash images on page`);
    
    // Debug todas las imágenes
    allImages.forEach((img, index) => {
        console.log(`Image ${index + 1}:`, img.src);
        img.addEventListener('load', () => {
            console.log(`Image ${index + 1} loaded successfully:`, img.src);
        });
        img.addEventListener('error', () => {
            console.error(`Image ${index + 1} failed to load:`, img.src);
        });
    });
    const dropzoneElement = document.querySelector("#dropzone");
    
    if (dropzoneElement) {
        const dropzone = new Dropzone("#dropzone", {
            dictDefaultMessage: "Sube aquí tu imágen",
            acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
            addRemoveLinks: true,
            dictRemoveFile: "Eliminar",
            maxFiles: 1,
            uploadMultiple: false,

            init: function() {
                const imagenInput = document.querySelector('[name="imagen"]');
                if (imagenInput && imagenInput.value.trim()) {
                    const imagenPublicada = {};
                    imagenPublicada.size = 1234;
                    imagenPublicada.name = imagenInput.value;

                    this.options.addedfile.call(this, imagenPublicada);
                    this.options.thumbnail.call(this, imagenPublicada, `/uploads/${imagenPublicada.name}`);
                    imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
                }
            }
        });

        // Eventos Dropzone
        dropzone.on('sending', function (file, xhr, formData) {
            // Evento de envío
        });

        dropzone.on('success', function (file, response) {
            console.log(response);
            const imagenInput = document.querySelector('[name="imagen"]');
            if (imagenInput) {
                imagenInput.value = response.imagen;
            }
        });

        dropzone.on('error', function (file, response) {
            console.error('Error uploading file:', response);
        });

        // Eliminar la imagen
        dropzone.on('removedfile', function (file, response) {
            const imagenInput = document.querySelector('[name="imagen"]');
            if (imagenInput) {
                imagenInput.value = '';
            }
        });
    }
});