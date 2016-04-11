/* outsourced js components of the site */

/*general stuff*/

/**
 * Determine the mobile operating system.
 * This function either returns 'iOS', 'Android' or 'unknown'
 *
 * @returns {String}
 */
function getMobileOperatingSystem() {
  var userAgent = navigator.userAgent || navigator.vendor || window.opera;

  if (userAgent.match(/iPad/i) || userAgent.match(/iPhone/i) || userAgent.match(/iPod/i)) {
    return 'iOS';

  } else if (userAgent.match(/Android/i)) {

    return 'Android';
  } else {
    return 'unknown';
  }
}

/*function snapper(getMobileOperatingSystem()) {
  var ele = document.getElementById('avatar_span')
  if (getMobileOperatingSystem == 'iOS' ^ getMobileOperatingSystem == 'Android') {
    ele.innerHTML = '<a href="snapchat://add/jj_wedemeyer" alt="me on snapchat"><img src="images/avatar.jpg" alt="" height="122" width="122" id="img" /></a>'
  }
  if (getMobileOperatingSystem == 'unknown') {
    ele.innerHTML = '<img src="images/snapcode.png" alt="" height="122" width="122" id="snapcode" />'
  }
}


/*cheet.js section*/
function dancer(dancevid) {
  if (dancevid == undefined) {
    document.getElementById('bgvid').style.display = (document.getElementById('bgvid').style.display == 'block' ? 'none' : 'block');
  }
  if (dancevid == true) {
    document.getElementById('bgvid').style.display = 'block';
  } else if (dancevid == false) {
    document.getElementById('bgvid').style.display = 'none';
  }
};
/*function pulse() {
  var children = document.getElementById('pulser').children;
  for (var i = 0; i < children.length; i++) {
    children[i].firstElementChild.classList.add('fa-pulse');
  }
  document.
  setTimeout(function() {
    for (var i = 0; i < children.length; i++) {
      children[i].firstElementChild.classList.remove('fa-pulse');
    }
  }, 5000);
}*/
