@component('mail::message')
# Hola {{$author->name}} 
{{$question->user->name}} te ha hecho un comentario en un uno de tus posts desde la plataforma de RecursosEducativos Digitales en Linea.
@component('mail::panel')
{!!$question->body!!} 
@endcomponent
{{$question->user->email}}
@endcomponent