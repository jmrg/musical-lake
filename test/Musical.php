<?php

namespace MusicalLake\Test;

use PHPUnit\Framework\TestCase;
use MusicalLake\Musical as MusicalModule;

/**
 * Class Musical
 * @package MusicalLake\Test
 */
class Musical extends TestCase
{
    /**
     * First song: brr, fiu, cric-cric, brrah.
     *
     * When given brr it should reproduce fiu, cric-cric, brrah
     * according to the first song.
     */
    public function testWhenGivenBrrItShouldReturnFiuCricCricBrrah()
    {
        $Musical = new MusicalModule();
        $sounds = $Musical->getSong('brr');

        $this->assertEquals(['fiu', 'cric-cric', 'brrah'], $sounds);
    }

    /**
     * Second song: pep, birip, trri-trri, croac.
     *
     * When given birip it should reproduce trri-trri, croac
     * according to the second song.
     */
    public function testWhenGivenBiripItShouldReturnTrriTrriCroac()
    {
        $Musical = new MusicalModule();
        $sounds = $Musical->getSong('birip');

        $this->assertEquals(['trri-trri', 'croac'], $sounds);
    }

    /**
     * Third song: bri-bri, plop, cric-cric, brrah.
     *
     * When given plop it should reproduce cric-cric, brrah
     * according to the third song.
     */
    public function testWhenGivenPlopItShouldReturnCricCricBrrah()
    {
        $Musical = new MusicalModule();
        $sounds = $Musical->getSong('plop');

        $this->assertEquals(['cric-cric', 'brrah'], $sounds);
    }

    /**
     * Song: pep, birip, trri-trri, croac.
     *
     * When given croac or brrah it shouldn't reproduce anything
     * according to all songs.
     */
    public function testWhenGivenCroacOrBrrahItShouldReturnAnything()
    {
        $Musical = new MusicalModule();

        $sounds = $Musical->getSong('croac');
        $this->assertEquals([], $sounds);

        $sounds = $Musical->getSong('brrah');
        $this->assertEquals([], $sounds);
    }

    /**
     * When given anything or something that there isn't
     * it should reproduce nothing.
     */
    public function testWhenGivenAnythingOrSomethingItShouldReturnNothing()
    {
        $Musical = new MusicalModule();

        $sounds = $Musical->getSong();
        $this->assertEquals([], $sounds);

        $sounds = $Musical->getSong('something');
        $this->assertEquals([], $sounds);
    }
}
