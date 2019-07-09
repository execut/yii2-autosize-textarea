(function () {
    $.widget("execut.TextareaWidget", {
        _create: function () {
            var t = this;
            t._initElements();
            t._initEvents();
        },
        _initElements: function () {
            var t = this,
                el = t.element,
                opts = t.options,
                hiddenParents = el.parents().filter(':hidden:last');
            if (hiddenParents.length) {
                hiddenParents.show();
            }

            el.autogrow(opts);
            if (hiddenParents.length) {
                hiddenParents.hide();
            }
        },
        _initEvents: function () {
            var t = this,
                el = t.element,
                opts = t.options;
        }
    });
}());