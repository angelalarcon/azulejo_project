@extends('layouts.front')

@section('content')
<div class="container content">
    <h4 class="tab-title text-center">NUESTRO COMPROMISO</h4>
    <p>
        Azulejo Jewels es un orgulloso miembro de la familia Maniapure.<br>
        Maníapure promueve el desarrollo integral de la región de Maniapure, bajo un esquema de operación abierto al establecimiento de alianzas interinstitucionales que permitan la articulación de esfuerzos y recursos para mejorar la calidad de vida de los pobladores.
    </p>
    <p><strong>Tienen como objetivo:</strong></p>
    <ul>
        <li>
            Prestar servicios de atención médica, dental y sanitaria para colaborar con la mejora de las condiciones de salud de la población de la región.
        </li>
        <li>
            Promover los valores de responsabilidad individual y colectiva, la concepción del trabajo como un instrumento de mejoramiento social, al igual que la confianza en los esfuerzos personales para el mejoramiento personal y familiar.
        </li>
        <li>
            Desarrollar actividades para reforzar la educación formal con el propósito de contribuir con la mejora de la calidad de las escuelas básicas.
        </li>
        <li>
            Desarrollar programas de educación para el trabajo que permita la incorporación de los habitantes de la zona al mercado laboral en su misma zona de vivienda, tomando en cuenta el potencial de la región.
        </li>
        <li>
            Promover la reafirmación de valores culturales de la región de Maniapure.
        </li>
        <li>
            Estudiar la situación socioeconómica, medica-biológica, cultural y productiva de la región, para identificar maneras de intervenir adecuadamente en la solución de los problemas, al igual que para crear lineamientos que permitan medir el impacto y los resultados.
        </li>
    </ul>
    <p class="text-center big-font">
        Para más información:<br>
        <a class="green_link" href="www.maniapure.org" target="_blank"><strong>www.maniapure.org</strong></a>
    </p>
    <img src="{{ asset('img/our_img_1.jpg') }}" alt="www.maniapure.org" class="bordered_img">
</div>
@endsection