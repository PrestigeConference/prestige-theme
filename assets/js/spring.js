;(function($){
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
        var htmlEl = document.querySelectorAll('html')[0];
        var htmlElClasses = htmlEl.className;

        // Add or remove the open-menu class
        if (htmlElClasses.indexOf('open-the-menu') === -1) {
            htmlEl.className = htmlElClasses + ' open-the-menu';
        } else {
            htmlEl.className = htmlElClasses.replace(' open-the-menu', '');
        }
    }

    function openSidebar() {
        console.log('here');
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
})(jQuery);