<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    ...
    <!-- Include the app.js file -->
    <script src="{{ mix('js/app.js') }}" defer></script>
  </head>
  <body>
    <!-- Include your App Component -->
    <my-app></my-app>
    <my-test-component></my-test-component>
  </body>
</html>