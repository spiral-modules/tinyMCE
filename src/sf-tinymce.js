"use strict";

import sf from 'sf';//resolved by webpack's "externals"
import Tinymce from 'tinymce';

var SfTinymce = function (sf, node, options) {
    this._construct(sf, node, options);
};

/**
 * @lends sf.Form.prototype
 */
SfTinymce.prototype = Object.create(sf.core.BaseDOMConstructor.prototype);

/**
 * Name to register
 * @type {string}
 */
SfTinymce.prototype.name = "tinymce";

SfTinymce.prototype._construct = function (sf, node, options) {
    var that = this;
    this.init(sf, node, options);//call parent

    this.toolbarEl = this.node.querySelector('.quill-toolbar');//TODO
    this.editorEl = this.node.querySelector('.quill-editor');//TODO

    this.editor = new Quill(this.editorEl, { //TODO
        modules: {
            'toolbar': { container: this.toolbarEl },
            'link-tooltip': true
        },
        theme: 'snow'
    });

    if (this.options.value) this.editor.setHTML(this.options.value);

    this.editor.on('text-change', function() {
       that.save();
    });
    that.save();
};

/**
 * @override
 * @inheritDoc
 * @enum {string}
 */
SfTinymce.prototype.optionsToGrab  = {
    name: {
        value: "html",
        domAttr: "data-name"
    },
    value: {
        value: "",
        domAttr: "data-value"
    }
};

SfTinymce.prototype.save = function () {
    if (!this.input) {
        this.input = document.createElement("input");
        this.input.type = "hidden";
        this.input.name = this.options.name;
        this.node.appendChild(this.input);
    }
    this.input.value = this.editor.getHTML();
};

SfTinymce.prototype.die = function () {

};

export { SfTinymce as default };