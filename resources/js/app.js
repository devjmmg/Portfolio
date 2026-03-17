import './bootstrap';

import Alpine from 'alpinejs';
import { activeNavigation } from './navigation-guest';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    initApp();
})

function initApp() {
    activeNavigation();
}