SimplePixel = function(simple_image, x, y) {
    __SimpleImageUtilities.funCheck('SimplePixel', 3, arguments.length);
    this.container = simple_image;
    this.x = x;
    this.y = y;
};

SimplePixel.prototype = {
    constructor: SimplePixel,
    getX: function() {
        __SimpleImageUtilities.funCheck('getX', 0, arguments.length);
        return this.x;
    },
    getY: function() {
        __SimpleImageUtilities.funCheck('getY', 0, arguments.length);
        return this.y;
    },
    getRed: function() {
        __SimpleImageUtilities.funCheck('getRed', 0, arguments.length);
        return this.container.getRed(this.x, this.y);
    },
    getGreen: function() {
        __SimpleImageUtilities.funCheck('getGreen', 0, arguments.length);
        return this.container.getGreen(this.x, this.y);
    },
    getBlue: function() {
        __SimpleImageUtilities.funCheck('getBlue', 0, arguments.length);
        return this.container.getBlue(this.x, this.y);
    },
    getAlpha: function() {
        __SimpleImageUtilities.funCheck('getAlpha', 0, arguments.length);
        return this.container.getAlpha(this.x, this.y);
    },
    setRed: function(val) {
        __SimpleImageUtilities.funCheck('setRed', 1, arguments.length);
        this.container.setRed(this.x, this.y, val);
    },
    setGreen: function(val) {
        __SimpleImageUtilities.funCheck('setGreen', 1, arguments.length);
        this.container.setGreen(this.x, this.y, val);
    },
    setBlue: function(val) {
        __SimpleImageUtilities.funCheck('setBlue', 1, arguments.length);
        this.container.setBlue(this.x, this.y, val);
    },
    setAlpha: function(val) {
        __SimpleImageUtilities.funCheck('setAlpha', 1, arguments.length);
        this.container.setAlpha(this.x, this.y, val);
    },
    setAllFrom: function(pixel) {
        __SimpleImageUtilities.funCheck('setAllFrom', 1, arguments.length);
        this.setRed(pixel.getRed());
        this.setGreen(pixel.getGreen());
        this.setBlue(pixel.getBlue());
        this.setAlpha(pixel.getAlpha());
    },
    toString: function() {
        return 'r:' + this.getRed() + ' g:' + this.getGreen() + ' b:' + this.getBlue();
    },
    getString: function() {
        return this.toString();
    }
};

SimpleImage = function() {
    if (arguments.length < 0 || arguments.length > 2) {
        __SimpleImageUtilities.funCheck('SimpleImage', 1, arguments.length);
        return null;
    }
    var funMap = [
        function() {
            return __SimpleImageUtilities.EMPTY_IMAGE;
        },
        function(source) {
            if (source instanceof HTMLImageElement) {
                return source;
            } else if (typeof source == 'string') {
                return __SimpleImageUtilities.makeHTMLImageFromURL(source, this);
            } else if (source instanceof HTMLInputElement && source.type == 'file') {
                return __SimpleImageUtilities.makeHTMLImageFromInput(source.files[0], this);
            } else if (source instanceof SimpleImage) {
                return source.canvas;
            } else if (source instanceof HTMLCanvasElement) {
                return source;
            } else {
                __SimpleImageUtilities.throwError('Unrecognized value used to create a SimpleImage: ' + source);
            }
        },
        function(width, height) {
            if (width > 0 && height > 0) {
                return __SimpleImageUtilities.makeHTMLImageFromSize(width, height);
            } else {
                __SimpleImageUtilities.throwError('Unable to create a SimpleImage with a negative width or height [' + width + 'x' + height + ']');
            }
        }
    ];
    var htmlImage = funMap[arguments.length].apply(this, arguments);
    this.canvas = __SimpleImageUtilities.makeHTMLCanvas('SimpleImageCanvas');
    this.canvas.style.display = 'none';
    this.context = this.canvas.getContext('2d');
    this.imageData = null;
    if (htmlImage != null && (htmlImage instanceof HTMLCanvasElement || htmlImage.complete)) {
        this.__init(htmlImage);
    }
    this.ACCEPTED_FILES = 'image.*';
}

SimpleImage.prototype = {
    constructor: SimpleImage,
    complete: function() {
        return this.imageData != null;
    },
    getWidth: function() {
        __SimpleImageUtilities.funCheck('getWidth', 0, arguments.length);
        return this.width;
    },
    getHeight: function() {
        __SimpleImageUtilities.funCheck('getHeight', 0, arguments.length);
        return this.height;
    },
    getRed: function(x, y) {
        __SimpleImageUtilities.funCheck('getRed', 2, arguments.length);
        return this.imageData.data[this.__getIndex('getRed', x, y)];
    },
    getGreen: function(x, y) {
        __SimpleImageUtilities.funCheck('getGreen', 2, arguments.length);
        return this.imageData.data[this.__getIndex('getGreen', x, y) + 1];
    },
    getBlue: function(x, y) {
        __SimpleImageUtilities.funCheck('getBlue', 2, arguments.length);
        return this.imageData.data[this.__getIndex('getBlue', x, y) + 2];
    },
    getAlpha: function(x, y) {
        __SimpleImageUtilities.funCheck('getAlpha', 2, arguments.length);
        return this.imageData.data[this.__getIndex('getAlpha', x, y) + 3];
    },
    getPixel: function(x, y) {
        __SimpleImageUtilities.funCheck('getPixel', 2, arguments.length);
        __SimpleImageUtilities.rangeCheck(x, 0, this.getWidth(), 'getPixel', 'x', 'wide');
        __SimpleImageUtilities.rangeCheck(y, 0, this.getHeight(), 'getPixel', 'y', 'tall');
        return new SimplePixel(this, x, y);
    },
    setRed: function(x, y, value) {
        __SimpleImageUtilities.funCheck('setRed', 3, arguments.length);
        this.imageData.data[this.__getIndex('getRed', x, y)] = __SimpleImageUtilities.clamp(value);
    },
    setGreen: function(x, y, value) {
        __SimpleImageUtilities.funCheck('setGreen', 3, arguments.length);
        this.imageData.data[this.__getIndex('getGreen', x, y) + 1] = __SimpleImageUtilities.clamp(value);
    },
    setBlue: function(x, y, value) {
        __SimpleImageUtilities.funCheck('setBlue', 3, arguments.length);
        this.imageData.data[this.__getIndex('getBlue', x, y) + 2] = __SimpleImageUtilities.clamp(value);
    },
    setAlpha: function(x, y, value) {
        __SimpleImageUtilities.funCheck('setAlpha', 3, arguments.length);
        this.imageData.data[this.__getIndex('getAlpha', x, y) + 3] = __SimpleImageUtilities.clamp(value);
    },
    setPixel: function(x, y, pixel) {
        __SimpleImageUtilities.funCheck('setPixel', 3, arguments.length);
        __SimpleImageUtilities.rangeCheck(x, 0, this.getWidth(), 'setPixel', 'x', 'wide');
        __SimpleImageUtilities.rangeCheck(y, 0, this.getHeight(), 'setPixel', 'y', 'tall');
        this.setRed(x, y, pixel.getRed());
        this.setBlue(x, y, pixel.getBlue());
        this.setGreen(x, y, pixel.getGreen());
        this.setAlpha(x, y, pixel.getAlpha());
    },
    setSize: function(width, height) {
        __SimpleImageUtilities.funCheck('setSize', 2, arguments.length);
        width = Math.floor(width);
        height = Math.floor(height);
        if (width > 0 && height > 0) {
            __SimpleImageUtilities.flush(this.context, this.imageData);
            this.imageData = __SimpleImageUtilities.changeSize(this.canvas, width, height);
            this.width = width;
            this.height = height;
            this.canvas.width = width;
            this.canvas.height = height;
        } else {
            __SimpleImageUtilities.throwError('You tried to set the size of a SimpleImage to a negative width or height [' + width + 'x' + height + ']');
        }
    },
    drawTo: function(toCanvas) {
        if (this.imageData != null) {
            __SimpleImageUtilities.flush(this.context, this.imageData);
            toCanvas.width = this.getWidth();
            toCanvas.height = this.getHeight();
            toCanvas.getContext('2d').drawImage(this.canvas, 0, 0, toCanvas.width, toCanvas.height);
        } else {
            var myself = this;
            setTimeout(function() {
                myself.drawTo(toCanvas);
            }, 100);
        }
    },
    toArray: function() {
        __SimpleImageUtilities.funCheck('toArray', 0, arguments.length);
        var array = new Array();
        for (var y = 0; y < this.getHeight(); y++) {
            for (var x = 0; x < this.getWidth(); x++) {
                array.push(new SimplePixel(this, x, y));
            }
        }
        return array;
    },
    values: function() {
        __SimpleImageUtilities.funCheck('values', 0, arguments.length);
        return this.toArray();
    },
    pixels: function() {
        return this.values();
    },
    __init: function(img) {
        try {
            this.id = img.id;
            this.width = ('naturalWidth' in img) ? Math.max(img.naturalWidth, img.width) : img.width;
            this.height = ('naturalHeight' in img) ? Math.max(img.naturalHeight, img.height) : img.height;
            this.canvas.width = this.width;
            this.canvas.height = this.height;
            if (img instanceof HTMLCanvasElement) {
                var canvasData = img.getContext('2d').getImageData(0, 0, this.width, this.height);
                this.context.putImageData(canvasData, 0, 0);
            } else {
                this.context.drawImage(img, 0, 0, this.width, this.height);
            }
            this.imageData = this.context.getImageData(0, 0, this.width, this.height);
        } catch (err) {
            console.log(err);
            __SimpleImageUtilities.throwError('The name you used to create a SimpleImage was not correct: ' + img.id);
        }
    },
    __getIndex: function(funName, x, y) {
        __SimpleImageUtilities.rangeCheck(x, 0, this.getWidth(), funName, 'x', 'wide');
        __SimpleImageUtilities.rangeCheck(y, 0, this.getHeight(), funName, 'y', 'tall');
        return (Math.floor(x) + Math.floor(y) * this.getWidth()) * 4;
    }
};
var __SimpleImageUtilities = (function() {
    var EMPTY_IMAGE_DATA = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAQAAAAnZu5uAAAAAXNSR0IArs4c6QAAABVJREFUeJxiYPgPhyQwAQAAAP//AwCgshjoJhZxhgAAAABJRU5ErkJggg==';
    var globalCanvasCount = 0;
    function makeHTMLImage(url, name, simpleImage, loadFunc) {
        if (loadFunc == null) {
            loadFunc = function() {
                simpleImage.__init(this);
                console.log('loaded image: ' + simpleImage.id);
            }
        }
        var img = new Image();
        img.onload = loadFunc;
        img.src = url;
        img.id = name;
        img.style.display = 'none';
        return img;
    }
    return {
        EMPTY_IMAGE: makeHTMLImage(EMPTY_IMAGE_DATA, 'EMPTY', null, function() {}),
        makeHTMLCanvas: function(prefix) {
            var canvas = document.createElement('canvas');
            canvas.id = prefix + globalCanvasCount;
            canvas.style.display = 'none';
            canvas.innerHTML = 'Your browser does not support HTML5.'
            globalCanvasCount++;
            return canvas;
        },
        makeHTMLImageFromInput: function(file, simpleImage) {
            console.log('creating image: ' + file.name);
            var reader = new FileReader();
            reader.onload = function() {
                makeHTMLImage(this.result, file.name.substr(file.name.lastIndexOf('/') + 1), simpleImage);
            }
            reader.readAsDataURL(file);
            return null;
        },
        makeHTMLImageFromURL: function(url, simpleImage) {
            var name = url.substr(0, url.indexOf(';'));
            console.log('creating image: ' + name);
            if (url.substr(0, 4) != 'http') {
                return makeHTMLImage(url, name, simpleImage);
            } else {
                __SimpleImageUtilities.throwError('Unfortunately you cannot create a SimpleImage directly from a URL: ' + url);
            }
        },
        makeHTMLImageFromSize: function(width, height) {
            console.log('creating image: ' + width + 'x' + height);
            var img = __SimpleImageUtilities.EMPTY_IMAGE.cloneNode(true);
            img.width = width;
            img.height = height;
            return img;
        },
        changeSize: function(canvasOld, newWidth, newHeight) {
            var canvasNew = __SimpleImageUtilities.makeHTMLCanvas('setSize_');
            canvasNew.width = newWidth;
            canvasNew.height = newHeight;
            var contextNew = canvasNew.getContext('2d');
            contextNew.drawImage(canvasOld, 0, 0, newWidth, newHeight);
            return contextNew.getImageData(0, 0, newWidth, newHeight);
        },
        clamp: function(value) {
            return Math.max(0, Math.min(Math.floor(value), 255));
        },
        flush: function(context, imageData) {
            if (imageData != null) {
                context.putImageData(imageData, 0, 0, 0, 0, imageData.width, imageData.height);
            }
        },
        throwError: function(message) {
            throw new Error(message);
        },
        funCheck: function(funcName, expectedLen, actualLen) {
            if (expectedLen != actualLen) {
                var s1 = (actualLen == 1) ? '' : 's';
                var s2 = (expectedLen == 1) ? '' : 's';
                var message = 'You tried to call ' + funcName + ' with ' + actualLen + ' value' + s1 +
                    ', but it expects ' + expectedLen + ' value' + s2 + '.';
                __SimpleImageUtilities.throwError(message);
            }
        },
        rangeCheck: function(value, low, high, funName, coordName, size) {
            if (value < low || value >= high) {
                var message = 'You tried to call ' + funName + ' for a pixel with ' + coordName + '-coordinate of ' + value +
                    ' in an image that is only ' + high + ' pixels ' + size +
                    ' (valid ' + coordName + ' coordinates are ' + low + ' to ' + (high - 1) + ').';
                __SimpleImageUtilities.throwError(message);
            }
        }
    };
})();
