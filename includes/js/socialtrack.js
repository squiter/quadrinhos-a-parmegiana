var _gaq = _gaq || [];

// GA Integration - Facebook

FB.Event.subscribe('edge.create', function(targetUrl) {
  _gaq.push(['_trackSocial', 'facebook', 'like', targetUrl]);
});

FB.Event.subscribe('edge.remove', function(targetUrl) {
  _gaq.push(['_trackSocial', 'facebook', 'unlike', targetUrl]);
});

// GA Integration - Twitter
// TODO: Acertar o get de URL quando você twita da index

function extractParamFromUri(uri, paramName) {
  if (!uri) {
    return;
  }
  var regex = new RegExp('[\\?&#]' + paramName + '=([^&#]*)');
  var params = regex.exec(uri);
  if (params != null) {
    return unescape(params[1]);
  }
  return;
}

function trackTwitter(intent_event) {
  if (intent_event) {
    var opt_pagePath;
    if (intent_event.target && intent_event.target.nodeName == 'IFRAME') {
          opt_target = extractParamFromUri(intent_event.target.src, 'url');
    }
    _gaq.push(['_trackSocial', 'twitter', 'tweet', opt_pagePath]);
  }
}

//Wrap event bindings - Wait for async js to load
twttr.ready(function (twttr) {
  //event bindings
  twttr.events.bind('tweet', trackTwitter);
});
