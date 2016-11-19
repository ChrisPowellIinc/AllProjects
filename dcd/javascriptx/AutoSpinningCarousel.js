var AutoSpinningCarousel = function(element, interval, delay, horizontal)
{
    this.isHorizontal = horizontal;

    this.__elements = {
        container: element,
        carousel: element.querySelector('div.spinnable-carousel')
    };

    this.__init();

    this.__counter = 1;
    var self = this;
    setTimeout(function() {
        self.__updatePerspective(new Vector(0.0, 1.0 / 6 * self.__counter++));
        setInterval(function() {
            self.__updatePerspective(new Vector(0.0, 1.0 / 6 * self.__counter++));
        }, interval);
    }, delay);
};

AutoSpinningCarousel.prototype = SpinnableCarousel.prototype;

AutoSpinningCarousel.prototype.__init = function()
{
    this.__initResize();
    this.__init3d();
    this.__updatePerspective(new Vector(0, 0));
}