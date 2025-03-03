<?php

namespace Gabrielesbaiz\NovaCardMap;

use Laravel\Nova\Card;

class NovaCardMap extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-card-map';
    }

    public function height($height)
    {
        return $this->withMeta([
            'height' => $height,
        ]);
    }

    public function zoom($zoom)
    {
        return $this->withMeta([
            'zoom' => $zoom,
        ]);
    }

    public function geoJson($geoJson)
    {
        return $this->withMeta([
            'geoJson' => $geoJson,
        ]);
    }

    public function markerIcon($markerIcon, $markerIconSize = null, $markerIconAnchor = null)
    {
        return $this->withMeta([
            'markerIcon' => $markerIcon,
            'markerIconSize' => $markerIconSize,
            'markerIconAnchor' => $markerIconAnchor,
        ]);
    }

    public function type($type)
    {
        return $this->withMeta([
            'type' => $type,
        ]);
    }

    public function popup($popup)
    {
        return $this->withMeta([
            'popup' => $popup,
        ]);
    }

    public function point($latitude, $longitude)
    {
        return $this->withMeta([
            'latitude' => $latitude,
            'longitude' => $longitude,
        ]);
    }

    public function googleApiKey($googleApiKey)
    {
        return $this->withMeta([
            'googleApiKey' => $googleApiKey,
        ]);
    }

    public function googleMapType($googleMapType)
    {
        return $this->withMeta([
            'googleMapType' => $googleMapType,
        ]);
    }
}
