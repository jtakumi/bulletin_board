'use strict';

Vue.directive('preview-input', {
    bind: function bind(el, binding, vnode) {

        var isMultiple = el.getAttribute('multiple') === 'multiple';
        var expression = binding.expression;

        el.addEventListener('change', function (e) {

            vnode.context[expression] = isMultiple ? [] : null;
            var files = e.target.files;
            var fileCount = files.length;
            var loadedCount = 0;

            if (fileCount > 0) {

                for (var i = 0; i < fileCount; i++) {

                    var file = files[i];
                    var reader = new FileReader();
                    reader.onload = function (e) {

                        var dataURL = e.target.result;

                        if (isMultiple) {

                            vnode.context[expression].push(dataURL);
                        } else {

                            vnode.context[expression] = dataURL;
                        }

                        loadedCount++;

                        if (loadedCount === fileCount) {

                            el.dispatchEvent(new Event('ready'));
                        }
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
    }
});