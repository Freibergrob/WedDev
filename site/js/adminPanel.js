var baseUrl = window.location.href.split("site")[0] + "site/";
var imageurl = baseUrl + "images/";
var cssUrl = baseUrl + "css/aboutUsPage.css";

tinymce.init({
    selector: ".save",
    plugins: "lists advlist table autolink save anchor preview image advcode link textcolor colorpicker",
    toolbar: "undo redo | styleselect | bold italic forecolor backcolor fontsizeselect | alignleft aligncenter alignright alignjustify | numlist bullist | link | table | image | anchor | code preview save",
    width: 800,
    height: 300,
    image_prepend_url: imageurl,
    default_link_target: "_blank",
    fontsize_formats: "8pt 10pt 12pt 14pt 16pt 18pt 24pt 36pt",
    content_css : cssUrl
});
