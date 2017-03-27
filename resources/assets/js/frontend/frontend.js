/**
 * Imports
 */
import tether from 'tether';
import scroller from 'scrollpos-styler';
import Wallop from 'Wallop';
global.Tether = tether;
const boostrap = require('bootstrap');
const Instafeed = require("instafeed.js");

$(document).ready(function($) {

  function addClass(element, className) {
    if (!element) { return; }
    element.className = element.className.replace(/\s+$/gi, '') + ' ' + className;
  }

  function removeClass(element, className) {
    if (!element) { return; }
    element.className = element.className.replace(className, '');
  }

  /**
   * Instagram Feed
   * @type Instafeed
   */
  if($('#instafeed').length > 0) {
      const feed = new Instafeed({
        get: 'user',
        userId: '4788727853',
        tagName: 'madabouthair.online',
        clientId: 'fdbb9e6311d94cccb161d72568111729',
        accessToken: '4788727853.1677ed0.ffb8ddc3257f4edd9837b417e900becc',
        limit: 8,
        resolution: 'standard_resolution',
      });

      feed.run();
  }

  /**
   * Smooth scroll to #top
   */
  $("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });

  /**
   * Open all external links in a new window
   */
  $('a').not('[href*="mailto:"]').each(function () {
    var isInternalLink = new RegExp('/' + window.location.host + '/');
    if ( ! isInternalLink.test(this.href) ) {
      $(this).attr('target', '_blank');
    }
  });

  /**
   * Slider
   */
  if($('.Wallop').length > 0) {
    const wallopEl = document.querySelector('.Wallop');
    const slider = new Wallop(wallopEl);
    const paginationDots = Array.prototype.slice.call(document.querySelectorAll('.Wallop-dot'));
    const autoPlayMs = 3000;
    let nextTimeout;

    paginationDots.forEach(function (dotEl, index) {
      dotEl.addEventListener('click', function() {
        slider.goTo(index);
      });
    });

    const loadNext = () => {
      var nextIndex = (slider.currentItemIndex + 1) % slider.allItemsArray.length;
      slider.goTo(nextIndex);
    };

    nextTimeout = setTimeout(function() { loadNext(); }, autoPlayMs);

    slider.on('change', function(event) {
      removeClass(document.querySelector('.Wallop-dot--current'), 'Wallop-dot--current');
      addClass(paginationDots[event.detail.currentItemIndex], 'Wallop-dot--current');

      clearTimeout(nextTimeout);
      nextTimeout = setTimeout(function() { loadNext(); }, autoPlayMs);
    });
  }

});
