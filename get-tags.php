<?php

// Массив с тегами и их возможными атрибутами
const TAGS = ['a' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                      'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                      'translate', 'coords', 'download', 'href', 'hreflang', 'name', 'rel', 'rev',
                      'shape', 'target', 'type'],
              'abbr' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate'],
              'address' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                            'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                            'translate'],
              'area' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate', 'alt', 'coords', 'href', 'hreflang', 'nohref', 'shape', 'target',
                         'type'],
              'article' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                            'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                            'translate'],
              'aside' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate'],
              'audio' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'autoplay', 'controls', 'loop', 'preload', 'src'],
              'b' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                      'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                      'translate'],
              'base' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate', 'href', 'target'],
              'bdi' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate'],
              'bdo' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate'],
              'blockquote' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                               'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                               'translate', 'cite'],
              'body' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate', 'alink', 'background', 'bgcolor', 'bgproperties', 'bottommargin',
                         'leftmargin', 'link', 'rightmargin', 'scroll', 'text', 'topmargin', 'vlink'],
              'br' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate', 'clear'],
              'button' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                           'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                           'translate', 'autofocus', 'disabled', 'form', 'formaction', 'formenctype', 
                           'formmethod', 'formnovalidate', 'formtarget', 'name', 'type', 'value'],
              'canvas' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                           'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                           'translate', 'height', 'width'],
              'caption' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                            'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                            'translate'],
              'cite' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate'],
              'code' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate'],
              'col' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate', 'align', 'char', 'charoff', 'span', 'valign', 'width'],
              'colgroup' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                             'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                             'translate', 'align', 'char', 'charoff', 'span', 'valign', 'width'],
              'data' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate', 'value'],
              'datalist' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                             'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                             'translate'],
              'dd' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate'],
              'del' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate', 'cite', 'datetime'],
              'details' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                            'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                            'translate', 'open'],
              'dfn' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate'],
              'dialog' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                           'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                           'translate', 'open'],
              'div' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate', 'align'],
              'dl' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate'],
              'dt' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate'],
              'em' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate'],
              'embed' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'align', 'height', 'hidden', 'hspace', 'pluginspage', 'src', 'type',
                          'vspace', 'width'],
              'fieldset' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                             'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                             'translate', 'disabled', 'form', 'title'],
              'figcaption' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                               'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                               'translate'],
              'figure' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                           'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                           'translate'],
              'footer' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                           'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                           'translate'],
              'form' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate', 'accept-charset', 'action', 'autocomplete', 'enctype', 
                         'method', 'name', 'novalidate', 'target'],
              'h1' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate', 'align'],
              'h2' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                    'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                    'translate', 'align'],
              'h3' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                    'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                    'translate', 'align'],
              'h4' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                    'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                    'translate', 'align'],
              'h5' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate', 'align'],
              'h6' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate', 'align'],
              'head' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate', 'profile'],
              'header' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                           'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                           'translate'],
              'hr' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate', 'align', 'color', 'noshade', 'size', 'width'],
              'html' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate', 'manifest', 'xmlns'],
              'i' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                      'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                      'translate'],
              'iframe' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                           'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                           'translate', 'align', 'allowtransparency', 'frameborder', 'height',
                           'hspace', 'marginheight', 'marginwidth', 'name', 'sandbox', 'scrolling',
                           'seamless', 'src', 'srcdoc', 'vspace', 'width'],
              'img' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate', 'align', 'alt', 'border', 'height', 'hspace', 'ismap', 'longdesc', 
                        'lowsrc', 'src', 'vspace', 'width', 'usemap'],
              'input' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'accept', 'align', 'alt', 'autocomplete', 'autofocus', 'border',
                          'checked', 'disabled', 'form', 'formaction', 'formenctype', 'formmethod',
                          'formnovalidate', 'formtarget', 'list', 'max', 'maxlength', 'min', 'multiple',
                          'name', 'pattern', 'placeholder', 'readonly', 'required', 'size', 'src',
                          'type', 'value'],
              'ins' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate', 'cite', 'datetime'],
              'kbd' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate'],
              'label' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'for'],
              'legend' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                           'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                           'translate', 'align'],
              'li' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate', 'type', 'value'],
              'link' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate', 'charset', 'href', 'media', 'rel', 'sizes', 'type'],
              'main' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate'],
              'map' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate', 'name'],
              'mark' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate'],
              'meta' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate', 'charset', 'content', 'http-equiv', 'name', 'scheme'],
              'meter' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'value', 'min', 'max', 'low', 'high', 'optimum'],
              'nav' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate'],
              'noscript' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                             'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                             'translate'],
              'object' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                           'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                           'translate', 'align', 'archive', 'classid', 'code', 'codebase',
                           'codetype', 'data', 'height', 'hspace', 'type', 'vspace', 'width'],
              'ol' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate', 'type', 'reversed', 'start'],
              'optgroup' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                             'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                             'translate', 'disabled', 'label'],
              'option' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'disabled', 'label', 'selected', 'value'],
              'output' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'for', 'form', 'name'],
              'p' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                      'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                      'translate', 'align'],
              'param' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'name', 'type', 'value', 'valuetype'],
              'picture' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                            'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                            'translate', 'srcset', 'media', 'sizes', 'type'],
              'pre' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate'],
              'progress' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                             'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                             'translate', 'max', 'value'],
              'q' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                      'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                      'translate', 'cite'],
              'ruby' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate'],
              'rb' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate'],
              'rt' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate'],
              'rtc' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate'],
              'rp' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate'],
              's' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                      'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                      'translate'],
              'samp' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate'],
              'script' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'async', 'defer', 'language', 'src', 'type'],
              'section' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate'],
              'select' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'autofocus', 'disabled', 'form', 'multiple', 'name',
                          'required', 'size'],
              'small' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate'],
              'source' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                           'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                           'translate', 'media', 'src', 'type'],
              'span' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate'],
              'strong' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                           'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                           'translate'],
              'style' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'media', 'type'],
              'sub' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate'],
              'summary' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                            'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                            'translate'],
              'sup' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate'],
              'table' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'align', 'background', 'bgcolor', 'border', 'bordercolor', 'cellpadding',
                          'cellspacing', 'cols', 'frame', 'height', 'rules', 'summary', 'width'],
              'tbody' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'align', 'char', 'charoff', 'bgcolor', 'valign'],
              'td' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate', 'abbr', 'align', 'axis', 'background', 'bgcolor', 'bordercolor', 
                       'char', 'charoff', 'colspan', 'headers', 'height', 'nowrap', 'rowspan', 'scope',
                       'valign', 'width'],
              'template' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                             'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                             'translate'],
              'textarea' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                             'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                             'translate', 'autofocus', 'cols', 'disabled', 'form', 'maxlength', 'name', 
                             'placeholder', 'readonly', 'required', 'rows', 'wrap'],
              'tfoot' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'align', 'bgcolor', 'char', 'charoff', 'valign'],
              'th' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate', 'abbr', 'align', 'axis', 'background', 'bgcolor', 'bordercolor', 
                       'char', 'charoff', 'colspan', 'headers', 'height', 'nowrap', 'rowspan', 'scope',
                       'valign', 'width'],
              'thead' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'align', 'bgcolor', 'char', 'charoff', 'valign'],
              'time' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                         'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                         'translate', 'datetime', 'pubdate'],
              'title' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate'],
              'tr' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate', 'align', 'bgcolor', 'bordercolor', 'char', 'charoff', 'valign'],
              'track' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'kind', 'src', 'srclang', 'label', 'default'],
              'u' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                      'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                      'translate'],
              'ul' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                       'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                       'translate', 'type'],
              'var' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate'],
              'video' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                          'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                          'translate', 'autoplay', 'controls', 'height', 'loop', 'poster', 'preload',
                          'src', 'width'],
              'wbr' => ['accesskey', 'class', 'contenteditable', 'contextmenu', 'dir', 'draggable',
                        'dropzone', 'hidden', 'id', 'lang', 'spellcheck', 'style', 'tabindex', 'title',
                        'translate']];

/**
 * Функция, позволяющая получить список всех тегов с атрибутами и из значениями из html страницы
 * 
 * @param string $htmlFile Адрес файла
 * 
 * @return array Многомерный массив с результатом, в котором ключами верхнего уровня являются теги, а значениями - 
 *               ключи-атрибуты и массивы с их значениями
 */
function getHtmlTagsAndAttributes(string $htmlFile) : array
{
    if (!file_exists($htmlFile)) {
        echo 'Файл не найден';
        exit;
    }

    $doc = new DOMDocument;
    $doc->loadHTMLFile($htmlFile);

    $result = [];

    foreach (TAGS as $tagName => $attributes) {
        $tags = $doc->getElementsByTagName($tagName);

        if (count($tags) !== 0) {
            foreach ($tags as $tag) {
                foreach ($attributes as $attribute) {
                    if ($tag->hasAttribute($attribute)) {
                        $result[$tagName][$attribute][] = $tag->getAttribute($attribute);
                        $result[$tagName][$attribute] = array_unique($result[$tagName][$attribute]);
                    }
                }
            }
        }
    }

    return $result;
}

print_r(getHtmlTagsAndAttributes('index.html'));