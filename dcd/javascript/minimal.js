// Implement a super simple (non-standard) version of bind, if not already there.
if (!Function.prototype.bind){
    Function.prototype.bind = function (bind){
        var self = this;
        return function(){
            return self.apply(bind, arguments);
        };
    };
}

// Find out some specific browser stuff
var CSS = {};
(function(){

    var styles = document.createElement('div').style;

    var test_properties = function(properties){
        return properties.filter(function(prop){
            return (styles[prop] !== undefined);
        })[0];
    };

    CSS.transform = test_properties([
        'transform',
        'WebkitTransform',
        'MozTransform',
        'msTransform',
        'OTransform'
    ]);

})();


// Credit mr.doob and paul irish.
// http://paulirish.com/2011/requestanimationframe-for-smart-animating
window.requestAnimFrame = (function(){
    return  window.requestAnimationFrame   ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame    ||
        window.oRequestAnimationFrame      ||
        window.msRequestAnimationFrame     ||
        function(callback, element){
            window.setTimeout(callback, 1000 / 60);
        };
})();

(function(){

Array.slice = function(){
    var slice = Array.prototype.slice;
    return slice.apply(arguments[0], slice.call(arguments, 1));
};

var methods = {

    addClass: function(){
        var existing = this.className.split(' ');

        Array.slice(arguments).forEach(function(className){
            if (existing.indexOf(className) < 0) existing.push(className);
        });

        this.className = existing.join(' ');
    },

    removeClass: function(){
        var existing = this.className.split(' '),
            args = Array.slice(arguments);

        this.className = existing.filter(function(className){
            return args.indexOf(className) < 0;
        }).join(' ');
    }
};

for(var method in methods){
    HTMLElement.prototype[method] = methods[method];
}


document.addEvent = function(eventName, eventHandler){
    this.addEventListener(eventName, eventHandler, false);
};

document.addEvents = function(events){
    for (var eventName in events){
        this.addEvent(eventName, events[eventName]);}
};

document.removeEvent = function(eventName, eventHandler){
    this.removeEventListener(eventName, eventHandler, false);
};


})(); // end prototype modifications.
