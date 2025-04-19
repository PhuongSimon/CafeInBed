import { Application } from "@hotwired/stimulus"
import CarouselController from "./carousel_controller"

window.Stimulus = Application.start()
Stimulus.register("carousel", CarouselController)