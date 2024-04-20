@props(['theme'])

@if($theme == 'light')
    @vite(['resources/css/footer/footerLight.css'])
@elseif($theme == 'dark')
    @vite(['resources/css/footer/footerDark.css'])
@endif
<h3>ORTO 2.0 © 2024</h3>
