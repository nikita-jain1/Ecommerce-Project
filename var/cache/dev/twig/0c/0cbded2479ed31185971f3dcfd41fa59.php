<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PimcoreCore/Targeting/toolbar/toolbar_js.html.twig */
class __TwigTemplate_f57bfb5b9a543bcc64fb8b79d4a91b14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Targeting/toolbar/toolbar_js.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PimcoreCore/Targeting/toolbar/toolbar_js.html.twig"));

        // line 6
        ob_start();
        // line 7
        echo "<script>";
        // line 8
        ob_start();
        // line 9
        echo "(function (window, document, undefined) {
        'use strict';

        var util = {
            addEventListener: function (el, eventName, handler) {
                if (el.addEventListener) {
                    el.addEventListener(eventName, handler);
                } else {
                    el.attachEvent('on' + eventName, function () {
                        handler.call(el);
                    });
                }
            },

            removeEventListener: function (el, eventName, handler) {
                if (el.removeEventListener)
                    el.removeEventListener(eventName, handler);
                else
                    el.detachEvent('on' + eventName, handler);
            },

            addClass: function (el, className) {
                if (el.classList) {
                    el.classList.add(className);
                } else {
                    el.className += ' ' + className;
                }
            },

            hasClass: function (el, className) {
                if (el.classList) {
                    return el.classList.contains(className);
                } else {
                    return new RegExp('(^| )' + className + '( |\$)', 'gi').test(el.className);
                }
            },

            removeClass: function (el, className) {
                if (el.classList) {
                    el.classList.remove(className);
                } else {
                    el.className = el.className.replace(new RegExp('(^|\\\\b)' + className.split(' ').join('|') + '(\\\\b|\$)', 'gi'), ' ');
                }
            },

            featureDetect: (function () {
                /* most tests come from to modernizr (MIT license) - https://github.com/Modernizr/Modernizr/tree/master/feature-detects */
                var tests = {
                    localStorage: function () {
                        var v = 'test';

                        try {
                            localStorage.setItem(v, v);
                            localStorage.removeItem(v);

                            return true;
                        } catch (e) {
                            return false;
                        }
                    },

                    urlsearchparams: function() {
                        return 'URLSearchParams' in window;
                    },

                    arrayfrom: function() {
                        return 'from' in Array && 'function' === typeof Array.from;
                    }
                };

                var results = {};

                return function (type) {
                    if ('undefined' === typeof tests[type]) {
                        throw new Error('Test ' + type + ' is not defined');
                    }

                    if ('undefined' === typeof results[type]) {
                        results[type] = tests[type].call();
                    }

                    return results[type];
                };
            }())
        };

        util.addEventListener(document, 'DOMContentLoaded', function () {
            /* toolbar collapse */
            (function() {
                var trigger = document.querySelector('._ptgtb__trigger');
                if (!trigger) {
                    return;
                }

                var localStorageStateKey = 'pimcore/targeting/toolbar/displayState';
                var collapsedClass = '_ptgtb--collapsed';

                var toolbar = trigger.parentNode;

                var showToolbar = function(show) {
                    if (show) {
                        util.removeClass(toolbar, collapsedClass);
                    } else {
                        util.addClass(toolbar, collapsedClass);
                    }

                    if (util.featureDetect('localStorage')) {
                        localStorage.setItem(localStorageStateKey, show ? 'show' : 'collapse');
                    }
                };

                if (util.featureDetect('localStorage')) {
                    var state = localStorage.getItem(localStorageStateKey);

                    if (state) {
                        showToolbar('collapse' !== state);
                    }
                }

                util.addEventListener(trigger, 'click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    showToolbar(util.hasClass(toolbar, collapsedClass));
                });
            }());

            /* close icon */
            (function() {
                var close = document.querySelector('._ptgtb__toolbar-icon--close');

                util.addEventListener(close, 'click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    var selector = this.getAttribute('data-ptgtb-target');
                    if (!selector) {
                        return;
                    }

                    var toolbar = document.querySelector(selector);
                    if (toolbar) {
                        toolbar.parentNode.removeChild(toolbar);
                    }

                    /* delete cookie to disable toolbar */
                    document.cookie = 'pimcore_targeting_debug=; path=/'
                });
            }());

            /* collapsible form sections - set data attributes before collapse logic is executed */
            document.querySelectorAll('._ptgtb__override-form__collapse-section').forEach(function (section) {
                var parent = section.parentNode;
                util.addClass(parent, '_ptgtb__override-form__collapse-section-container');

                var children = Array.prototype.slice.call(parent.childNodes);

                var label = null;
                for (var i = 0; i < children.length; i++) {
                    if ('label' === children[i].tagName.toLowerCase()) {
                        label = children[i];
                        break;
                    }
                }

                if (!label) {
                    return;
                }

                util.addClass(label, '_ptgtb__collapse__trigger--block');
                label.setAttribute('data-ptgtb-toggle', 'collapse');
                label.setAttribute('data-ptgtb-target', '#' + section.id);
                label.setAttribute('data-ptgtb-collapse-default', 'collapse');
                label.setAttribute('data-ptgtb-collapse-store', 'overrideForm/' + section.id);
            });

            /* collapsible sections with support to store their state in local storage */
            document.querySelectorAll('[data-ptgtb-toggle=\"collapse\"]').forEach(function (trigger) {
                var targetSelector = trigger.getAttribute('data-ptgtb-target');
                if (!targetSelector) {
                    return;
                }

                var target = document.querySelector(targetSelector);
                if (!target) {
                    return;
                }

                /* define a state storage key if localStorage is available and */
                /* data-ptgtb-collapse-store is set */
                var stateStorageKey = null;
                if (util.featureDetect('localStorage')) {
                    stateStorageKey = trigger.getAttribute('data-ptgtb-collapse-store');
                    if (stateStorageKey) {
                        stateStorageKey = 'pimcore/targeting/toolbar/collapseState/' + stateStorageKey;
                    }
                }

                util.addClass(trigger, '_ptgtb__collapse__trigger');
                util.addClass(target, '_ptgtb__collapse__target');

                var arrow = document.createElement('span');
                util.addClass(arrow, '_ptgtb__collapse__arrow');

                /* show arrow only if data-ptgtb-arrow is not set to false */
                (function() {
                    var attribute = trigger.getAttribute('data-ptgtb-arrow');
                    if (null !== attribute && 'false' === attribute) {
                        return;
                    }

                    trigger.appendChild(arrow);
                }());

                var triggerCollapsedClass = '_ptgtb__collapse__trigger--collapsed';
                var targetCollapsedClass = '_ptgtb__collapse--collapsed';
                var arrowCollapsedClass = '_ptgtb__collapse__arrow--collapsed';

                var toggle = function (state, updateStore) {
                    if (state) {
                        arrow.innerHTML = '▼';
                        util.removeClass(trigger, triggerCollapsedClass);
                        util.removeClass(arrow, arrowCollapsedClass);
                        util.removeClass(target, targetCollapsedClass);
                    } else {
                        arrow.innerHTML = '▶';
                        util.addClass(trigger, triggerCollapsedClass);
                        util.addClass(arrow, arrowCollapsedClass);
                        util.addClass(target, targetCollapsedClass);
                    }

                    if (updateStore && stateStorageKey) {
                        localStorage.setItem(stateStorageKey, state ? 'show' : 'collapse');
                    }
                };

                /* use stored state if defined and there is a stored state */
                var storedState = null;
                if (stateStorageKey) {
                    if (storedState = localStorage.getItem(stateStorageKey)) {
                        toggle('collapse' !== storedState);
                    }
                }

                if (!storedState) {
                    var defaultState = trigger.getAttribute('data-ptgtb-collapse-default');

                    /* use default state if defined and no stored state was set */
                    if (defaultState) {
                        toggle('collapse' !== defaultState);
                    } else {
                        /* initialize arrow state from target state */
                        toggle(!util.hasClass(target, targetCollapsedClass));
                    }
                }

                util.addEventListener(trigger, 'click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    toggle(util.hasClass(target, targetCollapsedClass), true);
                });
            });

            /* override form */
            (function() {
                var form = document.querySelector('._ptgtb__override-form');
                if (!form) {
                    return;
                }

                util.addEventListener(form, 'submit', function(e) {
                    /* disable empty submits to omit them from form data */
                    var inputs = document.querySelectorAll('._ptgtb__override-form input, ._ptgtb__override-form select, ._ptgtb__override-form textarea');
                    inputs.forEach(function(input) {
                        if (0 === input.value.length) {
                            input.disabled = true;
                        }
                    });
                });

                /* handle reset button only in browsers supporting URLSearchParams and Array.from */
                if (!util.featureDetect('urlsearchparams') || !util.featureDetect('arrayfrom')) {
                    return;
                }

                var resetButton = form.querySelector('button[type=\"reset\"]');
                if (!resetButton) {
                    return;
                }

                util.removeClass(resetButton, '_ptgtb--hidden');
                util.addEventListener(resetButton, 'click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    var prefix = '_ptg_overrides';
                    var urlParams = new URLSearchParams(window.location.search);
                    var keys = Array.from(urlParams.keys());

                    for (var i = 0; i < keys.length; i++) {
                        if (keys[i].substr(0, prefix.length) === prefix) {
                            urlParams.delete(keys[i]);
                        }
                    }

                    if (Array.from(urlParams.keys()).length > 0) {
                        window.location.search = urlParams.toString();
                    } else {
                        var uri = window.location.toString();
                        if (uri.indexOf('?') > 0) {
                            window.location.href = uri.substring(0, uri.indexOf('?'));
                        }
                    }
                });
            }());
        });
    }(window, document));";
        
; echo trim(str_replace("
", '', ob_get_clean()));
        // line 328
        echo "</script>";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo twig_spaceless($___internal_parse_2_);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PimcoreCore/Targeting/toolbar/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 6,  373 => 328,  51 => 9,  49 => 8,  47 => 7,  45 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    CAUTION: The pimcoreassetcompress tag just blindly strips all newlines from the generated code. This means you can't
    use // comments here as they would break the generated code. Use /* */ comments if needed or refactor the \"minifying\"
    to use a decent JS processor such as uglify or webpack.
#}
{%- apply spaceless -%}
<script>
    {%- pimcoreassetcompress -%}
    (function (window, document, undefined) {
        'use strict';

        var util = {
            addEventListener: function (el, eventName, handler) {
                if (el.addEventListener) {
                    el.addEventListener(eventName, handler);
                } else {
                    el.attachEvent('on' + eventName, function () {
                        handler.call(el);
                    });
                }
            },

            removeEventListener: function (el, eventName, handler) {
                if (el.removeEventListener)
                    el.removeEventListener(eventName, handler);
                else
                    el.detachEvent('on' + eventName, handler);
            },

            addClass: function (el, className) {
                if (el.classList) {
                    el.classList.add(className);
                } else {
                    el.className += ' ' + className;
                }
            },

            hasClass: function (el, className) {
                if (el.classList) {
                    return el.classList.contains(className);
                } else {
                    return new RegExp('(^| )' + className + '( |\$)', 'gi').test(el.className);
                }
            },

            removeClass: function (el, className) {
                if (el.classList) {
                    el.classList.remove(className);
                } else {
                    el.className = el.className.replace(new RegExp('(^|\\\\b)' + className.split(' ').join('|') + '(\\\\b|\$)', 'gi'), ' ');
                }
            },

            featureDetect: (function () {
                /* most tests come from to modernizr (MIT license) - https://github.com/Modernizr/Modernizr/tree/master/feature-detects */
                var tests = {
                    localStorage: function () {
                        var v = 'test';

                        try {
                            localStorage.setItem(v, v);
                            localStorage.removeItem(v);

                            return true;
                        } catch (e) {
                            return false;
                        }
                    },

                    urlsearchparams: function() {
                        return 'URLSearchParams' in window;
                    },

                    arrayfrom: function() {
                        return 'from' in Array && 'function' === typeof Array.from;
                    }
                };

                var results = {};

                return function (type) {
                    if ('undefined' === typeof tests[type]) {
                        throw new Error('Test ' + type + ' is not defined');
                    }

                    if ('undefined' === typeof results[type]) {
                        results[type] = tests[type].call();
                    }

                    return results[type];
                };
            }())
        };

        util.addEventListener(document, 'DOMContentLoaded', function () {
            /* toolbar collapse */
            (function() {
                var trigger = document.querySelector('._ptgtb__trigger');
                if (!trigger) {
                    return;
                }

                var localStorageStateKey = 'pimcore/targeting/toolbar/displayState';
                var collapsedClass = '_ptgtb--collapsed';

                var toolbar = trigger.parentNode;

                var showToolbar = function(show) {
                    if (show) {
                        util.removeClass(toolbar, collapsedClass);
                    } else {
                        util.addClass(toolbar, collapsedClass);
                    }

                    if (util.featureDetect('localStorage')) {
                        localStorage.setItem(localStorageStateKey, show ? 'show' : 'collapse');
                    }
                };

                if (util.featureDetect('localStorage')) {
                    var state = localStorage.getItem(localStorageStateKey);

                    if (state) {
                        showToolbar('collapse' !== state);
                    }
                }

                util.addEventListener(trigger, 'click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    showToolbar(util.hasClass(toolbar, collapsedClass));
                });
            }());

            /* close icon */
            (function() {
                var close = document.querySelector('._ptgtb__toolbar-icon--close');

                util.addEventListener(close, 'click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    var selector = this.getAttribute('data-ptgtb-target');
                    if (!selector) {
                        return;
                    }

                    var toolbar = document.querySelector(selector);
                    if (toolbar) {
                        toolbar.parentNode.removeChild(toolbar);
                    }

                    /* delete cookie to disable toolbar */
                    document.cookie = 'pimcore_targeting_debug=; path=/'
                });
            }());

            /* collapsible form sections - set data attributes before collapse logic is executed */
            document.querySelectorAll('._ptgtb__override-form__collapse-section').forEach(function (section) {
                var parent = section.parentNode;
                util.addClass(parent, '_ptgtb__override-form__collapse-section-container');

                var children = Array.prototype.slice.call(parent.childNodes);

                var label = null;
                for (var i = 0; i < children.length; i++) {
                    if ('label' === children[i].tagName.toLowerCase()) {
                        label = children[i];
                        break;
                    }
                }

                if (!label) {
                    return;
                }

                util.addClass(label, '_ptgtb__collapse__trigger--block');
                label.setAttribute('data-ptgtb-toggle', 'collapse');
                label.setAttribute('data-ptgtb-target', '#' + section.id);
                label.setAttribute('data-ptgtb-collapse-default', 'collapse');
                label.setAttribute('data-ptgtb-collapse-store', 'overrideForm/' + section.id);
            });

            /* collapsible sections with support to store their state in local storage */
            document.querySelectorAll('[data-ptgtb-toggle=\"collapse\"]').forEach(function (trigger) {
                var targetSelector = trigger.getAttribute('data-ptgtb-target');
                if (!targetSelector) {
                    return;
                }

                var target = document.querySelector(targetSelector);
                if (!target) {
                    return;
                }

                /* define a state storage key if localStorage is available and */
                /* data-ptgtb-collapse-store is set */
                var stateStorageKey = null;
                if (util.featureDetect('localStorage')) {
                    stateStorageKey = trigger.getAttribute('data-ptgtb-collapse-store');
                    if (stateStorageKey) {
                        stateStorageKey = 'pimcore/targeting/toolbar/collapseState/' + stateStorageKey;
                    }
                }

                util.addClass(trigger, '_ptgtb__collapse__trigger');
                util.addClass(target, '_ptgtb__collapse__target');

                var arrow = document.createElement('span');
                util.addClass(arrow, '_ptgtb__collapse__arrow');

                /* show arrow only if data-ptgtb-arrow is not set to false */
                (function() {
                    var attribute = trigger.getAttribute('data-ptgtb-arrow');
                    if (null !== attribute && 'false' === attribute) {
                        return;
                    }

                    trigger.appendChild(arrow);
                }());

                var triggerCollapsedClass = '_ptgtb__collapse__trigger--collapsed';
                var targetCollapsedClass = '_ptgtb__collapse--collapsed';
                var arrowCollapsedClass = '_ptgtb__collapse__arrow--collapsed';

                var toggle = function (state, updateStore) {
                    if (state) {
                        arrow.innerHTML = '▼';
                        util.removeClass(trigger, triggerCollapsedClass);
                        util.removeClass(arrow, arrowCollapsedClass);
                        util.removeClass(target, targetCollapsedClass);
                    } else {
                        arrow.innerHTML = '▶';
                        util.addClass(trigger, triggerCollapsedClass);
                        util.addClass(arrow, arrowCollapsedClass);
                        util.addClass(target, targetCollapsedClass);
                    }

                    if (updateStore && stateStorageKey) {
                        localStorage.setItem(stateStorageKey, state ? 'show' : 'collapse');
                    }
                };

                /* use stored state if defined and there is a stored state */
                var storedState = null;
                if (stateStorageKey) {
                    if (storedState = localStorage.getItem(stateStorageKey)) {
                        toggle('collapse' !== storedState);
                    }
                }

                if (!storedState) {
                    var defaultState = trigger.getAttribute('data-ptgtb-collapse-default');

                    /* use default state if defined and no stored state was set */
                    if (defaultState) {
                        toggle('collapse' !== defaultState);
                    } else {
                        /* initialize arrow state from target state */
                        toggle(!util.hasClass(target, targetCollapsedClass));
                    }
                }

                util.addEventListener(trigger, 'click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    toggle(util.hasClass(target, targetCollapsedClass), true);
                });
            });

            /* override form */
            (function() {
                var form = document.querySelector('._ptgtb__override-form');
                if (!form) {
                    return;
                }

                util.addEventListener(form, 'submit', function(e) {
                    /* disable empty submits to omit them from form data */
                    var inputs = document.querySelectorAll('._ptgtb__override-form input, ._ptgtb__override-form select, ._ptgtb__override-form textarea');
                    inputs.forEach(function(input) {
                        if (0 === input.value.length) {
                            input.disabled = true;
                        }
                    });
                });

                /* handle reset button only in browsers supporting URLSearchParams and Array.from */
                if (!util.featureDetect('urlsearchparams') || !util.featureDetect('arrayfrom')) {
                    return;
                }

                var resetButton = form.querySelector('button[type=\"reset\"]');
                if (!resetButton) {
                    return;
                }

                util.removeClass(resetButton, '_ptgtb--hidden');
                util.addEventListener(resetButton, 'click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    var prefix = '_ptg_overrides';
                    var urlParams = new URLSearchParams(window.location.search);
                    var keys = Array.from(urlParams.keys());

                    for (var i = 0; i < keys.length; i++) {
                        if (keys[i].substr(0, prefix.length) === prefix) {
                            urlParams.delete(keys[i]);
                        }
                    }

                    if (Array.from(urlParams.keys()).length > 0) {
                        window.location.search = urlParams.toString();
                    } else {
                        var uri = window.location.toString();
                        if (uri.indexOf('?') > 0) {
                            window.location.href = uri.substring(0, uri.indexOf('?'));
                        }
                    }
                });
            }());
        });
    }(window, document));
    {%- endpimcoreassetcompress -%}
</script>
{%- endapply -%}
", "@PimcoreCore/Targeting/toolbar/toolbar_js.html.twig", "/var/www/html/Eproject/ecomwebsite/vendor/pimcore/pimcore/bundles/CoreBundle/Resources/views/Targeting/toolbar/toolbar_js.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("apply" => 6, "pimcoreassetcompress" => 8);
        static $filters = array("spaceless" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['apply', 'pimcoreassetcompress'],
                ['spaceless'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
