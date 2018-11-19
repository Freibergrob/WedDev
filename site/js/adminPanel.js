var imageurl = window.location.href.split("site")[0] + "site/images/";

tinymce.init({
    selector: ".save",
    plugins: "lists advlist table autolink save anchor preview image advcode link",
    toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | numlist bullist | link | table | image | anchor | code preview save",
    width: 800,
    height: 300,
    image_prepend_url: imageurl
});
