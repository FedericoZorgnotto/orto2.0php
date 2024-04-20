@props(['theme'])

@if($theme == 'light')
    @vite(['resources/css/footerLight.css'])
@elseif($theme == 'dark')
    @vite(['resources/css/footerDark.css'])
@endif
<h3>ORTO 2.0 © 2024</h3>
