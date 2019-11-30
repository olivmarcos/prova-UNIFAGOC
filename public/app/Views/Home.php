<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

  <link rel="stylesheet" href="<?= ASSET ?>">

</head>
<body>

<label>Nome:</label>
<select name="" id="selUser"></select>

<script>
$(document).ready(function(){

$("#selUser").select2({
   ajax: {
     url: "/select",
     type: "get",
     dataType: 'json',
     delay: 250,
     data: function (params) {
        return {
           searchTerm: params.term // search term
        };
     },
     processResults: function (response) {
        return {
           results: response
        };
     },
     cache: true
   }
});
});
</script>

</body>
</html>