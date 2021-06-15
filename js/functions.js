//
// general
//

function animation() {
    AOS.init({
      startEvent: "DOMContentLoaded",
      offset: 0,
      delay: 50,
      duration: 1000,
      easing: 'ease',
      once: true,
      disable: "mobile",
    });
}