/**
 * Packages
 */
import tether from 'tether';
global.Tether = tether;
const Instafeed = require("instafeed.js");
import scroller from 'scrollpos-styler';
require('bootstrap');

$(document).ready(function($) {

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
});
