var speakers = document.querySelectorAll('.home--speaker');
for(var i = 0, len = speakers.length; i < len; i++) {
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
    var speaker = e.target ? e.target : e.srcElement;

    //find the speaker node
    while(speaker.hasAClass('home--speaker') == false) {
        speaker = speaker.parentNode;
    }

    if(Modernizr.mq('(min-width: 48.5em)')) {
        if(speaker.hasAClass('active') == false) {
            var speakers = document.querySelectorAll('.home--speaker');

            for(var i = 0, len = speakers.length; i < len; i++) {
                speakers[i].removeAClass('active');
            }

            highlightSpecificSpeaker(speaker);
        }
    } else {
        var newUrl = speaker.getAttribute('data-url');

        window.location.href = newUrl;
    }
}

function highlightSpecificSpeaker(speaker) {
    speaker.addAClass('active');


    var biography = speaker.querySelectorAll('.home--speaker--biography')[0];

    var headerDescription = document.querySelectorAll('.header--description')[0];

    headerDescription.innerHTML = biography.innerHTML;
}

function displayNextSpeaker() {
    var speakers = document.querySelectorAll('.home--speaker'),
        presentlyActiveSpeaker = -1;

    for(var i = 0, len = speakers.length; i < len; i++) {
        if(speakers[i].hasAClass('active')) {
            presentlyActiveSpeaker = i;
            speakers[i].removeAClass('active');
        }

        if(presentlyActiveSpeaker == len - 1) {
            presentlyActiveSpeaker = -1;
        }
    }

    highlightSpecificSpeaker(speakers[presentlyActiveSpeaker + 1]);

    var speakersWrapper = document.querySelectorAll('.home--speakers--list_wrapper')[0];

    speakerScrollAnimate(speakersWrapper,  speakers[0].offsetWidth * (presentlyActiveSpeaker + 1), 'next');
}

function displayPreviousSpeaker() {
    var speakers = document.querySelectorAll('.home--speaker'),
        presentlyActiveSpeaker = speakers.length;

    for(var i = 0, len = speakers.length; i < len; i++) {
        if(speakers[i].hasAClass('active')) {
            presentlyActiveSpeaker = i;
            speakers[i].removeAClass('active');
        }

        if(presentlyActiveSpeaker == 0) {
            presentlyActiveSpeaker = speakers.length;
        }
    }

    highlightSpecificSpeaker(speakers[presentlyActiveSpeaker - 1]);

    var speakersWrapper = document.querySelectorAll('.home--speakers--list_wrapper')[0];

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