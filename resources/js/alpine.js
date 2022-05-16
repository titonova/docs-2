/* eslint-disable import/namespace */
/* eslint-disable import/default */
import Alpine from 'alpinejs'

window.Alpine = Alpine

window.Wireui.hook('load', () => Alpine.start())
