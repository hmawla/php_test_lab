function moveNext() {
    var theDiv = document.getElementById('theDiv');
    var style = window.getComputedStyle(theDiv);
    var matrix = new WebKitCSSMatrix(style.webkitTransform);
    var pos = matrix.m41;
    theDiv.style.transform = "translateX(" + (pos + 50) + "px)";
}

function movePrev() {
    var theDiv = document.getElementById('theDiv');
    var style = window.getComputedStyle(theDiv);
    var matrix = new WebKitCSSMatrix(style.webkitTransform);
    var pos = matrix.m41;
    theDiv.style.transform = "translateX(" + (pos - 50) + "px)";
}
var newX, moveX, oldX, pos;
var theDiv = document.getElementById('theDiv');
var theBigDiv = document.getElementById('theDivv');
var _window$popmotion = window.popmotion;
var listen = _window$popmotion.listen;
const theDivv = document.querySelector('#theDivv');
console.log(theBigDiv.offsetWidth);
var pointX;
const {
    pointer
} = window.popmotion;
var pointerTracker;
var tracking = false;
const onTracking = listen(document, 'mousemove touchmove').filter(() => tracking);
onTracking.start(attachMove);
let startEasingPositive;
let startEasingNegative;

function startTracking() {
    pointerTracker = pointer()
        .start(({
            x
        }) => pointX = x);
    pointerTracker;
    oldX = pointerTracker.x;
    tracking = true;
    document.getElementById('tester').innerHTML = tracking + '<br>' + pointX + '<BR>';;
}

function stopTracking() {
    tracking = false;
    pointerTracker.stop();
    console.log(pos);
    if (pos > 0) {
        easeTo(theDiv, pos, 0);
    } else if (pos < (theBigDiv.offsetWidth - 2700)) {
        easeTo(theDiv, pos, theBigDiv.offsetWidth - 2700);
    }
    document.getElementById('tester').innerHTML = tracking + '<br>' + pointX + '<BR>';
};

listen(theDivv, 'mousedown touchstart').start(startTracking);
listen(document, 'mouseup touchend').start(stopTracking);

function attachMove() {
    clearInterval(startEasingPositive);
    clearInterval(startEasingNegative);
    newX = pointX;
    var coor;
    moveX = oldX - newX;
    coor = "Position" + pos + "<br>X coords: " + newX + "<br> old x: " + oldX + "<br> Move: " + moveX + "<br> Is attached? " + tracking;
    var style = window.getComputedStyle(theDiv);
    var matrix = new WebKitCSSMatrix(style.webkitTransform);
    pos = matrix.m41;
    if (pos < 50 && pos > ((-2700 + theBigDiv.offsetWidth - 60))) {
        theDiv.style.transform = "translateX(" + (pos - moveX) + "px)";
    }

    oldX = newX;
    document.getElementById('Coordinator').innerHTML = coor;


}

function easeTo(theElement, initPos, toPos) {
    var easeSpeed = 2;
    var theMover = initPos;
    clearInterval(startEasingPositive);
    clearInterval(startEasingNegative);
    if (initPos - toPos > 0) {
        startEasingNegative = setInterval(function() {
            theMover -= easeSpeed;
            theElement.style.transform = "translateX(" + (theMover) + "px)";
            if (theMover < toPos) {
                pos = toPos
                clearInterval(startEasingNegative);
                theElement.style.transform = "translateX(" + toPos + "px)";
            }
        }, easeSpeed * 4);
    } else {
        startEasingPositive = setInterval(function() {
            theMover += easeSpeed;
            theElement.style.transform = "translateX(" + (theMover) + "px)";
            if (theMover > toPos) {
                clearInterval(startEasingPositive);
                pos = toPos;
                theElement.style.transform = "translateX(" + toPos + "px)";
            }
        }, easeSpeed * 4);
    }
}

function setScrollableCarouselWidth(theRightWidth) {
    theDiv.style.width = 300 * theRightWidth + "px";
}