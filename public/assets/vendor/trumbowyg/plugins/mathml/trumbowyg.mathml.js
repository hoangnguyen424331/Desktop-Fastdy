/* ===========================================================
 * trumbowyg.mathMl.js v1.0
 * MathML plugin for Trumbowyg
 * https://github.com/loclamor/Trumbowyg/tree/mathml-plugin/plugins/mathml
 * ===========================================================
 * Author : loclamor
 */

/* globals MathJax */
(function($) {
    'use strict';
    $.extend(true, $.trumbowyg, {
        langs: {
            en: {
                mathml: 'Insert Formulas',
                formulas: 'Formulas',
                inline: 'Inline'
            },
            fr: {
                mathml: 'Inserer une formule',
                formulas: 'Formule',
                inline: 'En ligne'
            },
            tr: {
                mathml: 'Formül Ekle',
                formulas: 'Formüller',
                inline: 'Satır içi'
            }
        },
        plugins: {
            mathml: {
                init: function(trumbowyg) {
                    var btnDef = {
                        fn: function() {
                            trumbowyg.saveRange();
                            var mathMLOptions = {
                                formulas: {
                                    label: trumbowyg.lang.formulas,
                                    required: true,
                                    value: ''
                                },
                                inline: {
                                    label: trumbowyg.lang.inline,
                                    attributes: {
                                        checked: true
                                    },
                                    type: 'checkbox',
                                    required: false,
                                }
                            };

                            var mathmlCallback = function(v) {
                                var delimitor = v.inline ? '$' : '$$';
                                if (trumbowyg.currentMathNode) {
                                    $(trumbowyg.currentMathNode).html(delimitor + ' ' + v.formulas + ' ' + delimitor).attr('formulas', v.formulas).attr('inline', (v.inline ? 'true' : 'false'));
                                } else {
                                    var html = '<span class="mathMlContainer" contenteditable="false" formulas="' + v.formulas + '" inline="' + (v.inline ? 'true' : 'false') + '" >' + delimitor + ' ' + v.formulas + ' ' + delimitor + '</span>';
                                    var node = $(html)[0];
                                    node.onclick = function(e) {
                                        trumbowyg.currentMathNode = this;
                                        mathMLOptions.formulas.value = $(this).attr('formulas');
                                        if ($(this).attr('inline') === "true") {
                                            mathMLOptions.inline.attributes.checked = true;
                                        } else {
                                            delete mathMLOptions.inline.attributes.checked;
                                        }
                                        trumbowyg.openModalInsert(trumbowyg.lang.mathml, mathMLOptions, mathmlCallback);
                                    };
                                    trumbowyg.range.deleteContents();
                                    trumbowyg.range.insertNode(node);
                                }

                                trumbowyg.currentMathNode = false;
                                MathJax.Hub.Queue(['Typeset', MathJax.Hub]);
                                return true;
                            };

                            mathMLOptions.formulas.value = trumbowyg.getRangeText();
                            mathMLOptions.inline.attributes.checked = true;
                            trumbowyg.openModalInsert(trumbowyg.lang.mathml, mathMLOptions, mathmlCallback);
                        }
                    };
                    trumbowyg.addBtnDef('mathml', btnDef);
                }
            }
        }
    });
})(jQuery);
