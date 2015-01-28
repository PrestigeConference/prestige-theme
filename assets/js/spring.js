Element.prototype.listen = function(event, callback) {
    if(this.attachEvent) {
        this.attachEvent("on" + event, function() {callback.call(this);});
    } else if(this.addEventListener) {
        this.addEventListener(event, callback, false);
    }
};

Element.prototype.hasAClass = function(className) {
    var rx = new RegExp('(\\s|^)' + className + '(\\s|$)');

    if(this.className.match(rx)) {
        return true;
    }

    return false;
}

Element.prototype.addAClass = function(className) {
    if(this.hasAClass(className) == false) {
        this.className += ' ' + className;
    }
}

Element.prototype.removeAClass = function(className) {
    if(this.hasAClass(className)) {
        var rx = new RegExp('(\\s|^)' + className + '(\\s|$)', 'g');
        this.className = this.className.replace(rx, ' ');
    }
}

;(function(){
    //Add event listeners to buttons
    var menuBtn = document.getElementById('openMainMenu');
    var sidebarBtn = document.getElementById('openSidebar');
    var closeMenuBtn = document.getElementById('closeMainMenu');

    if (menuBtn.attachEvent) {
        menuBtn.attachEvent('onclick', openCloseMenu);
        closeMenuBtn.attachEvent('onclick', openCloseMenu);

        if(sidebarBtn !== null) {
            sidebarBtn.attachEvent('onclick', openSidebar);
        }
    } else {

        menuBtn.addEventListener('click', openCloseMenu);
        closeMenuBtn.addEventListener('click', openCloseMenu);

        if(sidebarBtn !== null) {
            sidebarBtn.addEventListener('click', openSidebar);
        }
    }

    function openCloseMenu() {
        var htmlEl = document.querySelectorAll('html')[0],
            navEl = document.querySelectorAll('.nav-main')[0];


        // Add or remove the open-menu class
        if (htmlEl.hasAClass('open-the-menu') == false) {
            navEl.removeAClass('closed');
            setTimeout(function() {
                htmlEl.addAClass('open-the-menu');
            }, 10);
        } else {
            htmlEl.removeAClass('open-the-menu');
            setTimeout(function() {
                navEl.addAClass('closed');
            }, 500);
        }
    }

    function openSidebar() {
        var htmlEl = document.querySelectorAll('html')[0];
        var htmlElClasses = htmlEl.className;
        var sidebar = document.querySelectorAll('.content--sidebar')[0];

        // Add or remove the open-menu class
        if (htmlElClasses.indexOf('open-the-sidebar') === -1) {
            sidebar.style.display = 'block';
            htmlEl.className = htmlElClasses + ' open-the-sidebar';

        } else {
            htmlEl.className = htmlElClasses.replace(' open-the-sidebar', '');

            setTimeout(function() {
                sidebar.style.display = 'none';
            }, 300);
        }
    }

    var buildings = document.querySelectorAll('.building, .underline');
    for(var i = 0, len = buildings.length; i < len; i++) {
        (function(b) {
            var length = b.getTotalLength();

            b.style.strokeDasharray = length + ' ' + length;
            b.style.strokeDashoffset = length;

            var currentFrame = 0;
            var totalFrames = 120;
            var handle = 0;

            var drawPath = function() {
                var progress = currentFrame / totalFrames;
                if (progress >= 1) {
                    window.cancelAnimationFrame(handle);
                } else {
                    currentFrame++;
                    b.style.strokeDashoffset = Math.floor(length * (1 - progress));
                    handle = window.requestAnimationFrame(drawPath);
                }
            }

            drawPath();

        })(buildings[i]);
    }
})();

window.onload = function() {
    if(Modernizr.mq("(min-width:769px")) {
        var s = skrollr.init({forceHeight: false});
    } else {
        var s = skrollr.init({forceHeight: true});
    }

    var quoteReadMoreLinks = document.querySelectorAll('.quote--read-more-link');

    for(var i = 0, l = quoteReadMoreLinks.length; i < l; i++) {
        quoteReadMoreLinks[i].listen('click', showReadMoreContent);
    }

    //The options (second parameter) are all optional. The values shown are the default values.
    skrollr.menu.init(s, {
        //skrollr will smoothly animate to the new position using `animateTo`.
        animate: true,

        //The easing function to use.
        easing: 'sqrt',

        //Multiply your data-[offset] values so they match those set in skrollr.init
        scale: 2,

        //How long the animation should take in ms.
        duration: function(currentTop, targetTop) {
            //By default, the duration is hardcoded at 500ms.
            return 500;

            //But you could calculate a value based on the current scroll position (`currentTop`) and the target scroll position (`targetTop`).
            //return Math.abs(currentTop - targetTop) * 10;
        },

        //If you pass a handleLink function you'll disable `data-menu-top` and `data-menu-offset`.
        //You are in control where skrollr will scroll to. You get the clicked link as a parameter and are expected to return a number.
        /*handleLink: function(link) {
         return 400;//Hardcoding 400 doesn't make much sense.
         }*/
    });
}

function showReadMoreContent(event) {
    var readMoreContent = event.target.parentNode.querySelector('.quote--read-more-content');

    readMoreContent.removeAClass('hidden');

    event.target.style.display = 'none';
}