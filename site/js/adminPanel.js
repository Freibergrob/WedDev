var baseUrl = window.location.href.split("site")[0] + "site/";
var imageurl = baseUrl + "images/";
var cssUrlAU = baseUrl + "css/aboutUsPage.css";
var cssUrlHP = baseUrl + "css/home.css";

var currentPage = "";
var currentSection = "";

window.addEventListener('load',function() {
    $(".pagebtn").each(function() {
        $(this).bind("click", displaySections);
    });
    $("[data-page]").each(function() {
        $(this).bind("click", displayEditor);
    });
});

tinymce.init({
    selector: ".aboutUsPage",
    plugins: "lists advlist table autolink save anchor preview image advcode link textcolor colorpicker",
    toolbar: "undo redo | styleselect | bold italic forecolor backcolor fontsizeselect | alignleft aligncenter alignright alignjustify | numlist bullist | link | table | image | anchor | code preview save",
    height: 300,
    image_prepend_url: imageurl,
    default_link_target: "_blank",
    fontsize_formats: "8pt 10pt 12pt 14pt 16pt 18pt 24pt 36pt",
    content_css : cssUrlAU
});

tinymce.init({
    selector: ".homePage",
    plugins: "lists advlist table autolink save anchor preview image advcode link textcolor colorpicker",
    toolbar: "undo redo | styleselect | bold italic forecolor backcolor fontsizeselect | alignleft aligncenter alignright alignjustify | numlist bullist | link | table | image | anchor | code preview save",
    height: 300,
    image_prepend_url: imageurl,
    default_link_target: "_blank",
    fontsize_formats: "8pt 10pt 12pt 14pt 16pt 18pt 24pt 36pt",
    content_css : cssUrlHP
});

function displaySections() {
    if (currentPage != "") {
        $("[data-page='" + currentPage + "']").each(function() {
            $(this).addClass('hideItem');
        });
    }
    $("[data-page='" + $(this).attr('id') + "']").each(function() {
        $(this).removeClass('hideItem');
    });
    if (currentPage != $(this).attr('id')) {
        $("[data-section]").each(function() {
            $(this).addClass('hideItem');
        });
        currentSection = "";
    }

    currentPage = $(this).attr('id');
}

function displayEditor() {
    if (currentSection != "") {
        $("[data-section='" + currentSection + "']").each(function() {
            $(this).addClass('hideItem');
        });
    }
    $("[data-section='" + $(this).attr('id') + "']").each(function() {
        $(this).removeClass('hideItem');
    });

    currentSection = $(this).attr('id');
}
