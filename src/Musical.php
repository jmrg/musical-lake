<?php

namespace MusicalLake;

/**
 * Class Musical
 * @package MusicalLake
 */
class Musical
{
    /**
     * Sequence sounds.
     *
     * @var array
     */
    private $sounds = [
        'brr'       => 'fiu',
        'fiu'       => 'cric-cric',
        'cric-cric' => 'brrah',
        'pep'       => 'birip',
        'birip'     => 'trri-trri',
        'trri-trri' => 'croac',
        'bri-bri'   => 'plop',
        'plop'      => 'cric-cric',
    ];

    /**
     * Return the remaining sounds given a specific sound.
     *
     * @param null $sound <Initial Sound>
     * @return array <Remaining sounds>
     */
    public function getSong($sound = null)
    {
        if (!array_key_exists($sound, $this->sounds)) {
            return [];
        }

        $sound = $this->sounds[$sound];
        return array_merge([$sound], $this->getSong($sound));
    }
}
