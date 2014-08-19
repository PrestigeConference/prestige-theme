

Element.prototype.listen = function(event, callback) {
    if(this.attachEvent) {
        this.attachEvent("on" + event, function() {callback.call(this);});
    } else if(this.addEventListener) {
        this.addEventListener(event, callback, false);
    }
};


    var speakers = document.querySelectorAll('.speaker');
    for(var i = 0, len = speakers.length; i < len; i++) {
        console.log(speakers[i]);
        speakers[i].addEventListener('click', function() {
            doOnSpeakerClicked(event);
        }, false);
    }

    var doOnSpeakerClicked = function(e) {
        if(Modernizr.mq('(min-width: 48.5em)')) {
            var speaker = e.target;

            //find the speaker node
            while(speaker.classList.contains('speaker') == false) {
                speaker = speaker.parentNode;
            }

            if(speaker.classList.contains('active') ==  false) {
                var speakers = document.querySelectorAll('.speaker');

                for(var i = 0, len = speakers.length; i < len; i++) {
                    speakers[i].classList.remove('active');
                }

                speaker.classList.add('active');
            }



            var biography = speaker.querySelectorAll('.speaker--biography')[0];

            var headerDescription = document.querySelectorAll('.header--description')[0];

            headerDescription.innerHTML = biography.innerHTML;
        }
    };