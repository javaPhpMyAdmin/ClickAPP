<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $table = 'anuncio';

    protected $primaryKey = 'CodAnuncio';

    public $timestamps = false;

    protected $fillable = [
        'CodigoAnunciante',
        'TipoAnuncio',
        'NombreAnuncio',
        'TextoAnuncio',
        'ColorAnuncio',
        'UrlImagen',
        'LinkAnuncio',
        'ValorAnuncio',
        'PagoAnuncio',
        'PagoReferido',
        'FechaInicio',
        'FechaFin',
        'Contrato',
        'EstadoAnuncio',
        'FechaCreado',
        'ImporteTotal'
    ];

    protected $guarded = [

    ];
}
