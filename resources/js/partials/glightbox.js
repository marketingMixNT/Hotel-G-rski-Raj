import GLightbox from "glightbox";
import "glightbox/dist/css/glightbox.min.css";
const lightbox = GLightbox({ loop: true });

Livewire.hook('morph.added',  ({ el }) => {
    const lightbox = GLightbox({ loop: true });
 })

// import GLightbox from "glightbox";
// import "glightbox/dist/css/glightbox.min.css";

// let lightbox = null;

// document.addEventListener('DOMContentLoaded', function () {
//     // Initialize Lightbox on page load
//     lightbox = GLightbox({ loop: true });

//     Livewire.hook('message.processed', (message, component) => {
//         // Destroy the previous Lightbox instance if it exists
//         if (lightbox) {
//             lightbox.destroy();
//         }

//         // Reinitialize Lightbox after Livewire updates the DOM
//         lightbox = GLightbox({ loop: true });
//     });
// });


