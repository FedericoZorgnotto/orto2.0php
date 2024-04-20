@props(['theme'])

@if($theme == 'light')
    @vite(['resources/css/footer/footerLight.css'])
    <h3>ORTO 2.0 © 2024</h3>
@elseif($theme == 'dark')
    @vite(['resources/css/footer/footerDark.css'])
    <h3>ORTO 2.0 © 2024</h3>
@endif
