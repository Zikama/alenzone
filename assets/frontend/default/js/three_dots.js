function three_dots(main_selector, selector, cb) {
    /**
     * @param main_selector = 'div#id'
     * @param selector = 'div p'
     */
    // Get the selector
    var p = $(selector);
    var params;
    // Get the main_selector height
    var divh = $(main_selector).height();

    while ($(p).outerHeight() > divh) {
        $(p).text(function(index, text) {
            return text.replace(/\W*\s(\S)*$/, '...');
        });
    }
    if (!main_selector && !selector || main_selector === null || selector === null) {
        console.error('TypeError: the three_dots requires atleast 2 parameters, null given');
        if (typeof cb === 'function') {
            params = cb();
            if (typeof params === 'object') {
                main_selector = params[0];
                selector = params[1];
                three_dots(main_selector, selector);
            }
        }
        return false;
    }

    if (typeof cb === 'function') {
        params = cb();
        if (typeof params === 'object') {
            main_selector = params[0];
            selector = params[1];
            three_dots(main_selector, selector);
        }
    }

    if (typeof main_selector === 'function') {
        main_selector();
    }

    if (typeof selector === 'function') {
        selector();
    }
}