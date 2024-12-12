import './bootstrap';
import Alpine from 'alpinejs';
import { countdown } from './countdown';

window.Alpine = Alpine;

Alpine.data('countdown', countdown);

Alpine.start();