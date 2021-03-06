
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./bootstrap-hover-dropdown.min');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

// Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: 'body'
});

$('#navbar-collapse-1')
    .on('shown.bs.collapse', function () {
        $('#navbar-collapse-1').find('.dropdown').each(function () {
            $(this).addClass('open');

        });
    })
    .on('hidden.bs.collapse', function () {
        $('#navbar-collapse-1').find('.dropdown').each(function () {
            $(this).removeClass('open');

        });
    });
