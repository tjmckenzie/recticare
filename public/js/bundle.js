(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

$(document).ready(function () {
    /**
     * Tabbed content allows for history.state faking.
     * URL changes to add data-tab value to url
     * If URL has a valid data-tab, remove that URL from the window.location.pathname
     */

    var current_url = window.location.pathname;

    //  urls current_url into array, removes empty indexes caused by leading or trailing slashes
    var url_parts = current_url.split('/').filter(Boolean);

    //  grabs last item in url array
    var url_last = url_parts.slice(-1).pop();

    //  Check if url_last is a valid data-tab
    //  If true, reset current_url to not include url_last
    //  This avoids creating an invalid URL ie. /overview/how-it-works
    if ($('ul.tabs li[data-tab="' + url_last + '"]').length) {
        var current_url = '/' + url_parts.splice(0, url_parts.length - 1).join('/');
    }

    $('ul.tabs li:not(".tabs-menu")').click(function () {
        var tab_id = $(this).attr('data-tab');

        // Changes URL/History without page reload
        history.pushState({}, null, current_url + '/' + tab_id);

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).parent("ul").removeClass("opened");
        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    });

    /**
     * Mobile Tabs
     */
    $(".tabs-menu").on("click", function (e) {
        var menu = $(this).parent("ul");
        console.log(menu);
        $(menu).addClass("opened");
        $(menu).find("li.current").removeClass("current");
    });

    /**
     * Mobile navigation toggle
     */
    $("#mobile-menu").on("click", function (e) {
        e.preventDefault();
        $(".centered-navigation-menu").slideToggle(function () {
            if ($(".centered-navigation-menu").is(":hidden")) {
                $(".centered-navigation-menu").removeAttr("style");
            }
        });
    });
});

},{}]},{},[1]);

//# sourceMappingURL=bundle.js.map
