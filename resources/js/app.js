import './bootstrap';

import Alpine from 'alpinejs';
import Swal from 'sweetalert2'
import { activeNavigation } from './navigation-guest';

window.Alpine = Alpine;

Alpine.start();
window.Swal = Swal;

document.addEventListener('DOMContentLoaded', () => {
    initApp();
})

function initApp() {
    activeNavigation();
}