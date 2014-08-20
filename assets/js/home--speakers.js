

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

document.getElementById('prevSpeaker').addEventListener('click', function() {
    displayPreviousSpeaker();
}, false);

document.getElementById('nextSpeaker').addEventListener('click', function() {
    displayNextSpeaker();
}, false);

function doOnSpeakerClicked(e) {
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

            highlightSpecificSpeaker(speaker);
        }
    }
};

function highlightSpecificSpeaker(speaker) {
    speaker.classList.add('active');

    var biography = speaker.querySelectorAll('.speaker--biography')[0];

    var headerDescription = document.querySelectorAll('.header--description')[0];

    headerDescription.innerHTML = biography.innerHTML;
}

function displayNextSpeaker() {
    var speakers = document.querySelectorAll('.speaker'),
        presentlyActiveSpeaker = -1;

    for(var i = 0, len = speakers.length; i < len; i++) {
        if(speakers[i].classList.contains('active')) {
            presentlyActiveSpeaker = i;
            speakers[i].classList.remove('active');
        }

        if(presentlyActiveSpeaker == len - 1) {
            presentlyActiveSpeaker = -1;
        }
    }

    highlightSpecificSpeaker(speakers[presentlyActiveSpeaker + 1]);

    var speakersWrapper = document.querySelectorAll('.speakers--list_wrapper')[0];

    console.log(presentlyActiveSpeaker);

    speakerScrollAnimate(speakersWrapper,  speakers[0].offsetWidth * (presentlyActiveSpeaker + 1), 'next');
}

function displayPreviousSpeaker() {
    var speakers = document.querySelectorAll('.speaker'),
        presentlyActiveSpeaker = speakers.length;

    for(var i = 0, len = speakers.length; i < len; i++) {
        if(speakers[i].classList.contains('active')) {
            presentlyActiveSpeaker = i;
            speakers[i].classList.remove('active');
        }

        if(presentlyActiveSpeaker == 0) {
            presentlyActiveSpeaker = speakers.length;
        }
    }

    highlightSpecificSpeaker(speakers[presentlyActiveSpeaker - 1]);

    var speakersWrapper = document.querySelectorAll('.speakers--list_wrapper')[0];

    console.log(presentlyActiveSpeaker);

    speakerScrollAnimate(speakersWrapper,  speakers[0].offsetWidth * (presentlyActiveSpeaker - 1), 'previous');
}

function speakerScrollAnimate(speakerWrapper, totalDistance, direction) {
    var totalFrames = 30,
        presentFrame = 1,
        presentScroll = speakerWrapper.scrollLeft,
        relativeDistance = totalDistance - presentScroll,
        distancePerFrame = relativeDistance / totalFrames;

    function animateNow() {
        if(presentFrame <= totalFrames) {
            if (direction = 'next') {
                speakerWrapper.scrollLeft = distancePerFrame * presentFrame + presentScroll;
            } else {
                speakerWrapper.scrollLeft = distancePerFrame * presentFrame - presentScroll;
            }

            presentFrame++;
            setTimeout(function() {
                animateNow();
            }, 1);
        }
    }

    animateNow();
}