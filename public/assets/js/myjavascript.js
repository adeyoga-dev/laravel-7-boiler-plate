//check apakah input kosong
function validateAndHighlightTextbox(idElement, actualData) {
    var data = $("#" + idElement).val();
    if (data === actualData) {
        $("#" + idElement).addClass("is-invalid");
    }
    $("#" + idElement).focus(function () {
        $("#" + idElement).removeClass("is-invalid");
    });
}

//untuk membuat highlight pada textbox
function highlightTextbox(idElement) {
    setTimeout(function () {
        $("#" + idElement).addClass("is-invalid");
    }, 500);
    setTimeout(function () {
        $("#" + idElement).removeClass("is-invalid");
    }, 1000);
    setTimeout(function () {
        $("#" + idElement).addClass("is-invalid");
    }, 1500);
    setTimeout(function () {
        $("#" + idElement).removeClass("is-invalid");
    }, 2000);
    setTimeout(function () {
        $("#" + idElement).addClass("is-invalid");
    }, 2500);
    $("#" + idElement).focus(function () {
        $("#" + idElement).removeClass("is-invalid");
    });
};

//fungsi tooltip
function tooltip(idElement, message) {
    tippy('#' + idElement, {
        content: message,
    });
}

//loop pesan error untuk membuat border ke textbox
function showInputErrors(errors) {
    var message;
    $.each(errors, function (inputName, errorMessage) {
        message = errorMessage;
        var input = $('[name="' + inputName + '"]');
        input.addClass('is-invalid');
        input.on("focus", function () {
            input.removeClass("is-invalid");
        });
    });
    alertPrompt.warn('<i class="fa-solid fa-triangle-exclamation"></i> &nbsp;&nbsp; ' + message);
}

//menghilangkan class is invalid pada semua inputan
function clearInputErrors() {
    $("input,select,textarea").removeClass("is-invalid");
}

//merubah nilai rgb ke hex
function rgbToHex(r, g, b) {
    var hex = "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
    return hex.toUpperCase();
}
function componentToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}

//cek jika data berbentuk json
function isValidJSON(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

function creataCountdown(start, end, duration, idElement) {
    if (end == 0) {
        const counterElement = $('#' + idElement);
        counterElement.text(end);
        return 0;
    }
    const range = end - start;
    const stepTime = Math.abs(Math.floor(duration / range));
    let current = start;
    const counterElement = $('#' + idElement);
    const timer = setInterval(function () {
        current += 1;
        counterElement.text(current);

        if (current === end) {
            clearInterval(timer);
        }
    }, stepTime);
}

//fungsi untuk memeriksa input kosong pada library quill
function isQuillEmpty(quill) {
    var quillText = quill.getText().trim();
    return quillText === '';
}

function ifUndefined(variabel) {
    if (typeof variabel === "undefined") {
        return "";
    }
    return variabel;
}

// Menangani peristiwa perubahan pada input file gambar
function imagePreview(idInput, idPreview) {
    $('#' + idInput).change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#' + idPreview).attr('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
}

//mengubah semua text menjadi kapital
function convertEveryLetterToUppercase(selector) {
    $("#" + selector).blur(function () {
        var text = $(this).val();
        var result = text.toUpperCase();
        $(this).val(result);
    });
}

//mengubah huruf pertama dari text menjadi kapital
function convertFirstLetterToUppercase(selector) {
    $("#" + selector).blur(function () {
        var text = $(this).val();
        var result = text.charAt(0).toUpperCase() + text.slice(1);
        $(this).val(result);
    });
}

// setiap awal huruf dari teks menjadi kapital
function convertFirstLetterOfEachWordToUppercase(selector) {
    $("#" + selector).blur(function () {
        var text = $(this).val();
        var splitStr = text.toLowerCase().split(' ');
        for (var i = 0; i < splitStr.length; i++) {
            splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
        }
        $(this).val(splitStr.join(' '));
    });
}
