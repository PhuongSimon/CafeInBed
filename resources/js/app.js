import './bootstrap';
import { Application } from '@hotwired/stimulus'
import CarouselController from './controllers/carousel_controller'

console.log("Stimulus loaded")

window.Stimulus = Application.start()
Stimulus.register('carousel', CarouselController)
