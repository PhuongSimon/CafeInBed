import { Controller } from "@hotwired/stimulus"

export default class extends Controller {
  static targets = ["slideContainer", "slide", "indicator"]
  connect() {
    console.log("✅ Carousel controller connected")
    this.showSlide(this.activeSlideValue || 0)
  }
  static values = {
    activeSlide: Number
  }

  connect() {
    this.showSlide(this.activeSlideValue)
  }

  goToSlide(event) {
    const index = Number(event.params.index)
    this.activeSlideValue = index
    this.showSlide(index)
  }

  prevSlide() {
    const newIndex = (this.activeSlideValue - 1 + this.slideTargets.length) % this.slideTargets.length
    this.activeSlideValue = newIndex
    this.showSlide(newIndex)
  }

  nextSlide() {
    const newIndex = (this.activeSlideValue + 1) % this.slideTargets.length
    this.activeSlideValue = newIndex
    this.showSlide(newIndex)
  }

  showSlide(index) {
    const slideWidth = this.slideTargets[0].offsetWidth
    this.slideContainerTarget.style.transform = `translateX(-${index * slideWidth}px)`
    this.slideContainerTarget.style.transitionDuration = '1000ms'

    this.indicatorTargets.forEach((btn, i) => {
      btn.classList.toggle("active", i === index)
      btn.classList.toggle("active-left", i < index)
      btn.classList.toggle("active-right", i > index)
    })
  }
}
